var baseURL=$('#base_url').val();
	

		$("#formlink").on('click',function(){
			var enccode =  $("#Enccode").val();
			var hpercode =  $("#Hpercode").val();
			var toecode = $("#Toecode").val();
	  		enccode = encodeURIComponent(encodeURIComponent(enccode));
			
		if(toecode=='ER'){
	 			if($('#Occupation').is(':checked') && $('#Citizenship').is(':checked')) { 
	             window.open(href = baseURL + "Rep_MedRec/MedicoLegalOPDView/" + enccode +"/"+hpercode);
	            } 
	            else if($('#Occupation').is(':checked')) { 
	              window.open(href = baseURL + "Rep_MedRec/MedicoLegalOPDView/" + enccode +"/"+hpercode);
	            } 
	            else if($('#Citizenship').is(':checked')){ 
	              window.open(href = baseURL + "Rep_MedRec/MedicoLegalOPDView/" + enccode +"/"+hpercode);
	            }
	            else {
	               window.open(href = baseURL + "Rep_MedRec/MedicoLegalOPDView/" + enccode +"/"+hpercode);
	            }
        }

        else{
				$("#formlink").modal('hide');
	 			$("#NotFound").modal('show');
	 			
	        }

		});

		$("#ok").on('click',function(){
			$("#NotFound").modal('hide');
			$("#formlink").modal('hide');
		});


	 $('#frmPatSearch').submit('click',function(){
		$.ajax({
			url:baseURL+"Patient/PatientAdvanceSearch",
			type:"POST",
			data:new FormData(this),
			dataType: "JSON",
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			success: function(data,response){
			$("#PatSearchList").modal('show');
			$("#PatSearch").modal('hide');
			PatSearchList(data);
			},
			error: function(response){
			alert("Error:Please try again!");
		}});
			return false;
	});
	
	function PatSearchList(data)
	 {
		var table =$("#TblPatSearchList").DataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [
			{"data" : "hpercode"},
			{"data" : "patfirst"},
			{"data" : "patlast"},
			{"data" : "patmiddle"},
			{"data" : "patsex"}],
		 });	

		$('#TblPatSearchList').on( 'click', 'tr', function () {
		  var data = table.row(this).data();
		  var hpercode= data['hpercode'];
 			 window.open(href = baseURL + "Rep_MedRec/MedicalHistoryView/"+hpercode);
	
		 });
	 }
	 
