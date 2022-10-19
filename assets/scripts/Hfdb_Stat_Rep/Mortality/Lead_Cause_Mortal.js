function Mortal(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Twenty_Mortality_Dataload/" + year,
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
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
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
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td align="center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#MortalTable tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}

function Mortal_Med(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Twenty_Mortality_Med_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
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
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
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
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td align="center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#Mortal_Medicine_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}

function Mortal_Surgi(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Twenty_Mortality_Surgi_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
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
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
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
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td align="center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#Mortal_Surgery_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}

function Mortal_Obstet(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Twenty_Mortality_Obstet_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="37">No data available.</td>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.scatdesc + '" name ="scatdesc' + counter + '[]"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + counter + '. ' + value.scatdesc + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_4 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_5 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_6 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_7 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_8 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_10 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_11 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_12 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_13 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_14 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_15 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_16 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td align="center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#Mortal_Obstetrics_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}

function Mortal_Gyn(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Twenty_Mortality_Gyn_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="37">No data available.</td>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.scatdesc + '" name ="scatdesc' + counter + '[]"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + counter + '. ' + value.scatdesc + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_4 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_5 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_6 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_7 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_8 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_10 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_11 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_12 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_13 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_14 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_15 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_16 + '</span></td>';

					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td align="center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#Mortal_Gynecology_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}

function Mortal_Pedia(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Twenty_Mortality_Pedia_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="17">No data available.</td>';
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
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td align="right"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total + '</span></td>';
					tr += '<td align="center"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#Mortal_Pediatric_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}