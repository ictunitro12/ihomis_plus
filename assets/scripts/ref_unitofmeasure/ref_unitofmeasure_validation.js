
$("#UnitMeasureTable").on("click",".ModalDeleteUnitMeasure",function(){
	var data = $(this).data();
	$('#DeleteUnitMeasure').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['uomcode']);

});

$("#UnitMeasureTable").on("click",".ModalEditUnitMeasure",function(){
	var data = $(this).data();

	$('#ModalAddUnitMeasure').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('update');

	console.log(data);
	$("#code").prop('readonly', true);
	$("#code").val(data['uomcode']);
	$("#name").val(data['uomdesc']);
	$("#status").val(data['uomstat']);


});

function AddUnitMeasure(){
	$('#ModalAddUnitMeasure').modal({ backdrop: 'static'}).draggable({});
	$("#formIden").val('insert');
	$("#code").prop('readonly', false);
	

}

var baseURL=$('#base_url').val();

$('#frmUnitMeasure').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"Ref_UnitsofMeasure/saveUnitMeasure";
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
					$('#ModalAddUnitMeasure').modal('hide');
					UnitMeasureList();     
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalAddUnitMeasure').modal('hide');
					UnitMeasureList();     
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

