var Module = $("#module").val();

var table = $("#PatientTable");

function RegisteredPatients() {
  var data = new Object();
  data.id = "PatientTable";
  data.link = baseURL + "Patient/PatientList";
  data.type = "POST";
  data.coldef = [
    {
      targets: [2, 4],
      searchable: false,
      orderable: false,
      render: function (data) {
        switch (data) {
          case "M":
            return '<i class="fa fa-male"></i>&nbsp MALE';
            break;
          case "F":
            return '<i class="fa fa-female"></i>&nbsp FEMALE';
            break;
          case "A":
            return '<i class="fa fa-check text-success"></i><span class="text-success">Active</span>';
            break;
          case "I":
            return '<i class="fa fa-remove text-remove"></i><span class="text-danger">Inactive</span>';
            break;
          default:
            return "N/A";
        }
      },
    },
  ];
  loadTable(data);
}

table.on("click", ".Information", function () {
  $("#ModalPatientInfo").modal("show");
  var hpercode = atob($(this).data("hpercode"));
  var obj = PatientInfo(hpercode);
  var date = new Date(obj["patbdate"]);
  var patbdate =
    date.getMonth() + 1 + "-" + date.getDate() + "-" + date.getFullYear();
  var fullname = obj["patfirst"].concat(
    " ",
    obj["patmiddle"],
    " ",
    obj["patlast"]
  );
  $("#patname").text(fullname);
  $("#patsex").text(sex(obj["patsex"]));
  $("#patbdate").text(patbdate);
  $("#civilstat").text(civilstatus(obj["patcstat"]));
  loadImage(obj["hpercode"]);
});

table.on("click", "#btnInfo_View", function () {
  $("#ModalPatientInfo").modal("show");
  var hpercode = atob($(this).data("hpercode"));

  var obj = PatientInfo(hpercode);
  var date = new Date(obj["patbdate"]);
  var patbdate =
    date.getMonth() + 1 + "-" + date.getDate() + "-" + date.getFullYear();
  var fullname = obj["patfirst"].concat(
    " ",
    obj["patmiddle"],
    " ",
    obj["patlast"]
  );
  $("#patname").text(fullname);
  $("#patsex").text(sex(obj["patsex"]));
  $("#patbdate").text(patbdate);
  $("#civilstat").text(civilstatus(obj["patcstat"]));
  loadImage(hpercode);
});

table.on("click", "#btnDelete_Delete", function () {
  $("#ModalPatientDelete").modal("show");
  var hpercode = $(this).data("hpercode");
  var obj = PatientInfo(hpercode);
  var fullname = obj["patfirst"].concat(
    " ",
    obj["patmiddle"],
    " ",
    obj["patlast"]
  );
  $("#delpatname").text(fullname);
});

function PatientInfo(hpercode) {
  var percode = hpercode;
  var obj = "";
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientInformation/" + percode,
    data: "JSON",
    async: false,
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      toastr.error("Error:" + " " + data.status + " " + data.statusText);
    },
  });
  return obj;
}

function PatientAddr(hpercode) {
  var obj = "";
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientAddress/" + hpercode,
    data: "JSON",
    async: false,
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      toastr.error("Error:" + " " + data.status + " " + data.statusText);
    },
  });
  return obj;
}

function PatientData(hpercode) {
  var obj = PatientInfo(hpercode);
  var date = new Date(obj["patbdate"]);
  var patbdate =
    zeroFill(date.getMonth() + 1) +
    "/" +
    zeroFill(date.getDate()) +
    "/" +
    date.getFullYear();
  loadImage(obj["hpercode"]);
  $("#hpercode").text(obj["hpercode"]);
  $("#sex").text(sex(obj["patsex"]));
  $.get(baseURL + "Patient/agecalc/" + URLencode(patbdate), function (data) {
    $("#age").text(data.concat("yrs"));
    $("#patAge").val(data);
  });
  $("#dateofbirth").text(patbdate);
  $("#civilstatus").text(civilstatus(obj["patcstat"]));
  $("#placeofbirth").text(obj["patbplace"]);
  $("#patientname").text(
    obj["patfirst"] + " " + obj["patmiddle"] + " " + obj["patlast"]
  );
}

