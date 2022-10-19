<style>

table#tblGeneric.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
					<div class="card card-accent-success">
							<h3 class="card-header">
					<div class="text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Generic Core List
						</div>
						</h3>
							<div class="card-body">
								<table id="tblGeneric" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
									<thead>
										<tr class="thead-dark">
											<th width="50px">Code</th>
											<th>Description</th>
											<th>Status</th>
											<th width="50px"></th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="card-footer">
							
							</div>
						</div>
<script type="text/javascript">
	$(document).ready(function()
	{
		GenericList();
    });
	
	function GenericList()
	{
	var data = new Object();
	data.id = "tblGeneric";
	data.link = "<?php echo site_url('Ref_Item/GenericList');?>";
	data.type = "POST";
	data.coldef =[
	{	
		targets: [2],
		searchable:false,
		orderable:false,
		render: function (data,type,row) 
		{
			switch(data)
			{
				case 'A' : return '<div class="text text-success"><i class="fa fa-check"></i>&nbsp ACTIVE </div>'; break;
				case 'I' : return '<div class="text text-success"><i class="fa fa-remove"></i>&nbsp INACTIVE </div>'; break;
				default  : return 'N/A';
			}
		},
	},
	];
	loadTable(data);
	}
	
</script>