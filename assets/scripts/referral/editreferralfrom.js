$(document).ready(function () {
  init_refrom_hfhudcode();
  setPatientMunCity();
  setPatientReligion();
  setReceivedBy();

  $("#cancelAddReferralFrom").click(function () {
    window.location.href = baseURL + "Referral";
  });

  $("#patientMundCode").change(function () {
    if (this.value) {
      $("#patientProvCode").empty();
      $("#patientRegCode").empty();
      const provCode = this.value.substring(0, 4);
      setPatientDistCode(this.value);
      setPatientProvCode(provCode);
      const regCode = this.value.substring(0, 2);
      setPatientRegCode(regCode);
      if (regCode != "13") {
        setZipCode(this.value);
        $("#patientBrgyCode").prop("disabled", false);
        setPatientBrgyCode(this.value);
        $("#patientDistCode").empty();
        $("#patientDistCode").prop("disabled", true);
      } else {
        $("#patientBrgyCode").empty();
        $("#patientBrgyCode").prop("disabled", true);
        $("#patientDistCode").prop("disabled", false);
      }
    } else {
      $("#patientDistCode").empty();
      $("#patientBrgyCode").empty();
      $("#patientProvCode").empty();
      $("#patientRegCode").empty();
      $("#patientZipCode").val("");
      $("#patientBrgyCode").prop("disabled", true);
    }
  });

  $("#patientDistCode").change(function () {
    setPatientBrgyCode2($("#patientMundCode").val(), this.value);
    $("#patientBrgyCode").prop("disabled", false);
    $("#patientZipCode").val(this.value);
  });

  $("#addIncomingReferralForm").validate({
    rules: {
      patientLastName: "required",
      patientFirstName: "required",
      patientSex: "required",
      patientBirthDate: "required",
      patientStreetAddress: "required",
      patientMundCode: "required",
      patientBrgyCode: "required",
      LogID: "required",
      fhudFrom: "required",
      typeOfReferral: "required",
      referralDateTime: {
        required: true,
        step: false,
      },
      referralCategory: "required",
      datetimecalled: {
        step: false,
        required: {
          depends: function (element) {
            if ($("#referralCategory").val() == "ER") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      referralReason: "required",
      chiefComplaint: {
        required: true,
        maxlength: 255,
      },
      physicalExamination: {
        maxlength: 255,
      },
      clinicalHistory: {
        maxlength: 255,
      },
      clinicalDiagnosis: {
        maxlength: 255,
      },
      findings: {
        maxlength: 255,
      },
      providerlast_refer: "required",
      providerfirst_refer: "required",
      bp: {
        bpValidator: true,
      },
      hr: {
        vsPulseValidator: true,
      },
      rr: {
        vsRrValidator: true,
      },
      receivedby: "required",
      receiveddate: {
        required: true,
        step: false,
      },
    },
    messages: {
      patientLastName: "Last Name is required!",
      patientFirstName: "First Name is required!",
      patientSex: "Sex is required!",
      patientBirthDate: "Date of Birth is required!",
      patientStreetAddress: "Street Address is required!",
      patientMundCode: "City/Municipality Address is required!",
      patientBrgyCode: "Barangay Address is required!",
      LogID: "Transaction Code is required",
      fhudFrom: "Referring Facility is required!",
      typeOfReferral: "Type of Referral is required!",
      referralDateTime: "Referral Date and Time is required!",
      referralCategory: "Referral Category is required!",
      datetimecalled: "Date and Time Called required",
      referralReason: "Referral Reason is required!",
      chiefComplaint: {
        required: "Chief Complaint is required!",
        maxlength: "Characters are more than 255 in length!",
      },
      physicalExamination: {
        maxlength: "Characters are more than 255 in length!",
      },
      clinicalHistory: {
        maxlength: "Characters are more than 255 in length!",
      },
      clinicalDiagnosis: {
        maxlength: "Characters are more than 255 in length!",
      },
      findings: {
        maxlength: "Characters are more than 255 in length!",
      },
      providerlast_refer: "Referring Porvider Last Name is required!",
      providerfirst_refer: "Referring Porvider First Name is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });

  jQuery.validator.addMethod(
    "bpValidator",
    function (value, element, param) {
      var elementVal = $(element).val();
      if (
        elementVal === "" ||
        elementVal === "palpatory" ||
        elementVal === "PALPATORY"
      ) {
        return true;
      } else {
        if (
          elementVal == "N/A" ||
          elementVal == "n/a" ||
          elementVal == "NA" ||
          elementVal == "na"
        ) {
          return true;
        }
      }

      var bpArray = elementVal.split("/");
      if (bpArray.length === 1) {
        return false;
      }

      if (bpArray.length > 2) {
        return false;
      }

      if (isNaN(bpArray[0])) {
        return false;
      }

      if (bpArray[0].charAt(0) == "0") {
        return false;
      }

      if (bpArray[1] === "") {
        return false;
      }

      if (isNaN(bpArray[1])) {
        return false;
      }

      if (bpArray[1].charAt(0) == "0") {
        return false;
      }

      return true;
    },
    "Invalid value for Blood Pressure"
  );

  jQuery.validator.addMethod(
    "vsPulseValidator",
    function (value, element, param) {
      var elementVal = $(element).val();
      if (elementVal === "") {
        return true;
      }

      if (elementVal != "") {
        let vsPulse = elementVal;
        if (vsPulse.indexOf(".") != -1) {
          return false;
        }

        if (vsPulse == "0" || vsPulse == 0) {
          return false;
        }
      }
      return true;
    },
    "Invalid value for Heart Rate"
  );

  jQuery.validator.addMethod(
    "vsRrValidator",
    function (value, element, param) {
      var elementVal = $(element).val();
      if (elementVal === "") {
        return true;
      }

      if (elementVal != "") {
        let vsRr = elementVal;
        if (vsRr.indexOf(".") != -1) {
          return false;
        }

        if (vsRr == "0" || vsRr == 0) {
          return false;
        }
      }

      return true;
    },
    "Invalid value for Respiratory Rate"
  );
  $("#generateLogID").css("cursor", "pointer");
  $("#generateLogID").click(function () {});
  setReferralFromData();
});

$("#addIncomingReferralForm").submit(function (event) {
  event.preventDefault();
  if ($("#addIncomingReferralForm").valid() == false) {
    return;
  }
  $("#updateReferralFrom").html(
    '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Processing...'
  );
  $("#addIncomingReferralForm").css("pointer-events", "none");
  var referralData = $(this).serialize();
  var url = baseURL + "Referral/saveIncomingReferral";
  $.ajax({
    type: "POST",
    data: referralData,
    dataType: "JSON",
    url: url,
    success: function (data) {
      $("#updateReferralFrom").html(
        '<i class="fa fa-pencil-square" aria-hidden="true"></i> Update'
      );
      $("#addIncomingReferralForm").css("pointer-events", "auto");
      toastr.success(data.message, "Success");
      window.location.replace(baseURL + "Referral");
    },
    error: function (data) {
      $("#updateReferralFrom").html(
        '<i class="fa fa-pencil-square" aria-hidden="true"></i> Update'
      );
      $("#addIncomingReferralForm").css("pointer-events", "auto");
      toastr.error(data.responseJSON.message, "Error");
    },
  });
});

function setZipCode(cityCode) {
  var Obj = new Object();
  Obj.url = baseURL + "Demographics/setZip/" + cityCode;
  Obj.data = "JSON";
  Obj.type = "POST";
  var row = Information(Obj);
  $("#patientZipCode").val(row[0]["ctyzipcode"]);
}

function init_refrom_hfhudcode() {
  $("#fhudFrom").select2({
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
            id: item.faccode,
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

function setPatientMunCity() {
  $("#patientMundCode").select2({
    enabled: true,
    placeholder: "City",
    theme: "coreui",
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchCity/",
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchCity: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.ctycode,
            text: item.ctyname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setPatientRegCode(regCode) {
  var regionSet = $("#patientRegCode");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "/Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      $("#patientRegCodeVal").val(obj["regcode"]);
      var option = new Option(obj["regname"], obj["regcode"], true, true);
      regionSet.append(option).trigger("change");
      regionSet.trigger({
        theme: "coreui",
        disabled: true,
        type: "select2:select",
        params: {
          data: data,
        },
      });
    });
  }
}

function setPatientProvCode(provId) {
  var provSet = $("#patientProvCode");
  if (provId) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setProvince/" + provId,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      $("#patientProvCodeVal").val(obj["provcode"]);
      var option = new Option(obj["provname"], obj["provcode"], true, true);
      provSet.append(option).trigger("change");
      provSet.trigger({
        theme: "coreui",
        disabled: true,
        type: "select2:select",
        params: {
          data: data,
        },
      });
    });
  }
}

function setPatientBrgyCode(citycode) {
  $("#patientBrgyCode").select2({
    enabled: true,
    placeholder: "Barangay",
    theme: "coreui",
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchBarangay/" + citycode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchBarangay: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.bgycode,
            text: item.bgyname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setPatientDistCode(citycode) {
  $("#selDist").off();
  $("#patientDistCode").select2({
    enabled: true,
    placeholder: "District",
    theme: "coreui",
    allowClear: true,
    ajax: {
      url: baseURL + "/Demographics/searchDistrict2/" + citycode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchDist: params.term };
      },
      processResults: function (data) {
        var results = [];

        $.each(data, function (index, item) {
          results.push({
            id: item.zipcode,
            text: item.distname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setPatientBrgyCode2(citycode, distzip) {
  $("#patientBrgyCode").select2({
    enabled: true,
    placeholder: "Barangay",
    theme: "coreui",
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchBarangay2/" + citycode + "/" + distzip,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchBarangay: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.bgycode,
            text: item.bgyname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setPatientReligion() {
  $("#patientReligion").select2({
    theme: "coreui",
    placeholder: "Select Religion",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "/Religion/religion",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchReligion: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.relcode,
            text: item.reldesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setReceivedBy() {
  $("#receivedby").select2({
    placeholder: "Select Receiving Personnel",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Referral/getReceivingPersonnel",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchEmployees: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.employeeid,
            text: item.fullname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function setReferralFromData() {
  const referralFromLogID = $("#referralLogid").val();
  var obj = null;
  $.ajax({
    url: baseURL + "Referral/getReferralFrom",
    type: "POST",
    dataType: "JSON",
    data: { logid: referralFromLogID },
    success: function (data, response) {
      obj = JSON.parse(data.data);
      $("#patientLastName").val(obj.patientLastName);
      $("#patientFirstName").val(obj.patientFirstName);
      $("#patientMiddlename").val(obj.patientMiddlename);
      $("#patientSuffix").val(obj.patientSuffix);
      $("#patientSex").val(obj.patientSex);
      $("#patientBirthDate").val(obj.patientBirthDate.substring(0, 10));
      $("#patientcivilstatus").val(obj.patientcivilstatus);
      $("#patientcivilstatus").val(obj.patientcivilstatus);
      if (obj.relcode) {
        let option = new Option(obj.reldesc, obj.relcode, true, true);
        $("#patientReligion").append(option).trigger("change");
        $("#patientReligion").trigger({
          theme: "coreui",
          disabled: true,
          type: "select2:select",
          params: {
            data: data,
          },
        });
      }
      $("#patientStreetAddress").val(obj.patientStreetAddress);
      if (obj.ctycode) {
        let option = new Option(obj.ctyname, obj.ctycode, true, true);
        $("#patientMundCode").append(option).trigger("change");
        $("#patientMundCode").trigger({
          theme: "coreui",
          disabled: true,
          type: "select2:select",
          params: {
            data: data,
          },
        });
      }
      if (obj.zipcode) {
        let option = new Option(obj.distname, obj.zipcode, true, true);
        $("#patientDistCode").append(option).trigger("change");
        $("#patientDistCode").trigger({
          theme: "coreui",
          disabled: true,
          type: "select2:select",
          params: {
            data: data,
          },
        });
      }
      if (obj.bgycode) {
        $("#patientBrgyCode").prop("disabled", false);
        let option = new Option(obj.bgyname, obj.bgycode, true, true);
        $("#patientBrgyCode").append(option).trigger("change");
        $("#patientBrgyCode").trigger({
          theme: "coreui",
          disabled: true,
          type: "select2:select",
          params: {
            data: data,
          },
        });
      }
      $("#patientZipCode").val(obj.patientZipCode);
      $("#patientContactNumber").val(obj.patientContactNumber);
      $("#LogID").val(obj.LogID);
      if (obj.faccode) {
        let option = new Option(obj.hfhudname, obj.faccode, true, true);
        $("#fhudFrom").append(option).trigger("change");
        $("#fhudFrom").trigger({
          theme: "coreui",
          disabled: true,
          type: "select2:select",
          params: {
            data: data,
          },
        });
      }
      $("#patientpan").val(obj.patientpan);
      $("#referringContactNumber").val(obj.referringContactNumber);
      $("#referralContactPerson").val(obj.referralContactPerson);
      $("#referralCoreferralDateTimentactPersonDesignation").val(
        obj.referralContactPersonDesignation
      );
      $("#referralDateTime").val(obj.referralDateTime);
      $("#referralCategory").val(obj.referralCategory);
      $("#datetimecalled").val(obj.datetimecalled);
      $("#response").val(obj.response);
      $("#typeOfReferral").val(obj.typeOfReferral);
      $("#typeofreferralothers").val(obj.typeofreferralothers);
      $("#referralReason").val(obj.referralReason);
      $("#otherReasons").val(obj.otherReasons);
      $("#remarks").val(obj.remarks);
      $("#bp").val(obj.bp);
      $("#temp").val(obj.temp);
      $("#hr").val(obj.hr);
      $("#rr").val(obj.rr);
      $("#o2sats").val(obj.o2sats);
      $("#weight").val(obj.weight);
      $("#chiefComplaint").val(obj.chiefComplaint);
      $("#physicalExamination").val(obj.physicalExamination);
      $("#clinicalHistory").val(obj.clinicalHistory);
      $("#clinicalDiagnosis").val(obj.clinicalDiagnosis);
      $("#findings").val(obj.findings);
      $("#providerlast_refer").val(obj.providerlast_refer);
      $("#providerfirst_refer").val(obj.providerfirst_refer);
      $("#providermiddle_refer").val(obj.providermiddle_refer);
      $("#providersuffix_refer").val(obj.providersuffix_refer);
      $("#providercontact_refer").val(obj.providercontact_refer);
      $("#providerlast_consu").val(obj.providerlast_consu);
      $("#providerfirst_consu").val(obj.providerfirst_consu);
      $("#providermiddle_consu").val(obj.providermiddle_consu);
      $("#providersuffix_consu").val(obj.providersuffix_consu);
      $("#providercontact_consu").val(obj.providercontact_consu);
      if (obj.employeeid) {
        let option = new Option(obj.receivedbyname, obj.employeeid, true, true);
        $("#receivedby").append(option).trigger("change");
        $("#receivedby").trigger({
          theme: "coreui",
          disabled: true,
          type: "select2:select",
          params: {
            data: data,
          },
        });
      }
      $("#receiveddate").val(obj.receiveddate);
    },
    error: function (data, response) {
      toastr.error(data.responseJSON.message, "Error");
      window.location.replace(baseURL + "Referral");
    },
  });
}
