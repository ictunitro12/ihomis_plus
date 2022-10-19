 <?php echo ViewSearchPatient();?>
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
 <script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
 
 <div class="card card-accent-success"> 
 	<div class="card-body ">
 		<?php echo ViewChronicForm();?>
 	</div>
 </div>

 <script type="text/javascript">
 	$(function()
 	{	
 		Chronicwizard();
 		$("#PatSearch").modal('show');
 		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');
 	});
 </script>

 <input name="module" id ="module" type="hidden" value="chronic">

 <script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>

 <script src="<?php echo base_url()?>assets/scripts/chronic/chronis.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/chronic/chronic.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/chronic/chronic_validation.js"></script>

 <script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/diagnosis.js"></script>
 

