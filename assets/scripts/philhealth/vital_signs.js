$(document).ready(function () {
	const enccode = $("#enccode").val();
    const hpercode = $("#hpercode").val();
});

function validate_vital_signs_form(){
	var errordiv = "";
	if($("#vsbp").val() != '' && $("#vsbp").val() != 'palpatory' && $("#vsbp").val() != 'PALPATORY' && $("#vsbp").val() != 'N/A' && $("#vsbp").val() != 'n/a' && $("#vsbp").val() != 'NA' && $("#vsbp").val() != 'na'){		
		errordiv = $('<div class="invalid-feedback">Invalid value for BP!</div>');
		var vspb = $("#vsbp").val().split('/');
		if(vspb.length != 2){
			toastr.warning("Invalid value for BP!","warning");
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}

		if(isNaN(vspb[0]) || isNaN(vspb[1]) || vspb[0] == '' || vspb[1] == ''){
			toastr.warning("Invalid value for BP!","warning");
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}

		if((vspb[0] % 1 != 0) || (vspb[1] % 1 != 0)){
			toastr.warning("Invalid value for BP!","warning");
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}

		if(Number.isInteger(Number(vspb[0])) == false || Number.isInteger(Number(vspb[1])) == false){
			toastr.warning("Invalid value for BP!","warning");
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}

		let systolic = vspb[0];
		let diastolic = vspb[1];
		if(systolic.indexOf(".") > 0 || diastolic.indexOf(".") > 0){
			toastr.warning("Invalid value for BP!","warning");
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}
	}

	$("#vsbp").removeClass('is-invalid');
	$("#vsbp").addClass("is-valid");
	$("#vsbp").next(".invalid-feedback" ).remove();

	if($("#vspulse").val() != ''){
		errordiv = $('<div class="invalid-feedback">Invalid value for Heart Rete!</div>');		
		if(isNaN($("#vspulse").val())){
			toastr.warning("Invalid value for Heart Rate!","warning");
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}

		if(Number.isInteger(Number($("#vspulse").val())) == false){
			toastr.warning("Invalid value for Heart Rate!","warning");
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}

		if($("#vspulse").val().indexOf(".") > 0){
			toastr.warning("Invalid value for Heart Rate!","warning");
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}

		if($("#vspulse").val() == "0" || $("#vspulse").val() == 0){
			toastr.warning("Invalid value for Heart Rate!","warning");
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}
	}
	$("#vspulse").removeClass('is-invalid');
	$("#vspulse").addClass("is-valid");
	$("#vspulse").next(".invalid-feedback" ).remove();
	
	if($("#vsresp").val() != ''){	
		errordiv = $('<div class="invalid-feedback">Invalid value for Respiratory Rete!</div>');			
		if(isNaN($("#vsresp").val())){
			toastr.warning("Invalid value for Respiratory Rate!","warning");
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if(Number.isInteger(Number($("#vsresp").val())) == false){
			toastr.warning("Invalid value for Respiratory Rate!","warning");
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if($("#vsresp").val().indexOf(".") > 0){
			toastr.warning("Invalid value for Respiratory Rate!","warning");
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if($("#vsresp").val() == "0" || $("#vsresp").val() == 0){
			toastr.warning("Invalid value for Respiratory Rate!","warning");
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}
	}
	$("#vsresp").removeClass('is-invalid');
	$("#vsresp").addClass("is-valid");
	$("#vsresp").next(".invalid-feedback" ).remove();

	if($("#vstemp").val() != ''){	
		errordiv = $('<div class="invalid-feedback">Invalid value for Temperature!</div>');			
		if(isNaN($("#vstemp").val())){
			toastr.warning("Invalid value for Temperature!","warning");
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if($("#vspulse").val() == "0" || $("#vspulse").val() == 0){
			toastr.warning("Invalid value for Temperature!","warning");
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}
	}
	$("#vstemp").removeClass('is-invalid');
	$("#vstemp").addClass("is-valid");
	$("#vstemp").next(".invalid-feedback" ).remove();
	return true;
}

$('#vsbp').change(function() {
	if($("#vsbp").val() != '' && $("#vsbp").val() != 'palpatory' && $("#vsbp").val() != 'PALPATORY' && $("#vsbp").val() != 'N/A' && $("#vsbp").val() != 'n/a' && $("#vsbp").val() != 'NA' && $("#vsbp").val() != 'na'){
		var errordiv = $('<div class="invalid-feedback">Invalid value for BP!</div>');
		var vspb = $("#vsbp").val().split('/');
		if(vspb.length != 2){
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}

		if(isNaN(vspb[0]) || isNaN(vspb[1]) || vspb[0] == '' || vspb[1] == ''){
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}

		if((vspb[0] % 1 != 0) || (vspb[1] % 1 != 0)){
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}

		if(Number.isInteger(Number(vspb[0])) == false || Number.isInteger(Number(vspb[1])) == false){
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}
		let systolic = vspb[0];
		let diastolic = vspb[1];
		if(systolic.indexOf(".") > 0 || diastolic.indexOf(".") > 0){
			$("#vsbp").addClass('is-invalid');
			if($("#vsbp").next().attr('class') != 'invalid-feedback'){
				$("#vsbp").after(errordiv);
			}
			return false;
		}
	}
	$("#vsbp").removeClass('is-invalid');
	$("#vsbp").addClass("is-valid");
	$("#vsbp").next(".invalid-feedback" ).remove();
	return true;
});

$('#vspulse').change(function() {
	if($("#vspulse").val() != ''){
		var errordiv = $('<div class="invalid-feedback">Invalid value for Heart Rate!</div>');
		if(($("#vspulse").val() % 1 != 0)){
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}

		if(isNaN($("#vspulse").val())){
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}

		if(Number.isInteger(Number($("#vspulse").val())) == false){
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}
		if($("#vspulse").val().indexOf(".") > 0){
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}

		if($("#vspulse").val() == "0" || $("#vspulse").val() == 0){
			$("#vspulse").addClass('is-invalid');
			if($("#vspulse").next().attr('class') != 'invalid-feedback'){
				$("#vspulse").after(errordiv);
			}
			return false;
		}
	}
	$("#vspulse").removeClass('is-invalid');
	$("#vspulse").addClass("is-valid");
	$("#vspulse").next(".invalid-feedback" ).remove();
	return true;
});

$('#vsresp').change(function() {
	if($("#vsresp").val() != ''){
		var errordiv = $('<div class="invalid-feedback">Invalid value for Respiratory Rate!</div>');
		if(($("#vsresp").val() % 1 != 0)){
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if(isNaN($("#vsresp").val())){
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if(Number.isInteger(Number($("#vsresp").val())) == false){
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if($("#vsresp").val().indexOf(".") > 0){
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}

		if($("#vsresp").val() == "0" || $("#vsresp").val() == 0){
			$("#vsresp").addClass('is-invalid');
			if($("#vsresp").next().attr('class') != 'invalid-feedback'){
				$("#vsresp").after(errordiv);
			}
			return false;
		}
	}
	$("#vsresp").removeClass('is-invalid');
	$("#vsresp").addClass("is-valid");
	$("#vsresp").next(".invalid-feedback" ).remove();
	return true;
});

$('#vstemp').change(function() {
	if($("#vstemp").val() != ''){
		var errordiv = $('<div class="invalid-feedback">Invalid value for Temperature!</div>');
		if(isNaN($("#vstemp").val())){
			$("#vstemp").addClass('is-invalid');
			if($("#vstemp").next().attr('class') != 'invalid-feedback'){
				$("#vstemp").after(errordiv);
			}
			return false;
		}

		if($("#vstemp").val() == "0" || $("#vstemp").val() == 0){
			$("#vstemp").addClass('is-invalid');
			if($("#vstemp").next().attr('class') != 'invalid-feedback'){
				$("#vstemp").after(errordiv);
			}
			return false;
		}
	}
	$("#vstemp").removeClass('is-invalid');
	$("#vstemp").addClass("is-valid");
	$("#vstemp").next(".invalid-feedback" ).remove();
	return true;
});

$("#vital_signs_form").submit(function (e) {
	e.preventDefault();

	let formData = new FormData(this);

	formData.append("hpercode", hpercode);

	submitVistalSigns(formData, enccode);
});

submitVistalSigns = function (formData, enccode, loadData = false) {
	$.ajax({
		url: baseURI + "vital-signs/" + enccode + "/save/",
		type: "POST",
		data: formData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		success: function (data, response) {
			toastr.success(data.message, "Success");

			if (loadData) {
				getPostpartumData(data.data.enccode);
			}
		},
	});
};

getVitalSignsData = function (enccode) {
	$.ajax({
		url: baseURI + "vital-signs/" + enccode + "/get/",
		type: "GET",
		dataType: "JSON",
		processData: false,
		contentType: false,
		success: function (data, response) {
			if (data.data !== null) {
				bindVitalSignsData(data.data);
			}
		},
	});
};

bindVitalSignsData = function (data) {

	$("#vsbp").val(data.vsbp);
	$("#vspulse").val(data.vspulse);
	$("#vsresp").val(data.vsresp);
	$("#vstemp").val(data.vstemp);
};
