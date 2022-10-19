<style>
	tr:hover {
		background: #80DB88 !important;
	}

	th {
		background-color: #20962a;
		color: white;
	}

	input:focus {
		outline: none;
	}
</style>
<div class="row">
	<div class="col-md-4">
		<div class="card card-accent-success">
			<div class=" card-header">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button id="manage_button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-toggle="tooltip"><i class="fa fa-cog"> </i> Manage</button>
				</div>
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> HAI <small>(Year : <span id="rep_year" readonly></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th></th>
							<th class="align-middle text-center">Percentage</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="60%">Infection Rate</td>
							<td class="align-middle text-center"><span id="IR"></span></td>
						</tr>
					</tbody>
					<thead>
						<tr style="font-weight:bold">
							<th colspan="2">Device Related Infections</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="60%">Ventilator Acquired Pneumonia (VAP)</td>
							<td class="align-middle text-center"><span id="vap"></span></td>
						</tr>
						<tr>
							<td width="60%">Blood Stream Infection (BSI)</td>
							<td class="align-middle text-center"><span id="bsi"></span></td>
						</tr>
						<tr>
							<td width="60%">Urinary Tract Infection (UTI)</td>
							<td class="align-middle text-center"><span id="uti"></span></td>
						</tr>
					</tbody>
					<thead>
						<tr style="font-weight:bold">
							<th colspan="2">Non-Device Related Infections</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="60%">Surgical Site Infections (SSI)</td>
							<td class="align-middle text-center"><span id="ssi"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Surgical Operations <small>(Year : <span id="reps_year" readonly></span>)</small></div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="table-responsive">
							<table id="Major_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
								<thead>
									<tr>
										<th>10 Leading Major Operations</th>
										<th style="text-align:center">Number</th>
										<th hidden style="text-align:center">Procedure Code</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td hidden></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="table-responsive">
							<table id="Minor_Table" class="table table-sm table-bordered table-condensed table-hover" width="100%">
								<thead>
									<tr>
										<th>10 Leading Minor Operations</th>
										<th style="text-align:center">Number</th>
										<th hidden style="text-align:center">Procedure Code</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td hidden></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<form id="frmInfection">
	<div class="modal fade" id="manage_modal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-flask fa-lg"></i> Healthcare Associated Infections</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="AddIdenInf" id="AddIdenInf" />
					<input type="hidden" name="sample" id="sample" />
					<input type="hidden" class="" name="infec_year" id="infec_year" autocomplete="off" />
					<input type="hidden" class="" id="no_infec_inf" name="no_infec_inf">
					<input type="hidden" class="" id="no_disch_inf" name="no_disch_inf">
					<input type="hidden" class="" id="infectionrate" name="infectionrate">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h5 class="card-title">Device Related Infections</h5>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="card-deck">
									<div class="card card-outline-info">
										<div class="card-body">
											<h6 class="card-title">Ventilator Acquired Pneumonia (VAP)</h6>
											<div class="form-group row">
												<label class="col-sm-12 col-form-label">Patients with VAP</label>
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control text-right sm-1" name="no_vappat" id="no_vappat" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-form-label">Total number of Ventilator days</label>
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control text-right sm-1" name="ventvap" id="ventvap" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px" name="resultsvap" id="resultsvap" autocomplete="off" onkeyup="sum();" tabindex="-1" readonly />
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="card-body">
											<h6 class="card-title">Blood Stream Infection (BSI)</h6>
											<div class="form-group row">
												<label class="col-sm-12 col-form-label">Patients with BSI</label>
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control text-right" name="no_bsipat" id="no_bsipat" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-form-label">Total number of Central line</label>
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control text-right" name="bsi_centralline" id="bsi_centralline" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px" name="resultsbsi" id="resultsbsi" autocomplete="off" onkeyup="sum();" tabindex="-1" readonly />
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="card-body">
											<h6 class="card-title">Urinary Tract Infection (UTI)</h6>
											<div class="form-group row">
												<label class="col-sm-12 col-form-label">Patients with UTI</label>
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control text-right" name="no_utipat" id="no_utipat" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-form-label">Total number of Catheter days</label>
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control text-right" name="no_uticat" id="no_uticat" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-12 pull-right">
													<input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px" name="resultsuti" id="resultsuti" autocomplete="off" onkeyup="sum();" tabindex="-1" readonly />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h5 class="card-title">Non-Device Related Infections</h5>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">Surgical Site Infections (SSI)</h6>
										<div class="form-group row">
											<label class="col-sm-12 col-form-label-sm">Number of SSI</label>
											<div class="col-sm-12 pull-right">
												<input type="text" class="form-control text-right" name="no_ssipat" id="no_ssipat" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-12 col-form-label-sm">Total number of Procedures done</label>
											<div class="col-sm-12 pull-right">
												<input type="text" class="form-control text-right" name="no_totproc" id="no_totproc" autocomplete="off" onkeyup="sum();" onkeypress="return isNumber(event)" maxlength="10" />
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 pull-right">
												<input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px" name="resultsssi" id="resultsssi" autocomplete="off" onkeyup="sum();" tabindex="-1" readonly />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right" role="group" aria-label="">
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CLOSE</button>&nbsp;
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<input type="hidden" id="code">
<input type="hidden" id="AddIden">

<input type="hidden" id="no_infec">
<input type="hidden" id="no_disch">

<input type="hidden" id="vappat">
<input type="hidden" id="vappat2">
<input type="hidden" id="result_vap">

<input type="hidden" id="no_bsi">
<input type="hidden" id="bsi2">
<input type="hidden" id="result_bsi">

<input type="hidden" id="no_uti">
<input type="hidden" id="uti2">
<input type="hidden" id="result_uti">

<input type="hidden" id="no_ssi">
<input type="hidden" id="ssi2">
<input type="hidden" id="result_ssi">

<script type="text/javascript">
	$(document).ready(function() {
		InfRate();
		infection();
		discharged();
		Major_Op($.session.get('year'));
		Minor_Op($.session.get('year'));
		sum();
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_infection/infection_rate.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_infection/validations.js"></script>