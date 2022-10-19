<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<input type="hidden" name="enccode_assess" id="enccode_assess">
<input type="hidden" name="hpercode_assess" id="hpercode_assess">
<input type="hidden" name="formIden_assess" id="formIden_assess">
	<div class="card card-accent-success"> 
		<div class="card-body ">
			<div class="h3 text text-success card-title"><i class="fa fa-user-plus"></i> MSWD Assessment Tool</div>
				<?php echo ViewMssAssess();?>
				<?php echo ViewMssSummary();?>
		</div>
	</div>
<?php echo ViewSearchPatient();?>
<script type="text/javascript">
	$(function()
	{
		var enccode = atob('<?php echo $this->uri->segment(3);?>');
		var hpercode = atob('<?php echo $this->uri->segment(4);?>');
		$('#enccode_assess').val(enccode);
		$('#hpercode_assess').val(hpercode);
		$('#formIden_assess').val('update');
		initMsswizard(enccode);
		PatientAssessmentForm(enccode, hpercode);

	});



</script>
<input name="module" id ="module" type="hidden" value="MSS">

<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/mss/editAssessment.js"></script>
<script src="<?php echo base_url()?>assets/scripts/mss/mss.js"></script>
<script src="<?php echo base_url()?>assets/scripts/mss/assessment_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/mss/delete.js"></script>
<script src="<?php echo base_url()?>assets/scripts/mss/mss_validation.js"></script>


	