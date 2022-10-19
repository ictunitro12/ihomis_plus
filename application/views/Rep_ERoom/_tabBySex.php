	<div class="tab-pane fade show active" id="by_Sex" role="tabpanel" aria-labelledby="bysex-tab">
		<div class="row">
			<div class="col-md-12" align="center">
				<div class="h5 text text-success">
					<i class="fa fa-venus-mars"></i>
					AGGREGATES BY SEX
				</div>
			</div>
			<div class="col-md-12">
				<div class="h5 text-success" align="center">
					From :&nbsp;
					<label id="fromSex"></label>&nbsp;&nbsp;&nbsp;To :&nbsp;
					<label id="toSex"></label>
					<button type="button" id="btnPDF" title="Print PDF" class="btn btn-success btn-md mb-1 pull-right" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
					</button>
				</div>
			</div>
			<!-- <div class="col-md-12">
				<div class="row">
					<div class="col-md-5" align="right">
						<label class="text-success">From :</label>
					</div>
					<div class="col-md-1">
						<label id="fromSex"></label>
					</div>
					<div class="col-md-1" align="right">
						<label class="text-success">To :</label>
					</div>
					<div class="col-md-4">
						<label id="toSex"></label>
					</div>
					<div class="col-md-1" align="right">
						<button type="button" id="btnPDF" title="Print PDF" class="btn btn-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
						</button>
					</div>
				</div>
			</div> -->
		</div>
		<table id="SexTbl" class="table table-sm table-condensed table-bordered" width="100%">
			<thead class="thead-dark">
				<tr>
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
			drSex();
			/*var from_bS = new Date($.session.get('from')).toLocaleDateString('en-us', {
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
			$("#btn_to_byS").val(to_bS); */
		});

		function drSex() {
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
			document.getElementById('toSex').innerHTML = to_bS;
			document.getElementById('fromSex').innerHTML = from_bS;
		}

		$('#btnPDF').click('click', function() {
			var from = $.session.get('from');
			var to = $.session.get('to');
			$('#form_patrec').modal('show');
			var x = document.getElementById("printpdf").src = baseURL + "Rep_ER/By_SexPDF/" + from + "/" + to;
			console.log(x);
		});
	</script>
	<script src="<?php echo base_url() ?>assets/scripts/reperaggregates/aggrebysex.js"></script>