var enccode=$.session.get('enccode');
var hpercode= $.session.get('hpercode');
var enctr = encodeURIComponent(encodeURIComponent(enccode));

$(function(){
	checkPromi(enctr);
});



function checkPromi(enccode)
{

	$.ajax({
		type: "POST",
		url: "../SocialService/checkPromi/"+enccode,
		data: "JSON",
		success: function(data)
		{ 
			console.log(data);
			if(data==0)
			{	
				$('#btnPromissory_Add').removeAttr("disabled");				
			}
			else
			{ 
				$('#btnPromissory_Add').attr('disabled', true);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}



$('#btnPromissory_Add').on('click', function (){
	$('#ModalPromisorry_modal').modal({ backdrop: 'static'}).draggable({});;
	$('#promiformIden').val('insert');

	$('#promiEnccode').val($.session.get('enccode'));
	$('#promiHpercode').val($.session.get('hpercode'));
	$('#datePromi').val(getTimeLocale());


	var year = new Date();
	var PromiNum = (year.getFullYear()  + '000001')
	$('#prominum').val(PromiNum);
});


$("#TablePromi").on("click",".ModalDeletePromissory",function(){
	var data = $(this).data();
	console.log(data);
	$('#ModalPromisorryDelete').modal({ backdrop: 'static'}).draggable({});	
	$("#deletePromisorry").val('delete');
	$("#promiEnccodeDelete").val(data['enccode']);

});


$("#TablePromi").on("click",".ModalEditPromissory",function(){
	var data = $(this).data();
	var obj = getPromissory(data['enccode']);

	console.log(obj);
	$('#ModalPromisorry_modal').modal({ backdrop: 'static'}).draggable({});	
	$("#promiformIden").val('update');

	$("#promiHpercode").val(obj['hpercode']);
	$("#promiEnccode").val(obj['enccode']);
	$("#prominum").val(obj['promno']);
	$("#namesign").val(obj['promname']);
	$("#payamountfirst").val(obj['promfamt']);
	$("#payamountsecond").val(obj['promsamt']);
	$("#payamountthird").val(obj['promtamt']);

	var dteprom = obj['promdate'];
	var datepromi = ((dteprom == "1970-01-01 00:00:00") || (dteprom == null)) ? "" : setTimeLocale(dteprom);
	$("#datePromi").val(datepromi);

	var pay1 = obj['promfirst'];
	var pay1st = ((pay1 == "1970-01-01 00:00:00") || (pay1 == null)) ? "" : setTimeLocale(pay1);
	$("#payfirst").val(pay1st);

	var pay2 = obj['promseco'];
	var pay2nd = ((pay2 == "1970-01-01 00:00:00") || (pay2 == null)) ? "" : setTimeLocale(pay2);
	$("#paysecond").val(pay2nd);

	var pay3 = obj['promthird'];
	var pay3rd = ((pay3 == "1970-01-01 00:00:00") || (pay3 == null)) ? "" : setTimeLocale(pay3);
	$("#paythird").val(pay3rd);

});


function getPromissory(enccode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	$.ajax({
		type: "POST",
		url: baseURL+"SocialService/getPromissory/"+ enccode,
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



var baseURL=$('#base_url').val();

$('#frmPromissory').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"SocialService/tab_savePromissory";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#promiformIden').val()=='insert')
				{
					$('#ModalPromisorry_modal').modal('hide');
					toastr.success(' Successfully Saved! ' ,'Success');
					tab_Promissory(enccode,hpercode);
					checkPromi(enctr);
				}
				else if($('#promiformIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalPromisorry_modal').modal('hide');
					tab_Promissory(enccode,hpercode);
					checkPromi(enctr);
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
		prominum:'required',
		datePromi:'required',
		namesign:'required',
		payfirst:'required',
		payamountfirst:'required',		
	},	
	messages: {
		prominum:'required!',
		datePromi:'required!',
		namesign:'required',
		payfirst:'required',
		payamountfirst:'required',
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


$('#frmPromisorryDelete').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"SocialService/tab_savePromissory";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#deletePromisorry').val()=='delete')
				{
					toastr.success('Successfully Deleted! ' ,'Success');
					$('#ModalPromisorryDelete').modal('hide');
					tab_Promissory(enccode,hpercode);
					checkPromi(enctr);
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