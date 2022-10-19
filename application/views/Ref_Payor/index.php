<style>

table#PayorTable.dataTable tbody tr:hover {
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
						<button onclick="AddPayor()" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-original-title="Add Payor" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Payor
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="PayorTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
				<thead>
					<tr class="">
						<th>Code</th>
						<th>Name</th>
						<th>Address</th>
						<th>Contact Person</th>
						<th>Telephone Number</th>
						<th>Fax Number</th>
						<th>Email Address</th>
						<th>Status</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmPayor"   id="frmPayor">
		<div class="modal fade" id="ModalAddPayor" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="dialog">
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
								<input type="text" class="form-control form-control-mb" autocomplete="off"  id="code" name="code" placeholder ="Code" maxlength="10">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1"> Name:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Name" maxlength="130">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1"> Address:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="addr" name="addr" placeholder ="Address" maxlength="110">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1"> Contact Person:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="contact" name="contact" placeholder ="Contact Person" maxlength="60">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1"> Telephone No:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="telno" name="telno" placeholder ="Telephone No" maxlength="15">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1"> Fax Number:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="faxno" name="faxno" placeholder ="Fax Number" maxlength="15">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Email Address:</div>
							<div class="col-md-9">
								<input type="email" class="form-control form-control-mb" autocomplete="off"   id="email" name="email" placeholder ="Email Address" maxlength="20">
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
	
	<form name="frmDeletePayor" id="frmDeletePayor">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeletePayor" tabindex="-1" role="dialog">
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
			PayorList();
			var provider = encodeURIComponent(encodeURIComponent(provider));
			var provname = encodeURIComponent(encodeURIComponent(provname));

		});
		
		function PayorList()
		{
			var data = new Object();
			data.id = "PayorTable";
			data.link = "<?php echo site_url('Ref_Payor/PayorList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : 7,
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
				targets : [1,2,3,4,5,6,7,8],
				orderable:false,
			},


			];
			loadTable(data);
		}

		
	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_Payor/ref_Payor_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_Payor/delete.js"></script>
