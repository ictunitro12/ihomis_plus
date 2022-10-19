var baseURL=$('#base_url').val();

	function Admission(data)
	 {
		var table =$("#Admtbl").dataTable({
		 data:data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "hpercode"},
			{"data" : "casenum"},
			{"data" : "admdate"},
			{"data" : "admtime"},
			{"data" : "name"},
			{"data" : "patbdate"},
			{"data" : "patsex"},
			{"data" : "cc_city"},
			{"data" : "typemem"},
			{"data" : "admitdiag"},
			{"data" : "finaldiag"},
			{"data" : "physician"},
			{"data" : "disposition"},
			{"data" : "LOS"},
			{"data" : "disdate"}
			],
		 });	
	 }

	
	 
	$('#dateRange').submit('click',function(){
	$.ajax({
		url:baseURL + "Rep_MedRec/AdmissionDischargeRegistry", 
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		serverSide:true,
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
		$("#DateSearch").modal('hide');
		Admission(data);
		var hrefprintpdfopd = $("#printopd").prop('href')+$("#from").val() + "/" + $("#to").val();
		$("#printopd").prop('href',hrefprintpdfopd);
		},
		error: function(response){
		alert("Error:Please try again!");
		}
	});

	
		return false;
	});	
