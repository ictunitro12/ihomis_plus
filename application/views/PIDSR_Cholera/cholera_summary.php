<?php echo ViewSearchPatient();?>
<div class="card card-accent-success with-border"> 
		<div class="card-body">
			<form name="frmCholera" enctype="multipart/form-data" id="frmCholera">	
				<?php echo ViewCholeraForm();?>
			</form>		
		</div>
</div> 
<script type="text/javascript">
	$(document).ready(function()
	{	initcheck();
		$("#PatSearch").modal('show'); 
		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');
		uppercase();
		patientsearch();
		var d = new Date();
		var day = d.getDate();
		var month = d.getMonth() + 1; 
		var year = d.getFullYear();
		var hours = d.getHours();
	    var mins = d.getMinutes();
	    var seconds = d.getSeconds();

    document.getElementById("date").value = year + "-" + month + "-" + day + " " + hours + ":" + mins + ":" + seconds;
  
	});
	function patientsearch(){
		$('#patSearchbtn').click('click',function(){
			$("#PatSearch").modal('show'); 
	});
	}
</script>
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pidsr_cholera/cholera.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pidsr_cholera/pidsr_cholera.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pidsr_cholera/cholera_validation.js"></script>
