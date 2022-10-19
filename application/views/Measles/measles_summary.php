<?php echo ViewSearchPatient(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url() ?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<div class="card card-accent-success with-border">
	<div class="card-body">
	<div class="h3 text text-success card-title"><i class="fa fa-user-plus"></i> Measles</div>
		<!-- <form name="frmmeasles" enctype="multipart/form-data" id="frmmeasles"> -->
			<?php echo ViewMeaslesForm(); ?>
		<!-- </form> -->

	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		Measleswizard();
		$("#PatSearch").modal('show');
		$("#PatientImage").prop('src', baseURL + 'assets/img/avatars/none.png');
		uppercase();
		/* var d = new Date();
		var day = d.getDate();
		var month = d.getMonth() + 1; 
		var year = d.getFullYear();
		var hours = d.getHours();
	    var mins = d.getMinutes();
	    var seconds = d.getSeconds();

		
    document.getElementById("date").value = year + "-" + month + "-" + day + " " + hours + ":" + mins + ":" + seconds; */
	});
</script>
<script src="<?php echo base_url() ?>assets/plugin/select2/js/select2.min.js"></script>
 <input name="base_url" id="base_url" type="hidden" value="?php echo base_url();?>">
<script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/measles/measles.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/measles/pidsr_measles.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/measles/measles_validation.js"></script>