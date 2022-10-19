<style>

table#referralTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#TblPatSearchList.dataTable tbody tr:hover {
  background-color: #80DB88;
}

table#visitLogList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h4 text text-success">
					<i class="fa fa-download"></i>
					&nbsp;<?php echo $header; ?><small>&nbsp;&nbsp;<?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="float-md-right" role="group" aria-label="">
					<button  name ="" id="btntrans_Add" class="btn btn-outline-success"><i class="fa fa-plus"></i> Add</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="referralTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th> Date Called</th>
						<th> Date Referred</th>
						<th> Patient Name</th>
						<th> Destination</th>
						<th> Type</th>
						<th> Reason</th>
						<th></th>
					</tr>
				</thead>
			</table>
		</div>
    </div>
	<div class="card-footer">
	</div>
</div>
