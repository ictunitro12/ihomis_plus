<style>

table#issuance_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="ModalPharmacyIssuance" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Issue Medicines / Supplies</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearIssuanceModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-6">
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-md" id="hpercode" placeholder="Hospital" />
							<input type="hidden" id="patbdate" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-md" id="henctr" placeholder="Encounter" />
						</div>
					</div>
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-md" id="lastname" placeholder="Last Name" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-md" id="firstname" placeholder="First Name" />
						</div>
						<div class="col">
							<input type="text" class="form-control form-control-md" id="middlename" placeholder="Middle Name" />
						</div>
					</div>
					<div class="form-row mb-2">
						<div class="col">
							<input type="text" class="form-control form-control-md" id="room" placeholder="Room" />
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-row mb-4">
						<div class="col">
							<input type="button" class="btn btn-secondary" id="btn_encouter" value="Encounter" />
						</div>
						<div align="left" class="col">
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
									<input type="radio" class="form-check-input" name="radio_items" id="radio_medicines" value="medicines">Medicines
								</label>
							</div>
						</div>
						<div class="col">
							<div>
								<select class="form-control form-control-md" name="select_items" id="select_items" disabled>
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
						<tfoot id="issuance_foot">
							<tr>
								<th></th>
								<th></th>
								<th style="text-align: right;">Number of Items:</th>
								<th></th>
								<th></th>
								<th></th>
								<th id="total_items">---</th>
								<th></th>
								<th></th>
							</tr>
							<tr>
								<th></th>
								<th></th>
								<th style="text-align: right;">Total of present transaction:</th>
								<th></th>
								<th></th>
								<th></th>
								<th id="total_price_items">---</th>
								<th></th>
								<th></th>
							</tr>
							<tr>
								<th></th>
								<th></th>
								<th style="text-align: right; font-size: 18px;">GRAND TOTAL:</th>
								<th></th>
								<th></th>
								<th></th>
								<th id="grand_total" style="font-size: 18px;">---</th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
					</table>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="button" class="btn btn-success" id="btn_chargeslip" value="Generate Charge Slip" />
				<input type="submit" class="btn btn-success" value="Issue" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- MARVIN : END : ISSUANCE MODAL -->

<!-- MARVIN : START : CHARGE SLIP MODAL -->
<div class="modal" id="chargeSlip" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Charge Slip Printing</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearDataTables()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table id="chargeslip_tbl">
					<thead class="thead-dark">
						<tr>
							<td align="center" colspan="4">HOSPITAL MEMORIAL MEDICAL CENTER</td>
						</tr>
						<tr>
							<td align="center" colspan="4"><b>CHARGE SLIP</b></td>
						</tr>
						<tr>
							<td style="width: 20%;">Cost Center:</td>
							<td id="cost_center" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
							<td style="width: 10%;">No.</td>
							<td id="chargeslip_no" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
						</tr>
						<tr>
							<td style="width: 20%;">Hospital #:</td>
							<td id="hospital_no" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
							<td style="width: 10%;">Date:</td>
							<td id="chargeslip_date" align="center" style="border-bottom: 1px solid; width: 30%;"></td>
						</tr>
						<tr>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td align="right" id="pat_bdate" colspan="4" style="font-size: 12px;"></td>
						</tr>
						<tr>
							<td style="width: 20%;">Patient's Name:</td>
							<td id="patients_name" style="border-bottom: 1px solid;" colspan="3"></td>
						</tr>
						<tr>
							<td style="width: 20%;">Ward:</td>
							<td style="border-bottom: 1px solid;" colspan="3"></td>
						</tr>
						<tr>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td colspan="4">
								<table width="100%">
									<tr id="charge_item_tr" style="border-top: double; border-bottom: double;">
										<td align="center">ITEM</td>
										<td align="center">QTY</td>
										<td align="center">UNIT COST</td>
										<td align="center">AMOUNT</td>
									</tr>
									<tr style="border-top: double; border-bottom: double;">
										<td align="center" colspan="3">TOTAL</td>
										<td id="charge_total" align="center"></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2">Issued by:</td>
							<td colspan="2">Received by:</td>
						</tr>
						<tr>
							<td></td>
							<td align="center" style="border-bottom: 1px solid;">Nurse N. Nurse</td>
							<td></td>
							<td align="center" style="border-bottom: 1px solid;">Doctor D. Doctor</td>
						</tr>
					</thead>
					<tfoot class="thead-dark"></tfoot>
				</table>
			</div>
			<div class="modal-footer bg-secondary"><button id="btn_print" class="btn btn-success float-right"><i class="fa fa-print"></i></button></div>
		</div>
	</div>
</div>
<!-- MARVIN : END : CHARGE SLIP MODAL -->