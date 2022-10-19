
	
	 function menuinformation(id)
	 {
			var res="";
			var Obj = new Object();
			Obj.type = "POST";
			Obj.url = 'menuInformartion/'+id;
			Obj.data = "JSON";
		var res =Information(Obj);
		 if(res==undefined)
		 {
			 return res;
		 }else{
			 
		 }
		
	 }

	function _changeState()
	{
		var data = $("#menuSub").val();
		var formType = $("#formIdenMenu").val();
		var id = $("#menuID").val();
	
		if(data=='Y' && formType=='insert')
		{
			$("#menuController").prop("disabled", true);
			$("#menuController").empty();
			$("#sublist").show();
			
		}else if(data=='N' && formType=='insert' ){
			
			$("#menuController").prop("disabled", false);
			$("#menuIcon").val("");
			$("#menuIcon").prop("disabled", false);
		
				$("#sublist").hide();
			
		}else if(data=='Y' && formType=='update'){
			$("#menuController").prop("disabled", true);
			$("#menuController").empty();
			$("#sublist").show();
		
		}else if(data=='N' && formType=='update'){
			$("#menuController").prop("disabled", false);
			$("#menuIcon").val("");
			$("#menuIcon").prop("disabled", false);
			$("#sublist").hide();
		}else{
			$("#menuController").prop("disabled", true);
			$("#menuController").empty();
			$("#menuIcon").val("");
			$("#menuIcon").prop("disabled", false);
				$("#sublist").hide();
		}
	}
	