var drugsAndMeds_tbl 
function doctors_order()
{
	var data = new Object();
		data.id="drugsAndMeds_tbl";
		data.link=baseURL+"Pharmacy/doctors_order";
		data.type="POST";
		data.rowsGroup=[1,2,11];
		data.columns=[
			{ data : "dodate" },
			{ data : "pcchrgcod" },
			{ data : "name" },
			{ render: function(data, type, row){
				return "<small>"+ row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + ", " + row.rtedesc1+ "</small>";
			}},
			{ data : "qtybal",
				render: function(data, type, row){
				return parseInt(row.qtyissued) + parseInt(data);
			}

			},
			{ data : "pchrgup" },
			{ render: function(data, type, row){
				var tot = row.pchrgqty * row.pchrgup;
				return tot.toFixed(2);
			}},
			{ data : "qtyissued" },
			{ data : "qtybal" },
			{ render: function(data, type, row){
				return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-secondary text-white">Unserved</div>'));
			}
			},
			{ render: function(data, type, row){
				return (row.dopriority == 'ROUTIN' ? '<div class="p-1 bg-primary text-white">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="p-1 bg-danger text-white">URGENT!</div>' : '<div class="p-1 bg-secondary text-white">NONE</div>'));
			}},
			{ 
				data : "enccode" ,
				render: function(data, type, row){
				return "<button type='button'  id = 'btnGoto' data-hpercode = "+row.hpercode+" data-enccode = "+row.enccode+" class='btn btn-outline-success btn-block  btn-sm'><i class='fa fa-arrow-right'></i></button>";

			}	
			}],
		 data.coldef= [
				{
					targets: [0,1,2,11],
					className: 'align-middle',
					fixedColumns: true	
				},
				{
					targets: [2],
					width: '35%'
				},
				{
					targets: [3],
					width: '26%'
				},

				{
					targets: [4,5,6,7,8,9,10,11],
					className: 'text-center align-middle'
				},
					{
					targets: [11],
					className: 'text-center align-middle'
				},
				{
					targets:0, 
					type:"date"
				}];
	
	
	 pharmData = Datatable(data);
	 $('#frmFilter').on('submit', function(e){
		var form = this;
		$.ajax({
			type : "POST",
			url  : baseURL+"Pharmacy/doctors_order",
			data :new FormData(this),
			processData: false,
			contentType: false,
			success: function(data,response){
				pharmData.ajax.reload();
				var dt = new Date($("#start").val());
				var dt2 = new Date($("#end").val());
				$("#dateFilter").collapse('hide');
			},
			error: function(xhr, desc, err){
				toastr.err(err ,'ERROR!');
			}
		});
		return false;
	});
		//Issue
	pharmData.on("click",'#btnGoto',function(e){
			 var hpercode=$(this).data('hpercode');
			 var enccode=$(this).data('enccode');
			 window.location.href =baseURL+'Pharmacy/Transactions';
			 $.session.clear();
			 $.session.set("hpercode",hpercode);
			 $.session.set("enccode",enccode);
		});
	}





	function loadPatient(hpercode,enccode,code)
	{

		$('div[id$=_patientInfo]').load(baseURL+"Pharmacy/viewPatientInfo",function(){
					getPatientData(hpercode);
					getCaseInfo(enccode);
				if(code=='' || code == null)
				{
					
					$.get(baseURL+"Pharmacy/pharmChargeSLip/"+code, function (data) {
						$("input[id$=pharmchrgSlip]").val($.trim(data));
						setCookie('pChargeslipno',$.trim(data),'1');
					});
				}
				else{
					$("input[id$=pharmchrgSlip]").val($.trim(code));
				}
				});
	}
 
