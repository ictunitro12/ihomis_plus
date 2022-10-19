var baseURL=$('#base_url').val();
	
	function PatSearchList(data)
	 {
		var table =$("#TblPatSearchList").DataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [
			{"data" : "hpercode"},
			{"data" : "patfirst"},
			{"data" : "patlast"},
			{"data" : "patmiddle"},
			{"data" : "patsex"}],
		 });		 
		$('#TblPatSearchList').on( 'click', 'tr', function () {
		var data = table.row(this).data();
		window.location.href = baseURL+"Rep_Outpatient/OPDPatientProfile/"+data['hpercode'];
		 });
	 }
	 
	$('#frmPatSearch').submit('click',function(){
	$.ajax({
		url:baseURL+"Rep_Outpatient/PatientAdvanceSearch",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
		$("#PatSearch").modal('hide');
		$("#PatSearchList").modal({backdrop:"static"});
		PatSearchList(data);
		},
		error: function(response){
		alert("Error:Please try again!");
	}});
		return false;
	});