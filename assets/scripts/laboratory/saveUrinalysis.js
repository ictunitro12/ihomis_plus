$('#frmUrinalysis').on('submit', function(e){
    $.ajax({
        type : "POST",
        url  : baseURL+"Laboratory/savehurres",
        data :new FormData(this),
        processData: false,
        contentType: false,
            success: function(data,response){
                toastr.success('Result saved! ' ,'Success');	
                $("#modalUrinalysis").modal('hide');
            },
            error: function(xhr, desc, err){
                $("#modalUrinalysis").modal('hide');
                toastr.error('Error on saving ' ,xhr);
            }
    });
    return false;
});



$('#modalUrinalysis').on('hidden.coreui.modal', function(event) {
    $(this).find("input,textarea,select").val('').end();
    $(this).find("checkbox,radio").prop('checked',false);
    $(this).find("radio").removeAttr('checked');
    $(this).find("input,textarea,select").removeClass('is-valid'); 
    $(this).find("input,textarea,select").removeClass('is-invalid');
    $(this).find("select").val('').trigger('change');
    $("#txtMult").find("tr").remove();
});

$("#printUrinalysis").on('click',function(){
   var intt= btoa($("#docointkey_result").val());
   var enctr= btoa($("#enccode_result").val());
   var percode= btoa($("#hpercode_result").val());
    var rowData= $.ajax({
        type: "POST",
        async: true, 
        url:baseURL+'Laboratory/printUrinalysis/'+percode+'/'+enctr+'/'+intt,
        success:function(data){
            window.open(baseURL+'Laboratory/printUrinalysis/'+percode+'/'+enctr+'/'+intt, '_self '); 

        }
    
    
    });


});