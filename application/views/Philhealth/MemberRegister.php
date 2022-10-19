<form name="frmMemberProfile" enctype="multipart/form-data" id="frmMemberProfile">
	<input id="formIden" type="hidden" name="formIden">
	<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
	<?php echo ViewMemberRegistration(); ?>
</form>

<!-- start processing modal -->
<?php $this->load->view('EClaims/_processingModal.php'); ?>
<!-- end processing modal -->

<?php echo ViewSearchPatient(); ?>



<script src="<?php echo base_url() ?>assets/scripts/philhealth/demographics.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/member_registration.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/member_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		initForm();
	});
</script>