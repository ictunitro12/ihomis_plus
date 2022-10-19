$(function () {
	var tokenss = $.session.get('tokens');
	if ($.session.get('tokens') == undefined || $.session.get('tokens') == '') {
		$('#Tokensmodal').modal({ backdrop: 'static' }).draggable();
	}
	else {
		$("#Tokensmodal").modal('hide');
		$('#ttokens').val(tokenss);
		Ws_leptospirosis_List();
	}
	return false;
});
$('#formAddTokens').validate({
	submitHandler: function (form) {
		Ws_leptospirosis_List();
		var token = $('#tokens').val();
		$.session.set('tokens', token);
		$('#ttokens').val(token);
		$('#Tokensmodal').modal('hide');
		return false;
	},
	rules: {
		tokens: 'required',

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
$('#accesstokens').on('click', function (e) {
	$('#Tokensmodal').modal({ backdrop: 'static' }).draggable();
});
function Ws_leptospirosis_List() {
	var table = $("#ws_LeptospirosisTbl").DataTable({
		processing: true,
		searchable: true,
		destroy: true,
		pageLength: 25,
		className: 'table table-sm table-borderless table-condensed table-hover',
		columns: [{
			render: function (data, type, row, meta) {
				if (row.date_uploaded) {
					return (
						'<center><input type="checkbox" name="enccode[]" checked disabled class="enccode" data-enccode="' +
						data.enccode +
						'" value="' +
						data.enccode +
						'"></center> '
					);
				} else {
					return (
						'<center><input type="checkbox" name="enccode[]" class="enccode" data-enccode="' +
						data.enccode +
						'" value="' +
						data.enccode +
						'"></center> '
					);

				}
			},
			"data": null
		},
		{
			"data": null,
			"render": function (data, type) {
				var patsuffix = data['patsuffix'];
				if (patsuffix == null) { patsuffix = ''; } else { patsuffix = data['patsuffix']; }
				return data['patfirst'] + ' ' + data['patmiddle'] + ' ' + data['patlast'] + ' ' + patsuffix;
			}
		},
		{
			"data": "patbdate"
		},
		{
			"data": "patsex"
		},
		{
			"data": "typeofencounter"
		},
		{
			"data": "consultdate"
		},
		{
			render: function (data) {
				var date_onset = new Date(data['date_onset']);
				var year = date_onset.getFullYear();

				var month = (1 + date_onset.getMonth()).toString();
				month = month.length > 1 ? month : '0' + month;

				var day = date_onset.getDate().toString();
				day = day.length > 1 ? day : '0' + day;

				return month + '/' + day + '/' + year;
			},
			"data": null,
		},
		{
			"data": "date_uploaded"
		},
		],
		columnDefs: [{
			targets: 3,
			render: function (data) {
				switch (data) {
					case 'M': return '<center><i class="fa fa-male text-info"></i>&nbsp; Male</center>';
						break;
					case 'F': return '<center><i class="fa fa-female text-danger"></i>&nbsp; Female</center>';
						break;
					default: return '<center><span bg-default>Unknown</span></center>';
						break;
				}
			},
		},
		{
			targets: [2, 3, 4, 5, 6, 7],
			className: 'text-center',
		},
		{
			targets: [0],
			className: 'align-middle',
		}],
		/* select : {
			selected : true,
			style : 'multi',
		}, */
		ajax: {
			url: baseURL + "PIDSR_Webservice/Leptospirosis_list",
			type: "POST",
		},

	});
	$('#uploaddata').on('click', function (e) {
		const form = new FormData(document.getElementById("leptospirosis_form"));
		const enccodes = form.getAll("enccode[]");
		if (enccodes.length > 0) {
			for (var c = 0; c < enccodes.length; c++) {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				submiting_animation(form);
			}
		} else {
			toastr.warning('Please select atleast one patient!', '<i class="fa fa-exclamation-triangle"></i> Warning!');
		}
	});
}

var i = 0;
function submiting_animation(form) {
	if (i == 0) {
		i = 1;
		var elem = document.getElementById("mySubmitBar");
		var width = 10;
		var id = setInterval(frame, 50);

		function frame() {
			if (width >= 100) {
				clearInterval(id);
				$.ajax({
					url: baseURL + "PIDSR_Webservice/c2VuZF9QSURTUl9kYXRh",
					type: "POST",
					data: form,
					dataType: 'JSON',
					processData: false,
					contentType: false,
					success: function (data, response, type) {
						$("#ModalProgressBar2").modal('hide');
						for (var a = 0; a < data.webresponse.length; a++) {
							var obj = $.parseJSON(data.webresponse[a]);
							var objdata = $.parseJSON(data.data[a]);
							const myJSON = data.webresponse[a];
							const myArray = JSON.parse(myJSON);
							if (obj.statusCode == '401') {
								toastr.error('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + obj.messages[0], 'BAD CREDENTIALS', { timeout: 10000 });
							}
							else {
								for (var b = 0; b < myArray.length; b++) {
									if (myArray[0].statusCode == '201' && myArray[1].statusCode == '201' && myArray[2].statusCode == '201') {
										var hpercode = encodeURIComponent(encodeURIComponent(objdata.diseasedata[0].patient_number));
										$.ajax({
											url: baseURL + "PIDSR_Webservice/update_leptospirosis/" + hpercode,
											type: "POST",
										});
										window.setTimeout(function () { $("#ws_LeptospirosisTbl").DataTable().ajax.reload(); }, 1000);
									}
									if (myArray[b].statusCode == '200') {
										toastr.success('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'OK', { timeout: 10000 });
									}
									else if (myArray[b].statusCode == '201') {
										toastr.success('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'Success', { timeout: 10000 });
									}
									else if (myArray[b].statusCode == '400') {
										toastr.error('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'Bad Request', { timeout: 10000 });
									}
									else if (myArray[b].statusCode == '403') {
										toastr.error('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'Forbidden', { timeout: 10000 });
									}
									else if (myArray[b].statusCode == '404') {
										toastr.error('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'Not Found', { timeout: 10000 });
									}
									else if (myArray[b].statusCode == '405') {
										toastr.error('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'Method Not Allowed', { timeout: 10000 });
									}
									else if (myArray[b].statusCode == '409') {
										toastr.error('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'Conflict', { timeout: 10000 });
									}
									else {
										toastr.error('<b>' + objdata.diseasedata[0].firstname + ' ' + objdata.diseasedata[0].middlename + ' ' + objdata.diseasedata[0].lastname + ' ' + objdata.diseasedata[0].suffixname + '</b><br>' + myArray[b].messages, 'Internal Server Error', { timeout: 10000 });
									}
								}
							}
						}
						window.setTimeout(function () { $('#checkAll_patient').prop('checked', false); }, 1000);
						/* window.setTimeout(function () { $("#ws_LeptospirosisTbl").DataTable().ajax.reload(); }, 1000); */
					},
					error: function (response) {
						toastr.error("The web service has been unable to communicate with it's backend server", "Webservice error!");
						$("#ModalProgressBar2").modal('hide');
						/* window.setTimeout(function () { location.reload() }, 5000); */
					},
				});
				i = 0;
			} else {
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "% success";
			}
		}
	}

}

$("#checkAll_patient").click(function () {
	$('input:checkbox').not(this).prop('checked', this.checked);
});
