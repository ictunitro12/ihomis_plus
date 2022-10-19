var Module = $('#module').val();

function checkStroke(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../Stroke/checkStroke/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
			}
			else {
				initStroke(enccode, hpercode);
			}
		},
		error: function (data) {
			alert('Please Try Again!');
		}
	});
}


function initStroke(enccode, hpercode) {
	Strokewizard();
	initcheck();
	uppercase();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	SelDepartment();
	getPatientData(enccode, hpercode);			
	PatientAddress(btoa(hpercode));
	PatientAddress2(btoa(hpercode));
	calculateBMI();
	CityConsult();
	CityComplete();
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
	$('#prim_hos_1').val(getTimeLocale());
}

function initStrokeEdit(enccode,hpercode) {
	var code = encodeURIComponent(encodeURIComponent(enccode));

	Strokewizard();
	initcheck();
	uppercase();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	CityConsult();
	CityComplete();
	calculateBMI();
	getPatientData(code,hpercode);			
	PatientAddress(btoa(hpercode));
	PatientAddress2(btoa(hpercode));
	getStrokeData(enccode, hpercode);
	StrokeAddress(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);
}

function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "Stroke/getPatientData/" + enccode + "/" + hpercode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
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
		url: baseURL + "Stroke/getConsultant/" + licno,
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
		url: baseURL + "Stroke/getCompletedBy/" + employeeid,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			$("#complete_lname").val(obj['comp_lastname']);
			$("#complete_fname").val(obj['comp_firstname']);
			$("#complete_mname").val(obj['comp_middlename']);
			$("#complete_desig").val(obj['department']);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function StrokePatientInfo(hpercode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "Stroke/StrokePatientInformation/" + hpercode,
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

function StrokeAddress(hpercode)
{
	$.ajax({
		type: "POST",
		url: baseURL+"Stroke/StrokeAddress/"+hpercode,
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

function getStrokeData(enccode) {

	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "Stroke/getStrokeData/" + enctr,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
	
			$('#age_smoke').val(obj['age_start_smoke']);
			$('#num_smoke').val(obj['no_years_smoke']);

			$('#physical_act_type').val(obj['phy_activity_kind']);
			$('#physical_act_min').val(obj['phy_activity_mins']);
			$("#physical_act_freq option[value='" + obj['freq_code1'] + "']").attr("selected", "selected");

			$('#prev_other').val(obj['rf_others_spec']);

			$('#fish_specify').val(obj['diet_meat_spec']);
			$("#fish_freq option[value='" + obj['meat_freq'] + "']").attr("selected", "selected");

			$('#rice_specify').val(obj['diet_carbo_spec']);
			$("#rice_freq option[value='" + obj['carbo_freq'] + "']").attr("selected", "selected");

			$('#fats_specify').val(obj['diet_fatoil_spec']);
			$("#fats_freq option[value='" + obj['fatoil_freq'] + "']").attr("selected", "selected");

			$('#fruits_specify').val(obj['diet_fruitvege_spec']);
			$("#fruits_freq option[value='" + obj['fruit_freq'] + "']").attr("selected", "selected");

			$('#sugar_specify').val(obj['diet_sugarsweet_spec']);
			$("#sugar_freq option[value='" + obj['sugarsweet_freq'] + "']").attr("selected", "selected");

			$('#milk_specify').val(obj['diet_milkproducts_spec']);
			$("#milk_freq option[value='" + obj['milkproducts_freq'] + "']").attr("selected", "selected");

			$('#usu_other_specify').val(obj['diet_others_spec']);
			$("#other_freq option[value='" + obj['other_freq'] + "']").attr("selected", "selected");
			$("#str_type option[value='" + obj['stroke_type_code'] + "']").attr("selected", "selected");
			$("#patstat option[value='" + obj['patient_status_code'] + "']").attr("selected", "selected");
			$("#dispos option[value='" + obj['dispose_code'] + "']").attr("selected", "selected");


			$('#drink_type').val(obj['alcohol_type']);
			$('#drink_amount').val(obj['alcohol_amt']);
			$("#unit option[value='" + obj['alc_uomcode'] + "']").attr("selected", "selected");
			$("#alcohol_freq option[value='" + obj['freq_code2'] + "']").attr("selected", "selected");
			$('#age_alcohol').val(obj['age_start_alcohol']);
			$('#no_alcohol').val(obj['no_yrs_alcohol']);

			$("#dia_dispos option[value='" + obj['dispose_code'] + "']").attr("selected", "selected");
			$("#dia_deathreason option[value='" + obj['refreason_code2'] + "']").attr("selected", "selected");


			$('#fam_mem').val(obj['family_specify']);
			$('#fam_memtype').val(obj['family_type_stroke']);

			$('#diag_other_spec').val(obj['sym_numbother_spec']);
			$('#diag_other_final').val(obj['sym_others_spec']);

			$('#treat_1b_spec').val(obj['trt_acute_other_spec']);
			$('#treat_2d_spec').val(obj['trt_prev_others_spec']);
			$('#treat_other_spec').val(obj['trt_hem_others_spec']);
			$('#treat_4_spec').val(obj['trt_others_spec']);
			$('#complete_desig').val(obj['designation']);


			$('#dia_refer').val(obj['referred_from']);
			$('#dia_namereferfac').val(obj['hfhudcode_from']);
			$("#dia_reasonrefer option[value='" + obj['refreason_code'] + "']").attr("selected", "selected");

			if (obj['referred_from'] == 'Y') {
				$("#ref_from").prop('checked', true);
				$("#ref_from").val("Y");
			}
			else {
				$("#ref_from").prop('checked', false);
				$("#ref_from").val("N");
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

			if (obj['less_equal_1_pack'] == 'Y') {
				$("#less_smoke").val("Y");
				$("#less_smoke").prop('checked', true);
				$("#less_smoke").removeAttr("disabled");
				$("#more_smoke").attr("disabled", true);
			}
			else {
				$("#less_smoke").val("");
				$("#less_smoke").prop('checked', false);
			}

			if (obj['more_equal_1_pack'] == 'Y') {
				$("#more_smoke").val("Y");
				$("#more_smoke").prop('checked', true);
				$("#more_smoke").removeAttr("disabled");
				$("#less_smoke").attr("disabled", true);
			}
			else {
				$("#more_smoke").val("");
				$("#more_smoke").prop('checked', false);
			}

			if (obj['less_equal_1_pack'] == 'N') {
				$("#more_smoke").val("N");
				$("#more_smoke").prop('checked', true);
				$("#more_smoke").removeAttr("disabled");

			}
			else {
				$("#more_smoke").val(" ");
				$("#more_smoke").prop('checked', false);
			}
			//end smoke
			if (obj['phy_activity'] == 'Y') {
				$("#physical_act").prop('checked', true);
				$("#physical_act").val("Y");
				$("#physical_act_type").removeAttr("disabled");
				$("#physical_act_min").removeAttr("disabled");
				$("#physical_act_freq").removeAttr("disabled");
			}
			else {
				$("#physical_act").prop('checked', false);
				$("#physical_act").val("N");
			}
			//end act			

			if (obj['diabetes_mellitus'] == 'Y') {
				$("#prev_1").prop('checked', true);
				$("#prev_1").val("Y");
			}
			else {
				$("#prev_1").prop('checked', false);
				$("#prev_1").val("N");
			}

			if (obj['valvular'] == 'Y') {
				$("#prev_2").prop('checked', true);
				$("#prev_2").val("Y");
			}
			else {
				$("#prev_2").prop('checked', false);
				$("#prev_2").val("N");
			}

			if (obj['hpn'] == 'Y') {
				$("#prev_3").prop('checked', true);
				$("#prev_3").val("Y");
			}
			else {
				$("#prev_3").prop('checked', false);
				$("#prev_3").val("N");
			}



			if (obj['tia'] == 'Y') {
				$("#prev_4").prop('checked', true);
				$("#prev_4").val("Y");
			}
			else {
				$("#prev_4").prop('checked', false);
				$("#prev_4").val("N");
			}

			if (obj['rf_others'] == 'Y') {
				$("#prev_5").prop('checked', true);
				$("#prev_5").val("Y");
				$("#prev_other").removeAttr("disabled");
			}
			else {
				$("#prev_5").prop('checked', false);
				$("#prev_5").val("N");
			}

			///end

			if (obj['diet_meat'] == 'Y') {
				$("#fish").prop('checked', true);
				$("#fish").val("Y");
				$("#fish_specify").removeAttr("disabled");
				$("#fish_freq").removeAttr("disabled");
			}
			else {
				$("#fish").prop('checked', false);
				$("#fish").val("N");
			}

			if (obj['diet_carbo'] == 'Y') {
				$("#rice").prop('checked', true);
				$("#rice").val("Y");
				$("#rice_specify").removeAttr("disabled");
				$("#rice_freq").removeAttr("disabled");
			}
			else {
				$("#rice").prop('checked', false);
				$("#rice").val("N");
			}

			if (obj['diet_fruitvege'] == 'Y') {
				$("#fruits").prop('checked', true);
				$("#fruits").val("Y");
				$("#fruits_specify").removeAttr("disabled");
				$("#fruits_freq").removeAttr("disabled");
			}
			else {
				$("#fruits").prop('checked', false);
				$("#fruits").val("N");
			}

			if (obj['diet_fatoil'] == 'Y') {
				$("#fats").prop('checked', true);
				$("#fats").val("Y");
				$("#fats_specify").removeAttr("disabled");
				$("#fats_freq").removeAttr("disabled");
			}
			else {
				$("#fats").prop('checked', false);
				$("#fats").val("N");
			}

			if (obj['diet_sugarsweet'] == 'Y') {
				$("#sugar").prop('checked', true);
				$("#sugar").val("Y");
				$("#sugar_specify").removeAttr("disabled");
				$("#sugar_freq").removeAttr("disabled");
			}
			else {
				$("#sugar").prop('checked', false);
				$("#sugar").val("N");
			}

			if (obj['diet_milkproducts'] == 'Y') {
				$("#milk").prop('checked', true);
				$("#milk").val("Y");
				$("#milk_specify").removeAttr("disabled");
				$("#milk_freq").removeAttr("disabled");
			}
			else {
				$("#milk").prop('checked', false);
				$("#milk").val("N");
			}

			if (obj['diet_others'] == 'Y') {
				$("#usu_other").prop('checked', true);
				$("#usu_other").val("Y");
				$("#usu_other_specify").removeAttr("disabled");
				$("#other_freq").removeAttr("disabled");
			}

			else {
				$("#usu_other").prop('checked', false);
				$("#usu_other").val("N");
			}
			//enddddd

			if (obj['alcohol'] == 'Y') {
				$("#drink").prop('checked', true);
				$("#drink").val("Y");
				$("input.drinks").removeAttr("disabled");
				$("#unit").removeAttr("disabled");
				$("#alcohol_freq").removeAttr("disabled");
			}
			else {
				$("#drink").prop('checked', false);
				$("#drink").val("N");
			}

			if (obj['familyhihe'] == 'Y') {
				$("#family").prop('checked', true);
				$("#family").val("Y");
				$("input.famm").removeAttr("disabled");
			}
			else {
				$("#family").prop('checked', false);
				$("#family").val("N");
			}



			//end 
			if (obj['sym_headache'] == 'Y') {
				$("#symp_1").prop('checked', true);
				$("#symp_1").val("Y");
			}
			else {
				$("#symp_1").prop('checked', false);
				$("#symp_1").val("N");
			}

			if (obj['sym_weakness'] == 'Y') {
				$("#symp_2").prop('checked', true);
				$("#symp_2").val("Y");
			}
			else {
				$("#symp_2").prop('checked', false);
				$("#symp_2").val("N");
			}

			if (obj['sym_lossvision'] == 'Y') {
				$("#symp_3").prop('checked', true);
				$("#symp_3").val("Y");
			}
			else {
				$("#symp_3").prop('checked', false);
				$("#symp_3").val("N");
			}

			if (obj['sym_numbness'] == 'Y') {
				$("#symp_4").prop('checked', true);
				$("#symp_4").val("Y");
				$("input.numb").removeAttr("disabled");
			}
			else {
				$("#symp_4").prop('checked', false);
				$("#symp_4").val("N");
			}

			if (obj['sym_numbface'] == 'Y') {
				$("#symp_4a").prop('checked', true);
				$("#symp_4a").val("Y");
			}
			else {
				$("#symp_4a").prop('checked', false);
				$("#symp_4a").val("N");
			}

			if (obj['sym_numbarm'] == 'Y') {
				$("#symp_4b").prop('checked', true);
				$("#symp_4b").val("Y");
			}
			else {
				$("#symp_4b").prop('checked', false);
				$("#symp_4b").val("N");
			}

			if (obj['sym_numbleg'] == 'Y') {
				$("#symp_4c").prop('checked', true);
				$("#symp_4c").val("Y");
			}
			else {
				$("#symp_4c").prop('checked', false);
				$("#symp_4c").val("N");
			}


			if (obj['sym_numbother'] == 'Y') {
				$("#symp_4d").prop('checked', true);
				$("#symp_4d").val("Y");
				$("#diag_other_spec").removeAttr("disabled");
			}
			else {
				$("#symp_4d").prop('checked', false);
				$("input.numb").prop('checked', false);
				$("#symp_4d").val("N");
			}



			if (obj['sym_diffspeak'] == 'Y') {
				$("#symp_5").prop('checked', true);
				$("#symp_5").val("Y");
			}
			else {
				$("#symp_5").prop('checked', false);
				$("#symp_5").val("N");
			}

			if (obj['sym_diffswallow'] == 'Y') {
				$("#symp_6").prop('checked', true);
				$("#symp_6").val("Y");
			}
			else {
				$("#symp_6").prop('checked', false);
				$("#symp_6").val("N");
			}

			if (obj['sym_lossconscious'] == 'Y') {
				$("#symp_7").prop('checked', true);
				$("#symp_7").val("Y");
			}
			else {
				$("#symp_7").prop('checked', false);
				$("#symp_7").val("N");
			}

			if (obj['sym_others'] == 'Y') {
				$("#symp_8").prop('checked', true);
				$("#symp_8").val("Y");
				$("#diag_other_final").removeAttr("disabled");
			}
			else {
				$("#symp_8").prop('checked', false);
				$("#symp_8").val("N");
			}

			if (obj['trt_acute'] == 'Y') {
				$("#treat_1").prop('checked', true);
				$("#treat_1").val("Y");
				$("input.acute").removeAttr("disabled");
			}
			else {
				$("#treat_1").prop('checked', false);
				$("#treat_1").val("N");
			}

			if (obj['trt_acute_clot'] == 'Y') {
				$("#treat_1a").prop('checked', true);
				$("#treat_1a").val("Y");
			}
			else {
				$("#treat_1a").prop('checked', false);
				$("#treat_1a").val("N");
			}

			if (obj['trt_acute_other'] == 'Y') {
				$("#treat_1b").prop('checked', true);
				$("#treat_1b").val("Y");
				$("#treat_1b_spec").removeAttr("disabled");
			}
			else {
				$("#treat_1b").prop('checked', false);
				$("#treat_1b").val("N");
			}
			///

			if (obj['trt_preventive'] == 'Y') {
				$("#treat_2").prop('checked', true);
				$("#treat_2").val("Y");
				$("input.preventive").removeAttr("disabled");
			}
			else {
				$("#treat_2").prop('checked', false);
				$("#treat_2").val("N");
			}

			if (obj['trt_prev_anticoag'] == 'Y') {
				$("#treat_2a").prop('checked', true);
				$("#treat_2a").val("Y");
			}
			else {
				$("#treat_2a").prop('checked', false);
				$("#treat_2a").val("N");
			}


			if (obj['trt_prev_carotid'] == 'Y') {
				$("#treat_2b").prop('checked', true);
				$("#treat_2b").val("Y");
			}
			else {
				$("#treat_2b").prop('checked', false);
				$("#treat_2b").val("N");
			}

			if (obj['trt_prev_angioplasty'] == 'Y') {
				$("#treat_2c").prop('checked', true);
				$("#treat_2c").val("Y");
			}
			else {
				$("#treat_2c").prop('checked', false);
				$("#treat_2c").val("N");
			}

			if (obj['trt_prev_others'] == 'Y') {
				$("#treat_2d").prop('checked', true);
				$("#treat_2d").val("Y");
				$("#treat_2d_spec").removeAttr("disabled");
			}
			else {
				$("#treat_2d").prop('checked', false);
				$("#treat_2d").val("N");
			}

			if (obj['trt_hemorr'] == 'Y') {
				$("#treat_3").prop('checked', true);
				$("#treat_3").val("Y");
				$("input.hemo").removeAttr("disabled");
			}
			else {
				$("#treat_3").prop('checked', false);
				$("#treat_3").val("N");
			}

			if (obj['trt_hem_surgical'] == 'Y') {
				$("#treat_3a").prop('checked', true);
				$("#treat_3a").val("Y");
			}
			else {
				$("#treat_3a").prop('checked', false);
				$("#treat_3a").val("N");
			}

			if (obj['trt_hem_endovascular'] == 'Y') {
				$("#treat_3c").prop('checked', true);
				$("#treat_3c").val("Y");
			}
			else {
				$("#treat_3c").prop('checked', false);
				$("#treat_3c").val("N");
			}

			if (obj['trt_hem_others'] == 'Y') {
				$("#treat_3b").prop('checked', true);
				$("#treat_3b").val("Y");
				$("#treat_other_spec").removeAttr("disabled");
			}
			else {
				$("#treat_3b").prop('checked', false);
				$("#treat_3b").val("N");
			}

			if (obj['trt_others'] == 'Y') {
				$("#treat_4").prop('checked', true);
				$("#treat_4").val("Y");
				$("#treat_4_spec").removeAttr("disabled");
			}
			else {
				$("#treat_4").prop('checked', false);
				$("#treat_4").val("N");
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

function Strokewizard() {
	var formType = $("#formIden").val();
	_strokeinitWizard();
	_strokeEventWizard(formType);
	_strokevalidateWizard();
};

function _strokeinitWizard() {

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

				// console.log(data);
				$('#info_typepat').removeAttr('disabled',false);
				
				$.ajax({
					type: "POST",
					url: baseURL + "Stroke/saveStroke",
					data: data,
					processData: false,
					contentType: false,
					success: function (data, response) {
						window.location.replace(baseURL + "Stroke");
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

function _strokeEventWizard(type) {
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

function _strokevalidateWizard() {
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
		}
	});
}

function calculateBMI()
{
	var weight =parseFloat($("#hwWeight").val());
	var height =parseFloat($("#hwHeight").val());

	var totHeight = (parseFloat(height *  0.01 ) * parseFloat(height *  0.01));

	var totWeight  = weight / totHeight;

	var BMI =totWeight.toFixed(2);
	_BMI(BMI);
	$("#hwBMI").val(BMI);

	var sex = $("#info_sex").val();
	var wais =parseFloat($("#hwWaist").val());
	if (sex== 'M') {			
		menWaist(wais);
	}
	if (sex== 'F') {			
		womenWaist(wais);
	}
}


function _BMI(n)
{
	if(n < 18.5)
	{
		$("#bmiclass").text("Underweight").addClass("text-danger");
		$("#bmicat").val("UND");
		$("#classbmi").val("Underweight");
	}else if( (n <= 18.5) || (n <= 24.9)){
		$("#bmiclass").text("Normal weight").addClass("text-success");
		$("#bmicat").val("NOR");
		$("#classbmi").val("Normal weight");
	}else if( (n <= 25.0) || (n <= 29.9)){
		$("#bmiclass").text("Overweight").addClass("text-danger");
		$("#bmicat").val("OVER");
		$("#classbmi").val("Overweight");

	}else if( (n <= 30.0) || (n <= 34.9)){
		$("#bmiclass").text("Class I obesity").addClass("text-danger");
		$("#bmicat").val("OBE");
		$("#classbmi").val("Class I obesity");

	}else if( (n <= 35.0) || (n <= 39.9)){
		$("#bmiclass").text("Class II obesity").addClass("text-danger");
		$("#bmicat").val("OBEII");
		$("#classbmi").val("Class II obesity");

	}else if( (n >= 40.0)){
		$("#bmiclass").text("Class III obesity").addClass("text-danger");
		$("#bmicat").val("OBEIII");
		$("#classbmi").val("Class III obesity");

	}else{
		$("#bmicat").val("");
	}

}

function menWaist(n)
{
	if(n <= 94.9 )
	{
		$("#classwaist").val("Normal");
	}
	else if(n >=95 ||n<=101.9  )
	{
		$("#classwaist").val("High");
	}
	else if(n >= 102)
	{
		$("#classwaist").val("Very High");
	}

	else{
		$("#classwaist").val("");
	}

}

function womenWaist(n)
{
	if(n <= 80.9 )
	{
		$("#classwaist").val("Normal");
	}
	else if(n >=81 ||n<=88.9)
	{
		$("#classwaist").val("High");
	}
	else if(n >= 90)
	{
		$("#classwaist").val("Very High");
	}
	else{
		$("#classwaist").val("");
	}

}

function AgeCompute(bdate)
{ 
	$.ajax({
		type: "POST",
		url: baseURL+"Patient/AgeComp/"+bdate,
		data: "json",
		success: function(data,status)
		{ 
			var obj = $.parseJSON(data);
			$("#info_year").val(obj['year']);
			$("#info_month").val(obj['month']);
			$("#info_day").val(obj['day']);

			var result = document.getElementById('info_year').value+ " year(s), " +document.getElementById('info_month').value+ " month(s), " +document.getElementById('info_day').value+ " day(s), ";
			if (!isNaN(result)) {
				document.getElementById('info_age').value = result;
			}
			$("#info_age").val(result);
			console.log(result);

		},
		error: function(data,status)
		{
			return status;
		}
	});
}