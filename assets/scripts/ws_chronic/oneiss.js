$(function () {
	Ws_oneiss_List();
});
function Ws_oneiss_List() {
	var table = $("#ws_OneissTbl").DataTable({
		processing: false,
		searchable: true,
		destroy: true,
		pageLength: 25,
		className: 'table table-sm table-borderless table-condensed table-hover',
		columns: [{
			render: function (data, type, row, meta) {
				if (row.extract_date) {
					return (
						'<center><input type="checkbox" name="hosp_no[]" checked disabled class="hosp_no" data-hosp_no="' +
						data.hosp_no +
						'" value="' +
						data.hosp_no +
						'"></center> '
					);
				} else {
					return (
						'<center><input type="checkbox" name="hosp_no[]" class="hosp_no" data-hosp_no="' +
						data.hosp_no +
						'" value="' +
						data.hosp_no +
						'"></center> '
					);

				}
			},
			"data": null
		},
		{
			"data": null,
			"render": function (data, type) {
				return data['patlast'] + ', ' + data['patfirst'] + ' ' + data['patmiddle'];
			}
		},
		{
			"data": "sex"
		},
		{
			"data": "birthdate"
		},
		{
			"data": "type1"
		},
		{
			"data": "date_report"
		},
		{
			"data": "time_report"
		},
		{
			"data": "extract_date"
		}
		],
		columnDefs: [{
			targets: [2, 4],
			render: function (data) {
				switch (data) {
					case 'M': return '<center><i class="fa fa-male text-info"></i>&nbsp; Male</center>';
						break;
					case 'F': return '<center><i class="fa fa-female text-danger"></i>&nbsp; Female</center>';
						break;
					case 'INPA': return 'INPATIENT';
						break;
					case 'OPD': return 'OUTPATIENT';
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
		ajax: {
			url: baseURL + "ONEISS_Webservice/Oneiss_list",
			type: "POST",
		},

	});
	$('#uploaddata').on('click', function (e) {

		const form = new FormData(document.getElementById("oneiss_form"));
		const hosp_nos = form.getAll("hosp_no[]");
		if (hosp_nos.length > 0) {
			for (var c = 0; c < hosp_nos.length; c++) {
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
					url: baseURL + "ONEISS_Webservice/push_Oneiss",
					type: "POST",
					data: form,
					dataType: 'JSON',
					processData: false,
					contentType: false,
					success: function (data, response, type) {
						$("#ModalProgressBar2").modal('hide');
						for (var l = 0; l < data.code.length; l++) {
							if (data.code[l] == '100') {
								toastr.error('Web Service is Running', '<i class="fa fa-exclamation-circle"></i> Error.', { timeOut: 5000 });

							}
							else if (data.code[l] == '101') {
								toastr.error('Web Service is Under Maintenance.', '<i class="fa fa-exclamation-circle"></i> Error', { timeOut: 5000 });

							}
							else if (data.code[l] == '102') {
								toastr.error('Web Service Authentication Failed.', '<i class="fa fa-exclamation-circle"></i> Error', { timeOut: 5000 });

							}
							else if (data.code[l] == '103') {
								toastr.error(data.data[l].Data.Pat_First_Name + ' ' + data.data[l].Data.Pat_Middle_Name + ' ' + data.data[l].Data.Pat_Last_Name, '<i class="fa fa-exclamation-circle"></i> Invalid Parameter', { timeOut: 5000 });

							}
							else if (data.code[l] == '104') {
								toastr.success(data.data[l].Data.Pat_First_Name + ' ' + data.data[l].Data.Pat_Middle_Name + ' ' + data.data[l].Data.Pat_Last_Name, '<i class="fa fa-check-circle-o"></i> Data has been sent!', { timeOut: 5000 });
								var hosp_no = encodeURIComponent(encodeURIComponent(data.data[l].Data.hosp_no));
								$.ajax({
									url: baseURL + "ONEISS_Webservice/update_oneiss/" + hosp_no,
									type: "POST",
								});
							}
							else if (data.code[l] == '105') {
								toastr.error('ONEISS account is invalid.', 'Invalid User Account!', { timeOut: 5000 });

							}
							else {
								toastr.error(data.data[l].Data.Pat_First_Name + ' ' + data.data[l].Data.Pat_Middle_Name + ' ' + data.data[l].Data.Pat_Last_Name, '<i class="fa fa-files-o"></i> Duplicate Data', { timeOut: 5000 });
							}
						}
						window.setTimeout(function () { $('#checkAll_patient').prop('checked', false); }, 1000);
						window.setTimeout(function () { $("#ws_OneissTbl").DataTable().ajax.reload(); }, 1000);
					},
					error: function (response) {
						toastr.error("The web service has been unable to communicate with it's backend server", "Webservice error!", { timeout: 3000 });
						$("#ModalProgressBar2").modal('hide');
						window.setTimeout(function () { location.reload() }, 3000);
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

