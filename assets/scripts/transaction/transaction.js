
	function initRequest()
	{
		$("#btnRequest").addClass('active');
		$("#btnOrder").removeClass('active');
		$("#btnDeliv").removeClass('active');
		$("#btnPharm").removeClass('active');
		$("#btnSupplies").removeClass('active');
		$("#btnRadio").removeClass('active');
		$("#btnLabor").removeClass('active');
		$("#btnDiet").removeClass('active');
		$("#btnReport").removeClass('active');
		request('PHARM');
	}

	function generateCode(loca)
	{
	  $.get(baseURL+"Stockroom/generateCode/"+loca, function(data, status){
		return data;
	  });
	}
	
	$('#modalRequest').on('hidden.coreui.modal', function(event) {
		$(this).find("input,textarea,select").val('').end();
		$(this).find("checkbox,radio").prop('checked',false);
		$(this).find("radio").removeAttr('checked');
		$(this).find("input,textarea,select").removeClass('is-valid'); 
		$(this).find("input,textarea,select").removeClass('is-invalid');
		$(this).find("select").val('').trigger('change');
		$("#reqList").DataTable().clear();
	});
	
	