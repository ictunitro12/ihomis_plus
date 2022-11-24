<form name="frmDrug" id="frmDrug">
        <div class="modal" id="modalDrug" name="modalDrug" tab-index="-1" role="form">
            <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5 class="modal-title text-success"><i class="fa fa-pills"></i> Drug</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <div class="row">
                            <input type="hidden" name="formIdenDrug" id="formIdenDrug" value="">
                            <div class="col-md-3 col-form-label text-default mb-1">Drugs</div>
                            <input type="hidden" class="form-control" id="drugcomb" name="drugcomb">
                            <input type="hidden" class="form-control" id="drugctr" name="drugctr">
                            <input type="hidden" class="form-control" id="baldteasof" name="baldteasof">
                            <div class="col-md-9">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="drug" readonly
                                        placeholder="Drugs & Medicine">
                                    <button type="button" class="btn btn-outline-success" id="btnSearchDrug">Search
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Charges:</div>
                            <div class="col-md-9">
                                <select name="chrgDrug" id="chrgDrug" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Barcode:</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-mb" autocomplete="off" id="barcode"
                                    name="barcode" placeholder="Barcode">
                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Reorder:</div>
                            <div class="col-md-9">
                                <input type="number" class="form-control form-control-mb" autocomplete="off"
                                    id="reorder" name="reorder" placeholder="Reorder Level">
                            </div>
                            <div class="col-md-3 col-form-label text-default mb-1">Remarks:</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-mb" autocomplete="off" id="drugrem"
                                    name="drugrem" placeholder="Remarks">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group float-right">
                            <button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-save"></i>&nbsp; SAVE</button>
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="<?php echo base_url()?>assets/scripts/pharmacy/saveAccount.js"></script>