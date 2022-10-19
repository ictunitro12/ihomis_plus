  <div class="col-md-5	">
	<div class=" card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-5">
			<div class="h3 text text-success"> 
			<i class="fa fa-plus"></i>
			&nbsp<?php echo $header;?>
			&nbsp <small><?php echo $subheader;?></small>
			</div>
		</div>	
		</div>
	</div>
	<div class="card-body">
	<form name="formController" id="formController" method="post">
		<?php
			$this->load->view('Controller/form.php');
		?>
	<input type="hidden" id="formIdenController"  name="formIdenController">
	<input type="hidden" id="controllerID" name="controllerID" value="<?php echo $this->uri->segment(3);?>">
	</form>
	</div>
</div>
</div>
<script src="<?php echo base_url()?>assets/scripts/controller/controller_validate.js"></script>
<script src="<?php echo base_url()?>assets/scripts/controller/controller.js"></script>
<script type="text/javascript">
   $(function() {
			var id=$("#controllerID").val();
			$('#formIdenController').val('update');
			controllerInformation(id);
	});	
</script>