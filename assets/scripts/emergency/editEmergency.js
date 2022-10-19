function initEdit(enccode) {
  $("#saveIdenEmer").val("update");
  uppercase();
  var hpercode = enccode.substr(7, 15);
  EmergencyWizard(enccode);
  initFormEdit(btoa(hpercode));
  editEmergency(enccode);
  Contact(btoa(hpercode));
  Occupation(btoa(hpercode));
  init_refrom_hfhudcode();
}

function editEmergency(enccode) {
  var enctr = URLencode(enccode);

  $.ajax({
    type: "POST",
    url: baseURL + "Emergency/Information/" + enctr,
  }).then(function (data) {
    var raw = $.parseJSON(data);

    var erlog = raw["er"];
    var doctor = raw["doctor"];
    var ecase = raw["ecase"];
    var encotr = raw["enctr"];
    var resact = raw["resact"];
    var referralFromData = raw["referralfrom"];

    var erData = $.parseJSON(erlog);
    var docData = $.parseJSON(doctor);
    var encData = $.parseJSON(encotr);
    var injury = $.parseJSON(ecase);
    var resData = $.parseJSON(resact);

    $("#enccode").val(encData[0]["enccode"]);
    $("#casenum").val(erData[0]["casenum"]);
    $("#selCondArrival option[value='" + erData[0]["ercond"] + "']").prop(
      "selected",
      true
    );
    $("#dateRegistration").val(setTimeLocale(erData[0]["erdate"]));

    if (erData[0]["patage"] > 0) {
      $("#patage").val(parseInt(erData[0]["patage"]));
    } else {
      $("#patage").val("");
    }

    if (erData[0]["patagemo"] > 0) {
      $("#patagemo").val(parseInt(erData[0]["patagemo"]));
    } else {
      $("#patagemo").val("");
    }

    if (erData[0]["patagedy"] > 0) {
      $("#patagedy").val(parseInt(erData[0]["patagedy"]));
    } else {
      $("#patagedy").val("");
    }

    if (
      erData[0]["patage"] == 0 &&
      erData[0]["patagemo"] == 0 &&
      erData[0]["patagedy"] == 0
    ) {
      $("#patagehr").prop("readonly", false);
    } else {
      $("#patagehr").val(patagehr);
      $("#patagehr").prop("readonly", true);
    }

    var patagehr = parseInt(erData[0]["patagehr"]);
    if (patagehr > 0) {
      $("#patagehr").val(patagehr);
    }

    setTos(erData[0]["tscode"]);
    setDoctor(enctr);
    $("#selBro option[value=" + erData[0]["erbrouby"] + "']").prop(
      "selected",
      true
    );
    $("#selCase option[value=" + erData[0]["ercase"] + "']").prop(
      "selected",
      true
    );
    $("#inffname").val(encData[0]["patinform"]);

    var incident = injury[0]["injdte"];
    var dateinci =
      incident == "1970-01-01 00:00:00" ||
      incident == "1970-01-01 08:00:00" ||
      incident == null
        ? "0000-00-00 00:00:00"
        : setTimeLocale(incident);
    $("#dateIncident").val(dateinci);

    $("#placeIncident").val(injury[0]["injadd"]);
    $("#selNotif option[value='" + erData[0]["ernotify"] + "']").prop(
      "selected",
      true
    );
    $("#remarks").val(erData[0]["ernotes"]);
    $("#tbind option[value='" + erData[0]["itisind"] + "']").prop(
      "selected",
      true
    );

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

    $("#sop1 option[value='" + encData[0]["sopcode1"] + "']").prop(
      "selected",
      true
    );
    $("#sop2 option[value='" + encData[0]["sopcode2"] + "']").prop(
      "selected",
      true
    );
    $("#sop3 option[value='" + encData[0]["sopcode3"] + "']").prop(
      "selected",
      true
    );

    $("#inffname").val(encData[0]["patinform"]);
    $("#infaddress").val(encData[0]["patadd"]);
    $("#infcontact").val(encData[0]["patinftel"]);
    $("#infrelation option[value='" + encData[0]["relacode"] + "']").prop(
      "selected",
      true
    );

    $("#rfname").val(resData[0]["raname"]);
    $("#rcontact").val(resData[0]["raaddr"]);
    $("#raddress").val(resData[0]["rateln"]);
    $("#rrelation option[value='" + resData[0]["relacode"] + "']").prop(
      "selected",
      true
    );

    $("#sop2 option[value='" + encData[0]["sopcode2"] + "']").prop(
      "selected",
      true
    );
    $("#sop3 option[value='" + encData[0]["sopcode3"] + "']").prop(
      "selected",
      true
    );
  });
}

function setDoctor(enccode) {
  var form = $("#form-step-2");
  selDoctor(form);
  var selDoc = $("#selDoc_doc");
  $.ajax({
    type: "POST",
    url: baseURL + "Emergency/setDoctor/" + enccode,
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
  selTos.prop("readonly", true);
  $.ajax({
    type: "POST",
    url: baseURL + "/Admission/setTos/" + tscode,
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
