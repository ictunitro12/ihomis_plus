$("#frmPatientSaveEmergency").submit("click", function () {
  $.ajax({
    type: "POST",
    url: baseURL + "Emergency/saveErData",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      if ($("#saveIdenEmer").val() == "insert") {
        $("#PatientEmergencySummary").modal("hide");
        //location.reload(true);
        toastr.success("Patient Successfully saved! ", "Success");
        removeCookie("fromModule");
        removeCookie("Modulehpercode");
        window.location.replace(baseURL + "Emergency");
      } else if ($("#saveIdenEmer").val() == "update") {
        $("#PatientEmergencySummary").modal("hide");
        toastr.success(
          "Patient Data Successfully Updated! ",
          '<i class="fa fa-check"></i> Success'
        );
        removeCookie("fromModule");
        removeCookie("Modulehpercode");
        window.location.replace(baseURL + "Emergency");
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

$("#frmTransferRoom").submit("click", function () {
  $.ajax({
    type: "POST",
    url: baseURL + "Admission/transferRoom",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      $("#modalTransfer").modal("hide");
      InpatientRoom($("#rmEnccode").val());
      toastr.success("Patient Sucessfully Transferred!", "Success");
    },
    error: function (xhr, desc, err) {
      toastr.error("Error On saving", "Error");
    },
  });
  return false;
});

$("#form-step-2").validate({
  rules: {
    dateRegistration: "required",
    selBro: "required",
    selTos: "required",
    selCondArrival: "required",
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
    dateRegistration: "Date of registration is required/invalid!",
    selBro: "Select brought by!",
    selTos: "Select type of service!",
    selCondArrival: "Select condition on arrival!",
    patagehr: "Age is required/invalid!",
    refrom_hfhudcode: "Invalid Referring Facility!",
  },

  errorElement: "span",
  errorPlacement: function errorPlacement(error, element) {
    error.addClass("invalid-feedback");

    var elem = $(element);
    error.insertAfter(elem);
  },

  highlight: function highlight(element) {
    var elem = $(element);
    if (elem.hasClass("select2-offscreen")) {
      $("#s2id_" + elem.attr("id") + " ul").addClass("is-invalid");
    } else {
      elem.addClass("is-invalid");
    }
  },

  unhighlight: function unhighlight(element) {
    var elem = $(element);
    if (elem.hasClass("select2-offscreen")) {
      alert("asd");
      $("#s2id_" + elem.attr("id") + " ul").removeClass("is-valid");
    } else {
      elem.removeClass("is-valid");
    }
  },
});
