<style>

table#replenish_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="ModalPharmacyReplenish" tabindex="-1" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 id="rep_modal_title" class="modal-title text-white" >Replenish Drugs and Medicines</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearReplenishModal()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row">
				<div class="col-md-12">
					<fieldset class="border">
						<legend class="w-auto">&nbsp;<label class="text-muted">Options</label>&nbsp;</legend>
						<label class="radio-inline mr-5 ml-5"><input type="radio" name="rep_option" value="drugsAndMeds">&nbsp;Drugs and Medicines</label>
						<label class="radio-inline mr-5"><input type="radio" name="rep_option" value="medicalSupplies">&nbsp;Medical Supplies</label>
						<label class="radio-inline"><input type="radio" name="rep_option" value="suppliesAndEquipment">&nbsp;Supplies and Equipment</label>
					</fieldset>
				</div>
			</div>
			<div class="modal-body">
				<form id="process_replenish" method="POST" action="<?php echo site_url('Pharmacy/process_replenish'); ?>">
					<table id="replenish_tbl" class="table table-sm table-striped table-borderless table-condensed table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Request From</th>
								<th>Ward Name</th>
								<th>Item Description</th>
								<th>Date Requested</th>
								<th>Time Requested</th>
								<th>Qty of Items</th>
								<th>Total Qty of Items</th>
								<th>Qty of Available</th>
								<th>Latest Qty of Items Issued</th>
								<th>Qty Issue</th>
							</tr>
						</thead>
							<tbody></tbody>
						<tfoot>
						</tfoot>
					</table>
			</div>
			<div class="modal-footer bg-secondary">
				<input type="submit" class="btn btn-success" id="btn_rep_replenish" value="Replenish" />
			</div>
				</form>
		</div>
	</div>
</div>
<!-- MARVIN : END : RETURN MODAL -->