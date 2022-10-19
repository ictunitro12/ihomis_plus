$(document).ready(function () {
	PhicAccreList();
});

function PhicAccreList() {

	var data = new Object();
	data.id = "PhicAccreTable";
	data.link = baseURL + "Ref_PhicAccreditation/PhicAccreditation_List";
	data.type = "POST";
	data.coldef = [
		{
			targets: [0, 11],
			searchable: false,
			orderable: false,
			render: function (data, type, row) {
				switch (data) {
					case 'HOSP':
						return 'HOSPITAL';
						break;
					case 'DOTS':
						return 'TB-DOTS FACILITY';
						break;
					case 'ABTC':
						return 'ANIMAL BITE TREATMENT CENTER';
						break;
					case 'MCPP':
						return '>MATERNITY CARE PACKAGE PROVIDER';
						break;
					case 'PCBP':
						return 'PRIMARY CARE BENEFIT PROVIDER';
						break;
					case 'A':
						return '<i class="fa fa-check  text-success"></i>&nbsp Active';
						break;
					case 'I':
						return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
						break;
					default: return '<span class="badge  bg-default">Unknown</span>';
				}
			},
		},
		{
			targets: [6, 7, 9],
			searchable: false,
			orderable: false,
			render: function (data, type, row) {
				if (data == '' || data == null) {
					return '<span class="badge bg-default"></span>';
				} else {
					return '<center><i class="fas fa-lock text-danger"></i></center>';
				}
			},
		},
		{
			targets: [10],
			searchable: false,
			orderable: false,
			render: function (data, type, row) {
				if (data == '' || data == null) {
					return 'DOH Server';
				} else {
					return data;
				}
			},
		},
		{
			targets: [12, 13],
			visible: false,
		}];
	loadTable(data);
}

$("#PhicAccreTable").on("click", ".ModalDelete", function () {
	var data = $(this).data();
	$('#DeleteModal').modal({ backdrop: 'static' }).draggable();
	$("#deleteID").val('delete');
	$("#deletecode").val(data['paccreno']);

});

$("#PhicAccreTable").on("click", ".ModalEdit", function () {
	var data = $(this).data();
	var paccreno = data.paccreno;
	$.ajax({
		type: "POST",
		url: baseURL + "Ref_PhicAccreditation/forEditting/" + paccreno,
		data: 'JSON',
		cache: false,
		async: true,
		success: function (data) {
			var obj = $.parseJSON(data);
			$('#ModalAddPhicAccre').modal({ backdrop: 'static' }).draggable();
			$("#formIden").val('update');
			$("#pfacility option[value='" + obj[0].pfacility + "']").attr("selected", "selected");
			$("#pfacilityname").val(obj[0].pfacilityname);
			$("#paccreno").val(obj[0].paccreno);
			$("#validity").val($.datepicker.formatDate('yy-mm-dd', new Date(obj[0].validity)));
			$("#phospitalcode").val(obj[0].phospitalcode);
			$("#pusername").val(obj[0].pusername);
			$("#ppassword").val(obj[0].ppassword);
			$("#cipherkey").val(obj[0].cipherkey);
			$("#pcsausername").val(obj[0].pcsausername);
			$("#pcsapassword").val(obj[0].pcsapassword);
			var pcscode = obj[0].pcscode;
			setCloudUrl(pcscode);
			$("#selCloudUrl option[value='" + obj[0].pcscode + "']").attr("selected", "selected");
			$("#pstatus option[value='" + obj[0].pstatus + "']").attr("selected", "selected");
		},
		error: function (data) {
			toastr.error('Error saving!', 'Error');
		}
	});
});

function AddPhicAccre() {
	$("#formIden").val('insert');
	$('#ModalAddPhicAccre').modal({ backdrop: 'static' }).draggable();
	SelCloudUrl();
}

function setCloudUrl(pcscode) {
	SelCloudUrl();
	var relSelect = $('#selCloudUrl');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_PhicAccreditation/setCloudUrl/' + pcscode,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['pcsurl'], obj['pcscode'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}

function SelCloudUrl() {
	$('#selCloudUrl').select2({
		theme: 'coreui',
		placeholder: 'DOH Storage',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "/Ref_PhicAccreditation/searchCloudStorage",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchCloudStorage: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.pcscode,
						text: item.pcsurl
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selCloudUrl').on('change', function () {
		var data = $("#selCloudUrl option:selected", this);
	});
}