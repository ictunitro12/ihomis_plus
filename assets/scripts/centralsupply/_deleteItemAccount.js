$('#frmDeleteItem').on('submit', function(e) {
    var form = this;
    console.log(this);
    $.ajax({
        type: "POST",
        url: baseURL + "Central_Supply/saveOverrideItem",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(data, response) {
            $("#itemAccTbl").DataTable().ajax.reload();
            toastr.success('Record saved!', 'Success!');
            $("#deleteModalItem").modal('hide');
        },
        error: function(xhr, desc, err) {
            toastr.error(err, 'ERROR!');
        }
    });
    return false;
});