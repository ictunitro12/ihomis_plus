/* GET DOCTORS ORDER */
function doctors_order()
{
		var  data = new Object();
		data.id="supplyDocord_tbl";
		data.link=baseURL+"Central_Supply/doctors_order";
		data.type="POST";
		data.searching = true;
		data.info=true;
		data.paging=true;
		data.rowsGroup=[0,1,2,11];
		data.columns = [
			{ data : "dodate" },//0
			{ data : "pcchrgcod" }, //1
			{ data : "name" }, //2
			{ 
				render: function(data, type, row)
				{
					return "<small>"+ row.description + "</small>";
				}
			},//3
			{ data : "qtybal",
				render: function(data, type, row)
				{
					return parseInt(row.qtyissued) + parseInt(data);
				}
			},//3
			{ data : "pchrgup" },//4
			{ 
				render: function(data, type, row){
					var tot = row.pchrgqty * row.pchrgup;
					return tot.toFixed(2);
				}
			},//5
			{ data : "qtyissued" },//6
			{ data : "qtybal" },//7
			{ 
				render: function(data, type, row)
				{
					return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-secondary text-white">Unserved</div>'));
				}
			},//8
			{ 
				render: function(data, type, row)
				{
					return (row.dopriority == 'ROUTIN' ? '<div class="p-1 bg-primary text-white">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="p-1 bg-danger text-white">URGENT!</div>' : '<div class="p-1 bg-secondary text-white">NONE</div>'));
				}
			},//9
			{ 
				data : "enccode" ,
				render: function(data, type, row)
				{
					return "<button type='button'  id = 'btnGoto' data-hpercode = "+row.hpercode+" data-enccode = "+row.enccode+" class='btn btn-outline-success btn-block  btn-sm'><i class='fa fa-arrow-right'></i></button>";
				}//10	
			}];
			data.coldef= [
				{
					targets: [0,1,2,11,4,5,6,7,8,9],
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
					targets:0, 
					type:"date"
				},
				
			];
	 Datatable(data);
				//Issue
	$("#supplyDocord_tbl").on("click","#btnGoto",function(e){
		var hpercode=$(this).data('hpercode');
		var enccode=$(this).data('enccode');
		window.location.href =baseURL+'Central_Supply/Transactions';
		$.session.clear();
		$.session.set("hpercode",hpercode);
		$.session.set("enccode",enccode);
	});

	$("#supplyDocord_tbl").on("click",'#btnCheck',function(e){
		var name=$(this).data('name');
		var docointkey=$(this).data('docointkey');
		var hpercode=$(this).data('hpercode');
		var status=$(this).data('stat');
		var enccode=$(this).data('enccode');
		var code=$(this).data('chrgcode');
		loadPatient(hpercode,enccode,code);
		getPatientData(hpercode);
		getCaseInfo(enccode);
		$("#modalSupIssue").modal('show');
		$("#enccode").val(enccode);
		$("#percode").val(hpercode);
		$("#modalSupIssue").val($.trim(code));
		issuTable(enccode);
		});
	}
	
				
	

	function issuTable(enccode)
	{
	var issueTable= $('#supIssue').DataTable({
		"ajax" : baseURL+"Central_supply/getSupplyIssue/"+URLencode(enccode),
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"serverside":true,
		"processing":true,
		"destroy":true,
		"columns" : [
						{
							render: function(data, type, row,meta)
							{							
								return "<input type='number' readonly class='form-control form-control-sm'  name='row[]' id='row"+meta.row+"' value="+meta.row+">";
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
									   "<input type='text' class='form-control form-control-sm' readonly name='lot_no[]' id='lot_no"+meta.row+"' placeholder='Lotno'>"+
									   "<span class='btn btn-sm' id='btnLot' data-meta='"+meta.row+"' data-cl2comb='"+row.cl2comb+"'><i class='fa fa-search'></i></span></div>";
							}
						},//3
						{
							render: function(data, type, row,meta)
							{
								return "<small>"+ row.description+ "</small>";
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
							data:"pchrgqty",
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
						},//9
						{
							data : "enccode",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='enccode[]' value ='"+data+"'id='enccode"+meta.row+"' placeholder='0.00'>";
							}
						},//10
						{
							data : "hpercode",
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='hpercode[]' value ='"+data+"'id='hpercode"+meta.row+"' placeholder='0.00'>";
							}
						},//11
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='cl2comb[]' id='cl2comb"+meta.row+"'>";
							}
						},//12
						{
							
							render: function(data,type,row,meta)
							{
								return "<input type='text' min=1 class='form-control form-control-sm' readonly name='chrgcode[]' id='dmhdrsub"+meta.row+"'>";
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
							"visible": false, "targets": [10,11,12,13,14] 
						},
						
                    ],
			
    });

	var idx = 0;

	$('#supIssue tbody').on('change', '#qtyissue', function () {
	var row=$(this).closest("tr"); 
	 var qtyissue=$(issueTable.cell(row, 7).node()).find('input').val();
	 var price=$(issueTable.cell(row, 8).node()).find('input').val();
		var total =  qtyissue * price;
		$(issueTable.cell(row, 9).node()).find('input').val(total.toFixed(2));
	});

		$("#supIssue tbody").on("click","#btnLot",function(){
			var code = URLencode($(this).data('cl2comb'));
			 
		  $("#supIssueModal").modal({backdrop:'static', show:true,draggable:true});
			
			var logList= $('#lotno').DataTable({
				"ajax" : baseURL+"Central_Supply/getLotno/"+code,
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
								{data:"cl2retprc"},//2
								{data:"stockbal"},//3
								{data:"cl2comb"},//4
								{data:"cl1comb"},//5
								{data:"chrgcode"},//6
							],
							"columnDefs": 
							[
								{"visible": false, "targets": [4,5,6]}
							]
			});
			
		});

		$('#lotno').on('click','tbody>tr',function(){
			var currentRow=$(this).closest("tr"); 
			var data = $('#lotno').DataTable().row(currentRow).data();
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
			$(issueTable.cell(idx, 8).node()).find('input').val(data.cl2retprc);
			var totalAmount= data.cl2retprc *  order;
			$(issueTable.cell(idx, 9).node()).find('input').val(totalAmount.toFixed(2));
			$(issueTable.cell(idx, 14).node()).find('input').val(data.dmdctr);
			$(issueTable.cell(idx, 13).node()).find('input').val(data.dmdcomb);
			$(issueTable.cell(idx, 15).node()).find('input').val(data.dmhdrsub);
			$("#supIssueModal").modal('hide');
		});
		
		

		
		
		
		
