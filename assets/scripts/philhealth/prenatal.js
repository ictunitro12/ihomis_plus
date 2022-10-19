$(document).ready(function () {
  $("#prenatal_form").submit(function (e) {
    e.preventDefault();

    // convert value to uppercase
    $("#prenatal_form input[type=text]").val(function () {
      //return this.value.toUpperCase();
    });

    let formData = new FormData(this);

    formData.delete("admission_diagnosis");

    const enccode = $("#enccode").val();

    // get unchecked checkbox
    $.each(
      $("#prenatal_form input[type=checkbox]").filter(function (idx) {
        return $(this).prop("checked") === false;
      }),
      function (idx, el) {
        formData.append($(el).attr("name"), "");
      }
    );

    submitPrenatal(formData, enccode);
  });

  submitPrenatal = function (formData, enccode, loadData = false) {
    $.ajax({
      url: baseURI + "prenatal/" + enccode + "/save/",
      type: "POST",
      data: formData,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Success");

        if (loadData) {
          getPrenatalData(data.data.enccode);
        }
      },
    });
  };

  getPrenatalData = function (enccode) {
    $.ajax({
      url: baseURI + "prenatal/" + enccode + "/get/",
      type: "GET",
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        if (data.data !== null) {
          bindPrenatalData(data.data);
        }
      },
    });
  };

  bindPrenatalData = function (data) {
    if (data.asthma == "Y") {
      $("#asthma").prop("checked", true);
    }

    if (data.vsnormal == "Y") {
      $("#vsnormal").prop("checked", true);
    }

    if (data.thyroid == "Y") {
      $("#thyroid").prop("checked", true);
    }

    if (data.bleeding == "Y") {
      $("#bleeding").prop("checked", true);
    }

    if (data.bleeding == "Y") {
      $("#bleeding").prop("checked", true);
    }

    if (data.cesarian == "Y") {
      $("#cesarian").prop("checked", true);
    }

    if (data.contraction == "Y") {
      $("#cesarian").prop("checked", true);
    }

    if (data.diabetes == "Y") {
      $("#diabetes").prop("checked", true);
    }

    if (data.eclampsia == "Y") {
      $("#eclampsia").prop("checked", true);
    }

    if (data.epilepsy == "Y") {
      $("#epilepsy").prop("checked", true);
    }

    if (data.heart == "Y") {
      $("#heart").prop("checked", true);
    }

    if (data.hypertension == "Y") {
      $("#hypertension").prop("checked", true);
    }

    if (data.lowrisk == "Y") {
      $("#lowrisk").prop("checked", true);
    }

    // radio button
    if (data.mcp == "Y") {
      $("input[name=mcp][value='Y']").prop("checked", true);
    }

    if (data.mcp == "N") {
      $("input[name=mcp][value='N']").prop("checked", true);
    }

    if (data.miscarriage == "Y") {
      $("#miscarriage").prop("checked", true);
    }

    if (data.multiple == "Y") {
      $("#multiple").prop("checked", true);
    }

    if (data.myoma == "Y") {
      $("#myoma").prop("checked", true);
    }

    if (data.myonectomy == "Y") {
      $("#myonectomy").prop("checked", true);
    }

    if (data.obesity == "Y") {
      $("#obesity").prop("checked", true);
    }

    if (data.ovarian == "Y") {
      $("#ovarian").prop("checked", true);
    }

    if (data.placenta == "Y") {
      $("#placenta").prop("checked", true);
    }

    if (data.preeclampsia == "Y") {
      $("#preeclampsia").prop("checked", true);
    }

    if (data.renal == "Y") {
      $("#renal").prop("checked", true);
    }

    if (data.stillbirth == "Y") {
      $("#stillbirth").prop("checked", true);
    }

    $("#lmp").val(data.lmp);
    $("#expectdeliverydte").val(data.expectdeliverydte);

    $("#aog2").val(data.aog2);
    $("#aog3").val(data.aog3);
    $("#aog4").val(data.aog4);
    $("#aog5").val(data.aog5);
    $("#aog6").val(data.aog6);
    $("#aog7").val(data.aog7);
    $("#aog8").val(data.aog8);
    $("#aog9").val(data.aog9);
    $("#aog10").val(data.aog10);
    $("#aog11").val(data.aog11);
    $("#aog12").val(data.aog12);

    $("#blood2").val(data.blood2);
    $("#blood3").val(data.blood3);
    $("#blood4").val(data.blood4);
    $("#blood5").val(data.blood5);
    $("#blood6").val(data.blood6);
    $("#blood7").val(data.blood7);
    $("#blood8").val(data.blood8);
    $("#blood9").val(data.blood9);
    $("#blood10").val(data.blood10);
    $("#blood11").val(data.blood11);
    $("#blood12").val(data.blood12);

    $("#cardiac2").val(data.cardiac2);
    $("#cardiac3").val(data.cardiac3);
    $("#cardiac4").val(data.cardiac4);
    $("#cardiac5").val(data.cardiac5);
    $("#cardiac6").val(data.cardiac6);
    $("#cardiac7").val(data.cardiac7);
    $("#cardiac8").val(data.cardiac8);
    $("#cardiac9").val(data.cardiac9);
    $("#cardiac10").val(data.cardiac10);
    $("#cardiac11").val(data.cardiac11);
    $("#cardiac12").val(data.cardiac12);

    $("#menarch").val(data.menarch);
    $("#ob_a").val(data.ob_a);
    $("#ob_g").val(data.ob_g);
    $("#ob_l").val(data.ob_l);
    $("#ob_p").val(data.ob_p);
    $("#ob_p1").val(data.ob_p1);
    $("#ob_t").val(data.ob_t);

    $("#prenataldte").val(data.prenataldte);
    $("#prenataldte2").val(data.prenataldte2);
    $("#prenataldte3").val(data.prenataldte3);
    $("#prenataldte4").val(data.prenataldte4);
    $("#prenataldte5").val(data.prenataldte5);
    $("#prenataldte6").val(data.prenataldte6);
    $("#prenataldte7").val(data.prenataldte7);
    $("#prenataldte8").val(data.prenataldte8);
    $("#prenataldte9").val(data.prenataldte9);
    $("#prenataldte10").val(data.prenataldte10);
    $("#prenataldte11").val(data.prenataldte11);
    $("#prenataldte12").val(data.prenataldte12);

    $("#respiratory2").val(data.respiratory2);
    $("#respiratory3").val(data.respiratory3);
    $("#respiratory4").val(data.respiratory4);
    $("#respiratory5").val(data.respiratory5);
    $("#respiratory6").val(data.respiratory6);
    $("#respiratory7").val(data.respiratory7);
    $("#respiratory8").val(data.respiratory8);
    $("#respiratory9").val(data.respiratory9);
    $("#respiratory10").val(data.respiratory10);
    $("#respiratory11").val(data.respiratory11);
    $("#respiratory12").val(data.respiratory12);

    $("#temperature2").val(data.temperature2);
    $("#temperature3").val(data.temperature3);
    $("#temperature4").val(data.temperature4);
    $("#temperature5").val(data.temperature5);
    $("#temperature6").val(data.temperature6);
    $("#temperature7").val(data.temperature7);
    $("#temperature8").val(data.temperature8);
    $("#temperature9").val(data.temperature9);
    $("#temperature10").val(data.temperature10);
    $("#temperature11").val(data.temperature11);
    $("#temperature12").val(data.temperature12);

    $("#weight2").val(data.weight2);
    $("#weight3").val(data.weight3);
    $("#weight4").val(data.weight4);
    $("#weight5").val(data.weight5);
    $("#weight6").val(data.weight6);
    $("#weight7").val(data.weight7);
    $("#weight8").val(data.weight8);
    $("#weight9").val(data.weight9);
    $("#weight10").val(data.weight10);
    $("#weight11").val(data.weight11);
    $("#weight12").val(data.weight12);
  };
});
