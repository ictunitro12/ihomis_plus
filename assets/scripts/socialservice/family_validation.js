  
var baseURL=$('#base_url').val();

$('#frmAddFamily').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"SocialService/saveFamily";
$.ajax({
            type : "POST",
            url  : POSTURL,
            dataType: "JSON",
            cache:false,
            async:true,
            data: $(form).serialize(),
            success: function(data){
                if($('#AddIden').val()=='insert')
                {
                    toastr.success(' Successfully Saved! ' ,'Success');
                    $('#AddFamily').modal('hide');
                        FamilyCompositionList($.session.get('enccode'));  
                }
                else if($('#AddIden').val()=='update')
                {
                  toastr.success('Successfully Updated! ' ,'Success');
                  $('#AddFamily').modal('hide');
                        FamilyCompositionList($.session.get('enccode')); 
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
    fam_fname:'required',
    fam_lname:'required',
    fam_occupation:'required',
    fam_income:'required',
   
    
  },    
  messages: {
    fam_fname:'First Name is required!',
    fam_lname:'Last Name is required!',
    fam_occupation:'Occupation is required!',
    fam_income:'Income is required!',
   
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
