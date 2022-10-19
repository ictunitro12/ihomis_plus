
function  doctors_return()
{
	var drugsAndMeds_tbl = $('#drugsAndMedsret_tbl').DataTable({
		"ajax" : baseURL+"Pharmacy/doctors_order_return",
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"processing":true,
		"serverside":true,
		"rowsGroup":[1,2,3,12],
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		"destroy":true,
		"columns" : [ 
			{ data : "dodate" },
			{ data : "pcchrgcod" },
			{
				data : "hpercode",
			render: function(data, type, row){
				return "<small>"+ data +"</small>";
			}
			},
			{ data : "name" },
	
			{ render: function(data, type, row){
				return "<small>"+ row.gendesc1 + ", " + row.dmdnost2 + ", " + row.formdesc1 + ", " + row.rtedesc1+ "</small>";
			}},
			{ data : "pchrgqty" },
			{ data : "pchrgup" },
			{ render: function(data, type, row){
				var tot = row.pchrgqty * row.pchrgup;
				return tot.toFixed(2);
			}},
			{ data : "qtyissued" },
			{ data : "qtybal" },
			{ render: function(data, type, row){
				return (row.estatus == 'S' ? '<div class="p-1 bg-success text-white">Served</div>' : (row.estatus == 'P' ? '<div class="p-1 bg-warning text-white">Partial</div>' : '<div class="p-1 bg-secondary text-white">Unserved</div>'));
			}},
			{ render: function(data, type, row){
				return (row.dopriority == 'ROUTIN' ? '<div class="p-1 bg-primary text-white">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="p-1 bg-danger text-white">URGENT!</div>' : '<div class="p-1 bg-secondary text-white">NONE</div>'));
			}},
			{ 
				data : "enccode" ,
				render: function(data, type, row){
				return "<button class='btn btn-outline-success btn-sm' id='btnCheckret' data-hpercode='"+row.hpercode+"' data-name='"+row.name+"' data-enccode ='"+data+"' data-stat='"+row.estatus+"' data-docointkey = '"+row.docointkey+"' data-chrgcode='"+row.pcchrgcod+"'><i class='fa fa-search'></i></button>";
			}	
			}],
			
			
			columnDefs: [
			{
				targets: [0,1,2,3,12],
				className: 'align-middle'
			},
			{
				targets: [4,5,6,7,8,9,10,11],
				className: 'text-center'
			}],
			
			 createdRow: function( row, data, dataIndex ) {
				
				$( row ).addClass('row-disabled');
			},

    })
}


	$("#drugsAndMeds_tbl").on("click",'#btnCheckReturn',function(e){
		
		
		 var name=$(this).data('name');
		 var docointkey=$(this).data('docointkey');
		 var hpercode=$(this).data('hpercode');
		 var status=$(this).data('stat');
		 var enccode=$(this).data('enccode');
		 var code=$(this).data('chrgcode');

		getPatient(hpercode);
		getCaseInformation(enccode);
		$("#modalDrugReturn").modal('show');
		$("#enccode").val(enccode);
		$("#percode").val(hpercode);
		$("#pharmchrgSlipret").val($.trim(code));
		returnTable(enccode);
		
	
	});
	
