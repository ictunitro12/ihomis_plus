	<div class="w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto	">
			<span class="h3  text-success"><i class="<?php echo $icon?>"></i> <?php echo $header;?> <small><?php echo $subheader;?></small></span>
		</div>
		<div class="col-md-6 col-md-auto">
			<div class="btn-group pull-right" role="group" aria-label="">
			
				<a href="<?php echo site_url('Controller/Add');?>" data-toggle="tooltip" title="" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i></a>
			</div>
		</div>	
		</div>
	</div>
	
	<div class="card-body table-responsive">
		<table id="ControllerTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
			<thead class="thead-dark">
				<tr>
					<th></th>
					<th>NAME</th>
					<th>TYPE</th>
					<th>STATUS</th>
					<th width="50px"></th>
			
				</tr>
			</thead>
			<tfoot class="thead-dark">
			<tr>
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
	<script src="<?php echo base_url()?>assets/scripts/controller/index.js"></script>
	<script type="text/javascript">
	$(function()
	{
		ControllerList();
	});
	</script>

