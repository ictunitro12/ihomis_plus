var Module = $('#module').val();

function initcheck() {
  memper_ip();
  $("#memper_ip").change(memper_ip);

}
function memper_ip()
{
  $('#member_ip').change(function () {
    if ($(this).val() == 'Y') {
      $('#selIndig').removeAttr('disabled');
    } else {
      $('#selIndig').attr("disabled", true);
      document.getElementById('selIndig').innerHTML = null;
    }
  });
}
$('#arthralgia').change(function () {
  if ($(this).val() == 'Y') {
    $('#date_arthralgia').removeAttr('disabled');
  } else {
    $('#date_arthralgia').attr("disabled", true);
    $('#date_arthralgia').val('');
  }
});
$('#historytravel').change(function () {
  if ($(this).val() == 'Y') {
    $('#historytravel_specify').removeAttr('disabled');
  } else {
    $('#historytravel_specify').attr("disabled", true);
    $('#historytravel_specify').val('');
  }
});
$('#outcome').change(function () {
  if ($(this).val() == 'D') {
    $('#date_died').removeAttr('disabled');
  } else {
    $('#date_died').attr("disabled", true);
    $('#date_died').val('');
  }
});
$('#mainsourcewater').change(function() {
  if( $(this).val() == 'O') {
      $('#mainsourcewater_others').removeAttr('disabled');
  } else {       
      $('#mainsourcewater_others').attr("disabled", true );
      $('#mainsourcewater_others').val("");
  }
});
