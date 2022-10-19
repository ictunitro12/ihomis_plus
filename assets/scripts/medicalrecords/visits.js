function visitList(hpercode) {
  var data = new Object();
  data.id = "visittbl";
  data.link = baseURL + "MedicalRecords/visitHistory/" + hpercode;
  data.type = "POST";
  data.search = true;
  data.paging = true;
  data.destroy = true;
  data.info = true;
  data.rowsGroup = false;
  data.columns = [
    { data: "toecode" },
    { data: "admdate" },
    { data: "disdate" },
    { data: "admitting" },
    { data: "diagtext" },
    {
      data: "disposition",

      render: function (data, type, row) {
        switch (data) {
          case "DISCH":
            return "Discharge";
            break;
          case "TRANS":
            return "Transferred";
            break;
          case "DAMA":
            return "Discharge against medical advise";
            break;
          case "ABSC":
            return "Absconded";
            break;
          case "DIEDD":
            return "Died";
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      data: "cond",
      render: function (data, type, row) {
        switch (data) {
          case "RECOV":
            return "Recovered";
            break;
          case "IMPRO":
            return "Improved";
            break;
          case "UNIMP":
            return "Unimproved";
            break;
          case "DIEMI":
            return " Died Less than 48hours Autopsied";
            break;
          case "DIENA":
            return " Died Less than 48hours not Autopsied";
            break;
          case "DIEPO":
            return "Died Greater than 48hours Autopsied";
            break;
          case "DPONA":
            return "Died Greater than 48hours not Autopsied";
            break;
          default:
            return "N/A";
        }
      },
    },
    {
      data: "enccode",
      render: function (data, type, row) {
        if (row.disposition == "DIEDD") {
          return (
            "<div class='btn-group btn-sm float-right'>" +
            "<button type='button' class='btn btn-outline-success btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>" +
            "<span class='caret'></span>" +
            "<span class='sr-only'>Toggle Dropdown</span>" +
            "</button>" +
            "<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>" +
            "<a href='javascript:void(0);' class='dropdown-item'  data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' id='btnEPR'><i class='fa fa-file-pdf'></i>&nbsp E.P.R</a>" +
            "<a href='javascript:void(0);' class='dropdown-item'  data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' id='btnPatientRecord'><i class='fa fa-archive'></i>&nbsp Patient Record</a>" +
            "<a href='javascript:void(0);' class='dropdown-item'  id='btnEditEncountr' data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' data-toecode='" +
            row.toe +
            "' ><i class='fa fa-edit'></i>&nbsp Edit Encounter </a>" +
            "<a href='javascript:void(0);' class='dropdown-item'  id='btnEditDisp' data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' data-toecode='" +
            row.toe +
            "' ><i class='fa fa-sign-out'></i>&nbsp Result </a>" +
            "<a href='javascript:void(0);' class='dropdown-item'   name ='btnDeath' id='btnDeath'  data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' data-toecode='" +
            row.toe +
            "' ><i class='fa fa-cross'></i>&nbsp Death Certificate</a>" +
            "</div>" +
            "<button type='button'  id ='btnPatientProfile' data-enccode='" +
            row.enccode +
            "' data-toecode='" +
            row.toecode +
            "'  data-hpercode='" +
            row.hpercode +
            "' class='btn btn-outline-success  btn-sm ' ><i class='fa fa-user-circle-o fa-sm'></i></button>" +
            "</div>"
          );
        } else {
          return (
            "<div class='btn-group btn-sm float-right'>" +
            "<button type='button' class='btn btn-outline-success btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>" +
            "<span class='caret'></span>" +
            "<span class='sr-only'>Toggle Dropdown</span>" +
            "</button>" +
            "<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>" +
            "<a href='javascript:void(0);' class='dropdown-item'  data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' id='btnEPR'><i class='fa fa-file-pdf'></i>&nbsp E.P.R</a>" +
            "<a href='javascript:void(0);' class='dropdown-item'  data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' id='btnPatientRecord'><i class='fa fa-archive'></i>&nbsp Patient Record</a>" +
            "<a href='javascript:void(0);' class='dropdown-item'  id='btnEditEncountr' data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' data-toecode='" +
            row.toe +
            "' ><i class='fa fa-edit'></i>&nbsp Edit Encounter </a>" +
            "<a href='javascript:void(0);' class='dropdown-item'  id='btnEditDisp' data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' data-toecode='" +
            row.toe +
            "' ><i class='fa fa-sign-out'></i>&nbsp Result </a>" +
            "<!-- a href='javascript:void(0);' class='dropdown-item'  id='btnBackReferral' data-enccode='" +
            row.enccode +
            "'  data-hpercode='" +
            row.hpercode +
            "' data-toecode='" +
            row.toe +
            "' ><i class='fa fa-sign-out'></i>&nbsp Back Referral</a -->" +
            "</div>" +
            "<button type='button'  id ='btnPatientProfile' data-enccode='" +
            row.enccode +
            "' data-toecode='" +
            row.toecode +
            "'  data-hpercode='" +
            row.hpercode +
            "' class='btn btn-outline-success  btn-sm ' ><i class='fa fa-user-circle-o fa-sm'></i></button>" +
            "</div>"
          );
        }
      },
    },
  ];
  data.coldef = [
    {
      targets: "_all",
      className: "align-middle",
      ordering: false,
    },
  ];
  Datatable(data);
}

/*$("#visittbl").on("click", "#btnBackReferral", function () {
  var referralenccode = btoa($(this).data("enccode"));
  $("#referralEnccode").val(referralenccode);
  $("#modalBackReferralPDF").modal("show");
  var src = baseURL + "PatientRecords/BackReferralForm_pdf/" + referralenccode;
  $("#backReferralPDF").attr("src", src);
});*/

$("#visittbl").on("click", "#btnEPR", function () {
  var enccode = btoa($(this).data("enccode"));
  var hpercode = $(this).data("hpercode");
  showEPR(enccode, hpercode);
});

$("#visittbl").on("click", "#btnPatientRecord", function () {
  var enccode = btoa($(this).data("enccode"));
  var hpercode = btoa($(this).data("hpercode"));
  document.getElementById("btnPatientRecord").href =
    baseURL + "PatientRecords/Records/" + enccode + "/" + hpercode;
});

$("#visittbl").on("click", "#btnEditEncountr", function () {
  var enccode = $(this).data("enccode");
  var hpercode = $(this).data("hpercode");
  var toe = $(this).data("toecode");
  if (toe == "ADM") {
    $("#patientAdmitModal").modal("show");
    $("#admhpercode").val(hpercode);
    $("#admenccode").val(enccode);
    formAdmitDetails(hpercode, enccode);
  } else if (toe == "OPD" || toe == "OPDADM") {
    $("#patientOPDModal").modal("show");
    $("#opdhpercode").val(hpercode);
    $("#opdenccode").val(enccode);
    formOPDDetails(hpercode, enccode);
  } else if (toe == "ER" || toe == "ERADM") {
    $("#patientERModal").modal("show");
    $("#erhpercode").val(hpercode);
    $("#erenccode").val(enccode);
    formERDetails(hpercode, enccode);
  } else {
    toastr.error("Encounter code unspecified", "Data");
  }
});

$("#visittbl").on("click", "#btnEditDisp", function () {
  var enccode = $(this).data("enccode");
  var hpercode = $(this).data("hpercode");
  var toe = $(this).data("toecode");
  if (toe == "ADM") {
    resultAdm(hpercode, enccode);
    $("#patientResultadm").modal("show");
    $("#reshpercode").val(hpercode);
    $("#resenccode").val(enccode);
  } else if (toe == "OPD" || toe == "OPDADM") {
    toastr.warning("Not Applicable to Outpatient", "Alert!");
  } else if (toe == "ER" || toe == "ERADM") {
    $("#patientERModal").modal("show");
    $("#erhpercode").val(hpercode);
    $("#erenccode").val(enccode);
    formERDetails(hpercode, enccode);
  } else {
    toastr.error("Encounter code unspecified", "Data");
  }
});

$("#frmAdmit").on("submit", function (e) {
  $.ajax({
    method: "POST",
    url: baseURL + "MedicalRecords/editAdmitForm",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data) {
      $("#visittbl").DataTable().ajax.reload();
      $("#patientAdmitModal").modal("hide");
      toastr.success("Successfuly Updated! ", "Success");
    },
    error: function (data) {
      toastr.warning("Failed to update!", "Error");
    },
  });
  return false;
});

function formAdmitDetails(hpercode, enccode) {
  var enctr = URLencode(enccode);
  $.ajax({
    type: "POST",
    url: baseURL + "MedicalRecords/admitForm",
    dataType: "JSON",
    data: {
      hpercode: hpercode,
      enccode: enctr,
    },
    async: false,
    success: function (data) {
      var obj = data;
      var hpercode = obj["hpercode"];
      var enccode = obj["enccode"];
      var admdate = obj["admdate"];
      var disdate = obj["disdate"];
      var admtime = obj["admtime"];
      var diagcode = obj["admtxt"];
      var admmode = obj["admmode"];
      var admpreg =
        obj["admpreg"] == "" || obj["admpreg"] == "N" ? "N" : obj["admpreg"];
      var patinform = obj["patinform"];
      var patinfadd = obj["patinfadd"];
      var patinftel = obj["patinftel"];
      var relacode = obj["relacode"] == "" ? "" : obj["relacode"];
      var sopcode1 = obj["sopcode1"];
      var sopcode2 = obj["sopcode2"];
      var sopcode3 = obj["sopcode3"];
      $("#admDate").val(setTimeLocale(admdate));
      $("#admDisdate").val(setTimeLocale(disdate));
      $("#admDiag").val(diagcode);
      $("#admMode option[value=" + admmode + "]").prop("selected", true);
      if ($("#sex").text() == "Male") {
        $("input[name=admPreg]:checked", "#frmAdmit").val("N");
        $("input[name=admPreg]", "#frmAdmit").prop("disabled", true);
      } else if ($("#sex").text() == "Female") {
        $("input[name=admPreg]:checked", "#frmAdmit").val(admpreg);
        $("input[name=admPreg]", "#frmAdmit").prop("disabled", false);
      } else {
        toastr.warning("Please check sex!", "Alert");
      }
      $("#patinfname").val(patinform);
      $("#patinfadd").val(patinfadd);
      $("#patinftel").val(patinftel);
      $("#admsop1 option[value=" + sopcode1 + "]").prop("selected", true);
      $("#admsop2 option[value=" + sopcode2 + "]").prop("selected", true);
      $("#admsop3 option[value=" + sopcode3 + "]").prop("selected", true);
      $("#relacode option[value=" + relacode + "]").prop("selected", true);
    },
    error: function (data) {
      toastr.error(data.status);
    },
  });
}
$("#frmOpd").on("submit", function (e) {
  $.ajax({
    method: "POST",
    url: baseURL + "MedicalRecords/editOPDForm",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data) {
      $("#visittbl").DataTable().ajax.reload();
      $("#patientOPDModal").modal("hide");
      toastr.success("Successfuly Updated! ", "Success");
    },
    error: function (data) {
      toastr.warning("Failed to update!", "Error");
    },
  });
  return false;
});

