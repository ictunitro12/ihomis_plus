<style>
	tr:hover {
		background: #80DB88 !important;
	}

	th {
		background-color: #20962a;
		color: white;
		border: 1px solid white !important;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> In-Patient's Demographic Data <small>(Year : <label id="rep_year" readonly></label>)</small></div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="wi_prov-tab" data-toggle="tab" href="#wi_prov" role="tab" aria-controls="wi_prov" aria-expanded="true">Congressional districts within the province </a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="wi_region-tab" data-toggle="tab" href="#wi_region" role="tab" aria-controls="wi_region">Congressional districts outside the province but within the region </a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="congress-tab" data-toggle="tab" href="#congress" role="tab" aria-controls="congress">Congressional districts outside the region</a>
					</li>
				</ul>
				<div class="tab-content" id="tabChargescontent">
					<div class="tab-pane fade show active" id="wi_prov" role="tabpanel" aria-labelledby="wi_prov-tab">
						<br>
						<table id="Demographic_Within_Province_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="4">City</th>
									<th class="align-middle text-center" colspan="10">Number of Patients</th>
									<th class="align-middle text-center" rowspan="4">Total</th>
									<th class="align-middle text-center" rowspan="4">% of<br>Grand<br>Total</th>
								</tr>
								<tr>
									<th class="align-middle text-center" colspan="6">Pay</th>
									<th class="align-middle text-center" colspan="4">Service</th>
								</tr>
								<tr>
									<th class="align-middle text-center" rowspan="2">Non<br>PHIC</th>
									<th class="align-middle text-center" colspan="2">PHIC</th>
									<th class="align-middle text-center" colspan="2">HMO</th>
									<th class="align-middle text-center" rowspan="2">OWWA</th>
									<th class="align-middle text-center" rowspan="2">Non<br>PHIC</th>
									<th class="align-middle text-center" colspan="2">PHIC</th>
									<th class="align-middle text-center" rowspan="2">OWWA</th>
								</tr>
								<tr>
									<th class="align-middle text-center">Member /<br>Dependent</th>
									<th class="align-middle text-center">Indigent</th>
									<th class="align-middle text-center">w/ PHIC</th>
									<th class="align-middle text-center">w/o PHIC</th>
									<th class="align-middle text-center">Member /<br>Dependent</th>
									<th class="align-middle text-center">Indigent</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Grand Total</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="tab-pane fade" id="wi_region" role="tabpanel" aria-labelledby="wi_region-tab">
						<br>
						<table id="Demographic_Within_Region_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="4">City</th>
									<th class="align-middle text-center" colspan="10">Number of Patients</th>
									<th class="align-middle text-center" rowspan="4">Total</th>
									<th class="align-middle text-center" rowspan="4">% of<br>Grand<br>Total</th>
								</tr>
								<tr>
									<th class="align-middle text-center" colspan="6">Pay</th>
									<th class="align-middle text-center" colspan="4">Service</th>
								</tr>
								<tr>
									<th class="align-middle text-center" rowspan="2">Non<br>PHIC</th>
									<th class="align-middle text-center" colspan="2">PHIC</th>
									<th class="align-middle text-center" colspan="2">HMO</th>
									<th class="align-middle text-center" rowspan="2">OWWA</th>
									<th class="align-middle text-center" rowspan="2">Non<br>PHIC</th>
									<th class="align-middle text-center" colspan="2">PHIC</th>
									<th class="align-middle text-center" rowspan="2">OWWA</th>
								</tr>
								<tr>
									<th class="align-middle text-center">Member /<br>Dependent</th>
									<th class="align-middle text-center">Indigent</th>
									<th class="align-middle text-center">w/ PHIC</th>
									<th class="align-middle text-center">w/o PHIC</th>
									<th class="align-middle text-center">Member /<br>Dependent</th>
									<th class="align-middle text-center">Indigent</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Grand Total</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="tab-pane fade" id="congress" role="tabpanel" aria-labelledby="congress-tab">
						<br>
						<table id="Demographic_Congressional_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="4">City</th>
									<th class="align-middle text-center" colspan="10">Number of Patients</th>
									<th class="align-middle text-center" rowspan="4">Total</th>
									<th class="align-middle text-center" rowspan="4">% of<br>Grand<br>Total</th>
								</tr>
								<tr>
									<th class="align-middle text-center" colspan="6">Pay</th>
									<th class="align-middle text-center" colspan="4">Service</th>
								</tr>
								<tr>
									<th class="align-middle text-center" rowspan="2">Non<br>PHIC</th>
									<th class="align-middle text-center" colspan="2">PHIC</th>
									<th class="align-middle text-center" colspan="2">HMO</th>
									<th class="align-middle text-center" rowspan="2">OWWA</th>
									<th class="align-middle text-center" rowspan="2">Non<br>PHIC</th>
									<th class="align-middle text-center" colspan="2">PHIC</th>
									<th class="align-middle text-center" rowspan="2">OWWA</th>
								</tr>
								<tr>
									<th class="align-middle text-center">Member /<br>Dependent</th>
									<th class="align-middle text-center">Indigent</th>
									<th class="align-middle text-center">w/ PHIC</th>
									<th class="align-middle text-center">w/o PHIC</th>
									<th class="align-middle text-center">Member /<br>Dependent</th>
									<th class="align-middle text-center">Indigent</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Grand Total</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		Demo_Data_Within_Province($.session.get('year'));
		Demo_Data_Within_Region($.session.get('year'));
		Demo_Data_Congressional($.session.get('year'));
		document.getElementById('rep_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Hfdb_Stat_Rep/Demographic/Demographic_Data.js"></script>