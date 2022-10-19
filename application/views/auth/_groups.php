<style>

table#group_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

table#sub_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
	<div class="clearfix">
	<div class="card-title h4 text text-success float-left"> 
		<div class="h4 text-success"><i class="fa fa-th-list"></i> Menu/Groups</div>
	</div>
		<div class="btn-group float-right">
			<button class ="btn btn-outline-success btn-md float-right" onclick="groupAdd()"; id="btnAddmenu"><i class="fa fa-plus"></i> Add</button>
			<button class ="btn btn-outline-success btn-md float-right"  id="btnUpload"><i class="fa fa-upload"></i> Upload</button>
		</div>
	</div>
	<table id="group_tbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
		<thead>
			<tr>
				<th >Name</th>
				<th >Description</th>
				<th >Type</th>
				<th >w/submenu</th>
				<th>Active</th>
				<th width="12px"></th>
			</tr>
		</thead>
	</table>
	
	<div class="modal" id="subModal"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
		<div class="clearfix">
			<div class="card-title h4 text text-success float-left"> 
				<div class="h4 text-success"><i class="fa fa-th-list"></i> Submenu</div>
			</div>
			<button class ="btn btn-outline-success btn-md float-right" onclick="addSub()"; id="btnaddSubmenu" >
				<i class="fa fa-plus"></i> Add
			</button>
		</div>
			<table id="sub_tbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
			<tr>
				<th >Name</th>
				<th >Description</th>
				<th>Active</th>
				<th width="12px"></th>
			</tr>
			</thead>
			</table>
				</div>
					<input type="hidden" name="subIDtemp" id="subIDtemp">
				<div class="modal-footer">
					<div class="btn-group">
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Cancel </button>
					</div>
				</div>
			</div>
		</div>
	</div>

