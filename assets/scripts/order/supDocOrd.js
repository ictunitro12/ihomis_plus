var orderSuppList = $("#supplyList").DataTable({
  destroy: true,
  fixedColumns: {
    leftColumns: 2,
  },
  destory: true,
  info: true,
  paging: true,
  autowidth: false,
  columnDefs: [
    {
      visible: false,
      targets: [1],
    },
    {
      width: "100%",
      targets: [4],
    },
    {
      className: "color",
      targets: [3],
    },
    {
      targets: ["_all"],
      className: "align-middle",
    },
  ],
});

$("#btnAddSupplies").on("click", function () {
  $("#DocOrdSuppModal").modal("show");
  $("#supformIden").val("insert");
  $("#dateSupOrd").val(getTimeLocale());
  $("#dateSupPost").val(getTimeLocale());
  $("#supEnccode").val(enccode);
  $("#supHpercode").val(hpercode);
  SelEmp();
  selDoctor($("#frmSupOrder"));
});

function supplyData() {
  var data = new Object();
  data.id = "supplyData";
  data.link = baseURL + "Ref_NonDrugs/supplydata";
  (data.select = {
    select: true,
    style: "multi",
    toggleable: false,
    className: "bg-success text-white selected",
  }),
    (data.type = "POST");
  data.search = true;
  data.destroy = true;
  data.length = true;
  data.paging = true;
  data.info = true;
  data.columns = [{ data: "cl2comb" }, { data: "cl2desc" }];
  Datatable(data);
}

$("#btnSearchSupply").on("click", function () {
  supplyData();
  $("#modalSupplyList").modal({ backdrop: "static", show: true });
});

$("#btnSelectSupp").on("click", function () {
  var supplyTable = $("#supplyData").DataTable();
  var rowData = supplyTable.rows(".selected").data();
  $.each(rowData, function (i, d) {
    orderSuppList.row
      .add([
        '<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnremove" ><i class="fa fa-close fa-2x"></i></a>',
        '<input type="text" value=' +
          d["cl2comb"] +
          ' name="cl2comb" id="cl2comb">',
        "<div>" + d["cl2desc"] + "</div>",
        '<input type="number" class="form-control form-control-sm"  value="1" name="qty" id="qty">',
        '<select name="subprio" id="subprio" autocomplete ="off"  class="form-control form-control-sm"  placeholder="Remarks">' +
          '<option value="">Select</option>' +
          '<option value="STAT">Urgent</option>' +
          '<option value="ROUTI">Routine</option>' +
          "</select>",
        '<input type="text" autocomplete ="off"  class="form-control form-control-sm" id="remarks" name="remarks" placeholder="Remarks">',
        '<input type="hidden" class="form-control form-control-sm" readonly value=' +
          i +
          ' name="row[]" id="row[]">',
      ])
      .draw(true);
  });
  $("#modalSupplyList").modal("hide");
  supplyTable.rows(".selected").remove().draw();
});

$("#DocOrdSuppModal").on("hidden.coreui.modal", function () {
  orderSuppList.clear().draw();
});

$("#supplyList tbody").on("click", "#btnremove", function () {
  orderSuppList.row($(this).parents("tr")).remove().draw();
});

function orderSupplies(enccode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var data = new Object();
  data.id = "docOrdsupp";
  data.link = baseURL + "DoctorsOrder/Supplies/" + enctr;
  data.select = {
    style: "multi",
    toggleable: false,
    selector: "td:not(:nth-child(7))",
    className: "bg-success text-white selected",
  };
  data.type = "POST";
  data.destroy = true;
  data.rowCallback = function (row, data, start, end, display) {
    if (data[8] == "CANOR") {
      $("td", row).prop("disabled", true);
    }
  };
  data.coldef = [
    {
      targets: [0, 1, 3],
      visible: false,
      orderable: false,
    },
    {
      targets: [7],
      searchable: false,
      render: function (data, type, row) {
        switch (data) {
          case "STAT":
            return '<div class="p-1 bg-danger text-white">URGENT!</span>';
            break;
          case "ROUTI":
            return '<div class="p-1 bg-warning text-white">ROUTINE</span>';
            break;
          default:
            return '<div class="p-1 bg-danger text-white">UNKNOWN</span>';
            break;
        }
      },
    },
    {
      targets: [8],
      searchable: false,
      render: function (data, type, row) {
        switch (data) {
          case "CANOR":
            return '<div class="p-1 bg-danger text-white">Cancelled!</span>';
            break;
          case "NEWOR":
            return '<div class="p-1 bg-warning text-white">New</span>';
            break;
          case "UNKNO":
            return '<div class="p-1 bg-danger text-white">UNKNOWN</span>';
            break;
        }
      },
    },
  ];
  loadTable(data);
}

