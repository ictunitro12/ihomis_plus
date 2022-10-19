$(document).ready(function () {
  let table = $("#patientTable");

  patientLists();

  $("#searchPatient").on("click", function () {
    $("#PatSearch").modal("show");
  });

  $("#vitalSignsForm").validate({
    submitHandler: function (form) {
      const formData = new FormData(form);

      const id = formData.get("triage_id");
      const hpercode = formData.get("hpercode1");

      $.ajax({
        type: "POST",
        url:
          baseURL + "triage/" + id + "/patients/" + hpercode + "/vital-signs",
        dataType: "JSON",
        data: $(form).serialize(),
        success: function (data) {
          toastr.success(data.message, "Success");
          $("#vitalSignsModal").modal("hide");
          patientLists();
        },
        error: function (data) {
          toastr.error(data.responseJSON.message, "Error");
        },
      });
    },
    rules: {
      /* blood_pressure: "required",
      pulse_rate: "required",
      respiratory_rate: "required",
      temperature: "required",
      oxygen_saturation: "required",
      vital_sign_log_date: "required",
      bmi_log_date: "required",
      height: "required",
      weight: "required", */
    },
    messages: {
      blood_pressure: "Blood Pressure is required!",
      pulse_rate: "Pulse Rate is required!",
      respiratory_rate: "Respiratory Rate is required!",
      temperature: "Temperature is required!",
      oxygen_saturation: "Oxygen Saturation is required!",
      vital_sign_log_date: "Vital Sign Date is required!",
      bmi_log_date: "BMI Date is required!",
      height: "Height is required!",
      weight: "Weight is required!",
    },
    errorElement: "span",
    errorPlacement: function errorPlacement(error, element) {
      error.addClass("invalid-feedback");
      if (element.prop("type") === "checkbox") {
        error.insertAfter(element.parent("label"));
      } else if (element.hasClass("select2-hidden-accessible")) {
        error.insertAfter(element);
      } else {
        error.insertAfter(element);
      }
    },

    highlight: function highlight(element) {
      $(element).addClass("is-invalid").removeClass("is-valid");
    },

    unhighlight: function unhighlight(element) {
      $(element).addClass("is-valid").removeClass("is-invalid");
    },
  });
});

function initFormEdit(hpercode) {
  $.ajax({
    url: baseURL + "triage/patients/save",
    type: "POST",
    data: jQuery.param({ hpercode: hpercode }),
    dataType: "JSON",
    success: function (data, response) {
      patientLists();
      toastr.success(data.message, "Success");
    },
    error: function (data) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
}

function patientLists() {
  let data = new Object();

  data.id = "patientTable";
  data.link = baseURL + "triage/patients";
  data.type = "POST";
  data.coldef = [
    {
      targets: ["_all"],
      className: "align-middle",
    },
    {
      targets: [0, 6],
      visible: false,
      orderable: false,
    },
    {
      targets: [1, 2, 6],
      orderable: false,
    },
    {
      targets: [3],
      searchable: false,
      orderable: false,
      render: function (data, type, row) {
        switch (data) {
          case "M":
            return '<i class="fa fa-male"></i>&nbsp MALE';
            break;
          case "F":
            return '<i class="fa fa-female"></i>&nbsp FEMALE';
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      targets: [4],
      searchable: false,
      orderable: false,
      render: function (data, type, row) {
        let createdDate = moment(data);

        return createdDate.format("MM/DD/YYYY");
      },
    },
    {
      targets: [5],
      searchable: false,
      orderable: false,
      render: function (data, type, row) {
        let createdDate = moment(data);

        return createdDate.format("MM/DD/YYYY hh:mm:ss A");
      },
    },
  ];
  loadTable(data);
}

$("#closeSearch").on("click", function (e) {
  e.preventDefault();
  location.reload();
});

$("#closereload").on("click", function () {
  location.reload();
});

$("#patientTable").on("click", ".out-when-called", function () {
  const id = $(this).data("enccode");
  const hpercode = $(this).data("percode");

  Swal.fire({
    title: "Are you sure this patient is not around?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes",
    allowOutsideClick: false,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: baseURL + "triage/patients/update",
        type: "POST",
        data: jQuery.param({
          id: id,
          hpercode: hpercode,
          status: "OWC",
        }),
        dataType: "JSON",
      })
        .done(function (data) {
          toastr.success("Patient successfully removed!", "Success");
          patientLists();
        })
        .fail(function (xhr, status, error) {
          const message = xhr
            ? xhr.responseJSON.message
            : "Please check values.";

          toastr.error(message, "Error");
        });
    }
  });
});

$("#patientTable").on("click", ".vital-signs", function () {
  document.getElementById("vitalSignsForm").reset();

  $("#vitalSignsModal").modal("show");
  const id = $(this).data("enccode");
  const tempId = $(this).data("triage-temp-id");
  const hpercode = $(this).data("percode");
  uppercase();

  if (tempId.length > 0) {
    getTraigeTempData(id, hpercode, tempId);
  }

  $("#triage_id").val(id);
  $("#triage_temp_id").val(tempId);
  $("#hpercode1").val(hpercode);

  $("#hwWeightMeasure").val("KILOS");
  $("#hwHeightMeasure").val("CENTI");

  $("#has_tuberculosis").val(1);
  $("#is_pregnant").val(1);
  $("#is_newborn").val(1);
});

function getTraigeTempData(id, hpercode, tempId) {
  $.ajax({
    type: "GET",
    url:
      baseURL +
      "triage/" +
      id +
      "/patients/" +
      hpercode +
      "/vital-signs/" +
      tempId,
    dataType: "JSON",
    success: function (data) {
      $("#chief_complaint").val(data.data.chief_complaint);

      if (data.data.has_tuberculosis == 1) {
        $("#has_tuberculosis").prop("checked", true);
      }

      if (data.data.is_pregnant == 1) {
        $("#is_pregnant").prop("checked", true);
      }

      if (data.data.is_newborn == 1) {
        $("#is_newborn").prop("checked", true);
      }

      $("#blood_pressure").val(data.data.blood_pressure);
      $("#pulse_rate").val(data.data.pulse_rate);
      $("#respiratory_rate").val(data.data.respiratory_rate);
      $("#temperature").val(data.data.temperature);
      $("#oxygen_saturation").val(data.data.oxygen_saturation);
      $("#vital_sign_log_date").val(data.data.vital_sign_log_date);
      $("#bmi_log_date").val(data.data.bmi_log_date);
      $("#hwHeight").val(data.data.height);
      $("#hwWeight").val(data.data.weight);
      $("#hwBMI").val(data.data.bmi);
      calculateBMI();
    },
    error: function (data) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
}
