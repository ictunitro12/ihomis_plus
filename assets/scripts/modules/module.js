
	function moduleList()
	{
		var data = new Object();
		data.id = "moduleList";
		data.link = baseURL+"Modules/moduleList";
		data.type = "POST";
		data.coldef =[
		{	
			targets: [3],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'A' : return '<div class="text text-success"><i class="fa fa-check"></i>&nbspACTIVE</div>'; break;
					case 'I' : return '<div class="text text-danger"><i class="fa fa-remove"></i>&nbspINACTIVE</div>'; break;
					default  : return '<i class="fa fa-exclamation"></i>&nbsp UNCONFIRMED';
				}
			},
		}];
		loadTable(data);
	}
	
	
	function getmoduleno()
	{
		$.ajax({
			type: "POST",
			url: baseURL+"Modules/moduleCounter",
			data: "JSON",
			async:false,
			success: function(data)
			{
				$("#moduleID").val(data);
			}
		});
	}
	
	function moduleInfo(id)
	{
		$.ajax({
			type: "POST",
			url: baseURL+"Modules/moduleInfo/"+id,
			data: "JSON",
			async:false,
			success: function(data)
			{
				var obj =  $.parseJSON(data);
				$("#moduleID").val(obj['module_id']);
				$("#moduleName").val(obj['module_name']);
				$("#moduleComment").val(obj['module_comment']);
				$("#moduleStatus option[value=" + obj['module_stat'] + "").prop('selected', true);
			}
		});
	}
	
	$("#btnModule_Add").on('click',function(){
		getmoduleno();
		$("#moduleformIden").val('insert');
		$("#moduleModal").modal('show');
	});
	
	$("#moduleList").on('click',"#btnModule_Edit",function(){
		var id= atob($(this).data('id'));
		moduleInfo(id);
		$("#moduleformIden").val('update');
		$("#moduleModal").modal('show');
	});
	
	$("#moduleList").on('click',"#btnModule_Delete",function(){
		var id= atob($(this).data('id'));
		$("#moduleIDDel").val(id);
		$("#moduleformIdenDelete").val('delete');
		$("#deleteModuleModal").modal('show');
	});
	
	$("#moduleList").on('click',"#btnModule_Delete",function(){
		var id= atob($(this).data('id'));
		$("#moduleIDDel").val(id);
		$("#moduleformIdenDelete").val('delete');
		$("#deleteModuleModal").modal('show');
	});
	
	$('#frmDeleteModule').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"Modules/saveModule",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$('#deleteModuleModal').modal('hide');
			toastr.success('Successfully Deleted! ' ,'Success');
			moduleList();
		},
	
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	}); 
	

$('#frmModule').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"Modules/saveModule";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#moduleformIden').val()=='insert'){
					toastr.success('Module successfully updated! ' ,'Success');
					$("#moduleModal").modal('hide');
					moduleList();
				}else if($('#moduleformIden').val()=='update'){
					toastr.success('Module successfully updated!' ,'Success');
					$("#moduleModal").modal('hide');
					moduleList();
				}else if($('#hwformIdenDelete').val()=='delete'){
					
				}else{
					toastr.error('no post','data');
				}
			},
			error: function(data,xhr,text){
				toastr.error(data,'data');
				toastr.error(xhr,'xhr');
				toastr.error(text,'text');
			}
			});
		return false;
	 $(form).submit();
   },
  rules:{
    moduleName:'required',
    moduleStatus:'required',
  },	
  messages:{
	moduleName:'Module name is required!',
    moduleStatus:'Status is required!',
  },
	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
	error.addClass('invalid-feedback');
	error.insertAfter(element);
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
	
	
	