
function addRequest()
{
	$("#modalRequest").modal('show');
	$("#reqDate").val(getTimeLocale());
	$("#formIden").val('insert');
	$.get("Stockroom/generateCode", function(data) {
		  $("#reqNo").val($.trim(data));
		  $("#reqNo").prop('readonly',true);
	});
	var t= $('#reqList').DataTable({
	"paging":false,
	"destroy":true,
	"searching":false,
	"ordering":false,
	"info":false,
	"columnDefs": [
			{
				targets: [0],
				className: 'align-middle',
			}]
	});
}

function request(loca) 
{
	$('#request_tbl').DataTable({
		"ajax": baseURL+"Stockroom/request",
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span   class="sr-only">Loading...</span></div>'},
		"serverside": true,
		"paging":true,
		"destroy":true,
		"processing":true,
		"order": [[ 0, "desc" ]],
		"columns" : [
			{data : "req_date"},
			{
				data : "request_code"
			},
			{
				data : "requester"
			},
			{
				data : "request_loc",
				render: function (data,type,row) 
				{
					switch (data){
					case "PHARM":
						return  "<div class='p-1 bg-success text-white'>"+ '<i class="fa fa-pills"></i> Pharmacy' +"</div>";
						break;
					case "CSSR":
							return  "<div class='p-1 bg-success text-white'>"+ '<i class="fa fa-syringe"></i> Central supply' +"</div>";
						break;
					case "LABOR":
							return  "<div class='p-1 bg-info text-white'>"+ '<i class="fa fa-flask"></i> Laboratory' +"</div>";
					break;
					case "RADIO":
						return  "<div class='p-1 bg-danger text-white'>"+ '<i class="fa fa-radiation"></i> Radiology' +"</div>";
					break;
					case "CSR":
						return  "<div class='p-1 bg-success text-white'>"+ '<i class="fa fa-pills"></i> Pharmacy' +"</div>";
					break;
					default:
						return "";
						break;
					}
				}
			},
			{ 
				data : null ,
				render: function(data, type, row){
					return "<div class=btn-group role=group>"+
						"<button id='btnGroupDeliv' type='button' class='btn btn-block btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
						"<i class='fa fa-th-list'></i>"+
						"</button>"+
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>"+
							"<a class='dropdown-item' data-code='"+row.request_code+"' id='btnReq_Edit' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>"+
						    "<a class='dropdown-item' data-code='"+row.request_code+"' id='btnReq_Delete' href='#'><i class='fa fa-trash'></i> &nbsp Delete</a>"+
						"</div>"+
					  "</div>";
				}	
			}
			
			],
			
			columnDefs: [
			{
				targets: [0,1,2],
				className: 'align-middle',
			}],
	});
}

