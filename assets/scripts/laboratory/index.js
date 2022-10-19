$(function(){
	$("#container").load(baseURL+"Laboratory/viewdocord",function(){
		 initDoctor();
	}); 
});

function orderlab()
{	
	var orderTable=$('#order_tbl').DataTable({
	"ajax" : baseURL+"Laboratory/order",
	"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
	"processing":true,
	"serverside":true,
	"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
	"destroy":true,
	"rowsGroup":[1,2,6,8],
	"columns" : [
		{data:"date"},//0
		{
			data:"pcchrgcod",
			render: function(data, type, row)
			{
				if(data == null || data == '')
				{
					return "<div class='text-danger'>No Chargeslip!</div>";	
				}else{
					
					return "<a href='javascript:void(0);' id='chargeslip' data-hpercode="+row.hpercode+" data-pcchrgcod="+row.pcchrgcod+"  data-enccode="+row.enccode+" data-chrgslip="+data+">"+data+"<code>[click here]</code></a>";
				}
			}
		
		},//1
		{data:"patient"},//2
		{data:"procdesc"},//3
		{ render: function(data, type, row)
			{
				return (row.dopriority == 'ROUTIN' ? '<div class="p-1 bg-primary text-white">Routine</div>' : (row.dopriority == 'STAT' ? '<div class="p-1 bg-danger text-white">Urgent!</div>' : '<div class="p-1 bg-secondary text-white">NONE</div>'));
			}
		},//4
		{ render: function(data, type, row)
			{
				return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial!</div>' : '<div class="p-1 bg-secondary text-white">UNSERVED</div>'));
			}
		},//5
		{data:"room",
			render: function(data, type, row)
			{
			 return '<code>'+data+'</code>';
			}
		},//6
		{data:"apprvrmrks"},//7
		{ 
				data:"enccode",
				render: function(data, type, row)
				{
					return "<button type='button'  class='btn btn-outline-success btn-block btn-sm' id='btnGotoTransaction' data-name='"+row.patient+"' data-hpercode='"+row.hpercode+"'  data-enccode='"+row.enccode+"' data-docointkey ='"+row.intkey+"'>Show Order/s <i class='fa fa-arrow-right'></i></button>";
					
				}	
		},
		{data:"proccode"}
		],
	"columnDefs":[
			{
				targets: ["_all"],
				className: 'align-middle'
			},
			{
				targets: [1,2,6],
				className: 'text-center'
			},
			{
				targets: [9],
				visible:false
			}
		]
	});

	orderTable.on('click' ,'#btnGotoTransaction', function(){
		var enccode = $(this).data('enccode');
		var hpercode = $(this).data('hpercode');
		var intkey = $(this).data('docointkey');
		var type = $(this).data('type');
		window.location.href =baseURL+'Laboratory/Transaction/'+btoa(enccode)+'/'+btoa(hpercode);
	});

	orderTable.on('click',"#chargeslip",function(){
		var slipno = $(this).data('pcchrgcod');
		var hpercode = $(this).data('hpercode');
		var enccode = $(this).data('enccode');
		var enctr=encodeURIComponent(encodeURIComponent(enccode));
		var src =baseURL+'Laboratory/printChargeslip/'+slipno+'/'+hpercode+'/'+enctr;
		var x = document.getElementById("chargesPdf").src = src;
		$("#chargesPdf").attr("src", src);
		$("#chargeslip").modal({backdrop:'false',show:true});
	});


}



	
	
	
	

	
	

