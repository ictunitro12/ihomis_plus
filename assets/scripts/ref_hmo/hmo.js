
function HmoList() {
	var data = new Object();
	data.id = "Hmo_list";
	data.link = baseURL + "Ref_HMO/HMO_list";
	data.type = "POST";
	data.coldef = [
		{
			targets: [5],
			searchable: false,
			orderable: false,
			render: function (data, type, row) {
				switch (data) {
					case 'A': return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
					case 'I': return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
					default: return '<span class="badge  bg-default">Unknown</span>';
				}
			},
		},
	];
	loadTable(data);
}
function inithmo(hmocode) {
	uppercase();
	City();
	$('#formIden').val('insert');
	$('#hmocode').val(hmocode);
}

function inithmoEdit(hmocode) {
	uppercase();
	City();
	$('#formIden').val('update');
	$('#hmocode').val(hmocode);
}

$("#Hmo_list").on("click", ".ModalDeleteHmo", function () {
	var data = $(this).data();
	$('#DeleteHmo').modal({ backdrop: 'static' }).draggable();
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['hmocode']);

});

$("#Hmo_list").on("click", ".ModalEditHmo", function () {
	var data = $(this).data();
	var obj = gethmodata(data['hmocode']);
	$('#ModalAddHmo').modal({ backdrop: 'static' }).draggable({});
	$("#formIden").val('update');
	$("#hmocode").prop('readonly', true);

	$("#hmocode").val(obj['hmocode']);
	$("#hmoname").val(obj['hmoname']);
	$("#hmoaddr").val(obj['hmoaddr']);
	$("#hmotel1").val(obj['hmotel1']);
	$("#hmotel2").val(obj['hmotel2']);
	$("#hmostat").val(obj['hmostat']);

});
function AddHmo() {
	$('#ModalAddHmo').modal({ backdrop: 'static' }).draggable();
	$("#formIden").val('insert');
	$("#hmocode").prop('readonly', false);
}


function gethmodata(hmocode) {
	var hmocode = encodeURIComponent(encodeURIComponent(hmocode));
	$.ajax({
		type: "POST",
		url: baseURL + "Ref_HMO/getHmoData/" + hmocode,
		data: "JSON",
		async: false,
		success: function (data, status) {
			obj = $.parseJSON(data);

		},
		error: function (data, status) {
		}
	});
	return obj;
}

