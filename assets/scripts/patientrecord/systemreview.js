function systemReview(enccode,hpercode)
{
	checkSysRev(enccode,hpercode);
}



function checkSysRev(enccode)
{
	var  POSTURL = baseURL+"PatientRecords/checkSysRev/";
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		type: "POST",
		url: POSTURL + enccode,
		data: "JSON",
		success: function(data)
		{ 
			console.log(data);
			if (data>0) {
				$('#sysformIden').val('update');
				getMaxSys(enctr);
			}
			else{
				$('#sysformIden').val('insert');
				$('#sysEnccode').val(enccode);
				$('#sysHpercode').val(hpercode);
				$('#sysdatelog').val(getTimeLocale());
				validation();
			}
			
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}

function getMaxSys(enccode){
	$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/getMaxSys/"+ enccode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
			var enccode = encodeURIComponent(encodeURIComponent(obj['enccode']));
			var datelog = encodeURIComponent(encodeURIComponent(obj['datelog']));
			getSysRev(enccode,datelog);
		},
		error: function(data,status){
		}
	});
	return obj;
}

function getSysRev(enccode, datelog){
	$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/getSysRev/"+ enccode + "/" + datelog,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);

			validation();

			$('#sysEnccode').val(obj['enccode']);
			$('#sysHpercode').val(obj['hpercode']);
			$('#sysdatelog').val(obj['datelog']);

			if (obj['gen_fever'] == 'Y') {
				$("#gen1").prop('checked', true);
				$("#gen1").val("Y");
			}
			else {
				$("#gen1").prop('checked', false);
				$("#gen1").val("N");
			}

			if (obj['gen_chills'] == 'Y') {
				$("#gen2").prop('checked', true);
				$("#gen2").val("Y");
			}
			else {
				$("#gen2").prop('checked', false);
				$("#gen2").val("N");
			}

			if (obj['gen_weakness'] == 'Y') {
				$("#gen3").prop('checked', true);
				$("#gen3").val("Y");
			}
			else {
				$("#gen3").prop('checked', false);
				$("#gen3").val("N");
			}

			if (obj['gen_nausea'] == 'Y') {
				$("#gen4").prop('checked', true);
				$("#gen4").val("Y");
			}
			else {
				$("#gen4").prop('checked', false);
				$("#gen4").val("N");
			}

			if (obj['eye_redness'] == 'Y') {
				$("#eye1").prop('checked', true);
				$("#eye1").val("Y");
			}
			else {
				$("#eye1").prop('checked', false);
				$("#eye1").val("N");
			}

			if (obj['eye_itching'] == 'Y') {
				$("#eye2").prop('checked', true);
				$("#eye2").val("Y");
			}
			else {
				$("#eye2").prop('checked', false);
				$("#eye2").val("N");
			}

			if (obj['eye_blurred_vision'] == 'Y') {
				$("#eye3").prop('checked', true);
				$("#eye3").val("Y");
			}
			else {
				$("#eye3").prop('checked', false);
				$("#eye3").val("N");
			}

			if (obj['eye_loss_vision'] == 'Y') {
				$("#eye4").prop('checked', true);
				$("#eye4").val("Y");
			}
			else {
				$("#eye4").prop('checked', false);
				$("#eye4").val("N");
			}

			if (obj['eye_diplopia'] == 'Y') {
				$("#eye5").prop('checked', true);
				$("#eye5").val("Y");
			}
			else {
				$("#eye5").prop('checked', false);
				$("#eye5").val("N");
			}

			if (obj['ent_congestion'] == 'Y') {
				$("#ent1").prop('checked', true);
				$("#ent1").val("Y");
			}
			else {
				$("#ent1").prop('checked', false);
				$("#ent1").val("N");
			}

			if (obj['ent_epistaxis'] == 'Y') {
				$("#ent2").prop('checked', true);
				$("#ent2").val("Y");
			}
			else {
				$("#ent2").prop('checked', false);
				$("#ent2").val("N");
			}

			if (obj['ent_sore_throat'] == 'Y') {
				$("#ent3").prop('checked', true);
				$("#ent3").val("Y");
			}
			else {
				$("#ent3").prop('checked', false);
				$("#ent3").val("N");
			}

			if (obj['ent_hoarseness'] == 'Y') {
				$("#ent4").prop('checked', true);
				$("#ent4").val("Y");
			}
			else {
				$("#ent4").prop('checked', false);
				$("#ent4").val("N");
			}

			if (obj['ent_ear_ache'] == 'Y') {
				$("#ent5").prop('checked', true);
				$("#ent5").val("Y");
			}
			else {
				$("#ent5").prop('checked', false);
				$("#ent5").val("N");
			}

			if (obj['ent_ear_discharge'] == 'Y') {
				$("#ent6").prop('checked', true);
				$("#ent6").val("Y");
			}
			else {
				$("#ent6").prop('checked', false);
				$("#ent6").val("N");
			}

			if (obj['cv_chest_pain'] == 'Y') {
				$("#cv1").prop('checked', true);
				$("#cv1").val("Y");
			}
			else {
				$("#cv1").prop('checked', false);
				$("#cv1").val("N");
			}

			if (obj['cv_palpitations'] == 'Y') {
				$("#cv2").prop('checked', true);
				$("#cv2").val("Y");
			}
			else {
				$("#cv2").prop('checked', false);
				$("#cv2").val("N");
			}

			if (obj['cv_orthopnea'] == 'Y') {
				$("#cv3").prop('checked', true);
				$("#cv3").val("Y");
			}
			else {
				$("#cv3").prop('checked', false);
				$("#cv3").val("N");
			}

			if (obj['cv_pedal_edema'] == 'Y') {
				$("#cv4").prop('checked', true);
				$("#cv4").val("Y");
			}
			else {
				$("#cv4").prop('checked', false);
				$("#cv4").val("N");
			}

			if (obj['cv_pnd'] == 'Y') {
				$("#cv5").prop('checked', true);
				$("#cv5").val("Y");
			}
			else {
				$("#cv5").prop('checked', false);
				$("#cv5").val("N");
			}

			if (obj['resp_dob'] == 'Y') {
				$("#respi1").prop('checked', true);
				$("#respi1").val("Y");
			}
			else {
				$("#respi1").prop('checked', false);
				$("#respi1").val("N");
			}

			if (obj['resp_cough'] == 'Y') {
				$("#respi2").prop('checked', true);
				$("#respi2").val("Y");
			}
			else {
				$("#respi2").prop('checked', false);
				$("#respi2").val("N");
			}

			if (obj['resp_sputum'] == 'Y') {
				$("#respi3").prop('checked', true);
				$("#respi3").val("Y");
			}
			else {
				$("#respi3").prop('checked', false);
				$("#respi3").val("N");
			}

			if (obj['resp_hemoptysis'] == 'Y') {
				$("#respi4").prop('checked', true);
				$("#respi4").val("Y");
			}
			else {
				$("#respi4").prop('checked', false);
				$("#respi4").val("N");
			}

			if (obj['resp_wheezing'] == 'Y') {
				$("#respi5").prop('checked', true);
				$("#respi5").val("Y");
			}
			else {
				$("#respi5").prop('checked', false);
				$("#respi5").val("N");
			}

			if (obj['gi_abdom_pain'] == 'Y') {
				$("#gi1").prop('checked', true);
				$("#gi1").val("Y");
			}
			else {
				$("#gi1").prop('checked', false);
				$("#gi1").val("N");
			}

			if (obj['gi_vomiting'] == 'Y') {
				$("#gi2").prop('checked', true);
				$("#gi2").val("Y");
			}
			else {
				$("#gi2").prop('checked', false);
				$("#gi2").val("N");
			}

			if (obj['gi_constipation'] == 'Y') {
				$("#gi3").prop('checked', true);
				$("#gi3").val("Y");
			}
			else {
				$("#gi3").prop('checked', false);
				$("#gi3").val("N");
			}

			if (obj['gi_melena'] == 'Y') {
				$("#gi4").prop('checked', true);
				$("#gi4").val("Y");
			}
			else {
				$("#gi4").prop('checked', false);
				$("#gi4").val("N");
			}

			if (obj['gi_hematochezia'] == 'Y') {
				$("#gi5").prop('checked', true);
				$("#gi5").val("Y");
			}
			else {
				$("#gi5").prop('checked', false);
				$("#gi5").val("N");
			}

			if (obj['gi_hematemesis'] == 'Y') {
				$("#gi6").prop('checked', true);
				$("#gi6").val("Y");
			}
			else {
				$("#gi6").prop('checked', false);
				$("#gi6").val("N");
			}

			if (obj['gu_dysuria'] == 'Y') {
				$("#gu1").prop('checked', true);
				$("#gu1").val("Y");
			}
			else {
				$("#gu1").prop('checked', false);
				$("#gu1").val("N");
			}

			if (obj['gu_frequency'] == 'Y') {
				$("#gu2").prop('checked', true);
				$("#gu2").val("Y");
			}
			else {
				$("#gu2").prop('checked', false);
				$("#gu2").val("N");
			}

			if (obj['gu_nocturia'] == 'Y') {
				$("#gu3").prop('checked', true);
				$("#gu3").val("Y");
			}
			else {
				$("#gu3").prop('checked', false);
				$("#gu3").val("N");
			}

			if (obj['gu_vaginal_discharge'] == 'Y') {
				$("#gu4").prop('checked', true);
				$("#gu4").val("Y");
			}
			else {
				$("#gu4").prop('checked', false);
				$("#gu4").val("N");
			}

			if (obj['gu_vaginal_bleeding'] == 'Y') {
				$("#gu5").prop('checked', true);
				$("#gu5").val("Y");
			}
			else {
				$("#gu5").prop('checked', false);
				$("#gu5").val("N");
			}

			if (obj['neuro_headache'] == 'Y') {
				$("#neuro1").prop('checked', true);
				$("#neuro1").val("Y");
			}
			else {
				$("#neuro1").prop('checked', false);
				$("#neuro1").val("N");
			}

			if (obj['neuro_blackout'] == 'Y') {
				$("#neuro2").prop('checked', true);
				$("#neuro2").val("Y");
			}
			else {
				$("#neuro2").prop('checked', false);
				$("#neuro2").val("N");
			}

			if (obj['neuro_numbness'] == 'Y') {
				$("#neuro3").prop('checked', true);
				$("#neuro3").val("Y");
			}
			else {
				$("#neuro3").prop('checked', false);
				$("#neuro3").val("N");
			}

			if (obj['neuro_unsteady_gait'] == 'Y') {
				$("#neuro4").prop('checked', true);
				$("#neuro4").val("Y");
			}
			else {
				$("#neuro4").prop('checked', false);
				$("#neuro4").val("N");
			}

			if (obj['neuro_seizure'] == 'Y') {
				$("#neuro5").prop('checked', true);
				$("#neuro5").val("Y");
			}
			else {
				$("#neuro5").prop('checked', false);
				$("#neuro5").val("N");
			}

			if (obj['ms_neck_pain'] == 'Y') {
				$("#ms1").prop('checked', true);
				$("#ms1").val("Y");
			}
			else {
				$("#ms1").prop('checked', false);
				$("#ms1").val("N");
			}

			if (obj['ms_back_pain'] == 'Y') {
				$("#ms2").prop('checked', true);
				$("#ms2").val("Y");
			}
			else {
				$("#ms2").prop('checked', false);
				$("#ms2").val("N");
			}

			if (obj['ms_hip_pain'] == 'Y') {
				$("#ms3").prop('checked', true);
				$("#ms3").val("Y");
			}
			else {
				$("#ms3").prop('checked', false);
				$("#ms3").val("N");
			}

			if (obj['ms_shoulder_pain'] == 'Y') {
				$("#ms4").prop('checked', true);
				$("#ms4").val("Y");
			}
			else {
				$("#ms4").prop('checked', false);
				$("#ms4").val("N");
			}

			if (obj['ms_jointpain'] == 'Y') {
				$("#ms5").prop('checked', true);
				$("#ms5").val("Y");
			}
			else {
				$("#ms5").prop('checked', false);
				$("#ms5").val("N");
			}

			if (obj['skin_rash'] == 'Y') {
				$("#skin1").prop('checked', true);
				$("#skin1").val("Y");
			}
			else {
				$("#skin1").prop('checked', false);
				$("#skin1").val("N");
			}

			if (obj['skin_swelling'] == 'Y') {
				$("#skin2").prop('checked', true);
				$("#skin2").val("Y");
			}
			else {
				$("#skin2").prop('checked', false);
				$("#skin2").val("N");
			}

			if (obj['skin_breast_discharge'] == 'Y') {
				$("#skin3").prop('checked', true);
				$("#skin3").val("Y");
			}
			else {
				$("#skin3").prop('checked', false);
				$("#skin3").val("N");
			}

			if (obj['skin_breast_masses'] == 'Y') {
				$("#skin4").prop('checked', true);
				$("#skin4").val("Y");
			}
			else {
				$("#skin4").prop('checked', false);
				$("#skin4").val("N");
			}

			if (obj['psych_anxious'] == 'Y') {
				$("#psych1").prop('checked', true);
				$("#psych1").val("Y");
			}
			else {
				$("#psych1").prop('checked', false);
				$("#psych1").val("N");
			}

			if (obj['psych_depression'] == 'Y') {
				$("#psych2").prop('checked', true);
				$("#psych2").val("Y");
			}
			else {
				$("#psych2").prop('checked', false);
				$("#psych2").val("N");
			}

			if (obj['psych_hallucination'] == 'Y') {
				$("#psych3").prop('checked', true);
				$("#psych3").val("Y");
			}
			else {
				$("#psych3").prop('checked', false);
				$("#psych3").val("N");
			}

			if (obj['psych_stress'] == 'Y') {
				$("#psych4").prop('checked', true);
				$("#psych4").val("Y");
			}
			else {
				$("#psych4").prop('checked', false);
				$("#psych4").val("N");
			}

			if (obj['psych_not_sleeping'] == 'Y') {
				$("#psych5").prop('checked', true);
				$("#psych5").val("Y");
			}
			else {
				$("#psych5").prop('checked', false);
				$("#psych5").val("N");
			}

			$('#others').val(obj['oth_systems_reviewed']);
			$('#all_1').val(obj['oth_all_systems']);

			if (obj['oth_all_systems'] == '3') {
				$("#all_2").removeAttr('disabled');
				$('#all_2').val(obj['oth_incomplete']);
			}
			else {
				$("#all_2").attr('disabled', true);
			}


		},
		error: function(data,status){
		}
	});
	return obj;
}	