function formOPDDetails(hpercode, enccode) {
  var enctr = URLencode(enccode);
  $.ajax({
    type: "POST",
    url: baseURL + "MedicalRecords/opdDetails",
    dataType: "JSON",
    data: {
      hpercode: hpercode,
      enccode: enctr,
    },
    async: false,
    success: function (data) {
      var obj = data;
      console.log(obj);
      var opdvisit = obj["opdtime"];
      var opddisdate = obj["opdtmedis"];
      var newold =
        obj["newold"] == "" || obj["newold"] == "N" ? "N" : obj["newold"];
      var tb = obj["itisind"];
      var sopcode1 =
        obj["sopcode1"] == "" || obj["sopcode1"] == "N" ? "N" : obj["sopcode1"];
      var sopcode2 =
        obj["sopcode2"] == "" || obj["sopcode2"] == "N" ? "N" : obj["sopcode2"];
      var sopcode3 =
        obj["sopcode3"] == "" || obj["sopcode3"] == "N" ? "N" : obj["sopcode3"];
      $("#opdvisit").val(setTimeLocale(opdvisit));
      $("#opddisdate").val(setTimeLocale(opddisdate));
      $("#hastb option[value=" + tb + "]").prop("selected", true);
      $("#newold option[value=" + newold + "]").prop("selected", true);
      $("#opdsopcode1 option[value=" + sopcode1 + "]").prop("selected", true);
      $("#opdsopcode2 option[value=" + sopcode2 + "]").prop("selected", true);
      $("#opdsopcode3 option[value=" + sopcode3 + "]").prop("selected", true);
    },
    error: function (response) {
      toastr.error("Failed load patient information!");
    },
  });
}
$("#frmER").on("submit", function (e) {
  $.ajax({
    method: "POST",
    url: baseURL + "MedicalRecords/editERForm",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data) {
      $("#visittbl").DataTable().ajax.reload();
      $("#patientERModal").modal("hide");
      toastr.success("Successfuly Updated! ", "Success");
    },
    error: function (data) {
      toastr.warning("Failed to update!", "Error");
    },
  });
  return false;
});
function formERDetails(hpercode, enccode) {
  var enctr = URLencode(enccode);
  var today = new Date();
  today.setUTCHours(0, 0, 0, 0);
  $.ajax({
    type: "POST",
    url: baseURL + "MedicalRecords/erDetails",
    dataType: "JSON",
    data: {
      hpercode: hpercode,
      enccode: enctr,
    },
    async: false,
    success: function (data) {
      var obj = data;
      var ervisit = obj["erdate"];
      var erdis =
        obj["erdtedis"] == "" ? today : setTimeLocale(obj["erdtedis"]);
      var ernotif = obj["ernotify"] == "" ? " " : obj["ernotify"];
      var brought = obj["erbrouby"] == "" ? " " : obj["erbrouby"];
      var ercase = obj["ercase"] == "" ? " " : obj["ercase"];
      var ernotes = obj["ernotes"] == "" ? " " : obj["ernotes"];
      var sopcode1 =
        obj["sopcode1"] == "" || obj["sopcode1"] == "N" ? "N" : obj["sopcode1"];
      var sopcode2 =
        obj["sopcode2"] == "" || obj["sopcode2"] == "N" ? "N" : obj["sopcode2"];
      var sopcode3 =
        obj["sopcode3"] == "" || obj["sopcode3"] == "N" ? "N" : obj["sopcode3"];
      $("#erdate").val(setTimeLocale(ervisit));
      $("#erdisdate").val(setTimeLocale(erdis));
      $("#ernotes").val(ernotes);
      $("#selNotif option[value=" + ernotif + "]").prop("selected", true);
      $("#selCondArrival option[value=" + brought + "]").prop("selected", true);
      $("#selCase option[value=" + ercase + "]").prop("selected", true);
      $("#ersopcode1 option[value=" + sopcode1 + "]").prop("selected", true);
      $("#ersopcode2 option[value=" + sopcode2 + "]").prop("selected", true);
      $("#ersopcode3 option[value=" + sopcode3 + "]").prop("selected", true);
    },
    error: function (response) {
      toastr.error("Failed load patient information!");
    },
  });
}

