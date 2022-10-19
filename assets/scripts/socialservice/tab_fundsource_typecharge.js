var enccode=$.session.get('enccode');
var enctr = encodeURIComponent(encodeURIComponent(enccode));

var baseURL=$('#base_url').val();

function getPDAF(enccode, fundcode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getPDAF/"+ enccode + "/" +fundcode,
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

function getFundSourceCharge(enccode, chrgcode, fundcode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	var chrgcode = encodeURIComponent(encodeURIComponent(chrgcode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getFundSourceCharge/"+ enccode + "/" +chrgcode + "/" + fundcode,
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


function checkButton(enccode, fundcode)
{
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getPDAF/"+ enccode + "/" +fundcode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
			var usedamount = obj['usedamount'];
			var amount = obj['amount'];

			if (amount > usedamount) {
				$('#btnTypeCharge_Add').prop("disabled", false);	
			}
			else if (amount == usedamount) {
				$('#btnTypeCharge_Add').prop("disabled", true);
			}
			else{
				$('#btnTypeCharge_Add').prop("disabled", false);
				
			}
		},
		error: function(data,status){
		}
	});
}

function tab_FundSource_TypeChargeList(enccode,fundcode)
{
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	var data = new Object();
	data.search = false;
	data.paging = true;
	data.info = false;
	data.orderable = false;

	data.id = "TableTypeChargeList";
	data.link = baseURL+"SocialService/tab_FundSource_TypeChargeList/"+enctr+"/"+fundcode,
	data.type = "POST";
	data.coldef =[
	{
		targets: [0,1,2,3,4],
		visible:false,
		orderable:false,
	},

	];
	loadTable(data);
}


function getTOTALFundsourceCharges(enccode, fundcode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getTOTALFundsourceCharges/"+ enccode + "/" +fundcode,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
			var amount= obj['amount'];
			if (amount==null) {
				document.getElementById('TOTALFUNDSOURCECHARGES').innerHTML = '0';
				$('#SubTotalCharge').val("0");
			}

			else
			{
				document.getElementById('TOTALFUNDSOURCECHARGES').innerHTML = amount;
				$('#SubTotalCharge').val(amount);
			}

		},
		error: function(data,status){
		}
	});
	return obj;
}	


