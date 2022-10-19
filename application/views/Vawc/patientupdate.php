<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url() ?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>


<div class="card card-accent-success with-border"> 
		<div class="card-body">
			<!-- <form name="frmVawc" enctype="multipart/form-data" id="frmVawc">	 -->
				<?php echo ViewVawcForm();?>
			<!-- </form>-->
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function()
	{	
		var enccode = atob('<?php echo $this->uri->segment(3);?>');
		var hpercode = atob('<?php echo $this->uri->segment(4);?>');

		$("#enccode").val(enccode);
		$("#hpercode").val(hpercode);

		$("#encountercode").val(enccode);
		$("#info_hosppat_idno").val(hpercode);
		$("#formIden").val($("#identification").val());

		initVawcEdit(hpercode,enccode);
		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');
		$("#PatSearch").modal("show");
		uppercase();
	});
</script>
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">


<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>

<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/vawc/vawcs.js"></script>
<script src="<?php echo base_url()?>assets/scripts/vawc/vawc_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/vawc/vawc.js"></script>
<script src="<?php echo base_url()?>assets/scripts/chronic/chronic.js"></script>
