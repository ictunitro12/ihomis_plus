var Module = $('#module').val();


function PatientLogList() {
	var data = new Object();
	data.id = "VawcTable";
	data.link = baseURL + "Vawc/VawcList";
	data.type = "POST";
	data.coldef = [
		{
			targets: [0, 1],
			visible: false,
			searchable: true,
		}
	];

	loadTable(data);
}

$("#VawcTable").on("click", ".ModalDeleteVawc", function () {
	var data = $(this).data();
	console.log(data);
	var enccode = atob(data['enccode']);
	$('#DeleteVawc').modal('show');
	$("#formIdentification").val('delete');
	$("#deletecode").val(enccode);

});

$("#VawcTable").on("click", ".ModalVawc", function () {
	var base_url = $('#base_url').val();
	var data = $(this).data();
	console.log(data);
	$('#ModalVawc').modal('show');
	var enccode = atob(data['enccode']);

	enccode = encodeURIComponent(encodeURIComponent(enccode));
	$("#code").val(enccode);
	/*	window.open(base_url+"VAWC/VawcForm/"+enccode);*/
	$('#VawcPDF').html('<embed src="' + base_url + "VAWC/VawcForm/" + enccode + '" frameborder="2" width="100%" height="800px" id="StrokePDF">');

});

$('#VawcTable').on('click', '.ModalPatientInfo', function () {

	$('#ModalPatientInfo').modal('show');
	var percode = $(this).data('hosp_pat_no');
	var hpercode = atob(percode);
	var obj = VawcPatientInfo(hpercode);
	console.log(obj);
	$("#patname").text(obj['patfirst'].concat(" ", obj['patmiddle'], " ", obj['patlast']));
	$("#patsex").text((obj['patsex']));
	$("#patbdate").text(obj['patbdate']);;
	$("#civilstat").text(obj['civil_stat']);
	$("#consultdte").text(obj['trt_date']);

});

function VawcPatientInfo(hpercode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "VAWC/VawcPatientInformation/" + hpercode,
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

function checkVawc(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../VAWC/checkVawc/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
			}
			else {
				initVawc(enccode, hpercode);
			}
		},
		error: function (data) {
			alert('Please Try Again!');
		}
	});
}

function checkPatient(hpercode) {

	hpercode = encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: baseURL + "VAWC/checkPatient/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 0) {
				$('select[name=info_typeofpat]').val('n');

			}
			if (data > 0) {

				$('select[name=info_typeofpat]').val('r');
			}
			else {
				$('select[name=info_typeofpat]').val('');

			}
		},
		error: function (data) {
			alert('Please Try Again!');
		}
	});
}


function initVawc(enccode, hpercode) {
	Vawcwizard();
	checkPatient(hpercode);
	SelReligion();
	SelReligionPerp();
	initcheck();
	uppercase();
	SelFireworks();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	getPatientData(enccode, hpercode);
	Patient_Address(hpercode);
	CityTemp();
	CityContact();
	CityConsult();
	CityComplete();
	CityInj();
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
	$('#daterep').val(getTimeLocale());

}

