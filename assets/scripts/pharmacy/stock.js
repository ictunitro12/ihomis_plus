function dmStock() {
  var data = new Object();
  data.id = "stock_tbl";
  data.link = baseURL + "Pharmacy/dm_stock";
  data.dataType = "JSON";
  data.data = {
    typeAccradio: $(
      ".typeofaccount,input[name=typePharm]:checked",
      "#typeofAccount"
    ).val(),
  };
  data.type = "POST";
  data.search = true;
  data.destroy = true;
  data.paging = true;
  data.info = true;
  data.serverside = true;

  (data.columns = [
    { data: "dmdcomb" },
    { data: "hprodid" },
    {
      data: "description",
      render: function (data, type, row) {
        return data;
      },
    },

    {
      data: "dmdrxot",
      render: function (data, type, row) {
        switch (data) {
          case "RXX":
            return '<small class="text-center text-primary"><i class="fa fa-stethoscope"></i>&nbsp W/Pres</small>';
            break;
          case "OTC":
            return '<small class="text-center text-info"><i class="fa fa-medkit"></i> OTC</small>';
            break;
          default:
            return "N/A";
        }
      },
    },

    {
      data: "dmdstat",
      render: function (data, type, row) {
        switch (data) {
          case "A":
            return '<small class="text-center text-success"><i class="fa fa-check"></i>&nbsp Active </small>';
            break;
          case "I":
            return '<small class="text-center text-danger"><i class="fa fa-remove"></i>&nbsp Inactive </small>';
            break;
          default:
            return '<small class="text-center text-secondary"><i clsass="fa fa-exclamation"></i>&nbsp N/A </small>';
        }
      },
    },

    {
      data: "dmdpndf",
      render: function (data, type, row) {
        switch (data) {
          case "Y":
            return '<div class="text-center text-success"><i class="fa fa-check"></i>&nbsp Yes </div>';
            break;
          case "N":
            return '<div class="text-center text-danger"><i class="fa fa-remove"></i>&nbsp No </div>';
            break;
          default:
            return '<div class="text-center text-secondary"><i class="fa fa-exclamation"></i>&nbsp N/A </div>';
        }
      },
    },
    { data: "stockbal" },
    { data: "begbal" },
    {
      data: "reorder_level",
      render: function (data, type, row) {
        if (data) {
          if (row.stockbal <= data) {
            return (
              '<div class="p-1 bg-danger text-center text-white">&nbsp ' +
              data +
              "(Low)</div>"
            );
          } else {
            return (
              '<div class="p-1 bg-success text-center text-white">&nbsp ' +
              data +
              " </div>"
            );
          }
        } else {
          return '<div class="text-center text-danger"> No reorder level </div>';
        }
      },
    },
    {
      data: null,
      render: function (data, type, row) {
        return (
          "<div class=btn-group role=group>" +
          "<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" +
          "<i class='fa fa-th-list'></i>" +
          "</button>" +
          "<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
          "<a class='dropdown-item'  data-dmdcomb='" +
          row.dmdcomb +
          "' data-dmdctr='" +
          row.dmdctr +
          "' data-dmsub='" +
          row.dmhdrsub +
          "'  data-formcode='" +
          row.formcode +
          "'  data-baldteasof='" +
          row.baldteasof +
          "' id='btnTypeAcc' href='#'><i class='fa fa-calculator'></i> &nbsp Account</a>" +
          "<a class='dropdown-item'  data-barcode ='" +
          row.barcode +
          "' data-reord ='" +
          row.reorder_level +
          "'  data-dmdcomb='" +
          row.dmdcomb +
          "' data-drugname='" +
          row.description +
          "' data-dmdctr='" +
          row.dmdctr +
          "'  data-dmsub='" +
          row.dmhdrsub +
          "' data-formcode='" +
          row.formcode +
          "'  data-baldteasof='" +
          row.baldteasof +
          "' id='btnStock_Edit' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>" +
          "</div>" +
          "</div>"
        );
      },
    },
  ]),
    (data.coldef = [
      {
        targets: ["_all"],
        className: "align-middle",
      },
      {
        targets: [0],
        visible: false,
      },
    ]);
  Datatable(data);
}

$("#btnChart").on("click", function () {
  var row = $("#stock_tbl").DataTable().columns().data().toArray();
  $("#modalChart").modal("show");
  chartTable(row);
});