$("#request_tbl").on("click","#btnReq_Edit",function(){
var code=$(this).data('code');
$('#modalRequest').modal('show');
$("#formIden").val('update');
var requestTable = $('#reqList').DataTable({
	"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
	"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span   class="sr-only">Loading...</span></div>'},
	"paging":true,
	"destroy":true,
	"processing":true,
	"order": [[ 0, "desc" ]],
	columnDefs: [
	{
		targets: [1,2,3],
		visible:false
	},
	{
		targets: [0],
		className:"align-middle text-center"
	},
	{
		targets: ["_all"],
		className:"align-middle"
	},
	{
		targets: [4],
		render: function (data,type,row) 
		{
			switch (data){
			case "DM":
				return  "Drugs & Medicine";
				break;
			case "SM":
				return  "Medical Supplies";
				break;
			case "SE":
					return  "Supplies and Equipments";
			break;
			default:
				return "";
				break;
			}
		}
	},
]
});
$.ajax({
	type:'POST',
	data: {request_code : code},
	url: baseURL+"Stockroom/requestInformation",
	success: function(data,response){
		var info =data.data['info'];
		var items =data.data['items'];
		$("#reqDate").val(setTimeLocale(info['date_request']));
		$("#reqNo").val(info['request_code']);
		$("#refCode").val(info['reference_code']);
		$("#reqNo").prop('readonly',true);
		$("#reqloc option[value=" + info['request_loc']+ "]").prop('selected', true);
		$.each(items, function (i, d) {	
		requestTable.row.add([	
			'<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnremove" ><i class="fa fa-close fa-2x"></i></a>',
			'<input type="text"  value='+d['itemcode1']+' name="code" id="code">',
			'<input type="text"   value='+d['itemcode2']+' name="ctr" id="ctr">',
			'<input type="text"   value='+d['type']+'  name="type" id="type">',
			 d['type'],
			'<div>'+d['description']+'</div>',
			'<input type="text" autocomplete ="off"  class="form-control form-control-sm" id="remarksPres"  value="'+d['remarks']+'"  name="remarksPres" placeholder="Remarks">'
			]).draw(true);
		});
	},
	error: function(data,response){
	//	toastr.error(data.responseJSON.message,'Error');
	},
});

});
function drugData() {
	var data = new Object();
	data.id = "drugData";
	data.link = baseURL + "Stockroom/drugList";
	data.select = {
		select: true,
		style: 'multiple',
		className:'bg-success text-white selected'
	},
	data.type = "POST";
	data.search = true;
	data.destroy = true;
	data.paging = true;
	data.info = true;
	data.columns = [
		{ data: "descs" }];
	Datatable(data);
}

function itemData() {
	var data = new Object();
	data.id = "itemData";
	data.link = baseURL + "Stockroom/itemList";
	data.select = {
		select: true,
		style: 'multiple',
		className:'bg-success text-white selected'
	},
	data.type = "POST";
	data.search = true;
	data.destroy = true;
	data.paging = true;
	data.info = true;
	data.columns = [
		{ data: "descs" }];
	Datatable(data);
}

$("#btnItemList").on('click',function(){
var type = $("#delitem_type").val();
if(type == 'DM'){
	$("#modaldrugData").modal('show');
	drugData();
}else if(type == 'SM'){
	$("#modalItemData").modal('show');
	itemData();
}else if(type == 'SE'){
	$("#modalItemData").modal('show');
}else{
	toastr.warning('Select item type','Warning!');
}
});


$("button[name='btnSelect']").on('click',function(){
var type = $("#delitem_type").val();
var table = $("table[name='itemSelect']").DataTable();
var requestTable = $('#reqList').DataTable({
	"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
	"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span   class="sr-only">Loading...</span></div>'},
	"paging":true,
	"destroy":true,
	"processing":true,
	"order": [[ 0, "desc" ]],
	columnDefs: [
	{
		targets: [1,2,3],
		visible:false
	},
	{
		targets: [0],
		className:"align-middle text-center"
	},
	{
		targets: ["_all"],
		className:"align-middle"
	}
]
});

if(type=='DM'){
	var drugData  = $("#drugData").DataTable().rows('.selected').data().toArray();
	$.each(drugData, function (i, d) {	
		requestTable.row.add([	
		'<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnremove" ><i class="fa fa-close fa-2x"></i></a>',
		'<input type="text"  value='+d['code']+' name="code" id="code">',
		'<input type="text"   value='+d['ctr']+' name="ctr" id="ctr">',
		'<input type="text"   value='+$("#delitem_type").find(":selected").val()+'  name="type" id="type">',
		'<div>'+$("#delitem_type").find(":selected").text()+'</div>',
		'<div>'+d['descs']+'</div>',
		'<input type="text" autocomplete ="off"  class="form-control form-control-sm" id="remarksPres" name="remarksPres" placeholder="Remarks">'
		]).draw(true);
		toastr.info(d['descs'],'You added!');
		$("#modaldrugData").modal('hide');
		table.rows('.selected' ).remove().draw();
	});
}else if(type=='SM'){
		var itemData  = $("#itemData").DataTable().rows('.selected').data().toArray();
		$.each(itemData, function (i, d) {	
			requestTable.row.add([	
			'<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnremove" ><i class="fa fa-close fa-2x"></i></a>',
			'<input type="text"  value='+d['code']+' name="code" id="code">',
			'<input type="text"   value='+d['ctr']+' name="ctr" id="ctr">',
			'<input type="text"   value='+$("#delitem_type").find(":selected").val()+'  name="type" id="type">',
			'<div>'+$("#delitem_type").find(":selected").text()+'</div>',
			d['descs'],
			'<input type="text" autocomplete ="off"  class="form-control form-control-sm" id="remarksPres" name="remarksPres" placeholder="Remarks">'
			]).draw(true);

		toastr.info(d['descs'],'You added!');
		});
		$("#modalItemData").modal('hide');
		table.rows('.selected' ).remove().draw();
}else{
	//toastr.error('Select Item first','Warning');
}

});

