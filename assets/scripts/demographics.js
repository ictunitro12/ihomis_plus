function City() {
  $("#selCity").off();
  $("#selCity").select2({
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

  $("#selCity").on("change", function () {
    $(this).valid();
    var data = $("#selCity option:selected", this);
    $("#selBrgy").val("").trigger("change");
    var citycode = $("#citycode").val(this.value);
    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);
    var same = $("#checkAddress").is(":checked");

    if (same == true) {
      setRegion(regCode);
      setProv(provCode);
      zip(regCode, this.value);
      Barangay(this.value);
      setCity2(this.value);
      setRegion2(regCode);
      setProv2(provCode);
      //setZip2(regCode,this.value);
      Barangay2(this.value);
    } else if (same == false) {
      setRegion(regCode);
      setProv(provCode);
      zip(regCode, this.value);
      Barangay(this.value);
    }
  });
}

function City2() {
  $("#selCityp").off();
  $("#selCityp").select2({
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

  $("#selCityp").on("change", function () {
    $(this).valid();
    var data = $("#selCityp option:selected", this);
    var citycode = $("#citycode").val(this.value);
    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);
    setRegion2(regCode);
    setProv2(provCode);
    zip2(regCode, this.value);
    Barangay2(this.value);
  });
}

function zip(regCode, citycode) {
  if (regCode == "13") {
    setZipNcr(citycode);
    District(citycode);
    $("#selDist").empty().trigger("change");
  } else {
    $("#selDist").empty().trigger("change");
    $("#selDist").prop("disabled", true);
    setZipCode(citycode);
  }
}

function zip2(regCode, citycode) {
  if (regCode == "13") {
    setZipNcr2(citycode);
    District2(citycode);
    $("#selDistp").empty().trigger("change");
  } else {
    $("#selDistp").empty().trigger("change");
    $("#selDistp").prop("disabled", true);
    setZipCode2(citycode);
  }
}

function setZipNcr(cityCode) {
  var zipSelect = $("#selDist");
  $.ajax({
    type: "POST",
    url: baseURL + "/Demographics/setDist/" + cityCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["distname"], obj["zipcode"], true, true);
    zipSelect.append(option).trigger("change");
    zipSelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setZipNcr2(cityCode) {
  var zipSelect = $("#selDistp");
  $.ajax({
    type: "POST",
    url: baseURL + "/Demographics/setDist/" + cityCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["distname"], obj["zipcode"], true, true);
    zipSelect.append(option).trigger("change");
    zipSelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setZipCode(cityCode) {
  var Obj = new Object();
  Obj.url = baseURL + "Demographics/setZip/" + cityCode;
  Obj.data = "JSON";
  Obj.type = "POST";
  var row = Information(Obj);
  $("#info_zip").val(row[0]["ctyzipcode"]);
}

function setZipCode2(cityCode) {
  var Obj = new Object();
  Obj.url = baseURL + "Demographics/setZip/" + cityCode;
  Obj.data = "JSON";
  Obj.type = "POST";
  var row = Information(Obj);
  if (row.length) {
    $("#info_zipp").val(row[0]["ctyzipcode"]);
  }
}

function setRegion(regCode) {
  var regionSet = $("#selReg");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "/Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
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

function setRegion2(regCode) {
  var regionSet = $("#selRegp");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "/Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
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

function setProv(provId) {
  var str = provId.substring(0, 2);
  var provSet = $("#selProv");
  if (provId) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setProvince/" + provId,
    }).then(function (data) {
      var obj = $.parseJSON(data);
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

function setProv2(provId) {
  var str = provId.substring(0, 2);
  var provSet = $("#selProvp");
  if (provId) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setProvince/" + provId,
    }).then(function (data) {
      var obj = $.parseJSON(data);
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

function setCity(cityId) {
  City();
  var citySelect = $("#selCity");
  if (cityId) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setCity/" + cityId,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
      citySelect.append(option).trigger("change");
      citySelect.trigger({
        theme: "coreui",
        type: "select2:select",
        params: {
          data: data,
        },
      });
    });
  }
}

function setCity2(cityId) {
  City2();
  var citySelect = $("#selCityp");
  if (cityId) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setCity/" + cityId,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
      citySelect.append(option).trigger("change");
      citySelect.trigger({
        theme: "coreui",
        type: "select2:select",
        params: {
          data: data,
        },
      });
    });
  }
}

function setBrgy(brgyCode) {
  var brgySelect = $("#selBrgy");
  if (brgyCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setBrgy/" + brgyCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
      brgySelect.append(option).trigger("change");
      brgySelect.trigger({
        theme: "coreui",
        type: "select2:select",
        params: {
          data: data,
        },
      });
    });
  }
}

function setBrgy2(brgyCode) {
  var brgySelect = $("#selBrgyp");
  if (brgyCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setBrgy/" + brgyCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
      brgySelect.append(option).trigger("change");
      brgySelect.trigger({
        theme: "coreui",
        type: "select2:select",
        params: {
          data: data,
        },
      });
    });
  }
}

