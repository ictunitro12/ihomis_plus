var baseURL=$('#base_url').val();
function PatVisitList(data){
	$('#admitllog').off();
	var table =$("#admitllog").DataTable({
	data: data,
	destroy: true,
	className:'table table-sm table-responsive table-bordered table-striped table-hovered',
		columns:[
			{"data" : "enccode"},
			{"data" : "admdate"},
			{"data" : "toecode"},
			{"data" : "didate"},
			{"data" : "cc_finaldiag"}],
		columnDefs:[{
			target:[0],
			visible: false,

		}],
	});	
	$('#admitllog').on('click', 'tr', function () {
		var data = table.row(this).data();
		var enccoded = encodeURIComponent(encodeURIComponent(btoa(data['enccode'])));
		var hpercode = btoa(data['hpercode']);
		$("#PatadmitList").modal('hide');
		var x = document.getElementById("pdf_patrec").src = baseURL+"Rep_Admission_pdf/DiscSumm_pdf/"+hpercode+'/'+enccoded;
	});
} 
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
		
		$.ajax({
			type: "POST",
			url: baseURL+"Rep_Admission/AdmissionHisto/"+data['hpercode'],
			data: "JSON",
			processData:false,
			contentType:false,
			cache:false,
			async:false,
			success: function(data){
				$("#PatadmitList").modal({backdrop:'static'}).draggable();
				$('#PatSearchList').modal('hide');
				PatVisitList(data['data']);
			},
			error: function(data){
				toastr.error('Error: Fetching Patient Visits!','Error');
			}
		});
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
	}
});
	return false;
});