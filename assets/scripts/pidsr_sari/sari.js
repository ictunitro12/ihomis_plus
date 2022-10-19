var Module = $('#module').val();

function initSari(enccode, hpercode) {
	CivilStatus();
	uppercase();
	City();
	AgeComputation();
	getPatientData(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
}

function initSariEdit(hpercode, enccode) {
	initcheck();
	CivilStatus();
	uppercase();
	City();
	AgeComputation();
	getSariData(enccode, hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
}

function SariPatientInfo(hpercode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "PIDSR_SARI/SariPatientInformation/" + hpercode,
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

	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "PIDSR_SARI/getPatientData/" + enctr,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			$('#getStr').val(obj['patstr']);
			$('#getReg').val(obj['regname']);
			$('#getCity').val(obj['cc_city']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getProv').val(obj['cc_prov']);
			$('#getZip').val(obj['patzip']);
			$('#admission').val(obj['admission']);
			$('#encountercode').val(obj['enccode']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#code').val(obj['enccode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			var gender = sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex'] + "']").attr("selected", "selected");

			var bplace = obj['patbplace'];
			$("#info_typepat option[value='" + obj['typeofpatient'] + "']").attr("selected", "selected");
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
			$("#info_dob").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['patbdate'])));
			$('#info_bplace').val(obj['patbplace']);
			$('#getRel').val(obj['relcode']);
			$("#info_nat option[value='" + obj['natcode'] + "']").attr("selected", "selected");
			$("#info_cs option[value='" + obj['patcstat'] + "']").attr("selected", "selected");

			var date = new Date(obj['patbdate']);
			var dob = (zeroFill((date.getMonth() + 1)) + '-' + zeroFill((date.getDate())) + '-' + date.getFullYear());
			var ages = AgeComputation(dob);

			$('#info_occup').val(obj['Occupation']);

			$('#dia_newfhud').val(obj['newfhudcode']);
			$('#final_diag').val(obj['diagtext']);

			var str = obj['hpercode'];
			var res = str.slice(12, 15);
			$('#dia_patient_id').val(res);
			$('#info_philhealth').val(obj['phicnum']);

			var date_consult = obj['date_seen'];
			var date_consults = ((date_consult == "1970-01-01 00:00:00") || (date_consult == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_consult);
			$("#date_consult").val(date_consults);
			$('#date_report').val(date_consults);
			var discdatess = obj['dischargedate'];
			$('#discdate').val(((discdatess == '1970-01-01 00:00:00') || (discdatess == null)) ? '1970-01-01 00:00:00' : setTimeLocale(discdatess));
			// outcome at discharged----------------------------------------->
			if (obj['outcome'] == 'A') {
				$('#outcome_at_disc_alive').prop('checked', true);
				$('#outcome_at_disc_alive').val("A");
			}
			if (obj['outcome'] == 'N') {
				$('#outcome_at_disc_hama').prop('checked', true);
				$('#outcome_at_disc_hama').val("N");
			}
			else if (obj['outcome'] == 'D') {
				$('#outcome_at_disc_died').prop('checked', true);
				$('#outcome_at_disc_died').val("D");
			}

		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function getSariData(enccode, hpercode) {

	var enctr = encodeURIComponent(encodeURIComponent(hpercode));
	var enccoded = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "PIDSR_SARI/getSariData/" + enctr + "/" + enccoded,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			var relCode = obj['relcode'];
			setReligion(relCode);
			$('#getStr').val(obj['patstr']);
			$('#getReg').val(obj['regname']);
			$('#getCity').val(obj['cc_city']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getProv').val(obj['cc_prov']);
			$('#getZip').val(obj['patzip']);
			$('#info_rephealthfac').val(obj['hhosname']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#encountercode').val(obj['enccode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#admission').val(obj['admission']);
			var gender = sex(obj['sex']);
			$('#selRel').val(obj['religion_code']);
			$("#info_sex option[value='" + obj['patsex'] + "']").attr("selected", "selected");
			$("#info_cs option[value='" + obj['patcstat'] + "']").attr("selected", "selected");
			$("#info_race option[value='" + obj['race_code'] + "']").attr("selected", "selected");
			$("#info_ethnic option[value='" + obj['ethnic_code'] + "']").attr("selected", "selected");
			$("#info_occup option[value='" + obj['occup_code'] + "']").attr("selected", "selected");
			$("#info_educat option[value='" + obj['educ_attain_code'] + "']").attr("selected", "selected");
			$("#dia_type option[value='" + obj['dia_type_code'] + "']").attr("selected", "selected");
			$("#dia_reasonrefer option[value='" + obj['refreason_code'] + "']").attr("selected", "selected");
			$("#dia_patstat option[value='" + obj['patient_status_code'] + "']").attr("selected", "selected");


			$("#info_typepat option[value='" + obj['typeofpatient'] + "']").attr("selected", "selected");
			$('#info_bplace').val(obj['patbplace']);
			$('#info_mot_fullname').val(obj['mothername']);
			$('#info_mot_lname').val(obj['motlast']);
			$('#info_mot_fname').val(obj['motfirst']);
			$('#info_mot_mname').val(obj['motmid']);
			$('#info_telno').val(obj['telno1']);
			$('#info_mobno').val(obj['telno2']);
			$('#info_emailadd').val(obj['telno3']);

			$("#info_nat option[value='" + obj['countrycode'] + "']").attr("selected", "selected");
			$("#info_dob").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['patbdate'])));

			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);
			$('#info_company').val(obj['company']);
			$('#info_philhealth').val(obj['philhealth']);
			$('#info_comrefno').val(obj['cr']);


			$('#info_street').val(obj['patstr']);
			$('#info_temp_street').val(obj['pat_str2']);
			$('#contact_street').val(obj['cp_add1']);

			$('#info_zip').val(obj['patzip']);
			$('#info_temp_zip').val(obj['zipcode2']);
			$('#contact_zip').val(obj['zipcode3']);

			$('#dia_causeofdeath').val(obj['underlying_cause']);
			$("#dia_datedeath").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['date_of_death'])));


			$('#dia_placedeath').val(obj['place_death']);
			$('#dia_nameoffac').val(obj['hfhudcode_to']);


			$('#contact_fullname').val(obj['contactperson']);
			$('#contact_lname').val(obj['cp_last1']);
			$('#contact_fname').val(obj['cp_first1']);
			$('#contact_mname').val(obj['cp_middle1']);
			$('#contact_landline').val(obj['cp_landmob1']);
			$('#contact_mobile').val(obj['cp_mobile1']);
			$('#contact_email').val(obj['cp_email1']);
			$('#contact_street').val(obj['cp_add1']);
			$('#contact_selReg').val(obj['regcode3']);
			$('#contact_selProv').val(obj['provcode3']);
			$('#contact_selCity').val(obj['citycode3']);
			$('#contact_selBrgy').val(obj['bgycode3']);
			$('#contact_zip').val(obj['zipcode3']);
			var date_consult = obj['date_seen'];
			var date_consults = ((date_consult == "1970-01-01 00:00:00") || (date_consult == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_consult);
			$("#date_consult").val(date_consults);
			var date_report = obj['date_report'];
			$('#date_report').val(((date_report == "1970-01-01 00:00:00") || (date_report == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_report));

			var date_onset_illness = obj['date_onset'];
			$('#date_onset_illness').val(((date_onset_illness == '1970-01-01 00:00:00') || (date_onset_illness == null)) ? '1970-01-01 00:00:00' : setTimeLocale(date_onset_illness));
			var discdate = obj['dischargedate'];
			$('#discdate').val(((discdate == '1970-01-01 00:00:00') || (discdate == null)) ? '1970-01-01 00:00:00' : setTimeLocale(discdate));
			var dia_dateconsult = obj['consult_date'];
			$('#dia_dateconsult').val(((dia_dateconsult == '1970-01-01 00:00:00') || (dia_dateconsult == null)) ? '1970-01-01 00:00:00' : setTimeLocale(dia_dateconsult));
			$('#final_diag').val(obj['findiagtext']);
			$('#sari_others2').val(obj['sari_others2']);
			//-----------Type of RDU------------------------------------------------------------------------------------------------------------>
			/* $("#typeofdru option[value='" + obj['typeofdru']+"']").attr("selected","selected");
			$('#typeofdru_other').val(obj['typeofdru_other']); */
			//-----------Did you take any of the following medication(s) prior to consultation---------------------------------------------------->
			if (obj['ranitidine'] == 'Y') {
				$('#ranitidine').prop('checked', true);
				$('#ranitidine').val('Y');
			}
			else {
				$('#ranitidine').prop('checked', false);
				$('#ranitidine').val('N');
			}
			if (obj['amantidine'] == 'Y') {
				$('#amantidine').prop('checked', true);
				$('#amantidine').val('Y');
			}
			else {
				$('#amantidine').prop('checked', false);
				$('#amantidine').val('N');
			}
			if (obj['zanamivir'] == 'Y') {
				$('#zanamivir').prop('checked', true);
				$('#zanamivir').val('Y');
			}
			else {
				$('#zanamivir').prop('checked', false);
				$('#zanamivir').val('N');
			}
			if (obj['oseltamivir'] == 'Y') {
				$('#oseltamivir').prop('checked', true);
				$('#oseltamivir').val('Y');
			}
			else {
				$('#oseltamivir').prop('checked', false);
				$('#oseltamivir').val('N');
			}
			if (obj['medication_prior_oth'] == 'Y') {
				$('#medication_prior_oth').prop('checked', true);
				$('#medication_prior_oth').val('Y');
				$('#med_other_specify').removeAttr('disabled');
			}
			else {
				$('#medication_prior_oth').prop('checked', false);
				$('#medication_prior_oth').val('N');
				$('#med_other_specify').attr('disabled', true);
				$('#med_other_specify').val("");
			}
			$('#med_other_specify').val(obj['med_other_specify']);
			//--------Are there any Influenza-like-illness during the week in your:-------------------------->
			if (obj['sari_household'] == 'Y') {
				$('#sari_householdy').prop('checked', true);
				$('#sari_householdy').val("Y");
			}
			else if (obj['sari_household'] == 'N') {
				$('#sari_householdn').prop('checked', true);
				$('#sari_householdn').val("N");
			}
			else if (obj['sari_household'] == 'U') {
				$('#sari_householdu').prop('checked', true);
				$('#sari_householdu').val("U");
			}
			if (obj['sari_school'] == 'Y') {
				$('#sari_schooly').prop('checked', true);
				$('#sari_schooly').val("Y");
			}
			else if (obj['sari_school'] == 'N') {
				$('#sari_schooln').prop('checked', true);
				$('#sari_schooln').val("N");
			}
			else if (obj['sari_school'] == 'U') {
				$('#sari_schoolu').prop('checked', true);
				$('#sari_schoolu').val("U");
			}
			//-----------History of travel:------------------------------------------------------------->
			if (obj['sari_histtravel'] == 'Y') {
				$('#sari_histtravely').prop('checked', true);
				$('#sari_histtravely').val('Y');
				$('#sari_country').removeAttr('disabled');
			}
			else if (obj['sari_histtravel'] == 'N') {
				$('#sari_histtraveln').prop('checked', true);
				$('#sari_histtraveln').val('N');
			}
			else {
				$('#sari_histtravely').prop('checked', false);
				$('#sari_histtraveln').prop('checked', false);
			}
			$('#sari_country').val(obj['sari_country']);
			//----------Did you received Anti-influenza Vaccination in the past year?------------------------->
			if (obj['sari_ainfluenza'] == 'Y') {
				$('#sari_ainfluenzay').prop('checked', true);
				$('#sari_ainfluenzay').val("Y");
			}
			else if (obj['sari_ainfluenza'] == 'N') {
				$('#sari_ainfluenzan').prop('checked', true);
				$('#sari_ainfluenzan').val("N");
			}
			else if (obj['sari_ainfluenza'] == 'U') {
				$('#sari_ainfluenzau').prop('checked', true);
				$('#sari_ainfluenzau').val("U");
			}
			//-----------------------Chest X-ray-------------------------------------------------------------------->
			if (obj['chestxray'] == 'Y') {
				$('#chestxrayy').prop('checked', true);
				$('#chestxrayy').val('Y');
				$('#chestxray_result').removeAttr('disabled');
			}
			else if (obj['chestxray'] == 'N') {
				$('#chestxrayn').prop('checked', true);
				$('#chestxrayn').val('N');
			}
			else {
				$('#chestxrayn').prop('checked', false);
				$('#chestxrayy').prop('checked', false);
			}
			$('#chestxray_result').val(obj['chestxray_result']);
			//-----------Signs and Symptoms:----------------------------------->
			if (obj['sari_fever'] == 'Y') {
				$('#fever_feverish').prop('checked', true);
				$('#fever_feverish').val('Y');
			}
			else {
				$('#fever_feverish').prop('checked', false);
				$('#fever_feverish').val('N');
			}
			$('#duration').val(obj['duration']);

			if (obj['sari_headache'] == 'Y') {
				$('#headache').val('Y');
				$('#headache').prop('checked', true);

			}
			else {
				$('#headache').val('N');
				$('#headache').prop('checked', false);

			}
			if (obj['sari_cough'] == 'Y') {
				$('#cough').val("Y");
				$('#cough').prop('checked', true);
			}
			else {
				$('#cough').val("N");
				$('#cough').prop('checked', false);
			}
			if (obj['sari_sore'] == 'Y') {
				$('#sore_throat').prop('checked', true);
				$('#sore_throat').val("Y");
			}
			else {
				$('#sore_throat').prop('checked', false);
				$('#sore_throat').val("N");
			}
			if (obj['sari_breathing'] == 'Y') {
				$('#Diff_of_breathing').val('Y');
				$('#Diff_of_breathing').prop('checked', true);
			}
			else {
				$('#Diff_of_breathing').val('N');
				$('#Diff_of_breathing').prop('checked', false);
			}
			if (obj['sari_hospadm1'] == 'Y') {
				$('#other_signs_symptoms').val("Y");
				$('#other_signs_symptoms').prop('checked', true);
				$('#other_signs_symptoms_txt').removeAttr('disabled');
			}
			else {
				$('#other_signs_symptoms').val("N");
				$('#other_signs_symptoms').prop('checked', false);
				$('#other_signs_symptoms_txt').attr('disabled', true);
			}
			$('#other_signs_symptoms_txt').val(obj['sari_others1']);
			//------------- IMCI Criteria for pneumonia:------------------------------->
			if (obj['imci_pneumonia1'] == 'Y') {
				$('#imci_pneumonia1').val('Y');
				$('#imci_pneumonia1').prop('checked', true);
			}
			else {
				$('#imci_pneumonia1').val('N');
				$('#imci_pneumonia1').prop('checked', false);
			}
			if (obj['imci_pneumonia2'] == 'Y') {
				$('#imci_pneumonia2').val("Y");
				$('#imci_pneumonia2').prop('checked', true);
			}
			else {
				$('#imci_pneumonia2').val("N");
				$('#imci_pneumonia2').prop('checked', false);
			}
			if (obj['imci_pneumonia3'] == 'Y') {
				$('#imci_pneumonia3').val("Y");
				$('#imci_pneumonia3').prop('checked', true);
			}
			else {
				$('#imci_pneumonia3').val("N");
				$('#imci_pneumonia3').prop('checked', false);
			}
			if (obj['imci_pneumonia4'] == 'Y') {
				$('#imci_pneumonia4').val("Y");
				$('#imci_pneumonia4').prop('checked', true);
			}
			else {
				$('#imci_pneumonia4').val("N");
				$('#imci_pneumonia4').prop('checked', false);
			}
			if (obj['sari_hospadm2'] == 'Y') {
				$('#sari_hospadm2').val("Y");
				$('#sari_hospadm2').prop('checked', true);
			}
			else {
				$('#sari_hospadm2').val("N");
				$('#sari_hospadm2').prop('checked', false);
			}
			//------------- IMCI criteria for severe pneumonia------------------------------->
			if (obj['imci_spneumonia1'] == 'Y') {
				$('#imci_spneumonia1').val('Y');
				$('#imci_spneumonia1').prop('checked', true);
			}
			else {
				$('#imci_spneumonia1').val('N');
				$('#imci_spneumonia1').prop('checked', false);
			}
			if (obj['imci_spneumonia2'] == 'Y') {
				$('#imci_spneumonia2').val("Y");
				$('#imci_spneumonia2').prop('checked', true);
			}
			else {
				$('#imci_spneumonia2').val("N");
				$('#imci_spneumonia2').prop('checked', false);
			}
			if (obj['imci_spneumonia3'] == 'Y') {
				$('#imci_spneumonia3').val("Y");
				$('#imci_spneumonia3').prop('checked', true);
			}
			else {
				$('#imci_spneumonia3').val("N");
				$('#imci_spneumonia3').prop('checked', false);
			}
			if (obj['imci_spneumonia4'] == 'Y') {
				$('#imci_spneumonia4').val("Y");
				$('#imci_spneumonia4').prop('checked', true);
			}
			else {
				$('#imci_spneumonia4').val("N");
				$('#imci_spneumonia4').prop('checked', false);
			}
			if (obj['imci_spneumonia5'] == 'Y') {
				$('#imci_spneumonia5').val("Y");
				$('#imci_spneumonia5').prop('checked', true);
			}
			else {
				$('#imci_spneumonia5').val("N");
				$('#imci_spneumonia5').prop('checked', false);
			}
			if (obj['imci_spneumonia6'] == 'Y') {
				$('#imci_spneumonia6').val("Y");
				$('#imci_spneumonia6').prop('checked', true);
			}
			else {
				$('#imci_spneumonia6').val("N");
				$('#imci_spneumonia6').prop('checked', false);
			}
			if (obj['sari_hospadm3'] == 'Y') {
				$('#sari_hospadm3').val("Y");
				$('#sari_hospadm3').prop('checked', true);
			}
			else {
				$('#sari_hospadm3').val("N");
				$('#sari_hospadm3').prop('checked', false);
			}
			//-----------------------Pre-existing Conditions-------------------------------------------------------------->
			if (obj['asthma'] == 'Y') {
				$('#asthma').val("Y");
				$('#asthma').prop('checked', true);
			}
			else {
				$('#asthma').val("N");
				$('#asthma').prop('checked', false);
			}
			if (obj['chronic_cardiacdis'] == 'Y') {
				$('#chronic_cardiacdis').val("Y");
				$('#chronic_cardiacdis').prop('checked', true);
			}
			else {
				$('#chronic_cardiacdis').val("N");
				$('#chronic_cardiacdis').prop('checked', false);
			}
			if (obj['chronic_liverdis'] == 'Y') {
				$('#chronic_liverdis').val("Y");
				$('#chronic_liverdis').prop('checked', true);
			}
			else {
				$('#chronic_liverdis').val("N");
				$('#chronic_liverdis').prop('checked', false);
			}
			if (obj['chronic_neuro'] == 'Y') {
				$('#chronic_neuro').val("Y");
				$('#chronic_neuro').prop('checked', true);
			}
			else {
				$('#chronic_neuro').val("N");
				$('#chronic_neuro').prop('checked', false);
			}
			if (obj['chronic_renaldis'] == 'Y') {
				$('#chronic_renaldis').val("Y");
				$('#chronic_renaldis').prop('checked', true);
			}
			else {
				$('#chronic_renaldis').val("N");
				$('#chronic_renaldis').prop('checked', false);
			}
			if (obj['diabetes'] == 'Y') {
				$('#diabetes').val("Y");
				$('#diabetes').prop('checked', true);
			}
			else {
				$('#diabetes').val("N");
				$('#diabetes').prop('checked', false);
			}
			if (obj['Haematologic'] == 'Y') {
				$('#Haematologic').val("Y");
				$('#Haematologic').prop('checked', true);
			}
			else {
				$('#Haematologic').val("N");
				$('#Haematologic').prop('checked', false);
			}
			if (obj['immunodis'] == 'Y') {
				$('#immunodis').val("Y");
				$('#immunodis').prop('checked', true);
			}
			else {
				$('#immunodis').val("N");
				$('#immunodis').prop('checked', false);
			}
			if (obj['pregnant'] == 'Y') {
				$('#pregnant').val("Y");
				$('#pregnant').prop('checked', true);
			}
			else {
				$('#pregnant').val("N");
				$('#pregnant').prop('checked', false);
			}
			//------History of exposure to any of the following:---------------------------------->
			if (obj['sari_bats'] == 'Y') {
				$("#sari_bats").prop('checked', true);
				$("#sari_bats").val("Y");
			}
			else {
				$("#sari_bats").prop('checked', false);
				$("#sari_bats").val("N");
			}
			if (obj['sari_poultry'] == 'Y') {
				$("#sari_poultry").prop('checked', true);
				$("#sari_poultry").val("Y");
			}
			else {
				$("#sari_poultry").prop('checked', false);
				$("#sari_poultry").val("N");
			}
			if (obj['sari_camels'] == 'Y') {
				$("#sari_camels").prop('checked', true);
				$("#sari_camels").val("Y");
			}
			else {
				$("#sari_camels").prop('checked', false);
				$("#sari_camels").val("N");
			}
			if (obj['sari_pigs'] == 'Y') {
				$("#sari_pigs").prop('checked', true);
				$("#sari_pigs").val("Y");
			}
			else {
				$("#sari_pigs").prop('checked', false);
				$("#sari_pigs").val("N");
			}
			if (obj['sari_horses'] == 'Y') {
				$("#sari_horses").prop('checked', true);
				$("#sari_horses").val("Y");
			}
			else {
				$("#sari_horses").prop('checked', false);
				$("#sari_horses").val("N");
			}
			if (obj['sari_others2_cb'] == 'Y') {
				$("#sari_others2_cb").prop('checked', true);
				$("#sari_others2").removeAttr("disabled");
				$("#sari_others2_cb").val("Y");
			}
			else {
				$("#sari_others2_cb").prop('checked', false);
				$("#sari_others2_cb").val("N");
				$("#sari_others2").attr("disabled", true);
			}
			//------------------CLINICAL MANAGEMENT AND OUTCOME----------------------------->
			//ANTIBIOTICS-------------------------------------------------->
			if (obj['antibiotics'] == 'Y') {
				$('#antibioticsy').prop('checked', true);
				$('#antibioticsy').val("Y");
				$('#antibiotics_specify').removeAttr('disabled');
			}
			else if (obj['antibiotics'] == 'N') {
				$('#antibioticsn').prop('checked', true);
				$('#antibioticsn').val("N");
			}
			else if (obj['antibiotics'] == 'U') {
				$('#antibioticsu').prop('checked', true);
				('#antibioticsu').val("U");
			}
			$('#antibiotics_specify').val(obj['antibiotics_specify']);
			//-------------------ANTIVIRALS---------------------------------------------------->
			if (obj['antivirals'] == 'Y') {
				$('#antiviralsy').prop('checked', true);
				$('#antiviralsy').val("Y");
				$('#antivirals_specify').removeAttr('disabled');
			}
			else if (obj['antivirals'] == 'N') {
				$('#antiviralsn').prop('checked', true);
				$('#antiviralsn').val("N");
			}
			else if (obj['antivirals'] == 'U') {
				$('#antiviralsu').prop('checked', true);
				$('#antiviralsu').val("U");
			}
			$('#antivirals_specify').val(obj['antivirals_specify']);
			//FLUID THERAPHY------------------------------------------------->
			if (obj['fluidtheraphy'] == 'Y') {
				$('#fluidtheraphyy').prop('checked', true);
				$('#fluidtheraphyy').val("Y");
				$('#fluidtheraphy_specify').removeAttr('disabled');
			}
			if (obj['fluidtheraphy'] == 'N') {
				$('#fluidtheraphyn').prop('checked', true);
				$('#fluidtheraphyn').val("N");
			}
			else if (obj['fluidtheraphy'] == 'U') {
				$('#fluidtheraphyu').prop('checked', true);
				$('#fluidtheraphyu').val("U");
			}
			$('#fluidtheraphy_specify').val(obj['fluidtheraphy_specify']);
			//------------------OXYGEN---------------------------------------------------------->
			if (obj['oxygen'] == 'Y') {
				$('#oxygeny').prop('checked', true);
				$('#oxygeny').val("Y");
				$('#oxygen_specify').removeAttr('disabled');
			}
			if (obj['oxygen'] == 'N') {
				$('#oxygenn').prop('checked', true);
				$('#oxygenn').val("N");
			}
			else if (obj['oxygen'] == 'U') {
				$('#oxygenu').prop('checked', true);
				$('#oxygenu').val("U");
			}
			$('#oxygen_specify').val(obj['oxygen_specify']);
			//-------------------INTUBATION------------------------------------------------------->
			if (obj['intubation'] == 'Y') {
				$('#intubationy').prop('checked', true);
				$('#intubationy').val("Y");
				$('#intubation_specify').removeAttr('disabled');
			}
			else if (obj['intubation'] == 'N') {
				$('#intubationn').prop('checked', true);
				$('#intubationn').val("N");
			}
			else if (obj['intubation'] == 'U') {
				$('#intubationu').prop('checked', true);
				$('#intubationu').val("U");
			}
			$('#intubation_specify').val(obj['intubation_specify']);
			// BACTERIAL TESTING----------------------------------------------->
			if (obj['bacterialtesting'] == 'Y') {
				$('#bacterialtestingy').prop('checked', true);
				$('#bacterialtestingy').val("Y");
				$('#bacterialtesting_specify').removeAttr('disabled');
			}
			else if (obj['bacterialtesting'] == 'N') {
				$('#bacterialtestingn').prop('checked', true);
				$('#bacterialtestingn').val("N");
			}
			else if (obj['bacterialtesting'] == 'U') {
				$('#bacterialtestingu').prop('checked', true);
				$('#bacterialtestingu').val("U");
			}
			$('#bacterialtesting_specify').val(obj['bacterialtesting_specify']);
			// OTHER THERAPEUTIC PROCEDURES----------------------------------------->
			if (obj['othertherapeuticprocedures'] == 'Y') {
				$('#othertherapeuticproceduresy').prop('checked', true);
				$('#othertherapeuticproceduresy').val("Y");
				$('#othertherapeuticprocedures_specify').removeAttr('disabled');
			}
			if (obj['othertherapeuticprocedures'] == 'N') {
				$('#othertherapeuticproceduresn').prop('checked', true);
				$('#othertherapeuticproceduresn').val("N");
			}
			else if (obj['othertherapeuticprocedures'] == 'U') {
				$('#othertherapeuticproceduresu').prop('checked', true);
				$('#othertherapeuticproceduresu').val("U");
			}
			$('#othertherapeuticprocedures_specify').val(obj['othertherapeuticprocedures_specify']);
			// outcome at discharged----------------------------------------->
			if (obj['outcome'] == 'A') {
				$('#outcome_at_disc_alive').prop('checked', true);
				$('#outcome_at_disc_alive').val("A");
			}
			if (obj['outcome'] == 'N') {
				$('#outcome_at_disc_hama').prop('checked', true);
				$('#outcome_at_disc_hama').val("N");
			}
			else if (obj['outcome'] == 'D') {
				$('#outcome_at_disc_died').prop('checked', true);
				$('#outcome_at_disc_died').val("D");
			}

		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}
function AgeComputation(bdate) {
	$.ajax({
		type: "POST",
		url: baseURL + "Patient/AgeComp/" + bdate,
		data: "json",
		success: function (data, status) {
			var obj = $.parseJSON(data);
			$("#info_year").val(obj['year']);
			$("#info_month").val(obj['month']);
			$("#info_day").val(obj['day']);
		},
		error: function (data, status) {
			return status;
		}
	});
}

