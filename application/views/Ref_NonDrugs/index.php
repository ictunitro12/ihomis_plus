<style>
	table#NonDrugsTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" title="Add Non-drugs" role="group" aria-label="">
					<button onclick="AddNonDrugs()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Major Category</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="NonDrugsTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="align-middle all">Major Category Code</th>
						<th class="align-middle all">Description</th>
						<th class="never"></th>
						<th class="align-middle all">Effectivity Date</th>
						<th class="align-middle all">Status</th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmNonDrugs" id="frmNonDrugs">
	<input type="hidden" name="addID" id="addID" value="">
	<input type="hidden" name="ptupsw" id="ptupsw" value="">
	<div class="modal fade" id="ModalAddNonDrugs" name="ModalAddNonDrugs" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp;<?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="key" name="key" placeholder="Major category code" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="ndd" name="ndd" placeholder="Description" maxlength="60" required></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Effectivity Date:</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" name="dao" id="dao" class="datepicker" autocomplete="off" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control form-control-mb mb-1">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SUBMIT</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteNonDrugs" id="frmDeleteNonDrugs">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteNonDrugs" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="desc" name="desc"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<h5>Do you want to proceed?</h5>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp;DELETE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	$(function() {
		NonDrugsList();
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/nondrugs.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/delete.js"></script>