function checkChargecode(enctr, chargecode)
{

	var chargecode = encodeURIComponent(encodeURIComponent(chargecode));
	$.ajax({
		type: "POST",
		url: "../SocialService/checkChargecode/"+enctr + "/" + chargecode,
		data: "JSON",
		success: function(data)
		{ 
			if ($('#chargeformIden').val() == 'insert')
			{
				if(data>0) 
				{   
					toastr.error('Type of Charge selected already exist!');
					$('#fundsource_charges').empty();
					$('#amttypecharge').val('');
				}  
			}
			else if($('#chargeformIden').val() == 'update')
			{
				if ($('#oldChargeCode').val() != $('#fundsource_charges').val()) 
				{
					if(data>0)
					{   
						toastr.error('Type of Charge selected already exist!');
						$('#fundsource_charges').empty();
						$('#amttypecharge').val('');
					}   
					else{
						$('#amttypecharge').val('');
					}
				}
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}


$('#amttypecharge').on('change', function() {
	if ($('#chargeformIden').val() == 'insert')
	{		
		var pdafamount = document.getElementById('PDAFAmount').value;
		var chargeamt = document.getElementById('amttypecharge').value;
		var result = parseInt(pdafamount) - parseInt(chargeamt);
		$('#AvailableAmount').val(result);

		$('#TotalCharge').val(parseInt($('#SubTotalCharge').val()) + parseInt($('#amttypecharge').val()) );
	}

	else if($('#chargeformIden').val() == 'update') {

		var pdafamount = document.getElementById('PDAFAmount').value;
		var chargeamt = document.getElementById('amttypecharge').value;
		var subTotal = document.getElementById('SubTotalCharge').value;
		var oldamt = document.getElementById('oldAmount').value;
		var result = parseInt(pdafamount) - parseInt(chargeamt);
		$('#AvailableAmount').val(result);

		$('#TotalCharge').val(parseInt(subTotal) + parseInt(chargeamt) - parseInt(oldamt));
		
	}
	else{
		toastr.error('Not enough Fund!', 'Error');
	}
});



$("#btnTypeCharge_Add").on("click",function(){
	var fundcode= $('#charge_fundcode').val();	
	$('#ModalTypeCharge_modal').modal({ backdrop: 'static'}).draggable({});	
	$('#chargeformIden').val('insert');	
	$('#chrgfundcode').val($('#charge_fundcode').val());
	$('#chrgfunddate').val($('#charge_funddate').val());
	$('#chrgEnccode').val($('#chargeEnccode').val());
	var obj = getPDAF($('#chrgEnccode').val(),$('#chrgfundcode').val());
	$('#AvailableAmount').val(obj['AvailableFund']);
	$('#PDAFAmount').val(parseInt(obj['amount']) - parseInt(obj['usedamount']) );
	FundSourceCharges();
});


$('#TableTypeChargeList').on('click','.ModalEditFundTypeCharge',function(){
	var data = $(this).data();
	$('#ModalTypeCharge_modal').modal({ backdrop: 'static'}).draggable({});	
	$('#chargeformIden').val('update');	

	var obj = getFundSourceCharge(data['enccode'], data['chrgcode'], data['fundcode']);

	setFundSourceCharges(obj['chrgcode']);
	$('#oldChargeCode').val(obj['chrgcode']);	
	$('#chrgEnccode').val(obj['enccode']);
	$('#chrgfundcode').val(obj['fundcode']);

	$('#amttypecharge').val(obj['chrgamt']);
	$('#oldAmount').val(obj['chrgamt']);
	$('#chrgfunddate').val(obj['refdate']);

	var pdaf = getPDAF(obj['enccode'], obj['fundcode']);
	$('#AvailableAmount').val( parseInt(pdaf['AvailableFund'])+ parseInt(obj['chrgamt']));
	$('#PDAFAmount').val(parseInt(pdaf['AvailableFund']) + parseInt(obj['chrgamt']));

	var total_charge = getTOTALFundsourceCharges(obj['enccode'], obj['fundcode']);
	$('#SubTotalCharge').val(parseInt(total_charge['amount']));

	
	var chargeamt = document.getElementById('amttypecharge').value;
	var subTotal = document.getElementById('SubTotalCharge').value;
	var oldamt = document.getElementById('oldAmount').value;

	$('#TotalCharge').val(parseInt(subTotal) + parseInt(chargeamt) - parseInt(oldamt));
});


$('#TableTypeChargeList').on('click','.ModalDeleteTypeCharge',function(){
	var data = $(this).data();
	$('#ModalTypeChargeDelete').modal({ backdrop: 'static'}).draggable({});	
	$('#deleteTypeChargeIden').val('delete');	
	
	$('#chargeEnccodeDelete').val(data['enccode']);
	$('#chargecodeDelete').val(data['chrgcode']);
	$('#fundcodeChargeDelete').val(data['fundcode']);

	var row = getFundSourceCharge(data['enccode'], data['chrgcode'], data['fundcode'])
	$('#AmountDelete').val(row['chrgamt']);

	
	var obj = getPDAF(data['enccode'], data['fundcode']);
	$('#usedAmountDelete').val(obj['usedamount']);


	$('#TotalusedAmountDelete').val(parseInt(obj['usedamount']) - parseInt(row['chrgamt']));
});




$('#frmTypeCharge').validate({
	submitHandler: function (form) {
		
		if( parseInt($('#PDAFAmount').val()) >= parseInt($('#amttypecharge').val()))
		{
			var  POSTURL = baseURL+"SocialService/tab_saveFundsTypeCharge";
			$.ajax({
				type : "POST",
				url  : POSTURL,
				dataType: "JSON",
				cache:false,
				async:true,
				data: $(form).serialize(),
				success: function(data){
					var fundcode = $('#charge_fundcode').val();
					if($('#chargeformIden').val()=='insert')
					{
						$('#ModalTypeCharge_modal').modal('hide');
						toastr.success(' Successfully Saved! ' ,'Success');
						tab_Funds(enccode);
						tab_FundSource_TypeChargeList(enccode,fundcode);
						checkButton(enccode,fundcode);
						getTOTALFundsourceCharges(enccode,fundcode);

					}
					else if($('#chargeformIden').val()=='update')
					{
						toastr.success('Successfully Updated! ' ,'Success');
						$('#ModalTypeCharge_modal').modal('hide');
						tab_Funds(enccode);
						tab_FundSource_TypeChargeList(enccode,fundcode);
						checkButton(enccode,fundcode);
						getTOTALFundsourceCharges(enccode,fundcode);
					}

				},
				error: function(data){
					toastr.error('Error!','Error');
				}
			});
			return false;
			$(form).submit();
		}
		else{
			toastr.error('Charges Exceed Fund Amount!','Error');
		}	
	},
	rules: {
		selCharge:'required',
		amttypecharge:'required',
	},	
	messages: {
		selCharge:'required',
		amttypecharge:'required!',
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

$('#frmTypeChargeDelete').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"SocialService/tab_saveFundsTypeCharge";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#deleteTypeChargeIden').val()=='delete')
				{
					var fundcode = $('#fundcodeChargeDelete').val();

					toastr.success('Successfully Deleted! ' ,'Success');
					$('#ModalTypeChargeDelete').modal('hide');
					tab_Funds(enccode);
					tab_FundSource_TypeChargeList(enccode,fundcode);
					checkButton(enccode,fundcode);
					getTOTALFundsourceCharges(enccode,fundcode);
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

function FundSourceCharges()
{
	$('[name $="_charges"]').select2({
		allowClear: true,
		placeholder:'Select Type of Charge',
		theme:'coreui',
		ajax:{
			url: baseURL+"Ref_Charge/searchCharge",
			dataType: "json",
			type:"POST",
			delay: 250,
			data: function(params){
				return{
					searchCharge: params.term
				};
			},
			processResults: function(data){
				var results = [];
				$.each(data, function(index, item){
					results.push({
						id: item.chrgcode,
						text: item.chrgdesc
					});
				});
				return{
					results: results
				}

			}
		}
	});


	$('[name $="_charges"]').on('change', function() {
		$("[name $='_charges'] option:selected",this);
		var chargecode =$('#fundsource_charges').val();
		checkChargecode(enctr, chargecode);
	});

}

function setFundSourceCharges(chrgcode) {
	FundSourceCharges();
	var relSelect = $('#fundsource_charges');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_Charge/setCharge/' + chrgcode,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['chrgdesc'], obj['chrgcode'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}