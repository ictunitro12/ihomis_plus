<div class="row">
	<div class="col-sm-12">	
		<div class="card card-accent-success">
			<div class="card-header " >
				<div class="card-title h4 text-success" style="vertical-align: middle;"> 
				<div class="h4 text-success  text  float-left" style="vertical-align: middle;"><i class="fa fa-th-list"></i> Laboratory </div>
				<div class="btn-group btn-md float-right">
				<a type="button" href ="<?php echo base_url()?>Laboratory" class="btn btn-md btn-outline-success mb-2 "><i class="fa fa-home"></i> Home</a>
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
<script>
	var  enccode = '<?php echo $this->uri->segment('3');?>';
	var  hpercode = '<?php echo $this->uri->segment('4');?>';
	$(function(){
		$("#container").load(baseURL+"Laboratory/viewpatientorders",function(){
			CaseInformation(atob(enccode));
			PatientData(atob(hpercode));
			patientOrder(atob(enccode));
		});
	});
</script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patientrecord/patientrecords.js"></script>
<script src="<?php echo base_url()?>assets/scripts/laboratory/_patientorder.js"></script>
<script src="<?php echo base_url()?>assets/scripts/laboratory/_patientorder.js"></script>
<script src="<?php echo base_url()?>assets/scripts/laboratory/_generateslip.js"></script>