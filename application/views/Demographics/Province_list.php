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
		<table id="province" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th width="">Province Code</th>
					<th width="">Province Name</th>
					<th width="">Province Abbreviation</th>
					<th width="">Status</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tfoot>
				<th width=""></th>
				<th width=""></th>
				<th width=""></th>
				<th width=""></th>
				<th width="100px"></th>
			</tfoot>
		</table>
	</div>
	<input type="hidden" id="regcode" value="<?php echo $this->uri->segment(3); ?>">
</div>
<script type="text/javascript">
	$(function() {
		var regcode = $("#regcode").val();
		ProvinceList(regcode);
	});

	function ProvinceList(regcode) {
		var data = new Object();
		data.id = "province";
		data.link = "<?php echo site_url('Demographics/province_list'); ?>/" + regcode;
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