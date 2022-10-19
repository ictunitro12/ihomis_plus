
	/*[Doctors Order] (Procedure  Examination)*/
	$('#frmDietOrder').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"DoctorsOrder/saveDietary",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					$('#DocOrdExamModal').modal('hide');
					orderDiet($('#procEnccode').val());
					toastr.success('Order Successfully Saved! ' ,'Success');
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });
 
	
	
	$("#admtbl").on('click','#btnMGH',function(){
			$("#mghEnccode").val(atob($(this).data('enccode')));
			$("#mghHpercode").val(atob($(this).data('percode')));
			$("#mghlicNo").val(licno);
		$("#maygohomeModal").modal('show');
		

		
		
		
	});
