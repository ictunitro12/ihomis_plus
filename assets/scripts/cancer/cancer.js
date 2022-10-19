var Module=$('#module').val();


function checkCancer(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../Cancer/checkCancer/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');		
			}
			else
			{ 
				initCancer(enccode,hpercode);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}


function initCancer(enccode,hpercode)
{	
	Cancerwizard();
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
	$('#prim_hos_1').val(getTimeLocale());
	
}

function initCancerEdit(hpercode,enccode)
{
	var code = encodeURIComponent(encodeURIComponent(enccode));
	Cancerwizard();
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
	getCancerData(enccode, hpercode);
	CancerAddress(hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);
}

function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "Cancer/getPatientData/" + enccode + "/" + hpercode,
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
		url: baseURL + "Cancer/getConsultant/" + licno,
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
		url: baseURL + "Cancer/getCompletedBy/" + employeeid,
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

/*function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "Cancer/getPatientData/" + enccode + "/" + hpercode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
			setReligion(obj['relcode']);
			
			$('#encountercode').val(obj['enccode']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#code').val(obj['enccode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#selReg').val(obj['cc_brgy']);

			$('#info_typepat').val(obj['typeofpatient']);
			$('#info_sex').val(obj['patsex']);
			$('#info_cs').val(obj['patcstat']);

			var bplace = obj['patbplace'];

			$('#info_mot_fullname').val(obj['mothername']);
			$('#info_mot_lname').val(obj['motlast']);
			$('#info_mot_fname').val(obj['motfirst']);
			$('#info_mot_mname').val(obj['motmid']);

			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['Cellphone']);
			$('#info_emailadd').val(obj['pat_email']);
			$('#info_bplace').val(obj['patbplace']);

			$('#finaldiag').val(obj['diagtext']);
			$('#finalicd10').val(obj['diagcode_ext']);
			$("#info_nat option[value='" + obj['natcode'] + "']").attr("selected", "selected");

			var dob = setTimeLocale(obj['patbdate']);
			var ages = AgeCompute(dob);


			var num = '000000001';
			for (var i; i >= 0; i++) {
				num[i];
			}
			$('#daterep').val(getTimeLocale());
			$("#complete_Date").val(getTimeLocale());

			$('#info_occup').val(obj['Occupation']);

			$('#copd_newfhud').val(obj['newfhudcode']);

			var str = obj['hpercode'];
			console.log(str);
			var res = str.slice(12, 15);
			$('#copd_patient_id').val(res);

			$('#info_philhealth').val(obj['phicnum']);

			var dob = setTimeLocale(obj['patbdate']);
			var consultdate = setTimeLocale(obj['consult_date']);
			var encounterdate = setTimeLocale(obj['encounter_date']);

			console.log(consultdate);
			console.log(dob);
			$("#dateconsult").val(consultdate);
			$("#datediag").val(encounterdate);
			$("#info_dob").val(dob);

		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

*/

