<form name="frmAccount" id="frmAccount">
    <div class="modal reset" id="modalItemAccount" role="form" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title float-left">
                        <div class="h5 text-success">
                            <div id="itemName"></div>
                        </div>
                    </div>
                    <div class="btn-group float-right">
                        <button type="button" class="btn btn-outline-success" id="btnAddItem"><i
                                class="fa fa-plus"></i>&nbsp Add Item</button>
                    </div>
                    <input type="hidden" id="cl2code" name="cl2code">
                    <input type="hidden" id="cl1comb" name="cl1comb">
                    <input type="hidden" id="cl2comb" name="cl2comb">
                    <input type="hidden" id="unitcode" name="unitcode">
                    <input type="hidden" id="hclass2sub" name="hclass2sub">
                    <input type="hidden" id="baldteasof" name="baldteasof">
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="h5 text-success"><i class="fa fa-th-list"></i> Item Lists</div>
                            <code class="callout callout-danger">Note : Save to update the account actual stockbalance!</code>
                            <table id="itemAccTbl" class="table table-sm table-bordered table-condensed table-hover"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th class="all">Datetime log</th>
                                        <th class="all">Lotno </th>
                                        <th>Stock </th>
                                        <th>Beginning </th>
                                        <th>Expiration </th>
                                        <th>Remarks </th>
                                        <th class="all"></th>
                                        <th class="all"></th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Total Stock Balance</div>
                        <div class="col-md-3"><input type="text" readonly name="totalStock" id="totalStock"
                                class="form-control"></div>
                        <div class="col-md-3">Total Begin Balance</div>
                        <div class="col-md-3"><input type="text" readonly name="totalBegin" id="totalBegin"
                                class="form-control"></div>

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


<form name="frmItemAcc reset" id="frmItemAcc">
    <div class="modal" id="modalItemAcc" role="dialog" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="h4 text-success"><i class="fa fa-medkit"></i> Item </div>
                    <div class="row">
                            <input type="hidden" name="cl2dteas" id="cl2dteas" step="any" class="form-control">
                        <div class="col-md-3 mb-1">
                            <label>Beginning Balance:</label>
                        </div>
                        <div class="col-md-9 mb-1">
                            <input type="number" name="begin" id="beginbalance" autocomplete = "off" class="form-control"
                                placeholder="Beginning Balance">
                        </div>
                        <div class="col-md-3 mb-1">
                            <label>Actual Stock Balance:</label>
                        </div>
                        <div class="col-md-9 mb-1">
                            <input type="number" name="stock" id="stockbalance" autocomplete = "off" class="form-control"
                                placeholder="Stock Balance">
                        </div>
                        <div class="col-md-3 mb-1">
                            <label>Unit price:</label>
                        </div>
                        <div class="col-md-9 mb-1">
                            <input type="number" name="unitprice" step="any" autocomplete = "off" id="unitprice" class="form-control"
                                placeholder="Unit Price">
                        </div>
                        <div class="col-md-3 mb-1">
                            <label>Selling price:</label>
                        </div>
                        <div class="col-md-9 mb-1">
                            <input type="number" name="selling" step="any"  autocomplete = "off" id="selling" class="form-control"
                                placeholder="Selling Price">
                        </div>
                        <div class="col-md-3 mb-1">
                            <label>Lotno:</label>
                        </div>
                        <div class="col-md-9 mb-1">
                            <input type="text" name="lotno" id="lotno" autocomplete = "off" class="form-control" placeholder="Lotno">
                        </div>
                        <div class="col-md-3 mb-1">
                            <label>Expiry date:</label>
                        </div>
                        <div class="col-md-9 mb-1">
                            <input type="date" name="expiry" id="expiry" autocomplete = "off"  class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Remarks:</label>
                            <textarea type="text" name="remarks" id="remarks" autocomplete = "off" placeholder='Remarks'
                                class="form-control"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="cl2" id="cl2">
                    <input type="hidden" name="account" id="account">
                    <input type="hidden" name="formcode" id="formcode">
                    <input type="hidden" name="pricedate" id="pricedate">
                    <input type="hidden" name="formiden" id="formiden">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i
                                class="fa fa-save"></i> Save</button>
                        <button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal"
                            data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmDeleteItem" name="frmDeleteItem" method="POST">
    <input type="hidden" name="formiden">
    <input type="hidden" name="cl2comb">
    <input type="hidden" name="hclass2sub">
    <input type="hidden" name="cl2dteas">
    <div class="modal" id="deleteModalItem" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class="fa fa-trash"></i>&nbsp Delete</h5>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer ">
                    <div class="btn-group ">
                    <button type="submit" class="btn btn-outline-danger btn-ladda float-left" data-style="zoom-in"><i
                                class="fa fa-trash"></i>&nbsp Delete</button>
                        <button type="button" class="btn btn-outline-danger btn-ladda float-right" data-dismiss="modal" data-style="zoom-in"><i
                                class="fa fa-close"></i> Cancel</button>&nbsp;
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>