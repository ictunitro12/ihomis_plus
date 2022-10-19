var Module=$('#module').val();

function checkFwri(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../FWRI/checkFWRI/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');		
			}
			else
			{ 
				initFwri(enccode,hpercode);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
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



function initFwri(enccode,hpercode)
{	
	Fwriwizard();
	CityInj();
	_validateWizard();
	SelDiagnosis();
	getPatientData(enccode, hpercode);
	Patient_Address(hpercode);
	SelFireworks();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	$('#enccode').val(enccode);


}

function initFWRIEdit(enccode,hpercode)
{
	Fwriwizard();
	_validateWizard();
	initcheck();
	SelDiagnosis();
	getFWRIData(enccode);
	Patient_Address(hpercode);
	PatientInjuryFWRI(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$('#hey').attr('disabled', true);
}


function PatientInjuryFWRI(hpercode)
{
	$.ajax({
		type: "POST",
		url: baseURL+"FWRI/PatientInjuryFWRI/"+hpercode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			console.log(status);
			console.log(data);
			var obj = $.parseJSON(data);
			$('#street_inj').val(obj['plc_patstr']);
			var str = obj['plc_regcode'].substring(0,2);
			setRegionInj(str);
			setRegionInj(obj['poi_provcode']);
			$('#selProvInj').removeAttr("disabled");
			setCityInj(obj['poi_citycode']);
			$('#selCityInj').removeAttr("disabled");
			setBrgyInj(obj['poi_bgycode'])
		},
	});
}

function FWRIPatientInfo(hpercode)
{
	var obj="";
	$.ajax({
		type: "POST",
		url: baseURL+"FWRI/FWRIPatientInformation/"+hpercode,
		data: "JSON",
		async:false,
		success: function(data)
		{
			obj = $.parseJSON(data);
		},
		error: function(data)
		{
			toastr.error('Error:'+' '+data.status+' '+data.statusText);
		}
	});
	return obj;
}


function getPatientData(enccode, hpercode)
{
	$.ajax({
		url: baseURL + "FWRI/getPatientData/"+enccode + "/" + hpercode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);


			var today = new Date();
			var yyyy = today.getFullYear();

			
			var num='000000001';
			for (var i ; i >= 0; i++) {
				num[i];
			}
			$('#formIden').val('insert');
			$('#incident_date').val(getTimeLocale());
			$("#dateasof").val(getTimeLocale());
			$('#id').val(yyyy+ num);
			$('#formIden').val('insert');
			$('#newfhud').val(obj['newfhudcode']);
			$('#encountercode').val(obj['enccode']);
			$('#percode').val(obj['hpercode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#info_telno').val(obj['Landline']);
			$('#inj_diag').val(obj['diagtext']);
			$("#info_sex option[value='" + obj['patsex']+"']").attr("selected","selected");
			$("#inj_dispafter option[value='" + obj['dispcode']+"']").attr("selected","selected");

			var dob = setTimeLocale(obj['patbdate']);
			var ages= AgeCompute(dob);
			
			var consultdate = setTimeLocale(obj['consult_date']);

			console.log(consultdate);
			console.log(dob);
			$("#consult_date").val(consultdate);
			$("#info_dob").val(dob);


		},
		error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
}

function getFWRIData(enccode)
{

	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "FWRI/getFWRIData/"+enctr,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);

			setDiagnosis(obj['diagnosis']);
			setFireworks(obj['firecracker_code']);
			setFacility(obj['reffered_from']);
			setFacility2(obj['transferred_to']);
			setFacility3(obj['transferred_to']);
			setCityInj(obj['poi_citycode']);
			


			$('#id').val(obj['reg_no']);
			$('#newfhud').val(obj['userid']);
			$('#encountercode').val(obj['enccode']);
			$('#percode').val(obj['hosp_no']);
			$('#id').val(obj['reg_no']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#info_year').val(obj['patage']);
			$('#info_day').val(obj['patagedy']);
			$('#info_telno').val(obj['telephone_no']);

			$('#incident_ifrefer').val(obj['reffered_from']);
			$('#incident_otherspec').val(obj['place_of_occurence_others']);

			$('#info_street').val(obj['pat_str']);
			$('#selBrgy').val(obj['cc_brgy']);
			$('#selCity').val(obj['cc_city']);
			$('#selProv').val(obj['cc_prov']);
			$('#selReg').val(obj['cc_region']);

			$('#inj_street').val(obj['plc_patstr']);
			$('#inj_selBrgy').val(obj['place_brgy']);
			$('#inj_selCity').val(obj['place_city']);
			$('#inj_selProv').val(obj['place_prov']);
			$('#inj_selReg').val(obj['place_region']);
			
			var gender=sex(obj['sex']);
			$('#selRel').val(obj['relcode']);
			$('#inj_namefire').val(obj['firecracker_code']);
			$('#inj_othtreat').val(obj['given_others']);
			$('#inj_dispaft').val(obj['transferred_to']);
			$('#incident_date').val(obj['inj_date']);

			$("#info_sex option[value='" + obj['sex']+"']").attr("selected","selected");
			$("#inj_liquor option[value='" + obj['liquor']+"']").attr("selected","selected");
			$("#incident_refer option[value='" + obj['referral']+"']").attr("selected","selected");
			$("#incident_placeoccur option[value='" + obj['place_of_occurence']+"']").attr("selected","selected");
			$("#incident_involve option[value='" + obj['involve_code']+"']").attr("selected","selected");
			$("#incident_nature option[value='" + obj['typeof_injurycode']+"']").attr("selected","selected");
			$("#incident_multipleinj option[value='" + obj['multi_inj']+"']").attr("selected","selected");
			$("#inj_dispafter option[value='" + obj['disposition_code']+"']").attr("selected","selected");
			$("#inj_dispaftout option[value='" + obj['outcome']+"']").attr("selected","selected");
			$("#inj_aware option[value='" + obj['aware']+"']").attr("selected","selected");
			$("#inj_material option[value='" + obj['educ_material']+"']").attr("selected","selected");


			var dob = obj['birthdate'];
			var dateofbirth = ((dob == "1970-01-01 00:00:00") || (dob == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			var ages= AgeCompute(dateofbirth);
			$('#info_dob').val(dateofbirth);

			var dateasof = obj['date_report'];
			var dateas = ((dateasof == "1970-01-01 00:00:00") || (dateasof == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dateasof);
			$("#dateasof").val(dateas);

			var injdate = obj['inj_date'];
			var datinj = ((injdate == "1970-01-01 00:00:00") || (injdate == null)) ? "0000-00-00 00:00:00" : setTimeLocale(injdate);
			$("#incident_date").val(datinj);

			var consdte = obj['trt_date'];
			var datcons = ((consdte == "1970-01-01 00:00:00") || (consdte == null)) ? "0000-00-00 00:00:00" : setTimeLocale(consdte);
			$("#consult_date").val(datcons);

			var datedied = obj['date_died'];
			var datdied = ((datedied == "1970-01-01 00:00:00") || (datedied == null)) ? "0000-00-00 00:00:00" : setTimeLocale(datedied);
			$("#inj_datedied").val(datdied);


			if (obj['outcome'] == '2')
			{
				$('#inj_datedied').removeAttr("disabled");
			}
			else 
			{
				$('#inj_datedied').attr("disabled", true);
			}

/////////////////////////////////////////

if (obj['place_of_occurence'] == '4')
{
	$('#incident_otherspec').removeAttr("disabled");
}
else 
{
	$('#incident_otherspec').attr("disabled", true);
}

/////////////////////////////////////////////////////////


if (obj['if_fireworks_related'] == 'Y')
{
	$("#inj_withamp").prop('checked', true);
	$("#inj_withamp").val('Y');
}
else 
{
	$("#inj_withamp").prop('checked', false);
	$("#inj_withamp").val('N');
}


if (obj['if_fireworks_related_2'] == 'Y')
{
	$("#inj_noamp").val('Y');
	$("#inj_noamp").prop('checked', true);
}
else 
{
	$("#inj_noamp").val('N');
	$("#inj_noamp").prop('checked', false);
}


if (obj['if_fireworks_related_3'] == 'Y')
{
	$("#inj_typeeye").val('Y');
	$("#inj_typeeye").prop('checked', true);
}
else 
{
	$("#inj_typeeye").val('N');
	$("#inj_typeeye").prop('checked', false);
}

/////////////////////////////////////////////////////////		

if (obj['analoc_head'] == 'Y')
{
	$("#inj_head").val('Y');
	$("#inj_head").prop('checked', true);
}
else 
{
	$("#inj_head").val('N');
	$("#inj_head").prop('checked', false);
}

if (obj['analoc_eye'] == 'Y')
{
	$("#inj_eye").val('Y');
	$("#inj_eye").prop('checked', true);
}
else 
{
	$("#inj_eye").val('N');
	$("#inj_eye").prop('checked', false);
}

if (obj['analoc_neck'] == 'Y')
{
	$("#inj_neck").val('Y');
	$("#inj_neck").prop('checked', true);
}
else 
{
	$("#inj_neck").val('N');
	$("#inj_neck").prop('checked', false);
}


if (obj['analoc_chest'] == 'Y')
{
	$("#inj_chest").val('Y');
	$("#inj_chest").prop('checked', true);
}
else 
{
	$("#inj_chest").val('N');
	$("#inj_chest").prop('checked', false);
}

if (obj['analoc_back'] == 'Y')
{
	$("#inj_back").val('Y');
	$("#inj_back").prop('checked', true);
}
else 
{
	$("#inj_back").val('N');
	$("#inj_back").prop('checked', false);
}

if (obj['analoc_abdomen'] == 'Y')
{
	$("#inj_abdomen").val('Y');
	$("#inj_abdomen").prop('checked', true);
}
else 
{
	$("#inj_abdomen").val('N');
	$("#inj_abdomen").prop('checked', false);
}

if (obj['analoc_buttocks'] == 'Y')
{
	$("#inj_buttocks").val('Y');
	$("#inj_buttocks").prop('checked', true);
}
else 
{
	$("#inj_buttocks").val('N');
	$("#inj_buttocks").prop('checked', false);
}

if (obj['analoc_hand'] == 'Y')
{
	$("#inj_hand").val('Y');
	$("#inj_hand").prop('checked', true);
}
else 
{
	$("#inj_hand").val('N');
	$("#inj_hand").prop('checked', false);
}

if (obj['analoc_pelvic'] == 'Y')
{
	$("#inj_pelvis").val('Y');
	$("#inj_pelvis").prop('checked', true);
}
else 
{
	$("#inj_pelvis").val('N');
	$("#inj_pelvis").prop('checked', false);
}

if (obj['analoc_thigh'] == 'Y')
{
	$("#inj_thigh").val('Y');
	$("#inj_thigh").prop('checked', true);
}
else 
{
	$("#inj_thigh").val('N');
	$("#inj_thigh").prop('checked', false);
}

if (obj['analoc_knee'] == 'Y')
{
	$("#inj_knee").val('Y');	
	$("#inj_knee").prop('checked', true);
}
else 
{
	$("#inj_knee").val('N');
	$("#inj_knee").prop('checked', false);
}

if (obj['analoc_legs'] == 'Y')
{
	$("#inj_legs").val('Y');
	$("#inj_legs").prop('checked', true);
}
else 
{
	$("#inj_legs").val('N');
	$("#inj_legs").prop('checked', false);
}

if (obj['analoc_foot'] == 'Y')
{
	$("#inj_foot").val('Y');
	$("#inj_foot").prop('checked', true);
}
else 
{
	$("#inj_foot").val('N');
	$("#inj_foot").prop('checked', false);
}

if (obj['analoc_forearm'] == 'Y')
{
	$("#inj_arm").val('Y');
	$("#inj_arm").prop('checked', true);
}
else 
{
	$("#inj_arm").val('N');
	$("#inj_arm").prop('checked', false);
}
//////////////////////////////////////////////////////////////
if (obj['treatment_code'] == 'Y')
{
	$("#inj_ats").val('Y');
	$("#inj_ats").prop('checked', true);
}
else 
{
	$("#inj_ats").val('N');
	$("#inj_ats").prop('checked', false);
}

if (obj['treatment_code2'] == 'Y')
{
	$("#inj_toxoid").val('Y');
	$("#inj_toxoid").prop('checked', true);
}
else 
{
	$("#inj_toxoid").val('N');
	$("#inj_toxoid").prop('checked', false);
}

if (obj['treatment_code7'] == 'Y')
{
	$("#inj_none").val('Y');
	$("#inj_none").prop('checked', true);
}
else 
{
	$("#inj_none").val('N');
	$("#inj_none").prop('checked', false);
}

if (obj['treatment_code3'] == 'Y')
{
	$("#inj_oth_spec").val('Y');
	$("#inj_oth_spec").prop('checked', true);
	$("#inj_othtreat").removeAttr("disabled", true);
}
else 
{
	$("#inj_oth_spec").val('N');
	$("#inj_oth_spec").prop('checked', false);
	$("#inj_othtreat").attr("disabled");
}
//////////////////////////////////////////////////////////////
if (obj['aware'] == 'Y')
{
	$('#inj_material').removeAttr("disabled");
}
else 
{
	$('#inj_material').attr("disabled", true);
}
//////////////////////////////////////////////////////////////
if (obj['typeof_injurycode'] == '10')
{
	$('input.typeinj').removeAttr("disabled");
}
else 
{
	$('input.typeinj').attr("disabled", true);
}
//////////////////////////////////////////////////////////////
if (obj['disposition_code'] == 'REFER')
{
	$("#selFac2").removeAttr("disabled");
}
else 
{
	$("#selFac2").attr("disabled", true);
}

if (obj['referral'] == 'Y')
{
	$("#selFac").removeAttr("disabled");
}
else 
{
	$("#selFac").attr("disabled", true);
}

},
error: function(response){
	toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
}});
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

function Fwriwizard()
{

	var btnFinish = $('<button type="button" name ="btnDone" id="btnDone"></button>')
	.text('Done')
	.addClass('btn btn-info btn-ladda btn-square')
	.on('click',function(){$('#FwriSummary').modal('show');
		FwriSummary();});

	var btnCancel = $('<button></button>').text('Reset')
	.addClass('btn btn-danger btn-ladda btn-square')
	.on('click',function(){ $('#smartwizard')
		.smartWizard("reset");
	});

	$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition){

		if(stepPosition === 'first')
		{
			$('#btnDone').prop('disabled', true);
			$("#prev-btn").addClass('disabled');
			$("#prev-btn").addClass('disabled');

		}
		else if(stepPosition === 'final')
		{
			$("#next-btn").addClass('disabled');
			$('#btnDone').prop('disabled', false);
		}
		else
		{
			$("#prev-btn").removeClass('disabled');
			$("#next-btn").removeClass('disabled');
			$('#btnDone').prop('disabled', true);
		}

	});


	$('#smartwizard').smartWizard({
		selected: 0 ,
		theme: 'circles',
		transitionEffect:'fade',
		showStepURLhash: false,
		transitionSpeed: '1500',
		toolbarSettings: 
		{
			toolbarPosition: 'top',
			toolbarExtraButtons: [btnFinish, btnCancel]
		}

	});
}

function _validateWizard()
{
	$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
		switch(stepNumber)
		{		
			case 0:
			if ($('#form-step-1').valid()) 
			{
				return true;
			}else 
			{
				return false; 
			}
			case 1:
			if ($('#form-step-2').valid()) 
			{
				return true;
			}else 
			{
				return false; 
			}
			case 2:
			if ($('#form-step-3').valid()) 
			{
				return true;
			}else 
			{
				return false; 
			}
			case 3:
			if ($('#form-step-4').valid()) 
			{
				return true;
			}else 
			{
				return false; 
			}
			case 4:
			if ($('#form-step-5').valid()) 
			{
				return true;
			}else 
			{
				return false; 
			}

			break;
		}
	});
}

