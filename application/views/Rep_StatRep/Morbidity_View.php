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
	<div class="col-md-8">
		<div class="card card-accent-success">
			<div class=" card-header">
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Ten leading causes of Morbidity based on final discharge diagnosis <small>(Year : <span id="rep_year" readonly></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="MortalDeathsTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead class="align-middle text-center">
						<tr>
							<th class="align-middle text-left">Cause of Morbidity / Illness / Injury</th>
							<th hidden colspan="2" width="4%">&lt; 1</th>
							<th hidden colspan="2" width="4%">1-4</th>
							<th hidden colspan="2" width="4%">5-9 </th>
							<th hidden colspan="2" width="4%">10-14 </th>
							<th hidden colspan="2" width="4%">15-19 </th>
							<th hidden colspan="2" width="4%">20-24</th>
							<th hidden colspan="2" width="4%">25-29</th>
							<th hidden colspan="2" width="4%">30-34</th>
							<th hidden colspan="2" width="4%">35-39</th>
							<th hidden colspan="2" width="4%">40-44</th>
							<th hidden colspan="2" width="4%">45-49</th>
							<th hidden colspan="2" width="4%">50-54</th>
							<th hidden colspan="2" width="4%">55-59</th>
							<th hidden colspan="2" width="4%">60-64</th>
							<th hidden colspan="2" width="4%">65-69</th>
							<th hidden colspan="2" width="4%">&gt; = 70</th>
							<th hidden colspan="2" width="5%">Sub total</th>
							<th class="align-middle text-center">Number</th>
							<th class="align-middle text-center">ICD-10 Code</th>
						</tr>
						<tr class="align-middle text-center">
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
							<th hidden>M</th>
							<th hidden>F</th>
						</tr>
					</thead>
					<tbody>
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
				<div class="table-responsive">
					<table id="MorbidTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th class="align-middle text-center" rowspan="3">Cause of Morbidity / Illness / Injury</th>
								<th class="align-middle text-center" colspan="32">Age Distribution of Patients</th>
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
								<th colspan="2" width="4%">&gt;= 70</th>
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
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		MorbidFinalDis($.session.get('year'));
		Morbid($.session.get('year'));
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('report_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_morbidity/morbidity.js"></script>