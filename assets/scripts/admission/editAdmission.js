$(function () {
  var enccode = atob($("#enc").val());
  init_refrom_hfhudcode();
  initEdit(enccode);
});

function initEdit(enccode) {
  $("#saveIdenAdm").val("update");
  uppercase();
  AdmissionWizard();
  var hpercode = enccode.substr(7, 15);
  $.session.set("enccode", enccode);
  initFormEdit(btoa(hpercode));
}

function setDoctor(param, type) {
  var data = {};
  data["doctype"] = param[0];
  data["enccode"] = param[1];
  data["licno"] = param[2];
  var selDoc = $("#" + type);
  $.ajax({
    type: "POST",
    data: data,
    url: baseURL + "Admission/setDoctor",
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

function setWard(wardcode) {
  var selWar = $("#selWar");
  $("#selWar-element").prop("readonly", true);
  $.ajax({
    type: "POST",
    url: baseURL + "/Admission/setWard/" + wardcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["wardname"], obj["wardcode"], true, true);
    selWar.append(option).trigger("change");
    selWar.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setRoom(rmcode) {
  var selRoom = $("#selRoom");
  selRoom.prop("readonly", true);
  $.ajax({
    url: baseURL + "/Admission/setRoom/" + rmcode,
    type: "POST",
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["rmname"], obj["rmintkey"], true, true);
    selRoom.append(option).trigger("change");
    selRoom.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setBed(bdCode) {
  var selBed = $("#selBed");
  selBed.prop("readonly", true);
  $.ajax({
    type: "POST",
    url: baseURL + "/Admission/setBed/" + bdCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["bdname"], obj["bdintkey"], true, true);
    selBed.append(option).trigger("change");
    selBed.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

$("#dateaccom").change(function () {
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
