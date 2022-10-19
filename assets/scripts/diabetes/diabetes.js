var Module = $('#module').val();

function checkDiabetes(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../Diabetes/checkDiabetes/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
			}
			else {
				initDiabetes(enccode, hpercode);
			}
		},
		error: function (data) {
			alert('Please Try Again!');
		}
	});
}

function initDiabetes(enccode, hpercode) {
	Diabeteswizard();
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
}

function initDiabetesEdit(enccode, hpercode) {
	initcheck();
	var code = encodeURIComponent(encodeURIComponent(enccode));
	console.log(code);
	console.log(hpercode);
	Diabeteswizard();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	CityConsult();
	CityComplete();
	calculateBMI();
	getPatientData(code,hpercode);			
	PatientAddress(btoa(hpercode));
	PatientAddress2(btoa(hpercode));
	getDiabetesData(enccode, hpercode);
	DiabetesAddress(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);

}
function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "Diabetes/getPatientData/" + enccode + "/" + hpercode,
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
		url: baseURL + "Diabetes/getConsultant/" + licno,
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
		url: baseURL + "Diabetes/getCompletedBy/" + employeeid,
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

function DiabetesPatientInfo(hpercode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "Diabetes/DiabetesPatientInformation/" + hpercode,
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



function getDiabetesData(enccode) {

	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "Diabetes/getDiabetesData/" + enctr,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
			$("#info_race option[value='" + obj['race_code'] + "']").attr("selected", "selected");
			$("#info_ethnic option[value='" + obj['ethnic_code'] + "']").attr("selected", "selected");
			$('#contact_email').val(obj['cp_email1']);

			$("#info_educat option[value='" + obj['educ_attain_code'] + "']").attr("selected", "selected");
			
			$('#info_company').val(obj['company']);
			$('#info_comrefno').val(obj['cr']);
			
			var complete = obj['date_completed'];
			var datecomplete = ((complete == "1970-01-01 00:00:00") || (complete == null)) ? "0000-00-00 00:00:00" : setTimeLocale(complete);
			$("#complete_Date").val(datecomplete);

			$('#hwHeight').val(obj['height']);
			$('#hwWeight').val(obj['weight']);
			$('#hwBMI').val(obj['body_mass']);
			$('#classbmi').val(obj['classification']);
			$('#hwWaist').val(obj['waist_circum']);
			$('#classwaist').val(obj['class']);

			$('#age_smoke').val(obj['age_start_smoke']);
			$('#num_smoke').val(obj['no_years_smoke']);
			$('#numyear_smoke').val(obj['num_years']);

			$('#physical_act_type').val(obj['phy_activity_kind']);
			$('#physical_act_min').val(obj['phy_activity_mins']);
			$("#physical_act_freq option[value='" + obj['freq_code1'] + "']").attr("selected", "selected");

			$('#prev_other').val(obj['fd_others_spec']);

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


			$('#drink_type').val(obj['alcohol_type']);
			$('#drink_amount').val(obj['alcohol_amt']);
			$("#unit option[value='" + obj['alc_uomcode'] + "']").attr("selected", "selected");
			$("#alcohol_freq option[value='" + obj['freq_code2'] + "']").attr("selected", "selected");
			$('#age_alcohol').val(obj['age_start_alcohol']);
			$('#no_alcohol').val(obj['no_years_alcohol']);


			$('#fam_mem').val(obj['family_specify']);
			$('#fam_memtype').val(obj['family_type_diabetes']);

			$('#nobaby').val(obj['obgy_gt_8']);
			$('#noconano').val(obj['obgy_cong_anom']);
			$('#others_symp').val(obj['ss_others_spec']);
			$('#testconduct').val(obj['tests_conducted']);
			$('#dura_diabet').val(obj['duration_diabetes']);
			$('#testconduct').val(obj['tests_conducted']);

			$('#info_year_dia').val(obj['age_diag_years']);
			$('#info_month_dia').val(obj['age_diag_months']);
			$('#info_day_dia').val(obj['age_diag_days']);

			$('#other_type').val(obj['diab_others_specify']);
			$('#compli').val(obj['diab_complic']);

			$('#Kind').val(obj['phy_kind']);
			$('#freq').val(obj['freq_week']);

			$('#other_oral').val(obj['oa_others_spec']);
			$('#unitsperday').val(obj['insulin_units']);
			$('#others_sur').val(obj['surg_others_spec']);



			$("#comply option[value='" + obj['mnt_compliance'] + "']").attr("selected", "selected");
			$("#newprev option[value='" + obj['med_diagnosis'] + "']").attr("selected", "selected");
			$("#dura_diabet2 option[value='" + obj['freq_code'] + "']").attr("selected", "selected");
			$("#type_diabet option[value='" + obj['diab_code'] + "']").attr("selected", "selected");
			$("#type_insu option[value='" + obj['insulin_code'] + "']").attr("selected", "selected");
			$("#patstat option[value='" + obj['patient_status_code'] + "']").attr("selected", "selected");
			$("#dispos option[value='" + obj['dispose_code'] + "']").attr("selected", "selected");



			if (obj['Smoking'] == 'Y') {
				$("#smoke").prop('checked', true);
				$("#smoke").val("Y");
				$("#final_smoke").val("Y");
				$("input.ssmoke").removeAttr("disabled");
				$("#shs_smoke").attr('disabled', true);
				$("#numyear_smoke").attr('disabled', true);

			}
			else {
				$("input.ssmoke").attr("disabled", true);
			}

			if (obj['less_equal_1_pack'] == 'Y') {
				$("#less_smoke").val("Y");
				$("#less_smoke").prop('checked', true);
				$("#less_smoke").removeAttr("disabled");
			}
			else {
				$("#less_smoke").val("N");
				$("#less_smoke").prop('checked', false);
			}

			if (obj['more_equal_1_pack'] == 'Y') {
				$("#more_smoke").val("Y");
				$("#more_smoke").prop('checked', true);
				$("#more_smoke").removeAttr("disabled");
			}
			else {
				$("#more_smoke").val("N");
				$("#more_smoke").prop('checked', false);
			}


			if (obj['with_exposure'] == 'Y') {
				$("#expshs_smoke").val("Y");
				$("#expshs_smoke").prop('checked', true);
				$("#expshs_smoke").removeAttr("disabled");
			}
			else {
				$("#expshs_smoke").val("N");
				$("#expshs_smoke").prop('checked', false);
			}

			/////////////////////////////////	

			if (obj['phy_activity'] == 'Y') {
				$("#physical_act").prop('checked', true);
				$("#physical_act").val("Y");
				$("input.physactivity ").removeAttr("disabled");
				$("#physical_act_freq").removeAttr("disabled");

			}
			else {
				$("#physical_act").prop('checked', false);
				$("#physical_act").val("N");
				$("input.physactivity ").attr("disabled", true);

			}

			if (obj['familyhihe'] == 'Y') {
				$("#family").prop('checked', true);
				$("#family").val("Y");
				$("input.famm").removeAttr("disabled");
			}
			else {
				$("#family").prop('checked', false);
				$("#family").val("N");
				$("input.famm").attr("disabled", true);

			}

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
				$("input.drinks").attr("disabled", true);

			}
			////////////////////////////////////

			if (obj['fd_hypertense'] == 'Y') {
				$("#prev_1").prop('checked', true);
				$("#prev_1").val("Y");
			}
			else {
				$("#prev_1").prop('checked', false);
				$("#prev_1").val("N");
			}

			if (obj['fd_asthma'] == 'Y') {
				$("#prev_2").prop('checked', true);
				$("#prev_2").val("Y");
			}
			else {
				$("#prev_2").prop('checked', false);
				$("#prev_2").val("N");
			}

			if (obj['fd_cvd'] == 'Y') {
				$("#prev_3").prop('checked', true);
				$("#prev_3").val("Y");
			}
			else {
				$("#prev_3").prop('checked', false);
				$("#prev_3").val("N");
			}

			if (obj['fd_tb'] == 'Y') {
				$("#prev_4").prop('checked', true);
				$("#prev_4").val("Y");
			}
			else {
				$("#prev_4").prop('checked', false);
				$("#prev_4").val("N");
			}

			if (obj['fd_stroke'] == 'Y') {
				$("#prev_5").prop('checked', true);
				$("#prev_5").val("Y");
			}
			else {
				$("#prev_5").prop('checked', false);
				$("#prev_5").val("N");
			}

			if (obj['fd_diabetes'] == 'Y') {
				$("#prev_6").prop('checked', true);
				$("#prev_6").val("Y");
			}
			else {
				$("#prev_6").prop('checked', false);
				$("#prev_6").val("N");
			}

			if (obj['fd_cancer'] == 'Y') {
				$("#prev_7").prop('checked', true);
				$("#prev_7").val("Y");
			}
			else {
				$("#prev_7").prop('checked', false);
				$("#prev_7").val("N");
			}

			if (obj['fd_others'] == 'Y') {
				$("#prev_8").prop('checked', true);
				$("#prev_8").val("Y");
				$("#prev_other").removeAttr("disabled");
			}
			else {
				$("#prev_8").prop('checked', false);
				$("#prev_8").val("N");
				$("#prev_other").attr("disabled", true);

			}
			/////////////////////////////////////////////////
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
			/////////////////////////////////////////////////

			if (obj['referred_from'] == 'Y') {
				$("#ref_from").prop('checked', true);
				$("#ref_from").val("Y");
				$("#selFac").removeAttr("disabled");
			}
			else {
				$("#ref_from").prop('checked', false);
				$("#ref_from").val("N");
				$("#selFac").attr("disabled", true);

			}

			if (obj['physio_pregnant'] == 'Y') {
				$("#preg").prop('checked', true);
				$("#preg").val("Y");
			}
			else {
				$("#preg").prop('checked', false);
				$("#preg").val("N");
			}

			if (obj['physio_lactating'] == 'Y') {
				$("#lact").prop('checked', true);
				$("#lact").val("Y");
			}
			else {
				$("#lact").prop('checked', false);
				$("#lact").val("N");
			}

			if (obj['physio_notavail'] == 'Y') {
				$("#notappli").prop('checked', true);
				$("#notappli").val("Y");
			}
			else {
				$("#notappli").prop('checked', false);
				$("#notappli").val("N");
			}
			//////////////////////////////////
			if (obj['ss_polyuria'] == 'Y') {
				$("#symp_1").prop('checked', true);
				$("#symp_1").val("Y");
			}
			else {
				$("#symp_1").prop('checked', false);
				$("#symp_1").val("N");
			}

			if (obj['ss_polydipsia'] == 'Y') {
				$("#symp_2").prop('checked', true);
				$("#symp_2").val("Y");
			}
			else {
				$("#symp_2").prop('checked', false);
				$("#symp_2").val("N");
			}

			if (obj['ss_polyphagia'] == 'Y') {
				$("#symp_3").prop('checked', true);
				$("#symp_3").val("Y");
			}
			else {
				$("#symp_3").prop('checked', false);
				$("#symp_3").val("N");
			}

			if (obj['ss_weight_loss'] == 'Y') {
				$("#symp_4").prop('checked', true);
				$("#symp_4").val("Y");
			}
			else {
				$("#symp_4").prop('checked', false);
				$("#symp_4").val("N");
			}

			if (obj['ss_tingling'] == 'Y') {
				$("#symp_5").prop('checked', true);
				$("#symp_5").val("Y");
			}
			else {
				$("#symp_5").prop('checked', false);
				$("#symp_5").val("N");
			}

			if (obj['ss_non_heal'] == 'Y') {
				$("#symp_6").prop('checked', true);
				$("#symp_6").val("Y");
			}
			else {
				$("#symp_6").prop('checked', false);
				$("#symp_6").val("N");
			}

			if (obj['ss_others'] == 'Y') {
				$("#symp_7").prop('checked', true);
				$("#symp_7").val("Y");
				$("#others_symp").removeAttr("disabled");
			}
			else {
				$("#symp_7").prop('checked', false);
				$("#symp_7").val("N");
				$("#others_symp").attr("disabled", true);
			}
			////////////////////////////////////		

			if (obj['trt_nutri'] == 'Y') {
				$("#med_thera").prop('checked', true);
				$("#med_thera").val("Y");
				$("input.medical").removeAttr("disabled");
			}
			else {
				$("#med_thera").prop('checked', false);
				$("#med_thera").val("N");
				$("input.medical").attr("disabled", true);

			}

			if (obj['mnt_w_educ'] == 'Y') {
				$("#with_formal").prop('checked', true);
				$("#with_formal").val("Y");
				$("#no_formal").attr("disabled", true);

			}
			else {
				$("#with_formal").prop('checked', false);
				$("#with_formal").val("N");
				$("#no_formal").removeAttr("disabled");

			}

			if (obj['mnt_wn_educ'] == 'Y') {
				$("#no_formal").prop('checked', true);
				$("#no_formal").val("Y");
				$("#with_formal").attr("disabled", true);

			}
			else {
				$("#no_formal").prop('checked', false);
				$("#no_formal").val("N");
				$("#with_formal").removeAttr("disabled");

			}
			///////////////////////////

			if (obj['trt_phy_act'] == 'Y') {
				$("#physical_act1").prop('checked', true);
				$("#physical_act1").val("Y");
				$("input.hala").removeAttr("disabled");
			}
			else {
				$("#physical_act1").prop('checked', false);
				$("#physical_act1").val("N");
				$("input.hala").attr("disabled", true);
			}
			///////////////////////////
			if (obj['trt_oral_anti'] == 'Y') {
				$("#oral_hypo").prop('checked', true);
				$("#oral_hypo").val("Y");
				$("input.oral").removeAttr("disabled");

			}
			else {
				$("#oral_hypo").prop('checked', false);
				$("#oral_hypo").val("N");
				$("input.oral").attr("disabled", true);

			}

			if (obj['oa_sulfon'] == 'Y') {
				$("#oral_1").prop('checked', true);
				$("#oral_1").val("Y");
			}
			else {
				$("#oral_1").prop('checked', false);
				$("#oral_1").val("N");
			}

			if (obj['oa_metfor'] == 'Y') {
				$("#oral_2").prop('checked', true);
				$("#oral_2").val("Y");
			}
			else {
				$("#oral_2").prop('checked', false);
				$("#oral_2").val("N");
			}

			if (obj['oa_acarbose'] == 'Y') {
				$("#oral_3").prop('checked', true);
				$("#oral_3").val("Y");
			}
			else {
				$("#oral_3").prop('checked', false);
				$("#oral_3").val("N");
			}

			if (obj['oa_tzd'] == 'Y') {
				$("#oral_4").prop('checked', true);
				$("#oral_4").val("Y");
			}
			else {
				$("#oral_4").prop('checked', false);
				$("#oral_4").val("N");
			}

			if (obj['oa_others'] == 'Y') {
				$("#oral_5").prop('checked', true);
				$("#oral_5").val("Y");
				$("#other_oral").removeAttr("disabled");
			}
			else {
				$("#oral_5").prop('checked', false);
				$("#oral_5").val("N");
				$("#other_oral").attr("disabled", true);
			}
			///////////////////////////////////////////////////			

			if (obj['insulin'] == 'Y') {
				$("#insulin").prop('checked', true);
				$("#insulin").val("Y");
				$("#type_insu").removeAttr("disabled");
				$("#unitsperday").removeAttr("disabled");

			}
			else {
				$("#insulin").prop('checked', false);
				$("#insulin").val("N");
				$("#type_insu").attr("disabled", true);
				$("#unitsperday").attr("disabled", true);
			}
			///////////////////////////////////////////////////					
			if (obj['surg_ampute'] == 'Y') {
				$("#sur_1").prop('checked', true);
				$("#sur_1").val("Y");
				$("input.amp").removeAttr("disabled");

			}
			else {
				$("#sur_1").prop('checked', false);
				$("#sur_1").val("N");
				$("input.amp").attr("disabled", true);
			}

			if (obj['surg_ampute_digital'] == 'Y') {
				$("#sur_2").prop('checked', true);
				$("#sur_2").val("Y");
				$("#sur_3").attr("disabled", true);

			}
			else {
				$("#sur_2").prop('checked', false);
				$("#sur_2").val("N");
				$("#sur_3").removeAttr("disabled");
			}

			if (obj['surg_ampute_bka'] == 'Y') {
				$("#sur_3").prop('checked', true);
				$("#sur_3").val("Y");
				$("#sur_2").attr("disabled", true);

			}
			else {
				$("#sur_3").prop('checked', false);
				$("#sur_3").val("N");
				$("#sur_2").removeAttr("disabled");
			}

			if (obj['surg_revasc'] == 'Y') {
				$("#sur_4").prop('checked', true);
				$("#sur_4").val("Y");
			}
			else {
				$("#sur_4").prop('checked', false);
				$("#sur_4").val("N");
			}

			if (obj['surg_others'] == 'Y') {
				$("#sur_5").prop('checked', true);
				$("#sur_5").val("Y");
				$("#others_sur").removeAttr("disabled");

			}
			else {
				$("#sur_5").prop('checked', false);
				$("#sur_5").val("N");
				$("#others_sur").attr("disabled", true);
			}
			////////////////////////////////////////////////////////////			
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
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

function Diabeteswizard() {
	var formType = $("#formIden").val();
	_diabetesWizard();
	_diabeteseventWizard(formType);
	_diabetesvalidateWizard();
};

function _diabetesWizard() {

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
				$.ajax({
					type: "POST",
					url: baseURL + "Diabetes/saveDiabetes",
					data: data,
					processData: false,
					contentType: false,
					success: function (data, response) {
						window.location.replace(baseURL + "Diabetes");
						toastr.success('Successfully Saved! ', 'Success');
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

function _diabeteseventWizard(type) {
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

function _diabetesvalidateWizard() {
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

