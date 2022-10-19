$(document).ready(function () {
  const enccode = $("#enccode").val();
  const hpercode = $("#hpercode").val();

  getPastMedicalHistoryData = function (enccode) {
    $.ajax({
      url: baseURI + "past-medical-history/" + enccode + "/get/",
      type: "GET",
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        bindPastMedicalHistoryData(data.data);
      },
    });
  };

  bindPastMedicalHistoryData = function (data) {
    $("#past_medical_history").val(data.history);

    //uppercase();
  };

  $("#past_medical_history_form").submit(function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    formData.append("hpercode", hpercode);
    formData.append("enccode", enccode);

    submitPastMedicalHistory(formData, enccode);
  });

  submitPastMedicalHistory = function (formData, enccode, loadData = false) {
    $.ajax({
      url: baseURI + "past-medical-history/" + enccode + "/save/",
      type: "POST",
      data: formData,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Success");

        if (loadData) {
          getPastMedicalHistoryData(data.data.enccode);
        }
      },
    });
  };
});
