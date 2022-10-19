<style>

table#phieTableEnc.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success" id="phieEncounter" hidden>
	<div class="card-header">
		<div class="clearfix">
			<div class="card-title h4 text text-success float-left">
				<i class="fa fa-user"></i>
				&nbsp PHIE Encounter data
			</div>
			<div class="btn-group pull-right" role="group" aria-label="">
				<button class="btn btn-outline-success btn-sm" data-style="zoom-in" id="onoff" data-toggle="tooltip" onclick="backpatrecbtn()" title="get Encounter Data"><i class="fa fa-arrow-left"></i> &nbsp;back</button>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="phieTableEnc" class="table table-bordered table-sm table-striped" width="100%">
			<thead class="">
				<tr>
					<th>CCT</th>
					<th>HOSPITALNO</th>
					<th>Health Facility</th>
					<th>IndigenousGroup</th>
					<th>PRC_No</th>
					<th>Patient_PHIC_Membership_Category</th>
					<th>Patient_PHIC_Membership_Type</th>
					<th>PhilHealth_Acc_NO</th>
					<th>With_Intact_Uterus</th>
					<th>doctors_advice</th>
					<th>encounter_age_days</th>
					<th>encounter_age_months</th>
					<th>encounter_age_years</th>
					<th>encounter_chief_complaint</th>
					<th>encounter_code</th>
					<th>encounter_condis</th>
					<th>Encounter date</th>
					<th>Date discharged</th>
					<th>Encounter disposition</th>
					<th>Final diagnosis</th>
					<th>encounter_finaldiag_date</th>
					<th>encounter_finaldiag_icd</th>
					<th>encounter_finaldiagtype</th>
					<th>encounter_time</th>
					<th>encounter_time_discharge</th>
					<th>Type of Encounter</th>
					<th>Type of visit</th>
					<th>pat_benefit_package</th>
					<th>pregnant</th>
					<th>provider_firstname</th>
					<th>provider_lastname</th>
					<th>provider_middlename</th>
					<th>provider_suffixname</th>
					<th>reason_for_referral</th>
					<th>reason_for_referral_others</th>
					<th>sor_health_care_provider</th>
					<th>sor_health_facility</th>
					<th>sor_name</th>
					<th>source_of_referral</th>
					<th>spec_accommodation</th>
					<th>spec_accommodation_others</th>
					<th>tr_non_health_facility</th>
					<th>weight_loss</th>
					<th>Action</th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="card-body encounter_details" hidden>
	<button class="btn btn-success btn-sm col-md-12 mb-2" data-style="zoom-in" onclick="hideDetails()" data-toggle="tooltip" title="Hide Encounter Details"><i class="fa fa-eye-slash"></i> &nbsp;Hide Encounter Details</button>
		<div class="form-row">
			<div class="h4 text-success col-md-12"><i class="fa fa-exclamation-circle"></i>&nbsp; Encounter Details</div>
		</div>
		<div class="form-row">
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Type of Ecounter</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="type_of_encounter" name="type_of_encounter" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Date of Ecounter</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_date" name="encounter_date" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Time of Ecounter</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_time" name="encounter_time" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Special Accommodation :</label>
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb mb-1" id="spec_accommodation" name="spec_accommodation" >
			</div>
			<div class="col-md-3">
				<label class=" col-form-label  text-success mb-1">Special Accommodation, Other Specify :</label>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb mb-1" id="spec_accommodation_others" name="spec_accommodation_others" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Age in Year :</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_age_years" name="encounter_age_years" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Age in Months :</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_age_months" name="encounter_age_months" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Age in Days :</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_age_days" name="encounter_age_days" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Chief Complaint :</label>
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_chief_complaint" name="encounter_chief_complaint" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Health Care Provider :</label>
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb mb-1" id="fhudname" name="fhudname" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Diagnosis :</label>
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_finaldiag" name="encounter_finaldiag" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Type of Diagnosis:</label>
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_finaldiagtype" name="encounter_finaldiagtype" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Final Diagnosis Code:</label>
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_finaldiag_icd" name="encounter_finaldiag_icd" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Date of Final Diagnosis:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_finaldiag_date" name="encounter_finaldiag_date" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Disposition:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_dispo" name="encounter_dispo" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Discharged Condition:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_condis" name="encounter_condis" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Date of Discharged:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_date_discharge" name="encounter_date_discharge" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Time of Discharged:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_time_discharge" name="encounter_time_discharge" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Type of Visit:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="encounter_type_visit" name="encounter_type_visit" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Pregnancy Status:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="pregnant" name="pregnant" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Wieght Loss:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="weight_loss" name="weight_loss" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">With Intact Uterus:</label>
			</div>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mb mb-1" id="With_Intact_Uterus" name="With_Intact_Uterus" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">Source of Referral:</label>
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb mb-1" id="sor_name" name="sor_name" >
			</div>
			<div class="col-md-3">
				<label class=" col-form-label  text-success mb-1">Source of Referral for Health Facility:</label>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb mb-1" id="sor_health_facility" name="sor_health_facility" >
			</div>
			<div class="col-md-4">
				<label class=" col-form-label  text-success mb-1">Source of Referral for Health Facility - Health Care Provider:</label>
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb mb-1" id="sor_health_care_provider" name="sor_health_care_provider" >
			</div>
			<div class="col-md-3">
				<label class=" col-form-label  text-success mb-1">Name of Source of Referral - Not Health Facility:</label>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb mb-1" id="tr_non_health_" name="tr_non_health_" >
			</div>
			<div class="col-md-3">
				<label class=" col-form-label  text-success mb-1">Transferred/Referred - Non Health Facility:</label>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb mb-1" id="tr_non_health_facility" name="tr_non_health_facility" >
			</div>
			<div class="col-md-2">
				<label class=" col-form-label  text-success mb-1">reason for Referral :</label>
			</div>
			<div class="col-md-10">
				<input type="text" class="form-control form-control-mb mb-1" id="reason_for_referral" name="reason_for_referral" >
			</div>
			<div class="col-md-3">
				<label class=" col-form-label  text-success mb-1">Reason for Referral, Other Specify:</label>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control form-control-mb mb-2" id="reason_for_referral_others" name="reason_for_referral_others" >
			</div>
			<button class="btn btn-outline-success btn-sm col-md-12 mb-1" data-style="zoom-in" onclick="hideDetails()" data-toggle="tooltip" title="hide details"><i class="fa fa-eye-slash"></i> &nbsp;hide</button>
		</div>
	</div>
</div>