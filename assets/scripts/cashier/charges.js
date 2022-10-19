$(function(){
	
	var data = new Object();
	data.search = false;
	data.paging = true;	
	data.info = false;
	data.rowsGroup = false;
	data.orderable = false;
	data.id = "chargeTbl";
	data.link = baseURL +"Cashier/charges";
	data.type = "POST";
	data.columns=[
	{data:"pcchrgdte"},
	{data:"pcchrgcod"},
	{data:"name"},
	{data:"total"},
	{ 
	render: function(data, type, row){
	return "<div class='btn-group btn-sm'>"+
		"<button type='button' class='btn btn-outline-success  btn-md  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>"+
			"<span class='caret'></span>"+
			"<span class='sr-only'>Toggle Dropdown</span>"+
		"</button>"+
	"<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>"+
		"<a href='javascript:void(0);' class='dropdown-item' id='btnProcess' data-id='"+row.pcchrgcod+"'><i class='fa fa-thumbs-up'></i>&nbsp Process</a>"+
		"<a href='javascript:void(0);' class='dropdown-item' id='btnDiscard' data-id='"+row.pcchrgcod+"'><i class='fa fa-refresh'></i>&nbsp Discard</a>"+
	"</div>"+
		"<button type='button'  id ='btnReceipt' class='btn btn-outline-success  btn-md' ><i class='fa fa-file-pdf-o fa-md'></i></button>"+
	"</div>";
				}	
			}];
		data.coldef  = [
		{
			targets :['_all'],
			className:"align-middle"
		}
		];
	var chargesTable = Datatable(data);
	chargesTable.on('click',"#btnProcess",function(){
	var slipno = $(this).data('id');
		$("#ModalPitem_modal").modal('show');
	});
	
	});

