<style>
table#visittbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#alrtbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#nbtbl.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#referralsTable.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#patReferralFromTable.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#referralReceivedTable.dataTable tbody tr:hover {
    background-color: #80DB88;
}
</style>
<div class="card card-accent-success">
    <h4 class="card-header">
        <div class="row">
            <div class="col-md-4">
                <div class="text text-success">
                    <i class="fa fa-folder-open"></i>
                    &nbsp Medical Records
                </div>
            </div>
            <input type="hidden" id="encounter" name="encounter" />
            <input type="hidden" id="percode" name="percode" />

            <div class="col-md-8">
                <div class="btn-group float-right" role="group" aria-label="">
                    <a href="/medical-records/icd10" class="btn btn-outline-success btn-ladda mr-2"
                        data-style="zoom-in">
                        <i class="fa fa-user"></i> Code Diagnosis
                    </a>
                    <a href="/medical-records/code-procedures" class="btn btn-outline-success btn-ladda mr-2"
                        data-style="zoom-in">
                        <i class="fa fa-user"></i> Code Procedure
                    </a>
                    <button type="button" id="searchPatient" class="btn btn-outline-success btn-ladda"
                        data-style="zoom-in">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>
        </div>
    </h4>
    <div class="card-body">
        <ul class="nav nav-tabs nav-justified mb-2" id="myTab1" role="tablist">
            <li class="nav-item " width="100px"><a class="nav-link  text-success active" id="visit-tab"
                    data-toggle="tab" href="#visit" role="tab" aria-controls="visit" aria-expanded="true"><i
                        class=" fa fa-bed fa-2x"></i> Episode/s of Care
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-success" id="alr-tab" data-toggle="tab" href="#alr" role="tab"
                    aria-controls="alr"><i class="fa fa-exclamation-triangle fa-2x"></i> Alert/s
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-success" id="referral-tab" data-toggle="tab" href="#referral" role="tab"
                    aria-controls="referral"><i class="fa fa-ambulance fa-2x" aria-hidden="true"></i> Referrals
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-success" id="new-born-tab" data-toggle="tab" href="#nb" role="tab"
                    aria-controls="nb"><i class="fa fa-heart fa-2x"></i> New born
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent ">
            <div class="tab-pane fade show active " id="visit" role="tabpanel" aria-labelledby="visit-tab">
                    <table id="visittbl" class="table table-sm table-striped table-bordered table-condensed table-hover"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="all" rowspan="2">Encounter</th>
                                <th class="all" colspan="2" class="text-center">Datelog</th>
                                <th class="all" colspan="2" class="text-center">Diagnosis</th>
                                <th colspan="2" class="text-center">Result</th>
                                <th  class="all" rowspan="2" class="text-center"></th>
                            </tr>
                            <tr>

                                <th class="text-center">Admitted</th>
                                <th class="text-center">Discharge</th>
                                <th class="text-center">Admitting</th>
                                <th class="text-center">Final</th>
                                <th class="text-center">Condition</th>
                                <th class="text-center">Disposition</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            <div class="tab-pane fade" id="alr" role="tabpanel" aria-labelledby="alert-tab">
                <button type="button" id="Alertbtn" name="Alertbtn" title="Add Alert"
                    class="btn btn-outline-success float-right mb-2">
                    <i class="fa fa-plus"></i> Add Alert
                </button>
                <table id="alrtbl" class="table table-sm table-striped table-bordered table-condensed table-hover "
                    width="100%">
                    <thead>
                        <tr>
                            <th>Date </th>
                            <th>Type</th>
                            <th>Status </th>
                            <th>Details</th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tab-pane fade" id="nb" role="tabpanel" aria-labelledby="new-born-tab">
                <div class="form-row">
                    <div class="col-md-6 col-md-auto">
                        <h5 class="modal-title text-success"><i class="fas fa-baby"></i>&nbsp New Born</h5>
                    </div>
                    <div class="col-md-6 col-md-auto">
                        <div class="btn-group pull-right" role="group" aria-label="">
                            <button onclick="SearchEnctr()" class="btn btn-outline-success btn-md btn-ladda"
                                data-style="zoom-in" data-toggle="tooltip" title="Select Encounter"><i
                                    class="fa fa-search"> </i> Select Encounter
                            </button>
                            <button onclick="AddNewBorn()" id="btnNewborn"
                                class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"
                                data-toggle="tooltip" title="Add New Born" disabled><i class="fa fa-plus"> </i> Add New
                                Born
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <table id="nbtbl" class="table table-sm table-striped table-bordered table-condensed table-hover "
                    width="100%">
                    <thead>
                        <tr>
                            <th class="never">ctr</th>
                            <th class="never">enccode</th>
                            <th class="all">Hospital no</th>
                            <th class="all">Firstname</th>
                            <th class="all">Middlename</th>
                            <th class="all">Lastname</th>
                            <th class="all">sex</th>
                            <th class="all">Birthdate</th>
                            <th class="all"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tab-pane fade" id="referral" role="tabpanel" aria-labelledby="referral-tab">
                <div class="row">
                    <div class="col">
                        <div class="dropdown float-md-right">
                            <button class="btn btn-outline-success dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-plus"></i> Add Referral
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" id="addReferralFromBtn">Referral From</a>
                                <a class="dropdown-item" href="#" id="addReferralToBtn">Referral To</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="table-responsive">
                    <table id="referralsTable"
                        class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>Encounter Date and Time</th>
                                <th>Encounter</th>
                                <th>Order</th>
                                <th>Referring/Referral Facility</th>
                                <th>Transaction Code</th>
                                <th>Type</th>
                                <th>Date and Time of Referral</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>