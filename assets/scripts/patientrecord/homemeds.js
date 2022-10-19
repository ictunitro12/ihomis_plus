function homeMedications(enccode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var data = new Object();
  data.id = "homeMedicationList";
  data.link = baseURL + "PatientRecords/homeMedicationList/" + enctr;
  data.type = "POST";
  data.coldef = [
    {
      orderable: false,
      targets: [0, 3, 4],
      searchable: false,
      visible: false,
    },
    {
      className: "description",
      targets: 1,
    },
    {
      className: "instruction",
      targets: 2,
    },
  ];
  loadTable(data);
}

$("#courseTbl").on("click", "#btnEditcrsWard", function () {
  $("#crsWardModal").modal("show");
  uppercase();
  var courseenccode = atob($(this).data("enccode"));
  var datelog = atob($(this).data("datelog"));
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var log = encodeURIComponent(encodeURIComponent(datelog));
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/courseWardInfo/" + enctr + "/" + log,
    data: "JSON",
    async: false,
    success: function (data) {
      var now = new Date();
      obj = $.parseJSON(data);
      $("#crsWrdformIden").val("update");
      $("#crsWrdDateLog").val(setTimeLocale(obj["dtetake"]));
      $("#crsWrdEnccode").val(enccode);
      $("#crsWrdHpercode").val(hpercode);
      $("#crsWrdDesc").val(obj["crseward"]);
    },
    error: function (data) {
      alert("Error: Fetching Patient BMI!");
    },
  });
});

$("#btnAddMedications").click(function () {
  $("#modalHomeMeds").modal("show");
  if ($.fn.DataTable.isDataTable("#homeMedslist")) {
    medsTableSelect.clear();
    medsTableSelect.destroy();
  }
});

$("#btnMeds_add").click(function () {
  $("#modalDrugsItem").modal({ backdrop: "static" });
  selectMedsTable("DRUGS");
});

function selectMedsTable(type) {
  if ($.fn.DataTable.isDataTable("#selectDrugsItemTable")) {
    $("#selectDrugsItemTable").DataTable().clear();
    $("#selectDrugsItemTable").DataTable().destroy();
  }
  var medsTable = $("#selectDrugsItemTable").DataTable({
    ajax: baseURL + "Charges/chargesTable/" + type,
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    select: {
      select: true,
      style: "multi",
    },
    processing: true,
    serverside: true,
    oLanguage: {
      sProcessing:
        '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
    },
    destroy: true,
    info: false,
    deferLoading: 250,
    columns: [
      { data: "chrgcode" }, //0
      { data: "itemcode" }, //1
      {
        data: "descs",
        render: function (data, type, row) {
          return data;
        },
      }, //2
      { data: "uom" }, //3
      { data: "amnt" }, //4
      { data: "lot" }, //5
      { data: "available" }, //6
      { data: "expiry" }, //7
      { data: "ctr" }, //8
    ],
    columnDefs: [
      {
        targets: [0, 1, 3, 4, 5, 6, 7, 8],
        visible: false,
      },
    ],
  });
  $("#selectDrugsItemTable").unbind("click");
  medsTable.on("click", "tbody>tr", function () {
    $(this).toggleClass("selected");
    $(this).toggleClass("table-success");
  });
  $("#selectDrugsItems").click(function () {
    var rowData = medsTable.rows(".selected").data();
    $.each(rowData, function (i, d) {
      if (!checkItemListed(d["descs"], d["itemcode"], d["ctr"])) {
        return;
      }
      medsTableSelect.row
        .add([
          '<a class="text-danger align-middle" id="btnremove" ><i class="fa fa-remove fa-2x"></i></a>',
          '<input type="hidden" class="form-control form-control-md" readonly  name="row[]" id="row">',
          d["descs"],
          '<input type="text" class="form-control form-control-md" name="instruction[]" id="instruction">',
          '<input type="hidden" class="form-control form-control-md" readonly value=' +
            d["itemcode"] +
            ' name ="itemcode[]" id="itemcode">',
          '<input type="hidden" class="form-control form-control-md" readonly value=' +
            d["ctr"] +
            ' name ="ctr[]" id="ctr">',
        ])
        .draw(true);
    });
    $("#modalDrugsItem").modal("hide");
    medsTable.rows(".selected").remove().draw();
  });
  $("#homeMedslist tbody").on("click", "#btnremove", function () {
    medsTableSelect.row($(this).parents("tr")).remove().draw();
  });
}

function checkItemListed(chargedesc, chargeItem, chargeCtr) {
  var form = document.getElementById("frmHomeMeds");
  var formData = new FormData(form);
  var row = formData.getAll("row[]");
  var i;
  for (i = 0; i < row.length; i++) {
    const item = $(medsTableSelect.cell(row[i], 4).node()).find("input").val();
    const ctr = $(medsTableSelect.cell(row[i], 5).node()).find("input").val();

    if (chargeItem == item && chargeCtr == ctr) {
      toastr.warning(chargedesc + " is already selected!", "Warning");
      return false;
    }
  }
  return true;
}

var medsTableSelect = $("#homeMedslist").DataTable({
  searching: false,
  retrieve: true,
  info: false,
  ordering: false,
  destroy: true,
  deferLoading: 350,
  columnDefs: [
    {
      visible: true,
      targets: [0, 2, 3],
    },
  ],
});

