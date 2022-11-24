<div id="smartwizard">
    <ul>
        <li>
            <a href="#step-1"><i class="fa fa-user fa-2x"></i><br /><small>Information</small></a>
        </li>
        <li>
            <a href="#step-2"><i class="fa fa-stethoscope fa-2x"></i><br /><small>Consultation</small></a>
        </li>
        <li>
            <a href="#step-3"><i class="fa fa-wheelchair fa-2x"></i><br /><small>Records</small></a>
        </li>
        <li>
            <a href="#step-4"><i class="fa fa-bank fa-2x"></i><br /><small>Payment</small></a>
        </li>
    </ul>
    <div>
        <div id="step-1">
            <form name="frmPatientProfile" enctype="multipart/form-data" id="frmPatientProfile">
                <input id="formIden" type="hidden" name="formIden">
                <input name="hpercode" id="hpercode" type="hidden">
                <?php echo ViewPatientProfile(); ?>

            </form>
        </div>
        <!--step2-->
        <div id="step-2">
            <form id="form-step-2">
                <div class="h4 text text-success"><i class="fa fa-stethoscope"></i>&nbsp Consultation</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-default"> Date of visit: </label>
                                <input type="datetime-local" name="dateVisit" id="dateVisit"
                                    class="form-control form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="text-default">Pay/Service:</label>
                                <select class="form-control" name="typaccom" id="typaccom">
                                    <option value="">Type</option>
                                    <option value="ADPAY">Basic</option>
                                    <option value="SERVI">Non-Basic</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col">
                                <label class="col-form-label text-default mb-1">Patient Age:</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-control form-control-md" name="patage" id="patage"
                                            type="number" placeholder="year(s)" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control form-control-md" name="patagemo" id="patagemo"
                                            type="number" placeholder="month(s)" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control form-control-md" name="patagedy" id="patagedy"
                                            type="number" placeholder="day(s)" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control form-control-md" name="patagehr" id="patagehr"
                                            pattern="[0-9]" type="number" step="1" min="1" placeholder="hour(s)"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-default ">Type of consultation:</label>
                                <select class="form-control" name="tosType" id="tosType" required>
                                    <option value="">Select</option>
                                    <option value="N">New</option>
                                    <option value="F">Followup</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="text-default">Consulting Doctor:</label>
                                <select class="form-control" name="selDoc_doc" required id="CONSU"></select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-default">Type of service:</label>
                                <select class="form-control" name="selTos" id="selTos" required></select>
                            </div>
                            <div class="col-md-6">
                                <label class=" text-default">has tubercolusis?:</label>
                                <select class="form-control" name="tbind" id="tbind" required>
                                    <option value="">Select</option>
                                    <option value="Y">YES</option>
                                    <option value="N">NO</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="h4 text text-success"><i class="fa fa-wheelchair"></i>&nbsp Injury/Incident
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-default">Date:</label>
                                <input type="datetime-local" name="dateIncident" id="dateIncident"
                                    class="form-control form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-default">Place:</label>
                                <textarea class="form-control" data-width="100%" placeholder="Address of incident"
                                    name="placeIncident" id="placeIncident"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <hr>
                        <div class="h4 text-success"><i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp; For
                            Referral</div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="refrom_hfhudcode">Referring Faclity:</label>
                                <select class="form-control form-control-mb" id="refrom_hfhudcode"
                                    name="refrom_hfhudcode"></select>
                                <input name="reFromTrigger" id="reFromTrigger" type="hidden">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="reFromDateTime">Date and Time:</label>
                                <input class="form-control form-control-md" name="reFromDateTime" id="reFromDateTime"
                                    type="datetime-local" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="reFromReas">Referral Reason:</label>
                                        <select class="form-control form-control-md" autocomplete="off" id="reFromReas"
                                            name="reFromReas" disabled>
                                            <option value="">Reason For Referral</option>
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="reFromOtherReas">Other Reasons:</label>
                                <textarea name="reFromOtherReas" id="reFromOtherReas" type="text"
                                    placeholder="Other Referral Reasons" class="form-control" readonly></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="h4 text text-success"><i class="fa fa-sign-out"></i>&nbsp Discharge</div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-default">Date of discharge:</label>
                                <input type="datetime-local" name="dateDischarge" id="dateDischarge"
                                    class="form-control form-control-mb">
                            </div>
                            <div class="col-md-6">
                                <label class="text-default">Disposition:</label>
                                <select class="form-control" name="selDisp" onchange="forAdm(this.value);" id="selDisp">
                                    <option value=""> Select</option>
                                    <option value="TRASH">Treated and Sent Home</option>
                                    <option value="ADMIT">For Admission</option>
                                    <option value="REFER">Referred</option>
                                    <option value="REFADD">Refused Admission</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class=" text-default">Reason for admission:</label><small>Note: if the patient is
                                    for admission.</small>
                                <textarea type="text" disabled class="form-control" name="reasAdmit" id="reasAdmit"
                                    Placeholder="Reason for Admission"></textarea>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>
