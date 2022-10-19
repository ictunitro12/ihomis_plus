<style>

table#return_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="ModalPharmacyReturn" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Return Medicines / Supplies</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearReturnModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-6">
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-md" id="ret_hpercode" placeholder="Hospital" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-md" id="ret_henctr" placeholder="Encounter" />
						</div>
					</div>
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-md" id="ret_lastname" placeholder="Last Name" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-md" id="ret_firstname" placeholder="First Name" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-md" id="ret_middlename" placeholder="Middle Name" />
						</div>
					</div>
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-md" id="ret_room" placeholder="Room" />
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-row mb-4">
						<div class="col">
							<input type="button" class="btn btn-secondary" id="btn_ret_encouter" value="Encounter" />
						</div>
						<div class="col">
							<input type="button" class="btn btn-success w-100" id="btn_ret_retrieve" value="Retrieve" />
						</div>
						<div class="col">
							<input type="button" class="btn btn-danger w-100" id="btn_ret_clear" value="Clear" />
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<div class="form-check-inline">
								<label class="form-check-label" for="ret_supplies">
									<input type="radio" class="form-check-input" name="radio_ret_items" id="radio_ret_supplies" value="ret_supplies">Supplies
								</label>
							</div>
							<div class="form-check-inline">
								<label class="form-check-label" for="ret_medicines">
									<input type="radio" class="form-check-input" name="radio_ret_items" id="radio_ret_medicines" value="ret_medicines">Medicines
								</label>
							</div>
						</div>
						<div class="col">
							<div>
								<select class="form-control form-control-md" name="select_ret_items" id="select_ret_items" disabled>
									<option value="">Please select</option>
									<option value="DRUMC">Drugs and Medicines (Consignment)</option>
									<option value="DRUME">Drugs and Medicines</option>
									<option value="DRUMX">NonDrugs / Supplies (Consignment)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<form id="process_return" method="POST" action="<?php echo site_url('Pharmacy/process_return'); ?>">
					<table id="return_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Return</th>
								<th>Charge Slip</th>
								<th>Description</th>
								<th>Qty Issued</th>
								<th>Date Issued</th>
								<th>Qty Returned</th>
							</tr>
						</thead>
							<tbody></tbody>
						<tfoot>
						</tfoot>
					</table>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="button" class="btn btn-success" id="btn_ret_return" value="Return" />
				<input type="submit" class="btn btn-success" id="btn_ret_save" value="Save" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- MARVIN : END : RETURN MODAL -->