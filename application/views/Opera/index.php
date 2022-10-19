<div class="row">
	<div class="col-md-3">
		<?php echo ViewPatientInformation();?>
		<?php echo ViewSearchPatient();?>
</div>
<div class="col-md-9">
		<?php  $this->load->view('PatientRecords/caseInformation.php');?>
	<div class="card card-accent-success">
		<div class="card-body table-responsive">
			<h4 class="text text-success"><i class="<?php echo $icon;?>"></i> <?php echo $header;?> <?php echo $subheader;?></h4>
			<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
			  <li class="nav-item">
				<a class="nav-link text text-success active" id="sched-tab" data-toggle="tab" href="#sched" role="tab" aria-controls="sched" aria-expanded="true"><i class="fa fa-calendar"></i>&nbsp Schedule</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text text-success" id="result-tab" data-toggle="tab" href="#result" role="tab" aria-controls="result"><i class="fa fa-file"></i>&nbsp Result/s</a>
			  </li>
			 
			
			
			</ul>
		<div class="tab-content" id="tabChargescontent">
		<br>
		<button type ="button" id = "btnPatientSearch" title=""  class="btn btn-success mb-1" data-style="zoom-in"><i class="fa fa-search"></i></button>
		<?php $this->load->view('opera/_tabsched.php');?>
		</div>
		</div>
		</div>
	</div>
</div>
	<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
	<script type="text/javascript">
	$(function()
	{
		if(($.session.get('Operahpercode') !== undefined) && ($.session.get('Operaenccode') !== undefined))
		 {
			initOpera($.session.get('Operaenccode'),$.session.get('Operahpercode'));
		 }
		 else
		 {
			$("#PatSearch").modal('show');
			$("#PatientImage").prop('src','assets/img/avatars/none.png');
		 }
	});
	</script>
	<script src="<?php echo base_url()?>assets/scripts/doctor/doctor.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/opera/opera.js"></script>
	

