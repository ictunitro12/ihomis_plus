function OwnershipList() {
    var data = new Object();
    data.id = "OwnershipTable";
    data.link = baseURL + "Ref_Owner/OwnershipList";
    data.type = "POST";
    data.coldef = [{
        targets: [5],
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
        targets: [0, 1, 2, 3, 4],
        orderable: false,
    },
    {
        targets: [4, 5, 6],
        searchable: false,
    },
    {
        targets: [3],
        visible: false,
    }];
    loadTable(data);
}

$("#OwnershipTable").on("click", ".ModalEditOwnership", function () {
    var data = $(this).data();
    var howner_code = atob(data['howner_code']);
    var howner_name = atob(data['howner_name']);
    var howner_desc = atob(data['howner_desc']);
    var hownerstat = atob(data['hownerstat']);
    var datemod = atob(data['datemod']);
    var datemods = setTimeLocale(datemod);

    $('#ModalAddOwnership').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(howner_code);
    $("#oname").val(howner_name);
    $("#odesc").val(howner_desc);
    $('#status option[value="' + hownerstat + '"]').prop("selected", true);
    $("#datemod").val(datemods);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddOwnership() {
    $('#ModalAddOwnership').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $('#status option[value="A"]').prop("selected", true);
    $("#datemod").val(getTimeLocale());
    $("#key").prop('readonly', false);
}

$("#OwnershipTable").on("click", ".ModalDeleteOwnership", function () {
    var data = $(this).data();
    var howner_code = atob(data['howner_code']);
    var howner_name = atob(data['howner_name']);

    $('#DeleteOwnership').modal({ backdrop: 'static' }).draggable({});
    $("#delname").text(howner_name);
    $("#formID").val('delete');
    $("#deletekey").val(howner_code);
});