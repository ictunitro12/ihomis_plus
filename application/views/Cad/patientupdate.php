	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2-bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
	<script src="<?php echo base_url() ?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>

	<div class="card card-accent-success with-border">
		<div class="card-body">
			<?php echo ViewCADForm(); ?>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			var enccode = atob('<?php echo $this->uri->segment(3);?>');
			var hpercode = atob('<?php echo $this->uri->segment(4);?>');

			$('#formIden').val('update');
			initCADEdit(enccode,hpercode);
			$("#PatientImage").prop('src', baseURL + 'assets/img/avatars/none.png');
		});
	</script>
	<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
	<script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>

	<script src="<?php echo base_url()?>assets/scripts/cad/coronarys.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/cad/coronary.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/cad/coronary_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patientrecord/diagnosis.js"></script>

