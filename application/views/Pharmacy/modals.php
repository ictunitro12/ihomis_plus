<style>

table#issuance_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="ModalPharmacyIssuance" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white" >Issue Medicines / Supplies</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearIssuanceModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-6">
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-sm" id="hpercode" placeholder="Hospital" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-sm" id="henctr" placeholder="Encounter" />
						</div>
					</div>
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-sm" id="lastname" placeholder="Last Name" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-sm" id="firstname" placeholder="First Name" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-sm" id="middlename" placeholder="Middle Name" />
						</div>
					</div>
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-sm" id="room" placeholder="Room" />
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-row mb-4">
						<div class="col">
							<input type="button" class="btn btn-success w-100" id="btn_retrieve" value="Retrieve" />
						</div>
						<div class="col">
							<input type="button" class="btn btn-danger w-100" id="btn_clear" value="Clear" />
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<div class="form-check-inline">
								<label class="form-check-label" for="supplies">
									<input type="radio" class="form-check-input" name="radio_items" id="radio_supplies" value="supplies">Supplies
								</label>
							</div>
							<div class="form-check-inline">
								<label class="form-check-label" for="medicines">
									<input type="radio" class="form-check-input modalMedicines" name="radio_items" id="radio_medicines" value="medicines">Medicines
								</label>
							</div>
						</div>
						<div class="col">
							<div>
								<select class="form-control form-control-sm" name="select_items" id="select_items" disabled>
									<option value="">Please select</option>
									<option value="DRUMC">Drugs and Medicines (Consignment)</option>
									<option value="DRUME">Drugs and Medicines</option>
									<option value="DRUMN">NonDrugs / Supplies (Consignment)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<form id="process_issuance" method="POST" action="<?php echo site_url('Pharmacy/process_issuance'); ?>">
					<table id="issuance_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Issue</th>
								<th>Charge Slip #</th>
								<th>Description</th>
								<th>Qty Ordered</th>
								<th>Qty Issued</th>
								<th>Price</th>
								<th>Total</th>
								<th>Date of Order</th>
								<th>Ordered by</th>
							</tr>
						</thead>
							<tbody></tbody>
						<tfoot class="thead-dark"></tfoot>
					</table>
					<input type="button" class="btn btn-default" value="Charge Slip" />
					<input type="submit" class="btn btn-default" value="Issue" />
				</form>
			</div>
			<div class="modal-footer bg-secondary"></div>
		</div>
	</div>
</div>
<!-- MARVIN : END : ISSUANCE MODAL -->

<!-- MARVIN : START : SUPPLIES MODAL -->
<div class="modal" id="modalSuppliesMedicines" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white" >Medicines</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearDataTables()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table id="issuance_meds_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Details</th>
							<th>Price</th>
							<th>Reorder Level</th>
							<th>Stock</th>
						</tr>
					</thead>
					<tfoot class="thead-dark"></tfoot>
				</table>
			</div>
			<div class="modal-footer bg-secondary"></div>
		</div>
	</div>
</div>
<!-- MARVIN : END : SUPPLIES MODAL -->