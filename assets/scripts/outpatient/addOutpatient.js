function initAdd() {
  $("#saveIdenOPD").val("insert");

  // check for hpercode query string
  let url = new URL(window.location);
  let params = new URLSearchParams(url.search);
  var fromModule = getCookie("fromModule");
  var Modulehpercode = getCookie("Modulehpercode");
  init_refrom_hfhudcode();
  if (
    params.has("hpercode") &&
    params.get("hpercode") &&
    fromModule != "referral" &&
    fromModule != "opd"
  ) {
    $("#hpercode").val(params.get("hpercode"));
    initFormEdit(params.get("hpercode"));
  } else if (fromModule == "opd") {
    initFormEdit(btoa(Modulehpercode));
  } else if (fromModule == "referral") {
    initFormEdit(params.get("hpercode"));
    let referralLogId = atob(params.get("logid"));
    if (referralLogId) {
      set_refrom_fhud(referralLogId);
    }
  } else {
    setCookie("fromModule", "opd", "1");
    $("#PatSearch").modal("show");
  }

  // appointment
  if (params.has("appointment") && params.get("appointment")) {
    $("#appointment_id").val(atob(params.get("appointment")));
  }

  // triage
  if (params.has("triage") && params.get("triage")) {
    $("#triage_id").val(params.get("triage"));
  }

  $("#ImageSave").prop("src", "../assets/img/avatars/none.png");
  uppercase();
  $("#vsBp").mask("999/999");
  OutpatientWizard();
}

$("#dateVisit").change(function () {
  var thisDate = $(this).val();
  var bdate = $("#info_dob").val();
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/EncounterAgeComp/" + bdate + "/" + thisDate,
    dataType: "JSON",
    success: function (data, status) {
      $("#patage").val(data.year);
      $("#patagemo").val(data.month);
      $("#patagedy").val(data.day);
      if (data.year == 0 && data.month == 0 && data.day == 0) {
        $("#patagehr").prop("readonly", false);
      } else {
        $("#patagehr").val("");
        $("#patagehr").prop("readonly", true);
      }
    },
    error: function (data, status) {
      return status;
    },
  });
});

function set_refrom_fhud(referralLogId) {
  const info_lname = $("#info_lname").val();
  const info_fname = $("#info_fname").val();
  const info_mname = $("#info_mname").val();
  const info_dob = $("#info_dob").val();
  const info_sex = $("#info_sex").val();
  const patReferralQuery = {
    info_lname,
    info_fname,
    info_mname,
    info_dob,
    info_sex,
    referralLogId,
  };

  $.ajax({
    type: "POST",
    url: baseURL + "Referral/getPatReferralHfhud",
    dataType: "JSON",
    data: patReferralQuery,
    async: false,
    success: function (data, status) {
      var option = new Option(data.hfhudname, data.hfhudcode, true, true);
      $("#refrom_hfhudcode").append(option).trigger("change");
      $("#refrom_hfhudcode").trigger({
        theme: "coreui",
        type: "select2:select",
        params: {
          data: data,
        },
      });
    },
  });
}
