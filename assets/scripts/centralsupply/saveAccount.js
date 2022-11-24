$("#frmItem").on("submit", function (e) {
    var form = this;
      $.ajax({
        type: "POST",
        url: baseURL + "Central_Supply/saveHclass2Bal",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data, response) {
          toastr.success("Record saved!", "Success!");
          $("#medAcctTbl").DataTable().ajax.reload();
          $("#modalItem").modal("hide");
        },
        error: function (xhr, desc, err) {
          toastr.error("Duplicate Entry", "Warning!");
        },
      });
      return false;
  });

  $("#modalItem").on("hidden.coreui.modal", function (event) {
    $(this).find("input,textarea,select").val("").end();
    $(this).find("input,textarea,select").removeClass("is-valid");
    $(this).find("input,textarea,select").removeClass("is-invalid");
  });
 