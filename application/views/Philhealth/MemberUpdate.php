<form  name="frmMemberProfile" enctype="multipart/form-data" id="frmMemberProfile">
<input name="phicnum" id ="phicnum" type="hidden" value="<?php echo $this->uri->segment(3);?>">
<input id="formIden" type="hidden" name="formIden">
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<?php echo ViewMemberRegistration();?>
</form>
<?php echo ViewSearchPatient();?>
<script src="<?php echo base_url()?>assets/scripts/philhealth/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/philhealth/member_registration.js"></script>
<script src="<?php echo base_url()?>assets/scripts/philhealth/member_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/philhealth/member_validation.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var phicnum =$('#phicnum').val();
	initFormEdit(phicnum);
});
</script>