$("#frmSupOrder").on("submit", function () {
  var POSTURL = baseURL + "DoctorsOrder/saveSupplyMulti";
  var formData = new FormData(this);
  var row = formData.getAll("row[]");
  var orderListArray = [];
  for (var i = 0; i < row.length; i++) {
    var orders = {};
    var formType = $("#supformIden").val();
    var enccode = $("#supEnccode").val();
    var hpercode = $("#supHpercode").val();
    var orderDate = $("#dateSupOrd").val();
    var postDate = $("#dateSupPost").val();
    var employee = $("#selEmpsup_emp").val();
    var doctor = $("#selSup_doc").val();

    var cl2comb = $(orderSuppList.cell(i, 1).node())
      .find("input[name=cl2comb]")
      .val();
    var qty = $(orderSuppList.cell(i, 3).node()).find("input[name=qty]").val();
    var subprio = $(orderSuppList.cell(i, 4).node())
      .find("select[name=subprio]")
      .val();
    var remarks = $(orderSuppList.cell(i, 5).node())
      .find("input[name=remarks]")
      .val();

    orders.enccode = enccode;
    orders.hpercode = hpercode;
    orders.formType = formType;
    orders.orderDate = orderDate;
    orders.postDate = postDate;
    orders.employee = employee;
    orders.doctor = doctor;

    orders.cl2comb = cl2comb;
    orders.qty = qty;
    orders.prio = subprio;
    orders.remarks = remarks;
    orderListArray.push(orders);
  }

  console.log(orderListArray);

  var orderList_JSONString = JSON.stringify(orderListArray);
  console.log(orderList_JSONString);
  $.ajax({
    type: "POST",
    data: { orderLists: orderList_JSONString },
    dataType: "JSON",
    url: baseURL + "DoctorsOrder/saveSupplyMulti",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#DocOrdSuppModal").modal("hide");
      $("#docOrdsupp").DataTable().ajax.reload();
    },
    error: function (data, response) {
      toastr.error(data.message, "Error");
      $("#DocOrdSuppModal").modal("hide");
      $("#docOrdsupp").DataTable().ajax.reload();
    },
  });

  return false;
});

