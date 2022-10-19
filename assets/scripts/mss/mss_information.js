	
	function PatientAssessmentForm(hpercode= '')
	{
		$.ajax({
			type: "POST",
			url: '<?php echo site_url("MSS/PatientAssessmentForm/"); ?>' + hpercode,
			data: "JSON",
			async:false,
			success: function(data)
			{

				var data = $(this).data();
				var obj = PatientAssessmentForm(enccode,hpercode);

				console.log(data);

				$('#source_refname').val(obj['sourcereff']);
				$('#source_refaddress').val(obj['hasaddress']);
				$('#source_telno').val(obj['reftelno']);
				$('#ass_tempAdd').val(obj['tempaddress']);

				$('#ass_emp').val(obj['employer']);
				$('#ass_income').val(obj['income']);
				$('#ass_perIncome').val(obj['percapincome']);

				$('#ass_infor').val(obj['osminformantname']);
				$('#ass_addInfo').val(obj['osaddress_informant']);
				$('#ass_oth').val(obj['osother']);

				$('#ass_houSize').val(obj['household']);
				$('#ass_othIncome').val(obj['othsourceincome']);
				$('#ass_monExp').val(obj['totalmon_expendi']);
				$('#ass_hoLot').val(obj['fc_houselot']);

				$('#ass_food').val(obj['fc_food']);
				$('#ass_educ').val(obj['fc_educ']);
				$('#ass_cloth').val(obj['fc_clothing']);
				$('#ass_transpo').val(obj['fc_transpo']);
				$('#ass_houHelp').val(obj['fc_househelp']);
				$('#ass_medExp').val(obj['fc_medexped']);
				$('#ass_inspre').val(obj['fc_insurpremium']);
				$('#ass_other').val(obj['fc_other']);

				$('#med_DurOfProb').val(obj['DPS']);
				$('#med_PrevTreat').val(obj['PTD']);
				$('#med_PresTreat').val(obj['PTP']);
				$('#med_HealthProb').val(obj['HAP']);


				/*checkbox*/

				$("#ass_owned option[value='" + obj['owned']+"']").attr("checked","unchecked");
				$("#ass_rent option[value='" + obj['rent']+"']").attr("checked","unchecked");
				$("#ass_ins option[value='" + obj['institution']+"']").attr("checked","unchecked");
				$("#ass_shared option[value='" + obj['klashared']+"']").attr("checked","unchecked");
				$("#ass_home option[value='" + obj['homeless']+"']").attr("checked","unchecked");
				
				$("#ass_PhilDirect option[value='" + obj['phicdirect']+"']").attr("checked","unchecked");
				$("#ass_PhilIndirect option[value='" + obj['phicindirect']+"']").attr("checked","unchecked");


				$("#ass_IOE option[value='" + obj['inoper']+"']").attr("checked","unchecked");
				$("#ass_OldPat option[value='" + obj['opatient']+"']").attr("checked","unchecked");
				$("#ass_NewPat option[value='" + obj['npatient']+"']").attr("checked","unchecked");
				$("#ass_caseFor option[value='" + obj['caseforward']+"']").attr("checked","unchecked");
				$("#ass_closedCase option[value='" + obj['closedcase']+"']").attr("checked","unchecked");

				$("#ass_senior option[value='" + obj['osmsenior']+"']").attr("checked","unchecked");
				$("#ass_brgy option[value='" + obj['osmbarangay']+"']").attr("checked","unchecked");
				$("#ass_bhw option[value='" + obj['osmmbh']+"']").attr("checked","unchecked");
				$("#ass_pwd option[value='" + obj['osmpwd']+"']").attr("checked","unchecked");
				$("#ss_indig option[value='" + obj['osindigen']+"']").attr("checked","unchecked");

				$("#ass_elec option[value='" + obj['lselectric']+"']").attr("checked","unchecked");
				$("#ass_candle option[value='" + obj['lscandle']+"']").attr("checked","unchecked");
				$("#ass_keros option[value='" + obj['lskeros']+"']").attr("checked","unchecked");


				$("#ass_arte option[value='" + obj['wsartesian']+"']").attr("checked","unchecked");
				$("#ass_watPublic option[value='" + obj['wspublic']+"']").attr("checked","unchecked");
				$("#ass_watOwned option[value='" + obj['wsowned']+"']").attr("checked","unchecked");
				$("#ass_watdis option[value='" + obj['wswaterdist']+"']").attr("checked","unchecked");

				$("#ass_gas option[value='" + obj['fs_gas']+"']").attr("checked","unchecked");
				$("#ass_fire option[value='" + obj['fs_firewood']+"']").attr("checked","unchecked");
				$("#ass_char option[value='" + obj['fs_charcoal']+"']").attr("checked","unchecked");

				$("#ass_educAttain option[value='" + obj['educ_attain_code']+"']").attr("selected","selected");
				$("#ass_CompAdd option[value='" + obj['compupad']+"']").attr("selected","selected");
				$("#ass_occu option[value='" + obj['occup_code']+"']").attr("selected","selected");
				$("#ass_relToPat option[value='" + obj['reltopatient']+"']").attr("selected","selected");
				$("#ass_mswd option[value='" + obj['fcapable']+"']").attr("selected","selected");



			},
			error: function(response)
			{
				alert("Error: Fetching Patient Information!");
			}
		});
}

	function PatientAddress(hpercode)
	 {
	  $.ajax({
	  type: "POST",
	  url: baseURL+"Patient/PatientAddress/"+hpercode,
	  data: "JSON",
	  async:false,
	  success: function(data,status){ 
		var obj = $.parseJSON(data);
		$('#info_street').val(obj['patstr']);
		var str = obj['provcode'].substring(0,2);
		setRegion(str);
		setProv(obj['provcode']);
		$('#selProv').removeAttr("disabled");
		setCity(obj['ctycode']);
		$('#selCity').removeAttr("disabled");
		setZip(obj['patzip']);
		$('#info_zip').val(obj['patzip']);
		setBrgy(obj['brg']);
		},
		error: function(data,status){
		}
	  });
	 }
	 
	function PatientInformationSummary(hpercode)
	{ 
		$.ajax({
		type: "POST",
		url: "PatientInformation/"+hpercode,
		data: "JSON",
		success: function(data,status)
		{ 
	    var obj = $.parseJSON(data);
		var date = new Date(obj['patbdate']);
		var fullname=obj['patfirst'].concat(" ",obj['patmiddle']," ",obj['patlast']);
		$('#hpercode').text(obj['hpercode']);
		$('#patname').text(fullname);
		var dob=(zeroFill((date.getMonth()+1))+'-'+zeroFill((date.getDate()))+'-'+date.getFullYear());
		var ages= AgeComputation(dob);
		},
		error: function(data,status)
		{
			alert('Failed to Fetch Data');
		}
		});
	}
	

	
	function civilstatus(param)
	{
		switch(param){
		case 'C':
		return "Child";
		break;		
		case 'S':
		return "Single";
		break;
		case 'M':
		return "Married";
		break;
		case 'D':
		return "Divorced";
		break;
		case 'X':
		return "Separated";
		break;
		case 'W':
		return "Widower/Widow";
		break;
		default:
		return "N/A";
		}
	}
	
	function sex(param)
	{
		 var sex;
		if (param=== 'M')
		{
			sex="Male";
			 return sex;
		}else if (param=== 'M')
		{
			sex="Female";
			return sex;
		}else{
			sex="N/A";
			return sex;
		}
	 }
	 
	 function CivilStatus(param)
	 {
		 if((param==='M') || (param==='D') ||(param==='X') ||(param==='W') )
		{
			$("#spouse_lname").removeAttr('disabled');
			$("#spouse_fname").removeAttr('disabled');
			$("#spouse_mname").removeAttr('disabled');
			$("#spouse_address").removeAttr('disabled');
			$("#spouse_contact").removeAttr('disabled');
			$("#spouse_deceased").removeAttr('disabled');
		
		}else if((param==='S')|| (param==='N'))
		{	
			$("#spouse_lname").prop('disabled',true);
			$("#spouse_fname").prop('disabled',true);
			$("#spouse_mname").prop('disabled',true);
			$("#spouse_address").prop('disabled',true);
			$("#spouse_contact").prop('disabled',true);
			$("#spouse_deceased").prop('disabled',true);
		}	
	 }
	 
	


