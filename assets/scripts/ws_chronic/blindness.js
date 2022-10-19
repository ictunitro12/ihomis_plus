$(function () {
	var type, text, title;
	Ws_blindness_List();
});
function Ws_blindness_List() {
	var table = $("#ws_BlindnessTbl").DataTable({
		processing: true,
		searchable: true,
		destroy: true,
		pageLength: 25,
		className: 'table table-sm table-borderless table-condensed table-hover',
		columns: [{
			render: function (data, type, row, meta) {
				if (row.date_uploaded) {
					return (
						'<center><input type="checkbox" name="h_patient_id[]" checked disabled class="h_patient_id" data-h_patient_id="' +
						data.h_patient_id +
						'" value="' +
						data.h_patient_id +
						'"></center> '
					);
				} else {
					return (
						'<center><input type="checkbox" name="h_patient_id[]" class="h_patient_id" data-h_patient_id="' +
						data.h_patient_id +
						'" value="' +
						data.h_patient_id +
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
			"data": "stat_code"
		},
		{
			"data": "typepatient"
		},
		{
			"data": "date_of_report"
		},
		{
			"data": "time_of_report"
		},
		{
			"data": "date_uploaded"
		}
		],
		columnDefs: [{
			targets: [2, 5],
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
			targets: 4,
			render: function (data) {
				switch (data) {
					case 'S': return 'SINGLE';
						break;
					case 'M': return 'MERRIED';
						break;
					case 'C': return 'CO-HABITATION';
						break;
					case 'X': return 'SEPARATED';
						break;
					case 'W': return 'WIDOW/WIDOWER';
						break;
					default: return '<center><span bg-default>Unknown</span></center>';
						break;
				}
			},
		},
		{
			targets: [3, 4, 5, 6, 7, 8],
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
			url: baseURL + "CHRONIC_Webservice/Blindness_list",
			type: "POST",
		},

	});
	$('#uploaddata').on('click', function (e) {
		const form = new FormData(document.getElementById("blindness_form"));
		const h_patient_ids = form.getAll("h_patient_id[]");
		if (h_patient_ids.length > 0) {
			for (var c = 0; c < h_patient_ids.length; c++) {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				submiting_animation(form);
			}
		} else {
			toastr.warning('Please select atleast one patient!','<i class="fa fa-exclamation-triangle"></i> Warning!');
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
					url: baseURL + "CHRONIC_Webservice/push_Blindness",
					type: "POST",
					data: form,
					dataType: 'JSON',
					processData: false,
					contentType: false,
					success: function (data, response, type) {
						$("#ModalProgressBar2").modal('hide');
						for (var l = 0; l < data.code.length; l++) {
							if (data.code[l].code == '104') {
								toastr.success(data.data[l].Data.patfirst + ' ' + data.data[l].Data.patmiddle + ' ' + data.data[l].Data.patlast, 'Data has been sent!', { timeOut: 5000 });
								var h_patient_id = encodeURIComponent(encodeURIComponent(data.data[l].Data.h_patient_id));
								var registry_no = encodeURIComponent(encodeURIComponent(data.code[l].registry_no));
								$.ajax({
									url: baseURL + "CHRONIC_Webservice/update_blindness_registryno/" + h_patient_id + '/' + registry_no,
									type: "POST",
									success: function (data, response, type) { },
									error: function (response) { },
								});
							}
							else {
								toastr.error(data.data[l].Data.patfirst + ' ' + data.data[l].Data.patmiddle + ' ' + data.data[l].Data.patlast, data.code[l].message, { timeOut: 5000 });
							}
						}
						window.setTimeout(function () { $('#checkAll_patient').prop('checked', false); }, 1000);
						window.setTimeout(function () { $("#ws_BlindnessTbl").DataTable().ajax.reload(); }, 1000);
					},
					error: function (response) {
						toastr.error("The web service has been unable to communicate with it's backend server", "Webservice error!");
						$("#ModalProgressBar2").modal('hide');
						window.setTimeout(function () { location.reload() }, 5000);
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
