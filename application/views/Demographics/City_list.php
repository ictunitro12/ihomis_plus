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
		<table id="city" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th>City Code</th>
					<th>City Name</th>
					<th>City Abbreviation</th>
					<th>District</th>
					<th>City Type</th>
					<th>City Zip Code</th>
					<th>Status</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>



<input type="hidden" id="provcode" value="<?php echo $this->uri->segment(3); ?>">
<script type="text/javascript">
	$(function() {
		var provcode = $("#provcode").val();
		CityList(provcode);
	});


	function CityList(provcode) {
		var data = new Object();
		data.id = "city";
		data.link = "<?php echo site_url('Demographics/city_list'); ?>/" + provcode;
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
							return '<span class="label label-success">Active</span>';
							break;
						case 'I':
							return '<span class="label label-danger">Inactive</span>';
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