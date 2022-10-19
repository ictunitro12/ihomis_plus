var table = $("#OPDTable");

function OutpatientWizard() {
  var formType = $("#saveIdenOPD").val();
  _initWizard();
  _eventWizard(formType);
  _validateWizard();
}

function _initWizard() {
  var btnFinish = $(
    '<button type="button" name ="btnDone" id="btnDone"></button>'
  )
    .text("Done")
    .addClass("btn btn-info btn-ladda")
    .on("click", function () {
      $("#PatientOutpatientSummary").modal("show");
      PatientSummary();
    });

  var btnCancel = $("<button></button>")
    .text("Reset")
    .addClass("btn btn-danger btn-ladda")
    .on("click", function () {
      //$('#smartwizard').smartWizard("reset");
      location.reload();
    });

  $("#smartwizard").smartWizard({
    selected: 0,
    theme: "circles",
    transitionEffect: "fade",
    showStepURLhash: false,
    transitionSpeed: "1500",
    toolbarSettings: {
      toolbarPosition: "top",
      toolbarExtraButtons: [btnFinish, btnCancel],
    },
  });
}

function _eventWizard(type) {
  $("#smartwizard").on(
    "showStep",
    function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
      if (stepPosition === "first") {
        $("#btnDone").prop("disabled", true);
        $("#prev-btn").addClass("disabled");
        $("#prev-btn").addClass("disabled");
      } else if (stepPosition === "final") {
        $("#next-btn").addClass("disabled");
        $("#btnDone").prop("disabled", false);
      } else {
        $("#prev-btn").removeClass("disabled");
        $("#next-btn").removeClass("disabled");
        $("#btnDone").prop("disabled", true);
      }
      switch (stepNumber) {
        case 1:
          if (type == "insert") {
            var form = $("#form-step-2");
            SelTypeofService(form);
            selDoctor(form);
            $("#dateVisit").val(getTimeLocale());
            setEncounterAge($("#info_dob").val(), getTimeLocale());
          } else if (type == "update") {
            var form = $("#form-step-2");
            SelTypeofService(form);
            selDoctor(form);
            editOutpatient(enccode);
          }

          break;
        case 2:
          if (type == "insert") {
            $("#dateIncident").val(getTimeLocale());
            $("#vsDateTime").val(getTimeLocale());
            $("#hwDateLog").val(getTimeLocale());
            $("#vsBMI").load(baseURL + "PatientRecords/view_vsbmi");
          } else if (type == "update") {
            $("#vsBMIMessage").text(
              "*Edit information on patient record module!"
            ); //addClass('text-danger').
            $("#vsBMI").load(
              baseURL + "PatientRecords/view_vsbmi",
              function () {
                $("#vsDateTime").prop("readonly", true);
                $("#vsBp").prop("readonly", true);
                $("#vsTemp").prop("readonly", true);
                $("#vsPulse").prop("readonly", true);
                $("#vsRr").prop("readonly", true);
                $("#o2sats").prop("readonly", true);
                $("#vsOral").prop("readonly", true);
                $("#vsNC").prop("readonly", true);
                $("#vsIntake").prop("readonly", true);
                $("#vsMiscel").prop("readonly", true);
                $("#vsBlood").prop("readonly", true);
                $("#hwDateLog").prop("readonly", true);
                $("#hwHeight").prop("readonly", true);
                $("#hwWeight").prop("readonly", true);
              }
            );
            getVitalSign($.session.get("enccode"));
            getBMI($.session.get("enccode"));
          }
      }
    }
  );
}

function _validateWizard() {
  $("#smartwizard").on(
    "leaveStep",
    function (e, anchorObject, stepNumber, stepDirection) {
      switch (stepNumber) {
        case 1:
          if ($("#form-step-2").valid()) {
            return true;
          } else {
            return false;
          }
          break;
        case 2:
          if ($("#form-step-3").valid()) {
            return true;
          } else {
            return false;
          }
          break;
      }
    }
  );
}

