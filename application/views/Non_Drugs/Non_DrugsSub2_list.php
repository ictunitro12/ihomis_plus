
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
				<a class="btn btn-success" href="<?php echo site_url('Non_Drugs/Createsub2');?>"><i class="fa fa-plus"></i></a>
			</div>
		</div>	
		</div>
	</div>
	
	<div class="card-body table-responsive">
		<table id="Non_DrugsSub2" class="table table-sm table-hover  table-bordered table-condensed table-striped">
					  <thead class="thead-dark">
						<tr>
						<th>Code</th>
						<th >Sub1 Category</th>
						<th>Sub2 Category Code</th>
						<th>Status</th>
						<th>Stock No.</th>
						<th>Barcode</th>
						<th>Description</th>
						<th>UOM</th>
						<th>Beginning Balance</th>
						<th>Running Balance</th>
						<th>Pharmaceutical?</th>
						<th>Reorder Level</th>
						<th width="50px">Action</th>
						</tr>
					</thead> 
		</table>	
	</div>
</div>

<script type="text/javascript">	
		$(document).ready(function() {
		uppercase();
		Non_DrugsSub2();
		});
	function Non_DrugsSub2()
	{
		var data = new Object();
		data.id = "Non_DrugsSub2";
		data.link = "<?php echo site_url('Non_Drugs/Non_DrugsSub2_list/');?><?php echo $this->uri->segment(3);?>";
		data.type = "POST";
		data.coldef =[
		{	
			targets: [3,10],
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
		}
		];
		loadTable(data);
	}
	</script>

