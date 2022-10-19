 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2-bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
 <script src="<?php echo base_url() ?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
 <div class="card card-accent-success with-border">
 	<div class="card-body">
 		<?php echo ViewFamilyPlanningForm(); ?>
 	</div>
 </div>

 <script type="text/javascript">
 	$(document).ready(function() {
 		
 		var enccode = $.session.get('enccode');
		var hpercode =$.session.get('hpercode');
		
 		uppercase();
 		var typecode = atob('<?php echo $this->uri->segment(3);?>');
 		var entrybycode = atob('<?php echo $this->uri->segment(4);?>');

 		$("#encountercode").val(enccode);
 		$("#hpercodee").val(hpercode);
 		$("#typecl").val(typecode);
 		$("#datereport").val(getTimeLocale());
 		setEmployees(entrybycode);
 		$("#formIden_famplan").val('insert');
 		initMaxwizard(hpercode);
 	});
 </script>
 
 <script src="<?php echo base_url() ?>assets/plugin/select2/js/select2.min.js"></script>
 <input name="base_url" id="base_url" type="hidden" value="?php echo base_url();?>">
 <script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url() ?>assets/scripts/familyplanning/familyplanning.js"></script>
 <script src="<?php echo base_url() ?>assets/scripts/familyplanning/familyplanning_validation.js"></script>
