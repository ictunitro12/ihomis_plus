<style>

table#referralfromTable.dataTable tbody tr:hover {
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
					<div class="btn-group float-right" role="group">
						<button  name ="btnReload" id="btnReload" class="btn btn-outline-success"><i class="fa fa-refresh"></i>&nbsp; Refresh</button>
						<button  name ="btnAddReferralFrom" id="btnAddReferralFrom" class="btn btn-outline-success"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="referralfromTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
				<thead>
					<tr>
						<th>Reference no</th>
						<th>Date</th>
						<th>Time</th>
						<th>Facility name</th>
						<th>Patient</th>
						<th>Category</th>
						<th>Receiving person</th>
						<th width="5%"></th>
					</tr>
				</thead>
			</table>
		</div>
    </div>
	<div class="card-footer "></div>
</div>
