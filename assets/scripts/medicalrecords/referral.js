var addReferralType = null;
$("#referral-tab").click(function () {
  const hpercode = $("#hpercode").text();
  $("#generateLogID").click(function () {});

  $("#getPatReferralBtn").click(function () {
    setPatientReferralFrom();
    $("#patientRefFromModal").modal({
      backdrop: "static",
      keyboard: false,
    });
    $("#patientRefFromModal").modal("show");
  });

  $("#fhudFrom").change(function () {});
  setPatientReferrals(hpercode);
});

function setPatientReferrals(hpercode) {
  var data = new Object();
  data.id = "referralsTable";
  data.link = baseURL + "MedicalRecords/getPatientReferrals/" + hpercode;
  data.type = "POST";
  data.search = true;
  data.paging = true;
  data.destroy = true;
  data.info = true;
  data.rowsGroup = false;
  data.columns = [
    {
      data: "encounterdate",
    },
    {
      data: "toecode",
      render: function (data, type, row) {
        switch (data) {
          case "ADM":
            return "Admission";
            break;
          case "ERADM":
            return "Emergerncy Room Department";
            break;
          case "ER":
            return "Emergerncy Room Department";
            break;
          case "OPD":
            return "Out-Patient Department";
            break;
          case "OPDAD":
            return "Out-Patient Department";
            break;
        }
      },
    },
    { data: "type" },
    { data: "hfhudname" },
    { data: "referraltransactioncode" },
    {
      data: "typeofreferral",
      render: function (data, type, row) {
        switch (data) {
          case "DIAGT":
            return "Diagnostic Test";
            break;
          case "TRANS":
            return "Transfer";
            break;
          case "CONSU":
            return "Consultation";
            break;
          case "OTHER":
            return row.referraltypeothers;
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      data: "referraldatetime",
    },
    {
      data: null,
      render: function (data, type, row) {
        var referralToEdit =
          "<a href='javascript:void(0);' class='dropdown-item'  data-enccode='" +
          row.enccode +
          "'  data-logid='" +
          row.referraltransactioncode +
          "'  data-type='" +
          row.type +
          "'  data-typeofreferral='" +
          row.typeofreferral +
          "'  data-referraldatetime='" +
          row.referraldate +
          "' id='btnEditReferral'><i class='fa fa-pencil-square-o text-primary' aria-hidden='true'></i>&nbsp Edit</a>";
        if (row.type == "FROM") {
          referralToEdit = "";
        }
        return (
          "<div class='btn-group btn-sm float-right'>" +
          "<button type='button' class='btn btn-outline-success btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>" +
          "<span class='caret'></span>" +
          "<span class='sr-only'>Toggle Dropdown</span>" +
          "</button>" +
          "<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>" +
          referralToEdit +
          "<a href='javascript:void(0);' class='dropdown-item'  data-enccode='" +
          row.enccode +
          "'  data-type='" +
          row.type +
          "'  data-typeofreferral='" +
          row.typeofreferral +
          "'  data-referraldatetime='" +
          row.referraldate +
          "' id='btnDeleteReferral'><i class='fa fa-trash-o text-danger' aria-hidden='true'></i>&nbsp Delete</a>" +
          "<a href='javascript:void(0);' class='dropdown-item'  data-enccode='" +
          row.enccode +
          "'  data-type='" +
          row.type +
          "'  data-typeofreferral='" +
          row.typeofreferral +
          "'  data-referraldatetime='" +
          row.referraldate +
          "' id='btnBackReferral'><i class='fa fa-undo text-success' aria-hidden='true'></i>&nbsp Back Referral</a>" +
          "</div>" +
          "<button type='button'  id ='btnReferralPDF' data-enccode='" +
          row.enccode +
          "' data-logid='" +
          row.referraltransactioncode +
          "'  data-type='" +
          row.type +
          "'  data-typeofreferral='" +
          row.typeofreferral +
          "'  data-referraldatetime='" +
          row.referraldate +
          "' class='btn btn-outline-success  btn-sm ' ><i class='fa fa-file-text-o' aria-hidden='true'></i></button>" +
          "</div>"
        );
      },
    },
  ];
  Datatable(data);
  $("#referralsTable").off();
  $("#referralsTable").on("click", "#btnDeleteReferral", function () {
    const data = $(this).data();
    $("#deleteReferModal").modal("show");
    $("#deleteReferralEnccode").val(data.enccode);
    $("#deleteReferralDatetime").val(data.referraldatetime);
    $("#deleteTypeOfReferral").val(data.typeofreferral);
    $("#deleteReferralType").val(data.type);
  });

  $("#referralsTable").on("click", "#btnEditReferral", function () {
    const data = $(this).data();
    if (
      data.logid != null &&
      data.logid != "" &&
      data.logid != "null" &&
      data.type == "TO"
    ) {
      toastr.error("Referral already submitted!", "Error");
      return;
    }
    if (data.type == "TO") {
      const enctr = encodeURIComponent(encodeURIComponent(data.enccode));
      const datetime = encodeURIComponent(
        encodeURIComponent(data.referraldatetime)
      );
      const type = encodeURIComponent(encodeURIComponent(data.typeofreferral));
      var POSTURL = baseURL + "Referral/referInfo";
      $.ajax({
        type: "POST",
        url: POSTURL,
        data: { enctr, type, datetime },
        success: function (data) {
          data = data.data;
          $("#reftoEnccode").val(data.enccode);
          $("#reftoHpercode").val($("#hpercode").text());
          $("#reftoformIden").val("update");
          $("#editReferralDatetime").val(data.referdatetime);
          $("#editReferralType").val(data.typeofreferral);
          $("#dateRefto").val(data.referdatetime);
          $("#ReferType").val(data.typeofreferral);
          if (data.othertypeofreferral) {
            $("#ReferOTH").prop("readonly", false);
            $("#ReferOTH").val(data.othertypeofreferral);
          }
          $("#reftoReas").val(data.referralreason);
          $("#RefOtherReas").val(data.otherreasons);
          $("#RefCategory").val(data.referralcategory);
          const refertofhudcode = data.refertofhudcode;
          const hfhudname = data.hfhudname;
          const option = new Option(hfhudname, refertofhudcode, true, true);
          $("#refFacility").append(option).trigger("change");
          $("#refFacility").trigger({
            theme: "coreui",
            type: "select2:select",
            params: {
              data: data,
            },
          });
          $("#patientpan").val(data.patientpan);
          $("#dateRefCall").val(data.datetimecalled);
          $("#RefResp").val(data.response);
          $("#RefReceive").val(data.receivingcontactperson);
          $("#RefDesig").val(data.receivingpersondesignation);
          const referringprovider = data.referringproviderlicno;
          const referringProviderName = data.referringProviderName;
          const option1 = new Option(
            referringProviderName,
            referringprovider,
            true,
            true
          );
          $("#RefFrom_doc").append(option1).trigger("change");
          $("#RefFrom_doc").trigger({
            theme: "coreui",
            type: "select2:select",
            params: {
              data: data,
            },
          });
          const referralprovider = data.referralprovider;
          const referralProviderName = data.referralProviderName;
          if (
            referralprovider != null &&
            referralprovider != "null" &&
            referralprovider != ""
          ) {
            const option2 = new Option(
              referralProviderName,
              referralprovider,
              true,
              true
            );
            $("#RefTo_doc").append(option2).trigger("change");
            $("#RefTo_doc").trigger({
              theme: "coreui",
              type: "select2:select",
              params: {
                data: data,
              },
            });
          }
          $("#RefRemarks").val(data.remarks);
          $("#refertoModal").modal("show");
        },
        error: function (data, xhr, text) {
          toastr.error(data.responseJSON.message, "Error");
        },
      });
    }
  });

  $("#referralsTable").on("click", "#btnBackReferral", function () {
    const data = $(this).data();
    if (data.type == "FROM") {
      var referralenccode = btoa(data.enccode);
      $("#referralEnccode").val(referralenccode);
      $("#modalBackReferralPDF").modal("show");
      var src =
        baseURL + "PatientRecords/BackReferralForm_pdf/" + referralenccode;
      $("#backReferralPDF").attr("src", src);
    }

    if (data.type == "FROM") {
    }
  });

  $("#referralsTable").on("click", "#btnReferralPDF", function () {
    $("#modalReferralPDF").modal("show");
    const data = $(this).data();

    if (data.type == "TO") {
      const enctr = encodeURIComponent(encodeURIComponent(data.enccode));
      const datetime = encodeURIComponent(
        encodeURIComponent(data.referraldatetime)
      );
      const type = encodeURIComponent(encodeURIComponent(data.typeofreferral));
      var src =
        baseURL + "Referral/referralPDF/" + enctr + "/" + type + "/" + datetime;
      $("#referral_PDF").attr("src", src);
    }

    if (data.type == "FROM") {
      const refID = data.logid;
      $("#modalReferralFromPDF").modal("show");
      var src = baseURL + "Referral/referralFromPDF/" + refID;
      $("#referral_PDF").attr("src", src);
    }
  });
}

$("#addReferralFromBtn").click(function () {
  const hpercode = $("#hpercode").text();
  $.ajax({
    type: "POST",
    url: baseURL + "MedicalRecords/visitHistory/" + hpercode,
    dataType: "JSON",
    async: false,
    success: function (data) {
      addReferralType = "FROM";
      $("#PatHistoryList").modal({
        backdrop: "static",
        keyboard: false,
      });
      $("#PatHistoryList").modal("show");
      PatReferralVisitList(data["data"], fullname);
    },
    error: function (data) {
      toastr.error("Error: Fetching Patient Visits!", "Error");
    },
  });
});

$("#addReferralToBtn").click(function () {
  const hpercode = $("#hpercode").text();
  $.ajax({
    type: "POST",
    url: baseURL + "MedicalRecords/visitHistory/" + hpercode,
    dataType: "JSON",
    async: false,
    success: function (data) {
      addReferralType = "TO";
      $("#PatHistoryList").modal({
        backdrop: "static",
        keyboard: false,
      });
      $("#PatHistoryList").modal("show");
      PatReferralVisitList(data["data"], fullname);
    },
    error: function (data) {
      toastr.error("Error: Fetching Patient Visits!", "Error");
    },
  });
});

$(document).ready(function () {
  $(".table-responsive").css("overflow", "auto");
  init_refrom_hfhudcode();
  setReceivedBy();
  init_refto_fhudcode();
  init_referring_doc();
  init_referral_doc();

  $("#ReferType").change(function () {
    if ($(this).val() == "OTHER") {
      $("#ReferOTH").prop("readonly", false);
    } else {
      $("#ReferOTH").val("");
      $("#ReferOTH").prop("readonly", true);
    }
  });

  $("#frmReferto").validate({
    rules: {
      dateRefto: "required",
      ReferType: "required",
      ReferOTH: {
        required: {
          depends: function () {
            if ($("#ReferType").val() == "OTHER") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      reftoReas: "required",
      RefCategory: "required",
      refFacility: "required",
      dateRefCall: {
        required: {
          depends: function () {
            if ($("#RefCategory").val() == "ER") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      RefFrom_doc: "required",
    },
    messages: {
      dateRefto: "Date of Referral is required!",
      ReferType: "Type of Referral is required!",
      ReferOTH: "Please specify Other Type!",
      reftoReas: "Reason for Referral is required!",
      RefCategory: "Referral Category is required!",
      refFacility: "Receiving Facility is required!",
      dateRefCall: "Please specify date and time called!",
      RefFrom_doc: "Referring Provider is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });

  $("#addIncomingReferralForm").validate({
    rules: {
      LogID: "required",
      fhudFrom: "required",
      typeOfReferral: "required",
      referralDateTime: {
        required: true,
        step: false,
      },
      referralCategory: "required",
      datetimecalled: {
        step: false,
        required: {
          depends: function (element) {
            if ($("#referralCategory").val() == "ER") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      referralReason: "required",
      chiefComplaint: {
        required: true,
        maxlength: 255,
      },
      physicalExamination: {
        maxlength: 255,
      },
      clinicalHistory: {
        maxlength: 255,
      },
      clinicalDiagnosis: {
        maxlength: 255,
      },
      findings: {
        maxlength: 255,
      },
      providerlast_refer: "required",
      providerfirst_refer: "required",
      bp: {
        bpValidator: true,
      },
      hr: {
        vsPulseValidator: true,
      },
      rr: {
        vsRrValidator: true,
      },
      receivedby: "required",
      receiveddate: {
        required: true,
        step: false,
      },
    },
    messages: {
      LogID: "Transaction Code is required",
      fhudFrom: "Referring Facility is required!",
      typeOfReferral: "Type of Referral is required!",
      referralDateTime: "Referral Date and Time is required!",
      referralCategory: "Referral Category is required!",
      datetimecalled: "Date and Time Called required",
      referralReason: "Referral Reason is required!",
      chiefComplaint: {
        required: "Chief Complaint is required!",
        maxlength: "Characters are more than 255 in length!",
      },
      physicalExamination: {
        maxlength: "Characters are more than 255 in length!",
      },
      clinicalHistory: {
        maxlength: "Characters are more than 255 in length!",
      },
      clinicalDiagnosis: {
        maxlength: "Characters are more than 255 in length!",
      },
      findings: {
        maxlength: "Characters are more than 255 in length!",
      },
      providerlast_refer: "Referring Porvider Last Name is required!",
      providerfirst_refer: "Referring Porvider First Name is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });

  jQuery.validator.addMethod(
    "bpValidator",
    function (value, element, param) {
      var elementVal = $(element).val();
      if (
        elementVal === "" ||
        elementVal === "palpatory" ||
        elementVal === "PALPATORY"
      ) {
        return true;
      } else {
        if (
          elementVal == "N/A" ||
          elementVal == "n/a" ||
          elementVal == "NA" ||
          elementVal == "na"
        ) {
          return true;
        }
      }

      var bpArray = elementVal.split("/");
      if (bpArray.length === 1) {
        return false;
      }

      if (bpArray.length > 2) {
        return false;
      }

      if (isNaN(bpArray[0])) {
        return false;
      }

      if (bpArray[0].charAt(0) == "0") {
        return false;
      }

      if (bpArray[1] === "") {
        return false;
      }

      if (isNaN(bpArray[1])) {
        return false;
      }

      if (bpArray[1].charAt(0) == "0") {
        return false;
      }

      return true;
    },
    "Invalid value for Blood Pressure"
  );

  jQuery.validator.addMethod(
    "vsPulseValidator",
    function (value, element, param) {
      var elementVal = $(element).val();
      if (elementVal === "") {
        return true;
      }

      if (elementVal != "") {
        let vsPulse = elementVal;
        if (vsPulse.indexOf(".") != -1) {
          return false;
        }

        if (vsPulse == "0" || vsPulse == 0) {
          return false;
        }
      }
      return true;
    },
    "Invalid value for Heart Rate"
  );

  jQuery.validator.addMethod(
    "vsRrValidator",
    function (value, element, param) {
      var elementVal = $(element).val();
      if (elementVal === "") {
        return true;
      }

      if (elementVal != "") {
        let vsRr = elementVal;
        if (vsRr.indexOf(".") != -1) {
          return false;
        }

        if (vsRr == "0" || vsRr == 0) {
          return false;
        }
      }

      return true;
    },
    "Invalid value for Respiratory Rate"
  );

  $("#generateLogID").css("cursor", "pointer");
  $("#generateLogID").click(function () {
    alert(1);
  });
});

$("#frmReferto").submit(function (event) {
  event.preventDefault();
  if ($("#frmReferto").valid() == false) {
    return;
  }
  var POSTURL = baseURL + "Referral/saveReferralTo";
  $.ajax({
    type: "POST",
    url: POSTURL,
    dataType: "JSON",
    cache: false,
    async: true,
    data: $(this).serialize(),
    success: function (data) {
      toastr.success(data.message, "Success");
      $("#refertoModal").modal("hide");
      const hpercode = $("#hpercode").text();
      setPatientReferrals(hpercode);
    },
    error: function (data, xhr, text) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#addIncomingReferralForm").submit(function (event) {
  event.preventDefault();
  if ($("#addIncomingReferralForm").valid() == false) {
    return;
  }
  var referralData = $(this).serialize();
  var url = baseURL + "Referral/saveIncomingReferral";
  $.ajax({
    type: "POST",
    data: referralData,
    dataType: "JSON",
    url: url,
    success: function (data) {
      toastr.success(data.message, "Success");
      const hpercode = $("#hpercode").text();
      setPatientReferrals(hpercode);
      $("#referFromModal").modal("hide");
    },
    error: function (data) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

function init_refrom_hfhudcode() {
  $("#fhudFrom").select2({
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
            id: item.faccode,
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

function setReceivedBy() {
  $("#receivedby").select2({
    placeholder: "Select Receiving Personnel",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Referral/getReceivingPersonnel",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchEmployees: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.employeeid,
            text: item.fullname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setPatientReferralFrom() {
  let hpercode = $("#hpercode").text();
  hpercode = btoa(hpercode);
  var data = new Object();
  data.id = "referralReceivedTable";
  data.link = baseURL + "Referral/getPatientReferralsFrom";
  data.type = "POST";
  data.data = { hpercode };
  data.search = true;
  data.paging = true;
  data.destroy = true;
  data.info = true;
  data.rowsGroup = false;
  data.columns = [
    {
      data: "LogID",
      className: "LogID",
    },
    { data: "referdatetime" },
    { data: "hfhudname" },
    {
      data: "referralCategory",
      render: function (data, type, row) {
        switch (data) {
          case "ER":
            return "Emergency";
            break;
          case "OP":
            return "Out-Patient";
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      data: "typeOfReferral",
      render: function (data, type, row) {
        switch (data) {
          case "DIAGT":
            return "Diagnostic Test";
            break;
          case "TRANS":
            return "Transfer";
            break;
          case "CONSU":
            return "Consultation";
            break;
          case "OTHER":
            return row.referraltypeothers;
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      data: "referralReason",
      render: function (data, type, row) {
        switch (data) {
          case "NOEQP":
            return "No equipment available";
            break;
          case "NODOC":
            return "No available doctor";
            break;
          case "NOPRO":
            return "No procedure available";
            break;
          case "NOLAB":
            return "No laboratory available";
            break;
          case "NOROM":
            return "No room available";
            break;
          case "SEASO":
            return "Seek advise/second opiniion";
            break;
          case "SESPE":
            return "Seek specialized evaluation";
            break;
          case "SEFTA":
            return "Seek futher treatment appropriate to the case";
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      data: null,
      className: "text-center",
      render: function (data, type, row) {
        return (
          '<input type="checkbox" class="selectReferralFrom" data-logid="' +
          row.LogID +
          '" data-toggle="tooltip" data-placement="top" title="Select this Referral"/>'
        );
      },
    },
  ];
  Datatable(data);
  $("#referralReceivedTable").off();
  $("#referralReceivedTable").on(
    "click",
    "tbody > tr .selectReferralFrom",
    function () {
      if ($(this).is(":checked")) {
        $(".selectReferralFrom").prop("checked", false);
        $(this).prop("checked", true);
        $("#referralFromLogID").val($(this).data("logid"));
      } else {
        $("#referralFromLogID").val("");
      }
    }
  );
}

$("#saveAddReferralFrom").submit(function (event) {
  event.preventDefault();
  if ($("#referralFromLogID").val() == "") {
    toastr.error("Select a referral record!", "Error");
    return;
  }
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "Referral/addReferralFrom",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#addIncomingReferralModal").modal("hide");
      const hpercode = $("#hpercode").text();
      setPatientReferrals(hpercode);
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

function PatReferralVisitList(data, patientname) {
  $("#visitLogList").off();
  var table = $("#visitLogList").DataTable({
    data: data,
    destroy: true,
    className:
      "table table-sm table-responsive table-bordered table-striped table-hovered",
    columns: [
      {
        data: "admdate",
      },
      { data: "admtime" },
      { data: "disdate" },
      { data: "distime" },
      { data: "toecode" },
    ],
  });

  $("#visitLogList").on("click", "tr", function () {
    var data = table.row(this).data();
    $("#PatHistoryList").modal("hide");
    if (addReferralType == "FROM") {
      const addreFromHpercode = $("#hpercode").text();
      $("#addreFromHpercode").text(addreFromHpercode);
      const addreFromPatient = $("#patientname").text();
      $("#addreFromPatient").text(addreFromPatient);
      const addreFromEncounter = data.toecode;
      $("#addreFromEncounter").text(addreFromEncounter);
      const addreFromEncounterDate = data.admdate;
      $("#addreFromEncounterDate").text(addreFromEncounterDate);
      $("#addIncomingReferralModal").modal("show");
      $("#referralFromLogID").val("");
      $("#referralFromEnccode").val(data.enccode);
      $("#referralFromHpercode").val(data.hpercode);
      $("#referralFromToeCode").val(data.toe);
      setPatientReferralFrom();
      /*$("#referFromEnccode").val(data.enccode);
      $("#referFromHpercode").val($("#hpercode").text());
      $("#referFromAction").val("insert");
      //$("#referralLogid").val("insert");
      $("#referFromModal").modal({
        backdrop: "static",
        keyboard: false,
      });
      $("#referFromModal").modal("show");*/
    }

    if (addReferralType == "TO") {
      $("#refertoModal").modal({
        backdrop: "static",
        keyboard: false,
      });
      $("#refertoModal").modal("show");
      $("#reftoEnccode").val(data.enccode);
      $("#reftoformIden").val("insert");
      $("#reftoHpercode").val($("#hpercode").text());
    }
  });
}

function init_refto_fhudcode() {
  $("#refFacility").select2({
    allowClear: true,
    placeholder: "Select Referral Facility",
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
            id: item.faccode,
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

function init_referring_doc() {
  $("#RefFrom_doc").select2({
    placeholder: "Select Referring Provider",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Doctor/searchDoctor",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function init_referral_doc() {
  $("#RefTo_doc").select2({
    placeholder: "Select Referral Provider",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Doctor/searchRefDoctor",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

$("#frmDeleteRefer").submit(function (event) {
  event.preventDefault();
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "Referral/deleteReferral",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#deleteReferModal").modal("hide");
      const hpercode = $("#hpercode").text();
      setPatientReferrals(hpercode);
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});
