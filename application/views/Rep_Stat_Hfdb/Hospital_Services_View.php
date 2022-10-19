<!-- //-------------ER----------------// -->
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Emergency Room Services<small> (Year : <label id="rep_year" readonly></label>)</small></div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="lcauseER-tab" data-toggle="tab" href="#lcauseER" role="tab" aria-controls="lcauseER" aria-expanded="true"> Twenty Leading Causes of Emergency Cases in ER Department</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="lcauseNonER-tab" data-toggle="tab" href="#lcauseNonER" role="tab" aria-controls="lcauseNonER" aria-expanded="true"> Twenty Leading Causes Non-Emergency Cases in ER Department</a>
					</li>
				</ul>

				<div class="tab-content" id="tabChargescontent">
					<div class="tab-pane fade show active" id="lcauseER" role="tabpanel" aria-labelledby="lcauseER-tab">
						<br>
						<table id="lcauseERtable" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr style="font-weight:bold; font-size:12px" align="center">
									<th colspan="37">Age Distribution of Patients</th>
								</tr>

								<tr style="font-weight:bold; font-size:8px" align="center">
									<th rowspan="2">Discharge Diagnosis<br>(Primary)</th>
									<th colspan="2" width="4%">&lt;1</th>
									<th colspan="2" width="4%">1-4</th>
									<th colspan="2" width="4%">5-9 </th>
									<th colspan="2" width="4%">10-14 </th>
									<th colspan="2" width="4%">15-19 </th>
									<th colspan="2" width="4%">20-24</th>
									<th colspan="2" width="4%">25-29</th>
									<th colspan="2" width="4%">40-44</th>
									<th colspan="2" width="4%">45-49</th>
									<th colspan="2" width="4%">40-44</th>
									<th colspan="2" width="4%">45-49</th>
									<th colspan="2" width="4%">50-54</th>
									<th colspan="2" width="4%">55-59</th>
									<th colspan="2" width="4%">60-64</th>
									<th colspan="2" width="4%">65-69</th>
									<th colspan="2" width="4%">&lt;=70</th>
									<th colspan="2" width="5%">Sub total</th>
									<th width="5%" rowspan="2">TOTAL</th>
									<th width="5%" rowspan="2">ICD-10 Code</th>
								</tr>
								<tr style="font-weight:bold; font-size:8px" align="center">
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
					<div class="tab-pane fade" id="lcauseNonER" role="tabpanel" aria-labelledby="lcauseNonER-tab">
						<br>
						<table id="lcauseNonER_Table" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr style="font-weight:bold; font-size:12px" align="center">
									<th colspan="37">Age Distribution of Patients</th>
								</tr>

								<tr style="font-weight:bold; font-size:8px" align="center">
									<th rowspan="2">Discharge Diagnosis<br>(Primary)</th>
									<th colspan="2" width="4%">&lt;1</th>
									<th colspan="2" width="4%">1-4</th>
									<th colspan="2" width="4%">5-9 </th>
									<th colspan="2" width="4%">10-14 </th>
									<th colspan="2" width="4%">15-19 </th>
									<th colspan="2" width="4%">20-24</th>
									<th colspan="2" width="4%">25-29</th>
									<th colspan="2" width="4%">40-44</th>
									<th colspan="2" width="4%">45-49</th>
									<th colspan="2" width="4%">40-44</th>
									<th colspan="2" width="4%">45-49</th>
									<th colspan="2" width="4%">50-54</th>
									<th colspan="2" width="4%">55-59</th>
									<th colspan="2" width="4%">60-64</th>
									<th colspan="2" width="4%">65-69</th>
									<th colspan="2" width="4%">&lt;=70</th>
									<th colspan="2" width="5%">Sub total</th>
									<th width="5%" rowspan="2">TOTAL</th>
									<th width="5%" rowspan="2">ICD-10 Code</th>
								</tr>
								<tr style="font-weight:bold; font-size:8px" align="center">
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
</div>