$("#frmHomeMeds").submit("click", function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  var row = formData.getAll("row[]");
  let hasError = false;
  var item;
  var i = 0;
  var instruction;

  var medsenccode = encodeURIComponent(encodeURIComponent(enccode));
  var medsArray = [];

  for (i = 0; i < row.length; i++) {
    var meds = {};
    itemdesc = $(medsTableSelect.cell(i, 2).node()).text();
    instruction = $(medsTableSelect.cell(i, 3).node()).find("input").val();
    var unit_instruction_element = $(medsTableSelect.cell(i, 3).node())
      .find("input")
      .get(0);

    if (instruction == "") {
      $(unit_instruction_element).next("#instructionError").remove();
      $(unit_instruction_element).removeClass("is-valid");
      $(unit_instruction_element).addClass("is-invalid");
      $(unit_instruction_element).after(
        '<div class="invalid-feedback" id="instructionError">Instruction is required!</div>'
      );
      hasError = true;
    } else {
      $(unit_instruction_element).next("#instructionError").remove();
      $(unit_instruction_element).removeClass("is-invalid");
      $(unit_instruction_element).addClass("is-valid");
      $(unit_instruction_element).after(
        '<div class="invalid-feedback" id="instructionError">Instruction is required!</div>'
      );
    }
    item = $(medsTableSelect.cell(i, 4).node()).find("input").val();
    ctr = $(medsTableSelect.cell(i, 5).node()).find("input").val();

    meds.enccode = enccode;
    meds.itemcode = item;
    meds.dmdctr = ctr;
    meds.itemdesc = itemdesc;
    meds.instruction = instruction;
    medsArray.push(meds);
  }
  if (medsArray.length == 0) return;
  if (hasError) return;

  let meds_JSONString = JSON.stringify(medsArray);
  $.ajax({
    type: "POST",
    data: { meds: meds_JSONString, action: "insert", enccode: medsenccode },
    dataType: "JSON",
    url: baseURL + "PatientRecords/saveHomeMeds",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#modalHomeMeds").modal("hide");
      homeMedications(enccode);
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return false;
});

$("#homeMedicationList").on("click", "#btnDeleteMed", function () {
  const thisRow = $(this).closest("tr");
  const description = thisRow.find(".description").text();
  $("#deleteHomeMedsDesc").text(description);
  const medsenccode = $(this).data("enccode");
  const medsdmdcomb = $(this).data("dmdcomb");
  const medsdmdctr = $(this).data("dmdctr");
  $("#medItemCtr").val(medsdmdctr);
  $("#medItemCode").val(medsdmdcomb);
  $("#medItemEnccode").val(medsenccode);
  $("#medItemDesc").val(description);
  $("#ModalHomeMedsDelete").modal({ backdrop: "static" });
  $("#ModalHomeMedsDelete").modal("show");
});

$("#homeMedicationList").on("click", "#btnEditMed", function () {
  const thisRow = $(this).closest("tr");
  const description = thisRow.find(".description").text();
  const instruction = thisRow.find(".instruction").text();
  const medsenccode = $(this).data("enccode");
  const medsdmdcomb = $(this).data("dmdcomb");
  const medsdmdctr = $(this).data("dmdctr");

  $("#editHomeMedsEnccode").val(medsenccode);
  $("#editHomeMedsCtr").val(medsdmdctr);
  $("#editHomeMedsItemCode").val(medsdmdcomb);

  $("#editHomeMedsDesc").text(description);
  $("#editHomeMedsInstruction").val(instruction);
  $("#modalEditHomeMeds").modal({ backdrop: "static" });
  $("#modalEditHomeMeds").modal("show");
});

$("#frmDeleteHomeMeds").submit(function (event) {
  event.preventDefault();
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "PatientRecords/deleteHomeMed",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#ModalHomeMedsDelete").modal("hide");
      homeMedications(enccode);
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#frmEditHomeMeds").submit(function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  var row = formData.getAll("row[]");
  let hasError = false;
  var item;
  var i = 0;
  var instruction;

  var medsenccode = encodeURIComponent(encodeURIComponent(enccode));
  var medsArray = [];

  var meds = {};
  itemdesc = $("#editHomeMedsDesc").text();
  instruction = $("#editHomeMedsInstruction").val();
  if (instruction == "") {
    $("#editHomeMedsInstruction").next("#instructionError").remove();
    $("#editHomeMedsInstruction").removeClass("is-valid");
    $("#editHomeMedsInstruction").addClass("is-invalid");
    $("#editHomeMedsInstruction").after(
      '<div class="invalid-feedback" id="instructionError">Instructions is required!</div>'
    );
    hasError = true;
  } else {
    $("#editHomeMedsInstruction").next("#instructionError").remove();
    $("#editHomeMedsInstruction").removeClass("is-invalid");
    $("#editHomeMedsInstruction").addClass("is-valid");
    $("#editHomeMedsInstruction").after(
      '<div class="invalid-feedback" id="instructionError">Instructions is required!</div>'
    );
  }
  item = $("#editHomeMedsItemCode").val();
  ctr = $("#editHomeMedsCtr").val();

  meds.enccode = enccode;
  meds.itemcode = item;
  meds.dmdctr = ctr;
  meds.itemdesc = itemdesc;
  meds.instruction = instruction;
  medsArray.push(meds);

  if (medsArray.length == 0) return;
  if (hasError) return;

  let meds_JSONString = JSON.stringify(medsArray);
  $.ajax({
    type: "POST",
    data: { meds: meds_JSONString, action: "update", enccode: medsenccode },
    dataType: "JSON",
    url: baseURL + "PatientRecords/saveHomeMeds",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#modalEditHomeMeds").modal("hide");
      homeMedications(enccode);
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return false;
});
