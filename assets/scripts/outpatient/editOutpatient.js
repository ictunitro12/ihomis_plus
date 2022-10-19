function initEdit(enccode) {
  $("#saveIdenOPD").val("update");
  uppercase();
  var hpercode = enccode.substr(7, 15);
  OutpatientWizard();
  initFormEdit(btoa(hpercode));

  Contact(btoa(hpercode));
  Occupation(btoa(hpercode));
  init_refrom_hfhudcode();
}

function editOutpatient(enccode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  $.ajax({
    type: "POST",
    url: baseURL + "OutPatient/Information/" + enctr,
  }).then(function (data) {
    var raw = $.parseJSON(data);
    var log = raw["outpatient"];
    var enct = raw["enctr"];
    var doctor = raw["doctor"];
    var ecase = raw["ecase"];
    var referralFromData = raw["referralfrom"];
    //var referralFromData = $.parseJSON(referralFrom);

    $("#dateVisit").val(setTimeLocale(log["opddate"]));

    if (log["patage"] > 0) {
      $("#patage").val(parseInt(log["patage"]));
    } else {
      $("#patage").val("");
    }

    if (log["patagemo"] > 0) {
      $("#patagemo").val(parseInt(log["patagemo"]));
    } else {
      $("#patagemo").val("");
    }

    if (log["patagedy"] > 0) {
      $("#patagedy").val(parseInt(log["patagedy"]));
    } else {
      $("#patagedy").val("");
    }

    if (log["patage"] == 0 && log["patagemo"] == 0 && log["patagedy"] == 0) {
      $("#patagehr").prop("readonly", false);
    } else {
      $("#patagehr").val(patagehr);
      $("#patagehr").prop("readonly", true);
    }

    var patagehr = parseInt(log["patagehr"]);
    if (patagehr > 0) {
      $("#patagehr").val(patagehr);
    }

    var disch = log["opddtedis"];
    var datedisch =
      disch == "1970-01-01 00:00:00" ||
      disch == "1970-01-01 08:00:00" ||
      disch == null
        ? "0000-00-00 00:00:00"
        : setTimeLocale(disch);
    $("#dateDischarge").val(datedisch);

    setTos(log["tscode"]);
    setDoctor(enctr);
    $("#tbind option[value='" + log["itisind"] + "']").prop("selected", true);
    $("#enccode").val(enccode);
    $("#casenum").val(log["casenum"]);
    var newold = log["newold"] === "" ? "N" : log["newold"];
    $("#tosType option[value='" + newold + "']").prop("selected", true);
    $("#typaccom option[value='" + log["tacode"] + "']").prop("selected", true);
    $("#selDisp option[value='" + log["opddisp"] + "']").prop("selected", true);

    forAdm();
    $("#sop1 option[value='" + enct["sopcode1"] + "']").prop("selected", true);
    $("#sop2 option[value='" + enct["sopcode2"] + "']").prop("selected", true);
    $("#sop3 option[value='" + enct["sopcode3"] + "']").prop("selected", true);
    $("#dateIncident").val(setTimeLocale(ecase["injdte"]));
    $("#placeIncident").val(ecase["injrem"]);

    if (referralFromData) {
      $("#referralLogId").val(referralFromData.rfcontrol);
      $("#refromFhudCode").val(referralFromData.hfhudcode);
      $("#referringFacility").text(referralFromData.hfhudname);
      const option = new Option(
        referralFromData.hfhudname,
        referralFromData.hfhudcode,
        true,
        true
      );
      $("#refrom_hfhudcode").append(option).trigger("change");
      $("#refrom_hfhudcode").trigger({
        theme: "coreui",
        type: "select2:select",
        params: {
          data: data,
        },
      });
    }
  });
}

function setDoctor(enccode) {
  var form = $("#form-step-2");
  selDoctor(form);
  var selDoc = $("#CONSU");
  $.ajax({
    type: "POST",
    url: baseURL + "Outpatient/setDoctor/" + enccode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["name"], obj["licno"], true, true);
    selDoc.append(option).trigger("change");
    selDoc.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setTos(tscode) {
  var selTos = $("#selTos");
  $.ajax({
    type: "POST",
    url: baseURL + "/Outpatient/setTos/" + tscode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["tsdesc"], obj["tscode"], true, true);
    selTos.append(option).trigger("change");
    selTos.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}
