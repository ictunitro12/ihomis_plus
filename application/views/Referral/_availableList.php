<style>

table#onlineTable.dataTable tbody tr:hover {
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
					<button  name ="btnReload" id="btnReload" class="btn btn-outline-success"><i class="fa fa-refresh"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="onlineTable" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">
				<thead>
					<tr>
						<th width="90%">Facility name</th>
						<th width="10%">Status</th>
					</tr>
				</thead>
			</table>
    </div>
	<div class="card-footer "></div>
</div>

