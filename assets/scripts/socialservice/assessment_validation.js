$('#frmSaveAssessment').submit('click',function(){
	$.ajax({
		type : "POST",
		url  : baseURL+"SocialService/saveAssess",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			if($('#formIdentif').val()=='insert'){
				$("#ass_IOE").removeAttr("disabled");

				$("#AssessmentSummary").modal('hide');

				var code = $('#saveenccode').val();
				var percode = $('#savehpercode').val();
				var ccode = encodeURIComponent(encodeURIComponent(code));

				var enccode = window.btoa(ccode);
				var hpercode = window.btoa(percode);

				var oldpatient =$('#ass_OldPat').val();
				var newpatient =$('#ass_NewPat').val();

				console.log(oldpatient);
				console.log(newpatient);

				if (oldpatient== 'Y') {	
					toastr.success('Successfully Saved! ' ,'Success');	
					window.open(baseURL+"SocialService/AssessmentFormOld/" + enccode + "/" + hpercode);
					window.location.replace(baseURL+"SocialService");
					SocialServiceList(code,percode)				
				}
				else if( newpatient=='Y'){
					toastr.success('Successfully Saved! ' ,'Success');
					window.open(baseURL+"SocialService/AssessmentFormNew/" + enccode + "/" + hpercode);
					window.location.replace(baseURL+"SocialService");	
					SocialServiceList(code,percode)				
				}
				else{
					toastr.success('Successfully Saved! ' ,'Success');					
					window.open(baseURL+"SocialService/AssessmentFormOld/" + enccode + "/" + hpercode);
					window.location.replace(baseURL+"SocialService");
					SocialServiceList(code,percode)	
				}

			}
			else if($('#formIdentif').val()=='update')
			{
				toastr.success(' Data Successfully Updated! ' ,'<i class="fa fa-check"></i> Success');
				$("#AssessmentSummary").modal('hide');
				var code = $('#saveenccode').val();
				var percode = $('#savehpercode').val();
				var ccode = encodeURIComponent(encodeURIComponent(code));

				var enccode = window.btoa(ccode);
				var hpercode = window.btoa(percode);

				var oldpatient =$('#ass_OldPat').val();
				var newpatient =$('#ass_NewPat').val();

				console.log(oldpatient);
				console.log(newpatient);

				if (oldpatient== 'Y') {	
					toastr.success('Data Successfully Updated! ' ,'Success');	
					window.open(baseURL+"SocialService/AssessmentFormOld/" + enccode + "/" + hpercode);
					window.location.replace(baseURL+"SocialService");
					SocialServiceList(code,percode)				
				}
				else if( newpatient=='Y'){
					toastr.success('Data Successfully Updated! ' ,'Success');
					window.open(baseURL+"SocialService/AssessmentFormNew/" + enccode + "/" + hpercode);
					window.location.replace(baseURL+"SocialService");	
					SocialServiceList(code,percode)				
				}
				else{
					toastr.success('Data Successfully Updated! ' ,'Success');		
					window.open(baseURL+"SocialService/AssessmentFormOld/" + enccode + "/" + hpercode);			
					window.location.replace(baseURL+"SocialService");
					SocialServiceList(code,percode)	
				}


			}
		},
		error: function(xhr, desc, err){
			toastr.error('Failed to Saved!' ,'Error');
		}
	});
	return false;
});

