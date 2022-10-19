var table = $("#OPDTable");
$(function () {
	OPDLogList();
	$("#container").load(baseURL + "Outpatient/view_opdlist", function () {
		OPDLogList();
	});
});

function OPDLogList() {
	var data = new Object();
	data.id = "OPDTable";
	data.link = baseURL + "Outpatient/OPDLogList";
	data.type = "POST";
	data.data = function (d) {
		d.opdFROM = $('#opdFROM').val();
		d.opdTO = $('#opdTO').val();
	},
		data.paging = true;
	data.info = true;
	data.search = true;
	data.columns = [
		{ data: "enccode" },
		{ data: "hpercode" },
		{ data: "name" },
		{ data: "patsex" },
		{ data: "tsdesc" },
		{ data: "opddate" },
		{ data: "opdtime" },
		{
			render: function (data, type, row) {
				return "<div class=btn-group role=group>" +
					"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" +
					"<i class='fa fa-th-list'></i>" +
					"</button>" +
					"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
					"<a  href='" + baseURL + "Outpatient/Edit/" + btoa(row.enccode) + "/" + btoa(row.hpercode) + "'class='dropdown-item' data-enccode='" + btoa(row.enccode) + "' data-percode='" + row.hpercode + "'><i class='fa fa-edit'></i>&nbsp Edit</a>" +
					"<a  href='" + baseURL + "PatientRecords/Records/" + btoa(row.enccode) + "/" + btoa(row.hpercode) + "' class='dropdown-item' data-enccode='" + btoa(row.enccode) + "' data-percode='" + row.hpercode + "'><i class='fa fa-archive'></i>&nbsp Records</a>" +
					"<a  href='" + baseURL + "DoctorsOrder/Orders/" + btoa(row.enccode) + "/" + btoa(row.hpercode) + "'  class='dropdown-item' data-enccode='" + btoa(row.enccode) + "' data-percode='" + row.hpercode + "'><i class='fa fa-stethoscope'></i>&nbsp Order</a>" +
					"<a  href='" + baseURL + "Nurse/labResults/" + btoa(row.enccode) + "/" + btoa(row.hpercode) + "'  class='dropdown-item' data-enccode='" + btoa(row.enccode) + "' data-percode='" + row.hpercode + "'><i class='fa fa-flask'></i>&nbsp Results</a>" +
					"<a href=javascript:void(0); class='dropdown-item' id='btnRefer' data-enccode='" + row.enccode + "' data-percode='" + row.hpercode + "'><i class='fa fa-columns'></i>&nbsp Refer</a>" +
					"</div>" +
					"<button type='button' data-enccode='" + btoa(row.enccode) + "' class='btn btn-outline-success btn-sm' id ='btnInformation'><i class='fa fa-user-circle fa-sm'></i></button>" +
					"</div>";
			}
		}
	],
		data.coldef = [
			{
				targets: ["_all"],
				className: "align-center"
			},
			{
				targets: [0],
				visible: false
			},
			{
				targets: [3],
				searchable: false,
				orderable: false,
				render: function (data, type, row) {
					switch (data) {
						case 'M': return '<i class="fa fa-male"></i>&nbsp MALE'; break;
						case 'F': return '<i class="fa fa-female"></i>&nbsp FEMALE'; break;
						default: return 'N/A';
					}
				},
			},
			{
				targets: [1, 2, 4, 5, 6, 7],
				orderable: true,
			},
		];
	var opdData = Datatable(data);
	$('#frmFilter').on('submit', function (e) {
		var form = this;
		$.ajax({
			type: "POST",
			url: baseURL + "Outpatient/OPDLogList",
			data: new FormData(this),
			processData: false,
			success: function (data, response) {
				opdData.ajax.reload();
				var dt = new Date($("#opdFROM").val());
				var dt2 = new Date($("#opdTO").val());
				$("#txtDateRange").text("Consultations Filtered:".concat('FROM: ', dt.toLocaleDateString(), "     -   ", 'TO: ', dt2.toLocaleDateString()));
				$("#dateFilter").collapse('hide');

			},
			error: function (xhr, desc, err) {
				toastr.err(err, 'ERROR!');
			}
		});
		return false;
	});

	opdData.on('click', '#btnInformation', function () {
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = 'Outpatient/OutpatientInformation/' + URLencode(atob($(this).data('enccode')));
		Obj.data = "JSON";
		var row = Information(Obj);

		$('#ModalPatientInformation').modal('show');

		var fullname = row['patlast'] + ' ' + row['patsuffix'] + ', ' + row['patfirst'] + ' ' + row['patmiddle'];
		var ward = row['board'];
		var age = parseInt(row['patage']);
		$('#casenum').text(row['casenum']);
		$('#accountno').text(row['paacctno']);
		$('#enccodeCSS').val(row['enccode']);
		$('#hpercode').text(row['hpercode']);
		$('#patname').text(fullname);
		$('#patage').text(age.toFixed(0));
		$('#patwrb').text(ward);
		$('#patts').text(row['tsdesc']);
		$('#patdiag').text(row['opdtxt']);
		$('#enccodeConsent').val(row['enccode']);
		document.getElementById('patnamess').innerHTML = fullname;
		document.getElementById('hpercodess').innerHTML = row['hpercode'];
		loadImage(row['hpercode']);
		checkboxsame(fullname);
	});

	opdData.on('click', '#btnRefer', function () {
		var enccode = $(this).data('enccode');
		var hpercode = $(this).data('percode');
		alert(hpercode);
		initReferralto(enccode, hpercode);

	});

}

