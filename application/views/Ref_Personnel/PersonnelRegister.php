

<form  name="frmPersonnelRegister" enctype="multipart/form-data" id="frmPersonnelRegister">
	<input id="formIdenPersonnel" type="hidden" name="formIdenPersonnel">
	<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
	<?php echo ViewPersonnelRegistration();?>
</form>

<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/ref_personnel/personnel_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/ref_personnel/addPersonal.js"></script>

<script type="text/javascript">
$(function(){
	$("#ImageSave").prop('src', '../assets/img/avatars/none.png');	
	initAdd();
});
</script>


