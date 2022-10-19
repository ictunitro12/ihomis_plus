<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
					<div class="modal-header">
						<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">						
						<div id="baseDateControl">
							<div class="row-md-6">
								<input type="month" class="form-control form-control-mg" placeholder="monthly date" name ="mnthly" id="mnthly" autocomplete="off"/>
							</div>
						</div>
					</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-md	 btn-ladda" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>
<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
 	<script type="text/javascript">
	$(document).ready(function() {
   		$('#DateSearch').modal({backdrop:"static"});
	});
	
	$('#filter').on('click',function() {
		var baseURL = $("#baseURL").val(); 	
		$("DateSearch").modal('hide');
		window.open(baseURL+"Rep_PHIC/SummaryOfActivities_pdf/"+$("#mnthly").val()); 	
	});	
	</script>	