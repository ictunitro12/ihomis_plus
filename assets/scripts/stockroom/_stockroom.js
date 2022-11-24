
function  stocklist()
{
	var stockList = $('#stockList').DataTable({
		"ajax" : baseURL+"Stockroom/stocklist",
		"aLengthMenu": [[10,15, 20, -1], [10,15,20,"All"]],
		"processing":true,
		"info":false,
		"lengthChange":false,
		"serverside":true,
		"rowsGroup":[3,4],
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		"destroy":true,
		"columns" : [ 
			{ data : "wardcode" },
			{ data : "rmintkey" },
			{ data : "bdintkey" },
			{ data : "wardname" },
			{ data : "rmname" },
			{ data : "bdname" }
			],
			columnDefs: [
			{
				targets: [0,1,2],
				visible:false
			},
			{
				targets: [3,4],
				className: 'align-middle'
			},
			{
				targets: [3,4],
				className: 'text-center'
			}]

    });
	stockList.on("click",'tr',function(e){
		
	});
}

