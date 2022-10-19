function PNDFClassList() {
    localStorage.clear();
    var data = new Object();

    data.id = "PNDFClassTable";
    data.link = baseURL + "Ref_PNDFClass/PNDFClassList";
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

function AddPNDFClass() {
    $('#ModalAddPNDFClass').modal({
        backdrop: 'static'
    }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#PNDFClassTable").on("click", ".ModalEditPNDFClass", function () {
    var data = $(this).data();
    var dmcode = data['dmcode'];
    var obj = getPNDFClass(dmcode);

    $('#ModalAddPNDFClass').modal({
        backdrop: 'static'
    }).draggable({});
    $("#addID").val('update');
    $("#key").val(obj['dmcode']);
    $("#mcdesc").val(obj['dmdesc']);
    $('#status option[value="' + obj['dmstat'] + '"]').prop("selected", true);
    $("#key").prop('readonly', true);
});

function getPNDFClass(dmcode) {
    var obj;

    $.ajax({
        type: "POST",
        url: baseURL + "Ref_PNDFClass/getPNDFClass/" + dmcode,
        data: {
            dmcode: dmcode
        },
        async: false,
        success: function (data, status) {
            obj = $.parseJSON(data);
        },
        error: function (data, status) { }
    });
    return obj;
}

$("#PNDFClassTable").on("click", ".ModalDeletePNDFClass", function () {
    var data = $(this).data();
    var dmcode = atob(data['dmcode']);

    $('#DeletePNDFClass').modal({
        backdrop: 'static'
    }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(dmcode);
});