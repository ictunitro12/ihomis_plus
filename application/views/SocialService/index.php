<div class="row">
	<div class="col-md-3">
		<?php echo ViewPatientInformation();?>
		<?php echo ViewSearchPatient();?>
	</div>
	<div class="col-md-9">
		<?php  $this->load->view('PatientRecords/caseInformation.php');?>
		<div class="card card-accent-success">
			<div class="card-body table-responsive">
				<div class="row">
					<div class="col-md">
						<h4 class="text text-success"><i class="fa fa-heartbeat"></i> <?php echo $header;?> <?php echo $subheader;?></h4>
					</div>
					<div class="col-md">
						<div class="btn-group pull-right" role="group" aria-label="">
							<button type="button" id="hey" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" onclick="PatSearch()" data-original-title="Search Patient" data-toggle="tooltip">	<i class="fa fa-search"></i> Search Patient</button>
						</div>
					</div>
				</div>
				<ul class="nav nav-tabs nav-justified" id="tabSocialService" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success" id="mss-tab" data-toggle="tab" href="#mss" role="tab" aria-controls="mss" a><i class="fa fa-file-pdf fa-2x"></i>&nbsp Classification and Assessment Form</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="fund-tab" data-toggle="tab" href="#fund" role="tab" aria-controls="fund"><i class="fa fa-money fa-2x"></i>&nbsp Fund Source/s</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="disc-tab" data-toggle="tab" href="#disc" role="tab" aria-controls="disc"><i class="fa fa-percent fa-2x"></i>&nbsp Discount/s</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="maip-tab" data-toggle="tab" href="#maip" role="tab" aria-controls="maip"><i class="fa fa-money fa-2x"></i>&nbsp MAIP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="promi-tab" data-toggle="tab" href="#promi" role="tab" aria-controls="promi"><i class="fa fa-file fa-2x"></i> Promissory Note</a>
					</li>
				</ul>	
				<div class="tab-content" id="tabSocialServicecontent">
					<br>
					<?php $this->load->view('SocialService/tab_mss.php');?>
					<?php $this->load->view('SocialService/tab_fundsource.php');?>
					<?php $this->load->view('SocialService/tab_discount.php');?>
					<?php $this->load->view('SocialService/tab_maip.php');?>
					<?php $this->load->view('SocialService/tab_promissory.php');?>
				</div>
			</div>
		</div>
	</div>
</div>
<input name="module" id ="module" type="hidden" value="socialservice">
<input name="enccode" id ="enccode" type="hidden">
<input name="hhpercode" id ="hhpercode" type="hidden">


<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>


<script src="<?php echo base_url()?>assets/scripts/SocialService/assessmentform.js"></script>
<script src="<?php echo base_url()?>assets/scripts/SocialService/socialservice.js"></script>
<script src="<?php echo base_url()?>assets/scripts/SocialService/socialservice_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/SocialService/socialservice_delete.js"></script>



