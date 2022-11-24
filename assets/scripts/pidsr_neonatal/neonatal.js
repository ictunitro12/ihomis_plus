var Module = $('#module').val();

function initNeonatal(hpercode, enccode) {
	CivilStatus();
	// uppercase();
	SelIndig();
	getPatientData(enccode);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
}

function initNeonatalEdit(hpercode, enccode) {
	initcheck();
	CivilStatus();
	// uppercase();
	getNeonatalData(enccode, hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$('#patSearchbtn').attr('hidden', true);

}

function getPatientData(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "PIDSR_Neonatal/getPatientData/" + enctr,
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
			var mothersfullname = obj['motfirst']+' '+obj['motmid']+' '+obj['motlast'];
			if(mothersfullname == 'undifined')
			{
				$('#motherfullname').val('');
			}
			else{
				$('#motherfullname').val(mothersfullname);
			}
			$('#mottel').val(obj['mottel']);

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

function getNeonatalData(enccode, hpercode) {

	var enctr = encodeURIComponent(encodeURIComponent(hpercode));
	var enccoded = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "PIDSR_Neonatal/getNeonatalData/" + enctr + "/" + enccoded,
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

			var mothersfullname = obj['motfirst']+' '+obj['motmid']+' '+obj['motlast'];
			if(mothersfullname == 'undifined')
			{
				$('#motherfullname').val('');
			}
			else{
				$('#motherfullname').val(mothersfullname);
			}
			$('#mottel').val(obj['mottel']);

			$('#date_admitted').val(setTimeLocale(obj['date_admitted']));
			var date_onset = obj['date_onset'];
			var date_onsetss = ((date_onset == "1970-01-01 00:00:00") || (date_onset == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_onset);
			$('#date_onset').val(date_onsetss);
			$('#consulted option[value="' + obj['consulted'] + '"]').attr("selected", true);

			$('#admitted option[value="' + obj['admitted'] + '"]').attr("selected", true);
			$("#outcome option[value='" + obj['outcome'] + "']").attr("selected", true);

			var date_died = obj['date_died'];
			var date_dieds = ((date_died == "1970-01-01 00:00:00") || (date_died == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_died);
			$('#date_died').val(date_dieds)

			$('#entryby').val(obj['entryby']);
			$('#entry_date').val(setTimeLocale(obj['entry_date']));
			$('#admitted').val(obj['admitted']);
			$('#date_admitted').val(obj['date_admitted']);
			$('#date_onset').val(obj['date_onset']);

			if (obj['babysuckcry2days'] == 'Y') {
				$('#babysuckcry2daysy').prop('checked', true);
				$('#babysuckcry2daysy').val('Y');
			}
			else if (obj['babysuckcry2days'] == 'N') {
				$('#babysuckcry2daysn').prop('checked', true);
				$('#babysuckcry2daysn').val('N');
			}
			else {
				$('#babysuckcry2daysu').prop('checked', true);
				$('#babysuckcry2daysu').val('U');
			}

			if (obj['babysuckcry328days'] == 'Y') {
				$('#babysuckcry328daysy').prop('checked', true);
				$('#babysuckcry328daysy').val('Y');
			}
			else if (obj['babysuckcry328days'] == 'N') {
				$('#babysuckcry328daysn').prop('checked', true);
				$('#babysuckcry328daysn').val('N');
			}
			else {
				$('#babysuckcry328daysu').prop('checked', true);
				$('#babysuckcry328daysu').val('U');
			}

			if (obj['convulsions'] == 'Y') {
				$('#convulsionsy').prop('checked', true);
				$('#convulsionsy').val('Y');
			}
			else if (obj['convulsions'] == 'N') {
				$('#convulsionsn').prop('checked', true);
				$('#convulsionsn').val('N');
			}
			else {
				$('#convulsionsu').prop('checked', true);
				$('#convulsionsu').val('U');
			}

			if (obj['umbilical'] == 'Y') {
				$('#umbilicaly').prop('checked', true);
				$('#umbilicaly').val('Y');
			}
			else if (obj['umbilical'] == 'N') {
				$('#umbilicaln').prop('checked', true);
				$('#umbilicaln').val('N');
			}
			else {
				$('#umbilicalu').prop('checked', true);
				$('#umbilicalu').val('U');
			}
			$('#totalpregnancies').val(obj['totalpregnancies']);
			$('#livebirth').val(obj['livebirths']);
			$('#livingchildren').val(obj['livingchildren']);
			$('#prenatalcarevisit').val(obj['prenatalcarevisit']);
			$('#whenprenatalcarevisit').val(obj['whenprenatalcarevisit']);
			if (obj['prenatalcarehistory'] == 'C') {
				$('#prenatalcarehistoryc').prop('checked', true);
				$('#prenatalcarehistoryc').val('C');
			}
			else if (obj['prenatalcarehistory'] == 'R') {
				$('#prenatalcarehistoryr').prop('checked', true);
				$('#prenatalcarehistoryr').val('R');
			}
			else if (obj['prenatalcarehistory'] == 'B') {
				$('#prenatalcarehistoryb').prop('checked', true);
				$('#prenatalcarehistoryb').val('B');
			}
			else {
				$('#prenatalcarehistoryu').prop('checked', true);
				$('#prenatalcarehistoryu').val('U');
			}
			$('#reasonnoprenatal').val(obj['reasonnoprenatal']);
			$('#dosesoftetanus').val(obj['dosesoftetanus']);
			$('#datelastdose').val(obj['datelastdose']);
			$("#received2doses option[value='" + obj['received2doses'] + "']").attr("selected", true);
			switch (obj['immunizationreported']) {
				case 'C': $('#immunizationreportedc').prop('checked', true);
					break;
				case 'R': $('#immunizationreportedr').prop('checked', true);
					break;
				case 'B': $('#immunizationreportedb').prop('checked', true);
					break;
				case 'U': $('#immunizationreportedu').prop('checked', true);
					break;
				default:
					break;
			}
			$('#tetanusdate1').val(obj['tetanusdate1']);
			$('#tetanusdate2').val(obj['tetanusdate2']);
			$('#tetanusdate3').val(obj['tetanusdate3']);
			$('#tetanusdate4').val(obj['tetanusdate4']);
			$('#tetanusdate5').val(obj['tetanusdate5']);

			if (obj['protectedatbirth'] == 'Y') {
				$('#protectedatbirthy').prop('checked', true);
				$('#protectedatbirthy').val('Y');
			}
			else if (obj['protectedatbirth'] == 'N') {
				$('#protectedatbirthn').prop('checked', true);
				$('#protectedatbirthn').val('N');
			}
			else {
				$('#protectedatbirthu').prop('checked', true);
				$('#protectedatbirthu').val('U');
			}

			switch (obj['placedelivery']) {
				case 'H': $('#podhome').prop('checked', true);
					break;
				case 'HLC': $('#podhosp').prop('checked', true);
					break;
				case 'O': $('#podother').prop('checked', true);
					$("#placedeliveryothers").removeAttr("disabled");
					$('#placedeliveryothers').val(obj['placedeliveryothers']);
					break;
				default:
					break;
			}

			$('#namehospitallyingin').val(obj['namehospitallyingin']);

			switch (obj['cordcut']) {
				case 'S': $('#cordcuts').prop('checked', true);
					break;
				case 'B': $('#cordcutb').prop('checked', true);
					break;
				case 'BAM': $('#cordcutbam').prop('checked', true);
					break;
				case 'U': $('#cordcutu').prop('checked', true);
					break;
				case 'O': $('#cordcuto').prop('checked', true);
					$("#cordcutothers").removeAttr("disabled");
					$('#cordcutothers').val(obj['cordcutothers']);
					break;
				default:
					break;
			}
			switch (obj['attendedelivery']) {
				case 'P': $('#attendedeliveryp').prop('checked', true);
					break;
				case 'N': $('#attendedeliveryn').prop('checked', true);
					break;
				case 'M': $('#attendedeliverym').prop('checked', true);
					break;
				case 'H': $('#attendedeliveryh').prop('checked', true);
					break;
				case 'O': $('#attendedeliveryo').prop('checked', true);
					$("#attendedeliveryothers").removeAttr("disabled");
					$('#attendedeliveryothers').val(obj['attendedeliveryothers']);
					break;
				default:
					break;
			}
			switch (obj['stump']) {
				case 'A': $('#stumpa').prop('checked', true);
					break;
				case 'P': $('#stumpp').prop('checked', true);
					break;
				case 'U': $('#stumpu').prop('checked', true);
					break;
				case 'O': $('#stumpo').prop('checked', true);
					$("#stumpothers").removeAttr("disabled");
					$('#stumpothers').val(obj['stumpothers']);
					break;
				default:
					break;
			}
			$('#modifiedby').val(obj['modifiedby']);
			$('#date_modified').val(obj['date_modified']);
			var date_report = obj['date_report'];
			var date_reports = ((date_report == "1970-01-01 00:00:00") || (date_report == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_report);
			$('#date_report').val(date_reports)
			var date_investigation = obj['date_investigation'];
			var date_investigations = ((date_investigation == "1970-01-01 00:00:00") || (date_investigation == null)) ? "0000-00-00 00:00:00" : setTimeLocale(date_investigation);
			$('#date_investigation').val(date_investigations)

		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

