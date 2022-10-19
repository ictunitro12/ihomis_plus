function initReferralto() {
  $("#dateRefto").val(getTimeLocale());
  $("#reftoformIden").val("insert");
  SelFacilities();
  SelFacType();
  referralFacility();
  selDoctor($("#frmReferto"));
}

$(document).ready(function () {
  initReferralto();
  $("#cancelSearchPatient").click(function () {
    $("#PatSearchList").modal("hide");
  });
  $("#cancelSearchEnc").click(function () {
    $("#PatHistoryList").modal("hide");
  });
});

function ReferralTo() {
  var data = new Object();
  data.id = "referralTable";
  data.link = baseURL + "Referral/referTo";
  data.type = "POST";
  data.destroy = true;
  data.paging = true;
  data.search = true;
  data.info = true;
  data.columns = [
    { data: "called" },
    { data: "refer" },
    { data: "name", className: "referralPatient" },
    { data: "hfhudname" },
    {
      data: "typeofreferral",
      render: function (data, type, row) {
        switch (data) {
          case "CONSU":
            return "CONSULTATION";
            break;
          case "DIAGT":
            return "DIAGNOSTIC TEST";
            break;
          case "TRANS":
            return "TRANSFER";
            break;
          case "OTHERS":
            return "";
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      data: "referralreason",
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
          case "DOCTO":
            return "Doctor";
            break;
          case "POLIT":
            return "Politician";
            break;
          case "NDOCT":
            return "Non-Medical";
            break;
          case "AGENC":
            return "Hospital or Agency";
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      render: function (data, type, row) {
        return (
          "<div class='btn-group  btn-ladda' btn-sm data-layout='zoom-in'>" +
          "<button type='button' class='btn btn-outline-success btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>" +
          "<span class='caret'></span>" +
          "<span class='sr-only'>Toggle Dropdown</span>" +
          "</button>" +
          "<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;' role='menu'>" +
          "<a href=javascript:void(0);  class='dropdown-item' id='btnReftoSend' data-code='" +
          row.enccode +
          "' data-hpercode='" +
          row.hpercode +
          "'><i class='fa fa-send'></i>&nbsp Submit</a>" +
          "<a href=javascript:void(0);  class='dropdown-item' id='btnReftoEdit'  data-code='" +
          row.enccode +
          "' data-datetime='" +
          row.referdatetime +
          "'data-type='" +
          row.typeofreferral +
          "'><i class='fa fa-sign-out'></i>&nbsp Edit</a>" +
          "<a href=javascript:void(0); class='dropdown-item' id='btnReftoDelete'  data-enccode='" +
          row.enccode +
          "' data-datetime='" +
          row.referdatetime +
          "'data-type='" +
          row.typeofreferral +
          "'><i class='fa fa-columns'></i>&nbsp Delete</a>" +
          "</div>" +
          "<button type='button'  data-enccode='" +
          row.enccode +
          "' data-datetime='" +
          row.referdatetime +
          "'data-type='" +
          row.typeofreferral +
          "' class = 'btn btn-outline-success btn-sm'  id='btnPrintRef' ><i class='fa fa-print fa-sm>'</i></button>" +
          "</div>" +
          "</div>"
        );
      },
    },
  ];
  data.coldef = [
    {
      targets: ["_all"],
      className: "align-middle",
    },
  ];
  var refto = Datatable(data);
}

$("#referralTable").on("click", "#btnReftoEdit", function () {
  const enctr = encodeURIComponent(encodeURIComponent($(this).data("code")));
  const datetime = encodeURIComponent(
    encodeURIComponent($(this).data("datetime"))
  );
  const type = encodeURIComponent(encodeURIComponent($(this).data("type")));
  var POSTURL = baseURL + "Referral/referInfo";
  $.ajax({
    type: "POST",
    url: POSTURL,
    data: { enctr, type, datetime },
    success: function (data) {
      setEditReferralTo(data.data);
      $("#refertoModal").modal("show");
    },
    error: function (data, xhr, text) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

function setEditReferralTo(data) {
  $("#reftoformIden").val("update");
  $("#reftoEnccode").val(data.enccode);
  const datetimecalled = data.datetimecalled;
  $("#dateRefCall").val(datetimecalled);
  const referdatetime = data.referdatetime;
  $("#dateRefto").val(referdatetime);
  $("#editReferralDatetime").val(referdatetime);
  const typeofreferral = data.typeofreferral;
  $("#ReferType").val(typeofreferral);
  $("#editReferralType").val(typeofreferral);
  const othertypeofreferral = data.othertypeofreferral;
  if (typeofreferral == "OTHER") {
    $("#ReferOTH").prop("readonly", false);
    $("#ReferOTH").val(othertypeofreferral);
  }
  const referralcategory = data.referralcategory;
  $("#RefCategory").val(referralcategory);
  const referralreason = data.referralreason;
  $("#reftoReas").val(referralreason);
  const receivingcontactperson = data.receivingcontactperson;
  $("#RefReceive").val(receivingcontactperson);
  const receivingpersondesignation = data.receivingpersondesignation;
  $("#RefDesig").val(receivingpersondesignation);
  const otherreasons = data.otherreasons;
  $("#RefOtherReas").val(otherreasons);
  const remarks = data.remarks;
  $("#RefRemarks").val(remarks);
  const response = data.response;
  $("#RefResp").val(response);
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
}

$("#referralTable").on("click", "#btnPrintRef", function () {
  $("#modalReferralPDF").modal("show");
  const enctr = encodeURIComponent(encodeURIComponent($(this).data("enccode")));
  const datetime = encodeURIComponent(
    encodeURIComponent($(this).data("datetime"))
  );
  const type = encodeURIComponent(encodeURIComponent($(this).data("type")));
  var src =
    baseURL + "Referral/referralPDF/" + enctr + "/" + type + "/" + datetime;
  $("#referral_PDF").attr("src", src);
});

$("#referralTable").on("click", "#btnReftoSend", function () {
  var POSTURL = baseURL + "Referral/sendReferral";
  $.ajax({
    type: "POST",
    url: POSTURL,
    data: {
      enccode: $(this).data("code"),
      hpercode: $(this).data("hpercode"),
    },
    success: function (data) {
      toastr.success(data.message, "Success");
      $("#referralTable").DataTable().ajax.reload();
    },
    error: function (data, xhr, text) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#referralTable").on("click", "#btnRefDelete", function () {
  $("#refertoModal").modal("show");
  var POSTURL = baseURL + "Referral/sendReferral";

  $.ajax({
    type: "POST",
    url: POSTURL,
    dataType: "JSON",
    cache: false,
    async: true,
    data: $(form).serialize(),
    success: function (data) {
      toastr.success(data, "Success");
    },
    error: function (data, xhr, text) {
      toastr.error(data, "text");
    },
  });
});

$("#frmReferto").validate({
  submitHandler: function (form) {
    var POSTURL = baseURL + "Referral/saveReferralTo";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(form).serialize(),
      success: function (data) {
        toastr.success(data.message, "Success");
        $("#refertoModal").modal("hide");
        ReferralTo();
      },
      error: function (data, xhr, text) {
        toastr.error(data.responseJSON.message, "Error");
      },
    });
    return false;
    $(form).submit();
  },
  rules: {
    ReferType: "required",
    dateRefCall: "required",
    dateRefto: "required",
    reftoReas: "required",
    RefCategory: "required",
    Refto_factype: "required",
    refFacility: "required",
    //RefTo_doc: "required",
    RefFrom_doc: "required",
    //RefDesig: "required",
  },
  messages: {
    ReferType: "Referral Log is required!",
    dateRefCall: "Date is required!",
    dateRefto: "Date is required!",
    RefCategory: "Category is required!",
    reftoReas: "Reason is required!",
    Refto_factype: "Facility type is required!",
    refFacility: "Destination is required!",
    //RefTo_doc: "Doctor is required!",
    RefFrom_doc: "Doctor is required!",
    //RefReceive: "Receiver is required!",
    //RefDesig: "Designation is required!",
  },
  errorElement: "span",
  errorPlacement: function errorPlacement(error, element) {
    if (element.hasClass("select2-hidden-accessible")) {
      error.insertAfter(element.next(".select2-container"));
      error.addClass("invalid-feedback");
    } else {
      error.insertAfter(element);
      error.addClass("invalid-feedback");
    }
  },

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

$("#ReferType").on("change", function () {
  if ($("#ReferType").val() == "OTHER") {
    $("#ReferOTH").prop("readonly", false);
  } else {
    $("#ReferOTH").prop("readonly", true);
    $("#ReferOTH").val("");
  }
});

$("#referralTable").on("click", "#btnReftoDelete", function () {
  const enctr = encodeURIComponent(encodeURIComponent($(this).data("enccode")));
  const datetime = encodeURIComponent(
    encodeURIComponent($(this).data("datetime"))
  );
  const type = encodeURIComponent(encodeURIComponent($(this).data("type")));
  const thisRow = $(this).closest("tr");
  const referralPatient = thisRow.find(".referralPatient").text();
  $("#deleteReferralPatient").text(referralPatient);
  $("#deleteRefertoModal").modal({ backdrop: "static" }).draggable();
  $("#reftoformIden").val("delete");
  $("#deleteReferralEnccode").val(enctr);
  $("#deleteReferralDatetime").val(datetime);
  $("#deleteReferralType").val(type);
});

$("#frmDeleteReferto").submit(function (event) {
  event.preventDefault();
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "Referral/saveReferralTo",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#deleteRefertoModal").modal("hide");
      ReferralTo();
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#btntrans_Add").click(function () {
  $("#PatSearch").modal("show");
});

$("#frmPatSearch").submit(function (event) {
  event.preventDefault();
  $.ajax({
    url: baseURL + "Patient/PatientAdvanceSearch",
    type: "POST",
    data: new FormData(this),
    dataType: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data, response) {
      $("#PatSearchList").modal({
        backdrop: "static",
        keyboard: false,
      });
      $("#PatSearchList").modal("show");
      $("#PatSearch").modal("hide");
      PatSearchList(data);
    },
    error: function (response) {
      toastr.error("Error:Please try again!", "Error");
    },
  });
  return false;
});

function PatSearchList(data) {
  $("#TblPatSearchList").off();
  var table = $("#TblPatSearchList").DataTable({
    data: data,
    destroy: true,
    className:
      "table table-sm table-responsive table-bordered table-striped table-hovered",
    columns: [
      {
        data: "hpercode",
      },
      {
        data: "fullname",
      },
      {
        data: "dob",
      },
      {
        data: "patsex",
        render: function (data) {
          return data == "F"
            ? '<i class="fa fa-female" aria-hidden="true"></i> FEMALE'
            : '<i class="fa fa-male" aria-hidden="true"></i> MALE';
        },
      },
    ],
  });

  $("#TblPatSearchList").on("click", "tr", function () {
    var data = table.row(this).data();
    if (data == undefined) {
      return;
    }
    var hpercode = data["hpercode"];
    var fullname = data["fullname"];
    var patsex = data["patsex"];
    $.ajax({
      type: "POST",
      url: baseURL + "MedicalRecords/visitHistory/" + hpercode,
      dataType: "JSON",
      async: false,
      success: function (data) {
        $("#PatHistoryList").modal({
          backdrop: "static",
          keyboard: false,
        });
        $("#PatHistoryList").modal("show");
        $("#PatSearchList").modal("hide");
        PatVisitList(data["data"], fullname);
      },
      error: function (data) {
        toastr.error("Error: Fetching Patient Visits!", "Error");
      },
    });
  });
}

function PatVisitList(data, patientname) {
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
    $("#reftoEnccode").val(data.enccode);
    $("#reftoformIden").val("insert");
    $("#refertoModal").modal({
      backdrop: "static",
      keyboard: false,
    });
    $("#refertoModal").modal("show");
  });
}
