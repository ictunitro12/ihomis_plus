$('#frmInfection').validate({
    submitHandler: function (form) {
        var POSTURL = baseURL + "Rep_Statistical/saveInfection";
        $.ajax({
            type: "POST",
            url: POSTURL,
            dataType: "JSON",
            cache: false,
            async: true,
            data: $(form).serialize(),
            success: function (data) {
                if ($('#AddIdenInf').val() == 'insert') {
                    toastr.success('Record successfully saved.', 'Success');
                    $('#manage_modal').modal('hide');
                    InfRate();
                    infection();
                    discharged();
                }
                else if ($('#AddIdenInf').val() == 'update') {
                    toastr.success('Record successfully updated.', 'Success');
                    $('#manage_modal').modal('hide');
                    InfRate();
                    infection();
                    discharged();
                }
                else {
                    toastr.error('Error on saving!', 'Error');

                }
            },
            error: function (data) {
                toastr.error('Error on saving!', 'Error');
            }
        });
        return false;
        $(form).submit();
    },
    rules: {
        no_vappat: 'required',
        ventvap: 'required',
        no_bsipat: 'required',
        bsi_centralline: 'required',
        no_utipat: 'required',
        no_uticat: 'required',
        no_ssipat: 'required',
        no_totproc: 'required',
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

