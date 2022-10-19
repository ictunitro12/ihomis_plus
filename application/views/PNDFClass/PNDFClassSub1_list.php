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
				<a class="btn btn-success" href="<?php echo site_url('PNDFClass/Createsub1');?>"><i class="fa fa-plus"></i></a>
			</div>
		</div>	
		</div>
	</div>
<div class="card-body table-responsive">
	<table id="PNDFClassSub1" class="table table-sm table-hover  table-bordered table-condensed table-striped">
				  <thead>
					<tr>
					<th></th>
					<th class="align-middle">Major Category</th>
					<th>Sub Group 1</th>
					<th>Description</th>
					<th width="50px">Action</th>
					</tr>
				</thead> 
	</table>
</div>	
</div>
<script type="text/javascript">
   $(document).ready(function() {
			uppercase();
			PNDFClassSub1();
		});
	function PNDFClassSub1()
	{
		var data = new Object();
		data.id = "PNDFClassSub1";
		data.link = "<?php echo site_url('PNDFClass/PNDFClassSub1_list/');?><?php echo $this->uri->segment(3);?>";
		data.type = "POST";
		
		loadTable(data);
	}
</script>


