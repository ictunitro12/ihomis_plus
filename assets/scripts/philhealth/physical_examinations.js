var hpercode = "";
var enccode = "";
$(document).ready(function () {
  enccode = $("#enccode").val();
  hpercode = $("#hpercode").val();

  $("#physical_examination_form").validate({
    rules: {
      alteredsensorium: {
        required: {
          depends: function (element) {
            if (
              $("#sensorium").prop("checked") &&
              $("#alteredsensorium").val() == ""
            ) {
              return true;
            } else {
              return false;
            }
          },
        },
        maxlength: 2000,
      },
      heent_others: {
        maxlength: 2000,
      },
      cl_others: {
        maxlength: 2000,
      },
      cvs_others: {
        maxlength: 2000,
      },
      abd_others: {
        maxlength: 2000,
      },
      guie_others: {
        maxlength: 2000,
      },
      skinex_others: {
        maxlength: 2000,
      },
      neuro_others: {
        maxlength: 2000,
      },
    },
    messages: {
      alteredsensorium: {
        required: "Altered sensorium is required!",
        maxlength: "Altered sensorium entry exceeds 2000 characters!",
      },
      heent_others: "Entry exceeds 2000 characters!",
      cl_others: {
        maxlength: "Entry exceeds 2000 characters!",
      },
      cvs_others: {
        maxlength: "Entry exceeds 2000 characters!",
      },
      abd_others: {
        maxlength: "Entry exceeds 2000 characters!",
      },
      guie_others: {
        maxlength: "Entry exceeds 2000 characters!",
      },
      skinex_others: {
        maxlength: "Entry exceeds 2000 characters!",
      },
      neuro_others: {
        maxlength: "Entry exceeds 2000 characters!",
      },
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });
});

function validate_physical_examination_form() {
  if ($("#physical_examination_form").valid() == true) {
    return true;
  } else {
    toastr.warning("Please correct/fill up required fields!", "Warning");
    return false;
  }
}

/* Altered Sensorium */
$("#sensorium").change(function () {
  if (this.checked) {
    $("#alteredsensorium").prop("disabled", false);
    $("#awakealert").prop("checked", false);
  } else {
    $("#alteredsensorium").prop("disabled", true).val("");
    $("#alteredsensorium").removeClass("is-invalid");
  }
});

$("#awakealert").change(function () {
  if (this.checked) {
    $("#sensorium").prop("checked", false);
    $("#alteredsensorium").prop("disabled", true).val("");
    $("#alteredsensorium").removeClass("is-invalid");
  }
});

$("#heent_essentiallynormal").change(function () {
  if (this.checked) {
    $(".heent input").not("#heent_essentiallynormal").prop("checked", false);
    $(".heent #heent_others").val("");
    $(".heent #heent_others").prop("disabled", true);
    $(".heent #heent_others").removeClass("is-invalid");
  } else {
    $(".heent #heent_others").prop("disabled", false);
  }
});

$(".heent input")
  .not("#heent_essentiallynormal")
  .change(function () {
    if (this.checked) {
      $("#heent_essentiallynormal").prop("checked", false);
      $(".heent #heent_others").prop("disabled", false);
    }
  });

$("#cl_essentiallynormal").change(function () {
  if (this.checked) {
    $(".chest input").not("#cl_essentiallynormal").prop("checked", false);
    $(".chest #cl_others").val("");
    $(".chest #cl_others").prop("disabled", true);
    $(".chest #cl_others").removeClass("is-invalid");
  } else {
    $(".chest #cl_others").prop("disabled", false);
  }
});

$(".chest input")
  .not("#cl_essentiallynormal")
  .change(function () {
    if (this.checked) {
      $("#cl_essentiallynormal").prop("checked", false);
      $(".chest #cl_others").prop("disabled", false);
    }
  });

$("#cvs_essentiallynormal").change(function () {
  if (this.checked) {
    $(".cvs input").not("#cvs_essentiallynormal").prop("checked", false);
    $(".cvs #cvs_others").val("");
    $(".cvs #cvs_others").prop("disabled", true);
    $(".cvs #cvs_others").removeClass("is-invalid");
  } else {
    $(".cvs #cvs_others").prop("disabled", false);
  }
});

$(".cvs input")
  .not("#cvs_essentiallynormal")
  .change(function () {
    if (this.checked) {
      $("#cvs_essentiallynormal").prop("checked", false);
      $(".cvs #cvs_others").prop("disabled", false);
    }
  });

$("#abd_essentiallynormal").change(function () {
  if (this.checked) {
    $(".abdomen input").not("#abd_essentiallynormal").prop("checked", false);
    $(".abdomen #abd_others").val("");
    $(".abdomen #abd_others").prop("disabled", true);
    $(".abdomen #abd_others").removeClass("is-invalid");
  } else {
    $(".abdomen #abd_others").prop("disabled", false);
  }
});

$(".abdomen input")
  .not("#abd_essentiallynormal")
  .change(function () {
    if (this.checked) {
      $("#abd_essentiallynormal").prop("checked", false);
      $(".abdomen #abd_others").prop("disabled", false);
    }
  });

$("#guie_essentiallynormal").change(function () {
  if (this.checked) {
    $(".guie input").not("#guie_essentiallynormal").prop("checked", false);
    $(".guie #guie_others").val("");
    $(".guie #guie_others").prop("disabled", true);
    $(".guie #guie_others").removeClass("is-invalid");
  } else {
    $(".guie #guie_others").prop("disabled", false);
  }
});

$(".guie input")
  .not("#guie_essentiallynormal")
  .change(function () {
    if (this.checked) {
      $("#guie_essentiallynormal").prop("checked", false);
      $(".guie #guie_others").prop("disabled", false);
    }
  });

$("#skinex_essentiallynormal").change(function () {
  if (this.checked) {
    $(".skinex input").not("#skinex_essentiallynormal").prop("checked", false);
    $(".skinex #skinex_others").val("");
    $(".skinex #skinex_others").prop("disabled", true);
    $(".skinex #skinex_others").removeClass("is-invalid");
  } else {
    $(".skinex #skinex_others").prop("disabled", false);
  }
});

$(".skinex input")
  .not("#skinex_essentiallynormal")
  .change(function () {
    if (this.checked) {
      $("#skinex_essentiallynormal").prop("checked", false);
      $(".skinex #skinex_others").prop("disabled", false);
    }
  });

$("#neuro_essentiallynormal").change(function () {
  if (this.checked) {
    $(".neuro input").not("#neuro_essentiallynormal").prop("checked", false);
    $(".neuro #neuro_others").val("");
    $(".neuro #neuro_others").prop("disabled", true);
    $(".neuro #neuro_others").removeClass("is-invalid");
  } else {
    $(".neuro #neuro_others").prop("disabled", false);
  }
});

$(".neuro input")
  .not("#neuro_essentiallynormal")
  .change(function () {
    if (this.checked) {
      $("#neuro_essentiallynormal").prop("checked", false);
      $(".neuro #neuro_others").prop("disabled", false);
    }
  });

$("#physical_examination_form").submit(function (e) {
  e.preventDefault();

  // convert value to uppercase
  $("#physical_examination_form input[type=text]").val(function () {
    //return this.value.toUpperCase();
  });

  let formData = new FormData(this);

  formData.append("hpercode", hpercode);

  formData.append("physical[petype]", "PEADM");

  // get unchecked checkbox
  $.each(
    $("#physical_examination_form input[type=checkbox]").filter(function (idx) {
      return $(this).prop("checked") === false;
    }),
    function (idx, el) {
      formData.append($(el).attr("name"), "");
    }
  );

  submitPhysicalExamination(formData, enccode);
});

submitPhysicalExamination = function (formData, enccode, loadData = false) {
  $.ajax({
    url: baseURI + "physical-examinations/" + enccode + "/save/",
    type: "POST",
    data: formData,
    dataType: "JSON",
    processData: false,
    contentType: false,
    success: function (data, response) {
      toastr.success(data.message, "Success");

      if (loadData) {
        getPhysicalExaminationData(enccode);
      }
    },
  });
};

getPhysicalExaminationData = function (enccode) {
  $.ajax({
    url: baseURI + "physical-examinations/" + enccode + "/get/",
    type: "GET",
    dataType: "JSON",
    processData: false,
    contentType: false,
    success: function (data, response) {
      if (data.data != null) {
        bindPhysicalExaminationData(data.data);
      }
    },
  });
};

bindPhysicalExaminationData = function (data) {
  if (data.abd_abdrigidity !== null && data.abd_abdrigidity !== "") {
    $("#abd_abdrigidity").prop("checked", true);
  } else {
    $("#abd_abdrigidity").prop("checked", false);
  }

  if (data.abd_abdtenderness !== null && data.abd_abdtenderness !== "") {
    $("#abd_abdtenderness").prop("checked", true);
  } else {
    $("#abd_abdtenderness").prop("checked", false);
  }

  if (
    data.abd_essentiallynormal !== null &&
    data.abd_essentiallynormal !== ""
  ) {
    $("#abd_essentiallynormal").prop("checked", true);
    $(".abdomen #abd_others").prop("disabled", true);
  } else {
    $("#abd_essentiallynormal").prop("checked", false);
    $(".abdomen #abd_others").prop("disabled", false);
  }

  if (data.abd_hyperbowelsounds !== null && data.abd_hyperbowelsounds !== "") {
    $("#abd_hyperbowelsounds").prop("checked", true);
  } else {
    $("#abd_hyperbowelsounds").prop("checked", false);
  }

  if (data.abd_palpablemass !== null && data.abd_palpablemass !== "") {
    $("#abd_palpablemass").prop("checked", true);
  } else {
    $("#abd_palpablemass").prop("checked", false);
  }

  if (data.abd_tympdullabdomen !== null && data.abd_tympdullabdomen !== "") {
    $("#abd_tympdullabdomen").prop("checked", true);
  } else {
    $("#abd_tympdullabdomen").prop("checked", false);
  }

  if (
    data.abd_uterinecontraction !== null &&
    data.abd_uterinecontraction !== ""
  ) {
    $("#abd_uterinecontraction").prop("checked", true);
  } else {
    $("#abd_uterinecontraction").prop("checked", false);
  }

  $("#abd_others").val(data.abd_others);

  //
  if (data.awakealert == "Y") {
    $("#awakealert").prop("checked", true);
  } else {
    $("#awakealert").prop("checked", false);
  }

  if (data.alteredsensorium !== "" && data.alteredsensorium !== null) {
    $("#sensorium").prop("checked", true);
    $("#alteredsensorium").val(data.alteredsensorium);
  } else {
    $("#sensorium").prop("checked", false);
    $("#alteredsensorium").prop("disabled", true).val("");
  }

  //
  if (
    data.cl_asymchestexpansion !== null &&
    data.cl_asymchestexpansion !== ""
  ) {
    $("#cl_asymchestexpansion").prop("checked", true);
  } else {
    $("#cl_asymchestexpansion").prop("checked", false);
  }

  if (data.cl_decbreathsounds !== null && data.cl_decbreathsounds !== "") {
    $("#cl_decbreathsounds").prop("checked", true);
  } else {
    $("#cl_decbreathsounds").prop("checked", false);
  }

  if (data.cl_essentiallynormal !== null && data.cl_essentiallynormal !== "") {
    $("#cl_essentiallynormal").prop("checked", true);
    $(".chest #cl_others").prop("disabled", true);
  } else {
    $("#cl_essentiallynormal").prop("checked", false);
    $(".chest #cl_others").prop("disabled", false);
  }

  if (
    data.cl_interribclaretract !== null &&
    data.cl_interribclaretract !== ""
  ) {
    $("#cl_interribclaretract").prop("checked", true);
  } else {
    $("#cl_interribclaretract").prop("checked", false);
  }

  if (data.cl_lumpoverbreast !== null && data.cl_lumpoverbreast !== "") {
    $("#cl_lumpoverbreast").prop("checked", true);
  } else {
    $("#cl_lumpoverbreast").prop("checked", false);
  }

  if (
    data.cl_ralescracklesrhonchi !== null &&
    data.cl_ralescracklesrhonchi !== ""
  ) {
    $("#cl_ralescracklesrhonchi").prop("checked", true);
  } else {
    $("#cl_ralescracklesrhonchi").prop("checked", false);
  }

  if (data.cl_wheezes !== null && data.cl_wheezes !== "") {
    $("#cl_wheezes").prop("checked", true);
  } else {
    $("#cl_wheezes").prop("checked", false);
  }

  $("#cl_others").val(data.cl_others);

  //
  if (data.cvs_disapexbeat !== null && data.cvs_disapexbeat !== "") {
    $("#cvs_disapexbeat").prop("checked", true);
  } else {
    $("#cvs_disapexbeat").prop("checked", false);
  }

  if (
    data.cvs_essentiallynormal !== null &&
    data.cvs_essentiallynormal !== ""
  ) {
    $("#cvs_essentiallynormal").prop("checked", true);
    $(".cvs #cvs_others").prop("disabled", true);
  } else {
    $("#cvs_essentiallynormal").prop("checked", false);
    $(".cvs #cvs_others").prop("disabled", false);
  }

  if (data.cvs_heavesthrills !== null && data.cvs_heavesthrills !== "") {
    $("#cvs_heavesthrills").prop("checked", true);
  } else {
    $("#cvs_heavesthrills").prop("checked", false);
  }

  if (data.cvs_irregularrhythm !== null && data.cvs_irregularrhythm !== "") {
    $("#cvs_irregularrhythm").prop("checked", true);
  } else {
    $("#cvs_irregularrhythm").prop("checked", false);
  }

  if (
    data.cvs_muffledheartsounds !== null &&
    data.cvs_muffledheartsounds !== ""
  ) {
    $("#cvs_muffledheartsounds").prop("checked", true);
  } else {
    $("#cvs_muffledheartsounds").prop("checked", false);
  }

  if (data.cvs_murmur !== null && data.cvs_murmur !== "") {
    $("#cvs_murmur").prop("checked", true);
  } else {
    $("#cvs_murmur").prop("checked", false);
  }

  if (data.cvs_pericarbulge !== null && data.cvs_pericarbulge !== "") {
    $("#cvs_pericarbulge").prop("checked", true);
  } else {
    $("#cvs_pericarbulge").prop("checked", false);
  }

  $("#cvs_others").val(data.cvs_others);

  //
  if (
    data.guie_bldstainedinexamfinger !== null &&
    data.guie_bldstainedinexamfinger !== ""
  ) {
    $("#guie_bldstainedinexamfinger").prop("checked", true);
  } else {
    $("#guie_bldstainedinexamfinger").prop("checked", false);
  }

  if (
    data.guie_cervicaldilatation !== null &&
    data.guie_cervicaldilatation !== ""
  ) {
    $("#guie_cervicaldilatation").prop("checked", true);
  } else {
    $("#guie_cervicaldilatation").prop("checked", false);
  }

  if (
    data.guie_essentiallynormal !== null &&
    data.guie_essentiallynormal !== ""
  ) {
    $("#guie_essentiallynormal").prop("checked", true);
    $(".guie #guie_others").prop("disabled", true);
  } else {
    $("#guie_essentiallynormal").prop("checked", false);
    $(".guie #guie_others").prop("disabled", false);
  }

  if (data.guie_presenceabnodis !== null && data.guie_presenceabnodis !== "") {
    $("#guie_presenceabnodis").prop("checked", true);
  } else {
    $("#guie_presenceabnodis").prop("checked", false);
  }

  $("#guie_others").val(data.guie_others);

  //
  if (data.heent_abnopupireact !== null && data.heent_abnopupireact !== "") {
    $("#heent_abnopupireact").prop("checked", true);
  } else {
    $("#heent_abnopupireact").prop("checked", false);
  }

  if (data.heent_cervlympadeno !== null && data.heent_cervlympadeno !== "") {
    $("#heent_cervlympadeno").prop("checked", true);
  } else {
    $("#heent_cervlympadeno").prop("checked", false);
  }

  if (
    data.heent_drymucousmembrane !== null &&
    data.heent_drymucousmembrane !== ""
  ) {
    $("#heent_drymucousmembrane").prop("checked", true);
  } else {
    $("#heent_drymucousmembrane").prop("checked", false);
  }

  if (
    data.heent_essentiallynormal !== null &&
    data.heent_essentiallynormal !== ""
  ) {
    $("#heent_essentiallynormal").prop("checked", true);
    $(".heent #heent_others").prop("disabled", true);
  } else {
    $("#heent_essentiallynormal").prop("checked", false);
    $(".heent #heent_others").prop("disabled", false);
  }

  if (data.heent_ictericsclerae !== null && data.heent_ictericsclerae !== "") {
    $("#heent_ictericsclerae").prop("checked", true);
  } else {
    $("#heent_ictericsclerae").prop("checked", false);
  }

  if (
    data.heent_paleconjunctivae !== null &&
    data.heent_paleconjunctivae !== ""
  ) {
    $("#heent_paleconjunctivae").prop("checked", true);
  } else {
    $("#heent_paleconjunctivae").prop("checked", false);
  }

  if (data.heent_sunkeneyeballs !== null && data.heent_sunkeneyeballs !== "") {
    $("#heent_sunkeneyeballs").prop("checked", true);
  } else {
    $("#heent_sunkeneyeballs").prop("checked", false);
  }

  if (
    data.heent_sunkenfontanelle !== null &&
    data.heent_sunkenfontanelle !== ""
  ) {
    $("#heent_sunkenfontanelle").prop("checked", true);
  } else {
    $("#heent_sunkenfontanelle").prop("checked", false);
  }

  $("#heent_others").val(data.heent_others);

  //
  if (
    data.neuro_abnodecsensation !== null &&
    data.neuro_abnodecsensation !== ""
  ) {
    $("#neuro_abnodecsensation").prop("checked", true);
  } else {
    $("#neuro_abnodecsensation").prop("checked", false);
  }

  if (
    data.neuro_abnopositionsense !== null &&
    data.neuro_abnopositionsense !== ""
  ) {
    $("#neuro_abnopositionsense").prop("checked", true);
  } else {
    $("#neuro_abnopositionsense").prop("checked", false);
  }

  if (data.neuro_abnoreflexes !== null && data.neuro_abnoreflexes !== "") {
    $("#neuro_abnoreflexes").prop("checked", true);
  } else {
    $("#neuro_abnoreflexes").prop("checked", false);
  }

  if (data.neuro_abnormalgait !== null && data.neuro_abnormalgait !== "") {
    $("#neuro_abnormalgait").prop("checked", true);
  } else {
    $("#neuro_abnormalgait").prop("checked", false);
  }

  if (
    data.neuro_essentiallynormal !== null &&
    data.neuro_essentiallynormal !== ""
  ) {
    $("#neuro_essentiallynormal").prop("checked", true);
    $(".neuro #neuro_others").prop("disabled", true);
  } else {
    $("#neuro_essentiallynormal").prop("checked", false);
    $(".neuro #neuro_others").prop("disabled", false);
  }

  if (
    data.neuro_pooralteredmemory !== null &&
    data.neuro_pooralteredmemory !== ""
  ) {
    $("#neuro_pooralteredmemory").prop("checked", true);
  } else {
    $("#neuro_pooralteredmemory").prop("checked", false);
  }

  if (
    data.neuro_poorcoordination !== null &&
    data.neuro_poorcoordination !== ""
  ) {
    $("#neuro_poorcoordination").prop("checked", true);
  } else {
    $("#neuro_poorcoordination").prop("checked", false);
  }

  if (
    data.neuro_poormusctonestren !== null &&
    data.neuro_poormusctonestren !== ""
  ) {
    $("#neuro_poormusctonestren").prop("checked", true);
  } else {
    $("#neuro_poormusctonestren").prop("checked", false);
  }

  $("#neuro_others").val(data.neuro_others);

  //
  if (data.skinex_clubbing !== null && data.skinex_clubbing !== "") {
    $("#skinex_clubbing").prop("checked", true);
  } else {
    $("#skinex_clubbing").prop("checked", false);
  }

  if (
    data.skinex_coldclammyskin !== null &&
    data.skinex_coldclammyskin !== ""
  ) {
    $("#skinex_coldclammyskin").prop("checked", true);
  } else {
    $("#skinex_coldclammyskin").prop("checked", false);
  }

  if (
    data.skinex_cyanosismottledskin !== null &&
    data.skinex_cyanosismottledskin !== ""
  ) {
    $("#skinex_cyanosismottledskin").prop("checked", true);
  } else {
    $("#skinex_cyanosismottledskin").prop("checked", false);
  }

  if (data.skinex_decmobility !== null && data.skinex_decmobility !== "") {
    $("#skinex_decmobility").prop("checked", true);
  } else {
    $("#skinex_decmobility").prop("checked", false);
  }

  if (data.skinex_edemaswelling !== null && data.skinex_edemaswelling !== "") {
    $("#skinex_edemaswelling").prop("checked", true);
  } else {
    $("#skinex_edemaswelling").prop("checked", false);
  }

  if (
    data.skinex_essentiallynormal !== null &&
    data.skinex_essentiallynormal !== ""
  ) {
    $("#skinex_essentiallynormal").prop("checked", true);
    $(".skinex #skinex_others").prop("disabled", true);
  } else {
    $("#skinex_essentiallynormal").prop("checked", false);
    $(".skinex #skinex_others").prop("disabled", false);
  }

  if (data.skinex_palenailbeds !== null && data.skinex_palenailbeds !== "") {
    $("#skinex_palenailbeds").prop("checked", true);
  } else {
    $("#skinex_palenailbeds").prop("checked", false);
  }

  if (
    data.skinex_poorskinturgor !== null &&
    data.skinex_poorskinturgor !== ""
  ) {
    $("#skinex_poorskinturgor").prop("checked", true);
  } else {
    $("#skinex_poorskinturgor").prop("checked", false);
  }

  if (
    data.skinex_rashespetechiae !== null &&
    data.skinex_rashespetechiae !== ""
  ) {
    $("#skinex_rashespetechiae").prop("checked", true);
  } else {
    $("#skinex_rashespetechiae").prop("checked", false);
  }

  if (data.skinex_weakpulses !== null && data.skinex_weakpulses !== "") {
    $("#skinex_weakpulses").prop("checked", true);
  } else {
    $("#skinex_weakpulses").prop("checked", false);
  }

  $("#skinex_others").val(data.skinex_others);

  $("#vsheight").val(data.vsheight);
  $("#vsweight").val(data.vsweight);
};
