var Module=$('#module').val();

    function initcheck()
    {
      ili_ainfluenza();
      $("#ili_ainfluenza").click(ili_ainfluenza);
    }

    $('#typeofdru').change(function() {
        if( $(this).val() == '9') {
            $('#typeofdru_other').removeAttr('disabled');
        } else {       
            $('#typeofdru_other').attr("disabled", true );
        }
    });
function ili_ainfluenza()
{
      $("#ili_ainfluenza").click(function(){
            if($(this).is(":checked")){
              $('#ili_ainfluenza').val('Y');
                $("#date_vaccination").removeAttr('disabled');
            }
        });
      $("#ili_ainfluenza").click(function(){
            if($(this).is(":unchecked")){
              $('#ili_ainfluenza').val('N');
                $("#date_vaccination").attr('disabled', true);
                $("#date_vaccination").val("");
            }
        }); 

}

$('#hili_travelhistory').change(function() {
  if( $(this).val() == 'Y') {
      $('#hili_travelhistory_specify').removeAttr('disabled');
      $('#hili_travelhistory').val('Y');
  } else {
    $('#hili_travelhistory').val('N');
      $('#hili_travelhistory_specify').attr("disabled", true );
  }
});
$('#member_ip').change(function() {
  if( $(this).val() == 'Y') {
      $('#selIndig').removeAttr('disabled');
  } else {       
      $('#selIndig').attr("disabled", true );
  }
});
