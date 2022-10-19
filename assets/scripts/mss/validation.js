var baseURL=$('#base_url').val();

$('#frmMSS').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"MSS/saveMSS";
$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#mssformIden').val()=='insert')
				{
					toastr.success(' Successfully Saved! ' ,'Success');
					$('#ModalAddMSS').modal('hide');
						MSS($('#mssEnccode').val(),$('#mssHpercode').val());  
				}
				else if($('#mssformIden').val()=='update')
				{
		          toastr.success('Successfully Updated! ' ,'Success');
		          $('#ModalAddMSS').modal('hide');
 				 		MSS($('#mssEnccode').val(),$('#mssHpercode').val());
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
    sel_mss:'required',
    sel_interviewer:'required',
   
	
  },	
  messages: {
	   sel_mss:'Classification is required!',
    sel_interviewer:'Interviewer is required!',
   
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

