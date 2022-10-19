////////////////////////////Nicette Ocampo updated -  09/27/2022////////////////////////////

var Module = $('#module').val();

function checkChronic(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../Chronic/checkChronic/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
			}
			else {
				initChronic(enccode, hpercode);
			}
		},
		error: function (data) {
			alert('Please Try Again!');
		}
	});
}

function initChronic(enccode, hpercode) {
	Chronicwizard();
	_validateWizard();
	initcheck();
	uppercase();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	SelDepartment();
	getPatientData(enccode, hpercode);			
	PatientAddress(btoa(hpercode));
	PatientAddress2(btoa(hpercode));
	CityConsult();
	CityComplete();
	$('#enccode').val(enccode);
	$('#formIden').val('insert');

}


function initChronicEdit(enccode, hpercode) {	
	var code = encodeURIComponent(encodeURIComponent(enccode));
	Chronicwizard();
	initcheck();
	uppercase();
	_validateWizard();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	CityConsult();
	CityComplete();
	getPatientData(code,hpercode);			
	PatientAddress(btoa(hpercode));
	PatientAddress2(btoa(hpercode));
	getChronicData(enccode);
	ChronicAddress(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);
}



function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "Chronic/getPatientData/" + enccode + "/" + hpercode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			setReligion(obj['relcode']);

			$('#code').val(obj['enccode']);

			$('#encountercode').val(obj['enccode']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$("#info_typepat option[value='" + obj['typeofpatient'] + "']").attr("selected", "selected");
			$('#info_hospcaseno').val(obj['casenum']);

			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_patname').val(obj['patientname']);
			
			$("#info_cs option[value='" + obj['patcstat'] + "']").attr("selected", "selected");
			$("#info_sex option[value='" + obj['patsex'] + "']").attr("selected", "selected");
			
			var dob = obj['patbdate'];
			var dateofbirth = ((dob == "1970-01-01 00:00:00") || (dob == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			var ages = AgeCompute(dateofbirth);
			$('#info_dob').val(dateofbirth);	


			$('#info_bplace').val(obj['patbplace']);			
			$("#info_nat option[value='" + obj['natcode'] + "']").attr("selected", "selected");

			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['Cellphone']);
			$('#info_occup').val(obj['Occupation']);			
			$('#info_mot_fullname').val(obj['mothername']);


			$('#info_philhealth').val(obj['phicnum']);
			$('#newfhud').val(obj['newfhudcode']);

			$('#contact_name').val(obj['patemernme']);
			$('#contact_address').val(obj['patemaddr']);
			$('#contact_landline').val(obj['pattelno']);

			$('#spiromet').val(obj['diagtext']);
			setDiagnosis(obj['diagcode']);

			$('#dispos').val(obj['disposition']);
			var disposition = obj['disposition'];

			if( disposition == 'DIEDD' ) {
				$('#datedeath').removeAttr( "disabled" );
				$('#placedeath').removeAttr( "disabled" );
				$('#selFac3').removeAttr( "disabled" );
				$('#deathreason_refer').removeAttr( "disabled" );			
				$('#underly_cause').removeAttr( "disabled" );
				$('#dispos').prop('selectedIndex', [7]);

				var died = obj['pexpireddate'];
				var datedied = ((died == "1970-01-01 00:00:00") || (died == null)) ? "0000-00-00 00:00:00" : setTimeLocale(died);
				$("#datedeath").val(datedied);
				$('#placedeath').val($('#info_rephealthfac').val());				
				$('#underly_cause').val(obj['underly']);	

			} else {       
				$('#datedeath').attr( "disabled", true );
				$('#placedeath').attr( "disabled", true );
				$('#placedeath').val("");
				$('#selFac3').attr( "disabled", true );
				$('#deathreason_refer').attr( "disabled", true );
				$('#dispos').prop('selectedIndex', [0]);
				$('#datedeath').val("0000-00-00 00:00:00");				
				$('#underly_cause').attr( "disabled", true );
				$('#diagICD_diag_death').empty();				
			}

			var patient_stat = obj['patient_status'];

			if(patient_stat == 'RECOV'){
				$('#pat_status').val('RE');
			}
			else if(patient_stat == 'IMPRO'){
				$('#pat_status').val('IM');
			}
			else if(patient_stat == 'UNIMP'){
				$('#pat_status').val('UN');
			}
			else if(patient_stat == 'DIEMI' || patient_stat == 'DIENA' || patient_stat == 'DIEPO' || patient_stat == 'DPONA'){
				$('#pat_status').val('DI');
			}

			$('#dateasof').val(getTimeLocale());
			$("#complete_Date").val(getTimeLocale());


			var str = obj['hpercode'];
			var res = str.slice(12, 15);
			$('#patient_id').val(res);


			var consult = obj['consult_date'];
			var consults = ((consult == "1970-01-01 00:00:00") || (consult == null)) ? "0000-00-00 00:00:00" : setTimeLocale(consult);
			$("#dateconsult").val(consults);

			var diagnosis = obj['diagnosis_date'];
			var datediagnosis = ((diagnosis == "1970-01-01 00:00:00") || (diagnosis == null)) ? "0000-00-00 00:00:00" : setTimeLocale(diagnosis);
			$("#datediag").val(datediagnosis);

			var employee =  $("#entry").val();
			getCompletedBy(employee);
			getConsultant(obj['consultant_incharge']);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function getConsultant(licno) {
	var licno = encodeURIComponent(encodeURIComponent(licno));
	$.ajax({
		url: baseURL + "Chronic/getConsultant/" + licno,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			$("#consult_lname").val(obj['lastname']);
			$("#consult_fname").val(obj['firstname']);
			$("#consult_mname").val(obj['middlename']);
			setDepartment(obj['deptcode']);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function getCompletedBy(employeeid) {
	var employeeid = encodeURIComponent(encodeURIComponent(employeeid));
	$.ajax({
		url: baseURL + "Chronic/getCompletedBy/" + employeeid,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			$("#complete_lname").val(obj['lastname']);
			$("#complete_fname").val(obj['firstname']);
			$("#complete_mname").val(obj['middlename']);
			$("#complete_desig").val(obj['deptname']);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}


function ChronicAddress(hpercode)
{
	$.ajax({
		type: "POST",
		url: baseURL+"Chronic/ChronicAddress/"+hpercode,
		data: "JSON",
		async:false,
		success: function(data,status){ 

			var obj = $.parseJSON(data);

			var str = obj['cons_regcode'].substring(0,2);

			$('#info_street_consult').val(obj['cons_str']);
			$('#info_zip_consult').val(obj['cons_zipcode']);

			setRegionConsult(str);
			setRegionConsult(obj['cons_provcode']);
			$('#selProvConsult').removeAttr("disabled");
			setCityConsult(obj['cons_citycode']);
			$('#selCityConsult').removeAttr("disabled");
			setBrgyConsult(obj['cons_bgycode'])
			$('#selBrgyConsult').removeAttr("disabled");

			$('#info_street_complete').val(obj['comp_str']);
			$('#info_zip_complete').val(obj['comp_zipcode']);

			var str = obj['comp_regcode'].substring(0,2);

			setRegionComplete(str);
			setRegionComplete(obj['comp_provcode']);
			$('#selProvConsult').removeAttr("disabled");
			setCityComplete(obj['comp_citycode']);
			$('#selCityConsult').removeAttr("disabled");
			setBrgyComplete(obj['comp_bgycode'])
			$('#selBrgyConsult').removeAttr("disabled");

		},
	});
}


function getChronicData(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "Chronic/getChronicData/" + enctr,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);

			var num = '000000001';
			for (var i; i >= 0; i++) {
				num[i];
			}

			
			setFacility2(obj['hfhudcode_from']);
			setFacility3(obj['hfhudcode_to']);

			$("#info_race option[value='" + obj['race_code'] + "']").attr("selected", "selected");
			$("#info_ethnic option[value='" + obj['ethnic_code'] + "']").attr("selected", "selected");
			$('#info_race_others').val(obj['h_patient_id']);
			$('#encountercode').val(obj['enccode']);
			$('#contact_email').val(obj['cp_email1']);

			$("#info_educat option[value='" + obj['educ_attain_code'] + "']").attr("selected", "selected");
			$("#copd_type option[value='" + obj['copd_type_code'] + "']").attr("selected", "selected");
			
			$('#info_company').val(obj['company']);
			$('#info_comrefno').val(obj['cr']);
			
			var complete = obj['date_completed'];
			var datecomplete = ((complete == "1970-01-01 00:00:00") || (complete == null)) ? "0000-00-00 00:00:00" : setTimeLocale(complete);
			$("#complete_Date").val(datecomplete);


			$('#age_smoke').val(obj['age_start_smoke']);
			$('#num_smoke').val(obj['no_yrs_smoking']);
			$('#numyear_smoke').val(obj['no_yrs_shs']);
			$('#occup_others').val(obj['occup_others_spec']);
			$('#pulmon_others').val(obj['Infect_others_spec']);
			$('#pulmon_indoorpollut').val(obj['type_indoor_pollutant']);
			$('#pulmon_outdoorpollut').val(obj['type_outdoor_pollutant']);

			$('#copd_type_others').val(obj['copd_others_specify']);
			$('#copd_refer').val(obj['referred_from']);
			$('#copd_namereferfac').val(obj['hfhudcode_from']);

			$('#copd_sign_others').val(obj['sym_others_spec']);
			$('#copd_treat_others').val(obj['trt_others_spec']);

			$('#consult_dept').val(obj['department']);
			$('#consult_landline').val(obj['cons_landline']);
			$('#consult_mobile').val(obj['cons_mobile']);
			$('#consult_email').val(obj['cons_email']);

			$('#complete_email').val(obj['comp_email']);
			$('#complete_landline').val(obj['comp_landline']);
			$('#complete_mobile').val(obj['compl_mobile']);
			$('#complete_desig').val(obj['designation']);


			if (obj['copd_type_code'] == 'OTHER') {
				$("#copd_type_others").removeAttr("disabled");
			}
			else {
				$("#copd_type_others").attr("disabled", true);

			}

			if (obj['smoking'] == 'Y') {
				$("#smoke").prop('checked', true);
				$("#smoke").val("Y");
				$("input.ssmoke").removeAttr("disabled");
			}
			else {
				$("#smoke").prop('checked', false);
				$("#smoke").val("N");
			}

			if (obj['less_than1_5_pack'] == 'Y') {
				$("#less_smoke").prop('checked', true);
				$("#less_smoke").val("Y");
				$("#more_smoke").attr('disabled', true);
			}
			else {
				$("#less_smoke").prop('checked', false);
				$("#less_smoke").val("N");
				$("#more_smoke").removeAttr('disabled');

			}

			if (obj['more_1_pack'] == 'Y') {
				$("#more_smoke").prop('checked', true);
				$("#more_smoke").val("Y");
				$("#less_smoke").attr('disabled', true);

			}
			else {
				$("#more_smoke").prop('checked', false);
				$("#more_smoke").val("N");
				$("#less_smoke").removeAttr('disabled');

			}

			if (obj['second_hand_smoke'] == 'Y') {
				$("#shs_smoke").val("Y");
				$("#shs_smoke").prop('checked', true);
				$("#expshs_smoke").removeAttr("disabled");
				$("#numyear_smoke").removeAttr("disabled");
			}
			else {
				$("#shs_smoke").val("N");
				$("#shs_smoke").prop('checked', false);
			}

			if (obj['with_exposure_shs'] == 'Y') {
				$("#expshs_smoke").val("Y");
				$("#expshs_smoke").prop('checked', true);
			}
			else {
				$("#expshs_smoke").val("N");
				$("#expshs_smoke").prop('checked', false);
			}

			///////////////////////////////
			if (obj['occupational_exp'] == 'Y') {
				$("#occup_exp").val("Y");
				$("#occup_exp").prop('checked', true);
				$("input.occup").removeAttr("disabled");
			}
			else {
				$("#occup_exp").val("N");
				$("#occup_exp").prop('checked', false);
			}

			if (obj['cement_dust'] == 'Y') {
				$("#occup_cement").val("Y");
				$("#occup_cement").prop('checked', true);
			}
			else {
				$("#occup_cement").val("N");
				$("#occup_cement").prop('checked', false);
			}

			if (obj['cotton'] == 'Y') {
				$("#occup_cotton").val("Y");
				$("#occup_cotton").prop('checked', true);
			}
			else {
				$("#occup_cotton").val("N");
				$("#occup_cotton").prop('checked', false);
			}


			if (obj['grains'] == 'Y') {
				$("#occup_grains").val("Y");
				$("#occup_grains").prop('checked', true);
			}
			else {
				$("#occup_grains").val("N");
				$("#occup_grains").prop('checked', false);
			}

			if (obj['metal'] == 'Y') {
				$("#occup_metal").val("Y");
				$("#occup_metal").prop('checked', true);
			}
			else {
				$("#occup_metal").val("N");
				$("#occup_metal").prop('checked', false);
			}

			if (obj['paper_mill'] == 'Y') {
				$("#occup_paper").val("Y");
				$("#occup_paper").prop('checked', true);
			}
			else {
				$("#occup_paper").val("N");
				$("#occup_paper").prop('checked', false);
			}


			if (obj['silica'] == 'Y') {
				$("#occup_silica").val("Y");
				$("#occup_silica").prop('checked', true);
			}
			else {
				$("#occup_silica").val("N");
				$("#occup_silica").prop('checked', false);
			}

			if (obj['occup_others'] == 'Y') {
				$("#occup_oth").val("Y");
				$("#occup_oth").prop('checked', true);
				$("#occup_others").removeAttr("disabled");
			}
			else {
				$("#occup_oth").val("N");
				$("#occup_oth").prop('checked', false);
			}
			/////////
			if (obj['pulmon_infect'] == 'Y') {
				$("#pulmon_infec").val("Y");
				$("#pulmon_infec").prop('checked', true);
				$("input.pulmon").removeAttr("disabled");
			}
			else {
				$("#pulmon_infec").val("N");
				$("#pulmon_infec").prop('checked', false);
			}

			if (obj['tb'] == 'Y') {
				$("#pulmon_tb").val("Y");
				$("#pulmon_tb").prop('checked', true);
			}
			else {
				$("#pulmon_tb").val("N");
				$("#pulmon_tb").prop('checked', false);
			}

			if (obj['infect_others'] == 'Y') {
				$("#pulmon_oth").val("Y");
				$("#pulmon_oth").prop('checked', true);
				$("#pulmon_others").removeAttr("disabled");
			}
			else {
				$("#pulmon_oth").val("N");
				$("#pulmon_oth").prop('checked', false);
			}

			if (obj['indoor_airpopu'] == 'Y') {
				$("#pulmon_indoor").val("Y");
				$("#pulmon_indoor").prop('checked', true);
				$("#pulmon_indoorpollut").removeAttr("disabled");
			}
			else {
				$("#pulmon_indoor").val("N");
				$("#pulmon_indoor").prop('checked', false);
			}

			if (obj['outdoor_airpopu'] == 'Y') {
				$("#pulmon_outdoor").val("Y");
				$("#pulmon_outdoor").prop('checked', true);
				$("#pulmon_outdoorpollut").removeAttr("disabled");
			}
			else {
				$("#pulmon_outdoor").val("N");
				$("#pulmon_outdoor").prop('checked', false);
			}
			////////
			if (obj['sym_chest_t'] == 'Y') {
				$("#signs_chest").val("Y");
				$("#signs_chest").prop('checked', true);
			}
			else {
				$("#signs_chest").val("N");
				$("#signs_chest").prop('checked', false);
			}

			if (obj['sym_chronic_c'] == 'Y') {
				$("#signs_chronic").val("Y");
				$("#signs_chronic").prop('checked', true);
			}
			else {
				$("#signs_chronic").val("N");
				$("#signs_chronic").prop('checked', false);
			}

			if (obj['sym_finger_club'] == 'Y') {
				$("#signs_fingers").val("Y");
				$("#signs_fingers").prop('checked', true);
			}
			else {
				$("#signs_fingers").val("N");
				$("#signs_fingers").prop('checked', false);
			}

			if (obj['sym_cyanosis'] == 'Y') {
				$("#signs_cyanosis").val("Y");
				$("#signs_cyanosis").prop('checked', true);
			}
			else {
				$("#signs_cyanosis").val("N");
				$("#signs_cyanosis").prop('checked', false);
			}

			if (obj['sym_dyspnea'] == 'Y') {
				$("#signs_dyspnea").val("Y");
				$("#signs_dyspnea").prop('checked', true);
			}
			else {
				$("#signs_dyspnea").val("N");
				$("#signs_dyspnea").prop('checked', false);
			}

			if (obj['sym_chest_i'] == 'Y') {
				$("#signs_freqinfec").val("Y");
				$("#signs_freqinfec").prop('checked', true);
			}
			else {
				$("#signs_freqinfec").val("N");
				$("#signs_freqinfec").prop('checked', false);
			}

			if (obj['sym_hemoptysis'] == 'Y') {
				$("#signs_hemo").val("Y");
				$("#signs_hemo").prop('checked', true);
			}
			else {
				$("#signs_hemo").val("N");
				$("#signs_hemo").prop('checked', false);
			}

			if (obj['sym_wheezing'] == 'Y') {
				$("#signs_wheez").val("Y");
				$("#signs_wheez").prop('checked', true);
			}
			else {
				$("#signs_wheez").val("N");
				$("#signs_wheez").prop('checked', false);
			}

			if (obj['sym_sputum'] == 'Y') {
				$("#signs_sputum").val("Y");
				$("#signs_sputum").prop('checked', true);
			}
			else {
				$("#signs_sputum").val("N");
				$("#signs_sputum").prop('checked', false);
			}

			if (obj['sym_others'] == 'Y') {
				$("#signs_others").val("Y");
				$("#signs_others").prop('checked', true);
				$("#copd_sign_others").removeAttr("disabled");
			}
			else {
				$("#signs_others").val("N");
				$("#signs_others").prop('checked', false);
			}
			//////////////

			if (obj['trt_bronchodilator'] == 'Y') {
				$("#treat_bronc").val("Y");
				$("#treat_bronc").prop('checked', true);
			}
			else {
				$("#treat_bronc").val("N");
				$("#treat_bronc").prop('checked', false);
			}

			if (obj['trt_corticosteroids'] == 'Y') {
				$("#treat_corti").val("Y");
				$("#treat_corti").prop('checked', true);
			}
			else {
				$("#treat_corti").val("N");
				$("#treat_corti").prop('checked', false);
			}


			if (obj['trt_combination'] == 'Y') {
				$("#treat_combi").val("Y");
				$("#treat_combi").prop('checked', true);
			}
			else {
				$("#treat_combi").val("N");
				$("#treat_combi").prop('checked', false);
			}

			if (obj['trt_mucolytics'] == 'Y') {
				$("#treat_muco").val("Y");
				$("#treat_muco").prop('checked', true);
			}
			else {
				$("#treat_muco").val("N");
				$("#treat_muco").prop('checked', false);
			}

			if (obj['trt_antibiotics'] == 'Y') {
				$("#treat_antibio").val("Y");
				$("#treat_antibio").prop('checked', true);
			}
			else {
				$("#treat_antibio").val("N");
				$("#treat_antibio").prop('checked', false);
			}

			if (obj['trt_others'] == 'Y') {
				$("#treat_others").val("Y");
				$("#treat_others").prop('checked', true);
				$("#copd_treat_others").removeAttr("disabled");
			}
			else {
				$("#treat_others").val("N");
				$("#treat_others").prop('checked', false);
			}
			/////////
			if (obj['Sever_atrisk'] == 'Y') {
				$("#severe_atrisk").val("Y");
				$("#severe_atrisk").prop('checked', true);

				$("#severe_mild").attr("disabled", true);
				$("#severe_moderate").attr("disabled", true);
				$("#severe_severe").attr("disabled", true);
				$("#severe_very_severe").attr("disabled", true);
				$("#severe_unkn").attr("disabled", true);
			}
			else {
				$("#severe_atrisk").val("N");
				$("#severe_atrisk").prop('checked', false);
			}

			if (obj['Sever_mild_copd'] == 'Y') {
				$("#severe_mild").val("Y");
				$("#severe_mild").prop('checked', true);

				$("#severe_atrisk").attr("disabled", true);
				$("#severe_moderate").attr("disabled", true);
				$("#severe_severe").attr("disabled", true);
				$("#severe_very_severe").attr("disabled", true);
				$("#severe_unkn").attr("disabled", true);
			}
			else {
				$("#severe_mild").val("N");
				$("#severe_mild").prop('checked', false);
			}

			if (obj['Sever_moderate'] == 'Y') {
				$("#severe_moderate").val("Y");
				$("#severe_moderate").prop('checked', true);

				$("#severe_atrisk").attr("disabled", true);
				$("#severe_mild").attr("disabled", true);
				$("#severe_severe").attr("disabled", true);
				$("#severe_very_severe").attr("disabled", true);
				$("#severe_unkn").attr("disabled", true);
			}
			else {
				$("#severe_moderate").val("N");
				$("#severe_moderate").prop('checked', false);
			}

			if (obj['Sever_severe'] == 'Y') {
				$("#severe_severe").val("Y");
				$("#severe_severe").prop('checked', true);

				$("#severe_atrisk").attr("disabled", true);
				$("#severe_mild").attr("disabled", true);
				$("#severe_moderate").attr("disabled", true);
				$("#severe_very_severe").attr("disabled", true);
				$("#severe_unkn").attr("disabled", true);
			}
			else {
				$("#severe_severe").val("N");
				$("#severe_severe").prop('checked', false);
			}

			if (obj['Sever_very_severe'] == 'Y') {
				$("#severe_very_severe").val("Y");
				$("#severe_very_severe").prop('checked', true);

				$("#severe_atrisk").attr("disabled", true);
				$("#severe_mild").attr("disabled", true);
				$("#severe_moderate").attr("disabled", true);
				$("#severe_severe").attr("disabled", true);
				$("#severe_unkn").attr("disabled", true);
			}
			else {
				$("#severe_very_severe").val("N");
				$("#severe_very_severe").prop('checked', false);
			}

			if (obj['Sever_unknown'] == 'Y') {
				$("#severe_unkn").val("Y");
				$("#severe_unkn").prop('checked', true);

				$("#severe_atrisk").attr("disabled", true);
				$("#severe_mild").attr("disabled", true);
				$("#severe_moderate").attr("disabled", true);
				$("#severe_severe").attr("disabled", true);
				$("#severe_very_severe").attr("disabled", true);
			}
			else {
				$("#severe_unkn").val("N");
				$("#severe_unkn").prop('checked', false);
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function AgeCompute(bdate) {
	$.ajax({
		type: "POST",
		url: baseURL + "Patient/AgeComp/" + bdate,
		data: "json",
		success: function (data, status) {
			var obj = $.parseJSON(data);
			$("#info_year").val(obj['year']);
			$("#info_month").val(obj['month']);
			$("#info_day").val(obj['day']);

			var result = document.getElementById('info_year').value + " year(s), " + document.getElementById('info_month').value + " month(s), " + document.getElementById('info_day').value + " day(s), ";
			if (!isNaN(result)) {
				document.getElementById('info_age').value = result;
			}
			$("#info_age").val(result);

		},
		error: function (data, status) {
			return status;
		}
	});
}

function Chronicwizard() {
	var formType = $("#formIden").val();
	_initWizardChronic();
	_eventWizard(formType);
	_validateWizard();
};

function _initWizardChronic() {

	var btnFinish = $('<button type="button"  disabled name ="btnDone" id="btnDone"></button>')
	.text('Done')
	.addClass('btn btn-info btn-ladda')
	.on('click', function () {

		if ($('#form-step-4').valid()) {
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

			$("input.ssmoke").removeAttr("disabled");
       		$("input.secsmoke").removeAttr("disabled");
       		$("input.occup").removeAttr("disabled");
       		$("input.pulmon").removeAttr("disabled");
       		$("#selDepartment").removeAttr("disabled");

			$.ajax({
				type: "POST",
				url: baseURL + "Chronic/saveChronic",
				data: data,
				processData: false,
				contentType: false,
				success: function (data, response) {
					window.location.replace(baseURL + "Chronic");
					toastr.success('Successfully Saved! ', 'Success');
				},
				error: function (xhr, desc, err) {
					toastr.error(xhr, 'Error', 'Error!');
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
			if ($('#form-step-3').valid() && symtoms_valid() && severity_valid() && treatment_valid() == true) {
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
		}
	});
}




