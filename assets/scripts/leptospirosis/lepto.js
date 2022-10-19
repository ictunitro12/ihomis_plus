const Entry = require("laravel-mix/src/builder/Entry");

var Module=$('#module').val();

function checkLepto(enccode, hpercode) {
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    hpercode = encodeURIComponent(encodeURIComponent(hpercode));
    $.ajax({
        type: "POST",
        url: "../Lepto/checkLepto/" + enccode + "/" + hpercode,
        data: "JSON",
        success: function (data) {
            if (data == 1) {
                toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
				window.location.reload();
				$("#PatSearch").modal('show'); 
            }
            else {
                initLepto(hpercode,enccode );
            }
        },
        error: function (data) {
            alert('Please try again!');
        }
    });
}

function initLepto(enccode,hpercode)
	{	
		CivilStatus();
		uppercase();
		SelReligion();
		City();
		CityLepto();
		SelHospital2();
		SelIndig();
		// AgeComputation();
		getPatientData(enccode);
		$('#enccode').val(enccode);
		$('#formIden').val('insert');
		$("#date_onset").val(getTimeLocale());
		$("#date_report").val(getTimeLocale());
		$("#date_consult").val(getTimeLocale());
		$("#coldte").val(getTimeLocale());
		$("#search").attr("disabled", false);
	}
		
function initLeptoEdit(enccode,hpercode)
	{
		CivilStatus();
		uppercase();
		SelReligion();
		City();
		// AgeComputation();
		// getPatientData(enccode);
		getLeptoData(enccode,hpercode);
		PatientLeptoExposure(hpercode);
		$('#enccode').val(enccode);
		$('#formIden').val('update');
		$("#search").attr("disabled", true);
	}
	
