function MortalDeaths(year) {
	$.ajax({
		url: baseURL + "Rep_Statistical/TenMortalDeaths_Dataload/" + year,
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
					tr += '<tr><td><input type="hidden" value="' + value.scatdesc + '" name ="scatdesc' + counter + '[]"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + counter + '. ' + value.scatdesc + '</span></td>';
					tr += '<td align = "right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td align = "center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#MortalDeathsTable tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Mortal(year) {
	$.ajax({
		url: baseURL + "Rep_Statistical/Mortal_Dataload/" + year,
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
				tr += '<tr align="center"><td width="100%" colspan="37">No data available.</td>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.scatdesc + '" name ="scatdesc' + counter + '[]"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + counter + '. ' + value.scatdesc + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_1 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_1 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_2 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_2 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_3 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_3 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_4 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_4 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_5 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_5 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_6 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_6 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_7 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_7 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_8 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_8 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_9 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_10 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_10 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_11 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_11 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_12 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_12 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_13 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_13 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_14 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_14 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_15 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_15 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_16 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_16 + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td align="center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#MortalTable tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Deaths(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/Deaths_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				document.getElementById('TotDeaths').innerHTML = 0;
				document.getElementById('TotInpatDeaths').innerHTML = 0;
				document.getElementById('TotLessDeaths').innerHTML = 0;
				document.getElementById('TotGreatDeaths').innerHTML = 0;
				document.getElementById('tot_er').innerHTML = 0;
				document.getElementById('tot_doa').innerHTML = 0;
				document.getElementById('totstillbirths').innerHTML = 0;
				document.getElementById('totneodeaths').innerHTML = 0;
				document.getElementById('totmatdeaths').innerHTML = 0;
			} else {
				$('#medical_b_d').val(obj['med_b_d']);
				$('#obstetrics_b_d').val(obj['obs_b_d']);
				$('#gynecology_b_d').val(obj['gyn_b_d']);
				$('#pediatrics_b_d').val(obj['pedia_b_d']);
				$('#surpeds_b_d').val(obj['surped_b_d']);
				$('#suradus_b_d').val(obj['suradu_b_d']);
				$('#medical_a_d').val(obj['med_a_d']);
				$('#obstetrics_a_d').val(obj['obs_a_d']);
				$('#gynecology_a_d').val(obj['gyn_a_d']);
				$('#pediatrics_a_d').val(obj['pedia_a_d']);
				$('#surpeds_a_d').val(obj['surped_a_d']);
				$('#suradus_a_d').val(obj['suradu_a_d']);
				$('#tot_er').val(obj['totERdeaths']);
				$('#tot_doa').val(obj['totDOA']);
				$('#totstillbirths').val(obj['stillbirth']);
				$('#totneodeaths').val(obj['totneonataldeath']);
				$('#totmatdeaths').val(obj['totmaternaldeath']);

				var med_b_d_a = document.getElementById('medical_b_d').value;
				var obs_b_d_a = document.getElementById('obstetrics_b_d').value;
				var gyn_b_d_a = document.getElementById('gynecology_b_d').value;
				var pedia_b_d_a = document.getElementById('pediatrics_b_d').value;
				var surped_b_d_a = document.getElementById('surpeds_b_d').value;
				var suradu_b_d_a = document.getElementById('suradus_b_d').value;
				var med_a_d_a = document.getElementById('medical_a_d').value;
				var obs_a_d_a = document.getElementById('obstetrics_a_d').value;
				var gyn_a_d_a = document.getElementById('gynecology_a_d').value;
				var pedia_a_d_a = document.getElementById('pediatrics_a_d').value;
				var surped_a_d_a = document.getElementById('surpeds_a_d').value;
				var suradu_a_d_a = document.getElementById('suradus_a_d').value;
				var tot_er_a = document.getElementById('tot_er').value;
				var tot_doa_a = document.getElementById('tot_doa').value;
				var tot_stillbirth_a = document.getElementById('totstillbirths').value;
				var tot_neodeaths_a = document.getElementById('totneodeaths').value;
				var tot_matdeaths_a = document.getElementById('totmatdeaths').value;

				var total_lessthan48 = parseInt(med_a_d_a) + parseInt(obs_a_d_a) + parseInt(gyn_a_d_a) + parseInt(pedia_a_d_a) + parseInt(surped_a_d_a) + parseInt(suradu_a_d_a);
				if (!isNaN(total_lessthan48)) {
					document.getElementById('TotLessDeaths').value = total_lessthan48;
				}
				var total_graterthan48 = parseInt(med_b_d_a) + parseInt(obs_b_d_a) + parseInt(gyn_b_d_a) + parseInt(pedia_b_d_a) + parseInt(surped_b_d_a) + parseInt(suradu_b_d_a);
				if (!isNaN(total_graterthan48)) {
					document.getElementById('TotGreatDeaths').value = total_graterthan48;
				}
				var totalimpdeath = parseInt(total_lessthan48) + parseInt(total_graterthan48);
				if (!isNaN(totalimpdeath)) {
					document.getElementById('TotInpatDeaths').value = totalimpdeath;
				}
				var totalinpatientdeath = parseInt(totalimpdeath) + parseInt(tot_er_a) + parseInt(tot_doa_a) + parseInt(tot_stillbirth_a) + parseInt(tot_neodeaths_a) + parseInt(tot_matdeaths_a);
				if (!isNaN(totalinpatientdeath)) {
					document.getElementById('TotDeaths').value = totalinpatientdeath;
				}
				document.getElementById('TotDeaths').innerHTML = totalinpatientdeath;
				document.getElementById('TotInpatDeaths').innerHTML = totalimpdeath;
				document.getElementById('TotLessDeaths').innerHTML = total_lessthan48;
				document.getElementById('TotGreatDeaths').innerHTML = total_graterthan48;
				document.getElementById('medical_b_d').innerHTML = med_b_d_a;
				document.getElementById('obstetrics_b_d').innerHTML = obs_b_d_a;
				document.getElementById('gynecology_b_d').innerHTML = gyn_b_d_a;
				document.getElementById('pediatrics_b_d').innerHTML = pedia_b_d_a;
				document.getElementById('surpeds_b_d').innerHTML = surped_b_d_a;
				document.getElementById('suradus_b_d').innerHTML = suradu_b_d_a;
				document.getElementById('medical_a_d').innerHTML = med_a_d_a;
				document.getElementById('obstetrics_a_d').innerHTML = obs_a_d_a;
				document.getElementById('gynecology_a_d').innerHTML = gyn_a_d_a;
				document.getElementById('pediatrics_a_d').innerHTML = pedia_a_d_a;
				document.getElementById('surpeds_a_d').innerHTML = surped_a_d_a;
				document.getElementById('suradus_a_d').innerHTML = suradu_a_d_a;
				document.getElementById('tot_er').innerHTML = tot_er_a;
				document.getElementById('tot_doa').innerHTML = tot_doa_a;
				document.getElementById('totstillbirths').innerHTML = tot_stillbirth_a;
				document.getElementById('totneodeaths').innerHTML = tot_neodeaths_a;
				document.getElementById('totmatdeaths').innerHTML = tot_matdeaths_a;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}