$('#frmIssueDrug').submit('click',function(){
var formData = new FormData(this);
var row = formData.getAll("row[]");
for(var i = 0; i <row.length; i++)
{
	var pharmchrgSlip = $("#pharmchrgSlip").val();
	var item = $(issueTable.cell(row[i], 4).node()).text();
	var issueDate = $(issueTable.cell(row[i], 2).node()).find('input').val();
	var order = $(issueTable.cell(row[i], 6).node()).find('input').val();
	var qtyissue = $(issueTable.cell(row[i], 7).node()).find('input').val();
	var unit_price = $(issueTable.cell(row[i], 8).node()).find('input').val();
	var total = $(issueTable.cell(row[i], 9).node()).find('input').val();
	var lotno = $(issueTable.cell(row[i], 3).node()).find('input').val();
	var doco = $(issueTable.cell(row[i], 10).node()).find('input').val();
	var enccode = $(issueTable.cell(row[i], 11).node()).find('input').val();
	var hpercode = $(issueTable.cell(row[i], 12).node()).find('input').val();
	var dmdcomb = $(issueTable.cell(row[i], 13).node()).find('input').val();
	var dmdctr = $(issueTable.cell(row[i], 14).node()).find('input').val();
	var dmhdrsub = $(issueTable.cell(row[i], 15).node()).find('input').val();
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
			'&qtyissue='+qtyissue+
			'&order='+order+
			'&total='+total+
			'&row='+row.length+
			'&unit_price='+unit_price+
			'&lotno='+lotno;
		var url = baseURL+"Pharmacy/process_issuance";
			$.ajax({
			type:'POST',
			data:dataString,
			dataType:'JSON',
			url:url,
			success:function(data) {
			issuTable(enccode);
			toastr.info(qtyissue.concat(" ",item," issued"),'Issued!')
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
	
	
	function issuedTable(enccode,code)
	{
	var issuedTable= $('#drugMedsIssue').DataTable({
		"ajax" : baseURL+"Pharmacy/getSupIssue/"+URLencode(enccode)+"/"+URLencode(code),
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"serverside":true,
		"processing":true,
		"destroy":true,
		"columns" : [
					{
						data : "docointkey" ,
						render: function(data, type, row)
						{
				
							return "<input type='hidden' name ='dmSelect' value='"+data+"' id='dmSelect' class='form-control form-control-sm'>";
						}
					},
					{
						data : "dmdcomb"
						
					},
					{
						data : "dmdcomb" ,
						render: function(data,type,row ,meta)
						{
							return "<select  name ='dmdDispLotno[]"+meta.row+"_lot'  data-id='dmdDispLotno"+meta.row+"'  id='dmdDispLotno"+meta.row+"'  class='form-control form-control-sm code'></select>";
						}
					},	
					
					{ 
						render: function(data, type, row,meta)
						{
							return "<small >"+row.description+"</small>";
						}
					},
					{
						render: function(data, type, row,meta)
						{ 
							return "<input type='number' name ='dmIssue[]' id='dmIssue"+meta.row+"' class='form-control form-control-sm'  placeholder='0'>";
						}
					},
					
					{
						data : "pchrgqty" ,
						render: function(data,type, row,meta)
						{
							
							return "<input type='text' readonly name ='dmqtyPrice[]'  id='dmqtyPrice"+meta.row+"' value='"+data+"' class='form-control form-control-sm'>";
						}
					},
				
				
					
					
					{
						data : "qtybal",
						render: function(data,type, row,meta)
						{
							return "<input type='text' readonly name ='dmqtybal[]' id='dmqtybal"+meta.row+"' value='"+data+"' class='form-control form-control-sm' placeholder='0'>";
						}
					},
						{
						data : "qtyissued",
						render: function(data,type, row,meta)
						{
							return "<input type='text' readonly name ='dmqtyIssued[]' id='dmqtyIssued"+meta.row+"' value='"+data+"' class='form-control form-control-sm' placeholder='0'>";
						}
					},
					
					{
						render: function(data, type, row,meta)
						{
							return "<input type='number' name ='dmAvailable[]' id='dmAvailable"+meta.row+"' class='form-control   form-control-sm' readonly placeholder='0'>";
						}
					},
					{
						render: function(data, type, row,meta)
						{
							return "<input type='number' name ='dmuPrice[]' id='dmuPrice"+meta.row+"' class='form-control   form-control-sm' readonly placeholder='0'>";
						}
					},
					{
						render: function(data, type, row,meta)
						{
							return "<input type='number' name ='dmPrice' id='dmPrice' class='form-control   form-control-sm' readonly placeholder='0'>";
						}
					},
					{
						render: function(data, type, row,meta)
						{
							return "<input type='number' name ='dmAmount' id='dmAmount' class='form-control  form-control-sm' readonly placeholder='0'>";
						}
					},	
		],
		
		columnDefs: [
			{
				targets: [0,1],
				visible: false
			}],
			
	 drawCallback: function() {
		var api = this.api();                                           
		api.column(1, {page:'current'} ).data().each( function (dmdComb,j,i) {
			selLot(dmdComb,i);
		});
	}		
			
			
    });		
	}
	
	
	

	
	$("#modalDrugIssue").on('hidden.coreui.modal', function () {
		$('#drugMedsIssue').DataTable().clear();
		$('#drugMedsIssue').DataTable().destroy();
	});		
	
	

	function selLot(id,idx)
	{
		$('[name $="_lot"]').select2({
		placeholder: 'Search',
		 multiple: false,
         minimumInputLength: 1,
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
		var lotno= this.value;
		getLot(lotno,idx);
		});
	}
	
	
	function getLot(lotno,rowIndex)
	{
		$.ajax({
			url:baseURL+"Pharmacy/lotNo/"+lotno,
			type:"POST",
			dataType: "JSON",
			success: function(data,response){
				var table = $("#drugMedsIssue").DataTable();
				console.log(rowIndex);
				$('#dmPrice' + rowIndex, table.rows().nodes()).attr("readonly", false);
			},
			error: function(response,data,error){
		
				toastr.error('Error :'+error);
		}});
	}
	
	function formatDate(value) 
	{
		let date = new Date(value);
		const day = date.toLocaleString('default', { day: '2-digit' });
		const month = date.toLocaleString('default', { month: '2-digit' });
		const year = date.toLocaleString('default', { year: 'numeric' });
		return month + '/' + day + '/' + year;
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
	 
	 function loadPatient(hpercode,enccode,code)
	{

		$('div[id$=_patientInfo]').load(baseURL+"Pharmacy/viewPatientInfo",function(){
					getPatientData(hpercode);
					getCaseInfo(enccode);
				if(code=='' || code == null)
				{
					
					$.get(baseURL+"Central_supply/supChargeSLip/"+code, function (data) {
						$("input[id$=pharmchrgSlip]").val($.trim(data));
						setCookie('pChargeslipno',$.trim(data),'1');
					});
				}
				else{
					$("input[id$=pharmchrgSlip]").val($.trim(code));
				}
				});
	}
	
	
	
