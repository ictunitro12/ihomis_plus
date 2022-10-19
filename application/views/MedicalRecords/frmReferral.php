<form id="addIncomingReferralForm">
    <input type="hidden" id="referFromHpercode" name="referFromHpercode">
    <input type="hidden" id="referFromEnccode" name="referFromEnccode">
    <input type="hidden" id="referFromAction" name="referFromAction">
    <input type="hidden" id="referFromLogid" name="referFromLogid">
    <input type="hidden" id="referFromModule" name="referFromModule" value="medrec">
    <div class="modal" role="dialog" id="referFromModal">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp; Add
                        Incoming Referral
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="action" name="action" value="insert">

                    <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-lg"
                            aria-hidden="true"></i>&nbsp; <b>Information:</b> <small>All fields mark with
                            asterisk </small><b class="text-danger">(</b><i class="fa fa-asterisk text-danger"
                            aria-hidden="true"></i><b class="text-danger">)</b> <small> are required!</small>
                    </div>
                    <div class="card card-accent-success with-border">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md">
                                    <h5 class="card-title text-success"><i class="fa fa-ambulance"
                                            aria-hidden="true"></i>&nbsp;
                                        Referral Information</h5>
                                </div>
                                <div class="col-md">
                                    <button class="btn btn-outline-success float-md-right" type="button"
                                        id="getPatReferralBtn"><i class="fa fa-search-plus" aria-hidden="true"></i>
                                        Retrieve
                                        Referrals</button>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="LogID" class="control-label">Transaction Code <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <div class="input-group">
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Referral Transaction Code"
                                                aria-label="Referral Transaction Code" id="LogID" name="LogID">
                                            <div class="input-group-append" id="generateLogID">
                                                <span class="input-group-text text-success"><i class="fa fa-refresh"
                                                        aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="referralDateTime" class="control-label">Referral Date and
                                            Time <i class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <input type="datetime-local" name="referralDateTime" id="referralDateTime"
                                            class="form-control form-control-sm" step=1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="fhudFrom" class="control-label">Referring Facility <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <select class="form-control form-control-sm" id="fhudFrom" name="fhudFrom"
                                            placeholder="Name of Referring Facility"
                                            aria-label="Name of Referring Facility">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="patientpan" class="control-label">Philhealth Accreditation
                                            Number</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Philhealth Accreditation Number"
                                            aria-label="Philhealth Accreditation Number" id="patientpan"
                                            name="patientpan">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="referralCategory" class="control-label">Category <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <select class="form-control form-control-sm" placeholder="Referral Category"
                                            aria-label="Referral Category" id="referralCategory"
                                            name="referralCategory">
                                            <option value="">Select</option>
                                            <option value="ER">Emergency</option>
                                            <option value="OP">Out-Patient</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="datetimecalled" class="control-label">Date and Time
                                            Called</label>
                                        <input type="datetime-local" name="datetimecalled" id="datetimecalled"
                                            class="form-control form-control-sm" step=1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="referringContactNumber" class="control-label">Contact
                                            Number</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Referring Facility Contact Number"
                                            aria-label="Referring Facility Contact Number" id="referringContactNumber"
                                            name="referringContactNumber">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="referralContactPerson" class="control-label">Contact
                                            Person</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Contact Person" aria-label="Contact Person"
                                            id="referralContactPerson" name="referralContactPerson">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="referralContactPersonDesignation"
                                            class="control-label">Designation</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Contact Person Designation"
                                            aria-label="Contact Person Designation"
                                            id="referralContactPersonDesignation"
                                            name="referralContactPersonDesignation">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="response" class="control-label">Response</label>
                                        <textarea class="form-control form-control-sm" id="response" rows="2"
                                            name="response" placeholder="Reponse on call"
                                            aria-label="Reponse on call"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="typeOfReferral" class="control-label">Type of Referral <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <select class="form-control form-control-sm" placeholder="Type of Referral"
                                            aria-label="Type of Referral" id="typeOfReferral" name="typeOfReferral">
                                            <option value="">Select</option>
                                            <option value="CONSU">CONSULTATION</option>
                                            <option value="DIAGT">DIAGNOSTIC TEST</option>
                                            <option value="TRANS">TRANSFER</option>
                                            <option value="OTHER">OTHERS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="typeofreferralothers" class="control-label">Others</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Other Referral Type Specify"
                                            aria-label="Other Referral Type Specify" id="typeofreferralothers"
                                            name="typeofreferralothers">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="referralReason" class="control-label">Reason for Referral <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <select class="form-control form-control-sm" placeholder="Reason for Referral"
                                            aria-label="Reason for Referral" id="referralReason" name="referralReason">
                                            <option value="">Select</option>
                                            <option value="NOROM">No room available</option>
                                            <option value="SEASO">Seek advise/second opinion</option>
                                            <option value="SESPE">Seek specialized evaluation</option>
                                            <option value="SEFTA">Seek futher treatment appropriate to the case
                                            </option>
                                            <option value="NOEQP">No equipment available</option>
                                            <option value="NOPRO">No procedure available</option>
                                            <option value="NOLAB">No laboratory available</option>
                                            <option value="NODOC">No available doctor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="otherReasons" class="control-label">Others</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Other Reason for Referral"
                                            aria-label="Other Reason for Referral" id="otherReasons"
                                            name="otherReasons">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="remarks" class="control-label">Remarks</label>
                                        <textarea class="form-control form-control-sm" id="remarks" rows="2"
                                            name="remarks" placeholder="Remarks" aria-label="Remarks"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-accent-success with-border">
                        <div class="card-header">
                            <h5 class="card-title text-success"><i class="fa fa-stethoscope"
                                    aria-hidden="true"></i>&nbsp; Vital Sign</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="bp" class="control-label">Blood Pressure</label>
                                        <input type="text" class="form-control form-control-sm" id="bp" name="bp"
                                            placeholder="Blood Pressure" aria-label="Blood Pressure" />
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="temp" class="control-label">Temperature</label>
                                        <input type="number" class="form-control form-control-sm" id="temp" name="temp"
                                            step="any" placeholder="Temperature" aria-label="Temperature" />
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="hr" class="control-label">Heart Rate</label>
                                        <input type="text" class="form-control form-control-sm" id="hr" name="hr"
                                            placeholder="Heart Rate" aria-label="Heart Rate" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="rr" class="control-label">Respiratory Rate</label>
                                        <input type="text" class="form-control form-control-sm" id="rr" name="rr"
                                            placeholder="Respiratory Rate" aria-label="Respiratory Rate" />
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="o2sats" class="control-label">Oxygen Saturation</label>
                                        <input type="number" class="form-control form-control-sm" id="o2sats"
                                            name="o2sats" step="any" placeholder="Oxygen Saturation"
                                            aria-label="Oxygen Saturation" />
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="weight" class="control-label">Weight</label>
                                        <input type="number" class="form-control form-control-sm" id="weight"
                                            name="weight" step="any" placeholder="Weight" aria-label="Weight" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-accent-success with-border">
                        <div class="card-header">
                            <h5 class="card-title text-success"><i class="fa fa-hospital-o"
                                    aria-hidden="true"></i>&nbsp;
                                Complaint/History/Findings</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="chiefComplaint" class="control-label">Chief Complaint <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <textarea class="form-control form-control-sm" id="chiefComplaint" rows="2"
                                            name="chiefComplaint" placeholder="Chief Complaint"
                                            aria-label="Chief Complaint"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="physicalExamination" class="control-label">Physical
                                            Examination</label>
                                        <textarea class="form-control form-control-sm" id="physicalExamination" rows="2"
                                            name="physicalExamination" placeholder="Physical Examination"
                                            aria-label="Physical Examination"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="clinicalHistory" class="control-label">Clinical
                                            History</label>
                                        <textarea class="form-control form-control-sm" id="clinicalHistory" rows="2"
                                            name="clinicalHistory" placeholder="Clinical History"
                                            aria-label="Clinical History"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="clinicalDiagnosis" class="control-label">Clinical
                                            Diagnosis</label>
                                        <textarea class="form-control form-control-sm" id="clinicalDiagnosis" rows="2"
                                            name="clinicalDiagnosis" placeholder="Clinical Diagnosis"
                                            aria-label="Clinical Diagnosis"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="findings" class="control-label">Findings</label>
                                        <textarea class="form-control form-control-sm" id="findings" rows="2"
                                            name="findings" placeholder="Findings" aria-label="Findings"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-accent-success with-border">
                        <div class="card-header">
                            <h5 class="card-title text-success"><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp;
                                Referring Provider</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providerlast_refer" class="control-label">Last Name <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <input class="form-control form-control-sm" type="text" placeholder="Last Name"
                                            aria-label="Last Name" id="providerlast_refer" name="providerlast_refer">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providerfirst_refer" class="control-label">First Name <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <input class="form-control form-control-sm" type="text" placeholder="First Name"
                                            aria-label="First Name" id="providerfirst_refer" name="providerfirst_refer">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providermiddle_refer" class="control-label">Middle
                                            Name</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Middle Name" aria-label="Middle Name" id="providermiddle_refer"
                                            name="providermiddle_refer">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providersuffix_refer" class="control-label">Suffix</label>
                                        <select class="form-control form-control-sm" placeholder="Suffix"
                                            aria-label="Suffix" id="providersuffix_refer" name="providersuffix_refer">
                                            <option value="">N/A</option>
                                            <option value="SR.">Sr.</option>
                                            <option value="JR">Jr.</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providercontact_refer" class="control-label">Contact
                                            Number</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Referring Provider Contact Number"
                                            aria-label="Referring Provider Contact Number" id="providercontact_refer"
                                            name="providercontact_refer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-accent-success with-border">
                        <div class="card-header">
                            <h5 class="card-title text-success"><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp;
                                Consulting Provider</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providerlast_consu" class="control-label">Last Name</label>
                                        <input class="form-control form-control-sm" type="text" placeholder="Last Name"
                                            aria-label="Last Name" id="providerlast_consu" name="providerlast_consu">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providerfirst_consu" class="control-label">First
                                            Name</label>
                                        <input class="form-control form-control-sm" type="text" placeholder="First Name"
                                            aria-label="First Name" id="providerfirst_consu" name="providerfirst_consu">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providermiddle_consu" class="control-label">Middle
                                            Name</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Middle Name" aria-label="Middle Name" id="providermiddle_consu"
                                            name="providermiddle_consu">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providersuffix_consu" class="control-label">Suffix</label>
                                        <select class="form-control form-control-sm" placeholder="Suffix"
                                            aria-label="Suffix" id="providersuffix_consu" name="providersuffix_consu">
                                            <option value="">N/A</option>
                                            <option value="SR.">Sr.</option>
                                            <option value="JR">Jr.</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="providercontact_consu" class="control-label">Contact
                                            Number</label>
                                        <input class="form-control form-control-sm" type="text"
                                            placeholder="Consulting Provider Contact Number"
                                            aria-label="Consulting Provider Contact Number" id="providercontact_consu"
                                            name="providercontact_consu">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-accent-success with-border">
                        <div class="card-header">
                            <h5 class="card-title text-success"><i class="fa fa-check-square-o"
                                    aria-hidden="true"></i>&nbsp;
                                Received</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="receivedby" class="control-label">Receiving Personnel <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <select class="form-control form-control-sm" id="receivedby" name="receivedby"
                                            placeholder="Receiving Personnel" aria-label="Receiving Personnel">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="receiveddate" class="control-label">Recevied Date <i
                                                class="fa fa-asterisk text-danger" aria-hidden="true"></i></label>
                                        <input type="datetime-local" name="receiveddate" id="receiveddate"
                                            class="form-control form-control-sm" step=1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group"><button type="submit" name="btnSaveRefFrom" id="btnSaveRefFrom"
                            class="btn btn-outline-info btn-inline btn-ladda ladda-button" data-style="slide-right"><i
                                id="btnSaveIcon" class="fa fa-save" aria-hidden="true"></i>&nbsp; SAVE</button><button
                            type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"
                                aria-hidden="true"></i>&nbsp; CLOSE </button></div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal" role="dialog" id="patientRefFromModal" z-index="100">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success">Patient Incoming Referrals</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="patReferralFromTable"
                        class="table table-sm table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Reference Number</th>
                                <th>Date and Time</th>
                                <th>Referring Facility</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<form id="frmDeleteRefer" name="frmDeleteRefer" method="post">
    <div class="modal" id="deleteReferModal" name="deleteReferModal" tabindex="-1" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
                    <h5> Are you sure do you want to delete this record? </h5>
                    <h5 id="deleteReferralPatient"></h5>
                    <input type="hidden" name="deleteReferralEnccode" id="deleteReferralEnccode">
                    <input type="hidden" name="deleteReferralDatetime" id="deleteReferralDatetime">
                    <input type="hidden" name="deleteTypeOfReferral" id="deleteTypeOfReferral">
                    <input type="hidden" name="deleteReferralType" id="deleteReferralType">
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
                            <div class="form-label text-success mb-1">
                                Other Reason:
                            </div>
                            <input type="text" name="RefOtherReas" id="RefOtherReas" class="form-control"
                                placeholder="Other Reason">
                            <div class="form-label text-success mb-1">
                                Category:
                            </div>
                            <select class="form-control form-control-lg" autocomplete="off" id="RefCategory"
                                name="RefCategory">
                                <option value="">Select</option>
                                <option value="OP">Outpatient</option>
                                <option value="ER">Emergency</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <h5 class=" text-success"><i class="fa fa-list"></i> Destination</h5>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="form-label text-success mb-1">
                                        Receiving Facility:
                                    </div>
                                    <select name="refFacility" id="refFacility" class="form-control form-control">
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label text-success mb-1">
                                        Philhealth Accreditation Number:
                                    </div>
                                    <input type="text" name="patientpan" id="patientpan"
                                        class="form-control form-control-md" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label text-success mb-1">
                                        Date Call:
                                    </div>
                                    <input type="datetime-local" class="form-control form-control-lg" autocomplete="off"
                                        id="dateRefCall" name="dateRefCall">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label text-success mb-1">
                                        Response:
                                    </div>
                                    <input type="text" name="RefResp" id="RefResp" class="form-control"
                                        placeholder="Response">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Receiving Personnel:
                                    </div>
                                    <input type="text" name="RefReceive" id="RefReceive" class="form-control"
                                        placeholder="Receiving Personnel">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label text-success mb-1">
                                        Designation:
                                    </div>
                                    <input type="text" name="RefDesig" id="RefDesig" class="form-control"
                                        placeholder="Designation">
                                </div>
                            </div>
                            <hr>
                            </hr>
                            <h5 class="text-success"><i class="fa fa-list"></i> Doctor</h5>
                            <div class="form-row  ">
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Referring Provider:
                                    </div>
                                    <select name="RefFrom_doc" id="RefFrom_doc" class="form-control form-control-lg">
                                    </select>
                                </div>
                                <hr>
                                </hr>
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Referral Provider:
                                    </div>
                                    <select name="RefTo_doc" id="RefTo_doc" class="form-control form-control-lg">
                                    </select>
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
                        <button type="submit" name="btnSaveReferTo" id="btnSaveReferTo"
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

<div class="modal" id="modalReferralPDF" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centere modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h4 text-success"><i class="fa fa-file-pdf"></i> Referral Information</div>
            </div>
            <div class="modal-body">
                <iframe id="referral_PDF" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modalBackReferralPDF" tabindex="-1" role="dialog">
    <input type="hidden" id="referralEnccode">
    <div class="modal-dialog modal-dialog-centere modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h4 text-success"><i class="fa fa-file-pdf"></i> Back Referral Information</div>
            </div>
            <div class="modal-body">
                <iframe id="backReferralPDF" type="application/pdf" frameborder="2" width="100%"
                    height="800px"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" id="uploadBackReferral" class="btn btn-lg btn-block btn-outline-success"><i
                        class="fa fa-upload" aria-hidden="true"></i>&nbsp; UPLOAD</button>
            </div>
        </div>
    </div>
</div>