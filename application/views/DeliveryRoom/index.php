<style>

	table#DeliveryRoomTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>	
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-6 col-md-6">
				<span class="h4  text-success"> <?php echo $header; ?> <small><?php echo $subheader; ?></small></span>
			</div>
			<div class="col-6">
				<div class="btn-group float-right" role="group" aria-label="">
					<a href="<?php echo site_url('Patient/PatientRegister'); ?>" name="btnRegister" data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i> Register Patient</a>
					<a href="<?php echo site_url('Emergency/Add'); ?>" name="btndeliverycode" data-toggle="tooltip" data-placement="top" title="Emergency Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-ambulance"></i> Log Patient</a>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="DeliveryRoomTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="">
					<th>Patient Code</th>
					<th>Patient Name</th>
					<th>Registration <br><small>(Date and Time)</small></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th width="50px">Actions</th>
				</tr>
			</thead>
		</table>
	</div>
</div>


<form name="frmDeliveryRoom"   id="frmDeliveryRoom">
	<div class="modal fade" id="ModalAddDeliveryRoom" tabindex="-1" role="dialog">
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

<form name="frmDeleteDeliveryRoom" id="frmDeleteDeliveryRoom">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">


	<div class="modal fade" id="DeleteDeliveryRoom" tabindex="-1" role="dialog">
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
		initDeliveryRoom();

	});

</script>
<script src="<?php echo base_url()?>assets/scripts/deliveryroom/index.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/emergency/emergency.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/emergency/editEmergency.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
