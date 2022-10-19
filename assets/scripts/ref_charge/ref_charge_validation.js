

$("#ChargeTable").on("click",".ModalDeleteCharge",function(){
	var data = $(this).data();
	$('#DeleteCharge').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['chrgcode']);


});

$("#ChargeTable").on("click",".ModalEditCharge",function(){
	var data = $(this).data();
	var accountcode= $(this).data('acctcode');
	var obj  = getCharge(data['chrgcode']);
	
	$("#formIden").val('update');
	$("#code").val(obj['chrgcode']);
	$("#code").prop('readonly', true);
	$("#name").val(obj['chrgdesc']);
	$("#benefit").val(obj['bentypcod']);
	$("#table").val(obj['chrgtable']);
	$("#cost").val(obj['costcenter']);
	$("#seq").val(obj['chargeseq']);
	$("#percent").val(obj['percentage']);
	$("#status").val(obj['chrgstat']);
	$("#acctCode").val(obj['acctcode']);
	$("#chrtDesc").val(obj['acctdesc']);
	$('#ModalAddCharge').modal({ backdrop: 'static'}).draggable({});	
});

function AddCharge(){
	$('#ModalAddCharge').modal({ backdrop: 'static'}).draggable({});	;
	$("#code").prop('readonly', false);
	$("#formIden").val('insert');
	SelChart();
}

function getCharge(chrgcode){

	$.ajax({
		type: "POST",
		data:{chrgcode:chrgcode},
		url: baseURL+"Ref_Charge/getCharge",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
		},
		error: function(data,status){
		}
	});
	return obj;
}


$('#frmCharge').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"Ref_Charge/saveCharge";
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
					$('#ModalAddCharge').modal('hide');
					$("#ChargeTable").DataTable().ajax.reload();   
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalAddCharge').modal('hide');
					$("#ChargeTable").DataTable().ajax.reload();   
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
		status:'required',


	},	
	messages: {
		code:'Code is required!',
		name:'Description is required!',
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

