<?php $this->load->helper('gender'); ?>

<div class="row">
    <div class="col">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <div class="h3 text text-success">
                            <i class="fa fa-file-text-o"></i>
                            &nbsp PHILHEALTH CLAIM FORM 3
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0)" id="patientsearch" data-toggle="tooltip" title="Search Patient" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-search"></i></span><span class="ladda-spinner"></span></a>
                        <a href="<?php
                                    $enccode = urlencode(urlencode($enccode));
                                    $accreno = urlencode(urlencode($accreno));
                                    echo base_url() . "Philhealth/generateClaimForm3PDF?enccode={$enccode}&accreno={$accreno}";
                                    ?>" target="_blank" id="printclaimform3" data-toggle="tooltip" title="Print Claim Form 3" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-print" aria-hidden="true"></i></span><span class="ladda-spinner"></span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp HEALTH RECORD NUMBER:</b>
                        <span class="text text-success" id="healthrecordnumber"><?= $patient->hpercode; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp ADMISSION DATE AND TIME:</b>
                        <span class="text text-success"><?= $patient->admission_datetime; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-user"></i>&nbsp NAME OF PATIENT:</b>
                        <span class="text text-success" id="patientname"><?= $patient->patient_fullname; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp DISCHARGED DATE AND TIME:</b>
                        <span class="text text-success"><?= $patient->discharge_datetime; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp AGE:</b>
                        <span class="text text-success"><?= $patient->patient_age_in_years_desc; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp ROOM:</b>
                        <span class="text text-success"><?php echo $room; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp SEX:</b>
                        <span class="text text-success"><?= $patient->patient_gender_desc; ?></span>
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
                        echo base_url() . "Philhealth/Claims/".$patient->phicnum;
                        ?>" class="text text-success" id="member"><?= $patient->member_name; ?></a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text text-success active" id="patient_data-tab" data-toggle="tab" href="#patient_data" role="tab" aria-controls="patient_data" aria-expanded="true"><i class="fa fa-user-md fa-2x"></i> PATIENT'S CLINICAL RECORD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="physical-exam-tab" data-toggle="tab" href="#physical-exam" role="tab" aria-controls="physical-exam"><i class="fa fa-credit-card fa-2x"></i> PHYSICAL EXAMINATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="ward-tab" data-toggle="tab" href="#ward" role="tab" aria-controls="ward"><i class="fa fa-credit-card fa-2x"></i> COURSE IN THE WARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="prenatal-tab" data-toggle="tab" href="#prenatal" role="tab" aria-controls="prenatal"><i class="fa fa-plus-square fa-2x"></i> MATERNITY CARE PACKAGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="delivery_outcome-tab" data-toggle="tab" href="#delivery_outcome" role="tab" aria-controls="delivery_outcome"><i class="fa fa-plus-square fa-2x"></i> DELIVERY OUTCOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="postpartum-tab" data-toggle="tab" href="#postpartum" role="tab" aria-controls="postpartum"><i class="fa fa-plus-square fa-2x"></i> POSTPARTUM CARE</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="patient_data" role="tabpanel" aria-labelledby="patient_data-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <b class="text text-success">PATIENT'S CLINICAL RECORD</b>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>Philhealth Accreditation No. (PAN) - Institutional Health Care Provider:</b></label>
                                    </div>
                                    <div class="col">
                                        <!-- <div class="form-group">
                                            <input class="form-control form-control-sm" type="text" id="pCataractPreAuth" name="pCataractPreAuth">
                                        </div> -->
                                        <span><?= $patient->pan ?></span>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>Name of Patient:</b></label>
                                    </div>
                                    <div class="col">
                                        <!-- <div class="form-group">
                                            <input class="form-control form-control-sm" type="text" id="pCataractPreAuth" name="pCataractPreAuth">
                                        </div> -->
                                        <span><?= "{$patient->patient_lastname} {$patient->patient_suffix}, {$patient->patient_firstname}, {$patient->patient_middlename}"; ?></span>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label for="pLeftEyeIOLExpiryDate"><b>Chief Complaint / Reason for Admission:</b></label>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                            <span><?= $patient->chief_complaint ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>Date Admitted:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?= $patient->admitted_date ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>Time Admitted:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?= $patient->admitted_time ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>Date Discharged:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?= $patient->discharge_date ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <label for="pLeftEyeIOLExpiryDate"><b>Time Discharged:</b></label>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <!-- <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate"> -->
                                                    <span><?= $patient->discharge_time ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!-- <div class="row mt-2">
                                    <div class="col">
                                        <label><b>Brief History of Present Illness:</b></label>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div> -->

                                <?php $this->load->view('Philhealth/_present_illness_history.php'); ?>

                                <hr>

                                <?php $this->load->view('Philhealth/_ob_gyn_history.php'); ?>

                                <hr>

                                <?php $this->load->view('Philhealth/_pertinent_laboratory_diagnostic_findings.php'); ?>

                                <hr>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label for="pLeftEyeIOLExpiryDate"><b>Disposition on Discharge:</b></label>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="I" id="I" value="Y" <?= $patient->outcome_of_treatment->improved ?> onclick="return false;" /> <label for="improved">IMPROVED</label>
                                    </div>

                                    <div class="col">
                                        <input type="checkbox" name="R" id="R" value="Y" <?= $patient->outcome_of_treatment->recovered ?> onclick="return false;" /> <label for="recovered">RECOVERED</label>
                                    </div>

                                    <div class="col">
                                        <input type="checkbox" name="H" id="H" value="Y" <?= $patient->outcome_of_treatment->hama_dama ?> onclick="return false;" /> <label for="hamadama">HAMA/DAMA</label>
                                    </div>

                                    <div class="col">
                                        <input type="checkbox" name="E" id="E" value="Y" <?= $patient->outcome_of_treatment->expired ?> onclick="return false;" /> <label for="expired">EXPIRED</label>
                                    </div>

                                    <div class="col">
                                        <input type="checkbox" name="A" id="A" value="Y" <?= $patient->outcome_of_treatment->absconded ?> onclick="return false;" /> <label for="absconded">ABSCONDED</label>
                                    </div>

                                    <div class="col">
                                        <input type="checkbox" name="T" id="T" value="Y" <?= $patient->outcome_of_treatment->transferred ?> onclick="return false;" /> <label for="transferred">TRANSFERRED</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group form-actions pull-right">
                                            <button type="button" class="btn btn-success pull-right submitForm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="physical-exam" role="tabpanel" aria-labelledby="physical-exam-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <b class="text text-success">PHYSICAL EXAMINATION ( <i>Pertinent Findings per System</i> )</b>
                            </div>
                        </div>
                        <hr>

                        <?php $this->load->view('Philhealth/_vital_signs.php'); ?>

                        <hr>

                        <?php $this->load->view('Philhealth/_physical_examinations_2.php'); ?>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group form-actions pull-right">
                                    <button type="button" class="btn btn-success pull-right submitPhysicalExamForm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="ward" role="tabpanel" aria-labelledby="ward-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <b class="text text-success">COURSE IN THE WARD (Attach photocopy of laboratory/imaging results)</b>
                            </div>
                        </div>
                        <hr>

                        <?php $this->load->view('Philhealth/_course_in_the_ward.php'); ?>

                    </div>
                    <div class="tab-pane fade" id="prenatal" role="tabpanel" aria-labelledby="prenatal-tab">
                        <br>
                        <form id="prenatal_form">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">PRENATAL CONSULTATION</b>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>1. Initial Prenatal Consultation:</b></label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="date" id="prenataldte" name="prenataldte" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="pLeftEyeIOLStickerNumber"><b>2. Clinical History and Physical Examination</b></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"><input type="checkbox" name="vsnormal" id="vsnormal" value="Y" /> <label for="vsnormal">a. Vital signs are normal</label></div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="">c. Menstrual History</label>
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-sm btn-success">LMP</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="date" class="form-control form-control-sm" name="lmp" id="lmp" />
                                                            </div>
                                                        </div>
                                                        <div class="col">

                                                            <div class="form-group row">
                                                                <label for="menarch" class="col-4">Age of Menarche</label>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-control-sm" name="menarch" id="menarch" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-3"><input type="checkbox" name="lowrisk" id="lowrisk" value="Y" /> <label for="lowrisk">b. Ascertain the present Pregnancy is low-risk</label></div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="">d. Obstetric History</label>
                                                </div>
                                                <div class="col">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-sm btn-success">G</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control form-control-sm" name="ob_g" id="ob_g" />
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-sm btn-success">P</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control form-control-sm" name="ob_p" id="ob_p" />
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-sm btn-success">FULL TERM</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control form-control-sm" name="ob_t" id="ob_t" />
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-sm btn-success">PRE TERM</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control form-control-sm" name="ob_p1" id="ob_p1" />
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-sm btn-success">ABORTION</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control form-control-sm" name="ob_a" id="ob_a" />
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-sm btn-success">LIVE BIRTH</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="text" class="form-control form-control-sm" name="ob_l" id="ob_l" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="pLeftEyeIOLStickerNumber"><b>3. Obstetric risk factors</b></label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col"><input type="checkbox" name="multiple" id="multiple" value="Y" /> <label for="multiple">a. Multiple pregnancy</label></div>
                                        <div class="col"><input type="checkbox" name="placenta" id="placenta" value="Y" /> <label for="placenta">d. Placenta previa</label></div>
                                        <div class="col"><input type="checkbox" name="preeclampsia" id="preeclampsia" value="Y" /> <label for="preeclampsia">g. History of pre-eclampsia</label></div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><input type="checkbox" name="ovarian" id="ovarian" value="Y" /> <label for="ovarian">b. Ovarian cyst</label></div>
                                        <div class="col"><input type="checkbox" name="miscarriage" id="miscarriage" value="Y" /> <label for="miscarriage">e. History of 3 miscarriages</label></div>
                                        <div class="col"><input type="checkbox" name="eclampsia" id="eclampsia" value="Y" /> <label for="eclampsia">h. History of eclampsia</label></div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><input type="checkbox" name="myoma" id="myoma" value="Y" /> <label for="myoma">c. Myoma uteri</label></div>
                                        <div class="col"><input type="checkbox" name="stillbirth" id="stillbirth" value="Y" /> <label for="stillbirth">f. Hitory of stillbirth</label></div>
                                        <div class="col"><input type="checkbox" name="contraction" id="contraction" value="Y" /> <label for="contraction">i. Premature contraction</label></div>
                                        <div class="col"></div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="pLeftEyeIOLStickerNumber"><b>4. Medical / Surgical risk factors</b></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><input type="checkbox" name="hypertension" id="hypertension" value="Y" /> <label for="hypertension">a. Hypertension</label></div>
                                        <div class="col"><input type="checkbox" name="thyroid" id="thyroid" value="Y" /> <label for="thyroid">d. Thyroid Disorder</label></div>
                                        <div class="col"><input type="checkbox" name="epilepsy" id="epilepsy" value="Y" /> <label for="epilepsy">g. Epilepsy</label></div>
                                        <div class="col"><input type="checkbox" name="cesarian" id="cesarian" value="Y" /> <label for="cesarian">j. History of previous cesarian section</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><input type="checkbox" name="heart" id="heart" value="Y" /> <label for="heart">b. Heart Disease</label></div>
                                        <div class="col"><input type="checkbox" name="obesity" id="obesity" value="Y" /> <label for="obesity">e. Obesity</label></div>
                                        <div class="col"><input type="checkbox" name="renal" id="renal" value="Y" /> <label for="renal">h. Renal disease</label></div>
                                        <div class="col"><input type="checkbox" name="myonectomy" id="myonectomy" value="Y" /> <label for="myonectomy">k. History of uterine myomectomy</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><input type="checkbox" name="diabetes" id="diabetes" value="Y" /> <label for="diabetes">c. Diabetes</label></div>
                                        <div class="col"><input type="checkbox" name="asthma" id="asthma" value="Y" /> <label for="asthma">f. Moderate to severe asthma</label></div>
                                        <div class="col"><input type="checkbox" name="bleeding" id="bleeding" value="Y" /> <label for="bleeding">i. Bleeding disorders</label></div>
                                        <div class="col"></div>
                                    </div>

                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>5. Admitting Diagnosis</b></label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="admission_diagnosis" name="admission_diagnosis" value="" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>6. Delivery Plan</b></label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">a. Orientation to MCP/Availment of Benefits</div>
                                        <div class="col-2">
                                            <div class="form-check form-check-inline mr-1">
                                                <input class="form-check-input" id="inline-checkbox1" name="mcp" type="radio" value="Y">
                                                <label class="form-check-label" for="inline-checkbox1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline mr-1">
                                                <input class="form-check-input" id="inline-checkbox2" name="mcp" type="radio" value="N">
                                                <label class="form-check-label" for="inline-checkbox2">No</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="expectdeliverydte">b. Expected date of delivery</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="expectdeliverydte" type="date" name="expectdeliverydte">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="pLeftEyeIOLStickerNumber"><b>7. Follow-up Prenatal Consultation</b></label>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>2ND</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte2">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte2" type="date" name="prenataldte2">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog2">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog2" name="aog2" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight2">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight2" name="weight2" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac2">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac2" name="cardiac2" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory2">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory2" name="respiratory2" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood2">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood2" name="blood2" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature2">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature2" name="temperature2" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>3RD</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte3">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte3" type="date" name="prenataldte3">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog3">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog3" name="aog3" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight3">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight3" name="weight3" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac3">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac3" name="cardiac3" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory3">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory3" name="respiratory3" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood3">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood3" name="blood3" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature3">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature3" name="temperature3" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>4TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte4">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte4" type="date" name="prenataldte4">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog4">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog4" name="aog4" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight4">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight4" name="weight4" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac4">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac4" name="cardiac4" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory4">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory4" name="respiratory4" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood4">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood4" name="blood4" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature4">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature4" name="temperature4" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>5TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte5">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte5" type="date" name="prenataldte5">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog5">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog5" name="aog5" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight5">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight5" name="weight5" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac5">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac5" name="cardiac5" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory5">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory5" name="respiratory5" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood5">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood5" name="blood5" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature5">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature5" name="temperature5" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>6TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte6">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte6" type="date" name="prenataldte6">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog6">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog6" name="aog6" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight6">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight6" name="weight6" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac6">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac6" name="cardiac6" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory6">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory6" name="respiratory6" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood6">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood6" name="blood6" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature6">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature6" name="temperature6" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>7TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte7">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte7" type="date" name="prenataldte7">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog7">AOG in weeks:</label>
                                                    <input class="form-control" id="aog7" name="aog7" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight7">Weight:</label>
                                                    <input class="form-control" id="weight7" name="weight7" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac7">Cardiac Rate:</label>
                                                    <input class="form-control" id="cardiac7" name="cardiac7" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory7">Respiratory Rate:</label>
                                                    <input class="form-control" id="respiratory7" name="respiratory7" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood7">Blood Pressure:</label>
                                                    <input class="form-control" id="blood7" name="blood7" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature7">Temperature:</label>
                                                    <input class="form-control" id="temperature7" name="temperature7" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>8TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte8">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte8" type="date" name="prenataldte8">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog8">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog8" name="aog8" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight8">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight8" name="weight8" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac8">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac8" name="cardiac8" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory8">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory8" name="respiratory8" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood8">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood8" name="blood8" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature8">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature8" name="temperature8" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>9TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte9">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte9" type="date" name="prenataldte9">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog9">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog9" name="aog9" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight9">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight9" name="weight9" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac9">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac9" name="cardiac9" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory9">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory9" name="respiratory9" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood9">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood9" name="blood9" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature9">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature9" name="temperature9" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>10TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte10">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte10" type="date" name="prenataldte10">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog10">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog10" name="aog10" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight10">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight10" name="weight10" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac10">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac10" name="cardiac10" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory10">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory10" name="respiratory10" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood10">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood10" name="blood10" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature10">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature10" name="temperature10" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-md-1">
                                            <label>11TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte11">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte11" type="date" name="prenataldte11">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog11">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog11" name="aog11" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight11">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight11" name="weight11" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac11">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac11" name="cardiac11" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory11">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory11" name="respiratory11" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood11">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood11" name="blood11" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature11">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature11" name="temperature11" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-1">
                                            <label>12TH</label>
                                        </div>

                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte12">Date Of Visit:</label>
                                                    <input class="form-control form-control-sm" id="prenataldte12" type="date" name="prenataldte12">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog12">AOG in weeks:</label>
                                                    <input class="form-control form-control-sm" id="aog12" name="aog12" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight12">Weight:</label>
                                                    <input class="form-control form-control-sm" id="weight12" name="weight12" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="cardiac12">Cardiac Rate:</label>
                                                    <input class="form-control form-control-sm" id="cardiac12" name="cardiac12" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="respiratory12">Respiratory Rate:</label>
                                                    <input class="form-control form-control-sm" id="respiratory12" name="respiratory12" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="blood12">Blood Pressure:</label>
                                                    <input class="form-control form-control-sm" id="blood12" name="blood12" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="temperature12">Temperature:</label>
                                                    <input class="form-control form-control-sm" id="temperature12" name="temperature12" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-actions pull-right">
                                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="delivery_outcome" role="tabpanel" aria-labelledby="delivery_outcome-tab">
                        <br>
                        <form id="delivery_outcome_form">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">DELIVERY OUTCOME</b>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>8. Date and Time of Delivery</b></label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="deliverydte">Date</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="deliverydte" type="date" name="deliverydte">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="deliverytme">Time</label>
                                                <div class="col-md-9">
                                                    <input type="datetime-local" class="form-control form-control-sm" id="deliverytme" name="deliverytme">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label><b>9. Maternal Outcome:</b></label>
                                        </div>

                                        <div class="col-md">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="prenataldte12">Obstetric Index</label>
                                                    <input class="form-control form-control-sm" id="obindex" type="text" name="obindex">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mr-1">Pregnancy Uterine,</label>
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="aog">AOG by LMP</label>
                                                    <input class="form-control form-control-sm" id="aog" name="aog" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="lmp">Manner of Delivery</label>
                                                    <input class="form-control form-control-sm" id="lmp" name="lmp" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="del_presentation">Presentation</label>
                                                    <input class="form-control form-control-sm" id="del_presentation" name="del_presentation" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label><b>10. Birth Outcome:</b></label>
                                        </div>

                                        <div class="col-md">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="mr-1" for="fetal">Fetal Outcome</label>
                                                    <input class="form-control form-control-sm" id="fetal" type="text" name="fetal">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="gender">Sex</label>
                                                    <input class="form-control form-control-sm" id="gender" name="gender" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="weight">Birth Weight (grm)</label>
                                                    <input class="form-control form-control-sm" id="weight" name="weight" type="text">
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mx-1" for="apgar">APGAR Score</label>
                                                    <input class="form-control form-control-sm" id="apgar" name="apgar" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>11. Scheduled Postpartum follow-up consultation 1 week after delivery</b></label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <div class="col-md">
                                                    <input class="form-control form-control-sm" id="nextconsultdte" type="date" name="nextconsultdte">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>12. Date and Time of Discharge</b></label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="discharge_date">Date</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="discharge_date" type="date" name="dispostion[discharge_date]" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="discharge_time">Time</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="discharge_time" type="time" name="dispostion[discharge_time]" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-actions pull-right">
                                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="postpartum" role="tabpanel" aria-labelledby="postpartum-tab">
                        <br>
                        <form id="postpartum_form">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">POSTPARTUM CARE</b>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label><b>13. Perineal wound care</b></label>
                                        </div>

                                        <div class="col-md-1">
                                            <input type="checkbox" name="woundcare" id="woundcare" value="Y" />
                                            <label for="woundcare">Done</label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-right" for="woundcare_rem">Remarks</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="woundcare_rem" type="text" name="woundcare_rem">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label><b>14. Signs of Maternal Postpartum Complications</b></label>
                                        </div>

                                        <div class="col-md-1">
                                            <input type="checkbox" name="complication" id="complication" value="Y" />
                                            <label for="complication">Done</label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-right" for="complication_rem">Remarks</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="complication_rem" type="text" name="complication_rem">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>15. Counselling and Education</b></label>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label>a. Breastfeeding and Nutrition</label>
                                        </div>

                                        <div class="col-md-1">
                                            <input type="checkbox" name="breastfeeding" id="breastfeeding" value="Y" />
                                            <label for="breastfeeding">Done</label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-right" for="breastfeeding_rem">Remarks</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="breastfeeding_rem" type="text" name="breastfeeding_rem">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label>b. Family Planning</label>
                                        </div>

                                        <div class="col-md-1">
                                            <input type="checkbox" name="fplanning" id="fplanning" value="Y" />
                                            <label for="fplanning">Done</label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-right" for="fplanning_rem">Remarks</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="fplanning_rem" type="text" name="fplanning_rem">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label><b>16. Provided family planning service to patient (as requested by patient)</b></label>
                                        </div>

                                        <div class="col-md-1">
                                            <input type="checkbox" name="fpservice" id="fpservice" value="Y" />
                                            <label for="fpservice">Done</label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-right" for="fpservice_rem">Remarks</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="fpservice_rem" type="text" name="fpservice_rem">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label><b>17. Referred to partner physician for Voluntary Surgical Sterilization (as requested by pt.)</b></label>
                                        </div>

                                        <div class="col-md-1">
                                            <input type="checkbox" name="sterilization" id="sterilization" value="Y" />
                                            <label for="sterilization">Done</label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-right" for="sterilization_rem">Remarks</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="sterilization_rem" type="text" name="sterilization_rem">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label><b>18. Schedule the next postpartum follow-up</b></label>
                                        </div>

                                        <div class="col-md-1">
                                            <input type="checkbox" name="postpartumff" id="postpartumff" value="Y" />
                                            <label for="postpartumff">Done</label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-right" for="postpartumff_rem">Remarks</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="postpartumff_rem" type="text" name="postpartumff_rem">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-5">
                                            <label><b>19. Certification of Attending Physician/Midwife:</b></label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label" for="physician">Name of Attending Physician/Midwife</label>
                                                <div class="col-md-6">
                                                    <select class="form-multi-select" data-coreui-multiple="false"  data-width="100%" name="attenddr_doc" id="attenddr_doc">
                                                        <option value=""></option>
                                                    </select>
                                                    <!-- input class="form-control form-control-sm" id="attenddr" type="text" name="attenddr" -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="sign_date">Date Signed</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="attendsigndate" type="date" name="attendsigndate">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-actions pull-right">
                                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

        getObgynHistoryData(enccode);
        getPresentIllnessHistoryData(enccode);

        $('.submitForm').on('click', function(e) {
            e.preventDefault();

            $("#present_illness_history_form").trigger('submit');
            $("#obgyn_history_form").trigger('submit');
            $("#pertinent_laboratory_diagnostic_form").trigger('submit');
        });

        $('.submitPhysicalExamForm').on('click', function(e) {
            e.preventDefault();

            $("#vital_signs_form").trigger('submit');
            $("#physical_examination_form").trigger('submit');
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

    $("#physical-exam-tab").on("click", function() {
        const enccode = $("#enccode").val();

        getVitalSignsData(enccode);
        getPhysicalExaminationData(enccode);
    });

    $("#ward-tab").on("click", function() {
        const enccode = $("#enccode").val();

        getCourseInTheWardAllData(enccode);
    });

    $("#prenatal-tab").on("click", function() {
        var enccode = $("#enccode").val();

        getPrenatalData(enccode);
    });

    $("#delivery_outcome-tab").on("click", function() {
        var enccode = $("#enccode").val();

        getDeliveryOutcomeData(enccode);
    });

    $("#postpartum-tab").on("click", function() {
        var enccode = $("#enccode").val();

        getPostpartumData(enccode);
    });
</script>

<script src="<?php echo base_url() ?>assets/scripts/philhealth/postpartum.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/delivery_outcome.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/prenatal.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/course_in_the_ward.js"></script>