function initVawcEdit(hpercode, enccode) {
	Vawcwizard();
	SelFireworks();
	SelReligion();
	SelReligionPerp();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	initcheck();
	CityTemp();
	CityContact();
	CityConsult();
	CityComplete();
	CityInj();
	Patient_Address(hpercode);
	getvawcData(enccode, hpercode);
	VawcAddress(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$('#daterep').val(getTimeLocale());
}

function getvawcData(enccode, hpercode) {

	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		url: baseURL + "vawc/getvawcData/" + enccode + "/" + hpercode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);

			$('#encountercode').val(obj['enccode']);
			$('#copd_patient_id').val(obj['pno']);
			$('#copd_newfhud').val(obj['hfhudcode']);
			$('#info_rephealthfac').val(obj['hospname']);

			$('#consult_lname').val(obj['per_last']);
			$('#consult_fname').val(obj['per_first']);
			$('#consult_mname').val(obj['per_middle']);
			$('#perp_sex').val(obj['per_sex']);
			$('#perp_age').val(obj['per_patage']);

			$("#perp_cs option[value='" + obj['per_civil'] + "']").attr("selected", "selected");
			$("#perp_nat option[value='" + obj['per_countrycode'] + "']").attr("selected", "selected");
			$("#perp_teltoviv option[value='" + obj['per_relation'] + "']").attr("selected", "selected");
			$("#perp_occup option[value='" + obj['per_occu'] + "']").attr("selected", "selected");

			setReligionPerp(obj['per_religion']);

			$('#perp_teltoviv_sp').val(obj['per_relation_others_sp']);
			$('#perp_occup_sp').val(obj['per_occu_sp']);
			$('#perp_marks').val(obj['per_marks']);

			$('#info_guard_lname_perp').val(obj['child_perplast']);
			$('#info_guard_fname_perp').val(obj['child_perp']);
			$('#info_guard_mname_perp').val(obj['child_perpmiddle']);

			$("#info_relToPat_perp option[value='" + obj['rel_of_guardian'] + "']").attr("selected", "selected");
			$('#guard_landline_perp').val(obj['landline']);
			$('#guard_mobileperp').val(obj['mobile']);
			$('#per_child_address').val(obj['child_perpaddress']);

			//////////////////////////////////////////////////////////////////////

			$('#info_natregno').val(obj['vawc_reg_no']);
			$('#info_hosregno').val(obj['hosp_reg_no']);
			$('#info_hosppat_idno').val(obj['hosp_pat_no']);
			$('#info_hospcaseno').val(obj['case_no']);
			$("#info_typepat option[value='" + obj['type1'] + "']").attr("selected", "selected");
			$("#info_typeofpat option[value='" + obj['type_pat'] + "']").attr("selected", "selected");

			$('#info_physician').val(obj['case_no']);
			var admission = setTimeLocale(obj['encounter_date']);
			$('#dateadmin').val(admission);

			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);

			var gender = obj['gender_identity'];
			console.log(gender);

			$("#info_sex option[value='" + obj['sex'] + "']").attr("selected", "selected");
			$("#info_gender option[value='" + obj['gender_identity'] + "']").attr("selected", "selected");
			$("#info_cs option[value='" + obj['civil_stat'] + "']").attr("selected", "selected");
			$("#info_cs_separated option[value='" + obj['civil_statdetail'] + "']").attr("selected", "selected");
			$("#info_educat option[value='" + obj['educ'] + "']").attr("selected", "selected");

			$("#info_religion option[value='" + obj['religion_code'] + "']").attr("selected", "selected");

			setReligion(obj['religion_code_sp']);

			$("#info_disability option[value='" + obj['wth_disab'] + "']").attr("selected", "selected");
			$('#info_disability_sp').val(obj['disable_sp']);

			$("#info_informant option[value='" + obj['informant'] + "']").attr("selected", "selected");
			$('#info_informant_sp').val(obj['informant_sp']);


			$('#info_mot_fullname').val(obj['mothername']);
			$('#info_mot_lname').val(obj['motlast']);
			$('#info_mot_fname').val(obj['motfirst']);
			$('#info_mot_mname').val(obj['motmiddle']);
			$('#info_telno').val(obj['land_num']);
			$('#info_mobno').val(obj['mob_num']);

			var dob = setTimeLocale(obj['birthdate']);
			console.log(dob);
			var ages = AgeComputation(dob);
			$('#info_dob').val(dob);
			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);

			var dob = setTimeLocale(obj['birthdate']);
			$("#info_dob").val(dob);

			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);
			$("#info_nat option[value='" + obj['countrycode'] + "']").attr("selected", "selected");
			$('#info_philhealth').val(obj['philhealth_ref']);

			$('#info_guard_lname').val(obj['contlast']);
			$('#info_guard_fname').val(obj['contfirst']);
			$('#info_guard_mname').val(obj['contmiddle']);
			$('#guard_landline').val(obj['cland_num']);
			$('#guard_mobile').val(obj['cmob_num']);
			$('#info_mobno').val(obj['mob_num']);

			$("#info_relToPat option[value='" + obj['cont_relationship'] + "']").attr("selected", "selected");

			$('#case_incident').val(obj['case_no']);
			$("#referral option[value='" + obj['ext_refer'] + "']").attr("selected", "selected");
			$('#case_incidenthosp').val(obj['ext_refer_sp']);
			$('#case_incident_oth').val(obj['ext_refer_sp2']);

			var intake = setTimeLocale(obj['date_intake']);
			$('#date_interv').val(intake);
			$('#inter_last').val(obj['intake_last']);
			$('#inter_first').val(obj['intake_first']);
			$('#inter_mid').val(obj['intake_middle']);
			$('#inter_desig').val(obj['intake_position']);

			if (obj['wth_disab'] == 'Y') {
				$('#info_disability_sp').removeAttr("disabled");

			}
			else {
				$('#info_disability_sp').attr("disabled", true);
			}

			if (obj['ra9262'] == 'Y') {
				$("#ra_vawc").prop('checked', true);
				$("#ra_vawc").val("Y");
				$("input.ra_vaw").removeAttr("disabled");
			}
			else {
				$("#ra_vawc").prop('checked', false);
				$("#ra_vawc").val("N");
				$("input.ra_vaw").attr("disabled", true);

			}

			if (obj['cb_sex'] == 'Y') {
				$("#ra_sex").prop('checked', true);
				$("#ra_sex").val("Y");
			}
			else {
				$("#ra_sex").prop('checked', false);
				$("#ra_sex").val("N");
			}


			if (obj['cb_psy'] == 'Y') {
				$("#ra_psy").prop('checked', true);
				$("#ra_psy").val("Y");
			}
			else {
				$("#ra_psy").prop('checked', false);
				$("#ra_psy").val("N");
			}

			if (obj['cb_phy'] == 'Y') {
				$("#ra_phy").prop('checked', true);
				$("#ra_phy").val("Y");
			}
			else {
				$("#ra_phy").prop('checked', false);
				$("#ra_phy").val("N");
			}
			if (obj['cb_eco'] == 'Y') {
				$("#ra_eco").prop('checked', true);
				$("#ra_eco").val("Y");
			}
			else {
				$("#ra_eco").prop('checked', false);
				$("#ra_eco").val("N");
			}

			if (obj['cb_others'] == 'Y') {
				$("#ra_oth").prop('checked', true);
				$("#ra_oth").val("Y");
				$("#ra_oth_sp").removeAttr("disabled");
			}
			else {
				$("#ra_oth").prop('checked', false);
				$("#ra_oth").val("N");
				$("#ra_oth_sp").val("");
				$("#ra_oth_sp").attr("disabled", true);

			}

			$('#ra_oth_sp').val(obj['ra_9262_spcfy']);

			if (obj['ra8353'] == 'Y') {
				$("#ra_rape").prop('checked', true);
				$("#ra_rape").val("Y");
			}
			else {
				$("#ra_rape").prop('checked', false);
				$("#ra_rape").val("N");
			}

			if (obj['ra7877'] == 'Y') {
				$("#ra_sexual").prop('checked', true);
				$("#ra_sexual").val("Y");
			}
			else {
				$("#ra_sexual").prop('checked', false);
				$("#ra_sexual").val("N");
			}

			if (obj['ra10627'] == 'Y') {
				$("#ra_bully").prop('checked', true);
				$("#ra_bully").val("Y");
			}
			else {
				$("#ra_bully").prop('checked', false);
				$("#ra_bully").val("N");
			}

			if (obj['ra7610'] == 'Y') {
				$("#ra_special").prop('checked', true);
				$("#ra_special").val("Y");
			}
			else {
				$("#ra_special").prop('checked', false);
				$("#ra_special").val("N");
			}

			$('#complete_lname').val(obj['comp_lastname']);



			$('#ra_descript').val(obj['ra_desc']);

			var incidentdte = setTimeLocale(obj['inc_date']);
			var consultdte = setTimeLocale(obj['trt_date']);

			$('#dateincident').val(incidentdte);
			$('#dateconsult').val(consultdte);

			$("#place_incident option[value='" + obj['plc_inc'] + "']").attr("selected", "selected");
			$('#place_incident_sp').val(obj['plc_inc_sp']);
			$('#name_incident').val(obj['plc_inc_loc']);

			///////////////////////////////////////////////////
			$("#multinj option[value='" + obj['mult_inj'] + "']").attr("selected", "selected");
			$("#multi_frac_sel option[value='" + obj['inj_fracture_sp'] + "']").attr("selected", "selected");
			$("#ext_burn1 option[value='" + obj['ext_burn'] + "']").attr("selected", "selected");
			$("#ext_drown1 option[value='" + obj['ext_drown'] + "']").attr("selected", "selected");
			$("#ext_fall1 option[value='" + obj['ext_fall_prep'] + "']").attr("selected", "selected");

			$('#multi_1').val(obj['inj_abrasion_sp']);
			$('#multi_2').val(obj['inj_avulsion_sp']);
			$('#multi_site').val(obj['noi_burndtl']);
			$('#multi_4').val(obj['inj_concussion_sp']);
			$('#multi_5').val(obj['inj_contusion_sp']);
			$('#multi_frac_sp').val(obj['inj_fracture_sp2']);
			$('#multi_8').val(obj['inj_wound_sp']);
			$('#multi_9').val(obj['inj_trauma_sp']);
			$('#multi_10').val(obj['inj_others_sp']);

			$('#ext_1').val(obj['ext_bite_sp']);
			$('#ext_2').val(obj['ext_gun_sp']);
			$('#ext_3').val(obj['ext_burn_sp']);
			$('#ext_4').val(obj['ext_chem_sp']);
			$('#ext_5').val(obj['ext_sharp_sp']);
			$('#ext_6').val(obj['ext_drown_sp']);
			$('#ext_8').val(obj['ext_falldtl']);
			$('#ext_9').val(obj['ext_firecracker_sp']);
			$('#ext_10').val(obj['ext_other_sp']);


			if (obj['mult_inj'] == 'Y') {
				$("input.multi").removeAttr("disabled");
			}
			else {
				$("input.multi").attr("disabled", true);

			}


			if (obj['inj_abrasion'] == 'Y') {
				$("#multi_abra").prop('checked', true);
				$("#multi_abra").val("Y");
				$("#multi_1").removeAttr("disabled");
				$("#multi_abra").removeAttr("disabled");
			}
			else {
				$("#multi_abra").prop('checked', false);
				$("#multi_abra").val("N");
			}

			if (obj['inj_avulsion'] == 'Y') {
				$("#multi_avul").prop('checked', true);
				$("#multi_avul").val("Y");
				$("#multi_2").removeAttr("disabled");
				$("#multi_avul").removeAttr("disabled");
			}
			else {
				$("#multi_avul").prop('checked', false);
				$("#multi_avul").val("N");
			}

			if (obj['noi_burn_r'] == 'Y') {
				$("#multi_burn").prop('checked', true);
				$("#multi_burn").val("Y");
				$("#multi_site").removeAttr("disabled");
				$("#multi_burn").removeAttr("disabled");

			}
			else {
				$("#multi_burn").prop('checked', false);
				$("input.multiburn").prop('checked', false);
				$("#multi_burn").val("N");
				$("#multi_site").val("");
				$("input.multiburn").attr("disabled", true);
			}


			if (obj['noi_burn1'] == 'Y') {
				$("#multi_burn1").prop('checked', true);
				$("#multi_burn1").val("Y");
				$("#multi_burn1").removeAttr("disabled");
				$("#multi_burn2").attr("disabled", true);
				$("#multi_burn3").attr("disabled", true);
				$("#multi_burn4").attr("disabled", true);

			}
			else {
				$("#multi_burn2").removeAttr("disabled");
				$("#multi_burn3").removeAttr("disabled");
				$("#multi_burn4").removeAttr("disabled");
			}

			if (obj['noi_burn2'] == 'Y') {
				$("#multi_burn2").prop('checked', true);
				$("#multi_burn2").val("Y");
				$("#multi_burn2").removeAttr("disabled");
				$("#multi_burn1").attr("disabled", true);
				$("#multi_burn3").attr("disabled", true);
				$("#multi_burn4").attr("disabled", true);

			}
			else {
				$("#multi_burn1").removeAttr("disabled");
				$("#multi_burn3").removeAttr("disabled");
				$("#multi_burn4").removeAttr("disabled");
			}

			if (obj['noi_burn3'] == 'Y') {
				$("#multi_burn3").prop('checked', true);
				$("#multi_burn3").val("Y");
				$("#multi_burn3").removeAttr("disabled");
				$("#multi_burn1").attr("disabled", true);
				$("#multi_burn2").attr("disabled", true);
				$("#multi_burn4").attr("disabled", true);

			}
			else {
				$("#multi_burn1").removeAttr("disabled");
				$("#multi_burn2").removeAttr("disabled");
				$("#multi_burn4").removeAttr("disabled");
			}

			if (obj['noi_burn4'] == 'Y') {
				$("#multi_burn4").prop('checked', true);
				$("#multi_burn4").val("Y");
				$("#multi_burn4").removeAttr("disabled");
				$("#multi_burn1").attr("disabled", true);
				$("#multi_burn2").attr("disabled", true);
				$("#multi_burn3").attr("disabled", true);

			}
			else {
				$("#multi_burn1").removeAttr("disabled");
				$("#multi_burn2").removeAttr("disabled");
				$("#multi_burn3").removeAttr("disabled");
			}

			if (obj['inj_concussion'] == 'Y') {
				$("#multi_conc").prop('checked', true);
				$("#multi_conc").val("Y");
				$("#multi_4").removeAttr("disabled");
				$("#multi_conc").removeAttr("disabled");
			}
			else {
				$("#multi_conc").prop('checked', false);
				$("#multi_conc").val("N");
			}

			if (obj['inj_contusion'] == 'Y') {
				$("#multi_contu").prop('checked', true);
				$("#multi_contu").val("Y");
				$("#multi_5").removeAttr("disabled");
				$("#multi_contu").removeAttr("disabled");
			}
			else {
				$("#multi_contu").prop('checked', false);
				$("#multi_contu").val("N");
			}

			if (obj['inj_fracture'] == 'Y') {
				$("#multi_frac").prop('checked', true);
				$("#multi_frac").val("Y");
				$("#multi_frac_sel").removeAttr("disabled");
				$("#multi_frac_sp").removeAttr("disabled");
			}
			else {
				$("#multi_frac").prop('checked', false);
				$("#multi_frac").val("N");
				$("#multi_frac_sel").ttr("disabled", true);
				$("#multi_frac_sp").attr("disabled", true);
			}


			if (obj['inj_wound'] == 'Y') {
				$("#multi_lace").prop('checked', true);
				$("#multi_lace").val("Y");
				$("#multi_8").removeAttr("disabled");
				$("#multi_lace").removeAttr("disabled");
			}
			else {
				$("#multi_lace").prop('checked', false);
				$("#multi_lace").val("N");
			}

			if (obj['inj_trauma'] == 'Y') {
				$("#multi_ampu").prop('checked', true);
				$("#multi_ampu").val("Y");
				$("#multi_9").removeAttr("disabled");
				$("#multi_ampu").removeAttr("disabled");
			}
			else {
				$("#multi_ampu").prop('checked', false);
				$("#multi_ampu").val("N");
			}

			if (obj['inj_others'] == 'Y') {
				$("#multi_other").prop('checked', true);
				$("#multi_other").val("Y");
				$("#multi_10").removeAttr("disabled");
				$("#multi_other").removeAttr("disabled");
			}
			else {
				$("#multi_other").prop('checked', false);
				$("#multi_other").val("N");
			}
			//////////////////////////////////////////////////////////////
			if (obj['ext_bite'] == 'Y') {
				$("#ext_bite").prop('checked', true);
				$("#ext_bite").val("Y");
				$("#ext_1").removeAttr("disabled");
				$("#ext_bite").removeAttr("disabled");
			}
			else {
				$("#ext_bite").prop('checked', false);
				$("#ext_bite").val("N");
			}

			if (obj['ext_gun'] == 'Y') {
				$("#ext_gun").prop('checked', true);
				$("#ext_gun").val("Y");
				$("#ext_2").removeAttr("disabled");
				$("#ext_gun").removeAttr("disabled");
			}
			else {
				$("#ext_gun").prop('checked', false);
				$("#ext_gun").val("N");
			}

			if (obj['ext_burn_r'] == 'Y') {
				$("#ext_burn").prop('checked', true);
				$("#ext_burn").val("Y");
				$("#ext_burn1").removeAttr("disabled");
				$("#ext_burn").removeAttr("disabled");
			}
			else {
				$("#ext_burn").prop('checked', false);
				$("#ext_burn").val("N");
				$("#ext_3").val("");
			}

			if (obj['ext_burn'] == '06') {
				$("#ext_3").removeAttr("disabled");
				$("#ext_burn").removeAttr("disabled");
			}
			else {
				$("#ext_3").val("");
				$("#ext_3").attr("disabled", true);


			}

			if (obj['ext_chem'] == 'Y') {
				$("#ext_chem").prop('checked', true);
				$("#ext_chem").val("Y");
				$("#ext_4").removeAttr("disabled");
				$("#ext_chem").removeAttr("disabled");
			}
			else {
				$("#ext_chem").prop('checked', false);
				$("#ext_chem").val("N");
			}

			if (obj['ext_hang'] == 'Y') {
				$("#ext_hang").prop('checked', true);
				$("#ext_hang").val("Y");
			}
			else {
				$("#ext_hang").prop('checked', false);
				$("#ext_hang").val("N");
			}

			if (obj['ext_sharp'] == 'Y') {
				$("#ext_contact").prop('checked', true);
				$("#ext_contact").val("Y");
				$("#ext_5").removeAttr("disabled");
			}
			else {
				$("#ext_contact").prop('checked', false);
				$("#ext_contact").val("N");
			}

			if (obj['ext_maul'] == 'Y') {
				$("#ext_mau").prop('checked', true);
				$("#ext_mau").val("Y");
			}
			else {
				$("#ext_mau").prop('checked', false);
				$("#ext_mau").val("N");
			}

			if (obj['ext_drown_r'] == 'Y') {
				$("#ext_drown").prop('checked', true);
				$("#ext_drown").val("Y");
				$("#ext_drown1").removeAttr("disabled");
			}
			else {
				$("#ext_drown").prop('checked', false);
				$("#ext_drown").val("N");
				$("#ext_drown1").attr("disabled", true);

			}
			if (obj['ext_drown'] == '06') {

				$("#ext_6").removeAttr("disabled");
			}
			else {
				$("#ext_6").attr("disabled", true);
				$("#ext_6").val("");

			}

			if (obj['ext_transport'] == 'Y') {
				$("#ext_trans").prop('checked', true);
				$("#ext_trans").val("Y");
			}
			else {
				$("#ext_trans").prop('checked', false);
				$("#ext_trans").val("N");
			}

			if (obj['ext_expo_nature_r'] == 'Y') {
				val(""); $("#ext_expose").prop('checked', true);
				$("#ext_expose").val("Y");
				$("#ext_expose1").removeAttr("disabled");
			}
			else {
				$("#ext_expose").prop('checked', false);
				$("#ext_expose").val("N");
				$("#ext_expose1").attr("disabled", true);

			}

			if (obj['ext_fall'] == 'Y') {
				$("#ext_fall").prop('checked', true);
				$("#ext_fall").val("Y");
				$("#ext_fall1").removeAttr("disabled");
				$("#ext_8").removeAttr("disabled");
			}
			else {
				$("#ext_fall").prop('checked', false);
				$("#ext_fall").val("N");
				$("#ext_fall1").attr("disabled", true);
				$("#ext_8").attr("disabled", true);
				$("#ext_8").val("");

			}

			if (obj['ext_firecracker_r'] == 'Y') {
				$("#ext_cracker").prop('checked', true);
				$("#ext_cracker").val("Y");
				$("#selFire").removeAttr("disabled");
			}
			else {
				$("#ext_cracker").prop('checked', false);
				$("#ext_cracker").val("N");
			}

			if (obj['ext_firecracker'] == '88') {
				$("#ext_9").removeAttr("disabled");
			}
			else {
				$("#ext_9").val("");
				$("#ext_9").attr("disabled", true);

			}

			if (obj['ext_other'] == 'Y') {
				$("#ext_other").prop('checked', true);
				$("#ext_other").val("Y");
				$("#ext_10").removeAttr("disabled");
			}
			else {
				$("#ext_other").prop('checked', false);
				$("#ext_other").val("N");
			}

			if (obj['ext_sexual'] == 'Y') {
				$("#ext_sex").prop('checked', true);
				$("#ext_sex").val("Y");
			}
			else {
				$("#ext_sex").prop('checked', false);
				$("#ext_sex").val("N");
			}

			if (obj['icd_10_treat'] == '10') {
				$("#intervet_aid_sp").removeAttr("disabled");
			}
			else if (obj['icd_10_treat'] == '50') {
				$("#intervet_oth_sp").removeAttr("disabled");
			}
			else {
				$("#intervet_aid_sp").attr("disabled", true);
				$("#intervet_oth_sp").attr("disabled", true);
			}
			//////////////////////////////////////////////////
			$('#init_imp').val(obj['init_impress']);
			$('#icdnat').val(obj['icd_10_noi']);
			$('#icdext').val(obj['icd_10_ext']);

			$("#intervet option[value='" + obj['icd_10_treat'] + "']").attr("selected", "selected");
			$('#intervet_aid_sp').val(obj['icd_10_treat_first']);
			$('#intervet_oth_sp').val(obj['icd_10_treat_sp']);

			$("#dispose option[value='" + obj['disp_er'] + "']").attr("selected", "selected");

			setFacility(obj['disp_er_sp']);

			var disposedte = setTimeLocale(obj['disp_er_date']);
			$('#dispose_date').val(disposedte);

			$('#dispose_type').val(obj['disp_er_type']);
			$('#dispose_agency').val(obj['disp_er_agent']);
			$('#dispose_name_service').val(obj['name_of_ser_provi']);

			$('#complete_lname').val(obj['pre_bylast']);
			$('#complete_fname').val(obj['pre_byfirst']);
			$('#complete_mname').val(obj['pre_bymiddle']);

			$('#complete_landline').val(obj['pre_byland_num']);
			$('#complete_mobile').val(obj['pre_bymob_num']);
			$('#complete_email').val(obj['pre_byemail_add']);


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


			var result = document.getElementById('info_year').value + " year(s), " + document.getElementById('info_month').value + " month(s), " + document.getElementById('info_day').value + " day(s), ";
			if (!isNaN(result)) {
				document.getElementById('info_age').value = result;
			}
			$("#info_age").val(result);
			console.log(result);

		},
		error: function (data, status) {
			return status;
		}
	});
}

function Vawcwizard() {
	var formType = $("#formIden").val();
	_vawcinitWizard();
	_vawceventWizard(formType);
	_vawcvalidateWizard();
};

function _vawcinitWizard() {
	var btnFinish = $('<button type="button"  disabled name ="btnDone" id="btnDone"></button>')
		.text('Done')
		.addClass('btn btn-info btn-ladda')
		.on('click', function () {

			if ($('#form-step-7').valid()) {
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

				var step7 = $('#form-step-7').serializeArray();
				step7.forEach((item) => {
					data.append(item.name, item.value)
				});

				info_typepat
				$('#info_typepat').removeAttr('disabled',false);
				// console.log(data);
				$.ajax({
					type: "POST",
					url: baseURL + "VAWC/saveVawc",
					data: data,
					processData: false,
					contentType: false,
					success: function (data, response) {
						window.location.replace(baseURL + "VAWC");
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

function _vawceventWizard(type) {
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

function _vawcvalidateWizard() {
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
			case 5:
				if ($('#form-step-6').valid()) {
					return true;
				} else {
					return false;
				}
				break;
		}
	});
}