function chartTable(data) {
  const toNumbers = (arr) => arr.map(Number);
  var table = $("#stock_tbl").DataTable();
  var container = $("<div/>").insertBefore(table.table().container());

  var chart = Highcharts.chart(
    "viewChart",
    {
      chart: {
        type: "bar",
      },
      title: {
        text: "",
      },
      subtitle: {
        text: "",
      },
      xAxis: {
        name: data[8],
        categories: data[2],
        title: {
          text: "Drugs and Medicines",
        },
      },
      yAxis: {
        min: 0,
        value: toNumbers(data[8]),
        title: {
          text: "Order level",
          align: "high",
        },
        labels: {
          overflow: "justify",
          text: "",
          style: {
            color: "red",
            fontWeight: "bold",
          },
        },
      },
      tooltip: {
        valueSuffix: "pcs",
      },
      plotOptions: {
        bar: {
          dataLabels: {
            enabled: true,
          },
        },
      },
      legend: {
        layout: "vertical",
        align: "right",
        verticalAlign: "top",
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
          Highcharts.defaultOptions.legend.backgroundColor || "#FFFFFF",
        shadow: true,
      },
      credits: {
        enabled: false,
      },
      series: [
        {
          name: "Current Stock/s",
          data: toNumbers(data[7]),
        },
        {
          marker: {
            symbol: "c-rect",
            lineWidth: 3,
            lineColor: Highcharts.getOptions().colors[3],
            radius: 10,
          },
          name: "Reorder level",
          type: "scatter",
          data: toNumbers(data[8]),
        },
      ],
    },
    function (chart) {
      $.each(chart.series[0].data, function (i, data) {
        console.log(data);
        if (data.y < data.y)
          data.graphic.attr({
            fill: "red",
          });
      });
    }
  );
}
$(".typeofaccount").on("change", function () {
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/dm_stock",
    data: {
      typeAccradio: $("input[name=typePharm]:checked", "#typeofAccount").val(),
    },
    success: function (data, response) {
      dmStock();
    },
    error: function (xhr, desc, err) {
      toastr.error(err, "ERROR!");
    },
  });
});

function drugData() {
  var data = new Object();
  data.id = "drugData";
  data.link = baseURL + "Drugs/drugdata";
  (data.select = {
    select: true,
    style: "single",
  }),
    (data.type = "POST");
  data.search = true;
  data.destroy = true;
  data.paging = true;
  data.info = true;
  data.columns = [{ data: "dmdcomb" }, { data: "drugs" }];
  Datatable(data);
  $("#drugData").off();
  $("#drugData").on("click", "tbody>tr", function () {
    $(this).toggleClass("table-success selected");
    var rowData = $("#drugData").DataTable().row(".selected").data();
    console.log(rowData);
    $("#drugcomb").val(rowData["dmdcomb"]);
    $("#drugctr").val(rowData["dmdctr"]);
    $("#drug").val(rowData["drugs"]);
    $("#formcode").val(rowData["formcode"]);

    $("#drugcode").text(rowData["dmdcomb"]);
    $("#drugname").text(rowData["drugs"]);
    $("#drugunits").text(rowData["formcode"]);

    $("#modaldrugData").modal("hide");
  });
  /*$("#drugData").on("click", "tbody > tr", function () {
    $(this).toggleClass("table-success selected");
    var rowData = $("#drugData").DataTable().row(".selected").data();
  });*/
}

$("#drugData").on('click', 'tbody>tr', function () {
	$(this).toggleClass("table-success selected");
	var rowData = $("#drugData").DataTable().row('.selected').data();
	
});

$("#btnSearchDrug").on("click", function (e) {
  drugData();
  $("#modaldrugData").modal("show");
});

$("#btnAccount").on("click", function (e) {
  $("#modalSelectAccount").modal("show");
});

