	function _tabAuth()
	{
		$('a[data-toggle="tab"]').on('click', function (e){
		var tab = e.target.id;
			switch(tab) {
			  case "home-tab":
					VitalSigns(enccode);
				break;
			  case "hw-tab":
					bmiList(enccode);
				break;
			  case "histo-tab":
					History(enccode);
				break;
			  default:
				break;
			}
		});
	}
	
	function generateUserID(id)
	{
		var empID=URLencode(id);
		var obj="";
		  $.ajax({
		  type: "POST",
		  url:baseURL+"auth/generateID/"+empID,
		  data: "JSON",
		  success: function(data,response)
			{ 
				$("#userName").val(data);
			},
			error: function(data,textStatus,xhr)
			{
				alert("Error:"+xhr);
			}
		  });
	}


 $('#selectAll').click(function(e){
    var table= $(e.target).closest('table');
    $('td input:checkbox',table).prop('checked',this.checked);
    $('td input:checkbox',table).prop('disabled',false);
});

	
	$("#chkActPass").on("change",function(){
		var check=$(this).prop("checked");
		if(check==false)
		{
			$("#chkActPass").val(true);
			$("#passw").prop('hidden',false);
			$("#passwc").prop('hidden',false);
			$("#userPassword").prop("readonly",true);
			$("#userPasswordConfirm").prop('readonly',true);
		}else if(check == true){
			$("#userPassword").val("");
			$("#userPasswordConfirm").val("");
			$("#userPassword").prop("readonly",false);
			$("#userPasswordConfirm").prop('readonly',false);
		}else{
			$("#userPassword").val("");
			$("#userPasswordConfirm").val("");
			$("#userPassword").prop("readonly",false);
			$("#userPasswordConfirm").prop('readonly',false);
		}
	 });

	 $("#chkReset").on("change",function(){
		var check=$(this).prop("checked");
		var value = $('#chkReset').is(':checked')? 1:0 ;
		if(check==true)
		{
			var pass=$("#userName").val();
			$("#chkReset").val(value);			
			$("#userPassword").prop('readonly',false);
			$("#userPasswordConfirm").prop('readonly',false);
			$("#userPassword").val(pass.concat('1234'));
			$("#userPasswordConfirm").val(pass.concat('1234'));	
		}else{
			$("#chkReset").val(value);
			$("#passw").prop('hidden',true);
			$("#passwc").prop('hidden',true);		
			$("#userPassword").prop('readonly',true);
			$("#userPasswordConfirm").prop('readonly',true);			
			setUserInformation($('#accuserID').val());
		}
	});
		
	
	 function searchEmployee()
	{	
		var obj=$('#selEmp');
			obj.select2({
			placeholder: 'Select Employee',
			theme:'coreui',
			minimumInputLength: 0,
			allowClear: true,
			ajax:{
			url: baseURL+"Ref_Personnel/selPersonnel",
			dataType: "JSON",
			type:"POST",
			delay: 250,
			data: function(params){
			return{
			searchEmployee: params.term
			};
			},
			processResults: function(data){
			var results = [];
			$.each(data, function(index, item){
			results.push({
			id:item.employeeid,
			text:item.name
			});
			});
			return{
				results: results
			}
			}
			}
			});
			obj.on('change', function() {
			var data = $("#selEmp option:selected",this);
			if(this.value=='')
			{
				$("#userID").val("");
				$('a[data-toggle="tab"]').addClass('disabled');
			}else{
				var username=generateUserID(this.value);
				$("#userID").val(this.value);
				employeeInformation(this.value);
				$('a[data-toggle="tab"]').removeClass('disabled');
			}
			});
	}

	function searchDepartment()
	{
		$('[name $="_dept"]').select2({
		placeholder: 'Select Department',
		allowClear: true,
		theme:'coreui',
		ajax:{
		url: baseURL+"/Auth/selDept",
		dataType: "json",
		type:"POST",
		delay: 250,
		data: function(params){
		return{
		searchDoctor: params.term
		};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.deptcode,
		text:item.deptname
		});
		});
		return{
		results: results
		}
		}
		}
		});
		$('[name $="_dept"]').on('change', function() {
		var data =  $("[name $='_dept'] option:selected",this);
		});
	}

	function setDept(deptcode) {
	searchDepartment();
	var deptcode = encodeURIComponent(encodeURIComponent(deptcode));
	var relSelect =	$('[name $="_dept"]');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_Department/setDepartment/' + deptcode,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['deptname'], obj['deptcode'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select4:select',
			params: {
				data: data
			}
		});
	});
	}

	$(".toggle-password").click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		}else{
			input.attr("type", "password");
		}
});	
	
	