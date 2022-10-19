//const baseURI = $("#base_url").val();

$("#frmAddClaim").validate({
  submitHandler: function (form) {
    var enccode = $("#patientenccode").val();
    if ($("#formIden").val() == "insert") {
      var existclaim = existmemberclaim(enccode);
      if (!existclaim) {
        toastr.error("Claim already exist!", "Error");
        return;
      }
    }

    var POSTURL = baseURI + "Philhealth/saveMemberClaim";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(form).serialize(),
      success: function (data) {
        if ($("#formIden").val() == "insert") {
          toastr.success("Member Claim Successfully Saved! ", "Success");
          formReset(form);
          Claimlist($("#phicnum").val());
          $("#AddClaimModal").modal("hide");
        } else {
          toastr.success("Member Claim Successfully Updated! ", "Success");
          $("#AddClaimModal").modal("hide");
          Claimlist($("#phicnum").val());
        }
      },
      error: function (data) {
        toastr.error("Error on saving!", "Error");
      },
    });
    return false;
    $(form).submit();
  },
  rules: {
    reltomem: "required",
    paccreno: "required",
  },
  messages: {
    reltomem: "Relation to Member is required!",
    paccreno: "Claim Type is required!",
  },
  errorElement: "span",
  errorPlacement: function errorPlacement(error, element) {
    error.addClass("invalid-feedback");
    if (element.prop("type") === "checkbox") {
      error.insertAfter(element.parent("label"));
    } else if (element.hasClass("select2-hidden-accessible")) {
      element = $("#selReg" + element.attr("id") + "ul").parent();
      error.insertAfter(element);
    } else {
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
    $(element).addClass("is-invalid").removeClass("is-valid");
    if ($(element).hasClass("select2-offscreen")) {
      element = $("#s2id_" + element.attr("id") + " ul").parent();
      $(element).addClass("is-invalid").removeClass("is-valid");
    }
  },

  unhighlight: function unhighlight(element) {
    $(element).addClass("is-valid").removeClass("is-invalid");
    if ($(element).hasClass("select2-offscreen")) {
      $("#s2id_" + element.attr("id") + " ul")
        .removeClass("is-invalid")
        .addClass("is-valid");
    }
  },
});
