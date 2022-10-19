$('#frmSaveInjury').submit('click',function(){
  $.ajax({

    type : "POST",
    url  : baseURL+"Oneiss/saveInjury",
    data :new FormData(this),
    processData: false,
    contentType: false,
    success: function(data,response){
      if($('#formIdentif').val()=='insert'){

        $("#InjurySummary").modal('hide');

        var code = $('#saveenccode').val();
        var percode = $('#savehpercode').val();
        toastr.success(' Successfully Saved! ' ,'Success');
        window.location.replace(baseURL+"Oneiss");   
      }
      else if($('#formIdentif').val()=='update')
      {
        toastr.success(' Data Successfully Updated! ' ,'<i class="fa fa-check"></i> Success');
        $("#InjurySummary").modal('hide');
        var code = $('#saveenccode').val();
        var percode = $('#savehpercode').val();
        toastr.success(' Successfully Saved! ' ,'Success');
        window.location.replace(baseURL+"Oneiss");   


      }
    },
    error: function(xhr, desc, err){
      toastr.error('Failed to Saved!' ,'Error');
    }
  });
  return false;
});
$('#form-step-5').validate({
	rules: {
		pat_initial:'required',
		pat_disp:'required',
		pat_outcome:'required',
	},
	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
			error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-coreui-hidden-accessible'))
		{
			element=$("#sel" + element.attr("id") + "ul").parent();
			error.insertAfter(element.parent());
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




