	var  loca ='PHARM';
	$(function(){
		$("#container").load(baseURL+"Pharmacy/viewdocord",function(){
			initDoctor();
		});
	});
	
	function initDoctor()
	{
		$("#btnDocord").addClass('active');
		$("#btnPatient").removeClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnWard").removeClass('active');
		$("#btnStk").removeClass('active');
		$("#btnDeliv").removeClass('active');
		$("#btnPurchase").removeClass('active');
		$("#btnRep").removeClass('active');
		doctors_order();
	}

	function initPatient()
	{
		$("#btnDocord").removeClass('active');
		$("#btnPatient").addClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnWard").removeClass('active');
		$("#btnStk").removeClass('active');
		$("#btnDeliv").removeClass('active');
		$("#btnPurchase").removeClass('active');
		$("#btnRep").removeClass('active');
	}

	function initOTC()
	{
		$("#btnDocord").removeClass('active');
		$("#btnPatient").removeClass('active');
		$("#btnOTC").addClass('active');
		$("#btnWard").removeClass('active');
		$("#btnStk").removeClass('active');
		$("#btnDeliv").removeClass('active');
		$("#btnPurchase").removeClass('active');
		$("#btnRep").removeClass('active');
		otcList();
	}

	function initWard()
	{
		$("#btnDocord").removeClass('active');
		$("#btnPatient").removeClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnWard").addClass('active');
		$("#btnStk").removeClass('active');
		$("#btnDeliv").removeClass('active');
		$("#btnPurchase").removeClass('active');
		$("#btnRep").removeClass('active');
		wardrequestList();
	}

	function initStk()
	{
		$("#btnDocord").removeClass('active');
		$("#btnPatient").removeClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnWard").removeClass('active');
		$("#btnStk").addClass('active');
		$("#btnDeliv").removeClass('active');
		$("#btnPurchase").removeClass('active');
		$("#btnRep").removeClass('active');
		$("#btnRep").removeClass('active');
		dmStock();
		$("#typeofAccount").load(baseURL+'Pharmacy/radioCharges');
	}

	function initDelivery()
	{
		$("#btnDocord").removeClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnWard").removeClass('active');
		$("#btnStk").removeClass('active');
		$("#btnDeliv").addClass('active');
		$("#btnPurchase").removeClass('active');
		$("#btnRep").removeClass('active');
		deliveries('PHARM');
	}

	function initPurchase()
	{
		$("#btnDocord").removeClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnWard").removeClass('active');
		$("#btnStk").removeClass('active');
		$("#btnDeliv").removeClass('active');
		$("#btnPurchase").addClass('active');
		$("#btnRep").removeClass('active');
		deliveries('PHARM');
	}

  $("#btnDocord").click(function(){
	$("#container").load(baseURL+"Pharmacy/viewdocord",function(){
		initDoctor();
	});
  });

 $("#btnPatient").click(function(){
	window.location.href = baseURL+"Pharmacy/Transactions";
 });

 $("#btnOTC").click(function(){
	$("#container").load(baseURL+"Pharmacy/viewwalkin",function(){
		initOTC();
	});
 });

 $("#btnWard").click(function(){
	$("#container").load(baseURL+"Pharmacy/viewward",function(){
		initWard();
	});
 });

 $("#btnStk").click(function(){
	$("#container").load(baseURL+"Pharmacy/viewstk",function(){
		initStk();
	});
 });

 $("#btnDeliv").click(function(){
	$("#container").load(baseURL+"Pharmacy/viewdeliv",function(){
		initDelivery();
	});
 });

 $("#btnPurchase").click(function(){
	$("#container").load(baseURL+"Transactions/trans_view",function(){
		request(loca);
	});
});

