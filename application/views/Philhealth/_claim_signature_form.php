<?php $this->load->helper('gender'); ?>

<div class="row">
    <div class="col">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <div class="h3 text text-success">
                            <i class="fa fa-file-text-o"></i>
                            &nbsp PHILHEALTH CLAIM SIGNATURE FORM
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0)" id="patientsearch" data-toggle="tooltip" title="Search Patient" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-search"></i></span><span class="ladda-spinner"></span></a>
                        <a href="<?php
                                    $enccode = urlencode(urlencode($enccode));
                                    $accreno = urlencode(urlencode($accreno));
                                    echo base_url() . "Philhealth/generateClaimSignatureFormPDF?enccode={$enccode}&accreno={$accreno}";
                                    ?>" target="_blank" id="printclaimsignatureform" data-toggle="tooltip" title="Print Claim Signature Form" class="btn btn-success btn-md btn-ladda ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-print" aria-hidden="true"></i></span><span class="ladda-spinner"></span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp HEALTH RECORD NUMBER:</b>
                        <span class="text text-success" id="healthrecordnumber"></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp ADMISSION DATE AND TIME:</b>
                        <span class="text text-success"><?= $data->admission_datetime; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-user"></i>&nbsp NAME OF PATIENT:</b>
                        <span class="text text-success"><?= $data->patient_fullname; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp DISCHARGED DATE AND TIME:</b>
                        <span class="text text-success"><?= $data->discharge_datetime; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp AGE:</b>
                        <span class="text text-success"><?= $data->patient_age_in_years_desc; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp ROOM:</b>
                        <span class="text text-success"><?php echo $room; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp SEX:</b>
                        <span class="text text-success"><?= $data->patient_gender_desc; ?></span>
                    </div>
                    <div class="col-md">
                        <b class="text text-success"><i class="fa fa-id-card-o"></i>&nbsp TYPE:</b>
                        <span class="text text-success"><?= $data->toecode; ?></span>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text text-success active" id="patient_data-tab" data-toggle="tab" href="#patient_data" role="tab" aria-controls="patient_data" aria-expanded="true"><i class="fa fa-user-md fa-2x"></i> MEMBER AND PATIENT INFORMATION AND CERTIFICATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text text-success" id="admission-tab" data-toggle="tab" href="#admission" role="tab" aria-controls="admission"><i class="fa fa-plus-square fa-2x"></i> EMPLOYER’S CERTIFICATION</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="patient_data" role="tabpanel" aria-labelledby="patient_data-tab">
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <b class="text text-success">PART I - MEMBER AND PATIENT INFORMATION AND CERTIFICATION</b>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <label><b>1.PhilHealth Identification Number (PIN) of Member:</b></label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->member_pin; ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>2.Name of Member:</b></label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->member_fullname ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>3.Member Date of Birth:</b></label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->member_birthdate ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>4.PhilHealth Identification Number (PIN) of Dependent:</b></label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->patient_pin ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>5. Name of Patient:</b></label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->patient_fullname ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>6.Relationship to Member:</b></label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->relation_to_member_desc ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>7.Confinement Period:</b></label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth">a. Date Admitted:</label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->admission_date ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth">b. Date Discharged:</label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->discharge_date ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>8.Patient Date of Birth:</b></label>
                                    </div>
                                    <div class="col">
                                        <span><?= $data->patient_birthdate; ?></span>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col">
                                        <label for="pCataractPreAuth"><b>9.CERTIFICATION OF MEMBER:</b></label>
                                    </div>
                                    <div class="col">
                                        <span></span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">
                        <br>
                        <form id="admission_form">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">PART II - EMPLOYER’S CERTIFICATION</b>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>PhilHealth Employer Number (PEN):</b></label>
                                        </div>
                                        <div class="col">
                                            <!-- <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="present_illness_history" name="present_illness_history" value="" readonly>
                                            </div> -->
                                            <span><?= $data->employer_pen ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>Contact No.:</b></label>
                                        </div>
                                        <div class="col">
                                            <!-- <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="present_illness_history" name="present_illness_history" value="" readonly>
                                            </div> -->
                                            <span><?= $data->employer_contact ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>Business Name:</b></label>
                                        </div>
                                        <div class="col">
                                            <!-- <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="present_illness_history" name="present_illness_history" value="" readonly>
                                            </div> -->
                                            <span><?= $data->employer_business_name ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>CERTIFICATION OF EMPLOYER:</b></label>
                                        </div>
                                        <div class="col">
                                            <!-- <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" id="present_illness_history" name="present_illness_history" value="" readonly>
                                            </div> -->
                                            <!--span id="pCataractPreAuth"></span -->
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">PART III - CONSENT TO ACCESS PATIENT RECORD/S</b>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label" for="consentname"> Name of Member/Patient/Authorized Representative</label>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-sm" id="consentname" type="text" name="consentname" value="<?= $data->consent_name ?>" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="consentdate">Date Signed</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="consentdate" type="date" name="consentdate" value="<?= $data->consent_date_sign ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label">If member/representative is unable to write,
                                                    put right thumbmark. Member/Representative
                                                    should be assisted by an HCI representative.
                                                    Check the appropriate box.</label>
                                                <div class="col-md-6 col-form-label">
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check1" type="checkbox" value="P" <?= $data->pThumbMarkedBy_patient ?> onclick="return false;">
                                                        <label class="form-check-label" for="check1">Patient</label>
                                                    </div>
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check2" type="checkbox" value="R" <?= $data->pThumbMarkedBy_representative ?> onclick="return false;">
                                                        <label class="form-check-label" for="check2">Representative</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label">Relationship of the representative to the patient </label>
                                                <div class="col-md-6 col-form-label">
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check1" type="checkbox" value="S" <?= $data->pRelCode_spouse ?> onclick="return false;">
                                                        <label class="form-check-label" for="check1">Spouse</label>
                                                    </div>
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check2" type="checkbox" value="C" <?= $data->pRelCode_child ?> onclick="return false;">
                                                        <label class="form-check-label" for="check2">Child</label>
                                                    </div>
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check3" type="checkbox" value="P" <?= $data->pRelCode_parent ?> onclick="return false;">
                                                        <label class="form-check-label" for="check3">Parent</label>
                                                    </div>
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check3" type="checkbox" value="I" <?= $data->pRelCode_sibling ?> onclick="return false;">
                                                        <label class="form-check-label" for="check3">Sibling</label>
                                                    </div>
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check3" type="checkbox" value="O" <?= $data->pRelCode_others ?> onclick="return false;">
                                                        <label class="form-check-label" for="check3">Others, Specify</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label">Reason for signing on behalf of the patient</label>
                                                <div class="col-md-6 col-form-label">
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check1" type="checkbox" value="I" <?= $data->pReasonCode_i ?> onclick="return false;" />
                                                        <label class="form-check-label" for="check1">Patient is incapacitated</label>
                                                    </div>
                                                    <div class="form-check checkbox">
                                                        <input class="form-check-input" id="check2" type="checkbox" value="O" <?= $data->pReasonCode_o ?> onclick="return false;" />
                                                        <label class="form-check-label" for="check2">Other reasons:</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">PART IV - HEALTH CARE PROFESSIONAL INFORMATION</b>
                                        </div>
                                    </div>
                                    <hr>

                                    <?php if (!empty($data->professional_service)) { ?>
                                        <?php
                                        foreach ($data->professional_service as $professionalInfo) {
                                            echo '
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div class="form-group row text-right">
                                                            <label class="col-md-6 col-form-label" for="physician">Accreditation No.</label>
                                                            <div class="col-md-6">
                                                                <input class="form-control form-control-sm" type="text" name="physician" value="' . $professionalInfo->pdoctoraccrecode . '" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <div class="col">
                                                        <div class="form-group row text-right">
                                                            <label class="col-md-6 col-form-label" for="physician">Name</label>
                                                            <div class="col-md-6">
                                                                <input class="form-control form-control-sm" type="text" name="physician" value="' . $professionalInfo->doctorname . '" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <div class="col">
                                                        <div class="form-group row text-right">
                                                            <label class="col-md-3 col-form-label" for="sign_date">Date Signed</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control form-control-sm" type="date" name="sign_date" value="' . date('m/d/Y', strtotime($professionalInfo->pdoctoraccrecode)) . '" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ';
                                        }
                                        ?>
                                    <?php } ?>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="form-group row text-right">
                                                <label class="col-md-6 col-form-label" for="physician">Accreditation No.</label>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-sm" id="physician" type="text" name="physician" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row text-right">
                                                <label class="col-md-6 col-form-label" for="physician">Name</label>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-sm" id="physician" type="text" name="physician" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row text-right">
                                                <label class="col-md-3 col-form-label" for="sign_date">Date Signed</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="sign_date" type="date" name="sign_date" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <b class="text text-success">PART V - PROVIDER INFORMATION AND CERTIFICATION</b>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label><b>1.PhilHealth Benefits:</b></label>
                                        </div>

                                        <div class="col-md">
                                            <label><b>ICD 10 or RVS Code:</b></label>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label" for="first_case">1. First Case Rate</label>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-sm" id="first_case" type="text" name="first_case" value="<?= $data->firstcase ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label" for="second_case">2. Second Case Rate</label>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-sm" id="second_case" type="text" name="second_case" value="<?= $data->secondcase ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label" for="hci_representative"> Name of Authorized HCI Representative</label>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-sm" id="hci_representative" type="text" name="hci_representative" value="<?= $data->authorize_hci_representative ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-md-6 col-form-label" for="hci_representative_designation">Official Capacity/Designation</label>
                                                <div class="col-md-6">
                                                    <input class="form-control form-control-sm" id="hci_representative_designation" type="text" name="hci_representative_designation" value="<?= $data->authorize_hci_representative_designation ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label" for="hci_representative_sign_date">Date Signed</label>
                                                <div class="col-md-9">
                                                    <input class="form-control form-control-sm" id="hci_representative_sign_date" type="date" name="hci_representative_sign_date" value="<?= $data->authorize_hci_date_sign ?>" readonly>
                                                </div>
                                            </div>
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
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/scripts/philhealth/diagnoses.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/procedures.js"></script>
<script>
    const baseURI = $('#base_url').val();

    $(document).ready(function() {
        var enccode = $("#enccode").val();
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
</script>