<style>

table#issuance_meds_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="modalSuppliesMedicines" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
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