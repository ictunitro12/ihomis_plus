<style>
table#drugData.dataTable tbody tr:hover {
    background-color: #80DB88;
}
</style>

<form id="frmDeleteDeliv" name="frmDeleteDeliv" method="post">
    <div class="modal reset" id="deleteDeliv" name="deleteDeliv" tabindex="-1" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="modal-title text-danger"><i class="fa fa-trash"></i> Delete Record ?</h2>
                    <h5> Are you sure do you want to delete this record? </h5>
                    <input type="hidden" name="delintkey" id="delintkey">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-danger btn-inline  btn-ladda"
                            data-style="slide-right"><i class="fa fa-trash"></i>&nbsp Delete</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i>&nbsp Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form name="formDeliveries" id="formDeliveries">
    <div class="modal" id="modalDeliveries" role="form" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title text-success h4"><i class="fa fa-ambulance"></i> Pickup & Delivery</div>
                    <hr class="bg-success">
                    </hr>
                    <h5 class="text-success"><i class="fa fa-th-list"></i> Delivery Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            Date:
                            <input type="datetime-local" class="form-control form-control-md" name="delDate"
                                id="delDate" />
                        </div>
                        <div class="col-md-6">
                            Reference no:
                            <input type="hidden" name="delNo" id="delNo" />
                            <input type="text" autocomplete="false" placeholder="Reference no/Delivery no" class="form-control form-control-md" name="refno" id="refno" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Supplier:
                            <select class=" form-control form-control-md" name="delSupp_supplier"
                                id="delSupp_supplier"></select>
                        </div>
                        <div class="col-md-6">
                            Delivery Type:
                            <select class=" form-control form-control-sm" name="delSuppind" id="delSuppind">
                                <option value="">Select</option>
                                <option value="P">Procured</option>
                                <option value="D">Donation</option>
                                <option value="R">Central Office</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Account:
                            <div class="input-group">
                                <input type="text" readonly class="form-control form-control-md" placeholder="Type of account" name="acctname" id="acctname"><button id="btnAcctList" type="button" class="btn btn-outline-success"><i class="fa fa-search"></i></button>
                                <input type="hidden" class="form-control form-control-md" name="acctcode" id="acctcode">
                            </div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Sales Invoice :
                            <input type="text" class="form-control form-control-md" autocomplete="off" name="delInvoice"
                                id="delInvoice" placeholder="Sales invoice" />
                            Requisition Slip no :
                            <input type="text" class="form-control form-control-md" autocomplete="off" name="delRisno"
                                id="delRisno" placeholder="Requisition Slip number" />
                        </div>
                        <div class="col-md-6">
                            Purchase Request no:
                            <input type="text" class="form-control form-control-md" autocomplete="off" name="delReqno"
                                id="delReqno" placeholder="Request no" />
                            Purchase Order no:
                            <input type="text" class="form-control form-control-md" autocomplete="off" name="delPono"
                                id="delPono" placeholder="Purchase Order no" />
                        </div>
                    </div>
                    <hr class="bg-success">
                    </hr>
                    <div class="clearfix">
                        <h5 class="text-success float-left"><i class="fa fa-th-list"></i>&nbsp Item list</h5>
                        <button type="button" id="btnMultipleItem" class="btn btn-outline-success btn-md float-right"><i
                                class="fa fa-search"></i>&nbsp Search Item/s</button>
                    </div>
                    <div class="mb-2"></div>
                    <table id="itemList" style="cursor:pointer;"
                        class="table table-md table-striped table-bordered  table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>Remove</th>
                                <th>Lotno</th>
                                <th>Description(<small>(Generic/Strength/Form/Route)</small>)</th>
                                <th style="text-align:center; vertical-align:middle;">Type</th>
                                <th style="text-align:center; vertical-align:middle;">Quantity</th>
                                <th style="text-align:center; vertical-align:middle;">cl1comb</th>
                                <th style="text-align:center; vertical-align:middle;">cl2comb</th>
                                <th style="text-align:center; vertical-align:middle;">cl2code</th>
                                <th style="text-align:center; vertical-align:middle;">Unitcode</th>
                                <th style="text-align:center; vertical-align:middle;">Unit price</th>
                                <th style="text-align:center; vertical-align:middle;">Expiration</th>
                                <th style="text-align:center; vertical-align:middle;">Remarks</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <input name="delivformIden" id="delivformIden" type="hidden">
        <div class="modal-footer">
            <div class="btn-group float-right">
                <button type="submit" class="btn btn-outline-success" id="btnSave"><i
                        class="fa fa-save"></i> Save</button>
                <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                        class="fa fa-close"></i>Cancel</button>
            </div>
        </div>
        </div>
            </div>
            </div>
            </div>
        
</form>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/_accountTable.js"></script>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/itemListMultiple.js"></script>
<script src="<?php echo base_url()?>assets/scripts/centralsupply/saveDelivery.js"></script>
