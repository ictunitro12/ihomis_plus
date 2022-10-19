
function deliveries(loca)
{
	var data = new Object();
		data.id="deliver_tbl";
		data.link=baseURL+"Pharmacy/deliveries";
		data.type="POST";
		data.columns=[
			{data : "delno"},
			{data : "deldteas"},
			{data : "suppname"},
			{
				data : "itemtype",
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
					return "<em>"+ data +"</em>";
				}
			},
			{data : "delqty"},
			{data : "expiredte"},
			{
				data : "chrgdesc"
			},
			{
				data : "suplind",
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'P' : return '<div class="text text-success">Procured</div>'; break;
						case 'D' : return '<div class="text text-primary">Donation</div>'; break;
						case 'R' : return '<div class="text text-primary">Central Office</div>'; break;
						default  : return 'N/A';
					}
				}
			},
			{
				data : null,
				render: function (data,type,row) 
				{
					return  "<button type='button' class='btn btn-outline-success btn-sm'><i class='fa fa-info'></i></button>";
				}
			}
		];

		data.coldef= [
			{
				targets: ["_all"],
				className: 'align-middle',
				
			},
			{
				targets: 1,
				className:'text-center',
				
			},
		
		];
	var delivTable =Datatable(data);
	delivTable.on('click','#btnDeliv_Edit',function(){
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = 'Pharmacy/deliverInfo/'+URLencode($(this).data('code'));
		Obj.data = "JSON";
		var row =Information(Obj);
		 if(row!=undefined){
			$('#delDate').val(setTimeLocale(row['data']['deldteas']));
			$('#delNo').val(row['data']['delno']);
			setTypeAcc(row['data']['itemcode']);
			setSupplier(row['data']['wardcode']);
			$("#delSuppind option[value=" + row['data']['suplind'] + "]").prop('selected', true);
			$('#delInvoice').val(row['data']['sinvoice']);
			$('#delRisno').val(row['data']['risno']);
			$('#delReqno').val(row['data']['prno']);
			$('#delPono').val(row['data']['pono']);
			$('#delLotno').val(row['data']['lot_no']);
			setDrugInfo(row['data']['dmdcomb'],row['data']['dmdctr']);
			$('#delQty').val(row['data']['delqty']);
			$('#delExpire').val(setTimeLocale(row['data']['expiredte']));
			$('#delRem').val(row['data']['delrem']);
			$("#delitem_type option[value=" + row['data']['itemtype'] + "]").prop('selected', true);
			$("#delivformIden").val('update');
			$("#intkey").val(row['data']['intkey']);
			$('#modalDeliveries').modal('show');
		 }else{
			 toast.error('Warning','Error');
		 }
	});
	delivTable.on('click','#btnDeliv_Delete',function(){
		$('#delintkey').val($(this).data('code'));
		$('#deleteDeliv').modal('show');
		
	});


}

	function addDeliveries()
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
	function selSupplier(){
		$('[name $="_supplier"]').select2({
		placeholder: 'Search supplier',
		minimumInputLength:1,
		multiple: false,
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
	
	function selTypeAcc(){
		$('[name $="_acc"]').select2({
		placeholder: 'Search',
		minimumInputLength:1,
		multiple: false,
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
	
	function selDM(){	
		$('[name $="_dm"]').select2({
		placeholder: 'Select Drugs & Medicines',
		minimumInputLength:1,
		allowClear: true,
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
	
	
	function setDrugInfo(dmdcomb,dmdctr) {
	var relSelect = $('#delItem_dm');
	$.ajax({
		type: 'GET',
		url: baseURL + 'Drugs/drug/'+dmdcomb+'/'+dmdctr,
		}).then(function (data) {
		var obj = $.parseJSON(data);
		$("#drug").val(obj['drugs']);
		$("#drugcomb").val(obj['dmdcomb']);
		$("#drugctr").val(obj['dmdctr']);
	
	});
	}

  