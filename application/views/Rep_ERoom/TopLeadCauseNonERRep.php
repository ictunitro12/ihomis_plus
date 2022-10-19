<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<form id="dateRange">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success"><span class="fa fa-calendar"></span>&nbsp; Retrieval Criteria</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="baseDateControl">
						<div class="row">
							<div class="col-md-4">
								<input type="radio" id="monthly" name="filter" value="monthly">
								<label for="monthly">
									<h5>&nbsp; Monthly</h5>
								</label>
							</div>
							<div class="col-md-4">
								<input type="radio" id="quarterly" name="filter" value="quarterly">
								<label for="quarterly" align="center">
									<h5>&nbsp; Quarterly</h5>
								</label>
							</div>
							<div class="col-md-4">
								<input type="radio" id="annual" name="filter" value="annual">
								<label for="annual">
									<h5>&nbsp; Annual</h5>
								</label>
							</div>
							<div class="col-md-12" id="dRange">
								<input type="month" class="form-control form-control-mg" placeholder="start date" name="mnth" id="mnth" autocomplete="off" />
							</div>
						</div>
						<div class="row" id="quarter">
							<div class="col-md-12">
								<select class="form-control" id="squarter">
									<option value="1st">
										<h3>1st Quarter</h3>
									</option>
									<option value="2nd">
										<h3>2nd Quarter</h3>
									</option>
									<option value="3rd">
										<h3>3rd Quarter</h3>
									</option>
									<option value="4th">
										<h3>4th Quarter</h3>
									</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row-sm-3">
							<div id="yearly" class="col-md-12">
								<label class="text-success">
									<h6>YEAR : </h6>
								</label>
								<input type="number" min="1970" max="<?php echo date("Y"); ?>" value="<?php echo date("Y"); ?>" class="form-control form-control-mg" placeholder="yyyy" name="qyear" id="qyear" autocomplete="on" />
							</div>
						</div>
						<!-- <div class="row">
							<div id="yearly" class="col-md-12">
								<label class="text-success">
									<h6>YEAR : </h6>
								</label>
								<input type="number" class="form-control form-control-mg" placeholder="yyyy" name="filter" id="qyear" autocomplete="off" />
							</div>
						</div> -->
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-success btn-block" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></a>
				</div>

			</div>
		</div>
	</div>
</form>

<form id="frmLCauseNonErRep" name="frmLCauseRep" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class=" fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp; Form</h4>
					</div>
				</div>
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" title="Search Patient" role="group" aria-label="">
						<button type="button" class="btn btn-success tn-square btn-ladda fa fa-calendar" data-toggle="modal" data-target="#DateSearch"></button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body" id="LCauseRep">
			<embed id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></embed>
		</div>
		<div class="card-footer"></div>
	</div>
</form>

<!-- <form id="frmCSS">
	<div class="modal fade" id="ModalCSS" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-xl" role="dialog"> 
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
</form> -->

<!-- <form id="frmMonthlyReportPDF">
	<div class="modal fade" id="ModalMonthlyReport" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<iframe id="MonthlyReportPDF" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form> -->

<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">

<script type="text/javascript">
	$(document).ready(function() {
		$("#DateSearch").modal({
			backdrop: 'static'
		}).draggable({});
	});

	$("#dRange").hide();
	$("#yearly").hide();
	$("#monthly").change(function() {
		if ($(this).prop('checked') == true) {
			$("#squarter").hide();
			$("#yearly").hide();
			$("#dRange").show();
		}
	});

	$("#squarter").hide();
	$("#quarterly").change(function() {
		if ($(this).prop('checked') == true) {
			$("#dRange").hide();
			$("#yearly").show();
			$("#squarter").show();
		}
	});

	$("#year").hide();
	$("#annual").change(function() {
		if ($(this).prop('checked') == true) {
			$("#dRange").hide();
			$("#squarter").hide();
			$("#yearly").show();
		}
	});

	$('#filter').on('click', function() {
		if ($("#monthly").prop('checked') == true) {
			if ($("#mnth").val() == "" || $("#mnth").val() == null || $("#mnth").val() == undefined) {
				alert("Warning: Please Select Valid Date Range!");
				window.location.reload();
				$("#DateSearch").modal({
					backdrop: 'static'
				}).draggable({});
			} else {
				var src = (baseURL + "Rep_ER/LCausesNonER/monthly/" + $("#mnth").val());
				var x = document.getElementById("CSS_pdf").src = src;
				$("#CSS_pdf").attr("src", src);
				$('#DateSearch').modal('hide');
				/* $('#ModalCSS').modal('show'); */
			}
		} else if ($("#quarterly").prop('checked') == true) {
			if ($("#squarter").val() == "" || $("#squarter").val() == null || $("#squarter").val() == undefined) {
				alert("Warning: Please Select Valid Date Range!");
				window.location.reload();
				$("#DateSearch").modal({
					backdrop: 'static'
				}).draggable({});
			} else {
				if ($("#qyear").val() == "" || $("#qyear").val() == null || $("#qyear").val() == undefined) {
					alert("Warning: Please Select Valid Date Range!");
					window.location.reload();
					$("#DateSearch").modal({
						backdrop: 'static'
					}).draggable({});
				} else {
					var year = $("#qyear").val();
					var src = (baseURL + "Rep_ER/LCausesNonER/quarterly/" + $("#squarter").val() + year);
					var x = document.getElementById("CSS_pdf").src = src;
					$("#CSS_pdf").attr("src", src);
					$('#DateSearch').modal('hide');
				}
			}
		} else if ($("#annual").prop('checked') == true) {
			if ($("#qyear").val() == "" || $("#qyear").val() == null || $("#qyear").val() == undefined) {
				alert("Warning: Please Select Valid Date Range!");
				window.location.reload();
				$("#DateSearch").modal({
					backdrop: 'static'
				}).draggable({});
			} else {
				var year = $("#qyear").val();
				$('#ModalCSS').modal('show');
				var src = (baseURL + "Rep_ER/LCausesNonER/yearly/" + year);
				$("#CSS_pdf").attr("src", src);
				$('#DateSearch').modal('hide');
			}
		}
	});
	
	/* $('#ModalCSS').on('hidden.coreui.modal', function() {
	$("#CSS_pdf").removeAttr("src").attr("src", "");
	});

	$("#dateRange").submit(function(e) {
		e.preventDefault();
		if ($("#monthly").prop('checked') == true) {
			var src = (baseURL + "Rep_ER/LCausesNonER/monthly/" + $("#mnth").val());
			var x = document.getElementById("CSS_pdf").src = src;
			$("#CSS_pdf").attr("src", src);
			$('#ModalCSS').modal('show');
		} else if ($("#quarterly").prop('checked') == true) {
			var year = $("#qyear").val();
			var src = (baseURL + "Rep_ER/LCausesNonER/quarterly/" + $("#squarter").val() + year);
			var x = document.getElementById("CSS_pdf").src = src;
			$("#CSS_pdf").attr("src", src);
			$('#ModalCSS').modal('show');
		} else if ($("#annual").prop('checked') == true) {
			var year = $("#qyear").val();
			var src = (baseURL + "Rep_ER/LCausesNonER/yearly/" + year);
			$("#CSS_pdf").attr("src", src);
			$('#ModalCSS').modal('show');
		}
	}); */
</script>