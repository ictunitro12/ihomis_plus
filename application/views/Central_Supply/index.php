<div class="row">
	<div class="col-md-10">
	<div class="card card-accent-success">
			<div class="card-body">
				<div id="container"></div>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<?php $this->load->view('Central_Supply/_menuCentralsupply.php');?>
	</div>
	<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
</div>
<?php echo ViewSearchPatient();?>
	<script src="<?php echo base_url()?>assets/scripts/centralsupply/centralsupply.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/centralsupply/docord.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/centralsupply/deliveries.js"></script>