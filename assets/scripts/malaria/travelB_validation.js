var baseURL=$('#base_url').val();

$('#frmAddTravelB').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"Malaria/saveTravelB";
		var  enccode = $.session.get('enccode');
		var  hpercode =$.session.get('hpercode');
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#Travel_2_Iden').val()=='insert')
				{
					toastr.success(' Successfully Saved! ' ,'Success');
					$('#AddTravelB').modal('hide');
					TravelBList(enccode,hpercode);  
				}
				else if($('#Travel_2_Iden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#AddTravelB').modal('hide');
					TravelBList(enccode,hpercode);  	 
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
		travel_2_enccode:'required',
		
	},	
	messages: {
		travel_2_enccode: 'Lastname is required!',
		
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