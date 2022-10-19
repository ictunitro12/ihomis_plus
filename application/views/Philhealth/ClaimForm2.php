<div class="row">
    <div class="col">

    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <div class="h3 text text-success">
                            <i class="fa fa-file-text-o"></i>
                            &nbsp PHILHEALTH CLAIM FORM 2
                        </div>
                    </div>
                    <div class="col">
                        <a href="javascript:void(0)" id="patientsearch" data-toggle="tooltip" title="Search Patient" class="btn btn-success btn-md btn-ladda ladda-button pull-right" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-search"></i></span><span class="ladda-spinner"></span></a>
                        <a href="<?php
                                    $enccode = urlencode(urlencode($enccode));
                                    echo base_url() . 'Philhealth/generateClaimForm2PDF/' . $enccode;
                                    ?>" target="_blank" id="printclaimform2" data-toggle="tooltip" title="Print Claim Form 2" class="btn btn-success btn-md btn-ladda ladda-button pull-right" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-print" aria-hidden="true"></i></span><span class="ladda-spinner"></span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-user"></i>&nbsp NAME OF PATIENT:</b>
                        <span class="text text-success" id="patientname"></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp HEALTH RECORD NUMBER:</b>
                        <span class="text text-success" id="healthrecordnumber"></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-check-square-o"></i>&nbsp ENCOUNTER:</b>
                        <span class="text text-success" id="encounter"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-user"></i>&nbsp MEMBER:</b>
                        <a href="" class="text text-success" id="member"></a>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-hospital-o"></i>&nbsp CLAIM TYPE:</b>
                        <span class="text text-success" id="claimtype"></span>
                    </div>
                    <div class="col-md"></div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text text-success active" id="confineinfo-tab" data-toggle="tab" href="#confineinfo" role="tab" aria-controls="confineinfo" aria-expanded="true"><i class="fa fa-hospital-o fa-2x"></i>&nbsp CONFINEMENT INFORMATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="diagnosis-tab" data-toggle="tab" href="#diagnosis" role="tab" aria-controls="diagnosis" aria-expanded="true"><i class="fa fa-user-md fa-2x"></i>&nbsp DIAGNOSES/PROCEDURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="specialcon-tab" data-toggle="tab" href="#specialcon" role="tab" aria-controls="specialcon"><i class="fa fa-plus-square fa-2x"></i>&nbsp SPECIAL CONSIDERATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="profserv-tab" data-toggle="tab" href="#profserv" role="tab" aria-controls="profserv"><i class="fa fa-credit-card fa-2x"></i> PROFESSIONAL FEES/CHARGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="benefits-tab" data-toggle="tab" href="#benefits" role="tab" aria-controls="benefits"><i class="fa fa-bar-chart  fa-2x"></i> CONSUMPTION OF BENEFITS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="consent-tab" data-toggle="tab" href="#consent" role="tab" aria-controls="consent"><i class="fa fa-file-o fa-2x"></i> CONSENT</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="confineinfo" role="tabpanel" aria-labelledby="confineinfo-tab">
                        <br>
                        <form action="">
                            <!--div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>                                
                            </div -->
                            <div class="row">
                                <div class="col">
                                    <span>Was patient referred by another Health Care Institution (HCI)?</span>
                                    <span id="ppatientreffered" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Name of referring Health Care Institution:</span>
                                    <span id="referringhci" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Address:</span>
                                    <span id="referringhciaddress" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span>Confinement Period</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Date Admitted:</span>
                                    <span id="admdate" class="font-weight-bold"></span>
                                </div>
                                <div class="col">
                                    <span>Time Admitted:</span>
                                    <span id="admtime" class="font-weight-bold"></span>
                                </div>
                                <div class="col">
                                    <span>Date Discharged:</span>
                                    <span id="disdate" class="font-weight-bold"></span>
                                </div>
                                <div class="col">
                                    <span>Time Discharged:</span>
                                    <span id="distime" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span>Patient Disposition:</span>
                                    <span id="disposition" class="font-weight-bold"></span>
                                </div>
                                <div class="col">
                                    <span>Expired Date:</span>
                                    <span id="expireddate" class="font-weight-bold"></span>
                                </div>
                                <div class="col">
                                    <span>Expired Time:</span>
                                    <span id="expiredtime" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Name of Referral Health Care Institution:</span>
                                    <span id="referralhci" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Address:</span>
                                    <span id="referralhciaddress" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Reason for Referral:</span>
                                    <span id="preferralreason" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span>Type of Accomodation:</span>
                                    <span id="paccomodationtype" class="font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Admission Diagnosis/es:</span>
                                    <span id="admissiondiagnosis" class="font-weight-bold"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="diagnosis" role="tabpanel" aria-labelledby="diagnosis-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <table id="DiagnosisTable" class="table table-sm table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">DIAGNOSIS</th>
                                            <th style="width: 15%;" scope="col">ICD 10 CODE</th>
                                            <th style="width: 6rem;" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table id="ProcedureTable" class="table table-sm table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">PROCEDURE</th>
                                            <th style="width: 10%;" scope="col">RVS CODE</th>
                                            <th style="width: 10%;" scope="col">DATE</th>
                                            <th style="width: 10%;" scope="col">LATERALITY</th>
                                            <th style="width: 15%;" scope="col">SPECIAL CONSIDERATION</th>
                                            <th style="width: 6rem;" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="specialcon" role="tabpanel" aria-labelledby="specialcon-tab">
                        <form id="specialForm">
                            <input type="hidden" id="specialFormEnccode" name="specialFormEnccode" value="<?php echo $enccode; ?>">
                            <input type="hidden" id="cnt_abite" name="cnt_abite">
                            <input type="hidden" id="cnt_catar" name="cnt_catar">
                            <input type="hidden" id="cnt_mcpkg" name="cnt_mcpkg">
                            <input type="hidden" id="cnt_newbo" name="cnt_newbo">
                            <input type="hidden" id="cnt_tbdot" name="cnt_tbdot">
                            <input type="hidden" id="cnt_opdha" name="cnt_opdha">
                            <input type="hidden" id="ptbttype" name="ptbttype">
                            <br>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">CATARACT CLAIM INFORMATION</b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="pCataractPreAuth">Cataract Pre-Authorization Application Number:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="pCataractPreAuth" name="pCataractPreAuth">
                                            </div>
                                            <!--span id="pCataractPreAuth"></span -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="pLeftEyeIOLStickerNumber">Left Eye IOL Sticker Number:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="pLeftEyeIOLStickerNumber" name="pLeftEyeIOLStickerNumber">
                                                <!--span id="pLeftEyeIOLStickerNumber"></span -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="pLeftEyeIOLExpiryDate">Left Eye IOL Expiry Date:</label>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="date" id="pLeftEyeIOLExpiryDate" name="pLeftEyeIOLExpiryDate">
                                                <!--span id="pLeftEyeIOLExpiryDate"></span-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="pRightEyeIOLStickerNumber">Right Eye IOL Sticker Number:</label>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="pRightEyeIOLStickerNumber" name="pRightEyeIOLStickerNumber">
                                                <!--span id="pRightEyeIOLStickerNumber"></span-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="pRightEyeIOLExpiryDate">Right Eye IOL Expiry Date:</label>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="date" id="pRightEyeIOLExpiryDate" name="pRightEyeIOLExpiryDate">
                                                <!--span id="pLeftEyeIOLExpiryDate"></span-->
                                            </div>
                                            <!--span id="pRightEyeIOLExpiryDate"></span-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">Z-BENEFIT PACKAGE</b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label for="pzbenefitcode">Z-Benefit Package Code:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <!--span id="pzbenefitcode"></span-->
                                                <input class="form-control form-control-sm" type="text" id="pzbenefitcode" name="pzbenefitcode">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">MCP PACKAGE</b>
                                            <span>(enumerate four dates [mm-dd-yyyy] of pre-natal check-ups)</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pcheckupdate1_label">1.</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" aria-describedby="pcheckupdate1_label" id="pcheckupdate1" name="pcheckupdate1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pcheckupdate2_label">2.</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" aria-describedby="pcheckupdate1_label" id="pcheckupdate2" name="pcheckupdate2">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pcheckupdate3_label">3.</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" aria-describedby="pcheckupdate1_label" id="pcheckupdate3" name="pcheckupdate3">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pcheckupdate4_label">4.</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" aria-describedby="pcheckupdate1_label" id="pcheckupdate4" name="pcheckupdate4">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="plmp">Last Menstrual Period:</label>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="date" id="plmp" name="plmp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">TB DOTS PACKAGE</b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pntpcardNo_label">NTP Card No.:</span>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" id="pntpcardNo" name="pntpcardNo" aria-describedby="pntpcardNo_label">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="I" id="intensive" name="intensive">
                                                <label class="form-check-label" for="intensive">
                                                    Intensive Phase
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="M" id="maintenance" name="maintenance">
                                                <label class="form-check-label" for="maintenance">
                                                    Maintenance Phase
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">ANIMAL BITE PACKAGE</b>
                                            <span>(write the dates [mm-dd-yyyy] when the following doses of vaccine were given)</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pday0arv_label">Day 0 ARV</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" id="pday0arv" name="pday0arv" aria-describedby="pday0arv_label">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pday3arv_label">Day 3 ARV</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" id="pday3arv" name="pday3arv" aria-describedby="pday3arv_label">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pday7arv_label">Day 7 ARV</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" id="pday7arv" name="pday7arv" aria-describedby="pday7arv_label">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="prig_label">RIG</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" id="prig" name="prig" aria-describedby="prig_label">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pabpothers_label">Other Date</span>
                                                </div>
                                                <input type="date" class="form-control form-control-sm" id="pabpothers" name="pabpothers" aria-describedby="pabpothers_label">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="pabpspecify_label">Others (Specify)</span>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" id="pabpspecify" name="pabpspecify" aria-describedby="pabpspecify_label">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">NEWBORN CARE PACKAGE</b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check" name="pessentialnewborncare-check">
                                                <input class="form-check-input" type="checkbox" value="Y" id="pessentialnewborncare" name="pessentialnewborncare">
                                                <label class="form-check-label" for="pessentialnewborncare">
                                                    Essential Newborn Care
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Y" id="pnewbornhearingscreeningtest" name="pnewbornhearingscreeningtest">
                                                <label class="form-check-label" for="pnewbornhearingscreeningtest">
                                                    Newborn Hearing Screening Test
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Y" id="pnrebornscreeningtest" name="pnrebornscreeningtest">
                                                <label class="form-check-label" for="pnrebornscreeningtest">
                                                    Newborn Screening Test
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="pfiltercardno">Filter Card No.</label>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-sm" id="pfiltercardno" name="pfiltercardno">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    For Essential Newborn Care, (check applicable boxes)
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pdrying" name="pdrying">
                                                        <label class="form-check-label" for="pdrying">
                                                            Immediate drying of newborn
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pcordclamping" name="pcordclamping">
                                                        <label class="form-check-label" for="pcordclamping">
                                                            Timely cord clamping
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pweighing" name="pweighing">
                                                        <label class="form-check-label" for="pweighing">
                                                            Weighing of the newborn
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pbcg" name="pbcg">
                                                        <label class="form-check-label" for="pbcg">
                                                            BCG vaccination
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pskintoskin" name="pskintoskin">
                                                        <label class="form-check-label" for="pskintoskin">
                                                            Early skin-to-skin contact
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pprophylaxis" name="pprophylaxis">
                                                        <label class="form-check-label" for="pprophylaxis">
                                                            Eye prophylaxis
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pvitamink" name="pvitamink">
                                                        <label class="form-check-label" for="pvitamink">
                                                            Vitamin K administration
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="phepatitisb" name="phepatitisb">
                                                        <label class="form-check-label" for="phepatitisb">
                                                            Hepatitis B vaccination
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Y" id="pnonseparation" name="pnonseparation">
                                                        <label class="form-check-label" for="pnonseparation">
                                                            Non-separation of mother/baby for early breastfeeding initiation
                                                        </label>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">OUTPATIENT HIV/AIDS TREATMENT PACKAGE</b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="plaboratorynumber">Laboratory Number:</label>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-sm" id="plaboratorynumber" name="plaboratorynumber">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profserv" role="tabpanel" aria-labelledby="profserv-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <b class="text text-success">ACCREDITED HEALTH CARE PROFESSIONAL / CHARGES</b>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive" style="overflow-x: visible; overflow-y: visible;">
                            <table id="ProfessionalTable" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>HEALTH CARE PROFESSIONAL</th>
                                        <th>ACCREDITATION NUMBER</th>
                                        <th>WITH CO-PAY?</th>
                                        <th>CO-PAYMENT AMOUNT</th>
                                        <th>DATE SIGNED</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">
                        <br>
                        <form id="frmBenefits">
                            <input type="hidden" id="benefitsEnccode" name="benefitsEnccode" value="<?php echo $enccode; ?>">
                            <input type="hidden" id="penoughbenefits" name="penoughbenefits">
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <b class="text text-success">PHILHEALTH BENEFITS</b>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    ICD 10 or RVS Code
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="firstcase">a. First Case Rate</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <select name="firstcase" id="firstcase" class="form-control form-control-sm">
                                                </select>
                                            </div>
                                            <!--div class="form-group">
                                            <input type="text" name="firstcase" id="firstcase" class="form-control form-control-sm"> 
                                        </div -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="amt1">Primary Case Rate:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="number" readonly name="amt1" id="amt1" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="amthosp1">Primary HCI Fee:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="number" name="amthosp1" id="amthosp1" min="0" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="amtpf1">Primary Prof Fee:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="number" name="amtpf1" id="amtpf1" min="0" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="secondcase">b. Second Case Rate</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <select name="secondcase" id="secondcase" class="form-control form-control-sm">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="amt2">Second Case Rate:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="number" readonly name="amt2" id="amt2" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="amthosp2">Secondary HCI Fee:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="number" name="amthosp2" id="amthosp2" min="0" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="amtpf2">Secondary Prof Fee:</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="number" name="amtpf2" id="amtpf2" min="0" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            Total PhilHealth Benefit HCI:
                                        </div>
                                        <div class="col">
                                            <span class="font-weight-bold" id="philhealthbenehci_1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            Total PhilHealth Benefit PF:
                                        </div>
                                        <div class="col">
                                            <span class="font-weight-bold" id="philhealthbenepf_1"></span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="pdischargediag1" name="pdischargediag1">
                                <input type="hidden" id="picdcode1" name="picdcode1">
                                <input type="hidden" id="prelatedprocedure1" name="prelatedprocedure1">
                                <input type="hidden" id="prvscode1" name="prvscode1">
                                <input type="hidden" id="pdischargediag2" name="pdischargediag2">
                                <input type="hidden" id="picdcode2" name="picdcode2">
                                <input type="hidden" id="prelatedprocedure2" name="prelatedprocedure2">
                                <input type="hidden" id="prvscode2" name="prvscode2">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">CERTIFICATION OF CONSUMPTION OF BENEFITS</b>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="penough" name="penough" value="Y">
                                                        <label class="form-check-label" for="penough">PhilHealth benefit is enough to cover HCI and PF charges.<br>No purchases of drugs/medicines, supplies, diagnostics, and co-pay for professional fees by the member/patient.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5">
                                                    <div class="row">
                                                        <div class="col border">
                                                        </div>
                                                        <div class="col border text-center font-weight-bold">
                                                            Total Actual Charges*
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col border font-weight-bold">
                                                            Total Health Care Institution Fees
                                                        </div>
                                                        <div class="col border text-center font-weight-bold">
                                                            <input type="hidden" id="ptotalhcifeesval" name="ptotalhcifeesval">
                                                            <span id="ptotalhcifees"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col border font-weight-bold">
                                                            Total Professional Fees
                                                        </div>
                                                        <div class="col border text-center font-weight-bold">
                                                            <input type="hidden" id="ptotalproffeesval" name="ptotalproffeesval">
                                                            <span id="ptotalproffees"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col border font-weight-bold">
                                                            Grand Total
                                                        </div>
                                                        <div class="col border text-center font-weight-bold">
                                                            <input type="hidden" id="pgrandtotalval" name="pgrandtotalval">
                                                            <span id="pgrandtotal"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="pexcess" name="pexcess" value="Y">
                                                        <label class="form-check-label" for="pexcess">The benefit of the member/patient was completely consumed prior to co-pay OR the benefit of the member/patient is not completely consumed BUT with purchases/expenses for drugs/medicines, supplies, diagnostics and others.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col px-5">
                                                            a.) The total co-pay for the following are:
                                                            <table class="table table-bordered table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th class="text-center">Total Actual Charges*</th>
                                                                        <th class="text-center">Amount after Application of<br>Discount (i.e., personal discount,<br>Senior Citizen/PWD</th>
                                                                        <th class="text-center">PhilHealth Benefit</th>
                                                                        <th class="text-center">Amount after PhilHealth Deduction</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Total Health Care<br>Institution Fees</th>
                                                                        <td>
                                                                            <input type="hidden" id="ptotalactualchargeshcival" name="ptotalactualchargeshcival">
                                                                            <span id="ptotalactualchargeshci"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input type="hidden" id="pdiscounthcival" name="pdiscounthcival">
                                                                            <span id="pdiscounthci"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input type="hidden" id="philhealthbenehcival" name="philhealthbenehcival">
                                                                            <span id="philhealthbenehci"></span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group input-group-sm">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text" id="ptotalamouthci_label">Amount P</span>
                                                                                        </div>
                                                                                        <input type="number" min="0" step="0.01" id="ptotalamouthci" name="ptotalamouthci" class="form-control form-control-sm" aria-describedby="ptotalamouthci_label">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    Paid by (Check all that applies):
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group form-check">
                                                                                        <input type="checkbox" class="form-check-input" id="pmemberpatienthci" name="pmemberpatienthci" value="Y">
                                                                                        <label class="form-check-label" for="pmemberpatienthci">Member/Patient</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group form-check">
                                                                                        <input type="checkbox" class="form-check-input" id="phmohci" name="phmohci" value="Y">
                                                                                        <label class="form-check-label" for="phmohci">HMO</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group form-check">
                                                                                        <input type="checkbox" class="form-check-input" id="pothershci" name="pothershci" value="Y">
                                                                                        <label class="form-check-label" for="pothershci">Others (i.e., PCSO, Promissory note, etc.)</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Total Professional Fees<br>(for accredited<br>and non-accredited<br>professionals)
                                                                        </th>
                                                                        <td>
                                                                            <input type="hidden" id="ptotalactualchargespfval" name="ptotalactualchargespfval">
                                                                            <span id="ptotalactualchargespf"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input type="hidden" id="pdiscountpfval" name="pdiscountpfval">
                                                                            <span id="pdiscountpf"></span>
                                                                        </td>
                                                                        <td>
                                                                            <input type="hidden" id="philhealthbenepfval" name="philhealthbenepfval">
                                                                            <span id="philhealthbenepf"></span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group input-group-sm">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text" id="ptotalamoutpf_label">Amount P</span>
                                                                                        </div>
                                                                                        <input type="number" min="0" step="0.01" id="ptotalamoutpf" name="ptotalamoutpf" class="form-control form-control-sm" aria-describedby="ptotalamoutpf_label">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    Paid by (Check all that applies):
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group form-check">
                                                                                        <input type="checkbox" class="form-check-input" id="pmemberpatientpf" name="pmemberpatientpf" value="Y">
                                                                                        <label class="form-check-label" for="pmemberpatientpf">Member/Patient</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group form-check">
                                                                                        <input type="checkbox" class="form-check-input" id="phmopf" name="phmopf" value="Y">
                                                                                        <label class="form-check-label" for="phmopf">HMO</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group form-check">
                                                                                        <input type="checkbox" class="form-check-input" id="potherspf" name="potherspf" value="Y">
                                                                                        <label class="form-check-label" for="potherspf">Others (i.e., PCSO, Promissory note, etc.)</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col px-5">
                                                    b.) Purchases/Expenses NOT included in the Health Care Institution Charges
                                                </div>
                                            </div>
                                            <div class="px-5">
                                                <div class="row">
                                                    <input type="hidden" id="pmedssuppliesout" name="pmedssuppliesout">
                                                    <div class="col-6 border">
                                                        Total cost of purchase/s for drugs/medicines and/or medical supplies bought by the patient/member within/outside the HCI during confinement
                                                    </div>
                                                    <div class="col-6 border">
                                                        <div class="row pt-2">
                                                            <div class="col">
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input" id="medsuppliesoutno" name="medsuppliesoutno" value="Y">
                                                                    <label class="form-check-label" for="medsuppliesoutno">None</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input" id="medsuppliesoutyes" name="medsuppliesoutyes" value="Y">
                                                                    <label class="form-check-label" for="medsuppliesoutyes">Total Amount</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="pdmsttotal_label">P</span>
                                                                    </div>
                                                                    <input type="number" min="0" step="0.01" id="pdmsttotal" name="pdmsttotal" class="form-control form-control-sm" aria-describedby="pdmsttotal_label">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <input type="hidden" id="pexaminationsout" name="pexaminationsout">
                                                    <div class="col-6 border">
                                                        Total cost of diagnostic/laboratory examinations paid for by the patient/member done within/outside the HCI during confinement
                                                    </div>
                                                    <div class="col-6 border">
                                                        <div class="row pt-2">
                                                            <div class="col">
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input" id="pexaminationsoutno" name="pexaminationsoutno" value="Y">
                                                                    <label class="form-check-label" for="pexaminationsoutno">None</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" class="form-check-input" id="pexaminationsoutyes" name="pexaminationsoutyes" value="Y">
                                                                    <label class="form-check-label" for="pexaminationsoutyes">Total Amount</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="pexamstotal_label">P</span>
                                                                    </div>
                                                                    <input type="number" min="0" step="0.01" id="pexamstotal" name="pexamstotal" class="form-control form-contrl-sm" aria-describedby="pexamstotal_label">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="consent" role="tabpanel" aria-labelledby="consent-tab">
                        <br>
                        <form id="frmConsent">
                            <input type="hidden" id="consentEnccode" name="consentEnccode" value="<?php echo $enccode; ?>">
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <b class="text text-success">CONSENT TO ACCESS PATIENT RECORD/S</b>
                                </div>
                            </div>                
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="consentSign" id="memberSign" value="M">
                                        <label class="form-check-label" for="memberSign">Member</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="consentSign" id="patientSign" value="P">
                                        <label class="form-check-label" for="patientSign">Patient</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="consentSign" id="representativeSign" value="R">
                                        <label class="form-check-label" for="representativeSign">Representative</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span id="consentSignError"></span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="consentname">Name of Member/Patient/Authorized Representative</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-sm" id="consentname" name="consentname">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="consentdate">Date Signed</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="date" class="form-control form-control-sm" id="consentdate" name="consentdate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="pRelCode">Relationship of the representative to the member/patient</label>
                                        </div>
                                        <div class="col">
                                            <select name="pRelCode" id="pRelCode" class="form-control form-control-sm" disabled>
                                                <option value="">Select Relationship</option>
                                                <option value="S">Spouse</option>
                                                <option value="C">Child</option>
                                                <option value="P">Parent</option>
                                                <option value="I">Sibling</option>
                                                <option value="O">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="pRelDesc">Others, specify</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" disabled class="form-control form-control-sm" id="pRelDesc" name="pRelDesc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="pReasonCode">Reason for signing on behalf of the member/patient</label>
                                        </div>
                                        <div class="col">
                                            <select name="pReasonCode" id="pReasonCode" disabled class="form-control form-control-sm">
                                                <option value="">Select Reason</option>
                                                <option value="I">Patient is Incapacitated</option>
                                                <option value="O">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <label for="pReasonDesc">Others reason</label>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" disabled class="form-control form-control-sm" id="pReasonDesc" name="pReasonDesc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="pThumbMarkedBy">If patient/representative is unable to write, thumbmark by</label>
                                </div>
                                <div class="col-3">
                                    <select name="pThumbMarkedBy" id="pThumbMarkedBy" class="form-control form-control-sm">
                                        <option value="">Select</option>
                                        <option value="P">Patient</option>
                                        <option value="R">Representative</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <b class="text text-success">CERTIFICATION OF CONSUMPTION OF HEALTH CARE INSTITUTION</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="form-group"> 
                                        <label for="authsign_doc" class="col-form-label text-left">Name of Authorized HCI Representative:</label> 
                                        <select class="form-multi-select" data-coreui-multiple="false"  data-width="100%" name="authsign_doc" id="authsign_doc">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-group"> 
                                        <label for="authsigndate" class="col-form-label text-left">Date Signed:</label> 
                                        <input type="date" class="form-control form-control-sm" id="authsigndate" name="authsigndate"> 
                                    </div>
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

