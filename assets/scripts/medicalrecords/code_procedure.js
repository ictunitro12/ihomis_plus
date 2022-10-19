$(document).ready(function () {
  $(".daterange").daterangepicker({
    locale: {
      format: "MM-DD-Y LT",
    },
  });

  function fetchEncounterDiagnosis() {
    let table = $("#codeProcedureTable").DataTable({
      oLanguage: {
        sProcessing:
          '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
      },
      destroy: true,
      processing: true,
      serverSide: true,
      responsive: true,
      coldef: [
      ],
      ajax: {
        url: baseURL + "encounter-diagnosis/get-code-procedure-datatable-list",
        type: "POST",
        data: function (d) {
          d.encounter_type = $('input[name="encounter_type"]:checked').val();
          d.with_icd9 = $('input[name="with_icd9"]:checked').val();
        },
        error: function (data) {
          toastr.error(data.responseJSON, "Error");
        },
      },
    });

    $('input[name="encounter_type"]').on("change", function () {
      table.ajax.reload();
    });

    $('input[name="with_icd9"]').on("change", function () {
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
      $(".icd9coding").on("click", function () {
        $("#codeProcedureModal").modal("show");

        SelDiagnosis();

        const encdate = $(this).data("encdate");
        const enccode = $(this).data("enccode");
        const icd9Code = $(this).data("icd9");

        if (icd11Code.length > 0) {
          $("#icd9_code").val(icd11Code);
        }

        $("#codeProcedureForm #enccode").val(enccode);
        $("#codeProcedureForm #encdate").val(encdate);
      });

      $(".close-icd-modal").on("click", function () {
        $("#codeProcedureModal").modal("hide");

        $("#codeProcedureForm").trigger("reset");
      });
    });
  }

  $("#codeProcedureForm").submit(function (e) {
    e.preventDefault();

    const form = new FormData(this);

    $.ajax({
      url: baseURL + "encounter-diagnosis/save-code-procedure",
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