$('#frmSystemReview').validate({
	submitHandler: function (form){
		var  POSTURL = baseURL+"PatientRecords/saveSystemReview";
		var enccode = encodeURIComponent(encodeURIComponent($('#sysEnccode').val()));
		var datelog = encodeURIComponent(encodeURIComponent($('#sysdatelog').val()));
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){				
				if($('#sysformIden').val()=='insert'){
					toastr.success('System Review Record Successfully Saved! ' ,'Success');
					checkSysRev(enccode);
				}else if($('#sysformIden').val()=='update'){
					toastr.success('System Review Record Successfully Updated! ' ,'Success');
					checkSysRev(enccode);				
				}
				else{
					toastr.success('System Review Record Successfully Updated! ' ,'Success');
				}
			},
			error: function(data){
				toastr.error('Error','Error');

			}
		});
		return false;
		$(form).submit();
	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element){
		error.addClass('invalid-feedback');
		error.insertAfter(element);

	},

	highlight: function highlight(element){
		$(element).addClass('is-invalid').removeClass('is-valid');
		if( $(element).hasClass('select2-offscreen'))
		{
			element=$("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},

	unhighlight: function unhighlight(element){
		$(element).addClass('is-valid').removeClass('is-invalid');
		if( $(element).hasClass('select2-offscreen'))
		{
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	} 
});

function addSysRev(enccode,hpercode)
{
	$('#SysRevModal').modal('show');	
	$('#sysformIden').val("insert");
	$('#sysEnccode').val(atob(enccode));	 
	$('#sysHpercode').val(atob(hpercode));	 
}


$('#systemreview').on('click','#btnEditSys',function(){
	$('#SysRevModal').modal('show');
	var enccode=atob($(this).data('enccode'));
	var hpercode=atob($(this).data('hpercode'));
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/systemReviewInfo/"+enctr,
		data: "JSON",
		async:false,
		success: function(data)
		{	
			
			obj = $.parseJSON(data);
			$('#sysformIden').val('update');
			$('#sysEnccode').val(enccode);
			$('#sysHpercode').val(hpercode);
			$('#sysGen').val(obj['gen']['srevdesc']);
			$('#sysSkin').val(obj['skin']['srevdesc']);
			$('#sysEENT').val(obj['eent']['srevdesc']);
			$('#sysMusco').val(obj['musco']['srevdesc']);
			$('#sysRespi').val(obj['respi']['srevdesc']);
			$('#sysCardio').val(obj['cardio']['srevdesc']);
			$('#sysGastro').val(obj['gastro']['srevdesc']);
			$('#sysGenito').val(obj['genit']['srevdesc']);
			$('#sysRepro').val(obj['repro']['srevdesc']);
			$('#sysNerv').val(obj['nerve']['srevdesc']);
			$('#sysPTB').val(obj['ptb']['srevdesc']);
			$('#sysAsth').val(obj['asthma']['srevdesc']);
			$('#sysCancer').val(obj['cancer']['srevdesc']);
			$('#sysOther').val(obj['other']['srevdesc']);
			
		},
		error: function(data)
		{
			toaster.error("Error: Fetching Patient Vital Sign!",'Error');
		}
	});
});



