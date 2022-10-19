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
		$('#TblPatSearchList').on('click', 'tr', function () {
			var data = table.row(this).data();
			var hpercode = btoa(data['hpercode']);
			checkHistory(hpercode);
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
		$("#PatSearchList").modal({backdrop:'static'}).draggable();
		$("#PatSearch").modal('hide');
		PatSearchList(data);
		},
		error: function(response){
		alert("Error:Please try again!");
	}});
		return false;
	});



	function checkHistory(hpercode)
	{
		var percode=atob(hpercode);
		$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/PatientHistory/"+percode,
		dataType: "JSON",
		success: function(data)
		{ 
	
			if(data['recordsTotal']!=0){
				$('#PatHistoryList').modal({backdrop:'static'}).draggable();
				$('#PatSearchList').modal('hide');
				visitLogList(data);
			}else{
				toastr.warning('No Record Found !' ,'Warning');
			}
		},
		error: function(data)
		{
			toastr.error('Error fetching patient history!','Error');
		}
		});
	}
	
	function visitLogList(data)
	{
		$('#visitLogList').off();
		var table =$("#visitLogList").DataTable({
		data: data,
		destroy: true,
		className:'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [
			{"data" : "admdate"},
			{"data" : "admtime"},
			{"data" : "disdate"},
			{"data" : "distime"},
			{"data" : "toecode"}],
		});		 
		
		$('#visitLogList').on('click', 'tr', function () {
			var data = table.row(this).data();
			var enccode = encodeURIComponent(encodeURIComponent(btoa(data['enccode'])));
		$("#PatHistoryList").modal('hide');
		var x = document.getElementById("pdf_patrec").src = baseURL+"Rep_Admission_pdf/CCSPdf/"+enccode;
		});
	 }