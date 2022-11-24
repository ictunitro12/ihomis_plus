function LicenseList(employeeid) {
    var data = new Object();
    data.id = "LicenseTable";
    data.link = baseURL + "Ref_Personnel/LicenseList/" + employeeid;
    data.type = "POST";
    data.coldef = [{
        targets: [8],
        searchable: false,
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
        targets: [0, 1],
        visible: false,
    },
    {
        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        orderable: false,
    },
    {
        targets: [0, 1, 8, 9],
        searchable: false,
    }
    ];
    loadTable(data);
}

$("#add").on("click", function () {
    var employeeid = getCookie('employeeid');

    $('#ModalAddLicense').modal({
        backdrop: 'static'
    }).draggable({});
    $("#formIden").val('insert');
    $("#empid").val(employeeid);
    $('#prefix').change(licensecode);
    $('#license').change(licensecode);
    $('#status option[value="A"]').prop("selected", true);
    $('#prefix option[value="MD"]').prop("selected", true);
    $('#classif option[value="GENPR"]').prop("selected", true);
    $('#hpe option[value="X"]').prop("selected", true);
    $('#category option[value="NOTAP"]').prop("selected", true);
    $('#prefix').prop("disabled", false);
    $('#license').prop("disabled", false);
});


$("#LicenseTable").on("click", ".ModalEditLicense", function () {
    var data = $(this).data();
    var licno = atob(data['licno']);
    var obj = getLicense(licno);
    var licno = btoa(obj['licno']);

    $('#ModalAddLicense').modal({
        backdrop: 'static'
    }).draggable({});
    $("#formIden").val('update');
    $("#licno").val(obj['licno']);
    $("#empid").val(obj['employeeid']);
    $("#license").val(obj['prov_licno']);
    $("#degree").val(obj['empdegree']);
    $("#acreno").val(obj['accno']);
    var vdate = setTimeLocale(obj['accdte']);
    var svdate = vdate.substring(0,10);
    var vdates = ((vdate == "1970-01-01 00:00:00") || (vdate == null) || (svdate == "1970-01-01")) ? "" : svdate;
    $("#valdte").val(vdates);
    console.log(svdate);
    $("#alias").val(obj['empalias']);
    $("#pma").val(obj['docpma']);
    $("#ccg").val(obj['upiprov']);
    $("#ptr").val(obj['docptr']);
    $("#pass").val(obj['provpassw']);
    $("#uid").val(obj['puserid']);
    $("#hint").val(obj['hint']);
    $("#answer").val(obj['hanswer']);
    $("#x12c").val(obj['clscon']);
    $('#prefix').change(licensecode);
    $('#license').change(licensecode);
    $('#status option[value="' + obj['empstat'] + '"]').prop("selected", true);
    $('#prefix option[value="' + obj['prov_pref'] + '"]').prop("selected", true);
    $('#classif option[value="' + obj['clscode'] + '"]').prop("selected", true);
    $('#hpe option[value="' + obj['docpe'] + '"]').prop("selected", true);
    $('#category option[value="' + obj['catcode'] + '"]').prop("selected", true);
    $('#prefix').prop("disabled", true);
    $('#license').prop("disabled", true);
});

$("#LicenseTable").on("click", ".ModalDeleteLicense", function () {
    var data = $(this).data();
    var licno = atob(data['licno']);

    $('#DeleteLicense').modal({
        backdrop: 'static'
    }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(licno);
    $("#lic").text(licno);
});

function getLicense(licno) {
    var obj;
    $.ajax({
        type: "POST",
        url: baseURL + "Ref_Personnel/getLicense/" + licno,
        data: {
            licno: licno
        },
        async: false,
        success: function (data, status) {
            obj = $.parseJSON(data);
        },
        error: function (data, status) { }
    });
    return obj;
}

function checkLicense(employeeid) {
    var obj;
    $.ajax({
        type: "POST",
        url: baseURL + "Ref_Personnel/checklicense/" + employeeid,
        async: false,
        success: function (data, status) {
            var obj = $.parseJSON(data);
            if (obj['no'] > 0) {
                $("#add").prop('disabled', true);
            } else {
                $("#add").prop('disabled', false)
            }
        },
        error: function (data, status) {
        }
    });

}

function licensecode() {
    var pref = $('#prefix').val();
    var lic = $('#license').val();

    $("#licno").val(pref + lic);
}