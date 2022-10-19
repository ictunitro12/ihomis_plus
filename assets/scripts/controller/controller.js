	function controllerInformation(id)
	{
		$.ajax({
		type: "POST",
		url: baseURL+"Controller/Information/"+id,
		data: "JSON",
		async:false,
		success: function(data)
		{
			var obj = $.parseJSON(data);
			$("#controllerID").val(obj['controllerID']);
			$("#controllerName").val(obj['controllerName']);
			$("#controllerType option[value="+obj['controllerType']+"").prop('selected', true);
			$("#controllerStatus option[value="+obj['controllerStatus']+"").prop('selected', true);
		}
		
		});
	}


