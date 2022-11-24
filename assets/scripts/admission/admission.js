//Wizard
function AdmissionWizard(param = null) {
  var formType = $("#saveIdenAdm").val();
  _initWizard();
  _eventWizard(formType);
  _validateWizard();
}

function _initWizard() {
  var btnFinish = $(
    '<button type="button"  disabled name ="btnDone" id="btnDone"></button>'
  )
    .text("Done")
    .addClass("btn btn-info btn-ladda")
    .on("click", function () {
      PatientSummary();
    });

  var btnCancel = $("<button></button>")
    .text("Reset")
    .addClass("btn btn-danger btn-ladda")
    .on("click", function () {
      //$('#smartwizard').smartWizard("reset");
      location.reload();
    });

  $("#smartwizard").smartWizard({
    selected: 0,
    theme: "circles",
    transitionEffect: "fade",
    showStepURLhash: false,
    transitionSpeed: "1500",
    toolbarSettings: {
      toolbarPosition: "top",
      toolbarExtraButtons: [btnFinish, btnCancel],
    },
  });
}

function _eventWizard(type) {
  $("#smartwizard").on(
    "showStep",
    function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
      if (stepPosition === "first") {
        $("#btnDone").prop("disabled", true);
        $("#prev-btn").addClass("disabled");
        $("#prev-btn").addClass("disabled");
      } else if (stepPosition === "final") {
        $("#next-btn").addClass("disabled");
        $("#btnDone").prop("disabled", false);
      } else {
        $("#prev-btn").removeClass("disabled");
        $("#next-btn").removeClass("disabled");
        $("#btnDone").prop("disabled", true);
      }
      var sex = $("#info_sex").val();

      switch (stepNumber) {
        case 1:
          if (type == "update") {
            SelTypeofService($("#form-step-2"));
            $.get(
              baseURL +
                "Admission/admissionLog/" +
                URLencode($.session.get("enccode")),
              function (data) {
                var admlog = $.parseJSON(data);
                $("#vacant_tbl").off();
                $("#enccode").val(admlog["enccode"]);
                $("#casenum").val(admlog["casenum"]);
                $("#foradmcode").val(admlog["foradmcode"]);
                $("#dateaccom").val(setTimeLocale(admlog["admdate"]));

                if (admlog["patage"] > 0) {
                  $("#patage").val(parseInt(admlog["patage"]));
                } else {
                  $("#patage").val("");
                }

                if (admlog["patagemo"] > 0) {
                  $("#patagemo").val(parseInt(admlog["patagemo"]));
                } else {
                  $("#patagemo").val("");
                }

                if (admlog["patagedy"] > 0) {
                  $("#patagedy").val(parseInt(admlog["patagedy"]));
                } else {
                  $("#patagedy").val("");
                }

                if (
                  admlog["patage"] == 0 &&
                  admlog["patagemo"] == 0 &&
                  admlog["patagedy"] == 0
                ) {
                  $("#patagehr").prop("readonly", false);
                } else {
                  $("#patagehr").val(patagehr);
                  $("#patagehr").prop("readonly", true);
                }

                var patagehr = parseInt(admlog["patagehr"]);
                if (patagehr > 0) {
                  $("#patagehr").val(patagehr);
                }

                setTos(admlog["tscode"]);
                var insure = admlog["admphic"] === "" ? "" : admlog["admphic"];
                $("#typaccom option[value='" + admlog["tacode"] + "']").prop(
                  "selected",
                  true
                );
                $("#modaccom option[value='" + admlog["admmode"] + "']").prop(
                  "selected",
                  true
                );
                $('#insurance option[value="' + insure + '"]').prop(
                  "selected",
                  true
                );

                const referralFromData = admlog["referralfrom"];
                if (referralFromData) {
                  $("#reFromTrigger").val("encdata");
                  $("#referralLogId").val(referralFromData.rfcontrol);
                  $("#refromFhudCode").val(referralFromData.hfhudcode);
                  $("#referringFacility").text(referralFromData.hfhudname);
                  const option = new Option(
                    referralFromData.hfhudname,
                    referralFromData.hfhudcode,
                    true,
                    true
                  );
                  $("#refrom_hfhudcode").append(option).trigger("change");
                  $("#refrom_hfhudcode").trigger({
                    theme: "coreui",
                    type: "select2:select",
                    params: {
                      data: data,
                    },
                  });
                  $("#reFromTrigger").val("");
                  $("#reFromReas").val(referralFromData.rearefcod);
                  $("#reFromOtherReas").val(referralFromData.otherReasons);
                  $("#reFromDateTime").val(
                    setTimeLocale(referralFromData.rfdate)
                  );
                  $("#referralDateTime").text(
                    new Date($("#reFromDateTime").val()).toLocaleString()
                  );
                  $("#referralReason").text(
                    $("#reFromReas option:selected").text()
                  );
                  $("#reFromOtherReas").val(data.otherReasons);
                }
              }
            );

            $.get(
              baseURL +
                "Admission/roomLog/" +
                URLencode($.session.get("enccode")),
              function (data) {
                var roomLog = $.parseJSON(data);
                $("#Ward").prop("readonly", true);
                $("#Room").prop("readonly", true);
                $("#Bed").prop("readonly", true);
                $("#Ward").val(roomLog["wardname"]);
                $("#Room").val(roomLog["rmname"]);
                $("#Bed").val(roomLog["bdname"]);
                $("#selWard").val(roomLog["wardcode"]);
                $("#selRoom").val(roomLog["rmintkey"]);
                $("#selBed").val(roomLog["bdintkey"]);
              }
            );
          } else if (type == "insert") {
            SelTypeofService($("#form-step-2"));
            $("#dateaccom").val(getTimeLocale());
            setEncounterAge($("#info_dob").val(), getTimeLocale());
            $("#bedlist").load(baseURL + "Ref_Ward/view_vacant", function () {
              vacantlist(sex);
              $("#Ward").prop("readonly", true);
              $("#Room").prop("readonly", true);
              $("#Bed").prop("readonly", true);
            });
          } else {
            SelTypeofService($("#form-step-2"));
            $("#bedlist").load(baseURL + "Ref_Ward/view_vacant", function () {
              vacantlist(sex);
              $("#Ward").prop("readonly", true);
              $("#Room").prop("readonly", true);
              $("#Bed").prop("readonly", true);
            });
          }
          break;
        case 2:
          var form = $("#form-step-3");
          if (type == "update") {
            selDoctor(form);
            $.get(
              baseURL +
                "Admission/doctorLog/" +
                URLencode($.session.get("enccode")),
              function (data) {
                var docData = $.parseJSON(data);
                var Doc = new Array();
                for (var i = 0; i < docData.length; i++) {
                  Doc = [
                    docData[i]["doctype"],
                    docData[i]["enccode"],
                    docData[i]["licno"],
                  ];
                  setDoctor(Doc, docData[i]["doctype"]);
                }
              }
            );
          } else {
            selDoctor(form);
          }
          break;
        case 3:
          if (type == "update") {
            $.get(
              baseURL +
                "Admission/admissionLog/" +
                URLencode($.session.get("enccode")),
              function (data) {
                var admlog = $.parseJSON(data);
                $("#ReasonDiag").val(admlog["admnotes"]);
                $("#AdmissionDiag").val(admlog["admtxt"]);
                $('#tbind option[value="' + admlog["itisind"] + '"]').prop(
                  "selected",
                  true
                );

                if (admlog["nbind"] == "Y") {
                  $("#nbind option[value='" + admlog["nbind"] + "']").prop(
                    "selected",
                    true
                  );
                }

                if (admlog["admpreg"] == "Y") {
                  $("#pind").prop("disabled", false);
                  $("#pind option[value='" + admlog["admpreg"] + "']").prop(
                    "selected",
                    true
                  );
                } else if (admlog["admpreg"] == "N") {
                  $("#pind").prop("disabled", false);
                  $("#pind option[value='" + admlog["admpreg"] + "']").prop(
                    "selected",
                    true
                  );
                } else {
                  if (sex === "M") {
                    $("#pind").prop("disabled", true);
                  } else {
                    $("#pind").prop("disabled", false);
                  }
                }
              }
            );
            $("#vsBMIMessage")
              .addClass("text-danger")
              .text("*Edit information on patient record module!");

            $("#vsBMI").load(
              baseURL + "PatientRecords/view_vsbmi",
              function () {
                $("#vsDateTime").prop("readonly", true);
                $("#vsBp").prop("readonly", true);
                $("#vsTemp").prop("readonly", true);
                $("#vsPulse").prop("readonly", true);
                $("#vsRr").prop("readonly", true);
                $("#vsOral").prop("readonly", true);
                $("#vsNC").prop("readonly", true);
                $("#vsIntake").prop("readonly", true);
                $("#vsMiscel").prop("readonly", true);
                $("#vsBlood").prop("readonly", true);
                $("#hwDateLog").prop("readonly", true);
                $("#hwHeight").prop("readonly", true);
                $("#hwWeight").prop("readonly", true);
                $("#o2sats").prop("readonly", true);
                getVitalSign($.session.get("enccode"));
                getBMI($.session.get("enccode"));
                //vitals($.session.get('enccode'));
                //bmi($.session.get('enccode'));
              }
            );
          } else {
            if (sex === "M") {
              $("#pind").prop("disabled", true);
            } else {
              $("#pind").prop("disabled", false);
            }
            $("#vsBMI").load(baseURL + "PatientRecords/view_vsbmi");
            var foradmcode = $("#foradmcode").val();
            var foradmtoecode = $("#foradmtoecode").val();
            if (foradmcode != "") {
              getVitalSign(foradmcode);
              getBMI(foradmcode);
              if (foradmtoecode == "ERADM" || foradmtoecode == "ER") {
                erInformation(foradmcode);
              }
              if (foradmtoecode == "OPDAD" || foradmtoecode == "OPD") {
                opdInformation(foradmcode);
              }
            }
          }
          break;
        case 4:
          $.get(
            baseURL +
              "Admission/resactLog/" +
              URLencode($.session.get("enccode")),
            function (data) {
              var resAct = $.parseJSON(data);
              if (resAct) {
                $("#rfname").val(resAct["raname"]);
                $("#rcontact").val(resAct["rateln"]);
                $("#raddress").val(resAct["raaddr"]);
                $("#rrelation").val(resAct["relacode"]);
                $("#rrelation option[value='" + resAct["relacode"] + "']").prop(
                  "selected",
                  true
                );
              }
            }
          );
          $.get(
            baseURL +
              "Admission/encounterLog/" +
              URLencode($.session.get("enccode")),
            function (data) {
              var resAct = $.parseJSON(data);
              $('#sop1 option[value="' + resAct["sopcode1"] + '"]').prop(
                "selected",
                true
              );
              $('#sop2 option[value="' + resAct["sopcode2"] + '"]').prop(
                "selected",
                true
              );
              $('#sop3 option[value="' + resAct["sopcode3"] + '"]').prop(
                "selected",
                true
              );
              $('#case option[value="' + resAct["casetype"] + '"]').prop(
                "selected",
                true
              );
            }
          );
          break;
      }
    }
  );
}

