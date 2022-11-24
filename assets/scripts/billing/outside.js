function outside(enccode, hpercode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  //var data = new Object();
  var ouTable = $("#chargesOutside").DataTable({
    destroy: true,
    ajax: baseURL + "Billing/outsideList/" + enctr + "/" + hpercode,
    columns: [
      { data: "pcchrgdte" },
      { data: "pcchrgcod" },
      { data: "itemdesc" },
      { data: "pchrgqty" },
      { data: "pchrgup" },
      { data: "amount" },
      {
        data: null,
        defaultContent: "",
        orderable: false,
        searchable: false,
        render: function (data, type, row) {
          return (
            "<div class='btn-group btn-sm'>" +
            "<button type='button' class='btn btn-outline-success  btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>" +
            "<span class='caret'></span>" +
            "<span class='sr-only'>Toggle Dropdown</span>" +
            "</button>" +
            "<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>" +
            "<a href='javascript:void(0);' class='dropdown-item' id='btnout_Edit' data-enccode='" +
            data.enccode +
            "' data-pcchrgcod='" +
            data.pcchrgcod +
            "' data-chargcode='" +
            data.chargcode +
            "' data-itemcode='" +
            data.itemcode +
            "' data-itemdesc='" +
            data.itemdesc +
            "'><i class='fa fa-edit'></i>&nbsp Edit</a>" +
            "<a href='javascript:void(0);' class='dropdown-item' id='btnout_Delete' data-enccode='" +
            data.enccode +
            "' data-pcchrgcod='" +
            data.pcchrgcod +
            "' data-chargcode='" +
            data.chargcode +
            "' data-itemcode='" +
            data.itemcode +
            "' data-itemdesc='" +
            data.itemdesc +
            "'><i class='fa fa-trash'></i>&nbsp Delete</a>" +
            "</div></div>"
          );
        },
      },
    ],
    columnDefs: [
      {
        targets: 0,
        className: "chargeDateTime",
      },
      {
        targets: 3,
        className: "text-right chargeQuantity",
      },
      {
        targets: 4,
        className: "text-right chargePrice",
      },
      {
        targets: 5,
        className: "text-right chargeAmount",
      },
    ],
  });

  // ouTable.on("click", "#btnout_Edit", function () {
  //   var enctr = encodeURIComponent(encodeURIComponent($(this).data("enccode")));
  //   var slipno = $(this).data("slip");
  //   $("div[id$=_outacc]").load(baseURL + "Billing/viewbill", function () {
  //     $("#chrgslip").val(slipno);
  //     $("#chrgformIden").val("update");
  //     $("#chrgEnccode").val($.session.get("enccode"));
  //     $("#chrgHpercode").val($.session.get("hpercode"));
  //     $.get(
  //       baseURL + "PatientRecords/caseInformation/" + URLencode(enccode),
  //       function (data) {
  //         var acctno = $.parseJSON(data);
  //         $("#acctno").val($.trim(acctno["accountno"]));
  //       }
  //     );

  //     $.get(
  //       baseURL + "Billing/chargeSlipout/" + URLencode(slipno) + "/" + enctr,
  //       function (data) {
  //         var jsonObj = $.parseJSON(data);
  //         $("#chrgdate").val(setTimeLocale(jsonObj[0]["date"]));
  //         $.each(jsonObj, function (i, d) {
  //           chargesPat.row
  //             .add([
  //               '<a class="text-danger align-middle" id="btnremove" ><i class="fa fa-remove fa-2x"></i></a>',
  //               '<input type="hidden" class="form-control form-control-lg" readonly  name="row[]" id="row">',
  //               "<small>" + d["chargedesc"] + "</small>",
  //               '<input type="number" class="form-control form-control-lg" readonly value=' +
  //                 d["chargeup"] +
  //                 '  name="price[]" id="price">',
  //               '<input type="number" class="form-control form-control-lg " min="1" max="999" value=' +
  //                 d["chargeqty"] +
  //                 ' name="qty[]" id="qty">',
  //               '<input type="number" class="form-control form-control-lg" readonly value=' +
  //                 d["chargeamount"] +
  //                 ' name ="amnt[]" id="amnt">',
  //               '<input type="text" class="form-control form-control-lg" readonly value=' +
  //                 d["chargeunits"] +
  //                 ' name ="oum[]" id="oum">',
  //               '<input type="text" class="form-control form-control-lg" readonly value=' +
  //                 d["chargcode"] +
  //                 ' name ="chrgcode[]" id="chrgcode">',
  //               '<input type="text" class="form-control form-control-lg" readonly value=' +
  //                 d["itemcode"] +
  //                 ' name ="itemcode[]" id="itemcode">',
  //               '<input type="text" class="form-control form-control-lg" readonly value=' +
  //                 d["lot"] +
  //                 ' name ="lotno[]" id="lotno">',
  //               '<input type="text" class="form-control form-control-lg" readonly value=' +
  //                 d["ctr"] +
  //                 ' name ="ctr[]" id="ctr">',
  //               '<input type="hidden" class="form-control form-control-lg" readonly  value =' +
  //                 d["srcchrg"] +
  //                 '   name ="center[]" id="center">',
  //             ])
  //             .draw();
  //         });
  //         $("#modaloutCharge").modal({ backdrop: "static" });
  //       }
  //     );
  //   });
  // });
}

