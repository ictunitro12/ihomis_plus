<div class="col-md-12" id="sublist">
	<div class="w-auto card card-accent-success">
	
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto">
			<span class="h3  text-success"><i class="<?php echo $icon?>"></i> <?php echo $header;?> <small><?php echo $subheader;?></small></span>
		</div>
		<div class="col-md-6 col-md-auto">
			<div class="btn-group pull-right" role="group" aria-label="">
			
				<a href="<?php echo site_url('Menus/Add');?>" data-toggle="tooltip" title="" class="btn btn-success btn-md btn-ladda add" data-style="zoom-in"><i class="fa fa-plus"> </i></a>
			</div>
				
		</div>	
		</div>
		
	</div>
		<div class="card-body table-responsive">
			
				<table id="menuList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Icon</th>
							<th>wSub</th>
							<th>Status</th>
						
							<th width="50px"></th>
						</tr>
					</thead>
					<tfoot class="thead-dark">
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						
						<th width="50px"></th>
					</tr>
					</tfoot>
					
				</table>
				
			</div>
		</div>
	</div>
	<script>
		$(function(){
			menuList();
		});
	</script>
	<script src="<?php echo base_url()?>assets/scripts/menu/index.js"></script>