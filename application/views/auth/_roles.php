<style>

table#roleTbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="clearfix">
		<div class="card-title h4 text text-success float-left"> 
			<div class="h4 text-success"><i class="fa fa-th-list"></i> Roles</div>
		</div>
		<button class ="btn btn-outline-success btn-md float-right"  id="btnAddRoles">
			<i class="fa fa-plus"></i> Add 
		</button>
	</div>
	<table id="roleTbl"  style="cursor:pointer;" class="table table-sm table-striped table-bordered table-condensed table-hover" >
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th class="text-center">isActive</th>
				<th width="12px"></th>
			</tr>
		</thead>
	</table>

	<form name="frmRoles" id="frmRoles">
		<div class="modal" id="modalRoles" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-body">
						<h4 class="text text-success"><i class="fa fa-user-circle"></i> Role</h4>
						  <div class="mb-1 row">
						<label for="roleName" class="col-sm-2 col-form-label">Name:</label>
						<div class="col-sm-10">
						  <input type="text"  class="form-control" name="roleName" id="roleName" placeholder="Role name">
						</div>
					  </div>
					 <div class="mb-1 row">
						<label for="roleDesc" class="col-sm-2 col-form-label">Description:</label>
						<div class="col-sm-10">
						  <input class="form-control" name="roleDesc" id="roleDesc" placeholder="Description">
						</div>
					  </div>
					  <div class="mb-3 row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
						<div class="col-sm-10">
						  <select name="roleStatus" id="roleStatus" class="form-control">
							<option value="">Select</value>
							<option value="A">Active</value>
							<option value="I">Inactive</value>
						</select>
						</div>
					  </div>
						<div class="p-2"></div>
						<input  type="hidden" name="roleFormIden" id="roleFormIden">
						<input type="hidden" name="roleID" id="roleID">
						<div class="btn-group float-right p-2">
								<button type="submit" class="btn btn-outline-success float-right"><i class="fa fa-save"></i> Save</button>
								<button data-dismiss="modal" class="btn btn-outline-danger"><i class="fa fa-remove"></i> Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	
	
	<form name="frmAssign" id="frmAssign">
		<div class="modal" id="modalAssign" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header"><h4 class="text text-success"><i class="fa fa-user-circle"></i> Assign</h4></div>
					<div class="modal-body">
							<table id="accessRow"  style="cursor:pointer;" class="table table-bordered table-sm table-striped" width="100%">
								<thead>
									<tr class="text-success">
										<th  width="5px"></th>
										<th width="50px"><i class="fa fa-th-list"></i> Menus</th>
										<th width="25px"><i class="fa fa-th-list"></i> Type</th>
									</tr>
								</thead>
							</table>
						<div class="p-2"></div>
						<input  type="hidden" name="roleFormIden" id="roleFormIden">
						<input type="hidden" name="roleID" id="roleID">
						<div class="btn-group float-right p-2">
								<button type="submit" class="btn btn-outline-success float-right"><i class="fa fa-save"></i> Save</button>
								<button data-dismiss="modal" class="btn btn-outline-danger"><i class="fa fa-remove"></i> Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

<script src="<?php echo base_url() ?>assets/scripts/auth/auth.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/auth/_roles.js"></script>