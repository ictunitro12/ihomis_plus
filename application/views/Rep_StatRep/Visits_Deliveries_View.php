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
	<div class="col-md-4">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Total number of Deliveries <small>(Year : <span id="rep_year"></span>)</small></div>
			</div>
			<div class="card-body">
				<!-- <input type="hidden" id="IutfTable">
				<input type="hidden" id="ForcepsTable"> -->
				<input type="hidden" id="deliveryothers">
				<table id="TotalDeliveries" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead class="align-middle text-center">
						<tr>
							<th class="align-middle text-left">Deliveries</th>
							<th>Number</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Total number of in-facility deliveries</td>
							<td class="align-middle text-right"><span id="TotDeliveries"></span></td>
						</tr>
						<tr>
							<td>Total number of vaginal deliveries (normal spontaneous)</td>
							<td class="align-middle text-right"><span id="TotBirthVaginal"></span></td>
						</tr>
						<tr>
							<td>Total number of live-birth C-section deliveries (Caesarians)</td>
							<td class="align-middle text-right"><span id="TotBirthCaesarian"></span></td>
						</tr>
						<tr>
							<td>Total number of other deliveries (forceps delivery, vacuum extraction)</td>
							<td class="align-middle text-right"><span id="TotOtherDeliveries"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Outpatient visits <small>(Year : <span id="reps_year"></span>)</small></div>
			</div>
			<div class="card-body">
				<table id="OPDVisitsTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead class="align-middle text-center">
						<tr>
							<th class="align-middle text-left" width="70%">Outpatient visits</th>
							<th class="align-middle text-center">Number</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Number of outpatient visits, new patient</td>
							<td class="align-middle text-right"><span id="NumNewPat"></span></td>
						</tr>
						<tr>
							<td>Number of outpatient visits, re-visit</td>
							<td class="align-middle text-right"><span id="NumRevisitPat"></span></td>
						</tr>
						<tr>
							<td>Number of outpatient visits, adult</td>
							<td class="align-middle text-right"><span id="NumAdult"></span></td>
						</tr>
						<tr>
							<td>Number of outpatient visits, pediatrics</td>
							<td class="align-middle text-right"><span id="NumPedia"></span></td>
						</tr>
						<tr>
							<td>Number of adult general medicine outpatient visits</td>
							<td class="align-middle text-right"><span id="NumMedic"></span></td>
						</tr>
						<tr>
							<td>Number of specialty (non-surgical) outpatient visits</td>
							<td class="align-middle text-right"><span id="NumNonSurgi"></span></td>
						</tr>
						<tr>
							<td>Number of surgical outpatient visits</td>
							<td class="align-middle text-right"><span id="NumSurgi"></span></td>
						</tr>
						<tr>
							<td>Number of antenatal/prenatal care visits</td>
							<td class="align-middle text-right"><span id="NumAntenatal"></span></td>
						</tr>
						<tr>
							<td>Number of postnatal care visits</td>
							<td class="align-middle text-right"><span id="NumPostnatal"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card card-accent-success">
			<div class="card-header">

				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Ten leading OPD Consultation <small>(Year : <span id="repss_year"></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="TenOpdConsul" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead class="align-middle text-center">
						<tr>
							<th class="align-middle text-left">OPD Consultations</th>
							<th class="align-middle text-center">Number</th>
							<th class="align-middle text-center">ICD-10 CODE</th>
						</tr>
					</thead>
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
	<div class="col-md-4">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Emergency visits <small>(Year : <span id="repssss_year"></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="ERTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead class="align-middle text-center">
						<tr>
							<th class="align-middle text-left" width="70%">Emergency visits</th>
							<th class="align-middle text-center">Number</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Total number of emergency department visits</td>
							<td class="align-middle text-right"><span id="TotERVisits"></span></td>
						</tr>
						<tr>
							<td>Total number of emergency department visits, adult</td>
							<td class="align-middle text-right"><span id="TotERVisitsAdult"></span></td>
						</tr>
						<tr>
							<td>Total number of emergency department visits, pediatric</td>
							<td class="align-middle text-right"><span id="TotERVisitsPediatrics"></span></td>
						</tr>
						<tr>
							<td>Total number of patients transported TO THIS FACILITY’S EMERGENCY DEPARTMENT from other health facilities</td>
							<td class="align-middle text-right"><span id="TotTransfrom"></span></td>
						</tr>
						<tr>
							<td>Total number of patients transported FROM THIS FACILITY’S EMERGENCY DEPARTMENT to another facility for inpatient care</td>
							<td class="align-middle text-right"><span id="TotTransto"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card card-accent-success">
			<div class=" card-header">
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Ten leading ER Consultation <small>(Year : <span id="repsss_year"></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="TenErConsul" class="table table-sm table-bordered table-condensed table-hover">
					<thead class="align-middle text-center">
						<tr>
							<th class="align-middle text-left">ER Consultations</th>
							<th class="align-middle text-center">Number</th>
							<th class="align-middle text-center">ICD-10 CODE</th>
						</tr>
					</thead>
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
	<div class="col-md-8">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Testing <small>(Year : <span id="repsssss_year"></span>)</small></div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="table-responsive">
							<table id="TestingTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
								<thead class="align-middle text-center">
									<tr>
										<th class="align-middle text-left" width="70%">Total number of medical imaging tests</th>
										<th class="align-middle text-center">Number</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>X-RAY</td>
										<td class="align-middle text-right"><span id="X_Ray"></span></td>
									</tr>
									<tr>
										<td>Ultrasound</td>
										<td class="align-middle text-right"><span id="ultrasound"></span></td>
									</tr>
									<tr>
										<td>CT-Scan</td>
										<td class="align-middle text-right"><span id="CT_scan"></span></td>
									</tr>
									<tr>
										<td>MRI</td>
										<td class="align-middle text-right"><span id="MRImag"></span></td>
									</tr>
									<tr>
										<td>Mammography</td>
										<td class="align-middle text-right"><span id="Mammog"></span></td>
									</tr>
									<tr>
										<td>Angiography</td>
										<td class="align-middle text-right"><span id="Angiog"></span></td>
									</tr>
									<tr>
										<td>Linear Accelerator</td>
										<td class="align-middle text-right"><span id="LinAcc"></span></td>
									</tr>
									<tr>
										<td>Dental X-Ray</td>
										<td class="align-middle text-right"><span id="DentXRay"></span></td>
									</tr>
									<tr>
										<td>Others</td>
										<td class="align-middle text-right"><span id="otherimaging"></span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="table-responsive">
							<table id="TestingTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
								<thead class="align-middle text-center">
									<tr>
										<th class="align-middle text-left" width="70%">Total number of laboratory and diagnostic tests</th>
										<th class="align-middle text-center">Number</th>
									</tr>
								</thead>
								<tr>
									<td>Urinalysis</td>
									<td class="align-middle text-right"><span id="Urinal"></span></td>
								</tr>
								<tr>
									<td>Fecalysis</td>
									<td class="align-middle text-right"><span id="Fecaly"></span></td>
								</tr>
								<tr>
									<td>Hematology</td>
									<td class="align-middle text-right"><span id="Hemato"></span></td>
								</tr>
								<tr>
									<td>Clinical chemistry</td>
									<td class="align-middle text-right"><span id="ClinChem"></span></td>
								</tr>
								<tr>
									<td>Immunology/Serology/HIV</td>
									<td class="align-middle text-right"><span id="Immune"></span></td>
								</tr>
								<tr>
									<td>Microbiology (Smears/Culture & Sensitivity)</td>
									<td class="align-middle text-right"><span id="Microb"></span></td>
								</tr>
								<tr>
									<td>Surgical Pathology</td>
									<td class="align-middle text-right"><span id="SurgiPath"></span></td>
								</tr>
								<tr>
									<td>Autopsy</td>
									<td class="align-middle text-right"><span id="autopsy"></span></td>
								</tr>
								<tr>
									<td>Cytology</td>
									<td class="align-middle text-right"><span id="Cytol"></span></td>
								</tr>
								<tr>
									<td>Number of Blood units Transfused</td>
									<td class="align-middle text-right"><span id="nbut"></span></td>
								</tr>
								<tr>
									<td>Others</td>
									<td class="align-middle text-right"><span id="otherlab"></span></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="row" hidden>
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class=" card-header">
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Other Services and Disease Seen <small>(Year : <span id="repssssss_year"></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="OtherServicesTable" class="table table-sm table-sm table-striped table-bordered table-condensed table-hover">
					<thead class="align-middle text-center">
						<tr style="font-weight:bold">
							<th class="align-middle text-left" width="70%">Other Services and Disease Seen </th>
							<th>Number</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Total Number of Outreach or home visits</td>
							<td class="align-middle text-center">0</td>
						</tr>
						<tr>
							<td>Total Number of immunization doses administered to children 0-59 months at this facility of during outreach or home visits. Include immunizations administered during child health weeks.</td>
							<td class="align-middle text-center">0</td>
						</tr>
						<tr>
							<td>Total Number of newly diagnosed cases of TB</td>
							<td class="align-middle text-center"><span id="TotNumDiag"></span></td>
						</tr>
						<tr>
							<td>Total Number of confirmed cases of dengue</td>
							<td class="align-middle text-center"><span id="TotNumCases"></span></td>
						</tr>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div> -->

<script type="text/javascript">
	$(document).ready(function() {
		TopOutpatientConsul($.session.get('year'));
		TopEmergencyConsul($.session.get('year'));
		Tot_Del();
		OPD_Visits();
		ER_Visits();
		Tests();
		/* Other_Services(); */
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
		document.getElementById('repss_year').innerHTML = $.session.get('year');
		document.getElementById('repsss_year').innerHTML = $.session.get('year');
		document.getElementById('repssss_year').innerHTML = $.session.get('year');
		document.getElementById('repsssss_year').innerHTML = $.session.get('year');
		/* document.getElementById('repssssss_year').innerHTML = $.session.get('year'); */
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_visits_del/visits_deliveries.js"></script>