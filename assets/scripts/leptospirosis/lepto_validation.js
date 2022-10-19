var baseURL=$('#base_url').val();

$('#frmlepto').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"Lepto/saveLepto";
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
					window.location.replace(baseURL+"Lepto");		
					PatientLogList($.session.get('from'),$.session.get('to'));
				}
				else if($('#formIden').val()=='update')
				{
		          toastr.success('Successfully Updated! ' ,'Success');
 				  window.location.replace(baseURL+"Lepto");	 
				  PatientLogList($.session.get('from'),$.session.get('to'));
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
	exposure:'required',
	selCityLepto:'required',
	selBrgyLepto:'required',
	street_Lepto:'required',
	pconsult:'required',
	selHospital:'required',
	admitted:'required',
  },	
  messages: {
	exposure:'Exposure is required!',
	selCityLepto:'Select City!',
	selBrgyLepto:'Select Barangay!',
	street_Lepto:'Select Street!',
	pconsult:'Required!',
	selHospital:'Required ',
	admitted:'Required!',
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