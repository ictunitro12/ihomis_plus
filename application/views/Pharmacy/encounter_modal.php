<style>

table#tbl_encounter.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="modalEncounter" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success" style="cursor: move;">
				<h5 class="modal-title text-white" >Admission History</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearDataTables()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table cellspacing="5" cellpadding="5" style="white-space: nowrap;">
					<tr>
						<td align="right">HEALTH RECORD NO.:</td>
						<td id="td_hpercode" style="color: blue;"></td>
					</tr>
					<tr>
						<td align="right">NAME:</td>
						<td id="td_name" style="color: blue;"></td>
					</tr>
					<tr>
						<td align="right">DATE OF BIRTH:</td>
						<td id="td_bday" style="color: blue;"></td>
					</tr>
				</table>
				<table id="tbl_encounter" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>DATE/TIME</th>
							<th>TYPE OF ENCOUNTER</th>
							<th>DISCHARGE DATE</th>
							<th>FINAL DIAGNOSIS</th>
						</tr>
					</thead>
					<tfoot class="thead-dark"></tfoot>
				</table>
			</div>
			<div class="modal-footer bg-secondary"></div>
		</div>
	</div>
</div>
<!-- MARVIN : END : ENCOUNTER MODAL -->