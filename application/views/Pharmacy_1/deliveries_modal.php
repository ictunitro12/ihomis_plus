<style>

table#deliveries_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="ModalPharmacyDeliveries" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Pharmacy</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearDeliveriesModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-12">
					<h4 class="text-muted">Deliveries</h4>
				</div>
			</div>
			<div class="modal-body">
				<form id="process_deliveries">
					<table id="deliveries_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover">
						<thead class="thead-dark">
							<tr>
								<th><!-- FOR DELETE CHECKBOX --></th>
								<th>Delivery No.</th>
								<th>Delivery Date</th>
								<th>Supplier</th>
								<th>Item Type</th>
								<th>Item Description</th>
								<th>Qty Delivered</th>
								<th>Expiration Date</th>
								<th>Type of Account</th>
								<th>Delivery Type</th>
							</tr>
						</thead>
							<tbody></tbody>
						<tfoot>
						</tfoot>
					</table>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="submit" class="btn btn-success" id="btn_delivery_add" value="Add" />
				<input type="submit" class="btn btn-success" id="btn_delivery_delete" value="Delete" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- MARVIN : END : RETURN MODAL -->

<!-- ROMEL : START : DELIVERIES EDIT MODAL -->
<div class="modal" id="ModalPharmacyDeliveriesEdit" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Deliveries Edit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearEditDeliveriesModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="process_edit_deliveries">
					<div class="row">
						<div class="col-md-12">
							<table class="w-100 text-nowrap">
								<input type="hidden" name="dmdcomb" id="dmdcomb_delivery_edit" />
								<input type="hidden" name="dmdctr" id="dmdctr_delivery_edit" />
								<input type="hidden" name="intkey" id="intkey_delivery_edit" />
								<tr>
									<td><label class="text-muted">Delivery No.</label></td>
									<td><input type="text" class="form-control mb-1" name="delno" id="delno_edit" /></td>
								</tr>
								<tr>
									<td><label class="text-muted">Delivery Date</label></td>
									<td><input type="date" class="form-control mb-1" name="deldteas" id="deldteas_edit" /></td>
								</tr>
								<tr>
									<td><label class="text-muted">Supplier</label></td>
									<td><select class="form-control mb-1" name="wardcode" id="wardcode_edit"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Item Type</label></td>
									<td><select class="form-control mb-1" name="itemtype" id="itemtype_edit" readonly></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Item Description</label></td>
									<td><input type="text" class="form-control mb-1" name="delivery_dmdcomb" id="delivery_dmdcomb_edit" readonly/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Qty. Delivered</label></td>
									<td><input type="text" class="form-control mb-1" name="delqty" id="delqty_edit"/></td>
								</tr>
								<tr>
									<td><label class="text-muted">Expiration Date</label></td>
									<td><input type="date" class="form-control mb-1" name="expiredte" id="expiredte_edit" /></td>
								</tr>
								<tr>
									<td><label class="text-muted">Type of Account</label></td>
									<td><select class="form-control mb-1" name="itemcode" id="itemcode_edit"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Delivery Type</label></td>
									<td><select class="form-control" name="suplind" id="suplind_edit"></select></td>
								</tr>
							</table>	
						</div>
					</div>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="submit" class="btn btn-success" id="btn_deliveries_save" value="Save" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- ROMEL : END : DELIVERIS EDIT MODAL -->