<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="baseDateControl">
						<div class="row-md-6">
							<input type="month" class="form-control form-control-mg" placeholder="monthly date" name="mnthly" id="mnthly" autocomplete="off" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-success btn-md	 btn-ladda" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></a>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmMonthlyRep" name="frmMonthlyRep" method="post">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<h4 class="modal-title text-success"><i class=" fa fa-file-pdf-" aria-hidden="true"></i>&nbsp; Form</h4>
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

<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
<script type="text/javascript">
	$(document).ready(function() {
		$("#DateSearch").modal({
			backdrop: 'static'
		}).draggable({});
	});

	$('#filter').on('click', function() {
		if ($("#mnthly").val() == "" || $("#mnthly").val() == null || $("#mnthly").val() == undefined) {
			alert("Warning: Please Select Valid Date!");
				window.location.reload();
				$("#DateSearch").modal({
					backdrop: 'static'
				}).draggable({});
		} else {
			var src = (baseURL + "Rep_Outpatient/OpdMnthly/" + $("#mnthly").val());
			var x = document.getElementById("CSS_pdf").src = src;
			$("#CSS_pdf").attr("src", src);
			$('#DateSearch').modal('hide');
			/* var baseURL = $("#baseURL").val(); 	
			$("DateSearch").modal('hide');
			window.open(baseURL+"Rep_Outpatient/OpdMnthly/"+$("#mnthly").val(),'name'); */
		}
	});
</script>