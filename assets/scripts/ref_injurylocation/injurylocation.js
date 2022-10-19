var baseURL = $("#baseURL").val();

function InjuryLocationList() {
    var data = new Object();
    data.id = "InjuryLocationTable";
    data.link = baseURL + "Ref_InjuryLocation/InjuryLocationList";
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
    }];
    loadTable(data);
}

$("#InjuryLocationTable").on("click", ".ModalEditInjuryLocation", function () {
    var data = $(this).data();
    var injloc = atob(data['injloc']);
    var injdesc = atob(data['injdesc']);
    var injstat = atob(data['injstat']);

    $('#ModalAddInjuryLocation').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(injloc);
    $("#idesc").val(injdesc);
    $('#status option[value="' + injstat + '"]').prop("selected", true);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddInjuryLocation() {
    $('#ModalAddInjuryLocation').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#InjuryLocationTable").on("click", ".ModalDeleteInjuryLocation", function () {
    var data = $(this).data();
    var injloc = atob(data['injloc']);

    $('#DeleteInjuryLocation').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(injloc);
});