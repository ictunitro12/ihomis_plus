<form  name="frmPatientProfile" enctype="multipart/form-data" id="frmPatientProfile">
	<input name="hpercode" id ="hpercode" type="hidden" value="<?php echo $this->uri->segment(3);?>">
	<input id="formIden" type="hidden" name="formIden">
	<?php echo ViewPatientProfile();?>
</form>
				
<script type="text/javascript">
$(document).ready(function()
{	
	var hpercode =$('#hpercode').val();
	initFormEdit(hpercode);
	enlargeImage('#ImageSave');
	$("#genpercode").prop('disabled',true);
});
</script>
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"  type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_registration.js"  type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_validation.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"  type="text/javascript"></script>



