var chrgTable = null;
$(document).ready(function () {
  if (Module == "billing") {
    if (
      $.session.get("hpercode") !== undefined &&
      $.session.get("enccode") !== undefined
    ) {
      initBilling($.session.get("enccode"), $.session.get("hpercode"));
    } else {
      $("#PatSearch").modal({ backdrop: "static" });
      $("#PatientImage").prop("src", "assets/img/avatars/none.png");
    }
  }
});

$("#btnCharge_add").on("click", function () {
  switch (Module) {
    case "pharmacy":
      $("div[id$=_acct]").load(baseURL + "Billing/viewwlkin", function () {
        $.get(baseURL + "Pharmacy/genChargeSlipw/" + null, function (data) {
          $("#chrgslip").val($.trim(data));
        });
        $("#costcntr").prop("readonly", true);
        $("#costcntr option[value='" + "PHARM" + "']").prop("selected", true);
        $("#ModalNewCharge_modal").modal({ backdrop: "static" });
      });
      break;
    case "billing":
      $("div[id$=_acct]").load(baseURL + "Billing/viewbill", function () {
        $("#chrgslip").val(generatechargeslip());
        $("#chrgformIden").val("insert");
        $("#chrgEnccode").val($.session.get("enccode"));
        $("#chrgHpercode").val($.session.get("hpercode"));
        chargesPat.clear().draw();
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
            $("#acctno").val($.trim(acctno["accountno"]));
            $("#ModalNewCharge_modal").modal({ backdrop: "static" });
          }
        );
      });
  }
});

$("#btnCharges_add").on("click", function () {
  if (Module == "pharmacy") {
    $("div[id^='Modal_typeCharge']").modal({ backdrop: "static", show: true });
    SelTypeofCharge("PHARM");
  } else if (Module == "billing") {
    if ($("#chrgdate").val() == "") {
      $("#chargeDateError").remove();
      $("#chrgdate").addClass("is-invalid");
      $("#chrgdate").after(
        '<div class="invalid-feedback" id="chargeDateError">Charge Date is required!</div>'
      );
      return;
    } else {
      const admdate = $.session.get("admdate");
      const disdate = $.session.get("disdate");
      if (Date.parse(admdate) > Date.parse($("#chrgdate").val())) {
        $("#chargeDateError").remove();
        $("#chrgdate").addClass("is-invalid");
        $("#chrgdate").after(
          '<div class="invalid-feedback" id="chargeDateError">Charged Date must be greater than encounter date!</div>'
        );
        return;
      }
      if (disdate != "null" && disdate != null && disdate != "") {
        if (Date.parse(disdate) < Date.parse($("#chrgdate").val())) {
          $("#chargeDateError").remove();
          $("#chrgdate").addClass("is-invalid");
          $("#chrgdate").after(
            '<div class="invalid-feedback" id="chargeDateError">Charged Date must be less than discharged date!</div>'
          );
          return;
        }
      }
      $("#chargeDateError").remove();
      $("#chrgdate").removeClass("is-invalid");
      $("#chrgdate").addClass("is-valid");
    }
    var cc = $("select[id^='costcntr']").val();
    if (cc == "") {
      toastr.error("Please select cost center first!", "Alert");
    } else {
      SelTypeofCharge(cc);
      $("div[id$='Modal_typeCharge']").modal({ backdrop: "static" });
    }
  }
});

$("div[id^='Modal_typeCharge']").on("show.coreui.modal", function (event) {
  $("#chargesTable").DataTable().destroy();
  $("#chargesTable tbody").empty();
  $('[name $="_chrg"]').val("").trigger("change");
});

