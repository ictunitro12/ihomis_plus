function infection(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/infection_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj == null) {
				document.getElementById('no_infec').innerHTML = 0;
			} else {
				$('#no_infec').val(obj['no_inf']);
				var no_inf_a = document.getElementById('no_infec').value;
				document.getElementById('no_infec').innerHTML = no_inf_a;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function discharged(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/discharged_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj == null) {
				document.getElementById('no_disch').innerHTML = 0;
			} else {
				$('#no_disch').val(obj['no_dis']);
				var no_dis_a = document.getElementById('no_disch').value;
				document.getElementById('no_disch').innerHTML = no_dis_a;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function InfRate(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/Infection_Rate_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				$("#AddIden").val("insert");
				document.getElementById('vap').innerHTML = 0;
				document.getElementById('bsi').innerHTML = 0;
				document.getElementById('uti').innerHTML = 0;
				document.getElementById('ssi').innerHTML = 0;
			} else {
				$("#AddIden").val("update");
				$('#no_infec').val(obj['no_inf']);
				$('#no_disch').val(obj['no_dis']);

				$('#vappat').val(obj['patientnumvap']);
				$('#vappat2').val(obj['totalventilatordays']);
				$('#result_vap').val(obj['resultvap']);

				$('#no_bsi').val(obj['patientnumbsi']);
				$('#bsi2').val(obj['totalnumcentralline']);
				$('#result_bsi').val(obj['resultbsi']);

				$('#no_uti').val(obj['patientnumuti']);
				$('#uti2').val(obj['totalcatheterdays']);
				$('#result_uti').val(obj['resultuti']);

				$('#no_ssi').val(obj['numssi']);
				$('#ssi2').val(obj['totalproceduresdone']);
				$('#result_ssi').val(obj['resultssi']);

				$('#code').val(obj['hfhudcode']);
				$('#infec_year').val($.session.get('year'));

				var no_inf_a = document.getElementById('no_infec').value;
				var no_dis_a = document.getElementById('no_disch').value;
				var result_vap_a = document.getElementById('result_vap').value;
				var result_bsi_a = document.getElementById('result_bsi').value;
				var result_uti_a = document.getElementById('result_uti').value;
				var result_ssi_a = document.getElementById('result_ssi').value;

				var inf_rate = parseFloat(((parseFloat(no_inf_a)) / (parseFloat(no_dis_a))) * 100).toFixed(2);
				if (!isNaN(inf_rate)) {
					document.getElementById('IR').value = inf_rate;
				}
				else {
					inf_rate = 0;
					document.getElementById('IR').value = inf_rate;
				}
				var vap_a = ((parseFloat(result_vap_a)));
				if (!isNaN(vap_a)) {
					document.getElementById('vap').value = vap_a;
				}

				var bsi_a = ((parseFloat(result_bsi_a)));
				if (!isNaN(bsi_a)) {
					document.getElementById('bsi').value = bsi_a;
				}

				var uti_a = ((parseFloat(result_uti_a)));
				if (!isNaN(uti_a)) {
					document.getElementById('uti').value = uti_a;
				}

				var ssi_a = ((parseFloat(result_ssi_a)));
				if (!isNaN(ssi_a)) {
					document.getElementById('ssi').value = ssi_a;
				}

				document.getElementById('ssi').innerHTML = ssi_a;
				document.getElementById('uti').innerHTML = uti_a;
				document.getElementById('bsi').innerHTML = bsi_a;
				document.getElementById('vap').innerHTML = vap_a;
				document.getElementById('IR').innerHTML = inf_rate;
				document.getElementById('no_infec').innerHTML = no_inf_a;
				document.getElementById('no_disch').innerHTML = no_dis_a;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

var baseURL = $('#base_url').val();
$('#manage_button').on('click', function () {

	var noVap = $('#vappat').val();
	var noVaps = parseInt(noVap.replace(/,/g, ''));
	if (isNaN(noVaps)) {
		var noVaps = 0;
	} else {
		var noVaps = parseFloat(noVap.replace(/,/g, ''));
	}

	var ventVap = $('#vappat2').val();
	var ventVaps = parseInt(ventVap.replace(/,/g, ''));
	if (isNaN(ventVaps)) {
		var ventVaps = 0;
	} else {
		var ventVaps = parseFloat(ventVap.replace(/,/g, ''));
	}

	var noBsi = $('#no_bsi').val();
	var noBsis = parseInt(noBsi.replace(/,/g, ''));
	if (isNaN(noBsis)) {
		var noBsis = 0;
	} else {
		var noBsis = parseFloat(noBsi.replace(/,/g, ''));
	}

	var centralLine = $('#bsi2').val();
	var centralLines = parseInt(centralLine.replace(/,/g, ''));
	if (isNaN(centralLines)) {
		var centralLines = 0;
	} else {
		var centralLines = parseFloat(centralLine.replace(/,/g, ''));
	}

	var noUtipat = $('#no_uti').val();
	var noUtipats = parseInt(noUtipat.replace(/,/g, ''));
	if (isNaN(noUtipats)) {
		var noUtipats = 0;
	} else {
		var noUtipats = parseFloat(noUtipat.replace(/,/g, ''));
	}

	var noUticat = $('#uti2').val();
	var noUticats = parseInt(noUticat.replace(/,/g, ''));
	if (isNaN(noUticats)) {
		var noUticats = 0;
	} else {
		var noUticats = parseFloat(noUticat.replace(/,/g, ''));
	}

	var noSsi = $('#no_ssi').val();
	var noSsis = parseInt(noSsi.replace(/,/g, ''));
	if (isNaN(noSsis)) {
		var noSsis = 0;
	} else {
		var noSsis = parseFloat(noSsi.replace(/,/g, ''));
	}

	var nototProc = $('#ssi2').val();
	var nototProcs = parseInt(nototProc.replace(/,/g, ''));
	if (isNaN(nototProcs)) {
		var nototProcs = 0;
	} else {
		var nototProcs = parseFloat(nototProc.replace(/,/g, ''));
	}

	if (ventVaps == 0) {
		var result_vap = 0;
	} else {
		var result_vap = parseFloat(((noVaps / ventVaps) * 1000)).toFixed(2);
	}

	if (centralLines == 0) {
		var result_bsi = 0;
	} else {
		var result_bsi = parseFloat(((noBsis / centralLines) * 1000)).toFixed(2);
	}

	if (noUticats == 0) {
		var result_uti = 0;
	} else {
		var result_uti = parseFloat(((noUtipats / noUticats) * 1000)).toFixed(2);
	}

	if (nototProcs == 0) {
		var result_ssi = 0;
	} else {
		var result_ssi = parseFloat(((noSsis / nototProcs) * 100)).toFixed(2);
	}

	if ($('#no_disch').val() == 0) {
		var inf_rate = 0;
	} else {
		var inf_rate = parseFloat(((parseFloat($('#no_infec').val())) / (parseFloat($('#no_disch').val())) * 100)).toFixed(2);
	}

	$("#manage_modal").modal({ backdrop: 'static' }).draggable({});
	$('#infec_year').val($.session.get('year'));
	$('#sample').val($('#code').val());
	$('#AddIdenInf').val($('#AddIden').val());

	$('#no_infec_inf').val($('#no_infec').val());
	$('#no_disch_inf').val($('#no_disch').val());
	$('#infectionrate').val(inf_rate);

	$('#no_vappat').val(noVaps);
	$('#ventvap').val(ventVaps);
	$('#resultsvap').val(result_vap);

	$('#no_bsipat').val(noBsis);
	$('#bsi_centralline').val(centralLines);
	$('#resultsbsi').val(result_bsi);

	$('#no_utipat').val(noUtipats);
	$('#no_uticat').val(noUticats);
	$('#resultsuti').val(result_uti);

	$('#no_ssipat').val(noSsis);
	$('#no_totproc').val(nototProcs);
	$('#resultsssi').val(result_ssi);
});

function sum() {
	var novap = document.getElementById('no_vappat').value;
	var novap2 = document.getElementById('ventvap').value;

	var nobsi1 = document.getElementById('no_bsipat').value;
	var nobsi2 = document.getElementById('bsi_centralline').value;

	var nouti1 = document.getElementById('no_utipat').value;
	var nouti2 = document.getElementById('no_uticat').value;

	var nossi1 = document.getElementById('no_ssipat').value;
	var nossi2 = document.getElementById('no_totproc').value;

	if (novap == '' || novap2 == '' || novap2 == 0) {
		var novap3 = 0;
	} else {
		var novap3 = parseFloat(((parseInt(novap) / parseInt(novap2)) * 1000)).toFixed(2);
	}

	if (nobsi1 == '' || nobsi2 == '' || nobsi2 == 0) {
		var nobsi3 = 0;
	} else {
		var nobsi3 = parseFloat(((parseInt(nobsi1) / parseInt(nobsi2)) * 1000)).toFixed(2);
	}

	if (nouti1 == '' || nouti2 == '' || nouti2 == 0) {
		var nouti3 = 0;
	} else {
		var nouti3 = parseFloat(((parseInt(nouti1) / parseInt(nouti2)) * 1000)).toFixed(2);
	}

	if (nossi1 == '' || nossi2 == '' || nossi2 == 0) {
		var nossi3 = 0;
	} else {
		var nossi3 = parseFloat((parseInt(nossi1) / parseInt(nossi2)) * 100).toFixed(2);
	}

	document.getElementById('resultsvap').value = novap3;
	document.getElementById('resultsbsi').value = nobsi3;
	document.getElementById('resultsuti').value = nouti3;
	document.getElementById('resultsssi').value = nossi3;
}

function Major_Op(year) {
	$.ajax({
		url: baseURL + "Rep_Statistical/Major_Operation_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="3">No data available.</td>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.procdesc + '" name ="procdesc' + counter + '[]"><span name ="procdesc' + counter + '[]" id="ft40p"/>' + counter + '. ' + value.procdesc + '</span></td>';
					tr += '<td align="center"><span name ="procdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td hidden><span name ="procdesc' + counter + '[]" id="ft40p"/>' + value.proccode + '</span></td></tr>';
					counter++;
				});
			}
			$("#Major_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Minor_Op(year) {
	$.ajax({
		url: baseURL + "Rep_Statistical/Minor_Operation_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="3">No data available.</td>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.procdesc + '" name ="procdesc' + counter + '[]"><span name ="procdesc' + counter + '[]" id="ft40p"/>' + counter + '. ' + value.procdesc + '</span></td>';
					tr += '<td align="center"><span name ="procdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td hidden><span name ="procdesc' + counter + '[]" id="ft40p"/>' + value.proccode + '</span></td></tr>';
					counter++;
				});
			}
			$("#Minor_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function isNumber(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if ((charCode != 8) && (charCode < 48 || charCode > 57)) {
		return false;
	} else {
		return true;
	}
}

$('input').on('paste', function (event) {
	if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
		event.preventDefault();
	}
});