var Module = $('#module').val();

function initIli(hpercode, enccode) {
	CivilStatus();
	// uppercase();
	AgeComputation();
	SelIndig();
	getPatientData(enccode);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
}

function initIliEdit(hpercode, enccode) {
	initcheck();
	CivilStatus();
	// uppercase();
	AgeComputation();
	getIliData(enccode, hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
}

function ILiPatientInfo(hpercode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "PIDSR_ILI/SariPatientInformation/" + hpercode,
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
		url: baseURL + "PIDSR_ILI/getPatientData/" + enctr,
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
			$('#selRel').val(obj['relcode']);
			$("#info_nat option[value='" + obj['natcode'] + "']").attr("selected", "selected");
			$("#info_cs option[value='" + obj['patcstat'] + "']").attr("selected", "selected");

			var ipcode = obj['ipgroup'];
			setIndigenous(ipcode);
			if (obj['ipgroup'] != null) {
				$("#member_ip option[value='Y']").attr("selected", "selected");
				$("#selIndig option[value='" + obj['ipgroup'] + "']").attr("selected", "selected");
			}

			var date = new Date(obj['patbdate']);
			var dob = (zeroFill((date.getMonth() + 1)) + '-' + zeroFill((date.getDate())) + '-' + date.getFullYear());
			var ages = AgeComputation(dob);

			$('#info_occup').val(obj['Occupation']);

			$('#dia_newfhud').val(obj['newfhudcode']);
			$('#final_diag').val(obj['diagtext']);
			if (obj['outcome'] = 'A') {
				$('#outcome').val('Alive');
			}
			else {
				$('#outcome').val('Died');

			}
			$('#toecode').val(obj['toecode']);

			var str = obj['hpercode'];
			var res = str.slice(12, 15);
			$('#dia_patient_id').val(res);
			$('#info_philhealth').val(obj['phicnum']);

			var date_consult = obj['date_seen'];
			var date_consults = ((date_consult == "1970-01-01 00:00:00") || (date_consult == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_consult);
			$("#date_consult").val(date_consults);
			$('#date_report').val(date_consults);

		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function getIliData(enccode, hpercode) {

	var enctr = encodeURIComponent(encodeURIComponent(hpercode));
	var enccoded = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "PIDSR_ILI/getIliData/" + enctr + "/" + enccoded,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			if (obj['ipgroup'] != '' || obj['ipgroup'] != null) {
				var ipcode = obj['ipgroup'];
				setIndigenous(ipcode);
			}
			$('#getStr').val(obj['patstr']);
			$('#getReg').val(obj['regname']);
			$('#getCity').val(obj['cc_city']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getProv').val(obj['cc_prov']);
			$('#getZip').val(obj['patzip']);
			$('#info_rephealthfac').val(obj['hospname']);
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

			$("#member_ip option[value='" + obj['member_of_IP'] + "']").attr("selected", "selected");
			$("#selIndig option[value='" + obj['ipgroup'] + "']").attr("selected", "selected");

			$("#info_sex option[value='" + obj['patsex'] + "']").attr("selected", "selected");
			$("#info_cs option[value='" + obj['patcstat'] + "']").attr("selected", "selected");
			$("#info_race option[value='" + obj['race_code'] + "']").attr("selected", "selected");

			$("#info_occup option[value='" + obj['occup_code'] + "']").attr("selected", "selected");
			$("#info_educat option[value='" + obj['educ_attain_code'] + "']").attr("selected", "selected");
			$("#dia_type option[value='" + obj['dia_type_code'] + "']").attr("selected", "selected");
			$("#dia_reasonrefer option[value='" + obj['refreason_code'] + "']").attr("selected", "selected");
			$("#dia_patstat option[value='" + obj['patient_status_code'] + "']").attr("selected", "selected");


			$("#info_typepat option[value='" + obj['typeofpatient'] + "']").attr("selected", "selected");
			$('#info_bplace').val(obj['patbplace']);
			$('#info_telno').val(obj['telno1']);
			$('#info_mobno').val(obj['telno2']);
			$("#info_dob").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['patbdate'])));
			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);
			$('#info_philhealth').val(obj['philhealth']);
			var date_consult = obj['date_seen'];
			var date_consults = ((date_consult == "1970-01-01 00:00:00") || (date_consult == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_consult);
			$("#date_consult").val(date_consults);
			$('#date_report').val($.datepicker.formatDate('yy-mm-dd', new Date(obj['date_report'])));
			var date_onset = obj['date_onset'];
			var date_onsetss = ((date_onset == "1970-01-01 00:00:00") || (date_onset == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_onset);
			$('#date_onset').val(date_onsetss);
			var dia_dateconsult = obj['date_onset'];
			var dia_dateconsults = ((dia_dateconsult == "1970-01-01 00:00:00") || (dia_dateconsult == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dia_dateconsult);
			$('#dia_dateconsult').val(dia_dateconsults);
			var coldte = obj['coldte'];
			var coldtes = ((coldte == "1970-01-01 00:00:00") || (coldte == null)) ? "0000-00-00 00:00:00" : setTimeLocale(coldte);
			$('#coldte').val(coldtes);
			// $('#hili_travelhistory').val(obj['travelhistory']);
			$("#hili_travelhistory option[value='" + obj['travelhistory'] + "']").attr("selected", "selected");
			if (obj['travelhistory'] == 'Y') {
				$('#hili_travelhistory_specify').val(obj['historyoftravel_specify']);
				$('#hili_travelhistory_specify').removeAttr('disabled');
				$('#hili_travelhistory').val('Y');
			}
			else if (obj['travelhistory'] == 'N') {
				$('#hili_travelhistory_specify').val('');
				$('#hili_travelhistory_specify').attr('disabled', true);
				$('#hili_travelhistory').val('N');
			}
			$("#typeofdru option[value='" + obj['typeofdru'] + "']").attr("selected", "selected");
			$('#typeofdru_other').val(obj['typeofdru_other']);
			if (obj['outcome'] = 'A') {
				$('#outcome').val('Alive');
			}
			else {
				$('#outcome').val('Died');

			}
			$("#case_classification option[value='" + obj['case_classification'] + "']").attr("selected", "selected");
			$("#labortest_done option[value='" + obj['labor_test'] + "']").attr("selected", "selected");
			$("#labresult option[value='" + obj['labor_result'] + "']").attr("selected", "selected");

			if (obj['ili_ainfluenza'] == 'Y') {
				$('#ili_ainfluenza').prop('checked', true);
				$('#date_vaccination').removeAttr('disabled');
				$("#ili_ainfluenza").val("Y");
				var date_vaccination = obj['date_vaccination'];
			var date_vaccinations = ((date_vaccination == "1970-01-01 00:00:00") || (date_vaccination == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_vaccination);
				$('#date_vaccination').val(date_vaccinations);
			}
			else {
				$("#ili_ainfluenza").val("N");
				$('#date_vaccination').attr('disabled', true);
				$('#date_vaccination').val("");
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

