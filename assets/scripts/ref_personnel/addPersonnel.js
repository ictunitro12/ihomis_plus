

	function initAdd()
	{
		$("#formIdenPersonnel").val('insert');
		selDepartment();
	}

	function selDepartment()
	{
	  $('#selDept').select2({
		theme:'coreui',
		placeholder: 'Select',
		allowClear: true,
		encryption:true,
		ajax:{
		url: baseUrl+"/Ref_Personnel/selectDept",
		dataType: "json",
		type:"POST",
		delay: 250,
		data: function(params){
		return{
		searchParam: params.term
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
		$('#empdept').on('change', function(){
		var data = $("#empdept option:selected",this);
		var tscode = $("#deptcode").val(this.value);
		});
	}