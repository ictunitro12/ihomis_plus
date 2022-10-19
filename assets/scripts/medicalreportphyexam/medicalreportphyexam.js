var baseURL = $('#module').val();

function initPhysicalExam(rowData){
	console.log(rowData);
	var toecode = rowData['toecode'];
	var enccode = rowData['enccode'];
	var hpercode = rowData['hpercode'];

	if (toecode == 'ADMISSION') {
		checkMedicalPhyExam(enccode,hpercode);
	}
	else if (toecode == 'EMERGENCY') {
		toastr.warning('No Record Found! </br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');
	}
	else if (toecode ='OUTPATIENT') {
		toastr.warning('No Record Found!<button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');	
	}
	else{
		toastr.error('Error!<button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Error');	

	}

}


function checkMedicalPhyExam(enccode, hpercode)
{
	
	enctr= encodeURIComponent(encodeURIComponent(enccode));
	percode= encodeURIComponent(encodeURIComponent(hpercode));
	console.log(enctr);

	$.ajax({
		type: "POST",
		url: "../MedicalReportPhyExam/checkMedicalPhyExam/"+enctr+ "/" + percode,
		data: 'JSON',
		success: function(data)
		{ 
			console.log(data);
			if(data == 0)
			{
				toastr.warning('No Record Found! </br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');
			}	
			else if (data>0) {
				alert(data);
			$('#MedicalReportPhyExam').html('<embed src="' + "MedicalReportPhyExam/MedicalReportPhyExamView/" + enctr + "/" +percode+ '" frameborder="2" width="100%" height="800px" id="MedicalReportPhyExam">');
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