function _validateWizard() {
  $("#smartwizard").on(
    "leaveStep",
    function (e, anchorObject, stepNumber, stepDirection) {
      switch (stepNumber) {
        case 1:
          if ($("#form-step-2").valid()) {
            return true;
          } else {
            return false;
          }
          break;
        case 2:
          if ($("#form-step-3").valid()) {
            return true;
          } else {
            return false;
          }
          break;
        case 3:
          if ($("#form-step-4").valid()) {
            return true;
          } else {
            return false;
          }
          break;
      }
    }
  );
}
//End  of Wizard

function PatientSummary() {
  var base64image = document.getElementById("patientPhoto").src;
  var patkey = $("#info_hpatkey").val();
  var SOP1 =
    $("#sop1 option:selected").val() == ""
      ? "N/A"
      : $("#sop1 option:selected").text();
  var pind =
    $("#pind option:selected").val() == ""
      ? "N/A"
      : $("#pind option:selected").text();
  var TB =
    $("#tbind option:selected").val() == ""
      ? "N/A"
      : $("#tbind option:selected").text();
  const nbind =
    $("#nbind option:selected").val() == ""
      ? "N/A"
      : $("#nbind option:selected").text();
  var rfName = $("#rfname").val() == undefined ? "" : $("#rfname").val();
  var rmName = $("#rmname").val() == undefined ? "" : $("#rmname").val();
  var rlName = $("#rlname").val() == undefined ? "" : $("#rlname").val();
  var respAccount = rfName.concat(",", rmName, "," + rlName);
  $("#patientPhoto").prop("src", base64image);
  $("#admitHpercode").text($("#info_hpercode").val());
  $("#admitPatName").text($("#info_fullname").val());
  //$('#admitAge').text("Year:"+" "+$('#info_year').val()+" / "+"Month/s:"+"  "+$('#info_month').val()+" / "+"Day/s:"+"  "+$('#info_day').val());
  $("#admitAge").text(
    "Year:" +
      " " +
      $("#patage").val() +
      " / " +
      "Month/s:" +
      "  " +
      $("#patagemo").val() +
      " / " +
      "Day/s:" +
      "  " +
      $("#patagedy").val() +
      " / " +
      "Hour/s:" +
      "  " +
      $("#patagehr").val()
  );
  $("#admitSex").text(sex($("#info_sex").val()));
  $("#admitDob").text(formatDate($("#info_dob").val()));
  $("#admitCivilStat").text(civilstatus($("#info_cs").val()));

  $("#dateAccomv").text($("#dateaccom").val());
  $("#admitWard").text($("#Ward").val());
  $("#admitRoom").text($("#Room").val());
  $("#admitBed").text($("#Bed").val());

  $("#admitType").text($("#typaccom option:selected").text());
  $("#admitTos").text($("#selTos option:selected").text());
  $("#admitInsure").text($("#insurance option:selected").text());

  $("#admitPhy").text($("#ADMIT option:selected").text());
  $("#admitConsul").text($("#CONSU option:selected").text());
  $("#admitAttend").text($("#ATTEN option:selected").text());

  $("#admitDiag").text($("#AdmissionDiag").val());
  $("#admitReason").text($("#ReasonDiag").val());
  $("#admitTb").text(TB);
  $("#admitPreg").text(pind);
  $("#admitNewborn").text(nbind);

  $("#admitAccount").text(rfName);
  $("#admitPaySource").text(SOP1);

  $("#chpercode").val($("#info_hpercode").val());
  $("#cpatage").val($("#patage").val());
  $("#cpatmont").val($("#patagemo").val());
  $("#cpatday").val($("#patagedy").val());
  $("#cpathr").val($("#patagehr").val());

  $("#ctacode").val($("#typaccom option:selected").val());
  $("#ctscode").val($("#selTos option:selected").val());
  $("#cmodaccom").val($("#modaccom option:selected").val());
  $("#cinsurance").val($("#insurance option:selected").val());

  $("#cward").val($("#selWar").val());
  $("#croom").val($("#selRoom").val());
  $("#cbed").val($("#selBed").val());

  $("#cdocadmit").val($("#ADMIT option:selected").val());
  $("#cdocconsult").val($("#CONSU option:selected").val());
  $("#cdocattend").val($("#ATTEN option:selected").val());

  $("#cadmdiag").val($("#AdmissionDiag").val());
  $("#creasdiag").val($("#ReasonDiag").val());

  $("#ctbind").val($("#tbind option:selected").val());
  $("#cpind").val($("#pind option:selected").val());
  $("#cnbind").val($("#nbind option:selected").val());

  $("#cvsDateTime").val($("#vsDateTime").val());
  $("#cvsBp").val($("#vsBp").val());
  $("#cvsTemp").val($("#vsTemp").val());
  $("#cvsPulse").val($("#vsPulse").val());
  $("#cvsRr").val($("#vsRr").val());

  $("#cvsOral").val($("#vsOral").val());
  $("#cvsNC").val($("#vsNC").val());
  $("#cvsBlood").val($("#vsBlood").val());
  $("#cvsIntake").val($("#vsIntake").val());
  $("#cvsMiscel").val($("#vsMiscel").val());
  $("#cvso2sats").val($("#o2sats").val());

  $("#chwDateLog").val($("#hwDateLog").val());
  $("#chwHeight").val($("#hwHeight").val());
  $("#chwWeight").val($("#hwWeight").val());
  $("#chwBMI").val($("#hwBMI").val());
  $("#cbmicat").val($("#bmicat").val());

  $("#crfname").val($("#rfname").val());
  $("#crcontact").val($("#rcontact").val());
  $("#craddress").val($("#raddress").val());
  $("#crrelation").val($("#rrelation option:selected").val());

  $("#cinffname").val($("#inffname").val());
  $("#cinfcontact").val($("#infcontact").val());

  $("#cinfrelation").val($("#infrelation option:selected").val());

  $("#csop1").val($("#sop1 option:selected").val());
  $("#csop2").val($("#sop2 option:selected").val());
  $("#csop3").val($("#sop3 option:selected").val());
  $("#ccase").val($("#case option:selected").val());
  $("#ctoecode").val($("#toecode").val());
  $("#cdateaccom").val($("#dateaccom").val());

  var formType = $("#saveIdenAdm").val();

  if (formType == "insert") {
    generateenccode(patkey);
    generatecasenum();
    generatepataccount();
  }
  $("#PatientAdmisionSummary").modal("show");
}