<form name="frmDeleteDiagnosis" id="frmDeleteDiagnosis">
    <input type="hidden" id="deldiag_enccode" name="deldiag_enccode">
    <input type="hidden" id="deldiag_cnt" name="deldiag_cnt">
    <input type="hidden" id="delicdcode" name="delicdcode">
    <div class="modal fade" id="ModalDeleteDiagnosis" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class="fa fa-trash-o"></i>&nbsp <span id="delDiagnosis"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form name="frmDeleteProcedure" id="frmDeleteProcedure">
    <input type="hidden" id="delproc_enccode" name="delproc_enccode">
    <input type="hidden" id="delproc_cnt" name="delproc_cnt">
    <input type="hidden" id="delrvscode" name="delrvscode">
    <div class="modal fade" id="ModalDeleteProcedure" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class="fa fa-trash-o"></i>&nbsp <span id="delProcedure"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- form name="frmIncludeProfessional" id="frmIncludeProfessional">
    <input type="hidden" name="exclude_profenccode" id="exclude_profenccode">
    <input type="hidden" name="exclude_profctr" id="exclude_profctr">
    <input type="hidden" name="exclude_proflicno" id="exclude_proflicno">
    <input type="hidden" name="exclude_profdoctype" id="exclude_profdoctype">
    <div class="modal fade" id="ModalIncludeProfessional" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class="fa fa-user-o"></i>&nbsp <span id="includeprofessional"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer bg-secondary">
                    <-- button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Exclude</button>
                    <a href="javascript:void(0);" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in" id="excludePfBtn"><i class="fa fa-trash"></i>&nbsp Exclude</a>
                </div>
            </div>
        </div>
    </div>
