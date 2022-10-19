
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


$('#formPaymentItem').submit('click',function(){
    var formData = new FormData(this);
    var row = formData.getAll("row[]");
    var orno = $("#orno").val();
    var paylist=$('#toPayList').DataTable();
    for(var i = 0; i <row.length; i++)
    {
        
        var enccode = $.session.get('Cashierenccode');
        var hpercode= $.session.get('Cashierhpercode');
        var slipno= $(paylist.cell(row[i], 0).node()).text();
        var itemcode= $(paylist.cell(row[i], 4).node()).text();
        var chrgcode= $(paylist.cell(row[i], 5).node()).text();
        var amt= $(paylist.cell(row[i], 3).node()).text();
        
        var ordate =$("#ordate").val();
        var acctno = $("#itemAccount").val();
        var Remarks = $("#itemRemarks").val();
        var itemmop = $("input[name=itemMop]").val();
        var checkno = $("#checkno").val();
        var checkdate = $("#checkdate").val();
        var formType = $("#formIdenItem").val();
        
        var dataString ='&enccode='+enccode+
                '&hpercode='+hpercode+
                '&acctno='+acctno+
                '&slipno='+slipno+
                '&tendered='+amt+
                '&itemcode='+itemcode+
                '&chrgcode='+chrgcode+
                '&orno='+orno+
                '&ordate='+ordate+
                '&remarks='+Remarks+
                '&checkno='+checkno+
                '&formIdenItem='+formType+
                '&itemmop='+itemmop+
                '&checkdate='+checkdate;
            var url = baseURL+"Cashier/payItem";
                $.ajax({
                type:'POST',
                data:dataString,
                dataType:'JSON',
                url:url,
                success:function(data) {
                    toastr.success('Payment done!','Success');
                    $("#ModalPayment_modal").modal('hide');
                    location.reload();
                },
                error:function(data){
                    console.log(data.status);
                }
                });
    }       
    return false;
});