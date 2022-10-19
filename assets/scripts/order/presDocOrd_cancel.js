
	$("#btnCancelOrder").on('click',function(){
		var rowData= $("#docOrdpres").DataTable().rows('.selected').data();
		
		$.each(rowData, function (index, data) {
			
			$('#listDoco').prepend('<li class="text-danger list-group-item">'+'*'+data[6] + 
			'<input type="hidden" name="docointkey" id="docdrugs" value="'+data[0]+'">'+
			'<input type="hidden" name="dmdcomb" id="dmdcomb" value='+data[4]+'>'+
			'<input type="hidden" name="dmdctr" id="dmdctr" value='+data[5]+'>');
		});
 			$("#cancelDrugModal").modal('show');
	});

	$("#cancelDrugModal").on('hidden.coreui.modal',function(){
		$('#listDoco li').remove();
		$("#docOrdpres").DataTable().$('tr.selected').removeClass('bg-success text-white selected');
		$("#btnCancelOrder").prop('disabled',true);
	 });

	 $('#frmCancelOrderDrug').on('submit', function(e){
		var data = $(this).serializeArray();
		 $.ajax({
			 type: "POST",
			 url: baseURL + "DoctorsOrder/cancelOrderMedicine",
			 data: { data: data,reason:$("#reasonCancel").val(), enccode:enccode, hpercode:hpercode},
			 dataType: 'JSON',
			 success: function (data, response) {
				 toastr.warning('Order successfully cancelled!', 'Success');
				 $("#docOrdpres").DataTable().ajax.reload();
				 $('#cancelDrugModal').modal('hide');
			 },
			 error: function (xhr, desc, err) {
				 toastr.error('Error on saving ', xhr);
			 }
		 }); 
		return false;
   });