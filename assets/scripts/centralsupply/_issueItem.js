function doctorOrder(enccode)
{
	var ordertable =  $('#supplyIssue').DataTable({
		"ajax" : {
			"url":baseURL+"Central_supply/getSupplyIssue",
			"type" : "POST",
			"data":{enccode:enccode}
		},	
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"rowsGroup":[2,4],
		"select":{
			select: true,
			style: 'multi',
			selector: 'td:not(:nth-child(4))',
			className:'bg-success text-white selectedOrder'},
		"serverside":true, 
		"processing":true,
		"destroy":true,
		"searching":true,
		"paging":true,
		"autoWidth":true,
		"columns" : [
		{data:"dodate",
			render: function(data, type, row,meta)
			{							
				return data;
			}
		},//0
		{	data:"issuedte",
			render: function(data, type, row,meta)
			{	
				if(data ==''){				
					return "<input type='datetime-local' class='form-control form-control-sm trwidth' step=1  name='issueDte' readonly id='issueDte"+meta.row+"' placeholder='mm/dd/yyyy'>";
				}else{
					return "<input type='datetime-local' class='form-control form-control-sm trwidth' step=1 value='"+data+"' name='issueDte' readonly id='issueDte"+meta.row+"' placeholder='mm/dd/yyyy'>";
				}
			}
		},//1
		{data:"pcchrgcod",
			render: function(data, type, row,meta)
			{							
				if(data == null){
					return  "<div class='text-danger text-center'>No chargeslip!</div>";
				}else{
					return "<button type='button' data-chargeslip="+data+" class='btn btn-link' name =''>"+data+"</button>";
				}
			}
		},//2
		{
			data:"lotno",
			render: function(data, type, row,meta)
			{			
				if(data ==null){
					return "<input type='text'  class='form-control form-control-sm lotno' autocomplete='off'  name='lot_no'  data-row='"+meta.row+"' data-cl2comb='"+row.cl2comb+"' id='lot_no"+meta.row+"' placeholder='Item no'>";
				}else{
					return "<input type='text'  class='form-control form-control-sm lotno' autocomplete='off'  name='lot_no'  data-row='"+meta.row+"' data-cl2comb='"+row.cl2comb+"' id='lot_no"+meta.row+"' placeholder='Item no'>";
				}			
			}
		},//3
		{ data:null,
			render: function(data, type, row,meta)
			{
				return "<span >"+ row.description + "</span>";
			}
		},//4
		{
			data:"dopriority",
			render: function(data, type, row,meta)
			{
				return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-danger text-white">Unserved</div>'));
			}
		},//5
		{
			data:"qtybal",
			render: function(data, type, row,meta)
			{	 
				return "<input type='number' min=1 class='form-control form-control-sm' readonly name='qtyorder' id='qtyorder"+meta.row+"' value='"+data+"' placeholder='0'>";		
			}
		},//6
		{
			data:"qtyissued",
			render: function(data, type, row,meta)
			{							                            
				if(row.estatus=='S'){
					return "<input type='number' min=1 class='form-control form-control-sm qtyissue'  name='qtyissue' readonly value='"+data+"'  id='qtyissue' placeholder='0'>";
				}else{
					return "<input type='number' min=1 class='form-control form-control-sm qtyissue'  name='qtyissue' readonly id='qtyissue' placeholder='0'>";
				}
			
			}
		},//7
		{
			data:"pchrgup",
			render: function(data, type, row,meta)
			{							
				if(data ==null){
					return 0.00;
				}else{
					return data;
				}
			}
		},//8
		{
			data:"pcchrgamt",
			render: function(data,type,row,meta)
			{
				if(data ==null){
					return 0.00;
				}else{
					return data;
				}
			}
		},//9
		{
			data:null,
			render: function(data,type,row,meta)
			{
				return 'cl2comb';
			}
		},//12
		{
			data:null,
			render: function(data,type,row,meta)
			{
				return 'hclass2sub';
			}
		},//12
		{
			data:null,
			render: function(data,type,row,meta)
			{
				return 'pricedate';
			}
		},//13
		{data:'docointkey'},//14
		{data:'enccode'},//15
		{data:'hpercode'},//16
		{
			data:null,
			render: function(data,type,row,meta)
			{
				return 'unitcode';
			}
		},//17
		
					],
					"columnDefs":[	
					{ 
						"targets": ["_all"] ,"className":"align-middle"
				  	},
					 { 
						"targets": [2] ,"className":"trwidth"
				  	},

				   { 
					   "targets": [16,15,14,13,12,11,10,2] ,visible:false
				   }
					],

					"rowCallback": function ( row, data, start, end, display ) {
					
						if(data['estatus'] ==='S')
						{
							$('td', row).prop('disabled',true);
			
							$($("#drugMedsIssue").DataTable().cell(row, 3).node()).find('input').prop('disabled',true);
						}
					},
					"footerCallback": function ( row, data, start, end, display ) {
						var api = this.api(), data;
			 
						// Remove the formatting to get integer data for summation
						var intVal = function ( i ) {
							return typeof i === 'string' ?
								i.replace(/[\$,]/g, '')*1 :
								typeof i === 'number' ?
									i : 0;
						};
					
						// Total over all pages
						total = api
							.column(9)
							.data()
							.reduce( function (a, b) {
								return intVal(a) + intVal(b);
							}, 0 );
			 
						// Total over this page
						pageTotal = api
							.column( 9, { page: 'current'} )
							.data()
							.reduce( function (a, b) {
								return intVal(a) + intVal(b);
							}, 0 );
				
						// Update footer
						$( api.column(9).footer() ).html(
							formatNumber(total.toFixed(2,0))
						);
						
						}
					 });  		
					 
	ordertable.rows( function(idx, data, node) { 
		return data.tagged == 1; 
	 });

	var idx = 0;
	$("#supplyIssue ").on('click','.lotno',function(){
	var cl2comb=$(this).data('cl2comb');
    var idx=$(this).data('row');

	var lotlist= $('#lotnotbl').DataTable({
		"ajax" : baseURL+"Central_supply/getLotno/"+cl2comb,	
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"scrollY":"300px",
		"scrollX":true,
		"scrollCollapse": true,
		"serverside":true, 
		"processing":true,
		"destroy":true,
		"searching":true,
		"paging":true,
		"columns" : [
						{data:"lotno"},//0
						{data:"description"},//1
						{data:"cl2retprc"//2
	},
						{
							data:"stockbal"
						},//3
						{data:"cl2comb"},//4
						{data:"hclass2sub"},//5
						{
							data:"expiry",
							
						},//7
						{data:"chrgdesc"},//8
						{
							data:"cl2dteas",
							render: function(data, type, row,meta)
							{							                             
								return formatDatetime(data);
							}
						
						},//9
					],
					"columnDefs": 
					[
						{
							visible:false,
							targets:[4,5]
						},
						{
							targets: ["_all"],
							className: 'text-center align-middle'
						}
					]
	});
	
	$("#suppIssueModal").modal({backdrop:'static', show:true,draggable:true});

	$("#lotnotbl").on('click','tbody>tr',function(){
		$(this).toggleClass("bg-success text-white selected");
		var orderTables = $("#supplyIssue").DataTable();
		var data = 	$("#lotnotbl").DataTable().row('.selected').data();
		if(data != undefined){
				$(orderTables.cell(idx, 1).node()).find('input').prop('readonly',false);
				$(orderTables.cell(idx, 1).node()).find('input').val(getTimeLocale());
				$(orderTables.cell(idx, 3).node()).find('input').val(data.lotno);
				$(orderTables.cell(idx, 10).node()).text(data.cl2comb);
				$(orderTables.cell(idx, 11).node()).text(data.hclass2sub);
				$(orderTables.cell(idx, 12).node()).text(data.cl2dteas);
				$(orderTables.cell(idx, 16).node()).text(data.uomcode);
				var orderQty= $(orderTables.cell(idx, 6).node()).find('input').val();
				$(orderTables.cell(idx,8).node()).text(data.cl2retprc);
				$(orderTables.cell(idx,7).node()).find('input').val(orderQty);
				$(orderTables.cell(idx,7).node()).find('input').prop('readonly',false);
			$("#suppIssueModal").modal('hide');
		}
	});

	ordertable.on('change', '.qtyissue', function () {
		var row=$(this).closest("tr"); 
		var orderTable = $("#supplyIssue").DataTable();
		var order=$(orderTable.cell(row, 6).node()).find('input').val();
		var qtyissue=$(orderTable.cell(row, 7).node()).find('input').val();
		var price=$(orderTable.cell(row, 8).node()).text();
		var total =  qtyissue * price;
	 
		if(order < qtyissue){
			total =order *price;
			 $(orderTable.cell(row, 7).node()).find('input').val(order);	
			 $(orderTable.cell(row, 9).node()).text(total.toFixed(2));
			   toastr.error('Issued quantity exceed!','Warning!');
		}else if (order > qtyissue){	
			$(orderTable.cell(row, 9).node()).text(total.toFixed(2));
		}

		var intVal = function (i) {
			return typeof i === 'string' ?
			  i.replace(/[\$,]/g, '') * 1 :
			typeof i === 'number' ?
			  i : 0;
		  };
		  
		  var total = 0;
		  orderTable.cells(null, 9, {
			page: 'all'
		  }).nodes()
		  .each(function(n) {
			total += intVal($(n).text());
		  });

		  $( orderTable.column(9).footer()).html(
			formatNumber(total.toFixed(2,0))
			);
	 
		 
		});
});
	

$("#supplyIssue tbody").on('click','tr',function(){
	$(this).toggleClass("bg-success text-white selectedOrder");
	var selectedData= $(this).hasClass('selectedOrder');
		if(selectedData==true ){
			$("button[name='cancelOrder']").prop('disabled',false);
			$("button[name='generateChargeslip']").prop('disabled',false);
		}else{
			$("button[name='cancelOrder']").prop('disabled',true);
			$("button[name='generateChargeslip']").prop('disabled',true);
		}
 });	
}

