
 $(function(){
	$("#container").load(baseURL+"Pharmacy/viewdocord",function(){
		 initDoctor();
	}); 
 });
 
function initDoctor()
{
	$("#btnDocord").addClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnRep").removeClass('active');
	doctors_order();	
}

function initDoctor()
{
	$("#btnDocord").addClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnRep").removeClass('active');
	doctors_order();
}

function initReturn()
{
	$("#btnDocord").removeClass('active');
	$("#btnReturn").addClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnRep").removeClass('active');
	doctors_return();
}

function initWard()
{
	$("#btnDocord").removeClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").addClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnRep").removeClass('active');
	wardrequestList();
}

function initStk()
{
	$("#btnDocord").removeClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").addClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnRep").removeClass('active');
	dmStock();
}


function initDelivery()
{
	$("#btnDocord").removeClass('active');
	$("#btnReturn").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").addClass('active');
	$("#btnRep").removeClass('active');
	deliveries('PHARM');
}


 $("#btnDocord").click(function(){
	$("#container").load(baseURL+"Pharmacy/viewdocord",function(){
		initDoctor();
	});
});

 $("#btnReturn").click(function(){
	$("#container").load(baseURL+"Pharmacy/viewreturn",function(){
		initReturn();
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
