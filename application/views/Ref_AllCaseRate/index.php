<style>

table#AllCaseRateTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp <?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" title="Add All Case Rate" role="group" aria-label="">
					<button onclick="AddAllCaseRate()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add All Case Rate" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add All Case Rate</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="AllCaseRateTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th class="align-middle">CASE CODE</th>
					<th class="align-middle">CASE DESCRIPTION</th>
					<th class="align-middle">CASE TYPE</th>
					<th class="align-middle">FIRST CASE RATE</th>
					<th class="align-middle">FIRST CASE PF SHARE</th>
					<th class="align-middle">FIRST CASE HOSPITAL SHARE</th>
					<th class="align-middle">SECOND CASE RATE</th>
					<th class="align-middle">SECOND CASE PF SHARE</th>
					<th class="align-middle">SECOND CASE HOSPITAL SHARE</th>
					<th class="align-middle">WITH LATERALITY</th>
					<th class="align-middle">ALLOWED FOR REFERRAL</th>
					<th class="align-middle">GROUP CODE</th>
					<th class="align-middle">GROUP DESCRIPTION</th>
					<th class="align-middle">STATUS</th>
					<th class="align-middle">CASE RATE CODE</th>
					<th class="align-middle">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmAllCaseRate" id="frmAllCaseRate">
	<div class="modal fade" id="ModalAddAllCaseRate" name="ModalAddAllCaseRate" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="addID" id="addID" value="">

						<div class="col-md-4 col-form-label text-default mb-1">Code:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="key" name="key" placeholder="Case code" maxlength="40">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="cdesc" name="cdesc" placeholder="Case description" maxlength="255"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Type:</div>
						<div class="col-md-8">
							<select name="ctype" id="ctype" class="form-control form-control-mb mb-1">
								<option value="M">Medical</option>
								<option value="P">Procedure</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">1st case rate:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="frate" name="frate">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">1st case PF share:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="fpf" name="fpf">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">1st case hospital share:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="fhosp" name="fhosp">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">2nd case rate:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="strate" name="strate">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">2nd case PF share:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="spf" name="spf">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">2nd case hospital share:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="shosp" name="shosp">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Group code:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="gcode" name="gcode" placeholder="Group code" maxlength="10">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Group description:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb  mb-1" autocomplete="off" id="gdesc" name="gdesc" placeholder="Group description" maxlength="255">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">With laterality:</div>
						<div class="col-md-8">
							<select name="lateral" id="lateral" class="form-control form-control-mb mb-1">
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Allowed for referral:</div>
						<div class="col-md-8">
							<select name="refer" id="refer" class="form-control form-control-mb mb-1">
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Case rate code:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="crcode" name="crcode" placeholder="Case rate code" maxlength="6">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-8">
							<select name="status" id="status" class="form-control form-control-mb mb-1">
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

<form name="frmDeleteAllCaseRate" id="frmDeleteAllCaseRate">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteAllCaseRate" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
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
		AllCaseRateList();
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_allcaserate/allcaserate.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_allcaserate/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_allcaserate/delete.js"></script>