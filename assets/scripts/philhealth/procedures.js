function ClaimProcedures(enccode) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURI + "Philhealth/ClaimProcedures",
    data: { enccode: enccode },
    async: false,
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      toastr.error("Error: Fetching Procedures!", "Error");
    },
  });
  return obj;
}

function loadClaimProcedures(enccode) {
  $("#ProcedureTable tbody").empty();
  var data = ClaimProcedures(enccode);
  var html;
  var rowid = 0;
  html = "";
  $.each(data, function (key, value) {
    rowid = value.diag_cnt;
    var laterality;
    if (value.pLaterality == "L") {
      laterality = "Left";
    } else if (value.pLaterality == "R") {
      laterality = "Right";
    } else if (value.pLaterality == "B") {
      laterality = "Both";
    } else {
      laterality = "";
    }
    var specialconsidetation;
    switch (value.pspecialcon) {
      case "HEMOD":
        specialconsidetation = "Hemodialysis";
        break;
      case "PERID":
        specialconsidetation = "Peritoneal Dialysis";
        break;
      case "LINAC":
        specialconsidetation = "Radiotherapy (LINAC)";
        break;
      case "COBAL":
        specialconsidetation = "Radiotherapy (COBALT)";
        break;
      case "RIMRT":
        specialconsidetation = "Radiotherapy (IMRT)";
        break;
      case "BLOOD":
        specialconsidetation = "Blood Transfusion";
        break;
      case "BRACH":
        specialconsidetation = "Brachytherapy";
        break;
      case "CHEMO":
        specialconsidetation = "Chemotherapy";
      case "SIMPD":
        specialconsidetation = "Simple Debridement";
        break;
      case "CATAR":
        specialconsidetation = "Cataract";
        break;
      case "MCPKG":
        specialconsidetation = "Maternal Care Package";
        break;
      case "NEWBO":
        specialconsidetation = "Newborn Care Package";
        break;
      default:
        specialconsidetation = "N/A";
    }
    html = "";
    html += '<tr id="' + rowid + '" scope="row">';
    html +=
      '<td><span class="procedure">' +
      value.pRelatedProcedure +
      '</span><div class="input-group"><input type="hidden" class="form-control form-control-sm procedure" type="text" class="form-control"><div class="invalid-feedback"></div></div></td>';
    html +=
      '<td><span class="rvscode">' +
      value.pRVSCode +
      '</span><div class="input-group"><input type="hidden" class="form-control form-control-sm rvscode" type="text"><div class="invalid-feedback"></div></div></td>';
    html +=
      '<td><span class="date">' +
      $.datepicker.formatDate("mm-dd-yy", new Date(value.pProcedureDate)) +
      '</span><div class="input-group"><input type="date" class="form-control form-control-sm date"><div class="invalid-feedback"></div></div></td>';
    html +=
      '<td><span class="laterality">' +
      laterality +
      '</span><div class="input-group"><select class="form-control form-control-sm laterality"><option value="">Select Laterality</option><option value="L">Left</option><option value="R">Right</option><option value="B">Both</option></select><div class="invalid-feedback"></div></div></td>';
    html +=
      '<td><span class="specialcon">' +
      specialconsidetation +
      '</span><div class="input-group"><select class="form-control form-control-sm specialcon"><option value="NOTAP">Select Special Consideration</option><option value="HEMOD">Hemodialysis</option><option value="PERID">Peritoneal Dialysis</option><option value="LINAC">Radiotherapy (LINAC)</option><option value="COBAL">Radiotherapy (COBALT)</option><option value="RIMRT">Radiotherapy (IMRT)</option><option value="BLOOD">Blood Transfusion</option><option value="BRACH">Brachytherapy</option><option value="CHEMO">Chemotherapy</option><option value="SIMPD">Simple Debridement</option><option value="CATAR">Cataract</option><option value="MCPKG">Maternal Care Package</option><option value="NEWBO">Newborn Care Package</option></select><div class="invalid-feedback"></div></div></td>';
    html +=
      '<td><span class="btn btn-info editProcedure"><i class="fa fa-edit"></i></span>&nbsp<span class="btn btn-danger removeProcedure"><i class="fa fa-times"></i></span></td>';
    html += "<tr>";
    $("#ProcedureTable tbody").append(html);
    $(
      "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > div > input"
    ).hide();
    $(
      "#ProcedureTable tbody > #" + rowid + " > td:nth-child(4) > div > select"
    ).hide();
    $(
      "#ProcedureTable tbody > #" + rowid + " > td:nth-child(5) > div > select"
    ).hide();
    //uppercase();
  });
  rowid++;
  addProcedureTableRow(rowid);
}

