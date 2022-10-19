<form id="frmDeleteReferto" name="frmDeleteReferto" method="post">
    <div class="modal" id="deleteRefertoModal" name="deleteRefertoModal" tabindex="-1" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
                    <h5> Are you sure do you want to delete this record? </h5>
                    <h5 id="deleteReferralPatient"></h5>
                    <input type="hidden" name="deleteReferralEnccode" id="deleteReferralEnccode">
                    <input type="hidden" name="deleteReferralDatetime" id="deleteReferralDatetime">
                    <input type="hidden" name="deleteReferralType" id="deleteReferralType">
                    <input type="hidden" name="referToformIdenDelete" id="referToformIdenDelete" value="delete">
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i
                            class="fa fa-trash"></i></button>
                    <button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                            class="fa fa-close"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmReferto" name="frmReferto" class="form">
    <div class="modal" id="refertoModal" role="form">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title text-success"><i class="fa fa-hospital-o"></i> Referral </h4>
                    <hr>
                    </hr>
                    <div class="row">
                        <div class="col-md-4  border-right">
                            <h5 class=" text-success"><i class="fa fa-list"></i> Details</h5>
                            <div class="form-label text-success mb-1">
                                Date Call:
                            </div>
                            <input type="datetime-local" class="form-control form-control-lg" autocomplete="off"
                                id="dateRefCall" name="dateRefCall">
                            <div class="form-label text-success mb-1">
                                Date Refer:
                            </div>
                            <input type="datetime-local" class="form-control form-control-lg" autocomplete="off"
                                id="dateRefto" name="dateRefto">
                            <div class="form-label text-success mb-1">
                                Type of Referral:
                            </div>
                            <select name="ReferType" id="ReferType" class="form-control form-control-lg">
                                <option values="">Select</option>
                                <option value="TRANS">Transfer</option>
                                <option value="CONSU">Consultation</option>
                                <option value="DIAGT">Diagnostic Test</option>
                                <option value="OTHER">Others</option>
                            </select>
                            <div class="form-label text-success mb-1">
                                Other type:
                            </div>
                            <input name="ReferOTH" id="ReferOTH" class="form-control form-control-lg" readonly
                                placeholder="Other Referral">
                            <div class="form-label text-success mb-1">
                                Category:
                            </div>
                            <select class="form-control form-control-lg" autocomplete="off" id="RefCategory"
                                name="RefCategory">
                                <option value="">Select</option>
                                <option value="OP">Outpatient</option>
                                <option value="ER">Emergency</option>
                            </select>
                            <div class="form-label text-success mb-1">
                                Reason for Referral:
                            </div>
                            <select class="form-control form-control-lg" autocomplete="off" id="reftoReas"
                                name="reftoReas">
                                <option value="">Select</option>
                                <option value="NOEQP">No equipment available</option>
                                <option value="NODOC">No doctor available</option>
                                <option value="NOPRO">No procedure available</option>
                                <option value="NOLAB">No laboratory available</option>
                                <option value="NOROM">No room available</option>
                                <option value="SEASO">Seek advise/second opiniion</option>
                                <option value="SESPE">Seek specialized evaluation</option>
                                <option value="SEFTA">Seek futher treatment appropriate to the case</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <h5 class=" text-success"><i class="fa fa-list"></i> Destination</h5>
                            <div class="form-label text-success mb-1">
                                Receiving Facility:
                            </div>
                            <select name="refFacility" id="refFacility" class="form-control form-control">
                                <option values="">Select</option>
                            </select>
                            <div class="form-label text-success mb-1">
                                Referring Provider Philhealth Accreditation Number:
                            </div>
                            <input type="text" name="patientpan" id="patientpan" class="form-control form-control-md" />
                            <hr>
                            </hr>
                            <h5 class="text-success"><i class="fa fa-list"></i> Doctor</h5>
                            <div class="form-row  ">
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Referring Provider:
                                    </div>
                                    <select name="RefFrom_doc" id="RefFrom_doc" class="form-control form-control-lg">
                                        <option values="">Select</option>
                                    </select>
                                </div>
                                <hr>
                                </hr>
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Referral Provider:
                                    </div>
                                    <select name="RefTo_doc" id="RefTo_doc" class="form-control form-control-lg">
                                        <option values="">Select</option>
                                    </select>
                                </div>
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Receiving Personnel:
                                    </div>
                                    <input type="text" name="RefReceive" id="RefReceive" class="form-control"
                                        placeholder="Receiving Personnel">
                                    <div class="form-label text-success mb-1">
                                        Designation:
                                    </div>
                                    <input type="text" name="RefDesig" id="RefDesig" class="form-control"
                                        placeholder="Designation">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label text-success mb-1">
                                        Response:
                                    </div>
                                    <input type="text" name="RefResp" id="RefResp" class="form-control"
                                        placeholder="Response">
                                    <div class="form-label text-success mb-1">
                                        Other Reason:
                                    </div>
                                    <input type="text" name="RefOtherReas" id="RefOtherReas" class="form-control"
                                        placeholder="Other Reason">
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-12  border-top">
                                    <div class="form-label text-success mb-1">
                                        Remarks
                                    </div>
                                    <textarea type="text" name="RefRemarks" id="RefRemarks" class="form-control"
                                        placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="reftoEnccode" id="reftoEnccode">
                    <input type="hidden" name="reftoHpercode" id="reftoHpercode">
                    <input type="hidden" name="reftoformIden" id="reftoformIden">
                    <input type="hidden" name="editReferralDatetime" id="editReferralDatetime">
                    <input type="hidden" name="editReferralType" id="editReferralType">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" name="btnSaveReferral" id="btnSaveReferral"
                            class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i
                                class="fa fa-save"></i> Save</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmPatSearch" method="post">
    <div class="modal" id="PatSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-body">
                    <button type="button" id="closeSearch" class="close text-danger"
                        data-dismiss="modal">&times;</button>
                    <h1 class="modal-title text-success"><i class="fa fa-thin fa-search fa-2x"></i> Patient Search</h1>
                    <br></br>
                    <div class="row">
                        <div class=" h6 col-md-2 col-form-label text-success  text-default mb-1">
                            Record#:
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="text" class="form-control form-control-lg" placeholder="Hospital Number"
                                name="shpercode" id="shpercode" autocomplete="off">
                        </div>
                        <div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
                            Lastname:
                        </div>
                        <div class=" col-md-10 mb-2">
                            <input type="text" class="form-control form-control-lg" placeholder="LastName" name="slname"
                                id="slname" autocomplete="off">
                        </div>
                        <div class="h6 col-md-2 col-form-label text-success text-default mb-1">
                            Firstname:
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="text" class="form-control form-control-lg" placeholder="FirstName"
                                name="sfname" id="sfname" autocomplete="off">
                        </div>
                        <div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
                            Middlename:
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="text" class="form-control form-control-lg" placeholder="MiddleName"
                                name="smname" id="smname" autocomplete="off">
                        </div>
                        <div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
                            Birthdate:
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="date" class="form-control form-control-lg" placeholder="BirthDate" name="sbod"
                                id="sbod" autocomplete="off">
                        </div>
                        <div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
                            Sex:
                        </div>
                        <div class="col-md-10 mb-2">
                            <select name="ssex" id="ssex" class="form-control form-control-lg">
                                <option>Select</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="sSubmit"
                        class="btn btn-outline-success btn-lg btn-block btn-ladda text-success" data-color="green"
                        data-style="expand-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal" id="PatSearchList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-success"><i class="fa fa-th-list"></i>&nbsp Patient List</h3>
                <table id="TblPatSearchList" class="table table-hover table-sm  table-bordered table-condensed"
                    style="cursor:pointer" width="100%">
                    <thead>
                        <tr>
                            <th>Health Record:</th>
                            <th>Patient name</th>
                            <th>Date of Birth</th>
                            <th>Sex</th>
                        </tr>
                    </thead>
                </table>
                <div class="btn-group float-right">
                    <button class="btn btn-outline-danger  btn-ladda btn-md" id="cancelSearchPatient"><i
                            class="fa fa-close"></i>Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="PatHistoryList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="modal-title text-success"><i class="fa fa-th-list"></i> Visit Log</h3>
                <table id="visitLogList" style="cursor:pointer"
                    class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
                    <thead>
                        <tr>
                            <th>EntryDate</th>
                            <th>Entrytime</th>
                            <th>DischargeDate</th>
                            <th>Discharge Time</th>
                            <th>Encounter</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-danger btn-ladda btn-md" id="cancelSearchEnc"><i class="fa fa-close"></i>
                    Cancel</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/referral/referralto.js"></script>