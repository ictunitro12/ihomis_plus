var forAdmtable = null;
$(function () {
  var mode = $("#mode").val();
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, "0");
  var mm = String(today.getMonth() + 1).padStart(2, "0");
  var yyyy = today.getFullYear();
  var foradmissiondate = yyyy + "-" + mm + "-" + dd;
  $("#foradmissiondate").val(foradmissiondate);
  init_refrom_hfhudcode();
  if (mode == 0) {
    initAdd();
  } else if ((mode = 1)) {
    initforAdmit();
  } else {
    location.reload();
  }
});

function initAdd() {
  $("#saveIdenAdm").val("insert");
  // check for hpercode query string
  let url = new URL(window.location);
  let params = new URLSearchParams(url.search);
  var fromModule = getCookie("fromModule");
  var Modulehpercode = getCookie("Modulehpercode");
  let referralLogId = getCookie("logID");
  if (params.has("hpercode") && params.get("hpercode")) {
    $("#hpercode").val(params.get("hpercode"));
    initFormEdit(params.get("hpercode"));
  } else if (fromModule == "adm") {
    initFormEdit(btoa(Modulehpercode));
    if (referralLogId) {
      set_refrom_fhud(referralLogId);
    }
  } else {
    setCookie("fromModule", "adm", "1");
    $("#PatSearch").modal({ backdrop: "static" });
  }

  // triage
  if (params.has("triage") && params.get("triage")) {
    $("#triage_id").val(params.get("triage"));
  }

  $("#patientPhoto").prop("src", baseURL + "assets/img/avatars/none.png");
  uppercase();
  AdmissionWizard();
}

function initforAdmit() {
  $("#saveIdenAdm").val("insert");
  $("#forAdmitModal").modal({ backdrop: "static" });
  $("#patientPhoto").prop("src", baseURL + "/assets/img/avatars/none.png");
  uppercase();
  forAdmitList();
  AdmissionWizard();
}

function forAdmitList() {
  $.ajax({
    url: baseURL + "Admission/forAdmitList",
    type: "POST",
    dataType: "JSON",
    cache: false,
    async: true,
    success: function (data, response) {
      forAdmissionList(data);
    },
    error: function (response) {
      toastr.error("Error : Module not specified", "Error");
    },
  });
}

$("#foradmissiondate").on("change", function () {
  let foradmissiondate = $(this).val();
  if (
    foradmissiondate == "" ||
    foradmissiondate == null ||
    foradmissiondate == undefined
  ) {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, "0");
    var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
    var yyyy = today.getFullYear();
    foradmissiondate = yyyy + "-" + mm + "-" + dd;
  }
  $.ajax({
    url: baseURL + "Admission/forAdmitList",
    type: "POST",
    dataType: "JSON",
    cache: false,
    async: true,
    data: { foradmissiondate: foradmissiondate },
    success: function (data, response) {
      forAdmissionList(data);
    },
    error: function (response) {
      toastr.error("Error : Module not specified", "Error");
    },
  });
});

function forAdmissionList(data) {
  forAdmtable = $("#forAdmissionList").DataTable({
    data: data,
    processing: true,
    language: {
      processing:
        '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> ',
    },
    destroy: true,
    columns: [
      { data: "hpercode" },
      { data: "fullname" },
      { data: "dob" },
      {
        data: "patsex",
        render: function (data) {
          return data == "F"
            ? '<i class="fa fa-female" aria-hidden="true"></i> FEMALE'
            : '<i class="fa fa-male" aria-hidden="true"></i> MALE';
        },
      },
      { data: "source" },
      { data: "reason" },
    ],
  });

  // table.on("click", "tr", function () {
  //   var info = table.row(this).data();
  //   console.log(info);
  //   var hpercode = btoa(info["hpercode"]);
  //   $("#forAdmitModal").modal("hide");
  //   if (Module == "admission") {
  //     $("#foradmcode").val(info["enccode"]);
  //     $("#foradmtoecode").val(info["toecode"]);
  //     PatientInformation(hpercode);
  //     PatientAddress(hpercode);
  //   } else {
  //     toastr.error("Error :", "Error");
  //   }
  // });
}

$("#forAdmissionList").on("click", "tr", function () {
  var info = forAdmtable.row(this).data();
  var hpercode = btoa(info["hpercode"]);
  $("#forAdmitModal").modal("hide");
  if (Module == "admission") {
    $("#foradmcode").val(info["enccode"]);
    $("#foradmtoecode").val(info["toecode"]);
    PatientInformation(hpercode);
    PatientAddress(hpercode);
    setForAdmissionReferral(info["enccode"]);
  } else {
    toastr.error("Error :", "Error");
  }
});

