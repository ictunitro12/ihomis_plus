/*
function name :  VitalSigns
param : str|enccode 
description :generate list of vital signs 
*/
$(document).ready(function () {
	jQuery.validator.addMethod("bpValidator", function (value, element, param) {
		var elementVal = $(element).val();
		if (elementVal === "" || (elementVal === "palpatory" || elementVal === "PALPATORY")) {
			var formData = $('#frmVitalSign').serializeArray();
			var blankEntries = 0;
			for (var key in formData) {
				if (formData[key].name == "vsEnccode" || formData[key].name == "vsHpercode" || formData[key].name == "vsformIden" || formData[key].name == "vsDateTime") {
					continue;
				}
				if (formData[key].value == "" || formData[key].value == "__._") {
					blankEntries++;
				}
			}
			if (blankEntries == 10) {
				return false;
			}
			return true;
		} else {
			if (elementVal == "N/A" || elementVal == "n/a" || elementVal == "NA" || elementVal == "na") {
				return true;
			}
		}

		var bpArray = elementVal.split("/");
		if (bpArray.length === 1) {
			return false;
		}

		if (bpArray.length > 2) {
			return false;
		}

		if (isNaN(bpArray[0])) {
			return false;
		}

		if (bpArray[0].charAt(0) == '0') {
			return false;
		}

		if (bpArray[1] === "") {
			return false
		}

		if (isNaN(bpArray[1])) {
			return false;
		}

		if (bpArray[1].charAt(0) == '0') {
			return false;
		}

		return true;
	}, "Invalid value for Blood Pressure");

	jQuery.validator.addMethod("vsPulseValidator", function (value, element, param) {
		var elementVal = $(element).val();
		if (elementVal === "") {
			var formData = $('#frmVitalSign').serializeArray();
			var blankEntries = 0;
			for (var key in formData) {
				if (formData[key].name == "vsEnccode" || formData[key].name == "vsHpercode" || formData[key].name == "vsformIden" || formData[key].name == "vsDateTime") {
					continue;
				}
				if (formData[key].value == "" || formData[key].value == "__._") {
					blankEntries++;
				}
			}
			if (blankEntries == 10) {
				return false;
			}
			return true;
		}

		if (elementVal != "") {
			let vsPulse = elementVal;
			if (vsPulse.indexOf('.') != -1) {
				return false;
			}

			if (vsPulse == "0" || vsPulse == 0) {
				return false;
			}
		}

		return true;
	}, "Invalid value for Blood Pressure");

	jQuery.validator.addMethod("vsRrValidator", function (value, element, param) {
		var elementVal = $(element).val();
		if (elementVal === "") {
			var formData = $('#frmVitalSign').serializeArray();
			var blankEntries = 0;
			for (var key in formData) {
				if (formData[key].name == "vsEnccode" || formData[key].name == "vsHpercode" || formData[key].name == "vsformIden" || formData[key].name == "vsDateTime") {
					continue;
				}
				if (formData[key].value == "" || formData[key].value == "__._") {
					blankEntries++;
				}
			}
			if (blankEntries == 10) {
				return false;
			}
			return true;
		}

		if (elementVal != "") {
			let vsRr = elementVal;
			if (vsRr.indexOf('.') != -1) {
				return false;
			}

			if (vsRr == "0" || vsRr == 0) {
				return false;
			}
		}

		return true;
	}, "Invalid value for Blood Pressure");

	jQuery.validator.addMethod("fieldValidator", function (value, element, param) {
		var formData = $('#frmVitalSign').serializeArray();
		var blankEntries = 0;
		for (var key in formData) {
			if (formData[key].name == "vsEnccode" || formData[key].name == "vsHpercode" || formData[key].name == "vsformIden" || formData[key].name == "vsDateTime") {
				continue;
			}
			if (formData[key].value == "" || formData[key].value == "__._") {
				blankEntries++;
			}
		}

		if (blankEntries == 10) {
			return false;
		}

		return true;

	}, "Invalid/Value is required!");

	$('#frmVitalSign').validate({
		submitHandler: function (form) {
			var POSTURL = baseURL + "PatientRecords/saveVitalSign";
			$.ajax({
				type: "POST",
				url: POSTURL,
				dataType: "JSON",
				cache: false,
				async: true,
				data: $(form).serialize(),
				success: function (data) {
					if ($('#vsformIden').val() == 'insert') {
						$("#vitalModal").modal('hide');
						formReset($('#frmVitalSign'));
						toastr.success('Vital Signs Successfully Saved! ', 'Success');
						VitalSigns(enccode);
					} else if ($('#vsformIden').val() == 'update') {

						toastr.success('Vital Signs  Updated! ', 'Success');

						$("#vitalModal").modal('hide');
						VitalSigns(enccode);
					}
				},
				error: function (data, xhr, text) {

					toastr.error(data, 'data');
					toastr.error(xhr, 'xhr');
					toastr.error(text, 'text');
				}
			});
			return false;
			$(form).submit();
		},
		rules: {
			vsDate: 'required',
			vsTime: 'required',
			//vsBp:'required',
			'vsBp': {
				bpValidator: true
			},
			vsTemp: {
				fieldValidator: true
			},
			vsPulse: {
				vsPulseValidator: true
			},
			vsRr: {
				vsRrValidator: true
			},
			o2sats: {
				fieldValidator: true
			},
			vsOral: {
				fieldValidator: true
			},
			vsNC: {
				fieldValidator: true
			},
			vsBlood: {
				fieldValidator: true
			},
			vsIntake: {
				fieldValidator: true
			},
			vsMiscel: {
				fieldValidator: true
			},
			//vsWeight:'required',
			//vsWeightMeasure:'required',
		},
		messages: {
			vsDate: 'Enter Date log!',
			vsTime: 'Enter Time log',
			//vsBp: {
			//	required:'Enter  Blood pressure!'
			//},
			//vsTemp: 'Enter Temperature!',
			//vsPulse: 'Enter Pulse Rate!',
			//vsRr: 'Enter Respiratory Rate!',    
			//vsOral: 'Oral Intake!',
			//vsNC: 'NC Intake',
			//vsBlood: 'Blood Intake!',
			//vsHeight: 'Enter current height',
			//vsHeightMeasure: 'Enter Unit of Measure!',
			//vsWeight: 'Enter current weight!',
			//vsWeightMeasure: 'Enter Unit of Measure!',
		},
		errorElement: 'span',
		errorPlacement: function errorPlacement(error, element) {
			error.addClass('invalid-feedback');
			error.insertAfter(element);

		},

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
});

function VitalSigns(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	var data = new Object();
	data.id = "vitalSigns";
	data.link = baseURL + "PatientRecords/VitalSigns/" + enctr;
	data.type = "POST";
	data.coldef = [
		{
			targets: [0, 1],
			visible: false,
		},
		{
			targets: 8,
			searchable: false,
			render: function (data, type, row) {
				switch (data) {
					case 'A': return '<div class="text-success">Active</span>'; break;
					case 'I': return '<div class="text-primary">Inactive</span>'; break;
					default: return '<div class="text-default"></span>';
				}
			},
		},
	];
	loadTable(data);
}

function addVitals(enccode, hpercode) {
	$('#vitalModal').modal({ backdrop: 'static' }).draggable({});
	$('#vsformIden').val("insert");
	$('#vsDateTime').val(getTimeLocale());
	$('#vsEnccode').val(atob(enccode));
	$('#vsHpercode').val(atob(hpercode));
	//$('#vsBp').mask('999/999');
	$('#vsTemp').mask('99.9');
}

$('#vitalSigns').on('click', '#btnEditVitals', function () {
	$('#vitalModal').modal({ backdrop: 'static' }).draggable({});
	var enccode = atob($(this).data('enccode'));
	var datelog = atob($(this).data('datelog'));
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	var log = encodeURIComponent(encodeURIComponent(datelog));
	$.ajax({
		type: "POST",
		url: baseURL + "PatientRecords/vitalSignInfo/" + enctr + '/' + log,
		data: "JSON",
		async: false,
		success: function (data) {
			var now = new Date();
			obj = $.parseJSON(data);
			$('#vsformIden').val('update');
			$("#vsDateTime").val(setTimeLocale(obj['datelog']));
			$('#vsEnccode').val(obj['enccode']);
			$('#vsHpercode').val(obj['hpercode']);
			$('#vsBp').val(obj['vsbp']);
			//$('#vsBp').mask('99/99');
			$('#vsTemp').val(obj['vstemp']);
			$('#vsPulse').val(obj['vspulse']);
			$('#vsRr').val(obj['vsresp']);
			$('#vsOral').val(obj['intoral']);
			$('#vsNC').val(obj['intng']);
			$('#vsBlood').val(obj['intblood']);
			$('#vsIntake').val(obj['intiv']);
			$('#vsMiscel').val(obj['intmisc']);
			$('#o2sats').val(obj['o2sats']);

			$('#vsUrine').val(obj['outurine']);
			$('#vsNCo').val(obj['outng']);
			$('#vsStool').val(obj['outstool']);
			$('#vsMesis').val(obj['outemesis']);
			$('#vsMiscelo').val(obj['outmisc']);
			$('#vsSPEC').val(obj['vsspec']);
			$('#vsCVP').val(obj['vscvp']);


		},
		error: function (data) {
			toaster.error("Error: Fetching Patient Vital Sign!", 'Error');
		}
	});
});

function vitalSignsinfo(enccode) {

	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		type: "POST",
		url: baseURL + "PatientRecords/vitalSignInfo/" + enctr,
		data: "JSON",
		async: false,
		success: function (data, resp, xhr) {
			if (data == null) {
				toastr.error("Error: Fetching Patient Vital Sign!", 'Error');
			} else {

				obj = $.parseJSON(data);

				var datelog = setTimeLocale(obj['datelog']);

				$('#vsformIden').val('update');
				$("#vsDateTime").val(datelog);
				$('#vsEnccode').val(obj['enccode']);
				$('#vsHpercode').val(obj['hpercode']);
				$('#vsBp').val(obj['vsbp']);
				//$('#vsBp').mask('99/99');
				$('#vsTemp').val(obj['vstemp']);
				$('#vsPulse').val(obj['vspulse']);
				$('#vsRr').val(obj['vsresp']);
				$('#vsOral').val(obj['intoral']);
				$('#vsNC').val(obj['intng']);
				$('#vsBlood').val(obj['intblood']);
				$('#vsIntake').val(obj['intiv']);
				$('#vsMiscel').val(obj['intmisc']);
				$('#o2sats').val(obj['o2sats']);

				$('#vsUrine').val(obj['outurine']);
				$('#vsNCo').val(obj['outng']);
				$('#vsStool').val(obj['outstool']);
				$('#vsMesis').val(obj['outemesis']);
				$('#vsMiscelo').val(obj['outmisc']);
				$('#vsSPEC').val(obj['vsspec']);
				$('#vsCVP').val(obj['vscvp']);
			}
		},
		error: function (data) {

			toastr.error(data, 'Error');
		}
	});
}