function validation(){
	$("#gen1").click(function(){
		if($(this).is(":checked")){
			$("#gen1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gen1").val("N");

		}
	});

	$("#gen2").click(function(){
		if($(this).is(":checked")){
			$("#gen2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gen2").val("N");

		}
	});

	$("#gen3").click(function(){
		if($(this).is(":checked")){
			$("#gen3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gen3").val("N");

		}
	});

	$("#gen4").click(function(){
		if($(this).is(":checked")){
			$("#gen4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gen4").val("N");

		}
	});

	$("#eye1").click(function(){
		if($(this).is(":checked")){
			$("#eye1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#eye1").val("N");

		}
	});

	$("#eye2").click(function(){
		if($(this).is(":checked")){
			$("#eye2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#eye2").val("N");

		}
	});

	$("#eye3").click(function(){
		if($(this).is(":checked")){
			$("#eye3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#eye3").val("N");

		}
	});

	$("#eye4").click(function(){
		if($(this).is(":checked")){
			$("#eye4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#eye4").val("N");

		}
	});

	$("#eye5").click(function(){
		if($(this).is(":checked")){
			$("#eye5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#eye5").val("N");

		}
	});

	$("#ent1").click(function(){
		if($(this).is(":checked")){
			$("#ent1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ent1").val("N");

		}
	});

	$("#ent2").click(function(){
		if($(this).is(":checked")){
			$("#ent2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ent2").val("N");

		}
	});

	$("#ent3").click(function(){
		if($(this).is(":checked")){
			$("#ent3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ent3").val("N");

		}
	});

	$("#ent4").click(function(){
		if($(this).is(":checked")){
			$("#ent4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ent4").val("N");

		}
	});

	$("#ent5").click(function(){
		if($(this).is(":checked")){
			$("#ent5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ent5").val("N");

		}
	});

	
	$("#ent6").click(function(){
		if($(this).is(":checked")){
			$("#ent6").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ent6").val("N");

		}
	});

	$("#cv1").click(function(){
		if($(this).is(":checked")){
			$("#cv1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#cv1").val("N");

		}
	});

	$("#cv2").click(function(){
		if($(this).is(":checked")){
			$("#cv2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#cv2").val("N");

		}
	});

	$("#cv3").click(function(){
		if($(this).is(":checked")){
			$("#cv3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#cv3").val("N");

		}
	});

	$("#cv4").click(function(){
		if($(this).is(":checked")){
			$("#cv4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#cv4").val("N");

		}
	});

	$("#cv5").click(function(){
		if($(this).is(":checked")){
			$("#cv5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#cv5").val("N");

		}
	});


	$("#respi1").click(function(){
		if($(this).is(":checked")){
			$("#respi1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#respi1").val("N");

		}
	});

	$("#respi2").click(function(){
		if($(this).is(":checked")){
			$("#respi2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#respi2").val("N");

		}
	});

	$("#respi3").click(function(){
		if($(this).is(":checked")){
			$("#respi3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#respi3").val("N");

		}
	});

	$("#respi4").click(function(){
		if($(this).is(":checked")){
			$("#respi4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#respi4").val("N");

		}
	});

	$("#respi5").click(function(){
		if($(this).is(":checked")){
			$("#respi5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#respi5").val("N");

		}
	});

	$("#gi1").click(function(){
		if($(this).is(":checked")){
			$("#gi1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gi1").val("N");

		}
	});

	$("#gi2").click(function(){
		if($(this).is(":checked")){
			$("#gi2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gi2").val("N");

		}
	});

	$("#gi3").click(function(){
		if($(this).is(":checked")){
			$("#gi3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gi3").val("N");

		}
	});

	$("#gi4").click(function(){
		if($(this).is(":checked")){
			$("#gi4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gi4").val("N");

		}
	});

	$("#gi5").click(function(){
		if($(this).is(":checked")){
			$("#gi5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gi5").val("N");

		}
	});

	
	$("#gi6").click(function(){
		if($(this).is(":checked")){
			$("#gi6").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gi6").val("N");

		}
	});

	$("#gu1").click(function(){
		if($(this).is(":checked")){
			$("#gu1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gu1").val("N");

		}
	});

	$("#gu2").click(function(){
		if($(this).is(":checked")){
			$("#gu2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gu2").val("N");

		}
	});

	$("#gu3").click(function(){
		if($(this).is(":checked")){
			$("#gu3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gu3").val("N");

		}
	});

	$("#gu4").click(function(){
		if($(this).is(":checked")){
			$("#gu4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gu4").val("N");

		}
	});

	$("#gu5").click(function(){
		if($(this).is(":checked")){
			$("#gu5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#gu5").val("N");

		}
	});

	$("#neuro1").click(function(){
		if($(this).is(":checked")){
			$("#neuro1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#neuro1").val("N");

		}
	});

	$("#neuro2").click(function(){
		if($(this).is(":checked")){
			$("#neuro2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#neuro2").val("N");

		}
	});

	$("#neuro3").click(function(){
		if($(this).is(":checked")){
			$("#neuro3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#neuro3").val("N");

		}
	});

	$("#neuro4").click(function(){
		if($(this).is(":checked")){
			$("#neuro4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#neuro4").val("N");

		}
	});

	$("#neuro5").click(function(){
		if($(this).is(":checked")){
			$("#neuro5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#neuro5").val("N");

		}
	});

	$("#ms1").click(function(){
		if($(this).is(":checked")){
			$("#ms1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ms1").val("N");

		}
	});

	$("#ms2").click(function(){
		if($(this).is(":checked")){
			$("#ms2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ms2").val("N");

		}
	});

	$("#ms3").click(function(){
		if($(this).is(":checked")){
			$("#ms3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ms3").val("N");

		}
	});

	$("#ms4").click(function(){
		if($(this).is(":checked")){
			$("#ms4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ms4").val("N");

		}
	});

	$("#ms5").click(function(){
		if($(this).is(":checked")){
			$("#ms5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#ms5").val("N");

		}
	});

	$("#skin1").click(function(){
		if($(this).is(":checked")){
			$("#skin1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#skin1").val("N");

		}
	});

	$("#skin2").click(function(){
		if($(this).is(":checked")){
			$("#skin2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#skin2").val("N");

		}
	});

	$("#skin3").click(function(){
		if($(this).is(":checked")){
			$("#skin3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#skin3").val("N");

		}
	});

	$("#skin4").click(function(){
		if($(this).is(":checked")){
			$("#skin4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#skin4").val("N");

		}
	});

	$("#psych1").click(function(){
		if($(this).is(":checked")){
			$("#psych1").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#psych1").val("N");

		}
	});

	$("#psych2").click(function(){
		if($(this).is(":checked")){
			$("#psych2").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#psych2").val("N");

		}
	});

	$("#psych3").click(function(){
		if($(this).is(":checked")){
			$("#psych3").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#psych3").val("N");

		}
	});

	$("#psych4").click(function(){
		if($(this).is(":checked")){
			$("#psych4").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#psych4").val("N");

		}
	});

	$("#psych5").click(function(){
		if($(this).is(":checked")){
			$("#psych5").val("Y");
		}
		else if($(this).is(":not(:checked)")){
			$("#psych5").val("N");

		}
	});

	$('#all_1').change(function() {
		if($("#all_1").val()== '3'){
			$('#all_2').removeAttr( "disabled" );
		} else {       
			$('#all_2').attr( "disabled", true );
			$('#all_2').val("");
		}
	});



}