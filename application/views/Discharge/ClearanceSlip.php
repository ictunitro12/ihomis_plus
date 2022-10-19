<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">



<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/medicalrecords/medical_records.js"></script>

<?php echo ViewSearchPatient();?>
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">

<script type="text/javascript">
	$(document).ready(function()
	{
	 	ClearanceSlip();
		$("#PatSearch").modal({backdrop:"static"});
		$("#ImageSave").prop('src', '../assets/img/avatars/none.png');
	});

	function ClearanceSlip()
	{
		var data = new Object();
		data.id = "patientRepTable";
		data.link = "<?php echo site_url('Rep_Discharge/ClearanceSlip');?>";
		data.type = "POST";
		
		loadTable(data);
	}

	function PatVisitList(data){
		$('#visitLogList').off();
		var table =$("#visitLogList").DataTable({
		data: data,
		destroy: true,
		className:'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [
				{"data" : "date"},
				{"data" : "time"},
				{"data" : "toecode"}
			],
		});		 
		
		$('#visitLogList').on('click', 'tr', function () {
			var data = table.row(this).data();
			window.location.href = baseURL+"Rep_Discharge/ClearanceSlip_pdf/"+encodeURIComponent(encodeURIComponent(data['enccode']));
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
			{"data" : "patfirst"},
			{"data" : "patlast"},
			{"data" : "patmiddle"},
			{"data" : "patsex"},],
		 });		 
		$('#TblPatSearchList').on('click', 'tr', function () {
			var data = table.row(this).data();
			$.ajax({
				type: "POST",
				url: baseURL+"MedicalRecords/visitList/"+data['hpercode'],
				data: "JSON",
				async:false,
				success: function(data){
					$("#PatHistoryList").modal({backdrop:"static"});
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
		url:baseURL+"Rep_Discharge/PatientAdvanceSearch",
		type:"POST",
		data:new FormData(this),
		dataType: "JSON",
		processData:false,
		contentType:false,
		cache:false,
		async:true,
		success: function(data,response){
		$("#PatSearchList").modal({backdrop:"static"});
		$("#PatSearch").modal('hide');
		PatSearchList(data);
		},
		error: function(response){
		alert("Error:Please try again!");
	}});
		return false;
	});
</script>