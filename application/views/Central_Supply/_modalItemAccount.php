<form name="frmItem" id="frmItem">
    <div class="modal" id="modalItem" name="modalItem" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title text-success"><i class="fa fa-syringe"></i> Item Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <input type="hidden" name="formIdenItem" id="formIdenItem">
                        <div class="col-md-3 col-form-label text-default mb-1">Item name:</div>
                        <input type="hidden" class="form-control" id="cl2codee" name="cl2code">
                        <input type="hidden" class="form-control" id="c2lcomb" name="cl2comb">
                        <input type="hidden" class="form-control" id="cl1code" name="cl1code">
                        <input type="hidden" class="form-control" id="baldteasof" name="baldteasof">
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="item" readonly placeholder="Item name">
                                <button type="button" class="btn btn-outline-success" id="btnsearchItem">Search
                                </button>
                            </div>
                        </div>
                        <div class="col-md-3 col-form-label text-default mb-1">Charges:</div>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" readonly class="form-control form-control-md"
                                    placeholder="Type of account" name="acctname" id="acctname"><button id="btnAcctList"
                                    type="button" class="btn btn-outline-success"><i class="fa fa-search"></i></button>
                                <input type="hidden" class="form-control form-control-md" name="acctcode" id="acctcode">
                            </div>
                        </div>
                        <div class="col-md-3 col-form-label text-default mb-1">Barcode:</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-mb" autocomplete="off" id="barcode"
                                name="barcode" placeholder="Barcode">
                        </div>
                        <div class="col-md-3 col-form-label text-default mb-1">Reorder:</div>
                        <div class="col-md-9">
                            <input type="number" class="form-control form-control-mb" autocomplete="off" id="reorder"
                                name="reorder" placeholder="Reorder Level">
                        </div>
                        <div class="col-md-3 col-form-label text-default mb-1">Remarks:</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-mb" autocomplete="off" id="itemrem"
                                name="itemrem" placeholder="Remarks">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group float-right">
                        <button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i
                                class="fa fa-save"></i>&nbsp; Save</button>
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i
                                class="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="<?php echo base_url()?>assets/scripts/centralsupply/saveAccount.js"></script>