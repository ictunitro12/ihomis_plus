<div class="row">
	<div class="col-md-9">
	<div class="card card-accent-success">
			<div class="card-body table-responsive">
				<div id="tableGroups">
					<?php include('_groups.php');?>
				 </div>
				 <div id="tableRoles">
		
				 </div>
				 <div id="tableModules">
			
				 </div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<?php $this->load->view('auth/_menuSettings.php');?>
	</div>
</div>
	<script src="<?php echo base_url()?>assets/scripts/auth/_groups.js"></script>
<script>
$(function(){
	initGroup();
})
</script>

