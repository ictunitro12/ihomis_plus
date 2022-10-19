$('#frmPatientSaveAdmission').submit('click',function(){
$.ajax({
type : "POST",
url  : baseURL+"Admission/savePatientAdmission",
data :new FormData(this),
processData: false,
contentType: false,
dataType: 'JSON',
success: function(data,response){
  if($('#saveIdenAdm').val()=='insert')
  {
    $("#PatientAdmisionSummary").modal('hide');
    toastr.success(data.message,'Success');
    window.location.replace(baseURL+"Admission");   
  }
  else if($('#saveIdenAdm').val()=='update')
  {
    $("#PatientAdmisionSummary").modal('hide');
    toastr.success(data.message,'<i class="fa fa-check"></i> Success');
    window.location.replace(baseURL+"Admission");  
  }
   removeCookie('fromModule');
   removeCookie('Modulehpercode');
},
error: function(data,response){
  if(data.responseJSON.message ==  undefined){
    toastr.error('Error admitted patient!' ,'Error');
  }else{
    toastr.error(data.responseJSON.message ,'Error');
  }
}
});
return false;
});

$('#frmDischargePatient').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"Admission/savePatientDischarge";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data:$(form).serialize(),
			success: function(data){
				 if(data['value'] !== '0.00'){
					 $("#ModalDischargePatient").modal('hide');
					 toastr.error(data['message']+': '+ data['value'],'Warning');
				 }else{
					 $("#ModalDischargePatient").modal('hide');
					 toastr.success(data['message']+': '+ data['value'],'Success');
           InpatientLog();
				 }
			},
			error: function(data){
					toastr.error('Error on saving!'+ data ,'Error');
			}
			});
		return false;
	 $(form).submit();
   },
  rules: {
    disDateTime:'required',
    dischDisp:'required',
    dischCond:'required'
  },	
  messages: {
	disDateTime: 'Datetime is required!',
    dischDisp: ' Disposition is required!',
    dischCond: 'Condition is required!'
  },
	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-hidden-accessible'))
	{
	 element=$("#selReg" + element.attr("id") + "ul").parent();

	 error.insertAfter(element);
	}
	else 
	{
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2-offscreen'))
	  {
		  element=$("#s2id_" + element.attr("id") + " ul").parent();
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
      }
  } 
});

 $("#form-step-2").validate({
  rules: {
   dateaccom:'required',
   typaccom:'required',
   selTos:'required',
   adm_Bed:'required',
   adm_Ward:'required',
   adm_Room:'required',
   selWar:'required',
   selRoom:'required',
   selBed:'required',
   patagehr: {
    required:{
      depends: function(){
        if($("#patage").val() == 0 && $("#patagemo").val() == 0 && $("#patagedy").val() == 0){
          return true;
        }else{
          return false;
        }
      }
    }
   }
  },
  messages: {
   dateaccom: 'Date of Accomodation is required!',
   typaccom: 'Type of Accomodation is required!',
   selTos: 'Type of Service is required!',
   selWar: 'Ward is required!',
   selRoom: 'Room is required!',
   selBed: 'Bed is required!',
   adm_Ward: 'Ward is required!',
   adm_Room: 'Room is required!',
   adm_Bed: 'Bed is required!',
   patagehr: 'Age is required/invalid!'
  },
   errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-coreui-hidden-accessible'))
	{
	 element=$("#sel" + element.attr("id") + "ul").parent();
	 error.insertAfter(element.parent());
	}
	else 
	{
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
	  
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2-offscreen'))
	  {
		  element=$("#s2id_" + element.attr("id") + " ul").parent();
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
      }
	}

});
	
	
  $("#form-step-4").validate({
   rules: {
   AdmissionDiag:'required',
   ReasonDiag: {
    required:{
      depends: function(){
        if($("#foradmcode").val() !=""){
          return true;
        }else{
          return false;
        }
      }
    }
   }
   },
  messages:{
   AdmissionDiag: 'Admission Diagnosis is required!',
   ReasonDiag: "Reason for Admission is required!"
  },
 
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-coreui-hidden-accessible'))
	{
	 element=$("#sel" + element.attr("id") + "ul").parent();
	 error.insertAfter(element.parent());
	}
	else 
	{
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
	  
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2-offscreen'))
	  {
		  element=$("#s2id_" + element.attr("id") + " ul").parent();
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
      }
	}	 
	});
	
	$("#form-step-3").validate({
   rules: {
   selDoc_doc:'required',
   },
  messages:{
   selDoc_doc: 'Admitting Physician is required!',
  },
 
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
	{
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-coreui-hidden-accessible'))
	{
	 element=$("#sel" + element.attr("id") + "ul").parent();
	 error.insertAfter(element.parent());
	}
	else 
	{
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
	  
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2-offscreen'))
	  {
		  element=$("#s2id_" + element.attr("id") + " ul").parent();
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
      }
	}	 
	});