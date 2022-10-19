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
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Twenty Leading Causes of Morbidity <small>(Year : <label id="rep_year" readonly></label>)</small></div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="overall-tab" data-toggle="tab" href="#overall" role="tab" aria-controls="overall" aria-expanded="true"></i>Overall</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="medicine-tab" data-toggle="tab" href="#medicine" role="tab" aria-controls="medicine">Medicine</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="surgery-tab" data-toggle="tab" href="#surgery" role="tab" aria-controls="surgery"></i>Surgery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="obstetrics-tab" data-toggle="tab" href="#obstetrics" role="tab" aria-controls="obstetrics"></i>Obstetrics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="gynecology-tab" data-toggle="tab" href="#gynecology" role="tab" aria-controls="gynecology"></i>Gynecology</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="pediatric-tab" data-toggle="tab" href="#pediatric" role="tab" aria-controls="pediatric"></i>Pediatric</a>
					</li>
				</ul>
				<div class="tab-content" id="tabChargescontent">
					<div class="tab-pane fade show active" id="overall" role="tabpanel" aria-labelledby="overall-tab">
						<br>
						<table id="MorbidTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="3">Discharge Diagnosis (Primary)</th>
									<th class="align-middle text-center" colspan="32">Age Distribution of Patients</th>
									<th class="align-middle text-center" rowspan="2" colspan="3">Total</th>
									<th class="align-middle text-center" rowspan="3">ICD-10 Code</th>
								</tr>
								<tr class="align-middle text-center">
									<th colspan="2">&lt; 1</th>
									<th colspan="2">1-4</th>
									<th colspan="2">5-9 </th>
									<th colspan="2">10-14 </th>
									<th colspan="2">15-19 </th>
									<th colspan="2">20-24</th>
									<th colspan="2">25-29</th>
									<th colspan="2">30-34</th>
									<th colspan="2">35-39</th>
									<th colspan="2">40-44</th>
									<th colspan="2">45-49</th>
									<th colspan="2">50-54</th>
									<th colspan="2">55-59</th>
									<th colspan="2">60-64</th>
									<th colspan="2">65-69</th>
									<th colspan="2">&gt;= 70</th>
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
									<th>T</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="medicine" role="tabpanel" aria-labelledby="medicine-tab">
						<br>
						<table id="Morbid_Medicine_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="3">Discharged Diagnosis (Primary)</th>
									<th class="align-middle text-center" colspan="6">Condition on Discharge</th>
									<th class="align-middle text-center" rowspan="2" colspan="2">Total</th>
									<th class="align-middle text-center" rowspan="3">ICD-10 Code</th>
								</tr>
								<tr>
									<th class="align-middle text-center" colspan="3">Improved</th>
									<th class="align-middle text-center" colspan="3">Unimproved</th>
								</tr>
								<tr class="align-middle text-center">
									<th>Male</th>
									<th>Female</th>
									<th>Total</th>
									<th>Male</th>
									<th>Female</th>
									<th>Total</th>
									<th>Male</th>
									<th>Female</th>
									<!-- <th>Total</th> -->
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="surgery" role="tabpanel" aria-labelledby="surgery-tab">
						<br>
						<table id="Morbid_Surgery_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="3">Discharged Diagnosis (Primary)</th>
									<th class="align-middle text-center" colspan="9">Condition on Discharge</th>
									<th class="align-middle text-center" rowspan="2" colspan="2">Total</th>
									<th class="align-middle text-center" rowspan="3">ICD-10 Code</th>
								</tr>
								<tr>
									<th class="align-middle text-center" colspan="3">Recovered</th>
									<th class="align-middle text-center" colspan="3">Improved</th>
									<th class="align-middle text-center" colspan="3">Unimproved</th>
								</tr>
								<tr class="align-middle text-center">
									<th>Male</th>
									<th>Female</th>
									<th>Total</th>
									<th>Male</th>
									<th>Female</th>
									<th>Total</th>
									<th>Male</th>
									<th>Female</th>
									<th>Total</th>
									<th>Male</th>
									<th>Female</th>
									<!-- <th>Total</th> -->
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="obstetrics" role="tabpanel" aria-labelledby="obstetrics-tab">
						<br>
						<table id="Morbid_Obstetrics_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="2">Discharged Diagnosis (Primary)</th>
									<th class="align-middle text-center" colspan="3">Condition on Discharge</th>

									<th class="align-middle text-center" rowspan="2">Total</th>
									<th class="align-middle text-center" rowspan="2">ICD-10 Code</th>
								</tr>
								<tr>
									<th class="align-middle text-center">Recovered</th>
									<th class="align-middle text-center">Improved</th>
									<th class="align-middle text-center">Unimproved</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="gynecology" role="tabpanel" aria-labelledby="gynecology-tab">
						<br>
						<table id="Morbid_Gynecology_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="2">Discharged Diagnosis (Primary)</th>
									<th class="align-middle text-center" colspan="3">Condition on Discharge</th>

									<th class="align-middle text-center" rowspan="2">Total</th>
									<th class="align-middle text-center" rowspan="2">ICD-10 Code</th>
								</tr>
								<tr>
									<th class="align-middle text-center">Recovered</th>
									<th class="align-middle text-center">Improved</th>
									<th class="align-middle text-center">Unimproved</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="pediatric" role="tabpanel" aria-labelledby="pediatric-tab">
						<br>
						<table id="Morbid_Pediatric_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th class="align-middle text-center" rowspan="3">Discharged Diagnosis (Primary)</th>
									<th class="align-middle text-center" colspan="6">Condition on Discharge</th>
									<th class="align-middle text-center" colspan="2" rowspan="2">Total</th>
									<th class="align-middle text-center" rowspan="3">ICD-10 Code</th>
								</tr>
								<tr>
									<th class="align-middle text-center" colspan="3">Improved</th>
									<th class="align-middle text-center" colspan="3">Unimproved</th>
								</tr>
								<tr class="align-middle text-center">
									<th>Male</th>
									<th>Female</th>
									<th>Total</th>
									<th>Male</th>
									<th>Female</th>
									<th>Total</th>
									<th>Male</th>
									<th>Female</th>
									<!-- <th>Total</th> -->
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
</div>

<script type="text/javascript">
	$(document).ready(function() {
		Morbid($.session.get('year'));
		Morbid_Med($.session.get('year'));
		Morbid_Surgi($.session.get('year'));
		Morbid_Obstetrics($.session.get('year'));
		Morbid_Gynecology($.session.get('year'));
		Morbid_Pediatric($.session.get('year'));
		document.getElementById('rep_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Hfdb_Stat_Rep/Morbidity/Lead_Cause_Morbid.js"></script>