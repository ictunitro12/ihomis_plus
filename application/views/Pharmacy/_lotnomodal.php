<style>

table#lotnotbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
  <div class="modal" name="drugIssueModal" id="drugIssueModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" tab-index="-1" role="form">
		<div class="modal-content">
		<div class="modal-header">
		<div class="modal-title">
			<div class="text text-success h4"><i class="fa fa-pills"></i> Issue Drug</div>
		</div>
		</div>
			<div class="modal-body">
				<table id="lotnotbl"  style="cursor:pointer;"class="table table-md table-striped table-bordered  table-hover" width="100%">
					<thead>
						<tr>
							<th width="50px" >Lot No</th>
							<th width="100px">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
							<th  style="text-align:center; vertical-align:middle;" >Price</th>
							<th  style="text-align:center; vertical-align:middle;">Available</th>
							<th  style="text-align:center; vertical-align:middle;">dmdcomb</th>
							<th  style="text-align:center; vertical-align:middle;">dmdctr</th>
							<th  style="text-align:center; vertical-align:middle;">dmhdrsub</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal"  data-style="zoom-in"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
	</div>
	</div>

