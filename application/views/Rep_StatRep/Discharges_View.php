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
	<div class="col-md-6">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Summary of Patients in the Hospital <small>(Year : <span id="rep_year"></span>)</small></div>
			</div>
			<div class="card-body">
				<table id="PatSumTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead class="align-middle text-center">
						<tr>
							<th class="text-left">Inpatient Care</th>
							<th>Number</th>
						</tr>
					</thead>
					<tbody class="align-middle text-left">
						<tr>
							<td>Total number of inpatients</td>
							<td class="align-middle text-right"><span id="totnuminpat"></span></td>
						</tr>
						<tr>
							<td>Total Newborn (In facility deliveries)</td>
							<td class="align-middle text-right"><span id="totnewborn"></span></td>
						</tr>
						<tr>
							<td>Total Discharges (Alive)</td>
							<td class="align-middle text-right"><span id="totdisalive"></span></td>
						</tr>
						<tr>
							<td>Total patients admitted and discharged on the same day</td>
							<td class="align-middle text-right"><span id="totpatadmdis"></span></td>
						</tr>
						<tr>
							<td>Total number of inpatient bed days (service days)</td>
							<td class="align-middle text-right"><span id="totnuminpatserv"></span></td>
						</tr>
						<tr>
							<td>Total number of inpatients transferred TO THIS FACILITY from another facility for inpatient care</td>
							<td class="align-middle text-right"><span id="totnumfac"></span></td>
						</tr>
						<tr>
							<td>Total number of inpatients transferred FROM THIS FACILITY to another facility for inpatient care</td>
							<td class="align-middle text-right"><span id="totnumanthfac"></span></td>
						</tr>
						<tr>
							<td>Total number of patients remaining in the hospital as of midnight last day of previous year</td>
							<td class="align-middle text-right"><span id="totnumprevyear"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Average Length of Stay <small>(Year : <span id="reps_year"></span>)</small></div>
			</div>
			<div class="card-body">
				<table class="table table-bordered table-sm" width="100%">
					<tbody>
						<tr>
							<td><b>Average Length of Stay (ALOS) of Admitted Patients : <span id="alos"></span> day/s</b><br><i>*Average length of stay: Average number of days each inpatient stays in the hospital for each episode of care.</i>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Discharges <small>(Year : <span id="report_year"></span>)</small></div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="InpatientCareTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th class="align-middle text-center" rowspan="3">Type of Service</th>
								<th class="align-middle text-center" rowspan="3">No. of<br>Patients</th>
								<th class="align-middle text-center" rowspan="3">Total Length<br>of Stay /<br>Total No.<br>of Days Stay</th>
								<th class="align-middle text-center" colspan="8">Type of Accomodation</th>
								<th class="align-middle text-center" colspan="8">Condition on Discharge</th>
								<th class="align-middle text-center" rowspan="3">Total<br>Discharges</th>
							</tr>
							<tr>
								<th class="align-middle text-center" colspan="3">Non-Philhealth</th>
								<th class="align-middle text-center" colspan="3">Philhealth</th>
								<th class="align-middle text-center" rowspan="2">HMO</th>
								<th class="align-middle text-center" rowspan="2">OWWA</th>
								<th class="align-middle text-center" rowspan="2">R/I</th>
								<th class="align-middle text-center" rowspan="2">T</th>
								<th class="align-middle text-center" rowspan="2">H</th>
								<th class="align-middle text-center" rowspan="2">A</th>
								<th class="align-middle text-center" rowspan="2">U</th>
								<th class="align-middle text-center" colspan="3">Deaths</th>
							</tr>
							<tr>
								<th class="align-middle text-center">Pay</th>
								<th class="align-middle text-center">Service/Charity</th>
								<th class="align-middle text-center">Total</th>
								<th class="align-middle text-center">Pay</th>
								<th class="align-middle text-center">Service/Charity</th>
								<th class="align-middle text-center">Total</th>
								<th class="align-middle text-center">&lt; 48<br>hrs</th>
								<th class="align-middle text-center">&gt;= 48<br>hrs</th>
								<th class="align-middle text-center">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">Medicine</td>
								<td><span id="total_medic"></span></td>
								<td><span id="los_medical"></span></td>
								<td><span id="no_nphic_paytotal"></span></td>
								<td><span id="no_nphic_servitotal"></span></td>
								<td><span id="tot_medic_nphic"></span></td>
								<td><span id="no_phic_paytotal"></span></td>
								<td><span id="no_phic_servitotal"></span></td>
								<td><span id="tot_medic_phic"></span></td>
								<td>0</span></td>
								<td>0<span></td>
								<td><span id="medic_recov"></span></td>
								<td><span id="medic_t"></span></td>
								<td><span id="medic_h"></span></td>
								<td><span id="medic_a"></span></td>
								<td><span id="medic_u"></span></td>
								<td><span id="medic_a_d"></span></td>
								<td><span id="medic_b_d"></span></td>
								<td><span id="total_1"></span></td>
								<td><span id="total_medics"></span></td>
							</tr>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">Obstetrics</td>
								<td><span id="total_obstet"></span></td>
								<td><span id="los_obs"></span></td>
								<td><span id="no_obstet_nphic_paytotal"></span></td>
								<td><span id="no_obstet_nphic_servitotal"></span></td>
								<td><span id="tot_obstet_nphic"></span></td>
								<td><span id="no_obstet_phic_paytotal"></span></td>
								<td><span id="no_obstet_phic_servitotal"></span></td>
								<td><span id="tot_obstet_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="obstet_recov"></span></td>
								<td><span id="obstet_t"></span></td>
								<td><span id="obstet_h"></span></td>
								<td><span id="obstet_a"></span></td>
								<td><span id="obstet_u"></span></td>
								<td><span id="obstet_a_d"></span></td>
								<td><span id="obstet_b_d"></span></td>
								<td><span id="total_2"></span></td>
								<td><span id="total_obstets"></span></td>
							</tr>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">Gynecology</td>
								<td><span id="total_gyne"></span></td>
								<td><span id="los_gyne"></span></td>
								<td><span id="no_gyne_nphic_paytotal"></span></td>
								<td><span id="no_gyne_nphic_servitotal"></span></td>
								<td><span id="tot_gyne_nphic"></span></td>
								<td><span id="no_gyne_phic_paytotal"></span></td>
								<td><span id="no_gyne_phic_servitotal"></span></td>
								<td><span id="tot_gyne_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="gyne_recov"></span></td>
								<td><span id="gyne_t"></span></td>
								<td><span id="gyne_h"></span></td>
								<td><span id="gyne_a"></span></td>
								<td><span id="gyne_u"></span></td>
								<td><span id="gyne_a_d"></span></td>
								<td><span id="gyne_b_d"></span></td>
								<td><span id="total_3"></span></td>
								<td><span id="total_gynes"></span></td>
							</tr>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">Pediatrics</td>
								<td><span id="total_pediatric"></span></td>
								<td><span id="los_pediatrics"></span></td>
								<td><span id="no_pediatrics_nphic_paytotal"></span></td>
								<td><span id="no_pediatrics_nphic_servitotal"></span></td>
								<td><span id="tot_pediatrics_nphic"></span></td>
								<td><span id="no_pediatrics_phic_paytotal"></span></td>
								<td><span id="no_pediatrics_phic_servitotal"></span></td>
								<td><span id="tot_pediatrics_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="pediatrics_recov"></span></td>
								<td><span id="pediatrics_t"></span></td>
								<td><span id="pediatrics_h"></span></td>
								<td><span id="pediatrics_a"></span></td>
								<td><span id="pediatrics_u"></span></td>
								<td><span id="pediatrics_a_d"></span></td>
								<td><span id="pediatrics_b_d"></span></td>
								<td><span id="total_4"></span></td>
								<td><span id="total_pediatrics"></span></td>
							</tr>

							<tr>
								<td class="align-middle text-left" colspan="20">Surgery</td>
							</tr>

							<tr class="align-middle text-right">
								<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;Pedia</td>
								<td><span id="total_surpedia"></span></td>
								<td><span id="los_surpedia"></span></td>
								<td><span id="no_surpedia_nphic_paytotal"></span></td>
								<td><span id="no_surpedia_nphic_servitotal"></span></td>
								<td><span id="tot_surpedia_nphic"></span></td>
								<td><span id="no_surpedia_phic_paytotal"></span></td>
								<td><span id="no_surpedia_phic_servitotal"></span></td>
								<td><span id="tot_surpedia_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="surpedia_recov"></span></td>
								<td><span id="surpeds_t"></span></td>
								<td><span id="surpeds_h"></span></td>
								<td><span id="surpeds_a"></span></td>
								<td><span id="surpeds_u"></span></td>
								<td><span id="surpeds_a_d"></span></td>
								<td><span id="surpeds_b_d"></span></td>
								<td><span id="total_5"></span></td>
								<td><span id="total_surpedias"></span></td>
							</tr>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;Adult</td>
								<td><span id="total_suradus"></span></td>
								<td><span id="los_suradus"></span></td>
								<td><span id="no_suradus_nphic_paytotal"></span></td>
								<td><span id="no_suradus_nphic_servitotal"></span></td>
								<td><span id="tot_suradus_nphic"></span></td>
								<td><span id="no_suradus_phic_paytotal"></span></td>
								<td><span id="no_suradus_phic_servitotal"></span></td>
								<td><span id="tot_suradus_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="suradus_recov"></span></td>
								<td><span id="suradus_t"></span></td>
								<td><span id="suradus_h"></span></td>
								<td><span id="suradus_a"></span></td>
								<td><span id="suradus_u"></span></td>
								<td><span id="suradus_a_d"></span></td>
								<td><span id="suradus_b_d"></span></td>
								<td><span id="total_6"></span></td>
								<td><span id="total_suraduss"></span></td>
							</tr>
							<!-- <tr class="align-middle text-right">
								<td class="align-middle text-left">Others, Specify</td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td></td>
								<td></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
								<td><span id=""></span></td>
							</tr> -->
							<tr class="align-middle text-right">
								<td class="align-middle text-left">Total</td>
								<td><span id="totnuminpatient"></span></td>
								<td><span id="totnuminpatservs"></span></td>
								<td><span id="total_np_pays"></span></td>
								<td><span id="total_np_servs"></span></td>
								<td><span id="total_np_totals"></span></td>
								<td><span id="total_p_pays"></span></td>
								<td><span id="total_p_servs"></span></td>
								<td><span id="total_p_totals"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="total_ris"></span></td>
								<td><span id="totals_t"></span></td>
								<td><span id="totals_h"></span></td>
								<td><span id="totals_a"></span></td>
								<td><span id="totals_u"></span></td>
								<td><span id="total_lessthan48_a"></span></td>
								<td><span id="total_graterthan48_a"></span></td>
								<td><span id="total_death_a"></span></td>
								<td><span id="total_discharges_a"></span></td>
							</tr>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">Total Newborn</td>
								<td><span id="total_nb_no_of_pat_a"></span></td>
								<td><span id="total_nb_length_of_stay_a"></span></td>
								<td><span id="tot_nb_np_pay"></span></td>
								<td><span id="tot_nb_np_ser"></span></td>
								<td><span id="tot_nb_total_np"></span></td>
								<td><span id="tot_nb_phic_pay"></span></td>
								<td><span id="tot_nb_phic_serv"></span></td>
								<td><span id="tot_nb_total_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="tot_nb_ri"></span></td>
								<td><span id="tot_nb_t"></span></td>
								<td><span id="tot_nb_h"></span></td>
								<td><span id="tot_nb_a"></span></td>
								<td><span id="tot_nb_u"></span></td>
								<td><span id="tot_nb_lessthan"></span></td>
								<td><span id="tot_nb_graterthan"></span></td>
								<td><span id="tot_nb_death"></span></td>
								<td><span id="tot_nb_no_of_pat_a"></span></td>
							</tr>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;Pathologic</td>
								<td><span id="tot_patho"></span></td>
								<td><span id="los_pathology"></span></td>
								<td><span id="no_pathology_nphic_paytotal"></span></td>
								<td><span id="no_pathology_nphic_servitotal"></span></td>
								<td><span id="tot_pathology_nphic"></span></td>
								<td><span id="no_pathology_phic_paytotal"></span></td>
								<td><span id="no_pathology_phic_servitotal"></span></td>
								<td><span id="tot_pathology_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="pathology_recov"></span></td>
								<td><span id="pathology_t"></span></td>
								<td><span id="pathology_h"></span></td>
								<td><span id="pathology_a"></span></td>
								<td><span id="pathology_u"></span></td>
								<td><span id="pathology_a_d"></span></td>
								<td><span id="pathology_b_d"></span></td>
								<td><span id="total_7"></span></td>
								<td><span id="total_pathology"></span></td>
							</tr>
							<tr class="align-middle text-right">
								<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;Non-Pathologic</td>
								<td><span id="tot_unpatho"></span></td>
								<td><span id="los_unpathology"></span></td>
								<td><span id="no_unpathology_nphic_paytotal"></span></td>
								<td><span id="no_unpathology_nphic_servitotal"></span></td>
								<td><span id="tot_unpathology_nphic"></span></td>
								<td><span id="no_unpathology_phic_paytotal"></span></td>
								<td><span id="no_unpathology_phic_servitotal"></span></td>
								<td><span id="tot_unpathology_phic"></span></td>
								<td>0</td>
								<td>0</td>
								<td><span id="unpathology_recov"></span></td>
								<td><span id="unpathology_t"></span></td>
								<td><span id="unpathology_h"></span></td>
								<td><span id="unpathology_a"></span></td>
								<td><span id="unpathology_u"></span></td>
								<td><span id="unpathology_a_d"></span></td>
								<td><span id="unpathology_b_d"></span></td>
								<td><span id="total_8"></span></td>
								<td><span id="total_unpathology"></span></td>
							</tr>
						</tbody>
						<input type="hidden" id="no_medic">
						<input type="hidden" id="no_obstet">
						<input type="hidden" id="no_gyne">
						<input type="hidden" id="no_pediatrics">
						<input type="hidden" id="no_surpeds">
						<input type="hidden" id="no_suradus">
						<input type="hidden" id="no_pathology">
						<input type="hidden" id="no_unpathology">
						<input type="hidden" id="los_medic">
						<input type="hidden" id="los_obstet">
						<input type="hidden" id="los_pediatrics">
						<input type="hidden" id="los_surpeds">
						<input type="hidden" id="los_suradus">
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		Inpatient();
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
		document.getElementById('report_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_discharge/discharges.js"></script>