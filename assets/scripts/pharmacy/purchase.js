
function purchase(loca)
{
	$('#purchase_tbl').DataTable({
		"ajax": baseURL+"Pharmacy/purchase",
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span   class="sr-only">Loading...</span></div>'},
		"serverside": true,
		"paging":true,
		"destroy":true,
		"processing":true,
		"order": [[ 0, "desc" ]],
		"columns" : [
			{data : "purchase_no"},
			{data : "date_request"},
			{data : "item_code"},
			{
				data : "item_form",
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'DM' : return '<div class="text text-success"> Drugs & Medicine</div>'; break;
						case 'MS' : return '<div class="text text-primary"> Medical Supplies</div>'; break;
						case 'SE' : return '<div class="text text-primary"> Supplies and Equipments</div>'; break;
						default  : return 'N/A';
					}
				}
			},
			
			
			{
				data : "description",
				render: function (data,type,row) 
				{
					return "<small>"+ data +"</small>";
				}
			},
			{data : "item_qty"},
			{data : "trans_code"},
			{
				data : "purchase_no" ,
				render: function(data, type, row){
				return "<div class=btn-group role=group>"+
						"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
						"<i class='fa fa-th-list'></i>"+
						"</button>"+
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>"+
							"<a class='dropdown-item' data-code='"+btoa(data)+"' id='btnPUR_Edit' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>"+
						    "<a class='dropdown-item' data-code='"+btoa(data)+"' id='btnPUR_Delete' href='#'><i class='fa fa-trash'></i> &nbsp Delete</a>"+
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

function addPurchase()
{
	$("#modalDeliveries").modal('show');
	var delno = $.ajax({
	 type: "POST",
	 url: baseURL+'Pharmacy/generateDelno',
	 dataType: 'json',
	 success:function (data) {
		$("#delNo").val(data);
		$("#delivformIden").val('insert');
		$("#delDate").val(getTimeLocale());
		selSupplier();
		selTypeAcc();
		selDM();
	 }
	 
	 });
}

$("#deliver_tbl").on('click','#btnDeliv_Edit',function(){
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = 'Pharmacy/deliverInfo/'+URLencode($(this).data('code'));
		Obj.data = "JSON";
		var row =Information(Obj);
		 if(row!=undefined){
			$('#modalDeliveries').modal('show');
			$('#delDate').val(setTimeLocale(row['data']['deldteas']));
			$('#delNo').val(row['data']['delno']);
			setTypeAcc(row['data']['itemcode']);
			setSupplier(row['data']['wardcode']);
			$("#delSuppind option[value=" + row['data']['suplind'] + "]").prop('selected', true);
			$('#delInvoice').val(row['data']['sinvoice']);
			$('#delRisno').val(row['data']['risno']);
			$('#delReqno').val(row['data']['prno']);
			$('#delPono').val(row['data']['pono']);
			setDrugInfo(row['data']['dmdcomb'],row['data']['dmdctr']);
			$('#delQty').val(row['data']['delqty']);
			$('#delExpire').val(setTimeLocale(row['data']['expiredte']));
			$('#delRem').val(row['data']['delrem']);
			$("#delitem_type option[value=" + row['data']['itemtype'] + "]").prop('selected', true);
			$("#delivformIden").val('update');
			$("#intkey").val(row['data']['intkey']);
		 }else{
			 toast.error('Warning','Error');
		 }
		 
		});
		

	function setSupplier(param) {
	selSupplier();
	var relSelect = $('#delSupp_supplier');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Pharmacy/supplierInfo/'+param,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['name'], obj['code'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}
	function selSupplier()
	{
		$('[name $="_supplier"]').select2({
		placeholder: 'Search',
		multiple: false,
        minimumInputLength: 1,
		allowClear: true,
		theme:'coreui',
		ajax:{	
		url: baseURL+"Pharmacy/supplierList",
		dataType: "json",
		type:"POST",
		delay: 250,
		data: function(params){
		return{
		searchSupplier: params.term
		};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.code,
		text:item.name
		});
		});
		return{
		results: results
		}
		}
		}
		});
		
		$('[name $="_supplier"]').on('change',function(){
			var data = $('[name $="_supplier"] option:selected',this);
			$(this).valid();
		});
	}
	
	function setTypeAcc(param) {
	selTypeAcc();
	var relSelect = $('#delAcc_acc');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Pharmacy/accountInfo/'+param,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['name'], obj['code'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}
	
	function selTypeAcc()
	{
		$('[name $="_acc"]').select2({
		placeholder: 'Search',
		multiple: false,
        minimumInputLength: 1,
		allowClear: true,
		theme:'coreui',
		ajax:{	
		url: baseURL+"Pharmacy/accountType",
		dataType: "json",
		type:"POST",
		delay: 250,
		data: function(params){
		return{
		searchAcc: params.term
		};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.code,
		text:item.name
		});
		});
		return{
		results: results
		}
		}
		}
		});
		$('[name $="_acc"]').on('change',function(){
		var data = $('[name $="_acc"] option:selected',this);
		$(this).valid()
		});
	}
	
	function selDM()
	{	
		$('[name $="_dm"]').select2({
		placeholder: 'Select Drugs & Medicines',
		allowClear: true,
		 minimumInputLength: 2,
		theme:'coreui',
		ajax:{
		url: baseURL+"/Drugs/selDM",
		dataType: "json",
		type:"POST",
		delay: 250,
		data: function(params){
		return{
		searchDrugs: params.term
		};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.dmdcomb,
		text:item.drugs
		});
		});
		return{
		results: results
		}
		}
		}
		});
			$('[name $="_dm"]').on('change', function() {
			$("[name $='_dm'] option:selected",this);
			$(this).valid();
		});
	}
	
	
	function setDrugInfo(param,ctr) {
	selDM();
	var relSelect = $('#delItem_dm');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Drugs/DrugsInformationFilter/'+param+'/'+ctr,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		$("#delPrice").val(obj['dmduprice']);
		$("#delLotno").val(obj['lotno']);
		$("#delRem").val(obj['dmdrem']);
		var option = new Option(obj['drugs'], obj['dmdcomb'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
	
	}
