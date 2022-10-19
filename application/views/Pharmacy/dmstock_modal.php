<style>

table#dmstock_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<div class="modal" id="ModalPharmacyDMStock" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Drugs and Medicines</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearDMStockModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-12">
					<h4 class="text-muted">Drugs and Medicines Library</h4>
				</div>
			</div>
			<div class="modal-body">
				<table id="dmstock_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover w-100">
					<thead class="thead-dark">
						<tr>
							<th>Drug Classification</th>
							<th>Generic</th>
							<th>EDPMS ID</th>
							<th>Brand Name</th>
							<th>Strength (#)</th>
							<th>Strength Description</th>
							<th>Form</th>
							<th>Route</th>
							<th>Salt</th>
							<th>Package</th>
							<th>Status</th>
							<th>Remarks</th>
							<th>PNDF?</th>
						</tr>
					</thead>
						<tbody></tbody>
					<tfoot>
					</tfoot>
				</table>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="button" class="btn btn-success" id="btn_type_of_account" value="Type of Account" />
			</div>
		</div>
	</div>
</div>
<!-- MARVIN : END : DM STOCK MODAL -->

<!-- MARVIN : START : DM STOCK EDIT MODAL -->
<div class="modal" id="ModalPharmacyDMStockEdit" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Drugs and Medicines Edit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearDMStockModalEdit()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="process_dmstock">
					<div class="row">
						<div class="col-md-12">
							<table class="w-100 text-nowrap">
								<input type="hidden" name="dmdcomb" id="dmdcomb" />
								<input type="hidden" name="grpcode" id="grpcode" />
								<input type="hidden" name="dmdlock" id="dmdlock" />
								<input type="hidden" name="dmdupsw" id="dmdupsw" />
								<input type="hidden" name="dmddtmd" id="dmddtmd" />
								<input type="hidden" name="atcode" id="atcode" />
								<input type="hidden" name="dmdnnostp" id="dmdnnostp" />
								<input type="hidden" name="techspec" id="techspec" />
								<input type="hidden" name="dmdclmuom" id="dmdclmuom" />
								<input type="hidden" name="dmdstco" id="dmdstco" />
								<input type="hidden" name="dmdedl" id="dmdedl" />
								<input type="hidden" name="lbscode" id="lbscode" />
								<input type="hidden" name="dmdctr" id="dmdctr" />
								<input type="hidden" name="stockbal" id="stockbal" />
								<input type="hidden" name="baldteasof" id="baldteasof" />
								<input type="hidden" name="begbal" id="begbal" />
								<input type="hidden" name="barcode" id="barcode" />
								<tr>
									<td><label class="text-muted">Drug Classification</label></td>
									<td><select class="form-control mb-1" name="dmdrxot" id="dmdrxot"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Generic</label></td>
									<td><select class="form-control mb-1" name="gendesc" id="gendesc"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">EDPMS ID</label></td>
									<td><input type="text" class="form-control mb-1" name="hprodid" id="hprodid" /></td>
								</tr>
								<tr>
									<td><label class="text-muted">Brand Name</label></td>
									<td><input type="text" class="form-control mb-1" name="brandname" id="brandname" readonly /></td>
								</tr>
								<tr>
									<td><label class="text-muted">Strength (#)</label></td>
									<td><input type="text" class="form-control mb-1" name="dmdnost" id="dmdnost" /></td>
								</tr>
								<tr>
									<td><label class="text-muted">Strength Description</label></td>
									<td><select class="form-control mb-1" name="strecode" id="strecode"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Form</label></td>
									<td><select class="form-control mb-1" name="formcode" id="formcode"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Route</label></td>
									<td><select class="form-control mb-1" name="rtecode" id="rtecode"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Salt</label></td>
									<td><select class="form-control mb-1" name="saltcode" id="saltcode"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Package</label></td>
									<td><select class="form-control mb-1" name="packcode" id="packcode"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Status</label></td>
									<td><select class="form-control mb-1" name="dmdstat" id="dmdstat"></select></td>
								</tr>
								<tr>
									<td><label class="text-muted">Remarks</label></td>
									<td><textarea class="form-control mb-1" name="dmdrem" id="dmdrem"></textarea></td>
								</tr>
								<tr>
									<td><label class="text-muted">PNDF?</label></td>
									<td><select class="form-control mb-1" name="dmdpndf" id="dmdpndf"></select></td>
								</tr>
							</table>	
						</div>
					</div>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="submit" class="btn btn-success" id="btn_dmstock_save" value="Save" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- MARVIN : END : DM STOCK EDIT MODAL -->