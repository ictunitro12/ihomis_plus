var baseURL = $('#module').val();

function checkMedicalHistory(enccode, hpercode)
{
	
	enctr= encodeURIComponent(encodeURIComponent(enccode));
	percode= encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../MedicalReportHistory/checkMedicalHistory/"+enctr+ "/" + percode,
		data: 'JSON',
		success: function(data)
		{ 
			if(data == 0)
			{
				toastr.warning('No Record Found! </br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');
			}	
			else if (data>0) {
			$('#MedicalReportHistory').html('<embed src="' + "MedicalReportHistory/MedicalReportHistoryView/" + enctr + "/" +percode+ '" frameborder="2" width="100%" height="800px" id="MedicalReportHistory">');

			}
			else
			{ 
				toastr.warning('No Record Found! </br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');
			}
	},
	error: function(data)
	{
		alert('Please Try Again!');
	}
});
}
