<div class="row">
	<div class="col-md-3">
		<?php echo ViewPatientInformation();?>
		<?php echo ViewSearchPatient();?>
</div>
<div class="col-md-9">
	
	<div class="card card-accent-success">
		
		<div class="card-body table-responsive">
	
			<div class="row">
				<div class="col-md">
					<h4 class="text text-success"><i class="<?php echo $icon;?>"></i> <?php echo $header;?> <?php echo $subheader;?></h4>
				</div>
				<div class="col-md">				
					<div class="btn-group float-md-right" role="group" aria-label="">
						<button type ="button" id = "btnPatientSearch" title=""  class="btn btn-outline-success" data-style="zoom-in"><i class="fa fa-search"></i> Search Patient</button>
						&nbsp
						<div class="btn-group" role="group">
							<button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-print"></i> Print Bill
							</button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								<a class="dropdown-item" id="btnFinalBill"><i class="fa fa-file-pdf-o"></i>&nbsp Final Bill</a>
							</div>
						</div>
					</div>
				</div>
			</div>			
			<hr>
			<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
			  <li class="nav-item">
				<a class="nav-link text text-success" id="charges-tab" data-toggle="tab" href="#charges" role="tab" aria-controls="charges" aria-expanded="true"><i class="fa fa-money fa-2x"></i>&nbsp Charge/s</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text text-success" id="disc-tab" data-toggle="tab" href="#disc" role="tab" aria-controls="disc"><i class="fa fa-percent fa-2x"></i>&nbsp Discount/s</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text text-success" id="adj-tab" data-toggle="tab" href="#adj" role="tab" aria-controls="adj"><i class="fa fa-hand-o-down fa-2x"></i>&nbsp Adjustment/s</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text text-success" id="prof-tab" data-toggle="tab" href="#prof" role="tab" aria-controls="prof"><i class="fa fa-stethoscope fa-2x"></i> Professional Service</a>
			  </li>
			  <!--li class="nav-item">
				<a class="nav-link text text-success" id="mss-tab" data-toggle="tab" href="#mss" role="tab" aria-controls="mss"><i class="fa fa-heartbeat fa-2x"></i> Mss</a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link text text-success" id="web-tab" data-toggle="tab" href="#web" role="tab" aria-controls="web"><i class="fa fa-hand-o-right fa-2x"></i> Webpais</a>
			  </li-->
			  <li class="nav-item">
				<a class="nav-link text text-success" id="out-tab" data-toggle="tab" href="#out" role="tab" aria-controls="out"><i class="fa fa-pills fa-2x"></i> Outside Charge/s</a>
			  </li>
			</ul>
		<div class="tab-content" id="tabChargescontent">
		<br>
		<!--button type ="button" id = "btnPatientSearch" title=""  class="btn btn-outline-success mb-1" data-style="zoom-in"><i class="fa fa-search"></i> Search Patient</button-->
			<?php $this->load->view('Billing/_tabcharges.php');?>
			<?php $this->load->view('Billing/_tabdiscounts.php');?>
			<?php $this->load->view('Billing/_tabadjust.php');?>
			<?php $this->load->view('Billing/_tabprofserv.php');?>
			<?php $this->load->view('Billing/_tabmss.php');?>
			<?php $this->load->view('Billing/_tabwebpais.php');?>
			<?php $this->load->view('Billing/_taboutside.php');?>
		</div>
		</div>
		</div>
	</div>
</div>
	<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
	<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/billing/billing.js"></script>







