$('#frmUpload').on('submit', function(e){
    $.ajax({
        type : "POST",
        url  : baseURL+"Radiology/saveFilmResult",
        data :new FormData(this),
        processData: false,
        contentType: false,
            success: function(data,response){
                
                $('#modalResult').modal('show');
                $('#pat_tbl').DataTable().ajax.reload();
                toastr.success('Result Uploaded! ' ,'Success');	
            },
            error: function(xhr, desc, err){
                toastr.error('Error on saving ' ,xhr);
            }
    });
    return false;
});
