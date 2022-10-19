<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BillingService
{
    protected $CI;
	protected $hospitalMaster;
    protected $roomCount;
    
    protected $patient_group_charges_with_discount = array(); //get patient group charges with discount for charges summary
	protected $patient_mandatory_discounts; //get patient mandatory discounts
	protected $miscellaneous_charges = array(); //store the summary of miscellaneous charges

    protected $entry;

	public function __construct()
	{
        $this->CI=&get_instance();
        $this->CI->load->model('BillingModel');
        $this->CI->load->model('EncounterModel');
        $this->CI->load->model('DoctorsOrderModel');
        $this->CI->load->model('AdmissionModel');
    }

    public function computeBill($enccode,$type,$entryby){
        $this->entry = $entryby;
        //get patient encounter
        $encounter = $this->CI->EncounterModel->byEncounter($enccode);
        //get patient account
        $patientAcct = $this->CI->BillingModel->accountInformation($enccode);
        //get phic
        $phic = $this->CI->BillingModel->_phicComputation($enccode);
        //get the confinement period
        $confinePeriod = array();
        $admissionLog = null;
        if($encounter->toecode == 'ADM'){
            $admissionLog = $this->CI->AdmissionModel->admissionLog($enccode);
            $confinePeriod['admdate'] = $admissionLog->admdate;
            if($admissionLog->disdate ==  NULL || $admissionLog->disdate == "" || empty($admissionLog->disdate)){
                $dischargeOrder = $this->CI->DoctorsOrderModel->getDischargeOrder($enccode);
                if(count($dischargeOrder) == 0){
                    $confinePeriod['disdate'] = date('Y-m-d h:i:s');
                }
            }else{
                $confinePeriod['disdate'] = $admissionLog->disdate;
            }
        }
        //get setup
        $billingSetup = $this->CI->BillingModel->getBillingSetup($confinePeriod['admdate']);

        //get patient charges
        $patietCharges = $this->CI->BillingModel->finalBill($enccode, $confinePeriod['admdate']);

        $patient_group_charges = array();//store the amounts of grouping of charges

        //get all the mandatory discounts
		$discounts = $this->CI->BillingModel->getDiscounts($enccode,'P',true,'');

        //get the patient occupied rooms
		$room = $this->CI->BillingModel->getPatientRoom($enccode);

        //compute the room charges
		$roomDetails = $this->_getRoomDetails($room,$confinePeriod,$discounts,$billingSetup);

        //merge the patient charges and room charges
		$patietCharges = array_merge($patietCharges,$roomDetails);

        $chargeDate = array_column($patietCharges,'pcchrgdte');
		array_multisort($chargeDate,SORT_ASC,$patietCharges);

        $total_itemdiscount = 0;
        foreach ($patietCharges as $rows) {
            $total_itemdiscount = 0;
			//start get the total item discount
			$pcchrgamt = $rows['pcchrgamt'];
			if($pcchrgamt == NULL){
				$pcchrgamt = 0;
			}
			if(count($discounts) > 0){
                $total_itemdiscount = 0;
				foreach($discounts as $discount){
					$discount_amount = $discount->pdamt;
					//$discounted_amount =  $rows['pcchrgamt'] * ($discount_amount/100);
					$discounted_amount =  $pcchrgamt * ($discount_amount/100);
					$total_itemdiscount = $total_itemdiscount + $discounted_amount;
					if(isset($discount->discamount)){
						$discount->discamount = $discount->discamount + $discounted_amount;
					}else{
						$discount->{'discamount'} = $discounted_amount;
					}	
				}
				$this->patient_mandatory_discounts = $discounts;
			}
			//end get the total item discount

			//start get all the miscellaneous charges to be used in the summary
			if($rows['chrgtable'] == 'MISCE'){
				if(array_key_exists($rows['chargname'],$this->miscellaneous_charges)){
					$this->miscellaneous_charges[$rows['chargname']]['pcchrgamt'] = $this->miscellaneous_charges[$rows['chargname']]['pcchrgamt'] + $rows['pcchrgamt']; 
				}else{
					$this->miscellaneous_charges[$rows['chargname']] = $rows; 
				}
			}
			//start get all the miscellaneous charges to be used in the summary

			//start generate the patient group charges
			if(array_key_exists($rows['chargcode'],$patient_group_charges)){
				$charge_array = $patient_group_charges[$rows['chargcode']];
				$charge_array['grpamount'] = $charge_array['grpamount'] + $pcchrgamt;//$rows['pcchrgamt'];
				$patient_group_charges[$rows['chargcode']] = $charge_array;
				$charge_array = $this->patient_group_charges_with_discount[$rows['chargcode']];
				$charge_array['discamt'] = $charge_array['discamt'] + $total_itemdiscount;
				$this->patient_group_charges_with_discount[$rows['chargcode']] = $charge_array;
			}else{
				$charge_array = array(
					"enccode"=>$enccode,
					"hpercode"=>$encounter->hpercode,
					"acctno"=>$patientAcct->paacctno,
					"chargcode"=>$rows['chargcode'],
					"grpamount"=>$pcchrgamt,
					"totamtpaid"=>"",
					"grpbalance"=>"",
					"dteupd1"=>date("Y-m-d h:i:s"),
					"tmeupd1"=>date("Y-m-d h:i:s"),
					"hstatus"=>"A",
					"hlock"=>"N",
					"datemod"=> null,
					"updsw"=>"P",
					"confdl"=>"N",
					"entryby"=>$this->entry	
				);
				$patient_group_charges[$rows['chargcode']] = $charge_array;
				$charge_array['discamt'] = $total_itemdiscount;
				$this->patient_group_charges_with_discount[$rows['chargcode']] = $charge_array;
			}
		}
		//end generate the patient group charges

		//start save the patient group charges
		$ids = array('enccode'=> $enccode);
		$this->CI->BillingModel->delete('hpatgrpchrg',$ids);
		
		foreach ($patient_group_charges as $group_charge) {
			$ids = array(
				'enccode' => $group_charge['enccode'],
				'acctno' => $group_charge['acctno'],
				'chargcode' => $group_charge['chargcode']
				);
		if($this->CI->BillingModel->checkExists($ids,'hpatgrpchrg')){
				$group_charge['datemod'] = date("Y-m-d h:i:s");
				$group_charge['entryby'] = $this->entry;
				$result = $this->CI->BillingModel->update('hpatgrpchrg',$group_charge,$ids);
			}else{
				$result = $this->CI->BillingModel->insert($group_charge,'hpatgrpchrg');
			}
		}
		//end save the patient group charges

        $totchrm = 0;
		$totchdm = 0;
		$totchxr = 0; 
		$totchor = 0; 
		$totchot = 0;

        $groupCharges = $this->CI->BillingModel->getPatientGroupCharges($enccode);
		
        $misce = array();
		$total_misc = 0;
		$total_hcifees = 0;
		$mandatory_discamount_misc = 0;
		foreach($groupCharges as $groupCharge){
			if($groupCharge->chrgtable == 'MISCE'){
				$misce[] = $groupCharge;
				$total_misc = $total_misc + $groupCharge->grpamount;
				$total_hcifees = $total_hcifees + $groupCharge->grpamount;
				$mandatory_discamount = 0;
				if(array_key_exists($groupCharge->chargcode,$this->patient_group_charges_with_discount)){
					$mandatory_discamount_misc = $mandatory_discamount_misc + $this->patient_group_charges_with_discount[$groupCharge->chargcode]['discamt'];
				}

				if($groupCharge->bentypcod == 'ROBOR'){
					$totchrm = $totchrm + $groupCharge->grpamount;
				}
	
				if($groupCharge->bentypcod == 'DRUME'){
					$totchdm = $totchdm + $groupCharge->grpamount;
				}
	
				if($groupCharge->bentypcod == 'XRAYL'){
					$totchxr = $totchxr + $groupCharge->grpamount;
				}
	
				if($groupCharge->bentypcod == 'OTHOS'){
					$totchot = $totchot + $groupCharge->grpamount;
				}
	
				if($groupCharge->bentypcod == 'ORFEE'){
					$totchor = $totchor + $groupCharge->grpamount;
				}
				continue;
			}
			
			if($groupCharge->bentypcod == 'ROBOR'){
				$totchrm = $totchrm + $groupCharge->grpamount;
			}

			if($groupCharge->bentypcod == 'DRUME'){
				$totchdm = $totchdm + $groupCharge->grpamount;
			}

			if($groupCharge->bentypcod == 'XRAYL'){
				$totchxr = $totchxr + $groupCharge->grpamount;
			}

			if($groupCharge->bentypcod == 'OTHOS'){
				$totchot = $totchot + $groupCharge->grpamount;
			}

			if($groupCharge->bentypcod == 'ORFEE'){
				$totchor = $totchor + $groupCharge->grpamount;
			}

			if($groupCharge->chargcode == 'ROBOR'){
			 	$groupCharge->chrgdesc = 'Room and Board';
			}

			$mandatory_discamount = 0;
			if(array_key_exists($groupCharge->chargcode,$this->patient_group_charges_with_discount)){
				$mandatory_discamount =  $this->patient_group_charges_with_discount[$groupCharge->chargcode]['discamt'];
			}
			$total_hcifees = $total_hcifees + $groupCharge->grpamount;
		}

		$patient_mandatory_discounts_subtotal_hci = 0;
		if(isset($this->patient_mandatory_discounts) && count($this->patient_mandatory_discounts) > 0){
			foreach($this->patient_mandatory_discounts as $patient_mandatory_discount){
				$patient_mandatory_discounts_subtotal_hci = $patient_mandatory_discounts_subtotal_hci + $patient_mandatory_discount->discamount;
			}
		}

        $phicPackageHCI = new stdClass();
        if($phic && $encounter->phicclaim == "Y"){
            $phicPackageHCI = $this->CI->BillingModel->getPHICPackageHCI($enccode);
            if(empty($phicPackageHCI->amthosp1) || $phicPackageHCI->amthosp1 == NULL || $phicPackageHCI->amthosp1 == 0){
                $phicPackageHCI->amthosp1 = 0;
            }
            if(empty($phicPackageHCI->amthosp2) || $phicPackageHCI->amthosp2 == NULL || $phicPackageHCI->amthosp2 == 0){
                $phicPackageHCI->amthosp2 = 0;
            }
        }else{
            $phicPackageHCI->{'amthosp1'} = 0;
            $phicPackageHCI->{'amthosp2'} = 0;
        }

		$amount_after_mandatory_disc_hci = $total_hcifees - $patient_mandatory_discounts_subtotal_hci;
		$balance_hci = $total_hcifees - $patient_mandatory_discounts_subtotal_hci - $phicPackageHCI->amthosp1 - $phicPackageHCI->amthosp2;
		if($balance_hci < 0) $balance_hci = 0;
		
		$pfFees = $this->CI->BillingModel->_profserv($enccode);

        $phicPackagePF = new stdClass();
        if($phic && $encounter->phicclaim == "Y"){
            $phicPackagePF = $this->CI->BillingModel->getPHICPackagePF($enccode);
            if(empty($phicPackagePF->amtpf1) || $phicPackagePF->amtpf1 == NULL || $phicPackagePF->amtpf1 == 0){
                $phicPackagePF->amtpf1 = 0;
            }
            if(empty($phicPackagePF->amtpf2) || $phicPackagePF->amtpf2 == NULL || $phicPackagePF->amtpf2 == 0){
                $phicPackagePF->amtpf2 = 0;
            }
        }else{
            $phicPackagePF->{'amtpf1'} = 0;
            $phicPackagePF->{'amtpf2'} = 0;
        }

		$total_pffees = 0;
		$balance_pf = 0;
		$patient_mandatory_discounts_subtotal_pf = 0;
        $amount_after_mandatory_disc_pf = 0;
		if(count($pfFees) > 0){
			$discounts_pf = $this->CI->BillingModel->getDiscounts($enccode,'P',true,'P');

			foreach($pfFees as $pfFee){
				//start get the total pf discount
				$total_itemdiscount = 0;
				if(count($discounts_pf) > 0){
					foreach($discounts_pf as $key => $discount){
						$discount_amount = $discount->pdamt;
						$discounted_amount =  $pfFee['pfamt'] * ($discount_amount/100);
						$total_itemdiscount = $total_itemdiscount + $discounted_amount;
						if(isset($discount->discamountpf)){
							$discount->discamountpf = $discount->discamountpf + $discounted_amount;
						}else{
							$discount->{'discamountpf'} = $discounted_amount;
						}	
						$discounts_pf[$key] = $discount;
					}
					//$this->patient_mandatory_discounts = $discounts;
				}
				//end start get the total total pf discount
				
				$total_pffees = $total_pffees + $pfFee['pfamt'];
			}

			foreach($discounts_pf as $discount_pf){
				$patient_mandatory_discounts_subtotal_pf = $patient_mandatory_discounts_subtotal_pf + $discount_pf->discamountpf;
			}
			
			$amount_after_mandatory_disc_pf = $total_pffees - $patient_mandatory_discounts_subtotal_pf;
			$balance_pf = $total_pffees - $patient_mandatory_discounts_subtotal_pf - $phicPackagePF->amtpf1 - $phicPackagePF->amtpf2;
			if($balance_pf < 0) $balance_pf = 0;
		}
		
        if($phic && $encounter->phicclaim == "Y"){
            $patient_contribution = array(
                "enccode" => $enccode,
                "hpercode" => $encounter->hpercode,
                "phicdteas" => date("Y-m-d h:i:s"),
                "phictmeas" => date("Y-m-d h:i:s"),
                "totchrm" => $totchrm,
                "totchdm" => $totchdm, 
                "totchxr" => $totchxr, 
                "totchor" => $totchor, 
                "totchot" => $totchot,
                "paacctno" => $patientAcct->paacctno,
                "disamt" => $amount_after_mandatory_disc_hci,
                "disamtpf" => $amount_after_mandatory_disc_pf);
    
            $ids = array(
                'enccode' => $patient_contribution['enccode'],
                'paacctno' => $patient_contribution['paacctno']
            );
            
            if($this->CI->BillingModel->checkExists($ids,'hphcont')){
                $result = $this->CI->BillingModel->update('hphcont',$patient_contribution,$ids);
            }else{
                $result = $this->CI->BillingModel->insert($patient_contribution,'hphcont');
            }
        }
		
        $patotamt = $total_hcifees + $total_pffees;
        $patotdisc = $patient_mandatory_discounts_subtotal_hci + $patient_mandatory_discounts_subtotal_pf;
        $panetamt = $patotamt - $patotdisc;
        $papay = 0;
        $pabal = $panetamt - $papay;
        $paphic = ($phicPackageHCI->amthosp1 + $phicPackageHCI->amthosp2) + ($phicPackagePF->amtpf1 + $phicPackagePF->amtpf2);

		$patient_account = array(
			"paacctno" => $patientAcct->paacctno,
			"enccode" => $enccode,
			"hpercode" => $encounter->hpercode,
			"padteas" => date("Y-m-d h:i:s"), 
			"patmeas" => date("Y-m-d h:i:s"), 
			"patotchrg" => $total_hcifees,
			"patotprof" => $total_pffees, 
			"patotamt" => $patotamt, 
			"patotdisc" => $patotdisc, 
			"patmsstot" => 0, 
			"panetamt" => $panetamt, 
			"papay" => $papay, 
			"pabal" => $pabal, 
			"pastat" => 0, 
			"palock" => "N",
			"updsw" => "P", 
			"confdl" => "N", 
			"ptdisc" => 0, 
			"paphic" => $paphic, 
			"adjdrugs" => 0
		);

		$ids = array(
			'enccode' => $patient_account['enccode'],
			'paacctno' => $patient_account['paacctno']
		);

		if($this->CI->BillingModel->checkExists($ids,'hpatacct')){
			$patient_account['datemod'] = date("Y-m-d h:i:s");
			$patient_account['entryby'] = $this->entry;
			$result = $this->CI->BillingModel->update('hpatacct',$patient_account,$ids);
		}else{
			$result = $this->CI->BillingModel->insert($patient_account,'hpatacct');
		}
    }

    public function _getRoomDetails($roomDetails,$confinePeriod,$discounts,$billingSetup){
		$roomComputations = array();
		foreach ($roomDetails as $key => $roomDetail) {
			$roomComputation = array();
			$rmrate = $roomDetail['rmrate'];
			$roomComputation['rmrate'] = $rmrate;
			$hprdate = $roomDetail['hprdate'];

			$roomComputation["enccode"] = $roomDetail['enccode'];
			$roomComputation["pcchrgdte"] = $hprdate;
			$roomComputation["chargcode"] = "ROBOR";
			$roomComputation["uomdtl"] = "";
			$roomComputation["uomdtl1"] = "840";
			$roomComputation["chargname"] = "ROOM AND BOARD ACCOMODATION";
			$roomComputation["pdamt"] = null;
			$roomComputation["pdtyp"] = null;
			$roomComputation["bentypcod"] = "ROBOR";
			$roomComputation["chrgtable"] = null;
			$roomComputation["itemcode"] = "";
			$roomComputation["chargeseq"] = "6";
			$roomComputation["estatus"] = "";
			$roomComputation["orinclst"] = "A";
			$roomComputation["pchrgup"] = $roomDetail['rmrate'];
			$roomComputation["compense"] = "";
			$roomComputation["amt"] = "0";
			$roomComputation["disamt"] = "0";
			$roomComputation["tbl"] = "hpatroom";
			$roomComputation["doco"] = $roomDetail["bdintkey"];

			if(array_key_exists($key + 1,$roomDetails)){
				$nexthprdate = $roomDetails[$key + 1]['hprdate'];
				$hprdate_value = date_create($hprdate);
				$nexthprdate_value = date_create($nexthprdate);
				$roomComputation["pcchrgcod"] = date("m/d/Y",strtotime($nexthprdate));
				$datediff = date_diff($hprdate_value,$nexthprdate_value);
				$confinementdays = $datediff->days;//round($datediff / (60 * 60 * 24));
				if($confinementdays == 0 && $billingSetup->sbasrm == 'BDATE') {
					$confinementdays = 1;
				}else{
					if($billingSetup->sbasrm == 'BDATE'){
						$hprdate_valuetime = date("H:i:s",strtotime($hprdate));
						$nexthprdate_valuetime = date("H:i:s",strtotime($nexthprdate));
						if($nexthprdate_valuetime < $hprdate_valuetime){
							$confinementdays = $confinementdays + 1;
						}
					}

					if($billingSetup->sbasrm == 'CUTOF'){
					 	$cutoffTime = date("H:i:s",strtotime($billingSetup->scuttime));
						$nexthprdate_valuetime = date("H:i:s",strtotime($nexthprdate));
						
					 	if($nexthprdate_valuetime > $cutoffTime){
					 		$confinementdays = $confinementdays + 1;
					 	}else{
							if($confinementdays == 0) $confinementdays = 1;
						}
					}
				}
				$this->roomCount = $this->roomCount + $confinementdays;
				$roomComputation["chrgdesc"] = 'ROOM - ' . $roomDetail['wardname'] .' '. $roomDetail['rmname'] .' '. $roomDetail['bdname'] .' ('.$confinementdays.' day/s)';
				$pcchrgamt = $rmrate * $confinementdays;
				$roomComputation['pcchrgamt'] = $pcchrgamt;
			}else{
				$nexthprdate = $confinePeriod['disdate'];
				$hprdate_value = date_create($hprdate);
				$nexthprdate_value = date_create($nexthprdate);
				$roomComputation["pcchrgcod"] = date("m/d/Y",strtotime($nexthprdate));
				$datediff = date_diff($hprdate_value,$nexthprdate_value);
				$confinementdays = $datediff->days;//round($datediff / (60 * 60 * 24));
				if($confinementdays == 0 && $billingSetup->sbasrm == 'BDATE') {
					$confinementdays = 1;
				}else{
					if($billingSetup->sbasrm == 'BDATE'){
						$hprdate_valuetime = date("H:i:s",strtotime($hprdate));
						$nexthprdate_valuetime = date("H:i:s",strtotime($nexthprdate));
						if($nexthprdate_valuetime < $hprdate_valuetime){
							$confinementdays = $confinementdays + 1;
						}
					}

					if($billingSetup->sbasrm == 'CUTOF'){
					 	$cutoffTime = date("H:i:s",strtotime($billingSetup->scuttime));
						$nexthprdate_valuetime = date("H:i:s",strtotime($nexthprdate));

					 	if($nexthprdate_valuetime > $cutoffTime){
					 		$confinementdays = $confinementdays + 1;
					 	}else{
							$confinementdays = 1;
						}
					}
				}
				$this->roomCount = $this->roomCount + $confinementdays;
				$roomComputation["chrgdesc"] = 'ROOM - ' . $roomDetail['wardname'] .' '. $roomDetail['rmname'] .' '. $roomDetail['bdname'] .' ('.$confinementdays.' day/s)';
				$pcchrgamt = $rmrate * $confinementdays;
				$roomComputation['pcchrgamt'] = $pcchrgamt;
			}
			$roomComputations[] = $roomComputation;
		}
		return $roomComputations;
	}

}