$("#form-step-3")
  .find('[name $="selDoc_doc"]')
  .on("change", function () {
    var licno = this.value;
    if (licno) {
      $.ajax({
        type: "POST",
        url: baseURL + "Admission/DoctorsInformation/" + licno,
        data: "json",
        success: function (data) {
          var obj = $.parseJSON(data);
          if (obj !== null) {
            var category;
            if (obj["catcode"] == "RESID") {
              category = "RESIDENT";
            } else if (obj["catcode"] == "CONSU") {
              category = "CONSULTANT";
            } else {
              category = "OTHER";
            }

            $("#docName_admit").text(obj["name"]);
            $("#docCat_admit").text(category);
            $("#docDept_admit").text(obj["deptname"]);
            $("#docTel_admit").text(obj["contactno"]);
          }
        },
        error: function (data) {
          alert("Error: Fetching Patient Information!");
        },
      });
    }
  });

$("#form-step-3")
  .find('[name $="selDoc1_doc"]')
  .on("change", function () {
    var licno = this.value;
    if (licno) {
      $.ajax({
        type: "POST",
        url: baseURL + "Admission/DoctorsInformation/" + licno,
        data: "json",
        success: function (data) {
          var obj = $.parseJSON(data);
          var category;
          if (obj["catcode"] == "RESID") {
            category = "RESIDENT";
          } else if (obj["catcode"] == "CONSU") {
            category = "CONSULTANT";
          } else {
            category = "OTHER";
          }
          $("#docName_consu").text(obj["name"]);
          $("#docCat_consu").text(category);
          $("#docDept_consu").text(obj["deptname"]);
          $("#docTel_consu").text(obj["contactno"]);
        },
        error: function (data) {
          alert("Error: Fetching Patient Information!");
        },
      });
    }
  });

