var baseURL=$('#base_url').val();
	
	function PatSearchList(data)
	 {
		var table =$("#TblPatSearchList").DataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [
			{"data" : "hpercode"},
			{"data" : "fullname"},
			{"data" : "dob"},
			{"data" : "patsex"}],
		 });		 
		$('#TblPatSearchList').on( 'click', 'tr', function () {
		var data = table.row(this).data();
		$("#PatSearchList").modal('hide');
		var x = document.getElementById("pdf_patrec").src = baseURL+"Rep_Admission_pdf/PatientRecRep/"+btoa(data['hpercode']);
		});
	 }
	 
	$('#frmPatSearch').submit('click',function(){
	$.ajax({
		url:baseURL+"Rep_Admission/PatientAdvanceSearch",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
		$("#PatSearchList").modal({backdrop:'staic'}).draggable();
		$("#PatSearch").modal('hide');
		PatSearchList(data);
		},
		error: function(response){
		alert("Error:Please try again!");
	}});
		return false;
	});

	//window.location.href = baseURL+"Rep_Admission_pdf/PatientRecRep/"+data['hpercode'];
