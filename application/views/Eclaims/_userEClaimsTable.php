<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp; <?php echo $header; ?> - <span class="acreditationDescription"></span>
				</div>
			</div>
			<div class="col-md-6">
				<!-- <div class="btn-group pull-right" role="group" aria-label="">
					<a href="#" id="addClaimSubmission" data-toggle="tooltip" title="Add Claim Submission" class="btn btn-success btn-md btn-ladda mr-2" data-style="zoom-in"><i class="fa fa-medkit"></i></a>
					<button class="btn btn-primary btn-md btn-ladda transmit-eclaim" data-toggle="tooltip" title="Transmit eClaims"><i class="fa fa-upload"></i> Transmit eClaims</button>
				</div> -->
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="userClaimListTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead class="thead-dark">
				<tr>
					<th></th>
					<th>CLAIM NUMBER</th>
					<th>CEWS TRACKING NUMBER</th>
					<th>PATIENT NAME</th>
					<th>HOSPITAL RECORD NUMBER</th>
					<th>PATIENT ENCOUNTER</th>
					<th>ADMISSION DATE</th>
					<th>DISCHARGED DATE</th>
					<th>PIN</th>
					<th>MEMBER NAME</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
</div>