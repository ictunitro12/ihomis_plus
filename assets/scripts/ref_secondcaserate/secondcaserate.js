var baseURL = $("#baseURL").val();

function SecondCaseRateList() {
    var data = new Object();
    data.id = "SecondCaseRateTable";
    data.link = baseURL + "Ref_SecondCaseRate/SecondCaseRateList";
    data.type = "POST";
    data.coldef = [{
        targets: [2, 8, 9, 10],
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
        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
        orderable: false,
    },
    {
        targets: [2, 8, 9, 10, 12],
        searchable: false,
    }
    ];
    loadTable(data);
}

$("#SecondCaseRateTable").on("click", ".ModalEditSecondCaseRate", function () {
    var data = $(this).data();
    var obj = getSecondCaseRate(data['key']);

    $('#ModalAddSecondCaseRate').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(obj['casecode']);
    $("#cdesc").val(obj['casedesc']);
    $('#ctype option[value="' + obj['casetype'] + '"]').prop("selected", true);
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

function AddSecondCaseRate() {
    $('#ModalAddSecondCaseRate').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop("readonly", false);
    $('#status option[value="A"]').prop("selected", true);
    $('#refer option[value="N"]').prop("selected", true);
    $('#lateral option[value="N"]').prop("selected", true);
    $('#ctype option[value="P"]').prop("selected", true);
}

function getSecondCaseRate(key) {
    var obj;
    $.ajax({
        type: "POST",
        url: baseURL + "Ref_SecondCaseRate/getSecondCaseRate",
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

$("#SecondCaseRateTable").on("click", ".ModalDeleteSecondCaseRate", function () {
    var data = $(this).data();
    $('#DeleteSecondCaseRate').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(data['key']);
});