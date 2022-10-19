function loadClaimDischargeDiagnoses(enccode) {
  var data = ClaimDischargeDiagnoses(enccode);
  var html;
  if (data.length == 0) {
    html = '<tr scope="row" id="1">';
    html +=
      '<td><span class="diagnosis"></span><div class="input-group"><input class="form-control form-control-sm diagnosis" type="text" placeholder="Enter Diagnosis"><div class="invalid-feedback"></div></div></td>';
    html +=
      '<td><span class="icdcode"></span><div class="input-group"><input class="form-control form-control-sm icdcode" type="text" placeholder="Enter ICD 10 Code"><div class="invalid-feedback"></div></div></td>';
    html +=
      '<td><span class="btn btn-success addDiagnosis"><i class="fa fa-plus"></i></span>&nbsp<span class="btn btn-secondary clearDiagnosis"><i class="fa fa-undo"></i></span></td>';
    html += "<tr>";
    $("#DiagnosisTable tbody").html(html);
  } else {
    var row = 0;
    html = "";
    var pDischargedDiagnosis;
    $.each(data, function (key, value) {
      row = value.diag_cnt;
      pDischargedDiagnosis = "";
      if (value.pDischargeDiagnosis != null) {
        pDischargedDiagnosis = value.pDischargeDiagnosis;
      }
      html += '<tr id="' + value.diag_cnt + '" scope="row">';
      html +=
        '<td><span class="diagnosis">' +
        pDischargedDiagnosis +
        '</span><div class="input-group"><input type="hidden" class="form-control form-control-sm diagnosis" type="text" placeholder="Enter Diagnosis"><div class="invalid-feedback"></div></div></td>';
      html +=
        '<td><span class="icdcode">' +
        value.pICDCode +
        '</span><div class="input-group"><input type="hidden" class="form-control form-control-sm icdcode" type="text" placeholder="Enter ICD10 Code"><div class="invalid-feedback"></div></div></td>';
      html +=
        '<td><span class="btn btn-info editDiagnosis"><i class="fa fa-edit"></i></span>&nbsp<span class="btn btn-danger removeDiagnosis"><i class="fa fa-times"></i></span></td>';
      html += "<tr>";
    });
    $("#DiagnosisTable tbody").html(html);
    addDiagTableRow(parseInt(row) + 1);
    //uppercase();
  }
}

function ClaimDischargeDiagnoses(enccode) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURI + "Philhealth/ClaimDischargeDiagnosis",
    data: { enccode: enccode },
    async: false,
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      toastr.error("Error: Fetching Diagnoses!", "Error");
    },
  });
  return obj;
}

$("#DiagnosisTable").on("click", ".addDiagnosis", function () {
  var parent = $(this).parents();
  enccode = $("#enccode").val();
  var rowid = parent[1].id;
  var diagnosis_input = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > div > input.diagnosis"
  );
  var icdcode_input = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > div > input.icdcode"
  );
  var icdinvalid_feedback = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > div > div.invalid-feedback"
  );
  var diagnosisinvalid_feedback = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > div > div.invalid-feedback"
  );
  var add_icon = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-success.addDiagnosis > i"
  );
  if ($.trim(icdcode_input.val()) == "") {
    icdcode_input.addClass("is-invalid");
    icdinvalid_feedback.text("ICD Code is required!");
    return;
  }

  if ($.trim(diagnosis_input.val()) == "" && rowid == "1") {
    diagnosis_input.addClass("is-invalid");
    diagnosisinvalid_feedback.text("Diagnosis is required!");
    return;
  }
  diagnosis_input.removeClass("is-invalid");
  icdcode_input.removeClass("is-invalid");

  var diagnosis_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > span.diagnosis"
  );
  var icdcode_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > span.icdcode"
  );
  var oldicdcode = icdcode_span.text();
  if (
    saveDischargedDiagnosis(
      rowid,
      oldicdcode,
      enccode,
      diagnosis_input.val(),
      icdcode_input.val()
    )
  ) {
    diagnosis_span.text(diagnosis_input.val());
    diagnosis_span.show();
    icdcode_span.text(icdcode_input.val());
    icdcode_span.show();
    diagnosis_input.prop("type", "hidden");
    icdcode_input.prop("type", "hidden");

    $(
      "#DiagnosisTable > tbody > tr[id='" +
        rowid +
        "'] > td:nth-child(3) > span.btn.btn-secondary.clearDiagnosis > i"
    )
      .removeClass("fa fa-undo")
      .addClass("fa fa-times");

    $(this)
      .removeClass("btn-success addDiagnosis")
      .addClass("btn-info editDiagnosis");
    if (add_icon.hasClass("fa fa-save")) {
      add_icon.removeClass("fa fa-save").addClass("fa fa-edit");
    } else {
      add_icon.removeClass("fa fa-plus").addClass("fa fa-edit");
      addDiagTableRow(parseInt(rowid) + 1);
    }
    $(
      "#DiagnosisTable > tbody > tr[id='" +
        rowid +
        "'] > td:nth-child(3) > span.btn.btn-secondary.clearDiagnosis"
    )
      .removeClass("btn-secondary clearDiagnosis")
      .addClass("btn-danger removeDiagnosis");
  }
});