</form -->

<form id="frmEditProfservice" method="post">
    <div class="modal" id="ModalEditProfservice" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-m" role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-body border-success">
                    <h1 class="modal-title text-success"><i class="fa fa-edit"></i> <span id="addclaimheader">Edit Professional Fees/Charges</span></h1>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <b class="text text-success"><i class="fa fa-user"></i>&nbsp HEALTH CARE PROFESSIONAL:</b>
                            <a class="pull-right text text-success" id="profname">N/A</a>
                        </li>
                    </ul>
                    <hr>
                    <div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required in the submission of claim!</div>
                    <input type="hidden" name="profenccode" id="profenccode">
                    <input type="hidden" name="profctr" id="profctr">
                    <input type="hidden" name="proflicno" id="proflicno">
                    <input type="hidden" name="profdoctype" id="profdoctype">
                    <div class="form-group">
                        <label for="profaccreno">Include Professional <i class="fa fa-asterisk text-danger"></i></label>
                        <select name="pinclude" id="pinclude" class="form-control form-control-mb">
                            <option value="">Select to include</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profaccreno">Accreditation No. <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="text" class="form-control" id="profaccreno" name="profaccreno" placeholder="Accreditation No.">
                    </div>
                    <div class="form-group">
                        <label for="profwithcopay">With Co-pay? <i class="fa fa-asterisk text-danger"></i></label>
                        <select name="profwithcopay" id="profwithcopay" class="form-control form-control-mb">
                            <option value="">Select If with co-pay?</option>
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profcopayment">Co-payment Amount</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="profcopayment" name="profcopayment" placeholder="Co-payment Amount" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="profdatesigned">Date Signed <i class="fa fa-asterisk text-danger"></i></label>
                        <input type="date" class="form-control" id="profdatesigned" name="profdatesigned">
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" name="sSubmit" class="btn btn-success btn-lg	btn-block btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> &nbsp SAVE</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php echo ViewSearchPatient(); ?>

<form id="frmCaseRateSearchList">
    <div class="modal" id="CaseRateSearchList" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="modal-title text-success"><i class="fa fa-th-list"></i> All Case Rate</h1>
                    <h4>
                        <ul class="list-group list-group-horizontal" id="casRateList">
                            <li class="list-group-item"><i class="fa fa-times text-danger" aria-hidden="true"></i> List icons can</li>
                        </ul>
                    </h4>
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
                    <a href="javascript:void(0);" class="btn btn-success btn-square btn-ladda btn-lg" id="selectCaseRateBtn" data-style="zoom-in"><i class="fa fa-check"></i></a>
                    <a href="javascript:void(0);" class="btn btn-danger btn-square btn-ladda btn-lg" id="closeCaseRateModalBtn" data-style="zoom-in"><i class="fa fa-close"></i></a>                    
                </div>
            </div>
        </div>
    </div>
</form>

