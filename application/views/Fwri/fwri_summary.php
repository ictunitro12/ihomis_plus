 <?php echo ViewSearchPatient();?>
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
 <script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
 <div class="card card-accent-success"> 
 	<div class="card-body ">
 		<?php echo ViewFWRIForm();?>
 		<?php echo ViewSaveFWRI();?>
 	</div>
 </div>

 <script type="text/javascript">
 	$(function()
 	{	
 		Fwriwizard();
 		$("#PatSearch").modal('show');
 		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');
 	});
 </script>

 <input name="module" id ="module" type="hidden" value="fwri">

 <script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>

 <script src="<?php echo base_url()?>assets/scripts/fwri/fwris.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/fwri/fwri.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/fwri/fwri_validation.js"></script>

 <script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/diagnosis.js"></script>
 

