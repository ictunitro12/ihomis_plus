var baseURL = window.location.origin + '/';
$('#formLogin').validate({
	submitHandler: function (form) {
	var  POSTURL = baseURL+"Auth/login";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			data: $(form).serialize(),
			success: function(data){
			var obj = jQuery.parseJSON(data);
				
				if(obj.type === "hospital"){
					location.href = baseURL+'Auth/Profile';
				}else if(obj.type === "clinic"){
					location.href = obj.message;
				}else{
					$("#message").addClass('alert alert-danger');
					$("#message").prop('hidden',false);
					$("#message").html(obj.message);
				}
			},
			error: function(data,textStatus,xhre){
		
				alert('Check your configuration!');
			}
			});
		return false;
	 $(form).submit();
   },
  ignore: [],
   rules: {
    'identity': {
      required: true
    },
	 'password':{
      required: true
    }
   },

  messages: {
	'identity': 'Usernamme/Email address is invalid!',
	'password': 'Password  is invalid!',
  },

  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-hidden-accessible'))
	{
	 element=$("#selCity" + element.attr("id") + "ul").parent();

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
		 $("#s2id_" + element.attr("id") + " ul").addClass('is-invalid').removeClass('is-valid');
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