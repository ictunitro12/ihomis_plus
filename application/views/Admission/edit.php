<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>	
	<div class="card card-accent-success with-border"> 
		<div class="card-body">
			<div class="h3 text text-success card-title"><i class="fa fa-user-plus"></i> Admission</div>
				<?php echo ViewAdmitPatientSummary();?>
				<?php echo ViewAdmissionProcess();?>
				<input id ="enc" type="hidden" value="<?php echo $this->uri->segment(3)?>" >	
		</div>
	</div>
<input name="module" id ="module" type="hidden" value="admission">
<script src="<?php echo base_url()?>assets/plugin/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_registration.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_validation.js"></script>
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js"></script>
<script src="<?php echo base_url()?>assets/scripts/admission/editAdmission.js"></script>
<script src="<?php echo base_url()?>assets/scripts/ref_ward/ref_ward.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient_record/_roomManage.js"></script>
<script src="<?php echo base_url()?>assets/scripts/admission/admission.js"></script>
<script src="<?php echo base_url()?>assets/scripts/admission/admission_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/vitalsigns.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/bmi.js"></script>


	