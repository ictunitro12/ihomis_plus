var Module = $("#module").val();
var table = $("#EmergencyTable");

$(document).ready(function () {
  $("#formERDischarge").validate({
    rules: {
      selDisp: "required",
      selCond: "required",
      dateDischarge: {
        required: true,
        step: false,
      },
      reasAdmit: {
        required: {
          depends: function (element) {
            if ($("#selDisp").val() == "ADMIT") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
    },
    messages: {
      selDisp: "Disposition is required!",
      selCond: "Condition is required!",
      dateDischarge: "Date is required!",
      reasAdmit: "Reason for Admission is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });

  $("#EmergencyTable").off();

  table.on("click", ".ModalPatientInformation", function () {
    var Obj = new Object();
    Obj.type = "POST";
    Obj.url =
      baseURL +
      "Emergency/EmergencyInformation/" +
      URLencode(atob($(this).data("enccode")));
    Obj.data = "JSON";
    var row = Information(Obj);

    $("#ModalPatientInformation").modal("show");
    var fullname = row["name"];
    $("#casenum").text(row["casenum"]);
    $("#accountno").text(row["paacctno"]);
    $("#enccodeCSS").val(row["enccode"]);
    $("#hpercode").text(row["hpercode"]);
    $("#patname").text(fullname);
    $("#patage").text(row["age"]);
    $("#patsex").text(row["patsex"]);
    $("#eRcase").text(row["ercase"]);
    $("#patdiag").text(row["ertxt"]);
    $("#enccodeConsent").val(row["enccode"]);
    document.getElementById("patnamess").innerHTML = fullname;
    document.getElementById("hpercodess").innerHTML = row["hpercode"];
    loadImage(row["hpercode"]);
    checkboxsame(fullname);
  });

  $("#EmergencyTable").on("click", "#btnReferral", function () {
    const enccode = atob($(this).data("enccode"));
    const hpercode = atob($(this).data("percode"));
    $("#reftoEnccode").val(enccode);
    $("#reftoHpercode").val(hpercode);
    $("#reftoformIden").val("insert");
    $("#refertoModal").modal("show");
  });

  $("#EmergencyTable").on("click", ".Discharge", function () {
    $("#formERDischarge").trigger("reset");
    $("#ModalERDischarge").modal({ backdrop: "static" });
    $("#dischargeEnccode").val($(this).data("enccode"));
    var rowData = $(this).closest("tr").find("td");
    var patientName = rowData[1].innerText;
    $("#dischargePatient").html(patientName);
    var erDate = rowData[4].innerText;
    var erTime = rowData[5].innerText;
    $("#patientDischargeDateTime").html(erDate + " " + erTime);
    $("#ModalERDischarge").modal("show");
  });
});

//Patient Information
$("#EmergencyTable")
  .unbind()
  .on("click", "#btnReferralReturnSlip", function (e) {
    e.preventDefault();
    const referralEnccode = $(this).data("enccode");
    $("#referFromReturnSlipModal").modal("show");
    /*$("#referralReceivedTable").on("click", "#btnPrintRefFrom", function () {
      const refID = $(this).data("refid");
      $("#modalReferralFromPDF").modal("show");
      var src = baseURL + "Referral/referralFromPDF/" + refID;
      $("#referralFrom_PDF").attr("src", src);
    });*/
  });

function initEmergency() {
  EmergencyLog();
}

function EmergencyWizard(param = null) {
  var formType = $("#saveIdenEmer").val();
  _initWizard();
  _eventWizard(formType);
  _validateWizard();
}

function EmergencyLog() {
  var data = new Object();
  data.id = "EmergencyTable";
  data.link = baseURL + "Emergency/ErPatientList";
  data.type = "POST";
  data.coldef = [
    {
      targets: 0,
      visible: false,
      orderable: false,
    },
    {
      targets: [3, 4],
      searchable: false,
      orderable: false,
      render: function (data, type, row) {
        switch (data) {
          case "M":
            return '<i class="fa fa-male"></i>&nbsp MALE';
            break;
          case "F":
            return '<i class="fa fa-female"></i>&nbsp FEMALE';
            break;
          case "ADPAY":
            return "&nbsp PAY";
            break;
          case "SERVI":
            return "&nbsp SERVICE";
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      targets: [1, 2, 5, 6],
      orderable: false,
    },
  ];

  loadTable(data);
}

function ErPatientInformation() {
  table.on("click", ".ModalPatientInformation", function () {
    var enccode = $(this).data("enccode");
    var row;
    var Obj = new Object();
    var id = encodeURIComponent(encodeURIComponent(enccode));
    Obj.type = "POST";
    Obj.url = "Emergency/ErPatientInformation/" + id;
    Obj.data = "JSON";
    row = Information(Obj);
    if (row) {
      $("#ModalPatientInformation").modal("show");
      var fullname = row["patfirst"].concat(
        " ",
        row["patmiddle"],
        " ",
        row["patlast"]
      );
      var age = row["patage"].concat(
        " ",
        "year/s",
        " ",
        row["patagemo"],
        "month/s",
        " ",
        row["patagedy"],
        "day/s"
      );
      $("#casenum").text(row["casenum"]);
      $("#accountno").text(row["paacctno"]);
      $("#hpercode").text(row["hpercode"]);
      $("#patname").text(fullname);
      $("#patage").text(age);
      $("#patwrb").text();
      $("#patts").text(row["tsdesc"]);
      $("#patdiag").text(row["ertxt"]);
      if (row["picname"] == null) {
        $("#PatientPicInfo").prop("src", "assets/img/avatars/none.png");
      } else {
        $("#PatientPicInfo").prop("src", baseURL + row["picname"]);
      }
    } else {
      toastr.error(
        '<i class="fa fa-exclamation"></i>&nbsp' +
          "Error : Fetching inpatient data!"
      );
    }
  });
}

function _initWizard() {
  var btnFinish = $(
    '<button type="button" name ="btnDone" id="btnDone"></button>'
  )
    .text("Done")
    .addClass("btn btn-info btn-ladda")
    .on("click", function () {
      $("#PatientEmergencySummary").modal({ backdrop: "static", show: true });
      PatientSummary();
    });

  var btnCancel = $("<button></button>")
    .text("Reset")
    .addClass("btn btn-danger btn-ladda")
    .on("click", function () {
      location.reload();
    });

  $("#emergencyWizard").smartWizard({
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
  $("#emergencyWizard").on(
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
      if (stepNumber === 1) {
        var form = $("#form-step-2");
        SelTypeofService(form);
        selDoctor(form);
        if ($("#saveIdenEmer").val() == "insert") {
          $("#dateRegistration").val(getTimeLocale());
          setEncounterAge($("#info_dob").val(), getTimeLocale());
        }

        var tscode = getCookie("tscode");

        if (tscode != null) {
          setTypeService(tscode);
        }
      }
    }
  );
}

function setTypeService(tscode) {
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

function _validateWizard() {
  $("#emergencyWizard").on(
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
      }
    }
  );
}

function PatientSummary() {
  var base64image = document.getElementById("patientPhoto").src;
  var patkey = $("#info_hpatkey").val();
  var emDob = new Date($("#info_dob").val());
  var dateReg = new Date($("#dateRegistration").val());
  var dateInci = new Date($("#dateIncident").val());
  var SOP1 =
    $("#sop1 option:selected").val() == ""
      ? "N/A"
      : $("#sop1 option:selected").text();
  $("#patientPhoto").prop("src", base64image);
  $("#emHpercode").text($("#info_hpercode").val());
  $("#emPatName").text($("#info_fullname").val());
  //$('#emAge').text("Year:"+" "+$('#info_year').val()+"/"+"Month/s:"+" "+$('#info_month').val()+"/"+"Day/s:"+" "+$('#info_day').val());
  $("#emAge").text(
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
  $("#emSex").text(sex($("#info_sex").val()));
  $("#emDob").text(formatDate(emDob));
  $("#ErPhy").text($("#selDoc_doc option:selected").text());
  $("#chpercode").val($("#info_hpercode").val());
  $("#cpatage").val($("#patage").val());
  $("#cpatmont").val($("#patagemo").val());
  $("#cpatday").val($("#patagedy").val());
  $("#cpathr").val($("#patagehr").val());
  $("#emCivilStat").text(civilstatus($("#info_cs").val()));
  $("#emelbro").val($("#selBro option:selected").val());
  $("#emelnotif").val($("#selNotif option:selected").val());
  $("#emdatereg").val($("#dateRegistration").val());
  $("#emtos").val($("#selTos option:selected").val());
  $("#emcondarr").val($("#selCondArrival option:selected").val());
  $("#emDoc").val($("#selDoc_doc option:selected").val());
  $("#emremarks").val($("#remarks").val());
  $("#erTos").text($("#selTos option:selected").text());
  $("#erregDate").text(formatDatetime(dateReg));

  $("#erBro").text($("#selBro option:selected").val());
  $("#erdateDisch").text($("#dateDischarge").val());
  $("#ertimeDisch").text($("#timeDischarge").val());

  $("#emCasetype").val($("#selCase option:selected").val());

  $("#erremarks").text($("#remarks").val());
  $("#erinjDate").val($("#dateIncident").val());
  $("#erinjPlace").val($("#placeIncident").val());
  $("#erincdate").text(
    dateInci == "Invalid Date" ? " " : formatDatetime(dateInci)
  );
  $("#erincplace").text($("#placeIncident").val());
  $("#erdisp").text($("#selDisp option:selected").text());
  $("#ERPaySource").text(SOP1);
  $("#csop1").val($("#sop1 option:selected").val());
  $("#csop2").val($("#sop2 option:selected").val());
  $("#csop3").val($("#sop3 option:selected").val());

  var formType = $("#saveIdenEmer").val();
  if (formType == "insert") {
    generateenccode(patkey);
    generatecasenum();
    generatepataccount();
  }

  var brought = $("#selBro option:selected").val();

  if (brought == "POLIC") {
    $("#erBro").text("Police");
  } else if (brought == "SELF") {
    $("#erBro").text("Self");
  } else if (brought == "RELAT") {
    $("#erBro").text("Relative");
  } else if (brought == "FAMEM") {
    $("#erBro").text("Family Member");
  } else if (brought == "AMBUL") {
    $("#erBro").text("Ambulance");
  } else if (brought == "NEIGH") {
    $("#erBro").text("Neighbor");
  } else if (brought == "UNKNO") {
    $("#erBro").text("Unknown");
  } else if (brought == "FREND") {
    $("#erBro").text("Friend");
  } else if (brought == "OTHRS") {
    $("#erBro").text("Others");
  } else {
    $("#erBro").text("");
  }
  var ConditionOA = $("#selCondArrival option:selected").val();
  if (ConditionOA == "GOOD") {
    $("#erCondarr").text("Good");
  } else if (ConditionOA == "FAIR") {
    $("#erCondarr").text("Fair");
  } else if (ConditionOA == "POOR") {
    $("#erCondarr").text("Poor");
  } else if (ConditionOA == "SHOCK") {
    $("#erCondarr").text("Shock");
  } else if (ConditionOA == "HEMOR") {
    $("#erCondarr").text("Hemorrhagic");
  } else if (ConditionOA == "DOA") {
    $("#erCondarr").text("Dead On Arrival");
  } else if (ConditionOA == "COMATOSE") {
    $("#erCondarr").text("Comatose");
  } else {
    $("#erCondarr").text("");
  }

  var ERcased = $("#selCase option:selected").val();
  if (ERcased == "Y") {
    $("#ersumCased").text("ER");
  } else if (ERcased == "N") {
    $("#ersumCased").text("Non ER");
  } else {
    $("#ersumCased").text("");
  }
}

/*
$('#btnCSS').on('click', function (){
	$('#ModalERRecord').modal('show');
	var enctr=encodeURIComponent(encodeURIComponent(($('#enccodeCSS').val())));
	var src =baseURL+'EmergencyProfile/ERRecord/'+enctr;
	var x = document.getElementById("ERRecordPDF").src = src;
	$("#ERRecordPDF").attr("src", src);
});
*/

$("#btnCSS").on("click", function () {
  $("#ModalSignatures").modal({ backdrop: "static" }).draggable({});
  $("#ModalPatientInformation").modal("hide");
  selDoctor($("#formAddSignatories"));
  SelNurse();
  var enctr = encodeURIComponent(
    encodeURIComponent(btoa($("#enccodeCSS").val()))
  );
  ERSignatories(enctr);
});

function ERSignatories(enctr) {
  $("#formAddSignatories").validate({
    submitHandler: function (form) {
      var nurse_emp = $("#selNurse").val();
      var doctor_emp = $("#sel_doc").val();
      var enctr = $("#enccodeCSS").val();

      var enccode = encodeURIComponent(
        encodeURIComponent($("#enccodeCSS").val())
      );
      var nurse = encodeURIComponent(encodeURIComponent($("#selNurse").val()));
      var doctor = encodeURIComponent(encodeURIComponent($("#sel_doc").val()));

      if (nurse_emp == null || nurse_emp == "") {
        nurse_emp = "";
      } else {
        nurse_emp = $("#nurse_emp").val();
      }
      if (doctor_emp == null || doctor_emp == "") {
        doctor_emp = "";
      } else {
        doctor_emp = $("#sel_doc").val();
      }
      var src =
        baseURL +
        "EmergencyProfile/ERRecord/" +
        enccode +
        "/" +
        nurse +
        "/" +
        doctor;
      var x = (document.getElementById("ERRecordPDF").src = src);
      $("#ERRecordPDF").attr("src", src);
      $("#ModalERRecord").modal("show");
      return false;
    },
    rules: {},
    errorElement: "span",

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
}

function SelNurse() {
  $("#selNurse").select2({
    theme: "coreui",
    placeholder: "Nurse",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/Emergency/searchNurse",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchNurse: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.employeeid,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selNurse").on("change", function () {
    var data = $("#selNurse option:selected", this);
    var selNurse = $("#selNurse").val(this.value);
  });
}

function inputCert(enctrs) {
  $("#formAddCert").validate({
    submitHandler: function (form) {
      var patrep = $("#patrep").val();
      var rephealthfac = $("#selEmployees").val();
      var patcontact = $("#patnumber").val();
      var patreps = patrep.toUpperCase();
      if (rephealthfac == null || rephealthfac == "") {
        rephealthfac = " ";
      } else {
        rephealthfac = $("#selEmployees").val();
      }
      if (patcontact == null || patcontact == "") {
        patcontact = " ";
      } else {
        patcontact = $("#patnumber").val();
      }
      var src =
        baseURL +
        "ConsentForm/Consent_form_pdf/" +
        enctrs +
        "/" +
        encodeURIComponent(encodeURIComponent(patreps)) +
        "/" +
        encodeURIComponent(encodeURIComponent(rephealthfac)) +
        "/" +
        encodeURIComponent(encodeURIComponent(patcontact));
      var x = (document.getElementById("Consent_pdf").src = src);
      $("#Consent_pdf").attr("src", src);
      $("#ModalConsent").modal("show");
      return false;
    },
    rules: {
      selEmployees: "required",
      patrep: "required",
    },
    errorElement: "span",

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
}

$("#btnConsent").on("click", function () {
  $("#Consentinput").modal({ backdrop: "static" });
  $("#ModalPatientInformation").modal("hide");
  SelEmployees();
  var enctrs = encodeURIComponent(
    encodeURIComponent(btoa($("#enccodeConsent").val()))
  );
  inputCert(enctrs);
});

function checkboxsame(fullname) {
  var representative = fullname.split(/[ ,]+/).join(" ");
  $("#patrep").val(representative);
  $("#patrepsame").click(function () {
    if ($(this).is(":checked")) {
      $("#patrep").val("");
      $("#patrep").removeAttr("disabled");
    } else {
      $("#patrep").val(representative);
      $("#patrep").attr("disabled", true);
    }
  });
}
$("#ModalConsent").on("hidden.coreui.modal", function () {
  $("#Consent_pdf").removeAttr("src").attr("src", "");
});

$("#closereload").on("click", function () {
  $("#Consentinput").modal("hide");
  location.reload();
});

$("#ModalConsent").on("hidden.coreui.modal", function () {
  $("#Consent_pdf").removeAttr("src").attr("src", "");
});

$("#dischargeERBtn")
  .unbind("click")
  .bind("click", function (e) {
    if ($("#formERDischarge").valid() == false) {
      return;
    }
    let formERDischargeForm = document.getElementById("formERDischarge");
    var formData = new FormData(formERDischargeForm);
    $.ajax({
      url: baseURL + "Emergency/discharge",
      type: "POST",
      data: formData,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Success");
        $("#ModalERDischarge").modal("hide");
        EmergencyLog();
      },
      error: function (data, response) {
        toastr.error(data.reponseJSON.message, "Error");
      },
    });
  });

$("#selDisp").change(function () {
  if ($(this).val() == "ADMIT") {
    $("#reasAdmit").prop("disabled", false);
  } else {
    $("#reasAdmit").val("");
    $("#reasAdmit").prop("disabled", true);
  }
});

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

$("a[name='btnRegister']").on("click", function () {
  setCookie("fromModule", "er", "1");
});

$("a[name='btnfromLog']").on("click", function () {
  removeCookie("fromModule");
});

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