function drugSelect() {
  $("#drugSelect").select2({
    placeholder: "DRUGS AND MEDICINE",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/Drugs/searchDrugs",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDrugs: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.dmdcomb,
            text: item.drugs,
            ctr: item.dmdctr,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#drugSelect").on("change", function () {
    $("#drugSelect option:selected", this);
    $("#dmdcomb").val(this.value);
  });
}
function chargeDrug() {
  $("#chrgDrug").select2({
    placeholder: "Type of charge ",
    allowClear: false,
    theme: "coreui",
    ajax: {
      url: baseURL + "Pharmacy/searchdrugAccount",
      dataType: "json",
      type: "POST",
      data: function (params) {
        return {
          searchdrugAccount: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.chrgcode,
            text: item.chrgdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setchrgdrug(id) {
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/searchdrugAccountInfo/" + id,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["SALTDESC"], obj["saltcode"], true, true);
    relSelect.append(option).trigger("change");
    relSelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setCharge(id) {
  chargeDrug();
  var relSelect = $("#chrgDrug");
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/searchdrugAccountInfo/" + id,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["chrgdesc"], obj["chrgcode"], true, true);
    relSelect.append(option).trigger("change");
    relSelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

//
$("#btnAddAccount").on("click", function (e) {
  chargeDrug();
  $("#formIdenDrug").val("insert");
  $("#modalDrug").modal("show");
});

$("#stock_tbl").on("click", "#btnTypeAcc", function (e) {
  var lotno = $(this).data("lotno");
  var dmdcomb = $(this).data("dmdcomb");
  var dmdctr = $(this).data("dmdctr");
  var dmsub = $(this).data("dmsub");
  var formcode = $(this).data("formcode");
  var baldteasof = $(this).data("baldteasof");
  accountDrug(dmdcomb, dmdctr, dmsub);
  druginfo(dmdcomb, dmdctr, URLencode(baldteasof));
  $("#modalDrugAccount").modal("show");
});

$("#stock_tbl").on("click", "#btnStock_Edit", function (e) {
  var dmdcomb = $(this).data("dmdcomb");
  var dmdctr = $(this).data("dmdctr");
  var dmsub = $(this).data("dmsub");
  var drugname = $(this).data("drugname");
  var formcode = $(this).data("formcode");
  var baldteasof = $(this).data("baldteasof");
  var reord = $(this).data("reord");
  var barcode = $(this).data("barcode");
  $("#drugcomb").val(dmdcomb);
  $("#drugctr").val(dmdctr);
  $("#drug").val(drugname);
  $("#reorder").val(reord);
  $("#barcode").val(barcode);
  setCharge(dmsub);
  $("#formIdenDrug").val("update");
  $("#baldteasof").val(baldteasof);

  $("#btnSearchDrug").prop("disabled", true);
  $("#modalDrug").modal("show");
});

$("#btnAddDrug").on("click", function (e) {
  setForm($("#formcode").val());
  $("#comb").val($("#dmdcomb").val());
  $("#ctr").val($("#dmdctr").val());
  $("#sub").val($("#dmhdrsub").val());
  $("#unitcode").val($("#formcode").val());
  $("#beginbalance").prop("disabled", false);
  $("#stockbalance").prop("disabled", false);
  $("#formiden").val("insert");
  $("#modalAddDrug").modal("show");
});

$("#frmdrugAccount").on("submit", function (e) {
  var form = this;
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/savedmprice",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      $("#drugaccTbl").DataTable().ajax.reload();
      toastr.success("Record saved!", "Success!");
      $("#modalAddDrug").modal("hide");
    },
    error: function (xhr, desc, err) {
      toastr.error(err, "ERROR!");
    },
  });
  return false;
});


$("#frmDeleteAccount").on("submit", function (e) {
  var form = this;
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/savedmprice",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      $("#drugaccTbl").DataTable().ajax.reload();
      $("#modalDeleteAccount").modal("hide");
      toastr.success("Record deleted!", "Success!");
    },
    error: function (xhr, desc, err) {
      toastr.error(err, "ERROR!");
    },
  });
  return false;
});

$("#modalAddDrug").on("hidden.coreui.modal", function (event) {
  $(this).find("input,textarea,select").val("").end();
  $(this).find("input,textarea,select").removeClass("is-valid");
  $(this).find("input,textarea,select").removeClass("is-invalid");
});

$("#modalDrugAccount").on("hidden.coreui.modal", function (event) {
  $("#stock_tbl").DataTable().ajax.reload();
});

function druginfo(dmdcomb, dmdctr) {
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/getdrugInfo/" + dmdcomb + "/" + dmdctr,
    success: function (data, response) {
      var obj = $.parseJSON(data);
      $("#drgname").text(obj["description"]);
      $("#begin").text(obj["begbal"]);
      $("#stock").text(obj["stockbal"]);
      $("#code").text(obj["dmdcomb"]);
      $("#formcode").val(obj["formcode"]);
      $("#dmdcomb").val(obj["dmdcomb"]);
      $("#dmdctr").val(obj["dmdctr"]);
      $("#baldteasof").val(obj["baldteasof"]);
      $("#dmhdrsub").val(obj["dmhdrsub"]);
      drugPicLoc;
      var drugPic = $.md5(
        obj["dmdcomb"].concat(obj["dmdctr"], obj["baldteasof"])
      );
      $("#dmhdrsub").val(obj["dmhdrsub"]);
      var urlPic = baseURL + "assets/drug_photo/" + drugPic + ".jpg";
      var http = new XMLHttpRequest();
      http.open("HEAD", urlPic, false);
      http.send();
      if (http.status === 200) {
        $("#drugPhoto").attr(
          "src",
          urlPic + "?timestamp=" + new Date().getTime()
        );
      } else {
        $("#drugPhoto").attr("src", "./assets/img/drug_default.jpg");
      }
    },
    error: function (xhr, desc, err) {
      toastr.error(err, "ERROR!");
    },
  });
}

