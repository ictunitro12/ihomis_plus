$(document).ready(function () {
  const enccode = $("#enccode").val();
  const hpercode = $("#hpercode").val();

  getLaboratoryDiagnosticFindingsData = function (enccode) {
    $.ajax({
      url:
        baseURI +
        "pertinent-laboratory-and-diagnostic-findings/" +
        enccode +
        "/get/",
      type: "GET",
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        bindPLaboratoryDiagnosticFindings(data.data);
      },
    });
  };

  bindPLaboratoryDiagnosticFindings = function (data) {
    $("#laboratory_diagnostic").val(data.remarks);

    //uppercase();
  };

  $("#pertinent_laboratory_diagnostic_form").submit(function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    //formData.append("hpercode", hpercode);
    formData.append("enccode", enccode);

    submitLaboratoryDiagnosticFindings(formData, enccode);
  });

  submitLaboratoryDiagnosticFindings = function (
    formData,
    enccode,
    loadData = false
  ) {
    $.ajax({
      url:
        baseURI +
        "pertinent-laboratory-and-diagnostic-findings/" +
        enccode +
        "/save/",
      type: "POST",
      data: formData,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Success");

        if (loadData) {
          getLaboratoryDiagnosticFindingsData(data.data.enccode);
        }
      },
    });
  };
});