function CancerAddress(hpercode)
{
	$.ajax({
		type: "POST",
		url: baseURL+"Cancer/CancerAddress/"+hpercode,
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

function CancerPatientInfo(hpercode)
{
	var obj="";
	$.ajax({
		type: "POST",
		url: baseURL+"Cancer/CancerPatientInformation/"+hpercode,
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



function getCancerData(enccode, hpercode)
{
	
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		url: baseURL + "Cancer/getCancerData/"+enccode + "/" + hpercode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
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
			$('#classbmi').val(obj['bmicateg']);
			$('#bmicat').val(obj['classification']);
			$('#hwWaist').val(obj['waist_circum']);
			$('#classwaist').val(obj['class']);

			$('#age_smoke').val(obj['age_start_smoke']);
			$('#num_smoke').val(obj['no_years_smoke']);
			$('#numyear_smoke').val(obj['num_years']);

			$('#drink_type').val(obj['alcohol_type']);
			$('#drink_amount').val(obj['alcohol_amt']);
			$("#unit option[value='" + obj['alc_uomcode']+"']").attr("selected","selected");
			$("#alcohol_freq option[value='" + obj['freq_code2']+"']").attr("selected","selected");
			$('#age_alcohol').val(obj['age_start_alcohol']);		
			$('#no_alcohol').val(obj['no_years_alcohol']);

			$('#physical_act_type').val(obj['phy_activity_kind']);
			$('#physical_act_min').val(obj['phy_activity_mins']);
			$("#physical_act_freq option[value='" + obj['freq_code1']+"']").attr("selected","selected");
			
			$('#fam_mem').val(obj['family_specify']);		
			$('#fam_memtype').val(obj['family_type_cancer']);

			$('#fish_specify').val(obj['diet_meat_spec']);
			$("#fish_freq option[value='" + obj['meat_freq']+"']").attr("selected","selected");
			
			$('#rice_specify').val(obj['diet_carbo_spec']);
			$("#rice_freq option[value='" + obj['carbo_freq']+"']").attr("selected","selected");
			
			$('#fats_specify').val(obj['diet_fatoil_spec']);
			$("#fats_freq option[value='" + obj['fatoil_freq']+"']").attr("selected","selected");
			
			$('#fruits_specify').val(obj['diet_fruitvege_spec']);
			$("#fruits_freq option[value='" + obj['fruit_freq']+"']").attr("selected","selected");
			
			$('#sugar_specify').val(obj['diet_sugarsweet_spec']);
			$("#sugar_freq option[value='" + obj['sugarsweet_freq']+"']").attr("selected","selected");
			
			$('#milk_specify').val(obj['diet_milkproducts_spec']);
			$("#milk_freq option[value='" + obj['milkproducts_freq']+"']").attr("selected","selected");

			$('#usu_other_specify').val(obj['diet_others_spec']);
			$("#other_freq option[value='" + obj['other_freq']+"']").attr("selected","selected");

			$('#reg_bow_oth').val(obj['reg_bow_move_details_spec']);
			$("#reg_bow_freq option[value='" + obj['reg_bow_move_details']+"']").attr("selected","selected");

			$('#type_chem').val(obj['chemspe']);
			$('#leng_exp').val(obj['chemexpe']);

			$('#sex_pat').val(obj['nosexpartner']);
			$('#use_contra_spec').val(obj['cont_specify']);

			$('#no_early').val(obj['contno_years']);
			$("#early_sex_freq option[value='" + obj['earlystagesexinter']+"']").attr("selected","selected");

			$('#occup_others').val(obj['occup_other_spec']);

			$('#pulmon_indoorpollut').val(obj['type_indoor_air_pollu']);
			$('#pulmon_outdoorpollut').val(obj['type_outdoor_air_pollu']);

			$("#occup_detail option[value='" + obj['occup_expo_detail']+"']").attr("selected","selected");


			setFacility(obj['referred_from']);
			setFacility2(obj['hfhudcode_from']);
			setFacility3(obj['hfhudcode_to']);
			setDiagnosis(obj['final_diagnosis']);
	
			
			$("#str_type option[value='" + obj['Cancer_type_code']+"']").attr("selected","selected");
			$("#copd_reasonrefer option[value='" + obj['refreason_code']+"']").attr("selected","selected");
			$("#patstat option[value='" + obj['patient_status_code']+"']").attr("selected","selected");
			
			
			$("#info_typepat option[value='" + obj['typepatient']+"']").attr("selected","selected");
			$('#info_bplace').val(obj['patbplace']);
			
			
			$('#info_zip').val(obj['zipcode1']);
			$('#info_temp_zip').val(obj['zipcode2']);
			$('#contact_zip').val(obj['zipcode3']);
			
			$('#causeofdeath').val(obj['underlying_cause']);
			$('#causeofdeathicd').val(obj['underlying_icd_code']);
			$('#placedeath').val(obj['place_death']);

			$('#consult_lname').val(obj['cons_incharge_last']);
			$('#consult_fname').val(obj['cons_incharge_first']);
			$('#consult_mname').val(obj['cons_incharge_middle']);
			$('#consult_street').val(obj['cons_str']);
			$('#consult_selReg').val(obj['cons_regcode']);
			$('#consult_selProv').val(obj['cons_provcode']);
			$('#consult_selCity').val(obj['cons_citycode']);
			$('#consult_selBrgy').val(obj['cons_bgycode']);
			$('#consult_zipcode').val(obj['cons_zipcode']);
			$('#consult_landline').val(obj['cons_landline']);
			$('#consult_mobile').val(obj['cons_mobile']);
			$('#consult_email').val(obj['cons_email']);
			$('#consult_dept').val(obj['department']);

			$('#complete_street').val(obj['comp_str']);
			$('#complete_selReg').val(obj['comp_regcode']);
			$('#complete_selProv').val(obj['comp_provcode']);
			$('#complete_selCity').val(obj['comp_citycode']);
			$('#complete_selBrgy').val(obj['comp_bgycode']);
			$('#complete_zipcode').val(obj['comp_zipcode']);
			$('#complete_landline').val(obj['comp_landline']);
			$('#complete_mobile').val(obj['comp_mobile']);
			$('#complete_email').val(obj['comp_email']);
			$('#complete_desig').val(obj['designation']);


			$("#dispos option[value='" + obj['dispose_code']+"']").attr("selected","selected");
			$("#deathreason option[value='" + obj['refreason_code2']+"']").attr("selected","selected");

			if (obj['patient_status_code'] == 'DI')
			{
				$('#datedeath').removeAttr( "disabled" );
				$('#dispos').removeAttr( "disabled" );
				$('#placedeath').removeAttr( "disabled" );
				$('#selFac3').removeAttr( "disabled" );
				$('#deathreason').removeAttr( "disabled" );
			}
			else 
			{
				$('#datedeath').attr( "disabled", true );
				$('#dispos').attr( "disabled", true );
				$('#placedeath').attr( "disabled", true );
				$('#selFac3').attr( "disabled", true );
				$('#deathreason').attr( "disabled", true );
			}


			if (obj['Smoking'] == 'Y')
			{
				$("#smoke").prop('checked', true);
				$("#smoke").val("Y");
				$("#final_smoke").val("Y");
				$("input.ssmoke").removeAttr("disabled");
				$("#shs_smoke").attr('disabled', true);
				$("#numyear_smoke").attr('disabled', true);

			}
			else if(obj['Smoking'] == 'N')
			{
				
				$("#shs_smoke").prop( "checked", true );
				$("#shs_smoke").val("N");
				$("#final_smoke").val("N");
				$("#smoke").attr('disabled', true);
			}
			else
			{
				$("input.ssmoke").attr("disabled", true);
				$("#final_smoke").val("");
			}


			if (obj['less_equal_1_pack'] == 'Y')
			{
				$("#less_smoke").val("Y");
				$("#less_smoke").prop('checked', true);
				$("#less_smoke").removeAttr("disabled");
				$("#more_smoke").attr("disabled", true);
			}
			else 
			{
				$("#less_smoke").val("N");
				$("#less_smoke").prop('checked', false);
			}

			if (obj['more_equal_1_pack'] == 'Y')
			{
				$("#more_smoke").val("Y");
				$("#more_smoke").prop('checked', true);
				$("#more_smoke").removeAttr("disabled");
				$("#less_smoke").attr("disabled", true);
			}
			else 
			{
				$("#more_smoke").val("N");
				$("#more_smoke").prop('checked', false);
			}


			if (obj['with_exposure'] == 'Y')
			{
				$("#expshs_smoke").val("Y");
				$("#expshs_smoke").prop('checked', true);
				$("#expshs_smoke").removeAttr("disabled");
			}
			else 
			{
				$("#expshs_smoke").val("N");
				$("#expshs_smoke").prop('checked', false);
			}

		/////////////////////////////////	dito 

		if (obj['alcohol'] == 'Y')
		{
			$("#drink").prop('checked', true);
			$("#drink").val("Y");
			$("input.drinks").removeAttr("disabled");
			$("#unit").removeAttr("disabled");
			$("#alcohol_freq").removeAttr("disabled");
		}
		else 
		{
			$("#drink").prop('checked', false);
			$("#drink").val("N");
		}

		if (obj['familyhihe'] == 'Y')
		{
			$("#family").prop('checked', true);
			$("#family").val("Y");
			$("input.famm").removeAttr("disabled");
		}
		else 
		{
			$("#family").prop('checked', false);
			$("#family").val("N");
		}
		/////////////////////////////////	 
		if (obj['phy_activity'] == 'Y')
		{
			$("#physical_act").prop('checked', true);
			$("#physical_act").val("Y");
			$("input.physactivity ").removeAttr("disabled");
			$("#physical_act_freq").removeAttr("disabled");
		}
		else 
		{
			$("#physical_act").prop('checked', false);
			$("#physical_act").val("N");
			$("input.physactivity ").attr("disabled", true);
			$("#physical_act_freq").attr("disabled", true);


		}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if (obj['diet_meat'] == 'Y')
{
	$("#fish").prop('checked', true);
	$("#fish").val("Y");
	$("#fish_specify").removeAttr("disabled");
	$("#fish_freq").removeAttr("disabled");
}
else 
{
	$("#fish").prop('checked', false);
	$("#fish").val("N");
}

if (obj['diet_carbo'] == 'Y')
{
	$("#rice").prop('checked', true);
	$("#rice").val("Y");
	$("#rice_specify").removeAttr("disabled");
	$("#rice_freq").removeAttr("disabled");
}
else 
{
	$("#rice").prop('checked', false);
	$("#rice").val("N");
}

if (obj['diet_fruitvege'] == 'Y')
{
	$("#fruits").prop('checked', true);
	$("#fruits").val("Y");
	$("#fruits_specify").removeAttr("disabled");
	$("#fruits_freq").removeAttr("disabled");
}
else 
{
	$("#fruits").prop('checked', false);
	$("#fruits").val("N");
}

if (obj['diet_fatoil'] == 'Y')
{
	$("#fats").prop('checked', true);
	$("#fats").val("Y");
	$("#fats_specify").removeAttr("disabled");
	$("#fats_freq").removeAttr("disabled");
}
else 
{
	$("#fats").prop('checked', false);
	$("#fats").val("N");
}

if (obj['diet_sugarsweet'] == 'Y')
{
	$("#sugar").prop('checked', true);
	$("#sugar").val("Y");
	$("#sugar_specify").removeAttr("disabled");
	$("#sugar_freq").removeAttr("disabled");
}
else 
{
	$("#sugar").prop('checked', false);
	$("#sugar").val("N");
}

if (obj['diet_milkproducts'] == 'Y')
{
	$("#milk").prop('checked', true);
	$("#milk").val("Y");
	$("#milk_specify").removeAttr("disabled");
	$("#milk_freq").removeAttr("disabled");
}
else 
{
	$("#milk").prop('checked', false);
	$("#milk").val("N");
}

if (obj['diet_others'] == 'Y')
{
	$("#usu_other").prop('checked', true);
	$("#usu_other").val("Y");
	$("#usu_other_specify").removeAttr("disabled");
	$("#other_freq").removeAttr("disabled");
}

else 
{
	$("#usu_other").prop('checked', false);
	$("#usu_other").val("N");
}	

///////////////////////////////////////////////////////////////////
if (obj['reg_bow_move'] == 'Y')
{
	$("#reg_bow").prop('checked', true);
	$("#reg_bow").val("Y");
	$("#reg_bow_freq").removeAttr("disabled");
	$("#reg_bow_oth").removeAttr("disabled");
}
else 
{
	$("#reg_bow").prop('checked', false);
	$("#reg_bow").val("N");
	$("#reg_bow_freq").attr("disabled", true);
	$("#reg_bow_oth").attr("disabled", true);
}
///////////////////////////////////////////////////////////////////
if (obj['chemexp'] == 'Y')
{
	$("#chem_exp").prop('checked', true);
	$("#chem_exp").val("Y");
	$("#type_chem").removeAttr("disabled");
	$("#leng_exp").removeAttr("disabled");
}
else 
{
	$("#chem_exp").prop('checked', false);
	$("#chem_exp").val("N");
	$("#type_chem").attr("disabled", true);
	$("#leng_exp").attr("disabled", true);
}
///////////////////////////////////////////////////////////////////
if (obj['contracep'] == 'Y')
{
	$("#use_contra").prop('checked', true);
	$("#use_contra").val("Y");
	$("#use_contra_spec").removeAttr("disabled");
	$("#no_early").removeAttr("disabled");
}
else 
{
	$("#use_contra").prop('checked', false);
	$("#use_contra").val("N");
	$("#use_contra_spec").attr("disabled", true);
	$("#no_early").attr("disabled", true);
}
///////////////////////////////////////////////////////////////////

if (obj['indor_air_pollu'] == 'Y')
{
	$("#pulmon_indoor").prop('checked', true);
	$("#pulmon_indoor").val("Y");
	$("#pulmon_indoorpollut").removeAttr("disabled");
}
else 
{
	$("#pulmon_indoor").prop('checked', false);
	$("#pulmon_indoor").val("N");
	$("#pulmon_indoorpollut").attr("disabled", true);


}

if (obj['outdor_air_pollu'] == 'Y')
{
	$("#pulmon_outdoor").prop('checked', true);
	$("#pulmon_outdoor").val("Y");
	$("#pulmon_outdoorpollut").removeAttr("disabled");
}
else 
{
	$("#pulmon_outdoor").prop('checked', false);
	$("#pulmon_outdoor").val("N");
	$("#pulmon_outdoorpollut").attr("disabled", true);

}

///////////////////////////////////////////////////////////////////


if (obj['occup_expo'] == 'Y')
{
	$("#occup_exp").prop('checked', true);
	$("#occup_exp").val("Y");
	$("#occup_detail").removeAttr("disabled");

}
else 
{
	$("#occup_exp").prop('checked', false);
	$("#occup_exp").val("N");
	$("#occup_detail").attr("disabled", true);

}

if (obj['occup_expo_detail'] == 'OT')
{
	$("#occup_others").removeAttr("disabled");

}
else 
{
	$("#occup_others").attr("disabled", true);
	
}
///////////////////////////////////////////////////////////////////


$("#infect_1").val(obj['human_year']);
$("#infect_2").val(obj['pyloric_year']);
$("#infect_3").val(obj['human_diag']);
$("#infect_4").val(obj['others_specify']);
$("#infect_4").val(obj['pyloric_diag']);

if (obj['humanvirus'] == 'Y')
{
	$("#infect1").prop('checked', true);
	$("#infect1").val("Y");
	$("#infect_1").removeAttr("disabled");

}
else 
{
	$("#infect1").prop('checked', false);
	$("#infect1").val("N");
	$("#infect_1").attr("disabled", true);
	$("#infect_1").val("");
}

if (obj['pyloricvirus'] == 'Y')
{
	$("#infect2").prop('checked', true);
	$("#infect2").val("Y");
	$("#infect_2").removeAttr("disabled");

}
else 
{
	$("#infect2").prop('checked', false);
	$("#infect2").val("N");
	$("#infect_2").attr("disabled", true);
	$("#infect_2").val("");
}

if (obj['hepavirus'] == 'Y')
{
	$("#infect3").prop('checked', true);
	$("#infect3").val("Y");
	$("#infect_3").removeAttr("disabled");

}
else 
{
	$("#infect3").prop('checked', false);
	$("#infect3").val("N");
	$("#infect_3").attr("disabled", true);
	$("#infect_3").val("");
}

if (obj['others_virus'] == 'Y')
{
	$("#infect4").prop('checked', true);
	$("#infect4").val("Y");
	$("#infect4_oth").removeAttr("disabled");
	$("#infect_4").removeAttr("disabled");
}
else 
{
	$("#infect4").prop('checked', false);
	$("#infect4").val("N");
	$("#infect4_oth").attr("disabled", true);
	$("#infect4_oth").val("");
	$("#infect_4").attr("disabled", true);
	$("#infect_4").val("");
}

/////////////////////////////////////////////////////////////////	

if (obj['referred_from'] == 'Y')
{
	$("#ref_from").prop('checked', true);
	$("#ref_from").val("Y");
	$("#selFac2").removeAttr("disabled");
	$("#copd_reasonrefer").removeAttr("disabled");

}
else 
{
	$("#ref_from").prop('checked', false);
	$("#ref_from").val("N");
}

$("#chief_complain").val(obj['chief_complaint']);
$("#mult_prime option[value='" + obj['multi_code']+"']").attr("selected","selected");

	/////////////////////////////////////////////////////////////////		
	

	if (obj['non_microscopic'] == 'Y')
	{
		$("#most_valid").prop('checked', true);
		$("#most_valid").val("Y");
		$("input.nonmicro").removeAttr("disabled");
	}
	else if (obj['non_microscopic'] == 'N')
	{
		$("#most_valid").prop('checked', true);
		$("#most_valid").val("N");
		$("input.micro").removeAttr("disabled");

	}
	else if (obj['non_microscopic'] == 'U')
	{
		$("#most_valid").prop('checked', true);
		$("#most_valid").val("U");
		$("input.nonmicro").removeAttr("disabled");
		$("input.micro").removeAttr("disabled");

	}
	else 
	{
		$("#most_valid").prop('checked', false);
		$("#most_valid").val("");
		$("input.nonmicro").removeAttr("disabled");
		$("input.micro").removeAttr("disabled");
	}
	/////////////////////////////////////////////////////////////////		
	if (obj['death_certificate'] == 'Y')
	{
		$("#nonmicro_1").prop('checked', true);
		$("#nonmicro_1").val("Y");
	}
	else 
	{
		$("#nonmicro_1").prop('checked', false);
		$("#nonmicro_1").val("N");
	}

	if (obj['clinic_invest'] == 'Y')
	{
		$("#nonmicro_2").prop('checked', true);
		$("#nonmicro_2").val("Y");
	}
	else 
	{
		$("#nonmicro_2").prop('checked', false);
		$("#nonmicro_2").val("N");
	}

	if (obj['clinic_only'] == 'Y')
	{
		$("#nonmicro_3").prop('checked', true);
		$("#nonmicro_3").val("Y");
	}
	else 
	{
		$("#nonmicro_3").prop('checked', false);
		$("#nonmicro_3").val("N");
	}

	if (obj['tumor_marker'] == 'Y')
	{
		$("#nonmicro_4").prop('checked', true);
		$("#nonmicro_4").val("Y");
	}
	else 
	{
		$("#nonmicro_4").prop('checked', false);
		$("#nonmicro_4").val("N");
	}

/////////////////////////////////////////////////////////////////		
if (obj['cyto_hema'] == 'Y')
{
	$("#micro_1").prop('checked', true);
	$("#micro_1").val("Y");
}
else 
{
	$("#micro_1").prop('checked', false);
	$("#micro_1").val("N");
}

if (obj['histo_metas'] == 'Y')
{
	$("#micro_2").prop('checked', true);
	$("#micro_2").val("Y");
}
else 
{
	$("#micro_2").prop('checked', false);
	$("#micro_2").val("N");
}

if (obj['histo_prima'] == 'Y')
{
	$("#micro_3").prop('checked', true);
	$("#micro_3").val("Y");
}
else 
{
	$("#micro_3").prop('checked', false);
	$("#micro_3").val("N");
}
/////////////////////////////////////////////////////////////////		
if (obj['psite_colon'] == 'Y')
{
	$("#prima_1").prop('checked', true);
	$("#prima_1").val("Y");
}
else 
{
	$("#prima_1").prop('checked', false);
	$("#prima_1").val("N");
}

if (obj['psite_brain'] == 'Y')
{
	$("#prima_2").prop('checked', true);
	$("#prima_2").val("Y");
}
else 
{
	$("#prima_2").prop('checked', false);
	$("#prima_2").val("N");
}

if (obj['psite_thyroid'] == 'Y')
{
	$("#prima_3").prop('checked', true);
	$("#prima_3").val("Y");
}
else 
{
	$("#prima_3").prop('checked', false);
	$("#prima_3").val("N");
}

if (obj['psite_uterine_cervix'] == 'Y')
{
	$("#prima_4").prop('checked', true);
	$("#prima_4").val("Y");
}
else 
{
	$("#prima_4").prop('checked', false);
	$("#prima_4").val("N");
}

if (obj['psite_liver'] == 'Y')
{
	$("#prima_5").prop('checked', true);
	$("#prima_5").val("Y");
}
else 
{
	$("#prima_5").prop('checked', false);
	$("#prima_5").val("N");
}

if (obj['psite_corpus_uteri'] == 'Y')
{
	$("#prima_6").prop('checked', true);
	$("#prima_6").val("Y");
}
else 
{
	$("#prima_6").prop('checked', false);
	$("#prima_6").val("N");
}

if (obj['psite_breast'] == 'Y')
{
	$("#prima_7").prop('checked', true);
	$("#prima_7").val("Y");
}
else 
{
	$("#prima_7").prop('checked', false);
	$("#prima_7").val("N");
}

if (obj['psite_blood'] == 'Y')
{
	$("#prima_8").prop('checked', true);
	$("#prima_8").val("Y");
}
else 
{
	$("#prima_8").prop('checked', false);
	$("#prima_8").val("N");
}

if (obj['psite_ovary'] == 'Y')
{
	$("#prima_9").prop('checked', true);
	$("#prima_9").val("Y");
}
else 
{
	$("#prima_9").prop('checked', false);
	$("#prima_9").val("N");
}

if (obj['psite_lung'] == 'Y')
{
	$("#prima_10").prop('checked', true);
	$("#prima_10").val("Y");
}
else 
{
	$("#prima_10").prop('checked', false);
	$("#prima_10").val("N");
}
if (obj['psite_esophagus'] == 'Y')
{
	$("#prima_11").prop('checked', true);
	$("#prima_11").val("Y");
}
else 
{
	$("#prima_11").prop('checked', false);
	$("#prima_11").val("N");
}

if (obj['psite_kidney'] == 'Y')
{
	$("#prima_12").prop('checked', true);
	$("#prima_12").val("Y");
}
else 
{
	$("#prima_12").prop('checked', false);
	$("#prima_12").val("N");
}

if (obj['psite_oral_cavity'] == 'Y')
{
	$("#prima_13").prop('checked', true);
	$("#prima_13").val("Y");
}
else 
{
	$("#prima_13").prop('checked', false);
	$("#prima_13").val("N");
}

if (obj['psite_stomach'] == 'Y')
{
	$("#prima_14").prop('checked', true);
	$("#prima_14").val("Y");
}
else 
{
	$("#prima_14").prop('checked', false);
	$("#prima_14").val("N");
}

if (obj['psite_pancreas'] == 'Y')
{
	$("#prima_15").prop('checked', true);
	$("#prima_15").val("Y");
}
else 
{
	$("#prima_15").prop('checked', false);
	$("#prima_15").val("N");
}

if (obj['psite_melanoma'] == 'Y')
{
	$("#prima_16").prop('checked', true);
	$("#prima_16").val("Y");
}
else 
{
	$("#prima_16").prop('checked', false);
	$("#prima_16").val("N");
}

if (obj['psite_nasopharynx'] == 'Y')
{
	$("#prima_17").prop('checked', true);
	$("#prima_17").val("Y");
}
else 
{
	$("#prima_17").prop('checked', false);
	$("#prima_17").val("N");
}

if (obj['psite_testis'] == 'Y')
{
	$("#prima_18").prop('checked', true);
	$("#prima_18").val("Y");
}
else 
{
	$("#prima_18").prop('checked', false);
	$("#prima_18").val("N");
}

if (obj['psite_prostate'] == 'Y')
{
	$("#prima_19").prop('checked', true);
	$("#prima_19").val("Y");
}
else 
{
	$("#prima_19").prop('checked', false);
	$("#prima_19").val("N");
}

if (obj['psite_rectum'] == 'Y')
{
	$("#prima_20").prop('checked', true);
	$("#prima_20").val("Y");
}
else 
{
	$("#prima_20").prop('checked', false);
	$("#prima_20").val("N");
}

if (obj['psite_bladder'] == 'Y')
{
	$("#prima_21").prop('checked', true);
	$("#prima_21").val("Y");
	$("#prima21").removeAttr("disabled");
}
else 
{
	$("#prima_21").prop('checked', false);
	$("#prima_21").val("N");
	$("#prima21").attr("disabled", true);
}


$("#prima21 option[value='" + obj['blodtype']+"']").attr("selected","selected");
$("#lateral option[value='" + obj['laterality_code']+"']").attr("selected","selected");
$("#treat_1 option[value='" + obj['trt_ppose']+"']").attr("selected","selected");
$("#prima_22_oth").val(obj['psite_others_specify']);
$("#treat_other_spec").val(obj['trt_ppose_other']);
$("#histo").val(obj['histo_type']);

$("#prim_hos").val(obj['pri_trt_hosp']);
var dteprim = setTimeLocale(obj['pri_trt_hosp_date']);
$("#prim_hos_1").val(dteprim);



$("#t").val(obj['tnm_system_t']);
$("#n").val(obj['tnm_system_n']);
$("#m").val(obj['tnm_system_m']);

if (obj['psite_others'] == 'Y')
{
	$("#prima_22").prop('checked', true);
	$("#prima_22").val("Y");
	$("#prima_22_oth").removeAttr("disabled");
}
else 
{
	$("#prima_22").prop('checked', false);
	$("#prima_22").val("N");
	$("#prima_22_oth").attr("disabled", true);

}
////////////////////////////////////////////////////////////////////////////////

if (obj['in_situ'] == 'Y')
{
	$("#stag_1").prop('checked', true);
	$("#stag_1").val("Y");
}
else 
{
	$("#stag_1").prop('checked', false);
	$("#stag_1").val("N");
}

if (obj['localized'] == 'Y')
{
	$("#stag_2").prop('checked', true);
	$("#stag_2").val("Y");
}
else 
{
	$("#stag_2").prop('checked', false);
	$("#stag_2").val("N");
}

if (obj['direct_ext'] == 'Y')
{
	$("#stag_3").prop('checked', true);
	$("#stag_3").val("Y");
}
else 
{
	$("#stag_3").prop('checked', false);
	$("#stag_3").val("N");
}

if (obj['reg_lymph_node'] == 'Y')
{
	$("#stag_4").prop('checked', true);
	$("#stag_4").val("Y");
}
else 
{
	$("#stag_4").prop('checked', false);
	$("#stag_4").val("N");
}

if (obj['three_four'] == 'Y')
{
	$("#stag_5").prop('checked', true);
	$("#stag_5").val("Y");
}
else 
{
	$("#stag_5").prop('checked', false);
	$("#stag_5").val("N");
}

if (obj['dist_metastasis'] == 'Y')
{
	$("#stag_6").prop('checked', true);
	$("#stag_6").val("Y");
}
else 
{
	$("#stag_6").prop('checked', false);
	$("#stag_6").val("N");
}

if (obj['dis_unknown'] == 'Y')
{
	$("#stag_7").prop('checked', true);
	$("#stag_7").val("Y");
}
else 
{
	$("#stag_7").prop('checked', false);
	$("#stag_7").val("N");
}
////////////////////////////////////////////////////////////////
if (obj['site_none'] == 'Y')
{
	$("#site_1").prop('checked', true);
	$("#site_1").val("Y");
}
else 
{
	$("#site_1").prop('checked', false);
	$("#site_1").val("N");
}

if (obj['site_dislym_nodes'] == 'Y')
{
	$("#site_2").prop('checked', true);
	$("#site_2").val("Y");
}
else 
{
	$("#site_2").prop('checked', false);
	$("#site_2").val("N");
}

if (obj['site_bone'] == 'Y')
{
	$("#site_3").prop('checked', true);
	$("#site_3").val("Y");
}
else 
{
	$("#site_3").prop('checked', false);
	$("#site_3").val("N");
}

if (obj['site_liver'] == 'Y')
{
	$("#site_4").prop('checked', true);
	$("#site_4").val("Y");
}
else 
{
	$("#site_4").prop('checked', false);
	$("#site_4").val("N");
}

if (obj['site_lung'] == 'Y')
{
	$("#site_5").prop('checked', true);
	$("#site_5").val("Y");
}
else 
{
	$("#site_5").prop('checked', false);
	$("#site_5").val("N");
}

if (obj['site_brain'] == 'Y')
{
	$("#site_6").prop('checked', true);
	$("#site_6").val("Y");
}
else 
{
	$("#site_6").prop('checked', false);
	$("#site_6").val("N");
}

if (obj['site_ovary'] == 'Y')
{
	$("#site_7").prop('checked', true);
	$("#site_7").val("Y");
}
else 
{
	$("#site_7").prop('checked', false);
	$("#site_7").val("N");
}

if (obj['site_skin'] == 'Y')
{
	$("#site_8").prop('checked', true);
	$("#site_8").val("Y");
}
else 
{
	$("#site_8").prop('checked', false);
	$("#site_8").val("N");
}

if (obj['site_other'] == 'Y')
{
	$("#site_9").prop('checked', true);
	$("#site_9").val("Y");
}
else 
{
	$("#site_9").prop('checked', false);
	$("#site_9").val("N");
}

if (obj['site_unknown'] == 'Y')
{
	$("#site_10").prop('checked', true);
	$("#site_10").val("Y");
}
else 
{
	$("#site_10").prop('checked', false);
	$("#site_10").val("N");
}


if (obj['trt_ppose'] == 'O')
{
	$("#treat_other_spec").removeAttr("disabled");
}
else 
{
	$("#treat_other_spec").attr("disabled", true);
}
///////////////////////////////////////////

if (obj['cb_surg'] == 'Y')
{
	$("#plan_1").prop('checked', true);
	$("#plan_1").val("Y");
}
else 
{
	$("#plan_1").prop('checked', false);
	$("#plan_1").val("N");
}

if (obj['cb_radthe'] == 'Y')
{
	$("#plan_2").prop('checked', true);
	$("#plan_2").val("Y");
}
else 
{
	$("#plan_2").prop('checked', false);
	$("#plan_2").val("N");
}

if (obj['cb_chethe'] == 'Y')
{
	$("#plan_3").prop('checked', true);
	$("#plan_3").val("Y");
}
else 
{
	$("#plan_3").prop('checked', false);
	$("#plan_3").val("N");
}

if (obj['cb_immthe'] == 'Y')
{
	$("#plan_4").prop('checked', true);
	$("#plan_4").val("Y");
}
else 
{
	$("#plan_4").prop('checked', false);
	$("#plan_4").val("N");
}

if (obj['cb_horm'] == 'Y')
{
	$("#plan_5").prop('checked', true);
	$("#plan_5").val("Y");
}
else 
{
	$("#plan_5").prop('checked', false);
	$("#plan_5").val("N");
}

if (obj['cb_unk'] == 'Y')
{
	$("#plan_6").prop('checked', true);
	$("#plan_6").val("Y");
}
else 
{
	$("#plan_6").prop('checked', false);
	$("#plan_6").val("N");
}

if (obj['cb_oth'] == 'Y')
{
	$("#plan_other").prop('checked', true);
	$("#plan_other").val("Y");
	$("#plan_other_spec").removeAttr("disabled");
}
else 
{
	$("#plan_other").prop('checked', false);
	$("#plan_other").val("N");
	$("#plan_other_spec").attr("disabled", true);
	$("#plan_other_spec").val("");
}

$("#plan_other_spec").val(obj['trt_details2']);

		//////////////////////////////////////////////////////////////////////	

		if (obj['cb_surg2'] == 'Y')
		{
			$("#add_1").prop('checked', true);
			$("#add_1").val("Y");
		}
		else 
		{
			$("#add_1").prop('checked', false);
			$("#add_1").val("N");
		}

		if (obj['cb_radthe2'] == 'Y')
		{
			$("#add_2").prop('checked', true);
			$("#add_2").val("Y");
		}
		else 
		{
			$("#add_2").prop('checked', false);
			$("#add_2").val("N");
		}

		if (obj['cb_chethe2'] == 'Y')
		{
			$("#add_3").prop('checked', true);
			$("#add_3").val("Y");
		}
		else 
		{
			$("#add_3").prop('checked', false);
			$("#add_3").val("N");
		}

		if (obj['cb_immthe2'] == 'Y')
		{
			$("#add_4").prop('checked', true);
			$("#add_4").val("Y");
		}
		else 
		{
			$("#add_4").prop('checked', false);
			$("#add_4").val("N");
		}

		if (obj['cb_horm2'] == 'Y')
		{
			$("#add_5").prop('checked', true);
			$("#add_5").val("Y");
		}
		else 
		{
			$("#add_5").prop('checked', false);
			$("#add_5").val("N");
		}

		if (obj['cb_unk2'] == 'Y')
		{
			$("#add_6").prop('checked', true);
			$("#add_6").val("Y");
		}
		else 
		{
			$("#add_6").prop('checked', false);
			$("#add_6").val("N");
		}

		if (obj['cb_oth2'] == 'Y')
		{
			$("#add_other").prop('checked', true);
			$("#add_other").val("Y");
			$("#add_other_spec").removeAttr("disabled");
		}
		else 
		{
			$("#add_other").prop('checked', false);
			$("#add_other").val("N");
			$("#add_other_spec").attr("disabled", true);
			$("#add_other_spec").val("");
		}

		$("#add_other_spec").val(obj['trt_details2']);

		//////////////////////////////////////////////////////////////////////	
		if (obj['cb_surg3'] == 'Y')
		{
			$("#treathos_1").prop('checked', true);
			$("#treathos_1").val("Y");
		}
		else 
		{
			$("#treathos_1").prop('checked', false);
			$("#treathos_1").val("N");
		}

		if (obj['cb_radthe3'] == 'Y')
		{
			$("#treathos_2").prop('checked', true);
			$("#treathos_2").val("Y");
		}
		else 
		{
			$("#treathos_2").prop('checked', false);
			$("#treathos_2").val("N");
		}

		if (obj['cb_chethe3'] == 'Y')
		{
			$("#treathos_3").prop('checked', true);
			$("#treathos_3").val("Y");
		}
		else 
		{
			$("#treathos_3").prop('checked', false);
			$("#treathos_3").val("N");
		}

		if (obj['cb_immthe3'] == 'Y')
		{
			$("#treathos_4").prop('checked', true);
			$("#treathos_4").val("Y");
		}
		else 
		{
			$("#treathos_4").prop('checked', false);
			$("#treathos_4").val("N");
		}

		if (obj['cb_horm3'] == 'Y')
		{
			$("#treathos_5").prop('checked', true);
			$("#treathos_5").val("Y");
		}
		else 
		{
			$("#treathos_5").prop('checked', false);
			$("#treathos_5").val("N");
		}

		if (obj['cb_unk3'] == 'Y')
		{
			$("#treathos_6").prop('checked', true);
			$("#treathos_6").val("Y");
		}
		else 
		{
			$("#treathos_6").prop('checked', false);
			$("#treathos_6").val("N");
		}

		if (obj['cb_oth3'] == 'Y')
		{
			$("#treathos_other").prop('checked', true);
			$("#treathos_other").val("Y");
			$("#treathos_other_spec").removeAttr("disabled");
		}
		else 
		{
			$("#treathos_other").prop('checked', false);
			$("#treathos_other").val("N");
			$("#treathos_other_spec").attr("disabled", true);
			$("#treathos_other_spec").val("");
		}

		$("#treathos_other_spec").val(obj['trt_details3']);

		//////////////////////////////////////////////////////////////////////	

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
function Cancerwizard()
{
	var formType = $("#formIden").val();
	_initWizard();
	_eventWizard(formType);
	_validateWizard();
}

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

				// console.log(data);
				$('#info_cs').removeAttr('disabled',false);
				$.ajax({
					type: "POST",
					url: baseURL + "Cancer/saveCancer",
					data: data,
					processData: false,
					contentType: false,
					success: function (data, response) {
						window.location.replace(baseURL + "Cancer");
						toastr.success('Successfully Saved! ', 'Success');
					},
					error: function (xhr, desc, err) {
						toastr.error(xhr, 'Error, Final Diagnosis is required!');
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


