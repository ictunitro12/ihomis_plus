<div class="row">
	<div class="col-sm-12">	
		<div class="card card-accent-success">
			<div class="card-header " >
				<div class="card-title h4 text-success" style="vertical-align: middle;"> 
				<div class="h4 text-success  text  float-left" style="vertical-align: middle;"><i class="fa fa-th-list"></i> Pharmacy</div>
				<div class="btn-group btn-md float-right">
				<a type="button" href ="<?php echo base_url()?>Pharmacy" class="btn btn-md btn-outline-success mb-2 "><i class="fa fa-home"></i> Home</a>
				<button type="button" name="searchPatient" class="btn btn-md btn-outline-success mb-2 "><i
				class="fa fa-search"></i> Search Patient </button>
				<button type="button" name="medicineLookup" class="btn btn-md btn-outline-success mb-2 "><i class="fa fa-pills"></i> Lookup</button>
				</div>
				</div>
			</div>
			<div class="card-body">
				<?php echo ViewPatientInformation2();?>
				<div id="container"></div>
			</div>
		</div>	
	</div>
</div>
<?php echo ViewSearchPatient();?>
<input type="hidden" id="module" value='issueDrug'>
<script>
	var Module = $("module").val();
	$(function(){	
		initPatientTransaction();
	});

</script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_issueItem.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_returnItem.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_cancelOrder.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/patient_transaction.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>

