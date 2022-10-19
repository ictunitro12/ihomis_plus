<style>

table#accessRow.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<form name="formAccess" id="formAccess" method="POST">
		<div class="row">
			<div class="col-md-3 p-3">
				<label class="form-label text-success h5">Roles</label>
				<div id="roles"></div>
			</div>
			<div class="col-md-9 p-3">
				<div class="h4 text text-success float-left"><i class="fa fa-th-list"></i>Menu List</div>
				<button type="submit" class="btn btn-outline-success float-right "><i class="fa fa-save"></i> Save</button>
				<table id="accessRow" class="table table-bordered table-md table-striped" width="100%">
					<thead>
						<tr class="text-success">
							<th></th>
							<th> Menus</th>
							<th> Type</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
		<input type="hidden" id="formIdenAccess" name="formIdenAccess">
		<input type="hidden" class="form-control" name="accuserID" id="accuserID">
	</form>
