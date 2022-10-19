var Module = $('#module').val();

function BlindnessList()
{
	var data = new Object();
	data.id = "BlindnessTable";
	data.link = baseURL+"Blindness/BlindnessList";
	data.type = "POST";
	data.coldef =[
	{
		targets: [0],
		visible: false,
	},
	{
		targets: [2,3,4,5],
		orderable:false,
		searchable:false,
	}
	];
	loadTable(data);
}

function BlindnessPatientInfo(enccode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "Blindness/BlindnessPatientInformation/" + enccode,
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

$("#BlindnessTable").on("click", ".ModalDeleteBlindness", function () {
	var data = $(this).data();
	console.log(data);
	var enccode = atob(data['enccode'])
	$('#DeleteBlindness').modal('show');
	$("#formIdentification").val('delete');
	$("#deletecode").val(enccode);

});

$("#BlindnessTable").on("click", ".ModalBlindness", function () {
	var base_url = $('#base_url').val();
	var data = $(this).data();
	console.log(data);

	var enccode = atob(data['enccode']);
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	$("#code").val(enccode);
	$('#ModalBlindness').modal('show');
	$('#BlindnessPDF').html('<embed src="' + base_url + "Blindness/BlindnessForm/" + enccode + '" frameborder="2" width="100%" height="800px" id="BlindnessPDF">');
});

$('#BlindnessTable').on('click', '.ModalPatientInfo', function () {
	$('#ModalPatientInfo').modal('show');
	var enccode = atob($(this).data('enccode'));
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	console.log(enccode);
	var obj = BlindnessPatientInfo(enccode);
	console.log(obj);
	$("#patname").text(obj['patient']);
	$("#hpercode").text(obj['h_patient_id']);
	$("#patsex").text((obj['sexx']));
	$("#patbdate").text(obj['birthday']);;
	$("#civilstat").text(obj['patcstat']);

	$("#consultdte").text(obj['consult_date']);
	$("#findag").text(obj['diagdesc']);
});

///////////////////////////////////////////////////////


function checkBlind(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../Blindness/checkBlind/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
			}
			else {
				initBlindness(enccode, hpercode);
			}
		},
		error: function (data) {
			alert('Please Try Again!');
		}
	});
}


