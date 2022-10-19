<div class="card card-accent-success with-border">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header; ?>
					&nbsp <small><?php echo $subheader; ?></small>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table id="demographics" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th width="80px">Region Code</th>
					<th>Region Name</th>
					<th width="120px">Abbreviation</th>
					<th width="120px">Status</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tfoot class="thead-gray">
				<tr>
					<th width="80px"> </th>
					<th></th>
					<th width="120px"></th>
					<th width="120px"></th>
					<th width="100px"></th>
				</tr>
			</tfoot>

		</table>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		RegionList();
	});

	function RegionList() {
		var data = new Object();
		data.id = "demographics";
		data.link = "<?php echo site_url('Demographics/region_list'); ?>";
		data.type = "POST";
		data.coldef = [{
				targets: [0],
				visible: false,
				orderable: false,
			},
			{
				targets: [3],
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