function PatientSummary() {
  var base64image = document.getElementById("patientPhoto").src;
  var patkey = $("#info_hpatkey").val();
  var bdate = new Date();
  var dateVisit = new Date($("#dateVisit").val());
  var dateDisch = new Date($("#dateDischarge").val());
  var dateInci = new Date($("#dateIncident").val());

  var SOP1 =
    $("#sop1 option:selected").val() == ""
      ? "N/A"
      : $("#sop1 option:selected").text();
  $("#patientPhoto").prop("src", base64image);
  $("#OPDHpercode").text($("#info_hpercode").val());
  $("#OPDPatName").text($("#info_fullname").val());
  //$('#OPDAge').text("Year:"+" "+$('#info_year').val()+" / "+"Month/s:"+" "+$('#info_month').val()+" / "+"Day/s:"+" "+$('#info_day').val());
  $("#OPDAge").text(
    "Year:" +
      " " +
      $("#patage").val() +
      " / " +
      "Month/s:" +
      "  " +
      $("#patagemo").val() +
      " / " +
      "Day/s:" +
      "  " +
      $("#patagedy").val() +
      " / " +
      "Hour/s:" +
      "  " +
      $("#patagehr").val()
  );
  $("#OPDSex").text(sex($("#info_sex").val()));
  $("#OPDDob").text(formatDate($("#info_dob").val()));
  $("#OPDCivilStat").text(civilstatus($("#info_cs").val()));
  $("#OPDdatevisit").text(formatDatetime(dateVisit));

  $("#OPDTypeCon").text($("#tosType option:selected").text());
  $("#OPDdatedisch").text(
    dateDisch == "Invalid Date" ? " " : formatDatetime(dateDisch)
  );

  $("#OPDTos").text($("#selTos option:selected").text());
  $("#OPDPhy").text($("#CONSU option:selected").text());
  $("#OPDincdate").text(
    dateInci == "Invalid Date" ? " " : formatDatetime(dateInci)
  );
  $("#OPDincplace").text($("#placeIncident").val());
  $("#OPDPaySource").text(SOP1);

  $("#chpercode").val($("#info_hpercode").val());
  $("#cpatage").val($("#patage").val());
  $("#cpatmont").val($("#patagemo").val());
  $("#cpatday").val($("#patagedy").val());
  $("#cpathr").val($("#patagehr").val());

  $("#copddatevisit").val($("#dateVisit").val());
  $("#copdtimevisit").val($("#timeVisit").val());
  $("#copdTos").val($("#tosType option:selected").val());
  $("#copddatedisch").val($("#dateDischarge").val());
  $("#copdtimedisch").val($("#timeDischarge").val());

  $("#copddateinc").val(formatDate($("#dateIncident").val()));
  $("#copdtimeinc").val($("#timeIncident").val());
  $("#copdplaceinc").val($("#placeIncident").val());

  $("#creasAdmit").val(document.getElementById("reasAdmit").value);
  $("#ctscode").val($("#selTos option:selected").val());

  $("#ctypaccom").val($("#typaccom option:selected").val());
  $("#cdisp").val($("#selDisp option:selected").val());

  $("#cvsDateTime").val($("#vsDateTime").val());
  $("#cvsBp").val($("#vsBp").val());
  $("#cvsTemp").val($("#vsTemp").val());
  $("#cvsPulse").val($("#vsPulse").val());
  $("#cvsRr").val($("#vsRr").val());
  $("#cvsO2sats").val($("#o2sats").val());

  $("#cvsOral").val($("#vsOral").val());
  $("#cvsNC").val($("#vsNC").val());
  $("#cvsBlood").val($("#vsBlood").val());
  $("#cvsIntake").val($("#vsIntake").val());
  $("#cvsMiscel").val($("#vsMiscel").val());

  $("#chwDateLog").val($("#hwDateLog").val());
  $("#chwHeight").val($("#hwHeight").val());
  $("#chwWeight").val($("#hwWeight").val());
  $("#chwBMI").val($("#hwBMI").val());
  $("#cbmicat").val($("#bmicat").val());

  $("#cdocopd").val($("#CONSU option:selected").val());
  $("#csop1").val($("#sop1 option:selected").val());
  $("#csop2").val($("#sop2 option:selected").val());
  $("#csop3").val($("#sop3 option:selected").val());

  $("#ctbind").val($("#tbind option:selected").val());
  var formType = $("#saveIdenOPD").val();
  if (formType == "insert") {
    generateenccode(patkey);
    generatecasenum();
    generatepataccount();
  }
}