var chargesPat = $("#chargesList").DataTable({
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

function chargeTable(type) {
  if ($.fn.DataTable.isDataTable("#chargesTable")) {
    $("#chargesTable").DataTable().clear();
    $("#chargesTable").DataTable().destroy();
  }
  chrgTable = $("#chargesTable").DataTable({
    ajax:
      baseURL +
      "Charges/byChargesTable/" +
      type +
      "/" +
      $("#chrgdate").val() +
      "/" +
      $("#costcntr").val(),
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

  $("#chargesTable").unbind();
  chrgTable.on("click", "tbody>tr", function () {
    $(this).toggleClass("table-success selected");
  });
}

$("#selectCharge").click(function () {
  var typechrge_chrg = $("#typechrge_chrg").val();
  if (typechrge_chrg == null) {
    toastr.error("Invalid Type of Charge!", "Error");
    return;
  }
  var rowData = chrgTable.rows(".selected").data();
  $.each(rowData, function (i, d) {
    var itemcode = encodeURIComponent(d["itemcode"]);
    chargesPat.row
      .add([
        '<a class="text-danger align-middle" id="btnremove" ><i class="fa fa-remove fa-2x"></i></a>',
        '<input type="hidden" class="form-control form-control-lg" readonly  name="row[]" id="row">',
        d["descs"],
        //'<input type="number" class="form-control form-control-lg" readonly value='+d['amnt']+'  name="price[]" id="price">',
        '<input type="number" class="form-control form-control-lg chargePrice" value=' +
          d["amnt"] +
          ' step="0.1" name="price[]" id="price">',
        '<input type="number" class="form-control form-control-lg chargeQuantity" min="1" max="999" value=1 name="qty[]" id="qty">',
        '<input type="number" class="form-control form-control-lg" readonly value=' +
          d["amnt"] +
          ' name ="amnt[]" id="amnt">',
        '<input type="text" class="form-control form-control-lg" readonly value=' +
          d["uom"] +
          ' name ="oum[]" id="oum">',
        //'<input type="text" class="form-control form-control-lg" readonly value='+d['chrgcode']+' name ="chrgcode[]" id="chrgcode">',
        '<input type="text" class="form-control form-control-lg" readonly value=' +
          typechrge_chrg +
          ' name ="chrgcode[]" id="chrgcode">',
        '<input type="text" class="form-control form-control-lg" readonly value=' +
          itemcode +
          ' name ="itemcode[]" id="itemcode">',
        '<input type="text" class="form-control form-control-lg" readonly value=' +
          d["lot"] +
          ' name ="lotno[]" id="lotno">',
        '<input type="text" class="form-control form-control-lg" readonly value=' +
          d["ctr"] +
          ' name ="ctr[]" id="ctr">',
        '<input type="hidden" class="form-control form-control-lg" readonly  value =' +
          $("#costcntr").val() +
          '   name ="center[]" id="center">',
      ])
      .draw(true);
    chargesPat.page.len(10).draw();
  });
  $("#Modal_typeCharge").modal("hide");
  chrgTable.rows(".selected").remove().draw();
});

$("#chargesTbl").on("click", "#btnChargeEdit", function () {
  var enctr = encodeURIComponent(encodeURIComponent($(this).data("enccode")));
  var slipno = $(this).data("slip");

  switch (Module) {
    case "pharmacy":
      $("div[id$=_acct]").load(baseURL + "Billing/viewwlkin", function () {
        $.get(baseURL + "Pharmacy/genChargeSlipw/" + null, function (data) {
          $("#chrgslip").val($.trim(data));
        });
        $("#costcntr").prop("readonly", true);
        $("#costcntr option[value='" + "PHARM" + "']").prop("selected", true);
        $("#ModalNewCharge_modal").modal({ backdrop: "static" });
      });
      break;
    case "billing":
      $("#frmEditCharge").trigger("reset");
      var thisRow = $(this).closest("tr");
      $("#editChargeSlipNumber").text(slipno);
      $("#editChargeEnccode").val($(this).data("enccode"));
      $("#editChargeHpercode").val($.session.get("hpercode"));
      $("#editChargeCode").val($(this).data("chargetype"));
      $("#editChargeUomCode").val($(this).data("uomcode"));
      $("#editChargeSrcChrg").val($(this).data("srcchrg"));
      $("#editChargeItemCode").val($(this).data("itemcode"));
      $("#editChargeAcctnNo").val($(this).data("acctno"));

      var chargeDateTime = thisRow.find(".chargeDateTime").text();
      $("#editChargeDateLog").html(chargeDateTime);

      var typeOfCharge = thisRow.find(".typeOfCharge").text();
      $("#editTypeCharge").html(typeOfCharge);

      var itemDescription = thisRow.find(".itemDescription").text();
      $("#editChargeDesc").html(itemDescription);

      var chargeQuantity = thisRow.find(".chargeQuantity").text();
      $("#editChargeQty").val(chargeQuantity);

      var chargePrice = thisRow.find(".chargePrice").text();
      $("#editChargePrice").val(chargePrice);

      var chargeAmount = thisRow.find(".chargeAmount").text();
      $("#editChargeAmount").html(chargeAmount);

      $("#modalEditCharge").modal({ backdrop: "static" });
      $("#modalEditCharge").modal("show");

    // 	$('div[id$=_acct]').load(baseURL+"Billing/viewbill",function(){
    // 	$('#chrgslip').val(slipno);
    // 	$('#chrgformIden').val('update');
    // 	$('#chrgEnccode').val($.session.get('enccode'));
    // 	$('#chrgHpercode').val($.session.get('hpercode'));
    // 	$.get(baseURL+"PatientRecords/caseInformation/"+URLencode(enccode), function (data){
    // 		var acctno = $.parseJSON(data);
    // 		$("#acctno").val($.trim(acctno['accountno']));
    // 	});

    // 	$.get(baseURL+"Billing/chargesSlipInformation/"+URLencode(slipno)+"/"+enctr, function (data){
    // 		var jsonObj = $.parseJSON(data);
    // 		$('#chrgdate').val(setTimeLocale(jsonObj[0]['date']));
    // 		$.each(jsonObj, function (i, d) {
    // 			chargesPat.row.add([
    // 				'<a class="text-danger align-middle" id="btnremove" ><i class="fa fa-remove fa-2x"></i></a>',
    // 				'<input type="hidden" class="form-control form-control-lg" readonly  name="row[]" id="row">',
    // 				 '<small>' + d['chargedesc'] + '</small>',
    // 				'<input type="number" class="form-control form-control-lg" readonly value='+d['chargeup']+'  name="price[]" id="price">',
    // 				'<input type="number" class="form-control form-control-lg " min="1" max="999" value='+d['chargeqty']+' name="qty[]" id="qty">',
    // 				'<input type="number" class="form-control form-control-lg" readonly value='+d['chargeamount']+' name ="amnt[]" id="amnt">',
    // 				'<input type="text" class="form-control form-control-lg" readonly value='+d['chargeunits']+' name ="oum[]" id="oum">',
    // 				'<input type="text" class="form-control form-control-lg" readonly value='+d['chargcode']+' name ="chrgcode[]" id="chrgcode">',
    // 				'<input type="text" class="form-control form-control-lg" readonly value='+d['itemcode']+' name ="itemcode[]" id="itemcode">',
    // 				'<input type="text" class="form-control form-control-lg" readonly value='+d['lot']+' name ="lotno[]" id="lotno">',
    // 				'<input type="text" class="form-control form-control-lg" readonly value='+d['ctr']+' name ="ctr[]" id="ctr">',
    // 				'<input type="hidden" class="form-control form-control-lg" readonly  value ='+d['srcchrg']+'   name ="center[]" id="center">'
    // 				]).draw();

    // 		});
    // 	$('#ModalNewCharge_modal').modal({backdrop:'static'});
    // 	});
    // });
  }
});

$("#frmNewCharge_form").submit("click", function (event) {
  event.preventDefault();

  var hasError = false;

  var formData = new FormData(this);
  var row = formData.getAll("row[]");
  var header = "";
  var details = "";
  var url = "";
  var totqty = 0;
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
  var chargedesc;

  if (Module == "billing") {
    var enccode = $("#chrgEnccode").val();
    var hpercode = $("#chrgHpercode").val();
    var acctno = $("#acctno").val();
    var chrgdate = $("#chrgdate").val();
    var slipno = $("#chrgslip").val();
    var action = $("#chrgformIden").val();
    var chargesArray = [];

    for (i = 0; i < row.length; i++) {
      var charges = {};
      unit_price = $(chargesPat.cell(row[i], 3).node()).find("input").val();
      var unit_price_element = $(chargesPat.cell(row[i], 3).node())
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

      qty = $(chargesPat.cell(row[i], 4).node()).find("input").val();
      var qty_element = $(chargesPat.cell(row[i], 4).node())
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

      amount = $(chargesPat.cell(row[i], 5).node()).find("input").val();
      uom = $(chargesPat.cell(row[i], 6).node()).find("input").val();
      chrgcod = $(chargesPat.cell(row[i], 7).node()).find("input").val();
      item = $(chargesPat.cell(row[i], 8).node()).find("input").val();
      lot = $(chargesPat.cell(row[i], 9).node()).find("input").val();
      ctr = $(chargesPat.cell(row[i], 10).node()).find("input").val();
      center = $(chargesPat.cell(row[i], 11).node()).find("input").val();

      chargedesc = $(chargesPat.cell(row[i], 2).node()).text();

      charges.enccode = enccode;
      charges.hpercode = hpercode;
      charges.chrgdate = chrgdate;
      charges.chrgslip = slipno;
      charges.code = chrgcod;
      charges.uomcode = uom;
      charges.chargedesc = chargedesc;
      charges.pchrgqty = qty;
      charges.pchrgup = unit_price;
      charges.pcchrgamt = amount;
      charges.srcchrg = center;
      charges.acctno = acctno;
      charges.row = row.length;
      charges.lot = lot;
      charges.itemcode = item;
      charges.ctr = ctr;
      charges.action = action;
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

      //  $.ajax({
      // 	type:'POST',
      // 	data:dataString,
      // 	dataType:'JSON',
      // 	url: baseURL+"Billing/saveCharges",
      // 	success: function(data,response){
      // 		$('#ModalNewCharge_modal').modal('hide');
      // 		toastr.success('Charges saved!','Alert');
      // 	},
      // 	error: function(data,response){
      // 		console.log(data);
      // 		console.log(response);
      // 	},
      // 	});
    }
    if ($("#chrgdate").val() == "") {
      hasError = true;
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
    if (hasError) {
      return;
    }

    var charges_JSONString = JSON.stringify(chargesArray);
    $.ajax({
      type: "POST",
      data: { charges: charges_JSONString },
      dataType: "JSON",
      url: baseURL + "Billing/saveCharges",
      success: function (data, response) {
        toastr.success(data.message, "Success");
        $("#ModalNewCharge_modal").modal("hide");
        loadCharges($.session.get("enccode"), $.session.get("hpercode"));
      },
      error: function (data, response) {
        toastr.error(data.responseJSON.message, "Error");
      },
    });
  } else if (Module == "pharmacy") {
    for (var i = 0; i < row.length; i++) {
      resp;
      fname = $("#fname").val();
      mname = $("#mname").val();
      lname = $("#lname").val();
      chrgslip = $("#chrgslip").val();
      chrgdate = $("#chrgdate").val();
      alltotal = $("#totalAll").val();
      unit_price = $(chargesPat.cell(row[i], 3).node()).find("input").val();
      qty = $(chargesPat.cell(row[i], 4).node()).find("input").val();
      amount = $(chargesPat.cell(row[i], 5).node()).find("input").val();
      uom = $(chargesPat.cell(row[i], 6).node()).find("input").val();
      chrgcod = $(chargesPat.cell(row[i], 7).node()).find("input").val();
      item = $(chargesPat.cell(row[i], 8).node()).find("input").val();
      lot = $(chargesPat.cell(row[i], 9).node()).find("input").val();
      ctr = $(chargesPat.cell(row[i], 10).node()).find("input").val();
      intkey = chrgslip.concat("-", item, lotno, row);

      details =
        "intkey=" +
        intkey +
        "&orno=" +
        chrgslip +
        "&dmdcomb=" +
        item +
        "&dmdctr=" +
        ctr +
        "&qty=" +
        qty +
        "&uom=" +
        uom +
        "&price=" +
        unit_price +
        "&tot_amount=" +
        amount +
        "&row=" +
        i +
        "&ctr=" +
        ctr +
        "&lotno=" +
        lot;

      $.ajax({
        type: "POST",
        data: details,
        dataType: "JSON",
        url: baseURL + "Billing/saveWalkinDtlPharm",
        success: function (data, response) {
          $("#ModalNewCharge_modal").modal("hide");
          toastr.success("Charges saved!", "Alert");
        },
        error: function (data, response) {
          console.log(data);
        },
      });
    }
  }
  return false;
});

// $('#ModalNewCharge_modal').on('hidden.coreui.modal', function () {
// 	$('#GTotal').text('0.00');
// 	if(chargesPat!=null){
// 		chargesPat.clear();
// 		 chargesPat.DataTable({
// 			"searching":false,
// 			"retrieve": true,
// 			"info":false,
// 			"ordering":false,
// 			"destroy":true,
// 			"deferLoading":350,
// 			"columnDefs":[
// 			{
// 				width:'2%',
// 				className:"align-middle text-center",
// 				targets:[0]
// 			},
// 			{

// 				visible:true,
// 				targets:[0,1,2,3,4,5]
// 			},
// 			{

// 				visible:false,
// 				targets:[6,7,8,9,10]
// 			},
// 			{
// 				width:'30%',
// 				className:"align-middle",
// 				targets:[1,2]
// 			},
// 			{
// 				className:"text-center",
// 				targets:[4]
// 			},
// 			],
// 			rowCallback: function (row,data,index) {
// 				var price = $('#price',row).val();
// 				var qty = $('#qty', row).val();
// 				var total = price * qty;
// 				$('#amnt',row).val(total.toFixed(2));
// 				$('#row',row).val(index);
// 			},
// 			footerCallback: function (row,data,start,end,display) {
// 				var api = this.api(), data;
// 				CalculateTableSummary(this);
// 				return ;
// 			}
// 		});
// 	}

// });

function Packages(pckCode) {
  $("#packageTable").DataTable({
    ajax: baseURL + "Charges/packageCharge/" + pckCode,
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    processing: true,
    paging: false,
    serverside: true,
    oLanguage: {
      sProcessing:
        '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
    },
    destroy: true,
    columns: [
      { data: "chrgcode" },
      { data: "itemcode" },
      { data: "descs" },
      { data: "qty" },
      { data: "uom" },
      { data: "amnt" },
    ],
    columnDefs: [
      {
        targets: [0, 1],
        visible: false,
      },
      {
        targets: [3, 5],
        render: function (data, type, row) {
          return formatNumber(data);
        },
      },
    ],
  });
}

function checkIfexist() {
  $("#chargesList tr td:nth-child(0)").each(function () {
    var rowData = $("#chargesTable").DataTable().row(this).data();
  });
}

$("#chargesTbl").on("click", "#btnChargeSlip", function () {
  $("#ModalChargeslip").modal({ backdrop: "static" });
  var code = $(this).data("chrgcod");
  var percode = $(this).data("percode");
  var enctr = encodeURIComponent(encodeURIComponent($(this).data("enccode")));
  var src = baseURL + "Billing/chrgslip/" + code + "/" + percode + "/" + enctr;
  var url = $("#chargesPdf").attr("src", src);
});

$("#chargesTbl").on("click", "#btnChargeDelete", function () {
  $("#ModalChargesDelete").modal({ backdrop: "static" });
  var chrgSlipNo = $(this).data("slip");
  var chrgCode = $(this).data("chargetype");
  var chrgItemCode = $(this).data("itemcode");
  var chrgEnccode = $(this).data("enccode");
  var chrgDesc = $(this).data("desc");
  $("#chrgDesc").val(chrgDesc);
  $("#deleteChargeDesc").text(chrgDesc);
  $("#chrgSlipNo").val(chrgSlipNo);
  $("#chrgCode").val(chrgCode);
  $("#chrgItemCode").val(chrgItemCode);
  $("#chrgEnccode").val(chrgEnccode);
  $("#chrgDelete").val("delete");
});

$("#frmDeleteCharge").on("submit", function (e) {
  var form = this;
  $.ajax({
    type: "POST",
    dataType: "JSON",
    url: baseURL + "Billing/deleteCharge",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      //Charges($.session.get('enccode'),$.session.get('hpercode'));
      loadCharges($.session.get("enccode"), $.session.get("hpercode"));
      toastr.success(data.message, "Success");
      $("#ModalChargesDelete").modal("hide");
    },

    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
      //toastr.error(xhr ,'Error');
    },
  });
  return false;
});

$("#costcntr").on("change", function () {
  if (this.value) {
    $("#btnCharges_add").prop("disabled", false);
  } else {
    $("#btnCharges_add").prop("disabled", true);
  }
});

$("#ModalNewCharge_modal").on("hidden.coreui.modal", function () {
  $("#chargesList").find("tbody>tr").remove();
});

function CalculateTableSummary(table) {
  try {
    var intVal = function (i) {
      return typeof i === "string"
        ? i.replace(/[\$,]/g, "") * 1
        : typeof i === "number"
        ? i
        : 0;
    };

    var api = table.api();

    api.columns(5).each(function (index) {
      var column = api.column(index);
      sum = column.nodes().reduce(function (a, b) {
        var a1 = intVal(a);
        var b1 = intVal($("input", b).val());
        return a1 + b1;
      }, 0);

      if ($(column.footer()).hasClass("Gtotal")) {
        var ada = $(column.footer()).text(sum.toFixed(2));
        $("#totalAll").val(sum.toFixed(2));
      }
    });
  } catch (e) {
    console.log("Error in CalculateTableSummary");
  }
}

$("#chargesList tbody").on("change", "#qty", function () {
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
    hasError = true;
  } else {
    $(this).next("#qtyError").remove();
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
    $(this).after(
      '<div class="invalid-feedback" id="qtyError">Quantity is required!</div>'
    );
  }

  $("#amnt", $(this).parents("tr")).val(total.toFixed(2));

  chargesPat.columns(5).each(function (index) {
    var column = chargesPat.column(index);
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
  $("#GTotal").text(formatNumber(sum.toFixed(2)));
});

$("#chargesList tbody").on("change", "#price", function () {
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
    hasError = true;
  } else {
    $(this).next("#unitPriceError").remove();
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
    $(this).after(
      '<div class="invalid-feedback" id="unitPriceError">Unit Price is required!</div>'
    );
  }

  $("#amnt", $(this).parents("tr")).val(total.toFixed(2));

  chargesPat.columns(5).each(function (index) {
    var column = chargesPat.column(index);
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
  $("#GTotal").text(formatNumber(sum.toFixed(2)));
});

$("#bntAddpackCharge").on("click", function () {
  var table = $("#packageTable").DataTable();
  var test = table.rows(function (idx, data, node) {
    var rowData = table.row(idx).data();
    var code = rowData["chrgcode"];
    var item = rowData["itemcode"];
    var oum = rowData["uom"];
    var desc = rowData["descs"];
    var qty = rowData["qty"];
    var price = rowData["amnt"];
    var qtytotal = qty * price;
    chargesPat.row
      .add([
        '<a class="text text-danger text-center" id="btnremove" ><i class="fa fa-trash fa-remove fa-2x"></i></a>',
        '<input type="text" class="form-control form-control-sm" hidden value=' +
          code +
          '  name="code[]" id="code">',
        '<input type="text" class="form-control form-control-sm" hidden value=' +
          item.replace(/\s/g, "&nbsp") +
          '  name="chrgcode[]" id="chrgcode">',
        "<small> " + desc + "</small>",
        '<input type="number" class="form-control form-control-sm" readonly value=' +
          price +
          '  name="price[]" id="price">',
        '<input type="text" class="form-control form-control-sm" readonly value=' +
          _uom(oum) +
          '  name="oum[]" id="oum">',
        '<input type="number" class="form-control form-control-sm" min="1" max="999" value=' +
          qty +
          ' name="qty[]" id="qty">',
        '<input type="number" class="form-control form-control-sm" readonly name ="amnt[]" id="amnt">',
      ])
      .draw(false);
  });
  $("#modalPackage").modal("hide");
  $("#Modal_typeCharge").modal("hide");
});

$("#chargesList tbody").on("click", "#btnremove", function () {
  chargesPat.row($(this).parents("tr")).remove().draw();
});

function deleteItem(item, code) {
  var chrgcode = encodeURIComponent(encodeURIComponent(code));
  var url = baseURL + "Billing/deleteItem/" + item + "/" + code;
  $.ajax({
    dataType: "json",
    url: url,
    success: function (data, xhr, text) {
      toastr.success("Success", "Data successfully removed!");
    },
    error: function (data, xhr, text) {
      toastr.error(data, "data");
      toastr.error(xhr, "xhr");
      toastr.error(text, "text");
    },
  });
}

function itemTotal() {
  var price = 0;
  var qty = 0;
  var total = 0;
  price = $("#itemPricechrg").val();
  qty = $("#itemQtychrg").val();
  total = qty * 1 * (price * 1);
  $("#itemQtytotal").val(total.toFixed(2));
}

function itemCheck(item) {
  var ret = false;
  $("#chargesList tr").map(function () {
    ret =
      $(this)
        .find("td [value=" + item + "]")
        .val() == item;
  });
  return ret;
}

function _uom(oum) {
  if (oum !== "") {
    return oum;
  } else {
    return "none";
  }
}

function itemMerge(itemCode) {
  var Obj = new Object();
  Obj.type = "POST";
  Obj.url = baseURL + "Billing/existItem/" + itemCode;
  Obj.data = "JSON";
  var jsonObj = Information(Obj);
  return jsonObj;
}

function removeItem(e) {
  $(e).parents("tr").remove().draw();
}

function SelTypeofCharge(costcent) {
  $("[id$=typechrge_chrg]").select2({
    allowClear: true,
    placeholder: "Select Charge/s",
    theme: "coreui",
    ajax: {
      url: baseURL + "Charges/charges/" + costcent,
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
}

$("#typechrge_chrg").change(function () {
  if ($(this).val() == null) {
    return;
  }
  chargeTable($(this).val());
});

function loadCharges(enccode, hpercode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var groupColumn = 0;
  $("#chargesTbl").DataTable({
    destroy: true,
    ajax: baseURL + "Billing/patientbillingcharges/" + enctr,
    columns: [
      { data: "pcchrgcod" },
      { data: "date" },
      { data: "chrgdesc" },
      { data: "chargedesc" },
      { data: "chargeqty" },
      { data: "chargeup" },
      { data: "chargeamount" },
      {
        data: null,
        defaultContent: "",
        className: "select-checkbox",
        orderable: false,
        searchable: false,
        render: function (data, type, row, meta) {
          return (
            '<div  style="font-size: 12px;" class="btn-group btn-group-sm btn-ladda"  data-layout="zoom-in"><button type="button" class="btn btn-outline-success btn-sm dropdown-toggle dropdown-toggle-split text-right" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 	34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu"><a href="javascript:void(0);" id="btnChargeEdit" class="dropdown-item" data-enccode="' +
            data.enccode +
            '" data-slip="' +
            data.pcchrgcod +
            '" data-chargetype="' +
            data.chargcode +
            '" data-itemcode="' +
            data.itemcode +
            '" data-desc="' +
            data.chargedesc +
            '" data-srcchrg="' +
            data.srcchrg +
            '" data-uomcode="' +
            data.uomcode +
            '" data-acctno="' +
            data.acctno +
            '"><i class="fa fa-edit fa-xs"></i>&nbsp Edit</a><a href="javascript:void(0);" class="dropdown-item" id="btnChargeDelete" data-enccode="' +
            data.enccode +
            '"  data-slip="' +
            data.pcchrgcod +
            '" data-chargetype="' +
            data.chargcode +
            '" data-itemcode="' +
            data.itemcode +
            '" data-desc="' +
            data.chargedesc +
            '"><i class="fa fa-trash fa-xs"></i>&nbsp Delete</a></div></div>'
          );
        },
      },
    ],
    columnDefs: [
      {
        targets: 0,
        className: "chargeSlipNumber",
      },
      {
        targets: 1,
        className: "chargeDateTime",
      },
      {
        targets: 2,
        className: "typeOfCharge",
      },
      {
        targets: 3,
        className: "itemDescription",
      },
      {
        targets: 4,
        className: "text-center chargeQuantity",
      },
      {
        targets: 5,
        className: "text-right chargePrice",
      },
      {
        targets: 6,
        className: "text-right chargeAmount",
      },
    ],
    order: [[0, "asc"]],
    drawCallback: function (settings) {
      var api = this.api();
      var rows = api.rows({ page: "current" }).nodes();
      var last = null;

      api
        .column(groupColumn, { page: "current" })
        .data()
        .each(function (group, i) {
          if (last !== group) {
            $(rows)
              .eq(i)
              .before(
                '<tr class="group"><td>' +
                  group +
                  '</td><td style="text-align: right" colspan="7"><button type="button" data-enccode="' +
                  enccode +
                  '" data-percode="' +
                  hpercode +
                  '" data-chrgcod="' +
                  group +
                  '"  id="btnChargeSlip" class="btn btn-outline-success btn-sm" ><i class="fa fa-print"></i> Print Charge Slip</button></td></tr>'
              );
            last = group;
          }
        });
    },
    footerCallback: function (row, data, start, end, display) {
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
        .column(6)
        .data()
        .reduce(function (a, b) {
          return intVal(a) + intVal(b);
        }, 0);

      // Total over this page
      pageTotal = api
        .column(6, { page: "current" })
        .data()
        .reduce(function (a, b) {
          return intVal(a) + intVal(b);
        }, 0);

      // Update footer
      $(api.column(6).footer()).html(
        '<div class="h4 text-success">' +
          formatNumber(pageTotal.toFixed(2, 0)) +
          "</div>"
      );
      $(api.column(5).footer()).html(
        '<div class="h4 text-success"> Total Amount:</div>'
      );
    },
  });
}

$("#editChargeQty").change(function () {
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
  var editChargePrice = $("#editChargePrice").val();
  var editChargeAmount =
    parseFloat(editChargeQuantity) * parseFloat(editChargePrice);
  if (editChargeAmount) {
    //$("#editChargeAmount").html(editChargeAmount.toLocaleString());
    $("#editChargeAmount").html(numFormatter.format(editChargeAmount));
  } else {
    $("#editChargeAmount").html("");
  }
});

$("#editChargePrice").change(function () {
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

  var editChargeQuantity = $("#editChargeQty").val();
  var editChargePrice = $(this).val();
  var editChargeAmount =
    parseFloat(editChargeQuantity) * parseFloat(editChargePrice);
  if (editChargeAmount) {
    //$("#editChargeAmount").html(editChargeAmount.toLocaleString());
    $("#editChargeAmount").html(numFormatter.format(editChargeAmount));
  } else {
    $("#editChargeAmount").html("");
  }
});

$("#frmEditCharge").submit(function (event) {
  event.preventDefault();
  var chrgdate;
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
  var chargedesc;

  if (Module == "billing") {
    if ($("#editChargeQty").val() == 0 || $("#editChargeQty").val() == "") {
      if ($("#quantityError").length > 0) {
        return;
      }
      $("#editChargeQty").addClass("is-invalid");
      var errorElement = $(
        '<div id="quantityError">Quantity is required!</div>'
      );
      errorElement.addClass("invalid-feedback");
      errorElement.insertAfter($("#editChargeQty"));
      return;
    } else {
      $("#quantityError").remove();
      $("#editChargeQty").removeClass("is-invalid");
      $("#editChargeQty").addClass("is-valid");
    }

    if ($("#editChargePrice").val() == 0 || $("#editChargePrice").val() == "") {
      if ($("#editUnitPriceError").length > 0) {
        return;
      }
      $("#editChargePrice").addClass("is-invalid");
      var errorElement = $(
        '<div id="editUnitPriceError">Unit Price is required!</div>'
      );
      errorElement.addClass("invalid-feedback");
      errorElement.insertAfter($("#editChargePrice"));
      return;
    } else {
      $("#editUnitPriceError").remove();
      $("#editChargePrice").removeClass("is-invalid");
      $("#editChargePrice").addClass("is-valid");
    }

    var enccode = $("#editChargeEnccode").val();
    var hpercode = $("#editChargeHpercode").val();
    var acctno = $("#acctno").val();
    var chrgdate = $("#editChargeDateLog").text();
    var slipno = $("#editChargeSlipNumber").text();
    var unit_price = $("#editChargePrice").val();
    var chrgcod = $("#editChargeCode").val();
    var uom = $("#editChargeUomCode").val();
    var chargedesc = $("#editChargeDesc").text();
    var qty = $("#editChargeQty").val();
    var amount = $("#editChargeAmount").text();
    var center = $("#editChargeSrcChrg").val();
    var acctno = $("#editChargeAcctnNo").val();
    var item = $("#editChargeItemCode").val();
    var action = "update";
    var chargesArray = [];

    charges.enccode = enccode; //
    charges.hpercode = hpercode; //
    charges.chrgdate = chrgdate; //
    charges.chrgslip = slipno; //
    charges.code = chrgcod; //
    charges.uomcode = uom; //
    charges.chargedesc = chargedesc; //
    charges.pchrgqty = qty; //
    charges.pchrgup = unit_price; //
    charges.pcchrgamt = amount; //
    charges.srcchrg = center; //
    charges.acctno = acctno; //
    charges.row = 1; //
    charges.lot = null; //
    charges.itemcode = item; //
    charges.ctr = null;
    charges.action = action;
    chargesArray.push(charges);

    var charges_JSONString = JSON.stringify(chargesArray);
    $.ajax({
      type: "POST",
      data: { charges: charges_JSONString },
      dataType: "JSON",
      url: baseURL + "Billing/saveCharges",
      success: function (data, response) {
        toastr.success(data.message, "Success");
        $("#modalEditCharge").modal("hide");
        loadCharges($.session.get("enccode"), $.session.get("hpercode"));
      },
      error: function (data, response) {
        toastr.error(data.responseJSON.message, "Error");
      },
    });
  }
});
