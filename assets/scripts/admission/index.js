var table = $("#AdmissionTable");

function InpatientLog() {
	var data = new Object();
	data.id = "AdmissionTable";
	data.link = baseURL + "Admission/InpatientList";
	data.type = "POST";
	data.rowsGroup = [2,3,4,5,6,7];
	data.coldef = [
		{
			targets: ["_all"],
			className: "align-middle"
		},
		{
			targets: [0],
			visible: false
		},
		{
			targets: [1, 2, 5, 6, 7, 8, 10],
			orderable: false,
		},
		{
			targets: [4],
			searchable: false,
			orderable: false,
			render: function (data, type, row) {
			  let createdDate = moment(data);
			  return createdDate.format("MM/DD/YYYY");
			},
		},
		{
			targets: [3, 6],
			searchable: false,
			orderable: false,
			render: function (data, type, row) {
				switch (data) {
					case 'M': return '<i class="fa fa-male"></i>&nbsp MALE'; break;
					case 'F': return '<i class="fa fa-female"></i>&nbsp FEMALE'; break;
					case 'ADPAY': return '&nbsp NON-BASIC'; break;
					case 'SERVI': return '&nbsp BASIC'; break;
					default: return 'N/A';
				}
			},
		}];
	loadTable(data);
}

$('#btnCSS').on('click', function () {
	$('#ModalCSS').modal('show');
	var enctr = encodeURIComponent(encodeURIComponent(btoa($('#enccodeCSS').val())));
	var src = baseURL + 'Rep_Admission_pdf/CCSPdf/' + enctr;
	var x = document.getElementById("CSS_pdf").src = src;
	$("#CSS_pdf").attr("src", src);
});

$('#ModalCSS').on('hidden.coreui.modal', function () { $("#CSS_pdf").removeAttr("src").attr("src", ""); });

//Patient Information
table.on('click', '.ModalPatientInformation', function () {
	var Obj = new Object();
	Obj.type = "POST";
	Obj.url = 'Admission/InPatientInformation/' + URLencode(atob($(this).data('enccode')));
	Obj.data = "JSON";
	var row = Information(Obj);
	$('#ModalPatientInformation').modal('show');
	var fullname = row['name'];
	var ward = row['board'];
	var age = row['age'];
	$('#casenum').text(row['casenum']);
	$('#accountno').text(row['paacctno']);
	$('#enccodeCSS').val(row['enccode']);
	$('#enccodeConsent').val(row['enccode']);
	$('#hpercode').text(row['hpercode']);
	$('#patname').text(fullname);
	document.getElementById('patnamess').innerHTML = fullname;
	document.getElementById('hpercodess').innerHTML = row['hpercode'];
	$('#patage').text(age);
	$('#patwrb').text(ward);
	$('#patts').text(row['tsdesc']);
	$('#patdiag').text(row['admtxt']);
	checkboxsame(fullname);
	loadImage(row['hpercode']);
	InpatientRoom($(this).data('enccode'));
});

function InpatientInformation(enccode) {
	var Obj = new Object();
	Obj.type = "POST";
	Obj.url = baseURL + 'Admission/InPatientInformation/' + URLencode(atob(enccode));
	Obj.data = "JSON";
	return Information(Obj);
}

table.on('click', '.DischargePatient', function () {
	var obj = InpatientInformation($(this).data('enccode'));
	$('#dischCasenum').text(obj['casenum']);
	$('#dischHpercode').text(obj['hpercode']);
	$('#dischPatName').text(obj['name']);
	$('#dischAge').text(obj['age']);
	$('#dischAdmDate').text(formatDate(obj['admdate']));
	$('#dischWard').text(obj['board']);
	$('#dischDate').val(getDate());
	$('#dischTime').val(getTime());
	$('#dischEnccode').val(obj['enccode']);
	$('#discHpercode').val(obj['hpercode']);
	$('#dischBed').val(obj['bdintkey']);
	$("#dischBalance").text(obj['balance']);
	
	$('#ModalDischargePatient').modal('show');
	loadImage(obj['hpercode']);
});


$('#dis').on('click', function (e) {
	var time = $('#dischTime').val();
});

table.on('click', '#btnRoom', function () {
	$('#ModalManageRoom').modal({ backdrop: "static" });
	var enccode = $(this).data('enccode');
	var obj = InpatientInformation(enccode);
	var photo = obj['picname'];
	$('#roomCasenum').text(obj['casenum']);
	$('#roomHpercode').text(obj['hpercode']);
	$('#roomPatName').text(obj['name']);
	$('#roomAge').text(obj['age']);
	$('#roomAdmDate').text(formatDate(obj['admdate']));
	$('#roomWard').text(obj['board']);
	if (obj['bdintkey'] == null) {
		$("#btnTransferRoom").prop('disabled', true);
	} else {
		$("#btnTransferRoom").prop('disabled', false);
	}
	setCookie('enccode', obj['enccode'], '1');
	setCookie('hpercode', obj['hpercode'], '1');
	setCookie('sex', obj['patsex'], '1');
	if (photo == null || photo == "") {
		$("#roomPatientPic").prop('src', 'assets/img/avatars/none.png');
	} else {
		$("#roomPatientPic").prop('src', baseURL + photo);
	}
	InpatientRoom(atob(enccode));

});

