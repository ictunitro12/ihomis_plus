
function csrStock()
{
	var data = new Object();
		data.id="stock_tbl";
		data.link=baseURL+"Central_Supply/csrstk";
		data.type="POST";
		data.rowsGroup=[1];
		data.paging=true;
		data.info=true;
		data.columns=[
			{ data : "cl2comb" },
			{ data : "cl1desc" },
			{ data : "cl2desc" },
			{
				data: "pharmaceutical",
				render: function (data, type, row) {
					switch (data) {
						case 'RXX': return '<small class="text-center text-primary"><i class="fa fa-check"></i>&nbsp Yes</small>'; break;
						case 'OTC': return '<small class="text-center text-info"><i class="fa fa-close"></i> No</small>'; break;
						default: return 'N/A';
					}
				}
			},
			{ data : "stockbal" },
			{ data : "begbal" },
			{
				data: "reorder_level",
				render: function (data, type, row) {
					if(data){
						if(row.stockbal <= data){
							return '<div class="p-auto bg-danger text-center text-white">&nbsp '+data+'(Low)</div>'; 
						}else{
							return '<div class="p-auto bg-success text-center text-white">&nbsp '+data+' </div>'; 
						}
					}else{
						return '<div class="text-center text-danger"> No reorder level </div>';
					}
				}
			},
			{ 
				data : "cl2comb" ,
				render: function(data, type, row){
				return "<div class='btn-group btn-sm'>"+
					   "<button type='button' class='btn btn-outline-success  btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>"+
					   "<i class='fa fa-th-list'></i>" +
					   "<span class='sr-only'>Toggle Dropdown</span>"+
					   "</button>"+
					   "<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
					   "<a href='javascript:void(0);' class='dropdown-item' id='btnTypeAcc'  data-date='"+row.baldteasof+"'  data-cl2comb='"+row.cl2comb+"'><i class='fa fa-thumbs-up'></i>&nbsp Acccount</a>"+
					   "<a href='javascript:void(0);' class='dropdown-item' id='btnStock_Edit' data-cl2comb='"+row.hpercode+"'><i class='fa fa-refresh'></i>&nbsp Edit</a>"+
					   "</div>"+
						"</div>"

			}	
			}];
			
			data.coldef= [
				{
					targets: ["_all"],
					className: 'align-middle'
				}
			];
	 stockData = Datatable(data);

	}


	$('#stock_tbl').on('click', '#btnTypeAcc', function (e) {
		var cl2comb = $(this).data('cl2comb');
		var date = $(this).data('date');
	
		$("#modalItemAccount").modal('show');
		accountItem(cl2comb);
		iteminfo(cl2comb,date);
	});
	
	
	$('#stock_tbl').on('click', '#btnStock_Edit', function (e) {
		var dmdcomb = $(this).data('dmdcomb');
		var dmdctr = $(this).data('dmdctr');
		var dmsub = $(this).data('dmsub');
		var drugname = $(this).data('drugname');
		var formcode = $(this).data('formcode');
		var baldteasof = $(this).data('baldteasof');
	
		$("#drugcomb").val(dmdcomb);
		$("#drugctr").val(dmdctr);
		$("#drug").val(drugname);
		setCharge(dmsub);
		$("#formIdenDrug").val('update');
		$("#baldteasof").val(baldteasof);
		$("#btnSearchDrug").prop('disabled',true);
		$("#modalDrug").modal('show');
	});

	
	function iteminfo(cl2code,date) {
		
		$.ajax({
			type: "POST",
			url: baseURL + "Central_Supply/iteminfo",
			data: {cl2comb: cl2code, date:date},
			success: function (data, response) {
				var obj = $.parseJSON(data);
				$("#code").text(obj['cl2comb']);
				$("#itemname").text(obj['cl2desc']);
				$("#begin").text(obj['begbal']);
				$("#stock").text(obj['stockbal']);
				$("#formcode").text(obj['uomcode']);
				$("#formiden").val('update');
			},
			error: function (xhr, desc, err) {
				toastr.error(err, 'ERROR!');
			}
		});
	}
	

	function itemAccInfo(cl2code,date) {
		
		$.ajax({
			type: "POST",
			url: baseURL + "Central_Supply/itemAccInfo",
			data: {cl2comb: cl2code, date:date},
			success: function (data, response) {
				var obj = $.parseJSON(data);
				console.log(obj);
				$("input[name=itembegin]").val(obj['begbal']);
				$("input[name=itemstock]").val(obj['stockbal']);
				$("input[name=itemuprice]").val(obj['costprc']);
				$("input[name=itemsell]").val(obj['cl2retprc']);
				$("input[name=cl2comb]").val(obj['cl2comb']);
				$("input[name=itemacct]").val(obj['hclass2sub']);
				$("input[name=itemcode]").val(obj['itemcode']);
				$("input[name=itemucode]").val(obj['uomcode']);
				$("input[name=cl2dteas]").val(obj['cl2dteas']);
				$("input[name=itemucode]").val(obj['uomcode']);
				$("input[name=expiry]").val(obj['expiry']);
				$("input[name=remarks]").val(obj['remarks']);
			},
			error: function (xhr, desc, err) {
				toastr.error(err, 'ERROR!');
			}
		});
	}
	
