/*
	function name :  BMI
	param : str|enccode 
	description :generate list of Body Mass Index
	*/
var base_URL = null;

$(document).ready(function () {
  $("#frmDiagnosis").validate({
    submitHandler: function (form) {
      var POSTURL = baseURL + "PatientRecords/saveDiagnosis";
      $.ajax({
        type: "POST",
        url: POSTURL,
        dataType: "JSON",
        cache: false,
        async: true,
        data: $(form).serialize(),
        success: function (data) {
          if ($("#diagformIden").val() == "insert") {
            $("#diagnosisModal").modal("hide");
            formReset($("#frmDiagnosis"));
            toastr.success("Diagnosis Successfully Saved! ", "Success");
            Diagnosis(enccode);
          } else if ($("#diagformIden").val() == "update") {
            toastr.success("Diagnosis Successfully Updated! ", "Success");
            $("#diagnosisModal").modal("hide");
            $("#diagList").DataTable().ajax.reload();
          } else {
            toastr.error("no post", "data");
          }
        },
        error: function (data, xhr, text) {
          toastr.error(data.status, "Warning!");
        },
      });
      return false;
      $(form).submit();
    },
    rules: {
      diagPrime: {
        required: true,
        remote: {
          depends: function () {
            return $("#diagformIden").val() == "insert";
          },
          param: {
            url: baseURL + "PatientRecords/checkPrimeDiag",
            type: "POST",
            data: {
              enccode: enccode,
            },
          },
        },
      },
      diagType: {
        required: true,
        remote: {
          depends: function (element) {
            if ($("#diagformIden").val() == "update") {
              if ($(element).val() !== $("#currentdiagType").val()) {
                return true;
              }
            } else {
              return $(element).val() == "ADMDX" || $(element).val() == "WODIA";
            }
          },
          param: {
            url: baseURL + "PatientRecords/checkTypeDiagnosis",
            type: "post",
            data: {
              enccode: enccode,
            },
          },
        },
      },
      diagICD_diag: "required",
      diagDoc_doc: "required",
      diagICD_desc: "required",
    },
    messages: {
      diagType: {
        required: "Select  Diagnosis Type!",
        remote: "Type of Diagnosis already exist!",
      },
      diagICD_diag: "Select  ICD 10 / Diagnosis!",
      diagPrime: {
        required: "Select if primary diagnosis",
        remote: "Primary diagnosis already exists!",
      },
      diagDoc_doc: "Select  Doctor!",
      diagICD_desc: "Please enter description!",
    },
    errorElement: "span",
    errorPlacement: function errorPlacement(error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },

    highlight: function highlight(element) {
      $(element).addClass("is-invalid").removeClass("is-valid");
      if ($(element).hasClass("select2-offscreen")) {
        element = $("#s2id_" + element.attr("id") + " ul").parent();
        $(element).addClass("is-invalid").removeClass("is-valid");
      }
    },

    unhighlight: function unhighlight(element) {
      $(element).addClass("is-valid").removeClass("is-invalid");
      if ($(element).hasClass("select2-offscreen")) {
        $("#s2id_" + element.attr("id") + " ul")
          .removeClass("is-invalid")
          .addClass("is-valid");
      }
    },
  });
});

function Diagnosis(enccode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var data = new Object();
  data.id = "diagList";
  data.link = baseURL + "PatientRecords/DiagnosisList/" + enctr;
  data.type = "POST";
  data.coldef = [
    {
      orderable: false,
      targets: [0, 1, 2],
      searchable: false,
      visible: false,
    },
    {
      targets: [4, 7],
      searchable: false,
      render: function (data, type, row) {
        switch (data) {
          case "ADMDX":
            return '<div class="text-primary">ADMITTING</span>';
            break;
          case "FINDX":
            return '<div class="text-success">FINAL</span>';
            break;
          case "WODIA":
            return '<div class="text-success">WORKING</span>';
            break;
          case "WORDX":
            return '<div class="text-success">INTERIM</span>';
            break;
          case "CLIDI":
            return '<div class="text-success">CLINICAL</span>';
            break;
          case "OTHER":
            return '<div class="text-success">OTHER</span>';
            break;
          case "Y":
            return '<div class="text-success">YES</span>';
            break;
          case "N":
            return '<div class="text-success">NO</span>';
            break;
          default:
            return '<div class="text-default"></span>';
        }
      },
    },
  ];
  loadTable(data);
}

