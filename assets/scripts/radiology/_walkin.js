var section = "RADIO";
function otcList()
{
	var data = new Object();
		data.id="walkinTbl";
		data.link=baseURL+"Charges/walkinList/"+section;
		data.type="POST";
		data.destroy=true;
		data.paging=true;
		data.info=true;
		data.search=true;
		data.rowsGroup=[2];
		data.order=[[ 0, "desc" ]];
		data.columns=[
			{ data : "ordate",
				render: function(data, type, row)
				{
					return formatDate(data);
				}
			},//0
			{ data : "orno" },//1
			{
				data:"name",
				render: function(data, type, row)
				{
					return  data;
				}
			},//2
			{ data : "amt_paid"},//4
			{ data : "tot_payable"},//3
			{
				data:"wistat",
				render: function(data, type, row)
				{
					switch(data)
					{
						case 'A' : return '<div class="p-1 bg-success text-white"><i class="fa fa-check"></i>&nbsp Active</div>'; break;
						case 'I' : return '<div class="p-1 bg-success text-white"><i class="fa fa-check"></i>&nbsp Inactive</div>'; break;
						default  : return '<div class="text-center text-secondary"><i class="fa fa-exclamation"></i>&nbsp Not paid </div>';
					}
				}
			},
			{ 
				data : "orno" ,
				render: function(data, type, row){
				return "<div class=btn-group  role=group>"+
						"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
						"</button>"+
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>"+
							"<a class='dropdown-item' data-code='"+btoa(data)+"' id='btnEditWalkin' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>"+
						    "<a class='dropdown-item' data-code='"+btoa(data)+"' id='btnDeleteWalkin' href='#'><i class='fa fa-trash'></i> &nbsp Delete</a>"+
						"</div>"+
						 "<button type='button'  id ='btnChargeSlip' data-chrgcode='"+row.pcchrgcod+"'  data-hpercode='"+row.hpercode+"' class='btn btn-outline-success  btn-sm '> <i class='fa fa-print'></i> </button>"+
					  "</div>";
				}
			}];

		data.coldef=[
			{
				targets: [0,1,2],
				className: 'align-middle',
			},
			{
				targets: [3,4],
				className: ' align-middle',
			}

			];
	var walkinData = Datatable(data);
	
	walkinData.on('click','#btnDeleteWalkin',function(){
		var orno = atob($(this).data('code'));
		$("#delorno").val(orno);
		$("#modalDeleteWalkin").modal('show');
	});
	
	walkinData.on('click','#btnChargeSlip',function(){
		
		$("#ModalChargeslip").modal('show');
	});
	}

