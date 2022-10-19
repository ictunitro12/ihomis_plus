<style>

table#Hmo_list.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class=" w-auto card card-accent-success">
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
					<button onclick="AddHmo()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add HMO" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add HMO
					</div>
				</div>	
			</div>
		</div>
		
		<div class="card-body table-responsive">
			<table id="Hmo_list" class="table table-sm table-striped  table-bordered table-condensed table-hover " width="100%">
				
				<thead>
					<tr class="">
						<th width="80px">HMO Code</th>
						<th>HMO Name</th>
						<th>HMO Address</th>
						<th>HMO Telephone No. 1</th>
						<th>HMO Telephone No. 2</th>
						<th>Status</th>
						<th width="80px">Action</th>
					</tr>
				</thead> 
			</table>	
		</div>
	</div>

	<form name="frmHmo"   id="frmHmo">
		<div class="modal fade" id="ModalAddHmo" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="hmolock" id="hmolock" value="N" />
			<input type="hidden"  name="hmodtmd" id="hmodtmd" value="<?php date('Y-m-d'); ?>" />
			<input type="hidden"  name="hmoupsw" id="hmoupsw" value="P" />
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i>&nbsp <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-6 col-form-label text-default mb-1">HMO CODE:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="hmocode" id="hmocode" placeholder="code" />
							</div>	
							<div class="col-md-6 col-form-label text-default mb-1">HMO NAME:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="hmoname" id="hmoname" placeholder="HMO Name" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">HMO ADDRESS:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="hmoaddr" id="hmoaddr" placeholder="Address" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">HMO TELEPHONE NO. 1:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="hmotel1" id="hmotel1" placeholder="000000000"/>
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">HMO TELEPHONE NO. 2:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="hmotel2" id="hmotel2" placeholder="0000000000"/>
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">STATUS:</div>
							<div class="col-md-6">
								<select name ="hmostat" id ="hmostat" class="form-control">
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

	<form name="frmDeleteHmo" id="frmDeleteHmo">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteHmo" tabindex="-1" role="dialog">
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
		$(document).ready(function() {
			HmoList();
			inithmo();
			inithmoEdit();
		});
	</script>
	
	<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_hmo/refhmo_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_hmo/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_hmo/hmo.js"></script>