$('#frmRequest').validate({
  submitHandler: function (form) {
    var  POSTURL = baseURL+"Rep_MedRec/saveRequest";
    $.ajax({
      type : "POST",
      url  : POSTURL,
      dataType: "JSON",
      cache:false,
      async:true,
      data: $(form).serialize(),
      success: function(data){
        if($('#formIden').val()=='insert'){
          var enccode=  $("#enccode").val();
          var hpercode =  $("#hpercode").val();
          $("#Enccode").val(enccode);
          $("#Hpercode").val(hpercode);
          toastr.success('Successfully Saved! ' ,'Success');
          $('#Request').modal('hide');
          $('#FollowRep').modal('show');    
        }
        
        else{
          toastr.error('Error on saving!','Error');

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
   
    reqperson:'required',
    purpose:'required',
    
  },  
  messages: {
   reqperson:'required',
   purpose:'required',
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
