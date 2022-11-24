function RouteList() {
    var data = new Object();
    data.id = "RouteTable";
    data.link = baseURL + "Ref_Route/RouteList";
    data.type = "POST";
    data.coldef = [{
        targets: [2],
        searchable: false,
        render: function (data, type, row) {
            switch (data) {
                case 'A':
                    return '<i class="fa fa-check text-success">&nbspActive</i>';
                    break;
                case 'I':
                    return '<i class="fa fa-remove text-danger">&nbspInactive</i>';
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

function AddRoute() {
    $('#ModalAddRoute').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $('#status option[value="A"]').prop("selected", true);
    $("#key").prop('readonly', false);
}

$("#RouteTable").on("click", ".ModalEditRoute", function () {
    var data = $(this).data();
    var rtecode = atob(data['rtecode']);
    var rtedesc = atob(data['rtedesc']);
    var rtestat = atob(data['rtestat']);

    $('#ModalAddRoute').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('update');
    $("#key").val(rtecode);
    $("#rdesc").val(rtedesc);
    $('#status option[value="' + rtestat + '"]').prop("selected", true);
    $("#key").prop('readonly', true);
});

$("#RouteTable").on("click", ".ModalDeleteRoute", function () {
    var data = $(this).data();
    var rtecode = atob(data['rtecode']);
    var rtedesc = atob(data['rtedesc']);

    $('#DeleteRoute').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(rtecode);
    $("#desc").text(rtedesc);
});