$("#form-step-3")
  .find('[name $="selDoc2_doc"]')
  .on("change", function () {
    var licno = this.value;
    if (licno) {
      $.ajax({
        type: "POST",
        url: baseURL + "Admission/DoctorsInformation/" + licno,
        data: "json",
        success: function (data) {
          var obj = $.parseJSON(data);
          var category;
          if (obj["catcode"] == "RESID") {
            category = "RESIDENT";
          } else if (obj["catcode"] == "CONSU") {
            category = "CONSULTANT";
          } else {
            category = "OTHER";
          }
          $("#docName_atten").text(obj["name"]);
          $("#docCat_atten").text(category);
          $("#docDept_atten").text(obj["deptname"]);
          $("#docTel_atten").text(obj["contactno"]);
        },
        error: function (data) {
          alert("Error: Fetching Patient Information!");
        },
      });
    }
  });

function DoctorInformation(licno) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURL + "Doctor/DoctorsInformation/" + licno,
    data: "json",
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      alert("Error: Fetching Patient Information!");
    },
  });
  return obj;
}

function setEncounterAge(dateofbirth, encounterdate) {
  var thisDate = encounterdate;
  var bdate = dateofbirth;
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
}

function getVitalSign(enccode) {
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/getMaxVitalSign",
    dataType: "JSON",
    data: { enccode: enccode },
    success: function (data, status) {
      if (data) {
        $("#vsDateTime").prop("readonly", true);
        $("#vsDateTime").val(data.datelog);
        $("#vsBp").val(data.vsbp);
        $("#vsTemp").val(data.vstemp);
        $("#vsPulse").val(data.vspulse);
        $("#vsRr").val(data.vsresp);
        $("#o2sats").val(data.o2sats);
      }
    },
    error: function (data, status) {
      return;
    },
  });
}

