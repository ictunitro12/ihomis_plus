<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url() ?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="frmClearanceC" name="frmClearanceC" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Clearance Certificate</h4>
					</div>
				</div>
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
						<button onclick="searchPatient()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body" id="ClearanceC"></div>
		<div class="card-footer"></div>
	</div>
</form>

<script src="<?php echo base_url() ?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/medical_records.js"></script>

<?php echo ViewSearchPatient(); ?>
<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">

<script type="text/javascript">
	$(function() {
		ClearanceCertificate();
		searchPatient();
		$("#ImageSave").prop('src', '../assets/img/avatars/none.png');
	});

	function ClearanceCertificate() {
		var data = new Object();
		data.id = "patientRepTable";
		data.link = "<?php echo site_url('Rep_Discharge/ClearanceCertificate'); ?>";
		data.type = "POST";

		loadTable(data);
	}

	function searchPatient() {
		$("#PatSearch").modal('show');
	}

	function PatVisitList(data) {
		$('#visitLogList').off();
		var table = $("#visitLogList").DataTable({
			data: data,
			destroy: true,
			className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [{
					"data": "admdate"
				},
				{
					"data": "admtime"
				},
				{
					"data": "disdate"
				},
				{
					"data": "distime"
				},
				{
					"data": "toecode"
				}
			],
		});

		$('#visitLogList').on('click', 'tr', function() {
			var data = table.row(this).data();
			var enccode = data['enccode'];
			enccode = encodeURIComponent(encodeURIComponent(enccode));
			$('#PatHistoryList').modal('hide');
			$('#ClearanceC').html('<embed src="' + "ClearanceCertificate_pdf/" + enccode + '" frameborder="2" width="100%" height="800px" id="ClearanceC">');
		});
	}

	function PatSearchList(data) {
		var table = $("#TblPatSearchList").DataTable({
			data: data,
			destroy: true,
			className: 'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [{
					"data": "hpercode"
				},
				{
					"data": "fullname"
				},
				{
					"data": "dob"
				},
				{
					"data": "patsex"
				}
			],
		});
		$('#TblPatSearchList').on('click', 'tr', function() {
			var data = table.row(this).data();
			$.ajax({
				type: "POST",
				url: baseURL + "MedicalRecords/visitHistory/" + data['hpercode'],
				dataType: "JSON",
				async: false,
				processData: false,
				contentType: false,
				success: function(data) {
					$("#PatHistoryList").modal('show');
					$('#PatSearchList').modal('hide');
					PatVisitList(data['data']);
				},
				error: function(data) {
					toastr.error('Error: Fetching Patient Visits!', 'Error');
				}
			});
		});
	}

	$('#frmPatSearch').submit('click', function() {
		$.ajax({
			url: baseURL + "Rep_Discharge/PatientAdvanceSearch",
			type: "POST",
			data: new FormData(this),
			dataType: "JSON",
			processData: false,
			contentType: false,
			cache: false,
			async: true,
			success: function(data, response) {
				$("#PatSearchList").modal('show');
				$("#PatSearch").modal('hide');
				PatSearchList(data);
			},
			error: function(response) {
				alert("Error:Please try again!");
			}
		});
		return false;
	});
</script>