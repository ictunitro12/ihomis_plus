var baseURL = $('#base_url').val();

$('#frmrabies').validate({
  submitHandler: function (form) {
    var POSTURL = baseURL + "Rabies/saveRabies";
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
          window.location.replace(baseURL + "Rabies");
        }
        else if ($('#formIden').val() == 'update') {
          toastr.success('Record successfully updated.', 'Success');
          window.location.replace(baseURL + "Rabies");
        }
      },
      error: function (data) {
        toastr.error('Please select a patient!', 'Error');
      }
    });
    return false;
    $(form).submit();
  },

  rules: {
    dooi: 'required',
    dor: 'required',
    noreporter: 'required',
    reportercno: 'required',
  },

  messages: {
    dooi: 'Date onset of illness is required!',
    dor: 'Date of report is required!',
    noreporter: 'Name of reporter is required!',
    reportercno: 'Contact no. is required!',
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