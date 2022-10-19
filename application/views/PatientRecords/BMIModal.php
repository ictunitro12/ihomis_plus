<form id="frmDeleteBMI" name="frmDeleteBMI" method="POST">
	<input type="hidden" name="delBMIenccode" id="delBMIenccode">
	<input type="hidden" name="delBMIdatelog" id="delBMIdatelog">
	<input type="hidden" name="hwformIdenDelete" id="hwformIdenDelete" value="delete">
	<div class="modal" id="deleteBMIModal" name="deleteBMIModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
					<h2 class="modal-title text-danger"></h2>

				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i> DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmhW" name="frmhW" class="form">
	<div class="modal" id="hwModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
					<h4 class="modal-title text-success"><i class="fa fa-tachometer"></i> Body Mass Index</h4>
					<hr>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">
							Log:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="hwDateLog" name="hwDateLog" placeholder="">
						</div>

						<div class="col-md-4 col-form-label text-default mb-1">
							Height:
						</div>
						<div class="col-md-8">
							<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwHeight" name="hwHeight" placeholder="Height">
							<small class="text-muted">Centimenter</small>
							<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly id="hwHeightMeasure" name="hwHeightMeasure" value="CENTI">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Weight:
						</div>
						<div class="col-md-8">
							<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwWeight" name="hwWeight" placeholder="Weight">
							<small class="text-muted">Kilogram</small>
							<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly id="hwWeightMeasure" name="hwWeightMeasure" value="KILOS">
						</div>

						<div class="col-md-4 col-form-label text-default mb-1">
							B.M.I:
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" readonly id="hwBMI" name="hwBMI" placeholder="BMI">
							<input type="hidden" class="form-control form-control-mb" autocomplete="off" id="bmicat" name="bmicat">
							<small class="text-muted">Patient is : </small><small id="bmiclass"></small>
						</div>
					</div>
					<input type="hidden" name="hwEnccode" id="hwEnccode">
					<input type="hidden" name="hwHpercode" id="hwHpercode">
					<input type="hidden" name="hwformIden" id="hwformIden">
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" name="btnSaveHW" id="btnSaveHW" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>