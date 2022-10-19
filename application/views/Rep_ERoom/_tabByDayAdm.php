	<div class="tab-pane fade" id="by_Days_of_Admission" role="tabpanel" aria-labelledby="bydaysadm-tab">
			<div class="row">
				<div class="col-md-6">
					<div class="h4 text text-success"> 
					<i class="fa fa-sign-in"></i>
						&nbsp AGGREGATES BY NO. OF DAYS OF ADMISSION
					</div>
				</div>
				<div class="col-md-6">
					<div class="btn-group pull-right" role="group" aria-label="">
					<button type ="button" id="btnPDFby_DayAdm"  title="Print PDF"  class="btn btn-success btn-md mb-1" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i>
					</button>
					</div>
				</div>
			</div>	
		<table id="byAdmDayTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>NO. OF DAYS OF ADMISSION</th>
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
	<div class="modal" id="form_pdf_byDayAdm" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Form</h2>
					<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" aria-label="Close" data-dismiss="modal">
						<i class="fa fa-close"></i> 
					</button>
				</div>
				<div class="modal-body">
					<embed id="printpdfDayAdm" type="application/pdf" frameborder="2" width="100%" height="800px">
				</div>
				<div class="modal-footer bg-secondary">
				</div>
			</div>
		</div>
	</div>
</form>
	<!--end -->
<script type="text/javascript">
	$(document).ready(function(){
		ByDayOfAdmission($.session.get('from'),$.session.get('to'));
	});

	$('#btnPDFby_DayAdm').click('click',function(){
			var from = $.session.get('from');
			var to = $.session.get('to');
			$('#form_pdf_byDayAdm').modal('show');
			var x = document.getElementById("printpdfDayAdm").src = baseURL+"Rep_AdmAggregate/By_NoDayAdmisionPDF/"+from+"/"+to;
			console.log(x);
			});
</script>
<script src="<?php echo base_url()?>assets/scripts/reperaggregates/aggrebyadmday.js"></script>