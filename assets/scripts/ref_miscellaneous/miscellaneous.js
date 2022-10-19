var baseURL = $("#baseURL").val();

function MiscellaneousList() {
    var data = new Object();
    data.id = "MiscellaneousTable";
    data.link = baseURL + "Ref_Miscellaneous/MiscellaneousList";
    data.type = "POST";
    data.coldef = [{
        targets: [7],
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
        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8],
        orderable: false,
    },
    {
        targets: [3, 5, 7, 8],
        searchable: false,
    },
    {
        targets: [3, 5],
        visible: false,
    }
    ];
    loadTable(data);
}

$("#MiscellaneousTable").on("click", ".ModalEditMiscellaneous", function () {
    var data = $(this).data();
    var hmcode = atob(data['hmcode']);
    var hmdesc = atob(data['hmdesc']);
    var hmamt = atob(data['hmamt']);
    var hmstat = atob(data['hmstat']);
    var hmdteas = atob(data['hmdteas']);
    var hmdteass = ((hmdteas == "1970-01-01 00:00:00") || (hmdteas == null)) ? "" : setTimeLocale(hmdteas);
    $("#mdao").val(hmdteass);
    var uomcode = data['uomcode'];

    SelUnitMeasure();
    setUnitMeasure(uomcode);

    $('#ModalAddMiscellaneous').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(hmcode);
    $("#mdesc").val(hmdesc);
    $("#ma").val(hmamt);
    $('#status option[value="' + hmstat + '"]').prop("selected", true);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddMiscellaneous() {
    $('#ModalAddMiscellaneous').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#mdao').val(getTimeLocale());
    $('#status option[value="A"]').prop("selected", true);

    SelUnitMeasure();
}

$("#MiscellaneousTable").on("click", ".ModalDeleteMiscellaneous", function () {
    var data = $(this).data();
    var hmcode = atob(data['hmcode']);

    $('#DeleteMiscellaneous').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(hmcode);
});