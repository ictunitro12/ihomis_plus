//List
$(document).ready(function () {
  SelDiscType();
});
function Discounts(enccode, hpercode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var data = new Object();
  data.search = false;
  data.paging = true;
  data.info = false;
  data.orderable = false;

  data.id = "chargesDisc";
  (data.link = baseURL + "Billing/chargesDiscList/" + enctr + "/" + hpercode),
    (data.type = "POST");
  (data.coldef = [
    {
      targets: [0, 1],
      visible: false,
      orderable: false,
    },

    {
      targets: [7],
      searchable: true,
      render: function (data, type, row) {
        switch (data) {
          case "P":
            return "PERCENT(%)";
            break;
          case "A":
            return "AMOUNT(.00)";
            break;
          default:
            return "N/A";
        }
      },
    },
  ]),
    loadTable(data);
}
//PDF
$("#chargesDisc").on("click", "#btnDiscountInfo", function () {
  $("#modalDiscPDF").modal("show");
  var enccode = URLencode($.session.get("enccode"));
  var hpercode = URLencode($.session.get("hpercode"));
  var refno = URLencode($(this).data("refno"));
  var src = "Billing/discountPDF/" + enccode + "/" + hpercode + "/" + refno;
  var x = (document.getElementById("discountPDF").src = src);
});

//Add
$("#btnDiscount_Add").on("click", function () {
  $("#ModalDiscount_modal").modal("show");
  SelDiscType();
  $("#discformIden").val("insert");
  $("#dateDisc").val(getTimeLocale());
  $("#accountNo").val($("#account").text());
  $("#discEnccode").val($.session.get("enccode"));
  $("#discHpercode").val($.session.get("hpercode"));
});

//Edit
$("#chargesDisc").on("click", "#btnDiscount_Edit", function () {
  $("#typeDisc_disc").empty();
  $("#ModalDiscount_modal").modal("show");
  $("#discformIden").val("update");
  var enccode = URLencode($(this).data("enccode"));
  var pdrefno = $(this).data("refno");
  var discikey = $(this).data("discikey");

  $("#discEnccodeOld").val(enccode);
  $("#discRefnoOld").val(pdrefno);
  $("#discKeyOld").val(discikey);

  var Obj = new Object();
  Obj.type = "POST";
  var discikey = $(this).data("discikey");
  Obj.url =
    baseURL +
    "Billing/discInformation/" +
    enccode +
    "/" +
    pdrefno +
    "/" +
    discikey;
  Obj.data = "JSON";
  var row = Information(Obj);
  $("#discEnccode").val($.session.get("enccode"));
  $("#discHpercode").val($.session.get("hpercode"));
  $("#dateDisc").val(setTimeLocale(row["pddte"]));
  $("#refDisc").val(row["pdrefno"]);
  $('select[name="codeType"]').val(row["pdtyp"]);
  var newOption = new Option(row["discdesc"], row["discikey"], false, false);
  $("#typeDisc_disc").append(newOption).trigger("change");
  $("#sodDIsc option[value='" + row["dischrgorder"] + "']").prop(
    "selected",
    true
  );
  $("#atDisc option[value='" + row["discto"] + "']").prop("selected", true);
  if (row["pdtyp"] == "A") {
    $("#amountDisc").prop("readonly", false);
  }
  $("#amountDisc").val(row["pdamt"]);
});
//Delete
$("#chargesDisc").on("click", "#btnDiscount_Delete", function () {
  $("#ModalDiscountDelete").modal("show");
  $("#deleteDiscount").val("delete");
  $("#discEnccodeDelete").val($.session.get("enccode"));
  $("#discRefnoDelete").val($(this).data("refno"));
  $("#discKeyDelete").val($(this).data("discikey"));
});

$("#frmDiscountDelete").on("submit", function (e) {
  var form = this;
  $.ajax({
    type: "POST",
    url: baseURL + "Billing/saveDiscount",
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
//Delete

//Information
$("#chargesDisc").on("click", "#btnDiscount_Info", function () {
  $("#ModalDiscount").modal("show");
  $("#delformIden").val("delete");
  $("#delID").val($(this).data("refno"));
  var enctr = encodeURIComponent(encodeURIComponent($.session.get("enccode")));

  var row = info(enctr, $(this).data("refno"));

  var disc = discountInfo(row["discikey"]);
  var pdtype = row["pdtyp"] === "P" ? "Percent" : "Amount";

  $("#discRef").text(row["pdrefno"]);
  $("#discCode").text(row["discikey"]);
  $("#discDesc").text(disc["discdesc"]);
  $("#discAmount").text(row["pdamt"]);
  $("#discType").text(pdtype);
});

function info(enctr, refno) {
  var Obj = new Object();
  Obj.type = "POST";
  Obj.url = baseURL + "Billing/discInformation/" + enctr + "/" + refno;
  Obj.data = "JSON";
  var row = Information(Obj);
  return row;
}

function discountInfo(id) {
  var Obj = new Object();
  Obj.type = "POST";
  Obj.url = baseURL + "Billing/discById/" + id;
  Obj.data = "JSON";
  var row = Information(Obj);
  return row;
}

//Information

$("#frmDiscount_form").validate({
  submitHandler: function (form) {
    var POSTURL = baseURL + "Billing/saveDiscount";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(form).serialize(),
      success: function (data) {
        if ($("#discformIden").val() == "insert") {
          $("#ModalDiscount_modal").modal("hide");
          Discounts($.session.get("enccode"), $.session.get("hpercode"));
          toastr.success("Discount Successfully Saved! ", "Success");
        } else if ($("#discformIden").val() == "update") {
          $("#ModalDiscount_modal").modal("hide");
          Discounts($.session.get("enccode"), $.session.get("hpercode"));
          toastr.success("Discount Successfully Updated! ", "Success");
        } else {
          toastr.error("Error:No post", "Error");
        }
      },
      error: function (data, response) {
        toastr.error(data.responseJSON.message, "Error");
      },
    });
    return false;
    $(form).submit();
  },
  rules: {
    dateDisc: "required",
    refDisc: "required",
    amountDisc: "required",
    typeDisc_disc: "required",
    codeType: "required",
  },
  messages: {
    dateDisc: "Date is required!",
    refDisc: "Reference code is required!",
    amountDisc: "Amount is required!",
    typeDisc_disc: "Discount code is required!",
    codeType: "Discount type is required",
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

function SelDiscType() {
  $("#typeDisc_disc").select2({
    allowClear: true,
    placeholder: "Type of Discount",
    theme: "coreui",
    ajax: {
      url: baseURL + "Billing/discList",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDiscount: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.discikey,
            text: item.discdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });

  $("#typeDisc_disc").on("change", function () {
    var discInfo = discountInfo($("#typeDisc_disc").val());
    if (discInfo != null) {
      $("#amountDisc").val(discInfo["disamt"]);
      if (discInfo.disctyp == "P") {
        $("#amountDisc").prop("readonly", true);
        $("#codeType").val("P");
      } else {
        $("#amountDisc").prop("readonly", false);
        $("#codeType").val("A");
      }
    }
  });
}

$("#codeType").change(function () {
  if ($(this).val() == "A") {
    $("#amountDisc").attr("readonly", false);
  }

  if ($(this).val() == "P") {
    $("#amountDisc").attr("readonly", true);
  }
});
