 
	function receipt()
	{
		$("#modalReceipt").modal('show');
		 PaymentList($.session.get('Cashierenccode'));
	}
	
	function PaymentList(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "paymentTable";
		data.link = baseURL+"Cashier/PaymentList/"+enctr,
		data.type = "POST";
		data.destroy = true;
		data.paging = true;
		data.info = true;
		data.columns =[
			{data:"transdate"},
			{data:"orno"},
			{data:"pcchrgcod"},
			{data:"amt"},
			{data:"bal"},
			{ 
				data : "orno" ,
				render: function(data, type, row){
				return "<div class='btn-group btn-sm'>"+
					   "<button type='button' class='btn btn-outline-success  btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>"+
					   "<span class='caret'></span>"+
					   "<span class='sr-only'>Toggle Dropdown</span>"+
					   "</button>"+
					   "<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>"+
					   "<a href='javascript:void(0);' class='dropdown-item' id='btnCheck'><i class='fa fa-refresh'></i>&nbsp Refund</a>"+
					   "<a href='javascript:void(0);' class='dropdown-item' id='btnReturn'><i class='fa fa-trash'></i>&nbsp Delete</a>"+
					   "</div>"+
					   "<button type='button'  id ='btnChargeSlip' class='btn btn-outline-success  btn-sm'>Print Receipt</button>"+
					   "</div>";
			}
			}];
		
		 data.coldef= [
				{
					targets: ["_all"],
					className: 'align-middle',
					fixedColumns: true
				}
			];
		
		Datatable(data);
	}