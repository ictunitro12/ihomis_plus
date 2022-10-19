	function intdisckey()
	{
		var date = new Date();
		var month = ('0' + (date.getMonth() + 1)).slice(-2);
		var day = ('0' + date.getDate()).slice(-2);
		var year = date.getFullYear();
		var dao= month +day +year;
		console.log(dao);
		$('#intkey').val($('#code').val()+ dao);	
	}

	$("#DiscountTable").on("click",".ModalDeleteDiscount",function(){
		var data = $(this).data();
		$('#DeleteDiscount').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['disccode']);


	});

	$("#DiscountTable").on("click",".ModalEditDiscount",function(){
		var data = $(this).data();
		var uomcode= $(this).data('bccode');
		var obj  = getDiscount(data['disccode'],data['discdesc'],data['bccode']);

		
		
		$('#ModalAddDiscount').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIden").val('update');
		SelUnitMeasure();
		var uom= btoa(uomcode);
		
		console.log(uom);
		setUnitMeasure(uom);
		$("#code").prop('readonly', true);

		$("#code").val(obj['disccode']);
		$("#name").val(obj['discdesc']);
		$("#discountype").val(obj['disctyp']);
		$("#amt").val(obj['disamt']);
		$("#currency").val(obj['curcode']);
		
		var dates = obj['discdte'];
		var dateasof = ((dates == "1970-01-01 00:00:00") || (dates == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dates);
		$("#dteasof").val(dateasof);

		$("#status").val(obj['disstat']);
		$("#intkey").val(obj['discikey']);

		console.log(dateasof);

	});

	function AddDiscount(){
		$('#ModalAddDiscount').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIden").val('insert');
		SelUnitMeasure();
		$("#dteasof").val(getTimeLocale());
		$("#code").prop('readonly', false);


	}

	function getDiscount(disccode,discdesc,bccode){
		var disccode = encodeURIComponent(encodeURIComponent(disccode));
		var discdesc = encodeURIComponent(encodeURIComponent(discdesc));
		var bccode = encodeURIComponent(encodeURIComponent(bccode));
		$.ajax({
			type: "POST",
			url: baseURL+"Ref_Discount/getDiscount/"+ disccode + "/"+discdesc+ "/" + bccode  ,
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

	$('#frmDiscount').validate({
		submitHandler: function (form) {
			var  POSTURL = baseURL+"Ref_Discount/saveDiscount";
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
						$('#ModalAddDiscount').modal('hide');
						DiscountList();     
					}
					else if($('#formIden').val()=='update')
					{
						toastr.success('Successfully Updated! ' ,'Success');
						$('#ModalAddDiscount').modal('hide');
						DiscountList();     
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
			selUnitMeasure:'Unit of Measure is required!',
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

