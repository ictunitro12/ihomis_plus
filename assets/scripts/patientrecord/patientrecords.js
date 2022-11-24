function initPatientRecords(enccode, hpercode) {
  PatientData(hpercode);
  PatientDemographics(hpercode);
  CaseInformation(enccode);
  _tabDocOrd(enccode);
  _tabMedical(enccode, hpercode);
  VitalSigns(enccode);
  //crsWardList(enccode);
}

function _tabMedical(enccode, hpercode) {
  $('a[data-toggle="tab"]').on("click", function (e) {
    var tab = e.target.id;
    switch (tab) {
      case "home-tab":
        VitalSigns(enccode);
        break;
      case "hw-tab":
        bmiList(enccode);
        break;
      case "histo-tab":
        History(enccode);
        break;
      case "symptoms-tab":
        SignsSymptoms(enccode);
        break;
      case "phyexam-tab":
        Physical(enccode);
        break;
      case "system-tab":
        systemReview(enccode, hpercode);
        break;
      case "course-tab":
        crsWardList(enccode);
        break;
      case "diag-tab":
        Diagnosis(enccode);
        break;
      case "doctor-tab":
        Doctor(enccode);
        break;
      case "progressnotes-tab":
        Progressnotes(enccode);
        break;
      case "specialinstructions-tab":
        setSpecialInstrcutions(enccode);
        break;
      case "homemeds-tab":
        homeMedications(enccode);
        break;
      default:
        break;
    }
  });
}

function _tabDocOrd(enccode) {
  $('a[data-toggle="tab"]').on("click", function (e) {
    var tab = e.target.id;
    switch (tab) {
      case "exam-tab":
        orderExamination(enccode);
        break;
      case "prescri-tab":
        var form = $("#frmProc");
        orderPrescription(enccode);
        selDoctor(form);
        break;
      case "supplies-tab":
        var form = $("#frmProc");
        orderSupplies(enccode);
        selDoctor(form);
        break;
      case "diet-tab":
        var form = $("#frmDietOrder");
        selDoctor(form);
        docOrdDiet(enccode);
        break;
      case "disch-tab":
        orderDisch(enccode, hpercode);
        break;
      default:
        break;
    }
  });
}

/*
		function name :  Caseinformation
		param : str|enccode 
		description :fetch patient case information
	*/

function CaseInformation(enccode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var Obj = new Object();
  Obj.type = "POST";
  Obj.url = baseURL + "PatientRecords/caseInformation/" + enctr;
  Obj.data = "JSON";
  var row = Information(Obj);
  $("#casenum").text(row["casenum"]);
  $("#enctr").text(row["toecode"]);
  $("#date").text(row["date_entered"]);
  $("#time").text(row["time_entered"]);
  $("#doctor").text(row["doctor"]);
  $("#diagnosis").text(row["diagnosis"]);
  $("#room").text(row["room"]);
  $("#account").text(row["account"]);
  $("#diag").text(row["diagnosis"]);
  $("#rmaccikey").text(row["rmacci"]);

  $.get(baseURL+"Ref_Procedures/getSetupExam",function(data){
    var obj=$.parseJSON(data);
    if(obj['data']=="RMACC"){
      $("#rmaccikey").text(row["rmacci"]);
    }else if(obj['data']=="CLASS"){
      $("#rmaccikey").text(row["paytype"]);
    }else{
      $("#rmaccikey").text(''); 
    }

  });
}

function docOrdDiet(enccode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var data = new Object();
  data.id = "docOrdDiet";
  data.link = baseURL + "Dietary/dietDoctorOrder/" + enctr;
  data.type = "POST";
  data.coldef = [
    {
      targets: [0, 1,2,5,6,7,8,10,11],
      visible: false,
      orderable: false,
    },
  ];
  loadTable(data);
}

function docOrdpres(enccode) {
  var data = new Object();
  data.id = "docOrdpres";
  data.link = baseURL + "MedicalRecords/Prescription/" + enccode;
  data.type = "POST";
  data.coldef = [
    {
      targets: [11, 12, 13],
      visible: false,
    },
  ];
  loadTable(data);
}

function docOrdsupp(enccode) {
  var data = new Object();
  data.id = "docOrdsupp";
  data.link = baseURL + "MedicalRecords/Supplies/" + enccode;
  data.type = "POST";
  data.coldef = [
    {
      targets: [2, 3, 4],
      visible: false,
    },
  ];
  loadTable(data);
}

function caseInfo(enccode) {
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var Obj = new Object();
  Obj.type = "POST";
  Obj.url = baseURL + "PatientRecords/caseInformation/" + enctr;
  Obj.data = "JSON";
  var row = Information(Obj);
  return row;
}

function visitLog(hpercode) {
  var data = new Object();
  data.id = "visitLog";
  data.link = baseURL + "PatientRecord/visitList/" + hpercode;
  data.type = "POST";
  data.coldef = [
    {
      orderable: false,
      targets: [0, 1],
      searchable: false,
      visible: false,
    },
    {
      targets: [4],
      searchable: false,
      render: function (data, type, row) {
        switch (data) {
          case "ADM":
            return '<div class="text text-success"><i class="fa fa-bed"></i> ADMISSION</div>';
            break;
          case "ERADM":
            return '<div class="text text-danger"><i class="fa fa-ambulance"></i>EMERGENCY->ADMISSION</div>';
            break;
          case "ER":
            return '<div class="text text-danger"><i class="fa fa-ambulance"></i> EMERGENCY</div>';
            break;
          case "OPD":
            return '<div class="text text-primary"><i class="fa fa-stethoscope"></i> OUTPATIENT</div>';
            break;
          case "OPDADM":
            return '<div class="text text-primary"><i class="fa fa-stethoscope"></i> OUTPATIENT->ADMISSION</div>';
            break;
          default:
            return '<div class="text-default"></span>';
        }
      },
    },
  ];
  loadTable(data);
}

function showEPR(enccode, hpercode) {
  $("#EPRModal").modal("show");
  var enctr = encodeURIComponent(encodeURIComponent(atob(enccode)));
  var percode = encodeURIComponent(encodeURIComponent(atob(hpercode)));
  var x = (document.getElementById("EPR_pdf").src =
    baseURL + "PatientRecords/EPR/" + enctr + "/" + percode);
}

function setVerified(employeeid) {
  SelEmp();
  var relSelect = $('[name $="_emp"]');
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Personnel/setEmp/" + employeeid,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["name"], obj["employeeid"], true, true);
    relSelect.append(option).trigger("change");
    relSelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}
