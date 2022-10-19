<style>

table#Fhud_list.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class=" w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header; ?>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddFhud()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add FHUD" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add FHUD
					</button>	
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="Fhud_list" class="table table-sm table-hover  table-bordered table-condensed table-striped">
			<thead>
				<tr class="">
					<th width="80px">Code</th>
					<th>Name</th>
					<th>Date</th>
					<th>Region</th>
					<th>Province</th>
					<th>City/Municipality</th>
					<th>Barangay</th>
					<th>NSO code</th>
					<th>Facility code</th>
					<th>Status</th>
					<th>Address</th>
					<th>Facility Lic. No.</th>
					<th>Philhealth Accre. No.</th>
					<th width="80px">Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>


<form name="frmFhud" id="frmFhud">
	<div class="modal fade" id="ModalAddFhud" name="ModalAddFhud" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $header; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="formIden" id="formIden">
						<input type="hidden" name="datemod" value="<?php date('Y-m-d'); ?>" />
						<input type="hidden" name="updsw" value="P" />
						<input type="hidden" name="hflock" value="N" />
						<div class="col-md-3 col-form-label text-default mb-1">CODE:</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="hfhudcode" id="hfhudcode" placeholder="HFHUD code" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">NAME:</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="hfhudname" id="hfhudname" placeholder="FHUD Name" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">DATE:</div>
						<div class="col-md-9">
							<input type="date" class="form-control" name="hfhuddate" id="hfhuddate" placeholder="FHUD date" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">CITY/MUNICIPALITY:</div>
						<div class="col-md-9">
							<select class="form-control form-control-mb" id="selCity" name="selCity">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">REGION:</div>
						<div class="col-md-9">
							<select class="form-control" id="selReg" name="selReg">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">BARANGAY:</div>
						<div class="col-md-9">
							<select class="form-control form-control-mb" id="selBrgy" name="selBrgy"></select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">PROVINCE:</div>
						<div class="col-md-9">
							<select class="form-control form-control-mb" id="selProv" name="selProv">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">NSO CODE:</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nso_code" id="nso_code" placeholder="NSO code" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">FACILITY CODE:</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="faccode" id="faccode" placeholder="Facility code" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-9">
							<select name="hfstat" id="hfstat" class="form-control" placeholder="Select status">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">ADDRESS:</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="address" id="address" placeholder="Address" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">FACILITY LICENCE NUMBER:</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="faclicno" id="faclicno" placeholder="Facility lincence no." />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">PHILHEALTH ACCREDETATION NO:</div>
						<div class="col-md-9">
							<input type="text" class="form-control" name="accreno" id="accreno" placeholder="Philhealth Accredetation no." />
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

<form name="frmDeleteFhud" id="frmDeleteFhud">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">


	<div class="modal fade" id="DeleteFhud" tabindex="-1" role="dialog">
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
<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_fhud/reffhud_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_fhud/delete.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_fhud/fhud.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		FhudList();
	});
</script>