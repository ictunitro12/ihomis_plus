function uploaddata(enccode) {
	$("#ModalProgressBar2").modal({
		backdrop: 'static'
	});
	submiting_animation(enccode);
}
var i = 0;

function submiting_animation(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	if (i == 0) {
		i = 1;
		var elem = document.getElementById("mySubmitBar");
		var width = 10;
		var id = setInterval(frame, 50);

		function frame() {
			if (width >= 100) {
				clearInterval(id);
				$.ajax({
					url: baseURL + "PHIE_DocUploadPhie/uploadPhie_PatientData/" + enctr,
					type: "POST",
					data: 'JSON',
					processData: false,
					contentType: false,
					success: function (data, response, type) {
						if (data.code == '106') {
							$("#ModalProgressBar2").modal('hide');
							toastr.success("Success!", data.message);
							$("#ModalProgressEncounter").modal({
								backdrop: 'static'
							});
							submiting_EncounterData(enctr);
						}
						else {
							toastr.error(data.data.PHIE.Description, "Error uploading!");
						}
					},
					error: function (response) {
						toastr.error("Please try again.", "Error");
					},
				});
				i = 0;
			} else {
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "% success";
			}
		}
	}

}

//Encounter Data Uploading
function submiting_EncounterData(enctr) {
	console.log(enctr);
	if (i == 0) {
		i = 1;
		var elem = document.getElementById("mySubmitBars");
		var width = 10;
		var id = setInterval(frame, 50);

		function frame() {
			if (width >= 100) {
				clearInterval(id);
				i = 0;
				$.ajax({
					url: baseURL + "PHIE_DocUploadPhie/uploadPhie_EncounterData/" + enctr,
					type: "POST",
					data: 'JSON',
					processData: false,
					contentType: false,
					success: function (data, response) {
						$("#ModalProgressEncounter").modal('hide');
						if (data.code == '103') {
							if (data.data.PHIE.InvalidDetails.Pat_PHIC_Membership_Type !== undefined) {
								alert("Patient Membership type: " + data.data.PHIE.InvalidDetails.Pat_PHIC_Membership_Type + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.CCT !== undefined) {
								alert("CCT: " + data.data.PHIE.InvalidDetails.CCT + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.IndigenousGroup !== undefined) {
								alert("IP group: " + data.data.PHIE.InvalidDetails.IndigenousGroup + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.pat_benefit_package !== undefined) {
								alert("Patient benefit package: " + data.data.PHIE.InvalidDetails.pat_benefit_package + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Encounter_ID !== undefined) {
								alert("Encounter ID: " + data.data.PHIE.InvalidDetails.Encounter_ID + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Encounter_Type !== undefined) {
								alert("Encounter type: " + data.data.PHIE.InvalidDetails.Encounter_Type + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Provider_PhilHealth_Acc_No !== undefined) {
								alert("Provider PhilHealth Accreditation no.: " + data.data.PHIE.InvalidDetails.Provider_PhilHealth_Acc_No + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Provider_PRC_No !== undefined) {
								alert("PRC no: " + data.data.PHIE.InvalidDetails.Provider_PRC_No + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Prov_Last_Name !== undefined) {
								alert("Provider last name: " + data.data.PHIE.InvalidDetails.Prov_Last_Name + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Prov_First_Name !== undefined) {
								alert("Provider first name: " + data.data.PHIE.InvalidDetails.Prov_First_Name + "\r\n With patient facility no	 : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Prov_Middle_Name !== undefined) {
								alert("Provider Middle name: " + data.data.PHIE.InvalidDetails.Prov_Middle_Name + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Prov_Suffix_Name !== undefined) {
								alert("Provider suffix name: " + data.data.PHIE.InvalidDetails.Prov_Suffix_Name + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Diagnosis_Type !== undefined) {
								alert('Diagnosis type' + data.data.PHIE.InvalidDetails.Diagnosis_Type + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Final_Diagnosis_ICD10 !== undefined) {
								var textb = 'Final diagnosis ICD10';
								alert(textb.bold + data.data.PHIE.InvalidDetails.Final_Diagnosis_ICD10 + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Disposition !== undefined) {
								alert('Disposition' + data.data.PHIE.InvalidDetails.Disposition + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Discharge_Condition !== undefined) {
								alert("Discharged condition: " + data.data.PHIE.InvalidDetails.Discharge_Condition + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Type_of_Visit !== undefined) {
								alert("Type of visit: " + data.data.PHIE.InvalidDetails.Type_of_Visit + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Weight_Loss !== undefined) {
								alert("Weight loss: " + data.data.PHIE.InvalidDetails.Weight_Loss + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.With_Intact_Uterus !== undefined) {
								alert("With intact uterus: " + data.data.PHIE.InvalidDetails.With_Intact_Uterus + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Source_of_Referral !== undefined) {
								alert("Rource of Referral: " + data.data.PHIE.InvalidDetails.Source_of_Referral + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else if (data.data.PHIE.InvalidDetails.Reason_For_Referral !== undefined) {
								alert("Reson for Referral: " + data.data.PHIE.InvalidDetails.Reason_For_Referral + "\r\n With patient facility no : " + data.PHIE.SubmittedDetails.Pat_Facility_No);
							}
							else {
								alert("Error!");
							}
						}
						else if (data.code == '106') {
							toastr.success("Success!", "Encounter Data successfuly uploaded.");
						}
						else {
							toastr.error("Please try again.", "Error");
						}
						// location.reload();
					},
					error: function (response) {
						toastr.error("Please try again.", "Error");
					},
				});
			} else {
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "% success";
			}
		}
	}

}

//get Encounter data
function getEncdata(hpercode) {
	var hpercodes = atob(hpercode);
	$("#ModalGet_Encounter").modal({
		backdrop: 'static'
	});
	if (i == 0) {
		i = 1;
		var elem = document.getElementById("progress_bar");
		var width = 80;
		var id = setInterval(frame, 50);
		function frame() {
			if (width >= 100) {
				clearInterval(id);
				$.ajax({
					url: baseURL + "PHIE_DocUploadPhie/getPHIE_EncounterData/" + hpercodes,
					type: "POST",
					data: 'JSON',
					processing: true,
					success: function (data, response) {
						if (data.code == '140') {
							$("#ModalGet_Encounter").modal('hide');
							$('#phieEncounter').prop('hidden', false);
							$('.patrecor').prop('hidden', true);
							$('.citw').prop('hidden', true);
							toastr.success('Success!', 'Encounter data available.');
							var table = $("#phieTableEnc").DataTable({
								processing: true,
								ajax: {
									url: baseURL + "PHIE_DocUploadPhie/getPHIE_EncounterData/" + hpercodes,
									type: "POST",
								},
								destroy: true,
								className: 'table table-sm table-striped table-borderless table-condensed table-hover',
								columns: [
									{ "data": "CCT" },
									{ "data": "HOSPITALNO" },
									{
										"data": null,
										render: function (data) {
											return data.fhudname;
										}
									},
									{ "data": "IndigenousGroup" },
									{ "data": "PRC_No" },
									{ "data": "Patient_PHIC_Membership_Category" },
									{ "data": "Patient_PHIC_Membership_Type" },
									{ "data": "PhilHealth_Acc_NO" },
									{ "data": "With_Intact_Uterus" },
									{ "data": "doctors_advice" },
									{ "data": "encounter_age_days" },
									{ "data": "encounter_age_months" },
									{ "data": "encounter_age_years" },
									{ "data": "encounter_chief_complaint" },
									{ "data": "encounter_code" },
									{ "data": "encounter_condis" },
									{ "data": "encounter_date" },
									{ "data": "encounter_date_discharge" },
									{ "data": "encounter_dispo" },
									{ "data": "encounter_finaldiag" },
									{ "data": "encounter_finaldiag_date" },
									{ "data": "encounter_finaldiag_icd" },
									{ "data": "encounter_finaldiagtype" },
									{ "data": "encounter_time" },
									{ "data": "encounter_time_discharge" },
									{ "data": "encounter_type" },
									{ "data": "encounter_type_visit" },
									{ "data": "pat_benefit_package" },
									{ "data": "pregnant" },
									{ "data": "provider_firstname" },
									{ "data": "provider_lastname" },
									{ "data": "provider_middlename" },
									{ "data": "provider_suffixname" },
									{ "data": "reason_for_referral" },
									{ "data": "reason_for_referral_others" },
									{ "data": "sor_health_care_provider" },
									{ "data": "sor_health_facility" },
									{ "data": "sor_name" },
									{ "data": "source_of_referral" },
									{ "data": "spec_accommodation" },
									{ "data": "spec_accommodation_others" },
									{ "data": "tr_non_health_facility" },
									{ "data": "weight_loss" },
									{ "data": "showbtn" }],
								columnDefs: [
									{ className: "text-center", targets: "_all" },
									{
										targets: [0, 1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 20, 21, 22, 23, 24, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42],
										visible: false,
									},
									{
										targets: [18, 25, 26],
										searchable: false,
										orderable: false,
										render: function (data, type, rows) {
											switch (data) {
												case 'ADMDX': return 'ADMITTED';
													break;
												case 'HOME': return 'SENT HOME';
													break;
												case 'REFER': return 'REFERRED';
													break;
												case 'O': return 'OUTPATIENT';
													break;
												case 'I': return 'INPATIENT';
													break;
												case 'ADMIN': return 'NEW ADMITTION';
													break;
												case 'ADMIT': return 'ADMITTED';
													break;
												case 'CONSU': return 'CONSULTATION';
													break;
												case 'FOLLO': return 'FOR FOLLOW-UP';
													break;
												default: 'undifined'
											}
										},
									}],

							});
							$('#phieTableEnc').off('click', 'tr');
							$('#phieTableEnc').on('click', 'tr', function () {
								var data = table.row(this).data();
								$('#showbtn').click(function(){
									$('.encounter_details').prop('hidden', false);
								});
								var type_of_encounter = data.encounter_type;
								var encounter_date = data.encounter_date;
								var encounter_time = data.encounter_time;
								var spec_accommodation = data.spec_accommodation;
								var spec_accommodation_others = data.spec_accommodation_others;
								var encounter_age_years = data.encounter_age_years;
								var encounter_age_months = data.encounter_age_months;
								var encounter_age_days = data.encounter_age_days;
								var encounter_chief_complaint = data.encounter_chief_complaint;
								var fhudname = data.fhudname;
								var encounter_finaldiag = data.encounter_finaldiag;
								var encounter_finaldiagtype = data.encounter_finaldiagtype;
								var encounter_finaldiag_icd = data.encounter_finaldiag_icd;
								var encounter_finaldiag_date = data.encounter_finaldiag_date;
								var encounter_dispo = data.encounter_dispo;
								var encounter_condis = data.encounter_condis;
								var encounter_date_discharge = data.encounter_date_discharge;
								var encounter_time_discharge = data.encounter_time_discharge;
								var encounter_type_visit = data.encounter_type_visit;
								var pregnant = data.pregnant;
								var weight_loss = data.weight_loss;
								var With_Intact_Uterus = data.With_Intact_Uterus;
								var sor_name = data.sor_name;
								var sor_health_facility = data.sor_health_facility;
								var sor_health_care_provider = data.sor_health_care_provider;
								/* var tr_non_health_ = data.tr_non_health_; */
								var tr_non_health_facility = data.tr_non_health_facility;
								var reason_for_referral = data.reason_for_referral;
								var reason_for_referral_others = data.reason_for_referral_others;
								$('#type_of_encounter').val(type_of_encounter == 'O' ? 'Outpatient' : 'Inpatient');
								$('#encounter_date').val(encounter_date);
								$('#encounter_time').val(encounter_time);
								$('#spec_accommodation').val(spec_accommodation == 'NULL' ? ' ' : spec_accommodation);
								$('#spec_accommodation_others').val(spec_accommodation_others == 'NULL' ? ' ' : spec_accommodation_others);
								$('#encounter_age_years').val(encounter_age_years);
								$('#encounter_age_months').val(encounter_age_months);
								$('#encounter_age_days').val(encounter_age_days);
								$('#encounter_chief_complaint').val(encounter_chief_complaint);
								$('#fhudname').val(fhudname);
								$('#encounter_finaldiag').val(encounter_finaldiag);
								switch(encounter_finaldiagtype){
									case 'ADMDX' : encounter_finaldiagtype = 'Admitting diagnosis';
									break;
									case 'CLIDI' : encounter_finaldiagtype = 'Clinical diagnosis';
									break;
									case 'FINDX' : encounter_finaldiagtype = 'Final Diagnosis';
									break;
									case 'OTHER' : encounter_finaldiagtype = 'Other diagnosis';
									break;
									case 'WODIA' : encounter_finaldiagtype = 'Working diagnosis';
									break;
									case 'WORDX' : encounter_finaldiagtype = 'Interim diagnosis';
									break;
									default : encounter_finaldiagtype = 'Not Applicable.';
									break;
								}
								$('#encounter_finaldiagtype').val(encounter_finaldiagtype);
								$('#encounter_finaldiag_icd').val(encounter_finaldiag_icd);
								$('#encounter_finaldiag_date').val(encounter_finaldiag_date);
								switch(encounter_dispo){
									case 'ADMDX' : encounter_dispo = 'Admitted';
									break;
									case 'HOME' : encounter_dispo = 'Sent Home';
									break;
									case 'REFER' : encounter_dispo = 'Referred';
									break;
									default : encounter_dispo = 'Not Applicable.';
									break;
								}
								$('#encounter_dispo').val(encounter_dispo);
								$('#encounter_condis').val(encounter_condis);
								$('#encounter_date_discharge').val(encounter_date_discharge);
								$('#encounter_time_discharge').val(encounter_time_discharge);
								switch(encounter_type_visit){
									case 'ADMIN' : encounter_type_visit = 'New Admission';
									break;
									case 'ADMIT' : encounter_type_visit =  'Admitted';
									break;
									case 'CONSU' : encounter_type_visit =  'Consultation';
									break;
									case 'FOLLO' : encounter_type_visit =  'For Follow-up';
									break;
									default : encounter_type_visit =  'Not Applicable.';
									break;
								}
								$('#encounter_type_visit').val(encounter_type_visit);
								$('#pregnant').val(pregnant == 'Y' ? 'Yes' : 'No');
								switch(weight_loss){
									case 'N' : weight_loss = 'No';
									break;
									case 'U' : weight_loss =  'Unknown';
									break;
									case 'Y' : weight_loss =  'Yes';
									break;
									default : weight_loss =  'Not Applicable.';
									break;
								}
								$('#weight_loss').val(weight_loss);
								switch(With_Intact_Uterus){
									case 'N' : With_Intact_Uterus = 'No';
									break;
									case 'U' : With_Intact_Uterus =  'Unknown';
									break;
									case 'Y' : With_Intact_Uterus =  'Yes';
									break;
									default : With_Intact_Uterus =  'Not Applicable.';
									break;
								}
								$('#With_Intact_Uterus').val(With_Intact_Uterus);
								$('#sor_name').val(sor_name == 'NULL' ? ' ' : sor_name);
								$('#sor_health_facility').val(sor_health_facility == 'NULL' ? ' ' : sor_health_facility);
								$('#sor_health_care_provider').val(sor_health_care_provider == 'NULL' ? ' ' : sor_health_care_provider);
								/* $('#tr_non_health_').val(tr_non_health_); */
								$('#tr_non_health_facility').val(tr_non_health_facility == 'NULL' ? ' ' : tr_non_health_facility);
								$('#reason_for_referral').val(reason_for_referral=='NOTAP' ? 'Not Applicable' : reason_for_referral);
								$('#reason_for_referral_others').val(reason_for_referral_others == 'NULL' ? ' ' : reason_for_referral_others);
							});
						}
						else {
							toastr.error('Error!', 'No encounter data available in PHIE');
							$("#ModalGet_Encounter").modal('hide');
						}
					},
					error: function (response) {
						toastr.error('Error!', 'Error in getting encounter data');
						$("#ModalGet_Encounter").modal('hide');
					}
				});
				i = 0;
			} else {
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "% success";
			}
		}
	}
}
function backpatrecbtn() {
	$('#phieEncounter').prop('hidden', true);
	$('.patrecor').prop('hidden', false);
	$('.citw').prop('hidden', false);
}
function hideDetails() {
	$('.encounter_details').prop('hidden', true);
}
/* 
function ShowDetails(){
	$('.encounter_details').prop('hidden', true);
} */