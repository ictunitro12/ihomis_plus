$("#frmPatientSaveOutpatient").on("submit", function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: baseURL + "Outpatient/saveOutpatientData",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      if ($("#saveIdenOPD").val() == "insert") {
        $("#PatientOutpatientSummary").modal("hide");
        toastr.success("Patient Successfully Logged! ", "Success");
        removeCookie("fromModule");
        removeCookie("Modulehpercode");
        window.location.replace(baseURL + "Outpatient");
      } else if ($("#saveIdenOPD").val() == "update") {
        $("#PatientOutpatientSummary").modal("hide");
        toastr.success(
          "Patient Data Successfully Updated! ",
          '<i class="fa fa-check"></i> Success'
        );
        removeCookie("fromModule");
        removeCookie("Modulehpercode");
        window.location.replace(baseURL + "Outpatient");
      }
    },
    error: function (data, desc, err) {
      if(data.status >= 500){
        toastr.error(data.statusText,'Error');
      }else if(data.status == 400){
        toastr.error(data.responseJSON.message ,'Error');
      }else{
        toastr.error('Failed to process request!','Error');
      }
    },
  });
  return false;
});

$("#form-step-2").validate({
  rules: {
    dateVisit: "required",
    timeVisit: "required",
    tosType: "required",
    selTos: "required",
    selDoc: "required",
    typaccom: "required",
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
    selDisp: {
      required: {
        depends: function () {
          if ($("#dateDischarge").val() != "" && $("#selDisp").val() == "") {
            return true;
          } else {
            return false;
          }
        },
      },
    },
    dateDischarge: {
      required: {
        depends: function () {
          if ($("#selDisp").val() != "" && $("#dateDischarge").val() == "") {
            return true;
          } else {
            return false;
          }
        },
      },
    },
    reasAdmit: {
      required: {
        depends: function () {
          if ($("#selDisp").val() == "ADMIT") {
            return true;
          } else {
            return false;
          }
        },
      },
    },
    refrom_hfhudcode: {
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
              return $("#referralLogId").val();
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
    tosType: "Type of consultation is required!",
    selTos: "Type of service is required!",
    selDoc: "Consulting doctor is required!",
    typaccom: "Type is required!",
    patagehr: "Age is required/invalid!",
    selDisp: "Disposition is required!",
    dateDischarge: "Date of discharge is required!",
    reasAdmit: "Reason for admission is required!",
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