function addProcedureTableRow(rowid) {
  html = "";
  html += '<tr id="' + rowid + '" scope="row">';
  html +=
    '<td><span class="procedure"></span><div class="input-group"><input type="text" class="form-control form-control-sm procedure" type="text" placeholder="Enter Procedure"><div class="invalid-feedback"></div></div></td>';
  html +=
    '<td><span class="rvscode"></span><div class="input-group"><input type="text" class="form-control form-control-sm rvscode" placeholder="Enter RVS Code"><div class="invalid-feedback"></div></div></td>';
  html +=
    '<td><span class="date"></span><div class="input-group"><input type="date" class="form-control form-control-sm date"><div class="invalid-feedback"></div></div></td>';
  html +=
    '<td><span class="laterality"></span><div class="input-group"><select class="form-control form-control-sm laterality"><option value="">Select Laterality</option><option value="L">Left</option><option value="R">Right</option><option value="B">Both</option></select><div class="invalid-feedback"></div></div></td>';
  html +=
    '<td><span class="specialcon"></span><div class="input-group"><select class="form-control form-control-sm specialcon"><option value="NOTAP" selected>Select Special Consideration</option><option value="HEMOD">Hemodialysis</option><option value="PERID">Peritoneal Dialysis</option><option value="LINAC">Radiotherapy (LINAC)</option><option value="COBAL">Radiotherapy (COBALT)</option><option value="RIMRT">Radiotherapy (IMRT)</option><option value="BLOOD">Blood Transfusion</option><option value="BRACH">Brachytherapy</option><option value="CHEMO">Chemotherapy</option><option value="SIMPD">Simple Debridement</option><option value="CATAR">Cataract</option><option value="MCPKG">Maternal Care Package</option><option value="NEWBO">Newborn Care Package</option></select><div class="invalid-feedback"></div></div></td>';
  html +=
    '<td><span class="btn btn-success addProcedure"><i class="fa fa-plus"></i></span>&nbsp<span class="btn btn-secondary clearProcedure"><i class="fa fa-undo"></i></span></td>';
  html += "<tr>";
  $("#ProcedureTable tbody").append(html);
  //uppercase();
}

$("#ProcedureTable").on("click", ".clearProcedure", function (event) {
  var parent = $(this).parents();
  var rowid = parent[1].id;
  var procedure_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(1) > span.procedure"
  );
  var rvscode_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(2) > span.rvscode"
  );
  var date_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > span.date"
  );
  var laterality_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(4) > span.laterality"
  );
  var specialcon_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(5) > span.specialcon"
  );
  var save_span = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-success.addProcedure"
  );
  var save_icon = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-success.addProcedure > i"
  );
  var clear_span = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-secondary.clearProcedure"
  );
  var clear_icon = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-secondary.clearProcedure > i"
  );
  var procedure_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(1) > div > input"
  );
  var rvscode_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(2) > div > input"
  );
  var date_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > div > input"
  );
  var laterality_select = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(4) > div > select"
  );
  var specialcon_select = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(5) > div > select"
  );
  procedure_input.removeClass("is-invalid");
  rvscode_input.removeClass("is-invalid");
  date_input.removeClass("is-invalid");
  if (save_icon.hasClass("fa fa-save")) {
    procedure_input.prop("type", "hidden");
    rvscode_input.prop("type", "hidden");
    date_input.hide();
    laterality_select.hide();
    specialcon_select.hide();
    procedure_span.show();
    rvscode_span.show();
    date_span.show();
    laterality_span.show();
    specialcon_span.show();
    save_span
      .removeClass("btn-success addProcedure")
      .addClass("btn-info editProcedure");
    save_icon.removeClass("fa fa-save").addClass("fa fa-edit");
    clear_span
      .removeClass("btn-secondary clearProcedure")
      .addClass("btn-danger removeProcedure");
    clear_icon.removeClass("fa fa-undo").addClass("fa fa-times");
  } else {
    procedure_input.val(null);
    rvscode_input.val(null);
    date_input.val(null);
    laterality_select.val(null);
    specialcon_select.val("NOTAP");
  }
});

