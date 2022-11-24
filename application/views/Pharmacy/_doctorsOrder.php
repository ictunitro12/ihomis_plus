<div class="clearfix mb-2">
    <div class="h4  text-success float-left"><i class="fa fa-user-md"></i> Doctor/s Order/ Requisitions</div>
</div>
<div id="dashboard">
<div class="row">
<div class="col-6">
<div class="border-start border-start-4 border-start-info px-3 mb-3"><small class="text-disabled">Request/s</small>
<div class="fs-5 fw-semibold"  id="requestqty">0</div>
</div>
</div>
<div class="col-6">
<div class="border-start border-start-4 border-start-danger px-3 mb-3"><small class="text-disabled">Issued</small>
<div class="fs-5 fw-semibold" id="issueqty">0</div>
</div>
</div>
</div></div>
<div class="tab-pane fade show active" id="drugsAndMeds" role="tabpanel" aria-labelledby="drugsAndMeds-tab">
    <table id="drugsAndMeds_tbl" style="cursor:pointer"
        class="table table-sm  table-bordered table-condensed table-hover" style="width=100%" ;>
        <thead>
            <tr>
                <th width="20px">Date</th>
                <th width="140px">Chargeslip</th>
                <th width="300px">Patient Name</th>
                <th width="450px">Description</th>
                <th width="5px">Ordered(Qty)</th>
                <th width="20px">Price</th>
                <th width="20px">Amount</th>
                <th width="20px">Qty(Issued)</th>
                <th width="20px">Balance</th>
                <th width="5px">Status</th>
                <th width="5px">Priority</th>
                <th width="5px"></th>
            </tr>
        </thead>
    </table>
</div>
<form id="frmIssueDrug" name="frmIssueDrug">
    <div class="modal" id="modalDrugIssue" role="dialog" tab-index="1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="h4 modal-title text-success"><i class="fa fa-pills"></i> Ordered List/s</div>
                </div>
                <div class="modal-body">
                    <div id="issue_patientInfo"></div>
                    <h6 class="text text-success"><i class="fa fa-th-list"></i> List of Drug/Medicine</h6>
                    <table id="drugMedsIssue" style="cursor:pointer"
                        class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
                        <thead>
                            <tr>
                                <th><small>#</small></th>
                                <th><small>Ordered</small></th>
                                <th><small>Issued</small></th>
                                <th><small>Lot No</small></th>
                                <th><small>Description</small></th>
                                <th><small>Status</small></th>
                                <th><small>Order</small></th>
                                <th><small>Issue</small></th>
                                <th><small>Unit Price</small></th>
                                <th><small>Amount</small></th>
                                <th><small>docointkey</small></th>
                                <th><small>enccode</small></th>
                                <th><small>hpercode</small></th>
                                <th><small>dmdcomb</small></th>
                                <th><small>dmdctr</small></th>
                                <th><small>chrgcod</small></th>
                                <th><small>dmdprdte</small></th>
                            </tr>
                        </thead>
                    </table>
                    <input type="hidden" name="action" id="action">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i
                                class="fa fa-check"></i> Save</button>
                        <button class="btn btn-outline-danger btn-md btn-ladda" data-style="zoom-in"
                            data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<div class="modal" name="drugIssueModal" id="drugIssueModal" role="form">
    <div class="modal-dialog modal-dialog-centered modal-lg" tab-index="-1" role="form">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <div class="text text-success h4"><i class="fa fa-pills"></i> Issue Drug</div>
                </div>
            </div>
            <div class="modal-body">
                <table id="lotnotbl" style="cursor:pointer;"
                    class="table table-md table-striped table-bordered  table-hover" width="100%">
                    <thead>
                        <tr>
                            <th width="50px">Lot No</th>
                            <th width="100px">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
                            <th style="text-align:center; vertical-align:middle;">Price</th>
                            <th style="text-align:center; vertical-align:middle;">Available</th>
                            <th style="text-align:center; vertical-align:middle;">dmdcomb</th>
                            <th style="text-align:center; vertical-align:middle;">dmdctr</th>
                            <th style="text-align:center; vertical-align:middle;">dmhdrsub</th>
                            <th style="text-align:center; vertical-align:middle;">Expiry</th>
                            <th style="text-align:center; vertical-align:middle;">Account</th>
                            <th style="text-align:center; vertical-align:middle;">Date as of</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i
                        class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" name="pharmChargeSlip" id="pharmChargeSlip" role="form">
    <div class="modal-dialog modal-dialog-centered modal-md" tab-index="-1" role="form">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <div class="text text-success h4"><i class="fa fa-file-pdf"></i> <b id="chrgno"></b></div>
                </div>
            </div>
            <div class="modal-body">
                <iframe id="chargeslip" type="application/pdf" frameborder="2" width="100%" height="500px"></iframe>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i
                        class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>


<form name="formReturn" id="formReturn">
    <div class="modal" id="modalDrugReturn">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="form">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="h4 modal-title text-success"><i class="fa fa-user"></i> Return</div>
                </div>
                <div class="modal-body">
                    <i id="sample"></i>
                    <div id="return_patientInfo"></div>
                    <h6 class="text text-success"><i class="fa fa-th-list"></i> List of Drug/Medicine</h6>
                    <table id="drugMedsReturn" style="cursor:pointer"
                        class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
                        <thead>
                            <tr>
                                <th><small>#</small></th>
                                <th><small>Ordered</small></th>
                                <th><small>Issued</small></th>
                                <th><small>Lot No</small></th>
                                <th><small>Description</small></th>
                                <th><small>Status</small></th>
                                <th><small>Issued</small></th>
                                <th><small>Return</small></th>
                                <th><small>Unit Price</small></th>
                                <th><small>Amount</small></th>
                                <th><small>docointkey</small></th>
                                <th><small>enccode</small></th>
                                <th><small>hpercode</small></th>
                                <th><small>dmdcomb</small></th>
                                <th><small>dmdctr</small></th>
                                <th><small>dmhdrsub</small></th>
                                <th><small>qty</small></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i
                                class="fa fa-check"></i> Save</button>
                        <button class="btn btn-outline-danger btn-md btn-ladda" data-style="zoom-in"
                            data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/docord.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_editForm.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_multiForm.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_cancel.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_rx.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_delete.js"></script>