$("#chargesOutside").on("click", "#btnout_Delete", function () {
  var chrgOutSlipNo = $(this).data("pcchrgcod");
  var chrgOutCode = $(this).data("chargcode");
  var chrgOutItemCode = $(this).data("itemcode");
  var chrgOutEnccode = $(this).data("enccode");
  var chrgOutDesc = $(this).data("itemdesc");
  $("#chrgOutDesc").val(chrgOutDesc);
  $("#chrgOutSlipNo").val(chrgOutSlipNo);
  $("#chrgOutCode").val(chrgOutCode);
  $("#chrgOutItemCode").val(chrgOutItemCode);
  $("#chrgOutEnccode").val(chrgOutEnccode);
  $("#chrgOutDelete").val("delete");
  $("#ModalOutChargesDelete").modal({ backdrop: "static" });
  $("#ModalOutChargesDelete").modal("show");
});

$("#chargesOutside").on("click", "#btnout_Edit", function () {
  const chrgOutSlipNo = $(this).data("pcchrgcod");
  const chrgOutCode = $(this).data("chargcode");
  const chrgOutItemCode = $(this).data("itemcode");
  const chrgOutEnccode = $(this).data("enccode");
  const chrgOutDesc = $(this).data("itemdesc");
  $("#editChargeOutDesc").text(chrgOutDesc);
  $("#editOldChargeOutSlipNumber").val(chrgOutSlipNo);
  $("#editChargeOutSlipNumber").val(chrgOutSlipNo);
  $("#editChargeOutCode").val(chrgOutCode);
  $("#editChargeOutItemCode").val(chrgOutItemCode);
  $("#editChargeOutEnccode").val(chrgOutEnccode);

  const thisRow = $(this).closest("tr");

  const chargeOutDateTime = thisRow.find(".chargeDateTime").text();
  $("#editChargeOutDateLog").val(setTimeLocale(chargeOutDateTime));

  const chargeOutQuantity = thisRow.find(".chargeQuantity").text();
  $("#editChargeOutQty").val(chargeOutQuantity);

  const chargeOutPrice = thisRow.find(".chargePrice").text();
  $("#editChargeOutPrice").val(chargeOutPrice);

  const chargeOutAmount = thisRow.find(".chargeAmount").text();
  $("#editChargeOutAmount").html(chargeOutAmount);

  $("#modalEditOutCharge").modal({ backdrop: "static" });
  $("#modalEditOutCharge").modal("show");
});