function ConditionRadio(Disp) {
	var enccode = $("#dischEnccode").val();
	var hpercode = $("#discHpercode").val();
	if (Disp == "TRANS") {

		$("#diedTime").prop('disabled', true);
		$("#diedTime").val('');
		$("#recov").removeAttr('disabled');
		$("#impro").removeAttr('disabled');
		$("#unimp").removeAttr('disabled');
		$("#diemi").prop('disabled', true);
		$("#diena").prop('disabled', true);
		$("#dpona").prop('disabled', true);
		$("#diepo").prop('disabled', true);
		$("#refertoModal").modal('show');
		initReferralto(enccode, hpercode);
		$("#frmDischargePatient").find("input[type=checkbox], input[type=radio]").prop("checked", "");
		$("#dateRefto").val(getTimeLocale());
		$("#dateRefCall").val(getTimeLocale());
		$("#reftoEnccode").val(enccode);
		$("#reftoHpercode").val(hpercode);
		$("#reftoformIden").val('insert');
		$('#refertoModal').modal('show');

	} else if (Disp == "DIEDD") {
		$("#diedTime").removeAttr('disabled');
		$("#dischNotes").removeAttr('disabled');
		$("#disDateTime").val(getTimeLocale());
		$("#disDateTime").removeAttr('disabled');
		$("#recov").prop('disabled', true);
		$("#impro").prop('disabled', true);
		$("#unimp").prop('disabled', true);
		$("#diemi").removeAttr('disabled');
		$("#diena").removeAttr('disabled');
		$("#dpona").removeAttr('disabled');
		$("#diepo").removeAttr('disabled');
		$("#selFac").prop('disabled', true);
		$("#accreno").prop('disabled', true);
		$("#refReason").prop('disabled', true);
		$("#frmDischargePatient").find("input[type=checkbox], input[type=radio]").prop("checked", "");
	} else if (Disp == "DISCH") {
		$("#diedTime").prop('disabled', true);
		$("#dischNotes").removeAttr('disabled');

		$("#disDateTime").removeAttr('disabled');
		$("#recov").removeAttr('disabled');
		$("#impro").removeAttr('disabled');
		$("#unimp").removeAttr('disabled');
		$("#diemi").prop('disabled', true);
		$("#diena").prop('disabled', true);
		$("#dpona").prop('disabled', true);
		$("#diepo").prop('disabled', true);
		$("#selFac").prop('disabled', true);
		$("#accreno").prop('disabled', true);
		$("#refReason").prop('disabled', true);
		$("#frmDischargePatient").find("input[type=checkbox], input[type=radio]").prop("checked", "");
	} else if (Disp == "ABSC") {
		$("#recov").prop('disabled', true);
		$("#impro").prop('disabled', true);
		$("#unimp").prop('disabled', true);
		$("#diemi").prop('disabled', true);
		$("#diena").prop('disabled', true);
		$("#dpona").prop('disabled', true);
		$("#diepo").prop('disabled', true);
		$("#selFac").prop('disabled', true);
		$("#accreno").prop('disabled', true);
		$("#refReason").prop('disabled', true);
		$("#frmDischargePatient").find("input[type=checkbox], input[type=radio]").prop("checked", "");
	}
	else if (Disp == "DAMA") {
		$("#recov").prop('disabled', true);
		$("#impro").prop('disabled', true);
		$("#unimp").prop('disabled', true);
		$("#diemi").prop('disabled', true);
		$("#diena").prop('disabled', true);
		$("#dpona").prop('disabled', true);
		$("#diepo").prop('disabled', true);
		$("#selFac").prop('disabled', true);
		$("#accreno").prop('disabled', true);
		$("#refReason").prop('disabled', true);
		$("#frmDischargePatient").find("input[type=checkbox], input[type=radio]").prop("checked", "");
	}
	else {
		$("#dischNotes").val('');
		$("#disDateTime").val('');
		$("#diedTime").val('');
		$("#dischNotes").prop('disabled', true);
		$("#disDateTime").prop('disabled', true);
		$("#diedTime").prop('disabled', true);

		$("#recov").prop('disabled', true);
		$("#impro").prop('disabled', true);
		$("#unimp").prop('disabled', true);
		$("#diemi").prop('disabled', true);
		$("#diena").prop('disabled', true);
		$("#dpona").prop('disabled', true);
		$("#diepo").prop('disabled', true);
		$("#selFac").prop('disabled', true);
		$("#accreno").prop('disabled', true);
		$("#refReason").prop('disabled', true);
		$("#frmDischargePatient").find("input[type=checkbox], input[type=radio]").prop("checked", "");
	}

}
$('#ModalDischargePatient').on('hidden.coreui.modal', function () {
	$("#frmDischargePatient")
		.find("input,textarea,select")
		.val('')
		.end();
	$("#frmDischargePatient")
		.find("input[type=checkbox], input[type=radio]")
		.prop("checked", "")
		.end();
	$("#frmDischargePatient")
		.find("input,textarea,select")
		.removeClass('is-valid');
	$("#frmDischargePatient")
		.find("input,textarea,select")
		.removeClass('is-invalid');
});

