var Module = $('#module').val();

function checkCad(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../CAD/checkCad/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
			}
			else {
				initCad(enccode, hpercode);
			}
		},
		error: function (data) {
			alert('Please Try Again!');
		}
	});
}

function initCad(enccode, hpercode) {
	Coronarywizard();
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
	calculateBMI();
	CityConsult();
	CityComplete();
	$('#enccode').val(enccode);
	$('#formIden').val('insert');

}

function initCADEdit(enccode, hpercode) {
	var code = encodeURIComponent(encodeURIComponent(enccode));
	Coronarywizard();
	initcheck();
	uppercase();
	_validateWizard();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	CityConsult();
	CityComplete();
	calculateBMI();
	getPatientData(code,hpercode);			
	PatientAddress(btoa(hpercode));
	PatientAddress2(btoa(hpercode));
	getCADData(enccode);
	CADAddress(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);
}

function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "CAD/getPatientData/" + enccode + "/" + hpercode,
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


function CADAddress(hpercode)
{
	$.ajax({
		type: "POST",
		url: baseURL+"CAD/CADAddress/"+hpercode,
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


function getCADData(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "Cad/getCADData/" + enctr,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);

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
			$('#hwWaist').val(obj['Waist_circum']);
			$('#classwaist').val(obj['Class']);
			$('#bpsys').val(obj['BPSystolic']);
			$('#bpdia').val(obj['BPDiastolic']);
			$("#choles option[value='" + obj['Chol_level'] + "']").attr("selected", "selected");

			$('#fam_mem').val(obj['FamMem']);
			$('#fam_memtype').val(obj['FamMemType']);

			$('#age_smoke').val(obj['AgeStart']);
			$('#num_smoke').val(obj['YearsSmoke']);
			$('#numyear_smoke').val(obj['SHSExposeYrs']);

			$('#physical_act_type').val(obj['TypeAct']);
			$('#physical_act_min').val(obj['MinPerExer']);
			$("#physical_act_freq option[value='" + obj['Frequency'] + "']").attr("selected", "selected");


			$('#drink_type').val(obj['DrinkAlcoType']);
			$('#drink_amount').val(obj['DrinkAlcoAmt']);
			$("#unit option[value='" + obj['DrinkAlcoUOM'] + "']").attr("selected", "selected");
			$("#alcohol_freq option[value='" + obj['DrinkAlcoFreq'] + "']").attr("selected", "selected");
			$('#age_alcohol').val(obj['AgeStartDrink']);
			$('#no_alcohol').val(obj['NoOfYearsDrink']);


			$('#finaldiag').val(obj['final_diagnosis']);
			$('#finalicd10').val(obj['icd_10']);
			$('#treat_give').val(obj['TreatGiven']);

			$("#dispos option[value='" + obj['dispose_code'] + "']").attr("selected", "selected");
			$("#deathreason option[value='" + obj['refreason_code2'] + "']").attr("selected", "selected");

			//////////////////////dito stop
			$('#prev_other').val(obj['PrevDiagOtherSpec']);

			$('#fish_specify').val(obj['DietFishSpec']);
			$("#fish_freq option[value='" + obj['DietFishFreq'] + "']").attr("selected", "selected");

			$('#rice_specify').val(obj['DietRiceSpec']);
			$("#rice_freq option[value='" + obj['DietRiceFreq'] + "']").attr("selected", "selected");

			$('#fats_specify').val(obj['DietFatsSpec']);
			$("#fats_freq option[value='" + obj['DietFatsFreq'] + "']").attr("selected", "selected");

			$('#fruits_specify').val(obj['DietFruitsSpec']);
			$("#fruits_freq option[value='" + obj['DietFruitsFreq'] + "']").attr("selected", "selected");

			$('#sugar_specify').val(obj['DietSugarSpec']);
			$("#sugar_freq option[value='" + obj['DietSugarFreq'] + "']").attr("selected", "selected");

			$('#milk_specify').val(obj['DietMilkSpec']);
			$("#milk_freq option[value='" + obj['DietMilkFreq'] + "']").attr("selected", "selected");

			$('#usu_other_specify').val(obj['DietOthersSpec']);
			$("#other_freq option[value='" + obj['DietOthersFreq'] + "']").attr("selected", "selected");


			$('#cad_doctor').val(obj['hfhudcode_from_sp']);
			$("#reasonrefer option[value='" + obj['refreason_code'] + "']").attr("selected", "selected");
			$('#cad_chief').val(obj['chief_complaint']);

			$('#symp_otherspec').val(obj['PSOthersSpec']);
			$('#diag_other_spec').val(obj['BDOthersSpec']);

			if (obj['ethnic_code'] == '10') {
				$("#info_ethnic_spec").removeAttr('disabled');
				$('#info_ethnic_spec').val(obj['ethnic_others_specify']);
			}
			else {
				$("#info_ethnic_spec").attr('disabled', true);
			}

			if (obj['race_code'] == '6') {
				$("#info_race_spec").removeAttr('disabled');
				$('#info_race_spec').val(obj['race_others_specify']);
			}
			else {
				$("#info_race_spec").attr('disabled', true);
			}

			if (obj['occup_code'] == 'OTHER') {
				$("#info_occup_spec").removeAttr('disabled');
				$('#info_occup_spec').val(obj['occup_others_specify']);
			}
			else {
				$("#info_occup_spec").attr('disabled', true);
			}

			if (obj['educ_attain_code'] == 'OT') {
				$("#info_educat_spec").removeAttr('disabled');
				$('#info_educat_spec').val(obj['educ_others_specify']);
			}
			else {
				$("#info_educat_spec").attr('disabled', true);
			}

			if (obj['referred_from'] == 'Y') {
				$("#ref_from").prop('checked', true);
				$("#ref_from").val("Y");
			}
			else {
				$("#ref_from").prop('checked', false);
				$("#ref_from").val("N");
			}


			if (obj['Smoking'] == 'Y') {
				$("#smoke").prop('checked', true);
				$("#smoke").val("Y");
				$("input.ssmoke").removeAttr("disabled");
			}
			else {
				$("#smoke").prop('checked', false);
				$("#smoke").val("N");
			}

			if (obj['SmokeLess'] == 'Y') {
				$("#less_smoke").val("Y");
				$("#less_smoke").prop('checked', true);
				$("#less_smoke").removeAttr("disabled");
				$("#more_smoke").attr("disabled", true);
			}
			else {
				$("#less_smoke").val("N");
				$("#less_smoke").prop('checked', false);
			}

			if (obj['SmokeMore'] == 'Y') {
				$("#more_smoke").val("Y");
				$("#more_smoke").prop('checked', true);
				$("#more_smoke").removeAttr("disabled");
				$("#less_smoke").attr("disabled", true);				
			}
			else {
				$("#more_smoke").val("N");
				$("#more_smoke").prop('checked', false);
			}

			if (obj['SHS'] == 'Y') {
				$("#shs_smoke").val("Y");
				$("#shs_smoke").prop('checked', true);
				$("#shs_smoke").removeAttr("disabled");
				$("#numyear_smoke").removeAttr("disabled");
			}
			else {
				$("#shs_smoke").val("N");
				$("#shs_smoke").prop('checked', false);
			}

			if (obj['SHSExpose'] == 'Y') {
				$("#expshs_smoke").val("Y");
				$("#expshs_smoke").prop('checked', true);
				$("#expshs_smoke").removeAttr("disabled");
			}
			else {
				$("#expshs_smoke").val("N");
				$("#expshs_smoke").prop('checked', false);
			}

			if (obj['PhyAct'] == 'Y') {
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
			//////////////////////////////////////////////////////////

			if (obj['Nausea'] == 'Y') {
				$("#nausea").prop('checked', true);
				$("#nausea").val("Y");
			}
			else {
				$("#nausea").prop('checked', false);
				$("#nausea").val("N");
			}

			if (obj['Vomit'] == 'Y') {
				$("#vomit").prop('checked', true);
				$("#vomit").val("Y");
			}
			else {
				$("#vomit").prop('checked', false);
				$("#vomit").val("N");
			}

			if (obj['Cough'] == 'Y') {
				$("#cough").prop('checked', true);
				$("#cough").val("Y");
			}
			else {
				$("#cough").prop('checked', false);
				$("#cough").val("N");
			}

			if (obj['JawPain'] == 'Y') {
				$("#jaw").prop('checked', true);
				$("#jaw").val("Y");
			}
			else {
				$("#jaw").prop('checked', false);
				$("#jaw").val("N");
			}

			if (obj['Dizzines'] == 'Y') {
				$("#dizzy").prop('checked', true);
				$("#dizzy").val("Y");
			}
			else {
				$("#dizzy").prop('checked', false);
				$("#dizzy").val("N");
			}

			if (obj['Anxiety'] == 'Y') {
				$("#anxiety").prop('checked', true);
				$("#anxiety").val("Y");
			}
			else {
				$("#anxiety").prop('checked', false);
				$("#anxiety").val("N");
			}

			if (obj['Palpitations'] == 'Y') {
				$("#palpi").prop('checked', true);
				$("#palpi").val("Y");
			}
			else {
				$("#palpi").prop('checked', false);
				$("#palpi").val("N");
			}

			if (obj['Orthopnea'] == 'Y') {
				$("#ortho").prop('checked', true);
				$("#ortho").val("Y");
			}
			else {
				$("#ortho").prop('checked', false);
				$("#ortho").val("N");
			}

			if (obj['ShortBreath'] == 'Y') {
				$("#short").prop('checked', true);
				$("#short").val("Y");
			}
			else {
				$("#short").prop('checked', false);
				$("#short").val("N");
			}

			if (obj['ChestPain'] == 'Y') {
				$("#chest").prop('checked', true);
				$("#chest").val("Y");
			}
			else {
				$("#chest").prop('checked', false);
				$("#chest").val("N");
			}

			if (obj['LeftArmNumb'] == 'Y') {
				$("#leftarm").prop('checked', true);
				$("#leftarm").val("Y");
			}
			else {
				$("#leftarm").prop('checked', false);
				$("#leftarm").val("N");
			}

			if (obj['Pallor'] == 'Y') {
				$("#pall").prop('checked', true);
				$("#pall").val("Y");
			}
			else {
				$("#pall").prop('checked', false);
				$("#pall").val("N");
			}

			if (obj['Diapohores'] == 'Y') {
				$("#cold").prop('checked', true);
				$("#cold").val("Y");
			}
			else {
				$("#cold").prop('checked', false);
				$("#cold").val("N");
			}

			if (obj['Edema'] == 'Y') {
				$("#edema").prop('checked', true);
				$("#edema").val("Y");
			}
			else {
				$("#edema").prop('checked', false);
				$("#edema").val("N");
			}

			if (obj['AbdoPain'] == 'Y') {
				$("#abdominal").prop('checked', true);
				$("#abdominal").val("Y");
			}
			else {
				$("#abdominal").prop('checked', false);
				$("#abdominal").val("N");
			}

			if (obj['FeelIndigest'] == 'Y') {
				$("#indigest").prop('checked', true);
				$("#indigest").val("Y");
			}
			else {
				$("#indigest").prop('checked', false);
				$("#indigest").val("N");
			}

			if (obj['EasyFatig'] == 'Y') {
				$("#easy").prop('checked', true);
				$("#easy").val("Y");
			}
			else {
				$("#easy").prop('checked', false);
				$("#easy").val("N");
			}

			if (obj['Numbness'] == 'Y') {
				$("#numb").prop('checked', true);
				$("#numb").val("Y");
			}
			else {
				$("#numb").prop('checked', false);
				$("#numb").val("N");
			}

			if (obj['Backache'] == 'Y') {
				$("#backache").prop('checked', true);
				$("#backache").val("Y");
			}
			else {
				$("#backache").prop('checked', false);
				$("#backache").val("N");
			}

			if (obj['Weakness'] == 'Y') {
				$("#weak").prop('checked', true);
				$("#weak").val("Y");
			}
			else {
				$("#weak").prop('checked', false);
				$("#weak").val("N");
			}

			if (obj['Fainting'] == 'Y') {
				$("#faint").prop('checked', true);
				$("#faint").val("Y");
			}
			else {
				$("#faint").prop('checked', false);
				$("#faint").val("N");
			}

			if (obj['Cyanosis'] == 'Y') {
				$("#cyan").prop('checked', true);
				$("#cyan").val("Y");
			}
			else {
				$("#cyan").prop('checked', false);
				$("#cyan").val("N");
			}

			if (obj['PSNone'] == 'Y') {
				$("#none").prop('checked', true);
				$("#none").val("Y");
			}
			else {
				$("#none").prop('checked', false);
				$("#none").val("N");
			}

			if (obj['PSOthers'] == 'Y') {
				$("#symp_other").prop('checked', true);
				$("#symp_other").val("Y");
				$("#symp_otherspec").removeAttr("disabled");
			}
			else {
				$("#symp_other").prop('checked', false);
				$("#symp_other").val("N");
			}

			if (obj['PhyExam'] == 'Y') {
				$("#diag_pe").prop('checked', true);
				$("#diag_pe").val("Y");
			}
			else {
				$("#diag_pe").prop('checked', false);
				$("#diag_pe").val("N");
			}

			if (obj['treadstress'] == 'Y') {
				$("#tread").prop('checked', true);
				$("#tread").val("Y");
			}
			else {
				$("#tread").prop('checked', false);
				$("#tread").val("N");
			}

			if (obj['RadioThal'] == 'Y') {
				$("#radio").prop('checked', true);
				$("#radio").val("Y");
			}
			else {
				$("#radio").prop('checked', false);
				$("#radio").val("N");
			}

			if (obj['ChestXRay'] == 'Y') {
				$("#xray").prop('checked', true);
				$("#xray").val("Y");
			}
			else {
				$("#xray").prop('checked', false);
				$("#xray").val("N");
			}

			if (obj['EchoCardio'] == 'Y') {
				$("#echocar").prop('checked', true);
				$("#echocar").val("Y");
			}
			else {
				$("#echocar").prop('checked', false);
				$("#echocar").val("N");
			}

			if (obj['CoroAngio'] == 'Y') {
				$("#corona").prop('checked', true);
				$("#corona").val("Y");
			}
			else {
				$("#corona").prop('checked', false);
				$("#corona").val("N");
			}

			if (obj['ElecCardio'] == 'Y') {
				$("#electro").prop('checked', true);
				$("#electro").val("Y");
			}
			else {
				$("#electro").prop('checked', false);
				$("#electro").val("N");
			}

			if (obj['HolterMon'] == 'Y') {
				$("#holter").prop('checked', true);
				$("#holter").val("Y");
			}
			else {
				$("#holter").prop('checked', false);
				$("#holter").val("N");
			}

			if (obj['CTAngio'] == 'Y') {
				$("#angio").prop('checked', true);
				$("#angio").val("Y");
			}
			else {
				$("#angio").prop('checked', false);
				$("#angio").val("N");
			}

			if (obj['ChestCTScan'] == 'Y') {
				$("#ctscan").prop('checked', true);
				$("#ctscan").val("Y");
			}
			else {
				$("#ctscan").prop('checked', false);
				$("#ctscan").val("N");
			}

			if (obj['BiochemCardia'] == 'Y') {
				$("#bio").prop('checked', true);
				$("#bio").val("Y");
			}
			else {
				$("#bio").prop('checked', false);
				$("#bio").val("N");
			}

			if (obj['BDOthers'] == 'Y') {
				$("#diag_other").prop('checked', true);
				$("#diag_other").val("Y");
				$("#diag_other_spec").removeAttr("disabled");
			}
			else {
				$("#diag_other").prop('checked', false);
				$("#diag_other").val("N");
			}



			if (obj['FamHisto'] == 'Y') {
				$("#family").prop('checked', true);
				$("#family").val("Y");
				$("input.famm").removeAttr("disabled");
			}
			else {
				$("#family").prop('checked', false);
				$("#family").val("N");
			}

			if (obj['DrinkAlco'] == 'Y') {
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



			////	
			if (obj['PrevDiag'] == 'Y') {
				$("#prev_diag").prop('checked', true);
				$("#prev_diag").val("Y");
				$("input.previousdiag").removeAttr("disabled");
			}
			else {
				$("#prev_diag").prop('checked', false);
				$("#prev_diag").val("N");
			}

			if (obj['ChronicCoron'] == 'Y') {
				$("#prev_1").prop('checked', true);
				$("#prev_1").val("Y");
			}
			else {
				$("#prev_1").prop('checked', false);
				$("#prev_1").val("N");
			}

			if (obj['HeartAttack'] == 'Y') {
				$("#prev_2").prop('checked', true);
				$("#prev_2").val("Y");
			}
			else {
				$("#prev_2").prop('checked', false);
				$("#prev_2").val("N");
			}

			if (obj['HighBlood'] == 'Y') {
				$("#prev_3").prop('checked', true);
				$("#prev_3").val("Y");
			}
			else {
				$("#prev_3").prop('checked', false);
				$("#prev_3").val("N");
			}

			if (obj['HeartRhythm'] == 'Y') {
				$("#prev_4").prop('checked', true);
				$("#prev_4").val("Y");
			}
			else {
				$("#prev_4").prop('checked', false);
				$("#prev_4").val("N");
			}

			if (obj['RheumHeart'] == 'Y') {
				$("#prev_5").prop('checked', true);
				$("#prev_5").val("Y");
			}
			else {
				$("#prev_5").prop('checked', false);
				$("#prev_5").val("N");
			}

			if (obj['CongenHeart'] == 'Y') {
				$("#prev_6").prop('checked', true);
				$("#prev_6").val("Y");
			}
			else {
				$("#prev_6").prop('checked', false);
				$("#prev_6").val("N");
			}

			if (obj['Cardiomypathy'] == 'Y') {
				$("#prev_7").prop('checked', true);
				$("#prev_7").val("Y");
			}
			else {
				$("#prev_7").prop('checked', false);
				$("#prev_7").val("N");
			}

			if (obj['COPD'] == 'Y') {
				$("#prev_8").prop('checked', true);
				$("#prev_8").val("Y");
			}
			else {
				$("#prev_8").prop('checked', false);
				$("#prev_8").val("N");
			}

			if (obj['PrevDiagOthers'] == 'Y') {
				$("#prev_9").prop('checked', true);
				$("#prev_9").val("Y");
				$("#prev_other").removeAttr("disabled");

			}
			else {
				$("#prev_9").prop('checked', false);
				$("#prev_9").val("N");
			}

			if (obj['PrevDiagnone'] == 'Y') {
				$("#prev_10").prop('checked', true);
				$("#prev_10").val("Y");
			}
			else {
				$("#prev_10").prop('checked', false);
				$("#prev_10").val("N");
			}

			////
			if (obj['DietFish'] == 'Y') {
				$("#fish").prop('checked', true);
				$("#fish").val("Y");
				$("#fish_specify").removeAttr("disabled");
				$("#fish_freq").removeAttr("disabled");
			}
			else {
				$("#fish").prop('checked', false);
				$("#fish").val("N");
			}

			if (obj['DietRice'] == 'Y') {
				$("#rice").prop('checked', true);
				$("#rice").val("Y");
				$("#rice_specify").removeAttr("disabled");
				$("#rice_freq").removeAttr("disabled");
			}
			else {
				$("#rice").prop('checked', false);
				$("#rice").val("N");
			}

			if (obj['DietFruits'] == 'Y') {
				$("#fruits").prop('checked', true);
				$("#fruits").val("Y");
				$("#fruits_specify").removeAttr("disabled");
				$("#fruits_freq").removeAttr("disabled");
			}
			else {
				$("#fruits").prop('checked', false);
				$("#fruits").val("N");
			}

			if (obj['DietFats'] == 'Y') {
				$("#fats").prop('checked', true);
				$("#fats").val("Y");
				$("#fats_specify").removeAttr("disabled");
				$("#fats_freq").removeAttr("disabled");
			}
			else {
				$("#fats").prop('checked', false);
				$("#fats").val("N");
			}

			if (obj['DietSugar'] == 'Y') {
				$("#sugar").prop('checked', true);
				$("#sugar").val("Y");
				$("#sugar_specify").removeAttr("disabled");
				$("#sugar_freq").removeAttr("disabled");
			}
			else {
				$("#sugar").prop('checked', false);
				$("#sugar").val("N");
			}

			if (obj['DietMilk'] == 'Y') {
				$("#milk").prop('checked', true);
				$("#milk").val("Y");
				$("#milk_specify").removeAttr("disabled");
				$("#milk_freq").removeAttr("disabled");
			}
			else {
				$("#milk").prop('checked', false);
				$("#milk").val("N");
			}

			if (obj['DietOthers'] == 'Y') {
				$("#usu_other").prop('checked', true);
				$("#usu_other").val("Y");
				$("#usu_other_specify").removeAttr("disabled");
				$("#other_freq").removeAttr("disabled");
			}
			else {
				$("#usu_other").prop('checked', false);
				$("#usu_other").val("N");
			}
			///////////////////////

			/////////

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

function Coronarywizard() {
	var formType = $("#formIden").val();
	console.log(formType);
	_initWizardCoronary();
	_eventWizard(formType);
	_validateWizard();
}


function _initWizardCoronary() {
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

			$.ajax({
				type: "POST",
				url: baseURL + "CAD/savecoronary",
				data: data,
				processData: false,
				contentType: false,
				success: function (data, response) {
					window.location.replace(baseURL + "CAD");
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
	.addClass('btn btn-danger btn-ladda btn-square')
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
			if ($('#form-step-3').valid()&& presentsymptoms_valid() && basisdiag_valid() == true) {
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


