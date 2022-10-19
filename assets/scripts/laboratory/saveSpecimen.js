$('#frmSpecimen').on('submit', function(e){
    $.ajax({
        type : "POST",
        url  : baseURL+"Laboratory/saveSpecimen",
        data :new FormData(this),
        processData: false,
        contentType: false,
            success: function(data,response){
                if($('#speciFormIden').val()=='insert'){
                    $('#modalSpecimen').modal('hide');
                    $("#patientOrders").DataTable().ajax.reload();
                    toastr.success('Specimen Successfully Saved! ' ,'Success');
                }else if($('#speciFormIden').val()=='update'){
                    $('#modalSpecimen').modal('hide');
                    toastr.success('Specimen Successfully Saved! ' ,'Success');
                }else{
            
                }
            },
            error: function(xhr, desc, err){
                toastr.error('Duplicate entry','Alert!');
            }
    });
    return false;
});