function vitals(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		type: "POST",
		url: baseURL + "PatientRecords/vitals/" + enctr,
		data: "JSON",
		async: false,
		success: function (data, resp, xhr) {
			obj = $.parseJSON(data);
			if (obj !== null) {
				var datelog = setTimeLocale(obj['datelog']);
				$('#vsformIden').val('update');
				$("#vsDateTime").val(datelog);
				$('#vsEnccode').val(obj['enccode']);
				$('#vsHpercode').val(obj['hpercode']);
				$('#vsBp').val(obj['vsbp']);
				$('#vsTemp').val(obj['vstemp']);
				$('#vsPulse').val(obj['vspulse']);
				$('#vsRr').val(obj['vsresp']);
				$('#vsOral').val(obj['intoral']);
				$('#vsNC').val(obj['intng']);
				$('#vsBlood').val(obj['intblood']);
				$('#vsIntake').val(obj['intiv']);
				$('#vsMiscel').val(obj['intmisc']);
				$('#o2sats').val(obj['o2sats']);

				$('#vsUrine').val(obj['outurine']);
				$('#vsNCo').val(obj['outng']);
				$('#vsStool').val(obj['outstool']);
				$('#vsMesis').val(obj['outemesis']);
				$('#vsMiscelo').val(obj['outmisc']);
				$('#vsSPEC').val(obj['vsspec']);
				$('#vsCVP').val(obj['vscvp']);
			}

		},
		error: function (data) {
			toastr.error("Error: Fetching Patient Vital Sign!", 'Error');
		}
	});
}

