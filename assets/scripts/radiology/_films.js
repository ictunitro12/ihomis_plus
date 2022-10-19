function Film(docointkey)
{
    var data = new Object();
    data.id = "filmList";
    data.link = baseURL+"Radiology/filmList";
    data.data = {data:docointkey}
    data.type = "POST";
    data.coldef =[
    {
        targets: [0],
        visible:false,
        orderable:false,
    }];
    loadTable(data);
}

function addFilmEntry()
{
    $('#modalFilm').modal('hide');
    $('#modalfilmEntry').modal('show'); 
    $('#filmEntryDateLog').val(getTimeLocale());
    $('#filmEntryFormIden').val('insert');
    SelEmp();
}

$('#btnCancelFilmEntry').on('click', function(){
    $('#modalFilm').modal('show');
    $('#modalfilmEntry').modal('hide');

});

   $('#filmList').on('click','#btnEditfilmEntry',function(){
        $('#modalfilmEntry').modal('show');
});
