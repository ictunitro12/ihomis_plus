


$('#frmProcDetails').submit('click',function(){
  var  POSTURL = baseURL+"Ref_Procedures/saveProcDetails";
  $.ajax({
  type : "POST",
  url  :POSTURL,
  data :new FormData(this),
  processData: false,
  contentType: false,
  dataType: 'JSON',
  success: function(data,response){
    toastr.success('Successfully Saved!' ,'Success');
    $('#ModalAddProcDetails').modal('hide');
    $("#ProcDetailsTable").dataTable().ajax.reload();  
  },
  error: function(data,response){
    toastr.info(data);
  }
  });
  return false;
  });

