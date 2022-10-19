<style>
	tr:hover {
		background: #80DB88 !important;
	}

	th {
		background-color: #20962a;
		color: white;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Distribution of Beds <small>(Year : <label id="rep_year"></label>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="Distribution_of_Beds_Table" class="table table-sm table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th class="align-middle text-center" rowspan="3">Type of Service</th>
							<th class="align-middle text-center" colspan="3" rowspan="2">Allocated No. of Beds</th>
							<th class="align-middle text-center" colspan="7">Actual Number of Beds Utilized</th>
							<th class="align-middle text-center" rowspan="3">Total In-Patient Service Days</th>
						</tr>
						<tr>
							<th class="align-middle text-center" colspan="2">Non-Philhealth</th>
							<th class="align-middle text-center" colspan="2">Philhealth / OWWA / HMO</th>
							<th class="align-middle text-center" colspan="3">Total</th>
						</tr>
						<tr>
							<th class="align-middle text-center">Pay</th>
							<th class="align-middle text-center">Service</th>
							<th class="align-middle text-center">Total</th>
							<th class="align-middle text-center">Pay</th>
							<th class="align-middle text-center">Service</th>
							<th class="align-middle text-center">Pay</th>
							<th class="align-middle text-center">Service</th>
							<th class="align-middle text-center">Pay</th>
							<th class="align-middle text-center">Service</th>
							<th class="align-middle text-center">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Medicine</td>
							<td><label id="alloc_med_pay"></label></td>
							<td><label id="alloc_med_serv"></label></td>
							<td><label id="alloc_med_total"></label></td>
							<td><label id="actual_nphicpay_bed"></label></td>
							<td><label id="actual_nphicserv_bed"></label></td>
							<td><label id="actual_phicpay_bed"></label></td>
							<td><label id="actual_phicserv_bed"></label></td>
							<td><label id="actual_total_pay"></label></td>
							<td><label id="actual_total_serv"></label></td>
							<td><label id="actual_bed_total"></label></td>
							<td><label id="los_med"></label></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Obstetrics</td>
							<td><label id="alloc_obs_pay"></label></td>
							<td><label id="alloc_obs_serv"></label></td>
							<td><label id="alloc_obs_total"></label></td>
							<td><label id="actual_nphicpay_bed_obs"></label></td>
							<td><label id="actual_nphicserv_bed_obs"></label></td>
							<td><label id="actual_phicpay_bed_obs"></label></td>
							<td><label id="actual_phicserv_bed_obs"></label></td>
							<td><label id="actual_total_pay_obs"></label></td>
							<td><label id="actual_total_serv_obs"></label></td>
							<td><label id="actual_bed_total_obs"></label></td>
							<td><label id="los_obs"></label></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Gynecology</td>
							<td><label id="alloc_gyn_pay"></label></td>
							<td><label id="alloc_gyn_serv"></label></td>
							<td><label id="alloc_gyn_total"></label></td>
							<td><label id="actual_nphicpay_bed_gyn"></label></td>
							<td><label id="actual_nphicserv_bed_gyn"></label></td>
							<td><label id="actual_phicpay_bed_gyn"></label></td>
							<td><label id="actual_phicserv_bed_gyn"></label></td>
							<td><label id="actual_total_pay_gyn"></label></td>
							<td><label id="actual_total_serv_gyn"></label></td>
							<td><label id="actual_bed_total_gyn"></label></td>
							<td><label id="los_gyne"></label></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Pediatrics</td>
							<td><label id="alloc_pedia_pay"></label></td>
							<td><label id="alloc_pedia_serv"></label></td>
							<td><label id="alloc_pedia_total"></label></td>
							<td><label id="actual_nphicpay_bed_pedia"></label></td>
							<td><label id="actual_nphicserv_bed_pedia"></label></td>
							<td><label id="actual_phicpay_bed_pedia"></label></td>
							<td><label id="actual_phicserv_bed_pedia"></label></td>
							<td><label id="actual_total_pay_pedia"></label></td>
							<td><label id="actual_total_serv_pedia"></label></td>
							<td><label id="actual_bed_total_pedia"></label></td>
							<td><label id="los_pedia"></label></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Surgery</td>
							<td><label id="alloc_surgi_pay"></label></td>
							<td><label id="alloc_surgi_serv"></label></td>
							<td><label id="alloc_surgi_total"></label></td>
							<td><label id="actual_nphicpay_bed_surgi"></label></td>
							<td><label id="actual_nphicserv_bed_surgi"></label></td>
							<td><label id="actual_phicpay_bed_surgi"></label></td>
							<td><label id="actual_phicserv_bed_surgi"></label></td>
							<td><label id="actual_total_pay_surgi"></label></td>
							<td><label id="actual_total_serv_surgi"></label></td>
							<td><label id="actual_bed_total_surgi"></label></td>
							<td><label id="los_surgi"></label></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;Adult</td>
							<td><label id="adult_alloc_pay"></label></td>
							<td><label id="adult_alloc_serv"></label></td>
							<td><label id="adult_alloc_total"></label></td>
							<td><label id="adult_actual_nphicpay_bed"></label></td>
							<td><label id="adult_actual_nphicserv_bed"></label></td>
							<td><label id="adult_actual_phicpay_bed"></label></td>
							<td><label id="adult_actual_phicserv_bed"></label></td>
							<td><label id="adult_actual_total_pay"></label></td>
							<td><label id="adult_actual_total_serv"></label></td>
							<td><label id="adult_actual_bed_total"></label></td>
							<td><label id="los_adult"></label></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;Pedia</td>
							<td><label id="pedia_alloc_pay"></label></td>
							<td><label id="pedia_alloc_serv"></label></td>
							<td><label id="pedia_alloc_total"></label></td>
							<td><label id="pedia_actual_nphicpay_bed"></label></td>
							<td><label id="pedia_actual_nphicserv_bed"></label></td>
							<td><label id="pedia_actual_phicpay_bed"></label></td>
							<td><label id="pedia_actual_phicserv_bed"></label></td>
							<td><label id="pedia_actual_total_pay"></label></td>
							<td><label id="pedia_actual_total_serv"></label></td>
							<td><label id="pedia_actual_bed_total"></label></td>
							<td><label id="los_ped"></label></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		Distribution_of_Beds();
		Beds_Adult_Pedia();
		document.getElementById('rep_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Hfdb_Stat_Rep/Beds/Distribution_of_Beds.js"></script>