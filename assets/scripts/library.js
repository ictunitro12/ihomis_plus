function generateenccode(patkey) {
  $("#btnSave")
    .prop("disabled", true)
    .html(
      '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
    );
  $.ajax({
    url: baseURL + "Utility/generateenccode/" + patkey,
    type: "POST",
    data: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data) {
      $("#enccode").val($.trim(data));
    },
    error: function (response) {
      alert("Failed to Generate Encounter Code!");
    },
  });
}

function uom() {
  var row;
  var Obj = new Object();
  Obj.url = baseURL + "Ref_UnitsofMeasure/unitsOfMeasure";
  Obj.data = "JSON";
  Obj.type = "POST";
  return (row = Information(Obj));
}

function generatecasenum() {
  $.ajax({
    url: baseURL + "Utility/generatecasenum",
    type: "POST",
    data: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data) {
      $("#casenum").val($.trim(data));
    },
    error: function (response) {
      alert("Failed to Generate Casenumber!");
    },
  });
}

function generatechargeslip() {
  var row;
  var Obj = new Object();
  Obj.url = baseURL + "Billing/chargeSlip";
  Obj.data = "JSON";
  Obj.type = "POST";
  return (row = Information(Obj));
}

function generatepataccount() {
  $.ajax({
    url: baseURL + "Utility/generate_account/",
    type: "POST",
    data: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data) {
      $("#pataccount").val($.trim(data));
      $("#btnSave")
        .prop("disabled", false)
        .html('<i id="btnSaveIcon" class="fa fa-save"></i>&nbsp SAVE');
    },
    error: function (response) {
      alert("Failed to Generate Account Code!");
    },
  });
}

function generateChargeSlip() {
  $.ajax({
    url: baseURL + "Utility/generate_account",
    type: "POST",
    data: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data) {
      $("#pataccount").val($.trim(data));
    },
    error: function (response) {
      alert("Failed to Generate Account Code!");
    },
  });
}

function wardCount(sex) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURL + "Admission/countWardBySex/" + sex,
    data: "JSON",
    async: false,
    success: function (data, status) {
      obj = $.parseJSON(data);
    },
    error: function (data, status) {
      alert("Failed to get ward count!");
    },
  });
  return obj;
}

function roomCount(wrdcode) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURL + "Admission/countRoomAvailable/" + wrdcode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      obj = $.parseJSON(data);
    },
    error: function (data, status) {
      alert("Failed to get data");
    },
  });
  return obj;
}

function bedCount(rmcode) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURL + "Admission/countBedAvailable/" + rmcode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      obj = $.parseJSON(data);
    },
    error: function (data, status) {
      alert("Failed to get data");
    },
  });
  return obj;
}

function selDoctor(id) {
  var form = id;
  form.find('[name $="_doc"]').select2({
    placeholder: "Doctor",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Doctor/searchDoctor",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  form.find('[name $="_doc"]').on("change", function () {
    var data = form.find("[name $='_doc'] option:selected", this);
    $(this).valid();
    form.find("#licno").val(this.value);
  });
}

function SelDoc() {
  $('[name $="_name"]').select2({
    placeholder: "Select Doctor",
    allowClear: true,
    width: "resolve",
    theme: "form-multi-select",
    ajax: {
      url: baseURL + "/Admission/searchDoctor",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_name"]').on("change", function () {
    var data = $("[name $='_name'] option:selected", this);
    $("#licno").val(this.value);
  });
}

function SelFacType() {
  $('[name $="_factype"]').select2({
    placeholder: "Select facility",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Facility/selFacType",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.srfcode,
            text: item.srfdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_factype"]').on("change", function () {
    var data = $("[name $='_factype'] option:selected", this);
  });
}

function SelDocRef() {
  $('[name $="_provRef"]').select2({
    placeholder: "Select Doctor",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/Doctor/searchDoctor_Ref",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_provRef"]').on("change", function () {
    var data = $("[name $='_provRef'] option:selected", this);
  });
}

function SelEmp() {
  $('[name $="_emp"]').select2({
    placeholder: "Select Employee",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Ref_Personnel/selPersonnel",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.employeeid,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_emp"]').on("change", function () {
    $("[name $='_emp'] option:selected", this);
    $("#employeeid").val(this.value);
  });
}

