$(function () {
  initInbox();
});
$("#btnRefInbox").click(function () {
  initInbox();
});
$("#btnRefOutbox").click(function () {
  initOutbox();
});
$("#btnHospital").click(function () {
  initAvailable();
});
$("#btnStatus").click(function () {
  initStatus();
});
$("#btnReceived").click(function () {
  initReceived();
});

function initReceived() {
  $("#loadView").load(baseURL + "Referral/received", function () {
    $("#btnRefInbox").removeClass("active");
    $("#btnRefOutbox").removeClass("active");
    $("#btnReceived").addClass("active");
    $("#btnStatus").removeClass("active");
    $("#btnReports").removeClass("active");
    $("#btnHospital").removeClass("active");
    ReferralReceived();
  });
}

function initInbox() {
  $("#loadView").load(baseURL + "Referral/inbox", function () {
    $("#btnRefInbox").addClass("active");
    $("#btnRefOutbox").removeClass("active");
    $("#btnReceived").removeClass("active");
    $("#btnStatus").removeClass("active");
    $("#btnReports").removeClass("active");
    $("#btnHospital").removeClass("active");
    ReferralFrom($("#fhudcode").val());
  });
}

function initOutbox() {
  $("#loadView").load(baseURL + "Referral/outbox", function () {
    $("#btnRefInbox").removeClass("active");
    $("#btnRefOutbox").addClass("active");
    $("#btnReceived").removeClass("active");
    $("#btnStatus").removeClass("active");
    $("#btnReports").removeClass("active");
    $("#btnHospital").removeClass("active");
    ReferralTo();
  });
}

function initAvailable() {
  $("#loadView").load(baseURL + "Referral/available", function () {
    $("#btnRefInbox").removeClass("active");
    $("#btnRefOutbox").removeClass("active");
    $("#btnReceived").removeClass("active");
    $("#btnStatus").removeClass("active");
    $("#btnReports").removeClass("active");
    $("#btnHospital").addClass("active");
    online();
  });
}

function initStatus() {
  $("#loadView").load(baseURL + "Referral/referredStat", function () {
    $("#btnRefInbox").removeClass("active");
    $("#btnRefOutbox").removeClass("active");
    $("#btnReceived").removeClass("active");
    $("#btnStatus").addClass("active");
    $("#btnReports").removeClass("active");
    $("#btnHospital").removeClass("active");
    statusTo();
  });
}

function online() {
  var table = $("#onlineTable").DataTable({
    ajax: baseURL + "Referral/status",
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    destroy: true,
    columns: [
      {
        data: "facility_name",
        render: function (data, type, row) {
          return "<small><b>" + data + "</small>";
        },
      },
      {
        data: "online_status",
        render: function (data, type, row) {
          if (data == null) {
            return "<div class='p-1 bg-danger text-white text-center'>Inactive</div>";
          } else {
            return "<div class='p-1 bg-success text-white text-center'>Active</div>";
          }
        },
      },
    ],

    columnDefs: [
      {
        targets: [0, 1],
        className: "align-middle",
      },
      {
        targets: [0, 1],
        className: "text-center",
      },
      {
        targets: "_all",
        defaultContent: "",
      },
    ],
  });

  $.fn.dataTable.ext.errMode = "none";
  $("#onlineTable").on("error.dt", function (e, settings, techNote, message) {
    $("#onlineTable").DataTable().clear().draw();
  });

  $("#onlineTable").on("click", function () {
    table.DataTable().ajax.reload(null, false);
  });
  setInterval(function () {
    table.DataTable().ajax.reload(null, false); // user paging is not reset on reload
  }, 30000);
}

function referralFacility() {
  $("#refFacility").select2({
    theme: "coreui",
    placeholder: "Select Facility",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Facilities/searchFac",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchName: params.term,
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
  $("#refFacility").on("change", function () {
    var data = $("#refFacility option:selected", this);
  });
}