function forAdm() {
  var type = document.getElementById("selDisp").value;
  if (type == "ADMIT") {
    $("#reasAdmit").prop("disabled", false);
  } else {
    $("#reasAdmit").prop("disabled", true);
    $("#reasAdmit").val("");
  }
}

function PatientRecord(enccode) {
  var obj;
  $.ajax({
    type: "POST",
    url: "Outpatient/OutpatientInformation/" + enccode,
    data: "JSON",
    async: false,
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      alert("Error: Fetching Patient Information!");
    },
  });
  return obj;
}

function setEncounterAge(dateofbirth, encounterdate) {
  var thisDate = encounterdate;
  var bdate = dateofbirth;
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
}

function getVitalSign(enccode) {
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/getMinVitalSign",
    dataType: "JSON",
    data: { enccode: enccode },
    success: function (data, status) {
      $("#vsDateTime").prop("readonly", true);
      $("#vsDateTime").val(data.datelog);
      $("#vsBp").val(data.vsbp);
      $("#vsTemp").val(data.vstemp);
      $("#vsPulse").val(data.vspulse);
      $("#vsRr").val(data.vsresp);
      $("#o2sats").val(data.o2sats);
    },
    error: function (data, status) {
      return;
    },
  });
}

function getBMI(enccode) {
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/getMinBMI",
    dataType: "JSON",
    data: { enccode: enccode },
    success: function (data, status) {
      $("#hwDateLog").prop("readonly", true);
      $("#hwDateLog").val(data.othrdte);
      $("#hwHeight").val(data.vsheight);
      $("#hwWeight").val(data.vsweight);
      calculateBMI();
    },
    error: function (data, status) {
      return;
    },
  });
}

function init_refrom_hfhudcode() {
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
}

$("#refrom_hfhudcode").change(function () {
  if (!$(this).val()) {
    $("#referralLogId").val("");
    $("#refromFhudCode").val("");
    $("#referringFacility").text("");
    return;
  }
  const info_lname = $("#info_lname").val();
  const info_fname = $("#info_fname").val();
  const info_mname = $("#info_mname").val();
  const info_dob = $("#info_dob").val();
  const info_sex = $("#info_sex").val();
  const hfhudcode = $(this).val();
  const patReferralQuery = {
    info_lname,
    info_fname,
    info_mname,
    info_dob,
    info_sex,
    hfhudcode,
  };
  $.ajax({
    type: "POST",
    url: baseURL + "Referral/validateReferralHfhud",
    dataType: "JSON",
    data: patReferralQuery,
    async: false,
    success: function (data, status) {
      const referralData = JSON.parse(data.data);
      $("#referralLogId").val(referralData.LogID);
      $("#refromFhudCode").val(referralData.hfhudcode);
      $("#referringFacility").text(referralData.hfhudname);
      $("#reFromReas").val(referralData.referralReason);
      $("#referralReason").text($("#reFromReas option:selected").text());
      $("#reFromOtherReas").val(referralData.otherReasons);
      $("#referralOtherReason").text($("#reFromOtherReas").val());
      $("#reFromDateTime").val(setTimeLocale(referralData.referralDateTime));
      $("#referralDateTime").text(
        new Date($("#reFromDateTime").val()).toLocaleString()
      );
    },
    error: function (data, response) {
      $("#referralLogId").val("");
      $("#refromFhudCode").val("");
      $("#referringFacility").text("");
      $("#reFromReas").val("");
      $("#referralReason").text("");
      $("#reFromOtherReas").val("");
      $("#referralOtherReason").text("");
      $("#reFromDateTime").val("");
      $("#referralDateTime").text("");
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});