<!--step-2-->
<!--step-3-->
<div id="step-3">
    <form id="form-step-3">
        <div class="row">
            <div class="col-md-12">
                <div class="border-top border-5 p-2 mb-2"></div>
                <span id="vsBMIMessage" class="text-danger"></span>
                <div id="vsBMI"></div>
            </div>
        </div>
    </form>
</div>
<!--step-3-->
<!-- /Step 4-->
<div id="step-4" class="">
    <div id="form-step-4" role="form">
        <div class="h4 text text-success"><i class="fa fa-money"></i>&nbsp Payment</div>
        <div class="row">
            <div class="col-md-4">
                <div class="text-default">
                    SOURCE OF PAYMENT(1):
                </div>
                <select name="sop1" id="sop1" class="form-control">
                    <option value="">Select</option>
                    <option value="WORCO">Worker's Compensation</option>
                    <option value="OTHGO">Other Government Payers</option>
                    <option value="SELPA">Self-pay or Personal</option>
                    <option value="NOCHA">No charge (free, charity, special research or teaching)</option>
                    <option value="MEDIC">PHIC</option>
                    <option value="INSUR">Insurance Companies</option>
                    <option value="SPONS">Sponsorship</option>
                    <option value="HMOIN">Health Maintenance Organization</option>
                    <option value="COMPA">Company</option>
                    <option value="EMPLO">c/o Employee</option>
                    <option value="DOCTR">c/o Doctor</option>
                    <option value="CRECA">c/o Credit Card</option>
                </select>
                <div class="text-default">
                    SOURCE OF PAYMENT(2):
                </div>
                <select name="sop2" id="sop2" class="form-control">
                    <option value="">Select</option>
                    <option value="WORCO">Worker's Compensation</option>
                    <option value="OTHGO">Other Government Payers</option>
                    <option value="SELPA">Self-pay or Personal</option>
                    <option value="NOCHA">No charge (free, charity, special research or teaching)</option>
                    <option value="MEDIC">PHIC</option>
                    <option value="INSUR">Insurance Companies</option>
                    <option value="SPONS">Sponsorship</option>
                    <option value="HMOIN">Health Maintenance Organization</option>
                    <option value="COMPA">Company</option>
                    <option value="EMPLO">c/o Employee</option>
                    <option value="DOCTR">c/o Doctor</option>
                    <option value="CRECA">c/o Credit Card</option>
                </select>
                <div class="text-default">
                    SOURCE OF PAYMENT(3):
                </div>
                <select name="sop3" id="sop3" class="form-control">
                    <option value="">Select</option>
                    <option value="WORCO">Worker's Compensation</option>
                    <option value="OTHGO">Other Government Payers</option>
                    <option value="SELPA">Self-pay or Personal</option>
                    <option value="NOCHA">No charge (free, charity, special research or teaching)</option>
                    <option value="MEDIC">PHIC</option>
                    <option value="INSUR">Insurance Companies</option>
                    <option value="SPONS">Sponsorship</option>
                    <option value="HMOIN">Health Maintenance Organization</option>
                    <option value="COMPA">Company</option>
                    <option value="EMPLO">c/o Employee</option>
                    <option value="DOCTR">c/o Doctor</option>
                    <option value="CRECA">c/o Credit Card</option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- /Step 4-->
</div>
</div>

<div class="modal" id="addIncomingReferralModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
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
                <div class="row">
                    <div class="col-md">
                        <span>Hospital Record Number: </span>
                        <span id="addreFromHpercode"></span>
                    </div>
                    <div class="col-md">
                        <span>Name of Patient: </span>
                        <span id="addreFromPatient"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <span>Encounter: </span>
                        <span id="addreFromEncounter"></span>
                    </div>
                    <div class="col-md">
                        <span>Date of Encounter: </span>
                        <span id="addreFromEncounterDate"></span>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="referralReceivedTable"
                        class="table table-sm table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Reference Number</th>
                                <th>Date and Time</th>
                                <th>Referring Facility</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Reason</th>
                                <th>Select</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"
                        aria-hidden="true"></i> Cancel</button>
                <input type="hidden" id="selectedReferralFromLogID" name="selectedReferralFromLogID">
                <input type="hidden" id="selectedrefromFhudCode" name="selectedrefromFhudCode">
                <input type="hidden" id="selectedreFromReas" name="selectedreFromReas">
                <input type="hidden" id="selectedreFromDateTime" name="selectedreFromDateTime">
                <input type="hidden" id="selectedreFromOtherReas" name="selectedreFromOtherReas">
                <input type="hidden" id="selectedReferringFacility" name="selectedReferringFacility">
                <button class="btn btn-success" id="selectReferralFrom"><i class=" fa fa-floppy-o"
                        aria-hidden="true"></i> Add
                    Selected</button>
            </div>
        </div>
    </div>
</div>