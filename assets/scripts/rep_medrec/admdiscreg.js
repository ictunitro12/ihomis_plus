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

	 function Laboratory(data)
	 {
		var table =$("#Labtbl").dataTable({
		 data:data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "hpercode"},
			{"data" : "casenum"},
			{"data" : "name"},
			{"data" : "patage"},
			{"data" : "patsex"},
			{"data" : "itemdesc"},
			{"data" : "disdate"}
			],
		 });	
	 }

	 function Xray(data)
	 {
		var table =$("#Xraytbl").dataTable({
		 data:data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "itemdesc"},
			{"data" : "hpercode"},
			{"data" : "admtime"},
			{"data" : "name"},
			{"data" : "patsex"},
			{"data" : "patagedy"},
			{"data" : "disdate"}
			],
		 });	
	 }

	 function Opera(data)
	 {
		var table =$("#Operatbl").dataTable({
		 data:data,
		 destroy: true,
		 className:'table table-sm table-striped table-borderless table-condensed table-hover',
			columns:[
			{"data" : "hpercode"},
			{"data" : "casenum"},
			{"data" : "name"},
			{"data" : "patage"},
			{"data" : "patsex"},
			{"data" : "cc_typemem"},
			{"data" : "cc_admitdiag"},
			{"data" : "description"},
			{"data" : "employeename"},
			{"data" : "dateopera"}
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

	$.ajax({
		url:baseURL + "Rep_MedRec/AdmissionDischargeRegistryLab", 
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
		Laboratory(data);

		var hrefprintpdfopd = $("#printopd").prop('href')+$("#from").val() + "/" + $("#to").val();
		$("#printopd").prop('href',hrefprintpdfopd);
		},
		error: function(response){
		alert("Error:Please try again!");
		}
	});

	$.ajax({
		url:baseURL + "Rep_MedRec/AdmissionDischargeRegistryXray", 
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
		Xray(data);

		var hrefprintpdfopd = $("#printopd").prop('href')+$("#from").val() + "/" + $("#to").val();
		$("#printopd").prop('href',hrefprintpdfopd);
		},
		error: function(response){
		alert("Error:Please try again!");
		}
	});

	$.ajax({
		url:baseURL + "Rep_MedRec/AdmissionDischargeRegistryOpera", 
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
		Opera(data);

		var hrefprintpdfopd = $("#printopd").prop('href')+$("#from").val() + "/" + $("#to").val();
		$("#printopd").prop('href',hrefprintpdfopd);
		},
		error: function(response){
		alert("Error:Please try again!");
		}
	});
		return false;
	});	
