
 $(function(){
	$("#btnDocord").click();
 });
 
function initDoctor()
{
   $("#container").load(baseURL+"Central_supply/viewdocord",function(){
	$("#btnDocord").addClass('active');
	$("#btnPatient").removeClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnPurchase").removeClass('active');
	$("#btnRep").removeClass('active');	
	doctors_order();
}); 
	
}

function initReturn()
{
	$("#btnDocord").removeClass('active');
	$("#btnPatient").removeClass('active');
	$("#btnReturn").addClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnPurchase").removeClass('active');
	$("#btnRep").removeClass('active');
	doctors_return();
}

function initPatient()
{
	$("#btnDocord").removeClass('active');
	$("#btnPatient").addClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnPurchase").removeClass('active');
	$("#btnRep").removeClass('active');
}

function initWard()
{
	$("#btnDocord").removeClass('active');
	$("#btnPatient").removeClass('active');
	$("#btnReturn").removeClass('active');
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
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").addClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnPurchase").removeClass('active');
	$("#btnRep").removeClass('active');
	$("#btnRep").removeClass('active');
	csrStock();
}


function initDelivery()
{
	$("#btnDocord").removeClass('active');
	$("#btnPatient").removeClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").addClass('active');
	$("#btnPurchase").removeClass('active');
	$("#btnRep").removeClass('active');
	deliveries();
}

function initPurchase()
{
	$("#btnDocord").removeClass('active');
	$("#btnPatient").removeClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnPurchase").addClass('active');
	$("#btnRep").removeClass('active');
	deliveries('PHARM');
}


 $("#btnDocord").click(function(){
	$("#container").load(baseURL+"Central_supply/viewdocord",function(){
		initDoctor();
	});
});

 $("#btnReturn").click(function(){
	$("#container").load(baseURL+"Central_supply/viewreturn",function(){
		initReturn();
	});
});

$("#btnPatient").click(function(){
	window.location.href = baseURL+"Central_supply/Transactions";
 });

 $("#btnWard").click(function(){
	$("#container").load(baseURL+"Central_supply/viewward",function(){
		initWard();
	});
});

 $("#btnStk").click(function(){
	$("#container").load(baseURL+"Central_supply/viewstk",function(){
		initStk();
	});
});

 $("#btnDeliv").click(function(){
	$("#container").load(baseURL+"Central_supply/viewdeliv",function(){
		initDelivery();
	});
});

 $("#btnPurchase").click(function(){
	$("#container").load(baseURL+"Stockroom/trans_view",function(){
		request('PHARM');
	});
});
