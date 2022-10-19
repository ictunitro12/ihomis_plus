<div class="row">
	<div class="col-md-3">
		<?php echo ViewPatientInformation();?>
	</div>
<div class="col-md-9">
	
		<?php  $this->load->view('PatientRecords/caseInformation.php');?>
		
		<?php  $this->load->view('Doctorsorder/docOrdLog.php');?>
		<?php  $this->load->view('Doctorsorder/OrderModal.php');?>
		<?php  $this->load->view('Doctorsorder/procedureModal.php');?>
		
		<?php  $this->load->view('Doctorsorder/supplyModal_Cancel.php');?>
		<?php  $this->load->view('Doctorsorder/supplyModal_Delete.php');?>
		<?php  $this->load->view('Doctorsorder/supplyModal_multiForm.php');?>
		<?php  $this->load->view('Doctorsorder/supplyModal_EditForm.php');?>
		
		<?php  $this->load->view('Doctorsorder/prescriptionModal_EditForm.php');?>
		<?php  $this->load->view('Doctorsorder/prescriptionModal_Delete.php');?>
		<?php  $this->load->view('Doctorsorder/prescriptionModal_Cancel.php');?>
		<?php  $this->load->view('Doctorsorder/prescriptionModal_multiForm.php');?>
		<?php  $this->load->view('Doctorsorder/dietModal.php');?>
</div>
</div>		
<script type="text/javascript">
		var enccode = atob('<?php echo $this->uri->segment(3)?>');
		var hpercode = atob('<?php echo $this->uri->segment(4)?>');
</script>
<script  src="<?php echo base_url()?>assets/scripts/order/doctororder.js"></script>
<script  src="<?php echo base_url()?>assets/scripts/doctor/doctor.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>

<script src="<?php echo base_url()?>assets/scripts/order/examDocOrd.js"></script>


<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_editForm.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_multiForm.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_cancel.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_rx.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/presDocOrd_delete.js"></script>

<script src="<?php echo base_url()?>assets/scripts/order/supDocOrd.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/dietDocOrd.js"></script>
<script src="<?php echo base_url()?>assets/scripts/order/dischDocOrd.js"></script>

