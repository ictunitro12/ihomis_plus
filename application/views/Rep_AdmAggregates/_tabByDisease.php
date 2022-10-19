	<div class="tab-pane fade" id="by_Disease" role="tabpanel" aria-labelledby="bydisease-tab">
		<div class="row">
			<div class="col-md-12">
				<div class="h4 text text-success" align="center">
				<i class="fas fa-viruses"></i>
					&nbsp AGGREGATES BY DISEASE
				</div>
			</div>
			<label class="col-form-label text-default col-md-4" align="right">From :</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mg" style="text-align:center" readonly id="btn_from_byD">
			</div>
			<label class="col-form-label text-default">To :</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mg" style="text-align:center" readonly id="btn_to_byD">
			</div>
			<div class="col-md">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" id="btnPDFby_D" title="Print PDF" class="btn btn-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
					</button>
				</div>
			</div>
		</div>
		<table id="ByDiseaseTbl" class="table table-sm table-condensed table-bordered " width="100%">
			<thead>
				<tr>
					<th width="50%">DISEASE</th>
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
		<div class="modal" id="form_pdf_byD" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
						<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
							<i class="fa fa-close"></i>
						</button>
					</div>
					<div class="modal-body">
						<embed id="printpdfD" type="application/pdf" frameborder="2" width="100%" height="800px">
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
			ByDisease($.session.get('from'), $.session.get('to'));
			var from_bD = new Date($.session.get('from')).toLocaleDateString('en-us', {
				month: "long",
				day: "numeric",
				year: "numeric"
			});
			var to_bD = new Date($.session.get('to')).toLocaleDateString('en-us', {
				month: "long",
				day: "numeric",
				year: "numeric"
			});
			$("#btn_from_byD").val(from_bD);
			$("#btn_to_byD").val(to_bD);
		});

		$('#btnPDFby_D').click('click', function() {
			var from = $.session.get('from');
			var to = $.session.get('to');
			$('#form_pdf_byD').modal('show');
			var x = document.getElementById("printpdfD").src = baseURL + "Rep_AdmAggregate/By_DiseasePDF/" + from + "/" + to;
		});
	</script>
	<script src="<?php echo base_url() ?>assets/scripts/repadmaggre/aggrebydisease.js"></script>