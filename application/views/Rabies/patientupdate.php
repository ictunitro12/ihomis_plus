<div class="card card-accent-success with-border">
	<input type="hidden" name="hpercode" id="hpercode" value="">
	<input type="hidden" name="enccode" id="enccode" value="">
	<input type="hidden" name="identification" id="identification" value="update">
	<div class="card-body">
		<form name="frmrabies" id="frmrabies" enctype="multipart/form-data">
			<?php echo ViewRabiesForm(); ?>
		</form>
	</div>
</div>
<?php echo ViewSearchPatient(); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#PatientImage").prop('src', baseURL + 'assets/img/avatars/none.png');

		var enccode = atob('<?php echo $this->uri->segment(3); ?>');
		var hpercode = atob('<?php echo $this->uri->segment(4); ?>');

		enccode = encodeURIComponent(encodeURIComponent(enccode));
		hpercode = encodeURIComponent(encodeURIComponent(hpercode));

		$("#enccode").val(enccode);
		$("#hpercode").val(hpercode);
		$("#encountercode").val(enccode);
		$("#percode").val(hpercode);
		$("#formIden").val($("#identification").val());

		initRabiesEdit(hpercode, enccode);
		uppercase();
	});
</script>
<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/scripts/rabies/rabies_validation.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/rabies/rabies.js"></script>