$("#frmResultadm").on("submit", function (e) {
  $.ajax({
    method: "POST",
    url: baseURL + "MedicalRecords/updateResultAdm",
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function (data) {
      $("#visittbl").DataTable().ajax.reload();
      $("#patientResultadm").modal("hide");
      toastr.success("Successfuly Updated! ", "Success");
    },
    error: function (data) {
      toastr.warning("Failed to update!", "Error");
    },
  });
  return false;
});
function resultAdm(hpercode, enccode) {
  $("input[name=dischCond]").prop("checked", false);
  var enctr = URLencode(enccode);
  var today = new Date();
  today.setUTCHours(0, 0, 0, 0);
  $.ajax({
    type: "POST",
    url: baseURL + "MedicalRecords/admResult",
    dataType: "JSON",
    data: {
      hpercode: hpercode,
      enccode: enctr,
    },
    async: false,
    success: function (data) {
      var obj = data;
      var dispcode = obj["dispcode"];
      var condcode = obj["condcode"] == "" ? "IMPRO" : obj["condcode"];
      var specins = obj["instruct"];
      ConditionRadio(dispcode);
      $("#specialins").val(specins);

      $("#dischDisp option[value=" + dispcode + "]").prop("selected", true);
      $("input[name=dischCond][value=" + condcode + "]").prop("checked", true);
    },
    error: function (response) {
      toastr.error("Failed load patient information!");
    },
  });
}

