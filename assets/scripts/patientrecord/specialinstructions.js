function setSpecialInstrcutions(enccode) {
  $("#specialInstructionForm").trigger("reset");
  var enc = encodeURIComponent(encodeURIComponent(enccode));
  $.ajax({
    url: baseURL + "special-instructions/" + enc + "/get/",
    type: "GET",
    dataType: "JSON",
    processData: false,
    contentType: false,
    success: function (data, response) {
      $("#specialInstruction").val(data.dcspinst);
      $("#nextvisitDate").val(data.nvdate);
    },
  });
}

$("#btnSaveInstructions").click(function () {
  var form = $("#specialInstructionForm")[0]; // You need to use standard javascript object here
  var formData = new FormData(form);
  formData.set("enccode", enccode);
  $.ajax({
    url: baseURL + "special-instructions/save",
    type: "POST",
    dataType: "JSON",
    data: formData,
    processData: false,
    contentType: false,
    success: function (data, response) {
      toastr.success(data.message, "Success");
    },
    error: function (data, status) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});
