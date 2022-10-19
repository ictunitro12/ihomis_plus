var Module=$('#module').val();

function checkDengue(enccode, hpercode) {
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    hpercode = encodeURIComponent(encodeURIComponent(hpercode));
    $.ajax({
        type: "POST",
        url: "../Dengue/checkDengue/" + enccode + "/" + hpercode,
        data: "JSON",
        success: function (data) {
            if (data == 1) {
                toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
				window.location.reload();
				$("#PatSearch").modal('show'); 
            }
            else {
                initDengue(hpercode,enccode );
            }
        },
        error: function (data) {
            alert('Please try again!');
        }
    });
}

function initDengue(enccode,hpercode)
	{	
		CivilStatus();
		uppercase();
		SelReligion();
		SelHospital2();
		SelIndig();
		City();
		getPatientData(enccode);
		$('#enccode').val(enccode);
		$('#formIden').val('insert');
		$("#date_onset").val(getTimeLocale());
		$("#search").attr("disabled", false);
	}
		
function initDengueEdit(enccode,hpercode)
	{
		CivilStatus();
		uppercase();
		SelReligion();
		City();
		getDengueData(enccode,hpercode);
		$('#enccode').val(enccode);
		$('#formIden').val('update');
		$("#search").attr("disabled", true);
	}

