var validator = null;
$(document).ready(function () {
	validator = $("#pertinent_signs_symptoms_form").validate({
		rules:{
			pain_site:{
				required :{
					depends: function(element){
						if($("#painsite").prop("checked") && $("#pain_site").val() == ''){
							return true;
						}else{
							return false;
						}
					}
				},
				maxlength: 500
			},
			sign_others:{
				required: {
					depends: function(element){
						if($("#pertinent_others").prop("checked") && $("#sign_others").val() == ''){
							return true;
						}else{
							return false;
						}
					}
				},
				maxlength:2000
			}
		},
		messages:{
			pain_site: {
				required :"Pain Site is required!",
				maxlength : "Pain Site entry exceeds 500 characters!"
			},
			sign_others: {
				required: "Other signs and symptoms is required!",
				maxlength: "Other Symptoms entry exceeds 2000 characters!"
			}
		},
		validClass: "is-valid",
		errorClass: "is-invalid",
		errorElement: "div",
		errorPlacement: function(error,element){
			error.addClass("invalid-feedback");
			error.insertAfter(element);
		}
	});	
});


function SignsSymptoms(enccode) {
    validator.resetForm();
    $("#pertinent_signs_symptoms_form").trigger("reset");
    var enc = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "pertinent-signs-symptoms/" + enc + "/get/",
		type: "GET",    
		dataType: "JSON",
		processData: false,
		contentType: false,
		success: function (data, response) {
			if (data.data != null) {
				bindPertinentSignsSymptomsData(data.data);
			}
		},
	});
};

