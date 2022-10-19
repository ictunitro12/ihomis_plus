function Film(docointkey)
{
	var key = encodeURIComponent(encodeURIComponent(docointkey));
	var data = new Object();
	data.id = "filmList";
	data.link = baseURL+"Radiology/filmList/"+key;
	data.type = "POST";
	data.coldef =[
	{
		targets: [0],
		visible:false,
		orderable:false,
	}];
	loadTable(data);
}

$('#radiologyTable').on('click','#btnfilmPic',function(){
	$('#modalSpecimen').modal('show');
	var docointkey=atob($(this).data('docointkey'));
	var enccode=atob($(this).data('enccode'));
	var hpercode=atob($(this).data('hpercode'));
	var proccode=atob($(this).data('proccode'));
	$('#filmEntrydocointkey').val(docointkey);
	$('#filmEntryenccode').val(enccode);
	$('#filmEntrycaseno').val(caseno);
	$('#filmEntryhpercode').val(hpercode);
	$('#filmEntryproccode').val(proccode);
});

$('#radiologyTable').on('click','#filmEntry',function(){
	$('#modalFilmPicture').modal('show');
	var docointkey=atob($(this).data('docointkey'));
	var enccode=atob($(this).data('enccode'));
	var caseno=atob($(this).data('caseno'));
	var hpercode=atob($(this).data('hpercode'));
	var proccode=atob($(this).data('proccode'));
	Film(docointkey);
	$('#filmEntrydocointkey').val(docointkey);
	$('#filmEntryenccode').val(enccode);
	$('#filmEntrycaseno').val(caseno);
	$('#filmEntryhpercode').val(hpercode);
	$('#filmEntryproccode').val(proccode);
});

function addFilmEntry()
{
	$('#modalFilm').modal('hide');
	$('#modalfilmEntry').modal('show');
	$('#filmEntryDateLog').val(getTimeLocale());
	$('#filmEntryFormIden').val('insert');
}

$('#btnCancelFilmEntry').on('click', function(){
	$('#modalFilm').modal('show');
	$('#modalfilmEntry').modal('hide');

});


$('#frmFilmEntry').on('submit', function(e){
	$.ajax({
		type : "POST",
		url  : baseURL+"Radiology/saveFilmEntry",
		data :new FormData(this),
		processData: false,
		contentType: false,
			success: function(data,response){
				if($('#filmEntryFormIden').val()=='insert'){
					$('#modalfilmEntry').modal('hide');
					$('#modalFilm').modal('show');
					Film($('#filmEntrydocointkey').val());
					toastr.success('Film Successfully Saved! ' ,'Success');
				}else if($('#filmEntryFormIden').val()=='update'){
					$('#modalfilmEntry').modal('hide');
					$('#modalFilm').modal('show');
					Film($('#filmEntrydocointkey').val());
					toastr.success('Film Successfully Updated! ' ,'Success');
				
				}else{
					
				}
			},
			error: function(xhr, desc, err){
				toastr.error('Error on saving ' ,xhr);
			}
	});
	return false;
});

   $('#filmList').on('click','#btnEditfilmEntry',function(){
		$('#modalfilmEntry').modal('show');
	
});