$("#editChargeOutQty").change(function () {
  if ($(this).val() == 0 || $(this).val() == "") {
    if ($("#quantityError").length > 0) {
      return;
    }
    $(this).addClass("is-invalid");
    var errorElement = $('<div id="quantityError">Quantity is required!</div>');
    errorElement.addClass("invalid-feedback");
    errorElement.insertAfter($(this));
  } else {
    $("#quantityError").remove();
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
  }

  var editChargeQuantity = $(this).val();
  var editChargePrice = $("#editChargeOutPrice").val();
  var editChargeAmount =
    parseFloat(editChargeQuantity) * parseFloat(editChargePrice);
  if (editChargeAmount) {
    //$("#editChargeAmount").html(editChargeAmount.toLocaleString());
    $("#editChargeOutAmount").html(numFormatter.format(editChargeAmount));
  } else {
    $("#editChargeOutAmount").html("");
  }
});

$("#editChargeOutPrice").change(function () {
  if ($(this).val() == 0 || $(this).val() == "") {
    if ($("#editUnitPriceError").length > 0) {
      return;
    }
    $(this).addClass("is-invalid");
    var errorElement = $(
      '<div id="editUnitPriceError">Unit Price is required!</div>'
    );
    errorElement.addClass("invalid-feedback");
    errorElement.insertAfter($(this));
  } else {
    $("#editUnitPriceError").remove();
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
  }

  var editChargeQuantity = $("#editChargeOutQty").val();
  var editChargePrice = $(this).val();
  var editChargeAmount =
    parseFloat(editChargeQuantity) * parseFloat(editChargePrice);
  if (editChargeAmount) {
    //$("#editChargeAmount").html(editChargeAmount.toLocaleString());
    $("#editChargeOutAmount").html(numFormatter.format(editChargeAmount));
  } else {
    $("#editChargeOutAmount").html("");
  }
});

