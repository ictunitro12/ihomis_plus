<form name="formPurchase" id="formPurchase">
    <div class="modal" id="modalPurchase" role="form" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title text-success h4"><i class="fa fa-hand"></i>Purchase Request/s</div>
                    <hr class="bg-success">
                    <h5 class="text-success"><i class="fa fa-th-list"></i> Delivery & Purchase Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            Purchase No:
                            <input type="datetime-local" class="form-control form-control-md" name="delDate"
                                id="delDate" />
                        </div>
                        <div class="col-md-6">
                            Date Request:
                            <input type="text" readonly class="form-control form-control-md" name="delNo" id="delNo" />
                            Supplier:
                            <select class=" form-control form-control-md" name="delSupp_supplier"
                                id="delSupp_supplier"></select>

                        </div>
                        <div class="col-md-12">
                            Delivery Type:
                            <select class=" form-control form-control-sm" name="delSuppind" id="delSuppind">
                                <option value="">Select</option>
                                <option value="P">Procured</option>
                                <option value="D">Donation</option>
                                <option value="R">Central Office</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Sales Invoice :
                            <input type="text" class="form-control form-control-md" name="delInvoice" id="delInvoice"
                                placeholder="Sales invoice" />
                            Requisition Slip no :
                            <input type="text" class="form-control form-control-md" name="delRisno" id="delRisno"
                                placeholder="Requisition Slip number" />
                        </div>

                        <div class="col-md-6">
                            Purchase Request no:
                            <input type="text" class="form-control form-control-md" name="delReqno" id="delReqno"
                                placeholder="Sales invoice" />
                            Purchase Order no:
                            <input type="text" class="form-control form-control-md" name="delPono" id="delPono"
                                placeholder="Purchase Order no" />
                        </div>
                    </div>

                    <hr class="bg-success">
                    <h5 class="text-success"><i class="fa fa-th-list"></i> Item information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            Item Type:
                            <select class="form-control form-control-md" name="delitem_type" id="delitem_type">
                                <option value="">Select</option>
                                <option value="DM">Drugs & Medicine</option>
                                <option value="SM">Medical Supplies</option>
                                <option value="SE">Supplies & Equipment</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Quantity:
                            <input type="number" class="form-control form-control-md" placeholder="0" minlength="1"
                                name="delQty" id="delQty">
                        </div>

                        <div class="col-md-6">
                            Quantity:
                            <input type="number" class="form-control form-control-md" placeholder="0" minlength="1"
                                name="delQty" id="delQty">
                        </div>

                        <div class="col-md-6">
                            Item price:
                            <input type="number" class="form-control form-control-md" placeholder="0" minlength="1"
                                name="delPrice" id="delPrice">
                        </div>
                        <div class="col-md-6">
                            Description:
                            <select class="form-control form-control-md" name="delItem_dm" id="delItem_dm"></select>
                        </div>
                        <input name="delivformIden" id="delivformIden" type="hidden">
                        <input name="intkey" id="intkey" type="hidden">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Expiration:
                            <input type="datetime-local" class="form-control form-control-md" name="delExpire"
                                id="delExpire">
                        </div>
                        <div class="col-md-6">
                            Lot no :
                            <input type="text" class="form-control form-control-md" name="delLotno" id="delLotno">
                        </div>
                        <div class="col-md-6">
                            Remarks :
                            <textarea type="text" class="form-control form-control-md" name="delRem" id="delRem"
                                placeholder="Remarks"></textarea>
                        </div>
                    </div>
                    <div class="clearfix">
                        <button type="submit" class="btn btn-success float-right" id="btnSave"><i
                                class="fa fa-save"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>