function DenguePatientInfo(hpercode)
	{
		var obj="";
		$.ajax({
		type: "POST",
		url: baseURL+"Lepto/DenguePatientInformation/"+hpercode,
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

function getPatientData(enccode)
	{
			var enctr = encodeURIComponent(encodeURIComponent(enccode));
			$.ajax({
			url: baseURL + "Lepto/getPatientData/"+enctr,
			type:"POST",
			data:"JSON",
			processData:false,
			cache:false,
			async:true,
			success: function(data,response){
			var obj = $.parseJSON(data);
			$('#getRegion').val(obj['regname']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getCity').val(obj['cc_city']);
			$('#getProv').val(obj['cc_prov']);
			$('#info_street').val(obj['patstr']);
			$('#info_zip').val(obj['patzip']);
			$('#encountercode').val(obj['enccode']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#code').val(obj['enccode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#info_age').val(obj['age']);
			var gender=sex(obj['patsex']);
			$('#info_sex').val(obj['patsex']);
			
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

			var dob = obj['patbdate'];
			var dobs = (dob == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			$("#info_dob").val(dobs);	

			var asc = obj['date_seen'];
			var ascs = (asc == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(asc);
			$("#date_asc").val(ascs);	
			
			$('#info_bplace').val(obj['patbplace']);
			$('#info_disp').val(obj['disposition']);
			$('#Religion').val(obj['relcode']);
			$("#info_nat option[value='" + obj['natcode']+"']").attr("selected",true);
			$('#info_cs').val(obj['patcstat']);

			var date = new Date(obj['patbdate']);
			var dob=(zeroFill((date.getMonth()+1))+'-'+zeroFill((date.getDate()))+'-'+date.getFullYear());
			// var ages= AgeComputation(dob);

			$('#info_occup').val(obj['Occupation']);

			$('#dia_newfhud').val(obj['newfhudcode']);
			$('#final_diag').val(obj['diagtext']);

			var str = obj['hpercode'];
  			var res = str.slice(12, 15);
			$('#dia_patient_id').val(res);
			$('#info_philhealth').val(obj['phicnum']);

			$("#discdate").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['dischargedate'])));
			if (obj['ipgroup'] == null || obj['ipgroup'] == '') {
				$("#member_of_ip option[value='N']").attr("selected", true);
			}
			else{
				var ipcode = obj['ipgroup'];
				setIndigenous(ipcode);
				$("#selIndig option[value='" + obj['ipgroup'] + "']").attr("selected", true);
				$("#member_of_ip option[value='Y']").attr("selected", true);}
				$('#selIndig').prop('disabled',false);
			},
			error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
		
			$('#member_of_ip').change(function() {
				if ($(this).val() == 'Y') {
					$('#selIndig').prop('disabled',false);
				} else if ($(this).val() == 'N') {
					document.getElementById('selIndig').innerHTML = null;
					$('#selIndig').prop("disabled", true);
				} else {
					document.getElementById('selIndig').innerHTML = null;
					$('#selIndig').prop("disabled", true);
				}
			});
	}
	
	function getLeptoData(enccode,hpercode)
	{
			var enctr = encodeURIComponent(encodeURIComponent(enccode));
			var enccoded = encodeURIComponent(encodeURIComponent(hpercode));
			$.ajax({
			url: baseURL + "Lepto/getLeptoData/"+enctr+"/"+enccoded,
			type:"POST",
			data:"JSON",
			processData:false,
			cache:false,
			async:true,
			success: function(data,response){
			var obj = $.parseJSON(data);
			var hfhudcode = obj['place_consult'];
			setHospital2(hfhudcode);
			SelHospital2();
			var ipcode = obj['ipgroup'];
			setIndigenous(ipcode);
			SelIndig();
			setCityLepto(obj['city_exp']);
			$('#getRegion').val(obj['regname']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getCity').val(obj['cc_city']);
			$('#getProv').val(obj['cc_prov']);
			$('#info_street').val(obj['patstr']);
			$('#info_zip').val(obj['patzip']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#encountercode').val(obj['enccode']);
			$('#toecode').val(obj['toecode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#info_age').val(obj['age']);
			$('#admission').val(obj['admission']);
			var gender=sex(obj['sex']);
			$('#Religion').val(obj['relcode']);
			$('#info_sex').val(obj['patsex']);
			$('#info_cs').val(obj['patcstat']);
			$("#info_race option[value='" + obj['race_code']+"']").attr("selected",true);
			$("#info_ethnic option[value='" + obj['ethnic_code']+"']").attr("selected",true);
			$("#info_occup option[value='" + obj['occup_code']+"']").attr("selected",true);
			$("#info_educat option[value='" + obj['educ_attain_code']+"']").attr("selected",true);
			$("#dia_type option[value='" + obj['dia_type_code']+"']").attr("selected",true);
			$("#dia_reasonrefer option[value='" + obj['refreason_code']+"']").attr("selected",true);
			$("#dia_patstat option[value='" + obj['patient_status_code']+"']").attr("selected",true);
			
			$("#info_typepat option[value='" + obj['typeofpatient']+"']").attr("selected",true);
			$('#info_bplace').val(obj['patbplace']);
			$('#info_disp').val(obj['disposition']);
			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['Cellphone']);
			$("#member_of_ip option[value='" + obj['member_of_IP'] + "']").attr("selected", true);
			if (obj['ipgroup'] != null || obj['ipgroup'] != '') {
				var ipcode = obj['ipgroup'];
				setIndigenous(ipcode);
				$("#member_of_ip option[value='Y']").attr("selected", true);
				$("#selIndig option[value='" + obj['ipgroup'] + "']").attr("selected", true);
			}
			var dob = obj['patbdate'];
			var dobs = (dob == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			$("#info_dob").val(dobs);	
			
			var doi = obj['date_onset'];
			var dois = (doi == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(doi);
			$("#date_onset").val(dois);	

			var rep = obj['date_report'];
			var reps = (rep == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(rep);
			$("#date_report").val(reps);	
		
			var consul = obj['date_consult'];
			var consuls = (consul == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(consul);
			$("#date_consult").val(consuls);

			var cold = obj['coldte'];
			var colds = (cold == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(cold);
			$("#coldte").val(colds);

			var asc = obj['dateseen'];
			var ascs = (asc == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(asc);
			$("#date_asc").val(ascs);

			var bplace = obj['patbplace'];
			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);
			$('#info_philhealth').val(obj['philhealth']);
			
			// $("#admitted option[value='" + obj['admitted']+"']").attr("selected","selected");
			$("#case_classification option[value='" + obj['case_classification']+"']").attr("selected","selected");
			$("#Lab_result option[value='" + obj['labor_result']+"']").attr("selected","selected");
			$("#Lab_test option[value='" + obj['labor_test']+"']").attr("selected","selected");
		
      		if(obj['pconsult'] == 'Y')
			{	$('#pconsult').prop('checked', true);
				$("#pconsult").val("Y");
			}
			else{
				$("#pconsult").val("N");
			}
			$("#pconsult option[value='" + obj['pconsult']+"']").attr("selected","selected");
			$("#exposure option[value='" + obj['exposure']+"']").attr("selected","selected");
			$('#selHospital').val(obj['place_consult']);
			$('#selRegLepto').val(obj['region_exp']);
			$('#selProvLepto').val(obj['prov_exp']);
			$('#selCityLepto').val(obj['city_exp']);
			$('#selBrgyLepto').val(obj['brgy_exp']);
			$('#street_Lepto').val(obj['patstr_exp']);
			
			$('#entryby').val(obj['entryby']);
			$('#entry_date').val(obj['entry_date']);
			if(obj['member_of_IP'] == 'Y')
			{	$('#selIndig').prop('disabled',false);
				$("#member_of_ip").val("Y");
			}
			else{
				$("#member_of_ip").val("N");
				$('#selIndig').prop('disabled',true);
			}
			},
			error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
		
			$('#member_of_ip').change(function() {
				if ($(this).val() == 'Y') {
					$('#selIndig').prop('disabled',false);
				} else if ($(this).val() == 'N') {
					document.getElementById('selIndig').innerHTML = null;
					$('#selIndig').prop("disabled", true);
				} else {
					document.getElementById('selIndig').innerHTML = null;
					$('#selIndig').prop("disabled", true);
				}
			});
	}
	
	function PatientLeptoExposure(hpercode)
	 {
	  $.ajax({
	  type: "POST",
	  url: baseURL+"Lepto/PatientLeptoExposure/"+hpercode,
	  data: "JSON",
	  async:false,
	  success: function(data,status){ 

	  	var obj = $.parseJSON(data);
	  	$('#street_Lepto').val(obj['patstr_exp']);
		var str = obj['region_exp'].substring(0,2);
		setRegionLepto(str);
		setRegionLepto(obj['prov_exp']);
		$('#selProvLepto').removeAttr("disabled");
		setCityLepto(obj['city_exp']);
		$('#selCityLepto').removeAttr("disabled");
		setBrgyLepto(obj['brgy_exp'])
		$('#selBrgyLepto').removeAttr("disabled");
		},
	  });
	 }

	 $('#search').click(function () {
		$("#PatSearch").modal('show');
		window.location.reload();
	});
	// function AgeComputation(bdate)
	// { 
	// $.ajax({
	// type: "POST",
	// url: baseURL+"Patient/AgeComp/"+bdate,
	// data: "json",
	// success: function(data,status)
	// { 
	// var obj = $.parseJSON(data);
	// $("#info_year").val(obj['year']);
	// $("#info_month").val(obj['month']);
	// $("#info_day").val(obj['day']);
	// },
	// error: function(data,status)
	// {
	// 		return status;
	// }
	// 	});
	// }
	