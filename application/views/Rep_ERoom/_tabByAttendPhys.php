<div class="tab-pane fade" id="by_Attending_Physician" role="tabpanel" aria-labelledby="byattendphys-tab">
	<div class="row">
		<div class="col-md-12">
			<div class="h4 text text-success" align="center">
				<i class="fa fa-user-md"></i>AGGREGATES BY ATTENDING PHYSICIAN
			</div>
		</div>
		<div class="col-md-12">
			<div class="h5 text-success" align="center">
				From :&nbsp;
				<label id="fromPhy"></label>&nbsp;&nbsp;&nbsp;To :&nbsp;
				<label id="toPhy"></label>
				<button type="button" id="btnPDFby_AP" title="Print PDF" class="btn btn-success btn-md mb-1 pull-right" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
				</button>
			</div>
		</div>
		<!-- <div class="col-md-12">
			<div class="row">
				<div class="col-md-5" align="right">
					<label class="text-success">From :</label>
				</div>
				<div class="col-md-1">
					<label id="fromPhy"></label>
				</div>
				<div class="col-md-1" align="right">
					<label class="text-success">To :</label>
				</div>
				<div class="col-md-4">
					<label id="toPhy"></label>
				</div>
				<div class="col-md-1" align="right">
					<button type="button" id="btnPDFby_AP" title="Print PDF" class="btn btn-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
					</button>
				</div>
			</div>
		</div> -->
	</div>
	<table id="byAttendPhysTbl" class="table table-sm table-condensed table-bordered" width="100%">
		<thead class="thead-dark">
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
		drPhys();
	});

	function drPhys() {
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
		document.getElementById('toPhy').innerHTML = to_bS;
		document.getElementById('fromPhy').innerHTML = from_bS;
	}

	$('#btnPDFby_AP').click('click', function() {
		var from = $.session.get('from');
		var to = $.session.get('to');
		$('#form_pdf_byAP').modal('show');
		var x = document.getElementById("printpdfAP").src = baseURL + "Rep_ER/By_AttendingPhysPDF/" + from + "/" + to;
		console.log(x);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/reperaggregates/aggrebyattendphys.js"></script>