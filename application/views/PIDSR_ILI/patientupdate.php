<div class="card card-accent-success with-border"> 
		<input name="hpercode" id ="hpercode" type="hidden" value="<?php echo $this->uri->segment(6);?>">
		<input name="enccode" id ="enccode" type="hidden" value="">
		<input name="identification" id ="identification" type="hidden" value="update">
	
		<form name="frmILI" enctype="multipart/form-data" id="frmILI">	
		<?php echo ViewILIForm();?>
			</form>	
</div>
<script type="text/javascript">
	$(document).ready(function()
	{	
		var one = "<?php echo $this->uri->segment(3);?>";
		var two = "<?php echo $this->uri->segment(4);?>";
		var three = "<?php echo $this->uri->segment(5);?>";
		var hpercode = "<?php echo $this->uri->segment(6);?>";
	

		enccode = encodeURIComponent(encodeURIComponent(enccode));
		hpercode = encodeURIComponent(encodeURIComponent(hpercode));


		$("#enccode").val(one+ "/" +two +"/"+ three);
		var hpercode =$('#hpercode').val();
		var enccode =$('#enccode').val();
		$("#enccode").val(enccode);
		$("#info_hosppat_idno").val(hpercode);
		$("#formIden").val($("#identification").val());

		initIliEdit(enccode,hpercode);
		
		$("#PatientImage").prop('src', baseURL+'assets/img/avatars/none.png');

			uppercase();

		var d = new Date();
		var day = d.getDate();
		var month = d.getMonth() + 1; 
		var year = d.getFullYear();
		var hours = d.getHours();
	    var mins = d.getMinutes();
	    var seconds = d.getSeconds();

    document.getElementById("date").value = year + "-" + month + "-" + day + " " + hours + ":" + mins + ":" + seconds;
	});
</script>
<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
<script src="<?php echo base_url()?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pidsr_ili/ili.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pidsr_ili/pidsr_ili.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pidsr_ili/ili_validation.js"></script>
