<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<?php echo ViewSearchPatient();?>
		<div class="card card-accent-success">
		<div class="card-header">
					<div class="card-title text-success h4"><i class="fa fa-th-list"></i>&nbsp <?php echo $header;?></div>
				</div>
		<div class="card-body">
		<div class="row">
			<div class="col-sm-2">
				<?php $this->load->view('Cashier/_menuCashier.php');?>
			</div>
			<div class="col-sm-10">
				<div class="card-body">
					<div class="tab-content" id="myTabContent">
						<div id="container"></div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		
	<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
<script src="<?php echo base_url()?>assets/scripts/cashier/patient_transaction.js"></script>
<script src="<?php echo base_url()?>assets/scripts/cashier/cashier.js"></script>
<script src="<?php echo base_url()?>assets/scripts/cashier/receipt.js"></script>
<script src="<?php echo base_url()?>assets/scripts/cashier/charges.js"></script>

	
