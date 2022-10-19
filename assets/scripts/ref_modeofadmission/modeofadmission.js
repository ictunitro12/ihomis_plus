var baseURL = $("#baseURL").val();

function ModeofAdmissionList() {
    var data = new Object();
    data.id = "ModeofAdmissionTable";
    data.link = baseURL + "Ref_ModeofAdmission/ModeofAdmissionList";
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

$("#ModeofAdmissionTable").on("click", ".ModalEditModeofAdmission", function () {
    var data = $(this).data();
    var admmode = atob(data['admmode']);
    var admdesc = atob(data['admdesc']);
    var admstat = atob(data['admstat']);

    $('#ModalAddModeofAdmission').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(admmode);
    $("#mdesc").val(admdesc);
    $('#status option[value="' + admstat + '"]').prop("selected", true);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddModeofAdmission() {
    $('#ModalAddModeofAdmission').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#ModeofAdmissionTable").on("click", ".ModalDeleteModeofAdmission", function () {
    var data = $(this).data();
    var admmode = atob(data['admmode']);
    
    $('#DeleteModeofAdmission').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(admmode);
});