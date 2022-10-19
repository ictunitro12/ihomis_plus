
	function initDoctor()
	{
		$("#btnDocord").addClass('active');
		$("#btnAvailable").removeClass('active');
		$("#btnWalkin").removeClass('active');
		orderlab();
	}
	
	function initAvailable()
	{
		$("#btnDocord").removeClass('active');
		$("#btnAvailable").removeClass('active');
		$("#btnWalkin").addClass('active');
		availableList();
	}
	
	function initOTC()
	{
		$("#btnDocord").removeClass('active');
		$("#btnAvailable").removeClass('active');
		$("#btnWalkin").addClass('active');
		otcList();
	}

	$("#btnDocord").click(function(){
		$("#container").load(baseURL+"Laboratory/viewdocord",function(){
			initDoctor();
		});
	});

	$("#btnWalkin").click(function(){
		$("#container").load(baseURL+"Laboratory/viewwalkin",function(){
			initOTC();
		});
	});

	$("#btnAvailable").click(function(){
		$("#container").load(baseURL+"Laboratory/viewavail",function(){
			  initAvailable();
		});
	});
				
	$("#modalResult").on('hidden.coreui.modal',function(){
		$('#patientOrders').DataTable().clear().destroy();
		$('#order_tbl').DataTable().ajax.reload();
	});

	$("#modalResult").on('hidden.coreui.modal', function () {
		$('#pat_tbl').DataTable().clear();
	});		

	$('#frmResult').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"Radiology/saveCharge",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					toastr.success('Result Uploaded! ' ,'Success');	
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
	});

	