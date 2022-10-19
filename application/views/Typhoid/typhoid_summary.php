 <?php echo ViewSearchPatient();?>
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
 <script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
 <input type="hidden" name="formIden_typhoid" id="formIden_typhoid">
 <div class="card card-accent-success"> 
 	<div class="card-body ">
 		<?php echo ViewTyphoidForm();?>
 	</div>
 </div>

 <script type="text/javascript">
 	$(function()
 	{	
 		Typhoidwizard();
 		$('#formIden_typhoid').val('insert');
 		$("#PatSearch").modal('show');
 		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');
 		uppercase();
 	});
 </script>

 <input name="module" id ="module" type="hidden" value="typhoid">

 <script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>

 <script src="<?php echo base_url()?>assets/scripts/typhoid/typhoid_validation.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/typhoid/typhoid.js"></script>

 <script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/library.js"></script>