function accountItem(cl2comb) {
	var data = new Object();
	var code= encodeURIComponent(encodeURIComponent(cl2comb));
	data.id = "drugaccTbl";
	data.link = baseURL + "Central_Supply/getItemList/"+code ;
	data.type = "GET";
	data.search = true;
	data.destroy = true;
	data.columns = [
		{ data: "cl2dteas" ,
		render: function (data, type, row) {
			return formatDatetime(data);
		}},
		{ data: "itemcode" },
		{ data: "costprc",
			render: function (data, type, row) {
				return data;
			}
		},
		{	
			data: "cl2retprc",
			render: function (data, type, row) {
				if (data == null) {
					return '<div class="text-danger">No price</div>';
				} else {
					return '<div class="text-success">' + data + '</div>';
				}
			}
		},
		{	
			data: "stockbal",
			render: function (data, type, row) {
				if (row.stockbal == null) {
					return '<div class="text-danger">No Stock</div>';
				} else {
					return  parseInt(data);
				}
			}
		},
		{	
			data: "begbal",
			render: function (data, type, row) {
				if (row.begbal == null) {
					return '<div class="text-danger">No Beginning</div>';
				} else {
					return data;
				}
			}
		},
		{ data: "expiry" },
		{ data: "remarks" },
		{
			data:null,
			render: function (data, type, row) {
				
			if(row.cl2retprc==null){
				return "<button type='button'  id ='btnEditAcct'  data-cl2comb='"+row.cl2comb+"'  data-cl2dteas='"+row.cl2dteas+"' class='btn btn-outline-success  btn-sm ' ><i class='fa fa-edit  fa-sm'></i> Edit </button>";

			}else{
				return "<div class=btn-group role=group>" +
				"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" +
				"<i class='fa fa-th-list'></i>" +
				"</button>" +
				"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
				"<a	 class='dropdown-item'  data-cl2comb='"+row.cl2comb+"'  data-cl2dteas='"+row.cl2dteas+"'  id='btnEditItem'   href='#'>&nbsp Edit</a>" +
				"<a	 class='dropdown-item' data-cl2comb='"+row.cl2comb+"'  data-cl2dteas='"+row.cl2dteas+"' id='btnNewPrice' href='#'>&nbsp New Price</a>" +
				"</div>" +
				"</div>";
			}
		
		}
		}
	];
	data.coldef = [
		{
			targets: ["_all"],
			className: "align-middle"
		},
		{
			targets: [4,5],
			className: "text-center"
		}];

	return Datatable(data);
}

$('#frmItemAccount').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Central_supply/saveSupPrice",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#drugaccTbl").DataTable().ajax.reload();
			toastr.success('Record saved!', 'Success!');
			$("#modalItemAcc").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});

$('#frmNewPrice').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Central_supply/saveNewPrice",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#drugaccTbl").DataTable().ajax.reload();
			toastr.success('Record saved!', 'Success!');
			$("#modalNewPrice").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});

$('#drugaccTbl').on('click','#btnNewPrice',function (e) {
	var cl2comb = $(this).data('cl2comb');
	var cl2dteas = $(this).data('cl2dteas');
	itemAccInfo(cl2comb,cl2dteas);
	$("#modalNewPrice").modal('show');
	

});

	
$('#drugaccTbl').on('click', '#btnEditItem', function (e) {
	$("#modalItemAcc").modal('show');
	var cl2comb = $(this).data('cl2comb');
	var cl2dteas = $(this).data('cl2dteas');
	itemAccInfo(cl2comb,cl2dteas);
});

$('#drugaccTbl').on('click', '#btnEditAcct', function (e) {
	$("#modalItemAcc").modal('show');
	var cl2comb = $(this).data('cl2comb');
	var cl2dteas = $(this).data('cl2dteas');
	itemAccInfo(cl2comb,cl2dteas);
});



$('.reset').on('hidden.coreui.modal', function(event) {
	$(this).find("input,textarea,select").val('').end();
	$(this).find("checkbox,radio").prop('checked',false);
	$(this).find("radio").removeAttr('checked');
	$(this).find("input,textarea,select").removeClass('is-valid'); 
	$(this).find("input,textarea,select").removeClass('is-invalid');
	$(this).find("select").val('').trigger('change');
	$("#txtMult").find("tr").remove();
});