function druginfoprice(lotno, date) {
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/druginfo",
    data: { lotno: lotno, date: date },
    success: function (data, response) {
      var obj = $.parseJSON(data);
      setForm(obj["unitcode"]);
      $("#formiden").val("update");
      $("#comb").val(obj["dmdcomb"]);
      $("#ctr").val(obj["dmdctr"]);
      $("#sub").val(obj["dmhdrsub"]);
      $("#unitprice").val(obj["dmduprice"]);
      $("#selling").val(obj["dmselprice"]);
      if (obj["isshared"] == "Y") {
        $("#serveno").val(obj["serve_no"]);
        $("#priceserve").val(obj["serve_price"]);
        $("#serveno").prop("disabled", false);
        $("#shared").prop("checked", true);
      } else {
        $("#serveno").val(obj["serve_no"]);
        $("#priceserve").val(obj["serve_price"]);
        $("#serveno").prop("disabled", true);
        $("#shared").prop("checked", false);
      }
      $("#lotno").val(obj["lotno"]);
      $("#expiry").val(obj["expiry"]);
      $("#remarks").val(obj["dmdrem"]);
      $("#dmdprdte").val(obj["dmdprdte"]);
      $("#dmhdrsub").val(obj["dmhdrsub"]);
      $("#beginbalance").val(obj["begbal"]);
      $("#stockbalance").val(obj["stockbal"]);
      $("#beginbalance").prop("disabled", true);
      $("#stockbalance").prop("disabled", true);
    },
    error: function (xhr, desc, err) {
      toastr.error(err, "ERROR!");
    },
  });
}

function accountDrug(dmdcomb, dmdctr, account) {
  var data = new Object();
  data.id = "drugaccTbl";
  data.link = baseURL + "Pharmacy/getdrugList/" + dmdcomb + "/" + dmdctr;
  data.dataType = "JSON";
  data.data = { dmdcomb: dmdcomb, dmdctr: dmdctr, account: account };
  data.type = "POST";
  data.search = true;
  data.info = true;
  data.paging = true;
  data.destroy = true;
  data.columns = [
    {
      data: "dmdprdte",

      render: function (data, type, row) {
        return formatDatetime(data);
      },
    },
    { data: "lotno" },
    { data: "dmduprice" },
    {
      data: "dmselprice",
      render: function (data, type, row) {
        if (row.dmselprice == null) {
          return '<div class="text-danger">No price</div>';
        } else {
          return '<div class="text-danger">' + data + "</div>";
        }
      },
    },
    { data: "stockbal" },
    { data: "begbal" },
    { data: "expiry" },
    { data: "qtyshare" },
    { data: "serve_no" },
    { data: "serve_price" },
    { data: "dmdrem" },
    {
      data: null,
      render: function (data, type, row) {
        if (row.dmselprice == null) {
          return (
            "<div class=btn-group role=group>" +
            "<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" +
            "<i class='fa fa-th-list'></i>" +
            "</button>" +
            "<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
            "<a  class='dropdown-item' data-lotno='" +
            row.lotno +
            "' data-dmdcomb='" +
            row.dmdcomb +
            "' data-dmdsub='" +
            row.dmhdrsub +
            "' data-dmdctr='" +
            row.dmdctr +
            "' data-dmdprdte='" +
            row.dmdprdte +
            "' id='btnEditAcc' href='#'>&nbsp Edit</a>" +
            "</div>" +
            "</div>"
          );
        } else {
          return (
            "<div class=btn-group role=group>" +
            "<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" +
            "<i class='fa fa-th-list'></i>" +
            "</button>" +
            "<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
            "<a  class='dropdown-item' data-lotno='" +
            row.lotno +
            "' data-dmdcomb='" +
            row.dmdcomb +
            "' data-dmdsub='" +
            row.dmhdrsub +
            "' data-dmdctr='" +
            row.dmdctr +
            "' data-dmdprdte='" +
            row.dmdprdte +
            "' id='btnEditAcc' href='#'>&nbsp Edit</a>" +
            "<a	 class='dropdown-item'  data-serveno='" +
            row.serve_price +
            "' data-serveprice='" +
            row.serve_price +
            "'  data-deliv='" +
            row.delintkey +
            "' data-lotno='" +
            row.lotno +
            "' data-dmdcomb='" +
            row.dmdcomb +
            "' data-dmdsub='" +
            row.dmhdrsub +
            "' data-dmdctr='" +
            row.dmdctr +
            "' data-dmdprdte='" +
            row.dmdprdte +
            "'  data-stockbal='" +
            row.stockbal +
            "'   data-begbal='" +
            row.begbal +
            "' data-price='" +
            row.dmselprice +
            "'   data-form='" +
            row.unitcode +
            "'   data-uprice='" +
            row.dmduprice +
            "'  data-expiry='" +
            row.expiry +
            "'  id='btnNewPrice' href='#'>&nbsp New Price</a>" +
            "</div>" +
            "</div>"
          );
        }
      },
    },
  ];
  data.coldef = [
    {
      targets: ["_all"],
      className: "align-middle",
    },
  ];

  return Datatable(data);
}

