var Module = $('#module').val();

function PatientLogList() {
	var data = new Object();
	data.id = "CoViD19Table";
	data.link = baseURL + "CoViD19/CoViD19List";
	data.type = "POST";
	data.coldef = [
		{
			targets: [1, 10, 11],
			visible: false,
			searchable: true,
		},
		{
			targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
			orderable: false,
		}];
	loadTable(data);
}

$("#CoViD19Table").on("click", ".ModalCoViD19", function () {
	var base_url = $('#base_url').val();
	var data = $(this).data();
	console.log(data);
	$('#ModalCoViD19').modal('show');
	var enccode = atob(data['enccode']);
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	$("#code").val(enccode);
	console.log(enccode);
	$('#CoViD19PDF').html('<embed src="' + base_url + "CoViD19/CoViD19Form/" + enccode + '" frameborder="2" width="100%" height="800px" id="CoViD19PDF">');
});

function checkCovid19(enccode, hpercode) {
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		type: "POST",
		url: "../CoViD19/checkCovid19/" + enccode + "/" + hpercode,
		data: "JSON",
		success: function (data) {
			if (data == 1) {
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
				window.location.reload();
			}
			else {
				initCovid19(enccode, hpercode);
			}
		},
		error: function (data) {
			alert('Please try again!');
		}
	});
}

$('#search').click(function () {
	$("#PatSearch").modal('show');
});

function initCovid19(enccode, hpercode) {
	uppercase();
	getPatientData(enccode, hpercode);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
	$('#drutype').val('Government Hospital');
	$("#search").attr("readonly", false);

}

function initCovid19Edit(hpercode, enccode) {
	getPatientData(enccode, hpercode);
	getCovid19Data(enccode);
	$('#enccode').val(enccode);
	$('#drutype').val('Government Hospital');
	$("#search").attr("readonly", true);
	$('#formIden').val('update');
	covidWizard();

}

$("#CoViD19Table").on("click", ".ModalDeleteCoViD19", function () {
	var data = $(this).data();
	console.log(data);
	$('#DeleteCoViD19').modal('show');
	$("#formIdentification").val('delete');
	var enccode = atob(data['enccode']);
	$("#deletecode").val(enccode);

});


function covidWizard() {
	var formType = $("#formIden").val();
	_initWizard();
	_eventWizard(formType);
	_validateWizard();
}



// $('#frmcovid-19').on('submit', function (e) {
// 	var form = this;
// 	var data1 = $('#form-step-1').serializeArray();
// 	console.log(data1);
// 	// var data2 = $('#frmcovid-19').serializeArray();
// 	// data1.append('sampletex', value ng sample);
// 	var checker = true;

// 	data.forEach((item) => {
// 		if (item.value.length == 0 && item.name == 'cidoooi') {
// 			checker = false;
// 		}
// 	});

// 	if (checker) {
// 		$.ajax({
// 			type: "POST",
// 			url: baseURL + "CoViD19/saveCovid19",
// 			data: new FormData(this),
// 			processData: false,
// 			contentType: false,
// 			success: function (data, response) {
// 				window.location.replace(baseURL + "CoViD19");
// 				toastr.success('Successfully Save! ', 'Success');
// 			},

// 			error: function (xhr, desc, err) {
// 				toastr.error(xhr, 'Error');
// 			}
// 		});
// 	} else {
// 		alert('required date on set');
// 	}

// 	return false;
// });


function _initWizard() {
	// var form = document.getElementById("frmcovid-19");
	var btnFinish = $('<button type="button"  disabled name ="btnDone" id="btnDone"></button>')
		.text('Done')
		.addClass('btn btn-info btn-ladda')
		.on('click', function () {

			if ($('#form-step-4').valid()) {
				var data = new FormData($('#form-step-1')[0]);

				var step2 = $('#form-step-2').serializeArray();
				step2.forEach((item) => {
					data.append(item.name, item.value)
				});

				var step3 = $('#form-step-3').serializeArray();
				step3.forEach((item) => {
					data.append(item.name, item.value)
				});

				var step4 = $('#form-step-4').serializeArray();
				step4.forEach((item) => {
					data.append(item.name, item.value)
				});

				// console.log(data);
				$.ajax({
					type: "POST",
					url: baseURL + "CoViD19/saveCovid19",
					data: data,
					processData: false,
					contentType: false,
					success: function (data, response) {
						window.location.replace(baseURL + "CoViD19");
						toastr.success('Successfully Save! ', 'Success');
					},


					error: function (xhr, desc, err) {
						toastr.error(xhr, 'Error');
					}
				});
			} else {
				return false
			}
		});

	var btnCancel = $('<button></button>').text('Reset')
		.addClass('btn btn-danger btn-ladda')
		.on('click', function () {
			$('#smartwizard')
				.smartWizard("reset");
		});

	$('#smartwizard').smartWizard({
		selected: 0,
		theme: 'circles',
		transitionEffect: 'fade',
		showStepURLhash: false,
		transitionSpeed: '1500',
		toolbarSettings:
		{
			toolbarPosition: 'top',
			toolbarExtraButtons: [btnFinish, btnCancel]
		}
	});
}

