		<div class="card card-accent-success">
		<div class="card-header">
				<?php echo ViewPatientInformation2();?>
			<div class="row">
			<div class="col-md-4 col-md-auto">
				<div class="h3 text text-success"> 
				<i class="fa fa-h-square"></i>
					&nbsp <?php echo $header;?>
					&nbsp <small><?php echo $subheader;?></small>
				</div>
			</div>
			</div>
		</div>
		<div class="card-body">	
		<div class="row">
		<div class="col-md-2">
			<div class="text-success h5"><i class="fa fa-th-list"></i> Menu</div>
				<div class="list-group" id="list-tab" role="tablist">
				<a class="list-group-item list-group-item-action active" id="profile-tab" data-toggle="list" href="#profile" role="tab" aria-controls="profile"> <i class="fa fa-th-list"></i> Tooth Profile</a>
				<a class="list-group-item list-group-item-action" id="procedures-tab" data-toggle="list" href="#procedure" role="tab" aria-controls="procedures"> <i class="fa fa-flask"></i> Procedures</a>
				<a class="list-group-item list-group-item-action" id="history-tab" data-toggle="list" href="#history" role="tab" aria-controls="messages"> <i class="fa fa-th-list"></i> History</a>
				</div>
		</div>
		<div class="col-md-10">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
							<?php $this->load->view('Dental/adults.php');?>
					</div>
					<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
					<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
					<div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>


	