bindPertinentSignsSymptomsData = function (data) {
	if (
		data.abdominal_cramp_pain !== null &&
		data.abdominal_cramp_pain !== ""
	) {
		$("#abdominal_cramp_pain").prop("checked", true);
	}else{
		$("#abdominal_cramp_pain").prop("checked", false);
	}

	if (
		data.alter_mental_sensorium !== null &&
		data.alter_mental_sensorium !== ""
	) {
		$("#alter_mental_sensorium").prop("checked", true);
	}else{
		$("#alter_mental_sensorium").prop("checked", false);
	}

	if (data.anorexia !== null && data.anorexia !== "") {
		$("#anorexia").prop("checked", true);
	}else{
		$("#anorexia").prop("checked", false);
	}

	if (data.bleeding_gums !== null && data.bleeding_gums !== "") {
		$("#bleeding_gums").prop("checked", true);
	}else{
		$("#bleeding_gums").prop("checked", false);
	}

	if (data.blurring_vision !== null && data.blurring_vision !== "") {
		$("#blurring_vision").prop("checked", true);
	}else{
		$("#blurring_vision").prop("checked", false);
	}

	if (data.body_weakness !== null && data.body_weakness !== "") {
		$("#body_weakness").prop("checked", true);
	}else{
		$("#body_weakness").prop("checked", false);
	}

	if (
		data.chest_pain_discomfort !== null &&
		data.chest_pain_discomfort !== ""
	) {
		$("#chest_pain_discomfort").prop("checked", true);
	}else{
		$("#chest_pain_discomfort").prop("checked", false);
	}

	if (data.constipation !== null && data.constipation !== "") {
		$("#constipation").prop("checked", true);
	}else{
		$("#constipation").prop("checked", false);
	}

	if (data.cough !== null && data.cough !== "") {
		$("#cough").prop("checked", true);
	}else{
		$("#cough").prop("checked", false);
	}

	if (data.diarrhea !== null && data.diarrhea !== "") {
		$("#diarrhea").prop("checked", true);
	}else{
		$("#diarrhea").prop("checked", false);
	}

	if (data.dizziness !== null && data.dizziness !== "") {
		$("#dizziness").prop("checked", true);
	}else{
		$("#dizziness").prop("checked", false);
	}

	if (data.dysphagia !== null && data.dysphagia !== "") {
		$("#dysphagia").prop("checked", true);
	}else{
		$("#dysphagia").prop("checked", false);
	}

	if (data.dyspnea !== null && data.dyspnea !== "") {
		$("#dyspnea").prop("checked", true);
	}else{
		$("#dyspnea").prop("checked", false);
	}

	if (data.dysuria !== null && data.dysuria !== "") {
		$("#dysuria").prop("checked", true);
	}else{
		$("#dysuria").prop("checked", false);
	}

	if (data.epistaxis !== null && data.epistaxis !== "") {
		$("#epistaxis").prop("checked", true);
	}else{
		$("#epistaxis").prop("checked", false);
	}

	if (data.fever !== null && data.fever !== "") {
		$("#fever").prop("checked", true);
	}else{
		$("#fever").prop("checked", false);
	}

	if (data.headache !== null && data.headache !== "") {
		$("#headache").prop("checked", true);
	}else{
		$("#headache").prop("checked", false);
	}

	if (data.frequent_urination !== null && data.frequent_urination !== "") {
		$("#frequent_urination").prop("checked", true);
	}else{
		$("#frequent_urination").prop("checked", false);
	}

	if (data.hematemesis !== null && data.hematemesis !== "") {
		$("#hematemesis").prop("checked", true);
	}else{
		$("#hematemesis").prop("checked", false);
	}

	if (data.hematuria !== null && data.hematuria !== "") {
		$("#hematuria").prop("checked", true);
	}else{
		$("#hematuria").prop("checked", false);
	}

	if (data.hemoptysis !== null && data.hemoptysis !== "") {
		$("#hemoptysis").prop("checked", true);
	}else{
		$("#hemoptysis").prop("checked", false);
	}

	if (data.irritability !== null && data.irritability !== "") {
		$("#irritability").prop("checked", true);
	}else{
		$("#irritability").prop("checked", false);
	}

	if (data.jaundice !== null && data.jaundice !== "") {
		$("#jaundice").prop("checked", true);
	}else{
		$("#jaundice").prop("checked", false);
	}

	if (
		data.lower_extremity_edema !== null &&
		data.lower_extremity_edema !== ""
	) {
		$("#lower_extremity_edema").prop("checked", true);
	}else{
		$("#lower_extremity_edema").prop("checked", false);
	}

	if (data.myalgia !== null && data.myalgia !== "") {
		$("#myalgia").prop("checked", true);
	}else{
		$("#myalgia").prop("checked", false);
	}

	if (data.orthopnea !== null && data.orthopnea !== "") {
		$("#orthopnea").prop("checked", true);
	}else{
		$("#orthopnea").prop("checked", false);
	}

	if (data.palpitations !== null && data.palpitations !== "") {
		$("#palpitations").prop("checked", true);
	}else{
		$("#palpitations").prop("checked", false);
	}

	if (data.sbbtm !== null && data.sbbtm !== "") {
		$("#sbbtm").prop("checked", true);
	}else{
		$("#sbbtm").prop("checked", false);
	}

	if (data.seizures !== null && data.seizures !== "") {
		$("#seizures").prop("checked", true);
	}else{
		$("#seizures").prop("checked", false);
	}

	if (data.skin_rashes !== null && data.skin_rashes !== "") {
		$("#skin_rashes").prop("checked", true);
	}else{
		$("#skin_rashes").prop("checked", false);
	}

	if (data.sweating !== null && data.sweating !== "") {
		$("#sweating").prop("checked", true);
	}else{
		$("#sweating").prop("checked", false);
	}

	if (data.urgency !== null && data.urgency !== "") {
		$("#urgency").prop("checked", true);
	}else{
		$("#urgency").prop("checked", false);
	}

	if (data.vomiting !== null && data.vomiting !== "") {
		$("#vomiting").prop("checked", true);
	}else{
		$("#vomiting").prop("checked", false);
	}

	if (data.weight_loss !== null && data.weight_loss !== "") {
		$("#weight_loss").prop("checked", true);
	}else{
		$("#weight_loss").prop("checked", false);
	}

	if (data.sign_others !== null && data.sign_others !== "") {
		$("#pertinent_others").prop("checked", true);
		$("#sign_others").val(data.sign_others);
        $("#sign_others").prop("disabled", false);
	} else {
		$("#sign_others").prop("disabled", true);
	}

	if (data.pain_site !== null && data.pain_site !== "") {
		$("#painsite").prop("checked", true);
		$("#pain_site").val(data.pain_site);
        $("#pain_site").prop("disabled", false);
	} else {
		$("#pain_site").prop("disabled", true);
	}

	uppercase();
};

$("#painsite").change(function () {
	if (this.checked) {
		$("#pain_site").prop("disabled", false);
	} else {
		$("#pain_site").prop("disabled", true).val("");
		$("#pain_site").removeClass("is-invalid");
	}
});

$("#pertinent_others").change(function () {
	if (this.checked) {
		$("#sign_others").prop("disabled", false);
	} else {
		$("#sign_others").prop("disabled", true).val("");
		$("#sign_others").removeClass("is-invalid");
	}
});

function updateSymptoms() {
    if($("#pertinent_signs_symptoms_form").valid() == false){
        return;
    }
    var form = $('#pertinent_signs_symptoms_form')[0];
	let formData = new FormData(form);
	// get unchecked checkbox
	$.each(
		$("#pertinent_signs_symptoms_form input[type=checkbox]").filter(function (idx) {
			return $(this).prop("checked") === false;
		}),
		function (idx, el) {
			formData.append($(el).attr("name"), "");
		}
	);
    
	submitPertinentSignsSymptoms(formData, enccode);
};

submitPertinentSignsSymptoms = function (
	formData,
	enccode,
	loadData = false
) {
    var enc = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		url: baseURL + "pertinent-signs-symptoms/" + enc + "/save/",
		type: "POST",
		data: formData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		success: function (data, response) {
			toastr.success(data.message, "Success");

			if (loadData) {
				getPertinentSignsSymptomsData(enccode);
			}
		},
	});
};