function Region(regcode) {
  $("#selReg").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Region",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchRegion" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchRegion: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.regcode, text: item.regname });
        });
        return { results: results };
      },
    },
  });
  $("#selReg").on("change", function () {
    var data = $("#selReg option:selected", this);
    var regcode = $("#regcode").val(this.value);
  });
}

function Province(regcode) {
  $("#selProv").select2({
    enabled: true,
    placeholder: "Province",
    theme: "coreui",
    allowClear: true,
    triggerChange: true,
    ajax: {
      url: baseURL + "Demographics/searchProvince/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchProvince: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.provcode,
            text: item.provname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selProv").on("change", function () {
    var data = $("#selProv option:selected", this);
    var provcode = $("#provcode").val(this.value);
    $("#selCity").removeAttr("disabled");
    City(this.value);
    setZip(this.value);
  });
}

function District(citycode) {
  $("#selDist").off();
  $("#selDist").select2({
    enabled: true,
    placeholder: "District",
    theme: "coreui",
    allowClear: true,
    ajax: {
      url: baseURL + "/Demographics/searchDistrict/" + citycode,
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
  $("#selDist").removeAttr("disabled");
  $("#selDist").on("change", function () {
    var data = $("#selDist option:selected", this);
    var distcode = $("#distcode").val(this.value);

    $("#info_zip").val(this.value);
  });
}

function District2(citycode) {
  $("#selDistp").off();
  $("#selDistp").select2({
    enabled: true,
    placeholder: "District",
    theme: "coreui",
    allowClear: true,
    ajax: {
      url: baseURL + "/Demographics/searchDistrict/" + citycode,
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
  $("#selDistp").removeAttr("disabled");
  $("#selDistp").on("change", function () {
    var data = $("#selDistp option:selected", this);
    var distcode = $("#distcode").val(this.value);

    $("#info_zipp").val(this.value);
  });
}

function Barangay(citycode) {
  $("#selBrgy").select2({
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
  $("#selBrgy").removeAttr("disabled");
  $("#selBrgy").on("change", function () {
    var data = $("#selBrgy option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
    var same = $("#checkAddress").is(":checked");
    if (same == true) {
      setBrgy2(this.value);
    } else if (same == false) {
      $("#selBrgyp").val("").trigger("change");
    }
  });
}

function Barangay2(citycode) {
  $("#selBrgyp").select2({
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
  $("#selBrgyp").removeAttr("disabled");
  $("#selBrgyp").on("change", function () {
    var data = $("#selBrgy option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
  });
}

/* function zip(regCode,citycode)
{
	 if(regCode=='13'){
	
		 setZipNcr(citycode);
		 District(citycode);
		 $("#selDist").empty().trigger('change');
	 }else{
		  $("#selDist").empty().trigger('change');
		  $("#selDist").prop('disabled',true);
		 setZipCode(citycode);
	 }
	
	} */

//Chris Lepto
function CityLepto() {
  $("#selCityLepto").off();
  $("#selCityLepto").select2({
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
  $("#selCityLepto").on("change", function () {
    $(this).valid();
    var data = $("#selCityLepto option:selected", this);
    var citycode = $("#citycode").val(this.value);

    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);

    setRegionLepto(regCode);
    setProvLepto(provCode);
    BarangayLepto(this.value);
  });
}

function RegionLepto(regcode) {
  $("#selRegLepto").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Region",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchRegion/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchRegion: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.regcode, text: item.regname });
        });
        return { results: results };
      },
    },
  });
  $("#selRegLepto").on("change", function () {
    var data = $("#selRegLepto option:selected", this);
    var regcode = $("#regcode").val(this.value);
  });
}

function ProvinceLepto(regcode) {
  $("#selProvLepto").select2({
    enabled: true,
    placeholder: "Province",
    theme: "coreui",
    allowClear: true,
    triggerChange: true,
    ajax: {
      url: baseURL + "/Demographics/searchProvince/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchProvince: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.provcode,
            text: item.provname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selProvLepto").on("change", function () {
    var data = $("#selProvLepto option:selected", this);
    var provcode = $("#provcode").val(this.value);
    $("#selCityLepto").removeAttr("disabled");
    CityLepto(this.value);
    setZip(this.value);
  });
}

function BarangayLepto(citycode) {
  $("#selBrgyLepto").select2({
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
  $("#selBrgyLepto").removeAttr("disabled");
  $("#selBrgyLepto").on("change", function () {
    var data = $("#selBrgyLepto option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
  });
}

function setRegionLepto(regCode) {
  var regionSetLepto = $("#selRegLepto");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["regname"], obj["regcode"], true, true);
      regionSetLepto.append(option).trigger("change");
      regionSetLepto.trigger({
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

function setProvLepto(provId) {
  var str = provId.substring(0, 2);
  var provSetLepto = $("#selProvLepto");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setProvince/" + provId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["provname"], obj["provcode"], true, true);
    provSetLepto.append(option).trigger("change");
    provSetLepto.trigger({
      theme: "coreui",
      disabled: true,
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setCityLepto(cityId) {
  CityLepto();
  var citySelectLepto = $("#selCityLepto");

  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setCity/" + cityId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
    citySelectLepto.append(option).trigger("change");
    citySelectLepto.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setBrgyLepto(brgyCode) {
  BarangayLepto();
  var brgySelect = $("#selBrgyLepto");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setBrgy/" + brgyCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
    brgySelect.append(option).trigger("change");
    brgySelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

/* function setZipNcr(cityCode)
{
	var zipSelect = $('#selDist');
	$.ajax({
		type: 'POST',
		url: baseURL+'/Demographics/setDist/' + cityCode,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['distname'], obj['zipcode'], true, true);
		zipSelect.append(option).trigger('change');
		zipSelect.trigger({
			theme:'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
} */

/* function setZipCode(cityCode)
{
		var Obj = new Object();
		Obj.url = baseURL+"Demographics/setZip/"+cityCode;
		Obj.data = "JSON";
		Obj.type = "POST";
	var row=Information(Obj);
	$("#info_zip").val(row[0]['ctyzipcode']);
} */

/* function setRegion(regCode)
{
	var regionSet = $('#selReg');
	$.ajax({
		type: 'POST',
		url: baseURL+'Demographics/setRegion/' + regCode,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['regname'], obj['regcode'], true, true);
		regionSet.append(option).trigger('change');
		regionSet.trigger({
			theme:'coreui',
			disabled:true,
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
} */

/* function setProv(provId)
{
	var str = provId.substring(0,2);
	var provSet = $('#selProv');
	$.ajax({
		type: 'POST',
		url: baseURL+'Demographics/setProvince/' + provId,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['provname'], obj['provcode'], true, true);
		provSet.append(option).trigger('change');
		provSet.trigger({
			theme:'coreui',
			disabled:true,
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
} */

/* function setCity(cityId)
{
	
	City();
	var citySelect = $('#selCity');

	$.ajax({
		type: 'POST',
		url: baseURL+'Demographics/setCity/' + cityId,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['ctyname'], obj['ctycode'], true, true);
		citySelect.append(option).trigger('change');
		citySelect.trigger({
			theme:'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
} */

/* function setBrgy(brgyCode)
{
	Barangay();
	var brgySelect = $('#selBrgy');
	$.ajax({
		type: 'POST',
		url: baseURL+'Demographics/setBrgy/' + brgyCode,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['bgyname'], obj['bgycode'], true, true);
		brgySelect.append(option).trigger('change');
		brgySelect.trigger({
			theme:'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});

	
} */

//nicette

//nicette fwri
function CityInj() {
  $("#selCityInj").off();
  $("#selCityInj").select2({
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
  $("#selCityInj").on("change", function () {
    $(this).valid();
    var data = $("#selCityInj option:selected", this);
    var citycode = $("#citycode").val(this.value);

    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);

    setRegionInj(regCode);
    setProvInj(provCode);
    BarangayInj(this.value);
  });
}

function setRegionInj(regCode) {
  var regionSetInj = $("#selRegInj");

  if (regCode.length == 0) {
    regionSetInj.val("");
    return true;
  }
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["regname"], obj["regcode"], true, true);
      regionSetInj.append(option).trigger("change");
      regionSetInj.trigger({
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

function setProvInj(provId) {
  var str = provId.substring(0, 2);
  var provSetInj = $("#selProvInj");

  if (provId.length == 0) {
    provSetInj.val("");
    return true;
  }

  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setProvince/" + provId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["provname"], obj["provcode"], true, true);
    provSetInj.append(option).trigger("change");
    provSetInj.trigger({
      theme: "coreui",
      disabled: true,
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setCityInj(cityId) {
  CityInj();
  var citySelectInj = $("#selCityInj");

  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setCity/" + cityId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
    citySelectInj.append(option).trigger("change");
    citySelectInj.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setBrgyInj(brgyCode) {
  BarangayInj();
  var brgySelectInj = $("#selBrgyInj");

  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setBrgy/" + brgyCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
    brgySelectInj.append(option).trigger("change");
    brgySelectInj.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function RegionInj(regcode) {
  $("#selRegInj").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Region",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchRegion/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchRegion: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.regcode, text: item.regname });
        });
        return { results: results };
      },
    },
  });
  $("#selRegInj").on("change", function () {
    var data = $("#selRegInj option:selected", this);
    var regcode = $("#regcode").val(this.value);
  });
}

function ProvinceInj(regcode) {
  $("#selProvInj").select2({
    enabled: true,
    placeholder: "Province",
    theme: "coreui",
    allowClear: true,
    triggerChange: true,
    ajax: {
      url: baseURL + "/Demographics/searchProvince/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchProvince: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.provcode,
            text: item.provname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selProvInj").on("change", function () {
    var data = $("#selProvInj option:selected", this);
    var provcode = $("#provcode").val(this.value);
    $("#selCityInj").removeAttr("disabled");
    CityInj(this.value);
    setZip(this.value);
  });
}

function BarangayInj(citycode) {
  $("#selBrgyInj").select2({
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
  $("#selBrgyInj").removeAttr("disabled");
  $("#selBrgyInj").on("change", function () {
    var data = $("#selBrgyInj option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
  });
}

//oneiss
function CityTemp() {
  $("#selCityTemp").off();
  $("#selCityTemp").select2({
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
  $("#selCityTemp").on("change", function () {
    $(this).valid();
    var data = $("#selCityTemp option:selected", this);
    var citycode = $("#citycode").val(this.value);

    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);

    setRegionTemp(regCode);
    setProvTemp(provCode);
    BarangayTemp(this.value);
  });
}

function RegionTemp(regcode) {
  $("#selRegTemp").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Region",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchRegion/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchRegion: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.regcode, text: item.regname });
        });
        return { results: results };
      },
    },
  });
  $("#selRegTemp").on("change", function () {
    var data = $("#selRegTemp option:selected", this);
    var regcode = $("#regcode").val(this.value);
  });
}

function ProvinceTemp(regcode) {
  $("#selProvTemp").select2({
    enabled: true,
    placeholder: "Province",
    theme: "coreui",
    allowClear: true,
    triggerChange: true,
    ajax: {
      url: baseURL + "/Demographics/searchProvince/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchProvince: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.provcode,
            text: item.provname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selProvTemp").on("change", function () {
    var data = $("#selProvTemp option:selected", this);
    var provcode = $("#provcode").val(this.value);
    $("#selCityTemp").removeAttr("disabled");
    CityTemp(this.value);
    setZip(this.value);
  });
}

function BarangayTemp(citycode) {
  $("#selBrgyTemp").select2({
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
  $("#selBrgyTemp").removeAttr("disabled");
  $("#selBrgyTemp").on("change", function () {
    var data = $("#selBrgyTemp option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
  });
}

function setRegionTemp(regCode) {
  var regionSetTemp = $("#selRegTemp");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["regname"], obj["regcode"], true, true);
      regionSetTemp.append(option).trigger("change");
      regionSetTemp.trigger({
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

function setProvTemp(provId) {
  var str = provId.substring(0, 2);
  var provSetTemp = $("#selProvTemp");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setProvince/" + provId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["provname"], obj["provcode"], true, true);
    provSetTemp.append(option).trigger("change");
    provSetTemp.trigger({
      theme: "coreui",
      disabled: true,
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setCityTemp(cityId) {
  CityTemp();
  var citySelectTemp = $("#selCityTemp");

  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setCity/" + cityId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
    citySelectTemp.append(option).trigger("change");
    citySelectTemp.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setBrgyTemp(brgyCode) {
  BarangayTemp();
  var brgySelect = $("#selBrgyTemp");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setBrgy/" + brgyCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
    brgySelect.append(option).trigger("change");
    brgySelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

//contact
function CityContact() {
  $("#selCityContact").off();
  $("#selCityContact").select2({
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
  $("#selCityContact").on("change", function () {
    $(this).valid();
    var data = $("#selCityContact option:selected", this);
    var citycode = $("#citycode").val(this.value);

    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);

    setRegionContact(regCode);
    setProvContact(provCode);
    BarangayContact(this.value);
  });
}

function RegionContact(regcode) {
  $("#selRegContact").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Region",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchRegion/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchRegion: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.regcode, text: item.regname });
        });
        return { results: results };
      },
    },
  });
  $("#selRegContact").on("change", function () {
    var data = $("#selRegContact option:selected", this);
    var regcode = $("#regcode").val(this.value);
  });
}

function ProvinceContact(regcode) {
  $("#selProvContact").select2({
    enabled: true,
    placeholder: "Province",
    theme: "coreui",
    allowClear: true,
    triggerChange: true,
    ajax: {
      url: baseURL + "/Demographics/searchProvince/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchProvince: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.provcode,
            text: item.provname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selProvContact").on("change", function () {
    var data = $("#selProvContact option:selected", this);
    var provcode = $("#provcode").val(this.value);
    $("#selCityContact").removeAttr("disabled");
    CityContact(this.value);
    setZip(this.value);
  });
}

function BarangayContact(citycode) {
  $("#selBrgyContact").select2({
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
  $("#selBrgyContact").removeAttr("disabled");
  $("#selBrgyContact").on("change", function () {
    var data = $("#selBrgyContact option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
  });
}

function setRegionContact(regCode) {
  var regionSetContact = $("#selRegContact");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["regname"], obj["regcode"], true, true);
      regionSetContact.append(option).trigger("change");
      regionSetContact.trigger({
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

function setProvContact(provId) {
  var str = provId.substring(0, 2);
  var provSetContact = $("#selProvContact");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setProvince/" + provId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["provname"], obj["provcode"], true, true);
    provSetContact.append(option).trigger("change");
    provSetContact.trigger({
      theme: "coreui",
      disabled: true,
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setCityContact(cityId) {
  CityContact();
  var citySelectContact = $("#selCityContact");

  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setCity/" + cityId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
    citySelectContact.append(option).trigger("change");
    citySelectContact.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setBrgyContact(brgyCode) {
  BarangayContact();
  var brgySelect = $("#selBrgyContact");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setBrgy/" + brgyCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
    brgySelect.append(option).trigger("change");
    brgySelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

//consult
function CityConsult() {
  $("#selCityConsult").off();
  $("#selCityConsult").select2({
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
  $("#selCityConsult").on("change", function () {
    $(this).valid();
    var data = $("#selCityConsult option:selected", this);
    var citycode = $("#citycode").val(this.value);

    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);

    setRegionConsult(regCode);
    setProvConsult(provCode);
    BarangayConsult(this.value);
  });
}

function RegionConsult(regcode) {
  $("#selRegConsult").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Region",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchRegion/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchRegion: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.regcode, text: item.regname });
        });
        return { results: results };
      },
    },
  });
  $("#selRegConsult").on("change", function () {
    var data = $("#selRegConsult option:selected", this);
    var regcode = $("#regcode").val(this.value);
  });
}

function ProvinceConsult(regcode) {
  $("#selProvConsult").select2({
    enabled: true,
    placeholder: "Province",
    theme: "coreui",
    allowClear: true,
    triggerChange: true,
    ajax: {
      url: baseURL + "/Demographics/searchProvince/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchProvince: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.provcode,
            text: item.provname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selProvConsult").on("change", function () {
    var data = $("#selProvConsult option:selected", this);
    var provcode = $("#provcode").val(this.value);
    $("#selCityConsult").removeAttr("disabled");
    CityConsult(this.value);
    setZip(this.value);
  });
}

function BarangayConsult(citycode) {
  $("#selBrgyConsult").select2({
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
  $("#selBrgyConsult").removeAttr("disabled");
  $("#selBrgyConsult").on("change", function () {
    var data = $("#selBrgyConsult option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
  });
}

function setRegionConsult(regCode) {
  var regionSetConsult = $("#selRegConsult");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["regname"], obj["regcode"], true, true);
      regionSetConsult.append(option).trigger("change");
      regionSetConsult.trigger({
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

function setProvConsult(provId) {
  var str = provId.substring(0, 2);
  var provSetConsult = $("#selProvConsult");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setProvince/" + provId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["provname"], obj["provcode"], true, true);
    provSetConsult.append(option).trigger("change");
    provSetConsult.trigger({
      theme: "coreui",
      disabled: true,
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setCityConsult(cityId) {
  CityConsult();
  var citySelectConsult = $("#selCityConsult");

  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setCity/" + cityId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
    citySelectConsult.append(option).trigger("change");
    citySelectConsult.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setBrgyConsult(brgyCode) {
  BarangayConsult();
  var brgySelect = $("#selBrgyConsult");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setBrgy/" + brgyCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
    brgySelect.append(option).trigger("change");
    brgySelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

//complete
function CityComplete() {
  $("#selCityComplete").off();
  $("#selCityComplete").select2({
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
  $("#selCityComplete").on("change", function () {
    $(this).valid();
    var data = $("#selCityComplete option:selected", this);
    var citycode = $("#citycode").val(this.value);

    var regCode = this.value.substring(0, 2);
    var provCode = this.value.substring(0, 4);

    setRegionComplete(regCode);
    setProvComplete(provCode);
    BarangayComplete(this.value);
  });
}

function RegionComplete(regcode) {
  $("#selRegComplete").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Region",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Demographics/searchRegion/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchRegion: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.regcode, text: item.regname });
        });
        return { results: results };
      },
    },
  });
  $("#selRegComplete").on("change", function () {
    var data = $("#selRegComplete option:selected", this);
    var regcode = $("#regcode").val(this.value);
  });
}

function ProvinceComplete(regcode) {
  $("#selProvComplete").select2({
    enabled: true,
    placeholder: "Province",
    theme: "coreui",
    allowClear: true,
    triggerChange: true,
    ajax: {
      url: baseURL + "/Demographics/searchProvince/" + regcode,
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { searchProvince: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.provcode,
            text: item.provname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
  $("#selProvComplete").on("change", function () {
    var data = $("#selProvComplete option:selected", this);
    var provcode = $("#provcode").val(this.value);
    $("#selCityComplete").removeAttr("disabled");
    CityComplete(this.value);
    setZip(this.value);
  });
}

function BarangayComplete(citycode) {
  $("#selBrgyComplete").select2({
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
  $("#selBrgyComplete").removeAttr("disabled");
  $("#selBrgyComplete").on("change", function () {
    var data = $("#selBrgyComplete option:selected", this);
    $(this).valid();
    var bgyCode = this.value.substr(0, 6);
  });
}

function setRegionComplete(regCode) {
  var regionSetComplete = $("#selRegComplete");
  if (regCode) {
    $.ajax({
      type: "POST",
      url: baseURL + "Demographics/setRegion/" + regCode,
    }).then(function (data) {
      var obj = $.parseJSON(data);
      var option = new Option(obj["regname"], obj["regcode"], true, true);
      regionSetComplete.append(option).trigger("change");
      regionSetComplete.trigger({
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

function setProvComplete(provId) {
  var str = provId.substring(0, 2);
  var provSetComplete = $("#selProvComplete");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setProvince/" + provId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["provname"], obj["provcode"], true, true);
    provSetComplete.append(option).trigger("change");
    provSetComplete.trigger({
      theme: "coreui",
      disabled: true,
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setCityComplete(cityId) {
  CityComplete();
  var citySelectComplete = $("#selCityComplete");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setCity/" + cityId,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["ctyname"], obj["ctycode"], true, true);
    citySelectComplete.append(option).trigger("change");
    citySelectComplete.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function setBrgyComplete(brgyCode) {
  BarangayComplete();
  var brgySelect = $("#selBrgyComplete");
  $.ajax({
    type: "POST",
    url: baseURL + "Demographics/setBrgy/" + brgyCode,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj["bgyname"], obj["bgycode"], true, true);
    brgySelect.append(option).trigger("change");
    brgySelect.trigger({
      theme: "coreui",
      type: "select2:select",
      params: {
        data: data,
      },
    });
  });
}

function TyphoidAddress(hpercode) {
  $.ajax({
    type: "POST",
    url: baseURL + "Typhoid/TyphoidAddress/" + hpercode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      var obj = $.parseJSON(data);
      $("#info_street_temp").val(obj["pat_perm_address_street_name"]);

      var str = obj["pat_perm_address_reg"].substring(0, 2);

      setRegionTemp(str);
      setRegionTemp(obj["pat_perm_address_prov"]);
      $("#selProvTemp").removeAttr("disabled");
      setCityTemp(obj["pat_perm_address_city"]);
      $("#selCityTemp").removeAttr("disabled");
      setBrgyTemp(obj["pat_perm_address_brgy"]);
      $("#selBrgyTemp").removeAttr("disabled");
    },
  });
}

$("#checkAddress").on("click", function () {
  var check = $(this).is(":checked");
  //console.log(check);

  if (check == true) {
    $("#info_streetp").val($("#info_street").val());
    // $('#info_streetp').prop('readonly',true);
    var city = $("#selCity").val();
    var brgy = $("#selBrgy").val();
    var prov = $("#selProv").val();
    //console.log(city);
    //console.log(brgy);
    //console.log(prov);
    $("#selCityp").val(setCity2(city));
    $("#selBrgyp").val(setBrgy2(brgy));
    $("#selProvp").val(setProv2(prov));
    $("#info_zipp").val($("#info_zip").val());

    $("#info_streetp").prop("readonly", true);
    $("#selCityp").attr("readonly", true); //prop('readonly',true);
    //$('#selBrgyp').select2("readonly", true);
    //$('#selDistp').select2({disabled:'readonly'});
    $("#info_zipp").prop("readonly", true);
  } else if (check == false) {
    $("#selCityp").val("").empty("");
    $("#selBrgyp").val("").empty("");
    $("#selDistp").empty("");
    $("#info_streetp").val("");
    $("#selRegp").empty("");
    $("#selProvp").empty("");
    $("#info_zipp").val("");

    $("#info_streetp").prop("readonly", false);
    $("#selCityp").prop("readonly", false);
    //$('#selCityp').select2({disabled:false});
    //$('#selBrgyp').select2("readonly", false);
    //$('#selDistp').select2({disabled:false});
    $("#info_zipp").prop("readonly", false);
  }
});
