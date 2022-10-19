<div class="tab-pane fade" id="by_Attending_Physician" role="tabpanel" aria-labelledby="byattendphys-tab">
	<div class="row">
		<div class="col-md-12">
			<div class="h4 text text-success" align="center">
				<i class="fa fa-user-md"></i>&nbsp AGGREGATES BY ATTENDING PHYSICIAN
			</div>
		</div><label class="col-form-label text-default col-md-4" align="right">From :</label>
		<div class="col-md-2">
			<input type="text" class="form-control form-control-mg" style="text-align:center" readonly id="btn_from_byAP">
		</div>
		<label class="col-form-label text-default">To :</label>
		<div class="col-md-2">
			<input type="text" class="form-control form-control-mg" style="text-align:center" readonly id="btn_to_byAP">
		</div>
		<div class="col-md">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button type="button" id="btnPDFby_AP" title="Print PDF" class="btn btn-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
				</button>
			</div>
		</div>
	</div>
	<table id="byAttendPhysTbl" class="table table-sm table-condensed table-bordered" width="100%">
		<thead>
			<tr>
				<th>NAME OF PHYSICIAN</th>
				<th>TOTAL NO. OF PATIENTS</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
			<tr>
		</tbody>
		<tfoot class="thead-dark">
			<tr>
				<th></th>
				<th></th>
			</tr>
		</tfoot>
	</table>
</div>
<!-- PDF modal -->
<form method="post">
	<div class="modal" id="form_pdf_byAP" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
					<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
						<i class="fa fa-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<embed id="printpdfAP" type="application/pdf" frameborder="2" width="100%" height="800px">
				</div>
				<div class="modal-footer bg-secondary">
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<script type="text/javascript">
	$(document).ready(function() {
		ByAttendingPhys($.session.get('from'), $.session.get('to'));
		var from_bAP = new Date($.session.get('from')).toLocaleDateString('en-us', {
			month: "long",
			day: "numeric",
			year: "numeric"
		});
		var to_bAP = new Date($.session.get('to')).toLocaleDateString('en-us', {
			month: "long",
			day: "numeric",
			year: "numeric"
		});
		$("#btn_from_byAP").val(from_bAP);
		$("#btn_to_byAP").val(to_bAP);
	});

	$('#btnPDFby_AP').click('click', function() {
		var from = $.session.get('from');
		var to = $.session.get('to');
		$('#form_pdf_byAP').modal('show');
		var x = document.getElementById("printpdfAP").src = baseURL + "Rep_AdmAggregate/By_AttendingPhysPDF/" + from + "/" + to;
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/repadmaggre/aggrebyattendphys.js"></script>