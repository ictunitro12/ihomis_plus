function generatechargeslip() {
  var table = $("#pat_tbl").DataTable();
  var rows = table.rows(".select").indexes().toArray();
  var dataJSONSTRING = [];
  for (let i = 0; i < rows.length; i++) {
    var dataArr = {};
    var docointkey = $(table.cells(rows[i], 0).nodes()).text();
    var desc = $(table.cells(rows[i], 3).nodes()).text();
    var amount = $(table.cells(rows[i], 4).nodes()).text();
    $("#events").prepend(
      '<li class="text-success list-group-item"><h6>' +
        desc +
        "</h6>" +
        '<input type="hidden" name="docointkey" id="docointkey" value="' +
        docointkey +
        '">' +
        '<input type="hidden" name="amount" id="amount" value=' +
        amount +
        ">" +
        '<input type="hidden" name="description" id="description" value="' +
        desc +
        '">'
    );
  }
  $("#modalGenerate").modal("show");
  $.get(baseURL + "/Radiology/genchargeSlip", function (data) {
    $("#slipno").text(data);
  });
}

$("#frmGenerate").on("submit", function () {
  var docointkey = $(this)
    .find("input[name='docointkey']")
    .map(function (i, el) {
      return el.value;
    })
    .get();
  var amount = $(this)
    .find("input[name='amount']")
    .map(function (i, el) {
      return el.value;
    })
    .get();
  var description = $(this)
    .find("input[name='description']")
    .map(function (i, el) {
      return el.value;
    })
    .get();
  var pcchrgcod = $("#slipno").text().trim();
  var dataArr = {};
  var dataJSON = [];
  dataArr.docointkey = docointkey;
  dataArr.pcchrgcod = pcchrgcod;
  dataArr.amount = amount;
  dataArr.description = description;
  dataJSON.push(dataArr);
  var orderList_JSONString = JSON.stringify(dataJSON);
  $.ajax({
    type: "POST",
    url: baseURL + "Radiology/savegenChargeslip",
    data: { data: orderList_JSONString },
    dataType: "JSON",
    success: function (data, response) {
      if (data.message) {
        toastr.success(data.message, "Success");
      } else {
        toastr.success("Record saved!", "Success");
      }
      $("#modalGenerate").modal("hide");
      $("#pat_tbl").DataTable().ajax.reload();
    },
    error: function (data, desc, err) {
      if (data.responseJSON.message) {
        toastr.error(data.responseJSON.message, "Error");
      } else {
        toastr.error("Error on saving ", xhr);
      }
    },
  });
  return false;
});

$("#modalGenerate").on("hidden.coreui.modal", function () {
  $("#events li").remove();
});
