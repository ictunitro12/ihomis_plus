  <?php echo ViewSearchPatient();?>
<div class="card card-accent-success with-border"> 
		<div class="card-body">
			<form name="frmMalariaPat" enctype="multipart/form-data" id="frmMalariaPat">	
				<?php echo ViewMalariaPatForm();?>
			</form>		

		</div>
	</div> 

 <script type="text/javascript">
	$(document).ready(function()
	{	
		/*
		$("#PatSearch").modal('show');
		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');
		uppercase();*/
	});
</script>
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/malariapat/malariapat.js"></script>
<script src="<?php echo base_url()?>assets/scripts/malariapat/malariapat_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/utilities.js"></script>

