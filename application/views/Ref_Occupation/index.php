<style>

table#OccupationTable.dataTable tbody tr:hover {
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
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddOccupation()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Occupation" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Occupation
						</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="OccupationTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th class="align-middle">SMAJOR CODE</th>
					<th class="align-middle">SMAJOR DESCRIPTION</th>
					<th class="align-middle">MAJOR CODE</th>
					<th class="align-middle">MAJOR DESCRIPTION</th>
					<th class="align-middle">STATUS</th>
					<th class="align-middle" width="8%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmOccupation" id="frmOccupation">
	<div class="modal fade" id="ModalAddOccupation" name="ModalAddOccupation" role="form">
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
						<input type="hidden" name="mupsw" id="mupsw" value="">

						<div class="col-md-3 col-form-label text-default mb-1">SMajor Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="key" name="key" placeholder="Code" maxlength="50">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">SMajor Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="smdesc" name="smdesc" placeholder="Description" maxlength="255"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Major Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="mcode" name="mcode" placeholder="Major code" maxlength="255">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Major Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="mdesc" name="mdesc" placeholder="Major description" maxlength="255"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control">
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

<form name="frmDeleteOccupation" id="frmDeleteOccupation">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteOccupation" role="form">
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
	$(function() {
		OccupationList();
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_occupation/occupation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_occupation/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_occupation/delete.js"></script>