/*
function name :  FDAR
param : str|enccode 
description :generate list of FADR
*/

function initFDAR(enccode, hpercode) {
	var percode = encodeURIComponent(encodeURIComponent(hpercode));
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	CaseInformation(enccode);
	fdarList(enctr);
	PatientData(percode);
	PatientDemographics(percode);

}
function fdarList(enctr) {
	var data = new Object();
	data.id = "fdarList";
	data.link = baseURL + "Nurse/nurseFDAR/" + enctr;
	data.type = "POST";
	data.coldef = [
		{
			"orderable": false,
			"targets": [0, 1, , 7, 8],
			"searchable": false,
			"visible": false
		},
	];
	var table = loadTable(data);

	$('#fdarList').on('click', '#btnDeleteFDAR', function () {
		var enccode = atob($(this).data('enccode'));
		var datelog = atob($(this).data('docdate'));
		var now = new Date();
		var LogDate = new Date(datelog);
		var val = new Date(LogDate.getTime() - now.getTimezoneOffset() * 60000).toISOString().substring(0, 19);
		$("#deleteBMIModal").modal('show');
		$("#diagMIenccode").val(enccode);
		$("#diagBMIdatelog").val(val);
		$("#diagformIdenDelete").val("delete");
	});

	$('#frmDeleteDiag').on('submit', function (e) {
		var form = this;
		$.ajax({
			type: "POST",
			url: baseURL + "Nurse/saveFDAR",
			data: new FormData(this),
			processData: false,
			contentType: false,
			success: function (data, response) {
				$('#deleteBMIModal').modal('hide');
				toastr.success('Successfully Deleted! ', 'Success');
				table.ajax.reload();
			},

			error: function (xhr, desc, err) {
				toastr.error(xhr, 'Error');
			}
		});
		return false;
	});

	$('#fdarList').on('click', '#btnEditFDAR', function () {
		$('#FDARModal').modal('show');
		var enccode = atob($(this).data('enccode'));
		var datelog = atob($(this).data('docdate'));
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var log = encodeURIComponent(encodeURIComponent(datelog));
		$.ajax({
			type: "POST",
			url: baseURL + "Nurse/FDARinfo/" + enctr + '/' + log,
			data: "JSON",
			async: false,
			success: function (data) {

				var now = new Date();
				var obj = $.parseJSON(data);
				var dateLog = new Date(obj['docdate']);
				var docdate = new Date(dateLog.getTime() - now.getTimezoneOffset() * 60000).toISOString().substring(0, 19);
				$("#dteLog").val(docdate);
				$("#focus").val(obj['docsubject']);
				$("#data").val(obj['docobject']);
				$("#action").val(obj['docassess']);
				$("#response").val(obj['docplan']);
				$('#fdarformIden').val('update');
				$('#fdarEnccode').val(enccode);
				$('#fdarHpercode').val(hpercode);

			},
			error: function (xhr, data, text) {
				toastr.danger('FDAR Successfully Added! ', 'Error');
			}
		});
	});

	$('#frmFDAR').validate({
		submitHandler: function (form) {
			var POSTURL = baseURL + "Nurse/saveFDAR";
			$.ajax({
				type: "POST",
				url: POSTURL,
				dataType: "JSON",
				cache: false,
				async: true,
				data: $(form).serialize(),
				success: function (data) {
					if ($('#fdarformIden').val() == 'insert') {
						toastr.success('FDAR Successfully Added! ', 'Success');
						$("#FDARModal").modal('hide');
						table.ajax.reload();
					} else if ($('#fdarformIden').val() == 'update') {
						toastr.success('FDAR Successfully Updated!', 'Success');
						$("#FDARModal").modal('hide');
						table.ajax.reload();
					} else {
						toastr.error('no post', 'data');
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
			dteLog: 'required',
			focus: 'required',
			data: 'required',
			action: 'required',
			response: 'required'
		},
		messages: {
			dteLog: 'Enter Date time',
			focus: 'Focus is required!',
			data: 'Data is required',
			action: 'Action is required',
			response: 'Response is required'
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


}

function addFDAR(enccode, hpercode) {
	$('#FDARModal').modal('show');
	$('#dteLog').val(getTimeLocale());
	$('#fdarformIden').val("insert");
	$('#fdarEnccode').val(atob(enccode));
	$('#fdarHpercode').val(atob(hpercode));
}






