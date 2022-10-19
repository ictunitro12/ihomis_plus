var baseURL = $('#base_url').val();

$('#frmDeleteUnit').validate({
  submitHandler: function (form) {
    var POSTURL = baseURL + "Ref_Occupation/deleteUnit";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(form).serialize(),
      success: function (data) {
        if ($('#formID').val() == 'delete') {
          toastr.success('Status successfully changed.', 'Success');
          $('#DeleteUnit').modal('hide');
          UnitList();
        }
        else {
          toastr.error('Error on deleting!', 'Error');
          UnitList();
        }
      },
      error: function (data) {
        toastr.error('Error on deleting!', 'Error');
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