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
					<button type="button" class="btn btn-success tn-square btn-ladda" data-toggle="modal" data-target="#DateSearch">
						<i class="fa fa-calendar"></i>
						&nbsp Date Range
					</button> &nbsp
					&nbsp
					<button id="btnCSS" class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i></button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="h4 text text-success" align="center">
					<tr>
						<td>Report Duration</td>
					</tr>
				</div>
				<div class="col-md-12">
					<div class="h5 text-success" align="center">
						From :&nbsp;
						<label id="froms"></label>&nbsp;&nbsp;&nbsp;To :&nbsp;
						<label id="tos"></label>
					</div>
				</div>
				<!-- <div class="form-row h6 text text-success">
					<div class="col-md-3"></div>
					<label class="col-md-1 col-form-label text-default mb-1" align="right">Date From:</label>
					<div class="col-md-2">
						<input type="date" class="form-control form-control-mb mb-1" id="date_from" name="date_from" placeholder="" value="" readonly>
					</div>
					<label class="col-md-1 col-form-label text-default mb-1" align="right">Date To :</label>
					<div class="col-md-2">
						<input type="date" class="form-control form-control-mb mb-1" id="date_to" name="date_to" placeholder="" value="" readonly>
					</div>
					<div class="col-md-3"></div>
				</div> -->
			</div>
		</div>

		<input type="hidden" name="fromdate" id="fromdate" />
		<input type="hidden" name="todate" id="todate" />

		<table id="ERTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
			<thead class="thead-dark">
				<tr>
					<th>DATE OF CONSULTATION (<<small>mm/dd/yyyy>)</th>
					<th>TIME OF CONSULTATION (<small>hh:mm: am/pm</small>)</th>
					<th>NAME OF PATIENT (<small>Firstname,Middlename,Lastname Suffix</small>)</th>
					<th>SEX(<small>Male,Female</small>)</th>
					<th>TYPE OF SERVICE</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form id="frmCSS">
	<div class="modal fade" id="ModalCSS" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="modal-title text-success"><i class=" fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Form</h3>
					<input type="hidden" id="enccodeCSS">
					<iframe id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
				</div>
				<div class="modal-body">
					<div id="baseDateControl">
						<div class="row-md-6">
							<label class="text-success">From</label>
							<input type="date" class="form-control form-control-mg" placeholder="start date" name="from" id="from" autocomplete="off" min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" />
						</div>
						<br>
						<div class="row-md-6">
							<label class="text-success">To</label>
							<input type="date" class="form-control form-control-mg" placeholder="end date" name="to" id="to" autocomplete="off" min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" />
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

<script type="text/javascript">
	$(document).ready(function() {
		document.getElementById("btnCSS").disabled = true;
		$.session.clear('from');
		$.session.clear('to');
		ER();
		$("#DateSearch").modal({
			backdrop: 'static'
		}).draggable({});
	});

	function ER(data) {
		var table = $("#ERTable").dataTable({
			data: data,
			destroy: true,
			className: 'table table-sm table-striped table-borderless table-condensed table-hover',
			columns: [{
					"data": "erdate"
				},
				{
					"data": "ertime"
				},
				{
					"data": "name"
				},
				{
					"data": "patsex"
				},
				{
					"data": "tsdesc"
				}
			],
			columnDefs: [{
				targets: [3],
				searchable: true,
				render: function(data, type, row) {
					switch (data) {
						case 'M':
							return '<i class="fa fa-male"></i>&nbsp MALE';
							break;
						case 'F':
							return '<i class="fa fa-female"></i>&nbsp FEMALE';
							break;
						default:
							return '<span class="label label-default">Unknown</span>';
					}
				},
			}, ],
		});
	}

	function dr() {
		var from_bS = new Date($.session.get('from')).toLocaleDateString('en-us', {
			month: "long",
			day: "numeric",
			year: "numeric"
		});
		var to_bS = new Date($.session.get('to')).toLocaleDateString('en-us', {
			month: "long",
			day: "numeric",
			year: "numeric"
		});
		document.getElementById('tos').innerHTML = to_bS;
		document.getElementById('froms').innerHTML = from_bS;
	}
	$('#dateRange').submit('click', function() {
		if ($("#from").val() == "" || $("#to").val() == "") {
			alert("Warning: Please Select Valid Date Range!");
			$("#DateSearch").modal({
				backdrop: 'static'
			}).draggable({});
		} else if ($("#from").val() > $("#to").val()) {
			alert("Warning: From must be earlier than To!");
			$("#DateSearch").modal({
				backdrop: 'static'
			}).draggable({});
		} else {
			var formData = new FormData(this);
			$.ajax({
				url: "<?php echo site_url('Rep_ER/ERConsultations'); ?>",
				type: "POST",
				data: new FormData(this),
				dataType: "JSON",
				serverSide: true,
				processData: false,
				contentType: false,
				cache: false,
				async: true,
				success: function(data, response) {
					if (data < 1) {
						document.getElementById("btnCSS").disabled = true;
					} else {
						document.getElementById("btnCSS").disabled = false;
					}
					var from = $("#from").val();
					var to = $("#to").val();
					$.session.set('from', from);
					$.session.set('to', to);
					$("#DateSearch").modal('hide');
					ER(data);
					dr();
				},
				error: function(response) {
					alert("Error:Please try again!");
				}
			});
			return false;
		}
	});

	$('#btnCSS').on('click', function(data) {
		$('#ModalCSS').modal('show');
		var from = $.session.get('from');
		var to = $.session.get('to');
		var src = baseURL + 'Rep_ER/ERConsul/' + from + "/" + to;
		var x = document.getElementById("CSS_pdf").src = src;
		$("#CSS_pdf").attr("src", src);
	});
	ER();
	$('#ModalCSS').on('hidden.coreui.modal', function() {
		$("#CSS_pdf").removeAttr("src").attr("src", "");
	});
</script>