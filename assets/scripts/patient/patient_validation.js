$(document).ready(function () {
  $("#frmPatientProfile").validate({
    /*submitHandler: function (form) {
      var fromModule = getCookie("fromModule");
      var POSTURL = baseURL + "Patient/savePatientInformation";
      $.ajax({
        type: "POST",
        url: POSTURL,
        dataType: "JSON",
        cache: false,
        async: true,
        data: $(form).serialize(),
        success: function (data) {
          if ($("#formIden").val() == "insert") {
            toastr.success("Patient Successfully Saved! ", "Success");
  
            if (fromModule == "adm") {
              setCookie("Modulehpercode", $("#info_hpercode").val(), "1");
              window.location.replace(baseURL + "Admission/Add");
            } else if (fromModule == "er") {
              setCookie("Modulehpercode", $("#info_hpercode").val(), "1");
              window.location.replace(baseURL + "Emergency/Add");
            } else if (fromModule == "opd") {
              setCookie("Modulehpercode", $("#info_hpercode").val(), "1");
              window.location.replace(baseURL + "Outpatient/Add");
            } else {
              location.reload();
              generatehpercode();
              checkCookie();
            }
          } else if ($("#formIden").val() == "update") {
            toastr.success("Patient Successfully Updated! ", "Success");
          }
        },
        error: function (data) {
          console.log(data);
          toastr.error(data, "Error");
          toastr.error("Error on saving!", "Error");
        },
      });
      //return false;
      //$(form).submit();
    },*/
    rules: {
      info_lname: "required",
      info_fname: "required",
      /*info_mname: "required",*/
      info_street: "required",
      info_dob: "required",
      info_sex: "required",
      info_cs: "required",
      selCity: "required",
      selBrgy: "required",
      info_fullname: {
        required: true,
        remote: {
          depends: function () {
            return $("#formIden").val() == "insert";
          },
          param: {
            url: "existPatient",
            type: "POST",
            data: {
              patlast: function () {
                return $("#info_lname").val();
              },
              patfirst: function () {
                return $("#info_fname").val();
              },
              patmiddle: function () {
                return $("#info_mname").val();
              },
              patbdate: function () {
                return $("#info_dob").val();
              },
              patsex: function () {
                return $("#info_sex").val();
              },
            },
          },
        },
      },
      info_hpercode: {
        required: true,
        remote: {
          depends: function () {
            return $("#formIden").val() == "insert";
          },
          param: {
            url: "existHpercode",
            type: "POST",
          },
        },
      },
    },
    messages: {
      info_lname: "Lastname is required!",
      info_fname: "Firstname is required!",
      /*info_mname: "Middlename is required!",*/
      info_street: "Street Address is required!",

      info_fullname: {
        required: "Patient name is required",
        remote: "Patient is Exists!",
      },

      info_hpatkey: {
        remote: "Hospital number is Exists!",
      },

      info_hpercode: {
        remote: "Hospital number is Exists!",
      },

      info_dob: "Date of birth is required!",
      info_sex: "Gender is required!",
      info_cs: "Civil Status required!",
      selBrgy: "Please select Barangay!",
    },
    errorElement: "span",
    errorPlacement: function errorPlacement(error, element) {
      error.addClass("invalid-feedback");

      if (element.prop("type") === "checkbox") {
        error.insertAfter(element.parent("label"));
      } else if (element.hasClass("select2-hidden-accessible")) {
        element = $("#selCity" + element.attr("id") + "ul").parent();

        error.insertAfter(element);
      } else {
        error.insertAfter(element);
      }
    },

    highlight: function highlight(element) {
      $(element).addClass("is-invalid").removeClass("is-valid");
      if ($(element).hasClass("select2-offscreen")) {
        $("#s2id_" + element.attr("id") + " ul")
          .addClass("is-invalid")
          .removeClass("is-valid");
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

  $("#frmPatientProfile").submit(function (event) {
    event.preventDefault();
    if ($(this).valid() == false) {
      return;
    }
    var fromModule = getCookie("fromModule");
    var POSTURL = baseURL + "Patient/savePatientInformation";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(this).serialize(),
      success: function (data) {
        if ($("#formIden").val() == "insert") {
          toastr.success("Patient Successfully Saved! ", "Success");
          if (fromModule == "adm") {
            setCookie("Modulehpercode", $("#info_hpercode").val(), "1");
            window.location.replace(baseURL + "Admission/Add");
          } else if (fromModule == "er") {
            setCookie("Modulehpercode", $("#info_hpercode").val(), "1");
            window.location.replace(baseURL + "Emergency/Add");
          } else if (fromModule == "opd") {
            setCookie("Modulehpercode", $("#info_hpercode").val(), "1");
            window.location.replace(baseURL + "Outpatient/Add");
          } else {
            location.reload();
            generatehpercode();
            checkCookie();
          }
        } else if ($("#formIden").val() == "update") {
          toastr.success("Patient Successfully Updated! ", "Success");
        }
      },
      error: function (data) {
        if (data.status == 400) {
          toastr.error(data.responseJSON.message, "Error");
        } else {
          toastr.error("Error on saving!", "Error");
        }
      },
    });
  });

  $("#info_lname").change(validatePerson);

  $("#info_fname").change(validatePerson);

  $("#info_mname").change(validatePerson);

  $("#info_sex").change(validatePerson);
});

const validatePerson = function () {
  if (
    $("#info_lname").val() &&
    $("#info_fname").val() &&
    $("#info_dob").val() &&
    $("#info_sex").val() &&
    $("#formIden").val() == "insert"
  ) {
    $("#frmPatientProfile").valid();
  }
};