$("#drugaccTbl").on("click", "#btnEditAcc", function (e) {
  $("#modalAddDrug").modal("show");
  var lotno = $(this).data("lotno");
  var dmdcomb = $(this).data("dmdcomb");
  var dmdctr = $(this).data("dmdctr");
  var dmsub = $(this).data("dmdsub");
  var date = $(this).data("dmdprdte");
  var stock = $(this).data("stock");
  var begbal = $(this).data("begbal");
  druginfoprice(lotno, date);
});

$("#drugaccTbl").on("click", "#btnNewPrice", function (e) {
  var lotno = $(this).data("lotno");
  var date = $(this).data("dmdprdte");

  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/druginfo",
    data: { lotno: lotno, date: date },
    success: function (data, response) {
      var obj = $.parseJSON(data);

      $("#modalNewPrice").modal("show");
      if (obj["isshared"] == "Y") {
        $("#oldprice").text("Current Price:".concat(obj["serve_price"]));
        $("#forshare").val(obj["serve_no"]);
        $("#uprice").val(obj["dmduprice"]);
        $("#newisShared").val(obj["isshared"]);
        $("#newprice").on("change", function () {
          var qty = obj["qtyshare"];
          var newshareprice = $(this).val() / qty;
          $("#shareprice").val(newshareprice);
        });
      }
      $("#newdmdcomb").val(obj["dmdcomb"]);
      $("#newdmdctr").val(obj["dmdctr"]);
      $("#newlotno").val(obj["lotno"]);
      $("#newsub").val(obj["dmhdrsub"]);
      $("#newbegbal").val(obj["begbal"]);
      $("#newstockbal").val(obj["stockbal"]);
      $("#newisShared").val(obj["isshared"]);

      $("#oldprice").text("Current Price:".concat(obj["dmselprice"]));
      $("#uprice").val(obj["dmduprice"]);
      $("#qtyshare").val(obj["qtyshare"]);
      $("#olddmdprdte").val(obj["dmdprdte"]);
      $("#forshare").val(obj["serve_no"]);
      $("#shareprice").val(obj["serve_price"]);
      $("#newformcode").val(obj["unitcode"]);
      $("#expirydate").val(obj["expiry"]);
      $("#delivintkey").val(obj["delintkey"]);
    },
  });
});

$("#drugaccTbl").on("click", "#btnDeleteAcc", function (e) {
  $("#modalDeleteAccount").modal("show");
  var lotno = $(this).data("lotno");
  var dmdcomb = $(this).data("dmdcomb");
  var dmdctr = $(this).data("dmdctr");
  var dmsub = $(this).data("dmdsub");
  var date = $(this).data("dmdprdte");
  var stock = $(this).data("stock");
  var begbal = $(this).data("begbal");
  $("#delcomb").val(dmdcomb);
  $("#delctr").val(dmdctr);
  $("#delsub").val(dmsub);
  $("#delstock").val(stock);
  $("#delbeg").val(begbal);
  $("#date").val(date);
});

