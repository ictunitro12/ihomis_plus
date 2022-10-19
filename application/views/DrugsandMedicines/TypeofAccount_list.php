
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
			<a class="btn btn-success" href="<?php echo site_url('DrugsandMedicines/Createtoa');?>"><i class="fa fa-plus"></i></a>
			<a class="btn btn-success" href="<?php echo site_url('DrugsandMedicines/TypeofAccount/DRUME');?>"><i></a>
			</div>
		</div>	
		</div>
	</div>
	
	<div class="card-body table-responsive">
<table id="TypeofAccount" class="table table-sm table-hover  table-bordered table-condensed table-striped">
              <thead class="thead-dark">
				<tr>
					<th rowspan="2"></th>
					<th rowspan="2" class ="text-center align-middle">Item Description</th>
					
					<th colspan="3" class ="text-center">Stocks</th>
					
					<th rowspan="2" class="align-middle">Date</th>
					<th rowspan="2"  width="50px"></th>
				</tr>
                <tr>
					
					<th class ="text-center">Beginning</th>
					<th class ="text-center">Stock</th>
					<th class ="text-center">Reorder</th>
				
					
                </tr>
            </thead> 
</table>
	</div>	
	</div>	

<script type="text/javascript">
            $(document).ready(function() {
            TypeofAccountList();
            });
			
			
	function TypeofAccountList()
	{
		var data = new Object();
		data.id = "TypeofAccount";
		data.link = "<?php echo site_url('DrugsandMedicines/TypeofAccount_list');?>/DRUME";
		data.type = "POST";
		data.coldef =[
		{
			targets: [0],
			visible:false,
			orderable:false,
		},
	
		];
		loadTable(data);
	}
	</script>
