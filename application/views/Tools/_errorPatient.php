<style>

table#err_tbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h4 text text-success">
					<i class="fas fa-database"></i>
					&nbsp;<?php echo $header; ?><small>&nbsp;&nbsp;<?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Pull Data"><i class="fas fa-download"></i></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="err_tbl" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th width="20px">Record number</th>
									<th width="20px">Patient name</th>
									<th width="20px">Birth date</th>
									<th width="20px">Sex</th>
									<th width="20px"></th>
								</tr>
							</thead>
						</table>
	
	</div>
	<div class="card-footer">
	</div>
</div>
