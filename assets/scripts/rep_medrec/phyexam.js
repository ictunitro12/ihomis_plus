var baseURL=$('#base_url').val();
	

	 $('#frmPatSearch').submit('click',function(){
		$.ajax({
			url:baseURL+"Patient/PatientAdvanceSearch",
			type:"POST",
			data:new FormData(this),
			dataType: "JSON",
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			success: function(data,response){
			$("#PatSearchList").modal('show');
			$("#PatSearch").modal('hide');
			PatSearchList(data);
			},
			error: function(response){
			alert("Error:Please try again!");
		}});
			return false;
	});
	
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
		  var hpercode= data['hpercode']; 
		  var x = document.getElementById("physicalexam").src = baseURL+"Rep_MedRec/PhysicalExamView/" +hpercode;
		 $('#ModalPhysicalExam').modal('show');
		 $("#PatSearchList").modal('hide');		 });
	 }
	 
