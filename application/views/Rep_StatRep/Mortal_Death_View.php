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
		<div class="row">
			<div class="col-md-4">
				<div class="card card-accent-success">
					<div class="card-header">
						<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Deaths <small>(Year : <span id="rep_year" readonly></span>)</small></div>
					</div>
					<div class="card-body table-responsive">
						<input type="hidden" id="medical_b_d">
						<input type="hidden" id="obstetrics_b_d">
						<input type="hidden" id="gynecology_b_d">
						<input type="hidden" id="pediatrics_b_d">
						<input type="hidden" id="surpeds_b_d">
						<input type="hidden" id="suradus_b_d">
						<input type="hidden" id="medical_a_d">
						<input type="hidden" id="obstetrics_a_d">
						<input type="hidden" id="gynecology_a_d">
						<input type="hidden" id="pediatrics_a_d">
						<input type="hidden" id="surpeds_a_d">
						<input type="hidden" id="suradus_a_d">
						<table id="DeathsTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th width="70%">Types of deaths</th>
									<th class="align-middle text-center">Number</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Total deaths</td>
									<td class="align-middle text-right"><span id="TotDeaths"></span></td>
								</tr>
								<tr>
									<td>Total number of inpatient deaths</td>
									<td class="align-middle text-right"><span id="TotInpatDeaths"></span></td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;Total deaths &lt 48 hours</td>
									<td class="align-middle text-right"><span id="TotLessDeaths"></span></td>
								</tr>
								<tr>
									<td>&nbsp;&nbsp;&nbsp;Total deaths &gt= 48 hours</td>
									<td class="align-middle text-right"><span id="TotGreatDeaths"></span></td>
								</tr>
								<tr>
									<td>Total number of emergency room deaths</td>
									<td class="align-middle text-right"><span id="tot_er"></span></td>
								</tr>
								<tr>
									<td>Total number of cases declared 'dead on arrival'</td>
									<td class="align-middle text-right"><span id="tot_doa"></span></td>
								</tr>
								<tr>
									<td>Total number of still births</td>
									<td class="align-middle text-right"><span id="totstillbirths"></span></td>
								</tr>
								<tr>
									<td>Total number of neonatal deaths</td>
									<td class="align-middle text-right"><span id="totneodeaths"></span></td>
								</tr>
								<tr>
									<td>Total number of maternal deaths</td>
									<td class="align-middle text-right"><span id="totmatdeaths"></span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card card-accent-success">
					<div class="card-header">
						<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Ten leading causes of Mortality / Deaths <small>(Year : <span id="reps_year" readonly></span>)</small></div>
					</div>
					<div class="card-body table-responsive">
						<table id="MortalDeathsTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead class="align-middle text-center">
								<tr>
									<th class="align-middle text-left"> Mortality / Deaths</th>
									<th class="align-middle text-center">Number</th>
									<th class="align-middle text-center">ICD-10 Code</th>
								</tr>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
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
					<div class="card-body">
						<table id="MortalTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr class="align-middle text-center">
									<th class="align-middle text-center" rowspan="3">Cause of<br>Death</th>
									<th colspan="32">Age Distribution of Patients</th>
									<th class="align-middle text-center" rowspan="2" colspan="2" width="5%">Sub total</th>
									<th class="align-middle text-center" width="5%" rowspan="3">Total</th>
									<th class="align-middle text-center" width="5%" rowspan="3">ICD-10 Code</th>
								</tr>
								<tr class="align-middle text-center">
									<th colspan="2" width="4%">&lt; 1</th>
									<th colspan="2" width="4%">1-4</th>
									<th colspan="2" width="4%">5-9 </th>
									<th colspan="2" width="4%">10-14 </th>
									<th colspan="2" width="4%">15-19 </th>
									<th colspan="2" width="4%">20-24</th>
									<th colspan="2" width="4%">25-29</th>
									<th colspan="2" width="4%">30-34</th>
									<th colspan="2" width="4%">35-39</th>
									<th colspan="2" width="4%">40-44</th>
									<th colspan="2" width="4%">45-49</th>
									<th colspan="2" width="4%">50-54</th>
									<th colspan="2" width="4%">55-59</th>
									<th colspan="2" width="4%">60-64</th>
									<th colspan="2" width="4%">65-69</th>
									<th colspan="2" width="4%">&gt;=70</th>
									
								</tr>
								<tr class="align-middle text-center">
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
									<th>M</th>
									<th>F</th>
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
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		MortalDeaths($.session.get('year'));
		Mortal($.session.get('year'));
		Deaths();
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
		document.getElementById('repss_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_mortal_death/mortal_death.js"></script>