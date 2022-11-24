<div class="modal" id="addIncomingReferralModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-xl">
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
                <form id="saveAddReferralFrom">
                    <input type="hidden" id="referralFromEnccode" name="referralFromEnccode">
                    <input type="hidden" id="referralFromToeCode" name="referralFromHpercode">
                    <input type="hidden" id="referralFromLogID" name="referralFromLogID">
                    <input type="hidden" id="referralFromToeCode" name="referralFromToeCode">
                    <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Add
                        Selected</button>
                </form>
            </div>
        </div>
    </div>
</div>