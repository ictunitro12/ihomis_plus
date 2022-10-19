$('#frmSavefwri').submit('click',function(){
  $.ajax({

    type : "POST",
    url  : baseURL+"FWRI/savePaputok",
    data :new FormData(this),
    processData: false,
    contentType: false,
    success: function(data,response){
      if($('#formIdentif').val()=='insert'){

        $("#FwriSummary").modal('hide');

        var code = $('#saveenccode').val();
        var percode = $('#savehpercode').val();
        toastr.success(' Successfully Saved! ' ,'Success');
        window.location.replace(baseURL+"FWRI");   
      }
      else if($('#formIdentif').val()=='update')
      {
        toastr.success(' Data Successfully Updated! ' ,'<i class="fa fa-check"></i> Success');
        $("#FwriSummary").modal('hide');
        var code = $('#saveenccode').val();
        var percode = $('#savehpercode').val();
        toastr.success(' Successfully Saved! ' ,'Success');
        window.location.replace(baseURL+"FWRI");   


      }
    },
    error: function(xhr, desc, err){
      toastr.error('Failed to Saved!' ,'Error');
    }
  });
  return false;
});



