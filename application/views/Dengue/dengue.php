<style>

table#DengueTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto">
			<div class="h3 text text-success"> 
			<i class="fa fa-th-list"></i>
			&nbsp<?php echo $header;?>
			</div>
		</div>

		<div class="col-md-6 col-md-auto">
		<div class="btn-group pull-right" role="group" aria-label="">
		<a href="<?php echo site_url('#');?>" data-toggle="tooltip" title="Register Patient" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
		
		</a>
		</div>
		</div>	
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="DengueTable" class="table table-sm table-striped table-borderless table-condensed table-hover ">
			<thead class="thead-dark">
				<tr>
					<th>HOSPITAL RECORD NUMBER</th>
					<th>PATIENT NAME</th>
					<th>DATE OF ADMISSION / CONSULTATION</th>
					<th>TYPE OF ENCOUTER</th>
					<th>PROVIDER</th>
					<th width="80px"></th>
				</tr>
			</thead>
			<tfoot class="thead-dark">
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			</tfoot>
		</table>
	</div>
	<div class="card-footer">
	</div>
</div>

<script type="text/javascript">
$(document).ready(function()
	{
	 Dengue();
	});
	
function Dengue()
	{
	var data = new Object();
	data.id = "DengueTable";
	data.link = baseURL+"Dengue/Dengue_DataLoad/";
	data.type = "POST";
	loadTable(data);
	}
</script>