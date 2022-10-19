<style>

table#MiscellaneousTable.dataTable tbody tr:hover {
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
				<div class="btn-group pull-right" title="Add Miscellaneous" role="group" aria-label="">
					<button onclick="AddMiscellaneous()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Miscellaneous" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Miscellaneous</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="MiscellaneousTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th>CODE</th>
					<th>DESCRIPTION</th>
					<th>UNIT OF MEASURE</th>
					<th></th>
					<th>RATE</th>
					<th></th>
					<th>DATE AS OF</th>
					<th>STATUS</th>
					<th width="1%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmMiscellaneous" id="frmMiscellaneous">
	<div class="modal fade" id="ModalAddMiscellaneous" name="ModalAddMiscellaneous" role="form">
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

						<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="key" name="key" placeholder="Code" maxlength="5">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="mdesc" name="mdesc" placeholder="Description" maxlength="30"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit of measure:</div>
						<div class="col-md-9">
							<select name="selUnitMeasure" id="selUnitMeasure" class="form-control">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Rate:</div>
						<div class="col-md-9">
							<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="ma" name="ma">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Date as of:</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" name="mdao" id="mdao" class="datepicker" autocomplete="off" />
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

<form name="frmDeleteMiscellaneous" id="frmDeleteMiscellaneous">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteMiscellaneous" role="form">
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
		MiscellaneousList();
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_miscellaneous/miscellaneous.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_miscellaneous/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_miscellaneous/delete.js"></script>