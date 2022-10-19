<div class=" w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto	">
			<div class="h3 text text-success"> 
			<i class="fa fa-th-list"></i>
			&nbsp<?php echo $header;?>
			&nbsp <small><?php echo $subheader;?></small>
			</div>
		</div>
		
		<div class="col-md-6 col-md-auto">
			<div class="btn-group pull-right" role="group" aria-label="">
				<a class="btn btn-success" href="<?php echo site_url('DrugsandMedicines/Create');?>"><i class="fa fa-plus"></i></a>
				<a class="btn btn-success" href="<?php echo site_url('DrugsandMedicines/TypeofAccount/DRUME');?>">Type of Account</a>
			</div>
		</div>	
		</div>
	</div>
	
	<div class="card-body table-responsive">
		<table id="DrugsandMedicines" class="table table-sm table-hover  table-bordered table-condensed table-striped">
				<thead class="thead-dark">
					<tr>
						<th></th>
						<th width="120px">Drug<small>(Classification)</small></th>
						<th width="220px">Generic</th>
						<th width="120px">Edpms</th>
						<th width="120px">Brand Name</th>
						<th width="120px">Strength(#)</th>
						<th width="110px">Strength</th>
						<th>Form</th>
						<th>Route</th>
						<th>Salt</th>
						<th>Package</th>
						<th width="50px">Status</th>
						<th width="250px">Remarks</th>
						<th>PNDF?</th>
						<th width="50px">Action</th>
					</tr>
				</thead> 
		</table>
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function() {
			DrugsMedList();
		});
	function DrugsMedList()
	{
		var data = new Object();
		data.id = "DrugsandMedicines";
		data.link = "<?php echo site_url('DrugsandMedicines/DrugsandMedicines_list');?>";
		data.type = "POST";
		data.coldef =[
		{
			targets: [0],
			visible:false,
			orderable:false,
		},
		{	
			targets: [11,13],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'A' : return '<span class="text text-success"><i class="fa fa-check"></i>&nbsp Active</span>'; break;
					case 'I' : return '<span class="text text-danger"><i class="fa fa-remove"></i>&nbsp Inactive</span>'; break;
					case 'Y' : return '&nbsp YES'; break;
					case 'N' : return '&nbsp NO'; break;
					default  : return 'N/A';
				}
			},
		},
		];
		loadTable(data);
	}
	</script>

