<style>

table#adjustment_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<div class="modal" id="ModalPharmacyAdjustment" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Pharmacy</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-12">
					<h4 class="text-muted">Adjustment</h4>
				</div>
			</div>
			<div class="modal-body">
				<form id="process_adjustment">
					<table id="adjustment_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Ref. No.</th>
								<th>Date</th>
								<th>Item Type</th>
								<th>Item Description</th>
								<th>Quantity</th>
								<th>Unit of Measure</th>
								<th>Quantity</th>
								<th>Plus/Minus</th>
								<th>Type of Account</th>
								<th>Remarks</th>
							</tr>
						</thead>
							<tbody></tbody>
						<tfoot>
						</tfoot>
					</table>
			</div>
				</form>
			<div class="modal-footer bg-secondary">
				<input type="submit" class="btn btn-success" id="btn_adjustment_add" value="Add" />
				<input type="submit" class="btn btn-success" id="btn_adjustment_delete" value="Delete" />
			</div>
		</div>
	</div>
</div>
<!-- ROMEL : END : ADJUSTMENT MODAL -->

<!-- ROMEL : START : ADJUSTMENT EDIT MODAL -->
<div class="modal" id="ModalPharmacyAdjustmentEdit" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Adjustment Edit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearEditAdjustmentModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="process_edit_adjustment">
					<div class="row">
						<div class="col-md-12">
							<table class="w-100 text-nowrap">
								<input type="hidden" name="altcode" id="altcode_adjustment_edit" />
								<input type="hidden" name="dmdctr" id="dmdctr_adjustment_edit" />
								<input type="hidden" name="intkey" id="intkey_adjustment_edit" />
								<input type="hidden" name="dmdcomb" id="dmdcomb_edit" />
								<tr>
									<td><label class="text-muted">Reference No.</label></td>
									<td><input type="text" class="form-control mb-1" name="refno" id="refno_edit" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Date</label></td>
									<td><input type="date" class="form-control mb-1" name="trandate" id="trandate_edit" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Item Type</label></td>
									<td><select class="form-control mb-1" name="itemtype" id="itemtype_adjustment_edit" readonly></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Item Description</label></td>
									<td><input type="text" class="form-control mb-1" name="adjustment_dmdcomb" id="adjustment_dmdcomb_edit" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Stock Quantity</label></td>
									<td><input type="text" class="form-control mb-1" name="stockqty" id="stockqty_edit" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Unit of Measure</label></td>
									<td><input type="text" class="form-control mb-1" name="uom" id="uom_edit" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Quantity</label></td>
									<td><input type="text" class="form-control mb-1" name="qty" id="qty_edit"/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Plus/Minus</label></td>
									<td><select class="form-control mb-1" name="plusminus" id="plusminus_edit"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Type of Account</label></td>
									<td><select class="form-control mb-1" name="itemcode" id="itemcode_adjustment_edit"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Remarks</label></td>
									<td><textarea class="form-control mb-1" name="adjremarks" id="adjremarks_edit"></textarea></td>
								</tr>
							</table>	
						</div>
					</div>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="submit" class="btn btn-success" id="btn_adjustment_save" value="Save" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- ROMEL : END : ADJUSTMENT EDIT MODAL -->

<!-- ROMEL : START : ADJUSTMENT ADD MODAL -->
<div class="modal" id="ModalPharmacyAdjustmentAdd" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Adjustment Add</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearAddAdjustmentModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="process_add_adjustment">
					<div class="row">
						<div class="col-md-12">
							<table class="w-100 text-nowrap">
								<!-- <input type="hidden" name="altcode" id="altcode_adjustment_edit" />
								<input type="hidden" name="dmdctr" id="dmdctr_adjustment_edit" />
								<input type="hidden" name="intkey" id="intkey_adjustment_edit" />
								<input type="hidden" name="dmdcomb" id="dmdcomb_edit" /> -->
								<tr>
									<td><label class="text-muted">Reference No.</label></td>
									<td><input type="text" class="form-control mb-1" name="refno" id="refno_add" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Date</label></td>
									<td><input type="date" class="form-control mb-1" name="trandate" id="trandate_add" /></td>
								</tr>
								<tr>
									<td><label class="text-muted">Item Type</label></td>
									<td><select class="form-control mb-1" name="itemtype" id="itemtype_adjustment_add"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Item Description</label></td>
									<td><input type="text" class="form-control mb-1" name="adjustment_dmdcomb" id="adjustment_dmdcomb_add"/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Stock Quantity</label></td>
									<td><input type="text" class="form-control mb-1" name="stockqty" id="stockqty_add" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Unit of Measure</label></td>
									<td><input type="text" class="form-control mb-1" name="uom" id="uom_add" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Quantity</label></td>
									<td><input type="text" class="form-control mb-1" name="qty" id="qty_add"/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Plus/Minus</label></td>
									<td><select class="form-control mb-1" name="plusminus" id="plusminus_add"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Type of Account</label></td>
									<td><select class="form-control mb-1" name="itemcode" id="itemcode_adjustment_add"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Remarks</label></td>
									<td><textarea class="form-control mb-1" name="adjremarks" id="adjremarks_add"></textarea></td>
								</tr>
							</table>	
						</div>
					</div>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="submit" class="btn btn-success" id="btn_adjustment_save" value="Save" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- ROMEL : END : ADJUSTMENT EDIT MODAL -->