function addDiagnosis(enccode, hpercode) {
  $("#frmDiagnosis").trigger("reset");
  var validator = $("#frmDiagnosis").validate();
  validator.resetForm();
  $("#diagnosisModal").modal("show");
  $("#diagDateLog").val(getTimeLocale());
  $("#diagEnccode").val(atob(enccode));
  $("#diagHpercode").val(atob(hpercode));
  $("#diagformIden").val("insert");
  selDoctor($("#frmDiagnosis"));
  SelDiagnosis();
}

$("#diagList").on("click", "#btnEditDiag", function () {
  $("#diagnosisModal").modal("show");
  var enccode = atob($(this).data("enccode"));
  var datelog = atob($(this).data("datelog"));

  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var log = encodeURIComponent(encodeURIComponent(datelog));
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/diagnosisInfo/" + enctr + "/" + log,
    data: "JSON",
    async: false,
    success: function (data) {
      var now = new Date();
      obj = $.parseJSON(data);
      var dateLog = new Date(obj["encdate"]);
      var val = new Date(dateLog.getTime() - now.getTimezoneOffset() * 60000)
        .toISOString()
        .substring(0, 19);
      $("#diagformIden").val("update");
      $("#diagEnccode").val(enccode);
      $("#diagHpercode").val(hpercode);
      $("#diagDateLog").val(val);
      //$('#diagICD_desc').val(obj['diagtext']);
      setDoc(obj["licno"]);
      //var cnt = obj['diagcode_ext'].length;
      //console.log(obj.diagtext);
      var diagcode = obj["diagcode_ext"];
      //var nameArr = "";
      //if (diagcode != null) {
      // nameArr = diagcode.split(",");
      //}
      //let text = "";
      //for (let i = 0; i < nameArr.length; i++) {
      // setDiagnosis(nameArr[i]);
      //}
      $("#diagICD_desc").val(obj.diagtext);
      $("#diagType option[value='" + obj["tdcode"] + "'").prop(
        "selected",
        true
      );
      $("#diagPrime option[value='" + obj["primediag"] + "'").prop(
        "selected",
        true
      );
      $("#currentdiagType").val(obj["tdcode"]);
    },
    error: function (data) {
      alert("Error: Fetching Patient BMI!");
    },
  });
});

$("#diagList").on("click", "#btnDeleteDiag", function () {
  var enccode = atob($(this).data("enccode"));
  var datelog = atob($(this).data("datelog"));
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var log = encodeURIComponent(encodeURIComponent(datelog));
  var now = new Date();
  var LogDate = new Date(datelog);
  var val = new Date(LogDate.getTime() - now.getTimezoneOffset() * 60000)
    .toISOString()
    .substring(0, 19);
  $("#deleteDiagModal").modal("show");
  $("#diagenccode").val(enccode);
  $("#diagdatelog").val(val);
  $("#diagformIdenDelete").val("delete");
});

$("#diagnosisModal").on("hidden.coreui.modal", function () {
  $("#diagICD_desc").val("").empty();
});

$("#frmDeleteDiag").on("submit", function (e) {
  var form = this;
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/deleteDiagnosis",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data, response) {
      $("#deleteDiagModal").modal("hide");
      toastr.success("Successfully Deleted! ", "Success");
      $("#diagList").DataTable().ajax.reload();
    },

    error: function (xhr, desc, err) {
      toastr.error(xhr, "Error");
    },
  });
  return false;
});

$('[name $="_diag[]"]').on("change", function () {
  var arr = this.value;
  for (let i = 0; i < arr.length; i++) {
    $("#diagICD_desc").val(arr[i]);
  }
});

function setDoc(licno) {
  var selTos = $('[name $="_doc"]');
  selTos.prop("readonly", true);
  $.ajax({
    type: "GET",
    url: baseURL + "PatientRecords/setDoctor/" + licno,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["name"], obj["licno"], true, true);
    selTos.append(option).trigger("change");
    selTos.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
  selDoctor($("#frmDiagnosis"));
}

function setDiagnosis(code) {
  var icd = encodeURIComponent(encodeURIComponent(code));
  var selTos = $('[name $="_diag[]"]');
  selTos.prop("readonly", true);
  $.ajax({
    type: "POST",
    url: baseURL + "/PatientRecords/setDiagnosis/" + icd,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["diagdesc"], obj["diagdesc"], true, true);
    selTos.append(option).trigger("change");
    selTos.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
  SelDiagnosis();
}

$("#diagnosisModal").on("hidden.coreui.modal", function () {
  $("#diagDoc_doc").empty().trigger("change");
  $("#diagICD_diag").empty().trigger("change");
});
