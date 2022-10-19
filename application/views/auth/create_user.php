<div class="row">
	<div class="col-md-3">
		<div class=" card card-accent-success">
		<div class="card-header">
			<div class="row">
			<div class="col-md-6 ">
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
		<input type="hidden" id="formIdenUser" name="formIdenUser">
		</form>
		</div>
	</div>
	</div>  
	<div class="col-md-12">
		<div class=" card card-accent-success">
		<div class="card-header">
			<div class="row">
			<div class="col-md-6 ">
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
		<input type="hidden" id="formIdenUser" name="formIdenUser">
		</form>
		</div>
	</div>
	</div>
</div>
<script src="<?php echo base_url()?>assets/scripts/auth/auth_validate.js"></script>
<script type="text/javascript">
   $(function(){
		uppercase();
		$('#formIdenUser').val('insert');
	});	
</script>