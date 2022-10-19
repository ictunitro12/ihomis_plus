var baseURL = $("#baseURL").val();

function SaltList() {
    var data = new Object();
    data.id = "SaltTable";
    data.link = baseURL + "Ref_Salt/SaltList";
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

$("#SaltTable").on("click", ".ModalEditSalt", function () {
    var data = $(this).data();
    var saltcode = atob(data['saltcode']);
    var saltdesc = atob(data['saltdesc']);
    var saltstat = atob(data['saltstat']);

    $('#ModalAddSalt').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(saltcode);
    $("#sdesc").val(saltdesc);
    $('#status option[value="' + saltstat + '"]').prop("selected", true);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddSalt() {
    $('#ModalAddSalt').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#SaltTable").on("click", ".ModalDeleteSalt", function () {
    var data = $(this).data();
    var saltcode = atob(data['saltcode']);

    $('#DeleteSalt').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(saltcode);
});