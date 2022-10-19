
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
				<a class="btn btn-success" href="<?php echo site_url('Non_Drugs/Createsub3');?>"><i class="fa fa-plus"></i></a>
			</div>
		</div>	
		</div>
	</div>
	
	<div class="card-body table-responsive">

<table id="Non_DrugsSub3" class="table table-sm table-hover  table-bordered table-condensed table-striped">
              <thead  class="thead-dark">
                <tr>
                <th></th>
                <th>Description</th>
                <th>Purchase Price</th>
                <th>Selling Price</th>
                <th>Status</th>
                <th>Unit of Measure?</th>
                <th>Date as of</th>
				<th width="50px">Action</th>
                </tr>
            </thead> 
</table>	
</div>
</div>

	
<script type="text/javascript">	
		$(document).ready(function() {
			uppercase();
			Non_DrugsSub3();
		});
	function Non_DrugsSub3()
	{
		var data = new Object();
		data.id = "Non_DrugsSub3";
		data.link = "<?php echo site_url('Non_Drugs/Non_DrugsSub3_list/');?><?php echo $this->uri->segment(3);?>";
		data.type = "POST";
		data.coldef =[
		{	
			targets: [4],
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
