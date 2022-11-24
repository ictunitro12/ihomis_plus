var enccode = $.session.get("enccode");
var hpercode = $.session.get("hpercode");
$(function () {
  if (enccode == undefined && hpercode == undefined) {
    $("#PatSearch").modal({ backdrop: "static" });
    $("#PatientImage").prop("src", "assets/img/avatars/none.png");
  } else {
    initBilling(enccode, hpercode);
  }
});

function initBilling(enccode, hpercode) {
  PatientData(hpercode);
  //Charges(enccode,hpercode);
  loadCharges(enccode, hpercode);
}

$('a[data-toggle="tab"]').on("click", function (e) {
  var tab = e.target.id;
  switch (tab) {
    case "charges-tab":
      //loadCharges(enccode,hpercode);
      loadCharges($.session.get("enccode"), $.session.get("hpercode"));
      //Charges(enccode,hpercode);
      break;
    case "disc-tab":
      Discounts($.session.get("enccode"), $.session.get("hpercode"));
      break;
    case "adj-tab":
      Adjustments($.session.get("enccode"), $.session.get("hpercode"));
      break;
    case "prof-tab":
      ProfServ($.session.get("enccode"), $.session.get("hpercode"));
      break;
    case "mss-tab":
      MSS($.session.get("enccode"), $.session.get("hpercode"));
      break;
    case "web-tab":
      Webpais($.session.get("hpercode"));
      break;
    case "out-tab":
      outside($.session.get("enccode"), $.session.get("hpercode"));
      break;
    default:
      loadCharges($.session.get("enccode"), $.session.get("hpercode"));
      //Charges(enccode,hpercode);
      break;
  }
});

function initCharges(enccode, hpercode) {
  $("#container").load(baseURL + "Billing/viewBilling", function () {
    loadCharges(enccode, hpercode);
    //Charges(enccode,hpercode);
  });
}

function initDiscounts(enccode, hpercode) {
  $("#container").load(baseURL + "Billing/viewdiscount", function () {
    $("#disc-tab").addClass("active");
    Discounts(enccode, hpercode);
  });
}

function Charges(enccode, hpercode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var data = new Object();
  data.search = false;
  data.paging = true;
  data.info = false;
  data.orderable = false;
  data.id = "chargesTbl";
  data.link = baseURL + "Billing/chargesList/" + enctr + "/" + hpercode;
  data.type = "POST";
  data.coldef = [
    {
      targets: [0, 1],

      visible: false,
      orderable: false,
    },
    {
      targets: [2, 4, 5],
      orderable: false,
    },

    {
      targets: [4],
      render: function (data, type, row) {
        return formatNumber(data);
      },
    },
  ];
  data.footerCallback = function (row, data, start, end, display) {
    var api = this.api(),
      data;

    // Remove the formatting to get integer data for summation
    var intVal = function (i) {
      return typeof i === "string"
        ? i.replace(/[\$,]/g, "") * 1
        : typeof i === "number"
        ? i
        : 0;
    };

    // Total over all pages
    total = api
      .column(4)
      .data()
      .reduce(function (a, b) {
        return intVal(a) + intVal(b);
      }, 0);

    // Total over this page
    pageTotal = api
      .column(4, { page: "current" })
      .data()
      .reduce(function (a, b) {
        return intVal(a) + intVal(b);
      }, 0);

    // Update footer
    $(api.column(4).footer()).html(
      '<div class="h4 text-success">' +
        formatNumber(pageTotal.toFixed(2, 0)) +
        "</div>"
    );
    $(api.column(3).footer()).html(
      '<div class="h4 text-success"> Total Amount:</div>'
    );
  };
  loadTable(data);
}

$("#btnPatientSearch").on("click", function () {
  $.session.remove("enccode");
  $.session.remove("hpercode");
  location.reload();
});

$("#btnFinalBill").on("click", function () {
  $("#ModalSelectType").modal({ backdrop: "static" });
});

$("#frmSelectBill").on("submit", function (e) {
  e.preventDefault();
  var type = $("input[name=billingMode]:checked").val();
  var enctr = encodeURIComponent(encodeURIComponent($.session.get("enccode")));
  var percode = encodeURIComponent(
    encodeURIComponent($.session.get("hpercode"))
  );
  var src = "Billing/printBill/" + enctr + "/" + type + "/" + percode;
  if ($("#billingClaim").is(":checked")) {
    src = "Billing/printBill/" + enctr + "/" + type + "/" + percode + "/" + "Y";
  }
  var x = (document.getElementById("finalBillPdf").src = src);
  $("#ModalFinalBill").modal({ backdrop: "static", show: true });
  $("#ModalSelectType").modal("hide");
  return false;
});

$("#ModalFinalBill").on("hidden.coreui.modal", function () {
  location.reload();
});
