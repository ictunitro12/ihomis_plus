<div class="card card-accent-success with-border">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header; ?>
					&nbsp <small><?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<div class="btn-group pull-right" role="group" aria-label="">
						<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" title="Sub Group 3"><i class="fa fa-arrow-left"></i> Previous Level</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card card-body">

		<table id="brgy" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th width="80px">Region Name</th>
					<th>Province Name</th>
					<th width="120px">City Code</th>
					<th width="120px">City Name</th>
					<th width="120px">Barangay Code</th>
					<th width="120px">Barangay Name</th>
					<th width="30px">Status</th>

				</tr>
			</thead>
		</table>

		<input type="hidden" id="ctycode" value="<?php echo $this->uri->segment(3); ?>">
	</div>
</div>
<script type="text/javascript">
	$(function() {
		var ctycode = $("#ctycode").val();
		Brgy(ctycode);
	});


	function Brgy(ctycode) {
		var data = new Object();
		data.id = "brgy";
		data.link = "<?php echo site_url('Demographics/brgy_list'); ?>/" + ctycode;
		data.type = "POST";
		data.coldef = [{
				targets: [0],
				visible: false,
				orderable: false,
			},
			{
				targets: [6],
				searchable: false,
				orderable: false,
				render: function(data, type, row) {
					switch (data) {
						case 'A':
							return '<span class="text text-success">Active</span>';
							break;
						case 'I':
							return '<span class="text text-danger">Inactive</span>';
							break;
						default:
							return 'N/A';
					}
				},
			},
		];
		loadTable(data);
	}
</script>