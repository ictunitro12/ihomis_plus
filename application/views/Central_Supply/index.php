<div class="row">
	<div class="col-md-9">
	<div class="card card-accent-success">
			<div class="card-body">
				<div id="container"></div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
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
<script src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/fbd569b8768155c7a9a62568e66a64115887d7d0/dataTables.rowsGroup.js"></script>	

