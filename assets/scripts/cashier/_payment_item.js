
function validate()
{	
$("#formPaymentItem").validate({
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

}

function getPercentOfNumber(number,percent)
{
    var num= (percent / 100) * number;
    return num;
}

function procDiscount(pdtyp,amt,percent)
{
    if (pdtyp == 'A') {
        return amt - percent;
    } else if (pdtyp = 'P') {
        var noper =   getPercentOfNumber(amt,percent);
            return noper+'%';
    } else {
        return 0.00;
    }
}
