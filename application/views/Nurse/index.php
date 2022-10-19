<style>

table#wardtbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="row">
	<div class="col-md-12">
	<div class="card card-accent-success">
	<div class="card-header">
		 
		<div class="clearfix">
			<div class="h4 text text-success float-left"> <i class="fa fa-user-md"></i>&nbsp<?php echo $header;?> </div>
			<a href="<?php echo site_url('Nurse/NurseLists');?>" class="btn btn-outline-success float-right" <?php  echo ($dept != '001'? 'hidden' :'show' );?> ><i class="fa fa-cog"></i></a>
		</div>
		
	</div>
	<div class="card-body">
			<table id="wardtbl" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">
				<thead>
					<tr>
						<th width="140px">WARD CODE</th>
						<th >WARD NAME</th>
						<th width="50px"></th>
					</tr>
				</thead>
			</table>	
	</div>
	</div>
	</div>
	</div>
	
	<script type="text/javascript">
		$(function()
		{
			AdmssionList();	
		});
		
		function AdmssionList()
		{
			var data = new Object();
			data.id = "wardtbl";
			data.link = "Nurse/NurseWard";
			data.type = "POST";
			data.coldef =[
				{
					targets: [0,2],
					visible:true,
					orderable:false,
				},

			];
			loadTable(data);
		}
		
	</script>
	
	