function getBMI(enccode) {
  $.ajax({
    type: "POST",
    url: baseURL + "PatientRecords/getMaxBMI",
    dataType: "JSON",
    data: { enccode: enccode },
    success: function (data, status) {
      if (data) {
        $("#hwDateLog").prop("readonly", true);
        $("#hwDateLog").val(data.othrdte);
        $("#hwHeight").val(data.vsheight);
        $("#hwWeight").val(data.vsweight);
        calculateBMI();
      }
    },
    error: function (data, status) {
      return;
    },
  });
}

function erInformation(enccode) {
  var erEnccode = encodeURIComponent(encodeURIComponent(enccode));
  $.ajax({
    type: "POST",
    url: baseURL + "Emergency/Information/" + erEnccode,
    dataType: "JSON",
    success: function (data, status) {
      var er = JSON.parse(data.er);
      $("#ReasonDiag").val(er[0].resadmit);
    },
    error: function (data, status) {
      return;
    },
  });
}

function opdInformation(enccode) {
  var opdEnccode = encodeURIComponent(encodeURIComponent(enccode));
  $.ajax({
    type: "POST",
    url: baseURL + "OutPatient/OutpatientInformation/" + opdEnccode,
    dataType: "JSON",
    success: function (data, status) {
      $("#ReasonDiag").val(data.opdresadmit);
    },
    error: function (data, status) {
      return;
    },
  });
}

