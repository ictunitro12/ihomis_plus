function PackagingList() {
	var data = new Object();
	data.id = "PackagingTable";
	data.link = baseURL + "Ref_Packaging/PackagingList";
	data.type = "POST";
	data.coldef = [{
		targets: [2],
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
		targets: [0, 1, 2, 3],
		orderable: false,
	},
	{
		targets: [2, 3],
		searchable: false,
	}
	];
	loadTable(data);
}

function AddPackaging() {
	$('#ModalAddPackaging').modal({ backdrop: 'static' }).draggable({});
	$("#addID").val('insert');
	$('#status option[value="A"]').prop("selected", true);
	$("#key").prop('readonly', false);
}

$("#PackagingTable").on("click", ".ModalEditPackaging", function () {
	var data = $(this).data();
	var packcode = atob(data['packcode']);
	var packdesc = atob(data['packdesc']);
	var packstat = atob(data['packstat']);

	$('#ModalAddPackaging').modal({ backdrop: 'static' }).draggable({});
	$("#addID").val('update');
	$("#key").val(packcode);
	$("#pdesc").val(packdesc);
	$('#status option[value="' + packstat + '"]').prop("selected", true);
	$("#key").prop('readonly', true);
});

$("#PackagingTable").on("click", ".ModalDeletePackaging", function () {
	var data = $(this).data();
	var packcode = atob(data['packcode']);
	var packdesc = atob(data['packdesc']);
	
	$('#DeletePackaging').modal({ backdrop: 'static' }).draggable({});
	$("#formID").val('delete');
	$("#deletekey").val(packcode);
	$("#desc").text(packdesc);
});