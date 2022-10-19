$("#SupplierTable").on("click",".ModalDeleteSupplier",function(){
	var data = $(this).data();
	$('#DeleteSupplier').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['suppcode']);

});

$("#SupplierTable").on("click",".ModalEditSupplier",function(){
	var data = $(this).data();
	var obj  = getSupplier(data['suppcode'],data['suppname']);
	console.log(obj);
	$('#ModalAddSupplier').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('update');

	$("#code").prop('readonly', true);

	$("#code").val(obj['suppcode']);
	$("#name").val(obj['suppname']);
	$("#owner").val(obj['suppowne']);
	$("#addr").val(obj['suppaddr']);
	$("#telno").val(obj['supptelno1']);
	$("#telno2").val(obj['supptelno2']);
	$("#localno").val(obj['supptelloc']);
	$("#faxno").val(obj['suppfaxno']);
	$("#email").val(obj['suppemail']);

	$("#tax").val(obj['supptin']);
	$("#vat").val(obj['suppvat']);
	$("#status").val(obj['suppstat']);


});

function AddSupplier(){
	$('#ModalAddSupplier').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('insert');
	$("#code").prop('readonly', false);


}

function getSupplier(suppcode,suppname){
	var suppcode = encodeURIComponent(encodeURIComponent(suppcode));
	var suppname = encodeURIComponent(encodeURIComponent(suppname));

	$.ajax({
		type: "POST",
		url: baseURL+"Ref_Supplier/getSupplier/"+ suppcode + "/"+suppname ,
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

$('#frmSupplier').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"Ref_Supplier/saveSupplier";
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
					$('#ModalAddSupplier').modal('hide');
					SupplierList();     
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalAddSupplier').modal('hide');
					SupplierList();     
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


	},	
	messages: {
		code:'Code is required!',
		name:'Name is required!',
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

