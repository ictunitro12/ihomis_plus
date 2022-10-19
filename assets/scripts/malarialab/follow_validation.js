var baseURL=$('#base_url').val();

$('#frmAddFollowup').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"MalariaLab/saveMalariaFollow";
		var  code = $.session.get('enccode');
		var  percode =$.session.get('hpercode');
		var enccode = encodeURIComponent(encodeURIComponent(code));
		var hpercode = encodeURIComponent(encodeURIComponent(percode));
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#FollowIden').val()=='insert')
				{
					toastr.success(' Successfully Saved! ' ,'Success');
					$('#AddFollowup').modal('hide');
					Day3List(enccode,hpercode);  			
					Day7List(enccode,hpercode);  			
					Day14List(enccode,hpercode);  			
					Day21List(enccode,hpercode);  			
					Day28List(enccode,hpercode);  			
				}
				else if($('#FollowIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#AddFollowup').modal('hide');
					Day3List(enccode,hpercode);  			
					Day7List(enccode,hpercode);  			
					Day14List(enccode,hpercode);  			
					Day21List(enccode,hpercode);  			
					Day28List(enccode,hpercode);   
				}
			},
			error: function(data){
				toastr.error('Error on saving!','Error');
			}
		});
		return false;
		$(form).submit();
	},
	rules: {
		follow:'required',
		encountercode:'required',
		percode:'required',
		

	},	
	messages: {
		follow:'required!',
		encountercode:'required!',
		percode:'required!',
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