function DenguePatientInfo(hpercode)
	{
		var obj="";
		$.ajax({
		type: "POST",
		url: baseURL+"Dengue/DenguePatientInformation/"+hpercode,
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
			$.ajax({
			url: baseURL + "Dengue/getPatientData/"+enccode,
			type:"POST",
			data:"JSON",
			processData:false,
			cache:false,
			async:true,
			success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);
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
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			var gender=sex(obj['patsex']);
			$('#info_sex').val(obj['patsex']);
			$('#patadmit').val(obj['admission']);
			
			// $('#info_year').val(obj['age']);
			// $('#info_month').val(obj['patagemo']);
			// $('#info_day').val(obj['patagedy']);

			$('#info_mot_fullname').val(obj['mothername']);
			$('#info_mot_lname').val(obj['motlast']);
			$('#info_mot_fname').val(obj['motfirst']);
			$('#info_mot_mname').val(obj['motmid']);

			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['Cellphone']);
			$('#info_emailadd').val(obj['pat_email']);
			$('#info_age').val(obj['age']);
			
			var dob = obj['patbdate'];
			var dobs = (dob == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			$("#info_dob").val(dobs);	

			var asc = obj['date_seen'];
			var ascs = (asc == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(asc);
			$("#date_asc").val(ascs);
			
			$('#info_bplace').val(obj['patbplace']);
			$('#info_disp').val(obj['disposition']);
			$('#Religion').val(obj['relcode']);
			$('#info_cs').val(obj['patcstat']);

			var date = new Date(obj['patbdate']);
			var dob=(zeroFill((date.getMonth()+1))+'-'+zeroFill((date.getDate()))+'-'+date.getFullYear());
			//var ages= AgeComputation(dob);

			$('#info_occup').val(obj['Occupation']);

			$('#dia_newfhud').val(obj['newfhudcode']);
			$('#final_diag').val(obj['diagtext']);

			var str = obj['hpercode'];
			console.log(str);
  			var res = str.slice(12, 15);
			$('#dia_patient_id').val(res);
			$('#info_philhealth').val(obj['phicnum']);

			},
			error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
	}
	
	function getDengueData(enccode,hpercode)
	{
			var enctr = encodeURIComponent(encodeURIComponent(enccode));
			var enccoded = encodeURIComponent(encodeURIComponent(hpercode));
			$.ajax({
			url: baseURL + "Dengue/getDengueData/"+enctr+"/"+enccoded,
			type:"POST",
			data:"JSON",
			processData:false,
			cache:false,
			async:true,
			success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);
			var hfhudcode = obj['place_consult'];
			setHospital2(hfhudcode);
			SelHospital2();
			var ipcode = obj['member_of_IP'];
			setIndigenous(ipcode);
			SelIndig();
			$('#getRegion').val(obj['regname']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getCity').val(obj['cc_city']);
			$('#getProv').val(obj['cc_prov']);
			$('#street_no').val(obj['patstr']);
			$('#info_zip').val(obj['patzip']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_hosppat_idno').val(obj['hpercode']);
			$('#encountercode').val(obj['enccode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#patadmit').val(obj['admission']);
			var gender=sex(obj['sex']);
			$('#info_sex').val(obj['patsex']);
			$('#Religion').val(obj['relcode']);
			$('#info_cs').val(obj['patcstat']);
			$('#info_bplace').val(obj['patbplace']);
			$('#info_disp').val(obj['disposition']);
			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['Cellphone']);

			var asc = obj['dateseen'];
			var ascs = (asc == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(asc);
			$("#date_asc").val(ascs);

			var dob = obj['patbdate'];
			var dobs = (dob == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			$("#info_dob").val(dobs);	

			var dofc = obj['date_consult'];
			var dofcs = (dofc == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(dofc);
			$("#date_consult").val(dofcs);	

			var doi = obj['date_onset'];
			var dois = (doi == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(doi);
			$("#date_onset").val(dois);

			var dvf = obj['date_vaccine_1st'];
			var dvfs = (dvf == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(dvf);
			$("#date_vaccine_1st").val(dvfs);

			var dvl = obj['date_vaccine_last'];
			var dvls = (dvl == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(dvl);
			$("#date_vaccine_last").val(dvls);

			var NS1RDT = obj['NS1RDT_date'];
			var NS1RDTs = (NS1RDT == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(NS1RDT);
			$("#NS1RDT_date").val(NS1RDTs);

			var IgG = obj['IgG_date'];
			var IgGs = (IgG == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(IgG);
			$("#IgG_date").val(IgGs);

			var IgM = obj['IgM_date'];
			var IgMs = (IgM == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(IgM);
			$("#IgM_date").val(IgMs);

			var PCR = obj['PCR_date'];
			var PCRs = (PCR == "1970-01-01 00:00:00") ? "0000-00-00 00:00:00" : setTimeLocale(PCR);
			$("#PCR_date").val(PCRs);
			
			var bplace = obj['patbplace'];
			$('#info_year').val(obj['patage']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);
			$('#info_philhealth').val(obj['philhealth']);
			$('#info_street').val(obj['patstr']);
			$('#info_zip').val(obj['patzip']);
			$('#patadmit').val(obj['admitted']);
			$('#info_age').val(obj['age']);
			
			$('#no_dose_received').val(obj['no_dose_received']);
			$("#NS1RDT_result option[value='" + obj['NS1RDT_result']+"']").attr("selected","selected");
			$("#PCR_result option[value='" + obj['PCR_result']+"']").attr("selected","selected");
			$("#IgG_result option[value='" + obj['IgG_result']+"']").attr("selected","selected");
			$("#IgM_result option[value='" + obj['IgM_result']+"']").attr("selected","selected");
			$("#clinical_classification option[value='" + obj['clinical_classification']+"']").attr("selected","selected");
			$("#case_classification option[value='" + obj['case_classification']+"']").attr("selected","selected");
			$('#entryby').val(obj['entryby']);
			$('#entry_date').val(obj['entry_date']);
			
			if(obj['pconsult'] == 'Y')
			{	$('#pconsult').prop('checked', true);
				$("pconsult").val("Y");
			}
			else{
				$("pconsult").val("N");
			}
			$("#pconsult option[value='" + obj['pconsult']+"']").attr("selected","selected");

			$('#selIndig').val(obj['member_of_IP']);
			$('#selHospital').val(obj['place_consult']);

			if(obj['NS1RDT_result'] == ''){
				$("#NS1RDT_date").attr('readonly', true );
			}else{
				$("#NS1RDT_date").removeAttr("readonly");
			}

			if(obj['PCR_result'] == ''){
				$("#PCR_date").attr('readonly', true );
			}else{
				$("#PCR_date").removeAttr("readonly");
			}

			if(obj['IgG_result'] == ''){
				$("#IgG_date").attr('readonly', true );
			}else{
				$("#IgG_date").removeAttr("readonly");
			}

			if(obj['IgM_result'] == ''){
				$("#IgM_date").attr('readonly', true );
			}else{
				$("#IgM_date").removeAttr("readonly");
			}

			},
			error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
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
	