<input type="hidden" id="enccode" name="enccode" value="<?php echo $enccode; ?>">
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/scripts/philhealth/diagnoses.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/procedures.js"></script>
<script>
    const baseURI = $('#base_url').val();

    $(document).ready(function() {
        var enccode = $("#enccode").val();
        loadConfinementInfo(enccode);
        jQuery.validator.addMethod("validateConsentDate",function(value, element, param){
			var elementVal = $(element).val();
            if(elementVal == "" || elementVal == "1970-01-01" || elementVal == "1900-01-01"){
                return false;
            }
			return true;
		},"Invalid value for Date Signed");

        setAuthHCIRep($("#frmConsent"));
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

    $("#diagnosis-tab").on("click", function() {
        var enccode = $("#enccode").val();
        loadClaimDischargeDiagnoses(enccode);
        loadClaimProcedures(enccode);
    });

    $("#confineinfo-tab").on("click", function() {
        var enccode = $("#enccode").val();
        loadConfinementInfo(enccode);
    });

    function loadConfinementInfo(enccode) {
        var obj = ConfinementInfo(enccode);
        $("#patientname").text(obj['patientname']);
        $("#healthrecordnumber").text(obj['hpercode']);
        $("#encounter").text(obj['encounter']);
        $("#claimtype").text(obj['claimtype']);
        $("#member").text(obj['memname']);
        $("#member").prop("href", baseURI + "Philhealth/Claims/" + obj['phicnum']);
        var referringhciaddress = null;
        if (obj['ppatientreffered'] == 'Y') {
            $("#ppatientreffered").text('YES');
            referringhciaddress = getHCIAddress(obj['referringhfhudcode']);
            $("#referringhciaddress").text(referringhciaddress['hciaddress']);
        } else {
            $("#ppatientreffered").text('NO');
        }
        $("#referringhci").text(obj['referringhci']);
        $("#admdate").text($.datepicker.formatDate('mm/dd/yy', new Date(obj['padmissiondatetime'])));
        var confineinfo_admtime = new Date(obj['padmissiondatetime']);
        $("#admtime").text(formatAMPM(confineinfo_admtime));
        if (obj['pdischargedatetime']) {
            $("#disdate").text($.datepicker.formatDate('mm/dd/yy', new Date(obj['pdischargedatetime'])));
            var confineinfo_distime = new Date(obj['pdischargedatetime']);
            $("#distime").text(formatAMPM(confineinfo_distime));
        }
        $("#disposition").text(obj['disposition']);
        var referralhciaddress = null;
        if (obj['disposition'] == 'TRANSFERRED/REFERRED') {
            referralhciaddress = getHCIAddress(obj['referralhfhudcode']);
            $("#referralhciaddress").text(referralhciaddress['hciaddress']);
        }
        $("#referralhci").text(obj['referralhci']);
        $("#preferralreason").text(obj['preferralreasons']);
        if (obj['paccomodationtype'] == 'P') {
            $("#paccomodationtype").text('PRIVATE');
        } else if (obj['paccomodationtype'] == 'N') {
            $("#paccomodationtype").text('NON-PRIVATE');
        }
        $("#admissiondiagnosis").text(obj['admdiagnosis']);
    }

    function getHCIAddress(hfhudcode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/getHCIAddress",
            data: {
                hfhudcode: hfhudcode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    function ConfinementInfo(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/ConfinementInfo",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $("#specialcon-tab").on("click", function() {
        var enccode = $("#enccode").val();
        loadSpecialConsideration(enccode);
    });

    function loadSpecialConsideration(enccode) {
        $('#specialForm').trigger("reset");
        var obj = SpecialConsideration(enccode);
        $("#cnt_abite").val(obj['cnt_abite']);
        $("#cnt_catar").val(obj['cnt_catar']);
        $("#cnt_mcpkg").val(obj['cnt_mcpkg']);
        $("#cnt_newbo").val(obj['cnt_newbo']);
        $("#cnt_newbo").val(obj['cnt_newbo']);
        $("#cnt_opdha").val(obj['cnt_opdha']);
        $("#cnt_opdha").val(obj['cnt_opdha']);

        if (obj['cnt_catar'] < 1) {
            $("#pCataractPreAuth").prop('disabled', true);
            $("#pLeftEyeIOLStickerNumber").prop('disabled', true);
            $("#pLeftEyeIOLExpiryDate").prop('disabled', true);
            $("#pRightEyeIOLStickerNumber").prop('disabled', true);
            $("#pRightEyeIOLExpiryDate").prop('disabled', true);
        } else {
            $("#pCataractPreAuth").prop('disabled', false);
            $("#pLeftEyeIOLStickerNumber").prop('disabled', false);
            $("#pLeftEyeIOLExpiryDate").prop('disabled', false);
            $("#pRightEyeIOLStickerNumber").prop('disabled', false);
            $("#pRightEyeIOLExpiryDate").prop('disabled', false);
        }

        $("#pCataractPreAuth").val(obj['pCataractPreAuth']);
        $("#pLeftEyeIOLStickerNumber").val(obj['pLeftEyeIOLStickerNumber']);
        if (obj['pLeftEyeIOLExpiryDate'] != null) {
            $("#pLeftEyeIOLExpiryDate").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['pLeftEyeIOLExpiryDate'])));
        }
        $("#pRightEyeIOLStickerNumber").val(obj['pRightEyeIOLStickerNumber']);
        if (obj['pRightEyeIOLExpiryDate'] != null) {
            $("#pRightEyeIOLExpiryDate").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['pRightEyeIOLExpiryDate'])));
        }
        $("#pzbenefitcode").val(obj['pzbenefitcode']);

        if (obj['cnt_mcpkg'] < 1) {
            $("#pcheckupdate1").prop('disabled', true);
            $("#pcheckupdate2").prop('disabled', true);
            $("#pcheckupdate3").prop('disabled', true);
            $("#pcheckupdate4").prop('disabled', true);
        } else {
            $("#pcheckupdate1").prop('disabled', false);
            $("#pcheckupdate2").prop('disabled', false);
            $("#pcheckupdate3").prop('disabled', false);
            $("#pcheckupdate4").prop('disabled', false);
        }

        if (obj['pcheckupdate1'] != null) {
            $("#pcheckupdate1").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['pcheckupdate1'])));
        }

        if (obj['pcheckupdate2'] != null) {
            $("#pcheckupdate2").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['pcheckupdate2'])));
        }

        if (obj['pcheckupdate3'] != null) {
            $("#pcheckupdate3").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['pcheckupdate3'])));
        }

        if (obj['pcheckupdate4'] != null) {
            $("#pcheckupdate4").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['pcheckupdate4'])));
        }

        if (obj['plmp'] != null) {
            $("#plmp").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['plmp'])));
        }

        if (obj['cnt_tbdot'] < 1) {
            $("#pntpcardNo").prop('disabled', true);
            $("#intensive").prop('disabled', true);
            $("#maintenance").prop('disabled', true);
        } else {
            $("#pntpcardNo").prop('disabled', false);
            $("#intensive").prop('disabled', false);
            $("#maintenance").prop('disabled', false);
        }

        if (obj['cnt_abite'] < 1) {
            $("#pday0arv").prop('disabled', true);
            $("#pday3arv").prop('disabled', true);
            $("#pday7arv").prop('disabled', true);
            $("#prig").prop('disabled', true);
            $("#pabpothers").prop('disabled', true);
            $("#pabpspecify").prop('disabled', true);
        } else {
            $("#pday0arv").prop('disabled', false);
            $("#pday3arv").prop('disabled', false);
            $("#pday7arv").prop('disabled', false);
            $("#prig").prop('disabled', false);
            $("#pabpothers").prop('disabled', false);
            $("#pabpspecify").prop('disabled', false);
        }

        if (obj['cnt_newbo'] < 1) {
            $("#pessentialnewborncare").prop('disabled', true);
            $("#pnewbornhearingscreeningtest").prop('disabled', true);
            $("#pnrebornscreeningtest").prop('disabled', true);
            $("#pfiltercardno").prop('disabled', true);
            $("#pdrying").prop('disabled', true);
            $("#pcordclamping").prop('disabled', true);
            $("#pweighing").prop('disabled', true);
            $("#pbcg").prop('disabled', true);
            $("#pskintoskin").prop('disabled', true);
            $("#pprophylaxis").prop('disabled', true);
            $("#pvitamink").prop('disabled', true);
            $("#pnonseparation").prop('disabled', true);
        } else {
            $("#pessentialnewborncare").prop('disabled', false);
            $("#pnewbornhearingscreeningtest").prop('disabled', false);
            $("#pnrebornscreeningtest").prop('disabled', false);
            $("#pfiltercardno").prop('disabled', false);
            $("#pdrying").prop('disabled', false);
            $("#pcordclamping").prop('disabled', false);
            $("#pweighing").prop('disabled', false);
            $("#pbcg").prop('disabled', false);
            $("#pskintoskin").prop('disabled', false);
            $("#pprophylaxis").prop('disabled', false);
            $("#pvitamink").prop('disabled', false);
            $("#pnonseparation").prop('disabled', false);
        }

        if (obj['pessentialnewborncare'] == 'Y') {
            $("#pessentialnewborncare").prop("checked", true);
            if (obj['pdrying'] == 'Y') {
                $("#pdrying").prop("checked", true);
            }

            if (obj['pcordclamping'] == 'Y') {
                $("#pcordclamping").prop("checked", true);
            }

            if (obj['pweighing'] == 'Y') {
                $("#pweighing").prop("checked", true);
            }

            if (obj['pbcg'] == 'Y') {
                $("#pbcg").prop("checked", true);
            }

            if (obj['pskintoskin'] == 'Y') {
                $("#pskintoskin").prop("checked", true);
            }

            if (obj['pprophylaxis'] == 'Y') {
                $("#pprophylaxis").prop("checked", true);
            }

            if (obj['pvitamink'] == 'Y') {
                $("#pvitamink").prop("checked", true);
            }

            if (obj['pnonseparation'] == 'Y') {
                $("#pnonseparation").prop("checked", true);
            }
        } else {
            $("#pdrying").prop("disabled", true);
            $("#pcordclamping").prop("disabled", true);
            $("#pweighing").prop("disabled", true);
            $("#pbcg").prop("disabled", true);
            $("#pskintoskin").prop("disabled", true);
            $("#pprophylaxis").prop("disabled", true);
            $("#pvitamink").prop("disabled", true);
            $("#pnonseparation").prop("disabled", true);
        }

        if (obj['pnewbornhearingscreeningtest'] == 'Y') {
            $("#pnewbornhearingscreeningtest").prop("checked", true);
        }

        if (obj['pnrebornscreeningtest'] == 'Y') {
            $("#pnrebornscreeningtest").prop("checked", true);
            $("#pfiltercardno").val(obj['pfiltercardno']);
        } else {
            $("#pfiltercardno").val(null);
            $("#pfiltercardno").prop('disabled', true);
        }

        if (obj['pdrying'] == 'Y') {
            $("#pdrying").prop("checked", true);
        }

        if (obj['pcordclamping'] == 'Y') {
            $("#pcordclamping").prop("checked", true);
        }

        if (obj['pweighing'] == 'Y') {
            $("#pweighing").prop("checked", true);
        }

        if (obj['pbcg'] == 'Y') {
            $("#pbcg").prop("checked", true);
        }

        if (obj['pskintoskin'] == 'Y') {
            $("#pskintoskin").prop("checked", true);
        }

        if (obj['pprophylaxis'] == 'Y') {
            $("#pprophylaxis").prop("checked", true);
        }

        if (obj['pvitamink'] == 'Y') {
            $("#pvitamink").prop("checked", true);
        }

        if (obj['pnonseparation'] == 'Y') {
            $("#pnonseparation").prop("checked", true);
        }

        if (obj['phepatitisb'] == 'Y') {
            $("#phepatitisb").prop("checked", true);
        }

        if (obj['cnt_opdha'] < 1) {
            $("#plaboratorynumber").prop("disabled", true);
        } else {
            $("#plaboratorynumber").prop("disabled", false);
        }

        $("#plaboratorynumber").val(obj['plaboratorynumber']);
    }

    function SpecialConsideration(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/SpecialConsideration",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $('#specialForm').validate({
        submitHandler: function(form) {
            var POSTURL = baseURI + "Philhealth/updateSpecialConsideration";
            $.ajax({
                type: "POST",
                url: POSTURL,
                dataType: "JSON",
                cache: false,
                async: true,
                data: $(form).serialize(),
                success: function(data) {
                    toastr.success('Special Consideration Successfully Updated!', 'Success');
                },
                error: function(data) {
                    toastr.error('Error on saving!', 'Error');
                }
            });
            return false;
            $(form).submit();
        },
        rules: {
            pLeftEyeIOLExpiryDate: {
                required: {
                    depends: function(element) {
                        return $("#pLeftEyeIOLStickerNumber").val() != '' && $("#pLeftEyeIOLStickerNumber").val() != undefined && $("#pLeftEyeIOLStickerNumber").val() != null;
                    }
                }
            },
            pLeftEyeIOLStickerNumber: {
                required: {
                    depends: function(element) {
                        return $("#pLeftEyeIOLExpiryDate").val() != '' && $("#pLeftEyeIOLExpiryDate").val() != undefined && $("#pLeftEyeIOLExpiryDate").val() != null;
                    }
                }
            },
            pRightEyeIOLExpiryDate: {
                required: {
                    depends: function(element) {
                        return $("#pRightEyeIOLStickerNumber").val() != '' && $("#pRightEyeIOLStickerNumber").val() != undefined && $("#pRightEyeIOLStickerNumber").val() != null;
                    }
                }
            },
            pRightEyeIOLStickerNumber: {
                required: {
                    depends: function(element) {
                        return $("#pRightEyeIOLExpiryDate").val() != '' && $("#pRightEyeIOLExpiryDate").val() != undefined && $("#pRightEyeIOLExpiryDate").val() != null;
                    }
                }
            },
            pcheckupdate1: {
                required: {
                    depends: function(element) {
                        return $("#cnt_mcpkg").val() > 0;
                    }
                }
            },
            pcheckupdate2: {
                required: {
                    depends: function(element) {
                        return $("#cnt_mcpkg").val() > 0;
                    }
                }
            },
            pcheckupdate3: {
                required: {
                    depends: function(element) {
                        return $("#cnt_mcpkg").val() > 0;
                    }
                }
            },
            pcheckupdate4: {
                required: {
                    depends: function(element) {
                        return $("#cnt_mcpkg").val() > 0;
                    }
                }
            },
            pntpcardNo: {
                required: {
                    depends: function(element) {
                        return $("#cnt_tbdot").val() > 0;
                    }
                }
            },
            ptbttype: {
                required: {
                    depends: function(element) {
                        return $("#cnt_tbdot").val() > 0;
                    }
                }
            },
            pday0arv: {
                required: {
                    depends: function(element) {
                        return $("#cnt_abite").val() > 0;
                    }
                }
            },
            pday3arv: {
                required: {
                    depends: function(element) {
                        return $("#cnt_abite").val() > 0;
                    }
                }
            },
            pday7arv: {
                required: {
                    depends: function(element) {
                        return $("#cnt_abite").val() > 0;
                    }
                }
            },
            prig: {
                required: {
                    depends: function(element) {
                        return $("#cnt_abite").val() > 0;
                    }
                }
            },
            pabpothers: {
                required: {
                    depends: function(element) {
                        return $("#pabpspecify").val() != '' && $("#pabpspecify").val() != undefined && $("#pabpspecify").val() != null;
                    }
                }
            },
            pabpspecify: {
                required: {
                    depends: function(element) {
                        return $("#pabpothers").val() != '' && $("#pabpothers").val() != undefined && $("#pabpothers").val() != null;
                    }
                }
            },
            pessentialnewborncare: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == false;
                    }
                }
            },
            pfiltercardno: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pnrebornscreeningtest").prop("checked") == true;
                    }
                }
            },
            pdrying: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true && $("#pdrying").prop("checked") == false;
                    }
                }
            },
            pcordclamping: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            pweighing: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            pbcg: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            pskintoskin: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            pprophylaxis: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            pvitamink: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            pnonseparation: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            phepatitisb: {
                required: {
                    depends: function(element) {
                        return $("#cnt_newbo").val() > 0 && $("#pessentialnewborncare").prop("checked") == true;
                    }
                }
            },
            plaboratorynumber: {
                required: {
                    depends: function(element) {
                        return $("#cnt_opdha").val() > 0;
                    }
                }
            }
        },
        messages: {
            pCataractPreAuth: 'required',
            pLeftEyeIOLExpiryDate: 'Left Eye IOL Expiry Date required!',
            pLeftEyeIOLStickerNumber: 'Left Eye IOL Sticker Number required!',
            pRightEyeIOLExpiryDate: 'Right Eye IOL Expiry Date required!',
            pRightEyeIOLStickerNumber: 'Right Eye IOL Sticker Number required!',
            pcheckupdate1: 'Pre-natal check-up date required!',
            pcheckupdate2: 'Pre-natal check-up date required!',
            pcheckupdate3: 'Pre-natal check-up date required!',
            pcheckupdate4: 'Pre-natal check-up date required!',
            pntpcardNo: 'NTP Cart No. is required!',
            ptbttype: 'Required!',
            pday0arv: 'Date is required!',
            pday3arv: 'Date is required!',
            pday7arv: 'Date is required!',
            prig: 'Date is required!',
            pabpothers: 'Required!',
            pabpspecify: 'Required!',
            pfiltercardno: 'Filter Card No. is required!'
        },
        errorElement: 'span',
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');
            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else {
                error.insertAfter(element);
            }
        },

        highlight: function highlight(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },

        unhighlight: function unhighlight(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        }
    });

    $("#pnrebornscreeningtest").change(function() {
        if ($(this).prop("checked") == false) {
            $("#pfiltercardno").prop('disabled', true);
            $("#pfiltercardno").val(null);
        } else {
            $("#pfiltercardno").prop('disabled', false);
        }
    });

    $("#pnrebornscreeningtest").change(function() {
        if ($(this).prop("checked") == false) {
            $("#pfiltercardno").prop('disabled', true);
            $("#pfiltercardno").val(null);
        } else {
            $("#pfiltercardno").prop('disabled', false);
        }
    });

    $("#pessentialnewborncare").change(function() {
        if ($(this).prop("checked") == false) {
            $("#pdrying").prop("disabled", true);
            $("#pcordclamping").prop("disabled", true);
            $("#pweighing").prop("disabled", true);
            $("#pbcg").prop("disabled", true);
            $("#pskintoskin").prop("disabled", true);
            $("#pprophylaxis").prop("disabled", true);
            $("#pvitamink").prop("disabled", true);
            $("#pnonseparation").prop("disabled", true);
            $("#phepatitisb").prop("disabled", true);
            $("#pdrying").prop("checked", false);
            $("#pcordclamping").prop("checked", false);
            $("#pweighing").prop("checked", false);
            $("#pbcg").prop("checked", false);
            $("#pskintoskin").prop("checked", false);
            $("#pprophylaxis").prop("checked", false);
            $("#pvitamink").prop("checked", false);
            $("#pnonseparation").prop("checked", false);
            $("#phepatitisb").prop("checked", false);
        } else {
            $("#pdrying").prop("disabled", false);
            $("#pcordclamping").prop("disabled", false);
            $("#pweighing").prop("disabled", false);
            $("#pbcg").prop("disabled", false);
            $("#pskintoskin").prop("disabled", false);
            $("#pprophylaxis").prop("disabled", false);
            $("#pvitamink").prop("disabled", false);
            $("#pnonseparation").prop("disabled", false);
            $("#phepatitisb").prop("disabled", false);
        }
    });

    function loadProfessionalServices(enccode) {
        $('#ProfessionalTable').off();
        var obj = ProfessionalServices(enccode);
        var dataset = obj['data'];
        var table = $('#ProfessionalTable').DataTable({
            "destroy": true,
            data: dataset,
            "paging": false,
            "searching": false,
            "info": false,
            "language": '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....',
            columns: [{
                    data: "enccode"
                },
                {
                    data: "licno"
                },
                {
                    data: "profctr"
                },
                {
                    data: "pinclude"
                },
                {
                    data: "doctorname"
                },
                {
                    data: "pdoctoraccrecode"
                },
                {
                    data: "pwithcopay"
                },
                {
                    data: "pcopayamount"
                },
                {
                    data: "pdoctorsigndate"
                },
                {
                    data: "action"
                }
            ],
            columnDefs: [{
                    targets: [0, 1, 2],
                    visible: false
                },
                {
                    targets: [8],
                    render: function(data, type, row) {
                        return $.datepicker.formatDate('mm/dd/yy', new Date(data));
                    }
                },
                {
                    targets: [3],
                    render: function(data, type, row) {
                        if (data == 'Y') {
                            return '<h4><i class="fa fa-check text-success" aria-hidden="true"></i></h4>';
                        } else {
                            return '<h4><i class="fa fa-times text-danger" aria-hidden="true"></i></h4>';
                        }
                    },
                    "orderable": false
                },
                {
                    targets: [6],
                    render: function(data, type, row) {
                        if (data == 'Y') {
                            return 'YES';
                        } else {
                            return 'NO';
                        }
                    },
                    "orderable": false
                },
                {
                    targets: [9],
                    "orderable": false
                }
            ]
        });

        $('#ProfessionalTable').on('click', 'input', function(event) {
            event.preventDefault();
            var data = table.row($(this).parents('tr')).data();
            var licno = data['licno'];
            var ctr = data['profctr'];
            var doctorname = data['doctorname'];
            var doctype = data['doctype'];
            var enccode = data['enccode'];
            var include = data['pinclude'];
            if(include == 'Y'){
                if ($(this).prop('checked') == false) {
                    $('#ModalIncludeProfessional').modal('show');
                    $("#includeprofessional").text(doctorname);
                }
                $("#exclude_profenccode").val(enccode);
                $("#exclude_profctr").val(ctr);
                $("#exclude_proflicno").val(licno);
                $("#exclude_profdoctype").val(doctype);
            }else{
                var POSTURL = baseURI + "Philhealth/excludeProfessional";
                $.ajax({
                    type: "POST",
                    url: POSTURL,
                    dataType: "JSON",
                    cache: false,
                    async: true,
                    data: {enccode:enccode,profctr:ctr,licno:licno,doctype:doctype,include:'Y'},
                    success: function(data) {
                    toastr.success('Professional Successfully Updated! ', 'Success');
                    /*var enccode = $("#enccode").val();*/
                    loadProfessionalServices(enccode);
                },
                    error: function(data) {
                    toastr.error('Error on saving!', 'Error');
                }
        });
            }
        });

        $('#ProfessionalTable').on('click', '.ModalEditProfServ', function() {
            var enccode = $(this).data('enccode');
            var profctr = $(this).data('profctr');
            var proflicno = $(this).data('licno');
            var profdoctype = $(this).data('doctype');
            var include = $(this).data('pinclude');
            var profservice = ProfessionalService(enccode, proflicno, profctr, profdoctype);
            $("#pinclude").val(include).change();;
            $("#profenccode").val(enccode);
            $("#profctr").val(profctr);
            $("#proflicno").val(proflicno);
            $("#profdoctype").val(profdoctype);
            $("#profname").text(profservice['doctorname']);
            $("#profaccreno").val(profservice['pdoctoraccrecode']);
            $("#profwithcopay").val(profservice['pwithcopay']);
            if (profservice['pwithcopay'] == 'Y') {
                $("#profcopayment").prop('disabled', false);
                $("#profcopayment").val(profservice['pcopayamount']);
            } else {
                $("#profcopayment").prop('disabled', true);
                $("#profcopayment").val(null);
            }
            $("#profdatesigned").val($.datepicker.formatDate('yy-mm-dd', new Date(profservice['pdoctorsigndate'])));
            $("#ModalEditProfservice").modal('show');
        });
    }

    $("#profwithcopay").change(function() {
        if ($(this).val() == 'Y') {
            $("#profcopayment").prop('disabled', false);
        } else {
            $("#profcopayment").val(null);
            $("#profcopayment").prop('disabled', true);
        }
    });

    $("#profserv-tab").on("click", function() {
        var enccode = $("#enccode").val();
        loadProfessionalServices(enccode);
    });

    function ProfessionalService(enccode, proflicno, profctr, profdoctype) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/ProfessionalService",
            data: {
                enccode: enccode,
                proflicno: proflicno,
                profctr: profctr,
                profdoctype: profdoctype
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    function ProfessionalServices(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/ProfessionalServices",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $('#frmEditProfservice').validate({
        submitHandler: function(form) {
            var POSTURL = baseURI + "Philhealth/updateProfessionalService";
            $.ajax({
                type: "POST",
                url: POSTURL,
                dataType: "JSON",
                cache: false,
                async: true,
                data: $(form).serialize(),
                success: function(data) {
                    toastr.success('Professional Successfully Updated! ', 'Success');
                    var enccode = $("#enccode").val();
                    loadProfessionalServices(enccode);
                    $("#ModalEditProfservice").modal('hide');
                },
                error: function(data) {
                    toastr.error('Error on saving!', 'Error');
                }
            });
            return false;
            $(form).submit();
        },
        rules: {
            include: "required",
            profaccreno: 'required',
            profcopayment: {
                required: {
                    depends: function(element) {
                        return $("#profwithcopay").val() == 'Y';
                    }
                }
            }
        },
        messages: {
            profaccreno: 'Accreditation No. is required!',
            profcopayment: 'Co-payment amount is required!',
            include: 'Co-payment amount is required!'
        },
        errorElement: 'span',
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');
            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else if (element.hasClass('select2-hidden-accessible')) {
                element = $("#selReg" + element.attr("id") + "ul").parent();
                error.insertAfter(element);
            } else {
                error.insertAfter(element);
            }
        },

        highlight: function highlight(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
            if ($(element).hasClass('select2-offscreen')) {
                element = $("#s2id_" + element.attr("id") + " ul").parent();
                $(element).addClass('is-invalid').removeClass('is-valid');
            }
        },

        unhighlight: function unhighlight(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
            if ($(element).hasClass('select2-offscreen')) {
                $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
            }
        }
    });

    $("#benefits-tab").on("click", function() {
        var enccode = $("#enccode").val();
        loadConsumptionofBenefits(enccode);
    });

    function loadConsumptionofBenefits(enccode) {
        var obj = ConsumptionofBenefits(enccode);
        $("#firstcase").empty().append("<option value=''>Select First Case</option>");
        $.get(baseURI + "Philhealth/getFirstCases/" + enccode, function(data) {
            for (i in data) {
                if (obj['firstcase'] == data[i].casecode) {
                    $("#firstcase").append("<option value='" + data[i].casecode + "' selected>" + data[i].casecode + "</option>");
                } else {
                    $("#firstcase").append("<option value='" + data[i].casecode + "'>" + data[i].casecode + "</option>");
                }
            }
        }, "json");

        $("#secondcase").empty().append("<option value=''>Select Second Case</option>");
        $.get(baseURI + "Philhealth/getSecondCases/" + enccode, function(data) {
            for (i in data) {
                if (obj['secondcase'] == data[i].casecode) {
                    $("#secondcase").append("<option value='" + data[i].casecode + "' selected>" + data[i].casecode + "</option>");
                } else {
                    $("#secondcase").append("<option value='" + data[i].casecode + "'>" + data[i].casecode + "</option>");
                }
            }
        }, "json");

        if (obj['firstcase'] == null || obj['firstcase'] == 'null' || obj['firstcase'] == undefined || obj['firstcase'] == '') {
            $("#secondcase").prop('disabled', true)
        }

        $("#amt1").val(obj['amt1']);
        $("#amthosp1").val(obj['amthosp1']);
        $("#amtpf1").val(obj['amtpf1']);

        $("#amt2").val(obj['amt2']);
        $("#amthosp2").val(obj['amthosp2']);
        $("#amtpf2").val(obj['amtpf2']);

        if (obj['secondcase'] == null || obj['secondcase'] == 'null' || obj['secondcase'] == undefined || obj['secondcase'] == '') {
            $("#amt2").val(null);
            $("#amthosp2").val(null);
            $("#amtpf2").val(null);
            $("#amt2").prop('disabled', true);
            $("#amthosp2").prop('disabled', true);
            $("#amtpf2").prop('disabled', true);
        }

        var philhealthbenehci_1 = numFormatter.format(obj['philhealthbenehci']);
        /*$("#philhealthbenehci_1").text(obj['philhealthbenehci']);*/
        $("#philhealthbenehci_1").text(philhealthbenehci_1);

        var philhealthbenepf_1 = numFormatter.format(obj['philhealthbenepf']);
        /*$("#philhealthbenepf_1").text(obj['philhealthbenepf']);*/
        $("#philhealthbenepf_1").text(philhealthbenepf_1);

        $("#ptotalhcifees").text(numFormatter.format(obj['ptotalhcifees']));
        $("#ptotalproffees").text(numFormatter.format(obj['ptotalproffees']));
        $("#pgrandtotal").text(numFormatter.format(obj['pgrandtotal']));
        $("#ptotalhcifeesval").val(obj['ptotalhcifees']);
        $("#ptotalproffeesval").val(obj['ptotalproffees']);
        $("#pgrandtotalval").val(obj['pgrandtotal']);

        if (obj['pdischargediag1'] == null) {
            $("#pdischargediag1").prop('disabled', true);
        } else {
            $("#pdischargediag1").prop('disabled', false);
            $("#pdischargediag1").val(obj['pdischargediag1']);
        }

        if (obj['picdcode1'] == null) {
            $("#picdcode1").prop('disabled', true);
        } else {
            $("#picdcode1").prop('disabled', false);
            $("#picdcode1").val(obj['picdcode1']);
        }

        if (obj['prelatedprocedure1'] == null) {
            $("#prelatedprocedure1").prop('disabled', true);
        } else {
            $("#prelatedprocedure1").prop('disabled', false);
            $("#prelatedprocedure1").val(obj['prelatedprocedure1']);
        }

        if (obj['prvscode1'] == null) {
            $("#prvscode1").prop('disabled', true);
        } else {
            $("#prvscode1").prop('disabled', false);
            $("#prvscode1").val(obj['prvscode1']);
        }

        if (obj['pdischargediag2'] == null) {
            $("#pdischargediag2").prop('disabled', true);
        } else {
            $("#pdischargediag2").prop('disabled', false);
            $("#pdischargediag2").val(obj['pdischargediag2']);
        }

        if (obj['picdcode2'] == null) {
            $("#picdcode2").prop('disabled', true);
        } else {
            $("#picdcode2").prop('disabled', false);
            $("#picdcode2").val(obj['picdcode2']);
        }

        if (obj['prelatedprocedure2'] == null) {
            $("#prelatedprocedure2").prop('disabled', true);
        } else {
            $("#prelatedprocedure2").prop('disabled', false);
            $("#prelatedprocedure2").val(obj['prelatedprocedure2']);
        }

        if (obj['prvscode2'] == null) {
            $("#prvscode2").prop('disabled', true);
        } else {
            $("#prvscode2").prop('disabled', false);
            $("#prvscode2").val(obj['prvscode2']);
        }

        if (obj['penough'] == 'Y') {
            $('#penough').prop('checked', true);
            $("#penoughbenefits").val('Y');
        } else {
            excess();
        }

        $("#ptotalactualchargeshci").text(numFormatter.format(obj['ptotalactualchargeshci']));
        $("#ptotalactualchargeshcival").val(numFormatter.format(obj['ptotalactualchargeshci']));
        $("#pdiscounthci").text(numFormatter.format(obj['pdiscounthci']));
        $("#pdiscounthcival").val(numFormatter.format(obj['pdiscounthci']));
        $("#philhealthbenehci").text(numFormatter.format(obj['philhealthbenehci']));
        $("#philhealthbenehcival").val(numFormatter.format(obj['philhealthbenehci']));
        $("#ptotalactualchargespf").text(numFormatter.format(obj['ptotalactualchargespf']));
        $("#ptotalactualchargespfval").val(numFormatter.format(obj['ptotalactualchargespf']));
        $("#pdiscountpf").text(numFormatter.format(obj['pdiscountpf']));
        $("#pdiscountpfval").val(numFormatter.format(obj['pdiscountpf']));
        $("#philhealthbenepf").text(numFormatter.format(obj['philhealthbenepf']));
        $("#philhealthbenepfval").val(numFormatter.format(obj['philhealthbenepf']));
        if (obj['pexcess'] == 'Y') {
            $("#pexcess").prop("checked", true);
            $("#penoughbenefits").val('N');
            $("#ptotalamouthci").val(obj['ptotalamouthci']);
            $("#ptotalamoutpf").val(obj['ptotalamoutpf']);
            if (obj['pmemberpatienthci'] == 'Y') {
                $("#pmemberpatienthci").prop('checked', true);
            }
            if (obj['phmohci'] == 'Y') {
                $("#phmohci").prop('checked', true);
            }
            if (obj['pothershci'] == 'Y') {
                $("#pothershci").prop('checked', true);
            }

            if (obj['pmemberpatientpf'] == 'Y') {
                $("#pmemberpatientpf").prop('checked', true);
            }
            if (obj['phmopf'] == 'Y') {
                $("#phmopf").prop('checked', true);
            }
            if (obj['potherspf'] == 'Y') {
                $("#potherspf").prop('checked', true);
            }

            $("#pexaminationsout").val(obj['pexaminationsout']);
            $("#pmedssuppliesout").val(obj['pmedssuppliesout']);

            if (obj['pmedssuppliesout'] == 'Y') {
                $("#medsuppliesoutyes").prop('checked', true);
                $('#pdmsttotal').val(obj['pdmsttotal']);
            } else {
                $("#medsuppliesoutno").prop('checked', true);
                $("#pdmsttotal").prop('disabled', true);
            }
            
            if (obj['pexaminationsout'] == 'Y') {
                $("#pexaminationsoutyes").prop('checked', true);
                $('#pexamstotal').val(obj['pexamstotal']);
            } else {
                $("#pexaminationsoutno").prop('checked', true);
                $("#pexamstotal").prop('disabled', true);
            }
        } else {
            enough();
        }
    }

    function excess() {
        $("#ptotalhcifees").hide();
        $("#ptotalproffees").hide();
        $("#pgrandtotal").hide();
        $("#ptotalhcifees").prop('disabled', true);
        $("#ptotalproffees").prop('disabled', true);
        $("#pgrandtotal").prop('disabled', true);
    }

    function enough() {
        $("#ptotalactualchargeshci").hide();
        $("#ptotalactualchargeshcival").prop('disabled', true);
        $("#pdiscounthci").hide();
        $("#pdiscounthcival").prop('disabled', true);
        $("#philhealthbenehci").hide();
        $("#ptotalactualchargespf").hide();
        $("#ptotalactualchargespfval").prop('disabled', true);
        $("#pdiscountpf").hide();
        $("#pdiscountpfval").prop('disabled', true);
        $("#philhealthbenepf").hide();
        $("#ptotalamouthci").prop('disabled', true);
        $("#ptotalamouthci").val(null);
        $("#ptotalamoutpf").prop('disabled', true);
        $("#ptotalamoutpf").val(null);
        $("#pmemberpatienthci").prop('disabled', true);
        $("#pmemberpatienthci").prop('checked', false);
        $("#phmohci").prop('disabled', true);
        $("#phmohci").prop('checked', false);
        $("#pothershci").prop('disabled', true);
        $("#pothershci").prop('checked', false);
        $("#pmemberpatientpf").prop('disabled', true);
        $("#pmemberpatientpf").prop('checked', false);
        $("#phmopf").prop('disabled', true);
        $("#phmopf").prop('checked', false);
        $("#potherspf").prop('disabled', true);
        $("#potherspf").prop('checked', false);
        $("#pexaminationsout").prop('disabled', true);
        $("#pmedssuppliesout").prop('disabled', true);
        $("#medsuppliesoutyes").prop('disabled', true);
        $("#medsuppliesoutyes").prop('checked', false);
        $('#pdmsttotal').prop('disabled', true);
        $("#medsuppliesoutno").prop('disabled', true);
        $("#medsuppliesoutno").prop('checked', false);
        $("#pexaminationsoutyes").prop('disabled', true);
        $("#pexaminationsoutyes").prop('checked', false);
        $('#pexamstotal').prop('disabled', true);
        $("#pexaminationsoutno").prop('disabled', true);
        $("#pexaminationsoutno").prop('checked', false);
    }

    $("#penough").change(function() {
        if ($(this).prop("checked") == false) {
            excess();
        } else {
            var validator = $("#frmBenefits").validate();
		    validator.resetForm();
            enough();
            $("#pexcess").prop("checked", false);
            $("#penoughbenefits").val('Y');
            $("#ptotalhcifees").show();
            $("#ptotalproffees").show();
            $("#pgrandtotal").show();
            $("#ptotalhcifees").prop('disabled', false);
            $("#ptotalproffees").prop('disabled', false);
            $("#pgrandtotal").prop('disabled', false);
            var enccode = $("#enccode").val();
            var actualcharges = getTotalActualCharges(enccode);

            
            $("#pdiscounthcival").val(numFormatter.format(actualcharges['disamt']));
            $("#pdiscountpfval").val(numFormatter.format(actualcharges['disamtpf']));
            $("#pdiscounthci").text(numFormatter.format(actualcharges['disamt']));
            $("#pdiscountpf").text(numFormatter.format(actualcharges['disamtpf']));

            $("#ptotalhcifees").text(numFormatter.format(actualcharges['totalactualchargeshci']));
            $("#ptotalhcifeesval").val(numFormatter.format(actualcharges['totalactualchargeshci']));
            $("#ptotalproffees").text(numFormatter.format(actualcharges['totalactualchargespf']));
            $("#ptotalproffeesval").val(numFormatter.format(actualcharges['totalactualchargespf']));
            $("#pgrandtotal").text(numFormatter.format(actualcharges['grandtotal']));
            /*var pgrandtotal = parseFloat(actualcharges['totalactualchargeshci']) + parseFloat(actualcharges['totalactualchargespf']);*/
            /*$("#pgrandtotal").text(pgrandtotal);*/
            $("#pgrandtotalval").val(numFormatter.format(actualcharges['grandtotal']));
            $("#pdmsttotal").val("");
            $("#pexamstotal").val("");
        }
    });

    $("#pexcess").change(function() {
        if ($(this).prop('checked') == false) {
            enough();
        } else {
            excess();
            $("#penoughbenefits").val('N');
            $("#penough").prop("checked", false);
            $("#ptotalactualchargeshci").show();
            $("#ptotalactualchargeshcival").prop('disabled', false);
            $("#pdiscounthci").show();
            $("#pdiscounthcival").prop('disabled', false);
            $("#philhealthbenehci").show();
            $("#ptotalactualchargespf").show();
            $("#ptotalactualchargespfval").prop('disabled', false);
            $("#pdiscountpf").show();
            $("#pdiscountpfval").prop('disabled', false);
            $("#philhealthbenepf").show();
            $("#ptotalamouthci").prop('disabled', false);
            $("#ptotalamoutpf").prop('disabled', false);
            $("#pmemberpatienthci").prop('disabled', false);
            $("#phmohci").prop('disabled', false);
            $("#pothershci").prop('disabled', false);
            $("#pmemberpatientpf").prop('disabled', false);
            $("#phmopf").prop('disabled', false);
            $("#potherspf").prop('disabled', false);
            $("#pexaminationsout").prop('disabled', false);
            $("#pmedssuppliesout").prop('disabled', false);
            $("#medsuppliesoutyes").prop('disabled', false);
            $("#medsuppliesoutno").prop('disabled', false);
            $("#pexaminationsoutyes").prop('disabled', false);
            $("#pexaminationsoutno").prop('disabled', false);
            var enccode = $("#enccode").val();
            var actualcharges = getTotalActualCharges(enccode);

            $("#pdiscounthcival").val(numFormatter.format(actualcharges['disamt']));
            $("#pdiscountpfval").val(numFormatter.format(actualcharges['disamtpf']));
            $("#pdiscounthci").text(numFormatter.format(actualcharges['disamt']));
            $("#pdiscountpf").text(numFormatter.format(actualcharges['disamtpf']));

            $("#ptotalactualchargeshci").text(numFormatter.format(actualcharges['totalactualchargeshci']));
            $("#ptotalactualchargeshcival").val(numFormatter.format(actualcharges['totalactualchargeshci']));
            $("#ptotalactualchargespf").text(numFormatter.format(actualcharges['totalactualchargespf']));
            $("#ptotalactualchargespfval").val(numFormatter.format(actualcharges['totalactualchargespf']));
        }
    });

    $("#medsuppliesoutno").change(function() {
        if ($(this).prop('checked') == true) {
            $("#pmedssuppliesout").prop('disabled', true);
            $("#medsuppliesoutyes").prop('checked', false);
            $("#pdmsttotal").prop('disabled', true);
            $("#pdmsttotal").val(null);
        }
    });

    $("#medsuppliesoutyes").change(function() {
        if ($(this).prop('checked') == true) {
            $("#pmedssuppliesout").prop('disabled', false);
            $("#pmedssuppliesout").val('Y');
            $("#medsuppliesoutno").prop('checked', false);
            $("#pdmsttotal").prop('disabled', false);
        } else {
            $("#pmedssuppliesout").prop('disabled', true);
            $("#pdmsttotal").prop('disabled', true);
            $("#pdmsttotal").val(null);
        }
    });

    $("#pexaminationsoutno").change(function() {
        if ($(this).prop('checked') == true) {
            $("#pexaminationsout").prop('disabled', true);
            $("#pexaminationsoutyes").prop('checked', false);
            $("#pexamstotal").prop('disabled', true);
            $("#pexamstotal").val(null);
        }
    });

    $("#pexaminationsoutyes").change(function() {
        if ($(this).prop('checked') == true) {
            $("#pexaminationsout").prop('disabled', false);
            $("#pexaminationsout").val('Y');
            $("#pexaminationsoutno").prop('checked', false);
            $("#pexamstotal").prop('disabled', false);
        } else {
            $("#pexaminationsout").prop('disabled', true);
            $("#pexamstotal").prop('disabled', true);
            $("#pexamstotal").val(null);
        }
    });

    $("#firstcase").change(function() {
        var firstcase;
        if ($(this).val() != '') {
            firstcase = getFirstCase($(this).val());
            $("#amt1").prop('disabled', false);
            $("#amthosp1").prop('disabled', false);
            $("#amtpf1").prop('disabled', false);
            $("#amt1").val(firstcase['firstrate']);
            $("#amthosp1").val(firstcase['firsthosp']);
            $("#amtpf1").val(firstcase['firstpf']);
            $("#secondcase").prop('disabled', false);

            if (firstcase['casetype'] == 'M') {
                $("#pdischargediag1").prop('disabled', false);
                $("#pdischargediag1").val(firstcase['casedesc']);
                $("#picdcode1").prop('disabled', false);
                $("#picdcode1").val($(this).val());
                $("#prelatedprocedure1").prop('disabled', true);
                $("#prvscode1").prop('disabled', true);
            } else {
                $("#prelatedprocedure1").prop('disabled', false);
                $("#prelatedprocedure1").val(firstcase['casedesc']);
                $("#prvscode1").prop('disabled', false);
                $("#prvscode1").val($(this).val());
                $("#pdischargediag1").prop('disabled', true);
                $("#picdcode1").prop('disabled', true);
            }
            computeBenefits();
        } else {
            $("#amt1").val(null);
            $("#amthosp1").val(null);
            $("#amtpf1").val(null);
            $("#amt1").prop('disabled', true);
            $("#amthosp1").prop('disabled', true);
            $("#amtpf1").prop('disabled', true);
            $("#secondcase").val(null);
            $("#amt2").val(null);
            $("#amthosp2").val(null);
            $("#amtpf2").val(null);
            $("#secondcase").prop('disabled', true);
            $("#amt2").prop('disabled', true);
            $("#amthosp2").prop('disabled', true);
            $("#amtpf2").prop('disabled', true);
            $("#pdischargediag1").prop('disabled', true);
            $("#pdischargediag1").val(null);
            $("#picdcode1").prop('disabled', true);
            $("#picdcode1").val(null);
            $("#prelatedprocedure1").prop('disabled', true);
            $("#prelatedprocedure1").val(null);
            $("#prvscode1").prop('disabled', true);
            $("#prvscode1").val(null);
            $("#pdischargediag2").prop('disabled', true);
            $("#pdischargediag2").val(null);
            $("#picdcode2").prop('disabled', true);
            $("#picdcode2").val(null);
            $("#prelatedprocedure2").prop('disabled', true);
            $("#prelatedprocedure2").val(null);
            $("#prvscode2").prop('disabled', true);
            $("#prvscode2").val(null);
            computeBenefits();
        }
    });

    $("#amthosp1").change(function() {
        computeBenefits();
    });

    $("#amtpf1").change(function() {
        computeBenefits();
    });

    $("#amthosp2").change(function() {
        computeBenefits();
    });

    $("#amtpf2").change(function() {
        computeBenefits();
    });

    function computeBenefits() {
        var amthosp1 = $("#amthosp1").val();
        var amtpf1 = $("#amtpf1").val();
        if (isNaN(amthosp1) || amthosp1 == null || amthosp1 == '' || amthosp1 == undefined) {
            amthosp1 = 0;
        }
        if (isNaN(amtpf1) || amtpf1 == null || amtpf1 == '' || amtpf1 == undefined) {
            amtpf1 = 0;
        }
        var amt1 = parseFloat(amthosp1) + parseFloat(amtpf1);
        if (amt1 > 0) {
            $("#amt1").val(amt1);
        } else {
            $("#amt1").val(null);
        }

        var amthosp2 = $("#amthosp2").val();
        if (isNaN(amthosp2) || amthosp2 == null || amthosp2 == '' || amthosp2 == undefined) {
            amthosp2 = 0;
        }

        var amtpf2 = $("#amtpf2").val();
        if (isNaN(amtpf2) || amtpf2 == null || amtpf2 == '' || amtpf2 == undefined) {
            amtpf2 = 0;
        }
        var amt2 = parseFloat(amthosp2) + parseFloat(amtpf2);
        if (amt2 > 0) {
            $("#amt2").val(amt2);
        } else {
            $("#amt2").val(null);
        }

        var philhealthbenehci_1 = parseFloat(amthosp2) + parseFloat(amthosp1);
        philhealthbenehci_1 = numFormatter.format(philhealthbenehci_1);
        if (philhealthbenehci_1 < 1) {
            philhealthbenehci_1 = null;
            $("#philhealthbenehci_1").text('');
            $("#philhealthbenehci").text('');
        } else {
            $("#philhealthbenehci_1").text(philhealthbenehci_1);
            $("#philhealthbenehci").text(philhealthbenehci_1);
        }

        var philhealthbenepf_1 = parseFloat(amtpf1) + parseFloat(amtpf2);
        philhealthbenepf_1 = numFormatter.format(philhealthbenepf_1);
        if (philhealthbenepf_1 < 1) {
            philhealthbenepf_1 = null;
            $("#philhealthbenepf_1").text('');
            $("#philhealthbenepf").text('');
        } else {
            $("#philhealthbenepf_1").text(philhealthbenepf_1);
            $("#philhealthbenepf").text(philhealthbenepf_1);
        }
        $("#philhealthbenehcival").val(philhealthbenehci_1);
        $("#philhealthbenepfval").val(philhealthbenepf_1);
    }

    function getFirstCase(casecode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/getFirstCase",
            data: {
                casecode: casecode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $("#secondcase").change(function() {
        var secondcase;
        if ($(this).val() != '') {
            secondcase = getSecondCase($(this).val());
            $("#amt2").val(secondcase['secondtrate']);
            $("#amthosp2").val(secondcase['secondhosp']);
            $("#amtpf2").val(secondcase['secondpf']);
            $("#amt2").prop('disabled', false);
            $("#amthosp2").prop('disabled', false);
            $("#amtpf2").prop('disabled', false);

            if (secondcase['casetype'] == 'M') {
                $("#pdischargediag2").prop('disabled', false);
                $("#pdischargediag2").val(secondcase['casedesc']);
                $("#picdcode2").prop('disabled', false);
                $("#picdcode2").val($(this).val());
                $("#prelatedprocedure2").prop('disabled', true);
                $("#prvscode2").prop('disabled', true);
            } else {
                $("#prelatedprocedure2").prop('disabled', false);
                $("#prelatedprocedure2").val(secondcase['casedesc']);
                $("#prvscode2").prop('disabled', false);
                $("#prvscode2").val($(this).val());
                $("#pdischargediag2").prop('disabled', true);
                $("#picdcode2").prop('disabled', true);
            }
            computeBenefits();
        } else {
            $("#amt2").val(null);
            $("#amthosp2").val(null);
            $("#amtpf2").val(null);
            $("#amt2").prop('disabled', true);
            $("#amthosp2").prop('disabled', true);
            $("#amtpf2").prop('disabled', true);
            $("#pdischargediag2").prop('disabled', true);
            $("#pdischargediag2").val(null);
            $("#picdcode2").prop('disabled', true);
            $("#picdcode2").val(null);
            $("#prelatedprocedure2").prop('disabled', true);
            $("#prelatedprocedure2").val(null);
            $("#prvscode2").prop('disabled', true);
            $("#prvscode2").val(null);
            computeBenefits();
        }
    });

    function getSecondCase(casecode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/getSecondCase",
            data: {
                casecode: casecode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $('#frmBenefits').validate({
        submitHandler: function(form) {
            var POSTURL = baseURI + "Philhealth/updateBenefits";
            $.ajax({
                type: "POST",
                url: POSTURL,
                dataType: "JSON",
                cache: false,
                async: true,
                data: $(form).serialize(),
                success: function(data) {
                    toastr.success('Consumption of Benefits Successfully Updated!', 'Success');
                },
                error: function(data) {
                    toastr.error('Error on saving!', 'Error');
                }
            });
            return false;
            $(form).submit();
        },
        rules: {
            ptotalamouthci: {
                required: {
                    depends: function(element) {
                        if ($("#pmemberpatienthci").prop('checked') == true || $("#phmohci").prop('checked') == true || $("#pothershci").prop('checked') == true) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            pmemberpatienthci: {
                required: {
                    depends: function(element) {
                        if (($("#ptotalamouthci").val() != '' || $("#ptotalamouthci").val() > 0) && $("#phmohci").prop('checked') == false && $("#pothershci").prop('checked') == false) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            phmohci: {
                required: {
                    depends: function(element) {
                        if (($("#ptotalamouthci").val() != '' || $("#ptotalamouthci").val() > 0) && $("#pmemberpatienthci").prop('checked') == false && $("#pothershci").prop('checked') == false) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            pothershci: {
                required: {
                    depends: function(element) {
                        if (($("#ptotalamouthci").val() != '' || $("#ptotalamouthci").val() > 0) && $("#pmemberpatienthci").prop('checked') == false && $("#phmohci").prop('checked') == false) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            ptotalamoutpf: {
                required: {
                    depends: function(element) {
                        if ($("#pmemberpatientpf").prop('checked') == true || $("#phmopf").prop('checked') == true || $("#potherspf").prop('checked') == true) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            pmemberpatientpf: {
                required: {
                    depends: function(element) {
                        if (($("#ptotalamoutpf").val() != '' || $("#ptotalamoutpf").val() > 0) && $("#phmopf").prop('checked') == false && $("#potherspf").prop('checked') == false) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            phmopf: {
                required: {
                    depends: function(element) {
                        if (($("#ptotalamoutpf").val() != '' || $("#ptotalamoutpf").val() > 0) && $("#pmemberpatientpf").prop('checked') == false && $("#potherspf").prop('checked') == false) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            potherspf: {
                required: {
                    depends: function(element) {
                        if (($("#ptotalamoutpf").val() != '' || $("#ptotalamoutpf").val() > 0) && $("#pmemberpatientpf").prop('checked') == false && $("#phmopf").prop('checked') == false) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            pdmsttotal: {
                required: {
                    depends: function(element) {
                        if (($("#pdmsttotal").val() < 1 || $("#pdmsttotal").val() == '') && $("#medsuppliesoutyes").prop('checked') == true) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            pexamstotal: {
                required: {
                    depends: function(element) {
                        if (($("#pexamstotal").val() < 1 || $("#pexamstotal").val() == '') && $("#pexaminationsoutyes").prop('checked') == true) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            }
        },
        messages: {
            ptotalamouthci: "Amount is required!",
            ptotalamoutpf: "Amount is required!"
        },
        errorElement: 'span',
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');
            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            } else {
                error.insertAfter(element);
            }
        },

        highlight: function highlight(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },

        unhighlight: function unhighlight(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        }
    });

    function getTotalActualCharges(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/getTotalActualCharges",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    function ConsumptionofBenefits(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/ConsumptionofBenefits",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }

    $('#frmConsent').validate({
        submitHandler: function(form) {
            var POSTURL = baseURI + "Philhealth/updateConsent";
            $.ajax({
                type: "POST",
                url: POSTURL,
                dataType: "JSON",
                cache: false,
                async: true,
                data: $(form).serialize(),
                success: function(data) {
                    toastr.success('Consent Successfully Updated!', 'Success');
                },
                error: function(data) {
                    toastr.error('Error on saving!', 'Error');
                }
            });
            return false;
            $(form).submit();
        },
        rules: {
            pRelCode:{
                required:{
                    depends: function(){
                        if($("#representativeSign").prop('checked') && $("#pRelCode").val() == ""){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            pRelDesc: {
                required: {
                    depends: function(element) {
                        if ($("#pRelCode").val() == 'O') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            pReasonCode: {
                required: {
                    depends: function(element) {
                        if ($("#pRelCode").val() != '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            pReasonDesc: {
                required: {
                    depends: function(element) {
                        if ($("#pReasonCode").val() == 'O') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            consentdate:{
                validateConsentDate : true
                /*required:{
                    depends: function(element){
                        if($(element).val() == "" || $(element).val() == "1970-01-01"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }*/
            },
            consentname: "required",
            consentSign: {
                required: true
            }
        },
        messages: {
            pRelCode: "Relationship of the representative to the member/patient is required!",
            pRelDesc: 'Relationship description is requierd!',
            pReasonCode: 'Reason for signing is required!',
            pReasonDesc: 'Other reason is required!',
            consentname: "Name of Member/Patient/Authorized Representative is required!",
            consentSign: "Consent is required!"
        },
        errorElement: 'span',
        errorPlacement: function errorPlacement(error, element) {
            error.addClass('invalid-feedback');
            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent('label'));
            }else if (element.prop('type') === 'radio') {
                error.insertAfter($("#consentSignError"));
            } else {
                error.insertAfter(element);
            }
        },

        highlight: function highlight(element) {
            if ($(element).prop('type') === 'radio') {
                $("#consentSignError").addClass('is-invalid').removeClass('is-valid');
            }else{
                $(element).addClass('is-invalid').removeClass('is-valid');
            }
        },

        unhighlight: function unhighlight(element) {
            if ($(element).prop('type') === 'radio') {
                $("#consentSignError").addClass('is-valid').removeClass('is-invalid');
            }else{
                $(element).addClass('is-valid').removeClass('is-invalid');
            }
        }
    });

    $("#consent-tab").on("click", function() {
        var enccode = $("#enccode").val();
        loadConsent(enccode);
    });

    function loadConsent(enccode) {
        var obj = Consent(enccode);

        if(obj['consentsign'] == 'M'){
            $("#memberSign").prop("checked", true);
        }
        
        if(obj['consentsign'] == 'P'){
            $("#patientSign").prop("checked", true);
        }

        if(obj['consentsign'] == 'R'){
            $("#representativeSign").prop("checked", true);
        }

        $("#consentname").val(obj['consentname']);
        if(obj['consentdate'] != null){
            $("#consentdate").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['consentdate'])));
        }
        $("#pRelCode").val(obj['pRelCode']);
        if (obj['pRelCode'] == 'O') {
            $("#pRelDesc").prop('disabled', false);
            $("#pRelDesc").val(obj['pRelDesc']);
        }
        if (obj['pRelCode'] != null && obj['pRelCode'] != 'null' && obj['pRelCode'] != undefined) {
            $("#pReasonCode").prop('disabled', false);
            $("#pReasonCode").val(obj['pReasonCode']);
        }
        if (obj['pReasonCode'] == 'O') {
            $("#pReasonDesc").prop('disabled', false);
            $("#pReasonDesc").val(obj['pReasonDesc']);
        }

        if (obj['authsigndate']) {
            $("#authsigndate").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['authsigndate'])));
        }

        if (obj['authsign']) {
            const data = {
                licno: obj['authsign'],
                name: obj['name']
            };
            var option = new Option(data.name, data.licno, true, true);
            $("#authsign_doc").append(option).trigger("change");
        }
    }

    $("#pRelCode").change(function() {
        if ($(this).val() == '') {
            $("#pRelDesc").prop('disabled', true);
            $("#pRelDesc").val(null);
            $("#pReasonCode").prop('disabled', true);
            $("#pReasonCode").val('');
            $("#pReasonDesc").prop('disabled', true);
        } else {
            $("#pReasonCode").prop('disabled', false);
            if ($(this).val() == 'O') {
                $("#pRelDesc").prop('disabled', false);
            } else {
                $("#pRelDesc").prop('disabled', true);
                $("#pRelDesc").val(null);
            }
        }
    });

    $("#pReasonCode").change(function() {
        if ($(this).val() == 'O') {
            $("#pReasonDesc").prop('disabled', false);
        } else {
            $("#pReasonDesc").val(null);
            $("#pReasonDesc").prop('disabled', true);
        }
    });

    function Consent(enccode) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/Consent",
            data: {
                enccode: enccode
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }
    
    var selectedElement = null;
    var isProcedure = false;

    $("#DiagnosisTable").on("dblclick", "input.icdcode:text", function (event) {
        isProcedure = false;
		var data = new Object();
		data.id = "TblCaseRateList";
		data.link = baseURI + "Philhealth/getCaseRate",
		data.type = "POST";
        data.data = {casetype : "M" };
		data.coldef =[];
		loadTable(data);
        $('#casRateList').empty();
        $("#CaseRateSearchList").modal("show");
        selectedElement = $(this);
    });

    $("#TblCaseRateList").on('click','tr',function(event){
        var caseRate = $(this).find("td:nth-child(1)").text();
        if(isProcedure){
            if($('#casRateList li').length > 0){
                return;
            }
        }
        if(isSelected(caseRate) == false){
            $("#casRateList").append('<li class="list-group-item"><a href="javascript:void(0)" class="excludeCaseRate"><i class="fa fa-times text-danger" aria-hidden="true"></i></a><span class="text-success"> '+caseRate+'</span></li>');
        }        
    });

    $("#casRateList").on('click','.excludeCaseRate',function(){
        $(this).parent().remove();
    });

    function isSelected(caseCode){
        var listItems = $("#casRateList li");
        var exist = false;
        listItems.each(function(idx, li) {
            var item = $(li).text();
            var position = item.indexOf(caseCode);
            if(position == 1 || position == "1"){
                exist = true;
                return false;
            }
        });
        return exist;
    }

    $("#selectCaseRateBtn").click(function(){
        var listItems = $("#casRateList li");
        var casesCodes = "";
        listItems.each(function(idx, li) {
            casesCodes = casesCodes + $(li).text();
        });

        if(casesCodes != ""){
            selectedElement.val($.trim(casesCodes));
        }
        $("#CaseRateSearchList").modal("hide");
    });

    $("#closeCaseRateModalBtn").click(function(){
        $("#CaseRateSearchList").modal("hide");
    });

    $("#ProcedureTable").on("dblclick", "input.rvscode:text", function (event) {
        isProcedure = true;
		var data = new Object();
		data.id = "TblCaseRateList";
		data.link = baseURI + "Philhealth/getCaseRate",
		data.type = "POST";
        data.data = {casetype : "P" };
		data.coldef =[];
		loadTable(data);
        $('#casRateList').empty();
        $("#CaseRateSearchList").modal("show");
        selectedElement = $(this);
    });

    $("#memberSign").change(function(){
        if($(this).prop('checked')){
            $("#consentname").val($("#member").text());
            $("#pRelCode").val("");
            $("#pRelCode").prop("disabled",true);
            $("#pReasonCode").prop("disabled",true);
            $("#pRelDesc").val("");
            $("#pRelDesc").prop("disabled",true);
            $("#pReasonDesc").val("");
            $("#pReasonDesc").prop("disabled",true);
        }
    });

    $("#patientSign").change(function(){
        if($(this).prop('checked')){
            $("#consentname").val($("#patientname").text());
            $("#pRelCode").val("");
            $("#pRelCode").prop("disabled",true);
            $("#pReasonCode").val("");
            $("#pReasonCode").prop("disabled",true);
            $("#pRelDesc").val("");
            $("#pRelDesc").prop("disabled",true);
            $("#pReasonDesc").val("");
            $("#pReasonDesc").prop("disabled",true);
        }
    });

    $("#representativeSign").change(function(){
        if($(this).prop('checked')){
            $("#consentname").val("");
            $("#pRelCode").prop("disabled",false);
        }
    });

    function setAuthHCIRep(id) {
        var form = id;
        form.find('[name $="_doc"]').select2({
            placeholder: 'Select Authorized HCI Representative',
            allowClear: true,
            theme: 'coreui',
            ajax: {
                url: baseURL + "Philhealth/getCF2AuthSignProvider",
                dataType: "json",
                type: "POST",
                delay: 250,
                data: function (params) {
                    return {
                        searchEmployees: params.term
                    };
                },
                processResults: function (data) {
                    var results = [];
                    $.each(data, function (index, item) {
                        results.push({
                            id: item.employeeid,
                            text: item.fullname
                        });
                    });
                    return {
                        results: results
                    }
                }
            }
        });
        form.find('[name $="_doc"]').on('change', function () {
            var data = form.find("[name $='_doc'] option:selected", this);
            $(this).valid();
        });
    }

    /*function getCaseRate(type) {
        var obj;
        $.ajax({
            type: "POST",
            url: baseURI + "Philhealth/getCaseRate",
            data: {
                casetype: type
            },
            async: false,
            success: function(data, status) {
                obj = $.parseJSON(data);
            },
            error: function(data, status) {}
        });
        return obj;
    }*/


    function formatAMPM(date) {
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12;
        hours = hours >= 10 ? hours : '0' + hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;
        return strTime;
    }
</script>