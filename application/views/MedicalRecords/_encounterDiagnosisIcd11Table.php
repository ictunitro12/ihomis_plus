<style>

table#encounterDiagnosisIcd11Table.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
	<div class="col-md-6">
		<fieldset class="form-group">
			<label>ENCOUNTER DATE</label>
			<div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
						<i class="fa fa-calendar"></i></span></span>
				<input class="form-control daterange" name="encounter_date" id="encounter_date" type="text">
			</div>
		</fieldset>

		<fieldset class="form-group">
			<label>VIEW WITH ICD11? </label>
			<div class="col-md-4 col-form-label">
				<div class="form-check checkbox">
					<input class="form-check-input" id="with_icd11" name="with_icd11" type="checkbox" value="Y">
					<label class="form-check-label" for="with_icd11">With ICD11</label>
				</div>
			</div>
		</fieldset>
	</div>
	<div class="col-md-6">
		<div class="form-group row">
			<label class="col-md-3 col-form-label">ENCOUNTER TYPE</label>
			<div class="col-md-4 col-form-label">
				<div class="form-check checkbox">
					<input class="form-check-input" id="all" name="encounter_type" type="radio" value="ALL" checked>
					<label class="form-check-label" for="all">ALL</label>
				</div>
				<div class="form-check checkbox">
					<input class="form-check-input" id="admission" name="encounter_type" type="radio" value="ADMISSION">
					<label class="form-check-label" for="admission">ADMISSION</label>
				</div>

			</div>
			<div class="col-md-5 col-form-label">
				<div class="form-check checkbox">
					<input class="form-check-input" id="outpatient" name="encounter_type" type="radio" value="OUTPATIENT">
					<label class="form-check-label" for="outpatient">OUTPATIENT</label>
				</div>
				<div class="form-check checkbox">
					<input class="form-check-input" id="emergency" name="encounter_type" type="radio" value="EMERGENCY">
					<label class="form-check-label" for="emergency">EMERGENCY</label>
				</div>
			</div>
		</div>

		<button class="btn btn-sm btn-danger reset" type="reset"> Reset Filter</button>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<table id="encounterDiagnosisIcd11Table" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead class="thead-dark">
				<tr>
					<th>Encounter Code</th>
					<th>Hospital Number</th>
					<th>Patient Name</th>
					<th>Encounter Type</th>
					<th>Date/Time</th>
					<th>Attending Doctor</th>
					<th>ICD-11 Code</th>
					<th>ICD-11 Title</th>
					<th>ICD-11 Foundation URI</th>
					<th>ICD-11 Linearization URI</th>
					<th>Final Diagnosis</th>
					<th width="50px"></th>
				</tr>
			</thead>
		</table>
	</div>
</div>