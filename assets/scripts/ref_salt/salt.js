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

function AddSalt() {
    $('#ModalAddSalt').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $('#status option[value="A"]').prop("selected", true);
    $("#key").prop('readonly', false);
}

$("#SaltTable").on("click", ".ModalEditSalt", function () {
    var data = $(this).data();
    var saltcode = atob(data['saltcode']);
    var saltdesc = atob(data['saltdesc']);
    var saltstat = atob(data['saltstat']);

    $('#ModalAddSalt').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('update');
    $("#key").val(saltcode);
    $("#sdesc").val(saltdesc);
    $('#status option[value="' + saltstat + '"]').prop("selected", true);
    $("#key").prop('readonly', true);
});

$("#SaltTable").on("click", ".ModalDeleteSalt", function () {
    var data = $(this).data();
    var saltcode = atob(data['saltcode']);
    var saltdesc = atob(data['saltdesc']);

    $('#DeleteSalt').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(saltcode);
    $("#desc").text(saltdesc);
});