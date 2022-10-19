	function initEdit(id)
	{
		setInformation(id);
		$("#formIdenMenu").val('update');
	}
	
	function setInformation(id)
	{
		var res="";
		var Obj = new Object();
			Obj.type = "POST";
			Obj.url = baseURL+'Menus/menuInformation/'+id;
			Obj.data = "JSON";
		 res = Information(Obj);
		$('#menuName').val(res['menuName']);
		$('#menuIcon').val(res['menuIcon']);
		$('#menuOrder').val(res['menuOrder']);
		$("#menuStatus option[value=" + res['menuStatus']+ "").prop('selected', true);
		$("#menuSub option[value=" + res['isSub']+ "").prop('selected', true);
	}