function PatientDemographics(hpercode) {
  var obj = PatientAddr(hpercode);
  if (obj) {
    $("#str").text(obj["patstr"]);
    $("#region").text(obj["regname"]);
    $("#province").text(obj["provname"]);
    $("#city").text(obj["ctyname"]);
    $("#brgy").text(obj["bgyname"]);
  } else {
    toastr.warning(
      '<i class="fa fa-exclamation fa-lg"></i> &nbsp <span>Warning: Patient address is empty!</span>'
    );
    $("#str").text("N/A");
    $("#region").text("N/A");
    $("#province").text("N/A");
    $("#city").text("N/A");
    $("#brgy").text("N/A");
  }
}

function PatientInformation(hpercode = "") {
  var percode = atob(hpercode);

  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientInformation/" + percode,
    data: "JSON",
    async: false,
    success: function (data) {
      var obj = $.parseJSON(data);

      var patkey = obj["hpatkey"];
      var hpercode = obj["hpercode"];
      var seniorno = obj["srcitizen"];
      var mssno = obj["mssno"];
      var alias = obj["patalias"];
      var patfirst = obj["patfirst"];
      var patmiddle = obj["patmiddle"];
      var patlast = obj["patlast"];
      var gender = sex(obj["patsex"]);
      var bdate = obj["patbdate"];
      var bplace = obj["patbplace"];
      var civistat = obj["patcstat"];
      var empstat = obj["patempstat"];
      var date = new Date(bdate);
      var patbdate =
        zeroFill(date.getMonth() + 1) +
        "/" +
        zeroFill(date.getDate() + 1) +
        "/" +
        date.getFullYear();
      document.getElementById("info_dob").valueAsDate = new Date(patbdate);
      var dob = $("#info_dob").val();
      AgeComputation(dob);
      var str = obj["patemernme"];
      var picture = obj["picname"];
      $("#info_hpatkey").val(patkey);
      $("#info_hpercode").val(hpercode);
      $("#info_seniorno").val(seniorno);
      $("#info_mssno").val(mssno);
      $("#info_patalias").val(alias);
      $("#info_fname").val(patfirst);
      $("#info_mname").val(patmiddle);
      $("#info_lname").val(patlast);
      $("#info_fullname").val(
        $("#info_lname").val() +
          "," +
          $("#info_fname").val() +
          " " +
          $("#info_mname").val() +
          " " +
          $("#info_suffix").val()
      );
      $("#selEmp option[value='" + empstat + "']").attr("selected", "selected");
      $("#info_nat option[value='" + obj["natcode"] + "']").attr(
        "selected",
        "selected"
      );
      $("#info_suffix option[value='" + obj["patsuffix"] + "']").attr(
        "selected",
        "selected"
      );
      $("#info_sex option[value='" + obj["patsex"] + "']").attr(
        "selected",
        "selected"
      );
      $("#info_bplace").val(bplace);
      setReligion(obj["relcode"]);
      if (civistat === null) {
        $("#info_cs option[value='" + "N" + "']").attr("selected", "selected");
        CivilStatus(civistat);
      } else {
        $("#info_cs option[value='" + civistat + "']").attr(
          "selected",
          "selected"
        );
        CivilStatus(civistat);
      }

      //add nicette
      $("#contact_name").val(obj["patemernme"]);
      $("#contact_address").val(obj["patemaddr"]);
      $("#contact_mobile").val(obj["pattelno"]);
      $("#contact_relation option[value='" + obj["relemacode"] + "']").attr(
        "selected",
        "selected"
      );
      loadImage(obj["hpercode"]);

      $("#father_lname").val(obj["fatlast"]);
      $("#father_fname").val(obj["fatfirst"]);
      $("#father_mname").val(obj["fatmid"]);
      $("#father_address").val(obj["fataddr"]);
      $("#father_contact").val(obj["fattel"]);

      $("#faemp_name").val(obj["fatempname"]);
      $("#femp_address").val(obj["fatempaddr"]);
      $("#fa_email").val(obj["fatempeml"]);
      $("#faemp_contact").val(obj["fatemptel"]);
      $("#father_deceased option[value='" + obj["f_dec"] + "']").attr(
        "selected",
        "selected"
      ); ////father deceased
      $("#father_suffix option[value='" + obj["fatsuffix"] + "']").attr(
        "selected",
        "selected"
      ); ////father suffix

      $("#mother_lname").val(obj["motlast"]);
      $("#mother_fname").val(obj["motfirst"]);
      $("#mother_mname").val(obj["motmid"]);
      $("#mother_address").val(obj["motaddr"]);
      $("#mother_contact").val(obj["mottel"]);
      $("#mother_deceased option[value='" + obj["fm_dec"] + "']").attr(
        "selected",
        "selected"
      ); ////mother deceased

      $("#moemp_name").val(obj["motempname"]);
      $("#moemp_address").val(obj["motempaddr"]);
      $("#moaddress_email").val(obj["motempeml"]);
      $("#moemp_contact").val(obj["motemptel"]);

      $("#spouse_lname").val(obj["splast"]);
      $("#spouse_mname").val(obj["spmid"]);
      $("#spouse_fname").val(obj["spfirst"]);
      $("#spouse_address").val(obj["spaddr"]);
      $("#spouse_contact").val(obj["hspocode"]);
      $("#spouseemp_name").val(obj["spempname"]);
      $("#spouseemp_address").val(obj["spempaddr"]);
      $("#spouseemp_email").val(obj["spempeml"]);
      $("#spouseemp_contact").val(obj["spemptel"]);
      $("#spouse_deceased option[value='" + obj["s_dec"] + "']").attr(
        "selected",
        "selected"
      ); ////spouse deceased
      setIndigenous(obj["ipgroup"]);
    },
    error: function (response) {
      alert("Error: Fetching Patient Information!");
    },
  });
}

