	$('#frmAdmissionStatistics').submit('click',function(){
	$.ajax({
	url:"./Admission/Statistics",
	type:"POST",
	data:new FormData(this),
	dataType: "JSON",
	processData:false,
	contentType:false,
	cache:false,
	async:true,
	success: function(data,response){
	 $("#Datemodal").modal('hide');
	 $("#Inpatient").text(data['TotalInpatient']);
	 $("#Discharged").text(data['Discharged']);
	 $("#Absconded").text(data['Absconded']);
	 $("#Transferred").text(data['Transferred']);
	 $("#Unimproved").text(data['Unimproved']);
	 $("#DAMA").text(data['DAMA']);
	 $("#Recovered").text(data['Recovered']);
	 $("#Improved").text(data['Improved']);
	 $("#Deaths").text(data['Deaths']);
	},
	error: function(response){
	}});
	return false;
	});
	
	function AdmissionStatistics()
	{
	$.ajax({
	async:true,
	url:"./Admission/Statistics",
	type:"POST",
	data: "JSON",
	success: function(data,response){
	 $("#Inpatient").text(data['TotalInpatient']);
	 $("#Discharged").text(data['Discharged']);
	 $("#Absconded").text(data['Absconded']);
	 $("#Transferred").text(data['Transferred']);
	 $("#Unimproved").text(data['Unimproved']);
	 $("#DAMA").text(data['DAMA']);
	 $("#Recovered").text(data['Recovered']);
	 $("#Improved").text(data['Improved']);
	 $("#Deaths").text(data['Deaths']);
	},
	error: function(response){
	
	}});
	}