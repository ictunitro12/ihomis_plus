<form id="frmBloodChem" method="post">
	<div class="modal" id="modalBloodChem" role="form">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-tint"></i> Blood Chemistry</div>
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="text text-success h4"><i class="fa fa-male"></i> <b>Protein</b></div>
					<div class="form-row">
						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-3">
									<label class="form-label">Amylase :<br>
										<span class="text-muted">0-220 u/L</span>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="0-220 u/L" id="frmamylase" name="frmamylase">
								</div>
							</div>
							<div class="form-row">
								<label class="col-form-label text-success h5">Bilirubin</label>
							</div>
							<div class="form-row" style="text-align: right;">
								<div class="col-md-3">
									<label class="form-label">Indirect :<br>
										<span class="text-muted">4.3-14.5umol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="4.3-14.5umol/L" id="frmindirect" name="frmindirect">
								</div>
								<div class="col-md-3">
									<label class="form-label">Direct :<br>
										<span class="text-muted">0-4.3 umol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="0-4.3 umol/L" id="frmdirect" name="frmdirect">
								</div>
								<div class="col-md-3">
									<label class="form-label"><b>Total :</b><br>
										<span class="text-muted">up to 18.8umol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="up to 18.8umol/L" id="frmtotal" readonly name="frmtotal">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 h5">
									<label class="form-label text-success">Calcium
										<!-- :<br>
										<span class="text-muted">3.2-6.45 mmol/L</span> -->
								</div>
							</div>
							<div class="form-row" style="text-align: right;">
								<div class="col-md-3">
									<label class="form-label">Ionized :<br>
										<span class="text-muted">0.79-2.0 mmol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="0.79-2.0 mmol/L" id="frmiorized" name="frmiorized">
								</div>
								<div class="col-md-3">
									<label class="form-label"><b>Total :</b><br>
										<span class="text-muted"> 2.13-2.75 mmol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="2.13-2.75 mmol/L" id="frmtotal1" name="frmtotal1">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<label class="form-label">Chloride :<br>
										<span class="text-muted"> 94-111 mmol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="94-111 mmol/L" id="frmcloride" name="frmcloride">
								</div>
								<div class="col-md-3">
									<label class="form-label">Sodium :<br>
										<span class="text-muted"> 138-146 mol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="138-146 mol/L" id="frmsodium" name="frmsodium">
								</div>
								<div class="col-md-3">
									<label class="form-label">Potassium :<br>
										<span class="text-muted"> 3.8-5.4 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="3.8-5.4 mmol/L" id="frmpotassuim" name="frmpotassuim">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 h5">
									<label class="text-success col-form-label">SGOT
										<!--  :<br>
										<span class="text-muted"> 0-37 u/L </span> -->
									</label>
								</div>
								<!-- <div class="col-md-4">
									<input type="text" class="form-control form-control-md" id="frmsgot" name="frmsgot">
								</div> -->
								<div class="col-md-3">
									<label class="form-label">SGPT :<br>
										<span class="text-muted"> 0-42u/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="0-42u/L" id="frmsgpt" name="frmsgpt">
								</div>
								<div class="col-md-3">
									<label class="form-label">LDH :<br>
										<span class="text-muted"> 225-450 u/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="225-450 u/L" id="frmldh" name="frmldh">
								</div>
								<div class="col-md-3">
									<label class="form-label">CPK-MB :<br>
										<span class="text-muted"> up to 25 u/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="up to 25 u/L" id="frmcpkmb" name="frmcpkmb">
								</div>
								<div class="col-md-3">
									<label class="form-label">BUN :<br>
										<span class="text-muted"> 1.7-8.3 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="1.7-8.3 mmol/L" id="frmbun" name="frmbun">
								</div>
								<div class="col-md-3">
									<label class="form-label">Creatinine :<br>
										<span class="text-muted"> 40-170 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="40-170 mmol/L" id="frmcreatinine" name="frmcreatinine">
								</div>
								<div class="col-md-3">
									<label class="form-label">Uric Acid :<br>
										<span class="text-muted"> M:0.20-0.41 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="0.20-0.41 mmol/L" id="frmmuricacid" name="frmmuricacid">
								</div>
								<div class="col-md-3">
									<label class="col-form-label">
										<span class="text-muted"> F:0.14-0.33 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md mb-1" placeholder="0.14-0.33 mmol/L" id="frmfuricacid" name="frmfuricacid">
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-3">
									<label class="form-label">Albumin :<br>
										<span class="text-muted">33-55gm/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" id="frmAlbu" placeholder="33-55gm/L" name="frmAlbu">
								</div>
								<div class="col-md-3">
									<label class="form-label">Globulin :<br>
										<span class="text-muted">11-33gm/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" id="frmglobulin" placeholder="11-33gm/L" name="frmglobulin">
								</div>
								<div class="col-md-3">
									<label class="form-label"><b>Total Protein :</b><br>
										<span class="text-muted">60-80gm/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" readonly class="form-control form-control-md" id="frmtotalpro" placeholder="60-80gm/L" name="frmtotalpro">
								</div>
								<div class="col-md-3">
									<label class="form-label">A/G Ratio :<br>
										<span class="text-muted">1.5-3.1</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="1.5-3.1" id="frmagratio" name="frmagratio">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<label class="form-label">Cholesterol :<br>
										<span class="text-muted">3.2-6.45 mmol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="3.2-6.45 mmol/L" id="frmcholesterol" name="frmcholesterol">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<label class="form-label">Triglyceride :<br>
										<span class="text-muted">0.79-2.0 mmol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="0.79-2.0 mmol/L" id="frmtrigly" name="frmtrigly">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<label class="form-label">HDL :<br>
										<span class="text-muted"> M:>1.42 mmol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder=">1.42 mmol/L" id="frmhdl" name="frmhdl">
								</div>
								<div class="col-md-3">
									<label class="col-form-label"><span class="text-muted"> F:>1.68 mmol/L</span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md mb-2" placeholder=">1.68 mmol/L" id="frmhdl1" name="frmhdl1">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<label class="form-label">LDL :<br>
										<span class="text-muted">
											< 3.9 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="< 3.9 mmol/L" id="frmldl" name="frmldl">
								</div>

								<div class="col-md-3">
									<label class="form-label">Alkaline Phos :<br>
										<span class="text-muted"> M:80-306 IU/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="80-306 IU/L" id="frmalkaline" name="frmalkaline">
								</div>

								<div class="col-md-3">
									<label class="col-form-label">
										<span class="text-muted"> F:64-306 UI/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="64-306 UI/L" id="frmalkaline1" name="frmalkaline1">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12">
									<label class="col-form-label text-success h5">Glucose</label>
								</div>
								<!-- <div class="col-md-4">
									<input type="text" class="form-control form-control-mb" id="frmglucose"  name="frmglucose">
								</div> -->
							</div>
							<div class="form-row" style="text-align:right;">
								<div class="col-md-3">
									<label class="form-label">FBS :<br>
										<span class="text-muted"> 3.3-6.05 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="3.3-6.05 mmol/L" id="frmfbs" name="frmfbs">
								</div>

								<div class="col-md-3">
									<label class="form-label">RBS :<br>
										<span class="text-muted"> 4.4-6.6 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="4.4-6.6 mmol/L" id="frmrbs" name="frmrbs">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12">
									<label class="col-form-label text-success h5">OGTT</label>
								</div>
								<div class="col-md-12">
									<label class="col-form-label text-success h6">Fasting</label>
								</div>
							</div>
							<div class="form-row" style="text-align:right;">
								<div class="col-md-3">
									<label class="form-label">30 minutes</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md mb-2" placeholder="30 minutes" id="frm30mins" name="frm30mins">
								</div>

								<div class="col-md-3">
									<label class="form-label">1 Hour<br>
										<span class="text-muted"> 3.3-6.05 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" placeholder="3.3-6.05 mmol/L" id="frm1hour" name="frm1hour">
								</div>
								<div class="col-md-3">
									<label class="form-label">2 Hour<br>
										<span class="text-muted">
											<=7.7 mmol/L </span></label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md mb-4" placeholder="<=7.7 mmol/L" id="frm2hour" name="frm2hour">
								</div>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-3">
									<label class="col-form-label">Medical Technologist</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md mb-1" id="frmmedt2" name="frmmedt2">
								</div>
								<div class="col-md-3">
									<label class="col-form-label">Result Status</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md" id="frmresultstat" name="frmresultstat">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-3">
									<label class="col-form-label">Pathologist</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-md mb-1" id="frmpath2" name="frmpath2">
								</div>
								<div class="col-md-3">
									<label class="col-form-label">Date Performed</label>
								</div>
								<div class="col-md-9">
									<input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s'); ?>" class="form-control form-control-md" id="frmdteperform" name="frmdteperform">
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="btnSave" id="btnSave" class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>