var baseURL = $("#baseURL").val();

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
					return '<i class="fa fa-check  text-success"></i>&nbsp Active';
					break;
				case 'I':
					return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
					break;
				default:
					return '<span> </span>';
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

$("#PackagingTable").on("click", ".ModalEditPackaging", function () {
	var data = $(this).data();
	var packcode = atob(data['packcode']);
	var packdesc = atob(data['packdesc']);
	var packstat = atob(data['packstat']);

	$('#ModalAddPackaging').modal({ backdrop: 'static' }).draggable({});
	$("#key").val(packcode);
	$("#pdesc").val(packdesc);
	$('#status option[value="' + packstat + '"]').prop("selected", true);
	$("#addID").val('update');
	$("#key").prop('readonly', true);
});

function AddPackaging() {
	$('#ModalAddPackaging').modal({ backdrop: 'static' }).draggable({});
	$("#addID").val('insert');
	$("#key").prop('readonly', false);
	$('#status option[value="A"]').prop("selected", true);
}

$("#PackagingTable").on("click", ".ModalDeletePackaging", function () {
	var data = $(this).data();
	var packcode = atob(data['packcode']);
	
	$('#DeletePackaging').modal({ backdrop: 'static' }).draggable({});
	$("#formID").val('delete');
	$("#deletekey").val(packcode);
});