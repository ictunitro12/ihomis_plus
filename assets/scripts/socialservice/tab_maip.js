var enccode=$.session.get('enccode');
var hpercode= $.session.get('hpercode');
var enctr = encodeURIComponent(encodeURIComponent(enccode));

function getMAIP(hpercode, uniquecode){
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	var uniquecode = encodeURIComponent(encodeURIComponent(uniquecode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getMAIP/"+ hpercode + "/"+ uniquecode,
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

function getTOTAL(hpercode){
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getTOTAL/"+ hpercode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
			var amount= obj['amount'];
			if (amount==null) {
				$("#totalAmountCharges").val('0');
				document.getElementById('TOTAL').innerHTML = '0';
			}

			else
			{
				$("#totalAmountCharges").val(amount);
				document.getElementById('TOTAL').innerHTML = amount;
			}

		},
		error: function(data,status){
		}
	});
	return obj;
}	




function getTOTALCharges(enccode, uniquecode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var uniquecode = encodeURIComponent(encodeURIComponent(uniquecode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getTOTALCharges/"+ enccode + "/"+ uniquecode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
			var amount= obj['amount'];
			if (amount==null) {
				$("#totalMAIPCharges").val('0');
				$("#totalAmountCharges").val('0');
				document.getElementById('TOTALCHARGES').innerHTML = '0';
			}
			else
			{
				$("#totalMAIPCharges").val(amount);
				$("#totalAmountCharges").val(amount);

				document.getElementById('TOTALCHARGES').innerHTML = amount;
			}

		},
		error: function(data,status){
		}
	});
	return obj;
}	


$('#btnMAIP_Add').on('click', function (){
	$('#ModalMAIP_modal').modal({ backdrop: 'static'});;
	$('#maipformIden').val('insert');
	
	$("#uniquecode").prop('readonly', false);

	$('#maipEnccode').val(enccode);
	$('#maipHpercode').val(hpercode);
	$('#dateIndorse').val(getTimeLocale());


	let month = 1;
	let now = new Date();
	now.setMonth(now.getMonth() + month * 1);

	var time = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);

	$("#dateExpired").val(time);
});


$("#amount_maip").change(function (e) {
	if ($('#maipformIden').val() == 'insert') {
		$('#remaining_amount').val($("#amount_maip").val());
	}
	else if ($('#maipformIden').val() == 'update') {
		var amount = parseInt($('#amount_maip').val());
		var TotalCharges = parseInt($('#totalAmountCharges').val());

		console.log(amount);
		console.log(TotalCharges);

		if (TotalCharges > amount) {
			toastr.error('Error!','Insufficient Fund in Charges!');
			$('#amount_maip').val('');
			$('#remaining_amount').val('');
		}
		else if (TotalCharges <= amount) {
			var final = parseInt(amount) - parseInt(TotalCharges);
			$('#remaining_amount').val(final);
		}

	}
	else{
		$('#remaining_amount').val($("#amount_maip").val());
	}

});


