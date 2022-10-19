<?php $this->load->view('nurse/FDARModal.php')?>
<style>

table#fdarList.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
<h4 class="card-header">
		<div class="clearfix">
				<div class="h4 text text-success float-left"> 
					<i class="fa fa-medkit"></i>
					&nbsp FDAR
				</div>
				<div class="h4 text text-success float-right"> 
					<button class="btn btn-md btn-success" onclick="addFDAR('<?php echo $enccode;?>','<?php echo $hpercode;?>')"><i class="fa fa-plus"></i></button>
				</div>
		</div>
		
	</h4>
<div class="card-body table-responsive">

	<table id="fdarList" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">							
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>Datelog</th>
				<th>Focus</th>
				<th>Data</th>
				<th>Action</th>
				<th>Response</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>							
		
	</table>

</div>
<div class="card-footer"></div>
</div>
