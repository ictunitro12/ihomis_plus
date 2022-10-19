function initForm() {
  generatehpercode();
  CivilStatus();
  SelReligion();
  uppercase();
  City();
  City2();
  SelIndig();
  $("#patientPhoto").prop("src", baseURL + "assets/img/avatars/none.png");
  $("#formIden").val("insert");
  $("#patPHIE").prop("hidden", false);
  fromAppointment();
}

function initFormEdit(hpercode) {
  PatientInformation(hpercode);
  PatientOldnumber(hpercode);
  PatientAddress(hpercode);
  PatientAddress2(hpercode);
  PatientContact(hpercode);
  PatientOccupation(hpercode);
  Contact(hpercode);
  Occupation(hpercode);
  SelReligion();
  uppercase();

  $("#formIden").val("update");
}

function initFormReferral() {
  const logID = $("#referralFromLogId").val();
  const referralData = getReferralData(logID);
  if (referralData == null) {
    window.location.replace(baseURL + "Referral");
  }
  const referralHpercode = getReferralHpercode(referralData);
  if (!referralHpercode) {
    generatehpercode();
    uppercase();
    $("#info_fname").val(getCookie("ref_fname"));
    $("#info_mname").val(getCookie("ref_mname"));
    $("#info_lname").val(getCookie("ref_lname"));
    const bdate = new Date(getCookie("ref_bdate"));
    var bdatemonth = "";
    if (bdate.getMonth() < 10) {
      bdatemonth = "0" + bdate.getMonth();
    } else {
      bdatemonth = bdate.getMonth();
    }
    $("#info_dob").val(
      bdate.getFullYear() + "-" + bdatemonth + "-" + bdate.getDate()
    );
    $("#info_street").val(referralData.patientStreetAddress);
    $("#info_sex option[value=" + getCookie("ref_sex") + "]").prop(
      "selected",
      true
    );
    $(
      "#info_cs option[value=" +
        (getCookie("ref_cstat") == "" ? "S" : getCookie("ref_cstat")) +
        "]"
    ).prop("selected", true);
    setCity(referralData.patientMundCode);
    setBrgy(referralData.patientBrgyCode);
    fullname();
    AgeComputation(getCookie("ref_bdate"));
    SelReligion();
    $("#patientPhoto").prop("src", baseURL + "assets/img/avatars/none.png");
    $("#formIden").val("insert");
    $("#frmPatientProfile").valid();
  } else {
    if (referralData.referralCategory == "ER") {
      setCookie("fromModule", "referral", "1");
      window.location.replace(
        baseURL +
          "Emergency/Add?hpercode=" +
          btoa(referralHpercode.hpercode) +
          "&logid=" +
          btoa(logID)
      );
    } else if (referralData.referralCategory == "OP") {
      setCookie("fromModule", "referral", "1");
      window.location.replace(
        baseURL +
          "Outpatient/Add?hpercode=" +
          btoa(referralHpercode.hpercode) +
          "&logid=" +
          btoa(logID)
      );
    }
  }
}

function getReferralData(logID) {
  var obj = null;
  $.ajax({
    type: "POST",
    url: baseURL + "Referral/getReferralFrom",
    dataType: "JSON",
    data: { logid: logID },
    async: false,
    success: function (data, status) {
      obj = $.parseJSON(data.data);
    },
    error: function (data, status) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return obj;
}

function getReferralHpercode(referralData) {
  var obj = null;
  $.ajax({
    type: "POST",
    url: baseURL + "Referral/getReferralHpercode",
    dataType: "JSON",
    data: {
      lastname: referralData.patientLastName,
      firstname: referralData.patientFirstName,
      middlename: referralData.patientMiddlename,
      sex: referralData.patientSex,
      birthdate: referralData.patientBirthDate,
    }, //{ logid: logID },
    async: false,
    success: function (data, status) {
      obj = data; //$.parseJSON(data);
    },
    error: function (data, status) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return obj;
}

function checkCookie() {
  let logID = getCookie("logID");
  if (logID != "") {
    window.location.replace(baseURL + "Emergency/Add");
  }
}

function checkExist() {
  generatehpercode();
  CivilStatus();
  SelReligion();
  uppercase();
  City();
  $("#ImageSave").prop("src", baseURL + "assets/img/avatars/none.png");
  $("#formIden").val("insert");
  $("#patPHIE").prop("hidden", false);
}

function generatehpercode() {
  $.ajax({
    url: "generatehpercode",
    type: "POST",
    data: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data, response) {
      var obj = $.parseJSON(data);
      $("#info_hpatkey").val(obj["patkey"]);
      $("#info_hpercode").val(obj["percode"]);
    },
    error: function (response) {
      toastr.error("Error", "Failed to Generate Hpercode!");
    },
  });
}

function mss() {
  var lname = $("#info_lname").val();
  var mname = $("#info_mname").val();
  var fname = $("#info_fname").val();
  var dob = $("#info_dob").val();
  var sex = $("#info_sex").val();
}

function fromAppointment() {
  let url = new URL(window.location);
  let params = new URLSearchParams(url.search);

  if (params.has("appointment") && params.get("appointment")) {
    $("#appointment_id").val(atob(params.get("appointment")));
    $.ajax({
      type: "GET",
      url: baseURL + "appointments/" + params.get("appointment") + "/get",
      success: function success(data, response) {
        const patientDetails = JSON.parse(data.data.patient);
        let city = null;
        let city2 = null;
        let barangay = null;
        let barangay2 = null;

        $("#info_lname").val(patientDetails.last_name);
        $("#info_mname").val(patientDetails.middle_name);
        $("#info_fname").val(patientDetails.first_name);
        $("#info_suffix").val(patientDetails.name_suffix);
        $("#info_dob").val(patientDetails.birthdate).trigger("change");
        $("#info_sex").val(patientDetails.sex);
        $("#info_cs").val(patientDetails.civil_status);

        // current/temporary address
        $("#info_street").val(patientDetails.temporary_address.street);

        if (patientDetails.temporary_address.district_id) {
          city = patientDetails.temporary_address.sub_municipality_id;
        } else if (patientDetails.temporary_address.city_id) {
          city = patientDetails.temporary_address.city_id;
        } else {
          city = patientDetails.temporary_address.municipality_id;
        }

        barangay = patientDetails.temporary_address.barangay_id;

        setCity(city.toString().slice(0, -3));

        setBrgy(barangay);

        // permanent address
        if (patientDetails.permanent_address.is_same) {
          $("#checkAddress").prop("checked", true);
        } else {
          $("#info_streetp").val(patientDetails.permanent_address.street);

          if (patientDetails.permanent_address.district_id) {
            city2 = patientDetails.permanent_address.sub_municipality_id;
          } else if (patientDetails.permanent_address.city_id) {
            city2 = patientDetails.permanent_address.city_id;
          } else {
            city2 = patientDetails.permanent_address.municipality_id;
          }

          barangay2 = patientDetails.permanent_address.barangay_id;

          setCity2(city2.toString().slice(0, -3));
          setBrgy2(barangay2);
        }
      },
    });
  }
}
