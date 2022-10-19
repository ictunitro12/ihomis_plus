var table = $("#referralfromTable");
var referralFromData = null;
function initReferralFrom(hfhudcode) {
  ReferralFrom(hfhudcode);
}

table.on("click", "#btnReferrals", function () {
  var enccode = atob($(this).data("enccode"));
  var hpercode = atob($(this).data("percode"));
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var percode = encodeURIComponent(encodeURIComponent(hpercode));
  $("#dateRefto").val(getTimeLocale());
  $("#refEnccode").val(enctr);
  $("#refHpercode").val(percode);
  SelFaci();
  SelFacType();
  SelDiagnosis();
  SelDocRef();
  $("#refertoModal").modal("show");
});

function ReferralFrom(hfhudcode) {
  var data = new Object();
  data.id = "referralfromTable";
  data.link = baseURL + "Referral/getIncoming/" + hfhudcode;
  data.type = "POST";
  data.destroy = true;
  data.paging = true;
  data.search = true;
  data.info = true;
  data.columns = [
    {
      data: "refid",
      render: function (data, type, row) {
        return (
          "<button class='btn btn-link' id='btnRefID'>" + data + "</button>"
        );
      },
    },
    { data: "referdate" },
    { data: "refertime" },
    {
      data: "facilityname",
      render: function (data, type, row) {
        return (
          "<small><b>" +
          data +
          "</b></small>" +
          " &nbsp <small>[" +
          row.fhudFrom +
          "]</small>"
        );
      },
    },
    { data: "patient" },
    {
      data: "type",
      render: function (data, type, row) {
        switch (data) {
          case "TRANS":
            return '<div class="text-center text-success">Transfer</div>';
            break;
          case "CONSU":
            return "Consultation";
            break;
          case "DIAGT":
            return "Diagnostic Test";
            break;
          case "OTHER":
            return "Others";
            break;
          default:
            return "N/A";
        }
      },
    },
    { data: "contact" },

    {
      render: function (data, type, row) {
        return (
          "<div class='btn-group' role='group'><button id='btnGroupDrop1'  type='button' class='btn btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>" +
          "<i class='fa fa-th-list'></i>" +
          "</button>" +
          "<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
          "<a class='dropdown-item' id='btnInfo'  data-code='" +
          row.fhudTo +
          "' data-refID ='" +
          row.refid +
          "' href='#'><i class='fa fa-thumbs-up'></i>&nbsp Confirm</a>" +
          "<!--a class='dropdown-item' id='btnRefer' data-code='" +
          row.fhudTo +
          "' data-refID ='" +
          row.refid +
          "' href='#'><i class='fa fa-refresh'></i>&nbsp Refer</a -->" +
          "<!-- a class='dropdown-item' id='btnReferralFromForm' data-refID ='" +
          row.refid +
          "' href='#'><i class='fa fa-file-text-o' aria-hidden='true'></i>&nbsp Referral Form</a -->" +
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
$("#btnReload").click(function () {
  const fhudcode = $("#fhudcode").val();
  ReferralFrom(fhudcode);
});

$("#referralfromTable").on("click", "#btnRefID", function () {});

$("#referralfromTable").on("click", "#btnInfo", function () {
  const logid = $(this).data("refid");
  $("#referralFromLogId").val(logid);
  var refID = btoa($(this).data("refid"));
  var hfhudCode = btoa($(this).data("code"));
  $("#logID").val(refID);
  $("#receivedDate").val(getTimeLocale());
  var obj;
  $.ajax({
    url: baseURL + "Referral/getReferralData/" + refID + "/" + hfhudCode,
    type: "POST",
    dataType: "JSON",
    success: function (data, response) {
      obj = JSON.parse(JSON.stringify(data));
      let vitals = obj["vitalSign"].replace(/\\/g, "");
      $("#referInfoModal").modal({ backdrop: "static", show: true });
      $("#referPatientInfo").html(
        '<img id="PatientPicInfo" src=' +
          baseURL +
          "assets/img/avatars/none.png" +
          ' class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px"  alt="Patient Photo">' +
          '<div class="h6 text-center text-success">' +
          obj["patientFirstName"].concat(
            " ",
            obj["patientMiddlename"],
            " ",
            obj["patientLastName"]
          ) +
          "</div>" +
          '<div class="list-group list-group-flush">' +
          '<div class="list-group-item">' +
          '<b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Sex:</b> ' +
          '<a class="pull-right text text-success">' +
          sex(obj["patientSex"]) +
          "</a>" +
          "</div>	" +
          '<div class="list-group-item">' +
          '<b class="text text-success"><i class="fa fa-mars"></i>&nbsp CivilStatus:</b>' +
          '<a class="pull-right text text-success">' +
          obj["patientCivilStatus"] +
          "</a>" +
          "</div>" +
          '<div class="list-group-item">' +
          '<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp Birthdate:</b>' +
          '<a class="pull-right text text-success">' +
          formatDate(obj["patientBirthDate"]) +
          "</a>" +
          "</div>" +
          '<div class="list-group-item">' +
          '<b class="text text-success"><i class="fa fa-map"></i>&nbsp Address:</b>' +
          '<a class="pull-right text text-success">' +
          obj["patientStreetAddress"] +
          "</a>" +
          "</div>" +
          '<div class="list-group-item">' +
          '<b class="text text-success"><i class="fa fa-mobile-phone"></i>&nbsp Telephone/Mobile:</b>' +
          '<a class="pull-right text text-success">' +
          (obj["patientContactNumber"] == "null"
            ? ""
            : obj["patientContactNumber"]) +
          "</a>" +
          "</div>" +
          '<div class="list-group-item">' +
          '<b class="text text-success"><i class="fa fa-stethoscope"></i>&nbsp Chief Complaint:</b>' +
          '<a class="pull-right text text-success">' +
          obj["chiefComplaint"] +
          "</a>" +
          "</div>" +
          "</div>"
      );
      referralFromData = JSON.stringify(obj);
    },
  });
});

$("#btnConfirm").on("click", function () {
  const referralData = referralFromData; //sessionStorage.getItem(referralFrom);
  const referralFromLogId = $("#referralFromLogId").val();
  if ($("#dateReceived").val() == "") {
    $("#receivedDateError").remove();
    $("#dateReceived").addClass("is-invalid");
    $("#dateReceived").after(
      '<div class="invalid-feedback" id="receivedDateError">Date and Time is required!</div>'
    );
    return;
  } else {
    let today = new Date().toLocaleString();
    if (Date.parse($("#dateReceived").val()) > Date.parse(today)) {
      $("#receivedDateError").remove();
      $("#dateReceived").addClass("is-invalid");
      $("#dateReceived").after(
        '<div class="invalid-feedback" id="receivedDateError">Invalid date and time!</div>'
      );
      return;
    }
    $("#receivedDateError").remove();
    $("#dateReceived").removeClass("is-invalid");
    $("#dateReceived").addClass("is-valid");
  }
  const dateReceived = $("#dateReceived").val();

  var url = baseURL + "Referral/saveIncoming";
  $.ajax({
    type: "POST",
    data: { referralFromLogId, dateReceived, referralData },
    dataType: "JSON",
    url: url,
    success: function (data) {
      referralFromData = null;
      toastr.success(data.message, "Success");
      var fhudcode = $("#fhudcode").val();
      $("#referInfoModal").modal("hide");
      ReferralFrom(fhudcode);
      $("#message").html(
        '<div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-lg"></i>&nbsp <b>Information:</b> <small>All fields mark with asterisk </small><b class="text-danger">(</b><i class="fa fa-asterisk text-danger"></i><b class="text-danger">)</b> <small> are required!</small> </div>'
      );
    },
    error: function (data) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#frmConfirm").on("submit", function (e) {
  var form = this;
  $.ajax({
    type: "POST",
    url: baseURL + "Referral/confirmReferral",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      $("#ModalDiscountDelete").modal("hide");
      toastr.error("Successfully Deleted!", "Success");
      Discounts($.session.get("enccode"), $.session.get("hpercode"));
    },

    error: function (xhr, desc, err) {
      toastr.error(xhr, "Error");
    },
  });
  return false;
});

$("#frmReferFrm").validate({
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
        if ($("#reftoformIden").val() == "insert") {
          toastr.success("Data successfully saved!", "Success");
          $("#refertoModal").modal("hide");
          $("#ModalDischargePatient").modal("hide");
        } else if ($("#reftoformIden").val() == "update") {
          toastr.success("Data successfully updated!", "Success");
          $("#refertoModal").modal("hide");
          ReferralFrom();
        } else if ($("#refertoModal").val() == "delete") {
        } else {
          toastr.error("no post", "data");
        }
      },
      error: function (data, xhr, text) {
        toastr.success("Date successfully saved!", "Success");
        $("#refertoModal").modal("hide");
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
    Refto_factype: "required",
    refFacility: "required",
    RefTo_doc: "required",
    RefFrom_doc: "required",
    RefDesig: "required",
  },
  messages: {
    ReferType: "Referral Log is required!",
    dateRefCall: "Date is required!",
    dateRefto: "Date is required!",
    RefCategory: "Category is required!",
    reftoReas: "Reason is required!",
    Refto_factype: "Facility type is required!",
    refFacility: "Destination is required!",
    RefTo_doc: "Doctor is required!",
    RefFrom_doc: "Doctor is required!",
    RefReceive: "Receiver is required!",
    RefDesig: "Designation is required!",
  },
  errorElement: "span",
  errorPlacement: function errorPlacement(error, element) {
    error.addClass("invalid-feedback");
    error.insertAfter(element);
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

$("#referralfromTable").on("click", "#btnReferralFromForm", function () {
  const refID = $(this).data("refid");
  $("#modalReferralFromPDF").modal("show");
  var src = baseURL + "Referral/referralFromPDF/" + refID;
  $("#referralFrom_PDF").attr("src", src);
});

$("#btnAddReferralFrom").click(function () {
  window.location.replace(baseURL + "Referral/addincoming");
  /*$("#addReferralFromModal").modal({
    backdrop: "static",
    keyboard: false,
  });
  $("#addReferralFromModal").modal("show");*/
});
