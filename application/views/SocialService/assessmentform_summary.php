<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<input type="hidden" name="formIden_assess" id="formIden_assess">
	<div class="card card-accent-success"> 
		<div class="card-body ">
			<div class="h3 text text-success card-title"><i class="fa fa-user-plus"></i> MSWD Assessment Tool</div>
				<?php echo ViewAssessmentForm();?>
				<?php echo ViewSaveAssessmentForm();?>
		</div>
	</div>
<?php echo ViewSearchPatient();?>
<script type="text/javascript">
	$(function()
	{	var enccode = $.session.get('enccode');
		var hpercode =$.session.get('hpercode');
		$('#formIden_assess').val('insert');
		initSocialServicewizard(enccode,hpercode);
		$('#dateasof').val(getTimeLocale());
	});
</script>

<input name="module" id ="module" type="hidden" value="socialservice">

<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/assessmentform.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/form_validations.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/assessment_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/family.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/family_delete.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/family_validation.js"></script>

	