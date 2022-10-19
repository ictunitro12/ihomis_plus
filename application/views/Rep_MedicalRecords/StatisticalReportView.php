<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="dateRange" method="post">
	<div class="modal" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h1 class="modal-title text-success"><span class="fa fa-calendar"></span>&nbsp Retrieval Criteria</h1>
					</div>
					<div class="modal-body border-success">						
					<div id="baseDateControl">
					<div class="row-md-6">
					<label class="text-success"> <b>&nbsp &nbsp Specify Year for Report Generation</b></label>
					<div class="modal-body border-success">						
						<div id="baseDateControl">
							<div id="yearly">
							<div class="row-md-6">
							<label class="text-success">YEAR</label>
							<input type="number" value="<?php echo date('yy')?>"  class="form-control form-control-mg" placeholder="" name ="filter" id="qyear" autocomplete="off" />	
							</div>	
						</div>
					</div>	
					</div>
					<div class="modal-footer bg-secondary">
						<button type="submit" class="btn btn-success btn-lg	 btn-block btn-ladda" data-style="slide-right" id="filter"><i class="fa fa-search"></i> &nbsp SEARCH</button>
					</div>	
			</div>
		</div>
	</div>
</form>
<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
 <script type="text/javascript">
$(document).ready(function()
	{		
   $('#DateSearch').modal("show");
	});
	
	$('#filter').on('click',function(){
		var baseURL = $("#baseURL").val(); 	
		$("DateSearch").modal('hide');
		var year = $("#qyear").val();
		window.open(baseURL+"Rep_Statistical/FourteenPages/"+year); 
	});	
	</script>	













