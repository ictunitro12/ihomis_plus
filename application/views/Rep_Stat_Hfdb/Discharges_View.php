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
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Discharges <small>(Year : <span id="rep_year"></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="InpatientCareTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th class="align-middle text-center" rowspan="4">Type of Service</th>

							<th class="align-middle text-center" colspan="10">Type of Accomodation</th>
							<th class="align-middle text-center" rowspan="4">Total<br>Discharges</th>
							<th class="align-middle text-center" rowspan="4">Total Length<br>of Stay</th>
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
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Medicine</td>
							<td hidden><label id="total_medic"></label></td>
							<td><label id="no_nphic_paytotal"></label></td>
							<td hidden><label id="tot_medic_nphic"></label></td>
							<td hidden><label id="no_phic_paytotal"></label></td>
							<td><label id="no_phic_paytotal1"></label></td>
							<td><label id="no_phic_paytotal2"></label></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><label id="no_nphic_servitotal"></label></td>
							<td hidden><label id="no_phic_servitotal"></label></td>
							<td><label id="no_phic_servitotal1"></label></td>
							<td><label id="no_phic_servitotal2"></label></td>
							<td hidden><label id="tot_medic_phic"></label></td>
							<td hidden><label id="medic_recov"></label></td>
							<td hidden><label id="medic_t"></label></td>
							<td hidden><label id="medic_h"></label></td>
							<td hidden><label id="medic_a"></label></td>
							<td hidden><label id="medic_u"></label></td>
							<td hidden><label id="medic_a_d"></label></td>
							<td hidden><label id="medic_b_d"></label></td>
							<td hidden><label id="total_1"></label></td>
							<td>0</td>
							<td><label id="total_medics"></label></td>
							<td><label id="los_medical"></label></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Obstetrics</td>
							<td hidden><span id="total_obstet"></span></td>
							<td><span id="no_obstet_nphic_paytotal"></span></td>
							<td hidden><span id="tot_obstet_nphic"></span></td>
							<td hidden><span id="no_obstet_phic_paytotal"></span></td>
							<td><span id="no_obstet_phic_paytotal1"></span></td>
							<td><span id="no_obstet_phic_paytotal2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="no_obstet_nphic_servitotal"></span></td>
							<td hidden><span id="no_obstet_phic_servitotal"></span></td>
							<td><span id="no_obstet_phic_servitotal1"></span></td>
							<td><span id="no_obstet_phic_servitotal2"></span></td>
							<td hidden><span id="tot_obstet_phic"></span></td>
							<td hidden><span id="obstet_recov"></span></td>
							<td hidden><span id="obstet_t"></span></td>
							<td hidden><span id="obstet_h"></span></td>
							<td hidden><span id="obstet_a"></span></td>
							<td hidden><span id="obstet_u"></span></td>
							<td hidden><span id="obstet_a_d"></span></td>
							<td hidden><span id="obstet_b_d"></span></td>
							<td hidden><span id="total_2"></span></td>
							<td>0</td>
							<td><span id="total_obstets"></span></td>
							<td><span id="los_obs"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Gynecology</td>
							<td hidden><span id="total_gyne"></span></td>
							<td><span id="no_gyne_nphic_paytotal"></span></td>
							<td hidden><span id="tot_gyne_nphic"></span></td>
							<td hidden><span id="no_gyne_phic_paytotal"></span></td>
							<td><span id="no_gyne_phic_paytotal1"></span></td>
							<td><span id="no_gyne_phic_paytotal2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="no_gyne_nphic_servitotal"></span></td>
							<td hidden><span id="no_gyne_phic_servitotal"></span></td>
							<td><span id="no_gyne_phic_servitotal1"></span></td>
							<td><span id="no_gyne_phic_servitotal2"></span></td>
							<td hidden><span id="tot_gyne_phic"></span></td>
							<td hidden><span id="gyne_recov"></span></td>
							<td hidden><span id="gyne_t"></span></td>
							<td hidden><span id="gyne_h"></span></td>
							<td hidden><span id="gyne_a"></span></td>
							<td hidden><span id="gyne_u"></span></td>
							<td hidden><span id="gyne_a_d"></span></td>
							<td hidden><span id="gyne_b_d"></span></td>
							<td hidden><span id="total_3"></span></td>
							<td>0</td>
							<td><span id="total_gynes"></span></td>
							<td><span id="los_gyne"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Pediatrics</td>
							<td hidden><span id="total_pediatric"></span></td>
							<td><span id="no_pediatrics_nphic_paytotal"></span></td>
							<td hidden><span id="tot_pediatrics_nphic"></span></td>
							<td hidden><span id="no_pediatrics_phic_paytotal"></span></td>
							<td><span id="no_pediatrics_phic_paytotal1"></span></td>
							<td><span id="no_pediatrics_phic_paytotal2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="no_pediatrics_nphic_servitotal"></span></td>
							<td hidden><span id="no_pediatrics_phic_servitotal"></span></td>
							<td><span id="no_pediatrics_phic_servitotal1"></span></td>
							<td><span id="no_pediatrics_phic_servitotal2"></span></td>
							<td hidden><span id="tot_pediatrics_phic"></span></td>
							<td hidden><span id="pediatrics_recov"></span></td>
							<td hidden><span id="pediatrics_t"></span></td>
							<td hidden><span id="pediatrics_h"></span></td>
							<td hidden><span id="pediatrics_a"></span></td>
							<td hidden><span id="pediatrics_u"></span></td>
							<td hidden><span id="pediatrics_a_d"></span></td>
							<td hidden><span id="pediatrics_b_d"></span></td>
							<td hidden><span id="total_4"></span></td>
							<td>0</td>
							<td><span id="total_pediatrics"></span></td>
							<td><span id="los_pediatrics"></span></td>
						</tr>
						<tr>
							<td class="align-middle text-left" colspan="13">Surgery</td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adult</td>
							<td hidden><span id="total_suradus"></span></td>
							<td><span id="no_suradus_nphic_paytotal"></span></td>
							<td hidden><span id="tot_suradus_nphic"></span></td>
							<td hidden><span id="no_suradus_phic_paytotal"></span></td>
							<td><span id="no_suradus_phic_paytotal1"></span></td>
							<td><span id="no_suradus_phic_paytotal2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="no_suradus_nphic_servitotal"></span></td>
							<td hidden><span id="no_suradus_phic_servitotal"></span></td>
							<td><span id="no_suradus_phic_servitotal1"></span></td>
							<td><span id="no_suradus_phic_servitotal2"></span></td>
							<td hidden><span id="tot_suradus_phic"></span></td>
							<td hidden><span id="suradus_recov"></span></td>
							<td hidden><span id="suradus_t"></span></td>
							<td hidden><span id="suradus_h"></span></td>
							<td hidden><span id="suradus_a"></span></td>
							<td hidden><span id="suradus_u"></span></td>
							<td hidden><span id="suradus_a_d"></span></td>
							<td hidden><span id="suradus_b_d"></span></td>
							<td hidden><span id="total_6"></span></td>
							<td>0</td>
							<td><span id="total_suraduss"></span></td>
							<td><span id="los_suradus"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pedia</td>
							<td hidden><span id="total_surpedia"></span></td>
							<td><span id="no_surpedia_nphic_paytotal"></span></td>
							<td hidden><span id="tot_surpedia_nphic"></span></td>
							<td hidden><span id="no_surpedia_phic_paytotal"></span></td>
							<td><span id="no_surpedia_phic_paytotal1"></span></td>
							<td><span id="no_surpedia_phic_paytotal2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="no_surpedia_nphic_servitotal"></span></td>
							<td hidden><span id="no_surpedia_phic_servitotal"></span></td>
							<td><span id="no_surpedia_phic_servitotal1"></span></td>
							<td><span id="no_surpedia_phic_servitotal2"></span></td>
							<td hidden><span id="tot_surpedia_phic"></span></td>
							<td hidden><span id="surpedia_recov"></span></td>
							<td hidden><span id="surpeds_t"></span></td>
							<td hidden><span id="surpeds_h"></span></td>
							<td hidden><span id="surpeds_a"></span></td>
							<td hidden><span id="surpeds_u"></span></td>
							<td hidden><span id="surpeds_a_d"></span></td>
							<td hidden><span id="surpeds_b_d"></span></td>
							<td hidden><span id="total_5"></span></td>
							<td>0</td>
							<td><span id="total_surpedias"></span></td>
							<td><span id="los_surpedia"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left" colspan="13">Others (specify)</td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Total</td>
							<td hidden><span id="totnuminpatient"></span></td>
							<td><span id="total_np_pays"></span></td>
							<td hidden><span id="total_np_totals"></span></td>
							<td hidden><span id="total_p_pays"></span></td>
							<td><span id="total_p_pays1"></span></td>
							<td><span id="total_p_pays2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="total_np_servs"></span></td>
							<td hidden><span id="total_p_servs"></span></td>
							<td><span id="total_p_servs1"></span></td>
							<td><span id="total_p_servs2"></span></td>
							<td hidden><span id="total_p_totals"></span></td>
							<td hidden><span id="total_ris"></span></td>
							<td hidden><span id="totals_t"></span></td>
							<td hidden><span id="totals_h"></span></td>
							<td hidden><span id="totals_a"></span></td>
							<td hidden><span id="totals_u"></span></td>
							<td hidden><span id="total_lessthan48_a"></span></td>
							<td hidden><span id="total_graterthan48_a"></span></td>
							<td hidden><span id="total_death_a"></span></td>
							<td>0</td>
							<td><span id="total_discharges_a"></span></td>
							<td><span id="totnuminpatservs"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Total Newborn</td>
							<td hidden><span id="total_nb_no_of_pat_a"></span></td>
							<td><span id="tot_nb_np_pay"></span></td>
							<td hidden><span id="tot_nb_total_np"></span></td>
							<td hidden><span id="tot_nb_phic_pay"></span></td>
							<td><span id="tot_nb_phic_pay1"></span></td>
							<td><span id="tot_nb_phic_pay2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="tot_nb_np_ser"></span></td>
							<td hidden><span id="tot_nb_phic_serv"></span></td>
							<td><span id="tot_nb_phic_serv1"></span></td>
							<td><span id="tot_nb_phic_serv2"></span></td>
							<td hidden><span id="tot_nb_total_phic"></span></td>
							<td hidden><span id="tot_nb_ri"></span></td>
							<td hidden><span id="tot_nb_t"></span></td>
							<td hidden><span id="tot_nb_h"></span></td>
							<td hidden><span id="tot_nb_a"></span></td>
							<td hidden><span id="tot_nb_u"></span></td>
							<td hidden><span id="tot_nb_lessthan"></span></td>
							<td hidden><span id="tot_nb_graterthan"></span></td>
							<td hidden><span id="tot_nb_death"></span></td>
							<td>0</td>
							<td><span id="tot_nb_no_of_pat_a"></span></td>
							<td><span id="total_nb_length_of_stay_a"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pathologic</td>
							<td hidden><span id="tot_patho"></span></td>
							<td><span id="no_pathology_nphic_paytotal"></span></td>
							<td hidden><span id="tot_pathology_nphic"></span></td>
							<td hidden><span id="no_pathology_phic_paytotal"></span></td>
							<td><span id="no_pathology_phic_paytotal1"></span></td>
							<td><span id="no_pathology_phic_paytotal2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="no_pathology_nphic_servitotal"></span></td>
							<td hidden><span id="no_pathology_phic_servitotal"></span></td>
							<td><span id="no_pathology_phic_servitotal1"></span></td>
							<td><span id="no_pathology_phic_servitotal2"></span></td>
							<td hidden><span id="tot_pathology_phic"></span></td>
							<td hidden><span id="pathology_recov"></span></td>
							<td hidden><span id="pathology_t"></span></td>
							<td hidden><span id="pathology_h"></span></td>
							<td hidden><span id="pathology_a"></span></td>
							<td hidden><span id="pathology_u"></span></td>
							<td hidden><span id="pathology_a_d"></span></td>
							<td hidden><span id="pathology_b_d"></span></td>
							<td hidden><span id="total_7"></span></td>
							<td>0</td>
							<td><span id="total_pathology"></span></td>
							<td><span id="los_pathology"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Non-Pathologic</td>
							<td hidden><span id="tot_unpatho"></span></td>
							<td><span id="no_unpathology_nphic_paytotal"></span></td>
							<td hidden><span id="tot_unpathology_nphic"></span></td>
							<td hidden><span id="no_unpathology_phic_paytotal"></span></td>
							<td><span id="no_unpathology_phic_paytotal1"></span></td>
							<td><span id="no_unpathology_phic_paytotal2"></span></td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td><span id="no_unpathology_nphic_servitotal"></span></td>
							<td hidden><span id="no_unpathology_phic_servitotal"></span></td>
							<td><span id="no_unpathology_phic_servitotal1"></span></td>
							<td><span id="no_unpathology_phic_servitotal2"></span></td>
							<td hidden><span id="tot_unpathology_phic"></span></td>
							<td hidden><span id="unpathology_recov"></span></td>
							<td hidden><span id="unpathology_t"></span></td>
							<td hidden><span id="unpathology_h"></span></td>
							<td hidden><span id="unpathology_a"></span></td>
							<td hidden><span id="unpathology_u"></span></td>
							<td hidden><span id="unpathology_a_d"></span></td>
							<td hidden><span id="unpathology_b_d"></span></td>
							<td hidden><span id="total_8"></span></td>
							<td>0</td>
							<td><span id="total_unpathology"></span></td>
							<td><span id="los_unpathology"></span></td>
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
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Average Length of Stay <small>(Year : <span id="reps_year"></span>)</small></div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-bordered table-sm" width="100%">
							<tbody>
								<tr>
									<td><b>Average Length of Stay (ALOS) of admitted patients : <span id="alos"></span> day/s</b><br><i>*Average length of stay: Average number of days each inpatient stays in the hospital for each episode of care.</i>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-bordered table-sm" width="100%">
							<tbody>
								<tr>
									<td><b>Average Length of Stay (ALOS) of newborns : <span id="alosnewborn"></span> day/s</b><br><i>*Average length of stay: Average number of days each inpatient stays in the hospital for each episode of care.</i>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Result of Treatment / Condition on Discharge <small>(Year : <span id="report_year"></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="Result_of_Treatment" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th class="align-middle text-center" rowspan="3">Type of Service</th>
							<th class="align-middle text-center" colspan="18">Result of Treatment / Condition on Discharge</th>
							<th class="align-middle text-center" rowspan="3">Grand Total</th>
						</tr>
						<tr>
							<th class="align-middle text-center" colspan="5">Recovered</th>
							<th class="align-middle text-center" colspan="5">Improved</th>
							<th class="align-middle text-center" colspan="5">Unimproved</th>
							<th class="align-middle text-center" colspan="3">Died</th>
						</tr>
						<tr>
							<th class="align-middle text-center">Disch</th>
							<th class="align-middle text-center">Trans</th>
							<th class="align-middle text-center">Hama</th>
							<th class="align-middle text-center">Abs</th>
							<th class="align-middle text-center">Total</th>
							<th class="align-middle text-center">Disch</th>
							<th class="align-middle text-center">Trans</th>
							<th class="align-middle text-center">Hama</th>
							<th class="align-middle text-center">Abs</th>
							<th class="align-middle text-center">Total</th>
							<th class="align-middle text-center">Disch</th>
							<th class="align-middle text-center">Trans</th>
							<th class="align-middle text-center">Hama</th>
							<th class="align-middle text-center">Abs</th>
							<th class="align-middle text-center">Total</th>
							<th class="align-middle text-center">&lt; 48</th>
							<th class="align-middle text-center">&gt;= 48</th>
							<th class="align-middle text-center">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Medicine</td>
							<td><span id="med_recov_dis"></span></td>
							<td><span id="med_recov_trans"></span></td>
							<td><span id="med_recov_hama"></span></td>
							<td><span id="med_recov_abs"></span></td>
							<td><span id="med_recov_total"></span></td>
							<td><span id="med_impro_dis"></span></td>
							<td><span id="med_impro_trans"></span></td>
							<td><span id="med_impro_hama"></span></td>
							<td><span id="med_impro_abs"></span></td>
							<td><span id="med_impro_total"></span></td>
							<td><span id="med_unimp_dis"></span></td>
							<td><span id="med_unimp_trans"></span></td>
							<td><span id="med_unimp_hama"></span></td>
							<td><span id="med_unimp_abs"></span></td>
							<td><span id="med_unimp_total"></span></td>
							<td><span id="med_less_died"></span></td>
							<td><span id="med_great_died"></span></td>
							<td><span id="med_total_died"></span></td>
							<td><span id="medicine_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Obstetrics</td>
							<td><span id="obs_recov_dis"></span></td>
							<td><span id="obs_recov_trans"></span></td>
							<td><span id="obs_recov_hama"></span></td>
							<td><span id="obs_recov_abs"></span></td>
							<td><span id="obs_recov_total"></span></td>
							<td><span id="obs_impro_dis"></span></td>
							<td><span id="obs_impro_trans"></span></td>
							<td><span id="obs_impro_hama"></span></td>
							<td><span id="obs_impro_abs"></span></td>
							<td><span id="obs_impro_total"></span></td>
							<td><span id="obs_unimp_dis"></span></td>
							<td><span id="obs_unimp_trans"></span></td>
							<td><span id="obs_unimp_hama"></span></td>
							<td><span id="obs_unimp_abs"></span></td>
							<td><span id="obs_unimp_total"></span></td>
							<td><span id="obs_less_died"></span></td>
							<td><span id="obs_great_died"></span></td>
							<td><span id="obs_total_died"></span></td>
							<td><span id="obstetrics_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Gynecology</td>
							<td><span id="gyn_recov_dis"></span></td>
							<td><span id="gyn_recov_trans"></span></td>
							<td><span id="gyn_recov_hama"></span></td>
							<td><span id="gyn_recov_abs"></span></td>
							<td><span id="gyn_recov_total"></span></td>
							<td><span id="gyn_impro_dis"></span></td>
							<td><span id="gyn_impro_trans"></span></td>
							<td><span id="gyn_impro_hama"></span></td>
							<td><span id="gyn_impro_abs"></span></td>
							<td><span id="gyn_impro_total"></span></td>
							<td><span id="gyn_unimp_dis"></span></td>
							<td><span id="gyn_unimp_trans"></span></td>
							<td><span id="gyn_unimp_hama"></span></td>
							<td><span id="gyn_unimp_abs"></span></td>
							<td><span id="gyn_unimp_total"></span></td>
							<td><span id="gyn_less_died"></span></td>
							<td><span id="gyn_great_died"></span></td>
							<td><span id="gyn_total_died"></span></td>
							<td><span id="gynecology_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Pediatrics</td>
							<td><span id="pedia_recov_dis"></span></td>
							<td><span id="pedia_recov_trans"></span></td>
							<td><span id="pedia_recov_hama"></span></td>
							<td><span id="pedia_recov_abs"></span></td>
							<td><span id="pedia_recov_total"></span></td>
							<td><span id="pedia_impro_dis"></span></td>
							<td><span id="pedia_impro_trans"></span></td>
							<td><span id="pedia_impro_hama"></span></td>
							<td><span id="pedia_impro_abs"></span></td>
							<td><span id="pedia_impro_total"></span></td>
							<td><span id="pedia_unimp_dis"></span></td>
							<td><span id="pedia_unimp_trans"></span></td>
							<td><span id="pedia_unimp_hama"></span></td>
							<td><span id="pedia_unimp_abs"></span></td>
							<td><span id="pedia_unimp_total"></span></td>
							<td><span id="pedia_less_died"></span></td>
							<td><span id="pedia_great_died"></span></td>
							<td><span id="pedia_total_died"></span></td>
							<td><span id="pediatrics_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left" colspan="20">Surgery</td>
							<td hidden><span id="surgi_recov_dis"></span></td>
							<td hidden><span id="surgi_recov_trans"></span></td>
							<td hidden><span id="surgi_recov_hama"></span></td>
							<td hidden><span id="surgi_recov_abs"></span></td>
							<td hidden><span id="surgi_recov_total"></span></td>
							<td hidden><span id="surgi_impro_dis"></span></td>
							<td hidden><span id="surgi_impro_trans"></span></td>
							<td hidden><span id="surgi_impro_hama"></span></td>
							<td hidden><span id="surgi_impro_abs"></span></td>
							<td hidden><span id="surgi_impro_total"></span></td>
							<td hidden><span id="surgi_unimp_dis"></span></td>
							<td hidden><span id="surgi_unimp_trans"></span></td>
							<td hidden><span id="surgi_unimp_hama"></span></td>
							<td hidden><span id="surgi_unimp_abs"></span></td>
							<td hidden><span id="surgi_unimp_total"></span></td>
							<td hidden><span id="surgi_less_died"></span></td>
							<td hidden><span id="surgi_great_died"></span></td>
							<td hidden><span id="surgi_total_died"></span></td>
							<td hidden><span id="surgery_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adult</td>
							<td><span id="adult_surgi_recov_dis"></span></td>
							<td><span id="adult_surgi_recov_trans"></span></td>
							<td><span id="adult_surgi_recov_hama"></span></td>
							<td><span id="adult_surgi_recov_abs"></span></td>
							<td><span id="adult_surgi_recov_total"></span></td>
							<td><span id="adult_surgi_impro_dis"></span></td>
							<td><span id="adult_surgi_impro_trans"></span></td>
							<td><span id="adult_surgi_impro_hama"></span></td>
							<td><span id="adult_surgi_impro_abs"></span></td>
							<td><span id="adult_surgi_impro_total"></span></td>
							<td><span id="adult_surgi_unimp_dis"></span></td>
							<td><span id="adult_surgi_unimp_trans"></span></td>
							<td><span id="adult_surgi_unimp_hama"></span></td>
							<td><span id="adult_surgi_unimp_abs"></span></td>
							<td><span id="adult_surgi_unimp_total"></span></td>
							<td><span id="adult_surgi_less_died"></span></td>
							<td><span id="adult_surgi_great_died"></span></td>
							<td><span id="adult_surgi_total_died"></span></td>
							<td><span id="adult_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pedia</td>
							<td><span id="pedia_surgi_recov_dis"></span></td>
							<td><span id="pedia_surgi_recov_trans"></span></td>
							<td><span id="pedia_surgi_recov_hama"></span></td>
							<td><span id="pedia_surgi_recov_abs"></span></td>
							<td><span id="pedia_surgi_recov_total"></span></td>
							<td><span id="pedia_surgi_impro_dis"></span></td>
							<td><span id="pedia_surgi_impro_trans"></span></td>
							<td><span id="pedia_surgi_impro_hama"></span></td>
							<td><span id="pedia_surgi_impro_abs"></span></td>
							<td><span id="pedia_surgi_impro_total"></span></td>
							<td><span id="pedia_surgi_unimp_dis"></span></td>
							<td><span id="pedia_surgi_unimp_trans"></span></td>
							<td><span id="pedia_surgi_unimp_hama"></span></td>
							<td><span id="pedia_surgi_unimp_abs"></span></td>
							<td><span id="pedia_surgi_unimp_total"></span></td>
							<td><span id="pedia_surgi_less_died"></span></td>
							<td><span id="pedia_surgi_great_died"></span></td>
							<td><span id="pedia_surgi_total_died"></span></td>
							<td><span id="pedia_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left" colspan="20">Others (specify)</td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Total</td>
							<td><span id="total_recov_dis"></span></td>
							<td><span id="total_recov_trans"></span></td>
							<td><span id="total_recov_hama"></span></td>
							<td><span id="total_recov_abs"></span></td>
							<td><span id="total_recov_total"></span></td>
							<td><span id="total_impro_dis"></span></td>
							<td><span id="total_impro_trans"></span></td>
							<td><span id="total_impro_hama"></span></td>
							<td><span id="total_impro_abs"></span></td>
							<td><span id="total_impro_total"></span></td>
							<td><span id="total_unimp_dis"></span></td>
							<td><span id="total_unimp_trans"></span></td>
							<td><span id="total_unimp_hama"></span></td>
							<td><span id="total_unimp_abs"></span></td>
							<td><span id="total_unimp_total"></span></td>
							<td><span id="total_less_died"></span></td>
							<td><span id="total_great_died"></span></td>
							<td><span id="total_total_died"></span></td>
							<td><span id="total_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">Total Newborn</td>
							<td><span id="newborn_recov_dis"></span></td>
							<td><span id="newborn_recov_trans"></span></td>
							<td><span id="newborn_recov_hama"></span></td>
							<td><span id="newborn_recov_abs"></span></td>
							<td><span id="newborn_recov_total"></span></td>
							<td><span id="newborn_impro_dis"></span></td>
							<td><span id="newborn_impro_trans"></span></td>
							<td><span id="newborn_impro_hama"></span></td>
							<td><span id="newborn_impro_abs"></span></td>
							<td><span id="newborn_impro_total"></span></td>
							<td><span id="newborn_unimp_dis"></span></td>
							<td><span id="newborn_unimp_trans"></span></td>
							<td><span id="newborn_unimp_hama"></span></td>
							<td><span id="newborn_unimp_abs"></span></td>
							<td><span id="newborn_unimp_total"></span></td>
							<td><span id="newborn_less_died"></span></td>
							<td><span id="newborn_great_died"></span></td>
							<td><span id="newborn_total_died"></span></td>
							<td><span id="newborn_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pathologic</td>
							<td><span id="pathologic_recov_dis"></span></td>
							<td><span id="pathologic_recov_trans"></span></td>
							<td><span id="pathologic_recov_hama"></span></td>
							<td><span id="pathologic_recov_abs"></span></td>
							<td><span id="pathologic_recov_total"></span></td>
							<td><span id="pathologic_impro_dis"></span></td>
							<td><span id="pathologic_impro_trans"></span></td>
							<td><span id="pathologic_impro_hama"></span></td>
							<td><span id="pathologic_impro_abs"></span></td>
							<td><span id="pathologic_impro_total"></span></td>
							<td><span id="pathologic_unimp_dis"></span></td>
							<td><span id="pathologic_unimp_trans"></span></td>
							<td><span id="pathologic_unimp_hama"></span></td>
							<td><span id="pathologic_unimp_abs"></span></td>
							<td><span id="pathologic_unimp_total"></span></td>
							<td><span id="pathologic_less_died"></span></td>
							<td><span id="pathologic_great_died"></span></td>
							<td><span id="pathologic_total_died"></span></td>
							<td><span id="pathologic_total"></span></td>
						</tr>
						<tr class="align-middle text-right">
							<td class="align-middle text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Non-Pathologic</td>
							<td><span id="nonpathologic_recov_dis"></span></td>
							<td><span id="nonpathologic_recov_trans"></span></td>
							<td><span id="nonpathologic_recov_hama"></span></td>
							<td><span id="nonpathologic_recov_abs"></span></td>
							<td><span id="nonpathologic_recov_total"></span></td>
							<td><span id="nonpathologic_impro_dis"></span></td>
							<td><span id="nonpathologic_impro_trans"></span></td>
							<td><span id="nonpathologic_impro_hama"></span></td>
							<td><span id="nonpathologic_impro_abs"></span></td>
							<td><span id="nonpathologic_impro_total"></span></td>
							<td><span id="nonpathologic_unimp_dis"></span></td>
							<td><span id="nonpathologic_unimp_trans"></span></td>
							<td><span id="nonpathologic_unimp_hama"></span></td>
							<td><span id="nonpathologic_unimp_abs"></span></td>
							<td><span id="nonpathologic_unimp_total"></span></td>
							<td><span id="nonpathologic_less_died"></span></td>
							<td><span id="nonpathologic_great_died"></span></td>
							<td><span id="nonpathologic_total_died"></span></td>
							<td><span id="nonpathologic_total"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
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
<input type="hidden" id="totnuminpat">
<input type="hidden" id="totnewborn">
<input type="hidden" id="totdisalive">
<input type="hidden" id="totpatadmdis">
<input type="hidden" id="totnuminpatserv">
<input type="hidden" id="totnumfac">
<input type="hidden" id="totnumanthfac">
<input type="hidden" id="totnumprevyear">

<script type="text/javascript">
	$(document).ready(function() {
		Inpatient();
		Result_of_Treatment();
		Discharges_Adult_Pedia();
		Discharges_Newborn();
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
		document.getElementById('report_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Hfdb_Stat_Rep/Discharges/Discharge.js"></script>