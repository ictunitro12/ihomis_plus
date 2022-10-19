var baseURL=$('#base_url').val();

$('#frmMalariaPat').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"MalariaPat/saveMalariaPat";
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
					 window.location.replace(baseURL+"MalariaPat");		
				}
				else if($('#formIden').val()=='update')
				{
		          toastr.success('Successfully Updated! ' ,'Success');
 				  window.location.replace(baseURL+"MalariaPat");     
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
    info_lname:'required',
    info_fname:'required',
    info_mname:'required',
    info_street:'required', 
    info_dob:'required',
    info_sex:'required',
	info_fullname:{
		required :true,
			remote:{	
			  depends: function () 
			  {
                    return $('#formIden').val()=='insert';
              },
			  param:{
				url:baseURL+"Patient/existPatient",	
				type:'POST'
			  }
			},
	},
	
  },	
  messages: {
	info_lname: 'Lastname is required!',
    info_fname: 'Firstname is required!',
    info_mname: 'Middlename is require!',
	
	info_fullname: 
	 {	
		required:'Patient name is required',
		remote: "Patient is Exists!"
     },
    
    info_dob: 'Date of birth is required!',
    info_sex: 'Gender is required!',
  },
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('Patel'));
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