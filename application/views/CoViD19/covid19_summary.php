<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url() ?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<?php echo ViewSearchPatient(); ?>
	<div class="card card-accent-success with-border">
		<div class="card-body">
			<form name="frmcovid19" id="frmcovid19" enctype="multipart/form-data">
				<?php echo ViewCoViD19Form(); ?>
			</form>
		</div>
	</div>
	<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">

	<script type="text/javascript">
		$(document).ready(function() {
			covidWizard();
			uppercase();
			$("#PatientImage").prop('src', baseURL + 'assets/img/avatars/none.png');
			$("#PatSearch").modal('show');
		});
	</script>
	<script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/covid19/covid19.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/covid19/covid19_validation.js"></script>