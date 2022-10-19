$(document).ready(function () {
  $("#frmPackageProcedure").validate({
    rules: {
      packcode: {
        required: true,
        maxlength: 5,
        remote: {
          url: baseURL + "Ref_PackageProcedure/exist",
          type: "post",
          data: {
            packcode: function () {
              return $("#packcode").val();
            },
            oldpackcode: function () {
              return $("#oldpackcode").val();
            },
            formIden: function () {
              return $("#formIden").val();
            },
          },
        },
      },
      packdesc: "required",
    },
    messages: {
      packcode: {
        required: "Package Code is required!",
        maxlength: "Invalid length!",
        remote: "Code already exist/has existing items!",
      },
      packdesc: "Package Description is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });
  PackageProcedureList();
});

$("#frmPackageProcedure").submit(function (event) {
  event.preventDefault();
  if ($("#frmPackageProcedure").valid() == false) {
    return;
  }
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "Ref_PackageProcedure/save",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#ModalAddPackageProcedure").modal("hide");
      PackageProcedureList();
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

function PackageProcedureList() {
  var data = new Object();
  data.id = "ProcedurePackageTable";
  data.link = baseURL + "Ref_PackageProcedure/PackageProcedureList";
  data.type = "POST";
  data.coldef = [
    {
      targets: 1,
      className: "packagedesc",
    },
    {
      targets: 3,
      searchable: false,
      orderable: false,
      render: function (data) {
        switch (data) {
          case "A":
            return "Active";
            break;
          case "I":
            return "Inactive";
            break;
          default:
            return "Inactive";
        }
      },
    },
    {
      targets: 2,
      searchable: false,
      render: function (data) {
        switch (data) {
          case "LABOR":
            return '<i class="fa fa-check  text-success"></i>&nbspLaboratory';
            break;
          case "RADIO":
            return '<i class="fa fa-check  text-success"></i>&nbspRadiology';
            break;
          case "RADTH":
            return '<i class="fa fa-remove text-danger"></i>&nbspRadio Theraphy';
            break;
          case "NUCME":
            return '<i class="fa fa-remove text-danger"></i>&nbspNuclear Medicine';
            break;
          case "DENTA":
            return '<i class="fa fa-remove text-danger"></i>&nbspDental';
            break;
          case "DERMA":
            return '<i class="fa fa-remove text-danger"></i>&nbspDermatology';
            break;
          case "OPTHA":
            return '<i class="fa fa-remove text-danger"></i>&nbspOpthalmology';
            break;
          case "PHARM":
            return '<i class="fa fa-remove text-danger"></i>&nbspPharmacy';
            break;
          case "NEURO":
            return '<i class="fa fa-remove text-danger"></i>&nbspNeurology';
            break;
          case "OPD":
            return '<i class="fa fa-remove text-danger"></i>&nbspOut-Patient Department';
            break;
          case "ER":
            return '<i class="fa fa-remove text-danger"></i>&nbspEmergency Room';
            break;
          case "OR":
            return '<i class="fa fa-remove text-danger"></i>&nbspOperating Room';
            break;
          case "DR":
            return '<i class="fa fa-remove text-danger"></i>&nbspDelivery Room';
            break;
          case "WARD":
            return '<i class="fa fa-remove text-danger"></i>&nbspWard';
            break;
          case "PERIN":
            return '<i class="fa fa-remove text-danger"></i>&nbspPerinatal';
            break;
          case "CSSR":
            return '<i class="fa fa-remove text-danger"></i>&nbspCentral Supply Room';
            break;
          case "PT":
            return '<i class="fa fa-remove text-danger"></i>&nbspPhysical Therapy';
            break;
          default:
            return '<span class="badge bg-default">&nbsp</span>';
        }
      },
    },
    {
      targets: 4,
      orderable: false,
      searchable: false,
      render: function (data) {
        return (
          '<div class="btn-group  btn-ladda" btn-sm data-layout="zoom-in"><button type="button" class="btn btn-outline-success btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu"><a href="javascript:void(0);" class="dropdown-item ModalEditProcedurePackage" data-packcode="' +
          data +
          '"><i class="fa fa-pencil"></i>&nbsp Edit</a><a href="javascript:void(0);" class="dropdown-item ModalDeleteProcedurePackage" data-packcode="' +
          data +
          '"><i class="fa fa-trash"></i>&nbsp Delete</a></div><a href="' +
          baseURL +
          "Ref_PackageProcedureItems/List/" +
          data +
          '" type="button" class="btn btn-outline-success btn-sm" ><i class="fa fa-arrow-right fa-sm"></i> Next Level</a></div>'
        );
      },
    },
  ];
  loadTable(data);
}

$("#ProcedurePackageTable").on(
  "click",
  ".ModalDeleteProcedurePackage",
  function () {
    const thisRow = $(this).closest("tr");
    const data = $(this).data();
    const packcode = data["packcode"];
    const packagedesc = thisRow.find(".packagedesc").text();
    $("#deletepackagedesc").text(packagedesc);
    $("#DeleteProcPackageModal").modal({ backdrop: "static" }).draggable();
    $("#formIdentification").val("delete");
    $("#deletecode").val(packcode);
  }
);

$("#frmDeleteProcPackage").submit(function (event) {
  event.preventDefault();
  $.ajax({
    type: "POST",
    data: $(this).serialize(),
    dataType: "JSON",
    url: baseURL + "Ref_PackageProcedure/delete",
    success: function (data, response) {
      toastr.success(data.message, "Success");
      $("#DeleteProcPackageModal").modal("hide");
      PackageProcedureList();
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

$("#ProcedurePackageTable").on(
  "click",
  ".ModalEditProcedurePackage",
  function () {
    const data = $(this).data();
    const packcode = data["packcode"];
    const obj = getPackageProcedure(packcode);
    $("#oldpackcode").val(obj.packcode);
    $("#packcode").val(obj.packcode);
    $("#packdesc").val(obj.packdesc);
    $("#packstat").val(obj.packstat);

    $("#ModalAddPackageProcedure").modal({ backdrop: "static" }).draggable();
    $("#formIden").val("update");
  }
);

function AddProcedurePackage() {
  $("#ModalAddPackageProcedure").modal({ backdrop: "static" }).draggable();
  $("#formIden").val("insert");
}

function getPackageProcedure(packcode) {
  var packcode = encodeURIComponent(encodeURIComponent(packcode));
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_PackageProcedure/get/" + packcode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      obj = $.parseJSON(data.data);
    },
    error: function (data, status) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
  return obj;
}
