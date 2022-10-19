<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp <?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" id="selection" class="btn btn-success tn-square btn-ladda fa fa-calendar" data-toggle="modal"></button>
					<button id="btnCSS" class="btn btn-success btn-ladda fa fa-file-pdf-o" data-style="zoom-in" data-from="" data-to=""></button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="MSSTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead class="thead-dark">
				<tr>
					<th width="10%">Date(<small>mm/dd/yyyy</small>)</th>
					<th width="25%">Name of Patient(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
					<th width="25%">Address(<small>Street, Barangay, City, Province</small>)</th>
					<th width="10%">MSS No.</th>
					<th width="5%">ER</th>
					<th width="5%">IN</th>
					<th width="5%">OPD</th>
					<th width="15%">Classification</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form id="dRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h4 class="modal-title text-success"><span class="fa fa-calendar"></span> &nbsp; Please Select</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="baseDateControl">
						<div class="row-md-6">
							<input type="radio" id="view_all" name="filter" value="all" checked>&nbsp;
							<label for="view_all">
								<h5>View All</h5>
							</label><br><br>
							<input type="radio" id="sdr" name="filter" value="sdr">&nbsp;
							<label for="sdr">
								<h5>Select Date Range</h5>
							</label><br>
						</div>
						<div id="daterange">
							<div class="row-md-6">
								<label class="text-success">From</label>
								<input type="date" class="form-control form-control-mg" placeholder="start date" name="from" id="from" autocomplete="off" />
							</div>
							<div class="row-md-6">
								<label class="text-success">To</label>
								<input type="date" class="form-control form-control-mg" placeholder="end date" name="to" id="to" autocomplete="off" />
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-block" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmCSS">
	<div class="modal fade" id="ModalCSS" tabindex="-1" role="dialog">
		<!-- <div class="modal-dialog modal-xl" role="dialog"> -->
		<div class="modal-dialog modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h3>
				</div>
				<div class="modal-body">
					<iframe id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form>
<input type="hidden" name="fromdate" id="fromdate" />
<input type="hidden" name="todate" id="todate" />

<script type="text/javascript">
	$(document).ready(function() {
		$('#DateSearch').modal('show').draggable({});
	});

	function MSS(data) {
		var table = $("#MSSTable").dataTable({
			data: data,
			destroy: true,
			className: 'table table-sm table-striped table-borderless table-condensed table-hover',
			columns: [{
					"data": "encdate"
				},
				{
					"data": "patname"
				},
				{
					"data": "pat_comp_address"
				},
				{
					"data": "mssno"
				},
				{
					data: "toecodeer",
					render: function(data, type, row) {

						if (row.toecodeer == '/') {
							return '<h4><i class="fa fa-check text-success"></i></h4>';
						} else {
							return data;
						}
					},
				},
				{
					data: "toecodeadm",
					render: function(data, type, row) {

						if (row.toecodeadm == '/') {
							return '<h4><i class="fa fa-check text-success"></i></h4>';
						} else {
							return data;
						}
					},
				},
				{
					data: "toecodeopd",
					render: function(data, type, row) {

						if (row.toecodeopd == '/') {
							return '<h4><i class="fa fa-check text-success"></i></h4>';
						} else {
							return data;
						}
					},
				},
				{
					"data": "mssdesc"
				}
			],
		});
	}

	$('#dRange').submit('click', function() {
		var formData = new FormData(this);
		if ($("#view_all").prop('checked') == true) {
			$.ajax({
				url: "<?php echo site_url('Rep_MSS/MssGenReg_all'); ?>",
				type: "POST",
				data: new FormData(this),
				dataType: "JSON",
				processData: false,
				contentType: false,
				cache: false,
				async: true,
				success: function(data, response) {
					MSS(data);
					$("#DateSearch").modal('hide');
				},
				error: function(response) {
					alert("Error:Please try again!");
				}
			});
		} else {
			$.ajax({
				url: "<?php echo site_url('Rep_MSS/MssGenReg'); ?>",
				type: "POST",
				data: new FormData(this),
				dataType: "JSON",
				processData: false,
				contentType: false,
				cache: false,
				async: true,
				success: function(data, response) {
					MSS(data);
					$("#DateSearch").modal('hide');
					$("#fromdate").val(formData.get('from'));
					$("#todate").val(formData.get('to'));
				},
				error: function(response) {
					alert("Error:Please try again!");
				}
			});
		}
		return false;
	});


	$('#selection').on('click', function(data) {
		location.reload();
		$('#DateSearch').modal('show').draggable({});;
	});

	$("#view_all").change(function() {
		if ($(this).prop('checked') == true) {
			$("#daterange").hide();
		}
	});

	$("#daterange").hide();
	$("#sdr").change(function() {
		if ($(this).prop('checked') == true) {
			$("#daterange").show();
		}
	});

	$('#btnCSS').on('click', function() {
		if ($("#view_all").prop('checked') == true) {
			var src = (baseURL + "Rep_MSS/GenReg_all/");
			var x = document.getElementById("CSS_pdf").src = src;
			$("#CSS_pdf").attr("src", src);
			$('#ModalCSS').modal('show');
		} else {
			var src = (baseURL + "Rep_MSS/GenReg/" + $("#fromdate").val() + "/" + $("#todate").val());
			var x = document.getElementById("CSS_pdf").src = src;
			$("#CSS_pdf").attr("src", src);
			$('#ModalCSS').modal('show');
		}
	});
</script>