function checkChargesMAIP(hpercode, uniquecode)
{
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	var uniquecode = encodeURIComponent(encodeURIComponent(uniquecode));

	$.ajax({
		type: "POST",
		url: "../SocialService/checkChargesMAIP/"+hpercode + "/"+ uniquecode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==0)
			{	
				$('#ModalMAIPDelete').modal({ backdrop: 'static'});	
				$("#deleteMAIP").val('delete');
				
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

$("#TableMAIP").on("click",".ModalDeleteMAIP",function(){
	var data = $(this).data();
	checkChargesMAIP(data['hpercode'],data['unique_code']);
	$("#maipHpercodeDelete").val(data['hpercode']);
	$("#maipUniqueCodeDelete").val(data['unique_code']);

});


$("#TableMAIP").on("click",".ModalEditMAIP",function(){
	var data = $(this).data();
	var obj = getMAIP(data['hpercode'], data['unique_code']);	

	getTOTALCharges(enccode, data['unique_code']);

	$('#ModalMAIP_modal').modal({ backdrop: 'static'});	
	$("#maipformIden").val('update');
	$("#uniquecode").prop('readonly', true);
	$("#remaining_amount").prop('readonly', true);

	$("#maipHpercode").val(obj['hpercode']);
	$("#fundname_maip").val(obj['funddesc']);
	$("#codemaip").val(obj['fundcode']);
	$("#uniquecode").val(obj['unique_code']);
	$("#amount_maip").val(obj['amount']);
	$("#remaining_amount").val(obj['remamount']);

	

	var indorse = obj['indrsdate'];
	var dateindorse = ((indorse == "1970-01-01 00:00:00") || (indorse == "1970-01-01 08:00:00") || (indorse == null)) ? "" : setTimeLocale(indorse);
	$("#dateIndorse").val(dateindorse);

	var expiry = obj['date_expiry'];
	var dateexpiry = ((expiry == "1970-01-01 00:00:00") ||(expiry == "1970-01-01 08:00:00") ||  (expiry == null)) ? "" : setTimeLocale(expiry);
	$("#dateExpired").val(dateexpiry);

	var trans = obj['trandate'];
	var datetrans = ((trans == "1970-01-01 00:00:00") ||(trans == "1970-01-01 08:00:00") || (trans == null)) ? "" : setTimeLocale(trans);
	$("#datetrans").val(datetrans);

});



var baseURL=$('#base_url').val();

$('#frmMAIP').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"SocialService/tab_saveMAIP";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#maipformIden').val()=='insert')
				{
					$('#ModalMAIP_modal').modal('hide');
					toastr.success(' Successfully Saved! ' ,'Success');
					tab_MAIP(hpercode);
					getTOTAL(hpercode);
				}
				else if($('#maipformIden').val()=='update')
				{

					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalMAIP_modal').modal('hide');
					tab_MAIP(hpercode);
					getTOTAL(hpercode);

				}
				
			},
			error: function(data){
				toastr.error('Error!','Error');
			}
		});
		return false;
		$(form).submit();
	},
	rules: {
		uniquecode:'required',
		dateIndorse:'required',
		dateExpired:'required',
		amount_maip:'required',	
	},	
	messages: {
		uniquecode:'required!',
		dateIndorse:'required!',
		dateExpired:'required',
		amount_maip:'required',
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


$('#frmMAIPDelete').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"SocialService/tab_saveMAIP";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#deleteMAIP').val()=='delete')
				{
					toastr.success('Successfully Deleted! ' ,'Success');
					$('#ModalMAIPDelete').modal('hide');
					tab_MAIP(hpercode);
					getTOTAL(hpercode);

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


/////////////////////Fund Source validation

$("#btnFundMAIP").on("click",function(){
	$('#ModalFundMAIP').modal({ backdrop: 'static'});	
});


function FundListMAIP()
{
	var data = new Object();
	data.search = false;
	data.paging = true;
	data.info = false;
	data.orderable = false;

	data.id = "TableFundListMAIP";
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


$("#TableFundListMAIP").on("click",'tr',function(){
	
	var code = $(this).find('td:nth-child(1)').text();   
	var datefund = $(this).find('td:nth-child(2)').text();   
	var funddesc = $(this).find('td:nth-child(3)').text();   
	var datefunds = ((datefund == "1970-01-01 00:00:00") || (datefund == null)) ? "0000-00-00 00:00:00" : setTimeLocale(datefund);

	checkFundSourceMAIP(code, datefund, enctr);

	$('#ModalFundMAIP').modal('hide');	

	$("#fundname_maip").val(funddesc);
	$("#codemaip").val(code);
	$("#datetrans").val(datefund);
	$("#amount_maip").val('');
	$("#remaining_amount").val('');
});


function checkFundSourceMAIP(fundcode, trandate)
{

	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	var trandate = encodeURIComponent(encodeURIComponent(trandate));

	$.ajax({
		type: "POST",
		url: "../SocialService/checkFundSourceMAIP/"+fundcode + "/" +trandate+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data>0)
			{	
				toastr.error('Fund Source Exist! Select other Fund Source');
				$('#ModalFundMAIP').modal({ backdrop: 'static'});	
				$('#fundname_maip').val('');	
				$('#codemaip').val('');	

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


$("#TableFundListMAIP").on("click",".ModalMAIPCharge",function(){
	var data = $(this).data();
	$('#ModalMAIPCharge').modal({ backdrop: 'static'});	
	$('#charge_uniquecode_maip').val(data['unique_code']);
	$('#charge_trandate_maip').val(data['trandate']);
});