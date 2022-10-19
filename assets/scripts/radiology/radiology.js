	 $(function(){
		$("#container").load(baseURL+"Radiology/viewdocord",function(){
			 initDoctor();
		}); 
	 });


	function initDoctor()
	{
		$("#btnDocord").addClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnAvailable").removeClass('active');
		orderRadio();
	}

	function initAvailable()
	{
		$("#btnDocord").removeClass('active');
		$("#btnOTC").removeClass('active');
		$("#btnAvailable").addClass('active');
		availableList();
	}


	function initWalkin()
	{
		$("#btnDocord").removeClass('active');
		$("#btnOTC").addClass('active');
		$("#btnAvailable").removeClass('active');
		otcList();
	}

	$("#btnDocord").click(function(){
		$("#container").load(baseURL+"Radiology/viewdocord",function(){
			initDoctor();
		});
	});

	$("#btnOTC").click(function(){
		$("#container").load(baseURL+"Radiology/viewwalkin",function(){
			initWalkin();
		});
	});
		
	$("#btnAvailable").click(function(){
		$("#container").load(baseURL+"Radiology/viewavail",function(){
			  initAvailable();
		});
	});



	function orderRadio()
	{
	   var orderRadio= $('#order_tbl').DataTable({
		"ajax" : baseURL+"Radiology/order",
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"processing":true,
		"serverside":true,
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		"destroy":true,
		"rowsGroup":[1,2,8],
		"columns" : [
			{data:"date"},
			{data:"pcchrgcod"},
			{data:"patient"},
			{data:"procdesc"},
			{ render: function(data, type, row){
				return (row.dopriority == 'ROUTIN' ? '<div class="p-2 bg-primary text-white">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="p-2 bg-danger text-white">URGENT!</div>' : '<div class="p-2 bg-secondary text-white">NONE</div>'));
			}},
			{ render: function(data, type, row){
				return (row.estatus == 'S' ? '<div class="p-2 bg-success text-white">SERVED</div>' : (row.estatus == 'P' ? '<div class="p-2 bg-danger text-white">PARTIAL!</div>' : '<div class="p-2 bg-secondary text-white">UNSERVED</div>'));
			}
			},
			{data:"room"},
			{data:"remarks"},
			{ 
			data:"enccode",
			render: function(data, type, row)
			{
				return "<button class='btn btn-outline-success btn-block btn-sm' id='btnRadioList' data-patname='"+row.patient+"' data-hpercode ='"+row.hpercode+"' data-enccode ='"+data+"''><i class='fa fa-search'></i> Show order/s</button>";
			}	
			}],
		"columnDefs":[
			{
				targets: [1,2,6],
				className: 'align-middle'
			},
			{
				targets: [1,2,6],
				className: 'text-center'
			}]
		});
	orderRadio.on('click' ,'#btnRadioList', function(){
		 var enccode = $(this).data('enccode');
		 var hpercode = $(this).data('hpercode');
		 var patient = $(this).data('patname');
			$("#enccodeChrg").val(enccode);
			$("#patname").text(patient);
			patienttransaction(enccode);
			PatientData(hpercode);
			CaseInformation(enccode);
		 $('#modalResult').modal({ backdrop: "static" });
		
	  });
			
	}
	
	

	