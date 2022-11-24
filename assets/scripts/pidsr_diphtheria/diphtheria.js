var Module = $('#module').val();

function initDiphtheria(hpercode, enccode) {
	CivilStatus();
	// uppercase();
	SelIndig();
	getPatientData(enccode);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
}

function initDiphtheriaEdit(hpercode, enccode) {
	initcheck();
	CivilStatus();
	// uppercase();
	getDiphtheriaData(enccode, hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$('#patSearchbtn').attr('hidden',true);

}

function getPatientData(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "PIDSR_Diphtheria/getPatientData/" + enctr,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			var fullname = obj['patlast'] + ", " + obj['patfirst'] + " " + obj['patmiddle'] + "., " + obj['patsuffix'] + "."
			var hpercode = obj['hpercode'];
			var bdate = obj['patbdate'];
			var str = obj['patemernme'];
			var picture = obj['picname'];
			$('#getStr').val(obj['currentstr']);
			$('#getReg').val(obj['regname']);
			$('#getCity').val(obj['cc_city']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getProv').val(obj['cc_prov']);
			$('#getZip').val(obj['currentzip']);
			$('#getStr2').val(obj['permstr']);
			$('#getReg2').val(obj['regname2']);
			$('#getCity2').val(obj['cc_city2']);
			$('#getBrgy2').val(obj['cc_brgy2']);
			$('#getProv2').val(obj['cc_prov2']);
			$('#getZip2').val(obj['permzip']);
			$('#admitted').val(obj['admission']);
			$('#encountercode').val(obj['enccode']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosppat_idno').val(hpercode);
			$('#code').val(obj['enccode']);
			$('#info_fullname').val(fullname);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_suffix').val(obj['patsuffix']);
			$('#info_mname').val(obj['patmiddle']);
			var gender = sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex'] + "']").attr("selected", true);

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
			$("#info_dob").val($.datepicker.formatDate('yy-mm-dd', new Date(bdate)));
			$('#info_bplace').val(obj['patbplace']);

			$('#selRel').val(obj['relcode']);
			$("#info_nat option[value='" + obj['natcode'] + "']").attr("selected", true);
			$("#info_cs option[value='" + obj['patcstat'] + "']").attr("selected", true);
			var ipcode = obj['ipgroup'];
			if (ipcode == '' || ipcode == null) {
				$('#selIndig').attr("disabled", true);
				$("#member_ip option[value='N']").attr("selected", true);
			}
			else {
				setIndigenous(ipcode);
				$("#member_ip option[value='Y']").attr("selected", true);
				$("#selIndig option[value='" + obj['ipgroup'] + "']").attr("selected", true);
				$('#selIndig').removeAttr('disabled');
			}
			var date = new Date(obj['patbdate']);
			var dob = (zeroFill((date.getMonth() + 1)) + '-' + zeroFill((date.getDate())) + '-' + date.getFullYear());
			$('#date_admitted').val(setTimeLocale(obj['date_admitted']));
			$("#outcome option[value='" + obj['outcome'] + "']").attr("selected", true);
			var date_died = obj['date_died'];
			var date_dieds = ((date_died == "1970-01-01 00:00:00") || (date_died == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_died);
			$('#date_died').val(date_dieds);

			$('#placefirstconsult').val(obj['hospname']);

		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function getDiphtheriaData(enccode, hpercode) {

	var enctr = encodeURIComponent(encodeURIComponent(hpercode));
	var enccoded = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "PIDSR_Diphtheria/getDiphtheriaData/" + enctr + "/" + enccoded,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			var fullname = obj['patlast'] + ", " + obj['patfirst'] + " " + obj['patmiddle'] + "., " + obj['patsuffix'] + "."
			var hpercode = obj['hpercode'];
			var bdate = obj['patbdate'];
			var datess = new Date(bdate);
			var str = obj['patemernme'];
			var picture = obj['picname'];
			$('#info_dob').val($.datepicker.formatDate('yy-mm-dd', new Date(bdate)));
			$('#getStr').val(obj['currentstr']);
			$('#getReg').val(obj['regname']);
			$('#getCity').val(obj['cc_city']);
			$('#getBrgy').val(obj['cc_brgy']);
			$('#getProv').val(obj['cc_prov']);
			$('#getZip').val(obj['currentzip']);
			$('#getStr2').val(obj['permstr']);
			$('#getReg2').val(obj['regname2']);
			$('#getCity2').val(obj['cc_city2']);
			$('#getBrgy2').val(obj['cc_brgy2']);
			$('#getProv2').val(obj['cc_prov2']);
			$('#getZip2').val(obj['permzip']);
			$('#admitted').val(obj['admission']);
			$('#encountercode').val(obj['enccode']);
			$('#info_hosregno').val(obj['newfhudcode']);
			$('#info_rephealthfac').val(obj['hospname']);
			$('#info_hosppat_idno').val(hpercode);
			$('#code').val(obj['enccode']);
			$('#info_fullname').val(fullname);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_suffix').val(obj['patsuffix']);
			$('#info_mname').val(obj['patmiddle']);
			var gender = sex(obj['patsex']);
			$('#member_ip option[value="' + obj['member_of_IP'] + '"]').attr("selected", true);
			$("#info_sex option[value='" + obj['patsex'] + "']").attr("selected", true);
			var bplace = obj['patbplace'];
			$('#info_year').val(obj['age']);
			$('#info_month').val(obj['patagemo']);
			$('#info_day').val(obj['patagedy']);

			$('#info_telno').val(obj['Landline']);
			$('#info_mobno').val(obj['pattelno']);
			$('#info_emailadd').val(obj['pat_email']);
			$("#info_dob").val($.datepicker.formatDate('yy-mm-dd', new Date(obj['patbdate'])));
			$('#info_bplace').val(obj['patbplace']);

			$('#selRel').val(obj['relcode']);
			$("#info_nat option[value='" + obj['natcode'] + "']").attr("selected", true);
			$("#info_cs option[value='" + obj['patcstat'] + "']").attr("selected", true);

			var ipcode = obj['ipgroup'];
			if (ipcode == '' || ipcode == null) {
				$('#selIndig').attr("disabled", true);
				$("#member_ip option[value='N']").attr("selected", true);
			}
			else {
				setIndigenous(ipcode);
				$("#member_ip option[value='Y']").attr("selected", true);
				$("#selIndig option[value='" + ipcode + "']").attr("selected", true);
				$('#selIndig').removeAttr('disabled');
			}
			
			$('#case_classification option[value="' + obj['caseclassification'] + '"]').attr("selected", true);
			
			$('#date_admitted').val(setTimeLocale(obj['date_admitted']));
			var date_onset = obj['date_onset'];
			var date_onsetss = ((date_onset == "1970-01-01 00:00:00") || (date_onset == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_onset);
			$('#date_onset').val(date_onsetss);
			$('#consulted option[value="' + obj['consulted'] + '"]').attr("selected", true);
			$('#date_firstconsult').val(setTimeLocale(obj['date_consulted']));
			$('#placefirstconsult').val(obj['placeconsulted']);
			$('#admitted option[value="' + obj['admitted'] + '"]').attr("selected", true);
			$('#fever option[value="' + obj['fever'] + '"]').attr("selected", true);
			$('#arthralgia option[value="' + obj['arthralgia'] + '"]').attr("selected", true);
			
			$('#historytravel option[value="' + obj['historytravel'] + '"]').attr("selected", true);
			$('#historytravel_specify').val(obj['historytravel_specify']);

			$("#outcome option[value='" + obj['outcome'] + "']").attr("selected", true);
			$('#seroigmresult option[value="' + obj['seroigmresult'] + '"]').attr("selected", true);
			$('#serodatedone').val($.datepicker.formatDate('yy-mm-dd', new Date(obj['serodatedone'])));
			$('#seroiggresult option[value="' + obj['seroiggresult'] + '"]').attr("selected", true);
			$('#seroiggdatedone').val($.datepicker.formatDate('yy-mm-dd', new Date(obj['seroiggdatedone'])));
			$('#rtpcrresult option[value="' + obj['rtpcrresult'] + '"]').attr("selected", true);
			$('#rtpcrdatedone').val($.datepicker.formatDate('yy-mm-dd', new Date(obj['rtpcrdatedone'])));
			$('#viralisoresult option[value="' + obj['viralisoresult'] + '"]').attr("selected", true);
			$('#viralisodatedone').val($.datepicker.formatDate('yy-mm-dd', new Date(obj['viralisodatedone'])));
			var date_died = obj['date_died'];
			var date_dieds = ((date_died == "1970-01-01 00:00:00") || (date_died == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_died);

			$('#entryby').val(obj['entryby']);
			$('#entry_date').val(setTimeLocale(obj['entry_date']));
			if (obj['arthralgia'] == 'Y') {
				$('#date_arthralgia').removeAttr("disabled", true);
				$('#date_arthralgia').val(setTimeLocale(obj['date_arthralgia']));
				$('#arthralgia').val('Y')
			}
			else {
				$('#date_arthralgia').attr('disabled',true);
				$('#arthralgia').val('N');
			}
			if (obj['outcome'] == 'D') {
				$('#date_died').removeAttr("disabled", true);
				$('#date_died').val(date_dieds);
				$('#outcome').val('D')
			}
			else {
				$('#date_died').attr('disabled',true);
				$('#outcome').val('A');
			}
			if (obj['historytravel'] == 'Y') {
				$('#historytravel_specify').removeAttr("disabled", true);
				$('#historytravel').val('Y')
			}
			else {
				$('#historytravel_specify').attr('disabled',true);
				$('#historytravel').val('N');
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