function SelDiagnosis() {
  $('[name $="_diag[]"]').select2({
    placeholder: "Diagnosis",
    allowClear: true,
    multiple: true,
    theme: "coreui",
    minimumInputLength: 2,
    ajax: {
      url: baseURL + "PatientRecords/searchDiagnosis",
      dataType: "json",
      type: "POST",
      data: function (params) {
        return {
          searchDiagnosis: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.diagcode,
            text: item.diagdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_diag[]"]').on("change", function () {
    $("[name $='_diag[]'] option:selected", this);
    $("#diagICD_desc").val($("[name $='_diag[]").find(":selected").text());
  });
}

/* 

function SelDrugs() {
	$('[name $="_drugs"]').select2({
		placeholder: 'DRUGS AND MEDICINE',
		allowClear: true,
		theme: 'coreui',
		ajax: {
			url: baseURL + "/Drugs/searchDrugs",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchDrugs: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.dmdcomb,
						text: item.drugs
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('[name $="_drugs"]').on('change', function () {
		$("[name $='_drugs'] option:selected", this);
		$("#dmdcomb").val(this.value);
	});
}
*/
function SelForm(id) {
  $('[name $="_form"]').select2({
    placeholder: "UNIT INTAKE",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/Drugs/searchForm/" + id,
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchForm: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.formcode,
            text: item.formdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_form"]').on("change", function () {
    $("[name $='_form'] option:selected", this);
    $("#formcode").val(this.value);
  });
}

function SelReligion() {
  $("#selRel").select2({
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
  $("#selRel").on("change", function () {
    var data = $("#selRel option:selected", this);
    var relcode = $("#relcode").val(this.value);
  });
}
//NICETTE 8/25/2021
function SelReligionPerp() {
  $("#selRelPerp").select2({
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
  $("#selRelPerp").on("change", function () {
    var data = $("#selRelPerp option:selected", this);
    var relcode = $("#relcode").val(this.value);
  });
}

/* function SelSuppSub(ptcode) {
	$('#selFac').select2({
		theme: 'coreui',
		placeholder: 'Select Supplies',
		allowClear: true,
		theme: 'coreui',
		ajax: {
			url: baseURL + "Supplies/searchSupSub/" + ptcode,
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchSub: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.cl1comb,
						text: item.cl1desc
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selFac').on('change', function () {
		var data = $("#selFac option:selected", this);
		var hfhudcode = $("#hfhudcode").val(this.value);
	});
} */

function SelFireworks() {
  $("#selFire").select2({
    theme: "coreui",
    placeholder: "Select Fireworks",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/Fireworks/fireworks",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSupplies: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.firecracker_code,
            text: item.description,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selFire").on("change", function () {
    var data = $("#selFire option:selected", this);
    var rmcode = $("#firecracker_code").val(this.value);
  });
}

/* function SelFacilities2() {
	$('#selFac2').select2({
		theme: 'coreui',
		placeholder: 'Select Facility',
		allowClear: true,
		theme: 'coreui',
		ajax: {
			url: baseURL + "Supplies/searchSupSub/" + ptcode,
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchSub: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.cl1comb,
						text: item.cl1desc
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selFac2').on('change', function () {
		var data = $("#selFac2 option:selected", this);
		var hfhudcode = $("#hfhudcode").val(this.value);
	});
}
*/
function SelFacilities3() {
  $("#selFac3").select2({
    theme: "coreui",
    placeholder: "Select Facility",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Facilities/searchFacility",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchFacility: params.term,
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
  $("#selFac3").on("change", function () {
    var data = $("#selFac3 option:selected", this);
    var hfhudcode = $("#hfhudcode").val(this.value);
  });
}

//PLACE CONSULT
function SelHospital2() {
  $("#selHospital").select2({
    theme: "coreui",
    placeholder: "Select Facility",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Dengue/searchHospital",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchHospital: params.term,
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
  $("#selHospital").on("change", function () {
    var data = $("#selHospital option:selected", this);
    var hfhudcode = $("#selHospital").val(this.value);
  });
}

function setHospital2(hfhudcode) {
  SelHospital2();
  var hfhudcode = encodeURIComponent(encodeURIComponent(hfhudcode));
  var relSelect = $("#selHospital");
  $.ajax({
    type: "POST",
    url: baseURL + "Dengue/setHospital/" + hfhudcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["hfhudname"], obj["hfhudcode"], true, true);
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

//START JUNE GABALFIN 6-17-21
//DMDCOMB
function generatedmdcomb() {
  $.ajax({
    url: baseURL + "Utility/generatedmdcomb",
    type: "POST",
    data: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data) {
      $("#key").val($.trim(data));
    },
    error: function (response) {
      console.log(response);
    },
  });
}

//GRPCODE
function generategrpcode() {
  $.ajax({
    url: baseURL + "Utility/generategrpcode",
    type: "POST",
    data: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data) {
      $("#key").val($.trim(data));
    },
    error: function (response) {
      console.log(response);
    },
  });
}

//GENERIC
function SelGeneric() {
  $("#selGeneric").select2({
    theme: "coreui",
    placeholder: "Select Generic Name",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Generic/searchGeneric",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchGeneric: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.gencode,
            text: item.GENDESC,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selGeneric").on("change", function () {
    var data = $("#selGeneric option:selected", this);
    var rmcode = $("#selGeneric").val(this.value);
  });
}

function setGeneric(gencode) {
  SelGeneric();
  var gencode = encodeURIComponent(encodeURIComponent(gencode));
  var relSelect = $("#selGeneric");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Generic/setGeneric/" + gencode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["GENDESC"], obj["gencode"], true, true);
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

//SALT
function SelSalt() {
  $("#selSalt").select2({
    theme: "coreui",
    placeholder: "Select Salt",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Salt/searchSalt",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSalt: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.saltcode,
            text: item.SALTDESC,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selSalt").on("change", function () {
    var data = $("#selSalt option:selected", this);
    var rmcode = $("#selSalt").val(this.value);
  });
}

function setSalt(saltcode) {
  SelSalt();
  var saltcode = encodeURIComponent(encodeURIComponent(saltcode));
  var relSelect = $("#selSalt");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Salt/setSalt/" + saltcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["SALTDESC"], obj["saltcode"], true, true);
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

//STRENGTH
function SelStrength() {
  $("#selStrength").select2({
    theme: "coreui",
    placeholder: "Select Strength",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Strength/searchStrength",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchStrength: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.strecode,
            text: item.stredesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selStrength").on("change", function () {
    var data = $("#selStrength option:selected", this);
    var rmcode = $("#selStrength").val(this.value);
  });
}

function setStrength(strecode) {
  SelStrength();
  var strecode = encodeURIComponent(encodeURIComponent(strecode));
  var relSelect = $("#selStrength");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Strength/setStrength/" + strecode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["STREDESC"], obj["strecode"], true, true);
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

//PACKAGING
function SelPackaging() {
  $("#selPackaging").select2({
    theme: "coreui",
    placeholder: "Select Packaging",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Packaging/searchPackaging",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchPackaging: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.packcode,
            text: item.PACKDESC,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selPackaging").on("change", function () {
    var data = $("#selPackaging option:selected", this);
    var rmcode = $("#selPackaging").val(this.value);
  });
}

function selPakage() {
  $("#selPackaging").select2({
    theme: "coreui",
    placeholder: "Select Packaging",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Packaging/searchPackaging",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchPackaging: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.packcode,
            text: item.PACKDESC,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selPackaging").on("change", function () {
    var data = $("#selPackaging option:selected", this);
    var rmcode = $("#selPackaging").val(this.value);
  });
}

function setPackaging(packcode) {
  SelPackaging();
  var packcode = encodeURIComponent(encodeURIComponent(packcode));
  var relSelect = $("#selPackaging");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Packaging/setPackaging/" + packcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["PACKDESC"], obj["packcode"], true, true);
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

//FORM
function SelForms() {
  $("#selForms").select2({
    theme: "coreui",
    placeholder: "Select Form",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Form/searchForm",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchForm: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.formcode,
            text: item.FORMDESC,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selForms").on("change", function () {
    var data = $("#selForms option:selected", this);
    var rmcode = $("#selForms").val(this.value);
  });
}

function setForm(formcode) {
  SelForms();
  var formcode = encodeURIComponent(encodeURIComponent(formcode));
  var relSelect = $("#selForms");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Form/setForm/" + formcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["FORMDESC"], obj["formcode"], true, true);
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

//ROUTE
function SelRoute() {
  $("#selRoute").select2({
    theme: "coreui",
    placeholder: "Select Route",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Route/searchRoute",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchRoute: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.rtecode,
            text: item.rtedesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selRoute").on("change", function () {
    var data = $("#selRoute option:selected", this);
    var rmcode = $("#selRoute").val(this.value);
  });
}

function setRoute(rtecode) {
  SelRoute();
  var rtecode = encodeURIComponent(encodeURIComponent(rtecode));
  var relSelect = $("#selRoute");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Route/setRoute/" + rtecode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["rtedesc"], obj["rtecode"], true, true);
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

//PNDF MAJOR
function SelPNDFClass() {
  $("#selPNDFClass").select2({
    theme: "coreui",
    placeholder: "Select PNDF Major Category",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_PNDFClass/searchPNDFClass",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchPNDFClass: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.dmcode,
            text: item.dmdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selPNDFClass").on("change", function () {
    var data = $("#selPNDFClass option:selected", this);
    SelSubGroup1(this.value);
  });
}

function setPNDFClass(dmcode) {
  SelPNDFClass();
  var dmcode = encodeURIComponent(encodeURIComponent(dmcode));
  var relSelect = $("#selPNDFClass");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_PNDFClass/setPNDFClass/" + dmcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["dmdesc"], obj["dmcode"], true, true);
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

//PNDF SUB GROUP 1
function SelSubGroup1(code) {
  $("#selSubGroup1").select2({
    theme: "coreui",
    placeholder: "Select PNDF Sub Group 1",
    allowClear: true,
    encryption: true,
    ajax: {
      url:
        baseURL +
        "Ref_PNDFClass/searchSubGroup1/" +
        encodeURIComponent(encodeURIComponent(code)),
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSubGroup1: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.dms1key,
            text: item.dms1desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selSubGroup1").on("change", function () {
    var data = $("#selSubGroup1 option:selected", this);
    SelSubGroup2(this.value);
  });
}

function setSubGroup1(dms1key) {
  SelSubGroup1();
  var dms1key = encodeURIComponent(encodeURIComponent(dms1key));
  var relSelect = $("#selSubGroup1");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_PNDFClass/setSubGroup1/" + dms1key,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["dms1desc"], obj["dms1key"], true, true);
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

//PNDF SUB GROUP 2
function SelSubGroup2(code1) {
  $("#selSubGroup2").select2({
    theme: "coreui",
    placeholder: "Select PNDF Sub Group 2",
    allowClear: true,
    encryption: true,
    ajax: {
      url:
        baseURL +
        "Ref_PNDFClass/searchSubGroup2/" +
        encodeURIComponent(encodeURIComponent(code1)),
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSubGroup2: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.dms2key,
            text: item.dms2desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selSubGroup2").on("change", function () {
    var data = $("#selSubGroup2 option:selected", this);
    SelSubGroup3(this.value);
  });
}

function setSubGroup2(dms2key) {
  SelSubGroup2();
  var dms2key = encodeURIComponent(encodeURIComponent(dms2key));
  var relSelect = $("#selSubGroup2");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_PNDFClass/setSubGroup2/" + dms2key,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["dms2desc"], obj["dms2key"], true, true);
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

//PNDF SUB GROUP 3
function SelSubGroup3(code2) {
  $("#selSubGroup3").select2({
    theme: "coreui",
    placeholder: "Select PNDF Sub Group 3",
    allowClear: true,
    encryption: true,
    ajax: {
      url:
        baseURL +
        "Ref_PNDFClass/searchSubGroup3/" +
        encodeURIComponent(encodeURIComponent(code2)),
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSubGroup3: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.dms3key,
            text: item.dms3desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selSubGroup3").on("change", function () {
    var data = $("#selSubGroup3 option:selected", this);
    SelSubGroup4(this.value);
  });
}

function setSubGroup3(dms3key) {
  SelSubGroup3();
  var dms3key = encodeURIComponent(encodeURIComponent(dms3key));
  var relSelect = $("#selSubGroup3");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_PNDFClass/setSubGroup3/" + dms3key,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["dms3desc"], obj["dms3key"], true, true);
    relSelect.append(option).trigger("change");
    relSelect.trigger({
      theme: "coreui",
      type: "select3:select",
      params: {
        data: data,
      },
    });
  });
}

//PNDF SUB GROUP 4
function SelSubGroup4(code3) {
  $("#selSubGroup4").select2({
    theme: "coreui",
    placeholder: "Select PNDF Sub Group 4",
    allowClear: true,
    encryption: true,
    ajax: {
      url:
        baseURL +
        "Ref_PNDFClass/searchSubGroup4/" +
        encodeURIComponent(encodeURIComponent(code3)),
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchSubGroup4: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.dms4key,
            text: item.dms4desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selSubGroup4").on("change", function () {
    var data = $("#selSubGroup4 option:selected", this);
    var rmcode = $("#selSubGroup4").val(this.value);
  });
}

function setSubGroup4(dms4key) {
  SelSubGroup4();
  var dms4key = encodeURIComponent(encodeURIComponent(dms4key));
  var relSelect = $("#selSubGroup4");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_PNDFClass/setSubGroup4/" + dms4key,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["dms4desc"], obj["dms4key"], true, true);
    relSelect.append(option).trigger("change");
    relSelect.trigger({
      theme: "coreui",
      type: "select4:select",
      params: {
        data: data,
      },
    });
  });
}

//DEPARTMENT
function SelDepartment() {
  $("#selDepartment").select2({
    theme: "coreui",
    placeholder: "Select Department",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Department/searchDepartment",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDepartment: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.deptcode,
            text: item.deptname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selDepartment").on("change", function () {
    var data = $("#selDepartment option:selected", this);
    var rmcode = $("#selDepartment").val(this.value);
  });
}

function setDepartment(deptcode) {
  SelDepartment();
  var deptcode = encodeURIComponent(encodeURIComponent(deptcode));
  var relSelect = $("#selDepartment");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Department/setDepartment/" + deptcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["deptname"], obj["deptcode"], true, true);
    relSelect.append(option).trigger("change");
    relSelect.trigger({
      theme: "coreui",
      type: "select4:select",
      params: {
        data: data,
      },
    });
  });
}
//END JUNE

//nicette 5-26-2021

function SelInterviewer() {
  $('[name $="_interviewer"]').select2({
    placeholder: "SELECT INTERVIEWER",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "MSS/searchInterviewer",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchInterviewer: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.employeeid,
            text: item.interviewer,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_emp"]').on("change", function () {
    $("[name $='_emp'] option:selected", this);
    $("#sel_interviewer").val(this.value);
  });
}

function SelMSS() {
  $('[name $="_mss"]').select2({
    allowClear: true,
    placeholder: "SELECT CLASSIFICATION",
    theme: "coreui",
    ajax: {
      url: baseURL + "Ref_MSS/MSS",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchMSS: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.mssikey,
            text: item.mssdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_mss"]').on("change", function () {
    var data = $("[name $='_mss'] option:selected", this);
    $("#sel_mss").val(this.value);
  });
}

function SelChart() {
  $("#selChart").select2({
    theme: "coreui",
    placeholder: "Select Account Code",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Chart/searchChart",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchChart: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.acctcode,
            text: item.acctdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selChart").on("change", function () {
    var data = $("#selChart option:selected", this);
    var rmcode = $("#selChart").val(this.value);
  });
}

function SelBodySite() {
  $("#selBodySite").select2({
    theme: "coreui",
    placeholder: "Select Body Site",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_BodySite/searchBodySite",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchBodySite: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.hbcode,
            text: item.hbdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selBodySite").on("change", function () {
    var data = $("#selBodySite option:selected", this);
    var rmcode = $("#selBodySite").val(this.value);
  });
}

function SelEmployees() {
  $("#selEmployees").select2({
    theme: "coreui",
    placeholder: "Select Employee",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Personnel/searchEmployees",
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
  $("#selEmployees").on("change", function () {
    var data = $("#selEmployees option:selected", this);
    var rmcode = $("#selEmployees").val(this.value);
  });
}

function SelUnitMeasure() {
  $("#selUnitMeasure").select2({
    theme: "coreui",
    placeholder: "Select Unit of Measure",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_UnitsofMeasure/searchUnitMeasure",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchUnitMeasure: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.uomcode,
            text: item.uomdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selUnitMeasure").on("change", function () {
    var data = $("#selUnitMeasure option:selected", this);
    var rmcode = $("#selUnitMeasure").val(this.value);
  });
}

function SelService() {
  $("#selService").select2({
    theme: "coreui",
    placeholder: "Select Type of Service",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Service/searchService",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchService: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.tscode,
            text: item.tsdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selService").on("change", function () {
    var data = $("#selService option:selected", this);
    var rmcode = $("#tscode").val(this.value);
  });
}

function SelBedAccom() {
  $("#selBedAccom").select2({
    theme: "coreui",
    placeholder: "Select Accomodation",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_BedAccom/searchBedAccom",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchBedAccom: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.rmaccikey,
            text: item.rmaccdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selBedAccom").on("change", function () {
    var data = $("#selBedAccom option:selected", this);
    var rmacccod = $("#rmacccod").val(this.value);
  });
}

function SelCharge() {
  $("#selCharge").select2({
    theme: "coreui",
    placeholder: "Select Type of Charge",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Charge/searchCharge",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchCharge: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.chrgcode,
            text: item.chrgdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selCharge").on("change", function () {
    var data = $("#selCharge option:selected", this);
    var chrgcode = $("#chrgcode").val(this.value);
  });
}

function SelTemplate() {
  $("#selTemplate").select2({
    theme: "coreui",
    placeholder: "Select Result Template",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "/Ref_Template/searchTemplate",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchTemplate: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.tempcode,
            text: item.tempdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selTemplate").on("change", function () {
    var data = $("#selTemplate option:selected", this);
    var tempcode = $("#tempcode").val(this.value);
  });
}
//end nicette

function SelIndig() {
  $("#selIndig").select2({
    theme: "coreui",
    placeholder: "Select Tribe",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "/Typhoid/Indigenous",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchIndigenous: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.ipcode,
            text: item.ipdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selIndig").on("change", function () {
    var data = $("#selIndig option:selected", this);
  });
}

/* function SelFireworks() {
	$('#selFire').select2({
		theme: 'coreui',
		placeholder: 'Select Fireworks',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "/Fireworks/fireworks",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchReligion: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.firecracker_code,
						text: item.description
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selFire').on('change', function () {
		var data = $("#selFire option:selected", this);
		var rmcode = $("#firecracker_code").val(this.value);
	});
} */

function SelFacilities() {
  $("#selFac").select2({
    theme: "coreui",
    placeholder: "Select Facility",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Facilities/searchFacility",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchFacility: params.term,
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
  $("#selFac").on("change", function () {
    var data = $("#selFac option:selected", this);
    var hfhudcode = $("#hfhudcode").val(this.value);
  });
}

function SelFaci() {
  $('[name $="_Fac"]').select2({
    theme: "coreui",
    placeholder: "Select Facility",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Facilities/searchFacility",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchFacility: params.term,
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
  $('[name $="_Fac"]').on("change", function () {
    var data = $("[name $='_Fac'] option:selected", this);
    var hfhudcode = $("#hfhudcode").val(this.value);
  });
}

function SelFacilities2() {
  $("#selFac2").select2({
    theme: "coreui",
    placeholder: "Select Facility",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Facilities/searchFacility",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchFacility: params.term,
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
  $("#selFac2").on("change", function () {
    var data = $("#selFac2 option:selected", this);
    var hfhudcode = $("#hfhudcode").val(this.value);
  });
}

function SelTypeofService(form) {
  form.find("#selTos").select2({
    theme: "coreui ",

    placeholder: "Type of Service",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_TypeOfService/searchTypeofService",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchTypeOfService: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.tscode,
            text: item.tsdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selTos").on("change", function () {
    var data = $("#selTos option:selected", this);
    var tscode = $("#tscode").val(this.value);
  });
}

function setReligion(relCode) {
  SelReligion();
  var relSelect = $("#selRel");
  if (relCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Religion/setReligion/" + relCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["reldesc"], obj["relcode"], true, true);
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
}

//8/25/2021/
function setReligionPerp(relCode) {
  SelReligionPerp();
  var relSelect = $("#selRelPerp");
  $.ajax({
    type: "POST",
    url: baseURL + "Religion/setReligionPerp/" + relCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["reldesc"], obj["relcode"], true, true);
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
//nicette 5/26/2021

function setInterviewer(employeeid) {
  SelInterviewer();
  var relSelect = $("#sel_interviewer");
  $.ajax({
    type: "POST",
    url: baseURL + "MSS/setInterviewer/" + employeeid,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["lastname"], obj["employeeid"], true, true);
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

function setMSS(mssikey) {
  SelMSS();
  var relSelect = $("#sel_mss");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_MSS/setMSS/" + mssikey,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["mssdesc"], obj["mssikey"], true, true);
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

function setFireworks(firecracker_code) {
  SelFireworks();
  var relSelect = $("#selFire");
  $.ajax({
    type: "POST",
    url: baseURL + "Fireworks/setFireworks/" + firecracker_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(
      obj["description"],
      obj["firecracker_code"],
      true,
      true
    );
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

function setIndigenous(ipcode) {
  SelIndig();
  if (ipcode) {
    var relSelect = $("#selIndig");
    $.ajax({
      type: "POST",
      url: baseURL + "Typhoid/setIndigenous/" + ipcode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["ipdesc"], obj["ipcode"], true, true);
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
}
//Jobert 01-28-2022-------------------->
function setMorbidity(diagrp_code) {
  SelMorbidity();
  var relSelect = $("#selMorbid");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_MorbidityMortality/setMorbidity/" + diagrp_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["diagrp_desc"], obj["diagrp_code"], true, true);
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
function setMortality(diagrp_code) {
  SelMortality();
  var relSelect = $("#selMortal");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_MorbidityMortality/setMortality/" + diagrp_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["diagrp_desc"], obj["diagrp_code"], true, true);
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
//--------------end----------------------->
function setFacility(hfhudcode) {
  SelFacilities();
  var relSelect = $("#selFac");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Facilities/setFacility/" + hfhudcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["hfhudname"], obj["hfhudcode"], true, true);
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

function setHospital(hfhudcode) {
  SelHospital();
  var relSelect = $("#selHospital");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Facilities/setFacility/" + hfhudcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["hfhudname"], obj["hfhudcode"], true, true);
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

function setFacility2(hfhudcode) {
  SelFacilities2();
  var relSelect = $("#selFac2");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Facilities/setFacility/" + hfhudcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["hfhudname"], obj["hfhudcode"], true, true);
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

function setFacility3(hfhudcode) {
  SelFacilities2();
  var relSelect = $("#selFac3");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Facilities/setFacility/" + hfhudcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["hfhudname"], obj["hfhudcode"], true, true);
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

//09-16-2021
function setEmployees(employeeid) {
  SelEmployees();
  var relSelect = $("#selEmployees");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Personnel/setEmployees/" + employeeid,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["fullname"], obj["employeeid"], true, true);
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

function setCharge(chrgcode) {
  SelCharge();
  var relSelect = $("#selCharge");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Charge/setCharge/" + chrgcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["chrgdesc"], obj["chrgcode"], true, true);
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

function setChart(acctcode) {
  SelChart();

  var relSelect = $("#selChart");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Chart/setChart/" + acctcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["acctdesc"], obj["acctcode"], true, true);
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

function setBodySite(hbcode) {
  SelBodySite();

  var relSelect = $("#selBodySite");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_BodySite/setBodySite/" + hbcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["hbdesc"], obj["hbcode"], true, true);
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

function setUnitMeasure(uomcode) {
  SelUnitMeasure();
  var uomcode = encodeURIComponent(encodeURIComponent(uomcode));
  var relSelect = $("#selUnitMeasure");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_UnitsofMeasure/setUnitMeasure/" + uomcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["uomdesc"], obj["uomcode"], true, true);
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

function setService(tscode) {
  SelService();
  var relSelect = $("#selService");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Service/setService/" + tscode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["tsdesc"], obj["tscode"], true, true);
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
function setOwner(howner_code) {
  SelOwner();
  var relSelect = $("#selOwner");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Owner/setOwner/" + howner_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["howner_name"], obj["howner_code"], true, true);
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

function setBedAccom(rmaccikey) {
  SelBedAccom();
  var relSelect = $("#selBedAccom");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_BedAccom/setBedAccom/" + rmaccikey,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["rmaccdesc"], obj["rmaccikey"], true, true);
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

function SelOwner() {
  $("#selOwner").select2({
    theme: "coreui",
    placeholder: "Select Owner",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Owner/searchOwner",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchOwner: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.howner_code,
            text: item.howner_name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selOwner").on("change", function () {
    var data = $("#selOwner option:selected", this);
    var code = $("#code").val(this.value);
  });
}

function SelHospital() {
  $("#selHospital").select2({
    theme: "coreui",
    placeholder: "Select Facility",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Facilities/searchFacility",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchFacility: params.term,
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
  $("#selHospital").on("change", function () {
    var data = $("#selHospital option:selected", this);
    var hfhudcode = $("#hfhudcode").val(this.value);
    var code = $("#hfhudcode").val();
    HospitalAddress(code);
  });
}

function HospitalAddress(hfhudcode) {
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Hospital/HospitalAddress/" + hfhudcode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      var obj = $.parseJSON(data);
      var str = obj["regcode"].substring(0, 2);
      $("#hfhudname").val(obj["hfhudname"]);
      setRegion(str);
      setRegion(obj["provcode"]);
      $("#selProv").removeAttr("disabled");
      setCity(obj["ctycode"]);
      $("#selCity").removeAttr("disabled");
      setBrgy(obj["brgy"]);
      $("#selBrgy").removeAttr("disabled");
    },
  });
}

/* function SelBedAccom() {
	$('#selBedAccom').select2({
		theme: 'coreui',
		placeholder: 'Select Accomodation',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "Ref_BedAccom/searchBedAccom",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchBedAccom: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.rmaccikey,
						text: item.rmaccdesc
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selBedAccom').on('change', function () {
		var data = $("#selBedAccom option:selected", this);
		var rmaccikey = $("#rmaccikey").val(this.value);
	});
} */

function setTemplate(tempcode) {
  SelTemplate();
  var relSelect = $("#selTemplate");
  $.ajax({
    type: "POST",
    url: baseURL + "Ref_Template/setTemplate/" + tempcode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["tempdesc"], obj["tempcode"], true, true);
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
//end nicette

function SelWard(Sex) {
  $("#selWar").select2({
    placeholder: "WARD",
    theme: "coreui form-control-lg",
    minimumInputLength: 0,
    allowClear: true,
    ajax: {
      url: baseURL + "/Admission/searchWard/" + Sex,
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
  $("#selWar").on("change", function () {
    $("#selWar option:selected", this);
    SelRoom(this.value);

    $("#selRoom").removeAttr("disabled");
  });
}

function SelRoom(WardCode) {
  $("#selRoom").select2({
    placeholder: "ROOM",
    theme: "coreui form-control-lg",
    minimumInputLength: 0,
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "/Admission/searchRoom/" + WardCode,
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

  $("#selRoom").on("change", function () {
    $("#selRoom option:selected", this);
    $("#selBed").removeAttr("disabled");
    SelBed(this.value);
  });
}

function SelBed(roomCode) {
  $("#selBed").select2({
    placeholder: "BED",
    theme: "coreui form-control-lg",
    minimumInputLength: 0,
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "/Admission/searchBed/" + roomCode,
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

  $("#selBed").on("change", function () {
    var data = $("#selBed option:selected", this);
    var bdcode = $("#bdcode").val(this.value);
  });
}

function SelMorbidity() {
  $("#selMorbid").select2({
    theme: "coreui",
    placeholder: "Morbidity ",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "/Ref_MorbidityMortality/MorbidMortal",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchMorbidMortal: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.diagrp_code,
            text: item.diagrp_desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selMorbid").on("change", function () {
    var data = $("#selMorbid option:selected", this);
  });
}

function SelMortality() {
  $("#selMortal").select2({
    theme: "coreui",
    placeholder: "Mortality ",
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "/Ref_MorbidityMortality/MorbidMortal",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchMorbidMortal: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.diagrp_code,
            text: item.diagrp_desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selMortal").on("change", function () {
    var data = $("#selMortal option:selected", this);
    var mortal_code = $("#mortal_code").val(this.value);
  });
}

//////////Family Planning april 5, 2022 -NCO

function SelFamilyMethod() {
  $('[name $="_selFamilyMethod"]').select2({
    theme: "coreui",
    placeholder: "Select Family Method",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/FamilyPlanning/searchFamilyMethod",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchFamilyMethod: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.familyplan_method_code,
            text: item.familyplan_method_desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_selFamilyMethod"]').on("change", function () {
    var data = $('[name $="_selFamilyMethod"] option:selected', this);
    var rmcode = $("#familyplan_method_code").val(this.value);
  });
}

function setFamilyMethod(familyplan_method_code) {
  SelFamilyMethod();
  var relSelect = $("#_selFamilyMethod");
  $.ajax({
    type: "POST",
    url: baseURL + "FamilyPlanning/setFamilyMethod/" + familyplan_method_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(
      obj["familyplan_method_desc"],
      obj["familyplan_method_code"],
      true,
      true
    );
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

function setFamilyMethod2(familyplan_method_code) {
  SelFamilyMethod();
  var relSelect = $("#assess_selFamilyMethod");
  $.ajax({
    type: "POST",
    url: baseURL + "FamilyPlanning/setFamilyMethod/" + familyplan_method_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(
      obj["familyplan_method_desc"],
      obj["familyplan_method_code"],
      true,
      true
    );
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

function SelFamilyType() {
  $('[name $="_selFamilyType"]').select2({
    theme: "coreui",
    placeholder: "Select Type of Client",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "/FamilyPlanning/searchFamilyType",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchFamilyType: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.familyplan_type_code,
            text: item.familyplan_type_desc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('[name $="_selFamilyType"]').on("change", function () {
    var data = $('[name $="_selFamilyType"] option:selected', this);
    var rmcode = $("#familyplan_type_code").val(this.value);
  });
}

function setFamilyType(familyplan_type_code) {
  SelFamilyType();
  var relSelect = $("#_selFamilyType");
  $.ajax({
    type: "POST",
    url: baseURL + "FamilyPlanning/setFamilyType/" + familyplan_type_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(
      obj["familyplan_type_desc"],
      obj["familyplan_type_code"],
      true,
      true
    );
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

function setFamilyType2(familyplan_type_code) {
  SelFamilyType();
  var relSelect = $("#client_selFamilyType");
  $.ajax({
    type: "POST",
    url: baseURL + "FamilyPlanning/setFamilyType/" + familyplan_type_code,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(
      obj["familyplan_type_desc"],
      obj["familyplan_type_code"],
      true,
      true
    );
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



function selectExamAccom() {

  $("#selSupat").select2({
    placeholder: "Select",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Ref_Procedures/selsetupExam",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchParam: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.rmaccikey,
            text: item.rmaccdesc,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $('#selSupat').on("change", function () {
    var data = $("#selSupat option:selected", this.value);
  });
}