$("#refertoModal").on('hidden.coreui.modal', function () {

	ConditionRadio('');
	$("#frmDischargePatient")
		.find("input,textarea,select")
		.val('')
		.end();
	$("#frmDischargePatient")
		.find("input[type=checkbox], input[type=radio]")
		.prop("checked", "")
		.end();
	$("#frmDischargePatient")
		.find("input,textarea,select")
		.removeClass('is-valid');
	$("#frmDischargePatient")
		.find("input,textarea,select")
		.removeClass('is-invalid');
});
//Consent Form

function inputCert(enctrs) {
	$('#formAddCert').validate({
		submitHandler: function (form) {
			var patrep = $('#patrep').val();
			var rephealthfac = $('#selEmployees').val();
			var patcontact = $('#patnumber').val();
			var patreps = patrep.toUpperCase();
			if (rephealthfac == null || rephealthfac == "") {
				rephealthfac = " ";
			} else {
				rephealthfac = $('#selEmployees').val();
			}
			if (patcontact == null || patcontact == "") {
				patcontact = " ";
			} else {
				patcontact = $('#patnumber').val();
			}
			var src = baseURL + 'ConsentForm/Consent_form_pdf/' + enctrs + '/' + encodeURIComponent(encodeURIComponent(patreps)) + '/' + encodeURIComponent(encodeURIComponent(rephealthfac)) + '/' + encodeURIComponent(encodeURIComponent(patcontact));
			var x = document.getElementById("Consent_pdf").src = src;
			$("#Consent_pdf").attr("src", src);
			$('#ModalConsent').modal('show');
			return false;
		},
		rules: {
			selEmployees: 'required',
			patrep: 'required',

		},
		errorElement: 'span',

		highlight: function highlight(element) {
			$(element).addClass('is-invalid').removeClass('is-valid');
			if ($(element).hasClass('select2-offscreen')) {
				element = $("#s2id_" + element.attr("id") + " ul").parent();
				$(element).addClass('is-invalid').removeClass('is-valid');
			}
		},

		unhighlight: function unhighlight(element) {
			$(element).addClass('is-valid').removeClass('is-invalid');
			if ($(element).hasClass('select2-offscreen')) {
				$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
			}
		}
	});
}

$('#btnConsent').on('click', function () {
	$('#Consentinput').modal({backdrop:'static'});
	$('#ModalPatientInformation').modal('hide');
	SelEmployees();
	var enctrs = encodeURIComponent(encodeURIComponent(btoa($('#enccodeConsent').val())));
	inputCert(enctrs);
	/* var src =baseURL+'ConsentForm/Consent_form_pdf/'+enctrs;
	var x = document.getElementById("Consent_pdf").src = src;
	$("#Consent_pdf").attr("src", src); */
});
function checkboxsame(fullname) {
	var representative = fullname.split(/[ ,]+/).join(' ');
	$('#patrep').val(representative);
	$("#patrepsame").click(function () {
		if ($(this).is(":checked")) {
			$('#patrep').val('');
			$("#patrep").removeAttr('disabled');			
		}
	});
	$("#patrepsame").click(function () {
		if ($(this).is(":unchecked")) {
			$('#patrep').val(representative);
			$("#patrep").attr('disabled', true);
		}
	});
}
$('#ModalConsent').on('hidden.coreui.modal', function () { $("#Consent_pdf").removeAttr("src").attr("src", ""); });

/* $(document).click(function (e) {
	if ($(e.target).is('#Consentinput')) {
		location.reload();
	}

}); */
$('#closereload').on('click', function () {
	location.reload();
});

$("a[name='btnRegister']").on('click',function(){
	setCookie('fromModule','adm','1');
});

$("a[name='btnfromLog']").on('click',function(){
	removeCookie('fromModule');
});