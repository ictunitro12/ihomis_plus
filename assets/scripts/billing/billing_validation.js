$('#frmMSS_form').validate({
submitHandler: function (form){
var  POSTURL = baseURL+"Billing/saveMSS";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#mssformIden').val()=='insert'){
					toastr.success('MSS Successfully Saved! ' ,'Success');
					$("#ModalMSS_modal").modal('hide');
					MSS($('#mssEnccode').val(),$('#mssHpercode').val());
				}else{
					toastr.success('MSS Successfully Updated! ' ,'Success');
				}
			},
			error: function(data){
				toastr.error('Error on saving!','Error');
			}
			});
		return false;
	 $(form).submit();
   }
});



