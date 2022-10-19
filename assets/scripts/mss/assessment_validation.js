$('#frmSaveAssessment').submit('click',function(){
$.ajax({
type : "POST",
url  : baseURL+"MSS/saveAssess",
data :new FormData(this),
processData: false,
contentType: false,
success: function(data,response){
if($('#formIdentif').val()=='insert'){
	$("#AssessmentSummary").modal('hide');

			var code = $('#saveenccode').val();
			var percode = $('#savehpercode').val();
			var ccode = encodeURIComponent(encodeURIComponent(code));

			var enccode = window.btoa(ccode);
			var hpercode = window.btoa(percode);

			window.location.href =baseURL+"MSS/AssessmentForm/" + enccode + "/" + hpercode;

	toastr.success('Successfully Saved! ' ,'Success');
}
else if($('#formIdentif').val()=='update')
{
	$("#AssessmentSummary").modal('hide');
			var code = $('#saveenccode').val();
			var percode = $('#savehpercode').val();
			var ccode = encodeURIComponent(encodeURIComponent(code));

			var enccode = window.btoa(ccode);
			var hpercode = window.btoa(percode);
			
			window.location.href =baseURL+"MSS/AssessmentForm/" + enccode + "/" + hpercode;


	toastr.success(' Data Successfully Updated! ' ,'<i class="fa fa-check"></i> Success');
}
},
error: function(xhr, desc, err){
	toastr.error('Failed to Saved!' ,'Error');
}
});
return false;
});

