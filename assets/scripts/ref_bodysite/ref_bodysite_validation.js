	$("#BodySiteTable").on("click",".ModalDeleteBodySite",function(){
		var data = $(this).data();
		$('#DeleteBodySite').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['hbcode']);

	});

	$("#BodySiteTable").on("click",".ModalEditBodySite",function(){
		var data = $(this).data();

		$('#ModalAddBodySite').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIden").val('update');
		$("#code").prop('readonly',true);
		$("#code").val(data['hbcode']);
		$("#name").val(data['hbdesc']);
		$("#status").val(data['hbstat']);

	});

	function AddBodySite(){
		$('#ModalAddBodySite').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIden").val('insert');
		$("#code").prop('readonly',false);

	}


	var baseURL=$('#base_url').val();

	$('#frmBodySite').validate({
		submitHandler: function (form) {
			var  POSTURL = baseURL+"Ref_BodySite/saveBodySite";
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
						$('#ModalAddBodySite').modal('hide');
						BodySiteList();     
					}
					else if($('#formIden').val()=='update')
					{
						toastr.success('Successfully Updated! ' ,'Success');
						$('#ModalAddBodySite').modal('hide');
						BodySiteList();     
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
			name:'required',
			status:'required',
			
			
		},	
		messages: {
			code: 'Code is required!',
			name: 'Description is required!',
			status: 'Status is required!',
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