function calculateBMI() {
  var weight = parseFloat($("#hwWeight").val());
  var height = parseFloat($("#hwHeight").val());

  var totHeight = parseFloat(height * 0.01) * parseFloat(height * 0.01);

  var totWeight = weight / totHeight;

  var BMI = totWeight.toFixed(2);
  _BMI(BMI);
  $("#hwBMI").val(BMI);
}

function _BMI(n) {
  if (n < 18.5) {
    $("#bmiclass").text("Underweight").addClass("text-danger");
    $("#bmicat").val("UND");
    $("#classbmi").val("Underweight");
  } else if (n <= 18.5 || n <= 24.9) {
    $("#bmiclass").text("Normal weight").addClass("text-success");
    $("#bmicat").val("NOR");
    $("#classbmi").val("Normal weight");
  } else if (n <= 25.0 || n <= 29.9) {
    $("#bmiclass").text("Overweight").addClass("text-danger");
    $("#bmicat").val("OVER");
    $("#classbmi").val("Overweight");
  } else if (n <= 30.0 || n <= 34.9) {
    $("#bmiclass").text("Class I obesity").addClass("text-danger");
    $("#bmicat").val("OBE");
    $("#classbmi").val("Class I obesity");
  } else if (n <= 35.0 || n <= 39.9) {
    $("#bmiclass").text("Class II obesity").addClass("text-danger");
    $("#bmicat").val("OBEII");
    $("#classbmi").val("Class II obesity");
  } else if (n >= 40.0) {
    $("#bmiclass").text("Class III obesity").addClass("text-danger");
    $("#bmicat").val("OBEIII");
    $("#classbmi").val("Class III obesity");
  } else {
    $("#bmicat").val("");
  }
}