$('#reqList').on('click','#btnremove', function () {
	var formAction=$("#formIden").val();
	var requestTable = $('#reqList').DataTable();
	var data =requestTable.row($(this).parents('tr')).data();
	var reqCode= $("#reqNo").val();
	var reqArr = [];
	if(formAction=='update'){
	var  itemcode1= $(requestTable.cell($(this).parents('tr'),1).node()).find('input').val();
	var  itemcode2=	$(requestTable.cell($(this).parents('tr'),2).node()).find('input').val();
	var  itemname=	requestTable.cell($(this).parents('tr'),5).data();
	requestTable
				.row($(this).parents('tr'))
				.remove()
				.draw();
	var rquest={};
		rquest.itemcode1=itemcode1;
		rquest.itemcode2=itemcode2;
		rquest.reqCode=reqCode;
		reqArr.push(rquest);
		var req_JSONString = JSON.stringify(reqArr);
		$.ajax({
			type:'POST',
			data: {deleteItem : req_JSONString},
			dataType:'JSON',
			url: baseURL+"Stockroom/deleteItem",
			success: function(data,response){
				toastr.info(itemname,'Successfully removed!');
			},
			error: function(data,response){
			//	toastr.error(data.responseJSON.message,'Error');
			},
		}); 
	}else{
		requestTable
		.row($(this).parents('tr'))
		.remove()
		.draw();
	}
});


$('#formRequest').submit('click',function(event){
	event.preventDefault();
	var requestTable  = $("#reqList").DataTable()
	var requestData  = requestTable.rows().data().toArray();
	var requestCount  = requestData.length;
	var i;
	var reqArr = [];
	for(i = 0; i < requestCount; i++)
	{
		var rquest={};
		var action = $("#formIden").val();
		var date = $("#reqDate").val();
		var reqno = $("#reqNo").val();
		var refcode = $("#refCode").val();
		var loca = $("#reqloc").val();
		var comb = $(requestTable.cell(i, 1).node()).find('input').val();
		var ctr = $(requestTable.cell(i, 2).node()).find('input').val();
		var type = $(requestTable.cell(i, 3).node()).find('input').val();
		var remarks = $(requestTable.cell(i, 6).node()).find('input').val();
		rquest.action=action;
		rquest.date=date;
		rquest.reqno=reqno;
		rquest.refcode=refcode;
		rquest.comb=comb;
		rquest.ctr=ctr;
		rquest.loca=loca;
		rquest.type=type;
		rquest.remarks=remarks;
		reqArr.push(rquest);
	}
	var req_JSONString = JSON.stringify(reqArr);

	$.ajax({
		type:'POST',
		data: {requestSubmit : req_JSONString},
		dataType:'JSON',
		url: baseURL+"Stockroom/saveRequest",
		success: function(data,response){
			toastr.success('Saved!','Success');
			$('#modalRequest').modal('hide');
			$("#request_tbl").DataTable().ajax.reload();				
		},
		error: function(data,response){
			toastr.error(data,'Error');
		},
	});
});








