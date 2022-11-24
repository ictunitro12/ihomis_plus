const mySettings = {
  apiServerUrl: icd11ApiUri,
  apiSecured: icd11ApiSecure,
  language: "en",
  popupMode: false,
  searchByCodeOrURI: true,
  //autoBind: false
};

const myCallbacks = {
  selectedEntityFunction: (selectedEntity) => {
    // paste the code into the <input>
    document.getElementById("icd11_code_" + selectedEntity.iNo).value =
      selectedEntity.code;
    document.getElementById("icd11_title_" + selectedEntity.iNo).value =
      selectedEntity.title;
    document.getElementById(
      "icd11_linearization_uri_" + selectedEntity.iNo
    ).value = selectedEntity.linearizationUri;
    document.getElementById(
      "icd11_foundation_uri_" + selectedEntity.iNo
    ).value = selectedEntity.foundationUri;
    document.getElementById("icd11_selected_text_" + selectedEntity.iNo).value =
      selectedEntity.selectedText;

    // clear the searchbox and delete the search results
    //ECT.Handler.clear(selectedEntity.iNo);
  },

  getNewTokenFunction: async () => {
    const url = "/api/v1/icd/token"; // we assume this backend script returns a JSON {'token': '...'}
    try {
      const response = await fetch(url);
      const result = await response.json();
      const token = result.data.access_token;

      return token; // the function return is required
    } catch (e) {
      console.log("Error during the request");
    }
  },
};

// Initialize check if api is not empty
if (icd11ApiUri) {
  // configure the ECT Handler
  ECT.Handler.configure(mySettings, myCallbacks);
  //ECT.Handler.bind("1");
}

$(document).ready(function () {
  let exCount = 1;

  // Manaul Postcoordination
  $(".manual_postcoordination").on("click", function (e) {
    e.preventDefault();

    if (exCount == 6) {
      return true;
    }

    exCount = exCount + 1;

    $(".manual_postcoordination_div .manual_extension_" + exCount).show();

    /* const extensionCount = $(".manual_postcoordination_div").length;

    const field =
      `<div class="form-row mb-4 p-2 border manual_extension_` +
      (extensionCount + 1) +
      `">
            <div class="col-md-4 col-form-label text-default mb-1">
              Postcoordination ICD-11 Code:
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_code[]" id="icd11_code_` +
      (extensionCount + 1) +
      `" readonly placeholder="Code">
              <input type="text" class="form-control form-control-mb mb-1" name="icd11_extension_title[]" id="icd11_title_` +
      (extensionCount + 1) +
      `" readonly placeholder="Title">
              <input type="hidden" class="form-control form-control-mb" name="icd11_extension_linearization_uri[]" id="icd11_linearization_uri_` +
      (extensionCount + 1) +
      `" readonly>
              <input type="hidden" class="form-control form-control-mb" name="icd11_extension_foundation_uri[]" id="icd11_foundation_uri_` +
      (extensionCount + 1) +
      `" readonly>
              <input type="text" class="ctw-input form-control form-control-mb" autocomplete="off" data-ctw-ino="` +
      (extensionCount + 1) +
      `">
              <i class="fa fa-trash text-danger remove_extension"></i>
            </div>
            <div class="ctw-window mb-4" data-ctw-ino="` +
      (extensionCount + 1) +
      `"></div>
        </div>`; */

    //$(".manual_postcoordination_div").append(field);

    //ECT.Handler.configure(mySettings, myCallbacks);

    //ECT.Handler.bind(extensionCount + 1);

    //ECT.Handler.overwriteConfiguration("2");
  });

  // Delete Extension
  $(".remove_extension").on("click", function (e) {
    e.preventDefault();

    if (exCount == 1) {
      return true;
    }

    $(this).parent().parent().hide();
    $(this).parent().parent().find("input").val("");

    ECT.Handler.clear(exCount);

    exCount = exCount - 1;
  });

  $(".modal").on("hidden.coreui.modal", function (e) {
    $("#frmCodeDiagnosis").trigger("reset");
    ECT.Handler.clear("1");
    ECT.Handler.clear("2");
    ECT.Handler.clear("3");
    ECT.Handler.clear("4");
    ECT.Handler.clear("5");
    ECT.Handler.clear("6");

    $(".manual_postcoordination_div").children().hide();

    exCount = 1;
  });
});

function getManualPostCoordinations(enccode, encounter_date) {
  let responseData = null;

  $.ajax({
    url: baseURL + "icd11/manual-postcoordinations/find",
    type: "GET",
    data: jQuery.param({
      enccode: enccode,
      encounter_date: encounter_date,
    }),
    async: false,
    dataType: "JSON",
    processData: false,
    contentType: false,
    success: function (data, response) {
      responseData = data;
    },
    error: function (data, reponse) {
      toastr.error("Error Processing request!", "Error");
    },
  });

  return responseData;
}

function getIcdMapping(icd10_code, icd11_code = "") {
  let responseData = null;

  $.ajax({
    url: baseURL + "icd11/code-mapping",
    type: "GET",
    data: jQuery.param({
      icd10_code: icd10_code,
      icd11_code: icd11_code,
    }),
    async: false,
    dataType: "JSON",
    processData: false,
    contentType: false,
    success: function (data, response) {
      responseData = data;
    },
    error: function (data, reponse) {
      toastr.error("Error Processing request!", "Error");
    },
  });

  return responseData;
}
