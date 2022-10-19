<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="baseDateControl">
						<div class="row-md-6">
							<label class="text-success">Month and Year</label>
							<input type="month" class="form-control form-control-mg" placeholder="monthly date" name="mnthly" id="mnthly" autocomplete="off" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-md	 btn-ladda" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmMonthlyReportPDF" name="frmMonthlyReportPDF" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Monthly Report</h4>
					</div>
				</div>
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
						<button id="selectDate" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-calendar"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body" id="MonthlyReportPDF"></div>
		<div class="card-footer"></div>
	</div>
</form>

<script type="text/javascript">
	$(document).ready(function() {
		$('#DateSearch').modal({
			backdrop: "static"
		});
	});

	$('#dateRange').submit('click', function(e) {
		e.preventDefault();

		if ($("#mnthly").val() == null || $("#mnthly").val() == '') {
			$('#DateSearch').modal({
				backdrop: "static"
			});
		} else {
			var mnthly = $("#mnthly").val();
			$.session.set('mnthly', mnthly);

			$('#DateSearch').modal('hide');
			var mnthly = $.session.get('mnthly');

			$('#MonthlyReportPDF').html('<embed src="' + "MonthlyReport_pdf/" + mnthly + '" frameborder="2" width="100%" height="800px" id="ClearanceS">');
		}
	});

	$('#selectDate').on('click', function(e) {
		e.preventDefault();

		$('#DateSearch').modal({
			backdrop: "static"
		});
	});
</script>