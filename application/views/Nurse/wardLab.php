<div class="row">
	<div class="col-md-3">
		<?php echo ViewPatientInformation();?>
	</div>
<div class="col-md-9">
		<?php  $this->load->view('PatientRecords/caseInformation.php');?>
		<?php  $this->load->view('Nurse/wardlabResult.php');?>
</div>
</div>
	<script src="<?php echo base_url()?>assets/scripts/nurse/nurse.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/nurse/results.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
<script type="text/javascript">
	$(function()
	{
		var enccode = atob('<?php echo $this->uri->segment(3);?>');
		var hpercode = atob('<?php echo $this->uri->segment(4);?>');
		 initResultList(enccode,hpercode);
	});
</script>