function initBlindness(enccode, hpercode) {
	Blindwizard();
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

function initBlindnessEdit(enccode, hpercode) {
	var code = encodeURIComponent(encodeURIComponent(enccode));
	Blindwizard();
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
	getBlindnessData(enccode, hpercode);
	BlindnessAddress(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);
}


function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "Blindness/getPatientData/" + enccode + "/" + hpercode,
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
		url: baseURL + "Blindness/getConsultant/" + licno,
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
			$("#consult_license").val(obj['license']);
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
		url: baseURL + "Blindness/getCompletedBy/" + employeeid,
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


function BlindnessAddress(hpercode)
{
	$.ajax({
		type: "POST",
		url: baseURL+"Blindness/BlindnessAddress/"+hpercode,
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

function getBlindnessData(enccode, hpercode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	var percode = encodeURIComponent(encodeURIComponent(hpercode));
	console.log(enctr);
	console.log(percode);

	$.ajax({
		url: baseURL + "Blindness/getBlindnessData/" + enctr + "/" + percode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);

			$("#info_race option[value='" + obj['race_code'] + "']").attr("selected", "selected");
			$("#info_ethnic option[value='" + obj['ethnic_code'] + "']").attr("selected", "selected");
			$('#info_race_others').val(obj['race_others_specify']);
			$('#encountercode').val(obj['enccode']);
			$('#contact_email').val(obj['cp_email1']);

			$("#info_educat option[value='" + obj['educ_attain_code'] + "']").attr("selected", "selected");
			$("#info_typepat2 option[value='" + obj['typeopdref'] + "']").attr("selected", "selected");

			$('#info_company').val(obj['company']);
			$('#info_comrefno').val(obj['cr']);
			$('#chief_cons').val(obj['chief_complaint']);
			
			var complete = obj['date_completed'];
			var datecomplete = ((complete == "1970-01-01 00:00:00") || (complete == null)) ? "0000-00-00 00:00:00" : setTimeLocale(complete);
			$("#complete_Date").val(datecomplete);

			var cons = obj['consult_date'];
			var consultdate = ((cons == "1970-01-01 00:00:00") || (cons == null)) ? "0000-00-00 00:00:00" : setTimeLocale(cons);
			$("#dateconsult").val(consultdate);


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

			if (obj['educ_attain_code'] == 'OT') {
				$("#info_educat_spec").removeAttr('disabled');
				$('#info_educat_spec').val(obj['educ_others_specify']);
			}
			else {
				$("#info_educat_spec").attr('disabled', true);
			}

			if (obj['hvl'] == 'Y') {
				$("#his_con").prop('checked', true);
				$("#his_con").val("Y");
			}
			else {
				$("#his_con").prop('checked', false);
				$("#his_con").val("N");
			}

			if (obj['hvlacquired'] == 'Y') {
				$("#his_ac").prop('checked', true);
				$("#his_ac").val("Y");
			}
			else {
				$("#his_ac").prop('checked', false);
				$("#his_ac").val("N");
			}

			if (obj['hvlacute'] == 'Y') {
				$("#his_acu").prop('checked', true);
				$("#his_acu").val("Y");
			}
			else {
				$("#his_acu").prop('checked', false);
				$("#his_acu").val("N");
			}

			if (obj['hvlgradual'] == 'Y') {
				$("#his_gra").prop('checked', true);
				$("#his_gra").val("Y");
			}
			else {
				$("#his_gra").prop('checked', false);
				$("#his_gra").val("N");
			}

			if (obj['hvlunknown'] == 'Y') {
				$("#his_unkn").prop('checked', true);
				$("#his_unkn").val("Y");
			}
			else {
				$("#his_unkn").prop('checked', false);
				$("#his_unkn").val("N");
			}

			$("#deg_vis option[value='" + obj['dvlunaid'] + "']").attr("selected", "selected");
			/////////////////////////////////////////////////////////		
			if (obj['pesnosurg'] == 'Y') {
				$("#prev_no").prop('checked', true);
				$("#prev_no").val("Y");
			}
			else {
				$("#prev_no").prop('checked', false);
				$("#prev_no").val("N");
			}

			if (obj['pesnotacc'] == 'Y') {
				$("#prev_ass").prop('checked', true);
				$("#prev_ass").val("Y");
			}
			else {
				$("#prev_ass").prop('checked', false);
				$("#prev_ass").val("N");
			}


			if (obj['pestpresurg'] == 'Y') {
				$("#prev_type").removeAttr('disabled');	
				$("input.prev").removeAttr('disabled');			
				$("#prev_type").prop('checked', true);
				$("#prev_type").val("Y");				
				$("#prev_others_spec").removeAttr('disabled');

			}
			else {
				$("#prev_type").prop('checked', false);
				$("#prev_type").val("N");
				$("input.prev").attr('disabled', true);
				$("#prev_others_spec").attr('disabled', true);
			}

			if (obj['peseyelid'] == 'Y') {
				$("#prev_eyelid").removeAttr('disabled');
				$("#prev_eyelid").prop('checked', true);
				$("#prev_eyelid").val("Y");
			}
			else {
				$("#prev_eyelid").prop('checked', false);
				$("#prev_eyelid").val("N");
			}

			if (obj['pescataract'] == 'Y') {
				$("#prev_cataract").removeAttr('disabled');
				$("#prev_cataract").prop('checked', true);
				$("#prev_cataract").val("Y");
			}
			else {
				$("#prev_cataract").prop('checked', false);
				$("#prev_cataract").val("N");
			}

			if (obj['pesglaucoma'] == 'Y') {
				$("#prev_glaucoma").removeAttr('disabled');
				$("#prev_glaucoma").prop('checked', true);
				$("#prev_glaucoma").val("Y");
			}
			else {
				$("#prev_glaucoma").prop('checked', false);
				$("#prev_glaucoma").val("N");
			}

			if (obj['pescouching'] == 'Y') {
				$("#prev_couching").removeAttr('disabled');
				$("#prev_couching").prop('checked', true);
				$("#prev_couching").val("Y");
			}
			else {
				$("#prev_couching").prop('checked', false);
				$("#prev_couching").val("N");
			}

			if (obj['pesothers'] == 'Y') {
				$("#prev_others").removeAttr('disabled');
				$("#prev_others").prop('checked', true);
				$("#prev_others").val("Y");
				$("#prev_others_spec").removeAttr('disabled');

			}
			else {
				$("#prev_others").prop('checked', false);
				$("#prev_others").val("N");
				$("#prev_others_spec").attr('disabled', true);

			}


			$('#prev_others_spec').val(obj['pesothersspec']);

			/////////////////////////////////////////////////////////////////
			if (obj['dvlrighttest'] == 'Y') {
				$("#can_1").prop('checked', true);
				$("#can_1").val("Y");
			}
			else {
				$("#can_1").prop('checked', false);
				$("#can_1").val("N");
			}

			if (obj['dvllefttes'] == 'Y') {
				$("#can_2").prop('checked', true);
				$("#can_2").val("Y");
			}
			else {
				$("#can_2").prop('checked', false);
				$("#can_2").val("N");
			}

			if (obj['dvlrightlow'] == 'Y') {
				$("#low_1").prop('checked', true);
				$("#low_1").val("Y");
			}
			else {
				$("#low_1").prop('checked', false);
				$("#low_1").val("N");
			}

			if (obj['dvlleftlow'] == 'Y') {
				$("#low_2").prop('checked', true);
				$("#low_2").val("Y");
			}
			else {
				$("#low_2").prop('checked', false);
				$("#low_2").val("N");
			}

			if (obj['dvlrightblind'] == 'Y') {
				$("#blind_1").prop('checked', true);
				$("#blind_1").val("Y");
			}
			else {
				$("#blind_1").prop('checked', false);
				$("#blind_1").val("N");
			}

			if (obj['dvlleftblind'] == 'Y') {
				$("#blind_2").prop('checked', true);
				$("#blind_2").val("Y");
			}
			else {
				$("#blind_2").prop('checked', false);
				$("#blind_2").val("N");
			}

			if (obj['dvlrightbblind'] == 'Y') {
				$("#cannot_1").prop('checked', true);
				$("#cannot_1").val("Y");
			}
			else {
				$("#cannot_1").prop('checked', false);
				$("#cannot_1").val("N");
			}

			if (obj['dvlleftbblind'] == 'Y') {
				$("#cannot_2").prop('checked', true);
				$("#cannot_2").val("Y");
			}
			else {
				$("#cannot_2").prop('checked', false);
				$("#cannot_2").val("N");
			}

			if (obj['dvlrightbnblind'] == 'Y') {
				$("#cannotblind_1").prop('checked', true);
				$("#cannotblind_1").val("Y");
			}
			else {
				$("#cannotblind_1").prop('checked', false);
				$("#cannotblind_1").val("N");
			}

			if (obj['dvlleftbnblind'] == 'Y') {
				$("#cannotblind_2").prop('checked', true);
				$("#cannotblind_2").val("Y");
			}
			else {
				$("#cannotblind_2").prop('checked', false);
				$("#cannotblind_2").val("N");
			}

			if (obj['dvlrightref'] == 'Y') {
				$("#ref_1").prop('checked', true);
				$("#ref_1").val("Y");
			}
			else {
				$("#ref_1").prop('checked', false);
				$("#ref_1").val("N");
			}

			if (obj['dvlleftref'] == 'Y') {
				$("#ref_2").prop('checked', true);
				$("#ref_2").val("Y");
			}
			else {
				$("#ref_2").prop('checked', false);
				$("#ref_2").val("N");
			}

			///////////////////////////////////////////////////////////////	

			if (obj['clvremyopia'] == 'Y') {
				$("#myo_1").prop('checked', true);
				$("#myo_1").val("Y");
			}
			else {
				$("#myo_1").prop('checked', false);
				$("#myo_1").val("N");
			}

			if (obj['clvlemyopia'] == 'Y') {
				$("#myo_2").prop('checked', true);
				$("#myo_2").val("Y");
			}
			else {
				$("#myo_2").prop('checked', false);
				$("#myo_2").val("N");
			}

			if (obj['ucrenone'] == 'Y') {
				$("#under_no_1").prop('checked', true);
				$("#under_no_1").val("Y");
			}
			else {
				$("#under_no_1").prop('checked', false);
				$("#under_no_1").val("N");
			}

			if (obj['uclenone'] == 'Y') {
				$("#under_no_2").prop('checked', true);
				$("#under_no_2").val("Y");
			}
			else {
				$("#under_no_2").prop('checked', false);
				$("#under_no_2").val("N");
			}
			///////////////////////////////////////////////////////////////	
			if (obj['clvrehyper'] == 'Y') {
				$("#hyper_1").prop('checked', true);
				$("#hyper_1").val("Y");
			}
			else {
				$("#hyper_1").prop('checked', false);
				$("#hyper_1").val("N");
			}

			if (obj['clvlehyper'] == 'Y') {
				$("#hyper_2").prop('checked', true);
				$("#hyper_2").val("Y");
			}
			else {
				$("#hyper_2").prop('checked', false);
				$("#hyper_2").val("N");
			}

			///////////////////////////////////////////////////////////////	
			if (obj['ucreconge'] == 'Y') {
				$("#under_cong_1").prop('checked', true);
				$("#under_cong_1").val("Y");
			}
			else {
				$("#under_cong_1").prop('checked', false);
				$("#under_cong_1").val("N");
			}

			if (obj['ucleconge'] == 'Y') {
				$("#under_cong_2").prop('checked', true);
				$("#under_cong_2").val("Y");
			}
			else {
				$("#under_cong_2").prop('checked', false);
				$("#under_cong_2").val("N");
			}
			///////////////////////////////////////////////////////////////	
			if (obj['clvreastig'] == 'Y') {
				$("#astig_1").prop('checked', true);
				$("#astig_1").val("Y");
			}
			else {
				$("#astig_1").prop('checked', false);
				$("#astig_1").val("N");
			}

			if (obj['clvleastig'] == 'Y') {
				$("#astig_2").prop('checked', true);
				$("#astig_2").val("Y");
			}
			else {
				$("#astig_2").prop('checked', false);
				$("#astig_2").val("N");
			}

			if (obj['ucreoncho'] == 'Y') {
				$("#under_oncho_1").prop('checked', true);
				$("#under_oncho_1").val("Y");
			}
			else {
				$("#under_oncho_1").prop('checked', false);
				$("#under_oncho_1").val("N");
			}

			if (obj['ucleoncho'] == 'Y') {
				$("#under_oncho_2").prop('checked', true);
				$("#under_oncho_2").val("Y");
			}
			else {
				$("#under_oncho_2").prop('checked', false);
				$("#under_oncho_2").val("N");
			}

			///////////////////////////////////////////////////////////////	
			if (obj['clvremix'] == 'Y') {
				$("#mix_1").prop('checked', true);
				$("#mix_1").val("Y");
			}
			else {
				$("#mix_1").prop('checked', false);
				$("#mix_1").val("N");
			}

			if (obj['clvlemix'] == 'Y') {
				$("#mix_2").prop('checked', true);
				$("#mix_2").val("Y");
			}
			else {
				$("#mix_2").prop('checked', false);
				$("#mix_2").val("N");
			}

			if (obj['ucremeas'] == 'Y') {
				$("#under_measles_1").prop('checked', true);
				$("#under_measles_1").val("Y");
			}
			else {
				$("#under_measles_1").prop('checked', false);
				$("#under_measles_1").val("N");
			}

			if (obj['uclemeas'] == 'Y') {
				$("#under_measles_2").prop('checked', true);
				$("#under_measles_2").val("Y");
			}
			else {
				$("#under_measles_2").prop('checked', false);
				$("#under_measles_2").val("N");
			}


			///////////////////////////////////////////////////////////////	

			if (obj['clvrepres'] == 'Y') {
				$("#pres_1").prop('checked', true);
				$("#pres_1").val("Y");
			}
			else {
				$("#pres_1").prop('checked', false);
				$("#pres_1").val("N");
			}

			if (obj['clvlepres'] == 'Y') {
				$("#pres_2").prop('checked', true);
				$("#pres_2").val("Y");
			}
			else {
				$("#pres_2").prop('checked', false);
				$("#pres_2").val("N");
			}

			if (obj['ucresurgproc'] == 'Y') {
				$("#under_surg_1").prop('checked', true);
				$("#under_surg_1").val("Y");
			}
			else {
				$("#under_surg_1").prop('checked', false);
				$("#under_surg_1").val("N");
			}

			if (obj['uclesurgproc'] == 'Y') {
				$("#under_surg_2").prop('checked', true);
				$("#under_surg_2").val("Y");
			}
			else {
				$("#under_surg_2").prop('checked', false);
				$("#under_surg_2").val("N");
			}

			///////////////////////////////////////////////////////////////	
			if (obj['clvreamb'] == 'Y') {
				$("#amby_1").prop('checked', true);
				$("#amby_1").val("Y");
			}
			else {
				$("#amby_1").prop('checked', false);
				$("#amby_1").val("N");
			}

			if (obj['clvleamb'] == 'Y') {
				$("#amby_2").prop('checked', true);
				$("#amby_2").val("Y");
			}
			else {
				$("#amby_2").prop('checked', false);
				$("#amby_2").val("N");
			}

			if (obj['ucretracho'] == 'Y') {
				$("#under_trach_1").prop('checked', true);
				$("#under_trach_1").val("Y");
			}
			else {
				$("#under_trach_1").prop('checked', false);
				$("#under_trach_1").val("N");
			}

			if (obj['ucletracho'] == 'Y') {
				$("#under_trach_2").prop('checked', true);
				$("#under_trach_2").val("Y");
			}
			else {
				$("#under_trach_2").prop('checked', false);
				$("#under_trach_2").val("N");
			}

			if (obj['ucrediab'] == 'Y') {
				$("#under_diab_1").prop('checked', true);
				$("#under_diab_1").val("Y");
			}
			else {
				$("#under_diab_1").prop('checked', false);
				$("#under_diab_1").val("N");
			}

			if (obj['uclediab'] == 'Y') {
				$("#under_diab_2").prop('checked', true);
				$("#under_diab_2").val("Y");
			}
			else {
				$("#under_diab_2").prop('checked', false);
				$("#under_diab_2").val("N");
			}

			///////////////////////////////////////////////////////////////	
			if (obj['drephysic'] == 'Y') {
				$("#physical_1").prop('checked', true);
				$("#physical_1").val("Y");
			}
			else {
				$("#physical_1").prop('checked', false);
				$("#physical_1").val("N");
			}

			if (obj['dlephysic'] == 'Y') {
				$("#physical_2").prop('checked', true);
				$("#physical_2").val("Y");
			}
			else {
				$("#physical_2").prop('checked', false);
				$("#physical_2").val("N");
			}
			///////////////////////////////////////////////////////////////	
			if (obj['drecataract'] == 'Y') {
				$("#cataract_1").prop('checked', true);
				$("#cataract_1").val("Y");
			}
			else {
				$("#cataract_1").prop('checked', false);
				$("#cataract_1").val("N");
			}

			if (obj['dlecataract'] == 'Y') {
				$("#cataract_2").prop('checked', true);
				$("#cataract_2").val("Y");
			}
			else {
				$("#cataract_2").prop('checked', false);
				$("#cataract_2").val("N");
			}

			if (obj['ucreinfect'] == 'Y') {
				$("#under_infect_1").prop('checked', true);
				$("#under_infect_1").val("Y");
			}
			else {
				$("#under_infect_1").prop('checked', false);
				$("#under_infect_1").val("N");
			}

			if (obj['ucleinfect'] == 'Y') {
				$("#under_infect_2").prop('checked', true);
				$("#under_infect_2").val("Y");
			}
			else {
				$("#under_infect_2").prop('checked', false);
				$("#under_infect_2").val("N");
			}


			///////////////////////////////////////////////////////////////	
			if (obj['dreuncpha'] == 'Y') {
				$("#uncorrect_1").prop('checked', true);
				$("#uncorrect_1").val("Y");
			}
			else {
				$("#uncorrect_1").prop('checked', false);
				$("#uncorrect_1").val("N");
			}

			if (obj['dleuncapha'] == 'Y') {
				$("#uncorrect_2").prop('checked', true);
				$("#uncorrect_2").val("Y");
			}
			else {
				$("#uncorrect_2").prop('checked', false);
				$("#uncorrect_2").val("N");
			}

			if (obj['ucrecarci'] == 'Y') {
				$("#under_carci_1").prop('checked', true);
				$("#under_carci_1").val("Y");
			}
			else {
				$("#under_carci_1").prop('checked', false);
				$("#under_carci_1").val("N");
			}

			if (obj['uclecarci'] == 'Y') {
				$("#under_carci_2").prop('checked', true);
				$("#under_carci_2").val("Y");
			}
			else {
				$("#under_carci_2").prop('checked', false);
				$("#under_carci_2").val("N");
			}

			///////////////////////////////////////////////////////////////	
			if (obj['drecoropa'] == 'Y') {
				$("#cornea_1").prop('checked', true);
				$("#cornea_1").val("Y");
			}
			else {
				$("#cornea_1").prop('checked', false);
				$("#cornea_1").val("N");
			}

			if (obj['dlecoropa'] == 'Y') {
				$("#cornea_2").prop('checked', true);
				$("#cornea_2").val("Y");
			}
			else {
				$("#cornea_2").prop('checked', false);
				$("#cornea_2").val("N");
			}

			if (obj['ucreotherretino'] == 'Y') {
				$("#under_retino_1").prop('checked', true);
				$("#under_retino_1").val("Y");
			}
			else {
				$("#under_retino_1").prop('checked', false);
				$("#under_retino_1").val("N");
			}

			if (obj['ucleotherretino'] == 'Y') {
				$("#under_retino_2").prop('checked', true);
				$("#under_retino_2").val("Y");
			}
			else {
				$("#under_retino_2").prop('checked', false);
				$("#under_retino_2").val("N");
			}

			if (obj['dreantuv'] == 'Y') {
				$("#anterior_1").prop('checked', true);
				$("#anterior_1").val("Y");
			}
			else {
				$("#anterior_1").prop('checked', false);
				$("#anterior_1").val("N");
			}

			if (obj['dleantuv'] == 'Y') {
				$("#anterior_2").prop('checked', true);
				$("#anterior_2").val("Y");
			}
			else {
				$("#anterior_2").prop('checked', false);
				$("#anterior_2").val("N");
			}

			if (obj['ucreretinoprema'] == 'Y') {
				$("#under_premature_1").prop('checked', true);
				$("#under_premature_1").val("Y");
			}
			else {
				$("#under_premature_1").prop('checked', false);
				$("#under_premature_1").val("N");
			}

			if (obj['urleretinoprema'] == 'Y') {
				$("#under_premature_2").prop('checked', true);
				$("#under_premature_2").val("Y");
			}
			else {
				$("#under_premature_2").prop('checked', false);
				$("#under_premature_2").val("N");
			}

			if (obj['dreglaucoma'] == 'Y') {
				$("#glaucoma_1").prop('checked', true);
				$("#glaucoma_1").val("Y");
			}
			else {
				$("#glaucoma_1").prop('checked', false);
				$("#glaucoma_1").val("N");
			}

			if (obj['dleglaucoma'] == 'Y') {
				$("#glaucoma_2").prop('checked', true);
				$("#glaucoma_2").val("Y");
			}
			else {
				$("#glaucoma_2").prop('checked', false);
				$("#glaucoma_2").val("N");
			}

			$('#underlying_others_spec').val(obj['ucreothersspec']);

			if (obj['ucreothers'] == 'Y') {
				$("#underlying_others_1").prop('checked', true);
				$("#underlying_others_1").val("Y");
			}
			else {
				$("#underlying_others_1").prop('checked', false);
				$("#underlying_others_1").val("N");
			}

			if (obj['ucleothers'] == 'Y') {
				$("#underlying_others_2").prop('checked', true);
				$("#underlying_others_2").val("Y");
			}
			else {
				$("#underlying_others_2").prop('checked', false);
				$("#underlying_others_2").val("N");
			}

			///////////////////////////////////////////////////////////////	

			if (obj['dreopatro'] == 'Y') {
				$("#optic_1").prop('checked', true);
				$("#optic_1").val("Y");
			}
			else {
				$("#optic_1").prop('checked', false);
				$("#optic_1").val("N");
			}

			if (obj['dleopatro'] == 'Y') {
				$("#optic_2").prop('checked', true);
				$("#optic_2").val("Y");
			}
			else {
				$("#optic_2").prop('checked', false);
				$("#optic_2").val("N");
			}

			if (obj['dreretino'] == 'Y') {
				$("#retinopat_1").prop('checked', true);
				$("#retinopat_1").val("Y");
			}
			else {
				$("#retinopat_1").prop('checked', false);
				$("#retinopat_1").val("N");
			}

			if (obj['dleretino'] == 'Y') {
				$("#retinopat_2").prop('checked', true);
				$("#retinopat_2").val("Y");
			}
			else {
				$("#retinopat_2").prop('checked', false);
				$("#retinopat_2").val("N");
			}

			if (obj['drechorio'] == 'Y') {
				$("#chorio_1").prop('checked', true);
				$("#chorio_1").val("Y");
			}
			else {
				$("#chorio_1").prop('checked', false);
				$("#chorio_1").val("N");
			}

			if (obj['dlechorio'] == 'Y') {
				$("#chorio_2").prop('checked', true);
				$("#chorio_2").val("Y");
			}
			else {
				$("#chorio_2").prop('checked', false);
				$("#chorio_2").val("N");
			}

			if (obj['dremacdegen'] == 'Y') {
				$("#macular_1").prop('checked', true);
				$("#macular_1").val("Y");
			}
			else {
				$("#macular_1").prop('checked', false);
				$("#macular_1").val("N");
			}

			if (obj['dlemacdegen'] == 'Y') {
				$("#macular_2").prop('checked', true);
				$("#macular_2").val("Y");
			}
			else {
				$("#macular_2").prop('checked', false);
				$("#macular_2").val("N");
			}

			if (obj['dreretdet'] == 'Y') {
				$("#retinal_1").prop('checked', true);
				$("#retinal_1").val("Y");
			}
			else {
				$("#retinal_1").prop('checked', false);
				$("#retinal_1").val("N");
			}

			if (obj['dleretdet'] == 'Y') {
				$("#retinal_2").prop('checked', true);
				$("#retinal_2").val("Y");
			}
			else {
				$("#retinal_2").prop('checked', false);
				$("#retinal_2").val("N");
			}

			if (obj['dretumors'] == 'Y') {
				$("#tumor_1").prop('checked', true);
				$("#tumor_1").val("Y");
			}
			else {
				$("#tumor_1").prop('checked', false);
				$("#tumor_1").val("N");
			}

			if (obj['dletumors'] == 'Y') {
				$("#tumor_2").prop('checked', true);
				$("#tumor_2").val("Y");
			}
			else {
				$("#tumor_2").prop('checked', false);
				$("#tumor_2").val("N");
			}

			if (obj['drenotexam'] == 'Y') {
				$("#notexam_1").prop('checked', true);
				$("#notexam_1").val("Y");
			}
			else {
				$("#notexam_1").prop('checked', false);
				$("#notexam_1").val("N");
			}

			if (obj['dlenotexam'] == 'Y') {
				$("#notexam_2").prop('checked', true);
				$("#notexam_2").val("Y");
			}
			else {
				$("#notexam_2").prop('checked', false);
				$("#notexam_2").val("N");
			}

			if (obj['dreothers'] == 'Y') {
				$("#dis_others_1").prop('checked', true);
				$("#dis_others_1").val("Y");
			}
			else {
				$("#dis_others_1").prop('checked', false);
				$("#dis_others_1").val("N");
			}

			if (obj['dleothers'] == 'Y') {
				$("#dis_others_2").prop('checked', true);
				$("#dis_others_2").val("Y");
			}
			else {
				$("#dis_others_2").prop('checked', false);
				$("#dis_others_2").val("N");
			}

			$('#dis_others_spec').val(obj['dreothersspec']);

			///////////////////////////////////////////////////////////////	
			if (obj['povltreat'] == 'Y') {
				$("#treat").prop('checked', true);
				$("#treat").val("Y");
			}
			else {
				$("#treat").prop('checked', false);
				$("#treat").val("N");
			}

			if (obj['povlguard'] == 'Y') {
				$("#guard").prop('checked', true);
				$("#guard").val("Y");
			}
			else {
				$("#guard").prop('checked', false);
				$("#guard").val("N");
			}

			if (obj['povluntreat'] == 'Y') {
				$("#untreat").prop('checked', true);
				$("#untreat").val("Y");
			}
			else {
				$("#untreat").prop('checked', false);
				$("#untreat").val("N");
			}

			if (obj['povlunknown'] == 'Y') {
				$("#unk").prop('checked', true);
				$("#unk").val("Y");
			}
			else {
				$("#unk").prop('checked', false);
				$("#unk").val("N");
			}

			if (obj['pdeyeglasses'] == 'Y') {
				$("#pros_eye").prop('checked', true);
				$("#pros_eye").val("Y");
			}
			else {
				$("#pros_eye").prop('checked', false);
				$("#pros_eye").val("N");
			}

			if (obj['pdcontlenses'] == 'Y') {
				$("#pros_contact").prop('checked', true);
				$("#pros_contact").val("Y");
			}
			else {
				$("#pros_contact").prop('checked', false);
				$("#pros_contact").val("N");
			}

			if (obj['pdproseyes'] == 'Y') {
				$("#pros_eyees").prop('checked', true);
				$("#pros_eyees").val("Y");
			}
			else {
				$("#pros_eyees").prop('checked', false);
				$("#pros_eyees").val("N");
			}

			if (obj['pdother'] == 'Y') {
				$("#pros_other").prop('checked', true);
				$("#pros_other").val("Y");
				$("#pros_others").removeAttr("disabled");
			}
			else {
				$("#pros_other").prop('checked', false);
				$("#pros_other").val("N");
				$("#pros_others").attr("disabled", true);
				$("#pros_others").val("");

			}

			$('#pros_others').val(obj['pdotherspec']);

			///////////////////////////////////////////////////////////////////	
			$("#typ_cat option[value='" + obj['fccprim'] + "']").attr("selected", "selected");

			if (obj['fccprim'] == 'Y') {
				$("input.prim").removeAttr('disabled');
				$("input.sec").attr('disabled', true);
			}
			else if (obj['fccprim'] == 'N') {
				$("input.sec").removeAttr('disabled');
				$("input.prim").attr('disabled', true);
			}

			else {
				$("input.prim").attr('disabled', true);
				$("input.sec").attr('disabled', true);
			}



			if (obj['fccprimdev'] == 'Y') {
				$("#prim_dev").prop('checked', true);
				$("#prim_dev").val("Y");
			}
			else {
				$("#prim_dev").prop('checked', false);
				$("#prim_dev").val("N");

			}

			if (obj['fccprimsen'] == 'Y') {
				$("#prim_sen").prop('checked', true);
				$("#prim_sen").val("Y");
			}
			else {
				$("#prim_sen").prop('checked', false);
				$("#prim_sen").val("N");

			}

			if (obj['fccprimcong'] == 'Y') {
				$("#prim_con").prop('checked', true);
				$("#prim_con").val("Y");
			}
			else {
				$("#prim_con").prop('checked', false);
				$("#prim_con").val("N");

			}
			///////////////////////////////////////////////////////////////////	
			if (obj['fccsectrauma'] == 'Y') {
				$("#sec_tra").prop('checked', true);
				$("#sec_tra").val("Y");
			}
			else {
				$("#sec_tra").prop('checked', false);
				$("#sec_tra").val("N");
			}

			if (obj['fccsecinfect'] == 'Y') {
				$("#sec_infect").prop('checked', true);
				$("#sec_infect").val("Y");
			}
			else {
				$("#sec_infect").prop('checked', false);
				$("#sec_infect").val("N");
			}

			if (obj['fccsecsurg'] == 'Y') {
				$("#sec_surg").prop('checked', true);
				$("#sec_surg").val("Y");
			}
			else {
				$("#sec_surg").prop('checked', false);
				$("#sec_surg").val("N");
			}

			if (obj['fccsecglaucoma'] == 'Y') {
				$("#sec_glau").prop('checked', true);
				$("#sec_glau").val("Y");
			}
			else {
				$("#sec_glau").prop('checked', false);
				$("#sec_glau").val("N");
			}

			if (obj['fccsecothers'] == 'Y') {
				$("#sec_other").prop('checked', true);
				$("#sec_other").val("Y");
				$("#sec_others_spec").removeAttr("disabled");
			}
			else {
				$("#sec_other").prop('checked', false);
				$("#sec_other").val("N");
				$("#sec_others_spec").attr("disabled", true);

			}

			$('#sec_others_spec').val(obj['fccsecothersspec']);

			$('#vis_right').val(obj['vaprebestcor']);
			$('#vis_left').val(obj['vaplebestcor']);



			var opera = obj['dateofoptn'];
			var operaa = ((opera == "1970-01-01 00:00:00") || (opera == null)) ? "0000-00-00 00:00:00" : setTimeLocale(opera);
			$("#opera_dte").val(operaa);
			///////////////////////////////////////////////////////////////
			if (obj['eoright'] == 'Y') {
				$("#opera_right").prop('checked', true);
				$("#opera_right").val("Y");
			}
			else {
				$("#opera_right").prop('checked', false);
				$("#opera_right").val("N");
			}

			if (obj['eoleft'] == 'Y') {
				$("#opera_left").prop('checked', true);
				$("#opera_left").val("Y");
			}
			else {
				$("#opera_left").prop('checked', false);
				$("#opera_left").val("N");
			}

			if (obj['eoboth'] == 'Y') {
				$("#opera_both").prop('checked', true);
				$("#opera_both").val("Y");
			}
			else {
				$("#opera_both").prop('checked', false);
				$("#opera_both").val("N");
			}

			$('#name_surg').val(obj['nameofsurgeon']);
			$('#comp_surg').val(obj['compsurg']);
			$('#final_icd').val(obj['icd_10']);
			$("#dispos option[value='" + obj['dispose_code'] + "']").attr("selected", "selected");



			///////////////////////////////////////////////////////////////

			if (obj['tcsrewithicce'] == 'Y') {
				$("#icce_1").prop('checked', true);
				$("#icce_1").val("Y");
			}
			else {
				$("#icce_1").prop('checked', false);
				$("#icce_1").val("N");
			}

			if (obj['tcsrewoicce'] == 'Y') {
				$("#icce_2").prop('checked', true);
				$("#icce_2").val("Y");
			}
			else {
				$("#icce_2").prop('checked', false);
				$("#icce_2").val("N");
			}

			if (obj['tcslewithicce'] == 'Y') {
				$("#icce_3").prop('checked', true);
				$("#icce_3").val("Y");
			}
			else {
				$("#icce_3").prop('checked', false);
				$("#icce_3").val("N");
			}

			if (obj['tcslewoicce'] == 'Y') {
				$("#icce_4").prop('checked', true);
				$("#icce_4").val("Y");
			}
			else {
				$("#icce_4").prop('checked', false);
				$("#icce_4").val("N");
			}

			///////////////////////////////////////////////////////////////	
			if (obj['tcsrewithecce'] == 'Y') {
				$("#ecce_1").prop('checked', true);
				$("#ecce_1").val("Y");
			}
			else {
				$("#ecce_1").prop('checked', false);
				$("#ecce_1").val("N");
			}

			if (obj['tcsrewoeicce'] == 'Y') {
				$("#ecce_2").prop('checked', true);
				$("#ecce_2").val("Y");
			}
			else {
				$("#ecce_2").prop('checked', false);
				$("#ecce_2").val("N");
			}

			if (obj['tcslewithecce'] == 'Y') {
				$("#ecce_3").prop('checked', true);
				$("#ecce_3").val("Y");
			}
			else {
				$("#ecce_3").prop('checked', false);
				$("#ecce_3").val("N");
			}

			if (obj['tcslewoecce'] == 'Y') {
				$("#ecce_4").prop('checked', true);
				$("#ecce_4").val("Y");
			}
			else {
				$("#ecce_4").prop('checked', false);
				$("#ecce_4").val("N");
			}

			///////////////////////////////////////////////////////////////	
			if (obj['tcsrewithsics'] == 'Y') {
				$("#sics_1").prop('checked', true);
				$("#sics_1").val("Y");
			}
			else {
				$("#sics_1").prop('checked', false);
				$("#sics_1").val("N");
			}

			if (obj['tcsrewosics'] == 'Y') {
				$("#sics_2").prop('checked', true);
				$("#sics_2").val("Y");
			}
			else {
				$("#sics_2").prop('checked', false);
				$("#sics_2").val("N");
			}

			if (obj['tcslewithsics'] == 'Y') {
				$("#sics_3").prop('checked', true);
				$("#sics_3").val("Y");
			}
			else {
				$("#sics_3").prop('checked', false);
				$("#sics_3").val("N");
			}

			if (obj['tcslewosics'] == 'Y') {
				$("#sics_4").prop('checked', true);
				$("#sics_4").val("Y");
			}
			else {
				$("#sics_4").prop('checked', false);
				$("#sics_4").val("N");
			}


			////////////////////////////////////////////////////////////////////
			if (obj['tcsrewithphaco'] == 'Y') {
				$("#phaco_1").prop('checked', true);
				$("#phaco_1").val("Y");
			}
			else {
				$("#phaco_1").prop('checked', false);
				$("#phaco_1").val("N");
			}

			if (obj['tcsrewophaco'] == 'Y') {
				$("#phaco_2").prop('checked', true);
				$("#phaco_2").val("Y");
			}
			else {
				$("#phaco_2").prop('checked', false);
				$("#phaco_2").val("N");
			}

			if (obj['tcslewithphaco'] == 'Y') {
				$("#phaco_3").prop('checked', true);
				$("#phaco_3").val("Y");
			}
			else {
				$("#phaco_3").prop('checked', false);
				$("#phaco_3").val("N");
			}

			if (obj['tcslewophaco'] == 'Y') {
				$("#phaco_4").prop('checked', true);
				$("#phaco_4").val("Y");
			}
			else {
				$("#phaco_4").prop('checked', false);
				$("#phaco_4").val("N");
			}


			///////////////////////////////////////////////////////////////	

			$('#consult_dept').val(obj['department']);
			$('#consult_landline').val(obj['cons_landline']);
			$('#consult_mobile').val(obj['cons_mobile']);
			$('#consult_email').val(obj['cons_email']);
			$('#consult_license').val(obj['cons_license']);


			$('#complete_email').val(obj['comp_email']);
			$('#complete_landline').val(obj['comp_landline']);
			$('#complete_mobile').val(obj['compl_mobile']);
			$('#complete_desig').val(obj['cdepartment']);

				//additional march 11, 2022 nicette
				if (obj['uctb'] == 'Y') {
					$("#under_diab_tb").prop('checked', true);
					$("#under_diab_tb").val("Y");
				}
				else {
					$("#under_diab_tb").prop('checked', false);
					$("#under_diab_tb").val("N");
				}

				if (obj['uctb'] == 'Y') {
					$("#under_diab_trac").prop('checked', true);
					$("#under_diab_trac").val("Y");
				}
				else {
					$("#under_diab_trac").prop('checked', false);
					$("#under_diab_trac").val("N");
				}


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


function Blindwizard() {
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
				url: baseURL + "Blindness/saveBlind",
				data: data,
				processData: false,
				contentType: false,
				success: function (data, response) {
					window.location.replace(baseURL + "Blindness");
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
		}
	});
}