$("#form-step-2").validate({
	rules: {
		street_inj:'required',
		selCityInj:'required',
		selProvInj:'required',
		selBrgyInj:'required',
		selRegInj:'required',
		incident_date:'required',
		consult_date:'required',

	},
	messages:{
		street_inj:'required',
		selCityInj:'required',
		selProvInj:'required',
		selBrgyInj:'required',
		selRegInj:'required',
		incident_date:'required',
		consult_date:'required',


	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
			error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-coreui-hidden-accessible'))
		{
			element=$("#sel" + element.attr("id") + "ul").parent();
			error.insertAfter(element.parent());
		}
		else 
		{
			error.insertAfter(element);
		}
	},

	highlight: function highlight(element) {

		$(element).addClass('is-invalid').removeClass('is-valid');
		if( $(element).hasClass('select2-offscreen'))
		{
			element=$("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},

	unhighlight: function unhighlight(element) {
		$(element).addClass('is-valid').removeClass('is-invalid');
		if( $(element).hasClass('select2-offscreen'))
		{
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	}  
});

$("#form-step-3").validate({
	rules: {
		incident_involve:'required',
		incident_nature:'required',
		inj_diag:'required',


	},
	messages:{
		incident_involve:'required',
		incident_nature:'required',
		inj_diag:'required',

	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
			error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-coreui-hidden-accessible'))
		{
			element=$("#sel" + element.attr("id") + "ul").parent();
			error.insertAfter(element.parent());
		}
		else 
		{
			error.insertAfter(element);
		}
	},

	highlight: function highlight(element) {

		$(element).addClass('is-invalid').removeClass('is-valid');
		if( $(element).hasClass('select2-offscreen'))
		{
			element=$("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},

	unhighlight: function unhighlight(element) {
		$(element).addClass('is-valid').removeClass('is-invalid');
		if( $(element).hasClass('select2-offscreen'))
		{
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	}  
});

$("#form-step-4").validate({
	rules: {
		inj_liquor:'required',


	},
	messages:{
		inj_liquor:'required',

	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
			error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-coreui-hidden-accessible'))
		{
			element=$("#sel" + element.attr("id") + "ul").parent();
			error.insertAfter(element.parent());
		}
		else 
		{
			error.insertAfter(element);
		}
	},

	highlight: function highlight(element) {

		$(element).addClass('is-invalid').removeClass('is-valid');
		if( $(element).hasClass('select2-offscreen'))
		{
			element=$("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},

	unhighlight: function unhighlight(element) {
		$(element).addClass('is-valid').removeClass('is-invalid');
		if( $(element).hasClass('select2-offscreen'))
		{
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	}  
});


function FwriSummary()
{ 	

	$('#saveenccode').val($('#encountercode').val());
	$('#savehpercode').val($('#percode').val());
	$('#formIdentif').val($('#formIden').val());

	$('#typ_dateasof').val($('#dateasof').val());
	$('#typ_newfhud').val($('#newfhud').val());
	$('#typ_id').val($('#id').val());

	$('#typ_info_lname').val($('#info_lname').val());
	$('#typ_info_fname').val($('#info_fname').val());
	$('#typ_info_mname').val($('#info_mname').val());
	$('#typ_info_sex').val($('#info_sex').val());
	$('#typ_info_dob').val($('#info_dob').val());
	$('#typ_info_telno').val($('#info_telno').val());

	$('#typ_info_year').val($('#info_year').val());
	$('#typ_info_month').val($('#info_month').val());
	$('#typ_info_day').val($('#info_day').val());

	$('#typ_info_street').val($('#info_street').val());
	$('#typ_selBrgy').val($('#selBrgy').val());
	$('#typ_selCity').val($('#selCity').val());
	$('#typ_selProv').val($('#selProv').val());
	$('#typ_selReg').val($('#selReg').val());

	$('#typ_incident_date').val($('#incident_date').val());
	$('#typ_consult_date').val($('#consult_date').val());
	$('#typ_incident_refer').val($('#incident_refer').val());
	$('#typ_selFac').val($('#selFac').val());

	$('#typ_incident_placeoccur').val($('#incident_placeoccur').val());
	$('#typ_incident_otherspec').val($('#incident_otherspec').val());

	$('#typ_street_inj').val($('#street_inj').val());
	$('#typ_selBrgyInj').val($('#selBrgyInj').val());
	$('#typ_selCityInj').val($('#selCityInj').val());
	$('#typ_selProvInj').val($('#selProvInj').val());
	$('#typ_selRegInj').val($('#selRegInj').val());

	$('#typ_incident_involve').val($('#incident_involve').val());
	$('#typ_incident_nature').val($('#incident_nature').val());

	$('#typ_inj_withamp').val($('#inj_withamp').val());
	$('#typ_inj_noamp').val($('#inj_noamp').val());
	$('#typ_inj_typeeye').val($('#inj_typeeye').val());

	$('#typ_inj_diag').val($('#diagICD_diag').val());//nicette
	$('#typ_incident_multipleinj').val($('#incident_multipleinj').val());

	$('#typ_inj_eye').val($('#inj_eye').val());
	$('#typ_inj_head').val($('#inj_head').val());
	$('#typ_inj_neck').val($('#inj_neck').val());
	$('#typ_inj_chest').val($('#inj_chest').val());
	$('#typ_inj_back').val($('#inj_back').val());
	$('#typ_inj_abdomen').val($('#inj_abdomen').val());
	$('#typ_inj_buttocks').val($('#inj_buttocks').val());

	$('#typ_inj_hand').val($('#inj_hand').val());
	$('#typ_inj_pelvis').val($('#inj_pelvis').val());
	$('#typ_inj_thigh').val($('#inj_thigh').val());
	$('#typ_inj_knee').val($('#inj_knee').val());
	$('#typ_inj_legs').val($('#inj_legs').val());
	$('#typ_inj_foot').val($('#inj_foot').val());
	$('#typ_inj_arm').val($('#inj_arm').val());

	$('#typ_selFire').val($('#selFire').val());
	$('#typ_inj_liquor').val($('#inj_liquor').val());

	$('#typ_inj_ats').val($('#inj_ats').val());
	$('#typ_inj_toxoid').val($('#inj_toxoid').val());
	$('#typ_inj_none').val($('#inj_none').val());
	$('#typ_inj_oth_spec').val($('#inj_oth_spec').val());
	$('#typ_inj_othtreat').val($('#inj_othtreat').val());

	$('#typ_inj_dispafter').val($('#inj_dispafter').val());
	$('#typ_selFac2').val($('#selFac2').val());
	$('#typ_inj_dispaftout').val($('#inj_dispaftout').val());
	$('#typ_inj_datedied').val($('#inj_datedied').val());
	$('#typ_inj_aware').val($('#inj_aware').val());
	$('#typ_inj_material').val($('#inj_material').val());
}