function Patient_Address(hpercode) {
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientAddress/" + hpercode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      var obj = $.parseJSON(data);
      $("#info_street").val(obj["patstr"]);
      var str = obj["provcode"].substring(0, 2);
      setRegion(str);
      setProv(obj["provcode"]);
      $("#selProv").removeAttr("disabled");
      setCity(obj["ctycode"]);
      setBrgy(obj["brg"]);
    },
    error: function (data, status) {
      alert("Failed to Fetch Patient Address!");
    },
  });
}
//SIR ALVIN
function PatientAddress(hpercode) {
  var percode = atob(hpercode);
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientAddress/" + percode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      var obj = $.parseJSON(data);

      if (obj == null) {
        toastr.warning(
          '<i class="fa fa-exclamation fa-lg"></i> &nbsp <span>Warning: Permanent Patient address is empty!</span>'
        );
      } else {
        $("#info_street").val(obj["patstr"]);

        var str = obj["provcode"].substring(0, 2);
        setCity(obj["ctycode"]);
        setProv(obj["provcode"]);
        zip(str, obj["ctycode"]);
        setRegion(str);
        setBrgy(obj["brg"]);
      }
    },
    error: function (data, status) {
      alert("Failed to Fetch Patient Address!");
    },
  });
}

function PatientAddress2(hpercode) {
  var percode = atob(hpercode);
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientAddress2/" + percode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      var obj = $.parseJSON(data);

      if (obj == null) {
        toastr.warning(
          '<i class="fa fa-exclamation fa-lg"></i> &nbsp <span>Warning: Permanent patient address is empty!</span>'
        );
      } else {
        $("#info_streetp").val(obj["patstr"]);

        var str = obj["provcode"].substring(0, 2);
        setCity2(obj["ctycode"]);
        setProv2(obj["provcode"]);
        zip2(str, obj["ctycode"]);
        setRegion2(str);
        setBrgy2(obj["brg"]);
      }
    },
    error: function (data, status) {
      alert("Failed to Fetch Patient Address!");
    },
  });
}

function PatientInformationSummary(hpercode) {
  $.ajax({
    type: "POST",
    url: baseURL + "PatientInformation/" + hpercode,
    data: "JSON",
    success: function (data, status) {
      var obj = $.parseJSON(data);
      var date = new Date(obj["patbdate"]);
      var fullname = obj["patfirst"].concat(
        " ",
        obj["patmiddle"],
        " ",
        obj["patlast"]
      );
      $("#hpercode").text(obj["hpercode"]);
      $("#patname").text(fullname);
      var dob =
        zeroFill(date.getMonth() + 1) +
        "-" +
        zeroFill(date.getDate()) +
        "-" +
        date.getFullYear();
      var ages = AgeComputation(dob);
    },
    error: function (data, status) {
      alert("Failed to Information Summary");
    },
  });
}