$("#ProcedureTable").on("click", ".editProcedure", function (event) {
  var parent = $(this).parents();
  var rowid = parent[1].id;
  var procedure_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(1) > span.procedure"
  );
  var rvscode_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(2) > span.rvscode"
  );
  var date_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > span.date"
  );
  var laterality_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(4) > span.laterality"
  );
  var specialcon_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(5) > span.specialcon"
  );
  var save_span = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-info.editProcedure"
  );
  var save_icon = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-info.editProcedure > i"
  );
  var clear_span = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-danger.removeProcedure"
  );
  var clear_icon = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-danger.removeProcedure > i"
  );
  var procedure_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(1) > div > input"
  );
  var rvscode_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(2) > div > input"
  );
  var date_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > div > input"
  );
  var laterality_select = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(4) > div > select"
  );
  var specialcon_select = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(5) > div > select"
  );

  procedure_span.hide();
  procedure_input.prop("type", "text");
  procedure_input.val(procedure_span.text());
  rvscode_span.hide();
  rvscode_input.prop("type", "text");
  rvscode_input.val(rvscode_span.text());
  date_input.show();
  date_span.hide();
  var datevalue = $.datepicker.formatDate(
    "yy-mm-dd",
    new Date(date_span.text())
  );
  date_input.val(datevalue);
  laterality_span.hide();
  laterality_select.show();
  laterality_select.val(getLaterality(laterality_span.text()));
  specialcon_span.hide();
  specialcon_select.show();
  specialcon_select.val(getSpecialConsideration(specialcon_span.text()));
  save_icon.removeClass("fa fa-edit").addClass("fa fa-save");
  save_span
    .removeClass("btn-info editProcedure")
    .addClass("btn-success addProcedure");
  clear_span
    .removeClass("btn-danger removeProcedure")
    .addClass("btn-secondary clearProcedure");
  clear_icon.removeClass("fa fa-times").addClass("fa fa-undo");
  procedure_input.focus();
  //uppercase();
});

