<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<div class="card card-accent-success with-border"> 
<div class="card-body">
<div class="h3 text text-success card-title"><i class="fa fa-user-plus"></i> Outpatient</div>
<?php echo ViewOutPatientProcess();?>
<?php echo ViewOutPatientSummary();?>
</div>
</div>
<?php echo ViewSearchPatient();?>
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<input name="module" id ="module" type="hidden" value="outpatient">

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#PatSearch").modal('show');
		OutpatientWizard();
		$("#ImageSave").prop('src', '../assets/img/avatars/none.png');
	});
</script>
<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_registration.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_validation.js"></script>	
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/outpatient/outpatient.js"></script>
<script src="<?php echo base_url()?>assets/scripts/outpatient/outpatient_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referral.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referralto.js"></script>

