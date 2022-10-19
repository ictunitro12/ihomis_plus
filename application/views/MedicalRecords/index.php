<!--nicette-->
<div class="row">
	<div class="col-md-3">
		<?php echo ViewPatientInformation(); ?>
		<?php echo ViewSearchPatient(); ?>
	</div>
	<div class="col-md-9">
		<?php $this->load->view('MedicalRecords/records_log.php'); ?>
	</div>
	<input name="module" id="module" type="hidden" value="<?php echo $module; ?>">
</div>
	<?php $this->load->view('MedicalRecords/deathCert.php'); ?>
	<?php $this->load->view('PatientRecords/EPRModal'); ?>
	<?php $this->load->view('MedicalRecords/frmAdmit.php'); ?>
	<?php $this->load->view('MedicalRecords/frmOpd.php'); ?>
	<?php $this->load->view('MedicalRecords/frmER.php'); ?>
	<?php $this->load->view('MedicalRecords/frmResultAdm.php'); ?>
	<?php $this->load->view('MedicalRecords/frmNewBorn.php'); ?>
	<?php $this->load->view('MedicalRecords/frmLiveBirth.php'); ?>
	<?php $this->load->view('MedicalRecords/patientAlertmodal.php'); ?>
	<?php $this->load->view('MedicalRecords/frmReferral.php'); ?>

	<script>
		$(document).ready(function() {
			if(($.session.get('hpercode') !== undefined)) {
				initPatientRecord($.session.get('hpercode'));
			}else{

				$("#PatSearch").modal('show');
				$("#PatientImage").prop('src', 'assets/img/avatars/none.png');
			}
		});
		
		$('#searchPatient').on('click', function() {
			$.session.remove('hpercode');
			$("#PatSearch").modal('show');
		});
	</script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/medical_records.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patientrecord/patientrecords.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/alert.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/visits.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/death.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/newborn.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/referral.js"></script>

