$('#docOrdpres').on('click','#btnDeletePres_delete',function(){
    $('#deletePresModal').modal('show');
    var key=encodeURIComponent(encodeURIComponent(atob($(this).data('docointkey'))));
    $('#delPresDoco').val(key);
    $('#delpresformIden').val('delete');
    
});

$('#frmDeletePres').on('submit', function(e){
    $.ajax({
        type : "POST",
        url  : baseURL+"DoctorsOrder/deletePres",
        data :new FormData(this),
        processData: false,
        contentType: false,
            success: function(data,response){
                toastr.success('Order Successfully Deleted!' ,'Success');
                $("#docOrdpres").DataTable().ajax.reload();
                $('#deletePresModal').modal('hide');
            },
            error: function(xhr, desc, err){
                toastr.error('Error on saving ' ,xhr);
            }
    });
    return false;
});