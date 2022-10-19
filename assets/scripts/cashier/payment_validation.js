$("#formPayment").validate({
rules: {
ordate:'required',
orno:'required',
tenderedAmt:'required',
balanceAmt:'required',
itemMOP:'required'
},
messages: {
ordate:'required',
orno:'required',
tenderedAmt:'required',
balanceAmt:'required',
itemMOP:'required',
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

 $('#formPayment').submit('click',function(){
    $.ajax({
    type : "POST",
    url  : baseURL+"Cashier/savePayment",
    data :new FormData(this),
    processData: false,
    contentType: false,
    dataType: 'JSON',
    success: function(data,response){
        toastr.success('Initial payment received' ,'Success');
        $("#paymentModal").modal('hide');
        getInitialPayment(URLencode($.session.get('Cashierenccode')));
    },
    error: function(data,response){
        toastr.error('Payment failed' ,'Error');
    }
    });
    return false;
    });
  $("#paymentModal").on('hidden.coreui.modal', function(event) {
    $(this).find("input,textarea,select").val('').end();
    $(this).find("checkbox,radio").prop('checked',false);
    $(this).find("radio").removeAttr('checked');
    $(this).find("input,textarea,select").removeClass('is-valid'); 
    $(this).find("input,textarea,select").removeClass('is-invalid');
    $(this).find("select").val('').trigger('change');
});
    
