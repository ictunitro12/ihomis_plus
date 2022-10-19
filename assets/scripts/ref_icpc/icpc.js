function initicpc(encreason) {
	$('#formIden').val('insert');
	$('#encreason').val(encreason);
}

function initicpcEdit(encreason) {
	$('#formIden').val('update');
	$('#encreason').val(encreason);
}
$("#Icpc_list").on("click", ".ModalDeleteIcpc", function () {
	var data = $(this).data();
	$('#DeleteIcpc').modal({ backdrop: 'static' }).draggable();
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['encreason']);

});

$("#Icpc_list").on("click", ".ModalEditIcpc", function () {
	var data = $(this).data();
	var obj = geticpcdata(data['encreason']);
	$('#ModalAddIcpc').modal({ backdrop: 'static' }).draggable({});
	$("#formIden").val('update');

	$("#encreason").prop('readonly', true);
	$("#encreason").val(obj['encreason']);
	$("#icpc_desc").val(obj['icpc_desc']);
	$("#searchkey").val(obj['searchkey']);
	$("#icpcstat").val(obj['icpcstat']);

});
function AddIcpc() {
	$('#ModalAddIcpc').modal({ backdrop: 'static' }).draggable();
	$("#formIden").val('insert');
	$("#encreason").prop('readonly', false);
}

function geticpcdata(encreason) {
	var encreason = encodeURIComponent(encodeURIComponent(encreason));
	$.ajax({
		type: "POST",
		url: baseURL + "Ref_ICPC/getIcpcData/" + encreason,
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


