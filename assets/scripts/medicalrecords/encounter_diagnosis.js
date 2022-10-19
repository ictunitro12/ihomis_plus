//import * as ECT from "@whoicd/icd11ect";
//import "@whoicd/icd11ect/style.css";

$(document).ready(function () {
  $(".daterange").daterangepicker({
    locale: {
      format: "MM-DD-Y LT",
    },
  });

  const mySettings = {
    apiServerUrl: "http://localhost:84",
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

  // configure the ECT Handler
  ECT.Handler.configure(mySettings, myCallbacks);

  function fetchEncounterDiagnosis() {
    let table = $("#encounterDiagnosisIcd11Table").DataTable({
      oLanguage: {
        sProcessing:
          '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
      },
      destroy: true,
      processing: true,
      serverSide: true,
      responsive: true,
      columnDefs: [
        {
          targets: [7, 8, 9],
          visible: false,
          orderable: false,
        },
        {
          targets: [11],
          orderable: false,
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
        url: baseURL + "encounter-diagnosis/get-icd11-datatable-list",
        type: "POST",
        data: function (d) {
          d.encounter_type = $('input[name="encounter_type"]:checked').val();
          d.with_icd11 = $('input[name="with_icd11"]:checked').val();
        },
        error: function (data) {
          toastr.error(data.responseJSON, "Error");
        },
      },
    });

    /* $('input[name="code_type"]').on("change", function () {
      table.ajax.reload();
    }); */

    $('input[name="encounter_type"]').on("change", function () {
      table.ajax.reload();
    });

    $('input[name="with_icd11"]').on("change", function () {
      table.ajax.reload();
    });

    $("#encounter_date").on("apply.daterangepicker", function (ev, picker) {
      const startDate = picker.startDate._d;
      const endDate = picker.endDate._d;

      $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
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

      table.draw();
    });

    table.on("draw.dt", function () {
      $(".icd11coding").on("click", function () {
        $("#icd11Modal").modal("show");

        const encdate = $(this).data("encdate");
        const enccode = $(this).data("enccode");
        const icd11Code = $(this).data("icd11");
        const icd11Title = $(this).data("icd11-title");

        if (icd11Code.length > 0) {
          $("#icd11_code").val(icd11Code);
          $("#icd11_title").val(icd11Title);
          ECT.Handler.setBrowserCode("1", icd11Code);
          ECT.Handler.search("1", icd11Code);
        }

        $("#icd11Form #enccode").val(enccode);
        $("#icd11Form #encdate").val(encdate);
      });

      $(".close-icd-modal").on("click", function () {
        $("#icd11Modal").modal("hide");
        ECT.Handler.clear("1");

        $("#icd11Form").trigger("reset");
      });

      $(".close-icd-modal").on("click", function () {
        $("#icd11Modal").modal("hide");
        ECT.Handler.clear("1");

        $("#icd11Form").trigger("reset");
      });
    });
  }

  $("#icd11Form").submit(function (e) {
    e.preventDefault();

    const form = new FormData(this);

    $.ajax({
      url: baseURL + "encounter-diagnosis/save-icd11",
      type: "POST",
      data: form,
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Saved");

        $("#icd11Modal").modal("hide");
        ECT.Handler.clear("1");

        $("#icd11Form").trigger("reset");

        fetchEncounterDiagnosis();
      },
      error: function (response) {
        toastr.error("Please try again.", "Error");
      },
    });
  });

  fetchEncounterDiagnosis();
});
