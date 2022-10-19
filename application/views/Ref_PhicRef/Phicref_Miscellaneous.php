<div class="tab-pane fade" id="miscellaneous" role="tabpanel" aria-labelledby="miscellaneous-tab">
	<div class="row">
		<div class="col-md-6">
			<div class="h4 text text-success">
				<i class="fas fa-coins"></i>&nbsp MISCELLANEOUS
			</div>
		</div>
		<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button class="btn btn-success btn-md btn-ladda mb-1" onclick="AddMiscellaneous()" data-style="zoom-in"><i class="fa fa-plus"> </i>
				</button>
			</div>
		</div>
	</div>
	<table id="MiscellaneousTable" class="table table-sm table-condensed table-bordered" width="100%">
		<thead class="thead-dark" align="center">
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th>MISCELLANEOUS</th>
				<th>AS OF</th>
				<th>OR FEE INCLUSION</th>
				<th width="80px"></th>
			</tr>
		</thead>
	</table>
</div>
<!-- Add modal -->
<form name="frmPhicRefMiscellaneous" id="frmPhicRefMiscellaneous">
	<div class="modal fade" id="ModalAddMiscellaneous" name="ModalAddMiscellaneous" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp; MISCELLANEOUS <i class="fas fa-coins"></i></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="formIdenMiscel" id="formIdenMiscel">
						<input type="hidden" name="refintkeymiscell" id="refintkeymiscell">
						<input type="hidden" name="reftype" id="reftype" value="MISC">
						<div class="col-md-3 col-form-label text-default mb-1">MISCELLANEOUS:</div>
						<div class="col-md-9">
							<select name="selMisc" id="selMisc" class="form-control mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default">AS OF:</div>
						<div class="col-md-9">
							<input type="date" class="form-control form-control-mb mb-1" autocomplete="off" id="refdatemiscell" name="refdatemiscell">
						</div>
						<div class="col-md-3 col-form-label text-default">OR FEE INCLUSION:</div>
						<div class="col-md-9">
							<select name="orinclstmisc" id="orinclstmisc" class="form-control mb-1">
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
					<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<!--deleter modal-->
<form name="frmDeleteMiscellaneous" id="frmDeleteMiscellaneous">
	<input type="hidden" name="deleteIDMisc" id="deleteIDMisc">
	<input type="hidden" name="deletecodemisc" id="deletecodemisc">
	<div class="modal fade" id="DeleteMiscell" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h3 class="modal-title text-white"><i class="fa fa-exclamation-triangle"></i></h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/phicrefmiscell.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/addphicrefmiscel.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/deletephicrefmiscel.js"></script>