function PatSearchList(data) {
  var table = $("#TblPatSearchList").DataTable({
    data: data,
    aLengthMenu: [
      [20, 50, 75, -1],
      [20, 50, 75, "All"],
    ],
    destroy: true,
    info: false,
    select: {
      select: true,
      style: "single",
      className: "bg-success text-white selected",
    },
    columns: [
      { data: "hpercode" },
      { data: "fullname" },
      { data: "dob" },
      {
        data: "patsex",
        render: function (data) {
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
    ],
  });
}

$("#TblPatSearchList").on("click", "tbody>tr", function () {
  $(this).toggleClass("bg-success text-white selected");
  var data = $("#TblPatSearchList").DataTable().row(".selected").data();

  var hpercode = btoa(data["hpercode"]);
  switch (Module) {
    case "admission":
    case "outpatient":
    case "emergency":
    case "triage":
      checkEnctr(hpercode);
      break;
    case "medicalrecords":
      $.session.set("hpercode", data["hpercode"]);
      initPatientRecord(data["hpercode"]);
      $("#PatSearchList").modal("hide");
      break;
    default:
      checkHistory(hpercode);
  }
});

$("#frmPatSearch").submit("click", function () {
  $.ajax({
    url: baseURL + "Patient/PatientAdvanceSearch",
    type: "POST",
    data: new FormData(this),
    dataType: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data, response) {
      $("#PatSearchList").modal("show");
      PatSearchList(data);
      $("#PatSearch").modal("hide");
    },
    error: function (response) {
      toastr.error("Error : Module not specified", "Error");
    },
  });
  return false;
});

function checkHistory(hpercode) {
  var percode = atob(hpercode);
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/PatientHistory/" + percode,
    dataType: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data) {
      $("#PatSearchList").modal("hide");
      visitLogList(data);
    },
    error: function (data) {
      toastr.error("Error fetching patient history!", "Error");
    },
  });
}

function visitLogList(data) {
  var table = $("#visitLogList").DataTable({
    data: data,
    dataType: "JSON",
    destroy: true,
    select: {
      select: true,
      style: "single",
      className: "bg-success text-white selected",
    },
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    columns: [
      { data: "admdate" },
      { data: "admtime" },
      { data: "disdate" },
      { data: "distime" },
      { data: "toecode" },
    ],
  });
  $("#PatHistoryList").modal("show");
}

