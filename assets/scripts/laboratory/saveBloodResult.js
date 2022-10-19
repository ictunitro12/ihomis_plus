$('#frmBlood').on('submit', function(e){
    $.ajax({
        type : "POST",
        url  : baseURL+"Laboratory/savebloodresult",
        data :new FormData(this),
        processData: false,
        contentType: false,
            success: function(data,response){
                toastr.success('Result saved! ' ,'Success');	
                $("#modalBlood").modal('hide');
            },
            error: function(xhr, desc, err){
                $("#modalBlood").modal('hide');
                toastr.error('Error on saving ' ,xhr);
            }
    });
    return false;
});


$('#modalBlood').on('hidden.coreui.modal', function(event) {
    $(this).find("input,textarea,select").val('').end();
    $(this).find("checkbox,radio").prop('checked',false);
    $(this).find("radio").removeAttr('checked');
    $(this).find("input,textarea,select").removeClass('is-valid'); 
    $(this).find("input,textarea,select").removeClass('is-invalid');
    $(this).find("select").val('').trigger('change');
});

$("#printBloodResult").on('click',function(){
   var intt= btoa($("#docointkey_bld").val());
   var enctr= btoa($("#enccode_bld").val());
   var percode= btoa($("#hpercode_bld").val());   
   var src =baseURL+"Laboratory/printBloodResult/"+percode+"/"+enctr+"/"+intt; 
   var x = document.getElementById("resultForm").src = src;
    $("#modalBlood").modal('hide');
    $("#modalResult").modal({backdrop:'static',show:true});
});
