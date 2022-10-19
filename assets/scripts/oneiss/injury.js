var Module=$('#module').val();

function checkInjury(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../Oneiss/checkInjury/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');		
			}
			else
			{ 
				initInjury(enccode,hpercode);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}


function initInjury(enccode,hpercode)
{	
	Injurywizard();
	_validateWizard();
	City();
	CityInj();
	CityTemp();
	SelReligion();
	SelFireworks();
	SelFacilities();
	SelFacilities2();
	SelFacilities3();
	SelDiagnosis();
	uppercase();
	getPatientData(enccode,hpercode);
	Patient_Address(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
	initcheck();
	
}


function initInjuryEdit(enccode,hpercode)
{
	Injurywizard();
	_validateWizard();
	initcheck();
	uppercase();
	getInjuryData(hpercode,enccode);
	Patient_Address(hpercode);
	PatientInjuryAddress(hpercode,enccode);
	PatientTemporaryAddress(hpercode,enccode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$('#hey').attr('disabled', true);
}


function InjuryPatientInfo(enccode)
{
	var obj="";
	$.ajax({
		type: "POST",
		url: baseURL+"Oneiss/InjuryPatientInfo/"+enccode,
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



function getPatientData(enccode,hpercode)
{
	
	$.ajax({
		url: baseURL + "Oneiss/getPatientData/"+enccode + "/" +hpercode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);
			
			var dob = setTimeLocale(obj['patbdate']);
			var ages= AgeCompute(dob);

			$('#encountercode').val(obj['enccode']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#selReg').val(obj['cc_brgy']);
			var gender=sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex']+"']").attr("selected","selected");
			
			var bplace = obj['patbplace'];
			$("#info_typepat option[value='" + obj['typeofpatient']+"']").attr("selected","selected");

			$('#info_bplace').val(obj['patbplace']);
			$('#selRel').val(obj['relcode']);
			$("#info_nat option[value='" + obj['natcode']+"']").attr("selected","selected");
			$("#info_cs option[value='" + obj['patcstat']+"']").attr("selected","selected");

			$('#newfhud').val(obj['newfhudcode']);

			var str = obj['hpercode'];
			console.log(str);
			var res = str.slice(12, 15);
			$('#info_natregno').val(res);

			$('#info_philhealth').val(obj['phicnum']);


			var dob = setTimeLocale(obj['patbdate']);
			var consultdate = setTimeLocale(obj['consult_date']);

			console.log(consultdate);
			console.log(dob);
			$("#consult_date").val(consultdate);
			$("#info_dob").val(dob);

			$("#finaldiag").val(obj['diagtext']);

			$("#dateasof").val(getTimeLocale());

			if( obj['typeofpatient'] == 'INPA') {
				$("#finaldiag").removeAttr("disabled");
				$("#pat_disp2").removeAttr("disabled");
				$("#selFac3").removeAttr("disabled");
				$("#inpat_oth").removeAttr("disabled");
				$("#pat_outcome2").removeAttr("disabled");
				$("#finalicd10").removeAttr("disabled");
				$("#external_diag").removeAttr("disabled");
				$("#pat_comment").removeAttr("disabled");
			}
			else  {       
				$("#finaldiag").attr("disabled", true);
				$("#pat_disp2").attr("disabled", true);
				$("#selFac3").attr("disabled", true);
				$("#inpat_oth").attr("disabled", true);
				$("#pat_outcome2").attr("disabled", true);
				$("#finalicd10").attr("disabled", true);
				$("#external_diag").attr("disabled", true);
				$("#pat_comment").attr("disabled", true);

			}
		},
		error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
}

function PatientInjuryAddress(hpercode, enccode)
{

	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	
	console.log(hpercode);
	console.log(enccode);
	$.ajax({
		type: "POST",
		url: baseURL+"Oneiss/PatientInjuryAddress/"+hpercode+ "/"+ enccode,
		data: "JSON",
		async:false,
		success: function(data,status){ 

			var obj = $.parseJSON(data);

			var str = obj['plc_regcode'].substring(0,2);
			setRegionInj(str);
			setRegionInj(obj['plc_provcode']);
			$('#selProvInj').removeAttr("disabled");
			setCityInj(obj['plc_ctycode']);
			$('#selCityInj').removeAttr("disabled");
		},
	});
}

function PatientTemporaryAddress(hpercode, enccode)
{
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	var enccode = encodeURIComponent(encodeURIComponent(enccode));

	$.ajax({
		type: "POST",
		url: baseURL+"Oneiss/PatientTemporaryAddress/"+hpercode+ "/" +enccode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			var obj = $.parseJSON(data);
			var str = obj['tregcode'].substring(0,2);
			setRegionTemp(str);

			console.log(str);

			setProvTemp(obj['tprovcode']);
			$('#selProvTemp').removeAttr("disabled");

			setCityTemp(obj['tcitycode']);
			$('#selCityTemp').removeAttr("disabled")
		},
		error: function(data,status){
		}
	});
}

function getInjuryData(hpercode,enccode)
{
	
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	var enccode = encodeURIComponent(encodeURIComponent(enccode));

	$.ajax({
		url: baseURL + "Oneiss/getInjuryData/"+hpercode+ "/" +enccode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);

			if( obj['type1'] == 'INPA') {
				$("#finaldiag").removeAttr("disabled");
				$("#pat_disp2").removeAttr("disabled");
				$("#selFac3").removeAttr("disabled");
				$("#inpat_oth").removeAttr("disabled");
				$("#pat_outcome2").removeAttr("disabled");
				$("#finalicd10").removeAttr("disabled");
				$("#external_diag").removeAttr("disabled");
				$("#pat_comment").removeAttr("disabled");
			}
			else  {       
				$("#finaldiag").attr("disabled", true);
				$("#pat_disp2").attr("disabled", true);
				$("#selFac3").attr("disabled", true);
				$("#inpat_oth").attr("disabled", true);
				$("#pat_outcome2").attr("disabled", true);
				$("#finalicd10").attr("disabled", true);
				$("#external_diag").attr("disabled", true);
				$("#pat_comment").attr("disabled", true);

			}


			setFireworks(obj['ext_firecracker']);
			setFacility(obj['ref_hosp_code']);
			setFacility2(obj['disp_er_sp']);
			setFacility3(obj['disp_inpat_sp']);
			setCityTemp(obj['tcitycode']);
			setCityInj(obj['plc_ctycode']);


			$('#newfhud').val(obj['userid']);
			$('#info_natregno').val(obj['reg_no']);
			$('#info_hosppat_idno').val(obj['hosp_no']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hospcaseno').val(obj['hosp_cas_no']);
			
			$("#info_typepat option[value='" + obj['type1']+"']").attr("selected","selected");
			$('#encountercode').val(obj['enccode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			var gender=sex(obj['sex']);
			$("#info_sex option[value='" + obj['sex']+"']").attr("selected","selected");
			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);

			var dob = obj['birthdate'];
			var dateofbirth = ((dob == "1970-01-01 00:00:00") || (dob == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			var ages= AgeCompute(dateofbirth);
			$('#info_dob').val(dateofbirth);


			var inj = obj['inj_date'];
			var injdate = ((inj == "1970-01-01 00:00:00") || (inj == null)) ? "0000-00-00 00:00:00" : setTimeLocale(inj);
			$("#incident_date").val(injdate);

			var cons = obj['trt_date'];
			var consdte = ((cons == "1970-01-01 00:00:00") || (cons == null)) ? "0000-00-00 00:00:00" : setTimeLocale(cons);
			$("#consult_date").val(consdte);

			var dateas = obj['trt_date'];
			var dateasof = ((dateas == "1970-01-01 00:00:00") || (dateas == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dateas);			
			$("#dateasof").val(dateasof);

			$("#injintent option[value='" + obj['injury_intent']+"']").attr("selected","selected");
			$("#injaid option[value='" + obj['firstaid']+"']").attr("selected","selected");

			$('#aid_what').val(obj['firstaid_others']);
			$('#aid_whom').val(obj['firstaid_others2']);
			
			$("#multinj option[value='" + obj['mult_inj']+"']").attr("selected","selected");

			$('#multi_1').val(obj['noi_abradtl']);
			$('#multi_2').val(obj['noi_avuldtl']);
			$('#multi_site').val(obj['noi_burndtl']);
			$('#multi_4').val(obj['noi_concussiondtl']);
			$('#multi_5').val(obj['noi_contudtl']);
			$('#multi_6').val(obj['noi_frcldtl']);
			$('#multi_7').val(obj['noi_fropdtl']);
			$('#multi_8').val(obj['noi_owoudtl']);
			$('#multi_9').val(obj['noi_ampdtl']);
			$('#multi_10').val(obj['noi_otherinj']);

			$('#ext_1').val(obj['ext_bite_sp']);
			$('#ext_2').val(obj['ext_gun_sp']);
			$('#ext_3').val(obj['ext_burn_sp']);
			$('#ext_4').val(obj['ext_chem_sp']);
			$('#ext_5').val(obj['ext_sharp_sp']);
			$('#ext_6').val(obj['ext_drown_sp']);
			$('#ext_7').val(obj['ext_expo_nature_sp']);
			$('#ext_8').val(obj['ext_falldtl']);
			$('#ext_9').val(obj['ext_firecracker_sp']);
			$('#ext_10').val(obj['ext_other_sp']);

			$('#veh_pat1').val(obj['pat_veh_sp']);
			$('#veh_col1').val(obj['etc_veh_sp']);
			$('#veh_position1').val(obj['pos_pat_sp']);
			$('#veh_placeoccur1').val(obj['poc_wp_spec']);
			$('#veh_act1').val(obj['act_etc_spec']);

			$('#oth_others_spec').val(obj['risk_etc_spec']);
			$('#safety_others_spec').val(obj['safe_other_sp']);

			$('#pat_physician').val(obj['ref_physician']);
			$('#pat_mode1').val(obj['stat_reachdtl']);
			$('#pat_initial').val(obj['init_impress']);

			$('#pat_icd_nat').val(obj['icd_10_nature_er']);
			$('#pat_icd_ext').val(obj['icd_10_external_er']);

			$('#pat_disp_oth').val(obj['disp_er_sp_oth']);
			
			$('#pat_findiag').val(obj['complete_diagnosis']);
			$('#inpat_oth').val(obj['disp_inpat_oth']);
			$('#pat_icd_nat2').val(obj['icd10_nature_inpatient']);
			$('#pat_icd_ext2').val(obj['icd_10_ext_inpatient']);
			$('#pat_comment').val(obj['comments']);

			$("#ext_burn1 option[value='" + obj['ext_burn']+"']").attr("selected","selected");
			$("#ext_drown1 option[value='" + obj['ext_drown']+"']").attr("selected","selected");
			$("#ext_expose1 option[value='" + obj['ext_expo_nature']+"']").attr("selected","selected");
			$("#ext_fall1 option[value='" + obj['ext_fall_prep']+"']").attr("selected","selected");
			
			$("#ext_transpo option[value='" + obj['pat_veh_type']+"']").attr("selected","selected");
			$("#ext_transpo1 option[value='" + obj['type_code']+"']").attr("selected","selected");

			$("#veh_pat option[value='" + obj['pat_veh']+"']").attr("selected","selected");
			$("#veh_col option[value='" + obj['etc_veh']+"']").attr("selected","selected");
			$("#veh_position option[value='" + obj['position_code']+"']").attr("selected","selected");
			$("#veh_placeoccur option[value='" + obj['poc_code']+"']").attr("selected","selected");
			$("#veh_act option[value='" + obj['activity_code']+"']").attr("selected","selected");

			$("#pat_trans option[value='" + obj['trans_ref']+"']").attr("selected","selected");
			$("#pat_refer option[value='" + obj['trans_ref2']+"']").attr("selected","selected");
			$("#pat_status option[value='" + obj['status_code']+"']").attr("selected","selected");
			$("#pat_mode option[value='" + obj['status_code2']+"']").attr("selected","selected");

			$("#pat_disp option[value='" + obj['disp_er']+"']").attr("selected","selected");
			$("#pat_outcome option[value='" + obj['outcome_er']+"']").attr("selected","selected");

			$("#pat_disp2 option[value='" + obj['disp_inpat']+"']").attr("selected","selected");
			$("#pat_outcome2 option[value='" + obj['outcome_inpat']+"']").attr("selected","selected");
			$("#pat_outcome2 option[value='" + obj['outcome_inpat']+"']").attr("selected","selected");



///////////////////////////////////////////////////////////////
if (obj['type_code'] == '10'){
	$("#veh_col").removeAttr("disabled");
	$("#veh_col1").removeAttr("disabled");
}
else {
	$('#veh_col').attr("disabled", true);
	$("#veh_col").val($("#veh_col option:first").val());
}

if (obj['etc_veh'] == '88'){
	$("#veh_col1").removeAttr("disabled");
}
else{
	$("#veh_col1").attr("disabled", true);
	$('#veh_col1').val(" ");
}


if (obj['pat_veh'] == '88'){
	$("#veh_pat1").removeAttr("disabled");
}
else {
	$("#veh_pat1").attr("disabled", true);
	$("#veh_pat1").val(" ");
}

if (obj['position_code'] == '88'){
	$("#veh_position1").removeAttr("disabled");
}
else {
	$("#veh_position1").attr("disabled", true);
	$("#veh_position1").val(" ");
}

if (obj['poc_code'] == '88' || obj['poc_code'] == '70'){
	$("#veh_placeoccur1").removeAttr("disabled");
}
else {
	$("#veh_placeoccur1").attr("disabled", true);
	$("#veh_placeoccur1").val(" ");
}

if (obj['activity_code'] == '88'){
	$("#veh_act1").removeAttr("disabled");
}
else {
	$("#veh_act1").attr("disabled", true);
	$("#veh_act1").val(" ");
}
//////////////////////////////////////////////////////////////////		
if (obj['disp_inpat'] == 'OTH'){
	$("#inpat_oth").removeAttr("disabled");
	$("#selFac3").attr("disabled", true);
}
else {
	$("#inpat_oth").attr("disabled", true);
	$("#inpat_oth").val(" ");
	$("#selFac3").removeAttr("disabled");
}

//////////////////////////////////////////////////////////////////			
if (obj['trans_ref'] == 'Y'){
	$('#pat_refer').removeAttr("disabled");
	$('#selFac').removeAttr("disabled");
	$('#pat_status').removeAttr("disabled");
	$('#pat_mode').removeAttr("disabled");
	$('#pat_disp').removeAttr("disabled");
	$('#pat_outcome').removeAttr("disabled");
	$('#pat_physician').removeAttr("disabled");
	$('#pat_initial').removeAttr("disabled");
	$('#pat_icd_nat').removeAttr("disabled");
	$('#pat_icd_ext').removeAttr("disabled");
	$('#pat_icd_ext').removeAttr("disabled");
}
else {
	$("#pat_refer").val($("#pat_refer option:first").val());
	$("#selFac").val($("#selFac option:first").val());
	$("#pat_status").val($("#pat_status option:first").val());
	$("#pat_mode").val($("#pat_mode option:first").val());
	$("#pat_disp").val($("#pat_disp option:first").val());
	$("#selFac2").val($("#selFac2 option:first").val());
	$("#hospital_ext_diag").val($("#hospital_ext_diag option:first").val());
	$("#hospital_diag").val($("#hospital_diag option:first").val());
	$("#pat_outcome").val($("#pat_outcome option:first").val());
	
	$('input.hos').val(" ");

	$('input.hos').attr("disabled", true);
	$('#pat_refer').attr("disabled", true);
	$('#selFac').attr("disabled", true);
	$('#pat_status').attr("disabled", true);
	$('#pat_mode').attr("disabled", true);
	$('#pat_disp').attr("disabled", true);
	$('#selFac2').attr("disabled", true);
	$('#hospital_ext_diag').attr("disabled", true);
	$('#pat_outcome ').attr("disabled", true);
}

if (obj['status_code2'] == '04'){
	$("#pat_mode1").removeAttr("disabled");
}
else {
	$("#pat_mode1").attr("disabled", true);
	$("#pat_mode1").val(" ");
}

if (obj['disp_er'] == 'REFER'){
	$('#selFac2').removeAttr("disabled");
}
else {
	$('#selFac2').attr("disabled", true);
	$("#selFac2").val($("#selFac2 option:first").val());
}


//////////////////////////////////////////////////////////////////
if (obj['mult_inj'] == 'Y')
{
	$("input.multi").removeAttr("disabled");
}
else 
{
	$("input.multi").attr("disabled", true);

}


if (obj['noi_abrasion'] == 'Y')
{
	$("#multi_abra").prop('checked', true);
	$("#multi_abra").val("Y");
	$("#multi_1").removeAttr("disabled");
	$("#multi_abra").removeAttr("disabled");
}
else 
{
	$("#multi_abra").prop('checked', false);
	$("#multi_abra").val("N");
}

if (obj['noi_avulsion'] == 'Y')
{
	$("#multi_avul").prop('checked', true);
	$("#multi_avul").val("Y");
	$("#multi_2").removeAttr("disabled");
	$("#multi_avul").removeAttr("disabled");
}
else 
{
	$("#multi_avul").prop('checked', false);
	$("#multi_avul").val("N");
}

if (obj['noi_burn_r'] == 'Y')
{
	$("#multi_burn").prop('checked', true);
	$("#multi_burn").val("Y");
	$("#multi_site").removeAttr("disabled");
	$("#multi_burn").removeAttr("disabled");

}
else 
{
	$("#multi_burn").prop('checked', false);
	$("input.multiburn").prop('checked', false);
	$("#multi_burn").val("N");
	$("#multi_site").val(" ");
	$("input.multiburn").attr("disabled",true);
}

if (obj['noi_burn1'] == 'Y')
{
	$("#multi_burn1").prop('checked', true);
	$("#multi_burn1").val("Y");
	$("#multi_burn1").removeAttr("disabled");
	$("#multi_burn2").attr("disabled", true);
	$("#multi_burn3").attr("disabled", true);
	$("#multi_burn4").attr("disabled", true);

}
else
{
	$("#multi_burn2").removeAttr("disabled");
	$("#multi_burn3").removeAttr("disabled");
	$("#multi_burn4").removeAttr("disabled");
}

if (obj['noi_burn2'] == 'Y')
{
	$("#multi_burn2").prop('checked', true);
	$("#multi_burn2").val("Y");
	$("#multi_burn2").removeAttr("disabled");
	$("#multi_burn1").attr("disabled", true);
	$("#multi_burn3").attr("disabled", true);
	$("#multi_burn4").attr("disabled", true);

}
else 
{
	$("#multi_burn1").removeAttr("disabled");
	$("#multi_burn3").removeAttr("disabled");
	$("#multi_burn4").removeAttr("disabled");
}

if (obj['noi_burn3'] == 'Y')
{
	$("#multi_burn3").prop('checked', true);
	$("#multi_burn3").val("Y");
	$("#multi_burn3").removeAttr("disabled");
	$("#multi_burn1").attr("disabled", true);
	$("#multi_burn2").attr("disabled", true);
	$("#multi_burn4").attr("disabled", true);

}
else 
{
	$("#multi_burn1").removeAttr("disabled");
	$("#multi_burn2").removeAttr("disabled");
	$("#multi_burn4").removeAttr("disabled");
}

if (obj['noi_burn4'] == 'Y')
{
	$("#multi_burn4").prop('checked', true);
	$("#multi_burn4").val("Y");
	$("#multi_burn4").removeAttr("disabled");
	$("#multi_burn1").attr("disabled", true);
	$("#multi_burn2").attr("disabled", true);
	$("#multi_burn3").attr("disabled", true);

}
else 
{
	$("#multi_burn1").removeAttr("disabled");
	$("#multi_burn2").removeAttr("disabled");
	$("#multi_burn3").removeAttr("disabled");
}

if (obj['noi_concussion'] == 'Y')
{
	$("#multi_conc").prop('checked', true);
	$("#multi_conc").val("Y");
	$("#multi_4").removeAttr("disabled");
	$("#multi_conc").removeAttr("disabled");
}
else 
{
	$("#multi_conc").prop('checked', false);
	$("#multi_conc").val("N");
}

if (obj['noi_contusion'] == 'Y')
{
	$("#multi_contu").prop('checked', true);
	$("#multi_contu").val("Y");
	$("#multi_5").removeAttr("disabled");
	$("#multi_contu").removeAttr("disabled");
}
else 
{
	$("#multi_contu").prop('checked', false);
	$("#multi_contu").val("N");
}

if (obj['noi_frac_clo'] == 'Y')
{
	$("#multi_close").prop('checked', true);
	$("#multi_close").val("Y");
	$("#multi_6").removeAttr("disabled");
	$("#multi_close").removeAttr("disabled");
}
else 
{
	$("#multi_close").prop('checked', false);
	$("#multi_close").val("N");
}

if (obj['noi_frac_ope'] == 'Y')
{
	$("#multi_open").prop('checked', true);
	$("#multi_open").val("Y");
	$("#multi_7").removeAttr("disabled");
	$("#multi_open").removeAttr("disabled");
}
else 
{
	$("#multi_open").prop('checked', false);
	$("#multi_open").val("N");
}

if (obj['noi_owound'] == 'Y')
{
	$("#multi_lace").prop('checked', true);
	$("#multi_lace").val("Y");
	$("#multi_8").removeAttr("disabled");
	$("#multi_lace").removeAttr("disabled");
}
else 
{
	$("#multi_lace").prop('checked', false);
	$("#multi_lace").val("N");
}

if (obj['noi_amp'] == 'Y')
{
	$("#multi_ampu").prop('checked', true);
	$("#multi_ampu").val("Y");
	$("#multi_9").removeAttr("disabled");
	$("#multi_ampu").removeAttr("disabled");
}
else 
{
	$("#multi_ampu").prop('checked', false);
	$("#multi_ampu").val("N");
}

if (obj['noi_others'] == 'Y')
{
	$("#multi_other").prop('checked', true);
	$("#multi_other").val("Y");
	$("#multi_10").removeAttr("disabled");
	$("#multi_other").removeAttr("disabled");
}
else 
{
	$("#multi_other").prop('checked', false);
	$("#multi_other").val("N");
}

if (obj['ext_bite'] == 'Y')
{
	$("#ext_bite").prop('checked', true);
	$("#ext_bite").val("Y");
	$("#ext_1").removeAttr("disabled");
	$("#ext_bite").removeAttr("disabled");
}
else 
{
	$("#ext_bite").prop('checked', false);
	$("#ext_bite").val("N");
}

if (obj['ext_gun'] == 'Y')
{
	$("#ext_gun").prop('checked', true);
	$("#ext_gun").val("Y");
	$("#ext_2").removeAttr("disabled");
	$("#ext_gun").removeAttr("disabled");
}
else 
{
	$("#ext_gun").prop('checked', false);
	$("#ext_gun").val("N");
}

if (obj['ext_burn_r'] == 'Y')
{
	$("#ext_burn").prop('checked', true);
	$("#ext_burn").val("Y");
	$("#ext_burn1").removeAttr("disabled");
	$("#ext_burn").removeAttr("disabled");
}
else 
{
	$("#ext_burn").prop('checked', false);
	$("#ext_burn").val("N");
	$("#ext_3").val(" ");
}

if (obj['ext_burn'] == '06')
{
	$("#ext_3").removeAttr("disabled");
	$("#ext_burn").removeAttr("disabled");
}
else 
{
	$("#ext_3").val(" ");
	$("#ext_3").attr("disabled", true);


}

if (obj['ext_chem'] == 'Y')
{
	$("#ext_chem").prop('checked', true);
	$("#ext_chem").val("Y");
	$("#ext_4").removeAttr("disabled");
	$("#ext_chem").removeAttr("disabled");
}
else 
{
	$("#ext_chem").prop('checked', false);
	$("#ext_chem").val("N");
}

if (obj['ext_hang'] == 'Y')
{
	$("#ext_hang").prop('checked', true);
	$("#ext_hang").val("Y");
}
else 
{
	$("#ext_hang").prop('checked', false);
	$("#ext_hang").val("N");
}

if (obj['ext_sharp'] == 'Y')
{
	$("#ext_contact").prop('checked', true);
	$("#ext_contact").val("Y");
	$("#ext_5").removeAttr("disabled");
}
else 
{
	$("#ext_contact").prop('checked', false);
	$("#ext_contact").val("N");
}

if (obj['ext_maul'] == 'Y')
{
	$("#ext_mau").prop('checked', true);
	$("#ext_mau").val("Y");
}
else 
{
	$("#ext_mau").prop('checked', false);
	$("#ext_mau").val("N");
}

if (obj['ext_drown_r'] == 'Y')
{
	$("#ext_drown").prop('checked', true);
	$("#ext_drown").val("Y");
	$("#ext_drown1").removeAttr("disabled");
}
else 
{
	$("#ext_drown").prop('checked', false);
	$("#ext_drown").val("N");
	$("#ext_drown1").attr("disabled", true);

}
if (obj['ext_drown'] == '06')
{
	
	$("#ext_6").removeAttr("disabled");
}
else 
{
	$("#ext_6").attr("disabled", true);
	$("#ext_6").val(" ");

}

if (obj['ext_transport'] == 'Y')
{
	$("#ext_trans").prop('checked', true);
	$("#ext_trans").val("Y");
}
else 
{
	$("#ext_trans").prop('checked', false);
	$("#ext_trans").val("N");
}

if (obj['ext_expo_nature_r'] == 'Y')
{
	$("#ext_expose").prop('checked', true);
	$("#ext_expose").val("Y");
	$("#ext_expose1").removeAttr("disabled");
}
else 
{
	$("#ext_expose").prop('checked', false);
	$("#ext_expose").val("N");
	$("#ext_expose1").attr("disabled", true);

}
if (obj['ext_expo_nature'] == '07')
{
	$("#ext_7").removeAttr("disabled");
}
else 
{
	$("#ext_7").attr("disabled", true);
	$("#ext_7").val(" ");

}

if (obj['ext_fall'] == 'Y')
{
	$("#ext_fall").prop('checked', true);
	$("#ext_fall").val("Y");
	$("#ext_fall1").removeAttr("disabled");
	$("#ext_8").removeAttr("disabled");
}
else{
	$("#ext_fall").prop('checked', false);
	$("#ext_fall").val("N");
	$("#ext_fall1").attr("disabled", true);
	$("#ext_8").attr("disabled", true);
	$("#ext_8").val(" ");

}

if (obj['ext_firecracker_r'] == 'Y')
{
	$("#ext_cracker").prop('checked', true);
	$("#ext_cracker").val("Y");
	$("#selFire").removeAttr("disabled");
}
else 
{
	$("#ext_cracker").prop('checked', false);
	$("#ext_cracker").val("N");
}

if (obj['ext_firecracker'] == '88')
{
	$("#ext_9").removeAttr("disabled");
}
else 
{
	$("#ext_9").val(" ");
	$("#ext_9").attr("disabled",true);
	
}

if (obj['ext_other'] == 'Y')
{
	$("#ext_other").prop('checked', true);
	$("#ext_other").val("Y");
	$("#ext_10").removeAttr("disabled");
}
else 
{
	$("#ext_other").prop('checked', false);
	$("#ext_other").val("N");
}

if (obj['ext_sexual'] == 'Y')
{
	$("#ext_sex").prop('checked', true);
	$("#ext_sex").val("Y");
}
else 
{
	$("#ext_sex").prop('checked', false);
	$("#ext_sex").val("N");
}

if (obj['risk_alcliq'] == 'Y')
{
	$("#oth_alcohol").prop('checked', true);
	$("#oth_alcohol").val("Y");
}
else 
{
	$("#oth_alcohol").prop('checked', false);
	$("#oth_alcohol").val("N");
}

if (obj['risk_smoke'] == 'Y')
{
	$("#oth_smoking").prop('checked', true);
	$("#oth_smoking").val("Y");
}
else 
{
	$("#oth_smoking").prop('checked', false);
	$("#oth_smoking").val("N");
}

if (obj['risk_drugs'] == 'Y')
{
	$("#oth_drugs").prop('checked', true);
	$("#oth_drugs").val("Y");
}
else 
{
	$("#oth_drugs").prop('checked', false);
	$("#oth_drugs").val("N");
}

if (obj['risk_mobpho'] == 'Y')
{
	$("#oth_mobile").prop('checked', true);
	$("#oth_mobile").val("Y");
}
else 
{
	$("#oth_mobile").prop('checked', false);
	$("#oth_mobile").val("N");
}

if (obj['risk_sleep'] == 'Y')
{
	$("#oth_sleepy").prop('checked', true);
	$("#oth_sleepy").val("Y");
}
else 
{
	$("#oth_sleepy").prop('checked', false);
	$("#oth_sleepy").val("N");
}

if (obj['risk_other'] == 'Y')
{
	$("#oth_others").prop('checked', true);
	$("#oth_others").val("Y");
	$("#oth_others_spec").removeAttr("disabled");
}
else 
{
	$("#oth_others").prop('checked', false);
	$("#oth_others").val("N");
}

if (obj['safe_none'] == 'Y')
{
	$("#safety_none").prop('checked', true);
	$("#safety_none").val("Y");
}
else 
{
	$("#safety_none").prop('checked', false);
	$("#safety_none").val("N");
}

if (obj['safe_airbag'] == 'Y')
{
	$("#safety_airbag").prop('checked', true);
	$("#safety_airbag").val("Y");
}
else 
{
	$("#safety_airbag").prop('checked', false);
	$("#safety_airbag").val("N");
}

if (obj['safe_helmet'] == 'Y')
{
	$("#safety_helmet").prop('checked', true);
	$("#safety_helmet").val("Y");
}
else 
{
	$("#safety_helmet").prop('checked', false);
	$("#safety_helmet").val("N");
}

if (obj['safe_cseat'] == 'Y')
{
	$("#safety_child").prop('checked', true);
	$("#safety_child").val("Y");
}
else 
{
	$("#safety_child").prop('checked', false);
	$("#safety_child").val("N");
}

if (obj['safe_sbelt'] == 'Y')
{
	$("#safety_seatbelt").prop('checked', true);
	$("#safety_seatbelt").val("Y");
}
else 
{
	$("#safety_seatbelt").prop('checked', false);
	$("#safety_seatbelt").val("N");
}

if (obj['safe_drown'] == 'Y')
{
	$("#safety_life").prop('checked', true);
	$("#safety_life").val("Y");
}
else 
{
	$("#safety_life").prop('checked', false);
	$("#safety_life").val("N");
}

if (obj['safe_unkn'] == 'Y')
{
	$("#safety_unk").prop('checked', true);
	$("#safety_unk").val("Y");
}
else 
{
	$("#safety_unk").prop('checked', false);
	$("#safety_unk").val("N");
}

if (obj['safe_other'] == 'Y')
{
	$("#safety_others").prop('checked', true);
	$("#safety_others").val("Y");
	$("#safety_others_spec").removeAttr("disabled");
}
else 
{
	$("#safety_others").prop('checked', false);
	$("#safety_others").val("N");
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


function Injurywizard()
{

	var btnFinish = $('<button type="button" name ="btnDone" id="btnDone"></button>')
	.text('Done')
	.addClass('btn btn-info btn-ladda btn-square')
	.on('click',function(){$('#InjurySummary').modal('show');
		InjurySummary();});

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
		multinj:'required',

	},
	messages:{
		street_inj:'required',
		selCityInj:'required',
		selProvInj:'required',
		selBrgyInj:'required',
		selRegInj:'required',
		incident_date:'required',
		consult_date:'required',
		multinj:'required',
		
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


function InjurySummary()
{ 	

	$('#saveenccode').val($('#encountercode').val());
	$('#savehpercode').val($('#info_hosppat_idno').val());
	$('#typ_dateasof').val($('#dateasof').val());
	$('#formIdentif').val($('#formIden').val());
	$('#typ_newfhud').val($('#newfhud').val());
	$('#typ_info_natregno').val($('#info_natregno').val());	
	$('#typ_info_hospcaseno').val($('#info_hospcaseno').val());
	$('#typ_info_typepat').val($('#info_typepat').val());

	$('#typ_info_lname').val($('#info_lname').val());
	$('#typ_info_fname').val($('#info_fname').val());
	$('#typ_info_mname').val($('#info_mname').val());
	$('#typ_info_sex').val($('#info_sex').val());
	$('#typ_info_dob').val($('#info_dob').val());
	$('#typ_info_year').val($('#info_year').val());
	$('#typ_info_month').val($('#info_month').val());
	$('#typ_info_day').val($('#info_day').val());

	$('#typ_selCity').val($('#selCity').val());
	$('#typ_selProv').val($('#selProv').val());
	$('#typ_selReg').val($('#selReg').val());

	$('#typ_selCityTemp').val($('#selCityTemp').val());
	$('#typ_selProvTemp').val($('#selProvTemp').val());
	$('#typ_selRegTemp').val($('#selRegTemp').val());

	$('#typ_incident_date').val($('#incident_date').val());
	$('#typ_consult_date').val($('#consult_date').val());
	$('#typ_incident_refer').val($('#incident_refer').val());
	$('#typ_selFac').val($('#selFac').val());

	$('#typ_selCityInj').val($('#selCityInj').val());
	$('#typ_selProvInj').val($('#selProvInj').val());
	$('#typ_selRegInj').val($('#selRegInj').val());

	$('#typ_injintent').val($('#injintent').val());
	$('#typ_injaid').val($('#injaid').val());
	$('#typ_aid_what').val($('#aid_what').val());
	$('#typ_aid_whom').val($('#aid_whom').val());
	$('#typ_multinj').val($('#multinj').val());


	$('#typ_multi_1').val($('#multi_1').val());
	$('#typ_multi_2').val($('#multi_2').val());
	$('#typ_multi_site').val($('#multi_site').val());
	$('#typ_multi_4').val($('#multi_4').val());
	$('#typ_multi_5').val($('#multi_5').val());
	$('#typ_multi_6').val($('#multi_6').val());
	$('#typ_multi_7').val($('#multi_7').val());
	$('#typ_multi_8').val($('#multi_8').val());
	$('#typ_multi_9').val($('#multi_9').val());
	$('#typ_multi_10').val($('#multi_10').val());

	$('#typ_multi_abra').val($('#multi_abra').val());
	$('#typ_multi_avul').val($('#multi_avul').val());
	$('#typ_multi_burn').val($('#multi_burn').val());
	$('#typ_multi_burn1').val($('#multi_burn1').val());
	$('#typ_multi_burn2').val($('#multi_burn2').val());
	$('#typ_multi_burn3').val($('#multi_burn3').val());
	$('#typ_multi_burn4').val($('#multi_burn4').val());
	$('#typ_multi_conc').val($('#multi_conc').val());
	$('#typ_multi_contu').val($('#multi_contu').val());

	$('#typ_multi_close').val($('#multi_close').val());
	$('#typ_multi_open').val($('#multi_open').val());

	$('#typ_multi_lace').val($('#multi_lace').val());
	$('#typ_multi_ampu').val($('#multi_ampu').val());
	$('#typ_multi_other').val($('#multi_other').val());

	$('#typ_ext_bite').val($('#ext_bite').val());
	$('#typ_ext_1').val($('#ext_1').val());
	$('#typ_ext_gun').val($('#ext_gun').val());
	$('#typ_ext_2').val($('#ext_2').val());

	$('#typ_ext_burn').val($('#ext_burn').val());
	$('#typ_ext_burn1').val($('#ext_burn1').val());
	$('#typ_ext_3').val($('#ext_3').val());

	$('#typ_ext_chem').val($('#ext_chem').val());
	$('#typ_ext_4').val($('#ext_4').val());

	$('#typ_ext_hang').val($('#ext_hang').val());

	$('#typ_ext_contact').val($('#ext_contact').val());
	$('#typ_ext_5').val($('#ext_5').val());

	$('#typ_ext_mau').val($('#ext_mau').val());

	$('#typ_ext_drown').val($('#ext_drown').val());
	$('#typ_ext_drown1').val($('#ext_drown1').val());
	$('#typ_ext_6').val($('#ext_6').val());

	$('#typ_ext_trans').val($('#ext_trans').val());

	$('#typ_ext_expose').val($('#ext_expose').val());
	$('#typ_ext_expose1').val($('#ext_expose1').val());
	$('#typ_ext_7').val($('#ext_7').val());

	$('#typ_ext_fall').val($('#ext_fall').val());
	$('#typ_ext_fall1').val($('#ext_fall1').val());
	$('#typ_ext_8').val($('#ext_8').val());

	$('#typ_ext_cracker').val($('#ext_cracker').val());
	$('#typ_selFire').val($('#selFire').val());
	$('#typ_ext_9').val($('#ext_9').val());

	$('#typ_ext_sex').val($('#ext_sex').val());

	$('#typ_ext_other').val($('#ext_other').val());
	$('#typ_ext_10').val($('#ext_10').val());

	$('#typ_ext_transpo').val($('#ext_transpo').val());
	$('#typ_ext_transpo1').val($('#ext_transpo1').val());

	$('#typ_veh_pat').val($('#veh_pat').val());
	$('#typ_veh_pat1').val($('#veh_pat1').val());

	$('#typ_veh_col').val($('#veh_col').val());
	$('#typ_veh_col1').val($('#veh_col1').val());

	$('#typ_veh_position').val($('#veh_position').val());
	$('#typ_veh_position1').val($('#veh_position1').val());

	$('#typ_veh_placeoccur').val($('#veh_placeoccur').val());
	$('#typ_veh_placework').val($('#veh_placework').val());
	$('#typ_veh_placeoccur1').val($('#veh_placeoccur1').val());

	$('#typ_veh_act').val($('#veh_act').val());
	$('#typ_veh_act1').val($('#veh_act1').val());

	$('#typ_oth_alcohol').val($('#oth_alcohol').val());
	$('#typ_oth_smoking').val($('#oth_smoking').val());
	$('#typ_oth_drugs').val($('#oth_drugs').val());
	$('#typ_oth_mobile').val($('#oth_mobile').val());
	$('#typ_oth_sleepy').val($('#oth_sleepy').val());
	$('#typ_oth_others').val($('#oth_others').val());
	$('#typ_oth_others_spec').val($('#oth_others_spec').val());

	$('#typ_safety_none').val($('#safety_none').val());
	$('#typ_safety_airbag').val($('#safety_airbag').val());
	$('#typ_safety_helmet').val($('#safety_helmet').val());
	$('#typ_safety_child').val($('#safety_child').val());
	$('#typ_safety_seatbelt').val($('#safety_seatbelt').val());
	$('#typ_safety_life').val($('#safety_life').val());
	$('#typ_safety_others').val($('#safety_others').val());
	$('#typ_safety_others_spec').val($('#safety_others_spec').val());
	$('#typ_safety_unk').val($('#safety_unk').val());

	$('#typ_pat_trans').val($('#pat_trans').val());
	$('#typ_pat_refer').val($('#pat_refer').val());

	$('#typ_selFac').val($('#selFac').val());
	$('#typ_pat_physician').val($('#pat_physician').val());

	$('#typ_pat_status').val($('#pat_status').val());
	$('#typ_pat_mode').val($('#pat_mode').val());
	$('#typ_pat_mode1').val($('#pat_mode1').val());

	$('#typ_pat_initial').val($('#pat_initial').val());
	$('#typ_hospital_diag').val($('#hospital_diag').val());
	$('#typ_hospital_ext_diag').val($('#hospital_ext_diag').val());

	$('#typ_pat_disp').val($('#pat_disp').val());
	$('#typ_selFac2').val($('#selFac2').val());
	$('#typ_pat_disp_oth').val($('#pat_disp_oth').val());

	$('#typ_pat_outcome').val($('#pat_outcome').val());

	$('#typ_pat_findiag').val($('#pat_findiag').val());
	$('#typ_pat_disp2').val($('#pat_disp2').val());
	$('#typ_selFac3').val($('#selFac3').val());
	$('#typ_inpat_oth').val($('#inpat_oth').val());
	$('#typ_pat_outcome2').val($('#pat_outcome2').val());

	$('#typ_internal_diag').val($('#internal_diag').val());
	$('#typ_external_diag').val($('#external_diag').val());
	$('#typ_pat_comment').val($('#pat_comment').val());
	
}

