var baseURL = $('#module').val();

function checkCertificate(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../MedicoLegalALL/checkCertificate/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	

				$('#MedicoLegalAll').html('<embed src="'+"MedicoLegalALL/MedicoLegalALLView/"+enccode+"/"+hpercode+'" frameborder="2" width="100%" height="800px" id="MedicoLegalAll">');
			}
			else
			{ 
				$('#ModalRequest').modal({ backdrop: 'static'}).draggable({});
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
		var  POSTURL = baseURL+"MedicoLegalALL/saveRequest";
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
					$('#ModalRequest').modal('hide');
					var enctr=$("#req_enccode").val();
					var percode=$("#req_hpercode").val();
					console.log(enctr);
					console.log(percode);
					$('#MedicoLegalAll').html('<embed src="'+"MedicoLegalALL/MedicoLegalALLView/"+enctr+"/"+percode+'" frameborder="2" width="100%" height="800px" id="MedicoLegalAll">');
			     
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalRequest').modal('hide');
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

