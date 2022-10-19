<span class="border-top border-5 border-top-primary"></span>
<div class="h4 text text-success with-border"><i class="fa fa-stethoscope"></i>&nbsp Vital signs</div>
<div class="row">
	<div class="col-6">
		<div class="form-row">
			<div class="col-md-2 col-form-label text-default mb-1">Date: </div>
			<div class="col-md-4">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="vsDateTime" name="vsDateTime">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">Pulse rate: </div>
			<div class="col-md-4">
				<input type="number" class="form-control form-control-mb" autocomplete="off" id="vsPulse" name="vsPulse" placeholder="Pulse rate">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">Blood pressure: </div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsBp" name="vsBp" placeholder="Diastolic/Systolic">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">Respiratory rate: </div>
			<div class="col-md-4">
				<input type="number" class="form-control form-control-mb" autocomplete="off" id="vsRr" name="vsRr" placeholder="Respiratory">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">Temperature : </div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsTemp" name="vsTemp" placeholder="Degrees in celcius">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">O<small>2</small> Saturation: </div>
			<div class="col-md-4">
				<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="o2sats" name="o2sats" placeholder="Oxygen saturation">
			</div>
		</div>
		<div hidden class="form-row">
			<div class="col-md-2 col-form-label text-default mb-1">
				Oral:
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsOral" name="vsOral" placeholder="Oral Intake">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
				N/C:
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsNC" name="vsNC" placeholder="N/C Intake">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
				Blood:
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsBlood" name="vsBlood" placeholder="Blood Intake">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
				IV:
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsIntake" name="vsIntake" placeholder="Intravenous Intake">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
				Miscellanous:
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsMiscel" name="vsMiscel" placeholder="Miscellanous">
			</div>
			<input type="hidden" name="vsEnccode" id="vsEnccode">
			<input type="hidden" name="vsHpercode" id="vsHpercode">
			<input type="hidden" name="vsformIden" id="vsformIden">
		</div>
	</div>
	<span class="border-bottom border-bottom-primary"></span>
	<div class="col-6">
		<div class="h4 text text-success with-border"><i class="fa fa-stethoscope"></i>&nbsp BMI</div>
		<div class="form-row">
			<div class="col-md-2 col-form-label text-default mb-1">
				Log:
			</div>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="hwDateLog" name="hwDateLog" placeholder="">
			</div>

			<div class="col-md-2 col-form-label text-default mb-1">
				Height:
			</div>
			<div class="col-md-10">
				<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwHeight" name="hwHeight" placeholder="Height">
				<small class="text-muted">Centimenter</small>
				<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly id="hwHeightMeasure" name="hwHeightMeasure" value="CENTI">
			</div>
			<div class="col-md-2 col-form-label text-default mb-1">
				Weight:
			</div>
			<div class="col-md-10">
				<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwWeight" name="hwWeight" placeholder="Weight">
				<small class="text-muted">Kilogram</small>
				<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly id="hwWeightMeasure" name="hwWeightMeasure" value="KILOS">
			</div>

			<div class="col-md-2 col-form-label text-default mb-1">
				B.M.I:
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" readonly id="hwBMI" name="hwBMI" placeholder="BMI">
				<input type="hidden" class="form-control form-control-mb" autocomplete="off" id="bmicat" name="bmicat">
				<small class="text-muted">Patient is : </small><small id="bmiclass"></small>
			</div>
		</div>
	</div>
</div>