$("#frmEditSup").validate({
  submitHandler: function (form) {
    var POSTURL = baseURL + "DoctorsOrder/saveUpdateSupply";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(form).serialize(),
      success: function (data) {
        $("#docOrdsupp").DataTable().ajax.reload();
        toastr.success("Order Successfully Updated! ", "Success");
        $("#modalEditSuppOrd").modal("hide");
      },
    });
    return false;
    $(form).submit();
  },
  rules: {
    editDateOrd: "required",
    editDatePost: "required",
    editSup_doc: "required",
    editEmp_emp: "required",
  },
  messages: {
    editDateOrd: "Date is required!",
    editDatePost: "Date is required!",
    editSup_doc: "Doctor is required",
    editEmp_emp: "Selection is required",
  },
  errorElement: "span",
  errorPlacement: function errorPlacement(error, element) {
    error.addClass("invalid-feedback");
    error.insertAfter(element);
  },
  highlight: function highlight(element) {
    $(element).addClass("is-invalid").removeClass("is-valid");
    if (
      $(element).hasClass("select2") &&
      $(element).next(".select2-container").length
    ) {
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

$("#docOrdsupp").on("click", "#btnEditSup_edit", function () {
  var key = encodeURIComponent(
    encodeURIComponent(atob($(this).data("docointkey")))
  );
  var cl2comb = encodeURIComponent(encodeURIComponent($(this).data("cl2comb")));

  $.ajax({
    type: "POST",
    url: baseURL + "DoctorsOrder/supInfo/" + key + "/" + cl2comb,
    data: "JSON",
    async: false,
    success: function (data) {
      var obj = $.parseJSON(data);
      console.log(obj["dopriority"]);
      $("#modalEditSuppOrd").modal("show");
      $("#editdocosup").val(obj["docointkey"]);
      $("#edithpercodesup").val(obj["enccode"]);
      $("#editenccodesup").val(obj["hpercode"]);
      $("#editDateOrd").val(setTimeLocale(obj["dodate"]));
      $("#editDatePost").val(setTimeLocale(obj["dodtepost"]));
      $("#itemdesc").val(obj["cl2desc"]);
      $("#qtySup").val(parseInt(obj["qtybal"]));

      $("#prioEdit option[value=" + obj["dopriority"] + "]").prop(
        "selected",
        true
      );
      $("#remarksEdit").val(obj["remarks"]);
      setVerified(obj["verby"]);
      selDoctor($("#frmEditSup"));
      setDoctor(obj["licno"]);
    },
    error: function (data) {
      alert("Error: Fetching Information!");
    },
  });
});

function setCategory(ptcode) {
  var selCat = $('[name $="_supMajor"]');
  $.ajax({
    type: "POST",
    url: baseURL + "Supplies/setCategory/" + ptcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["ptdesc"], obj["ptcode"], true, true);
    selCat.append(option).trigger("change");
    selCat.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setSubCategory(code) {
  var cl1comb = encodeURIComponent(encodeURIComponent(code));

  var selCat = $("#selsup_supSub");
  $.ajax({
    type: "POST",
    url: baseURL + "Supplies/setsubCategory/" + cl1comb,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["cl1desc"], obj["cl1comb"], true, true);
    selCat.append(option).trigger("change");
    selCat.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

$("#docOrdsupp").on("click", "#btnDeleteSup_delete", function () {
  $("#deleteSupModal").modal("show");
  var key = encodeURIComponent(
    encodeURIComponent(atob($(this).data("docointkey")))
  );
  $("#delsupDoco").val(key);
  $("#delsupformIden").val("delete");
});

$("#frmDeleteSup").on("submit", function (e) {
  $.ajax({
    type: "POST",
    url: baseURL + "DoctorsOrder/deleteSup",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      toastr.success("Order Successfully Deleted!", "Success");
      $("#docOrdsupp").DataTable().ajax.reload();
      $("#deleteSupModal").modal("hide");
    },
    error: function (xhr, desc, err) {
      toastr.error("Error on saving ", xhr);
    },
  });
  return false;
});

function deleteExam() {}

function SelSuppMajor() {
  $("[name$='_supMajor']").select2({
    placeholder: "SELECT CATEGORY",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/Supplies/searchSupMajor",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSupplies: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.ptcode,
            text: item.ptdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("[name$='_supMajor']").on("change", function () {
    var data = ("[name$='_supMajor'] option:selected", this);
    supSub(this.value);
    $("#ptcode").val(this.value);
    $("#selsup_supSub").prop("disabled", false);
  });
}

$("[name$='_supMajor']").on("click", function () {
  $("#selsup_supSub").prop("disabled", true);
  $("#selsup_supSub").select2("val", "");
});

function supSub(ptcode) {
  $("#selsup_supSub").select2({
    placeholder: "SELECT",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Supplies/searchSupSub/" + ptcode,
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSub: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.cl1comb,
            text: item.cl1desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selsup_supSub").on("change", function () {
    var data = $("#selsup_supSub option:selected", this);
    SupplyList(this.value);
  });
}

function SupplyList(cl1comb) {
  var clcode = URLencode(cl1comb);
  var table = $("#supplyList").DataTable({
    ajax: baseURL + "Supplies/searchSupList/" + clcode,
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    oLanguage: {
      sProcessing:
        '<div class="spinner-grow text-success" role="status"><span  class="sr-only">Loading...</span></div>',
    },
    serverside: true,
    paging: true,
    searching: false,
    destroy: true,
    processing: true,
    columns: [
      {
        data: "cl2comb",
        render: function (data, type, full, meta) {
          return (
            '<input type="checkbox" name="id[]"  id="id"  value="' +
            $("<div/>").text(data).html() +
            '">'
          );
        },
      },
      {
        data: "cl2desc",
        render: function (data, type, full, meta) {
          return "<small>" + data + "</small>";
        },
      },
      {
        render: function () {
          return '<select  class="form-control form-control-sm" name="prio[]" id="prio" ><option value="">Select</option> <option value="STAT">URGENT</option> <option value="ROUTIN">ROUTINE</option> </select>';
        },
      },
      {
        render: function () {
          return '<input type="number" class="form-control form-control-sm" name="qty[]" placeholder="0" min="1" id="qty" >';
        },
      },
      {
        render: function () {
          return '<input type="textbox" class="form-control form-control-sm" placeholder="Remarks" name="remark[]" id="remark" >';
        },
      },
    ],
  });
}

function setSupply(key, cl1comb) {
  var table = $("#supplyList").DataTable({
    ajax: baseURL + "DoctorsOrder/supList/" + key + "/" + cl1comb,
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    oLanguage: {
      sProcessing:
        '<div class="spinner-grow text-success" role="status"><span  class="sr-only">Loading...</span></div>',
    },
    serverside: true,
    paging: true,
    searching: false,
    destroy: true,
    processing: true,
    columns: [
      {
        data: "cl2comb",
        render: function (data, type, full, meta) {
          return (
            '<input type="checkbox" name="id[]"  id="id"  value="' +
            $("<div/>").text(data).html() +
            '">'
          );
        },
      },
      {
        data: "cl2desc",
        render: function (data, type, full, meta) {
          return "<small>" + data + "</small>";
        },
      },
      {
        render: function () {
          return '<select  class="form-control form-control-sm" name="prio[]" id="prio" ><option value="">Select</option> <option value="STAT">URGENT</option> <option value="ROUTIN">ROUTINE</option> </select>';
        },
      },
      {
        render: function () {
          return '<input type="number" class="form-control form-control-sm" name="qty[]" placeholder="0" min="1" id="qty" >';
        },
      },
      {
        render: function () {
          return '<input type="textbox" class="form-control form-control-sm" placeholder="Remarks" name="remark[]" id="remark" >';
        },
      },
    ],
  });
}

$("#docOrdsupp").on("click", "tr", function () {
  var selectedData = $(this).hasClass("selected");
  if (selectedData == false) {
    $("#btnCancelSupp").prop("disabled", false);
  } else {
    $("#btnCancelSupp").prop("disabled", true);
  }
});

$("#btnCancelSupp").on("click", function () {
  var rowData = $("#docOrdsupp").DataTable().rows(".selected").data();
  $.each(rowData, function (index, data) {
    $("#listDocoSupp").prepend(
      '<li class="text-danger list-group-item">' +
        "*" +
        data[4] +
        '<input type="hidden" name="docointkey" id="docdrugs" value="' +
        data[0] +
        '">'
    );
  });
  $("#cancelSupplyModal").modal("show");
});

$("#cancelSupplyModal").on("hidden.coreui.modal", function () {
  $("#listDocoSupp li").remove();
  $("#docOrdsupp")
    .DataTable()
    .$("tr.selected")
    .removeClass("bg-success text-white selected");
  $("#btnCancelOrder").prop("disabled", true);
});

$("#frmCancelOrderSupp").on("submit", function (e) {
  var data = $(this).serializeArray();
  $.ajax({
    type: "POST",
    url: baseURL + "DoctorsOrder/cancelOrderSupp",
    data: { data: data, reason: $("#reasonsuppCancel").val() },
    dataType: "JSON",
    success: function (data, response) {
      toastr.warning("Order successfully cancelled!", "Success");
      $("#docOrdsupp").DataTable().ajax.reload();
      $("#cancelSupplyModal").modal("hide");
    },
    error: function (xhr, desc, err) {
      toastr.error("Error on saving ", xhr);
    },
  });
  return false;
});
