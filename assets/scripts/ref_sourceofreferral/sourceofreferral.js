var baseURL = $("#baseURL").val();

function SourceofReferralList() {
    var data = new Object();
    data.id = "SourceofReferralTable";
    data.link = baseURL + "Ref_SourceofReferral/SourceofReferralList";
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

$("#SourceofReferralTable").on("click", ".ModalEditSourceofReferral", function () {
    var data = $(this).data();
    var srfcode = atob(data['srfcode']);
    var srfdesc = atob(data['srfdesc']);
    var srfstat = atob(data['srfstat']);

    $('#ModalAddSourceofReferral').modal({ backdrop: 'static' }).draggable({});
    $("#key").val(srfcode);
    $("#sdesc").val(srfdesc);
    $('#status option[value="' + srfstat + '"]').prop("selected", true);
    $("#addID").val('update');
    $("#key").prop('readonly', true);
});

function AddSourceofReferral() {
    $('#ModalAddSourceofReferral').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $("#key").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);
}

$("#SourceofReferralTable").on("click", ".ModalDeleteSourceofReferral", function () {
    var data = $(this).data();
    var srfcode = atob(data['srfcode']);
    $('#DeleteSourceofReferral').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(srfcode);
});