function typeofCharge() {
  $("#stypeDrug").select2({
    placeholder: "Type of charge",
    allowClear: false,
    theme: "coreui",
    ajax: {
      url: baseURL + "Pharmacy/searchdrugAccount",
      dataType: "json",
      type: "POST",
      data: function (params) {
        return {
          searchdrugAccount: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.chrgcode,
            text: item.chrgdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

$("#serveno").on("change", function () {
  var sprice = $("#selling").val();
  var noserve = $("#serveno").val();
  var perserve = sprice / noserve;
  $("#priceserve").val(perserve);
});

$("#btnSearchDelivery").on("click", function () {
  var dmdcomb = $("#dmdcomb").val();
  var dmdctr = $("#dmdctr").val();
  var account = $("#dmhdrsub").val();
  getDeliv(dmdcomb, dmdctr, account);
  $("#modalDeliveryList").modal("show");
});

function getDeliv(dmdcomb, dmdctr, account) {
  var url = baseURL + "Pharmacy/getDeliv";
  var chrgTable = $("#delivDataList").DataTable({
    ajax: {
      url: url,
      type: "POST",
      data: {
        dmdcomb: dmdcomb,
        dmdctr: dmdctr,
        account: account,
      },
    },
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    select: {
      select: true,
      style: "single",
    },
    processing: true,
    serverside: true,
    oLanguage: {
      sProcessing:
        '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
    },
    destroy: true,
    info: false,
    deferLoading: 250,
    columns: [
      { data: "deldteas" }, //0
      { data: "description" },
    ],
  });
}

$("#frmNewPrice").on("submit", function (e) {
  var form = this;
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/saveNewPrice",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      $("#drugaccTbl").DataTable().ajax.reload();
      toastr.success("Record saved!", "Success!");
      $("#modalNewPrice").modal("hide");
    },
    error: function (xhr, desc, err) {
      toastr.error(err, "ERROR!");
    },
  });
  return false;
});

$(".reset").on("hidden.coreui.modal", function (event) {
  $(this).find("input,textarea,select").val("").end();
  $(this).find("checkbox,radio").prop("checked", false);
  $(this).find("radio").removeAttr("checked");
  $(this).find("input,textarea,select").removeClass("is-valid");
  $(this).find("input,textarea,select").removeClass("is-invalid");
  $(this).find("select").val("").trigger("change");
});

$("#btnAddPhoto").on("click", function () {
  $("#modalDrugPic").modal("show");
  $("#dmdcombPic").val($("#dmdcomb").val());
  $("#dmdctrPic").val($("#dmdctr").val());
  $("#baldteasofPic").val($("#baldteasof").val());
  var drugPic = $.md5(
    $("#dmdcomb").val().concat($("#dmdctr").val(), $("#baldteasof").val())
  );
  $("#drugcurPic").attr(
    "src",
    baseURL +
      "assets/drug_photo/" +
      drugPic +
      ".jpg?timestamp=" +
      new Date().getTime()
  );
});

$("#formDrugPic").submit("click", function () {
  $.ajax({
    type: "POST",
    url: baseURL + "Pharmacy/do_upload",
    data: new FormData(this),
    processData: false,
    contentType: false,
    cache: false,
    dataType: "json",
    async: false,
    success: function (data, response) {
      console.log(data["file_name"]);
      $("#modalDrugPic").modal("hide");
      toastr.success("Upload success", "Success");
      $("#drugPhoto").attr(
        "src",
        "assets/drug_photo/" +
          data["file_name"] +
          "?timestamp=" +
          new Date().getTime()
      );
    },
  });
  return false;
});

$("#shared").on("change", function () {
  var shared = $(this).is(":checked");
  if (shared == true) {
    $("#serveno").prop("disabled", false);
    $("#priceserve").prop("disabled", false);
    $("#isshared").val("Y");
  } else {
    $("#serveno").prop("disabled", true);
    $("#priceserve").prop("disabled", true);
    $("#serveno").val("");
    $("#priceserve").val("");
    $("#isshared").val("N");
  }
});


$('#btnDrug').on('click',function(e){
	drugData();
	$("#modaldrugData").modal('show');
}); 