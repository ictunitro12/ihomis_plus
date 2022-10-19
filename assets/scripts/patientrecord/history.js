	/*
	function name :  Patient History
	param : str|enccode 
	description :generate list of Patient History
	*/

$(document).ready(function(){
	jQuery.validator.addMethod("obgynValidator",function(value, element, param){
		var elementValue = $(element).val();
		if(elementValue != ""){
			if(elementValue.indexOf('.') != -1){
				return false;
			}
			if(elementValue == "0" || elementValue == 0){
				return false;
			}
		}
		return true;
	},"Invalid value!");
	$("#frmHistory").validate({
		rules:{
			obg:{
				obgynValidator : true
			},
			obp:{
				obgynValidator : true
			},
			obft:{
				obgynValidator : true
			},
			obpt:{
				obgynValidator : true
			},
			obab:{
				obgynValidator : true
			},
			oblg:{
				obgynValidator : true
			}
		},
		validClass: "is-valid",
		errorClass: "is-invalid",
		errorElement: "div",
		errorPlacement: function(error,element){
			error.addClass("invalid-feedback");
			error.insertAfter(element);
		}
	});
});

function History(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		$("#frmHistory").trigger("reset");
		var validator = $("#frmHistory").validate();
		validator.resetForm();
		$.ajax({
			type: "GET",
			url: baseURL+"PatientRecords/gethistoryInfo/"+enctr,
			data: "JSON",
			async: true,
			processData: false,
			success: function(data)
			{	
				var obj = $.parseJSON(data);
				$('#hisformIden').val('update');
				$('#hisEnccode').val(enccode);
				$('#hisHpercode').val(hpercode);
				if(obj.geninfo != null){
					$('#hisGen').val(obj.geninfo.history);
				}
				if(obj.pahis != null){
					$('#hisPast').val(obj.pahis.history);	
				}
				if(obj.pahis != null){
					$('#hisPast').val(obj.pahis.history);
				}
				if(obj.prhis != null){
					$('#hisClin').val(obj.prhis.history);
				}
				if(obj.occup != null){
					$('#hisOccup').val(obj.occup.history);
				}
				if(obj.comp != null){
					$('#hisComp').val(obj.comp.history);
				}
				if(obj.fahis != null){
					$('#hisFam').val(obj.fahis.history);
				}
				if(obj.drugthe != null){
					$('#hisDrug').val(obj.drugthe.history);
				}
				if(obj.alcohol != null){
					$('#hisAlc').val(obj.alcohol.history);
				}
				if(obj.tobacco != null){
					$('#hisTob').val(obj.tobacco.history);
				}
				if(obj.drugall != null){
					$('#hisDrgAll').val(obj.drugall.history);
				}
				if(obj.othrall != null){
					$('#hisOthAll').val(obj.othrall.history);
				}
				if(obj.obgyn != null){
					$('#obg').val(obj.obgyn.obg);
					$('#obp').val(obj.obgyn.obp);
					$('#obft').val(obj.obgyn.obft);
					$('#obpt').val(obj.obgyn.obpt);
					$('#obab').val(obj.obgyn.obab);
					$('#oblg').val(obj.obgyn.oblg);
					$('#lmp').val(obj.obgyn.oblmp);
				}
			},
			error: function(data)
			{
				toaster.error("Error: Fetching Patient Vital Sign!",'Error');
			}
			});
		// var data = new Object();
		// data.id = "history";
		// data.link = baseURL+"PatientRecords/History/"+enctr;
		// data.type = "POST";
		// data.coldef =[
		// 				{
		// 				targets: [0,1],
		// 				visible:false,
		// 				},
		// 				{	
		// 				targets : 5,
		// 				searchable:false,
		// 					render: function ( data, type, row ) 
		// 					{
		// 						switch(data) 
		// 						{
		// 							case 'A' : return '<div class="text-success">Active</span>'; break;
		// 							case 'I' : return '<div class="text-primary">Inactive</span>'; break;
		// 							default  : return '<div class="text-default"></span>';
		// 						}
		// 					},
		// 				},
		// 				{	
		// 				targets : 4,
		// 				searchable:false,
		// 					render: function ( data, type, row ) 
		// 					{
		// 						switch(data) 
		// 						{
		// 							case 'GDPPR' : return '<div class="text-info">GENERAL DATA</span>'; break;
		// 							case 'PAHIS' : return '<div class="text-info">PATIENT HISTORY</span>'; break;
		// 							case 'PRHIS' : return '<div class="text-info">CLINICAL HISTORY</span>'; break;
		// 							case 'OCENV' : return '<div class="text-info">OCCUPATION</span>'; break;
		// 							case 'COMPL' : return '<div class="text-info">COMPLAINT</span>'; break;
		// 							case 'FAHIS' : return '<div class="text-info">FAMILY HISTORY</span>'; break;
		// 							case 'DRTHE' : return '<div class="text-info">DRUG THERAPY</span>'; break;
		// 							case 'ALCOH' : return '<div class="text-info">ALCOHOL</span>'; break;
		// 							case 'TOBAC' : return '<div class="text-info">TOBACCO</span>'; break;
		// 							case 'DRUGA' : return '<div class="text-info">DRUG ALLERGIES</span>'; break;
		// 							case 'OTHAL' : return '<div class="text-info">OTHER ALLERGIES</span>'; break;
		// 							default  : return '<div class="text-default"></span>';
		// 						}
		// 					},
		// 				},
		// 			];
		// loadTable(data);
	}

	// $('#frmHistory').validate({
	// 	submitHandler: function (form) {
	// 	var  POSTURL = baseURL+"PatientRecords/saveHistory";
	// 			  $.ajax({
	// 				type : "POST",
	// 				url  : POSTURL,
	// 				dataType: "JSON",
	// 				cache:false,
	// 				async:true,
	// 				data: $(form).serialize(),
	// 				success: function(data){
	// 					if($('#hisformIden').val()=='insert'){
	// 						toastr.success('History Successfully Saved! ' ,'Success');
	// 						History(enccode);
	// 						$("#histoModal").modal('hide');
	// 					}else if($('#hisformIden').val()=='update'){
	// 						toastr.success('History Successfully Saved! ' ,'Success');
	// 						History(enccode);
	// 						$("#histoModal").modal('hide');
	// 					}else{
	// 						toastr.success('History Updated! ' ,'Success');
	// 						$("#histoModal").modal('hide');
	// 						History(enccode);
	// 					}
	// 				},
	// 				error: function(data){
	// 					toastr.error('Error Saving','Error');
	// 				}
	// 				});
	// 			return false;
	// 		 $(form).submit();
	// 	   },
	// 	  rules: {
	// 		hisGen:'required',
	// 		hisPast:'required',
	// 		hisPast:'required',
	// 		hisOccup:'required',
	// 		hisComp:'required', 
	// 		hisFam:'required',
	// 		hisDrug:'required',
	// 		hisAlc:'required',
	// 		hisTob:'required',
	// 		hisDrgAll:'required',
	// 	  },	
	// 	  messages: {
	// 		hisGen:'General Data  is required!',
	// 		hisPast:'Past History is required!',
	// 		hisPast:'Clinical History is required!',
	// 		hisOccup:'Occupation Environment is required!',
	// 		hisComp:'Complaint is required', 
	// 		hisFam:'Family History is required!',
	// 		hisDrug:'Drug Theraphy is required!',
	// 		hisAlc:'Alcohol Intake  is required!',
	// 		hisTob:'Tobacco Intake  is required!',
	// 		hisDrgAll:'DrugAllergies  is required!',
		
	// 	  },
	// 	  errorElement: 'span',
	// 	  errorPlacement: function errorPlacement(error, element) {
	// 		error.addClass('invalid-feedback');
	// 		  error.insertAfter(element);
			
	// 	  },
		
	// 	  highlight: function highlight(element) {
	// 		$(element).addClass('is-invalid').removeClass('is-valid');
	// 		  if( $(element).hasClass('select2-offscreen'))
	// 		  {
	// 			  element=$("#s2id_" + element.attr("id") + " ul").parent();
	// 			$(element).addClass('is-invalid').removeClass('is-valid');
	// 		  }
	// 	  },
		  
	// 	  unhighlight: function unhighlight(element) {
	// 		$(element).addClass('is-valid').removeClass('is-invalid');
	// 		if( $(element).hasClass('select2-offscreen'))
	// 		  {
	// 			 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
	// 		  }
	// 	  } 
	// 	});

	function validate_frmHistory(){
		if($("#frmHistory").valid() == true){
			return true
		}else{
			toastr.warning("Please correct/fill up required fields!", "Warning");
			return false;
		}
	}
	
	function saveHistory(){
		if(!validate_frmHistory()){
			return;
		}
		var  POSTURL = baseURL+"PatientRecords/saveHMRHisto";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $("#frmHistory").serialize(),
			success: function(data){
				toastr.success(data.message,'Success');
				History(enccode);
				// if($('#hisformIden').val()=='insert'){
				// 	toastr.success('History Successfully Saved! ' ,'Success');
				// 	History(enccode);
				// 	$("#histoModal").modal('hide');
				// }else if($('#hisformIden').val()=='update'){
				// 	toastr.success('History Successfully Saved! ' ,'Success');
				// 	History(enccode);
				// 	$("#histoModal").modal('hide');
				// }else{
				// 	toastr.success('History Updated! ' ,'Success');
				// 	$("#histoModal").modal('hide');
				// 	History(enccode);
				// }
			},
			error: function(data){
				toastr.error(data.responseJSON.message,'Error');
			}
		});
	}

	function addHistory(enccode,hpercode)
	{
		 $('#histoModal').modal('show');	
		 $('#hisformIden').val("insert");
		 $('#hisEnccode').val(atob(enccode));	 
		 $('#hisHpercode').val(atob(hpercode));	 
		 $('#hisGen').prop('readonly',false); 
		 $('#hisClin').prop('readonly',false); 
		 $('#hisPast').prop('readonly',false); 
		 $('#hisOccup').prop('readonly',false);
		 $('#hisComp').prop('readonly',false);
		 $('#hisFam').prop('readonly',false); 
		 $('#hisDrug').prop('readonly',false);  
		 $('#hisAlc').prop('readonly',false); 	
		 $('#hisTob').prop('readonly',false);
		 $('#hisDrgAll').prop('readonly',false); 
		 $('#hisOthAll').prop('readonly',false); 
		 uppercase();
	}
		
	$('#histoModal').on('hidden.coreui.modal', function () {
		 $('#hisformIden').val('');
		 $('#hisEnccode').val('');	 
		 $('#hisHpercode').val('');	
		 $('#hisGen').prop('readonly',true); 
		 $('#hisClin').prop('readonly',true); 
		 $('#hisPast').prop('readonly',true); 
		 $('#hisOccup').prop('readonly',true);
		 $('#hisComp').prop('readonly',true);
		 $('#hisFam').prop('readonly',true); 
		 $('#hisDrug').prop('readonly',true);  
		 $('#hisAlc').prop('readonly',true); 	
		 $('#hisTob').prop('readonly',true);
		 $('#hisDrgAll').prop('readonly',true); 
		 $('#hisOthAll').prop('readonly',true); 
	
	});
	
	$('#history').on('click','#btnEditHisto',function(){
		$('#histoModal').modal('show');
		var enccode=atob($(this).data('enccode'));
		var datelog=atob($(this).data('datelog'));
		var hpercode=atob($(this).data('hpercode'));
		var histype=atob($(this).data('histype'));
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var log = encodeURIComponent(encodeURIComponent(datelog));
		var type = encodeURIComponent(encodeURIComponent(histype));
		$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/historyInfo/"+enctr+'/'+log,
		data: "JSON",
		async:false,
		success: function(data)
		{	
			var obj = $.parseJSON(data);
			$('#hisformIden').val('update');
			$('#hisEnccode').val(enccode);
			$('#hisHpercode').val(hpercode);
			$('#hisGen').val(obj['geninfo']['history']);
			$('#hisPast').val(obj['pahis']['history']);
			$('#hisClin').val(obj['prhis']['history']);
			$('#hisOccup').val(obj['occup']['history']);
			$('#hisComp').val(obj['comp']['history']);
			$('#hisFam').val(obj['fahis']['history']);
			$('#hisDrug').val(obj['drugthe']['history']);
			$('#hisAlc').val(obj['alcohol']['history']);
			$('#hisTob').val(obj['tobacco']['history']);
			$('#hisDrgAll').val(obj['drugall']['history']);
			$('#hisOthAll').val(obj['othrall']['history']);
			switch(type) 
			{
				case 'GDPPR' : 
				$('#hisGen').prop('readonly',false); 
				break;
				case 'PAHIS' : 
				$('#hisPast').prop('readonly',false); 
				break;
				case 'PRHIS' : 
				$('#hisClin').prop('readonly',false); 
				break;
				case 'OCENV' : 
				$('#hisOccup').prop('readonly',false);
				break;
				case 'COMPL' : 
				$('#hisComp').prop('readonly',false);
				break;
				case 'FAHIS' : 
				$('#hisFam').prop('readonly',false);
				break;
				case 'DRTHE' : 
				$('#hisDrug').prop('readonly',false);  
				break;
				case 'ALCOH' : 
				$('#hisAlc').prop('readonly',false); 
				break;
				case 'TOBAC' : 
				$('#hisTob').prop('readonly',false);
				break;
				case 'DRUGA' : 
				$('#hisDrgAll').prop('readonly',false); 
				break;
				case 'OTHAL' : 
				$('#hisOthAll').prop('readonly',false); 
				break;  				
				default  : return '<div class="text-default"></span>';
			}
		},
		error: function(data)
		{
			toaster.error("Error: Fetching Patient Vital Sign!",'Error');
		}
		});
	});


