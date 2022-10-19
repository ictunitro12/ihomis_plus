<form id="vitalSignsForm" name="vitalSignsForm" class="form">
	<div class="modal" id="vitalSignsModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-stethoscope"></i> Triage Patient Details</h5>
					<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="triage_id" id="triage_id">
					<input type="hidden" name="triage_temp_id" id="triage_temp_id">
					<input type="hidden" name="hpercode1" id="hpercode1">
					<div class="row">
						<div class="col-6">
							<label class="form-label">Chief Complaint:</label>
							<textarea type="text" name="chief_complaint" id="chief_complaint" Placeholder="Chief Complaint" class="form-control"></textarea>
						</div>
						<div class="col-6">
							<div class="row">
								<label class="c-switch c-switch-pill c-switch-label c-switch-opposite-success">
									<input type="checkbox" name="is_pregnant" id="is_pregnant" class="c-switch-input" value="1">
									<span class="c-switch-slider" data-checked="Yes" data-unchecked="No"></span>
								</label>
								<span class="pl-2 align-middle">Is Pregnant?</span>
							</div>

							<div class="row">
								<label class="c-switch c-switch-pill c-switch-label c-switch-opposite-success">
									<input type="checkbox" name="is_newborn" id="is_newborn" class="c-switch-input" value="1">
									<span class="c-switch-slider" data-checked="Yes" data-unchecked="No"></span>
								</label>
								<span class="pl-2 align-middle">Is Newborn?</span>
							</div>

							<div class="row">
								<label class="c-switch c-switch-pill c-switch-label c-switch-opposite-success">
									<input type="checkbox" name="has_tuberculosis" id="has_tuberculosis" class="c-switch-input" value="1">
									<span class="c-switch-slider" data-checked="Yes" data-unchecked="No"></span>
								</label>
								<span class="pl-2 align-middle">Has Tuberculosis?</span>
							</div>

						</div>
					</div>

					<div class="row mt-2">
						<div class="col-6">
							<div class="h4 text text-success with-border"><i class="fa fa-stethoscope"></i>&nbsp Vital signs</div>
							<div class="form-row">
								<div class="col-md-4 col-form-label text-default mb-1">Date: </div>
								<div class="col-md-8">
									<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="vital_sign_log_date" name="vital_sign_log_date">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 col-form-label text-default mb-1">Pulse rate: </div>
								<div class="col-md-8">
									<input type="number" class="form-control form-control-mb" autocomplete="off" id="pulse_rate" name="pulse_rate" placeholder="Pulse rate">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 col-form-label text-default mb-1">Blood pressure: </div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb" autocomplete="off" id="blood_pressure" name="blood_pressure" placeholder="Diastolic/Systolic">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 col-form-label text-default mb-1">Respiratory rate: </div>
								<div class="col-md-8">
									<input type="number" class="form-control form-control-mb" autocomplete="off" id="respiratory_rate" name="respiratory_rate" placeholder="Respiratory">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 col-form-label text-default mb-1">Temperature : </div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb" autocomplete="off" id="temperature" name="temperature" placeholder="Degrees in celcius">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 col-form-label text-default mb-1">O<small>2</small> Saturation: </div>
								<div class="col-md-8">
									<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="oxygen_saturation" name="oxygen_saturation" placeholder="Oxygen saturation">
								</div>
							</div>
						</div>
						<span class="border-bottom border-bottom-primary"></span>
						<div class="col-6">
							<div class="h4 text text-success with-border"><i class="fa fa-stethoscope"></i>&nbsp BMI</div>
							<div class="form-row">
								<div class="col-md-4 col-form-label text-default mb-1">
									Log:
								</div>
								<div class="col-md-8">
									<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="bmi_log_date" name="bmi_log_date" placeholder="">
								</div>

								<div class="col-md-4 col-form-label text-default mb-1">
									Height:
								</div>
								<div class="col-md-8">
									<input type="number" class="form-control form-control-mb" autocomplete="off" step="0.01" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwHeight" name="hwHeight" placeholder="Height">
									<small class="text-muted">Centimenter</small>
									<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly id="hwHeightMeasure" name="hwHeightMeasure" value="CENTI">
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									Weight:
								</div>
								<div class="col-md-8">
									<input type="number" class="form-control form-control-mb" autocomplete="off" step="0.01" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwWeight" name="hwWeight" placeholder="Weight">
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
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" name="btnSaveDiag" id="btnSaveDiag" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>