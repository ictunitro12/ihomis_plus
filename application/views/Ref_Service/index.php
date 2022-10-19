<style>

table#ServiceTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
						&nbsp<?php echo $header;?>
					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddService()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Service" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Service
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="ServiceTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
				<thead>
					<tr class="">
						<th width="50px">Code</th>
						<th>Description</th>
						<th>Type of Service</th>
						<th>Status</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmService"   id="frmService">
		<div class="modal fade" id="ModalAddService" role="form">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="form">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"  id="code" name="code" placeholder ="Code" readonly="" maxlength="5">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1"> Description:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Description" maxlength="30">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1"> Type of Service:</div>
							<div class="col-md-9">
								<select name ="type" id ="type" class="form-control">
									<option value="">Type of Service</option>
									<option value="MEDIC">Medical</option>
									<option value="SURGI">Surgical</option>
									<option value="OBGYN">Obstetrics</option>
									<option value="PEDIA">Pediatrics</option>
									<option value="GYN">Gynecology</option>
								</select>
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
	
	<form name="frmDeleteService" id="frmDeleteService">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteService" role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="form">
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
			ServiceList();
		});
		
		function ServiceList()
		{
			var data = new Object();
			data.id = "ServiceTable";
			data.link = "<?php echo site_url('Ref_Service/ServiceList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : [1,2,3,4],
				orderable:false
			},
			{
				targets : 3,
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
				targets : 2,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'MEDIC' : return '&nbsp Medical'; break;
						case 'SURGI' : return '&nbsp Surgical'; break;
						case 'OBGYN' : return '&nbsp Obstetrics'; break;
						case 'PEDIA' : return '&nbsp Pediatrics'; break;
						case 'GYN' : return '&nbsp Gynecology'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			];
			loadTable(data);
		}
		
		

	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_service/ref_service_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_service/delete.js"></script>
