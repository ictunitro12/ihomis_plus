<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Number of Deliveries <small>(Year : <label id="rep_year" readonly></label>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="Deliveries_Abortion_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
					<thead class="thead-dark">
						<tr style="font-weight:bold" align="center">
							<th rowspan="2" width="29%">Type of Deliveries</th>
							<th colspan="4" width="48%">Age Distribution of Patients</th>
							<th rowspan="2" width="23%">Total</th>
						</tr>
						<tr style="font-weight:bold" align="center">
							<th width="12%">10-14</th>
							<th width="12%">15-19</th>
							<th width="12%">20-44</th>
							<th width="12%">45-64</th>
						</tr>
					</thead>
					<tbody>
						<tr align="right">
							<td align="left">1. Normal</td>
							<td><label id="normal_10_14" readonly></label></td>
							<td><label id="normal_15_19" readonly></label></td>
							<td><label id="normal_20_44" readonly></label></td>
							<td><label id="normal_45_64" readonly></label></td>
							<td><label id="total_normal" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">2. Caesarian Section</td>
							<td><label id="cs_10_14" readonly></label></td>
							<td><label id="cs_15_19" readonly></label></td>
							<td><label id="cs_20_44" readonly></label></td>
							<td><label id="cs_45_64" readonly></label></td>
							<td><label id="total_cs" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">3. VBAC</td>
							<td><label id="vbac_10_14" readonly></label></td>
							<td><label id="vbac_15_19" readonly></label></td>
							<td><label id="vbac_20_44" readonly></label></td>
							<td><label id="vbac_45_64" readonly></label></td>
							<td><label id="total_vbac" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">4. Breech Extraction</td>
							<td><label id="breech_10_14" readonly></label></td>
							<td><label id="breech_15_19" readonly></label></td>
							<td><label id="breech_20_44" readonly></label></td>
							<td><label id="breech_45_64" readonly></label></td>
							<td><label id="total_breech" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">5. Forceps</td>
							<td><label id="forceps_10_14" readonly></label></td>
							<td><label id="forceps_15_19" readonly></label></td>
							<td><label id="forceps_20_44" readonly></label></td>
							<td><label id="forceps_45_64" readonly></label></td>
							<td><label id="total_forceps" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">6. Vacuum / Ventose</td>
							<td><label id="vacuum_10_14" readonly></label></td>
							<td><label id="vacuum_15_19" readonly></label></td>
							<td><label id="vacuum_20_44" readonly></label></td>
							<td><label id="vacuum_45_64" readonly></label></td>
							<td><label id="total_vacuum" readonly></label></td>
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
				<div class=" card-title h3 text-success"><i class="fa fa-th-list"></i> Abortion <small>(Year : <label id="report_year" readonly></label>)</small></div>
			</div>
			<div class="card-body table-responsive">
				<table id="Abortion_Table" class="table table-sm table-striped table-bordered table-condensed table-hover" cellpadding="1">
					<thead class="thead-dark" align="center">
						<tr bgcolor="lightgray">
							<th rowspan="2" width="28%">Category of Abortion</th>
							<th colspan="3" width="72%">Type</th>
						</tr>
						<tr bgcolor="lightgray">
							<th>Spontaneous</th>
							<th>Induced</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr align="right">
							<td align="left">1. Non-septic</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; a. Complete</td>
							<td><label id="nonsep_complete_sponta_a" readonly></label></td>
							<td><label id="nonsep_complete_ind" readonly></label></td>
							<td><label id="tot_nonsep_complete" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; b. Imminent</td>
							<td><label id="nonsep_immi_sponta_a" readonly></label></td>
							<td><label id="nonsep_immi_ind" readonly></label></td>
							<td><label id="tot_nonsep_imminent" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; c. Inevitable</td>
							<td><label id="nonsep_inevi_sponta_a" readonly></label></td>
							<td><label id="nonsep_inevi_ind" readonly></label></td>
							<td><label id="tot_nonsep_inevitable" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; d. Incomplete</td>
							<td><label id="nonsep_incomp_sponta_a" readonly></label></td>
							<td><label id="nonsep_incomp_ind" readonly></label></td>
							<td><label id="tot_nonsep_incomplete" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">2. Septic</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; a. Complete</td>
							<td><label id="sep_complete_sponta_a" readonly></label></td>
							<td><label id="sep_complete_ind" readonly></label></td>
							<td><label id="tot_sep_complete" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; b. Imminent</td>
							<td><label id="sep_immi_sponta_a" readonly></label></td>
							<td><label id="sep_immi_ind" readonly></label></td>
							<td><label id="tot_sep_imminent" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; c. Inevitable</td>
							<td><label id="sep_inevi_sponta_a" readonly></label></td>
							<td><label id="sep_inevi_ind" readonly></label></td>
							<td><label id="tot_sep_inevitable" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">&nbsp;&nbsp;&nbsp; d. Incomplete</td>
							<td><label id="sep_incomp_sponta_a" readonly></label></td>
							<td><label id="sep_incomp_ind" readonly></label></td>
							<td><label id="tot_sep_incomplete" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="right"><b>Subtotal :</b></td>
							<td><label id="subtotal_sponta" readonly></label></td>
							<td><label id="subtotal_induced" readonly></label></td>
							<td><label id="subtotal_total" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">3. Threatened</td>
							<td><label id="threat_abort_sponta_a" readonly></label></td>
							<td><label id="threat_abort_indu" readonly></label></td>
							<td><label id="tot_threat_abort" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">4. Blighted Ovum</td>
							<td><label id="blig_abort_sponta_a" readonly></label></td>
							<td><label id="blig_abort_indu" readonly></label></td>
							<td><label id="tot_blig_abort" readonly></label></td>
						</tr>
						<tr align="right">
							<td align="left">5. Missed Abortion</td>
							<td><label id="missed_abort_sponta_a" readonly></label></td>
							<td><label id="missed_abort_indu" readonly></label></td>
							<td><label id="tot_missed_abort" readonly></label></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="nonsep_comp_sponta_a">
<input type="hidden" id="nonsep_imminent_sponta_a">
<input type="hidden" id="nonsep_inevibitable_sponta_">
<input type="hidden" id="nonsep_incomplete_sponta_a">
<input type="hidden" id="sep_comp_sponta_a">
<input type="hidden" id="sep_imminent_sponta_a">
<input type="hidden" id="sep_inevibitable_sponta_a">
<input type="hidden" id="sep_incomplete_sponta_a">
<script type="text/javascript">
	$(document).ready(function() {
		Deliveries_Abortion();
		Abort();
		document.getElementById('rep_year').innerHTML = $.session.get('year');
		document.getElementById('report_year').innerHTML = $.session.get('year');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Hfdb_Stat_Rep/Deliveries_Abortion/Deliveries_Abortion.js"></script>