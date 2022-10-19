var baseURL = $("#baseURL").val();

function PNDFGenericList() {
    var data = new Object();
    data.id = "PNDFGenericTable";
    data.link = baseURL + "Ref_PNDFGeneric/PNDFGenericList";
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
        targets: [0],
        visible: false,
    },
    {
        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8],
        orderable: false,
    },
    {
        targets: [0, 7, 8],
        searchable: false,
    }
    ];
    loadTable(data);
}

function AddPNDFGeneric() {
    $('#ModalAddPNDFGeneric').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', true);
    $('#status option[value="A"]').prop("selected", true);

    SelGeneric();
    SelPNDFClass();
    generategrpcode();
}

$("#PNDFGenericTable").on("click", ".ModalEditPNDFGeneric", function () {
    var data = $(this).data();
    var obj = getPNDFGeneric(data['key']);
    var gencode = obj['gencode'];
    var dmcode = obj['dmcode'];
    var dms1key = obj['dms1key'];
    var dms2key = obj['dms2key'];
    var dms3key = obj['dms3key'];
    var dms4key = obj['dms4key'];

    $('#ModalAddPNDFGeneric').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('update');
    $("#key").val(obj['grpcode']);
    $('#status option[value="' + obj['grpstat'] + '"]').prop("selected", true);
    $("#key").prop('readonly', true);

    SelGeneric();
    SelPNDFClass();

    setGeneric(gencode);
    setPNDFClass(dmcode);
    setSubGroup1(dms1key);
    setSubGroup2(dms2key);
    setSubGroup3(dms3key);
    setSubGroup4(dms4key);
});

function getPNDFGeneric(key) {
    var obj;
    $.ajax({
        type: "POST",
        url: baseURL + "Ref_PNDFGeneric/getPNDFGeneric/",
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

$("#PNDFGenericTable").on("click", ".ModalDeletePNDFGeneric", function () {
    var data = $(this).data();

    $('#DeletePNDFGeneric').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(data['key']);
});