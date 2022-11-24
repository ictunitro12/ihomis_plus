<style>
table#EmergencyTable.dataTable tbody tr:hover {
    background-color: #80DB88;
}
</style>
<div class="row">
    <div class="col-md-3">
        <?php $this->load->view('Emergency/_menuEmergency'); ?>
    </div>
    <div class="col-md-9">
        <div class="card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 col-md-auto">
                        <span class="h4  text-success"><i class="<?php echo $icon ?>"></i> <?php echo $header; ?>
                            <small><?php echo $subheader; ?></small></span>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group pull-right" role="group" aria-label="">
                            <a href="<?php echo site_url('Patient/PatientRegister'); ?>" name="btnRegister"
                                data-toggle="tooltip" title="Register Patient"
                                class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-user-plus"></i> Register Patient</a>
                            <a href="<?php echo site_url('Emergency/Add'); ?>" name="btnfromLog" data-toggle="tooltip"
                                data-placement="top" title="Emergency Patient"
                                class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-ambulance"></i> Log Patient</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="EmergencyTable"
                    class="table table-sm table-striped table-condensed table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th class="never"></th>
                            <th>Health Record #</th>
                            <th>Patient name</th>
                            <th>Sex</th>
                            <th>Accomodation</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<form id="formAddSignatories" class="form" id="formAddSignatories">
    <div class="modal" id="ModalSignatures" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i>&nbsp; ER Profile
                        Signatories</h3>
                    <br>
                    <div class="box-body box-profile">
                        <div class="h5 profile-username text-center text-success" id="sign_names" hidden></div>
                        <div class="h6 text-center text-success" id="sign_hpercode" hidden></div>
                        <table class="table table-sm table-condensed table-bordered">
                            <tr>
                                <td><label class="text text-success col-form-label"><i
                                            class="fa fa-address-book"></i>&nbsp; Nurse's Name:</label></td>
                            </tr>
                            <tr>
                                <td><select name="selNurse" id="selNurse" class="form-control form-control-md"></select>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="text text-success col-form-label"><i
                                            class="fa fa-address-book"></i>&nbsp; Doctor's Name :</label></td>
                            </tr>
                            <tr>
                                <td><select name="sel_doc" id="sel_doc" class="form-control form-control-md"></select>
                                </td>
                            </tr>
                        </table>
                        <div class="btn-group float-right ">
                            <button type="submit" id="sign_pdf" class="btn btn-outline-success btn-ladda"
                                data-style="zoom-in">Next &nbsp;<i class="fa fa-arrow-right"></i></button>
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="formAddCert">
    <div class="modal" id="Consentinput" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close text-danger" id="closereload" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i>&nbsp; Consent Signatories
                    </h3>
                    <br>
                    <div class="box-body box-profile">
                        <div class="h5 profile-username text-center text-success" id="patnamess" hidden></div>
                        <div class="h6 text-center text-success" id="hpercodess" hidden></div>
                        <table class="table table-sm table-condensed table-bordered">
                            <tr>
                                <td><label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp;
                                        Name of Patient/ Representative :</label><br>
                                    <h6><input type="checkbox" name="patrepsame" id="patrepsame" />&nbsp; <small>Check
                                            if Representative Only</small></h6>
                                    <input type="text" class="form-control form-control-md mb-1" name="patrep"
                                        id="patrep" placeholder="Representative" autocomplete="off" disabled="true"
                                        style="text-transform:uppercase" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp;
                                        Representative of Health Facility :</label>
                                    <select name="selEmployees" id="selEmployees"
                                        class="form-control form-control-md"></select>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="text text-success col-form-label"><i class="fa fa-mobile"></i>&nbsp;
                                        Contact No. :</label>
                                    <input type="number" class="form-control form-control-md mb-1" name="patnumber"
                                        id="patnumber" maxlength="12" autocomplete="off" placeholder="0000 0000 0000" />
                                </td>
                            </tr>
                        </table>
                        <div class="btn-group float-right ">
                            <button type="submit" id="pdfinsert" class="btn btn-outline-success btn-ladda"
                                data-style="zoom-in">Next &nbsp;<i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmConsent">
    <div class="modal fade" id="ModalConsent" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Consent Form</h3>
                    <input type="hidden" id="enccodeConsent">
                    <iframe id="Consent_pdf" type="application/pdf" frameborder="2" width="100%"
                        height="800px"></iframe>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="formERDischarge" name="formERDischarge">
    <input type="hidden" id="dischargeEnccode" name="dischargeEnccode">
    <div class="modal" id="ModalERDischarge" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i>&nbsp; DISCHARGE</h4>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label class="text-default" for="dischargePatient">Name of Patient:</label>
                            <h6 class="modal-title text-success" id="dischargePatient"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="text-default" for="dischargePatient">ER Date and Time:</label>
                            <h6 class="modal-title text-success" id="patientDischargeDateTime"></h6>
                        </div>
                    </div>
                    <hr>
                    <div class="box-body box-profile">
                        <div class="row">
                            <div class="col">
                                <label class="text-default">Disposition:</label>
                                <select class="form-control" name="selDisp" id="selDisp">
                                    <option value=""> Select</option>
                                    <option value="TRASH">Treated and Sent Home</option>
                                    <option value="ADMIT">For Admission</option>
                                    <option value="REFER">Referred</option>
                                    <option value="REFAD">Refused Admission</option>
                                    <option value="DIEDD">Died</option>
                                    <option value="ABSC">Absconded</option>
                                    <option value="HAMA">Home Against Medical Advise</option>
                                    <option value="DOA">Dead On Arrival</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="text-default">Condition:</label>
                                <select class="form-control" name="selCond" id="selCond">
                                    <option value=""> Select</option>
                                    <option value="CRITI">Critical</option>
                                    <option value="EXPIR">Expired</option>
                                    <option value="STABL">Stable</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="text-default">Date:</label>
                                <input type="datetime-local" step="1" name="dateDischarge" id="dateDischarge"
                                    class="form-control form-control-mb">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class=" text-default">Reason for Admission:</label><small>Note: if the patient is
                                    for admission.</small>
                                <textarea type="text" disabled class="form-control" name="reasAdmit" id="reasAdmit"
                                    Placeholder="Reason for Admission" disabled></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="btn-group float-right ">
                            <a href="javascript:void(0);" id="dischargeERBtn" name="dischargeERBtn"
                                class="btn btn-outline-success btn-ladda" data-style="zoom-in">Save &nbsp;<i
                                    class="fa fa-save"></i></a>
                            <!-- button type="submit" id="sign_pdf" class="btn btn-outline-success btn-ladda" data-style="zoom-in">Save &nbsp;<i class="fa fa-save"></i></button -->
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $this->load->view('Emergency/frmReferral'); ?>
<?php $this->load->view('Emergency/_modal_referral_slip'); ?>

<input name="module" id="module" type="hidden" value="<?php echo $module; ?>">
<script src="<?php echo base_url() ?>assets/scripts/emergency/emergency.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/emergency/referral.js"></script>

<script type="text/javascript">
$(function() {
    initEmergency();
});
</script>