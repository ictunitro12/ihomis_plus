<form name="frmAccount" id="frmAccount">
<div class="modal reset" id="modalDrugAccount" role="form" style="overflow: auto;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title float-left">
                        <div class="h5 text-success"><div id="drugName"></div></div>
                    </div>
					
					<div class="btn-group float-right">
						<button  type= "button" class="btn btn-outline-success" id="btnAddItem"><i class="fa fa-plus"></i>&nbsp Add Item</button>
                    </div>
					<input type="hidden" id="dmdcomb" name="dmdcomb">
					<input type="hidden" id="dmdctr" name="dmdctr">
					<input type="hidden" id="dmdsub" name="dmdsub">
					<input type="hidden" id="unitcode" name="unitcode">
						<input type="hidden" id="baldteasof" name="baldteasof">
                </div>	
                <div class="modal-body">
					<div class="row">
					<div class="col-md-12">
					<span class="text-danger">Note : Save to update the account actual stockbalance!</span>
                    <table id="drugaccTbl" class="table table-sm table-bordered table-condensed table-hover" width="100%">
                        <thead >
                            <tr >
                                <th>Datetime log</th>
                                <th>Lotno </th>
                                <th>Stock </th>
                                <th>Beginning </th>
                                <th >Expiration </th>
                                <th>Remarks </th>
                                <th></th>
								<th></th>
                            </tr>
                        </thead>
                    </table>
					</div>
					</div>
					<div class="row">
						<div class="col-md-3">Total Stock Balance</div>
						<div class="col-md-3"><input type="text" readonly name="totalStock" id="totalStock" class="form-control"></div>
						<div class="col-md-3">Total Begin Balance</div>
						<div class="col-md-3"><input type="text" readonly name="totalBegin" id="totalBegin" class="form-control"></div>
						
					</div>
                </div>
			
                <div class="modal-footer">
				<div class="btn-group float-right">
                            <button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i
                                    class="fa fa-save"></i>&nbsp; Save</button>
                            <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>
	<form name="frmDrug" id="frmDrug">
        <div class="modal" id="modalDrug" name="modalDrug" role="form">
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

	<form name="frmdrugAccount reset" id="frmdrugAccount">
        <div class="modal" id="modalDrugForm" role="dialog" style="overflow: auto;">
            <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="h4 text-success"><i class="fa fa-pills"></i> Drug </div>
                        <div class="row">
                            <div class="col-md-3 mb-1">
                                <label>Date as Of:</label>
                            </div>
                            <div class="col-md-9 mb-1">
								<input type="datetime-local" name="dmdprdte" id="dmdprdte" step="any"  class="form-control" >
                            </div>
							<div class="col-md-3 mb-1">
                                <label>Beginning Balance:</label>
                            </div>
							<div class="col-md-9 mb-1">
								<input type="number" name="begin" id="beginbalance" class="form-control" 
                                    placeholder="Beginning Balance">
                            </div>
							<div class="col-md-3 mb-1">
                                <label>Actual Stock Balance:</label>
                            </div>
							<div class="col-md-9 mb-1">
								<input type="number" name="stock" id="stockbalance" class="form-control" 
                                    placeholder="Stock Balance">
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Unit price:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="number" name="unitprice" step="any" id="unitprice" class="form-control"
                                    placeholder="Unit Price">
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Selling price:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="number" name="selling"  step="any"  id="selling" class="form-control"
                                    placeholder="Selling Price">
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Lotno:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="text" name="lotno" id="lotno" class="form-control" placeholder="Lotno">
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>Expiry date:</label>
                            </div>
                            <div class="col-md-9 mb-1">
                                <input type="date" name="expiry" id="expiry" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label>Remarks:</label>
                                <textarea type="text" name="remarks" id="remarks" placeholder='Remarks'
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="comb" id="comb">
                        <input type="hidden" name="ctr" id="ctr">
                        <input type="hidden" name="sub" id="sub">
                        <input type="hidden" name="unitcode" id="formcode">
                        <input type="hidden" name="formiden" id="formiden">
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-outline-success btn-md btn-ladda"
                                data-style="zoom-in"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal"
                                data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

	<form id="frmDeleteDrug" name="frmDeleteDrug" method="POST">
	<input type="hidden" name="deldmdcomb" id="deldmdcomb">
	<input type="hidden" name="deldmctr" id="deldmctr">
	<input type="hidden" name="deldmsub" id="deldmsub" >
	<input type="hidden" name="deldate" id="deldate" >
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
					<div class="btn-group float-right">
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>&nbsp;
						<button type="submit" class="btn btn-outline-danger btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>