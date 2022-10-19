	<div class="row">
		<div class="col-md-4">
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
					<form name="formMenu" id="formMenu">
						<?php  $this->load->view('menus/form.php');?>
						<input type="hidden" id="formIdenMenu" name="formIdenMenu">
					</form>
				</div>
			</div>
		</div>
	
	</div>

	<script type="text/javascript">
		$(function()
		{
			var id=<?php echo $this->uri->segment(3);?>;
			$('#menuID').val(id);
			
			initEdit(id);
		});
	</script>
	
	<script src="<?php echo base_url()?>assets/scripts/menu/menu.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/menu/editmenu.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/menu/menu_validate.js"></script>