function SearchWard(Sex) {
  var form = $("#form-step-2");
  form.find("#selWar").select2({
    placeholder: "WARD",
    theme: "bootstrap",
    minimumInputLength: 0,
    allowClear: true,
    ajax: {
      url: baseURL + "Admission/searchWard/" + Sex,
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchPatient: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.wardcode,
            text: item.ward,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  form.find("#selWar").on("change", function () {
    var data = form.find("#selWar option:selected", this);
    var wardCode = form.find("#wardcode").val(this.value);
    var wardCnt = roomCount(this.value);

    if (wardCnt != 0) {
      SearchRoom(this.value);
      $("#countRoom").text(wardCnt);
      $("#countRoom").removeClass("text-danger").addClass("text-success");
      $("#selRoom").removeAttr("disabled");
    } else {
      $("#roomstat")
        .removeClass("fa fa-check")
        .addClass("fa fa-remove")
        .text("Unavailable");
    }
  });
}

function SearchRoom(WardCode) {
  var form = $("#form-step-2");
  form.find("#selRoom").select2({
    placeholder: "ROOM",
    theme: "bootstrap",
    minimumInputLength: 0,
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Admission/searchRoom/" + WardCode,
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchPatient: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.rmintkey,
            text: item.rmname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });

  form.find("#selRoom").on("change", function () {
    var data = form.find("#selRoom option:selected", this);
    var rmcode = form.find("#rmcode").val(this.value);
    var bedCnt = bedCount(this.value);
    if (bedCnt !== 0) {
      $("#selBed").removeAttr("disabled");
      $("#countBed").text(bedCnt);
      $("#countBed").removeClass("text-danger").addClass("text-success");
      SearchBed(this.value);
    }
  });
}

function SearchBed(roomCode) {
  var form = $("#form-step-2");
  form.find("#selBed").select2({
    placeholder: "BED",
    theme: "bootstrap",
    minimumInputLength: 0,
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Admission/searchBed/" + roomCode,
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchPatient: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.bdintkey,
            text: item.bdname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });

  form.find("#selBed").on("change", function () {
    var data = form.find("#selBed option:selected", this);
    var bdcode = form.find("#bdcode").val(this.value);
  });
}

$("#dateaccom").change(function () {
  var thisDate = $(this).val();
  var bdate = $("#info_dob").val();
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/EncounterAgeComp/" + bdate + "/" + thisDate,
    dataType: "JSON",
    success: function (data, status) {
      $("#patage").val(data.year);
      $("#patagemo").val(data.month);
      $("#patagedy").val(data.day);
      if (data.year == 0 && data.month == 0 && data.day == 0) {
        $("#patagehr").prop("readonly", false);
      } else {
        $("#patagehr").val("");
        $("#patagehr").prop("readonly", true);
      }
    },
    error: function (data, status) {
      return status;
    },
  });
});

$("#closeforadm").click(function () {
  window.location.href = baseURL + "Admission";
});

function set_refrom_fhud(referralLogId) {
  const info_lname = $("#info_lname").val();
  const info_fname = $("#info_fname").val();
  const info_mname = $("#info_mname").val();
  const info_dob = $("#info_dob").val();
  const info_sex = $("#info_sex").val();
  const patReferralQuery = {
    info_lname,
    info_fname,
    info_mname,
    info_dob,
    info_sex,
    referralLogId,
  };
  $.ajax({
    type: "POST",
    url: baseURL + "Referral/getPatReferralHfhud",
    dataType: "JSON",
    data: patReferralQuery,
    async: false,
    success: function (data, status) {
      var option = new Option(data.hfhudname, data.hfhudcode, true, true);
      $("#refrom_hfhudcode").append(option).trigger("change");
      $("#refrom_hfhudcode").trigger({
        theme: "coreui",
        type: "select2:select",
        params: {
          data: data,
        },
      });
    },
  });
}

function setForAdmissionReferral(enccode) {
  $.ajax({
    type: "POST",
    url: baseURL + "Referral/forAdmissionReferral",
    dataType: "JSON",
    data: { enccode },
    async: false,
    success: function (data, status) {
      if (data) {
        $("#reFromTrigger").val("encdata");
        $("#referralLogId").val(data.LogID);
        $("#refromFhudCode").val(data.hfhudcode);
        $("#referringFacility").text(data.hfhudname);
        $("#reFromReas").val(data.referralReason);
        $("#referralReason").text($("#reFromReas option:selected").text());
        $("#reFromOtherReas").val(data.otherReasons);
        $("#reFromDateTime").val(setTimeLocale(data.referralDateTime));
        $("#referralDateTime").text(
          new Date($("#reFromDateTime").val()).toLocaleString()
        );
        var option = new Option(data.hfhudname, data.hfhudcode, true, true);
        $("#refrom_hfhudcode").append(option).trigger("change");
        $("#refrom_hfhudcode").trigger({
          theme: "coreui",
          type: "select2:select",
          params: {
            data: data,
          },
        });
        $("#reFromTrigger").val("");
      }
    },
  });
}