// $('#btnCSS').on('click', function (){
// 	$('#ModalCSS').modal('show');
// 	var enctr=encodeURIComponent(encodeURIComponent(btoa($('#enccodeCSS').val())));
// 	var src =baseURL+'OPD_PatientProfile/Opd_PatientProfile/'+enctr;
// 	var x = document.getElementById("CSS_pdf").src = src;
// 	$("#CSS_pdf").attr("src", src);
// });


$('#btnCSS').on('click', function () {
	$('#ModalOPDSignatures').modal({ backdrop: 'static' }).draggable({});
	$('#ModalPatientInformation').modal('hide');
	selDoctor($("#formOPDSignatories"));
	var enctr = encodeURIComponent(encodeURIComponent(btoa($('#enccodeCSS').val())));
	OPDSignatories(enctr);
});

function OPDSignatories(enctr) {
	$('#formOPDSignatories').validate({
		submitHandler: function (form) {
			var doctor_emp = $('#sel_doc').val();

			var enctr = encodeURIComponent(encodeURIComponent(btoa($('#enccodeCSS').val())));
			var doctor = encodeURIComponent(encodeURIComponent(($('#sel_doc').val())));

			console.log(enctr);
			console.log(doctor);


			if (doctor_emp == null || doctor_emp == "") {
				doctor_emp = "";
			} else {
				doctor_emp = $('#sel_doc').val();
			}
			$('#ModalCSS').modal('show');
			var src = baseURL + 'OPD_PatientProfile/Opd_PatientProfile/' + enctr + '/' + doctor;
			var x = document.getElementById("CSS_pdf").src = src;
			$("#CSS_pdf").attr("src", src);

			return false;
		},
		rules: {

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
	$('#Consentinput').modal({ backdrop: 'static' });
	$('#ModalPatientInformation').modal('hide');
	SelEmployees();
	var enctrs = encodeURIComponent(encodeURIComponent(btoa($('#enccodeConsent').val())));
	inputCert(enctrs);
});
function checkboxsame(fullname) {
	var representative = fullname.split(/[ ,]+/).join(' ');
	$('#patrep').val(representative);
	$("#patrepsame").click(function () {
		if ($(this).is(":checked")) {
			$('#patrep').val('');
			$("#patrep").removeAttr('disabled');
		}
		else {
			$('#patrep').val(representative);
			$('#patrep').attr('disabled', true);
		}
	});

}
$('#ModalConsent').on('hidden.coreui.modal', function () { $("#Consent_pdf").removeAttr("src").attr("src", ""); });

$('#closereload').on('click', function () {
	location.reload();
});

$("a[name='btnRegister']").on('click',function(){
	setCookie('fromModule','opd','1');
});

$("a[name='btnfromLog']").on('click',function(){
	removeCookie('fromModule');
});
