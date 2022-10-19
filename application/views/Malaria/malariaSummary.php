<?php echo ViewSearchPatient();?>

<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<div class="card card-accent-success"> 
	<div class="card-body ">
		<div class="h3 text text-success card-title"><i class="fa fa-user-plus"></i> Malaria</div>
		<?php echo ViewMalariaSummary();?>
		<?php echo ViewMalariaProcess();?>
	</div>
</div>
<script type="text/javascript">
	$(function()
	{	
		var enccode = $.session.get('enccode');
		var hpercode =$.session.get('hpercode');
		initMalariawizard();
		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');
		$("#PatSearch").modal('show');
	});
</script>
<input name="module" id ="module" type="hidden" value="malaria">

<script src="<?php echo base_url()?>assets/scripts/malaria/malaria.js"></script>
<script src="<?php echo base_url()?>assets/scripts/malaria/contracing_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/malaria/travelA_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/malaria/travelB_validation.js"></script>

<script src="<?php echo base_url()?>assets/scripts/malaria/delete_contracing.js"></script>
<script src="<?php echo base_url()?>assets/scripts/malaria/delete_travelA.js"></script>
<script src="<?php echo base_url()?>assets/scripts/malaria/delete_travelB.js"></script>

<script src="<?php echo base_url()?>assets/scripts/malaria/modal.js"></script>

<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js"></script>