$("#visitLogList").on("click", "tbody>tr", function () {
  $(this).toggleClass("bg-success text-white selected");
  var rowData = $("#visitLogList").DataTable().row(".selected").data();
  switch (Module) {
    case "fwri":
      checkFwri(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "injury":
      checkInjury(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "chronic":
      checkChronic(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "stroke":
      checkStroke(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "cancer":
      checkCancer(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "coronary":
      checkCad(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "blind":
      checkBlind(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "diabetes":
      checkDiabetes(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "vawc":
      checkVawc(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "billing":
      $.session.set("hpercode", rowData["hpercode"]);
      $.session.set("enccode", rowData["enccode"]);
      initBilling(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "socialservice":
      $.session.set("hpercode", rowData["hpercode"]);
      $.session.set("enccode", rowData["enccode"]);
      PatientData(rowData["hpercode"]);
      initSocialService(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "MSS":
      $.session.set("hpercode", rowData["hpercode"]);
      $.session.set("enccode", rowData["enccode"]);
      PatientData(rowData["hpercode"]);
      initMSS(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "cashier":
      $.session.set("Cashierhpercode", rowData["hpercode"]);
      $.session.set("Cashierenccode", rowData["enccode"]);
      initCashier(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "eclaims":
      PatientData(rowData["hpercode"]);
      CaseInformation(rowData["enccode"]);
      initElaims(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
    case "records":
      $("#PatHistoryList").modal("hide");
      break;
    case "medicalrecords":
      $.session.set("hpercode", rowData["hpercode"]);
      $.session.set("enccode", rowData["enccode"]);
      initNewBorn(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "chronic":
      $.session.set("Chronichpercode", rowData["hpercode"]);
      $.session.set("Chronicenccode", rowData["enccode"]);
      initChronic(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "stroke":
      $.session.set("Strokehpercode", rowData["hpercode"]);
      $.session.set("Strokeenccode", rowData["enccode"]);
      initStroke(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "diabetes":
      $.session.set("Diabeteshpercode", rowData["hpercode"]);
      $.session.set("Diabetesenccode", rowData["enccode"]);
      initDiabetes(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;

    case "covid19":
      checkCovid19(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "issueDrug":
      $.session.set("hpercode", rowData["hpercode"]);
      $.session.set("enccode", rowData["enccode"]);
      initPatientTransaction(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
    case "issueItem":
      $.session.set("hpercode", rowData["hpercode"]);
      $.session.set("enccode", rowData["enccode"]);
      initPatientTransaction(rowData["enccode"], rowData["hpercode"]);
      $("#PatHistoryList").modal("hide");
      break;
      
      case "ili":
      $.session.set("hpercode",rowData['hpercode']);
      $.session.set("enccode",rowData['enccode']);
      initIli(rowData['enccode'],rowData['hpercode']);
      $('#PatHistoryList').modal('hide');
      break;
    case "sari":
       $.session.set("hpercode",rowData['hpercode']);
       $.session.set("enccode",rowData['enccode']);
       initSari(rowData['enccode'],rowData['hpercode']);
       $('#PatHistoryList').modal('hide');
       break;
    case "cholera":
       $.session.set("hpercode",rowData['hpercode']);
       $.session.set("enccode",rowData['enccode']);
       initCholera(rowData['enccode'],rowData['hpercode']);
       $('#PatHistoryList').modal('hide');
       break;
    case "chikungunya":
     $.session.set("hpercode",rowData['hpercode']);
     $.session.set("enccode",rowData['enccode']);
     initChikungunya(rowData['enccode'],rowData['hpercode']);
     $('#PatHistoryList').modal('hide');
     break;
    case "neonatal":
     $.session.set("hpercode",rowData['hpercode']);
     $.session.set("enccode",rowData['enccode']);
     initNeonatal(rowData['enccode'],rowData['hpercode']);
     $('#PatHistoryList').modal('hide');
     break;
    case "nonneonatal":
     $.session.set("hpercode",rowData['hpercode']);
     $.session.set("enccode",rowData['enccode']);
     initNonneonatal(rowData['enccode'],rowData['hpercode']);
     $('#PatHistoryList').modal('hide');
     break;
  }
});

function civilstatus(param) {
  switch (param) {
    case "C":
      return "Child";
      break;
    case "S":
      return "Single";
      break;
    case "M":
      return "Married";
      break;
    case "D":
      return "Divorced";
      break;
    case "X":
      return "Separated";
      break;
    case "W":
      return "Widower/Widow";
      break;
    default:
      return "N/A";
  }
}

function sex(param) {
  var sex;
  if (param === "M") {
    sex = "Male";
    return sex;
  } else if (param === "F") {
    sex = "Female";
    return sex;
  } else {
    sex = "N/A";
    return sex;
  }
}

function CivilStatus(param) {
  if (param === "M" || param === "D" || param === "X" || param === "W") {
    $("#spouse_lname").removeAttr("disabled");
    $("#spouse_fname").removeAttr("disabled");
    $("#spouse_mname").removeAttr("disabled");
    $("#spouse_address").removeAttr("disabled");
    $("#spouse_contact").removeAttr("disabled");
    $("#spouse_deceased").removeAttr("disabled");
  } else if (param === "S" || param === "N") {
    //march 9, 2022 modified nco
    $("#spouse_lname").val("");
    $("#spouse_fname").val("");
    $("#spouse_mname").val("");
    $("#spouse_address").val("");
    $("#spouse_contact").val("");
    $("#spouse_deceased").val("");

    $("#spouse_lname").prop("disabled", true);
    $("#spouse_fname").prop("disabled", true);
    $("#spouse_mname").prop("disabled", true);
    $("#spouse_address").prop("disabled", true);
    $("#spouse_contact").prop("disabled", true);
    $("#spouse_deceased").prop("disabled", true);
  }
}

function setReligion(relId) {
  SelReligion();
  $.ajax({
    type: "POST",
    url: baseURL + "Religion/setReligion/" + relId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["regname"], obj["regcode"], true, true);
    relSelect.append(option).trigger("change");
    relSelect.trigger({
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function AgeComputation(bdate) {
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/AgeComp/" + bdate,
    data: "json",
    success: function (data, status) {
      var obj = $.parseJSON(data);
      $("#info_month").val(obj["month"]);
      $("#info_day").val(obj["day"]);
      $("#info_year").val(obj["year"]);
      if (obj["year"] >= 60) {
        $("#info_seniorno").prop("disabled", false);
      } else {
        $("#info_seniorno").prop("disabled", true);
      }
    },
    error: function (data, status) {
      return status;
    },
  });
}

function _age(bdate) {
  var patbdate = URLencode(bdate);
  $.get(baseURL + "Patient/agecalc/" + patbdate, function (data) {
    return data;
  });
}

function checkEnctr(hpercode) {
  $.ajax({
    type: "POST",
    //url: "../Admission/checkAdmit/"+hpercode,
    url: "../Admission/checkEncounter/" + hpercode,
    data: "JSON",
    dataType: "JSON",
    success: function (data) {
      if (data.toecode == "ADM" && data.disdate == null) {
        toastr.warning(
          'Patient is currently admitted!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>',
          "Warning"
        );
      } else if (data.toecode == "ER" && data.disdate == null) {
        toastr.warning(
          'Patient is currently in the Emergency Room Department!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>',
          "Warning"
        );
      } else {
        initFormEdit(hpercode);
        $("#hpercode").val(hpercode);
        $("#PatSearchList").modal("hide");
      }
    },
    error: function (data) {
      alert("Please Try Again!");
    },
  });
}

$("#btnOccup").on("click", function () {
  var formIden = $("#formIden").val();

  if (formIden == "insert") {
    $("#ModalOccup").modal({ backdrop: "static" }).draggable({});
  } else if (formIden == "update") {
    var table = document
      .getElementById("occupList")
      .getElementsByTagName("tbody")[0];
    table.innerHTML = "";
    var arrayChildren = $("#infooccup").children();
    if (arrayChildren.length > 0) {
      for (let i = 0; i < arrayChildren.length; i++) {
        var name = arrayChildren[i].name;
        if (name.includes("codeno")) {
          var codeno = arrayChildren[i].value;
          var occup = $('input[name="occups[' + codeno + '][occup]"]').val();
          var employer = $(
            'input[name="occups[' + codeno + '][employer]"]'
          ).val();
          var email = $('input[name="occups[' + codeno + '][email]"]').val();
          var employertelno = $(
            'input[name="occups[' + codeno + '][employertelno]"]'
          ).val();
          var branch = $('input[name="occups[' + codeno + '][branch]"]').val();
          var employeraddr = $(
            'input[name="occups[' + codeno + '][employeraddr]"]'
          ).val();

          var newRows = table.insertRow(table.length);
          cell1 = newRows.insertCell(0);
          cell1.innerHTML = codeno;
          cell2 = newRows.insertCell(1);
          cell2.innerHTML = occup;
          cell3 = newRows.insertCell(2);
          cell3.innerHTML = employer;
          cell4 = newRows.insertCell(3);
          cell4.innerHTML = email;
          cell5 = newRows.insertCell(4);
          cell5.innerHTML = employertelno;
          cell6 = newRows.insertCell(5);
          cell6.innerHTML = branch;
          cell7 = newRows.insertCell(6);
          cell7.innerHTML = employeraddr;
          cell8 = newRows.insertCell(7);
          cell8.innerHTML = `
					<a  class="btn btn-primary" style="color:white;" onClick="EditOccup(this, ${codeno})" ><i class="fa fa-edit"></i></a>
					<a  class="btn btn-danger" style="color:white;" onClick="DeleteOccup(this, ${codeno})" ><i class="fa fa-trash"></i></a>
					`;
        }
      }
    }
    $("#ModalOccup").modal("show");
  }
});

$("#btnTelno").on("click", function () {
  var formIden = $("#formIden").val();

  if (formIden == "insert") {
    $("#ModalTelep").modal({ backdrop: "static" }).draggable({});
  } else if (formIden == "update") {
    var table = document
      .getElementById("telepList")
      .getElementsByTagName("tbody")[0];
    table.innerHTML = "";
    var arrayChildren = $("#info").children();
    if (arrayChildren.length > 0) {
      for (let i = 0; i < arrayChildren.length; i++) {
        var name = arrayChildren[i].name;
        if (name.includes("seqno")) {
          var seqno = arrayChildren[i].value;
          var telno = $('input[name="contacts[' + seqno + '][telno]"]').val();
          var contacttype = $(
            'input[name="contacts[' + seqno + '][contacttype]"]'
          ).val();

          var newRows = table.insertRow(table.length);
          cell1 = newRows.insertCell(0);
          cell1.innerHTML = seqno;
          cell2 = newRows.insertCell(1);
          cell2.innerHTML = telno;
          cell3 = newRows.insertCell(2);
          cell3.innerHTML = contacttype;
          cell4 = newRows.insertCell(3);
          cell4.innerHTML = `
					<a  class="btn btn-primary" style="color:white;" onClick="onEdit(this, ${seqno})" ><i class="fa fa-edit"></i></a>
					<a  class="btn btn-danger" style="color:white;" onClick="onDelete(this, ${seqno})" ><i class="fa fa-trash"></i></a>
					`;
        }
      }
    }
    $("#ModalTelep").modal("show");
  }
});

function arrayColumn(arr, ntseqno) {
  return arr[ntseqno];
}

function ContactData(obj) {
  let arr = obj;

  for (let i = 0; i < arr.length; i++) {
    var seqno = arrayColumn(arr[i], "ntseqno");
    var telno = arrayColumn(arr[i], "pattel");
    var teltype = arrayColumn(arr[i], "patteltype");

    var containers = document.getElementById("info");

    var inputCode = document.createElement("input");
    inputCode.className = "data-" + seqno;
    inputCode.type = "hidden";
    inputCode.name = "contacts[" + seqno + "][seqno]";
    inputCode.value = seqno;
    containers.appendChild(inputCode);

    var inputTelephone = document.createElement("input");
    inputTelephone.className = "data-" + seqno;
    inputTelephone.type = "hidden";
    inputTelephone.name = "contacts[" + seqno + "][telno]";
    inputTelephone.value = telno;
    containers.appendChild(inputTelephone);

    var inputTeltype = document.createElement("input");
    inputTeltype.className = "data-" + seqno;
    inputTeltype.type = "hidden";
    inputTeltype.name = "contacts[" + seqno + "][contacttype]";
    inputTeltype.value = teltype;
    containers.appendChild(inputTeltype);
  }
  return arr;
}
//////// occupation

function arrayColumnOccupation(arroccup, hpohposeqno) {
  return arroccup[hpohposeqno];
}

function OccupationData(obj) {
  let arroccup = obj;

  for (let i = 0; i < arroccup.length; i++) {
    var codeno = arrayColumnOccupation(arroccup[i], "hposeqno");
    var employer = arrayColumnOccupation(arroccup[i], "patemplr");
    var employeraddr = arrayColumnOccupation(arroccup[i], "patemaddr");
    var email = arrayColumnOccupation(arroccup[i], "patememl");
    var employertelno = arrayColumnOccupation(arroccup[i], "patemteln");
    var occup = arrayColumnOccupation(arroccup[i], "patpostn");
    var branch = arrayColumnOccupation(arroccup[i], "patbrch");

    var containers = document.getElementById("infooccup");

    var inputCodes = document.createElement("input");
    inputCodes.className = "data-" + codeno;
    inputCodes.type = "hidden";
    inputCodes.name = "occups[" + codeno + "][codeno]";
    inputCodes.value = codeno;
    containers.appendChild(inputCodes);

    var inputOccup = document.createElement("input");
    inputOccup.className = "data-" + codeno;
    inputOccup.type = "hidden";
    inputOccup.name = "occups[" + codeno + "][occup]";
    inputOccup.value = occup;
    containers.appendChild(inputOccup);

    var inputEmployer = document.createElement("input");
    inputEmployer.className = "data-" + codeno;
    inputEmployer.type = "hidden";
    inputEmployer.name = "occups[" + codeno + "][employer]";
    inputEmployer.value = employer;
    containers.appendChild(inputEmployer);

    var inputEmail = document.createElement("input");
    inputEmail.className = "data-" + codeno;
    inputEmail.type = "hidden";
    inputEmail.name = "occups[" + codeno + "][email]";
    inputEmail.value = email;
    containers.appendChild(inputEmail);

    var inputEmployertelno = document.createElement("input");
    inputEmployertelno.className = "data-" + codeno;
    inputEmployertelno.type = "hidden";
    inputEmployertelno.name = "occups[" + codeno + "][employertelno]";
    inputEmployertelno.value = employertelno;
    containers.appendChild(inputEmployertelno);

    var inputBranch = document.createElement("input");
    inputBranch.className = "data-" + codeno;
    inputBranch.type = "hidden";
    inputBranch.name = "occups[" + codeno + "][branch]";
    inputBranch.value = branch;
    containers.appendChild(inputBranch);

    var inputEmployeraddr = document.createElement("input");
    inputEmployeraddr.className = "data-" + codeno;
    inputEmployeraddr.type = "hidden";
    inputEmployeraddr.name = "occups[" + codeno + "][employeraddr]";
    inputEmployeraddr.value = employeraddr;
    containers.appendChild(inputEmployeraddr);
  }
  return arroccup;
}

function PatientContact(hpercode) {
  var percode = atob(hpercode);

  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientContact/" + percode,
    data: "JSON",
    async: false,
    success: function (data) {
      var obj = $.parseJSON(data);

      if (obj !== null) {
        $("#info_telno").val(obj["pattel"]);
        $("#info_contactdate").val(obj["ptdteas"]);
        $("#info_contacttype").val(obj["patteltype"]);

        ContactData(obj);
      }
    },
    error: function (response) {
      alert("Error: Fetching Patient Information!");
    },
  });
}

function PatientOccupation(hpercode) {
  var percode = atob(hpercode);

  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientOccupation/" + percode,
    data: "JSON",
    async: false,
    success: function (data) {
      var obj = $.parseJSON(data);
      $("#info_occu").val(obj["patpostn"]);
      OccupationData(obj);
    },
    error: function (response) {
      alert("Error: Fetching Patient Information!");
    },
  });
}

function patTelep(hpercode) {
  $("#ModalTelep").modal("show");
  var percode = atob(hpercode);
  var contact_tbl = $("#telepList").DataTable({
    ajax: baseURL + "Patient/PatientContact/" + percode,
    aLengthMenu: [
      [15, 20, 50, 75, -1],
      [15, 20, 50, 75, "All"],
    ],
    processing: true,
    serverside: true,
    oLanguage: {
      sProcessing:
        '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
    },
    destroy: true,
    columns: [{ data: "hpercode" }, { data: "pattel" }, { data: "patteltype" }],

    columnDefs: [
      {
        targets: [0],
        visible: false,
      },
    ],
  });
}

$("#telepList").on("click", ".ModalDeleteTelep", function () {
  var data = $(this).data();
  var ntseqno = data["ntseqno"];

  $("#DeleteTelep").modal("show");
  $("#formIdentification").val("delete");
  $("#deletecode").val(ntseqno);
});

$("#telepList").on("click", ".ModalEditTelep", function () {
  var data = $(this).data();
  var ntseqno = data["ntseqno"];
  var pattel = data["pattel"];
  var patteltype = data["patteltype"];

  $("#ModalAddTelep").modal("show");
  $("#formIden").val("update");
  $("#seqno").val(ntseqno);
  $("#telno").val(pattel);
  $("#contacttype").val(patteltype);
});

function Occupation(hpercode) {
  var percode = atob(hpercode);

  $.ajax({
    type: "POST",
    url: baseURL + "Patient/Occupation/" + percode,
    data: "JSON",
    async: false,
    success: function (data) {
      var obj = $.parseJSON(data);
      if (obj != null) {
        $("#info_occu").val(obj["patpostn"]);
      }
    },
    error: function (response) {
      alert("Error: Fetching Patient Information!");
    },
  });
}

function Contact(hpercode) {
  var percode = atob(hpercode);

  $.ajax({
    type: "POST",
    url: baseURL + "Patient/Contact/" + percode,
    data: "JSON",
    async: false,
    success: function (data) {
      var obj = $.parseJSON(data);
      if (obj != null) {
        $("#info_telno").val(obj["pattel"]);
      }
    },
    error: function (response) {
      alert("Error: Fetching Patient Information!");
    },
  });
}

$("#closeSearch").on("click", function () {
  history.back();
});

function PatientOldnumber(hpercode) {
  var percode = atob(hpercode);
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientOldnumber/" + percode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      var obj = $.parseJSON(data);

      if (obj == null) {
        $("#info_oldhpercode").val("");
      } else {
        $("#info_oldhpercode").val(obj["hpatold"]);
      }
    },
    error: function (data, status) {
      alert("Failed to fetch old hospital number!");
    },
  });
}
