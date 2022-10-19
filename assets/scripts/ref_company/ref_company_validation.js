

$("#CompanyTable").on("click",".ModalDeleteCompany",function(){
	var data = $(this).data();
	$('#DeleteCompany').modal({ backdrop: 'static'}).draggable({});	
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['coycode']);

});

$("#CompanyTable").on("click",".ModalEditCompany",function(){
	var data = $(this).data();

	$('#ModalAddCompany').modal({ backdrop: 'static'}).draggable({});	
	$("#formIden").val('update');

	$("#code").prop('readonly', true);

	$("#code").val(data['coycode']);
	$("#name").val(data['coyname']);
	$("#addr").val(data['coyaddr']);
	$("#telno").val(data['coytelno']);
	$("#status").val(data['coystat']);

});

function AddCompany(){
	$('#ModalAddCompany').modal({ backdrop: 'static'}).draggable({});	
	$("#formIden").val('insert');
	$("#code").prop('readonly', false);
}


var baseURL=$('#base_url').val();

$('#frmCompany').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"Ref_Company/saveCompany";
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
					$('#ModalAddCompany').modal('hide');
					CompanyList();     
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalAddCompany').modal('hide');
					CompanyList();     
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
		telno:'required',
		
		
	},	
	messages: {
		code:'Code is required!',
		name:'Company Name is required!',
		telno:'Telephone Number is required',
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

