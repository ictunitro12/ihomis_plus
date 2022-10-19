function initfhud() {
	City();
	$('#formIden').val('insert');
}

function initfhudEdit(hfhudcode) {
	setCity();
	$('#formIden').val('update');
	$('#hfhudcode').val(hfhudcode);
}
function FhudList() {
	var data = new Object();
	data.id = "Fhud_list";
	data.link = baseURL + "Ref_FHUD/FHUD_list";
	data.type = "POST";
	data.coldef = [{
		targets: [9],
		searchable: false,
		orderable: false,
		render: function (data, type, row) {
			switch (data) {
				case 'A':
					return '<span class="text text-success"><i class="fa fa-check"></i>&nbsp Active</span>';
					break;
				case 'I':
					return '<span class="text text-danger"><i class="fa fa-remove"></i>&nbsp Inactive</span>';
					break;
				default:
					return '<span class="badge  bg-default">Unknown</span>';
			}
		},
	},];
	loadTable(data);
}

$("#Fhud_list").on("click", ".ModalDeleteFhud", function () {
	var data = $(this).data();
	$('#DeleteFhud').modal({ backdrop: 'static' }).draggable();
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['hfhudcode']);

});

$("#Fhud_list").on("click", ".ModalEditFhud", function () {
	var data = $(this).data();
	var obj = getfhuddata(data['hfhudcode']);
	initfhudEdit();
	$('#ModalAddFhud').modal({
		backdrop: 'static'
	}).draggable({});
	$("#formIden").val('update');
	$("#hfhudcode").val(obj['hfhudcode']);
	$("#hfhudname").val(obj['hfhudname']);
	$('#hfhuddate').val($.datepicker.formatDate('yy-mm-dd', new Date(obj['hfhuddate'])));
	var city = obj['ctycode'];
	setCity(city);
	setBrgy(obj['brgy']);
	$("#selCity").val(obj['ctycode']);
	$("#selBrgy").val(obj['brgy']);
	$("#nso_code").val(obj['nso_code']);
	$("#hfstat option[value='" + obj['hfstat'] + "']").attr("selected", "selected");
	$("#faccode").val(obj['faccode']);
	$("#address").val(obj['address']);
	$("#faclicno").val(obj['faclicno']);
	$("#accreno").val(obj['accreno']);

});

function AddFhud() {
	initfhud();
	$('#ModalAddFhud').modal({ backdrop: 'static' }).draggable();
	$("#formIden").val('insert');
}

function getfhuddata(hfhudcode) {
	var hfhudcode = encodeURIComponent(encodeURIComponent(hfhudcode));
	$.ajax({
		type: "POST",
		url: baseURL + "Ref_FHUD/getFhudData/" + hfhudcode,
		data: "JSON",
		async: false,
		success: function (data, status) {
			obj = $.parseJSON(data);

		},
		error: function (data, status) { }
	});
	return obj;
}



