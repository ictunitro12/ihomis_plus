var table = null;

//$('#example').DataTable();
$(document).ready(function () {
  $(".daterange").daterangepicker({
    locale: {
      format: "MM-DD-Y LT",
    },
  });
  fetchIcd10EncounterDiagnosis();

  /*   const mySettings = {
    apiServerUrl: icd11ApiUri,
    apiSecured: false,
    language: "en",
    popupMode: false,
    searchByCodeOrURI: true,
  };

  const myCallbacks = {
    selectedEntityFunction: (selectedEntity) => {
      // paste the code into the <input>
      document.getElementById("icd11_code").value = selectedEntity.code;
      document.getElementById("icd11_title").value = selectedEntity.title;
      document.getElementById("icd11_linearization_uri").value =
        selectedEntity.linearizationUri;
      document.getElementById("icd11_foundation_uri").value =
        selectedEntity.foundationUri;
      document.getElementById("icd11_selected_text").value =
        selectedEntity.selectedText;
      // clear the searchbox and delete the search results
      //ECT.Handler.clear("1");
    },
  };

  // Initialize check if api is not empty
  if (icd11ApiUri) {
    // configure the ECT Handler
    ECT.Handler.configure(mySettings, myCallbacks);
  } */

  $("#frmCodeDiagnosis").validate({
    rules: {
      "diagICD_diag[]": {
        required: {
          depends: function (element) {
            if ($(element).val().length == 0) {
              return true;
            } else {
              return false;
            }
          },
        },
      },
    },
    messages: {
      "diagICD_diag[]": "ICD 10 Code is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });

  $("#diagICD_diag").on("select2:select", function (e) {
    const data = $(this).select2("data");

    if (data.length == 1) {
      // retrieve icd mapping
      const icdMapping = getIcdMapping(data[0].id);

      if (icdMapping.data) {
        ECT.Handler.search("1", icdMapping.data.icd11_code);
      }
    }
  });
});

function fetchIcd10EncounterDiagnosis() {
  table = $("#encounterDiagnosisTable").DataTable({
    oLanguage: {
      sProcessing:
        '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
    },
    destroy: true,
    processing: true,
    serverSide: true,
    responsive: true,
    stateSave: true,
    info: true,
    columnDefs: [
      {
        targets: [0, 9, 11, 12, 13],
        visible: false,
      },
      {
        targets: [3],
        render: function (data, type, row) {
          switch (data) {
            case "ADM":
              return "ADMISSION";
              break;
            case "ER" || "ERADM":
              return "EMERGENCY";
              break;
            case "OPD" || "OPAD":
              return "OUTPATIENT";
              break;
            default:
              return "";
          }
        },
      },
      {
        targets: [8],
        render: function (data, type, row) {
          return "<span class='text-wrap'>" + data + "</span>";
        },
      },
    ],

    /* columns: [
      {
        data: "hpercode",
      },
      {
        data: "patient_name",
      },
      {
        data: "toecode",
      },
      {
        data: "encounter_date",
      },
      {
        data: "doctor_name",
      },
      {
        data: "diagcode",
      },
      {
        data: "icd11",
      },
      {
        data: "diagtext",
      },
      {
        data: null,
        orderable: false,
        searchable: false,
        render: function (data, type, row, meta) {
          return (
            `<div class="btn-group  btn-ladda" btn-sm data-layout="zoom-in">
                  <button type="button" class="btn btn-success btn-sm  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu">
                    <a href="javascript:void(0);" class="dropdown-item confirmAppointment" data-appointment-id="` +
            data.enccode +
            `" ><i class="fa fa-check"></i>&nbsp ICD 10</a>
                  </div>
                  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu">
                    <a href="javascript:void(0);" class="dropdown-item confirmAppointment" data-appointment-id="` +
            data.enccode +
            `" ><i class="fa fa-check"></i>&nbsp ICD 11</a>
                  </div>
                  <button type="button" data-enccode="$1" data-percode="$2"  class="btn btn-success btn-sm   ModalPatientInformation View" ><i class="fa fa-user-circle fa-sm"></i></button>
                </div>`
          );
        },
      },
    ], */
    ajax: {
      url: baseURL + "encounter-diagnosis/get-icd10-datatable-list",
      type: "POST",
      data: function (d) {
        d.encounter_type = $('input[name="encounter_type"]:checked').val();
        d.with_icd10 = $('input[name="with_icd10"]:checked').val();
        d.with_icd11 = $('input[name="with_icd11"]:checked').val();
      },
      error: function (data) {
        toastr.error(data.responseJSON, "Error");
      },
    },
  });

  $('input[name="encounter_type"]').on("change", function () {
    table.ajax.reload();
  });

  $('input[name="with_icd10"]').on("change", function () {
    table.ajax.reload();
  });

  $('input[name="with_icd11"]').on("change", function () {
    table.ajax.reload();
  });

  $("#encounter_date").on("apply.daterangepicker", function (ev, picker) {
    var startDate = picker.startDate._d.toISOString().split("T");
    startDate = startDate[0];
    var endDate = picker.endDate._d.toISOString().split("T");
    endDate = endDate[0];

    /* table
      .column(4)
      .search("'" + startDate + "' AND '" + endDate + "'", true, false)
      .draw(); */

    /* $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
      const receivedDate = new Date(data[3]); // use data for the age column

      if (
        (isNaN(startDate) && isNaN(endDate)) ||
        (isNaN(startDate) && receivedDate <= endDate) ||
        (startDate <= receivedDate && isNaN(endDate)) ||
        (startDate <= receivedDate && receivedDate <= endDate)
      ) {
        return true;
      }
      return false;
    });
    table.draw(); */
  });

  table.on("draw.dt", function () {});
}

$(".reset").on("click", function () {
  // clear input box
  $('input[name="encounter_type"][value="ALL"]').prop('checked', true).change();
  $('input[name="with_icd10"]').prop('checked', false).change();
  $('input[name="with_icd11"]').prop('checked', false).change();

  // clear date ranges
  $.fn.dataTable.ext.search.length = 0;

  table.search('').columns().search('').draw();
});

$("#encounterDiagnosisTable").on("click", ".icd10coding", function () {
  $("#diagICD_diag").val(null).trigger("change");

  SelDiagnosis();
  let row = $(this).closest("tr");
  let rowData = table.row(row).data();

  const enccode = rowData[0];
  const diagnosisText = rowData[8];
  const encdate = rowData[9];
  const primediag = rowData[10];
  const icd10Code = rowData[6];
  const icd11Code = rowData[7];
  const icd11CodePrimary = rowData[11];
  const icd11Title = rowData[12];
  const icd11LinearizationUri = rowData[13];

  $("#codeDiagnosisModal").modal("show");

  // set checkbox value
  $("#primediag").val("Y");

  // set form value
  $("#diagEnccode").val(enccode);
  $("#diagencDate").val(encdate);
  $("#diagnosesText").text(diagnosisText);

  // retrieve manual postcoordination
  const manualPostcoordinations = getManualPostCoordinations(enccode, encdate);

  if (manualPostcoordinations.data.length > 0) {
    let count = 2;
    manualPostcoordinations.data.forEach(function (icd) {
      $(".manual_extension_" + count).show();
      $("#icd11_id_" + count).val(icd.id);
      $("#icd11_code_" + count).val(icd.code);
      $("#icd11_title_" + count).val(icd.title);
      $("#icd11_linearization_uri_" + count).val(icd.linearization_uri);
      $("#icd11_foundation_uri_" + count).val(icd.foundation_uri);
      $("#icd11_selected_text_" + count).val(icd.selected_text);

      count = count + 1;
    });
  }

  if (primediag === "Y") {
    $("#primediag").prop("checked", true);
  }

  if (icd11Code !== null) {
    $("#icd11_code_1").val(icd11Code);
    $("#icd11_title_1").val(icd11Title);
    //ECT.Handler.setBrowserCode("1", icd11CodePrimary);
    //ECT.Handler.setBrowserUri("1", icd11LinearizationUri);
    ECT.Handler.search("1", icd11CodePrimary);
  } else {
    ECT.Handler.search("1", diagnosisText);
  }

  if (icd10Code !== null) {
    const codes = icd10Code.split(",");

    codes.forEach(function (code) {
      setDiagnosis(code);
    });
  }
});

$("#frmCodeDiagnosis").submit(function (event) {
  event.preventDefault();

  if ($("#frmCodeDiagnosis").valid() == false) {
    return;
  }

  /* $(this)
    .find(":input[type='text'], :input[type='hidden']")
    .each(function () {
      if ($(this).val() == "") $(this).prop("disabled", true);
    }); */

  let formData = new FormData(this);

  $.ajax({
    url: baseURL + "encounter-diagnosis/save-icd10",
    type: "POST",
    data: formData,
    dataType: "JSON",
    processData: false,
    contentType: false,
    success: function (data, response) {
      toastr.success(data.message, "Success");
      fetchIcd10EncounterDiagnosis();
      $("#codeDiagnosisModal").modal("hide");
    },
    error: function (data, reponse) {
      toastr.error("Error Processing request!", "Error");
      /* $("#frmCodeDiagnosis")
        .find(":input[type='text'], :input[type='hidden']")
        .prop("disabled", false); */
    },
  });
});

// function setDiagnosis(code)
// {
// 		var icd = encodeURIComponent(encodeURIComponent(code));
// 		var selTos = 	$('[name $="_diag[]"]');
// 			selTos.prop('readonly', true);
// 		$.ajax({
// 			type: 'POST',
// 			url: baseURL+'/PatientRecords/setDiagnosis/' + icd,
// 		}).then(function (data) {
// 		var obj=$.parseJSON(data);
// 			var option = new Option(obj['diagdesc'], obj['diagdesc'], true, true);
// 			selTos.append(option).trigger('change');
// 			selTos.trigger({
// 				theme:'coreui',
// 				type: 'select2:select',
// 				params: {
// 					data: data
// 				}
// 			});
// 		});
// 			SelDiagnosis();
// 	}

$(".modal").on("hidden.coreui.modal", function (e) {
  $("#frmCodeDiagnosis").trigger("reset");
  $("#diagICD_diag").val(null).trigger("change");

  ECT.Handler.clear("1");
});

function setDiagnosis(code) {
  var icd = encodeURIComponent(encodeURIComponent(code));
  var selTos = $('[name $="_diag[]"]');
  selTos.prop("readonly", true);
  $.ajax({
    type: "POST",
    url: baseURL + "/PatientRecords/setDiagnosis/" + icd,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["diagdesc"], obj["diagcode"], true, true);
    selTos.append(option).trigger("change");

    selTos.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}