$("#frmDeleteOutCharge").on("submit", function (event) {
  var form = this;
  $.ajax({
    type: "POST",
    dataType: "JSON",
    url: baseURL + "Billing/deleteOutCharge",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#ModalOutChargesDelete").modal("hide");
      outside($.session.get("enccode"), $.session.get("hpercode"));
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return false;
});

$("#frmEditOutCharge").submit("click", function (event) {
  event.preventDefault();
  let hasError = false;
  let chargedesc = "";
  var chrgdate;
  var unit_price;
  var qty;
  var amount;
  var item;
  var center;

  var enccode = $("#editChargeOutEnccode").val();
  var chrgdate = $("#editChargeOutDateLog").val();
  var slipno = $("#editChargeOutSlipNumber").val();
  const referenceno = $("#editOldChargeOutSlipNumber").val();

  if (chrgdate == "") {
    $("#chargeDateError").remove();
    $("#chrgdate").addClass("is-invalid");
    $("#chrgdate").after(
      '<div class="invalid-feedback" id="chargeDateError">Charge Date is required!</div>'
    );
    return;
  } else {
    $("#chargeDateError").remove();
    $("#chrgdate").removeClass("is-invalid");
    $("#chrgdate").addClass("is-valid");
  }

  if (slipno == "") {
    $("#chrgslip").next("#chrgslipError").remove();
    $("#chrgslip").removeClass("is-valid");
    $("#chrgslip").addClass("is-invalid");
    $("#chrgslip").after(
      '<div class="invalid-feedback" id="chrgslipError">Reference No. is required!</div>'
    );
    return;
  } else {
    $("#chrgslip").next("#chrgslipError").remove();
    $("#chrgslip").removeClass("is-invalid");
    $("#chrgslip").addClass("is-valid");
    $("#chrgslip").after(
      '<div class="invalid-feedback" id="chrgslipError">Reference No. is required!</div>'
    );
  }

  var chargesArray = [];

  var charges = {};
  unit_price = $("#editChargeOutPrice").val();
  var unit_price_element = $("#editChargeOutPrice");

  if (unit_price == 0) {
    $(unit_price_element).next("#unitPriceError").remove();
    $(unit_price_element).removeClass("is-valid");
    $(unit_price_element).addClass("is-invalid");
    $(unit_price_element).after(
      '<div class="invalid-feedback" id="unitPriceError">Unit Price is required!</div>'
    );
    hasError = true;
  } else {
    $(unit_price_element).next("#unitPriceError").remove();
    $(unit_price_element).removeClass("is-invalid");
    $(unit_price_element).addClass("is-valid");
    $(unit_price_element).after(
      '<div class="invalid-feedback" id="unitPriceError">Unit Price is required!</div>'
    );
  }

  qty = $("#editChargeOutQty").val();
  var qty_element = $("#editChargeOutQty");

  if (qty == 0) {
    $(qty_element).next("#qtyError").remove();
    $(qty_element).removeClass("is-valid");
    $(qty_element).addClass("is-invalid");
    $(qty_element).after(
      '<div class="invalid-feedback" id="qtyError">Quantity is required!</div>'
    );
    hasError = true;
  } else {
    $(qty_element).next("#qtyError").remove();
    $(qty_element).removeClass("is-invalid");
    $(qty_element).addClass("is-valid");
    $(qty_element).after(
      '<div class="invalid-feedback" id="qtyError">Quantity is required!</div>'
    );
  }

  amount = $("#editChargeOutAmount").text();
  item = $("#editChargeOutItemCode").val();
  center = $("#editChargeOutCode").val();
  chargedesc = $("#editChargeOutDesc").text();

  charges.enccode = enccode;
  charges.hpercode = hpercode;
  charges.pcchrgdte = chrgdate;
  charges.pcchrgcod = slipno;
  charges.chargcode = center;
  charges.pchrgqty = qty;
  charges.pchrgup = unit_price;
  charges.pcchrgamt = amount;
  charges.itemcode = item;
  charges.chargedesc = chargedesc;
  chargesArray.push(charges);

  if (chargesArray.length == 0) return;
  if (hasError) return;

  let charges_JSONString = JSON.stringify(chargesArray);
  $.ajax({
    type: "POST",
    data: {
      charges: charges_JSONString,
      action: "update",
      referenceno: referenceno,
    },
    dataType: "JSON",
    url: baseURL + "Billing/saveOutside",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#modalEditOutCharge").modal("hide");
      outside($.session.get("enccode"), $.session.get("hpercode"));
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return false;
});

$("#frmoutCharge").submit("click", function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  var row = formData.getAll("row[]");
  var header = "";
  var details = "";
  var url = "";
  var totqty = 0;
  let hasError = false;
  let chargedesc = "";
  var resp;
  var fname;
  var mname;
  var lname;
  var chrgdate;
  var alltotal;
  var unit_price;
  var qty;
  var amount;
  var uom;
  var chrgcod;
  var item;
  var lot;
  var ctr;
  var intkey;
  var i;
  var center;

  var enccode = $("#chrgEnccode").val();
  var hpercode = $("#chrgHpercode").val();
  var acctno = $("#acctno").val();
  var chrgdate = $("#chrgdate").val();
  var slipno = $("#chrgslip").val();
  var action = $("#chrgformIden").val();

  if (chrgdate == "") {
    $("#chargeDateError").remove();
    $("#chrgdate").addClass("is-invalid");
    $("#chrgdate").after(
      '<div class="invalid-feedback" id="chargeDateError">Charge Date is required!</div>'
    );
    return;
  } else {
    $("#chargeDateError").remove();
    $("#chrgdate").removeClass("is-invalid");
    $("#chrgdate").addClass("is-valid");
  }

  if (slipno == "") {
    $("#chrgslip").next("#chrgslipError").remove();
    $("#chrgslip").removeClass("is-valid");
    $("#chrgslip").addClass("is-invalid");
    $("#chrgslip").after(
      '<div class="invalid-feedback" id="chrgslipError">Reference No. is required!</div>'
    );
    return;
  } else {
    $("#chrgslip").next("#chrgslipError").remove();
    $("#chrgslip").removeClass("is-invalid");
    $("#chrgslip").addClass("is-valid");
    $("#chrgslip").after(
      '<div class="invalid-feedback" id="chrgslipError">Reference No. is required!</div>'
    );
  }

  var chargesArray = [];

  for (i = 0; i < row.length; i++) {
    var charges = {};
    unit_price = $(chargesOutpat.cell(row[i], 3).node()).find("input").val();
    var unit_price_element = $(chargesOutpat.cell(row[i], 3).node())
      .find("input")
      .get(0);

    if (unit_price == 0) {
      $(unit_price_element).next("#unitPriceError").remove();
      $(unit_price_element).removeClass("is-valid");
      $(unit_price_element).addClass("is-invalid");
      $(unit_price_element).after(
        '<div class="invalid-feedback" id="unitPriceError">Unit Price is required!</div>'
      );
      hasError = true;
    } else {
      $(unit_price_element).next("#unitPriceError").remove();
      $(unit_price_element).removeClass("is-invalid");
      $(unit_price_element).addClass("is-valid");
      $(unit_price_element).after(
        '<div class="invalid-feedback" id="unitPriceError">Unit Price is required!</div>'
      );
    }

    qty = $(chargesOutpat.cell(row[i], 4).node()).find("input").val();
    var qty_element = $(chargesOutpat.cell(row[i], 4).node())
      .find("input")
      .get(0);

    if (qty == 0) {
      $(qty_element).next("#qtyError").remove();
      $(qty_element).removeClass("is-valid");
      $(qty_element).addClass("is-invalid");
      $(qty_element).after(
        '<div class="invalid-feedback" id="qtyError">Quantity is required!</div>'
      );
      hasError = true;
    } else {
      $(qty_element).next("#qtyError").remove();
      $(qty_element).removeClass("is-invalid");
      $(qty_element).addClass("is-valid");
      $(qty_element).after(
        '<div class="invalid-feedback" id="qtyError">Quantity is required!</div>'
      );
    }

    amount = $(chargesOutpat.cell(row[i], 5).node()).find("input").val();
    uom = $(chargesOutpat.cell(row[i], 6).node()).find("input").val();
    chrgcod = $(chargesOutpat.cell(row[i], 7).node()).find("input").val();
    item = $(chargesOutpat.cell(row[i], 8).node()).find("input").val();
    lot = $(chargesOutpat.cell(row[i], 9).node()).find("input").val();
    ctr = $(chargesOutpat.cell(row[i], 10).node()).find("input").val();
    //center = $(chargesOutpat.cell(row[i], 11).node()).find("input").val();
    center = $(chargesOutpat.cell(row[i], 11).node()).find("input").val(); //$("#costcntr").val();

    chargedesc = $(chargesOutpat.cell(row[i], 2).node()).text();

    var chrgdate = $("#chrgdate").val();
    var slipno = $("#chrgslip").val();

    charges.enccode = enccode;
    charges.hpercode = hpercode;
    charges.pcchrgdte = chrgdate;
    charges.pcchrgcod = slipno;
    charges.chargcode = center;
    charges.uomcode = uom;
    charges.pchrgqty = qty;
    charges.pchrgup = unit_price;
    charges.pcchrgamt = amount;
    charges.acctno = acctno;
    charges.itemcode = item;
    charges.chargedesc = chargedesc;
    chargesArray.push(charges);

    var dataString =
      "enccode=" +
      enccode +
      "&hpercode=" +
      hpercode +
      "&chrgdate=" +
      chrgdate +
      "&chrgslip=" +
      slipno +
      "&code=" +
      chrgcod +
      "&uomcode=" +
      uom +
      "&pchrgqty=" +
      qty +
      "&pchrgup=" +
      unit_price +
      "&pcchrgamt=" +
      amount +
      "&srcchrg=" +
      center +
      "&acctno=" +
      acctno +
      "&row=" +
      row.length +
      "&lot=" +
      lot +
      "&itemcode=" +
      item +
      "&ctr=" +
      ctr +
      "&action=" +
      action;

    // $.ajax({
    //   type: "POST",
    //   data: dataString,
    //   dataType: "JSON",
    //   url: baseURL + "Billing/saveOutside",
    //   success: function (data, response) {
    //     $("#modaloutCharge").modal("hide");
    //     ouTable.ajax.reload();
    //     toastr.success("Charges saved!", "Alert");
    //   },
    //   error: function (data, response) {
    //     console.log(data);
    //     console.log(response);
    //   },
    // });
  }
  if (chargesArray.length == 0) return;
  if (hasError) return;

  let charges_JSONString = JSON.stringify(chargesArray);
  $.ajax({
    type: "POST",
    data: { charges: charges_JSONString, action: action },
    dataType: "JSON",
    url: baseURL + "Billing/saveOutside",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#modaloutCharge").modal("hide");
      outside($.session.get("enccode"), $.session.get("hpercode")); //loadCharges($.session.get("enccode"), $.session.get("hpercode"));
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return false;
});

$("#btnaddOutside").on("click", function () {
  //$("div[id$=_outacc]").load(baseURL + "Billing/viewbill", function () {
  $("#chargesliplabel").html("Reference No.:");
  $("input[id^='chrgslip']").prop("readonly", false);
  $("input[id^='chrgslip']").prop("placeholder", "Reference No.");
  $("input[id^='chrgformIden']").val("insert");
  $("input[id^='chrgEnccode']").val($.session.get("enccode"));
  $("input[id^='chrgHpercode']").val($.session.get("hpercode"));
  chargesOutpat.clear();
  $("#chargesList").DataTable({
    searching: false,
    retrieve: true,
    info: false,
    ordering: false,
    destroy: true,
    deferLoading: 350,
    columnDefs: [
      {
        width: "2%",
        className: "align-middle text-center",
        targets: [0],
      },
      {
        visible: true,
        targets: [0, 1, 2, 3, 4, 5],
      },
      {
        visible: false,
        targets: [6, 7, 8, 9, 10],
      },
      {
        width: "30%",
        className: "align-middle",
        targets: [1, 2],
      },
      {
        className: "text-center",
        targets: [4],
      },
    ],
    rowCallback: function (row, data, index) {
      var price = $("#price", row).val();
      var qty = $("#qty", row).val();
      var total = price * qty;
      $("#amnt", row).val(total.toFixed(2));
      $("#row", row).val(index);
    },
    footerCallback: function (row, data, start, end, display) {
      var api = this.api(),
        data;
      CalculateTableSummary(this);
      return;
    },
  });
  $.get(
    baseURL +
      "PatientRecords/caseInformation/" +
      URLencode($.session.get("enccode")),
    function (data) {
      var acctno = $.parseJSON(data);
      $("input[id^='acctno']").val($.trim(acctno["accountno"]));
      $("#modaloutCharge").modal({ backdrop: "static" });
    }
  );
  //});
});

$("#btnOcharge_add").on("click", function () {
  var costcenter = $("select[id^='costcntr']").val();
  const chrgdate = $("#chrgdate").val();
  if ($("#chrgdate").val() == "") {
    $("#chargeDateError").remove();
    $("#chrgdate").addClass("is-invalid");
    $("#chrgdate").after(
      '<div class="invalid-feedback" id="chargeDateError">Charge Date is required!</div>'
    );
    return;
  } else {
    $("#chargeDateError").remove();
    $("#chrgdate").removeClass("is-invalid");
    $("#chrgdate").addClass("is-valid");
  }
  if (costcenter == "") {
    toastr.error("Please select Type of Charge first!", "Alert");
    $("#typeOfChargeError").remove();
    $("select[id^='costcntr']").addClass("is-invalid");
    $("select[id^='costcntr']").after(
      '<div class="invalid-feedback" id="typeOfChargeError">Type of Charge is required!</div>'
    );
    return;
  } else {
    //seltype(costcenter);
    $("#typeOfChargeError").remove();
    $("select[id^='costcntr']").removeClass("is-invalid");
    $("select[id^='costcntr']").addClass("is-valid");
    $("#modalchargeType").modal({ backdrop: "static" });
    //getTypeOfClarges(costcenter);
    chargetableout(costcenter, chrgdate);
  }
});

var chargesOutpat = $("#chargeOutlist").DataTable({
  searching: false,
  retrieve: true,
  info: false,
  ordering: false,
  destroy: true,
  deferLoading: 350,
  columnDefs: [
    {
      width: "2%",
      className: "align-middle text-center",
      targets: [0],
    },
    {
      visible: true,
      targets: [0, 1, 2, 3, 4, 5],
    },
    {
      visible: false,
      targets: [6, 7, 8, 9, 10],
    },
    {
      width: "30%",
      className: "align-middle",
      targets: [1, 2],
    },
    {
      className: "text-center",
      targets: [4],
    },
  ],
  rowCallback: function (row, data, index) {
    var price = $("#price", row).val();
    var qty = $("#qty", row).val();
    var total = price * qty;
    $("#amnt", row).val(total.toFixed(2));
    $("#row", row).val(index);
  },
  footerCallback: function (row, data, start, end, display) {
    var api = this.api(),
      data;
    CalculateTableSummary(this);
    return;
  },
});

function chargetableout(type, chargedate) {
  if ($.fn.DataTable.isDataTable("#chargeOut")) {
    $("#chargeOut").DataTable().clear();
    $("#chargeOut").DataTable().destroy();
  }
  var chrgTable = $("#chargeOut").DataTable({
    ajax: baseURL + "Charges/chargesTable/" + type + "/" + chargedate,
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    select: {
      select: true,
      style: "multi",
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
      { data: "chrgcode" }, //0
      { data: "itemcode" }, //1
      {
        data: "descs",
        render: function (data, type, row) {
          return data;
        },
      }, //2
      { data: "uom" }, //3
      { data: "amnt" }, //4
      { data: "lot" }, //5
      { data: "available" }, //6
      { data: "expiry" }, //7
      { data: "ctr" }, //8
    ],
    columnDefs: [
      {
        targets: [0, 1, 3, 8],
        visible: false,
      },
    ],
  });
  $("#chargeOut").unbind();
  chrgTable.on("click", "tbody>tr", function () {
    $(this).toggleClass("table-success selected");
  });
  $("#selectChargeout").click(function () {
    var rowData = chrgTable.rows(".selected").data();
    $.each(rowData, function (i, d) {
      let itemcode = encodeURIComponent(d["itemcode"]);
      let chargeCode = $("#costcntr").val();
      if (chargeCode == "DRUGS") {
        itemcode = itemcode + d["ctr"];
      }
      chargesOutpat.row
        .add([
          '<a class="text-danger align-middle" id="btnremove" ><i class="fa fa-remove fa-2x"></i></a>',
          '<input type="hidden" class="form-control form-control-md" readonly  name="row[]" id="row">',
          d["descs"],
          '<input type="number" class="form-control form-control-md" value=' +
            d["amnt"] +
            '  name="price[]" id="price">',
          '<input type="number" class="form-control form-control-md " min="1" max="999" value=1 name="qty[]" id="qty">',
          '<input type="number" class="form-control form-control-md" readonly value=' +
            d["amnt"] +
            ' name ="amnt[]" id="amnt">',
          '<input type="text" class="form-control form-control-md" readonly value=' +
            d["uom"] +
            ' name ="oum[]" id="oum">',
          '<input type="text" class="form-control form-control-md" readonly value=' +
            d["chrgcode"] +
            ' name ="chrgcode[]" id="chrgcode">',
          '<input type="text" class="form-control form-control-md" readonly value=' +
            itemcode +
            ' name ="itemcode[]" id="itemcode">',
          '<input type="text" class="form-control form-control-md" readonly value=' +
            d["lot"] +
            ' name ="lotno[]" id="lotno">',
          '<input type="text" class="form-control form-control-md" readonly value=' +
            d["ctr"] +
            ' name ="ctr[]" id="ctr">',
          '<input type="hidden" class="form-control form-control-md" readonly  value =' +
            chargeCode +
            '   name ="center[]" id="center">',
        ])
        .draw(true);
      chargesOutpat.page.len(10).draw();
    });
    $("#modalchargeType").modal("hide");
    chrgTable.rows(".selected").remove().draw();
  });
}

function seltype(costcent) {
  $("#chrgtype").select2({
    allowClear: true,
    placeholder: "Select Charge/s",
    theme: "coreui",
    ajax: {
      url: baseURL + "Charges/chargesTable/" + costcent,
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchCharges: params.term,
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

  $("#chrgtype").on("change", function () {
    var data = $("#chrgtype option:selected", this);
    if (this.value) {
      chargetableout(this.value);
    } else {
      return false;
    }
  });
}

$("#chargeOutlist tbody").on("click", "#btnremove", function () {
  chargesOutpat.row($(this).parents("tr")).remove().draw();
});

$("#chargeOutlist tbody").on("change", "#price", function () {
  var price = $("#price", $(this).parents("tr")).val();
  var qty = $("#qty", $(this).parents("tr")).val();
  var total = price * qty;

  if ($(this).val() == 0) {
    $(this).next("#unitPriceError").remove();
    $(this).removeClass("is-valid");
    $(this).addClass("is-invalid");
    $(this).after(
      '<div class="invalid-feedback" id="unitPriceError">Unit Price is required!</div>'
    );
  } else {
    $(this).next("#unitPriceError").remove();
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
    $(this).after(
      '<div class="invalid-feedback" id="unitPriceError">Unit Price is required!</div>'
    );
  }

  $("#amnt", $(this).parents("tr")).val(total.toFixed(2));

  $("#chargeOutlist")
    .DataTable()
    .columns(5)
    .each(function (index) {
      var column = $("#chargeOutlist").DataTable().column(index);
      sum = column.nodes().reduce(function (a, b) {
        var a1 = parseInt(a);
        var b1 = parseInt($("input", b).val());
        return a1 + b1;
      }, 0);

      if ($(column.footer()).hasClass("Gtotal")) {
        var ada = $(column.footer()).text(sum.toFixed(2));
        $("#totalAll").val(sum.toFixed(2));
      }
    });
});

$("#chargeOutlist tbody").on("change", "#qty", function () {
  var price = $("#price", $(this).parents("tr")).val();
  var qty = $("#qty", $(this).parents("tr")).val();
  var total = price * qty;
  if ($(this).val() == 0) {
    $(this).next("#qtyError").remove();
    $(this).removeClass("is-valid");
    $(this).addClass("is-invalid");
    $(this).after(
      '<div class="invalid-feedback" id="qtyError">Quantity is required!</div>'
    );
  } else {
    $(this).next("#qtyError").remove();
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
    $(this).after(
      '<div class="invalid-feedback" id="qtyError">Quantity is required!</div>'
    );
  }

  $("#amnt", $(this).parents("tr")).val(total.toFixed(2));

  $("#chargeOutlist")
    .DataTable()
    .columns(5)
    .each(function (index) {
      var column = $("#chargeOutlist").DataTable().column(index);
      sum = column.nodes().reduce(function (a, b) {
        var a1 = parseInt(a);
        var b1 = parseInt($("input", b).val());
        return a1 + b1;
      }, 0);

      if ($(column.footer()).hasClass("Gtotal")) {
        var ada = $(column.footer()).text(sum.toFixed(2));
        $("#totalAll").val(sum.toFixed(2));
      }
    });
});
