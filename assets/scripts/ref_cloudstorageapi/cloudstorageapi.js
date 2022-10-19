function CloudStorageAPIList() {
    var data = new Object();
    data.id = "CloudStorageAPITable";
    data.link = baseURL + "Ref_CloudStorageAPI/CloudStorageAPIList";
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

$("#CloudStorageAPITable").on("click", ".ModalEditCloudStorageAPI", function () {
    var data = $(this).data();
    var pcscode = atob(data['pcscode']);
    var pcsurl = atob(data['pcsurl']);
    var pcsstatus = atob(data['pcsstatus']);

    $('#ModalAddCloudStorageAPI').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(pcscode);
    $("#url").val(pcsurl);
    $('#status option[value="' + pcsstatus + '"]').prop("selected", true);
    $("#addID").val('update');
    
});

function AddCloudStorageAPI() {
    $('#ModalAddCloudStorageAPI').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $('#status option[value="A"]').prop("selected", true);
}

$("#CloudStorageAPITable").on("click", ".ModalDeleteCloudStorageAPI", function () {
    var data = $(this).data();
    var pcscode = atob(data['pcscode']);

    $('#DeleteCloudStorageAPI').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(pcscode);
});