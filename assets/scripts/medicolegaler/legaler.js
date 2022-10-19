var baseURL = $('#module').val();

function initLegalER(rowData){
	console.log(rowData);
	var toecode = rowData['toecode'];
	var enccode = rowData['enccode'];
	var hpercode = rowData['hpercode'];
	console.log(toecode);

	if (toecode == 'EMERGENCY') {
		checkCertificateER(enccode,hpercode);

	}
	else if (toecode == 'ADMISSION') {
		toastr.warning('No Record Found! </br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');
	}
	else if (toecode ='OUTPATIENT') {
		toastr.warning('No Record Found!<button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');	
	}
	else{
		toastr.error('Error!<button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Error');	

	}

}


function checkCertificateER(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../MedicoLegalER/checkCertificateER/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				$('#MedicoLegalER').html('<embed src="'+"MedicoLegalER/MedicoLegalERView/"+enccode+"/"+hpercode+'" frameborder="2" width="100%" height="800px" id="MedicoLegalER">');
			}
			else
			{ 
				$('#ModalRequestER').modal({ backdrop: 'static'}).draggable({});
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
		var  POSTURL = baseURL+"MedicoLegalER/saveRequestER";
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
					$('#ModalRequestER').modal('hide');
					$('#ModalMedicoLegalER').modal('show');	
					var enctr=$("#req_enccode").val();
					var percode=$("#req_hpercode").val();

					console.log(enctr);
					console.log(percode);
					$('#MedicoLegalER').html('<embed src="'+"MedicoLegalER/MedicoLegalERView/"+enctr+"/"+percode+'" frameborder="2" width="100%" height="800px" id="MedicoLegalER">');
					
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalRequestER').modal('hide');
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

