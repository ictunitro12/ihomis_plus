$(function () {
	var type, text, title;
	Phie_List();
	$(".daterange").daterangepicker({
		locale: {
			format: "MM/DD/YYYY"
		},
	});

	function Phie_List() {
		var table = $("#Phietable").DataTable({
			processing: true,
			searchable: true,
			destroy: true,
			pageLength: 25, 
			className: 'table table-sm table-striped table-borderless table-condensed table-hover',
			columns: [{
				render: function (data, type, row, meta) {
					return (
						'<center><input type="checkbox" name="enccode[]" class="enccode" data-enccode="' +
						data.enccode +
						'" value="' +
						data.enccode +
						'"></center> '
					);
				},
				"data": null
			},
			{
				"data": "logdate"
			},
			{
				"data": "logtime"
			},
			{
				"data": "logdisdate"
			},
			{
				"data": "logdistime"
			},
			{
				"data": "hpercode"
			},
			{
				"data": null,
				"render": function (data, type) {
					return data['patlast'] + ', ' + data['patfirst'] + ' ' + data['patmiddle'];
				}
			},
			{
				"data": "toecode"
			},
			{
				"data": "uploadedatetime"
			}
			],
			columnDefs: [{
				targets: [7],
				searchable: true,
				render: function (data, type, row) {
					switch (data) {
						case 'ADM': return 'ADMISSION';
							break;
						case 'OPD': return 'OPD';
							break;
						case 'OPDAD': return 'OPD';
							break;
						case 'ER': return 'ER';
							break;
						case 'ERADM': return 'ER';
							break;
						default: 'NO ENCOUNTER';
							break;
					}
				},
			},],
			ajax: {
				url: baseURL + "PHIE/Phielist",
				type: "POST",
			},

		});

		$("#admission_date").on("apply.daterangepicker", function (ev, picker) {
			const startDate = picker.startDate._d;
			const endDate = picker.endDate._d;

			$.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
				const admissionDate = new Date(data[1]);

				if (
					(isNaN(startDate) && isNaN(endDate)) ||
					(isNaN(startDate) && admissionDate <= endDate) ||
					(startDate <= admissionDate && isNaN(endDate)) ||
					(startDate <= admissionDate && admissionDate <= endDate)
				) {
					return true;
				}
				return false;
			});
			table.draw();
		});

		$("#discharge_date").on("apply.daterangepicker", function (ev, picker) {
			const startDate = picker.startDate._d;
			const endDate = picker.endDate._d;

			$.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
				const dischargeDate = new Date(data[3]);

				if (
					(isNaN(startDate) && isNaN(endDate)) ||
					(isNaN(startDate) && dischargeDate <= endDate) ||
					(startDate <= dischargeDate && isNaN(endDate)) ||
					(startDate <= dischargeDate && dischargeDate <= endDate)
				) {
					return true;
				}
				return false;
			});
			table.draw();
		});

		$('input[name="status"]').on("change", function () {
			let keywords = [];

			let checked = document.getElementsByName("status");

			checked.forEach(function (el) {
				if (el.checked) {
					keywords.push(el.value);
				}
			});

			if (keywords.includes("ALL")) {
				table.column(2).search("").draw();
			} else if (keywords.includes("UPLOAD")) {
				table.column(8).search("-").draw();
			} else {
				table.column(7).search(keywords.join("|"), true, false).draw();
			}

		});

		$(".reset").on("click", function () {
			location.reload();
		});

		$('#uploaddata').on('click', function (e) {

			const form = new FormData(document.getElementById("phie_form"));
			const enccodes = form.getAll("enccode[]");
			if (enccodes.length > 0) {
				$("#ModalProgressBar2").modal({
					backdrop: 'static'
				});
				submiting_animation(form);
				/* $("#ModalProgressEncounter").modal({
					backdrop: 'static'
				});
				submiting_EncounterData(form); */
			} else {
				toastr.error("Please select atleast one patient!", "Error");
			}
		});
	}
	var i = 0;

	function submiting_animation(form) {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBar");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				if (width >= 100) {
					clearInterval(id);
					$.ajax({
						url: baseURL + "PHIE/uploadPhie_PatientData",
						type: "POST",
						data: form,
						dataType: 'JSON',
						processData: false,
						contentType: false,
						success: function (data, response, type) {
							$("#ModalProgressBar2").modal('hide');
							toastr.success("Patient Data has been uploaded.", "Success!");
							const form = new FormData(document.getElementById("phie_form"));
							const enccodes = form.getAll("enccode[]");
							if (enccodes.length > 0) {
								$("#ModalProgressEncounter").modal({
									backdrop: 'static'
								});
								submiting_EncounterData(form);
							} else {
								toastr.error("Please select atleast one patient!", "Error!");
							}
							/*data.data.forEach(function (data) {
								var clientDOHid = data.PHIE.Client_DOHID;
								checkifExist(clientDOHid);
							});*/
						},
						error: function (response) {
							toastr.error("Please try again.", "Error");
							$("#ModalProgressBar2").modal('hide');
						},
					});
					i = 0;
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "% success";
				}
			}
		}

	}

	//Encounter Data Uploading
	function submiting_EncounterData(form) {
		if (i == 0) {
			i = 1;
			var elem = document.getElementById("mySubmitBars");
			var width = 10;
			var id = setInterval(frame, 50);

			function frame() {
				if (width >= 100) {
					clearInterval(id);
					i = 0;
					$.ajax({
						url: baseURL + "PHIE/uploadPhie_EncounterData",
						type: "POST",
						data: form,
						processData: false,
						contentType: false,
						success: function (data, response) {
							$("#ModalProgressEncounter").modal('hide');
							if (data.code == '103') {
								data.data.forEach(function (data) {
									if (data.PHIE.InvalidDetails.Pat_PHIC_Membership_Type !== undefined) {
										alert("Patient Membership type: " + data.PHIE.InvalidDetails.Pat_PHIC_Membership_Type + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.CCT !== undefined) {
										alert("CCT: " + data.PHIE.InvalidDetails.CCT + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.IndigenousGroup !== undefined) {
										alert("IP group: " + data.PHIE.InvalidDetails.IndigenousGroup + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.pat_benefit_package !== undefined) {
										alert("Patient benefit package: " + data.PHIE.InvalidDetails.pat_benefit_package + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Encounter_ID !== undefined) {
										alert("Encounter ID: " + data.PHIE.InvalidDetails.Encounter_ID + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Encounter_Type !== undefined) {
										alert("Encounter type: " + data.PHIE.InvalidDetails.Encounter_Type + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Provider_PhilHealth_Acc_No !== undefined) {
										alert("Provider PhilHealth Accreditation no.: " + data.PHIE.InvalidDetails.Provider_PhilHealth_Acc_No + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Provider_PRC_No !== undefined) {
										alert("PRC no: " + data.PHIE.InvalidDetails.Provider_PRC_No + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Prov_Last_Name !== undefined) {
										alert("Provider last name: " + data.PHIE.InvalidDetails.Prov_Last_Name + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Prov_First_Name !== undefined) {
										alert("Provider first name: "+ data.PHIE.InvalidDetails.Prov_First_Name + "\r\n With patient facility no	 : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Prov_Middle_Name !== undefined) {
										alert("Provider Middle name: " + data.PHIE.InvalidDetails.Prov_Middle_Name + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Prov_Suffix_Name !== undefined) {
										alert("Provider suffix name: " + data.PHIE.InvalidDetails.Prov_Suffix_Name + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Diagnosis_Type !== undefined) {
										alert('Diagnosis type'+ data.PHIE.InvalidDetails.Diagnosis_Type + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Final_Diagnosis_ICD10 !== undefined) {
										var textb = 'Final diagnosis ICD10';
										alert(textb.bold  + data.PHIE.InvalidDetails.Final_Diagnosis_ICD10 + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Disposition !== undefined) {
										alert('Disposition' + data.PHIE.InvalidDetails.Disposition + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Discharge_Condition !== undefined) {
										alert("Discharged condition: " + data.PHIE.InvalidDetails.Discharge_Condition + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Type_of_Visit !== undefined) {
										alert("Type of visit: " + data.PHIE.InvalidDetails.Type_of_Visit + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Weight_Loss !== undefined) {
										alert("Weight loss: " + data.PHIE.InvalidDetails.Weight_Loss + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.With_Intact_Uterus !== undefined) {
										alert("With intact uterus: " + data.PHIE.InvalidDetails.With_Intact_Uterus + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Source_of_Referral !== undefined) {
										alert("Rource of Referral: " + data.PHIE.InvalidDetails.Source_of_Referral + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else if (data.PHIE.InvalidDetails.Reason_For_Referral !== undefined) {
										alert("Reson for Referral: " + data.PHIE.InvalidDetails.Reason_For_Referral + "\r\n With patient facility no : " +data.PHIE.SubmittedDetails.Pat_Facility_No);
									}
									else {
										alert("Error!");
									}
								});
							}
							else if (data.code == '106') {
								toastr.success("Encounter Data successfuly uploaded.", "Success!");
							}
							else {
								toastr.error("Please try again.", "Error");
							$("#ModalProgressEncounter").modal('hide');
							}
							// location.reload();
						},
						error: function (response) {
							toastr.error("Please try again.", "Error");
							$("#ModalProgressEncounter").modal('hide');
						},
					});
				} else {
					width++;
					elem.style.width = width + "%";
					elem.innerHTML = width + "% success";
				}
			}
		}

	}


});


//error style
function _swal(type, title, text) {
	Swal.fire({
		position: 'top',
		icon: type,
		title: title,
		showConfirmButton: false,
		text: text,
		footer: '',
		timer: 1500
	});
}

//admission checkbox
$("#admcheck").click(function(){
	if($(this).is(":checked")){
		$("#admission_date").removeAttr('disabled');
	}
});
$("#admcheck").click(function(){
	if($(this).is(":unchecked")){
		$("#admission_date").attr('disabled',true);
	}
});

//discharged checkbox
$("#discheck").click(function(){
	if($(this).is(":checked")){
		$("#discharge_date").removeAttr('disabled');
	}
});
$("#discheck").click(function(){
	if($(this).is(":unchecked")){
		$("#discharge_date").attr('disabled',true);
	}
});
// for future use
function checking_animation(enccodes, form) {
	if (i == 0) {
		i = 1;
		var elem = document.getElementById("mySubmitBar");
		var width = 10;
		var id = setInterval(frame, 50);

		function frame() {
			if (width >= 100) {
				clearInterval(id);
				$.ajax({
					url: baseURL + "PHIE/checkPatdataexist/" + enccodes,
					type: "POST",
					data: form,
					processData: false,
					contentType: false,
					success: function (data, response, type) {
						console.log(data);
					},
					error: function (response) {
						toastr.error("Please try again.", "Error");
					},
				});
				i = 0;
			} else {
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "% success";
			}
		}
	}

}


