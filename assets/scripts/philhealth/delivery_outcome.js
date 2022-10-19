$(document).ready(function () {
  $("#delivery_outcome_form").submit(function (e) {
    e.preventDefault();

    // convert value to uppercase
    $("#delivery_outcome_form input[type=text]").val(function () {
      //return this.value.toUpperCase();
    });

    let formData = new FormData(this);

    const enccode = $("#enccode").val();

    submitDeliveryOutcome(formData, enccode);
  });

  submitDeliveryOutcome = function (formData, enccode, loadData = false) {
    $.ajax({
      url: baseURI + "delivery-outcome/" + enccode + "/save/",
      type: "POST",
      data: formData,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Success");

        if (loadData) {
          getDeliveryOutcomeData(data.data.enccode);
        }
      },
    });
  };

  getDeliveryOutcomeData = function (enccode) {
    $.ajax({
      url: baseURI + "delivery-outcome/" + enccode + "/get/",
      type: "GET",
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        if (data.data !== null) {
          bindDeliveryOutcomeData(data.data);
        }
      },
    });
  };

  bindDeliveryOutcomeData = function (data) {
    $("#aog").val(data.obindex);
    $("#apgar").val(data.apgar);
    $("#del_presentation").val(data.del_presentation);
    $("#deliverydte").val(data.deliverydte);
    $("#deliverytme").val(data.deliverytme);
    $("#fetal").val(data.fetal);
    $("#gender").val(data.gender);
    $("#lmp").val(data.lmp);
    $("#nextconsultdte").val(setDate(data.nextconsultdte));
    $("#obindex").val(data.obindex);
    $("#weight").val(data.obindex);
  };
});
