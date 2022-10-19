var baseURL=$('#base_url').val();

$('#frmCholera').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"PIDSR_Cholera/saveCholera";
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
					 window.location.replace(baseURL+"PIDSR_Cholera");		
				}
				else if($('#formIden').val()=='update')
				{
		          toastr.success('Successfully Updated! ' ,'Success');
 				  window.location.replace(baseURL+"PIDSR_Cholera");     
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
	date_onset:'required',
	case_classification:'required',
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
    info_cs: 'Civil Status required!',
	date_onset: 'Date Onset of Illness is required!',
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