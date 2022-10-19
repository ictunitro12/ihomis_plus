var Module=$('#module').val();
$(function(){

	if(($.session.get('Cashierenccode') !== undefined) && ($.session.get('Cashierhpercode') !== undefined)){
	   initCashier($.session.get('Cashierenccode'),$.session.get('Cashierhpercode'));
	   $('a[href="#patient"]').addClass('active');
		$("#container").load(baseURL+"Cashier/viewPatient",function(){
			initPatient();
		}).fadeIn(1000).show(2200).slideDown(2200);
	}
	else{
	   $("#PatSearch").modal('show');
	   $("#patientPhoto").prop('src',baseURL+'assets/img/avatars/none.png');
	   $("#paymentList").load(baseURL+'Cashier/viewListItem');
	   $("#container").load(baseURL+"Cashier/viewPatient",function(){
		initPatient();
	}).fadeIn(1000).show(2200).slideDown(2200);
	}	
});



function initialpayment()
{
    $("#paymentModal").modal({backdrop:true,show:true});
    $("#paymode").text("Initial payment");
	$("#modepay").val('I');
	$("#amtToPay").prop('disabled',true);
	$("#payenccode").val($.session.get('Cashierenccode'));
	$("#payhpercode").val($.session.get('Cashierhpercode'));
	$("#payacctno").val($("#account").text());
}

function fullpayment()
{
    $("#paymentModal").modal({backdrop:true,show:true});
    $("#paymode").text("Full payment");
	$("#modepay").val('F');
	$("#amtToPay").prop('disabled',true);
	$("#payenccode").val($.session.get('Cashierenccode'));
	$("#payhpercode").val($.session.get('Cashierhpercode'));
}
	

	
	
	
	