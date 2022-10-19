<form id = "frmModule" name="frmModule class="form">
	<div class="modal" id="moduleModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h4 class="modal-title text-success"><i class="fa fa-cog"></i> Module</h4>
		<hr>
			<div class="form-row">
				<div class="col-md-4 col-form-label text-default mb-1">
					Name:
				</div>
				<div class="col-md-8">
					<input type="text" class="form-control form-control-mb" autocomplete="off"  onkeypress="capitalize(this.value);" id="moduleName" name="moduleName" placeholder ="Module name">
				</div>
				<div class="col-md-4 col-form-label text-default mb-1">
					Status:
				</div>
				<div class="col-md-8">
					<select name="moduleStatus"  id ="moduleStatus" class="form-control form-control-mb" >
						<option value="">Select</option>
						<option value="A">Active</option>
						<option value="I">Inactive</option>
					</select>
				</div>
				<div class="col-md-4 col-form-label text-default mb-1">
					Comment:
				</div>
				<div class="col-md-8">
					<textarea type="text" class="form-control form-control-mb" autocomplete="off"  id="moduleComment" name="moduleComment" placeholder ="Comment/remarks"></textarea>
				</div>
			</div>
			<input type="hidden" name="moduleID" id="moduleID">
			<input type="hidden" name="moduleformIden" id="moduleformIden">
		</div>
		<div class="modal-footer">
		<button type="submit" name="btnSaveHW" id="btnSaveHW"  class="btn btn-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i></button>
		<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>