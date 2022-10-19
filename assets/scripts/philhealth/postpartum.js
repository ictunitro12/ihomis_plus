$(document).ready(function () {
  selDoctor($("#postpartum_form"));
  $("#postpartum_form").submit(function (e) {
    e.preventDefault();

    // convert value to uppercase
    $("#postpartum_form input[type=text]").val(function () {
      //return this.value.toUpperCase();
    });

    let formData = new FormData(this);

    const enccode = $("#enccode").val();

    // get unchecked checkbox
    $.each(
      $("#postpartum_form input[type=checkbox]").filter(function (idx) {
        return $(this).prop("checked") === false;
      }),
      function (idx, el) {
        // attach matched element names to the formData with a chosen value.
        //var emptyVal = "";
        //formData += "&" + $(el).attr("name") + "=" + emptyVal;
        formData.append($(el).attr("name"), "");
      }
    );

    submitPostpartum(formData, enccode);
  });

  submitPostpartum = function (formData, enccode, loadData = false) {
    $.ajax({
      url: baseURI + "postpartum/" + enccode + "/save/",
      type: "POST",
      data: formData,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Success");

        if (loadData) {
          getPostpartumData(data.data.enccode);
        }
      },
    });
  };

  getPostpartumData = function (enccode) {
    $.ajax({
      url: baseURI + "postpartum/" + enccode + "/get/",
      type: "GET",
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        if (data.data !== null) {
          bindPostpartumData(data.data);
        }
      },
    });
  };

  bindPostpartumData = function (data) {
    if (data.woundcare == "Y") {
      $("#woundcare").prop("checked", true);
    }
    $("#woundcare_rem").val(data.woundcare_rem);

    if (data.complication == "Y") {
      $("#complication").prop("checked", true);
    }
    $("#complication_rem").val(data.complication_rem);

    if (data.breastfeeding == "Y") {
      $("#breastfeeding").prop("checked", true);
    }
    $("#breastfeeding_rem").val(data.breastfeeding_rem);

    if (data.fplanning == "Y") {
      $("#fplanning").prop("checked", true);
    }
    $("#fplanning_rem").val(data.fplanning_rem);

    if (data.fpservice == "Y") {
      $("#fpservice").prop("checked", true);
    }
    $("#fpservice_rem").val(data.fpservice_rem);

    if (data.sterilization == "Y") {
      $("#sterilization").prop("checked", true);
    }
    $("#sterilization_rem").val(data.sterilization_rem);

    if (data.postpartumff == "Y") {
      $("#postpartumff").prop("checked", true);
    }
    $("#postpartumff_rem").val(data.postpartumff_rem);

    //$("#attenddr").val(data.attenddr);
    if (data.attenddr) {
      var option = new Option(data.attenddr_name, data.attenddr, true, true);
      $("#attenddr_doc").append(option).trigger("change");
    }

    $("#attendsigndate").val(data.attendsigndate);
  };
});
