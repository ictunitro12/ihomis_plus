$('#frmProcDetails').submit('click', function () {
    var POSTURL = baseURL + "Ref_Procedures/saveProcDetails";
    $.ajax({
        type: "POST",
        url: POSTURL,
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: 'JSON',
        success: function (data, response) {
            if ($('#formIden').val() == 'insert') {
                toastr.success('Record successfully saved.', 'Success');
                $('#ModalAddProcDetails').modal('hide');
                window.location.reload();
            }
            else if ($('#formIden').val() == 'update') {
                toastr.success('Record successfully updated.', 'Success');
                $('#ModalAddProcDetails').modal('hide');
                window.location.reload();
            }
        },
        error: function (data, response) {
            toastr.error('Effectivity date already exist!', 'Error');
        }
    });
    return false;
});

/* $('#frmProcDetails').validate({
    submitHandler: function (form) {
        var POSTURL = baseURL + "Ref_Procedures/saveProcDetails";
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
                    $('#ModalAddProcDetails').modal('hide');
                    window.location.reload();
                }
                else if ($('#formIden').val() == 'update') {
                    toastr.success('Record successfully updated.', 'Success');
                    $('#ModalAddProcDetails').modal('hide');
                    window.location.reload();
                }
            },
            error: function (data) {
                toastr.error('Dont change the code!', 'Error');
            }
        });
        return false;
        $(form).submit();
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

 */