	<div class="tab-pane fade" id="by_Days_of_Discharge" role="tabpanel" aria-labelledby="bydaydisc-tab">
		<div class="row">
			<div class="col-md-12" align="center">
				<div class="h4 text text-success">
					<i class="fa fa-sign-out"></i> AGGREGATES BY DATE OF DISCHARGED
				</div>
			</div>
			<label class="col-form-label text-default col-md-4" align="right">From :</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mg" style="text-align:center" readonly id="btn_from_byDD">
			</div>
			<label class="col-form-label text-default">To :</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mg" readonly id="btn_to_byDD" style="text-align:center">
			</div>
			<div class="col-md">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" id="btnPDFby_DateDisc" title="Print PDF" class="btn btn-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
					</button>
				</div>
			</div>
		</div>
		<table id="byDiscDateTbl" class="table table-sm table-condensed table-bordered" width="100%">
			<thead>
				<tr>
					<th>DATE OF DISCHARGED</th>
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
					<th>Total</th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>

	<!-- PDF modal -->
	<form method="post">
		<div class="modal" id="form_pdf_byDateDisc" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
						<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" aria-label="Close" data-dismiss="modal">
							<i class="fa fa-close"></i>
						</button>
					</div>
					<div class="modal-body">
						<embed id="printpdfDateDisc" type="application/pdf" frameborder="2" width="100%" height="800px">
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
			ByDischargeDate($.session.get('from'), $.session.get('to'));
			var from_bDD = new Date($.session.get('from')).toLocaleDateString('en-us', {
				month: "long",
				day: "numeric",
				year: "numeric"
			});
			var to_bDD = new Date($.session.get('to')).toLocaleDateString('en-us', {
				month: "long",
				day: "numeric",
				year: "numeric"
			});
			$("#btn_from_byDD").val(from_bDD);
			$("#btn_to_byDD").val(to_bDD);
		});

		$('#btnPDFby_DateDisc').click('click', function() {
			var from = $.session.get('from');
			var to = $.session.get('to');
			$('#form_pdf_byDateDisc').modal('show');
			var x = document.getElementById("printpdfDateDisc").src = baseURL + "Rep_AdmAggregate/By_DischargeDatePDF/" + from + "/" + to;
		});
	</script>
	<script src="<?php echo base_url() ?>assets/scripts/repadmaggre/aggrebydisdate.js"></script>