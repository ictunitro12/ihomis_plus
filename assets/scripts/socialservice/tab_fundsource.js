var enccode=$.session.get('enccode');
var hpercode= $.session.get('hpercode');
var enctr = encodeURIComponent(encodeURIComponent(enccode));


function checkFundSource(fundcode, refdate)
{

	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	var refdate = encodeURIComponent(encodeURIComponent(refdate));

	$.ajax({
		type: "POST",
		url: "../SocialService/checkFundSource/"+fundcode + "/" +refdate+ "/" + enctr,
		data: "JSON",
		success: function(data)
		{ 
			if(data>0)
			{	
				toastr.error('Fund Source Exist! Select other Fund Source');
				$('#ModalFund').modal({ backdrop: 'static'}).draggable({});	
				$('#fundname').val('');	
				$('#codefund').val('');	

			}
			else
			{ 
				
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}


$("#TableFundList").on("click",'tr',function(){
	
	var code = $(this).find('td:nth-child(1)').text();   
	var datefund = $(this).find('td:nth-child(2)').text();   
	var funddesc = $(this).find('td:nth-child(3)').text();   
	var remain = $(this).find('td:nth-child(5)').text();  
	var datefunds = ((datefund == "1970-01-01 00:00:00") || (datefund == null)) ? "0000-00-00 00:00:00" : setTimeLocale(datefund);

	checkFundSource(code, datefund, enctr);

	$('#ModalFund').modal('hide');	
	$("#daterefFund").val(datefunds);
	$("#fundname").val(funddesc);
	$("#availorig").val(remain);
	$("#codefund").val(code);
	$("#amtfund").val('0');
	$("#avail_FundSource").val('');
});

$("#btnFund").on("click",function(){
	$('#ModalFund').modal({ backdrop: 'static'}).draggable({});	
	event.preventDefault();
});

function getTOTALFundsource(enccode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getTOTALFundsource/"+ enccode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
			var amount= obj['amount'];
			if (amount==null) {
				document.getElementById('TOTALFUNDSOURCE').innerHTML = '0';
			}

			else
			{
				document.getElementById('TOTALFUNDSOURCE').innerHTML = amount;
			}

		},
		error: function(data,status){
		}
	});
	return obj;
}	


////////////////////////////////////////////////////////////////////////////



$('#btnFundSource_Add').on('click', function (){
	$('#ModalFundSource_modal').modal({ backdrop: 'static'}).draggable({});;
	$('#fundformIden').val('insert');
	$('#fundEnccode').val($.session.get('enccode'));
	$('#dateFund').val(getTimeLocale());
	$('#btnFund').prop('disabled', false);		

});


$("#TableFund").on("click",".ModalDeleteFundSource",function(){
	var data = $(this).data();
	checkChargesDelete(data['enccode'],data['fundcode']);

	$("#fundEnccodeDelete").val(data['enccode']);
	$("#fundcodeDelete").val(data['fundcode']);
	$("#fundrefDateDelete").val(data['refdate']);

	var obj = getFunds(data['enccode'], data['fundcode'], data['refdate']);
	$("#backAmount").val(obj['remfundamt']);
	$("#usedAmount").val(obj['amount']);

	var back = document.getElementById('backAmount').value;
	var used = document.getElementById('usedAmount').value;
	var finalamount = parseInt(back) + parseInt(used);
	$("#TotalAmount").val(finalamount);

});


$("#TableFund").on("click",".ModalEditFundSource",function(){
	var data = $(this).data();
	var obj = getFunds(data['enccode'], data['fundcode'], data['refdate']);
	checkChargesFundSource(data['enccode'], data['fundcode']);

	$("#fundformIden").val('update');

	$("#fundnum").prop('readonly', true);
	$("#fundEnccode").val(obj['enccode']);
	$("#codefund").val(obj['fundcode']);

	var refdate = obj['refdate'];
	var refdatee = ((refdate == "1970-01-01 00:00:00") || (refdate == null)) ? "" : setTimeLocale(refdate);
	$("#daterefFund").val(refdatee);

	var transdate = obj['trandate'];
	var transdatee = ((transdate == "1970-01-01 00:00:00") || (transdate == null)) ? "" : setTimeLocale(transdate);
	$("#dateFund").val(transdatee);

	$("#fundname").val(obj['funddesc']);


	$("#availorig").val(parseInt(obj['amount']) + parseInt(obj['remfundamt']));

	$("#amtfund").val(obj['amount']);
	$("#fund_usedamount").val(obj['usedamount']);

	$("#avail_FundSource").val(obj['remfundamt']);

	$("#updatecodefund").val(obj['fundcode']);
	$("#updatedatefund").val(refdatee);

	var amountsaved = document.getElementById('amtfund').value;
	var fundsourceamountsaved = document.getElementById('avail_FundSource').value;
	var updatedfinalamount = parseInt(amountsaved) + parseInt(fundsourceamountsaved);
	$("#updatedremamount").val(updatedfinalamount);


});


function getFunds(enccode, fundcode, refdate){
	var obj;
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	var refdate = encodeURIComponent(encodeURIComponent(refdate));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getFunds/"+ enccode +"/" + fundcode +"/"+ refdate,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
		},
		error: function(data,status){
		}
	});
	return obj;
}	

