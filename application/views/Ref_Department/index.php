<style>

table#DepartmentTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
						&nbsp Department Library
					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddDepartment()" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-original-title="Add Department" data-toggle="tooltip"><i class="fa fa-plus"></i>  Add Department
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="DepartmentTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
				<thead>
					<tr class="">
						<th width="50px">Code</th>
						<th>Name</th>
						<th>Abbreviation</th>
						<th>Remarks</th>
						<th>Status</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmDepartment"   id="frmDepartment">
		<div class="modal fade" id="ModalAddDepartment" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"  id="code" name="code" placeholder ="Code" maxlength="5">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1"> Name:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Name" maxlength="30">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Abbreviation:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="abbr" name="abbr" placeholder ="Abbreviation" maxlength="20">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Remarks:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="rema" name="rema" placeholder ="Remarks" maxlength="50">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-9">
								<select name ="status" id ="status" class="form-control">
									<option value="">Status</option>
									<option value="A">Active</option>
									<option value="I">Inactive</option>
								</select>
							</div>				
						</div>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</form>
	
	<form name="frmDeleteDepartment" id="frmDeleteDepartment">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeleteDepartment" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>	


	<script type="text/javascript">
		$(function()
		{
			DepartmentList();
		});
		
		function DepartmentList()
		{
			var data = new Object();
			data.id = "DepartmentTable";
			data.link = "<?php echo site_url('Ref_Department/DepartmentList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : 4,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			{
				targets : [1,2,3,4,5],
				orderable:false,
			},
			];
			loadTable(data);
		}

		
	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_Department/ref_department_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_Department/delete.js"></script>