$("#ProcedureTable").on("click", ".addProcedure", function () {
  var parent = $(this).parents();
  enccode = $("#enccode").val();
  var rowid = parent[1].id;
  var procedure_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(1) > span.procedure"
  );
  var rvscode_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(2) > span.rvscode"
  );
  var date_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > span.date"
  );
  var laterality_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(4) > span.laterality"
  );
  var specialcon_span = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(5) > span.specialcon"
  );
  var save_span = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-success.addProcedure"
  );
  var save_icon = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-success.addProcedure > i"
  );
  var clear_span = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-secondary.clearProcedure"
  );
  var clear_icon = $(
    "#ProcedureTable tbody > #" +
      rowid +
      " > td:nth-child(6) > span.btn.btn-secondary.clearProcedure > i"
  );
  var procedure_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(1) > div > input"
  );
  var rvscode_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(2) > div > input"
  );
  var date_input = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > div > input"
  );
  var laterality_select = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(4) > div > select"
  );
  var specialcon_select = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(5) > div > select"
  );
  var procedure_input_invalidfeedback = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(1) > div > div"
  );
  var rvscode_input_invalidfeedback = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(2) > div > div"
  );
  var date_input_invalidfeedback = $(
    "#ProcedureTable tbody > #" + rowid + " > td:nth-child(3) > div > div"
  );
  var invalid = false;
  if (procedure_input.val() == "") {
    invalid = true;
    procedure_input.addClass("is-invalid");
    procedure_input_invalidfeedback.text("Description is required!");
  } else {
    procedure_input.removeClass("is-invalid");
  }

  if (rvscode_input.val() == "") {
    invalid = true;
    rvscode_input.addClass("is-invalid");
    rvscode_input_invalidfeedback.text("RVS Code is required!");
  } else {
    var rvsCode = rvscode_input.val();
    rvsCode = rvsCode.trim();
    rvsCode = rvsCode.replace(/^\s+|\s+$/gm, "");
    if (checkRVSExists(rvsCode) == false) {
      invalid = true;
      rvscode_input.addClass("is-invalid");
      rvscode_input_invalidfeedback.text("RVS Code does not exist!");
    } else {
      rvscode_input.removeClass("is-invalid");
    }
  }

  if (date_input.val() == "") {
    invalid = true;
    date_input.addClass("is-invalid");
    date_input_invalidfeedback.text("Date is required!");
  } else {
    date_input.removeClass("is-invalid");
  }
  if (invalid) {
    return;
  }

  if (
    saveProcedure(
      rowid,
      rvscode_span.text(),
      enccode,
      procedure_input.val(),
      rvscode_input.val(),
      date_input.val(),
      laterality_select.val(),
      specialcon_select.val()
    )
  ) {
    procedure_input.removeClass("is-invalid");
    rvscode_input.removeClass("is-invalid");
    date_input.removeClass("is-invalid");
    procedure_span.show();
    procedure_span.text(procedure_input.val());
    procedure_input.prop("type", "hidden");
    rvscode_span.show();
    rvscode_span.text(rvscode_input.val());
    rvscode_input.prop("type", "hidden");
    date_span.show();
    date_span.text(
      $.datepicker.formatDate("mm-dd-yy", new Date(date_input.val()))
    );
    date_input.hide();
    laterality_span.show();
    laterality_span.text(getLaterality(laterality_select.val()));
    laterality_select.hide();
    specialcon_span.show();
    specialcon_span.text(getSpecialConsideration(specialcon_select.val()));
    specialcon_select.hide();
    $(this)
      .removeClass("btn-success addProcedure")
      .addClass("btn-info editProcedure");
    if (save_icon.hasClass("fa fa-save")) {
      save_icon.removeClass("fa fa-save").addClass("fa fa-edit");
    } else {
      save_icon.removeClass("fa fa-plus").addClass("fa fa-edit");
      addProcedureTableRow(parseInt(rowid) + 1);
    }
    clear_icon.removeClass("fa fa-undo").addClass("fa fa-times");
    clear_span
      .removeClass("btn-secondary clearProcedure")
      .addClass("btn-danger removeProcedure");
  }
});

function saveProcedure(
  diag_cnt,
  oldrvscode,
  enccode,
  procedure,
  rvscode,
  date,
  laterality,
  specialcon
) {
  $.ajax({
    type: "POST",
    url: baseURI + "Philhealth/saveProcedure",
    data: {
      diag_cnt: diag_cnt,
      enccode: enccode,
      procedure: procedure,
      oldrvscode: oldrvscode,
      rvscode: rvscode,
      date: date,
      laterality: laterality,
      specialcon: specialcon,
    },
    async: false,
    success: function (data) {
      toastr.success("Procedure Successfully Saved! ", "Success");
    },
    error: function (data) {
      toastr.error("Error: Error Saving Procedure!", "Error");
      return false;
    },
  });
  return true;
}

$("#ProcedureTable").on("click", ".removeProcedure", function (event) {
  var parent = $(this).parents();
  var rowid = parent[1].id;
  var enccode = $("#enccode").val();
  var procedure_span = $(
    "#ProcedureTable > tbody > tr[id='" + rowid + "'] > td:nth-child(1) > span"
  );
  var rvscode_span = $(
    "#ProcedureTable > tbody > tr[id='" + rowid + "'] > td:nth-child(2) > span"
  );
  $("#ModalDeleteProcedure").modal("show");
  $("#delProcedure").text(
    "DELETE " + procedure_span.text() + " (" + rvscode_span.text() + ")"
  );
  $("#delproc_enccode").val(enccode);
  $("#delproc_cnt").val(rowid);
  $("#delrvscode").val(rvscode_span.text());
});

