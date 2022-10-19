	function initAdd()
	{
		setLastOrder();
		setMenuCode();
		uppercase();
		$("#formIdenMenu").val('insert');
		$("#menuController").prop("disabled", true);
		$("#menuController").empty();
		$("#menuIcon").val("");
		$("#menuIcon").prop("disabled", false);
		 subMenuList('');
	}

	
	function setLastOrder()
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = 'getLastOrder';
		Obj.data = "JSON";
		var result =Information(Obj);
		$("#menuOrder").val(result);
	}
	
	function setMenuCode()
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = 'getmenuCode';
		Obj.data = "JSON";
		var result =Information(Obj);
		$("#menuID").val(result);
	}
	
