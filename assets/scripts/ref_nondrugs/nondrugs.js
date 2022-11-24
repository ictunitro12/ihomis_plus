function NonDrugsList() {
	localStorage.clear();

	var data = new Object();
	data.id = "NonDrugsTable";
	data.link = baseURL + "Ref_NonDrugs/NonDrugsList";
	data.type = "POST";
	data.coldef = [{
		targets: [4],
		searchable: false,
		render: function (data, type, row) {
			switch (data) {
				case 'A':
					return '<i class="fa fa-check text-success">&nbspActive</i>';
					break;
				case 'I':
					return '<i class="fa fa-remove text-danger">&nbspInactive</i>';
					break;
				default:
					return '';
			}
		},
	},
	{
		targets: [2],
		visible: false,
	},
	{
		targets: [0, 1, 2, 3, 4, 5],
		orderable: false,
	},
	{
		targets: [2, 4, 5],
		searchable: false,
	}
	];
	loadTable(data);
}

function AddNonDrugs() {
	$('#ModalAddNonDrugs').modal({ backdrop: 'static' }).draggable({});
	$("#addID").val('insert');
	$('#dao').val(getTimeLocale());
	$("#ptupsw").val('P');
	$('#status option[value="A"]').prop("selected", true);
	$("#key").prop('readonly', false);
}

$("#NonDrugsTable").on("click", ".ModalEditNonDrugs", function () {
	var data = $(this).data();
	var ptcode = data['ptcode'];
	var obj = getNonDrugs(ptcode);

	$('#ModalAddNonDrugs').modal({ backdrop: 'static' }).draggable({});
	$("#addID").val('update');
	$("#key").val(obj['ptcode']);
	$("#ndd").val(obj['ptdesc']);
	var dateasof = obj['dateasof'];
	var dateasofs = ((dateasof == "1970-01-01 00:00:00") || (dateasof == null)) ? "" : setTimeLocale(dateasof);
	$("#dao").val(dateasofs);
	$('#status option[value="' + obj['ptstat'] + '"]').prop("selected", true);
	$("#ptupsw").val('U');
	$("#key").prop('readonly', true);
});

$("#NonDrugsTable").on("click", ".ModalDeleteNonDrugs", function () {
	var data = $(this).data();
	var ptcode = atob(data['ptcode']);
	var ptdesc = atob(data['ptdesc']);

	$('#DeleteNonDrugs').modal({ backdrop: 'static' }).draggable({});
	$("#formID").val('delete');
	$("#deletekey").val(ptcode);
	$("#desc").text(ptdesc);
});

function getNonDrugs(ptcode) {
	var obj;
	$.ajax({
		type: "POST",
		url: baseURL + "Ref_NonDrugs/getNonDrugs/" + ptcode,
		data: {
			ptcode: ptcode
		},
		async: false,
		success: function (data, status) {
			obj = $.parseJSON(data);
		},
		error: function (data, status) { }
	});
	return obj;
}