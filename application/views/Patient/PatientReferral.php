
<form  name="frmPatientProfile" enctype="multipart/form-data" id="frmPatientProfile">
<input id="formIden" type="hidden" name="formIden">
<input id="referralFromLogId" type="hidden" name="referralFromLogId" value="<?php echo $referralFromLogId; ?>">
	<?php echo ViewPatientProfile();?>
</form>
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.js"></script>
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_registration.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/phie/phiegetdemo.js"></script>
<script type="text/javascript">
$(function(){
	initFormReferral();
});
</script>


