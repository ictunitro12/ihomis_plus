var baseURL = $('#module').val();

function initCertDisc(rowData){
	var toecode = rowData['toecode'];
	var enccode = rowData['enccode'];
	var hpercode = rowData['hpercode'];
	var disdate = rowData['disdate'];

	if (toecode == 'ADMISSION' && disdate != null) {
		$("#follow_enc").val(enccode);
		$("#follow_per").val(hpercode);
		$('#FollowRep').modal('show');	
				
		checkCertificateDisc(enccode,hpercode);
	}
	else if (toecode == 'ADMISSION') {
		toastr.warning('No record Found! </br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');
	}
	else if (toecode ='OUTPATIENT') {
		toastr.warning('No record Found!<button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');	
	}
	else if (toecode ='EMERGENCY') {
		toastr.warning('No record Found!<button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');	
	}
	else{
		toastr.error('Error!<button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Error');	

	}

}


function checkCertificateDisc(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../MedicalCertDisc/checkCertificateDisc/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				$("#follow_enc").val(enccode);
				$("#follow_per").val(hpercode);
				$('#FollowRep').modal('show');		
			}
			else
			{ 
				$('#ModalRequestDisc').modal({ backdrop: 'static'}).draggable({});
				$("#req_enccode").val(enccode);
				$("#req_hpercode").val(hpercode);
				$("#formIden").val('insert');
				intkey(enccode);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}


$('#frmRequest').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"MedicalCertDisc/saveRequestDisc";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#formIden').val()=='insert')
				{
					toastr.success(' Successfully Saved! ' ,'Success');
					$('#ModalRequestDisc').modal('hide');
					$('#FollowRep').modal('show');
					$('#follow_enc').val($('#req_enccode').val());
					$('#follow_per').val($('#req_hpercode').val());	
								
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalRequestDisc').modal('hide');
				}
			},
			error: function(data){
				toastr.error('Error!','Error');
			}
		});
		return false;
		$(form).submit();
	},
	rules: {
		reqperson:'required',
		purpose:'required',


	},	
	messages: {
		reqperson:'required!',
		purpose:'required!',
	},
	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
			error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-hidden-accessible'))
		{
			element=$("#selReg" + element.attr("id") + "ul").parent();

			error.insertAfter(element);
		}
		else 
		{
			error.insertAfter(element);
		}
	},

	highlight: function highlight(element) {
		$(element).addClass('is-invalid').removeClass('is-valid');
		if( $(element).hasClass('select2-offscreen'))
		{
			element=$("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},

	unhighlight: function unhighlight(element) {
		$(element).addClass('is-valid').removeClass('is-invalid');
		if( $(element).hasClass('select2-offscreen'))
		{
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	} 
});


$("#certdisclink").on('click',function(){

	var enccode = $('#follow_enc').val();
	var hpercode = $('#follow_per').val();
	$('#FollowRep').modal('hide');	


	if($('#Occupation').is(':checked') && $('#Citizenship').is(':checked')) 
	{ 
		$('#MedicalCertDiscPDF').html('<embed src="' + "MedicalCertDisc/MedicalCertDiscView/" + enccode + "/" +hpercode+ '" frameborder="2" width="100%" height="800px" id="MedicalCertDiscPDF">');
	} 
	else if($('#Occupation').is(':checked')) 
	{ 
		$('#MedicalCertDiscPDF').html('<embed src="' + "MedicalCertDisc/MedicalCertDiscOccup/" + enccode + "/" +hpercode+ '" frameborder="2" width="100%" height="800px" id="MedicalCertDiscPDF">');
	} 
	else if($('#Citizenship').is(':checked'))
	{ 
		$('#MedicalCertDiscPDF').html('<embed src="' + "MedicalCertDisc/MedicalCertDiscCitizen/" + enccode + "/" +hpercode+ '" frameborder="2" width="100%" height="800px" id="MedicalCertDiscPDF">');
	}
	else 
	{
		$('#MedicalCertDiscPDF').html('<embed src="' + "MedicalCertDisc/MedicalCertDiscView/" + enccode + "/" +hpercode+ '" frameborder="2" width="100%" height="800px" id="MedicalCertDiscPDF">');
	}


});

$("#ok").on('click',function(){
	$("#NotFound").modal('hide');
	$("#certdisclink").modal('hide');
});
