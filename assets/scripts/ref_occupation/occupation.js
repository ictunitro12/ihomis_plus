var baseURL = $("#baseURL").val();

function OccupationList() {
    var data = new Object();
    data.id = "OccupationTable";
    data.link = baseURL + "Ref_Occupation/OccupationList";
    data.type = "POST";
    data.coldef = [{
        targets: [4],
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
        targets: [0, 1, 2, 3, 4, 5],
        orderable: false,
    },
    {
        targets: [4, 5],
        searchable: false,
    }
    ];
    loadTable(data);
}

function AddOccupation() {
    $('#ModalAddOccupation').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#mupsw").val('P');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#OccupationTable").on("click", ".ModalEditOccupation", function () {
    var data = $(this).data();
    var smajcode = atob(data['smajcode']);
    var smajdesc = atob(data['smajdesc']);
    var majcode = atob(data['majcode']);
    var majdesc = atob(data['majdesc']);
    var majstat = atob(data['majstat']);

    $('#ModalAddOccupation').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('update');
    $("#key").val(smajcode);
    $("#smdesc").val(smajdesc);
    $("#mcode").val(majcode);
    $("#mdesc").val(majdesc);
    $('#status option[value="' + majstat + '"]').prop("selected", true);
    $("#mupsw").val('U');
    $("#key").prop('readonly', true);
});

$("#OccupationTable").on("click", ".ModalDeleteOccupation", function () {
    var data = $(this).data();
    var smajcode = atob(data['smajcode']);

    $('#DeleteOccupation').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(smajcode);
});