$("#DiagnosisTable").on("click", ".clearDiagnosis", function (event) {
  var parent = $(this).parents();
  var rowid = parent[1].id;
  var diagnosis_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > span.diagnosis"
  );
  var icdcode_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > span.icdcode"
  );
  var diagnosis_input = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > div > input.diagnosis"
  );
  var icdcode_input = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > div > input.icdcode"
  );
  var save_icon = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-success.addDiagnosis > i"
  );
  var save_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-success.addDiagnosis"
  );
  var clear_icon = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-secondary.clearDiagnosis > i"
  );
  var clear_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-secondary.clearDiagnosis"
  );

  if (save_icon.hasClass("fa fa-save")) {
    diagnosis_span.show();
    icdcode_span.show();
    diagnosis_input.prop("type", "hidden");
    icdcode_input.prop("type", "hidden");
    diagnosis_input.removeClass("is-invalid");
    icdcode_input.removeClass("is-invalid");
    save_span
      .removeClass("btn-success addDiagnosis")
      .addClass("btn-info editDiagnosis");
    clear_icon.removeClass("fa fa-undo").addClass("fa fa-times");
    clear_span
      .removeClass("btn-secondary clearDiagnosis")
      .addClass("btn-danger removeDiagnosis");
    save_icon.removeClass("fa fa-save").addClass("fa fa-edit");
  } else {
    diagnosis_input.val(null);
    icdcode_input.val(null);
    diagnosis_input.removeClass("is-invalid");
    icdcode_input.removeClass("is-invalid");
  }
});

$("#DiagnosisTable").on("click", ".editDiagnosis", function (event) {
  var parent = $(this).parents();
  var rowid = parent[1].id;
  var diagnosis_input = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > div > input.diagnosis"
  );
  var icdcode_input = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > div > input.icdcode"
  );
  var diagnosis_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > span.diagnosis"
  );
  var icdcode_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > span.icdcode"
  );
  diagnosis_span.hide();
  icdcode_span.hide();
  diagnosis_input.val(diagnosis_span.text());
  icdcode_input.val(icdcode_span.text());
  icdcode_input.prop("type", "text");
  diagnosis_input.prop("type", "text");
  $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-danger.removeDiagnosis > i"
  )
    .removeClass("fa fa-plus")
    .addClass("fa fa-undo");
  $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-danger.removeDiagnosis"
  )
    .removeClass("btn-danger removeDiagnosis")
    .addClass("btn-secondary clearDiagnosis");
  $(this)
    .removeClass("btn-info editDiagnosis")
    .addClass("btn-success addDiagnosis");
  $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(3) > span.btn.btn-success.addDiagnosis > i"
  )
    .removeClass("fa fa-edit")
    .addClass("fa fa-save");
  //uppercase();
  diagnosis_input.focus();
});

function saveDischargedDiagnosis(
  index,
  oldicdcode,
  enccode,
  diagnosis,
  icdcode
) {
  $.ajax({
    type: "POST",
    url: baseURI + "Philhealth/saveDischargedDiagnosis",
    data: {
      index: index,
      enccode: enccode,
      diagnosis: diagnosis,
      oldicdcode: oldicdcode,
      icdcode: icdcode,
    },
    async: false,
    success: function (data) {
      toastr.success("Diagnosis Successfully Saved! ", "Success");
    },
    error: function (data) {
      toastr.error("Error: Error Saving Diagnosis!", "Error");
      return false;
    },
  });
  return true;
}

$("#DiagnosisTable").on("click", ".removeDiagnosis", function (event) {
  var parent = $(this).parents();
  var rowid = parent[1].id;
  var enccode = $("#enccode").val();
  var diagnosis_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(1) > span.diagnosis"
  );
  var icdcode_span = $(
    "#DiagnosisTable > tbody > tr[id='" +
      rowid +
      "'] > td:nth-child(2) > span.icdcode"
  );
  $("#ModalDeleteDiagnosis").modal("show");
  $("#delDiagnosis").text(
    "DELETE " + diagnosis_span.text() + " (" + icdcode_span.text() + ")"
  );
  $("#deldiag_enccode").val(enccode);
  $("#deldiag_cnt").val(rowid);
  $("#delicdcode").val(icdcode_span.text());
});

$("#frmDeleteDiagnosis").submit(function () {
  $.ajax({
    url: baseURI + "Philhealth/RemoveDiagnosis",
    type: "POST",
    data: new FormData(this),
    dataType: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data, response) {
      var index = $("#deldiag_cnt").val();
      $("#DiagnosisTable > tbody > tr[id='" + index + "']").remove();
      $("#ModalDeleteDiagnosis").modal("hide");
      toastr.success("Diagnosis Successfully Deleted! ", "Success");
    },
    error: function (data) {
      $("#ModalDeleteDiagnosis").modal("hide");
      toastr.error("Error:Please try again!", "Error");
      console.log(data.responseText);
    },
  });
  return false;
});

function addDiagTableRow(rowid) {
  var html;
  html = '<tr scope="row" id="' + rowid + '">';
  html +=
    '<td><span class="diagnosis"></span><div class="input-group"><input class="form-control form-control-sm diagnosis" type="text" placeholder="Enter Diagnosis"><div class="invalid-feedback"></div></div></td>';
  html +=
    '<td><span class="icdcode"></span><div class="input-group"><input class="form-control form-control-sm icdcode" type="text" placeholder="Enter ICD10 Code"><div class="invalid-feedback"></div></div></td>';
  html +=
    '<td><span class="btn btn-success addDiagnosis"><i class="fa fa-plus"></i></span>&nbsp<span class="btn btn-secondary clearDiagnosis"><i class="fa fa-undo"></i></span></td>';
  html += "<tr>";
  $("#DiagnosisTable tbody").append(html);
  //uppercase();
}
