	
	
	
	function chargeTable(type)
	{
		var chrgTable=$('#chargesTable').DataTable({
			"ajax" :baseURL+"Charges/chargesType/"+type,
			"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
			"select": {
				select: true,
				style: 'multi',
			},
			"processing":true,
			"serverside":true,
			"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
			"destroy":true,
			"info":false,
			"deferLoading":250,
			"columns" : [
			{data : "chrgcode"},//0
			{data : "itemcode"},//1
			{data : "descs",
				render: function (data,type,row) {
					return  data ;
				}
			},//2
			{data : "uom"},//3
			{data : "amnt"},//4
			{data : "lot"},//5
			{data : "available"},//6
			{data : "expiry"},//7
			{data : "ctr"}//8
			
			],
			columnDefs: [
			{
				targets:[0,1,3,8],
				visible:false
			}],
		});
	}
	
	$("#btnCharges_add").on("click",function(){
	if(Module=='pharmacy'){
		$("div[id^='Modal_typeCharge']").modal({backdrop:'static',show:true});
		SelTypeofCharge('PHARM');
	}else if(Module=='billing'){
		var cc = $("select[id^='costcntr']").val();
		if(cc=='')
		{
			toastr.error('Please select cost center first!','Alert');
		}else{
			SelTypeofCharge(cc);
			$("div[id$='Modal_typeCharge']").modal({backdrop:'static'});
		}
	}
	});
	
	function SelTypeofCharge(costcent)
	{
			$('[id$=typechrge_chrg]').select2({
			allowClear: true,
			placeholder:'Select Charge/s',
			theme:'coreui',
			ajax:{
			url: baseURL+"Charges/charges/"+costcent,
			dataType: "json",
			type:"POST",
			delay: 250,
			data: function(params){
			return{
			searchCharges: params.term
			};
			},
			processResults: function(data){
			var results = [];
				$.each(data, function(index, item){
				results.push({
					id:item.chrgcode,
					text:item.chrgdesc,
				});
			});
			return{
				results: results
			}
			}
			}
			});
			$('[id$=typechrge_chrg]').on('change', function(){
				var data =  $("[id$=typechrge_chrg] option:selected",this);
				if(this.value){
					chargeTable(this.value);
				}else{
					return false;
				}
			 });
			
	}
	
	
	
	function CalculateTableSummary(table) {
	try {
			var intVal = function (i) {
				return typeof i === 'string' ?
				i.replace(/[\$,]/g, '') * 1 :
				typeof i === 'number' ?
				i : 0;
			};

			var api = table.api();
				api.columns(5).each(function (index){
				var column = api.column(index);
				sum = column.nodes().reduce( function (a, b) {
					var a1 = intVal(a);
					var b1= intVal($('input', b).val())
					return  a1+b1 ;
				},0);
				if($(column.footer()).hasClass("Gtotal"))
				{
					var ada = $(column.footer()).text(sum.toFixed(2));
		
					$("#totalAll").val(sum.toFixed(2));
					$("#GTotal").text(formatNumber(sum.toFixed(2)));
					$("#paid_amt").val(formatNumber(sum.toFixed(2)));
					$("#paid_amt").blur(function() {
					this.value = parseFloat(sum).toFixed(2);
					});

					var type= $("#codeType").val();
					if(type !==''){
						discount(sum);
					}
				}
			});
		} catch (e) {
			console.log('Error in CalculateTableSummary');
		}
	}

	function discount()
	{
		var type= $("#codeType").val();
		var disc= $("#amountDisc").val();
		var sum= $("#paid_amt").val();
		var disc_amnt= procDiscount(type,sum,disc);
		 $("#discAmount").val(disc_amnt);
	} 

	function getPercentOfNumber(number,percent)
	{
		return (percent / 100) * number;
	}

	function procDiscount(pdtyp = "", amt = 0, percent = 0)
	{
		if (pdtyp == 'A') {
			return amt - percent;
		} else if (pdtyp = 'P') {
			return getPercentOfNumber(amt,percent);
		} else {
			return 0.00;
		}
	}

	
