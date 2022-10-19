$(document).ready(function () {
	PackageList();
});

function PackageList() {

	var data = new Object();
	data.id = "PackageTable";
	data.link = baseURL + "Ref_PhicRef/PhicRef_Package";
	data.type = "POST";
	data.coldef = [
		{
			targets: [0, 6],
			visible: false,
		},
		{
			targets: [5],
			searchable: false,
			render: function (data, type, row) {
				switch (data) {
					case 'Y':
						return '<center><input type="checkbox" value="Y" readonly checked></center>';
						break;
					case 'N':
						return '<center><input type="checkbox" value="N" readonly unchecked></center>';
						break;
					default:
						return '<center><input type="checkbox" value="" readonly unchecked></center>';
				}

			},
		}];
	loadTable(data);
}

$("#PackageTable").on("click", ".ModalDeletePack", function () {
	var data = $(this).data();
	console.log(data);
	$('#DeletePack').modal('show');
	$("#deleteIDPack").val('delete');
	$("#deletecodepack").val(atob(data['refintkey']));

});

$("#PackageTable").on("click", ".ModalEditPack", function () {
	var data = $(this).data();
	console.log(data);
	$('#ModalAddPackage').modal('show');
	$("#formIdenPack").val('update');
	$("#refcodepack").val(atob(data['refcode']));
	$("#description").val(atob(data['description']));
	$("#amount").val(atob(data['amt']));
	$("#refintkeypack").val(atob(data['refintkey']));
	$("#refdatepack").val($.datepicker.formatDate('yy-mm-dd', new Date(atob(data['refdate']))));
	$("#compensable option[value='" + atob(data['compense']) + "']").attr("selected", "selected");
});

function AddPackage() {
	$("#formIdenPack").val('insert');
	$('#ModalAddPackage').modal('show');
}