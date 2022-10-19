
$("#formUser").validate({
submitHandler: function (form){
var  POSTURL = baseURL+"auth/saveUser";

		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#formIdenUser').val()=='insert')
				{
					$("#message").html('Activation code sent to email address!');
					toastr.success('Data Successfully Saved! ' ,'Success');
					 location.href = baseURL+"Auth";
					
				}else if($('#formIdenUser').val()=='update')
				{
					toastr.success('Data Successfully Updated! ' ,'Success');
				}else{
					toastr.error('User already registered','Warning');
				}
			},
			error: function(data,textStatus,xhre){
						
					toastr.error('<small>'+textStatus+'</small>','Error!');
			}
			
			});
		return false;
	 $(form).submit();
   },
	rules:{
		
		selEmp:'required',
		userEmail:{
		required :true,
			remote:{		
			  depends: function () 
			  {
                    return $('#formIdenUser').val()=='insert';
              },
			  param:{
			
				url: "existEmail",	
				type:'POST'
			  }
			},
	},
		userPassword : {
			minlength : 8,
			required:true
		},
		userPasswordConfirm :{
			minlength : 8,
			equalTo : "#userPassword",
			required:true
		}
  },	
  messages:{
	    userPassword:{
		required:"Password is required!",
		},
		userPasswordConfirm:{
		required:"Confirm password is required!",
		equalTo:"Password does not match!",
		},
	  selEmp:'Select employee here!',
	  userEmail: 
	 {	
		required:'Email address is required!',
		remote: "Email address is already registered!"
     },
	
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


	

$('#formAccess').submit('click',function(){
		$.ajax({
		type : "POST",
		url  : baseURL+"auth/saveAccess",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
		if($('#formIdenAccess').val()=='insert')
		{
			toastr.success('Access Successfully Saved!' ,'Success');
			location.reload();
		}
		else if($('#formIdenAccess').val()=='update')
		{
			toastr.success('Access Successfully Updated!' ,'<i class="fa fa-check"></i> Success');
			location.reload();
		}
		},
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		return false;
});