$("#frmDeleteProcedure").submit(function () {
  $.ajax({
    url: baseURI + "Philhealth/RemoveProcedure",
    type: "POST",
    data: new FormData(this),
    dataType: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data, response) {
      var index = $("#delproc_cnt").val();
      $("#ProcedureTable > tbody > tr[id='" + index + "']").remove();
      $("#ModalDeleteProcedure").modal("hide");
      toastr.success("Procedure Successfully Deleted! ", "Success");
    },
    error: function (data) {
      $("#ModalDeleteProcedure").modal("hide");
      toastr.error("Error:Please try again!", "Error");
    },
  });
  return false;
});

function getLaterality(laterality) {
  var platerality = "";
  switch (laterality) {
    case "Left":
      platerality = "L";
      break;
    case "Right":
      platerality = "R";
      break;
    case "Both":
      platerality = "B";
      break;
    case "L":
      platerality = "Left";
      break;
    case "R":
      platerality = "Right";
      break;
    case "B":
      platerality = "Both";
      break;
    default:
      platerality = "";
  }
  return platerality;
}

function getSpecialConsideration(specialcon) {
  var specialconsidetation = "";
  switch (specialcon) {
    case "Hemodialysis":
      specialconsidetation = "HEMOD";
      break;
    case "Peritoneal Dialysis":
      specialconsidetation = "PERID";
      break;
    case "Radiotherapy (LINAC)":
      specialconsidetation = "LINAC";
      break;
    case "Radiotherapy (COBALT)":
      specialconsidetation = "COBAL";
      break;
    case "Radiotherapy (IMRT)":
      specialconsidetation = "RIMRT";
      break;
    case "Blood Transfusion":
      specialconsidetation = "BLOOD";
      break;
    case "Brachytherapy":
      specialconsidetation = "BRACH";
      break;
    case "Chemotherapy":
      specialconsidetation = "CHEMO";
      break;
    case "Simple Debridement":
      specialconsidetation = "SIMPD";
      break;
    case "Cataract":
      specialconsidetation = "CATAR";
      break;
    case "Maternal Care Package":
      specialconsidetation = "MCPKG";
      break;
    case "Newborn Care Package":
      specialconsidetation = "NEWBO";
      break;
    case "HEMOD":
      specialconsidetation = "Hemodialysis";
      break;
    case "PERID":
      specialconsidetation = "Peritoneal Dialysis";
      break;
    case "LINAC":
      specialconsidetation = "Radiotherapy (LINAC)";
      break;
    case "COBAL":
      specialconsidetation = "Radiotherapy (COBALT)";
      break;
    case "RIMRT":
      specialconsidetation = "Radiotherapy (IMRT)";
      break;
    case "BLOOD":
      specialconsidetation = "Blood Transfusion";
      break;
    case "BRACH":
      specialconsidetation = "Brachytherapy";
      break;
    case "CHEMO":
      specialconsidetation = "Chemotherapy";
      break;
    case "SIMPD":
      specialconsidetation = "Simple Debridement";
      break;
    case "CATAR":
      specialconsidetation = "Cataract";
      break;
    case "MCPKG":
      specialconsidetation = "Maternal Care Package";
      break;
    case "NEWBO":
      specialconsidetation = "Newborn Care Package";
      break;
    case "NOTAP":
      specialconsidetation = "";
      break;
    default:
      specialconsidetation = "";
  }
  return specialconsidetation;
}

function checkRVSExists(rvsCode) {
  var is_exists = true;
  $.ajax({
    type: "POST",
    url: baseURI + "Philhealth/existRVS",
    data: {
      rvscode: rvsCode,
    },
    async: false,
    dataType: "JSON",
    success: function (data) {
      if (data == false) {
        is_exists = false;
      }
    },
    error: function (data) {
      toastr.error("Error: Retrieving Procedure!", "Error");
      is_exists = false;
    },
  });
  return is_exists;
}
