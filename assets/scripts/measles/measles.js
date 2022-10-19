var Module = $('#module').val();

function checkMeasles(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		type: "POST",
		url: "../Measles/checkMeasles/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
				window.location.reload();
				$("#PatSearch").modal('show');
			}
			else {
				initMeasles(hpercode, enccode);
			}
		},
		error: function (data) {
			alert('Please try again!');
		}
	});
}

function initMeasles(enccode, hpercode) {
	Measleswizard();
	initcheck();
	CivilStatus();
	uppercase();
	SelReligion();
	City();
	SelIndig();
	// AgeComputation();
	getPatientData(enccode);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
	$("#date_report").val(getTimeLocale());
	$("#date_investigation").val(getTimeLocale());
	$("#search").attr("disabled", false);
}

function initMeaslesEdit(hpercode, enccode) {
	Measleswizard();
	initcheck();
	CivilStatus();
	uppercase();
	SelReligion();
	City();
	// AgeComputation();
	getMeaslesData(enccode, hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#search").attr("disabled", true);
}

function MeaslesPatientInfo(hpercode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "Measles/MeaslesPatientInformation/" + hpercode,
		data: "JSON",
		async: false,
		success: function (data) {
			obj = $.parseJSON(data);
		},
		error: function (data) {
			toastr.error('Error:' + ' ' + data.status + ' ' + data.statusText);
		}
	});
	return obj;
}

