function MSS(enccode,hpercode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;
		
		data.id = "chargeMSS";
		data.link = baseURL+"Billing/chargesMSS/"+enctr+"/"+hpercode,
		data.type = "POST";
		data.coldef =[
			{
				targets: [0,1,2],
				visible:false,
				orderable:false,
			},
		
		],
		loadTable(data);
	}
	//Add
	$('#btnMSS_add').on('click', function (){
		$('#ModalMSS_modal').modal('show');
		$('#mssformIden').val('insert');
		$('#mssDateLog').val(getTimeLocale());
		$('#mssEnccode').val($.session.get('enccode'));
		$('#mssHpercode').val($.session.get('hpercode'));
		SelMSS();
		SelEmp();
	});
	
		//Edit
	$('#chargeMSS').on('click','#btnMSS_Edit',function(){
	$('#ModalMSS_modal').modal('show');
		$('#mssformIden').val('update');
		var enccode=URLencode($(this).data('enccode'));
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+"Billing/mssInformation/"+enccode;
		Obj.data = "JSON";
		var row =Information(Obj);
		$('#mssDateLog').val(setTimeLocale(row['datemod']));
		$('#mssEnccode').val(row['enccode']);
		$('#mssHpercode').val(row['hpercode']);
		setMSS(row['mssikey']);
		setInterviewer(row['interviewer']);
		SelEmp();
	});
	
		//Delete
	$('#chargeMSS').on('click','#btnMSS_Delete',function(){
	$('#ModalMSSDelete').modal('show');
		$('#deleteMSS').val('delete');
		var enccode=$(this).data('enccode');
		$('#mssEnccodeDelete').val(enccode);
	});
	
	
		
	$('#frmMSSDelete').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"Billing/saveMSS",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$('#ModalMSSDelete').modal('hide');
			MSS($.session.get('enccode'),$.session.get('hpercode'));
			toastr.Error('Delete Successfully! ' ,'Success');
		},
	
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	}); 
	
	
	function setInterviewer(employeeid)
	{
		SelInterviewer();
		var relSelect = $('#sel_interviewer');
		$.ajax({
			type: 'POST',
			url: baseURL+'MSS/setInterviewer/' + employeeid,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			var option = new Option(obj['lastname'], obj['employeeid'],true, true);
			relSelect.append(option).trigger('change');
			relSelect.trigger({
				theme:'coreui',
				type: 'select2:select',
				params: {
					data: data
				}
			});
		});
	}

	function setmss(mssikey)
	{
		SelMSS();
		var relSelect = $('#sel_mss');
		$.ajax({
			type: 'POST',
			url: baseURL+'Ref_MSS/setMSS/'+mssikey,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			var option = new Option(obj['mssdesc'], obj['mssikey'], true, true);
			relSelect.append(option).trigger('change');
			relSelect.trigger({
				theme:'coreui',
				type: 'select2:select',
				params: {
					data: data
				}
			});
		});
	}
	
	$('#frmMSS').validate({
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
					$('#ModalMSS_modal').modal('hide');
					MSS($.session.get('enccode'),$.session.get('hpercode'));
					toastr.success('Mss Successfully Saved! ' ,'Success');

				}else if($('#mssformIden').val()=='update'){
					$('#ModalMSS_modal').modal('hide');
					MSS($.session.get('enccode'),$.session.get('hpercode'));
					toastr.success('Mss Successfully Updated! ' ,'Success');
				}else{
					toastr.error('Error:No post' ,'Error');
				}
			},
			error: function(data,response){
				toastr.warning('Data must be one','Warning');
			}
			});
		return false;
	 $(form).submit();
   },
  rules:{
    mssDateLog:'required',
    mssClass_mss:'required',
    mssInt_emp:'required'
    
  },	
  messages:{
	mssDateLog:'Date is required!',
    mssClass_mss:'Classification is required!',
    mssInt_emp:'Interviewer is required!'
   
  },
  errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
  

   if(element.hasClass('select2-hidden-accessible'))
	{
		error.insertAfter(element.next('.select2-container'));
	    error.addClass('invalid-feedback');
	}
	else 
	{
      error.insertAfter(element);
	    error.addClass('invalid-feedback');
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
	
