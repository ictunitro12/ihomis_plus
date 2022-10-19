var baseURL = $("#baseURL").val();

function AllCaseRateList() {
    var data = new Object();
    data.id = "AllCaseRateTable";
    data.link = baseURL + "Ref_AllCaseRate/AllCaseRateList";
    data.type = "POST";
    data.coldef = [{
        targets: [2, 9, 10, 13],
        render: function (data, type, row) {
            switch (data) {
                case 'M':
                    return '<span>Medical</span>';
                    break;
                case 'P':
                    return '<span>Procedure</span>';
                    break;
                case 'Y':
                    return '<span>Yes</span>';
                    break;
                case 'N':
                    return '<span>No</span>';
                    break;
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
        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
        orderable: false,
    },
    {
        targets: [2, 9, 10, 13, 15],
        searchable: false,
    }
    ];
    loadTable(data);
}

$("#AllCaseRateTable").on("click", ".ModalEditAllCaseRate", function () {
    var data = $(this).data();
    var obj = getAllCaseRate(data['key']);

    $('#ModalAddAllCaseRate').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(obj['casecode']);
    $("#cdesc").val(obj['casedesc']);
    $('#ctype option[value="' + obj['casetype'] + '"]').prop("selected", true);
    $("#frate").val(obj['firstrate']);
    $("#fpf").val(obj['firstpf']);
    $("#fhosp").val(obj['firsthosp']);
    $("#strate").val(obj['secondtrate']);
    $("#spf").val(obj['secondpf']);
    $("#shosp").val(obj['secondhosp']);
    $('#lateral option[value="' + obj['laterality'] + '"]').prop("selected", true);
    $('#refer option[value="' + obj['referral'] + '"]').prop("selected", true);
    $("#gcode").val(obj['grpcode']);
    $("#gdesc").val(obj['grpdesc']);
    if (obj['stat'] == null) {
        $('#status option[value="A"]').prop("selected", true);
    } else {
        $('#status option[value="' + obj['stat'] + '"]').prop("selected", true);
    }
    $("#crcode").val(obj['caseratecode']);
    $("#addID").val('update');
    $("#key").prop("readonly", true);
});

function AddAllCaseRate() {
    $('#ModalAddAllCaseRate').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop("readonly", false);
    $('#status option[value="A"]').prop("selected", true);
    $('#refer option[value="N"]').prop("selected", true);
    $('#lateral option[value="N"]').prop("selected", true);
    $('#ctype option[value="M"]').prop("selected", true);
}

function getAllCaseRate(key) {
    var obj;
    $.ajax({
        type: "POST",
        url: baseURL + "Ref_AllCaseRate/getAllCaseRate",
        data: {
            key: key
        },
        async: false,
        success: function (data, status) {
            obj = $.parseJSON(data);
        },
        error: function (data, status) { }
    });
    return obj;
}

$("#AllCaseRateTable").on("click", ".ModalDeleteAllCaseRate", function () {
    var data = $(this).data();
    $('#DeleteAllCaseRate').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(data['key']);
});