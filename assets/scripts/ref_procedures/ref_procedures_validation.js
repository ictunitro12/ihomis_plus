function AddProcedures() {
    $('#ModalAddProcedures').modal({ backdrop: 'static' }).draggable({});;
    $("#formIden").val('insert');
    $("#code").prop('readonly', false);
    $('#status option[value="A"]').prop("selected", true);

    SelCharge();
    SelTemplate();
}

$("#ProcedureTable").on("click", ".ModalEditProcedures", function () {
    var data = $(this).data();
    var now = new Date();
    var proccode = atob(data['proccode']);
    var chrgcode = atob(data['prmapto']);
    var tempcode = atob(data['restemplate']);
    var obj = getProcedures(proccode);

    $('#ModalAddProcedures').modal({ backdrop: 'static' }).draggable({});;
    $("#formIden").val('update');
    $("#code").val(obj['proccode']);
    $("#name").val(obj['procdesc']);
    $("#rvu").val(obj['rvu']);    
    $('#testresult option[value="' + obj['procreslt'] + '"]').prop("selected", true);
    $('#bentype option[value="' + obj['altpcode'] + '"]').prop("selected", true);
    $('#cost option[value="' + obj['costcenter'] + '"]').prop("selected", true);
    $('#ident option[value="' + obj['priden'] + '"]').prop("selected", true);
    $('#seclabgrp option[value="' + obj['prsect'] + '"]').prop("selected", true);
    $('#secdetail option[value="' + obj['prdetsec'] + '"]').prop("selected", true);
    $('#odosor option[value="' + obj['prvfa'] + '"]').prop("selected", true);
    $('#region option[value="' + obj['prregn'] + '"]').prop("selected", true);
    $('#extype option[value="' + obj['prextyp'] + '"]').prop("selected", true);
    $('#specialextype option[value="' + obj['prspeco'] + '"]').prop("selected", true);
    $('#operatype option[value="' + obj['optycode'] + '"]').prop("selected", true);
    $('#proctype option[value="' + obj['protcode'] + '"]').prop("selected", true);
    $("#note").val(obj['procrem']);
    $('#status option[value="' + obj['procstat'] + '"]').prop("selected", true);
    $("#code").prop('readonly', true);

    SelCharge();
    SelTemplate();
    setCharge(chrgcode);
    setTemplate(tempcode);
});

$("#ProcedureTable").on("click", ".ModalDeleteProcedures", function () {
    var data = $(this).data();
    var code = atob(data['proccode']);
    var procdesc = atob(data['procdesc']);

    $('#DeleteProcedures').modal({ backdrop: 'static' }).draggable({});;
    $("#formIdentification").val('delete');
    $("#deletecode").val(code);
    $("#desc").text(procdesc);
});

function getProcedures(proccode, prmapto, restemplate) {
    var proccode = encodeURIComponent(encodeURIComponent(proccode));
    var prmapto = encodeURIComponent(encodeURIComponent(prmapto));
    var restemplate = encodeURIComponent(encodeURIComponent(restemplate));
    $.ajax({
        type: "POST",
        url: baseURL + "Ref_Procedures/getProcedures/" + proccode + "/" + prmapto + "/" + restemplate,
        data: "JSON",
        async: false,
        success: function (data, status) {
            obj = $.parseJSON(data);
        },
        error: function (data, status) {
        }
    });
    return obj;
}

$('#frmProcedures').validate({
    submitHandler: function (form) {
        var POSTURL = baseURL + "Ref_Procedures/saveProcedures";
        $.ajax({
            type: "POST",
            url: POSTURL,
            dataType: "JSON",
            cache: false,
            async: true,
            data: $(form).serialize(),
            success: function (data) {
                if ($('#formIden').val() == 'insert') {
                    toastr.success('Record successfully saved.', 'Success');
                    $('#ModalAddProcedures').modal('hide');
                    ProceduresList();
                }
                else if ($('#formIden').val() == 'update') {
                    toastr.success('Record successfully updated.', 'Success');
                    $('#ModalAddProcedures').modal('hide');
                    ProceduresList();
                }
            },
            error: function (data) {
                toastr.error('Dont change the code!', 'Error');
            }
        });
        $(form).submit();
        return false;
    
    },

    errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
        error.addClass('invalid-feedback');

        if (element.prop('type') === 'checkbox') {
            error.insertAfter(element.parent('label'));
        } else if (element.hasClass('select2-hidden-accessible')) {
            element = $("#selReg" + element.attr("id") + "ul").parent();

            error.insertAfter(element);
        }
        else {
            error.insertAfter(element);
        }
    },

    highlight: function highlight(element) {
        $(element).addClass('is-invalid').removeClass('is-valid');
        if ($(element).hasClass('select2-offscreen')) {
            element = $("#s2id_" + element.attr("id") + " ul").parent();
            $(element).addClass('is-invalid').removeClass('is-valid');
        }
    },

    unhighlight: function unhighlight(element) {
        $(element).addClass('is-valid').removeClass('is-invalid');
        if ($(element).hasClass('select2-offscreen')) {
            $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
        }
    }
});

