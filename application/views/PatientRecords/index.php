<?php  $this->load->view('PatientRecords/recordLog.php');?>
<?php  $this->load->view('PatientRecords/vitalSignModal.php');?>
<?php  $this->load->view('PatientRecords/BMIModal.php');?>
<?php  $this->load->view('PatientRecords/physicalModal.php');?>
<?php  $this->load->view('PatientRecords/historyModal.php');?>
<?php  $this->load->view('PatientRecords/systemReviewModal.php');?>
<?php  $this->load->view('PatientRecords/diagnosisModal.php');?>
<?php  $this->load->view('PatientRecords/progressnotesModal.php');?>
<?php  $this->load->view('PatientRecords/doctorsModal.php');?>
<?php  $this->load->view('PatientRecords/_homemeds.php');?>
<script type="text/javascript">

		var enccode = atob('<?php echo $this->uri->segment(3)?>');
		var hpercode = atob('<?php echo $this->uri->segment(4)?>');
		
	$(function()
	{
		initPatientRecords(enccode,hpercode);		
	});
</script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/vitalsigns.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/BMI.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/history.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/signssymptoms.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/physical.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/systemreview.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/diagnosis.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/doctor.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/crsward.js"></script>
<script src="<?php echo base_url()?>assets/scripts/phie/phiepush_patientdata.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/progressnotes.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/specialinstructions.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/homemeds.js"></script>



