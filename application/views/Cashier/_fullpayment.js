$('#frmPatientSaveAdmission').submit('click',function(){
    $.ajax({
    type : "POST",
    url  : baseURL+"Admission/savePatientAdmission",
    data :new FormData(this),
    processData: false,
    contentType: false,
    dataType: 'JSON',
    success: function(data,response){
    
    },
    error: function(data,response){
   
    }
    });
    return false;
    });