<style>

table#referralReceivedTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h4 text text-success">
					<i class="fa fa-inbox"></i>
					&nbsp;<?php echo $header; ?><small>&nbsp;&nbsp;<?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="pull-right" role="group" aria-label="">
					<button  name="btnReloadReceived" id="btnReloadReceived" class="btn btn-outline-success"><i class="fa fa-refresh"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="referralReceivedTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>Reference no</th>
							<th>Date and Time</th>
							<th>Facility name</th>
							<th>Patient</th>
							<th>Category</th>
							<th>Reason</th>
							<th>Receiving person</th>
							<th>Received Date and Time</th>
							<th width="5%"></th>
						</tr>
					</thead>
			</table>
		</div>
    </div>
	<div class="card-footer "></div>
</div>

<div class="modal" id="modalReferralFromPDF" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centere modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title h4 text-success"><i class="fa fa-file-pdf"></i> Referral Information</div>
				</div>
				<div class="modal-body">
					<iframe id="referralFrom_PDF" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>

