
	<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto">
			<span class="h3  text-success"><i class="<?php echo $icon?>"></i> <?php echo $header;?> <small><?php echo $subheader;?></small></span>
		</div>
		<div class="col-md-6 col-md-auto">
			<div class="btn-group pull-right" role="group" aria-label="">
				<a href="<?php echo site_url('Auth/create_user');?>"  id="createUser" data-toggle="tooltip" title="" class="btn btn-success btn-md btn-ladda add" data-style="zoom-in"><i class="fa fa-plus"> </i></a>
				<a href="<?php echo site_url('Auth/settings');?>" id="settings" data-toggle="tooltip" title="" class="btn btn-success btn-md btn-ladda add" data-style="zoom-in"><i class="fa fa-cog"> </i></a>
			</div>	
		</div>	
		</div>
	</div>
		<div class="card-body table-responsive">
				<table id="userLists" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>Employee ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Status</th>
							<th width="90px"></th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	
	<script>
		$(function(){
			userLists();
		});
	</script>
	<script src="<?php echo base_url()?>assets/scripts/auth/index.js"></script>