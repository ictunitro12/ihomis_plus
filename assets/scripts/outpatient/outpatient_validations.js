var baseURL = $("#base_url").val();
var hpercode = $("#lhpercode").val();
var enccode = $("#lEnccode").val();

$("#form-step-2").validate({
  rules: {
    dateVisit: "required",
    timeVisit: "required",
    dateDischarge: "required",
    timeDischarge: "required",
    tosType: "required",
    selTos: "required",
    selDoc: "required",
    patagehr: {
      required: {
        depends: function () {
          if (
            $("#patage").val() == 0 &&
            $("#patagemo").val() == 0 &&
            $("#patagedy").val() == 0
          ) {
            return true;
          } else {
            return false;
          }
        },
      },
    },
    refrom_hfhudcode: {
      required: true,
      remote: {
        param: {
          url:
            window.location.origin + "/" + "Referral/validatePatReferralHfhud",
          type: "POST",
          data: {
            info_lname: function () {
              return $("#info_lname").val();
            },
            info_fname: function () {
              return $("#info_fname").val();
            },
            info_mname: function () {
              return $("#info_mname").val();
            },
            info_dob: function () {
              return $("#info_dob").val();
            },
            info_sex: function () {
              return $("#info_sex").val();
            },
            referralLogId: function () {
              return getCookie("logID");
            },
          },
        },
        depends: function () {
          return $("#refrom_hfhudcode").val() != "" ? true : false;
        },
      },
    },
  },
  messages: {
    dateVisit: "Date of visit is required!",
    timeVisit: "Time of visit is required!",
    dateDischarge: "Date of discharge is required!",
    timeDischarge: "Time of discharge is required!",
    tosType: "Type of consultation is required!",
    selTos: "Type of service is required!",
    selDoc: "Consulting doctor is required!",
    patagehr: "Age is required/invalid!",
    refrom_hfhudcode: "Invalid Referring Facility!",
  },
  errorElement: "span",
  errorPlacement: function errorPlacement(error, element) {
    error.addClass("invalid-feedback");

    if (element.prop("type") === "checkbox") {
      error.insertAfter(element.parent("label"));
    } else if (element.hasClass("select2-coreui-hidden-accessible")) {
      element = $("#sel" + element.attr("id") + "ul").parent();
      error.insertAfter(element.parent());
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
