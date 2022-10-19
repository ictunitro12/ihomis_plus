<style>

table#en_auth.dataTable tbody tr:hover {
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
		
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="en_auth" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th width="20px">Code</th>
					<th width="20px">Description</th>
				</tr>
			</thead>
		</table>
    </div>
	<div class="card-footer">
	</div>
</div>
