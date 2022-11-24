	function initPatientTransaction(hpercode,enccode)
	{
		if($.session.get("hpercode")!== undefined  && $.session.get("enccode") !== undefined) {
				PatientData($.session.get("hpercode"));
				CaseInformation($.session.get("enccode"));
		}else{
			$("#container").load(baseURL+"Pharmacy/viewissueDrug"); 
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
			data.id="drugsAndMeds_tbl";
			data.link=baseURL+"Pharmacy/orderTransactions";
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
				{data:"lotno",
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
						}else if(row.qtyissued == 0 ){
							return "<div class='text-danger text-center'>"+data+"[Returned]</div>";
						}else{
							return "<button type='button' data-chargeslip="+data+" class='btn btn-link' id ='chargeslipPDF'>"+data+"</button>";
						}
					}
				},//2
			
				{ data:null,
					render: function(data, type, row){
					return row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + ", " + row.rtedesc1;
				}},
				{ data : "qtyissued" },
				{ data : "qtyreturned"},
				{ data : "qtybal" },
				{data:"ordering_doctor"},//2
				{ 
					data:null,
					render: function(data, type, row){
					return (row.ordcon == 'NEWOR' ? '<div class="p-2 bg-success text-white flex-fill">New</div>' : (row.estatus == 'CANOR' ? '<div class="p-2 bg-warning text-white">Cancelled</div>' : '<div class="p-2 bg-secondary text-white">Unserved</div>'));
					}
				},
				{ 
					data:null,
					render: function(data, type, row){
					return (row.estatus == 'S' ? '<div class="p-2 bg-success text-white flex-fill">Served</div>' : (row.estatus == 'P' ? '<div class="p-2 bg-warning text-white">Partial</div>' : '<div class="p-2 bg-secondary text-white">Unserved</div>'));
					}
				},
				{ 
					data:null,
					render: function(data, type, row){
					return (row.dopriority == 'ROUTIN' ? '<div class="p-2 bg-primary text-white flex-fill">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="p-2 bg-danger text-white">URGENT!</div>' : '<div class="p-1 bg-secondary text-white">NONE</div>'));
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
		pharmData = Datatable(data);
		//Chargeslip
		pharmData.on('click',"#chargeslipPDF",function(){
		var code=$(this).data('chargeslip');
		var hpercode=$.session.get('hpercode');
		var src =baseURL+'Pharmacy/pharmchrgslip/'+code+'/'+hpercode;
		var x = document.getElementById("chargeslip").src = src;
		$("#chargesPDF").attr("src", src);
		$("#chrgno").text(code);
		$("#pharmChargeSlip").modal({backdrop:'static',show:true});
	});

	}


