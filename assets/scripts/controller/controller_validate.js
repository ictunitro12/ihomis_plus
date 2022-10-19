$('#formController').validate({
submitHandler: function (form){
var  POSTURL = baseURL+"Controller/saveController";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data)
			{
				if($('#formIdenController').val()=='insert')
				{
					toastr.success('Data Successfully Saved!' ,'Success');
					formReset(form);
				}
				else if($('#formIdenController').val()=='update')
				{
					toastr.success('Data Successfully Updated! ' ,'Success');
				}
				else
				{
					toastr.error('Error:No post' ,'Error');
				}
			},
			error: function(data,textStatus,xhre)
			{
					toastr.error('<small>'+data+'</small>','Error!');
			}
			});
		return false;
	 $(form).submit();
   },
  rules:{
	controllerName:{
		required :true,
			remote:{
			depends: function () 
			  {
                    return $('#formIdenController').val()=='insert';
              },				
			  param:{
			
				url: "exists",	
				type:'POST'
			  }
			},
	},
    controllerType:'required',
  },	
  messages:{
	controllerName: 'Name is required!',
		controllerName: 
	 {	
		required:'Controller name is required!',
		remote: "Controller is Exists!"
     },
    
    controllerType: 'Type is required!'
  },
  errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
  

   if(element.hasClass('select2-hidden-accessible'))
	{
		error.insertAfter(element.next('.select2-container'));
	    error.addClass('invalid-feedback');
	}
	else 
	{
      error.insertAfter(element);
	    error.addClass('invalid-feedback');
    }
  },

  highlight: function highlight(element) {
 $(element).addClass('is-invalid').removeClass('is-valid');
		  if( $(element).hasClass('select2-offscreen'))
		  {
			 
			$(element).addClass('is-invalid').removeClass('is-valid');
		  }else{
			
		  }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
  } 
});
