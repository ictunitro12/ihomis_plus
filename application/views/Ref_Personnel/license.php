<style>
    table#LicenseTable.dataTable tbody tr:hover {
        background-color: #80DB88;
    }

    .table-responsive {
        overflow: visible;
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<div class="card card-accent-success">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 col-md-auto	">
                <div class="h3 text text-success">
                    <i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>&nbsp;<small>(<span id="id"></span>)</small>
                </div>
            </div>
            <div class="col-md-6 col-md-auto">
                <div class="btn-group pull-right" role="group" aria-label="">
                    <a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in">&nbsp; Previous Level</a>
                    <button id="add" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp; Add License</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="LicenseTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
                <thead>
                    <tr>
                        <th class="never"></th>
                        <th class="align-middle never">Employee ID</th>
                        <th class="align-middle all">Employee Name</th>
                        <th class="align-middle all">Prefix</th>
                        <th class="align-middle all">Degree</th>
                        <th class="align-middle all">License</th>
                        <th class="align-middle all">Accreditation Number</th>
                        <th class="align-middle all">Validity Date</th>
                        <th class="align-middle all">Status</th>
                        <th class="align-middle all" width="1%">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="card-footer"></div>
</div>

<form name="frmLicense" id="frmLicense">
    <input type="hidden" name="formIden" id="formIden" value="">
    <input type="hidden" name="licno" id="licno" value="">
    <div class="modal fade" id="ModalAddLicense" name="ModalAddLicense" role="form">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp; License</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    ID:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" id="empid" name="empid" placeholder="Employee ID" readonly maxlength="10">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    <i class="fa fa-asterisk text-danger"></i>&nbsp;Prefix:
                                </div>
                                <div class="col-md-8">
                                    <select name="prefix" id="prefix" class="form-control form-control-mb mb-1" onChange="licensecode();" required disabled>
                                        <option value="CH">Chemist</option>
                                        <option value="DN">Dentist</option>
                                        <option value="MD">Doctor of Medicine</option>
                                        <option value="HP">Health Physicist</option>
                                        <option value="LA">Laboratory Aide</option>
                                        <option value="ME">Medical Equipment Technician</option>
                                        <option value="ML">Medical Laboratory Technician</option>
                                        <option value="MT">Medical Technologist</option>
                                        <option value="OT">Occupational Therapist</option>
                                        <option value="PH">Pharmacist</option>
                                        <option value="PT">Physical Therapist</option>
                                        <option value="SY">Psychologist</option>
                                        <option value="RT">Radiologic Technologist</option>
                                        <option value="RM">Registered Midwife</option>
                                        <option value="RN">Registered Nurse</option>
                                        <option value="SW">Registered Social Worker</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    <i class="fa fa-asterisk text-danger"></i>&nbsp;License:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="license" name="license" placeholder="License" onChange="licensecode();" maxlength="13" required>
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    Degree:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="degree" name="degree" placeholder="Degree" maxlength="20">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    Accreditation:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="acreno" name="acreno" placeholder="Accreditation number" maxlength="20">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    Validity date:
                                </div>
                                <div class="col-md-8">
                                    <input type="date" class="form-control form-control-mb mb-1" autocomplete="off" id="valdte" name="valdte">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    <i class="fa fa-asterisk text-danger"></i>&nbsp;Classification:
                                </div>
                                <div class="col-md-8">
                                    <select name="classif" id="classif" class="form-control form-control-mb mb-1" required>
                                        <option value="GENPR">General Practitioner</option>
                                        <option value="SPECI">Specialist</option>
                                        <option value="SURGE">Surgeon</option>
                                        <option value="ANEST">Anesthesiologist</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    Claims Code:
                                </div>
                                <div class="col-md-8">
                                    <select name="ccg" id="ccg" class="form-control form-control-mb mb-1">
                                        <option value="">Select</option>
                                        <option value="A">Group 1 (GP)</option>
                                        <option value="C">Group 2,3,4 (Fellow)</option>
                                        <option value="B">Group 5,6 (With Training)</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    Category:
                                </div>
                                <div class="col-md-8">
                                    <select name="category" id="category" class="form-control form-control-mb mb-1">
                                        <option value="NOTAP">Not Applicable</option>
                                        <option value="CLERK">Clerk</option>
                                        <option value="CONSU">Consultant</option>
                                        <option value="FELLO">Fellow</option>
                                        <option value="INTER">Intern</option>
                                        <option value="MIDWF">Midwife</option>
                                        <option value="OTHER">Others</option>
                                        <option value="PHN">Public Health Nurse</option>
                                        <option value="RESID">Resident Physician</option>
                                        <option value="VISIP">Visiting Physician</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    Alias:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="alias" name="alias" placeholder="Alias name" maxlength="60">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">

                                <div class="col-md-4 col-form-label text-default mb-1">
                                    PMA:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="pma" name="pma" placeholder="Philippine Medical Association" maxlength="20">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    PTR:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="ptr" name="ptr" placeholder="Professional Tax Regulation" maxlength="20">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    Handling PE:
                                </div>
                                <div class="col-md-8">
                                    <select name="hpe" id="hpe" class="form-control form-control-mb mb-1">
                                        <option value="X">Not applicable</option>
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                </div>
                                <label class="col-md-4 col-form-label text-default mb-1">
                                    ID:
                                </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="uid" name="uid" placeholder="User ID" maxlength="10">
                                </div>
                                <label class="col-md-4 col-form-label text-default mb-1">
                                    Password:
                                </label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control form-control-mb mb-1" id="pass" name="pass" placeholder="Password" maxlength="10">
                                </div>
                                <label class="col-md-4 col-form-label text-default mb-1">
                                    Hint:
                                </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" id="hint" name="hint" placeholder="Hint" maxlength="70">
                                </div>
                                <label class="col-md-4 col-form-label text-default mb-1">
                                    Answer:
                                </label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control form-control-mb mb-1" id="answer" name="answer" placeholder="Answer" maxlength="70">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">
                                    X-12 Code:
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="x12c" name="x12c" placeholder="X-12 Equivalent Code">
                                </div>
                                <div class="col-md-4 col-form-label text-default mb-1">Status:</div>
                                <div class="col-md-8">
                                    <select name="status" id="status" class="form-control form-control-mb mb-1">
                                        <option value="A">Active</option>
                                        <option value="I">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group float-right">
                        <button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SUBMIT</button>&nbsp;
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp; CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form name="frmDeleteLicense" id="frmDeleteLicense">
    <input type="hidden" name="formID" id="formID">
    <input type="hidden" name="deletekey" id="deletekey">
    <div class="modal fade" id="DeleteLicense" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <span class="text-white" id="lic" name="lic"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer">
                    <div class="btn-group float-right">
                        <button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp; DELETE</button>&nbsp;
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp; CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    $(function() {
        var employeeid = atob('<?php echo $this->uri->segment(3); ?>');
        employeeid = encodeURIComponent(encodeURIComponent(employeeid));

        setCookie('employeeid', employeeid, '1');
        getCookie('employeeid');

        LicenseList(employeeid);
        checkLicense(employeeid);

        $("#id").text(employeeid);
    });
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_personnel/license.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_personnel/license_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_personnel/delete_license.js"></script>