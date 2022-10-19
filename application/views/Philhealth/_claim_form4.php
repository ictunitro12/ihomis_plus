<?php $this->load->helper('gender'); ?>

<div class="row">
    <div class="col">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <div class="h3 text text-success">
                            <i class="fa fa-file-text-o"></i>
                            &nbsp PHILHEALTH CLAIM FORM 4
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0)" id="patientsearch" data-toggle="tooltip" title="Search Patient" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-search"></i></span><span class="ladda-spinner"></span></a>
                        <a href="<?php
                                    $enccode = urlencode(urlencode($enccode));
                                    $accreno = urlencode(urlencode($accreno));
                                    echo base_url() . "Philhealth/generateClaimForm4PDF?enccode={$enccode}&accreno={$accreno}";
                                    ?>" target="_blank" id="printclaimform4" data-toggle="tooltip" title="Print Claim Form 4" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-print" aria-hidden="true"></i></span><span class="ladda-spinner"></span></a>
                        <!-- a href="<?php
                                    //$enccode = urlencode(urlencode($enccode));
                                    //$accreno = urlencode(urlencode($accreno));
                                    //echo base_url() . "Philhealth/claimForm4XML?enccode={$enccode}&accreno={$accreno}";
                                    ?>" id="printclaimform4" data-toggle="tooltip" title="Download Claim Form 4 XML" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-file-o" aria-hidden="true"></i></span><span class="ladda-spinner"></span></a-->
                        <a href="javascript:void(0);" id="printclaimform4XMLDownload" data-toggle="tooltip" title="Download Claim Form 4 XML" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-file-o" aria-hidden="true"></i></span><span class="ladda-spinner"></span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp HEALTH RECORD NUMBER:</b>
                        <span class="text text-success" id="healthrecordnumber"><?php echo $patient->hpercode; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp ADMISSION DATE AND TIME:</b>
                        <span class="text text-success"><?php 
                            echo date_format(new DateTime($patient->admissiondatetime),"m-d-Y H:i:s A");
                            ?></span>
                        <span class="text text-success" id="admissiondate" hidden><?php echo $patient->admissiondatetime; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-user"></i>&nbsp NAME OF PATIENT:</b>
                        <span class="text text-success" id="patientname"><?php echo "{$patient->patient_lastname} {$patient->patient_suffix}, {$patient->patient_firstname}, {$patient->patient_middlename}"; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp DISCHARGED DATE AND TIME:</b>
                        <span class="text text-success"><?php 
                            echo date_format(new DateTime($patient->dischargedatetime),"m-d-Y H:i:s A");
                            ?></span>
                        <span class="text text-success" id="dischargeddate" hidden><?php 
                            echo $patient->dischargedatetime; 
                        ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp AGE:</b>
                        <span class="text text-success"><?php echo $patient->age_in_years_desc; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp ROOM:</b>
                        <span class="text text-success"><?php echo $room; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp SEX:</b>
                        <span class="text text-success" id="gender"><?php echo gender($patient->gender); ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp ENCOUNTER:</b>
                        <span class="text text-success"><?php 
                        $encounter = ($patient->toecode == 'OPD' || $patient->toecode == 'OPDAD') ? 'OUT-PATIENT DEPARTMENT' : "";
                        $encounter = ($patient->toecode == 'ER' || $patient->toecode == 'ERADM') ? 'EMERGENCY ROOM DEPARTMENT' :  $encounter;
                        $encounter = ($patient->toecode == 'ADM' ) ? 'ADMISSION' :  $encounter;
                        echo  $encounter; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-user"></i>&nbsp MEMBER:</b>
                        <a href="<?php 
                        echo base_url() . "Philhealth/Claims/".$patient->member_pin;
                        ?>" class="text text-success" id="member"><?php 
                        $member_name = $patient->member_lastname .', '. $patient->member_firstname;
                        if($patient->member_suffix != NULL && $patient->member_suffix != "" && $patient->member_suffix != "NOTAP"){
                            $member_name .= ' ' . $patient->member_suffix;
                        }
                        if($patient->member_middlename != NULL && $patient->member_middlename != "" && $patient->member_middlename != "N/A"){
                            $member_name .= ' ' . $patient->member_middlename;
                        }
                        echo $member_name;
                        ?></a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text text-success active" id="hci_info-tab" data-toggle="tab" href="#hci_info" role="tab" aria-controls="hci_info" aria-expanded="true"><i class="fa fa-hospital-o fa-2x"></i> HCI INFORMATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="patient_data-tab" data-toggle="tab" href="#patient_data" role="tab" aria-controls="patient_data" aria-expanded="true"><i class="fa fa-user-md fa-2x"></i> PATIENT'S DATA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="admission-tab" data-toggle="tab" href="#admission" role="tab" aria-controls="admission"><i class="fa fa-plus-square fa-2x"></i> REASON FOR ADMISSION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="ward-tab" data-toggle="tab" href="#ward" role="tab" aria-controls="ward"><i class="fa fa-credit-card fa-2x"></i> COURSE IN THE WARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="drugs-tab" data-toggle="tab" href="#drugs" role="tab" aria-controls="drugs"><i class="fa fa-bar-chart  fa-2x"></i> DRUGS / MEDICINES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="treatment-tab" data-toggle="tab" href="#treatment" role="tab" aria-controls="treatment"><i class="fa fa-file-o fa-2x"></i> OUTCOME OF TREATMENT</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="hci_info" role="tabpanel" aria-labelledby="hci_info-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <b class="text text-success">I. HEALTH CARE INSTITUTION (HCI) INFORMATION</b>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col-md">
                                        <label><b>1. Name of HCI:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <p><?php echo $hci_details->pfacilityname; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label><b>2. Accreditation Number:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <p><?php echo $hci_details->paccreno; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label><b>3. Address of HCI:</b></label>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <p><?php echo $hci_address; ?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="patient_data" role="tabpanel" aria-labelledby="patient_data-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <b class="text text-success">II. PATIENT DATA</b>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>1. Name of Patient:</b></label>
                                    </div>
                                    <div class="col">
                                        <!-- <div class="form-group">
                                            <input class="form-control form-control-sm" type="text" id="pCataractPreAuth" name="pCataractPreAuth">
                                        </div> -->
                                        <span><?php echo "{$patient->patient_lastname} {$patient->patient_suffix}, {$patient->patient_firstname}, {$patient->patient_middlename}"; ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="pLeftEyeIOLStickerNumber"><b>2. PIN:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <input class="form-control form-control-sm" type="text" id="pLeftEyeIOLStickerNumber" name="pLeftEyeIOLStickerNumber"> -->
                                            <span><?php echo $patient->patient_pin; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="pLeftEyeIOLExpiryDate"><b>3. Age:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                            <span><?php echo $patient->age_in_years_desc; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="pLeftEyeIOLExpiryDate"><b>4. Sex:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                            <span><?php echo gender($patient->gender); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="pLeftEyeIOLExpiryDate"><b>5. Chief Complaint:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                            <span><?php echo $patient->chief_complaint; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="pLeftEyeIOLExpiryDate"><b>6. Admitting Diagnosis:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                            <span><?php echo $patient->admitting_diagnosis; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="pLeftEyeIOLExpiryDate"><b>7. Discharge Diagnosis:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                            <span><?php echo $patient->discharge_diagnosis; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>8.a 1st Case Rate Code:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?php echo $patient->first_case_rate_code; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>8.b 2nd Case Rate Code:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?php echo $patient->second_case_rate_code; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>9.a Date Admitted:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?php echo $patient->admitted_date; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>9.b Time Admitted:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?php echo $patient->admitted_time; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>10.a Date Discharged:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?php echo $patient->discharge_date; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>10.b Time discharged:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?php echo $patient->discharge_time; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">
                        <br>


                        <div class="row">
                            <div class="col">
                                <b class="text text-success">III. REASON FOR ADMISSION</b>
                            </div>
                        </div>
                        <hr>

                        <?php $this->load->view('Philhealth/_present_illness_history.php'); ?>

                        <hr>

                        <?php $this->load->view('Philhealth/_past_medical_history.php'); ?>

                        <hr>

                        <?php $this->load->view('Philhealth/_ob_gyn_history.php'); ?>

                        <hr>

                        <?php $this->load->view('Philhealth/_pertinent_signs_symptoms.php'); ?>

                        <hr>



                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="pLeftEyeIOLExpiryDate"><b>Referred from another health care institution (HCI):</b></label>
                            </div>
                            <div class="col-md">
                                <div class="form-group row">
                                    <!--  <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                    <!--span id="pLeftEyeIOLExpiryDate"></span-->
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="reffered" value="No" <?= ($patient->reffered->option == 'N') ? 'checked' : '' ?> onclick="return false;" /> <label for="reffered">No</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="reffered" value="Yes" <?= ($patient->reffered->option == 'Y') ? 'checked' : '' ?> onclick="return false;" /> <label for="reffered">Yes</label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="reffered">Specify Reason</label>
                                            <div class="col">
                                                <input type="text" class="form-control form-control-sm" name="referral_reason" value="<?= $patient->reffered->reason ?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="heent_others" class="col-form-label text-right">Name of Originating HCI</label>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-sm" id="originating_hci" name="originating_hci" value="<?= $patient->reffered->originating_hci_name ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col">
                                <label><b>Physical Examination on Admission (Pertinent Findings per System):</b></label>
                            </div>
                        </div>

                        <?php $this->load->view('Philhealth/_vital_signs.php'); ?>

                        <?php $this->load->view('Philhealth/_physical_examinations_2.php'); ?>

                        <div class="form-group form-actions pull-right">
                            <button type="button" class="btn btn-success pull-right reasonForAdmission"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="ward" role="tabpanel" aria-labelledby="ward-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <b class="text text-success">IV. COURSE IN THE WARD (Attach photocopy of laboratory/imaging results)</b>
                            </div>
                        </div>
                        <hr>

                        <!-- <div class="row">
                            <div class="col"><input type="checkbox" name="multiple_pregnancy" id="multiple_pregnancy" value="Y" onclick="return false;" /> <label for="multiple_pregnancy">Check box if there is/are additional sheet(s).</label></div>
                        </div>
                        <hr> -->

                        <?php $this->load->view('Philhealth/_course_in_the_ward.php'); ?>

                        <hr>

                        <div class="row">
                            <div class="col">
                                <label><b>SURGICAL PROCEDURE/RVS CODE (Attach photocopy of OR technique):</b></label>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <span class="surgical_procedures"><?= $patient->surgical_procedure ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="drugs" role="tabpanel" aria-labelledby="drugs-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <b class="text text-success">V. DRUGS / MEDICINES</b>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive" style="overflow-x: visible; overflow-y: visible;">
                            <table id="drugsAndMedicineTable" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>DRUG DESCRIPTION</th>
                                        <th>QUANTITY / DOSAGE / ROUTE / FREQUENCY</th>
                                        <th>TOTAL COST</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="treatment" role="tabpanel" aria-labelledby="treatment-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <b class="text text-success">VI. OUTCOME OF TREATMENT</b>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <form id="treatment_form">
                            <div class="row">
                                <div class="col">
                                    <input type="checkbox" name="I" id="I" value="Y" onclick="return false;" /> <label for="improved">IMPROVED</label>
                                </div>

                                <div class="col">
                                    <input type="checkbox" name="R" id="R" value="Y" onclick="return false;" /> <label for="recovered">RECOVERED</label>
                                </div>

                                <div class="col">
                                    <input type="checkbox" name="H" id="H" value="Y" onclick="return false;" /> <label for="hamadama">HAMA/DAMA</label>
                                </div>

                                <div class="col">
                                    <input type="checkbox" name="E" id="E" value="Y" onclick="return false;" /> <label for="expired">EXPIRED</label>
                                </div>

                                <div class="col">
                                    <input type="checkbox" name="A" id="A" value="Y" onclick="return false;" /> <label for="absconded">ABSCONDED</label>
                                </div>

                                <div class="col">
                                    <input type="checkbox" name="T" id="T" value="Y" onclick="return false;" /> <label for="transferred">TRANSFERRED</label>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        Specify reason: <input type="text" class="form-control form-control-sm" name="preferralreasons" id="preferralreasons" value="" readonly />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php $this->load->view('Philhealth/_claim_form4_certification.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo ViewSearchPatient(); ?>

<form id="frmCaseRateSearchList" method="post">
    <div class="modal" id="CaseRateSearchList" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> All Case Rate</h1>
                    <table id="TblCaseRateList" class="table table-hover table-sm table table-striped table-borderless table-condensed" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>CASE CODE</th>
                                <th>DESCRIPTION</th>
                                <th>CASE RATE</th>
                                <th>HOSPITAL FEE</th>
                                <th>PROFESSIONAL FEE</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="modal-footer bg-secondary">
                    <button class="btn btn-danger btn-square  btn-ladda btn-lg" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $this->load->view('Philhealth/_drugs_medicines_modal.php'); ?>
<input type="hidden" name="accreno" id="accreno" value="<?php echo $accreno; ?>">
<input type="hidden" id="enccode" name="enccode" value="<?php echo $enccode; ?>">
<input type="hidden" id="hpercode" name="hpercode" value="<?php echo $hpercode; ?>">
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<!-- sweetalert2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url() ?>assets/scripts/philhealth/diagnoses.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/procedures.js"></script>
<script>
    const baseURI = $('#base_url').val();
    $(document).ready(function() {
        var enccode = $("#enccode").val();
    });

    $('.reasonForAdmission').on('click', function(e) {
        e.preventDefault();
        if(validate_pertinent_signs_symptoms_form() == false){
            return;
        }
        if(validate_physical_examination_form() == false){
            return;
        }
        if(validate_vital_signs_form() == false){
            return;
        }
        $("#present_illness_history_form").trigger('submit');
        $("#past_medical_history_form").trigger('submit');
        $("#obgyn_history_form").trigger('submit');
        $("#pertinent_signs_symptoms_form").trigger('submit');
        $("#vital_signs_form").trigger('submit');
        $("#physical_examination_form").trigger('submit');
    });

    $("#reason_admission_form").on('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        formData.append('enccode', $("#enccode").val());
        formData.append('hpercode', $("#hpercode").val());

        $.ajax({
            url: baseURI + "Philhealth/saveReasonFormAdmission",
            type: "POST",
            data: formData,
            dataType: "JSON",
            processData: false,
            contentType: false,
            success: function(data, response) {
                /* $("#admission-tab").trigger('click'); */
                toastr.success(data.message, 'Success');
            },
        });
    });

    $("#patientsearch").on("click", function() {
        $('#PatSearch').modal('show');
        $("#PatSearchList .modal-footer > a").hide();
    });

    $("#frmPatSearch").submit(function() {
        $.ajax({
            url: baseURI + "Patient/PatientAdvanceSearch",
            type: "POST",
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            cache: false,
            async: true,
            success: function(data, response) {
                $("#PatSearchList").modal('show');
                $("#PatSearch").modal('hide');
                PatSearchList(data);
            },
            error: function(response) {
                toastr.error('Error:Please try again!', 'Error');
            }
        });
        return false;
    });

    function PatSearchList(data) {
        $('#TblPatSearchList').off();
        var table = $("#TblPatSearchList").DataTable({
            data: data,
            destroy: true,
            className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
            columns: [{
                    "data": "hpercode"
                },
                {
                    "data": "patfirst"
                },
                {
                    "data": "patlast"
                },
                {
                    "data": "patmiddle"
                },
                {
                    "data": "patsex"
                }
            ],
        });

        $('#TblPatSearchList').on('dblclick', 'tr', function() {
            var data = table.row(this).data();
            if (data == undefined) {
                return;
            }
            var hpercode = data['hpercode'];
            var patlast = data['patlast'];
            var patfirst = data['patfirst'];
            var patmiddle = data['patmiddle'];
            var patientname = patlast + " " + patfirst + " " + patmiddle;
            var patsex = data['patsex'];
            $.ajax({
                type: "POST",
                url: baseURI + "Philhealth/ClaimLog/" + hpercode,
                data: "JSON",
                async: false,
                success: function(data) {
                    $("#PatHistoryList .modal-footer > a").hide();
                    $("#searchpatienthpercode").text(hpercode);
                    $("#searchpatientname").text(patientname);
                    $("#PatHistoryList > div > div > div.modal-body > h1").html('<i class="fa fa-th-list"></i> Claim Log');
                    $("#PatHistoryList").modal('show');
                    $('#PatSearchList').modal('hide');
                    PatVisitList(data['data'], patientname);
                },
                error: function(data) {
                    toastr.error('Error: Fetching Patient Visits!', 'Error');
                }
            });
        });
    }

    function PatVisitList(data, patientname) {
        $('#visitLogList').off();
        var table = $("#visitLogList").DataTable({
            data: data,
            destroy: true,
            className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
            columns: [{
                    "data": "admdate"
                },
                {
                    "data": "admtime"
                },
                {
                    "data": "toecode"
                }
            ],
        });

        $('#visitLogList').on('dblclick', 'tr', function() {
            var data = table.row(this).data();
            if (data == undefined) {
                return;
            }
            var enccode = data['enccode'];
            enccode = encodeURIComponent(encodeURIComponent(enccode));
            window.location.href = baseURI + "Philhealth/ClaimForm2/" + enccode;
        });
    }

    $("#admission-tab").on("click", function() {
        var enccode = $("#enccode").val();

        getObgynHistoryData(enccode);
        getPresentIllnessHistoryData(enccode);
        getPastMedicalHistoryData(enccode);
        getPertinentSignsSymptomsData(enccode);
        getVitalSignsData(enccode);
        getPhysicalExaminationData(enccode);
    });

    function getAdmission(enccode) {
        $.ajax({
            url: baseURI + "Philhealth/reasonForAdmission",
            type: "POST",
            data: jQuery.param({
                enccode: enccode,
            }),
            success: function(data, response) {
                loadAdmissionData(data.data);
            }
        });
    }

    function loadAdmissionData(data) {
        let form = document.getElementById("admission_form");

        let formData = new FormData(form);

        /* 1 */
        $("#present_illness_history").val();
        /* 2a */
        $("#past_medical_hsitory").val();
        /* 2b */
        $("#obg").val();
        $("#obp").val();
        /*  */
        $("#full_term").val();
        $("#pre_term").val();
        $("#abortion").val();
        $("#live_birth").val();
        /*  */
        $("#plmp").val();
        $("#ob_na").val();
        /* 3 */
        /* 4 */
        /* 5 */
        /* general */
        /* vital signs */
        $("#vsbp").val();
        $("#vspulse").val();
        $("#vsresp").val();
        $("#vstemp").val();
        /* heent */
        /* $("#" + data.data.pDisposition).prop('checked', true) */
        $("#heent_others").val();
        /* chest/lungs */
        $("#cl_others").val();
        /* cvs */
        $("#cvs_others").val();
        /* abdomen */
        $("#abd_others").val();
        /* gu ie */
        $("#guie_others").val();
        /* skin/extremities */
        $("#skinex_others").val();
        /* neuro-exam */
        $("#neuro_others").val();

    }

    $("#ward-tab").on("click", function() {
        const enccode = $("#enccode").val();

        getCourseInTheWardAllData(enccode);
    });

    /* function getCourseInTheWard(enccode) {
        $.ajax({
            url: baseURI + "Philhealth/courseInTheWard",
            type: "POST",
            data: jQuery.param({
                enccode: enccode,
            }),
            success: function(data, response) {
                loadCourseInTheWardTable(data.data)
            }
        });
    }

    function loadCourseInTheWardTable(data) {
        $("#courseInTheWardTable").DataTable({
            data: data.ward,
            destroy: true,
            columns: [{
                    data: "dtetake"
                },
                {
                    data: "crseward"
                },
            ]
        });

        $(".surgical_procedures").html(data.procedures);
    }
 */
    $("#drugs-tab").on("click", function() {
        var enccode = $("#enccode").val();

        getDrugsAndMedicnes(enccode);
    });

    function getDrugsAndMedicnes(enccode) {
        $.ajax({
            url: baseURI + "Philhealth/drugsAndMedicines",
            type: "POST",
            data: jQuery.param({
                enccode: enccode,
            }),
            success: function(data, response) {
                loadDrugsAndMedicineTable(data.data)
            }
        });
    }

    function loadDrugsAndMedicineTable(data) {
        $("#drugsAndMedicineTable").DataTable({
            data: data,
            destroy: true,
            columns: [{
                    data: "drug_description"
                },
                {
                    data: "QDRF"
                },
                {
                    data: "pcchrgamt"
                },
                {
                    data: "action",
                    orderable: false
                }
            ]
        });
    }

    $("#treatment-tab").on("click", function() {
        var enccode = $("#enccode").val();

        getTreatment(enccode);
        getCF4AttendProv(enccode)
    });

    function getTreatment(enccode) {
        $.ajax({
            url: baseURI + "Philhealth/outcomeOfTreatment",
            type: "POST",
            data: jQuery.param({
                enccode: enccode,
            }),
            success: function(data, response) {
                let form = document.getElementById("treatment_form");

                let formData = new FormData(form);

                formData.set(data.data.pDisposition, $("#" + data.data.pDisposition).prop('checked', true));
                $("#preferralreasons").val(data.data.preferralreasons);
            }
        });
    }

    $("#printclaimform4XMLDownload").click(function(){
        var enccode = $("#enccode").val();
        var accreno = $("#accreno").val();
        $.ajax({
            url: baseURI+'Philhealth/claimForm4XML',
            method: 'POST',
            data: {enccode : enccode, accreno : accreno},
            xhrFields: {
                responseType: 'blob'
            },
            success: function (data,status,xhr) {
                var dataError = xhr.getResponseHeader('DataError');
                var fileName = xhr.getResponseHeader('FileName');
                if(dataError == ""){
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = fileName;
                    document.body.append(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                }else{
                    toastr.error(dataError,"Error");
                }
            }
        });
    });
</script>

<script src="<?php echo base_url() ?>assets/scripts/philhealth/course_in_the_ward.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/drugs_medicines.js"></script>