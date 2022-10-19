$(document).ready(function () {
	const enccode = $("#enccode").val();
	const hpercode = $("#hpercode").val();
	const gender = $("#gender").text();
	if(gender == 'Male'){
		$("#obg").prop("disabled",true);
		$("#obp").prop("disabled",true);
		$("#obft").prop("disabled",true);
		$("#obpt").prop("disabled",true);
		$("#obab").prop("disabled",true);
		$("#oblg").prop("disabled",true);
		$("#plmp").prop("disabled",true);
		$("#ob_na").prop("checked",true);
		$("#ob_na").attr("onclick","return false;");
	}
});

$('#ob_na').change(function() {
	if (this.checked) {
		$('#plmp').prop('disabled', true).val('');
	} else {
		$('#plmp').prop('disabled', false);
	}
});

$("#obgyn_history_form").submit(function (e) {
	e.preventDefault();

	let formData = new FormData(this);
	if(formData.has("obgyn[obg]") == false){
		formData.append("obgyn[obg]", "");
	} 
	if(formData.has("obgyn[obp]") == false){
		formData.append("obgyn[obp]", "");
	}
	if(formData.has("obgyn[obft]") == false){
		formData.append("obgyn[obft]", "");
	}
	if(formData.has("obgyn[obpt]") == false){
		formData.append("obgyn[obpt]", "");
	}
	if(formData.has("obgyn[obab]") == false){
		formData.append("obgyn[obab]", "");
	}
	if(formData.has("obgyn[oblg]") == false){
		formData.append("obgyn[oblg]", "");
	}
	formData.append("hpercode", hpercode);

	submitObgynHistory(formData, enccode);
});

submitObgynHistory = function (formData, enccode, loadData = false) {
	$.ajax({
		url: baseURI + "ob-gyn-history/" + enccode + "/save/",
		type: "POST",
		data: formData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		success: function (data, response) {
			toastr.success(data.message, "Success");

			if (loadData) {
				getObgynHistoryData(data.data.enccode);
			}
		},
	});
};

getObgynHistoryData = function (enccode) {
	$.ajax({
		url: baseURI + "ob-gyn-history/" + enccode + "/get/",
		type: "GET",
		dataType: "JSON",
		processData: false,
		contentType: false,
		success: function (data, response) {
			if (data.data !== null) {
				bindObgynHistoryData(data.data);
			}
		},
	});
};

bindObgynHistoryData = function (data) {
	$("#obg").val(data.obg);
	$("#obp").val(data.obp);

	$("#obft").val(data.obft);
	$("#obpt").val(data.obpt);
	$("#obab").val(data.obab);
	$("#oblg").val(data.oblg);
	var lmp = data.plmp;
	if(lmp != null && lmp != ''){
		lmp = lmp.substring(0,10);
		if(lmp != '1900-01-01' && lmp != '0000-00-00'){
			$("#plmp").val(lmp);
		}
	}

	if (data.plmp == "" || data.plmp == null || lmp == '1900-01-01' || lmp == '0000-00-00') {
		$("#ob_na").prop("checked", true);
		$("#plmp").prop("disabled", true);
	}
};
