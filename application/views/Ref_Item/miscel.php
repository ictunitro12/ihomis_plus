<style>

table#tblForm.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
   <h3 class="card-header">
      <div class="text text-success"> 
         <i class="fa fa-th-list"></i>
         &nbsp Forms
      </div>
   </h3>
   <div class="card-body table-responsive">
      <table id="tblForm" class="table table-sm table-striped  table-bordered table-condensedtable-hover ">
         <thead>
            <tr class="thead-dark">
               <th width="50px">Code</th>
               <th>Description</th>
               <th>Amount</th>
               <th>Units of Meas.</th>
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
   	MiscelList();
   });
   
  	function MiscelList()
	{
	var data = new Object();
	data.id = "tblMiscel";
	data.link = "<?php echo site_url('Ref_Item/MiscelList');?>";
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