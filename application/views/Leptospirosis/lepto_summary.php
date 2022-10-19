<?php echo ViewSearchPatient(); ?>
<div class="card card-accent-success with-border">
	<div class="card-body">
		<form name="frmlepto" enctype="multipart/form-data" id="frmlepto">
			<?php echo ViewLeptoForm(); ?>
		</form>

	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#PatSearch").modal('show');
		$("#PatientImage").prop('src', baseURL + 'assets/img/avatars/none.png');
		uppercase();
	});
</script>
<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/leptospirosis/lepto.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/leptospirosis/lepto_validation.js"></script>