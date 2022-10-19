<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto">
			<span class="h3  text-success"><i class="<?php echo $icon?>"></i> <?php echo $header;?> <small><?php echo $subheader;?></small></span>
		</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button class ="btn btn-success btn-md Add" id="btnModule_Add">
					<i class="fa fa-plus"></i> 
					</button>
				</div>
			</div>	
		</div>
	</div>
		<div class="card-body table-responsive">
				<table id="moduleList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Comment</th>
							<th>Status</th>
							<th width="90px"></th>
						</tr>
					</thead>
				</table>
			</div>
	</div>
	<?php $this->load->view('Modules/_moduleModal.php')?>
	<?php $this->load->view('Modules/_moduleFunctions.php')?>
	<script>
		$(function(){
			moduleList();
		});
	</script>
	<script src="<?php echo base_url()?>assets/scripts/modules/module.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/modules/module_function.js"></script>