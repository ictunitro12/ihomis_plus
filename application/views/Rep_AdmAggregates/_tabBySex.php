	<div class="tab-pane fade show active" id="by_Sex" role="tabpanel" aria-labelledby="bysex-tab">
		<div class="row">
			<div class="col-md-12" align="center">
				<div class="h5 text text-success">
					<i class="fa fa-venus-mars"></i>
					&nbsp AGGREGATES BY SEX
				</div>
			</div>
			<label class="col-form-label text-default col-md-4" align="right">From :</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mg" style="text-align:center" readonly id="btn_from_byS">
			</div>
			<label class="col-form-label text-default">To :</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-mg" style="text-align:center" readonly id="btn_to_byS">
			</div>
			<div class="col-md">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" id="btnPDF" title="Print PDF" class="btn btn-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
					</button>
				</div>
			</div>
		</div>
		<table id="SexTbl" class="table table-sm table-condensed table-bordered" width="100%">
			<thead>
				<tr align="center">
					<th>SEX</th>
					<th>TOTAL</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
				</tr>
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
		<div class="modal" id="form_patrec" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
						<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal">
							<i class="fa fa-close"></i>
						</button>
					</div>
					<div class="modal-body">
						<embed id="printpdf" type="application/pdf" frameborder="2" width="100%" height="800px">
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
			BySex($.session.get('from'), $.session.get('to'));
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
			$("#btn_from_byS").val(from_bS);
			$("#btn_to_byS").val(to_bS);
		});

		$('#btnPDF').click('click', function() {
			var from = $.session.get('from');
			var to = $.session.get('to');
			$('#form_patrec').modal('show');
			var x = document.getElementById("printpdf").src = baseURL + "Rep_AdmAggregate/By_SexPDF/" + from + "/" + to;
		});
	</script>
	<script src="<?php echo base_url() ?>assets/scripts/repadmaggre/aggrebysex.js"></script>