/* function addVitals(enccode,hpercode)
  {
	   $('#vitalModal').modal('show');	
	   $('#vsformIden').val("insert");
	   $('#vsDateTime').val(getTimeLocale());
	   $('#vsEnccode').val(atob(enccode));	 
	   $('#vsHpercode').val(atob(hpercode));
  } */

function editVitals(enccode, hpercode) {
	$('#vitalModal').modal({ backdrop: 'static' }).draggable({});
	$('#vsformIden').val("insert");
	$('#vsDateTime').val(getTimeLocale());
	$('#vsEnccode').val(atob(enccode));
	$('#vsHpercode').val(atob(hpercode));
}

$('#vitalSigns').on('click', '#btnDeleteVitals', function () {

	var enccode = atob($(this).data('enccode'));
	var datelog = atob($(this).data('datelog'));
	var today = new Date(datelog);
    var datelog1 = today.toLocaleString("en-US");

	var now = new Date();
	var LogDate = new Date(datelog);
	var val = new Date(LogDate.getTime() - now.getTimezoneOffset() * 60000).toISOString().substring(0, 19);

	$("#deleteVitalModal").modal({ backdrop: 'static' }).draggable({});
	$("#delvitalenccode").val(enccode);
	$("#delvitaldatelog").val(datelog);
	$("#delnamevital").text(datelog1);
	$("#vsformIdenDelete").val("delete");
});

$('#frmDeleteVitalSign').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "PatientRecords/saveVitalSign",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$('#deleteVitalModal').modal('hide');
			VitalSigns(enccode);
			toastr.success('Successfully Deleted! ', 'Success');
		},

		error: function (xhr, desc, err) {
			toastr.error(xhr, 'Error');
		}
	});
	return false;
});




