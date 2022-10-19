function intrmkey()
{
	var date = new Date($('#rmasof').val());
	var dao=(zeroFill((date.getMonth()+1))+''+zeroFill((date.getDate()))+''+date.getFullYear());
	console.log(dao);
	$('#intkey').val($('#code').val()+ dao);	
}

$("#BedAccomTable").on("click",".ModalDeleteBedAccom",function(){
	var data = $(this).data();
	$('#DeleteBedAccom').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['rmacccod']);


});

$("#BedAccomTable").on("click",".ModalEditBedAccom",function(){
	var data = $(this).data();
	var uomcode= $(this).data('bccode');
	var obj  = getBedAccom(data['rmacccod'],data['rmaccdesc'],data['bccode']);
	var now= new Date();
	var uom= btoa(uomcode);
	
	console.log(obj);
	
	$('#ModalAddBedAccom').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('update');
	$("#code").prop('readonly',true);
	
	SelUnitMeasure();
	setUnitMeasure(uom);
	$("#code").val(obj['rmacccod']);
	$("#name").val(obj['rmaccdesc']);
	$("#rmrate").val(obj['rmrate']);
	$("#currency").val(obj['curcode']);
	$("#wpay").val(obj['rmwpay']);

	var dateasof = setTimeLocale(obj['rmrteasof']);
	$("#dteasof").val(dateasof);

	$("#rmasof").val(dateasof);
	$("#status").val(obj['rmstat']);
	$("#intkey").val(obj['rmaccikey']);

});

function AddBedAccom(){
	$('#ModalAddBedAccom').modal({ backdrop: 'static'}).draggable({});	;
	$("#formIden").val('insert');
	SelUnitMeasure();
	$("#code").prop('readonly',false);

	$("#rmasof").val(getTimeLocale());
}

function getBedAccom(rmacccod,rmaccdesc,bccode){
	var rmacccod = encodeURIComponent(encodeURIComponent(rmacccod));
	var rmaccdesc = encodeURIComponent(encodeURIComponent(rmaccdesc));
	var bccode = encodeURIComponent(encodeURIComponent(bccode));
	$.ajax({
		type: "POST",
		url: baseURL+"Ref_BedAccom/getBedAccom/"+ rmacccod + "/"+rmaccdesc+ "/" + bccode  ,
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

$('#frmBedAccom').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"Ref_BedAccom/saveBedAccom";
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
					$('#ModalAddBedAccom').modal('hide');
					BedAccomList();     
				}
				else if($('#formIden').val()=='update')
				{
					toastr.success('Successfully Updated! ' ,'Success');
					$('#ModalAddBedAccom').modal('hide');
					BedAccomList();     
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
		selUnitMeasure:'required',
		status:'required',
		
		
	},	
	messages: {
		code:'Code is required!',
		name:'Description is required!',
		selUnitMeasure:'required!',
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

