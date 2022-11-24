$("#frmDrug").on("submit", function (e) {
    var form = this;
    $.ajax({
      type: "POST",
      url: baseURL + "Pharmacy/saveHmdhdrSub",
      data: new FormData(this),
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success("Record saved!", "Success!");
        $("#modalDrug").modal("hide");
      },
      error: function (xhr, desc, err) {
        toastr.error("Duplicate Entry", "Warning!");
      },
    });
    return false;
  });

  $("#modalDrug").on("hidden.coreui.modal", function (event) {
    $(this).find("input,textarea,select").val("").end();
    $(this).find("input,textarea,select").removeClass("is-valid");
    $(this).find("input,textarea,select").removeClass("is-invalid");
  });
  
  $("#modalDrugAccount").on("hidden.coreui.modal", function (event) {
    $("#stock_tbl").DataTable().ajax.reload();
  });
  