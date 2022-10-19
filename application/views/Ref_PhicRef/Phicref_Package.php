<style>

table#PackageTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
<div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
	<div class="row">
		<div class="col-md-6">
			<div class="h4 text text-success">
				<i class="fas fa-box"></i>
				&nbsp PACKAGE
			</div>
		</div>
		<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button class="btn btn-success btn-md btn-ladda mb-1" onclick="AddPackage()" data-style="zoom-in"><i class="fa fa-plus"> </i>
				</button>
			</div>
		</div>
	</div>
	<table id="PackageTable" class="table table-sm table-condensed table-bordered" width="100%">
		<thead align="center" class="thead-dark">
			<tr>
				<th></th>
				<th>CODE</th>
				<th>DESCRIPTION</th>
				<th>AMOUNT</th>
				<th>AS OF</th>
				<th>COMPENSABLE?</th>
				<th></th>
				<th width="80px"></th>
			</tr>
		</thead>
	</table>
</div>
<!-- Add modal -->
<form name="frmPhicRefPackage" id="frmPhicRefPackage">
	<div class="modal fade" id="ModalAddPackage" name="ModalAddPackage" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp; PACKAGE <i class="fas fa-box"></i></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="formIdenPack" id="formIdenPack">
						<input type="hidden" name="refintkeypack" id="refintkeypack">
						<input type="hidden" name="reftype" id="reftype" value="PACK">
						<input type="hidden" name="casetypepack" id="casetypepack" value="ORDIN">
						<div class="col-md-3 col-form-label text-default mb-1">CODE:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="refcodepack" name="refcodepack">
						</div>
						<div class="col-md-3 col-form-label text-default">DESCRIPTION:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="description" name="description">
						</div>
						<div class="col-md-3 col-form-label text-default">AMOUNT:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="amount" name="amount">
						</div>
						<div class="col-md-3 col-form-label text-default">AS OF:</div>
						<div class="col-md-9">
							<input type="date" class="form-control form-control-mb mb-1" autocomplete="off" id="refdatepack" name="refdatepack">
						</div>
						<div class="col-md-3 col-form-label text-default">COMPENSABLE?:</div>
						<div class="col-md-9">
							<select name="compensable" id="compensable" class="form-control mb-1">
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
<form name="frmDeletePackage" id="frmDeletePackage">
	<input type="hidden" name="deleteIDPack" id="deleteIDPack">
	<input type="hidden" name="deletecodepack" id="deletecodepack">
	<div class="modal fade" id="DeletePack" role="form">
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
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/package.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/addphicrefpackage.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/deletephicrefpackage.js"></script>