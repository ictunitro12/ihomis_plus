var baseURL = $('#base_url').val();

$('#frmLaboratoryData').validate({
  submitHandler: function (form) {
    var POSTURL = baseURL + "AFP/saveLaboratoryData";
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
          location.reload(true);
        }
        else if ($('#formIden').val() == 'update') {
          toastr.success('Record successfully updated.', 'Success');
          location.reload(true);
        }
      },
      error: function (data) {
        toastr.error('Laboratory data already exist!', 'Error');
      }
    });
    return false;
    $(form).submit();
  },

  rules: {
    dcollected: 'required',
    dsent: 'required',
    dreceived: 'required',
    labresult: 'required',
    labresultspecify: 'required',
    aostool: 'required',
    noipacks: 'required',
    qoipacks: 'required',
    tocontainer: 'required',
    nocourier: 'required',
    rby: 'required',
  },

  messages: {
    dcollected: 'Date collected is required!',
    dsent: 'Date sent to RITM is required!',
    dreceived: 'Date received RITM is required!',
    labresult: 'Result is required!',
    labresultspecify: 'Type is required!',
    aostool: 'Amount of stool is required!',
    noipacks: 'No. of ice pack/s is required!',
    qoipacks: 'Qty of ice pack/s is required!',
    tocontainer: 'Type of container is required!',
    nocourier: 'Name of courier is required!',
    rby: 'Received by is required!',
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