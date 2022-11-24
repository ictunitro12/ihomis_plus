function initAdd() {
  uppercase();

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
  } else if (fromModule == "er") {
    initFormEdit(btoa(Modulehpercode));
  } else if (fromModule == "referral") {
    initFormEdit(params.get("hpercode"));
    let referralLogId = atob(params.get("logid"));
    if (referralLogId) {
      $("#reFromTrigger").val("encdata");
      set_refrom_fhud(referralLogId);
      $("#reFromTrigger").val("");
    }
  } else {
    setCookie("fromModule", "er", "1");
    $("#PatSearch").modal("show");
  }

  // triage
  if (params.has("triage") && params.get("triage")) {
    $("#triage_id").val(params.get("triage"));
  }

  $("#ImageSave").prop("src", "../assets/img/avatars/none.png");
  EmergencyWizard();
  $("#saveIdenEmer").val("insert");
}

$("#dateRegistration").change(function () {
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

/*function init_refrom_hfhudcode() {
  $("#refrom_hfhudcode").select2({
    allowClear: true,
    placeholder: "Select Referring Facility",
    theme: "coreui",
    ajax: {
      url: baseURL + "Referral/getReferralHfhud/",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          referralHfhud: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.hfhudcode,
            text: item.hfhudname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}*/

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
      $("#referralLogId").val(data.LogID);
      $("#refromFhudCode").val(data.hfhudcode);
      $("#referringFacility").text(data.hfhudname);
      $("#reFromReas").val(data.referralReason);
      $("#referralReason").text($("#reFromReas option:selected").text());
      $("#reFromOtherReas").val(data.otherReasons);
      $("#reFromDateTime").val(setTimeLocale(data.referralDateTime));
      $("#referralDateTime").text(
        new Date($("#reFromDateTime").val()).toLocaleString()
      );
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
