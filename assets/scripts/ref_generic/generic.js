function GenericList() {
    var data = new Object();
    data.id = "GenericTable";
    data.link = baseURL + "Ref_Generic/GenericList";
    data.type = "POST";
    data.coldef = [{
        targets: [2],
        searchable: false,
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

function AddGeneric() {
    $('#ModalAddGeneric').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $('#status option[value="A"]').prop("selected", true);
    $("#key").prop('readonly', false);
}

$("#GenericTable").on("click", ".ModalEditGeneric", function () {
    var data = $(this).data();
    var gencode = atob(data['gencode']);
    var gendesc = atob(data['gendesc']);
    var genstat = atob(data['genstat']);

    $('#ModalAddGeneric').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('update');
    $("#key").val(gencode);
    $("#gdesc").val(gendesc);
    $('#status option[value="' + genstat + '"]').prop("selected", true);
    $("#key").prop('readonly', true);
});

$("#GenericTable").on("click", ".ModalDeleteGeneric", function () {
    var data = $(this).data();
    var gencode = atob(data['gencode']);
    var gendesc = atob(data['gendesc']);

    $('#DeleteGeneric').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(gencode);
    $("#desc").text(gendesc);
});