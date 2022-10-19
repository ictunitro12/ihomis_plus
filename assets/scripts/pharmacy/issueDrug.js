
	 $(function(){	
		initPatientTransaction();
	});

	function initPatientTransaction()
	{
		if(($.session.get('hpercode') !== undefined)  && $.session.get('enccode') !== undefined) {
			PatientData($.session.get('hpercode'));
	
			$("#container").load(baseURL+"Pharmacy/viewissueDrug",function(){
				doctorOrder($.session.get('enccode'));
			}); 
			$("#transList").load(baseURL+"Pharmacy/viewtransaction",function(){
				chargeslips($.session.get('enccode'));
			});
		}else{
			$("#PatSearch").modal('show');
			$("#PatientImage").prop('src', 'assets/img/avatars/none.png');
		}
	}
	
	function doctorOrder(enccode)
{
	var ordertable =  $('#drugMedsIssue').DataTable({
		"ajax" : baseURL+"Pharmacy/getDrugIssue/"+ URLencode(enccode),	
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"scrollY":"300px",
		"rowsGroup":[2],
		"select":{
			select: true,
			style: 'multi',
			selector: 'td:not(:nth-child(4))',
			className:'bg-success text-white selectedOrder'},
		"scrollX":true,
		"scrollCollapse": true,
		"serverside":true, 
		"processing":true,
		"destroy":true,
		"searching":true,
		"paging":true,
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
					return "<input type='datetime-local' class='form-control form-control-sm form-control-square' step=1  name='issueDte' readonly id='issueDte"+meta.row+"' placeholder='mm/dd/yyyy'>";
				}else{
					return "<input type='datetime-local' class='form-control form-control-sm form-control-square' step=1 value='"+data+"' name='issueDte' readonly id='issueDte"+meta.row+"' placeholder='mm/dd/yyyy'>";
				}
			}
		},//1
		{data:"pcchrgcod",
			render: function(data, type, row,meta)
			{							
				if(data == null){
					return  "<div class='text-danger text-center'>No chargeslip!</div>";
				}else{
					return "<button type='button'  class='btn btn-link' name ='chargeslipPDF'><span>"+data+"</span></button>";
				}
			}
		},//2
		{
			data:"lotno",
			render: function(data, type, row,meta)
			{			
				if(data ==null){
					return "<input type='text' readonly class='form-control form-control-sm lotno' autocomplete='off'  name='lot_no'  data-row='"+meta.row+"' data-dmdcomb='"+row.dmdcomb+"' id='lot_no"+meta.row+"' placeholder='Lotno'>";
				}else{
					return "<input type='text' readonly class='form-control form-control-sm lotno' autocomplete='off'  name='lot_no' value='"+data+"'  data-row='"+meta.row+"' data-dmdcomb='"+row.dmdcomb+"' id='lot_no"+meta.row+"' placeholder='Lotno'>";
				}			
			}
		},//3
		{ data:null,
			render: function(data, type, row,meta)
			{
				return "<span >"+ row.gendesc1 + "," + row.dmdnost2 + row.stredesc1+ "," + row.formdesc1 + "</span>";
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
			data:"pchrgqty",
			render: function(data, type, row,meta)
			{		
				return "<input type='number' min=1 class='form-control form-control-sm' readonly name='qtyorder' id='qtyorder"+meta.row+"' value='"+data+"' placeholder='0'>";		
			}
		},//6
		{
			data:"qtyissued",
			render: function(data, type, row,meta)
			{							                            
				if(data ==null){
					return "<input type='number' min=1 class='form-control form-control-sm qtyissue'  name='qtyissue' readonly id='qtyissue' placeholder='0'>";
				}else{
					return "<input type='number' min=1 value='"+data+"' class='form-control form-control-sm qtyissue'  name='qtyissue' readonly id='qtyissue' placeholder='0'>";
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
				return 'dmdcomb';
			}
		},//10
		{
			data:null,
			render: function(data,type,row,meta)
			{
				return 'dmdctr';
			}
		},//11
		{
			data:null,
			render: function(data,type,row,meta)
			{
				return 'dmdsub';
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
					"columnDefs": 
					[	{ 
						"targets": ["_all"] ,"className":"align-middle"
				   },

				   { 
					   "targets": [17,16,15,14,13,12,11,10] ,visible:false
				   }
					],

					"rowCallback": function ( row, data, start, end, display ) {
						if(data['pcchrgcod'] !=null)
						{
							$('td', row).prop('disabled',true);
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
	ordertable.on('click','.lotno',function(){
		
	var dmdcomb=$(this).data('dmdcomb');
	 idx=$(this).data('row');
	 $(ordertable.row(idx).nodes()).addClass('bg-success text-white selectedOrder');
	 $("button[name='generateChargeslip']").prop('disabled',false);
	var lotlist= $('#lotnotbl').DataTable({
		"ajax" : baseURL+"Pharmacy/getLotno/"+dmdcomb,	
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
						
						{data:"dmselprice"},//2
						{data:"stockbal"},//3
						{data:"dmdcomb"},//4
						{data:"dmdctr"},//5
						{data:"dmhdrsub"},//6
						{
							data:"expiry",
							render: function(data, type, row,meta)
							{							                             
								return formatDate(data);
							}
						},//7
						{data:"chrgdesc"},//8
						{
							data:"dmdprdte",
							render: function(data, type, row,meta)
							{							                             
								return formatDatetime(data);
							}
						
						}//9
					],
					"columnDefs": 
					[
						{"visible": false, "targets": [4,5,6]},
						{
							targets: ["_all"],
							className: 'text-center align-middle'
						}
					]
	});
	
	$("#drugIssueModal").modal({backdrop:'static', show:true,draggable:true});

	$("#lotnotbl").on('click','tbody>tr',function(){
		$(this).toggleClass("bg-success text-white selected");
		var orderTable = $("#drugMedsIssue").DataTable();
		var data = 	$("#lotnotbl").DataTable().row('.selected').data();
		
		if(data != undefined){
				$(orderTable.cell(idx, 1).node()).find('input').prop('readonly',false);
				$(orderTable.cell(idx, 1).node()).find('input').val(getTimeLocale());
				$(orderTable.cell(idx, 3).node()).find('input').val(data.lotno);
				$(orderTable.cell(idx, 10).node()).text(data.dmdcomb);
				$(orderTable.cell(idx, 11).node()).text(data.dmdctr);
				$(orderTable.cell(idx, 12).node()).text(data.dmhdrsub);
				$(orderTable.cell(idx, 13).node()).text(data.dmdprdte);
				$(orderTable.cell(idx,8).node()).text(data.dmduprice);
				$(orderTable.cell(idx,17).node()).text(data.unitcode);
				var orderQty= $(orderTable.cell(idx, 6).node()).find('input').val();
				$(orderTable.cell(idx,7).node()).find('input').prop('readonly',false);
			$("#drugIssueModal").modal('hide');
		}
	});

	ordertable.on('change keypress', '.qtyissue', function () {
		var row=$(this).closest("tr"); 
		var orderTable = $("#drugMedsIssue").DataTable();
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
	

$("#drugMedsIssue").on('click','tr',function(){
	var selectedData= $(this).hasClass('selectedOrder');
	if(selectedData==false){
		$("button[name='generateChargeslip']").prop('disabled',false);
	}else{
		$("button[name='generateChargeslip']").prop('disabled',true);
	}
 });
}





