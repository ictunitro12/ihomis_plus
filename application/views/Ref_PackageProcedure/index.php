<style>
table#ProcedurePackageTable.dataTable tbody tr:hover {
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
						&nbsp <small><?php echo $subheader;?></small>
					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddProcedurePackage()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Package" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Package
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="ProcedurePackageTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
				<thead>
					<tr class="">
						<th width="50px">Package Code</th>
						<th>Description</th>
						<th>Cost Center</th>
						<th>Status</th>
						<th width="10%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmPackageProcedure"   id="frmPackageProcedure">
		<div class="modal fade" id="ModalAddPackageProcedure" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
            <input type="hidden" name="oldpackcode" id="oldpackcode">
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
							<div class="col-md-4 col-form-label text-default mb-1">Code:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="packcode" name="packcode" placeholder ="Package Code">
							</div>	
							<div class="col-md-4 col-form-label text-default mb-1">Package Name:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="packdesc" name="packdesc" placeholder ="Package Description">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-8">
								<select name ="packstat" id ="packstat" class="form-control">
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
	
	<form name="frmDeleteProcPackage" id="frmDeleteProcPackage">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		<div class="modal fade" id="DeleteProcPackageModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h3 class="text-white"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete Package</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
                        <h5 id="deletepackagedesc"></h5>
					</div>
					<div class="modal-footer bg-secondary">
						<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>	
	<script src="<?php echo base_url()?>assets/scripts/ref_package_procedure/package.js"></script>
