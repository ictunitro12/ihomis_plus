$("#frmMemberProfile").validate({
  submitHandler: function (form) {
    var POSTURL = baseURL + "Philhealth/saveMemberInformation";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(form).serialize(),
      success: function (data) {
        if ($("#formIden").val() == "insert") {
          toastr.success("Member Successfully Saved! ", "Success");
          $("#frmMemberProfile").trigger("reset");
          resetMemberForm();
        } else {
          toastr.success("Member Successfully Updated! ", "Success");
          location.href =
            baseURL + "Philhealth/MemberUpdate/" + $("#pin").val();
        }
      },
      error: function (data) {
        toastr.error("Error on saving!", "Error");
      },
    });
    return false;
  },
  rules: {
    memlast: "required",
    memfirst: "required",
    memsex: "required",
    membdate: "required",
    memstr: "required",
    memReg: "required",
    memProv: "required",
    memCity: "required",
    memZip: "required",
    memcstat: "required",
    mememail: {
      email: true,
    },
    pin: {
      required: true,
      maxlength: 14,
      remote: {
        depends: function () {
          return $("#formIden").val() == "insert";
        },
        param: {
          url: baseURL + "Philhealth/existPIN",
          type: "POST",
        },
      },
    },
    typemem: "required",
    pen: {
      required: {
        depends: function (element) {
          return $("#typemem").val() == "01" || $("#typemem").val() == "02";
        },
      },
    },
    employer: {
      required: {
        depends: function (element) {
          return $("#typemem").val() == "01" || $("#typemem").val() == "02";
        },
      },
    },
    memspouselastname: {
      required: {
        depends: function (element) {
          return false; //$("#memcstat").val() == "M";
        },
      },
    },
    memspousefirstname: {
      required: {
        depends: function (element) {
          return false; //$("#memcstat").val() == "M";
        },
      },
    },
    memhpercode: {
      remote: {
        depends: function (element) {
          return $("#formIden").val() == "insert";
        },
        param: {
          url: baseURL + "Philhealth/existhpercode/",
          type: "POST",
        },
      },
    },
  },
  messages: {
    memlast: "Last Name is required!",
    memfirst: "First Name is required!",
    memsex: "Sex is required!",
    membdate: "Date of Birth is required!",
    memstr: "Street Address is required!",
    memReg: "Please select region!",
    memProv: "Please select Province!",
    memCity: "Please select City!",
    memZip: "Zip Code is requied!",
    memcstat: "Civil Status is required!",
    mememail: "Invalid e-mail address!",
    pin: {
      required: "PIN is required!",
      maxlength: "PIN must not be greater than 14 characters in lenght!",
      remote: "PIN already exists!",
    },
    typemem: "Membership Type is required!",
    pen: "Philhealth Employer Number is required!",
    employer: "Employer Name is required!",
    memhpercode: "Health Record Number is already used!",
  },
  errorElement: "span",
  errorPlacement: function errorPlacement(error, element) {
    error.addClass("invalid-feedback");
    if (element.prop("type") === "checkbox") {
      if (element.next().hasClass("error invalid-feedback") == false) {
        error.insertAfter(element.parent("label"));
      }
    } else if (element.hasClass("select2-hidden-accessible")) {
      if (element.next().hasClass("error invalid-feedback") == false) {
        element = $("#selReg" + element.attr("id") + "ul").parent();
        error.insertAfter(element);
      }
    } else {
      if (element.next().hasClass("error invalid-feedback") == false) {
        error.insertAfter(element);
      }
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

function resetMemberForm() {
  $("#memReg").empty().trigger("change");
  $("#memCity").empty().trigger("change");
  $("#memZip").val("");
  $("#memBrgy").empty().trigger("change");
  $("#memProv").empty().trigger("change");
  $("#memDist").empty().trigger("change");
  $("#typemem").empty().trigger("change");

  $("#empReg").empty().trigger("change");
  $("#empCity").empty().trigger("change");
  $("#empZip").val("");
  $("#empBrgy").empty().trigger("change");
  $("#empProv").empty().trigger("change");
  $("#empDist").empty().trigger("change");
}
