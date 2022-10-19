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
	<div class="col-md-6">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="btn-group float-right" role="group" aria-label="">
					<button id="manageExp_button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-cog"> </i> Manage</button>
				</div>
				<div class="card-title h4 text-success"><i class="fa fa-info-circle"></i> Expenses <small>(Year : <span id="rep_year"></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="ExpensesTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th class="align-middle">Expenses</th>
							<th class="align-middle text-center">Amount in Pesos</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="align-middle">Amount spent on personnel salaries and wages</td>
							<td class="align-middle text-right"><span id="exps_wage"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Amount spent on benefits for employees (benefits are in addition to wages/salaries.<br>Benefits include for example: social security contributions, health insurance)</td>
							<td class="align-middle text-right"><span id="exps_benefits"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Allowances provided to employees at this facility (Allowances are in addition to wages/salaries. Allowances include for example: clothing allowance, PERA, vehicle maintenance allowance and hazard pay.)</td>
							<td class="align-middle text-right"><span id="exps_allowances"></span></td>
						</tr>
						<thead>
							<tr>
								<th class="align-middle">Total amount spent on all personnel including wages, salaries, benefits and allowances for last year (PS)</th>
								<th class="align-middle text-right"><span id="exps_tot_wba_ly"></span></th>
							</tr>
						</thead>
						<tr>
							<td class="align-middle">Total amount spent on medicines</td>
							<td class="align-middle text-right"><span id="exps_med"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount spent on medical supplies (i.e. syringe, gauze, etc.; exclude pharmaceuticals)</td>
							<td class="align-middle text-right"><span id="exps_medsup"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount spent on utilities (water, electricity, communication, etc.)</td>
							<td class="align-middle text-right"><span id="exps_util"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount spent on non-medical services (For example: security, food service, laundry, waste management)</td>
							<td class="align-middle text-right"><span id="exps_nonmed"></span></td>
						</tr>
						<thead>
							<tr>
								<th class="align-middle">Total amount spent on maintenance and other operating expenditures (MOOE)</th>
								<th class="align-middle text-right"><span id="exps_tot_mooe"></span></th>
							</tr>
						</thead>
						<tr>
							<td class="align-middle">Amount spent on infrastructure (i.e., new hospital wing, installation of ramps)</td>
							<td class="align-middle text-right"><span id="exps_infra"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Amount spent on equipment (i.e. x-ray machine, CT scan)</td>
							<td class="align-middle text-right"><span id="exps_equipment"></span></td>
						</tr>
						<thead>
							<tr>
								<th class="align-middle">Total amount spent on capital outlay (CO)</th>
								<th class="align-middle text-right"><span id="exps_co"></span></th>
							</tr>
						</thead>
						<thead>
							<tr>
								<th class="align-middle">Grand Total</th>
								<th class="align-middle text-right"><span id="exps_gtotal"></span></th>
							</tr>
						</thead>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card card-accent-success">
			<div class=" card-header">
				<div class="btn-group float-right" role="group" aria-label="">
					<button id="manageRev_button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-cog"> </i> Manage</button>
				</div>
				<div class=" card-title h4 text-success"><i class="fa fa-info-circle"></i> Revenues <small>(Year : <span id="reps_year" readonly></span>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="ExpensesTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th class="align-middle">Revenues</th>
							<th class="align-middle text-center">Amount in<br>Pesos</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="align-middle">Total amount of money received from the Department of Health</td>
							<td class="align-middle text-right"><span id="revs_doh"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount of money received from the local government</td>
							<td class="align-middle text-right"><span id="revs_lgu"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount of money received from donor agencies (for example JICA, USAID, and others)</td>
							<td class="align-middle text-right"><span id="revs_donor"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount of money received from private organizations (donations from businesses, NGOs, etc.)</td>
							<td class="align-middle text-right"><span id="revs_priv"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount of money received from Phil Health</td>
							<td class="align-middle text-right"><span id="revs_phic"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount of money received from direct patient/out-of-pocket charges/fees</td>
							<td class="align-middle text-right"><span id="revs_direct"></span></td>
						</tr>
						<tr>
							<td class="align-middle">Total amount of money received from reimbursement from private insurance/HMOs</td>
							<td class="align-middle text-right"><span id="revs_reim"></span></td>
						</tr>

						<tr>
							<td class="align-middle">Total amount of money received from other sources (PAGCOR, PCSO, etc.)</td>
							<td class="align-middle text-right"><span id="revs_oth"></span></td>
						</tr>
						<tr>
							<thead>
								<tr>
									<th class="align-middle">Total Revenue</th>
									<th class="align-middle text-right"><span id="revs_gtotal"></span></th>
								</tr>
							</thead>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<form id="frmExpenses">
	<div class="modal fade" id="manageExp_modal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-money fa-lg"></i> Expenses</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="hfudcode" id="hfudcode">
						<input type="hidden" name="AddIdenExp" id="AddIdenExp">
						<input type="hidden" class="" name="exp_year" id="exp_year" autocomplete="off" />
						<div class="card-body table-responsive">
							<table class="table table-sm table-bordered table-condensed table-hover" width="100%">
								<tbody>
									<tr>
										<td class="align-middle" width="70%">Amount spent on personnel salaries and wages</td>
										<td width="30%"><input type="text" class="form-control-plaintext text-right" name="exps_wages" id="exps_wages" autocomplete="off" onkeyup="sumExp()" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Amount spent on benefits for employees (benefits are in addition to wages/salaries.<br>Benefits include for example: social security contributions, health insurance)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_benefitss" id="exps_benefitss" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Allowances provided to employees at this facility (Allowances are in addition to wages/salaries. Allowances include for example: clothing allowance, PERA, vehicle maintenance allowance and hazard pay.)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_allowancess" id="exps_allowancess" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<th class="align-middle">Total amount spent on all personnel including wages, salaries, benefits and allowances for last year (PS)</th>
										<th><input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px;color:white" name="exps_tot_wba_lys" id="exps_tot_wba_lys" autocomplete="off" readonly onkeyup="sumExp();" onblur="formatInput();" tabindex="-1" /></th>
									</tr>
									<tr>
										<td class="align-middle">Total amount spent on medicines</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_meds" id="exps_meds" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount spent on medical supplies (i.e. syringe, gauze, etc.; exclude pharmaceuticals)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_medsups" id="exps_medsups" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount spent on utilities (water, electricity, communication, etc.)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_utils" id="exps_utils" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount spent on non-medical services (For example: security, food service, laundry, waste management)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_nonmeds" id="exps_nonmeds" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<th class="align-middle">Total amount spent on maintenance and other operating expenditures (MOOE)</th>
										<th><input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px;color:white" name="exps_tot_mooes" id="exps_tot_mooes" autocomplete="off" readonly onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" tabindex="-1" /></th>
									</tr>
									<tr>
										<td class="align-middle">Amount spent on infrastructure (i.e., new hospital wing, installation of ramps)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_infras" id="exps_infras" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Amount spent on equipment (i.e. x-ray machine, CT scan)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="exps_equipments" id="exps_equipments" autocomplete="off" onkeyup="sumExp();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<th class="align-middle">Total amount spent on capital outlay (CO)</th>
										<th><input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px;color:white" name="exps_cos" id="exps_cos" autocomplete="off" readonly onkeyup="sumExp();" onblur="formatInput();" tabindex="-1" /></th>
									</tr>
									<tr>
										<th class="align-middle">Grand Total</th>
										<th><input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px;color:white" name="exps_gtotals" id="exps_gtotals" autocomplete="off" readonly onkeyup="sumExp();" onblur="formatInput();" tabindex="-1" /></th>
									</tr>
								</tbody>
							</table>
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

<form id="frmRevenue">
	<div class="modal fade" id="manageRev_modal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-money fa-lg"></i> Revenues</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="hfudcodeRev" id="hfudcodeRev" />
						<input type="hidden" name="AddIdenRev" id="AddIdenRev" />
						<input type="hidden" name="rev_year" id="rev_year" />
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-sm table-bordered table-condensed table-hover" width="100%">
									<tr>
										<td class="align-middle" width="70%">Total amount of money received from the Department of Health</td>
										<td width="30%"><input type="text" class="form-control-plaintext text-right" name="doh_rev" id="doh_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount of money received from the local government</td>
										<td><input type="text" class="form-control-plaintext text-right" name="lgu_rev" id="lgu_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount of money received from donor agencies (for example JICA, USAID, and others)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="donor_rev" id="donor_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount of money received from private organizations (donations from businesses, NGOs, etc.)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="priv_rev" id="priv_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount of money received from Phil Health</td>
										<td><input type="text" class="form-control-plaintext text-right" name="phic_rev" id="phic_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount of money received from direct patient/out-of-pocket charges/fees</td>
										<td><input type="text" class="form-control-plaintext text-right" name="direct_rev" id="direct_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" readonly tabindex="-1" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount of money received from reimbursement from private insurance/HMOs</td>
										<td><input type="text" class="form-control-plaintext text-right" name="reim_rev" id="reim_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<td class="align-middle">Total amount of money received from other sources (PAGCOR, PCSO, etc.)</td>
										<td><input type="text" class="form-control-plaintext text-right" name="oth_rev" id="oth_rev" autocomplete="off" onkeyup="sumRev();" onblur="formatInput();" onkeypress="return isNumber(event,this)" /></td>
									</tr>
									<tr>
										<th class="align-middle">Total Revenue</th>
										<th><input type="text" class="form-control-plaintext text-right" style="font-weight:bold;font-size:16px;color:white" name="tot_rev" id="tot_rev" autocomplete="off" readonly onkeyup="sumRev();" onblur="formatInput();" tabindex="-1" /></th>
									</tr>
								</table>
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

<input type="hidden" id="AddIden">
<input type="hidden" id="AddRev">
<input type="hidden" id="code">
<input type="hidden" id="coderev">

<script type="text/javascript">
	$(document).ready(function() {
		Expenses();
		Revenues();
		sumExp();
		sumRev();
		outofpocket();
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('reps_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_rev_exp/exp_validations.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_rev_exp/rev_validations.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Stat_Rep/stat_rep_rev_exp/exp_rev.js"></script>