var baseURL = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
$("#msg-alert").hide();

$("#frmsetPass").validate({
		submitHandler: function (form) {
		var  POSTURL = baseURL+"Auth/activateUser";
				$.ajax({
					type : "POST",
					url  : POSTURL,
					dataType: "JSON",
					cache:false,
					async:true,
					data:$(form).serialize(),
					success: function(data){
						$("#msg-alert").show();
						$("#message").html(data['message']);
					},
					error: function(data)
					{
						$("#msg-alert").show();
						$("message").html(data);
					}
					});
				return false;
			 $(form).submit();
		   },
		  rules: {
			 password : {
                    minlength : 8,
					required:true
                },
                password_confirm :{
                    minlength : 8,
                    equalTo : "#password",
					required:true
                }
			},
			messages:{
				password:{
					required:"Password is required!",
				},
				password_confirm:{
					required:"Confirm password is required!",
					equalTo:"Password does not match!",
				}
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