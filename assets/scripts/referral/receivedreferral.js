function ReferralReceived() {
  var data = new Object();
  data.id = "referralReceivedTable";
  data.link = baseURL + "Referral/referReceived";
  data.type = "POST";
  data.destroy = true;
  data.paging = true;
  data.search = true;
  data.info = true;
  data.columns = [
    { data: "LogID" },
    { data: "referralDateTime" },
    { data: "hfhudname" },
    { data: "name" },
    {
      data: "referralCategory",
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
      data: "receivedby",
    },
    {
      data: "receiveddate",
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
          "<a href=javascript:void(0); class='dropdown-item' id='btnLogreferralLogID'  data-refid='" +
          row.LogID +
          "'><i class='fa fa-sign-in' aria-hidden='true'></i>&nbsp Log</a>" +
          "<a href=javascript:void(0); class='dropdown-item' id='btnEditReferralFrom'  data-refid='" +
          row.LogID +
          "'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp Edit</a>" +
          "</div>" +
          "<button type='button'  data-refid='" +
          row.LogID +
          "' class = 'btn btn-outline-success btn-sm'  id='btnPrintRefFrom' ><i class='fa fa-print fa-sm>'</i></button>" +
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
  $("#referralReceivedTable").on("click", "#btnPrintRefFrom", function () {
    const refID = $(this).data("refid");
    $("#modalReferralFromPDF").modal("show");
    var src = baseURL + "Referral/referralFromPDF/" + refID;
    $("#referralFrom_PDF").attr("src", src);
  });

  $("#referralReceivedTable").on("click", "#btnLogreferralLogID", function () {
    const refID = btoa($(this).data("refid"));
    window.location.href = baseURL + "Patient/PatientReferral/" + refID;
    //window.location.replace(baseURL + "Patient/PatientReferral/" + refID);
  });

  $("#btnReloadReceived").click(function () {
    reloadReceived();
  });

  $("#referralReceivedTable").on("click", "#btnEditReferralFrom", function () {
    const refID = btoa($(this).data("refid"));
    window.location.href = baseURL + "Referral/editincoming/" + refID;
  });
}

function reloadReceived() {
  var data = new Object();
  data.id = "referralReceivedTable";
  data.link = baseURL + "Referral/referReceived";
  data.type = "POST";
  data.destroy = true;
  data.paging = true;
  data.search = true;
  data.info = true;
  data.columns = [
    { data: "LogID" },
    { data: "referralDateTime" },
    { data: "hfhudname" },
    { data: "name" },
    {
      data: "referralCategory",
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
      data: "receivedby",
    },
    {
      data: "receiveddate",
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
          "<a href=javascript:void(0); class='dropdown-item' id='btnLogreferralLogID'  data-refid='" +
          row.LogID +
          "'><i class='fa fa-sign-in' aria-hidden='true'></i>&nbsp Log</a>" +
          "</div>" +
          "<button type='button'  data-refid='" +
          row.LogID +
          "' class = 'btn btn-outline-success btn-sm'  id='btnPrintRefFrom' ><i class='fa fa-print fa-sm>'</i></button>" +
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
