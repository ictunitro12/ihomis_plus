var baseURL = $("#baseURL").val();

function StrengthList() {
    var data = new Object();
    data.id = "StrengthTable";
    data.link = baseURL + "Ref_Strength/StrengthList";
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

function AddStrength() {
    $('#ModalAddStrength').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $('#status option[value="A"]').prop("selected", true);
    $("#key").prop('readonly', false);
}

$("#StrengthTable").on("click", ".ModalEditStrength", function () {
    var data = $(this).data();
    var strecode = atob(data['strecode']);
    var stredesc = atob(data['stredesc']);
    var strestat = atob(data['strestat']);

    $('#ModalAddStrength').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('update');
    $("#key").val(strecode);
    $("#sdesc").val(stredesc);
    $('#status option[value="' + strestat + '"]').prop("selected", true);
    $("#key").prop('readonly', true);
});

$("#StrengthTable").on("click", ".ModalDeleteStrength", function () {
    var data = $(this).data();
    var strecode = atob(data['strecode']);
    var stredesc = atob(data['stredesc']);
    
    $('#DeleteStrength').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(strecode);
    $("#desc").text(stredesc);
});