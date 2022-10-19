function IPGroupList() {
    var data = new Object();
    data.id = "IPGroupTable";
    data.link = baseURL + "Ref_IPGroup/IPGroupList";
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

$("#IPGroupTable").on("click", ".ModalEditIPGroup", function () {
    var data = $(this).data();
    var ipcode = atob(data['ipcode']);
    var ipdesc = atob(data['ipdesc']);
    var ipstat = atob(data['ipstat']);

    $('#ModalAddIPGroup').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(ipcode);
    $("#idesc").val(ipdesc);
    $('#status option[value="' + ipstat + '"]').prop("selected", true);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddIPGroup() {
    $('#ModalAddIPGroup').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#IPGroupTable").on("click", ".ModalDeleteIPGroup", function () {
    var data = $(this).data();
    var ipcode = atob(data['ipcode']);

    $('#DeleteIPGroup').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(ipcode);
});