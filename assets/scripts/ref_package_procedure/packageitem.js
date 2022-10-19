var chargePackProclist = null;
$(document).ready(function () {
  $("#frmPackageProcedureItem").validate({
    rules: {
      itemChargeType: {
        required: {
          depends: function () {
            if (
              !$("#oldchargecode").val() ||
              $("#oldchargecode").val() == "null"
            ) {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      packageQty: {
        required: {
          depends: function (element) {
            if (
              $(element).val() == 0 ||
              $(element).val().toString().indexOf(".") > 0
            ) {
              return true;
            } else {
              return false;
            }
          },
        },
      },
    },
    messages: {
      itemChargeType: "Type of Charge is required!",
      packageQty: "Quantity is invalid!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });

  PackageProcedureItemList();

  $("#chrgtype").select2({
    allowClear: true,
    placeholder: "Select Charge/s",
    theme: "coreui",
    ajax: {
      url: baseURL + "Charges/chargetypeforprocedure/",
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
});

function BackProcedurePackage() {
  window.location.href = baseURL + "Ref_PackageProcedure";
}

function PackageProcedureItemList() {
  var groupColumn = 0;
  $("#ProcedurePackageItemsTable").DataTable({
    serverSide: false,
    destroy: true,
    ajax:
      baseURL + "Ref_PackageProcedureItems/getitems/" + $("#packagecode").val(),
    columns: [
      { data: "typChrgDesc" },
      { data: "description", className: "description" },
      { data: "pchrgqty" },
      {
        data: null,
        className: "text-center",
        orderable: false,
        searchable: false,
        render: function (data, type, row, meta) {
          return (
            '<div class="btn-group" role="group"><button id="btnGroupPackageItem" type="button" class="btn  btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-list" aria-hidden="true"></i></button><div class="dropdown-menu" aria-labelledby="btnGroupPackageItem" style="margin: 0px;"><a href="javascript:void(0);" class="dropdown-item ModalEditProcedurePackageItem" data-packcode="' +
            data.packcode +
            '" data-itemcode="' +
            data.itemcode +
            '" data-chrgcode="' +
            data.chrgcode +
            '"><i class="fa fa-pencil"></i>&nbsp Edit</a><a href="javascript:void(0);" class="dropdown-item ModalDeleteProcedurePackageItem" data-packcode="' +
            data.packcode +
            '" data-itemcode="' +
            data.itemcode +
            '" data-chrgcode="' +
            data.chrgcode +
            '"><i class="fa fa-trash"></i>&nbsp Delete</a></div></div>'

            /*'<div class="btn-group  btn-ladda" btn-sm data-layout="zoom-in"><button type="button" class="btn btn-outline-success btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu"><a href="javascript:void(0);" class="dropdown-item ModalEditProcedurePackageItem" data-packcode="' +
            data.packcode +
            '" data-itemcode="' +
            data.itemcode +
            '" data-chrgcode="' +
            data.chrgcode +
            '"><i class="fa fa-pencil"></i>&nbsp Edit</a><a href="javascript:void(0);" class="dropdown-item ModalDeleteProcedurePackageItem" data-packcode="' +
            data.packcode +
            '" data-itemcode="' +
            data.itemcode +
            '" data-chrgcode="' +
            data.chrgcode +
            '"><i class="fa fa-trash"></i>&nbsp Delete</a></div></div>'*/
          );
        },
      },
    ],
    columnDefs: [
      {
        targets: 0,
        visible: false,
      },
    ],
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
                '<tr class="group"><td colspan="3">' + group + "</td></tr>"
              );
            last = group;
          }
        });
    },
  });
}

function AddProcedurePackage() {
  resetchargePackProclist();
  $("#newPackProcItemModal").modal({ backdrop: "static" });
  $("#newPackProcItemModal").modal("show");
}

function resetchargePackProclist() {
  if ($.fn.DataTable.isDataTable("#chargePackProclist")) {
    $("#chargePackProclist").DataTable().clear().draw();
    $("#chargePackProclist").DataTable().destroy();
  }
  chargePackProclist = $("#chargePackProclist").DataTable({
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
        targets: [6, 7, 8, 9, 10, 11],
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
}

$("#btnCharges_add").click(function () {
  if ($("#chrgtype").val() == "" || $("#chrgtype").val() == null) {
    toastr.error("Please select Type of Charge first!", "Alert");
    $("#typeOfChargeError").remove();
    $("#chrgtype").addClass("is-invalid");
    $("#chrgtype").after(
      '<div class="invalid-feedback" id="typeOfChargeError">Type of Charge is required!</div>'
    );
    return;
  } else {
    $("#typeOfChargeError").remove();
    $("#chrgtype").removeClass("is-invalid");
    $("#chrgtype").addClass("is-valid");
  }
  charges($("#chrgtype").val());
  $("#modalProcChargeType").modal("show");
});

function charges(type) {
  if ($.fn.DataTable.isDataTable("#chargesProcPackage")) {
    $("#chargesProcPackage").DataTable().clear().draw();
    $("#chargesProcPackage").DataTable().destroy();
  }
  var chrgTable = $("#chargesProcPackage").DataTable({
    ajax: baseURL + "Charges/chargestypeforprocedure/" + type,
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

  $("#chargesProcPackage").unbind("click");
  chrgTable.on("click", "tbody > tr", function () {
    $(this).toggleClass("selected");
    $(this).toggleClass("table-success");
  });

  $("#selectProcCharge").click(function () {
    var rowData = chrgTable.rows(".selected").data();
    $.each(rowData, function (i, d) {
      let itemcode = d["itemcode"];
      let chargeCode = d["chrgcode"];
      let ctr = d["ctr"];
      if (!checkItemListed(chargeCode, itemcode, ctr)) {
        return;
      }
      chargePackProclist.row
        .add([
          '<a class="text-danger align-middle" id="btnremove"><i class="fa fa-remove fa-2x"></i></a>',
          '<input type="hidden" class="form-control form-control-md" readonly  name="row[]" id="row">',
          d["descs"],
          '<input type="number" class="form-control form-control-md" value=' +
            d["amnt"] +
            '  name="price[]" id="price" readonly>',
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
            d["itemcode"] +
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
    });

    $("#chargePackProclist tbody").on("click", "#btnremove", function () {
      chargePackProclist.row($(this).parents("tr")).remove().draw();
    });

    $("#chargePackProclist tbody").on("change", "#qty", function () {
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

      $("#chargePackProclist")
        .DataTable()
        .columns(5)
        .each(function (index) {
          var column = $("#chargePackProclist").DataTable().column(index);
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

    $("#modalProcChargeType").modal("hide");
    chrgTable.rows(".table-success").remove().draw();
    chrgTable.rows(".selected").remove().draw();
  });
}

function checkItemListed(chargeCode, chargeItem, chargeCtr) {
  var form = document.getElementById("frmPackProcCharge");
  var formData = new FormData(form);
  var row = formData.getAll("row[]");
  var i;
  for (i = 0; i < row.length; i++) {
    const item = $(chargePackProclist.cell(row[i], 8).node())
      .find("input")
      .val();
    const ctr = $(chargePackProclist.cell(row[i], 10).node())
      .find("input")
      .val();
    const chargedesc = $(chargePackProclist.cell(row[i], 2).node()).text();
    const chrgcod = $(chargePackProclist.cell(row[i], 7).node())
      .find("input")
      .val();

    if (chargeCode == chrgcod && chargeItem == item && chargeCtr == ctr) {
      toastr.warning(chargedesc + " is already selected!", "Warning");
      return false;
    }
  }
  return true;
}

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

$("#frmPackProcCharge").submit("click", function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  var row = formData.getAll("row[]");
  let chargesArray = [];
  let hasError = false;
  var i;
  for (i = 0; i < row.length; i++) {
    var charges = {};
    const unit_price = $(chargePackProclist.cell(row[i], 3).node())
      .find("input")
      .val();
    const unit_price_element = $(chargePackProclist.cell(row[i], 3).node())
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

    const qty = $(chargePackProclist.cell(row[i], 4).node())
      .find("input")
      .val();
    const qty_element = $(chargePackProclist.cell(row[i], 4).node())
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

    const item = $(chargePackProclist.cell(row[i], 8).node())
      .find("input")
      .val();
    const ctr = $(chargePackProclist.cell(row[i], 10).node())
      .find("input")
      .val();

    const chargedesc = $(chargePackProclist.cell(row[i], 2).node()).text();
    const chrgcod = $(chargePackProclist.cell(row[i], 7).node())
      .find("input")
      .val();

    charges.packcode = $("#packagecode").val();
    charges.itemcode = item;
    charges.pchrgqty = qty;
    charges.dmdcomb = item;
    charges.chargedesc = chargedesc;
    charges.dmdctr = ctr;
    charges.chrgcod = chrgcod;
    chargesArray.push(charges);
  }
  if (chargesArray.length == 0) return;
  if (hasError) return;

  let charges_JSONString = JSON.stringify(chargesArray);
  $.ajax({
    type: "POST",
    data: { charges: charges_JSONString, action: "insert" },
    dataType: "JSON",
    url: baseURL + "Ref_PackageProcedureItems/save",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#newPackProcItemModal").modal("hide");
      PackageProcedureItemList();
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#ProcedurePackageItemsTable").on(
  "click",
  ".ModalDeleteProcedurePackageItem",
  function () {
    const thisRow = $(this).closest("tr");
    const data = $(this).data();
    const packcode = data["packcode"];
    const chrgcode = data["chrgcode"];
    const itemcode = data["itemcode"];
    const description = thisRow.find(".description").text();
    $("#deletepackagedesc").text(description);
    $("#DeleteProcPackageItemModal").modal({ backdrop: "static" }).draggable();
    $("#formIdentification").val("delete");
    $("#deletechrgcode").val(chrgcode);
    $("#deleteitemcode").val(itemcode);
    $("#deletepackcode").val(packcode);
  }
);

$("#frmDeleteProcPackageItem").submit(function (event) {
  event.preventDefault();
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "Ref_PackageProcedureItems/delete",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#DeleteProcPackageItemModal").modal("hide");
      PackageProcedureItemList();
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#ProcedurePackageItemsTable").on(
  "click",
  ".ModalEditProcedurePackageItem",
  function () {
    const data = $(this).data();
    var itemChargeType = null;
    $.ajax({
      type: "POST",
      url: baseURL + "Ref_PackageProcedureItems/get",
      data: data,
      dataType: "JSON",
      async: false,
      success: function (data, status) {
        $("#packageItem").val(data.description);
        $("#packageQty").val(data.pchrgqty);
        $("#itemChargeTypeDesc").val(data.chrgdesc);
        if (!data.chrgcode) {
          itemChargeType = data.itemChargeType;
        }
        $("#oldpackcode").val(data.packcode);
        $("#olditemcode").val(data.itemcode);
        $("#oldchargecode").val(data.chrgcode);
      },
      error: function (data, status) {
        toastr.error(data.responseJSON.message, "Error");
      },
    });
    if (itemChargeType) {
      $("#itemChargeTypeDesc").hide();
      $("#itemChargeType").show();
      $("#itemChargeType")
        .empty()
        .append("<option value=''>Select Type of Charge</option>");
      itemChargeType.forEach(function (charge) {
        $("#itemChargeType").append(
          "<option value='" +
            charge.chrgcode +
            "'>" +
            charge.chrgdesc +
            "</option>"
        );
      });
    } else {
      $("#itemChargeTypeDesc").show();
      $("#itemChargeType").hide();
    }
    $("#ModalAddPackageProcedureItem")
      .modal({ backdrop: "static" })
      .draggable();
    $("#formIden").val("update");
  }
);

$("#frmPackageProcedureItem").submit(function (event) {
  event.preventDefault();
  if ($("#frmPackageProcedureItem").valid() == false) {
    return;
  }
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "Ref_PackageProcedureItems/update",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#ModalAddPackageProcedureItem").modal("hide");
      PackageProcedureItemList();
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});
