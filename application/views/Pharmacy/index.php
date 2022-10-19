<script src="https://code.highcharts.com/highcharts.js"></script>	
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div class="row">
	<div class="col-sm-9">
		<div class="card card-accent-success">
			<div class="card-body">
				<div id="container"><i class="fa fa-spinner fa-spin text-success col d-flex justify-content-center" style="font-size:50px;  margin: 0 auto; float: none;  margin-bottom: 10px;"></i></div>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<?php $this->load->view('pharmacy/_menuPharmacy.php');?>
	</div>
	<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
</div>
<?php echo ViewSearchPatient();?>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/reports_.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/pharmacy.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_patient.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/deliveries.js"></script>