function init_refrom_hfhudcode() {
  $("#refrom_hfhudcode").select2({
    allowClear: true,
    placeholder: "Select Referring Facility",
    theme: "coreui",
    ajax: {
      url: baseURL + "Referral/getReferralHfhud/",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          referralHfhud: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.hfhudcode,
            text: item.hfhudname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

$("#refrom_hfhudcode").change(function () {
  if (!$(this).val()) {
    $("#referralLogId").val("");
    $("#refromFhudCode").val("");
    $("#referringFacility").text("");
    $("#reFromReas").val("");
    $("#reFromDateTime").val("");
    $("#reFromOtherReas").val("");
    $("#referralReason").text("");
    $("#referralDateTime").text("");
    $("#referralOtherReason").text("");
    return;
  }
  if ($("#reFromTrigger").val() == "encdata") return;
  const info_lname = $("#info_lname").val();
  const info_fname = $("#info_fname").val();
  const info_mname = $("#info_mname").val();
  const info_dob = $("#info_dob").val();
  const info_sex = $("#info_sex").val();
  const hfhudcode = $(this).val();
  const patReferralQuery = {
    info_lname,
    info_fname,
    info_mname,
    info_dob,
    info_sex,
    hfhudcode,
  };
  $.ajax({
    type: "POST",
    url: baseURL + "Referral/validateReferralHfhud",
    dataType: "JSON",
    data: patReferralQuery,
    async: false,
    success: function (data, status) {
      const referralData = JSON.parse(data.data);
      setPatientReferralFrom(referralData);
      $("#addreFromHpercode").text($("#info_hpercode").val());
      $("#addreFromPatient").text($("#info_fullname").val());
      $("#addreFromEncounter").text("EMERGENCY ROOM DEPARTMENT");
      $("#addreFromEncounterDate").text(
        new Date($("#dateRegistration").val()).toLocaleString()
      );
      $("#addIncomingReferralModal").modal("show");
    },
    error: function (data, response) {
      $("#referralLogId").val("");
      $("#refromFhudCode").val("");
      $("#referringFacility").text("");
      $("#reFromReas").val("");
      $("#referralReason").text("");
      $("#reFromOtherReas").val("");
      $("#referralOtherReason").text("");
      $("#reFromDateTime").val("");
      $("#referralDateTime").text("");
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

function setPatientReferralFrom(data) {
  var referralReceivedTable = $("#referralReceivedTable").DataTable({
    destroy: true,
    data: data,
    columns: [
      {
        data: "LogID",
        className: "LogID",
      },
      { data: "referdatetime" },
      { data: "hfhudname" },
      {
        data: "referralCategory",
        render: function (data, type, row) {
          switch (data) {
            case "ER":
              return "Emergency";
              break;
            case "OP":
              return "Out-Patient";
              break;
            default:
              return "N/A";
          }
        },
      },
      {
        data: "typeOfReferral",
        render: function (data, type, row) {
          switch (data) {
            case "DIAGT":
              return "Diagnostic Test";
              break;
            case "TRANS":
              return "Transfer";
              break;
            case "CONSU":
              return "Consultation";
              break;
            case "OTHER":
              return row.referraltypeothers;
              break;
            default:
              return "N/A";
          }
        },
      },
      {
        data: "referralReason",
        render: function (data, type, row) {
          switch (data) {
            case "NOEQP":
              return "No equipment available";
              break;
            case "NODOC":
              return "No available doctor";
              break;
            case "NOPRO":
              return "No procedure available";
              break;
            case "NOLAB":
              return "No laboratory available";
              break;
            case "NOROM":
              return "No room available";
              break;
            case "SEASO":
              return "Seek advise/second opiniion";
              break;
            case "SESPE":
              return "Seek specialized evaluation";
              break;
            case "SEFTA":
              return "Seek futher treatment appropriate to the case";
              break;
            default:
              return "N/A";
          }
        },
      },
      {
        data: null,
        className: "text-center",
        render: function (data, type, row) {
          return (
            '<input type="checkbox" class="selectReferralFrom" data-logid="' +
            row.LogID +
            '" data-toggle="tooltip" data-placement="top" title="Select this Referral"/>'
          );
        },
      },
    ],
  });

  $("#referralReceivedTable").off();
  $("#referralReceivedTable").on(
    "click",
    "tbody > tr .selectReferralFrom",
    function () {
      const thisRow = $(this).closest("tr");
      const rowData = referralReceivedTable.row(thisRow).data();
      if ($(this).is(":checked")) {
        $(".selectReferralFrom").prop("checked", false);
        $(this).prop("checked", true);
        $("#selectedReferralFromLogID").val(rowData.LogID);
        $("#selectedrefromFhudCode").val(rowData.hfhudcode);
        $("#selectedreFromReas").val(rowData.referralReason);
        $("#selectedreFromDateTime").val(rowData.referralDateTime);
        $("#selectedreFromOtherReas").val(rowData.otherReasons);
        $("#selectedReferringFacility").val(rowData.hfhudname);
      } else {
        $("#selectedReferralFromLogID").val("");
        $("#selectedrefromFhudCode").val("");
        $("#selectedreFromReas").val("");
        $("#selectedreFromDateTime").val("");
        $("#selectedreFromOtherReas").val("");
        $("#selectedReferringFacility").val("");
      }
    }
  );
}

$("#selectReferralFrom").click(function () {
  if ($("#selectedReferralFromLogID").val() == "") {
    toastr.warning("Please select referral!", "Warning");
    return;
  }
  $("#referralLogId").val($("#selectedReferralFromLogID").val());
  $("#refromFhudCode").val($("#selectedrefromFhudCode").val());
  $("#referringFacility").text($("#selectedReferringFacility").val());
  $("#reFromReas").val($("#selectedreFromReas").val());
  $("#referralReason").text($("#reFromReas option:selected").text());
  $("#reFromOtherReas").val($("#selectedreFromOtherReas").val());
  $("#reFromDateTime").val(setTimeLocale($("#selectedreFromDateTime").val()));
  $("#referralDateTime").text(
    new Date($("#reFromDateTime").val()).toLocaleString()
  );
  $("#addIncomingReferralModal").modal("hide");
});
