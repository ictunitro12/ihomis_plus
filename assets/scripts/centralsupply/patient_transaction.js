

	function initPatientTransaction(hpercode,enccode)
	{
		if( $.session.get("hpercode")!== undefined  && $.session.get("enccode") !== undefined) 
		{
			$("#container").load(baseURL+"Central_Supply/viewIssueitem",function(){
				PatientData($.session.get("hpercode"));
				CaseInformation($.session.get("enccode"));
				orderTransactions($.session.get("enccode"));
				doctorOrder($.session.get("enccode"));	
				returnTable($.session.get("enccode"));		
			});
			$("#transList").load(baseURL+"Central_Supply/viewtransaction",function(){
				chargeslips(enccode);
			});
		}else{
			$("#container").load(baseURL+"Central_Supply/viewIssueitem"); 
			$("#PatSearch").modal('show');
			$("#patientPhoto").prop('src', baseURL+'/assets/img/avatars/none.png');
		}
	}
	
	$("button[name='searchPatient']").on('click', function() {
		$.session.remove('hpercode');
		$.session.remove('enccode');
		$("#PatSearch").modal('show');
	});

	function orderTransactions(enccode)
	{
		var data = new Object();
			data.id="supply_tbl";
			data.link=baseURL+"Central_Supply/orderTransactions";
			data.type="POST";
			data.search=true;
			data.paging=true;
			data.destroy=true;
			data.rowsGroup=[2,5,6];
			data.data=function(d){
			d.enccode = enccode;
			},
			data.columns=[
				{ data : "dodate" },
				{data:"itemcode",
					render: function(data, type, row,meta)
					{							
						if(data == null){
							return  "<div class='text-danger text-center'>No Lot no!</div>";
						}else{
							return data;
						}
					}
				},//2
				{data:"pcchrgcod",
					render: function(data, type, row,meta)
					{							
						if(data == null){
							return  "<div class='text-danger text-center'>No chargeslip!</div>";
						}else{
							return "<button type='button' data-chargeslip="+data+" class='btn btn-link' id ='chargeslipPDF'>"+data+"</button>";
						}
					}
				},//2
			
				{ data:null,
					render: function(data, type, row){
					return row.description;
				}},
				{ data : "qtyissued" },
				{ data : "qtyreturned" },
				{ data : "qtybal" },
				{data:"ordering_doctor"},//2
				{ 
					data:null,
					render: function(data, type, row){
					return (row.ordcon == 'NEWOR' ? '<div class="p-1 bg-success text-white flex-fill">New</div>' : (row.estatus == 'CANOR' ? '<div class="p-1 bg-warning text-white">Cancelled</div>' : '<div class="p-1 bg-secondary text-white">Unserved</div>'));
					}
				},
				{ 
					data:null,
					render: function(data, type, row){
					return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white flex-fill">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-secondary text-white">Unserved</div>'));
					}
				},
				{ 
					data:null,
					render: function(data, type, row){
					return (row.dopriority == 'ROUTIN' ? '<div class="p-1 bg-primary text-white">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="p-1 bg-danger text-white">URGENT!</div>' : '<div class="p-1 bg-secondary text-white">NONE</div>'));
					}
				},
				
			
				],
		data.coldef= [
					{
						targets: [4,5,6],
						className: 'text-center'
					},
					{
						targets:0, 
						type:"date"
					}	
				];
		cssrData = Datatable(data);
		//Chargeslip
		cssrData.on('click',"#chargeslipPDF",function(){
		var code=$(this).data('chargeslip');
		var hpercode=$.session.get('hpercode');
		var src =baseURL+'Central_Supply/pharmchrgslip/'+code+'/'+hpercode;
		var x = document.getElementById("chargeslip").src = src;
		$("#chargesPDF").attr("src", src);
		$("#chrgno").text(code);
		$("#suppChargeSlip").modal({backdrop:'static',show:true});
	});

	}