function getPatientData(enccode) {
	$.ajax({
		url: baseURL + "Measles/getPatientData/" + enccode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
			$('#getRegion').val(obj['regname']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getCity').val(obj['cc_city']);
			$('#getProv').val(obj['cc_prov']);
			$('#street_no').val(obj['patstr']);
			$('#info_zip').val(obj['patzip']);
			$('#encountercode').val(obj['enccode']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			var gender = sex(obj['patsex']);
			$("#info_sex").val(obj['patsex']);

			var bplace = obj['patbplace'];
			$('#info_year').val(obj['age']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);

			$('#info_mot_fullname').val(obj['mothername']);
			$('#info_mot_lname').val(obj['motlast']);
			$('#info_mot_fname').val(obj['motfirst']);
			$('#info_mot_mname').val(obj['motmid']);

			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['Cellphone']);
			$('#info_emailadd').val(obj['pat_email']);
			$('#info_age').val(obj['age']);

			var asc = obj['date_seen'];
			var ascs = (asc == "1970-01-01 00:00:00"||asc == null) ? "" : setTimeLocale(asc);
			$("#date_asc").val(ascs);

			var dob = obj['patbdate'];
			var dobs = (dob == "1970-01-01 00:00:00"||dob == null) ? "" : setTimeLocale(dob);
			$("#info_dob").val(dobs);

			var disdate = obj['dischargedate'];
			var disdates = (disdate == "1970-01-01 00:00:00"||disdate == null) ? "" : setTimeLocale(disdate);
			$("#date_died").val(disdates);

			$('#info_bplace').val(obj['patbplace']);
			$('#info_disp').val(obj['disposition']);
			$('#Religion').val(obj['relcode']);
			$("#info_nat option[value='" + obj['natcode'] + "']").attr("selected", "selected");
			$('#info_cs').val(obj['patcstat']);

			var date = new Date(obj['patbdate']);
			var dob = (zeroFill((date.getMonth() + 1)) + '-' + zeroFill((date.getDate())) + '-' + date.getFullYear());
			// var ages = AgeComputation(dob);

			$('#info_occup').val(obj['Occupation']);

			$('#final_diag').val(obj['diagtext']);
			$('#patadmit').val(obj['admission']);

			var str = obj['hpercode'];
			console.log(str);
			var res = str.slice(12, 15);
			$('#dia_patient_id').val(res);
			$('#info_philhealth').val(obj['phicnum']);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function getMeaslesData(enccode, hpercode) {
	var enctr = encodeURIComponent(encodeURIComponent(hpercode));
	var enccoded = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "Measles/getMeaslesData/" + enccoded + "/" + enctr,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
			var ipcode = obj['member_of_IP'];
			setIndigenous(ipcode);
			SelIndig();
			$('#getRegion').val(obj['regname']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getCity').val(obj['cc_city']);
			$('#getProv').val(obj['cc_prov']);
			$('#street_no').val(obj['patstr']);
			$('#info_zip').val(obj['patzip']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#encountercode').val(obj['enccode']);
			$('#toecode').val(obj['toecode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#info_age').val(obj['age']);

			$('#Religion').val(obj['relcode']);
			var gender = sex(obj['patsex']);
			$("#info_sex").val(obj['patsex']);
			$('#info_cs').val(obj['patcstat']);
			$("#info_race option[value='" + obj['race_code'] + "']").attr("selected", "selected");
			$("#info_ethnic option[value='" + obj['ethnic_code'] + "']").attr("selected", "selected");
			$("#info_occup option[value='" + obj['occup_code'] + "']").attr("selected", "selected");
			$("#info_educat option[value='" + obj['educ_attain_code'] + "']").attr("selected", "selected");
			$("#dia_type option[value='" + obj['dia_type_code'] + "']").attr("selected", "selected");
			$("#dia_reasonrefer option[value='" + obj['refreason_code'] + "']").attr("selected", "selected");
			$("#dia_patstat option[value='" + obj['patient_status_code'] + "']").attr("selected", "selected");
			$("#info_typepat option[value='" + obj['typeofpatient'] + "']").attr("selected", "selected");
			$("#swab_virus_isolation_result option[value='" + obj['oro_naso_swab_virus_iso_result'] + "']").attr("selected", "selected");

			$('#info_bplace').val(obj['patbplace']);
			$('#info_disp').val(obj['disposition']);
			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['Cellphone']);
			$('#patadmit').val(obj['admitted']);
			$('#final_diag').val(obj['diagtext']);

			var asc = obj['dateseen'];
			var ascs = (asc == "1970-01-01 00:00:00"||asc == null) ? "" : setTimeLocale(asc);
			$("#date_asc").val(ascs);

			var dob = obj['patbdate'];
			var dobs = (dob == "1970-01-01 00:00:00"||dob == null) ? "" : setTimeLocale(dob);
			$("#info_dob").val(dobs);

			var disdate = obj['dischargedate'];
			var disdates = (disdate == "1970-01-01 00:00:00"||disdate == null) ? "" : setTimeLocale(disdate);
			$("#date_died").val(disdates);

			var bplace = obj['patbplace'];
			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);
			$('#info_philhealth').val(obj['philhealth']);

			$('#week_preg').val(obj['weekpreg']);
			$('#parent_caregiver').val(obj['name_parent_caregiver']);
			$('#parent_caregiver_nos').val(obj['parent_caregiver_nos']);
			$('#name_report').val(obj['name_reporter']);
			$('#reporter_nos').val(obj['reporter_nos']);
			$('#name_investigator').val(obj['name_investigator']);
			$('#investigator_nos').val(obj['investigator_nos']);
			$('#specify_compilation').val(obj['complications_specify']);
			$('#specify_others').val(obj['swollen_lymphatic_specify_others']);
			$('#final_diagnosis').val(obj['workingdiag']);
			$('#other_symptoms').val(obj['other_symptoms']);
			$('#mv').val(obj['MCV_MV']);
			$('#mr').val(obj['MCV_MR']);
			$('#mmr').val(obj['MCV_MMR']);
			$('#vaccine_others_specify').val(obj['vaccine_val_oth']);
			$('#others_mcv').val(obj['reason_other_specify']);
			$('#specify_place').val(obj['place_travel']);
			$('#rubella_name_contact').val(obj['rubella_prior_rash_name']);
			$('#rubella_place_residence').val(obj['rubella_prior_rash_place']);
			$('#others_exposure').val(obj['exposure_others_specify']);
			$('#serum_measles_igm_result').val(obj['serum_measles_igm_result']);
			$('#serum_rubella_igm_result').val(obj['serum_rubella_igm_result']);
			$('#dried_blood_measles_igm_result').val(obj['dried_blood_spot_measles_igm_result']);
			$('#dried_blood_rubella_igm_result').val(obj['dried_blood_spot_rubella_igm_result']);
			$('#swab_PCR_result').val(obj['oro_naso_swab_pcr_result']);
			$('#selIndig').val(obj['member_of_IP']);

			var di = obj['date_investigation'];
			var dis = (di == "1970-01-01 00:00:00"||di == null) ? "" : setTimeLocale(di);
			$("#date_investigation").val(dis);

			var rep = obj['date_report'];
			var reps = (rep == "1970-01-01 00:00:00"||rep == null) ? "" : setTimeLocale(rep);
			$("#date_report").val(reps);

			var dof = obj['fever_dateonset'];
			var dofs = (dof == "1970-01-01 00:00:00"||dof == null) ? "" : setTimeLocale(dof);
			$("#date_onset_fever").val(dofs);

			var dor = obj['rash_dateonset'];
			var dors = (dor == "1970-01-01 00:00:00"||dor == null) ? "" : setTimeLocale(dor);
			$("#date_onset_rash").val(dors);

			var date_mcv_last = obj['date_last_MCV'];
			var date_mcv_lasts = (date_mcv_last == "1970-01-01 00:00:00"||date_mcv_last == null) ? "" : setTimeLocale(date_mcv_last);
			$("#date_received_mcv").val(date_mcv_lasts);

			var dt = obj['date_travel'];
			var dts = (dt == "1970-01-01 00:00:00"||dt == null) ? "" : setTimeLocale(dt);
			$("#timing").val(dts);

			var rdc = obj['rubella_prior_rash_date'];
			var rdcs = (rdc == "1970-01-01 00:00:00"||rdc == null) ? "" : setTimeLocale(rdc);
			$("#rubella_date_contact").val(rdcs);

			var sdc = obj['serum_date_collected'];
			var sdcs = (sdc == "1970-01-01 00:00:00"||sdc == null) ? "" : setTimeLocale(sdc);
			$("#serum_date_collected").val(sdcs);

			var sdsritm = obj['serum_date_sent_RITM'];
			var sdsritms = (sdsritm == "1970-01-01 00:00:00"||sdsritm == null) ? "" : setTimeLocale(sdsritm);
			$("#serum_datesent_RITM").val(sdsritms);

			var sdrritm = obj['serum_date_received_RITM'];
			var sdrritms = (sdrritm == "1970-01-01 00:00:00"||sdrritm == null) ? "" : setTimeLocale(sdrritm);
			$("#serum_datereceived_RITM").val(sdrritms);

			var dbsdc = obj['dried_blood_spot_date_collected'];
			var dbsdcs = (dbsdc == "1970-01-01 00:00:00"||dbsdc == null) ? "" : setTimeLocale(dbsdc);
			$("#driedblood_date_collected").val(dbsdcs);

			var dbsdsritm = obj['dried_blood_spot_date_sent_RITM'];
			var dbsdsritms = (dbsdsritm == "1970-01-01 00:00:00"||dbsdsritm == null) ? "" : setTimeLocale(dbsdsritm);
			$("#driedblood_datesent_RITM").val(dbsdsritms);

			var dbsdrritm = obj['dried_blood_spot_date_received_RITM'];
			var dbsdrritms = (dbsdrritm == "1970-01-01 00:00:00"||dbsdrritm == null) ? "" : setTimeLocale(dbsdrritm);
			$("#driedblood_datereceived_RITM").val(dbsdrritms);

			var oroswabc = obj['oro_naso_swab_date_collected'];
			var oroswabcs = (oroswabc == "1970-01-01 00:00:00"||oroswabc == null) ? "" : setTimeLocale(oroswabc);
			$("#swab_date_collected").val(oroswabcs);

			var oroswabsritm = obj['oro_naso_swab_date_sent_RITM'];
			var oroswabsritms = (oroswabsritm == "1970-01-01 00:00:00"||oroswabsritm == null) ? "" : setTimeLocale(oroswabsritm);
			$("#swab_datesent_RITM").val(oroswabsritms);

			var oroswabrritm = obj['oro_naso_swab_date_received_RITM'];
			var oroswabrritms = (oroswabrritm == "1970-01-01 00:00:00"||oroswabrritm == null) ? "" : setTimeLocale(oroswabsritm);
			$("#swab_datereceived_RITM").val(oroswabrritms);

			if (obj['pregstat'] == 'Y') {
				$("#preg_yes").prop('checked', true);
				$("#week_preg").removeAttr("readonly");
			} else if (obj['pregstat'] == 'N') {
				$("#preg_no").prop('checked', true);
				$("#week_preg").attr("readonly", true);
			} else if (obj['pregstat'] == 'U') {
				$("#preg_unknown").prop('checked', true);
				$("#week_preg").attr("readonly", true);
			} else {
				$("#preg").val("");
			}

			if (obj['fever'] == 'Y') {
				$("#fever_yes").prop('checked', true);
				$("#date_onset_fever").removeAttr("readonly");
			} else if (obj['fever'] == 'N') {
				$("#fever_no").prop('checked', true);
				$("#date_onset_fever").attr("readonly", true);
			} else {
				$("#fever").val("");
			}

			if (obj['rash'] == 'Y') {
				$("#rash_yes").prop('checked', true);
				$("#date_onset_rash").removeAttr("readonly");
			} else if (obj['rash'] == 'N') {
				$("#rash_no").prop('checked', true);
				$("#date_onset_rash").attr("readonly", true);
			} else {
				$("#rash").val("");
			}

			if (obj['cough'] == 'Y') {
				$("#cough_yes").prop('checked', true);
			} else if (obj['cough'] == 'N') {
				$("#cough_no").prop('checked', true);
			} else {
				$("#cough").val("");
			}

			if (obj['koplik'] == 'Y') {
				$("#koplik_yes").prop('checked', true);
			} else if (obj['koplik'] == 'N') {
				$("#koplik_no").prop('checked', true);
			} else {
				$("#koplik").val("");
			}

			if (obj['runny_nose'] == 'Y') {
				$("#runny_nose_yes").prop('checked', true);
			} else if (obj['runny_nose'] == 'N') {
				$("#runny_nose_no").prop('checked', true);
			} else {
				$("#runny_nose").val("");
			}

			if (obj['red_eyes'] == 'Y') {
				$("#red_eyes_yes").prop('checked', true);
			} else if (obj['red_eyes'] == 'N') {
				$("#red_eyes_no").prop('checked', true);
			} else {
				$("#red_eyes").val("");
			}

			if (obj['arthralgia'] == 'Y') {
				$("#arthralgia_yes").prop('checked', true);
			} else if (obj['arthralgia'] == 'N') {
				$("#arthralgia_no").prop('checked', true);
			} else {
				$("#arthralgia").val("");
			}

			if (obj['complications'] == 'Y') {
				$("#complication_yes").prop('checked', true);
				$("#specify_compilation").removeAttr("readonly");
			} else if (obj['complications'] == 'N') {
				$("#complication_no").prop('checked', true);
			} else {
				$("#arthralgia").val("");
			}

			if (obj['swollen_lymphatic'] == 'Y') {
				$("#lymphatic_yes").prop('checked', true);
				$("#cervical_yes").removeAttr("readonly");
				$("#post_auricular_yes").removeAttr("readonly");
				$("#sub_occipital_yes").removeAttr("readonly");
				$("#others_specify").removeAttr("readonly");
			} else if (obj['swollen_lymphatic'] == 'N') {
				$("#lymphatic_no").prop('checked', true);
			} else {
				$("#lymphatic").val("");
			}

			if (obj['swollen_lymphatic_specify'] == 'CER') {
				$("#cervical_yes").prop('checked', true);
			} else if (obj['swollen_lymphatic_specify'] == 'POST-AUR') {
				$("#post_auricular_yes").prop('checked', true);
			} else if (obj['swollen_lymphatic_specify'] == 'SUB-OCCI') {
				$("#sub_occipital_yes").prop('checked', true);
			} else if (obj['swollen_lymphatic_specify'] == 'OTHERS') {
				$("#others_specify").prop('checked', true);
				$("#specify_others").removeAttr("readonly");
			} else {
				$("#specify_lympathic").val("");
			}

			if (obj['received_MCV'] == 'Y') {
				$("#mcv_yes").prop('checked', true);
				$("#mv").removeAttr("readonly");
				$("#mr").removeAttr("readonly");
				$("#mmr").removeAttr("readonly");
				$("#date_received_mcv").removeAttr("readonly");
				$("#vaccine_vaccination").removeAttr("readonly");
				$("#vaccine_logsheet").removeAttr("readonly");
				$("#vaccine_byrecall").removeAttr("readonly");
				$("#vaccine_others").removeAttr("readonly");
				$("#special_campaigns_yes").removeAttr("readonly");
				$("#special_campaigns_no").removeAttr("readonly");
			} else if (obj['received_MCV'] == 'N') {
				$("#mcv_no").prop('checked', true);
				$("#mother_busy").removeAttr("readonly");
				$("#child_sick").removeAttr("readonly");
				$("#forget_schedule").removeAttr("readonly");
				$("#against_belief").removeAttr("readonly");
				$("#novaccine_available").removeAttr("readonly");
				$("#med_contraindication").removeAttr("readonly");
				$("#novaccinator_available").removeAttr("readonly");
				$("#side_effects").removeAttr("readonly");
				$("#not_eligible").removeAttr("readonly");
				$("#others_mcv").removeAttr("readonly");
			} else {
				$("#mcv").val("");
			}

			if (obj['vaccine_validated_through'] == 'VCARD') {
				$("#vaccine_others_specify").attr("readonly", true);
				$("#vaccine_vaccination").prop('checked', true);
			}
			else if (obj['vaccine_validated_through'] == 'LOGSHEET') {
				$("#vaccine_others_specify").attr("readonly", true);
				$("#vaccine_logsheet").prop('checked', true);
			} else if (obj['vaccine_validated_through'] == 'RECALL') {
				$("#vaccine_others_specify").attr("readonly", true);
				$("#vaccine_byrecall").prop('checked', true);
			} else if (obj['vaccine_validated_through'] == 'OTHERS') {
				$("#vaccine_others_specify").removeAttr("readonly");
				$("#vaccine_others").prop('checked', true);
			} else {
				$("#measles_vaccine").val("");
			}

			if (obj['vacci_special_campaign'] == 'Y') {
				$("#special_campaigns_yes").prop('checked', true);
				$("#special_campaigns_yes").val("Y");
			} else if (obj['vacci_special_campaign'] == 'N') {
				$("#special_campaigns_no").prop('checked', true);
				$("#special_campaigns_no").val("N");
			} else {
				$("#special_campaigns").val("");
			}

			if (obj['mother_busy'] == 'Y') {
				$("#mother_busy").prop('checked', true);
			}

			if (obj['against_belief'] == 'Y') {
				$("#against_belief").prop('checked', true);
			}

			if (obj['medical_contraindication'] == 'Y') {
				$("#med_contraindication").prop('checked', true);
			}

			if (obj['fear_effects'] == 'Y') {
				$("#side_effects").prop('checked', true);
			}

			if (obj['child_sick'] == 'Y') {
				$("#child_sick").prop('checked', true);
			}

			if (obj['no_available'] == 'Y') {
				$("#novaccine_available").prop('checked', true);
			}

			if (obj['vaccinator_available'] == 'Y') {
				$("#novaccinator_available").prop('checked', true);
			}

			if (obj['not_eligible'] == 'Y') {
				$("#not_eligible").prop('checked', true);
			}

			if (obj['forgot_schedule'] == 'Y') {
				$("#forget_schedule").prop('checked', true);
			}

			if (obj['vitamin_A'] == 'Y') {
				$("#vit_duringill_yes").prop('checked', true);
			} else if (obj['vitamin_A'] == 'N') {
				$("#vit_duringill_no").prop('checked', true);
			} else {
				$("#vit_duringill").val();
			}

			if (obj['history_travel'] == 'Y') {
				$("#specify_place").removeAttr("readonly");
				$("#history_travel_yes").prop('checked', true);
				$("#timing").removeAttr("readonly");
				$("#rash_onset_seven").removeAttr("readonly");
				$("#rash_onset_uptotwentythree").removeAttr("readonly");
			} else if (obj['history_travel'] == 'N') {
				$("#history_travel_no").prop('checked', true);
			} else {
				$("#history_travel").val("");
			}

			if (obj['less7_days_onset'] == '1') {
				$("#rash_onset_seven").prop('checked', true);
			} else {
				$("#rash_onset_seven").prop('checked', false);
			}

			if (obj['date_onset7to23days'] == '1') {
				$("#rash_onset_uptotwentythree").prop('checked', true);
			} else {
				$("#rash_onset_uptotwentythree").prop('checked', false);
			}

			if (obj['measles_prior_rash'] == 'Y') {
				$("#measles_case_yes").prop('checked', true);
				$("#measles_case_yes").val("Y");
			} else if (obj['measles_prior_rash'] == 'N') {
				$("#measles_case_no").prop('checked', true);
				$("#measles_case_no").val("N");
			} else if (obj['measles_prior_rash'] == 'U') {
				$("#measles_case_unknown").prop('checked', true);
				$("#measles_case_unknown").val("U");
			}

			if (obj['rubella_prior_rash'] == 'Y') {
				$("#rubella_case_yes").prop('checked', true);
				$("#rubella_name_contact").removeAttr("readonly");
				$("#rubella_place_residence").removeAttr("readonly");
				$("#rubella_date_contact").removeAttr("readonly");
				$("#rubella_case_yes").val("Y");
			} else if (obj['rubella_prior_rash'] == 'N') {
				$("#rubella_case_no").prop('checked', true);
				$("#rubella_case_no").val("N");
			}
			else if (obj['rubella_prior_rash'] == 'U') {
				$("#rubella_case_unknown").prop('checked', true);
				$("#rubella_case_unknown").val("U");
			}

			if (obj['day_care'] == 'Y') {
				$("#daycare").prop('checked', true);
			}

			if (obj['barangay'] == 'Y') {
				$("#barangay").prop('checked', true);
			}

			if (obj['home'] == 'Y') {
				$("#home").prop('checked', true);
			}

			if (obj['school'] == 'Y') {
				$("#school").prop('checked', true);
			}

			if (obj['health_facility'] == 'Y') {
				$("#health_care_facility").prop('checked', true);
			}

			if (obj['dormitory'] == 'Y') {
				$("#dormitory").prop('checked', true);
			}

			if (obj['fever_rash_community'] == 'Y') {
				$("#fever_and_rash_yes").prop('checked', true);
			} else if (obj['fever_rash_community'] == 'N') {
				$("#fever_and_rash_no").prop('checked', true);
			} else if (obj['fever_rash_community'] == 'U') {
				$("#fever_and_rash_unknown").prop('checked', true);
			}

			if (obj['serum'] == 'Y') {
				$("#serum").prop('checked', true);
				$("#serum_date_collected").removeAttr("readonly");
				$("#serum_datesent_RITM").removeAttr("readonly");
				$("#serum_datereceived_RITM").removeAttr("readonly");
				$("#serum_measles_igm_result").removeAttr("readonly");
				$("#serum_rubella_igm_result").removeAttr("readonly");
			}

			if (obj['dried_blood_spot'] == 'Y') {
				$("#dried_blood").prop('checked', true);
				$("#driedblood_date_collected").removeAttr("readonly");
				$("#driedblood_datesent_RITM").removeAttr("readonly");
				$("#driedblood_datereceived_RITM").removeAttr("readonly");
				$("#dried_blood_measles_igm_result").removeAttr("readonly");
				$("#dried_blood_rubella_igm_result").removeAttr("readonly");
			}

			if (obj['oro_naso_swab'] == 'Y') {
				$("#swab").prop('checked', true);
				$("#swab_date_collected").removeAttr("readonly");
				$("#swab_datesent_RITM").removeAttr("readonly");
				$("#swab_datereceived_RITM").removeAttr("readonly");
				$("#swab_virus_isolation_result").removeAttr("readonly");
				$("#swab_PCR_result").removeAttr("readonly");
			}

			if (obj['final_classification'] == 'LCM') {
				$("#lab_confirm_measles").prop('checked', true);
			} else if (obj['final_classification'] == 'EPI-MEASLES') {
				$("#epilinked_confirm_measles").prop('checked', true);
			} else if (obj['final_classification'] == 'MEASLES') {
				$("#measles_compatible").prop('checked', true);
			} else if (obj['final_classification'] == 'LCR') {
				$("#lab_confirm_rubella").prop('checked', true);
			} else if (obj['final_classification'] == 'EPI-RUBELLA') {
				$("#epilinked_confirm_rubella").prop('checked', true);
			} else if (obj['final_classification'] == 'DISCARDED') {
				$("#discarded_measles_rubella").prop('checked', true);
			} else {
				$("#final_classification").val("");
			}

			if (obj['source_infection'] == 'END') {
				$("#source_infection_endemic").prop('checked', true);
			} else if (obj['source_infection'] == 'IMP') {
				$("#source_infection_imported").prop('checked', true);
			} else if (obj['source_infection'] == 'IMP-REL') {
				$("#source_infection_imprel").prop('checked', true);
			} else if (obj['source_infection'] == 'UNKNOWN') {
				$("#source_infection_unknown").prop('checked', true);
			} else {
				$("#source_infection").val("");
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Measleswizard() {
	var formType = $("#formIden").val();
	_initWizard();
	_eventWizard(formType);
	_validateWizard();
};

function _initWizard() {

	var btnFinish = $('<button type="button"  disabled name ="btnDone" id="btnDone"></button>')
		.text('Done')
		.addClass('btn btn-info btn-ladda')
		.on('click', function () {

			if ($('#form-step-6').valid()) {
				var data = new FormData($('#form-step-1')[0]);

				var step2 = $('#form-step-2').serializeArray();
				step2.forEach((item) => {
					data.append(item.name, item.value)
				});

				var step3 = $('#form-step-3').serializeArray();
				step3.forEach((item) => {
					data.append(item.name, item.value)
				});

				var step4 = $('#form-step-4').serializeArray();
				step4.forEach((item) => {
					data.append(item.name, item.value)
				});

				var step5 = $('#form-step-5').serializeArray();
				step5.forEach((item) => {
					data.append(item.name, item.value)
				});

				var step6 = $('#form-step-6').serializeArray();
				step6.forEach((item) => {
					data.append(item.name, item.value)
				});

				// console.log(data);
				$.ajax({
					type: "POST",
					url: baseURL + "Measles/saveMeasles",
					data: data,
					processData: false,
					contentType: false,
					success: function (data, response) {
						window.location.replace(baseURL + "Measles");
						toastr.success('Successfully Save! ', 'Success');
					},
					error: function (xhr, desc, err) {
						toastr.error(xhr, 'Error');
					}
				});
			} else {
				return false
			}
		});

	var btnCancel = $('<button></button>').text('Reset')
		.addClass('btn btn-danger btn-ladda')
		.on('click', function () {
			$('#smartwizard')
				.smartWizard("reset");
		});

	$('#smartwizard').smartWizard({
		selected: 0,
		theme: 'circles',
		transitionEffect: 'fade',
		showStepURLhash: false,
		transitionSpeed: '1500',
		toolbarSettings:
		{
			toolbarPosition: 'top',
			toolbarExtraButtons: [btnFinish, btnCancel]
		}
	});
}

function _eventWizard(type) {
	$("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
		if (stepPosition === 'first') {
			$('#btnDone').prop('disabled', true);
			$("#prev-btn").addClass('disabled');
			$("#prev-btn").addClass('disabled');
		}
		else if (stepPosition === 'final') {
			$("#next-btn").addClass('disabled');
			$('#btnDone').prop('disabled', false);
		}
		else {
			$("#prev-btn").removeClass('disabled');
			$("#next-btn").removeClass('disabled');
			$('#btnDone').prop('disabled', true);
		}
	});
}

function _validateWizard() {
	$("#smartwizard").on("leaveStep", function (e, anchorObject, stepNumber, stepDirection) {
		switch (stepNumber) {
			case 0:
				if ($('#form-step-1').valid()) {
					return true;
				} else {
					return false;
				}
				break;
			case 1:
				if ($('#form-step-2').valid()) {
					return true;
				} else {
					return false;
				}
				break;
			case 2:
				if ($('#form-step-3').valid()) {
					return true;
				} else {
					return false;
				}
				break;
			case 3:
				if ($('#form-step-4').valid()) {
					return true;
				} else {
					return false;
				}
				break;
			case 4:
				if ($('#form-step-5').valid()) {
					return true;
				} else {
					return false;
				}
				break;
		}
	});
}

$('#search').click(function () {
	$("#PatSearch").modal('show');
	window.location.reload();
});

// function AgeComputation(bdate) {
// 	$.ajax({
// 		type: "POST",
// 		url: baseURL + "Patient/AgeComp/" + bdate,
// 		data: "json",
// 		success: function (data, status) {
// 			var obj = $.parseJSON(data);
// 			$("#info_year").val(obj['year']);
// 			$("#info_month").val(obj['month']);
// 			$("#info_day").val(obj['day']);
// 		},
// 		error: function (data, status) {
// 			return status;
// 		}
// 	});
// }