function _eventWizard(type) {
	$("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
		if (stepPosition === 'first') {
			$('#btnDone').prop('disabled', true);
			$("#prev-btn").addClass('disabled');
			$("#prev-btn").addClass('disabled');
		}
		else if (stepPosition === 'final') {
			$("#next-btn").addClass('disabled');
			$('#btnDone').prop('disabled', false);
		}
		else {
			$("#prev-btn").removeClass('disabled');
			$("#next-btn").removeClass('disabled');
			$('#btnDone').prop('disabled', true);
		}
	});
}

function _validateWizard() {
	$("#smartwizard").on("leaveStep", function (e, anchorObject, stepNumber, stepDirection) {
		switch (stepNumber) {
			case 0:
				if ($('#form-step-1').valid()) {
					return true;
				} else {
					return false;
				}
				break;
			case 1:
				if ($('#form-step-2').valid()) {
					return true;
				} else {
					return false;
				}
				break;
			case 2:
				if ($('#form-step-3').valid()) {
					return true;
				} else {
					return false;
				}
				break;
		}
	});
}

function getPatientData(enccode, hpercode) {
	$.ajax({
		url: baseURL + "CoViD19/getPatientData/" + enccode + "/" + hpercode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
			$('#formIden').val('insert');
			$('#newfhud').val(obj['newfhudcode']);
			$('#encountercode').val(obj['enccode']);
			$('#percode').val(obj['hpercode']);
			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			$('#info_suffix').val(obj['suffix']);
			$('#patsuffix').val(obj['patsuffix']);
			$('#info_telno').val(obj['Landline']);
			$('#info_sex').val(obj['patsex']);
			$('#info_bplace').val(obj['patbplace']);
			$('#info_cs').val(obj['patcstat']);
			$('#info_nat').val(obj['natcode']);
			$('#occupation').val(obj['occupation']);
			$('#toecode').val(obj['toecode']);
			$('#selEmp').val(obj['patempstat']);
			$("#info_dob").val(obj['patbdate']);
			$('#info_age').val(obj['age']);
			$('#selRel').val(obj['relcode']);
			$('#rcode').val(obj['regcode']);
			$('#pcode').val(obj['provcode']);
			$('#ccode').val(obj['ctycode']);
			$('#bcode').val(obj['brg']);
			$('#info_street').val(obj['patstr']);
			$('#city').val(obj['ctyname']);
			$('#barangay').val(obj['brgyname']);
			$('#province').val(obj['provname']);
			$('#region').val(obj['regname']);
			$('#nodru').val(obj['hhosname']);
			$('#druaddress').val(obj['druaddress']);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function getCovid19Data(enccode) {
	$.ajax({
		url: baseURL + "CoViD19/getCovid19Data/" + enccode,
		type: "POST",
		data: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = $.parseJSON(data);
			console.log(obj);
			$('#formIden').val('update');
			$('#pin').val(obj['phicnum']);
			$('#interviewcno').val(obj['interviewercontactno']);

			var doi = obj['dateinterviewed'];
			var dois = (doi == "1970-01-01 00:00:00") ? "" : setTimeLocale(doi);
			$("#dointerview").val(dois);

			$('#ilname').val(obj['informantlastname']);
			$('#ifname').val(obj['informantfirstname']);
			$('#imname').val(obj['informantmiddlename']);
			$('#irelationship').val(obj['informantrelation']);
			$('#icno').val(obj['informanttelno']);

			if (obj['typeofclient'] == '1') {
				$("#tocccspc").prop('checked', true);

			} else if (obj['typeofclient'] == '2') {
				$("#toccc").prop('checked', true);

			} else if (obj['typeofclient'] == '3') {
				$("#tocrtpcr").prop('checked', true);

			} else {
				$("#tocccspc").prop('checked', false);
				$("#toccc").prop('checked', false);
				$("#tocrtpcr").prop('checked', false);
			}

			//testing category
			if (obj['testcata'] == '1') {
				$("#tcsa").val('1');
				$("#tcsa").prop('checked', true);
			} else {
				$("#tcsa").val('2');
				$("#tcsa").prop('checked', false);
			}

			if (obj['testcatb'] == '1') {
				$("#tcsb").prop('checked', true);
				$("#tcsb").val('1');
			} else {
				$("#tcsb").prop('checked', false);
				$("#tcsb").val('2');
			}

			if (obj['testcatc'] == '1') {
				$("#tcsc").prop('checked', true);
				$("#tcsc").val('1');
			} else {
				$("#tcsc").prop('checked', false);
				$("#tcsc").val('2');
			}

			if (obj['testcatd'] == '1') {
				$("#tcsd").prop('checked', true);
				$("#tcsd").val('1');
			} else {
				$("#tcsd").prop('checked', false);
				$("#tcsd").val('2');
			}

			if (obj['testcate'] == '1') {
				$("#tcse").prop('checked', true);
				$("#tcse").val('1');
			} else {
				$("#tcse").prop('checked', false);
				$("#tcse").val('2');
			}
			if (obj['testcatf'] == '1') {
				$("#tcsf").prop('checked', true);
				$("#tcsf").val('1');
			} else {
				$("#tcsf").prop('checked', false);
				$("#tcsf").val('2');
			}

			if (obj['testcatg'] == '1') {
				$("#tcsg").prop('checked', true);
				$("#tcsg").val('1');
			} else {
				$("#tcsg").prop('checked', false);
				$("#tcsg").val('2');
			}

			if (obj['testcath'] == '1') {
				$("#tcsh").prop('checked', true);
				$("#tcsh").val('1');
			} else {
				$("#tcsh").prop('checked', false);
				$("#tcsh").val('2');
			}

			if (obj['testcati'] == '1') {
				$("#tcsi").prop('checked', true);
				$("#tcsi").val('1');
			} else {
				$("#tcsi").prop('checked', false);
				$("#tcsi").val('2');
			}

			if (obj['testcatj'] == '1') {
				$("#tcsj").prop('checked', true);
				$("#tcsj").val('1');
			} else {
				$("#tcsj").prop('checked', false);
				$("#tcsj").val('2');
			}

			if (obj['covprevconsul'] == '1') {
				$("#ciprevcovidconsuly").prop('checked', true);
				$('#ciprevcovidconsuldofc').prop("readonly", false);
				$('#cifacname').prop("readonly", false);

			} else if (obj['covprevconsul'] == '2') {
				$("#ciprevcovidconsuln").prop('checked', true);
				$('#ciprevcovidconsuldofc').prop("readonly", true);
				$('#cifacname').prop("readonly", true);

			} else {
				$("#ciprevcovidconsuln").prop('checked', false);
				$("#ciprevcovidconsuly").prop('checked', false);
				$('#ciprevcovidconsuldofc').prop("readonly", true);
				$('#cifacname').prop("readonly", true);
			}

			var ciprevcovidconsuldofc = obj['covprevconsuldte'];
			var ciprevcovidconsuldofcs = ((ciprevcovidconsuldofc == "1970-01-01 00:00:00") || (ciprevcovidconsuldofc == null)) ? "" : setTimeLocale(ciprevcovidconsuldofc);
			$("#ciprevcovidconsuldofc").val(ciprevcovidconsuldofcs);
			$('#cifacname').val(obj['covprevconsulfacility']);

			if (obj['healthstat'] == '1') {
				$("#hsaca").prop('checked', true);
			} else if (obj['healthstat'] == '2') {
				$("#hsacmi").prop('checked', true);
			} else if (obj['healthstat'] == '3') {
				$("#hsacm").prop('checked', true);
			} else if (obj['healthstat'] == '4') {
				$("#hsacs").prop('checked', true);
			} else if (obj['healthstat'] == '5') {
				$("#hsacc").prop('checked', true);
			} else {
				$("#hsaca").prop('checked', false);
				$("#hsacmi").prop('checked', false);
				$("#hsacm").prop('checked', false);
				$("#hsacs").prop('checked', false);
				$("#hsacc").prop('checked', false);
			}

			if (obj['covidclass'] == '1') {
				$("#ccs").prop('checked', true);
			} else if (obj['covidclass'] == '2') {
				$("#ccp").prop('checked', true);
			} else if (obj['covidclass'] == '3') {
				$("#ccc").prop('checked', true);
			} else if (obj['covidclass'] == '4') {
				$("#ccn").prop('checked', true);
			} else {
				$("#ccs").prop('checked', false);
				$("#ccp").prop('checked', false);
				$("#ccc").prop('checked', false);
				$("#ccn").prop('checked', false);
			}

			if (obj['admtohosp'] == '1') {
				$("#datorah").prop('checked', true);
				$("#datorah").val('1');
				$('#datorahname').prop("readonly", false);
				$('#datorahdt').prop("readonly", false);
			} else {
				$("#datorah").prop('checked', false);
				$("#datorah").val('2');
				$('#datorahname').prop("readonly", true);
				$('#datorahdt').prop("readonly", true);
			}
			$('#datorahname').val(obj['admtohospname']);
			var datorahdt = obj['admtohospdate'];
			var datorahdts = ((datorahdt == "1970-01-01 00:00:00") || (datorahdt == null)) ? "" : setTimeLocale(datorahdt);
			$("#datorahdt").val(datorahdts);

			if (obj['admtoisolation'] == '1') {
				$("#datoraiq").prop('checked', true);
				$("#datoraiq").val('1');
				$('#datoraiqname').prop("readonly", false);
				$('#datoraiqdt').prop("readonly", false);
			} else {
				$("#datoraiq").prop('checked', false);
				$("#datoraiq").val('2');
				$('#datoraiqname').prop("readonly", true);
				$('#datoraiqdt').prop("readonly", true);
			}
			$('#datoraiqname').val(obj['admtoisolationname']);
			var datoraiqdt = obj['admtoisolationdate'];
			var datoraiqdts = ((datoraiqdt == "1970-01-01 00:00:00") || (datoraiqdt == null)) ? "" : setTimeLocale(datoraiqdt);
			$("#datoraiqdt").val(datoraiqdts);

			if (obj['homeisolation'] == '1') {
				$("#datorihiq").prop('checked', true);
				$("#datorihiq").val('1');
			} else {
				$("#datorihiq").prop('checked', false);
				$("#datorihiq").val('2');
			}
			var datorihiqdt = obj['homeisolationdate'];
			var datorihiqdts = ((datorihiqdt == "1970-01-01 00:00:00") || (datorihiqdt == null)) ? "" : setTimeLocale(datorihiqdt);
			$("#datorihiqdt").val(datorihiqdts);

			if (obj['homedishome'] == '1') {
				$("#datordh").prop('checked', true);
				$("#datordh").val('1');
			} else {
				$("#datordh").prop('checked', false);
				$("#datordh").val('2');
			}
			var datordhdd = obj['admdisdate'];
			var datordhdds = ((datordhdd == "1970-01-01 00:00:00") || (datordhdd == null)) ? "" : setTimeLocale(datordhdd);
			$("#datordhdd").val(datordhdds);

			if (obj['dispoth'] == '1') {
				$("#daotro").prop('checked', true);
				$("#daotro").val('1');
			} else {
				$("#daotro").prop('checked', false);
				$("#daotro").val('2');
			}


			var doooi = obj['dateonset'];
			var dooois = ((doooi == "1970-01-01 00:00:00") || (doooi == null)) ? "" : setTimeLocale(doooi);
			$("#cidoooi").val(dooois);

			//signs and symptoms
			if (obj['fever'] == '1') {
				$("#ssfever").prop('checked', true);
				$("#ssfever").val('1');
			} else {
				$("#ssfever").prop('checked', false);
				$("#ssfever").val('2');
			}

			if (obj['cough'] == '1') {
				$("#sscough").prop('checked', true);
				$("#sscough").val('1');
			} else {
				$("#sscough").prop('checked', false);
				$("#sscough").val('2');
			}

			if (obj['genweak'] == '1') {
				$("#ssgenweakness").prop('checked', true);
				$("#ssgenweakness").val('1');
			} else {
				$("#ssgenweakness").prop('checked', false);
				$("#ssgenweakness").val('2');
			}

			if (obj['fatigue'] == '1') {
				$("#ssfatigue").prop('checked', true);
				$("#ssfatigue").val('1');
			} else {
				$("#ssfatigue").prop('checked', false);
				$("#ssfatigue").val('2');
			}

			if (obj['headache'] == '1') {
				$("#ssheadache").prop('checked', true);
				$("#ssheadache").val('1');
			} else {
				$("#ssheadache").prop('checked', false);
				$("#ssheadache").val('2');
			}

			if (obj['myalgia'] == '1') {
				$("#ssmyalgia").prop('checked', true);
				$("#ssmyalgia").val('1');
			} else {
				$("#ssmyalgia").prop('checked', false);
				$("#ssmyalgia").val('2');
			}

			if (obj['sorethroat'] == '1') {
				$("#sssorethroat").prop('checked', true);
				$("#sssorethroat").val('1');
			} else {
				$("#sssorethroat").prop('checked', false);
				$("#sssorethroat").val('2');
			}

			if (obj['coryza'] == '1') {
				$("#sscoryza").prop('checked', true);
				$("#sscoryza").val('1');
			} else {
				$("#sscoryza").prop('checked', false);
				$("#sscoryza").val('2');
			}

			if (obj['dyspnea'] == '1') {
				$("#ssdyspnea").prop('checked', true);
				$("#ssdyspnea").val('1');
			} else {
				$("#ssdyspnea").prop('checked', false);
				$("#ssdyspnea").val('2');
			}

			if (obj['anorexia'] == '1') {
				$("#ssanorexia").prop('checked', true);
				$("#ssanorexia").val('1');
			} else {
				$("#ssanorexia").prop('checked', false);
				$("#ssanorexia").val('2');
			}

			if (obj['nausea'] == '1') {
				$("#ssnausea").prop('checked', true);
				$("#ssnausea").val('1');
			} else {
				$("#ssnausea").prop('checked', false);
				$("#ssnausea").val('2');
			}

			if (obj['vomiting'] == '1') {
				$("#ssvomiting").prop('checked', true);
				$("#ssvomiting").val('1');
			} else {
				$("#ssvomiting").prop('checked', false);
				$("#ssvomiting").val('2');
			}

			if (obj['diarrhea'] == '1') {
				$("#ssdiarrhea").prop('checked', true);
				$("#ssdiarrhea").val('1');
			} else {
				$("#ssdiarrhea").prop('checked', false);
				$("#ssdiarrhea").val('2');
			}

			if (obj['alteredmentalill'] == '1') {
				$("#ssalteredmental").prop('checked', true);
				$("#ssalteredmental").val('1');
			} else {
				$("#ssalteredmental").prop('checked', false);
				$("#ssalteredmental").val('2');
			}

			if (obj['anosmia'] == '1') {
				$("#ssanosmia").prop('checked', true);
				$("#ssanosmia").val('1');
			} else {
				$("#ssanosmia").prop('checked', false);
				$("#ssanosmia").val('2');
			}

			if (obj['ageusia'] == '1') {
				$("#ssageusia").prop('checked', true);
				$("#ssageusia").val('1');
			} else {
				$("#ssageusia").prop('checked', false);
				$("#ssageusia").val('2');
			}

			if (obj['clinicinfooth'] == '1') {
				$("#ssothers").prop('checked', true);
				$("#ssothers").val('1');
			} else {
				$("#ssothers").prop('checked', false);
				$("#ssothers").val('2');
			}
			//comorbidities
			if (obj['cNone'] == '1') {
				$("#cmnone").prop('checked', true);
				$("#cmnone").val('1');
			} else {
				$("#cmnone").prop('checked', false);
				$("#cmnone").val('2');
			}

			if (obj['hypertension'] == '1') {
				$("#cmhypertension").prop('checked', true);
				$("#cmhypertension").val('1');
			} else {
				$("#cmhypertension").prop('checked', false);
				$("#cmhypertension").val('2');
			}

			if (obj['diabetes'] == '1') {
				$("#cmdiabetes").prop('checked', true);
				$("#cmdiabetes").val('1');
			} else {
				$("#cmdiabetes").prop('checked', false);
				$("#cmdiabetes").val('2');
			}

			if (obj['heartdisease'] == '1') {
				$("#cmheartdisease").prop('checked', true);
				$("#cmheartdisease").val('1');
			} else {
				$("#cmheartdisease").prop('checked', false);
				$("#cmheartdisease").val('2');
			}

			if (obj['lungdisease'] == '1') {
				$("#cmlungdisease").prop('checked', true);
				$("#cmlungdisease").val('1');
			} else {
				$("#cmlungdisease").prop('checked', false);
				$("#cmlungdisease").val('2');
			}

			if (obj['gastrointestinal'] == '1') {
				$("#cmgastro").prop('checked', true);
				$("#cmgastro").val('1');
			} else {
				$("#cmgastro").prop('checked', false);
				$("#cmgastro").val('2');
			}

			if (obj['genitourinary'] == '1') {
				$("#cmgenito").prop('checked', true);
				$("#cmgenito").val('1');
			} else {
				$("#cmgenito").prop('checked', false);
				$("#cmgenito").val('2');
			}

			if (obj['neurodisease'] == '1') {
				$("#cmneurodisease").prop('checked', true);
				$("#cmneurodisease").val('1');
			} else {
				$("#cmneurodisease").prop('checked', false);
				$("#cmneurodisease").val('2');
			}

			if (obj['cancer'] == '1') {
				$("#cmcancer").prop('checked', true);
				$("#cmcancer").val('1');
			} else {
				$("#cmcancer").prop('checked', false);
				$("#cmcancer").val('2');
			}

			if (obj['comorbiditiesoth'] == '1') {
				$("#cmothers").prop('checked', true);
				$("#cmothers").val('1');
			} else {
				$("#cmothers").prop('checked', false);
				$("#cmothers").val('2');
			}

			var lmp = obj['LMP'];
			var lmps = (lmp == "1970-01-01 00:00:00") ? "" : setTimeLocale(lmp);
			$("#cmpregnantd").val(lmps);
			//pregnant		
			if (obj['pregstat'] == '1') {
				$("#cmpregnant").prop('checked', true);
				$("#cmpregnant").val('1');
			} else {
				$("#cmpregnant").prop('checked', false);
				$("#cmpregnant").val('2');
			}
			//high-risk pregnancy
			if (obj['highriskpreg'] === '1') {
				$("#cmhrp").prop('checked', true);
				$("#cmhrp").val('1');
			} else {
				$("#cmhrp").prop('checked', false);
				$("#cmhrp").val('2');
			}
			//sari
			if (obj['sari'] === '1') {
				$("#diagnosedsari").prop('checked', true);
				$("#diagnosedsari").val('1');
			} else {
				$("#diagnosedsari").prop('checked', false);
				$("#diagnosedsari").val('2');
			}
			console.log(obj['testposbfore']);
			if (obj['testposbfore'] === '1') {
				$("#tpurtpcr").prop('checked', true);
				$("#tpurtpcr").val('1');
			} else {
				$("#tpurtpcr").prop('checked', false);
				$("#tpurtpcr").val('2');
			}

			var doscollect = obj['testposbforedatecol'];
			var doscollects = ((doscollect == "1970-01-01 00:00:00") || (doscollect == null)) ? "" : setTimeLocale(doscollect);
			$("#tpurtpcrscd").val(doscollects);
			$('#tpurtpcrlab').val(obj['testposbforelab']);
			$('#tpurtpcrno').val(obj['testposbforeno']);

			$('#ocatordic').val(obj['immcoz']);
			$('#ocatordac').val(obj['anteced']);
			$('#ocatorduc').val(obj['underly']);

			$("#ehperson option[value='" + obj['histexp'] + "']").attr("selected", "selected");
			var ehpersondolc = obj['histexpdatecontact'];
			var ehpersondolcs = ((ehpersondolc == "1970-01-01 00:00:00") || (ehpersondolc == null)) ? "" : setTimeLocale(ehpersondolc);
			$("#ehpersondolc").val(ehpersondolcs);

			$("#ehplace option[value='" + obj['histexpplace'] + "']").attr("selected", "selected");








		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

/*class==checker*/
$(".checker").click(function () {
	if ($(this).is(":checked")) {
		$(this).val("1");
	} else if ($(this).is(":not(:checked)")) {
		$(this).val("2");
	}
});

/*yes-no validations */
$('#iecos').click(function () {
	if ($(this).is(":checked")) {
		$('#iecosspecify').prop("readonly", false);
	} else {
		$('#iecosspecify').prop("readonly", true);
		$('#iecosspecify').val("");
	}
});

$('#sphcwn').click(function () {
	if ($(this).is(":checked")) {
		$('#hcwnohfacility').prop("readonly", true);
		$('#hcwnohfacility').val("");
		$('#hcwlocation').prop("readonly", true);
		$('#hcwlocation').val("");
	}
});

$('#sphcwy').click(function () {
	if ($(this).is(":checked")) {
		$('#hcwnohfacility').prop("readonly", false);
		$('#hcwlocation').prop("readonly", false);
	}
});

$('#sphcwn').click(function () {
	if ($(this).is(":checked")) {
		$('#hcwnohfacility').prop("readonly", true);
		$('#hcwnohfacility').val("");
		$('#hcwlocation').prop("readonly", true);
		$('#hcwlocation').val("");
	}
});

$('#sprofy').click(function () {
	if ($(this).is(":checked")) {
		$('#rofcoorigin').prop("readonly", false);
		$('#rofpnumber').prop("readonly", false);
		$('#ofwo').prop("readonly", false);
		$('#ofwn').prop("readonly", false);
	}
});

$('#sprofn').click(function () {
	if ($(this).is(":checked")) {
		$('#rofcoorigin').prop("readonly", true);
		$('#rofcoorigin').val("");
		$('#rofpnumber').prop("readonly", true);
		$('#rofpnumber').val("");
		$('#ofwo').prop("readonly", true);
		$('#ofwn').prop("readonly", true);
		$('#ofwo').prop("checked", false);
		$('#ofwn').prop("checked", false);
	}
});

$('#spfnty').click(function () {
	if ($(this).is(":checked")) {
		$('#fntcoorigin').prop("readonly", false);
		$('#fntpnumber').prop("readonly", false);
	}
});

$('#spfntn').click(function () {
	if ($(this).is(":checked")) {
		$('#fntcoorigin').prop("readonly", true);
		$('#fntcoorigin').val("");
		$('#fntpnumber').prop("readonly", true);
		$('#fntpnumber').val("");
	}
});

$('#lsialty').click(function () {
	if ($(this).is(":checked")) {
		$('#lsialtcmpo').prop("readonly", false);
		$('#lsialtlsi').prop("readonly", false);
		$('#lsialtalt').prop("readonly", false);
	}
});

$('#lsialtn').click(function () {
	if ($(this).is(":checked")) {
		$('#lsialtcmpo').prop("readonly", true);
		$('#lsialtcmpo').val("");
		$('#lsialtlsi').prop("readonly", true);
		$('#lsialtalt').prop("readonly", true);
		$('#lsialtlsi').prop("checked", false);
		$('#lsialtalt').prop("checked", false);
	}
});

$('#licsy').click(function () {
	if ($(this).is(":checked")) {
		$('#licsitype').prop("readonly", false);
		$('#licsname').prop("readonly", false);
	}
});

$('#licsn').click(function () {
	if ($(this).is(":checked")) {
		$('#licsitype').prop("readonly", true);
		$('#licsitype').val("");
		$('#licsname').prop("readonly", true);
		$('#licsname').val("");
	}
});

$('#ciprevcovidconsuly').click(function () {
	if ($(this).is(":checked")) {
		$('#ciprevcovidconsuldofc').prop("readonly", false);
		$('#cifacname').prop("readonly", false);
	}
});

$('#ciprevcovidconsuln').click(function () {
	if ($(this).is(":checked")) {
		$('#ciprevcovidconsuldofc').prop("readonly", true);
		$('#ciprevcovidconsuldofc').val("");
		$('#cifacname').prop("readonly", true);
		$('#cifacname').val("");
	}
});

$('#datorah').change(function () {
	if ($(this).is(":checked")) {
		$('#datorahname').prop("readonly", false);
		$('#datorahdt').prop("readonly", false);
	} else {
		$('#datorahname').prop("readonly", true);
		$('#datorahdt').prop("readonly", true);
		$('#datorahname').val("");
		$('#datorahdt').val("");
	}
});

$('#datoraiq').change(function () {
	if ($(this).is(":checked")) {
		$('#datoraiqname').prop("readonly", false);
		$('#datoraiqdt').prop("readonly", false);
	} else {
		$('#datoraiqname').prop("readonly", true);
		$('#datoraiqdt').prop("readonly", true);
		$('#datoraiqname').val("");
		$('#datoraiqdt').val("");
	}
});