function checkChargesFundSource(enccode, fundcode)
{
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	var enccode = encodeURIComponent(encodeURIComponent(enccode));

	$.ajax({
		type: "POST",
		url: "../SocialService/checkChargesFundSource/"+enccode + "/"+ fundcode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==0)
			{	
				$('#ModalFundSource_modal').modal({ backdrop: 'static'}).draggable({});	
				$('#btnFund').prop('disabled', false);		
			}
			else
			{ 
				$('#ModalFundSource_modal').modal({ backdrop: 'static'}).draggable({});	
				$('#btnFund').prop('disabled', true);		
				
			}
			
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}

function checkChargesDelete(enccode, fundcode)
{
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));

	$.ajax({
		type: "POST",
		url: "../SocialService/checkChargesFundSource/"+enccode + "/"+ fundcode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==0)
			{	
				$('#ModalFundSourceDelete').modal({ backdrop: 'static'});	
				$("#deleteFundSource").val('delete');
				
			}
			else
			{ 
				toastr.error('Please delete Charges');
				
			}
			
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}



var baseURL=$('#base_url').val();

$('#frmFundSource').validate({
	submitHandler: function (form) {
		if ($('#avail_FundSource').val()>=0) {
			var  POSTURL = baseURL+"SocialService/tab_saveFunds";
			$.ajax({
				type : "POST",
				url  : POSTURL,
				dataType: "JSON",
				cache:false,
				async:true,
				data: $(form).serialize(),
				success: function(data){
					console.log(data);
					if($('#fundformIden').val()=='insert')
					{
						$('#ModalFundSource_modal').modal('hide');
						toastr.success(' Successfully Saved! ' ,'Success');
						tab_Funds(enccode);
						getTOTALFundsource(enccode);
						FundList();
					}
					else if($('#fundformIden').val()=='update')
					{
						toastr.success('Successfully Updated! ' ,'Success');
						$('#ModalFundSource_modal').modal('hide');
						tab_Funds(enccode);
						getTOTALFundsource(enccode);
						FundList();
					}

				},
				error: function(data){
					console.log(data);
					toastr.error('Error!','Error');
				}
			});

			return false;
			$(form).submit();
		}
		else{
			toastr.error('Not enough Fund!','Error');
		}	
	},
	rules: {
		dateFund:'required',
		daterefFund:'required',
		fundname:'required',
		amtfund:'required',
	},	
	messages: {
		dateFund:'required!',
		daterefFund:'required!',
		fundname:'required',
		amtfund:'required',
	},
	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
			error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-hidden-accessible'))
		{
			element=$("#selReg" + element.attr("id") + "ul").parent();

			error.insertAfter(element);
		}
		else 
		{
			error.insertAfter(element);
		}
	},

	highlight: function highlight(element) {
		$(element).addClass('is-invalid').removeClass('is-valid');
		if( $(element).hasClass('select2-offscreen'))
		{
			element=$("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},
	
	unhighlight: function unhighlight(element) {
		$(element).addClass('is-valid').removeClass('is-invalid');
		if( $(element).hasClass('select2-offscreen'))
		{
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	} 
});


$('#frmFundSourceDelete').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"SocialService/tab_saveFunds";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#deleteFundSource').val()=='delete')
				{
					toastr.success('Successfully Deleted! ' ,'Success');
					$('#ModalFundSourceDelete').modal('hide');
					tab_Funds(enccode);
					getTOTALFundsource(enccode);
					FundList();			
				}
				else{
					toastr.error('Error on deleting!','Error');
				}
			},
			error: function(data){
				toastr.error('Error on deleting!','Error');
			}
		});
		return false;
		$(form).submit();
	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox')
		{
			error.insertAfter(element.parent('label'));
		}else if(element.hasClass('select2-hidden-accessible'))
		{
			element=$("#selReg" + element.attr("id") + "ul").parent();

			error.insertAfter(element);
		}
		else 
		{
			error.insertAfter(element);
		}
	},

	highlight: function highlight(element) {
		$(element).addClass('is-invalid').removeClass('is-valid');
		if( $(element).hasClass('select2-offscreen'))
		{
			element=$("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},

	unhighlight: function unhighlight(element) {
		$(element).addClass('is-valid').removeClass('is-invalid');
		if( $(element).hasClass('select2-offscreen'))
		{
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	} 
});


function FundList()
{
	var data = new Object();
	data.search = false;
	data.paging = true;
	data.info = false;
	data.orderable = false;

	data.id = "TableFundList";
	data.link = baseURL+"SocialService/FundList",
	data.type = "POST";
	data.coldef =[
	{
		targets: [0],
		visible:true,
		orderable:false,
	},
	],
	loadTable(data);
}	




$('#amtfund').on('change', function() {
	if ($('#fundformIden').val() == 'insert')
	{		
		var avail = document.getElementById('availorig').value;
		var amount = document.getElementById('amtfund').value;
		var result = parseInt(avail) - parseInt(amount);
		$('#avail_FundSource').val(result);
		$('#fund_usedamount').val('0');
	}

	else if($('#fundformIden').val() == 'update') {
		if(parseInt($('#amtfund').val()) >= parseInt($('#fund_usedamount').val()))
		{
			var avail = document.getElementById('availorig').value;
			var amount = document.getElementById('amtfund').value;
			var result = parseInt(avail) - parseInt(amount);
			$('#avail_FundSource').val(result);
		}
		else{
			toastr.error('Not enough Fund!','Error');
		}	
	}
	else{
		toastr.error('Not enough Fund');
	}
});

//////////////////////////////////////////////////////////////////

$("#TableFund").on("click",".ModalTypeCharge",function(){
	var data = $(this).data();
	$('#ModalTypeCharge').modal({ backdrop: 'static'}).draggable({});	
	$('#charge_fundcode').val(data['fundcode']);
	$('#charge_funddate').val(data['refdate']);
	$('#chargeEnccode').val(data['enccode']);

	tab_FundSource_TypeChargeList(data['enccode'], data['fundcode']);
	getTOTALFundsourceCharges(data['enccode'], data['fundcode']);
	checkButton(data['enccode'], data['fundcode']);
});