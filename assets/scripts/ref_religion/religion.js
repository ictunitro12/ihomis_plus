var baseURL = $("#baseURL").val();

function ReligionList() {
    var data = new Object();
    data.id = "ReligionTable";
    data.link = baseURL + "Ref_Religion/ReligionList";
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

$("#ReligionTable").on("click", ".ModalEditReligion", function () {
    var data = $(this).data();
    var relcode = atob(data['relcode']);
    var reldesc = atob(data['reldesc']);
    var relstat = atob(data['relstat']);

    $('#ModalAddReligion').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(relcode);
    $("#rdesc").val(reldesc);
    $('#status option[value="' + relstat + '"]').prop("selected", true);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddReligion() {
    $('#ModalAddReligion').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#ReligionTable").on("click", ".ModalDeleteReligion", function () {
    var data = $(this).data();
    var relcode = atob(data['relcode']);
    
    $('#DeleteReligion').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(relcode);
});