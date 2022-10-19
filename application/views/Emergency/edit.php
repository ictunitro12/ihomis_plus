<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<div class="card card-accent-success with-border">
	<h4 class="card-header">
		<div class="card-title text-success"><i class="fa fa-user-plus"></i>&nbsp Emergency</div>
	</h4> 
	<div class="card-body">
		<?php echo ViewEmergencyPatientProcess();?>
		<?php echo ViewEmergencyPatientSummary();?>
	</div>
</div>
</div>

<?php echo ViewSearchPatient();?>
<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
<input id ="enc" type="hidden" value="<?php echo $this->uri->segment(3)?>" >	
<script type="text/javascript">
	$(function()
	{
		var enccode=atob($('#enc').val());
		initEdit(enccode);
	});
</script>
<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>

<script src="<?php echo base_url()?>assets/scripts/emergency/emergency.js"></script>
<script src="<?php echo base_url()?>assets/scripts/emergency/editEmergency.js"></script>
<script src="<?php echo base_url()?>assets/scripts/emergency/emergency_validation.js"></script>


<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_registration.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_validation.js"></script>	