<!-- //-------------OPD----------------// -->
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Outpatient Services<small> (Year : <label id="opdRepyear" readonly></label>)</small></div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="opdDemographic-tab" data-toggle="tab" href="#opdDemographic" role="tab" aria-controls="opdDemographic" aria-expanded="true"> Out-Patient Demographic Data by Congressional Districts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="lcauseOPD-tab" data-toggle="tab" href="#lcauseOPD" role="tab" aria-controls="lcauseOPD" aria-expanded="true">Twenty Leading Causes of Consultations at OPD</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="serviceRenderedOPD-tab" data-toggle="tab" href="#serviceRenderedOPD" role="tab" aria-controls="serviceRenderedOPD" aria-expanded="true"> Service Rendered in the Out-Patient Department</a>
					</li>
				</ul>

				<div class="tab-content" id="tabChargescontent">
					<div class="tab-pane fade show active" id="opdDemographic" role="tabpanel" aria-labelledby="opdDemographic-tab">
						<br>
						<table id="opdDemographicTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
							<thead class="thead-dark" style="font-weight:bold;" align="center">
								<tr>
									<th rowspan="4">CITY</th>
									<th colspan="10">Number of Patients</th>
									<th rowspan="4">Total</th>
									<th rowspan="4">% of Grand Total</th>
								</tr>
								<tr>
									<th colspan="6">Pay</th>
									<th colspan="4">Service</th>
								</tr>
								<tr>
									<th rowspan="2">Non-Phic</th>
									<th colspan="2">PHIC</th>
									<th colspan="2">HMO</th>
									<th rowspan="2">OWWA</th>
									<th rowspan="2">Non-Phic</th>
									<th colspan="2">PHIC</th>
									<th rowspan="2">OWWA</th>
								</tr>
								<tr>
									<th>Member / <br>Dependent</th>
									<th>Indigent</th>
									<th>w/ PHIC</th>
									<th>w/o PHIC</th>
									<th>Member / <br>Dependent</th>
									<th>Indigent</th>
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
							<tfoot class="thead-dark">
								<tr>
									<th>TOTAL :</th>
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

					<div class="tab-pane fade" id="lcauseOPD" role="tabpanel" aria-labelledby="lcauseOPD-tab">
						<br>
						<table id="lcauseOPD_Table" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr style="font-weight:bold; font-size:12px" align="center">
									<th colspan="37">Age Distribution of Patients</th>
								</tr>

								<tr style="font-weight:bold; font-size:8px" align="center">
									<th rowspan="2">Discharge Diagnosis<br>(Primary)</th>
									<th colspan="2" width="4%">&lt;1</th>
									<th colspan="2" width="4%">1-4</th>
									<th colspan="2" width="4%">5-9</th>
									<th colspan="2" width="4%">10-14</th>
									<th colspan="2" width="4%">15-19</th>
									<th colspan="2" width="4%">20-24</th>
									<th colspan="2" width="4%">25-29</th>
									<th colspan="2" width="4%">40-44</th>
									<th colspan="2" width="4%">45-49</th>
									<th colspan="2" width="4%">40-44</th>
									<th colspan="2" width="4%">45-49</th>
									<th colspan="2" width="4%">50-54</th>
									<th colspan="2" width="4%">55-59</th>
									<th colspan="2" width="4%">60-64</th>
									<th colspan="2" width="4%">65-69</th>
									<th colspan="2" width="4%">&lt;=70</th>
									<th colspan="2" width="5%">Sub total</th>
									<th width="5%" rowspan="2">TOTAL</th>
									<th width="5%" rowspan="2">ICD-10 Code</th>
								</tr>
								<tr style="font-weight:bold; font-size:8px" align="center">
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

					<div class="tab-pane fade" id="serviceRenderedOPD" role="tabpanel" aria-labelledby="serviceRenderedOPD-tab">
						<br>
						<table id="serviceRenderedOPDTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark" style="font-weight:bold;" align="center">
								<tr>
									<th rowspan="2" width="25%">Procedure</th>
									<th colspan="3" width="60%">Number of Patients Attended/Served</th>
									<th rowspan="2" width="15%">% Total</th>
								</tr>
								<tr>
									<th width="20%">New</th>
									<th width="20%">Revisit</th>
									<th width="20%">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr align="center">
									<td align="left">Medicine</td>
									<td><label id="medNew"></label></td>
									<td><label id="medRevisit"></label></td>
									<td><label id="medTot"></label></td>
									<td><label id="medTotPercent"></label></td>
								</tr>
								<tr align="center">
									<td align="left">Obstetrics</td>
									<td><label id="obsNew"></label></td>
									<td><label id="obsRevisit"></label></td>
									<td><label id="obsTot"></label></td>
									<td><label id="obsTotPercent"></label></td>
								</tr>
								<tr align="center">
									<td align="left">Gynecology</td>
									<td><label id="gynNew"></label></td>
									<td><label id="gynRevisit"></label></td>
									<td><label id="gynTot"></label></td>
									<td><label id="gynTotPercent"></label></td>
								</tr>
								<tr align="center">
									<td align="left">Pediatrics</td>
									<td><label id="pedNew"></label></td>
									<td><label id="pedRevisit"></label></td>
									<td><label id="pedTot"></label></td>
									<td><label id="pedTotPercent"></label></td>
								</tr>
								<tr align="center">
									<td align="left">Surgery</td>
									<td><label id="surgNew"></label></td>
									<td><label id="surgRevisit"></label></td>
									<td><label id="surgTot"></label></td>
									<td><label id="surgTotPercent"></label></td>
								</tr>
								<tr align="center">
									<td align="left">EENT</td>
									<td><label id="eentNew"></label></td>
									<td><label id="eentRevisit"></label></td>
									<td><label id="eentTot"></label></td>
									<td><label id="eentTotPercent"></label></td>
								</tr>
								<tr align="center">
									<td align="left">Dental</td>
									<td><label id="dentalNew"></label></td>
									<td><label id="dentalRevisit"></label></td>
									<td><label id="dentalTot"></label></td>
									<td><label id="dentalTotPercent"></label></td>
								</tr>
								<tr align="center">
									<td align="left">Family Planning</td>
									<td><label id="famplanNew"></label></td>
									<td><label id="famplanRevisit"></label></td>
									<td><label id="famplanTot"></label></td>
									<td><label id="famplanPercent"></label></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- //-------------PHARMACY----------------// -->
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Pharmacy Services<small> (Year : <label id="pharmRepyear" readonly></label>)</small></div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="noSubsidized-tab" data-toggle="tab" href="#noSubsidized" role="tab" aria-controls="noSubsidized" aria-expanded="true"> No. of persons subsidized</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="OPD-tab" data-toggle="tab" href="#OPD" role="tab" aria-controls="OPD" aria-expanded="true"> Out-Patient</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="ER-tab" data-toggle="tab" href="#ER" role="tab" aria-controls="ER" aria-expanded="true"> ER Patients</a>
					</li>
				</ul>

				<div class="tab-content" id="tabChargescontent">
					<div class="tab-pane fade show active" id="noSubsidized" role="tabpanel" aria-labelledby="noSubsidized-tab">
						<br>
						<table id="noSubsidizedTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
							<thead class="thead-dark" style="font-weight:bold;" align="center">
								<tr>
									<th width="25%"></th>
									<th width="12%">Philhealth</th>
									<th width="12%">Pay</th>
									<th width="12%">Service</th>
									<th width="12%">Employee</th>
									<th width="12%">Guest</th>
									<th width="15%">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="25%" align="left">Presciption Filled</th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="15%"></th>
								</tr>
								<tr>
									<th width="25%" align="left">Presciption Unfilled</th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="15%"></th>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tab-pane fade" id="OPD" role="tabpanel" aria-labelledby="OPD-tab">
						<br>
						<table id="OPD_Table" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr style="font-weight:bold; font-size:12px" align="center">
									<th width="25%"></th>
									<th width="12%">Philhealth</th>
									<th width="12%">Pay</th>
									<th width="12%">Service</th>
									<th width="12%">Employee</th>
									<th width="12%">Guest</th>
									<th width="15%">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="25%" align="left">Presciption Filled</th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="15%"></th>
								</tr>
								<tr>
									<th width="25%" align="left">Presciption Unfilled</th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="15%"></th>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tab-pane fade" id="ER" role="tabpanel" aria-labelledby="ER-tab">
						<br>
						<table id="ERTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark" style="font-weight:bold;" align="center">
								<tr>
									<th width="25%"></th>
									<th width="12%">Philhealth</th>
									<th width="12%">Pay</th>
									<th width="12%">Service</th>
									<th width="12%">Employee</th>
									<th width="12%">Guest</th>
									<th width="15%">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="25%" align="left">Presciption Filled</th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="15%"></th>
								</tr>
								<tr>
									<th width="25%" align="left">Presciption Unfilled</th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="12%"></th>
									<th width="15%"></th>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- //-------------Medical Social Service----------------// -->
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Medical Social Service<small> (Year : <label id="mssRepyear" readonly></label>)</small></div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="patientServed-tab" data-toggle="tab" href="#patientServed" role="tab" aria-controls="patientServed" aria-expanded="true"> Patients Served</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="Counselling-tab" data-toggle="tab" href="#Counselling" role="tab" aria-controls="Counselling" aria-expanded="true"> 10 Leading Reasons for Psychosocial Counselling</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="caseWork-tab" data-toggle="tab" href="#caseWork" role="tab" aria-controls="caseWork" aria-expanded="true"> Intensive Case Work</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="ancillary-tab" data-toggle="tab" href="#ancillary" role="tab" aria-controls="ancillary" aria-expanded="true"> Other Ancillary Procedures</a>
					</li>
				</ul>

				<div class="tab-content" id="tabChargescontent">
					<div class="tab-pane fade show active" id="patientServed" role="tabpanel" aria-labelledby="patientServed-tab">
						<br>
						<table id="patientServedTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark" style="font-weight:bold;" align="center">
								<tr>
									<th width="15%" rowspan="3"></th>
									<th width="75%" colspan="9">Class</th>
									<th width="10%" rowspan="3">Total</th>
								</tr>
								<tr>
									<th width="10%" rowspan="2">A</th>
									<th width="10%" rowspan="2">B</th>
									<th width="15%" colspan="3">C</th>
									<th width="10%" rowspan="2">D</th>
									<th width="10%" rowspan="2">Veteran</th>
									<th width="10%" rowspan="2">Sr. Citizen</th>
									<th width="10%" rowspan="2">Brgy. Official/BHW</th>
								</tr>
								<tr>
									<th width="5%">1</th>
									<th width="5%">2</th>
									<th width="5%">3</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th width="15%" align="left">1. In Patients</th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
								</tr>
								<tr>
									<th width="15%" align="left">2. Out Patients</th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
								</tr>
								<tr>
									<th width="15%" align="left">3. ER Patients</th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
								</tr>
								<tr>
									<th width="15%" align="left">4. Others</th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
									<th width="10%"></th>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tab-pane fade" id="Counselling" role="tabpanel" aria-labelledby="Counselling-tab">
						<br>
						<table id="Counselling_Table" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr style="font-weight:bold; font-size:12px" align="center">
									<th width="80%" align="left">Reasons</th>
									<th width="20%">Number</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="tab-pane fade" id="caseWork" role="tabpanel" aria-labelledby="caseWork-tab">
						<br>
						<table id="caseWork_Table" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr style="font-weight:bold; font-size:12px" align="center">
									<th width="80%" colspan="4">Number of Abandoned Patients</th>
									<th width="20%">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="15%">Pedia</td>
									<td width="15%">Adult</td>
									<td width="25%">Total</td>
									<td width="25%" align="left">Number of Abused Women</td>
									<td width="20%"></td>
								</tr>
								<tr>
									<td width="15%" rowspan="2"></td>
									<td width="15%" rowspan="2"></td>
									<td width="25%" rowspan="2"></td>
									<td width="25%" align="left">Number of Abused Children</td>
									<td width="20%"></td>
								</tr>
								<tr>
									<td width="25%" align="left">Number of Abused Men</td>
									<td width="20%"></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tab-pane fade" id="ancillary" role="tabpanel" aria-labelledby="ancillary-tab">
						<br>
						<table id="ancillary_Table" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr>
									<th width="20%" rowspan="2"></th>
									<th width="10%" rowspan="2">Philhealth</th>
									<th width="10%" rowspan="2">Pay</th>
									<th width="10%" rowspan="2">Service</th>
									<th width="10%" rowspan="2">Personnel/<br>Employee</th>
									<th width="40%" colspan="4">Total</th>
								</tr>
								<tr>
									<th width="10%">In-Patient</th>
									<th width="10%">%</th>
									<th width="10%">Out-Patient</th>
									<th width="10%" colspan="2">%</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td width="20%" align="left">ECG</td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
								</tr>
								<tr>
									<td width="20%" align="left">Echocardiogram</td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
								</tr>
								<tr>
									<td width="20%" align="left">Others:</td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
									<td width="10%"></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- //-------------Referrals----------------// -->
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Referrals <small>(Year : <label id="referralRepyear" readonly></label>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="referral_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
					<thead class="thead-dark">
						<tr style="font-weight:bold" align="center">
							<th width="25%" rowspan="2"></th>
							<th width="15%" rowspan="2">Input</th>
							<th width="30%" colspan="2">ER Patients</th>
							<th width="15%" rowspan="2">OPD Patient</th>
							<th width="15%" rowspan="2">Total</th>
						</tr>
						<tr align="center">
							<th width="15%">Admitted</th>
							<th width="15%">Not Admitted</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="25%" align="left">6.7.4 Referral from:</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7.4.1 RHU</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7.4.2 Lower health facilities</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7.4.3 Higher health facilities</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">6.7.5 Referral to:</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7.5.1 RHU</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7.5.2 Lower health facilities</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7.5.3 Higher health facilities</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="left">6.7.6 Feedback or referral slip returned</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
						<tr>
							<td width="25%" align="right">
								<b\>Total :
							</td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
							<td width="15%"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		lcauseER($.session.get('year'));
		lcauseNonER($.session.get('year'));
		opdDemographic($.session.get('year'));
		lcauseOPD($.session.get('year'));
		opdServiceRendered($.session.get('year'));
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('opdRepyear').innerHTML = $.session.get('year');
		document.getElementById('pharmRepyear').innerHTML = $.session.get('year');
		document.getElementById('mssRepyear').innerHTML = $.session.get('year');
		document.getElementById('referralRepyear').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Hfdb_Stat_Rep/Hospital_Services/Hospital_Services.js"></script>