var return_tbl;
	function returnTable(enccode,code)
	{
	 return_tbl= $('#drugMedsReturn').DataTable({
		"ajax" : baseURL+"Pharmacy/getDrugIssued/"+URLencode(enccode)+'/'+URLencode(code),
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"serverside":true,
		"processing":true,
		"responsive": true,
		"destroy":true,
		"searching":false,
		"paging":false,
		"bSort":false,
			"columns" : [
						{
							render: function(data, type, row,meta)
							{							
								return "<input type='number' readonly class='form-control form-control-sm'  name='row[]' id='row"+meta.row+"' value="+meta.row+">";
							}
						},
						{data:"dodate"},
						{
							render: function(data, type, row,meta)
							{							
								return "<input type='datetime-local' class='form-control form-control-sm' step=1  name='returnDate[]' id='returnDate"+meta.row+"' placeholder='mm/dd/yyyy'>";
							}
						},
						{
							data:"lotno",	
							render: function(data, type, row,meta)
							{							
								return "<input type='text' class='form-control form-control-sm' readonly  value="+data+"  name='lot_no[]' id='lot_no"+meta.row+"' placeholder='Lotno'>";
							}
						},
						{
							render: function(data, type, row,meta)
							{
								return "<small>"+ row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + "</small>";
							}
						},
						{
							data:"dopriority",
							render: function(data, type, row,meta)
							{
								return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-info text-white">Unserved</div>'));
							}
						},
						{
							data:"qtyissued",
							render: function(data, type, row,meta)
							{							
								return "<input type='number' min=1 max ='"+data+"' class='form-control form-control-sm' value="+data+" readonly name='qtyissued[]' id='qtyissued"+meta.row+"' value='"+data+"' placeholder='0'>";
							}
						},
						{
							render: function(data, type, row,meta)
							{							                             
								return "<input type='number' min=0 max= "+row.qtyissued+"  class='form-control form-control-sm'  name='qtyreturn[]' id='qtyreturn' placeholder='0'>";
							}
						},
						{
							render: function(data, type, row,meta)
							{							
								return "<input type='text' min=1 class='form-control form-control-sm' readonly  value="+row.pchrgup+" name='unit_price[]' id='unit_price"+meta.row+"' placeholder='Price'>";
							}
						},
						{
							data:"pcchrgamt",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly value="+data+" name='total_amount[]' id='total_amount"+meta.row+"' placeholder='0.00'>";
							}
						},
						{
							data : "docointkey",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly  value="+row.docointkey+"  name='docointkey[]' value ='"+data+"'id='docointkey"+meta.row+"' placeholder='0.00'>";
							}
						},
						{
							data : "enccode",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly value="+row.enccode+" name='enccode[]' value ='"+data+"'id='enccode"+meta.row+"' placeholder='0.00'>";
							}
						},
						{
							data : "hpercode",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly  value="+row.hpercode+" name='hpercode[]' value ='"+data+"'id='hpercode"+meta.row+"' placeholder='0.00'>";
							}
						},
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly  value="+row.dmdcomb+" name='dmdcomb[]' id='dmdcomb"+meta.row+"'>";
							}
						},
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly value="+row.dmdctr+" name='dmdctr[]' id='dmdctr"+meta.row+"'>";
							}
							
						},
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' value="+row.dmhdrsub+" readonly name='dmhdrsub[]' id='dmhdrsub"+meta.row+"'>";
							}
							
						},
						{
							data:"qtyissued",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' value="+data+" readonly name='issue[]' id='issue"+meta.row+"'>";
							}
							
						}
						],
					   "columnDefs": [
					    { 
							"width": "5%", "targets": [0]
						},
                        { 
							"width": "2%", "targets": [2]
						},
						{ 
							"width": "12%", "targets": [3]
						},
						{ 
							"width": "15%", "targets": [4]
						},
						{ 
							"width": "5%", "targets": [5]
						},
						
						{ 
							"visible": false, "targets": [10,11,12,13,14,15,16] 
						},
						
                    ]
    });

		$('#drugMedsReturn tbody').on('change', '#qtyreturn', function () {
			 var row=$(this).closest("tr"); 
			 var qtyissued=$(return_tbl.cell(row, 16).node()).find('input').val();
			 var qtyreturn=$(return_tbl.cell(row, 7).node()).find('input').val();
			 var  total_left=qtyissued - qtyreturn;
			 var left=$(return_tbl.cell(row, 6).node()).find('input').val(total_left); 
			 var price=$(return_tbl.cell(row, 8).node()).find('input').val();
			 var qtyleft=$(return_tbl.cell(row, 6).node()).find('input').val(); 
			 var total =  parseFloat(qtyleft * price);
			$(return_tbl.cell(row, 9).node()).find('input').val(total.toFixed(2)); 
		});
		
	$('#formReturn').submit('click',function(){
		var formData = new FormData(this);
		var row = formData.getAll("row[]");
		for(var i = 0; i <row.length; i++)
		{
			var pharmchrgSlip = $("#pharmchrgSlip").val();
			var item = $(return_tbl.cell(row[i], 4).node()).text();
			var returnDate = $(return_tbl.cell(row[i], 2).node()).find('input').val();
			var left = $(return_tbl.cell(row[i], 6).node()).find('input').val();
			var qtyreturn = $(return_tbl.cell(row[i], 7).node()).find('input').val();
			var unit_price = $(return_tbl.cell(row[i], 8).node()).find('input').val();
			var total = $(return_tbl.cell(row[i], 9).node()).find('input').val();
			var lotno = $(return_tbl.cell(row[i], 3).node()).find('input').val();
			var doco = $(return_tbl.cell(row[i], 10).node()).find('input').val();
			var enccode = $(return_tbl.cell(row[i], 11).node()).find('input').val();
			var hpercode = $(return_tbl.cell(row[i], 12).node()).find('input').val();
			var dmdcomb = $(return_tbl.cell(row[i], 13).node()).find('input').val();
			var dmdctr = $(return_tbl.cell(row[i], 14).node()).find('input').val();
			var dmhdrsub = $(return_tbl.cell(row[i], 15).node()).find('input').val();
		if(returnDate != "" && qtyreturn!="") 
		{
			var dataString = 'docointkey='+doco+
					'&enccode='+enccode+
					'&hpercode='+hpercode+
					'&returnDate='+returnDate+
					'&dmhdrsub='+dmhdrsub+
					'&pharmchrgSlip='+pharmchrgSlip+
					'&dmdcomb='+dmdcomb+
					'&dmdctr='+dmdctr+
					'&qtyreturn='+qtyreturn+
					'&qtyissue='+left+
					'&total='+total+
					'&row='+row.length+
					'&unit_price='+unit_price+
					'&lotno='+lotno;
				var url = baseURL+"Pharmacy/process_return";
					$.ajax({
					type:'POST',
					data:dataString,
					dataType:'JSON',
					url:url,
					success:function(data) {
						returnTable(enccode,pharmchrgSlip);
						toastr.info(qtyreturn.concat(" ",item," Returned"),'Returned!');
					},
					error:function(data){
						console.log(data);
					}
					});
		}else{
			return false;
		}
		}
		return false;
		});

	}

	function formatDate(value) 
	{
		let date = new Date(value);
		const day = date.toLocaleString('default', { day: '2-digit' });
		const month = date.toLocaleString('default', { month: '2-digit' });
		const year = date.toLocaleString('default', { year: 'numeric' });
		return month + '/' + day + '/' + year;
	}
	
	function issuTable(enccode)
	{

		var issueTable= $('#drugMedsIssue').DataTable({
			"ajax" : baseURL+"Pharmacy/getDrugIssue/"+URLencode(enccode),
			"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
			"scrollY":"300px",
			"scrollX":true,
			"scrollCollapse": true,
			"responsive": true,
			"serverside":true,
			"ordering":false,
			"processing":true,
			"destroy":true,
			"info":true,
			"searching":false,
			"paging":false,
			"columns" : [
						{
							render: function(data, type, row,meta)
							{							
								return "<input type='hidden' readonly class='form-control form-control-sm'  name='row[]' id='row"+meta.row+"' value="+meta.row+">";
							}
						},//0
						{data:"dodate"},//1
						{
							render: function(data, type, row,meta)
							{							
								return "<input type='datetime-local' class='form-control form-control-sm' step=1  name='issueDte[]' id='issueDte"+meta.row+"' placeholder='mm/dd/yyyy'>";
							}
						},//2
						{
							render: function(data, type, row,meta)
							{							
								return "<div class=input-group mb-3>"+
									   "<input type='text' class='form-control form-control-sm'  name='lot_no[]' id='lot_no"+meta.row+"' placeholder='Lotno'>"+
									   "<span class='btn btn-sm' id='btnLot' data-meta='"+meta.row+"' data-dmdcomb='"+row.dmdcomb+"'><i class='fa fa-search'></i></span></div>";
							}
						},//3
						{
							render: function(data, type, row,meta)
							{
								return "<small>"+ row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + "</small>";
							}
						},//4
						{
							data:"dopriority",
							render: function(data, type, row,meta)
							{
								return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-info text-white">Unserved</div>'));
							}
						},//5
						{
							data:"qtybal",
							render: function(data, type, row,meta)
							{							
								return "<input type='number' min=1 class='form-control form-control-sm' readonly name='qtyorder[]' id='qtyorder"+meta.row+"' value='"+data+"' placeholder='0'>";
							}
						},//6
						{
							render: function(data, type, row,meta)
							{							                             
								return "<input type='number' min=1 class='form-control form-control-sm'  name='qtyissue[]' id='qtyissue' placeholder='0'>";
							}
						},//7
						{
							render: function(data, type, row,meta)
							{							
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='unit_price[]' id='unit_price"+meta.row+"' placeholder='Price'>";
							}
						},//8
						{
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='total_amount[]' id='total_amount"+meta.row+"' placeholder='0.00'>";
							}
						},//9
						{
							data : "docointkey",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='docointkey[]' value ='"+data+"'id='docointkey"+meta.row+"' placeholder='0.00'>";
							}
						},//10
						{
							data : "enccode",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='enccode[]' value ='"+data+"'id='enccode"+meta.row+"' placeholder='0.00'>";
							}
						},//11
						{
							data : "hpercode",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='hpercode[]' value ='"+data+"'id='hpercode"+meta.row+"' placeholder='0.00'>";
							}
						},//12
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='dmdcomb[]' id='dmdcomb"+meta.row+"'>";
							}
						},//13
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='dmdctr[]' id='dmdctr"+meta.row+"'>";
							}
							
						},//14
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='dmhdrsub[]' id='dmhdrsub"+meta.row+"'>";
							}
							
						},//15
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text'  class='form-control form-control-sm' readonly name='dmdprdte[]' id='dmdprdte"+meta.row+"'>";
							}
							
						}//15
						],
					   "columnDefs": [
					    { 
							"width": "5%", "targets": [0]
						},
                        { 
							"width": "2%", "targets": [2]
						},
						{ 
							"width": "12%", "targets": [3]
						},
						{ 
							"width": "15%", "targets": [4]
						},
						{ 
							"width": "5%", "targets": [5]
						},
						
						{ 
							"visible": false, "targets": [10,11,12,13,14,15,16] 
						},
						
                    ],

		});
		var idx = 0;

	$('#drugMedsIssue tbody').on('change', '#qtyissue', function () {
	var row=$(this).closest("tr"); 
	 var order=$(issueTable.cell(row, 6).node()).find('input').val();
	 var qtyissue=$(issueTable.cell(row, 7).node()).find('input').val();
	 var price=$(issueTable.cell(row, 8).node()).find('input').val();
	 var total =  qtyissue * price;
	if(order < qtyissue)
	{
		 $(issueTable.cell(row, 7).node()).find('input').val(order);	
	  	 toastr.warning('Issue Exceeded!','Warning!');
	}else if (order > qtyissue){	
	
		$(issueTable.cell(row, 9).node()).find('input').val(total.toFixed(2));
	}
	
	
	});

		$("#drugMedsIssue tbody").on("click","#btnLot",function(){
			var code = $(this).data('dmdcomb');
			 idx = $(this).data('meta');
		  $("#drugIssueModal").modal({backdrop:'static', show:true,draggable:true});
			var logList= $('#lotnotbl').DataTable({
				"ajax" : baseURL+"Pharmacy/getLotno/"+code,	
				"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
				"scrollY":"300px",
				"scrollX":true,
				"scrollCollapse": true,
				"serverside":true, 
				"processing":true,
				"destroy":true,
				"searching":false,
				"paging":false,
				"columns" : [
								{data:"lotno"},//0
								{data:"description"},//1
								{data:"dmselprice"},//2
								{data:"stockbal"},//3
								{data:"dmdcomb"},//4
								{data:"dmdctr"},//5
								{data:"dmhdrsub"},//6
								{data:"expiry"},//7
								{data:"chrgdesc"},//8
								{data:"dmdprdte"}//9
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
			
		});

		$('#lotnotbl').on('click','tbody>tr',function(){
			var currentRow=$(this).closest("tr"); 
			var data = $('#lotnotbl').DataTable().row(currentRow).data();
			var order=$(issueTable.cell(idx, 6).node()).find('input').val();
			 if(order > data.stockbal)
			{
				toastr.warning(data.description,"Not enough stock!");
				toastr.warning(data.stockbal.concat(" ","Pcs"),"Stock is only");
				$(issueTable.cell(idx, 7).node()).find('input').val(data.stockbal);
			}else{
				toastr.info(order.concat(" ",data.description),"You posted");
				$(issueTable.cell(idx, 7).node()).find('input').val(order);
			}

			$(issueTable.cell(idx, 2).node()).find('input').val(getTimeLocale());
			$(issueTable.cell(idx, 3).node()).find('input').val(data.lotno);
			$(issueTable.cell(idx, 8).node()).find('input').val(data.dmselprice);
			var totalAmount= data.dmselprice *  order;
			$(issueTable.cell(idx, 9).node()).find('input').val(totalAmount.toFixed(2));
			$(issueTable.cell(idx, 14).node()).find('input').val(data.dmdctr);
			$(issueTable.cell(idx, 13).node()).find('input').val(data.dmdcomb);
			$(issueTable.cell(idx, 15).node()).find('input').val(data.dmhdrsub);
			$(issueTable.cell(idx, 16).node()).find('input').val(data.dmdprdte);
			$("#drugIssueModal").modal('hide');
		});
		
		

		
		
		
		
$('#frmIssueDrug').submit(function(){
var formData = new FormData(this);
var row = formData.getAll("row[]");
for(let i = 0 ; i < row.length; i++)
{
	
	var pharmchrgSlip = $("#pharmchrgSlip").val();
	var action = $("#action").val();
	var item = $(issueTable.cell(row[i], 4).node()).text();
	var issueDate = $(issueTable.cell(row[i], 2).node()).find('input').val();
	var lotno = $(issueTable.cell(row[i], 3).node()).find('input').val();
	var order = $(issueTable.cell(row[i], 6).node()).find('input').val();
	var qtyissue = $(issueTable.cell(row[i], 7).node()).find('input').val();
	var unit_price = $(issueTable.cell(row[i], 8).node()).find('input').val();
	var total = $(issueTable.cell(row[i], 9).node()).find('input').val()
	var doco = $(issueTable.cell(row[i], 10).node()).find('input').val();
	var enccode = $(issueTable.cell(row[i], 11).node()).find('input').val();
	var hpercode = $(issueTable.cell(row[i], 12).node()).find('input').val();
	var dmdcomb = $(issueTable.cell(row[i], 13).node()).find('input').val();
	var dmdctr = $(issueTable.cell(row[i], 14).node()).find('input').val();
	var dmhdrsub = $(issueTable.cell(row[i], 15).node()).find('input').val();
	var dmdprdte = $(issueTable.cell(row[i], 16).node()).find('input').val();
	
if(lotno != "")
{

	var dataString = 'docointkey='+doco+
			'&enccode='+enccode+
			'&hpercode='+hpercode+
			'&issueDte='+issueDate+
			'&dmhdrsub='+dmhdrsub+
			'&pharmchrgSlip='+pharmchrgSlip+
			'&dmdcomb='+dmdcomb+
			'&dmdctr='+dmdctr+
			'&dmdprdte='+dmdprdte+
			'&qtyissue='+qtyissue+
			'&order='+order+
			'&total='+total+
			'&row='+row.length+
			'&unit_price='+unit_price+
			'&action='+action+
			'&lotno='+lotno;
		var url = baseURL+"Pharmacy/process_issuance";
			$.ajax({
			type:'POST',
			data:dataString,
			dataType:'JSON',
			url:url,
			success:function(data) {
				issuTable(enccode);
				toastr.info(qtyissue.concat(" ",item," issued"),'Issued!');
			},
			error:function(data){
				console.log(data);
			}
			});
}
}
return false;
});



	
	}
	
	function issueNo(issue)
	{
		let orderDrug = $("#orderDrug").val();
		if(orderDrug <  issue){
			toastr.warning("Issued Drug Exceed!","Warning");
			 $("#issueDrug").val(orderDrug);
		}else{
			var  price = $("#priceDrug").val();
			var totalAmount=price * issue;
			$("#totalAmount").val(totalAmount.toFixed(2));
		}
	}

	function getBalance(balance,issue)
	{
		var newBal= 0; 
		newBal= balance - issue;
		return  newBal;
	}

	
	function getLot(lotno="null")
	{
		var obj;
		$.ajax({
			url:baseURL+"Pharmacy/lotNo/"+lotno,
			type:"POST",
			dataType: "JSON",
			success: function(data,response){
			obj  = JSON.parse(JSON.stringify(data));
			$("#availDrug").val(obj['stockbal']);
			$("#priceDrug").val(obj['dmselprice']);
			$("#orderFrom").val(obj['dmhdrsub']);
			}
		});
	}
	
	function selLot(id)
	{
		$('[name $="_lot"]').select2({
		placeholder: 'Search',
		 multiple: false,
		allowClear: true,
		theme:'coreui',
		ajax:{	
		url: baseURL+"Pharmacy/getLotno/"+id,
		dataType: "json",
		type:"POST",
		delay: 250,
			data: function(params){	
				return{
					searchLot: params.term
				};
			},
			processResults: function(data){
			var results = [];
				$.each(data, function(index, item){
					results.push({
						id:item.lotno,
						text:item.lotno
					});
				});
				return{
					results: results
				}
			}
		}
		});

		$('[name $="_lot"]').on('change',function(){
			var data = $('[name $="_lot"] option:selected',this);
			var stock = getLot(this.value);
			 $("#issueDrug").prop('readonly',false);
		});
	}
	

	function getPatientData(hpercode,type)
	 {
		var pat = PatientInfo(hpercode);
		$("td[id$=_hpercode]").text(pat['hpercode']);
		$("td[id$=patname]").text(pat['patfirst'].concat(" ",pat['patmiddle'],"." ,pat['patlast']));
		$("td[id$=dob]").text(formatDate(pat['patbdate']));
		$("td[id$=sex]").text(sex(pat['patsex']));
		$("td[id$=age]").text();
		$("td[id$=civilstat]").text(civilstatus(pat['patcstat']));
	 }
	 
	 function getCaseInfo(enccode,type)
	 {
		var pat = caseInfo(enccode);
			$("td[id$=casenum]").text(pat['casenum']);
			$("td[id$=admdate]").text(pat['toecode']);
			$("td[id$=enctr]").text(pat['room']);
			$("td[id$=room]").text(pat['accountno']);
			$("td[id$=accnt]").text(pat['admtxt']);
			$("td[id$=diag]").text(pat['casenum']);
			$("td[id$=admdate]").text(pat['date_entered'].concat(",",pat['time_entered']));
	 }