function ConditionRadio(Disp) {
  if (Disp == "TRANS") {
    $("#recov").removeAttr("disabled");
    $("#impro").removeAttr("disabled");
    $("#unimp").removeAttr("disabled");
    $("#diemi").prop("disabled", true);
    $("#diena").prop("disabled", true);
    $("#dpona").prop("disabled", true);
    $("#diepo").prop("disabled", true);
    $("input[name=dischCond]").prop("checked", false);
  } else if (Disp == "DIEDD") {
    $("#recov").prop("disabled", true);
    $("#impro").prop("disabled", true);
    $("#unimp").prop("disabled", true);
    $("#diemi").removeAttr("disabled");
    $("#diena").removeAttr("disabled");
    $("#dpona").removeAttr("disabled");
    $("#diepo").removeAttr("disabled");
    $("input[name=dischCond]").prop("checked", false);
  } else if (Disp == "DISCH") {
    $("#recov").removeAttr("disabled");
    $("#impro").removeAttr("disabled");
    $("#unimp").removeAttr("disabled");
    $("#diemi").prop("disabled", true);
    $("#diena").prop("disabled", true);
    $("#dpona").prop("disabled", true);
    $("#diepo").prop("disabled", true);
    $("input[name=dischCond]").prop("checked", false);
  } else if (Disp == "ABSC") {
    $("#recov").prop("disabled", true);
    $("#impro").prop("disabled", true);
    $("#unimp").prop("disabled", true);
    $("#diemi").prop("disabled", true);
    $("#diena").prop("disabled", true);
    $("#dpona").prop("disabled", true);
    $("#diepo").prop("disabled", true);
    $("input[name=dischCond]").prop("checked", false);
  } else if (Disp == "DAMA") {
    $("#recov").prop("disabled", true);
    $("#impro").prop("disabled", true);
    $("#unimp").prop("disabled", true);
    $("#diemi").prop("disabled", true);
    $("#diena").prop("disabled", true);
    $("#dpona").prop("disabled", true);
    $("#diepo").prop("disabled", true);
    $("input[name=dischCond]").prop("checked", false);
  } else {
    $("#recov").prop("disabled", true);
    $("#impro").prop("disabled", true);
    $("#unimp").prop("disabled", true);
    $("#diemi").prop("disabled", true);
    $("#diena").prop("disabled", true);
    $("#dpona").prop("disabled", true);
    $("#diepo").prop("disabled", true);
    $("input[name=dischCond]").prop("checked", false);
  }
}

$("#visittbl").on("click", "#btnDeath", function () {
  $("#deathCertModal").modal("show");
});

$("#uploadBackReferral").click(function () {
  const referralEnccode = $("#referralEnccode").val();
  $.ajax({
    method: "POST",
    url: baseURL + "Referral/sendBackReferral",
    data: { enccode: referralEnccode },
    dataType: "JSON",
    success: function (data) {
      toastr.success(data.message, "Success");
    },
    error: function (data) {
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});
