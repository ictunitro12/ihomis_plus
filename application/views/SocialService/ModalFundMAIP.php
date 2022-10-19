<div class="modal fade" id="ModalFundMAIP" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10 col-md-auto">
							<h3 class="text text-success"><i class="fa fa-money"></i>&nbsp; Fund Source List</h3>
						</div>

					</div>	
				</div>
				<div class="card-body table-responsive">
					<table  id="TableFundListMAIP" class="list table table-sm table-striped  table-bordered table-condensed table-hover " width="100%">
						<thead>
							<tr class="thead-dark">
								<th width="50px">Code</th>
								<th width="150px">Date</th>
								<th width="200px">Fund Source</th>
								<th width="200px">Fund Amount</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>	

<script type="text/javascript">
	$(function(){
		FundListMAIP();
	});

</script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_maip.js"></script>
