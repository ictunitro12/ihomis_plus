<style>

table#PNDFGenericTable.dataTable tbody tr:hover {
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
					<button onclick="AddPNDFGeneric()"class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add PNDF Generic" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add  PNDF Generic</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="PNDFGenericTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th></th>
					<th class="align-middle">MAJOR CATEGORY</th>
					<th class="align-middle">SUB 1 GROUP</th>
					<th class="align-middle">SUB 2 GROUP</th>
					<th class="align-middle">SUB 3 GROUP</th>
					<th class="align-middle">SUB 4 GROUP</th>
					<th class="align-middle">GENERIC NAME</th>
					<th class="align-middle">STATUS</th>
					<th class="align-middle" width="1%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmPNDFGeneric" id="frmPNDFGeneric">
	<div class="modal fade" id="ModalAddPNDFGeneric" name="ModalAddPNDFGeneric" role="form">
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
						<input type="hidden" name="key" id="key" value="">

						<div class="col-md-3 col-form-label text-default mb-1">Major Category :</div>
						<div class="col-md-9">
							<select name="selPNDFClass" id="selPNDFClass" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub 1 Group :</div>
						<div class="col-md-9">
							<select name="selSubGroup1" id="selSubGroup1" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub 2 Group :</div>
						<div class="col-md-9">
							<select name="selSubGroup2" id="selSubGroup2" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub 3 Group :</div>
						<div class="col-md-9">
							<select name="selSubGroup3" id="selSubGroup3" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sub 4 Group :</div>
						<div class="col-md-9">
							<select name="selSubGroup4" id="selSubGroup4" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Generic Name :</div>
						<div class="col-md-9">
							<select name="selGeneric" id="selGeneric" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Status :</div>
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
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeletePNDFGeneric" id="frmDeletePNDFGeneric">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeletePNDFGeneric" role="form">
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
		PNDFGenericList();
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_pndfgeneric/pndfgeneric.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_pndfgeneric/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_pndfgeneric/delete.js"></script>