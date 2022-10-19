   $(function(){
		initAdd();
	});	
	
	function initAdd()
	{
		$("#empPic").prop('src', baseURL+'assets/img/avatars/none.png');
		$("#frmFormuser").load(baseURL+"Auth/view_userForm",function(){
			$("#ichkReset").hide();
			searchEmployee();
			uppercase();
			searchDepartment();
		    $('#formIdenUser').val('insert');
		});
	}


$("#selEmp").on('change',function(){
	$.ajax({
		type: "POST",
		url: baseURL+"Ref_Personnel/Personnelinfo/"+this.value,
		data: "JSON",
		async:false,
		success: function(data)
		{
		 obj = $.parseJSON(data);
		 $("#userDept").val(obj['deptcode']);
		},
		error: function(data)
		{
			toastr.error('Error:'+' '+data.status+' '+data.statusText);
		}
		});
});



	

	
  
	

	
	
	
