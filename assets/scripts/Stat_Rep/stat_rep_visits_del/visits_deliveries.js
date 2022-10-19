function TopOutpatientConsul(year) {
	$.ajax({
		url: baseURL + "Rep_Statistical/TenOpdConsul_Dataload/" + year,
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
			$("#TenOpdConsul tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function TopEmergencyConsul(year) {
	$.ajax({
		url: baseURL + "Rep_Statistical/TenErConsul_Dataload/" + year,
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
			$("#TenErConsul tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Tot_Del(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/TotNumDeliveries_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			$('#TotBirthVaginal').val(obj['normal']);
			$('#TotOtherDeliveries').val(obj['others']);
			/* $('#IutfTable').val(obj['iutf']);
			$('#ForcepsTable').val(obj['forceps']); */
			$('#TotBirthCaesarian').val(obj['caesarian']);

			/* var iutf_a = document.getElementById('IutfTable').value;
			var forceps_a = document.getElementById('ForcepsTable').value; */
			var breech_a = document.getElementById('TotOtherDeliveries').value;
			var caesarian_a = document.getElementById('TotBirthCaesarian').value;
			var normal_a = document.getElementById('TotBirthVaginal').value;

			/* var otherdeliveries = parseInt(iutf_a) + parseInt(forceps_a) + parseInt(breech_a); */

			var result = parseInt(breech_a) + parseInt(caesarian_a) + parseInt(normal_a);

			document.getElementById('TotDeliveries').innerHTML = result;
			document.getElementById('TotBirthVaginal').innerHTML = normal_a;
			document.getElementById('TotBirthCaesarian').innerHTML = caesarian_a;
			document.getElementById('TotOtherDeliveries').innerHTML = breech_a;
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function OPD_Visits(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/OPDVisits_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			$('#NumNewPat').val(obj['new']);
			$('#NumRevisitPat').val(obj['old']);
			$('#NumAdult').val(obj['adult']);
			$('#NumPedia').val(obj['pedia']);
			$('#NumMedic').val(obj['genadult']);
			$('#NumNonSurgi').val(obj['nosurgi']);
			$('#NumSurgi').val(obj['surgi']);
			$('#NumAntenatal').val(obj['prenatal']);
			$('#NumPostnatal').val(obj['postnatal']);

			var new_a = document.getElementById('NumNewPat').value;
			var old_a = document.getElementById('NumRevisitPat').value;
			var adult_a = document.getElementById('NumAdult').value;
			var pedia_a = document.getElementById('NumMedic').value;
			var genadult_a = document.getElementById('NumPedia').value;
			var nosurgi_a = document.getElementById('NumNonSurgi').value;
			var surgi_a = document.getElementById('NumSurgi').value;
			var prenatal_a = document.getElementById('NumAntenatal').value;
			var postnatal_a = document.getElementById('NumPostnatal').value;

			document.getElementById('NumNewPat').innerHTML = new_a;
			document.getElementById('NumRevisitPat').innerHTML = old_a;
			document.getElementById('NumAdult').innerHTML = adult_a;
			document.getElementById('NumMedic').innerHTML = pedia_a;
			document.getElementById('NumPedia').innerHTML = genadult_a;
			document.getElementById('NumNonSurgi').innerHTML = nosurgi_a;
			document.getElementById('NumSurgi').innerHTML = surgi_a;
			document.getElementById('NumAntenatal').innerHTML = prenatal_a;
			document.getElementById('NumPostnatal').innerHTML = postnatal_a;
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function ER_Visits(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/ERVisits_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			$('#TotERVisitsAdult').val(obj['adult']);
			$('#TotERVisitsPediatrics').val(obj['pedia']);
			$('#TotTransto').val(obj['total_trans_to']);
			$('#TotTransfrom').val(obj['total_trans_from']);

			var adult_a = document.getElementById('TotERVisitsAdult').value;
			var pedia_a = document.getElementById('TotERVisitsPediatrics').value;
			var transto_a = document.getElementById('TotTransto').value;
			var transfrom_a = document.getElementById('TotTransfrom').value;
			var result = parseInt(adult_a) + parseInt(pedia_a);
			if (!isNaN(result)) {
				document.getElementById('TotERVisits').value = result;
			}
			document.getElementById('TotERVisits').innerHTML = result;
			document.getElementById('TotERVisitsAdult').innerHTML = adult_a;
			document.getElementById('TotERVisitsPediatrics').innerHTML = pedia_a;
			document.getElementById('TotTransto').innerHTML = transto_a;
			document.getElementById('TotTransfrom').innerHTML = transfrom_a;
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Tests(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/Testing_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			$('#X_Ray').val(obj['xray']);
			$('#ultrasound').val(obj['ultrasound']);
			$('#CT_scan').val(obj['ctscan']);
			$('#MRImag').val(obj['mri']);
			$('#Mammog').val(obj['mammo']);
			$('#Angiog').val(obj['angio']);
			$('#LinAcc').val(obj['line']);
			$('#DentXRay').val(obj['dentalxray']);
			$('#otherimaging').val(obj['otherimaging']);

			$('#Urinal').val(obj['urine']);
			$('#Fecaly').val(obj['fecal']);
			$('#Hemato').val(obj['hema']);
			$('#ClinChem').val(obj['clichem']);
			$('#Immune').val(obj['immuno']);
			$('#Microb').val(obj['micro']);
			$('#SurgiPath').val(obj['surgi']);
			$('#Cytol').val(obj['cyto']);
			$('#autopsy').val(obj['autopsy']);
			$('#nbut').val(obj['nbut']);
			$('#otherlab').val(obj['otherlab']);

			var xray_a = document.getElementById('X_Ray').value;
			var ultrasound_a = document.getElementById('ultrasound').value;
			var ctscan_a = document.getElementById('CT_scan').value;
			var mri_a = document.getElementById('MRImag').value;
			var mammo_a = document.getElementById('Mammog').value;
			var angio_a = document.getElementById('Angiog').value;
			var line_a = document.getElementById('LinAcc').value;
			var dentalxray_a = document.getElementById('DentXRay').value;
			var otherimaging_a = document.getElementById('otherimaging').value;

			var urine_a = document.getElementById('Urinal').value;
			var fecal_a = document.getElementById('Fecaly').value;
			var hema_a = document.getElementById('Hemato').value;
			var clichem_a = document.getElementById('ClinChem').value;
			var immuno_a = document.getElementById('Immune').value;
			var micro_a = document.getElementById('Microb').value;
			var surgi_a = document.getElementById('SurgiPath').value;
			var cyto_a = document.getElementById('Cytol').value;
			var autopsy_a = document.getElementById('autopsy').value;
			var nbut_a = document.getElementById('nbut').value;
			var otherlab_a = document.getElementById('otherlab').value;

			document.getElementById('X_Ray').innerHTML = xray_a;
			document.getElementById('ultrasound').innerHTML = ultrasound_a;
			document.getElementById('CT_scan').innerHTML = ctscan_a;
			document.getElementById('MRImag').innerHTML = mri_a;
			document.getElementById('Mammog').innerHTML = mammo_a;
			document.getElementById('Angiog').innerHTML = angio_a;
			document.getElementById('LinAcc').innerHTML = line_a;
			document.getElementById('DentXRay').innerHTML = dentalxray_a;
			document.getElementById('otherimaging').innerHTML = otherimaging_a;

			document.getElementById('Urinal').innerHTML = urine_a;
			document.getElementById('Fecaly').innerHTML = fecal_a;
			document.getElementById('Hemato').innerHTML = hema_a;
			document.getElementById('ClinChem').innerHTML = clichem_a;
			document.getElementById('Immune').innerHTML = immuno_a;
			document.getElementById('Microb').innerHTML = micro_a;
			document.getElementById('SurgiPath').innerHTML = surgi_a;
			document.getElementById('Cytol').innerHTML = cyto_a;
			document.getElementById('autopsy').innerHTML = autopsy_a;
			document.getElementById('nbut').innerHTML = nbut_a;
			document.getElementById('otherlab').innerHTML = otherlab_a;
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error fetching data!");
		}
	});
}

/* function Other_Services(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/OtherServices_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			$('#TotNumDiag').val(obj['tb']);
			$('#TotNumCases').val(obj['dengue']);

			var dengue_a = document.getElementById('TotNumDiag').value;
			var tb_a = document.getElementById('TotNumCases').value;

			document.getElementById('TotNumDiag').innerHTML = dengue_a;
			document.getElementById('TotNumCases').innerHTML = tb_a;
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error fetching data!");
		}
	});
} */

