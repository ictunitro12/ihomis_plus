<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<input type="hidden" name="formiden_injury" id="formiden_injury">
	<div class="card card-accent-success"> 
		<div class="card-body ">
				<?php echo ViewInjuryForm();?>
				<?php echo ViewSaveInjury();?>
		</div>
	</div>
<?php echo ViewSearchPatient();?>
<script type="text/javascript">
	$(function()
	{
		var enccode = atob('<?php echo $this->uri->segment(3);?>');
		var hpercode = atob('<?php echo $this->uri->segment(4);?>');
		
		$('#formIden').val('update');
		 initInjuryEdit(enccode,hpercode);

	});


</script>
<input name="module" id ="module" type="hidden" value="injury">
 <script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>

<script src="<?php echo base_url()?>assets/scripts/oneiss/injury.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/oneiss/injurys.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/oneiss/injury_validation.js"></script>

 <script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
 <script src="<?php echo base_url()?>assets/scripts/library.js"></script>

