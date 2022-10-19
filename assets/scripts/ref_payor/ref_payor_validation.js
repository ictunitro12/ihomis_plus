$("#PayorTable").on("click",".ModalDeletePayor",function(){
	var data = $(this).data();
	$('#DeletePayor').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['provider']);

});

$("#PayorTable").on("click",".ModalEditPayor",function(){
	var data = $(this).data();
	var obj  = getPayor(data['provider'],data['provname']);
	console.log(obj);
	$('#ModalAddPayor').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('update');


	$("#code").prop('readonly', true);
	$("#code").val(obj['provider']);
	$("#name").val(obj['provname']);
	$("#addr").val(obj['provaddr']);
	$("#contact").val(obj['provcp']);
	$("#telno").val(obj['provtel']);
	$("#faxno").val(obj['provfax']);
	$("#email").val(obj['provemail']);
	$("#status").val(obj['provstat']);


});

function AddPayor(){
	$('#ModalAddPayor').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('insert');
	$("#code").prop('readonly', false);

}

function getPayor(provider,provname){
	var provider = encodeURIComponent(encodeURIComponent(provider));
	var provname = encodeURIComponent(encodeURIComponent(provname));
	$.ajax({
		type: "POST",
		url: baseURL+"Ref_Payor/getPayor/"+ provider + "/"+provname ,
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

$('#frmPayor').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"Ref_Payor/savePayor";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#formIden').val()=='insert')
				{
					toastr.success(' Successfully Saved! ' ,'Success');
					$('#ModalAddPayor').modal('hide');
					PayorList();     
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalAddPayor').modal('hide');
					PayorList();     
				}
			},
			error: function(data){
				toastr.error('Dont change the code!','Error');
			}
		});
		return false;
		$(form).submit();
	},
	rules: {
		code:'required',
		name:'required',
		addr:'required',
		status:'required',


	},	
	messages: {
		code:'Code is required!',
		name:'Name is required!',
		addr:'Addr is required',
		status:'Status is required',
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

