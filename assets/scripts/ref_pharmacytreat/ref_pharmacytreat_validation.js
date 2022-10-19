
$("#PharmacyTreatTable").on("click",".ModalDeletePharmacyTreat",function(){
	var data = $(this).data();
	$('#DeletePharmacyTreat').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['rtecode']);

});

$("#PharmacyTreatTable").on("click",".ModalEditPharmacyTreat",function(){
	var data = $(this).data();
	$('#ModalAddPharmacyTreat').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('update');
	
	var hbcode = data['hbcode'];
	console.log(hbcode);
	setBodySite(hbcode);
	$("#code").prop('disabled', true);
	$("#code").val(data['rtecode']);
	$("#addevice").val(data['hrxraddev']);
	$("#admeth").val(data['rxradmet']);
	$("#status").val(data['rxrstat']);

});

function AddPharmacyTreat(){
	$('#ModalAddPharmacyTreat').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('insert');
	SelBodySite();
	$("#code").prop('disabled', false);
}

var baseURL=$('#base_url').val();

$('#frmPharmacyTreat').validate({
	submitHandler: function (form) {
	$("#code").removeAttr('disabled');

		var  POSTURL = baseURL+"Ref_PharmacyTreat/savePharmacyTreat";
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
					$('#ModalAddPharmacyTreat').modal('hide');
					PharmacyTreatList();     
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalAddPharmacyTreat').modal('hide');
					PharmacyTreatList();     
				}
			},
			error: function(data){
				toastr.error('Error on saving!','Error');
			}
		});
		return false;
		$(form).submit();
	},
	rules: {
		code:'required',
		selBodySite:'required',
		addevice:'required',
		admeth:'required',


	},	
	messages: {
		code:'Route of Administration is required!',
		selBodySite:'Body Site is required!	',
		addevice:'Administrative Device is required!',
		admeth:'Administrative Method is required!',
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