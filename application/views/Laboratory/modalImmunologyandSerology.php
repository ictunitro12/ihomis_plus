<!-- IMMUNOLOGY and SEROLOGY  -->

<form id="frmImmunologyandSerology" method="post">
	<div class="modal" id="modalImmunologyandSerology" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-flask"></i>&nbsp; Immunology and Serology Result</div>
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<div class="col-md-9">

						</div>
						<div class="col-md-3 btn-group float-right" role="group" aria-label="">
							<button id="previewImmunologyandSerology" name="previewImmunologyandSerology" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printImmunologyandSerology" name="printImmunologyandSerology" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editImmunologyandSerology" name="editImmunologyandSerology" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Date Report :</label>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmdterep" disabled name="frmdterep">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Patient Name :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmpatname" disabled name="frmpatname">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Age :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmpatage" disabled name="frmpatage">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Sex :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmpatsex" disabled name="frmpatsex">
						</div>
						<div class="col-md-1">
							<label for="csdatebirth" class="col-form-label">Hospital No. :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmhpercode" disabled name="frmhpercode">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Physician :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" disabled id="frmphysiscian" name="frmphysiscian">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Ward :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" disabled id="frmward" name="frmward">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Bed No. :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" disabled id="frmbed" name="frmbed">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Lab No. :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md mb-1" disabled id="frmlabno3" name="frmlabno3">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Clinical Diagnosis :</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control form-control-md mb-1" disabled id="frmclinicaldiag" name="frmclinicaldiag">
						</div>
					</div>
					<div class="form-row">
						<table class="table table-md table-bordered table-condensed table-hover table-responsived">
							<thead>
								<tr style="font-weight:bold ; text-align:center" class="bg-success text-white">
									<th>EXAMINATION/S</th>
									<th>RESULT</th>
									<th>ABSORBANCE READING</th>
									<th>CUT OFF VALUES</th>
									<th>NORMAL USED</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="vertical-align: middle;">1. Hbs Ag</td>
									<td><input type="text" class="form-control form-control-md" id="frmhbsag" disabled name="frmhbsag"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhbsag1" disabled name="frmhbsag1"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhbsag2" disabled name="frmhbsag2"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhbsag3" disabled name="frmhbsag3"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">2. HIV</td>
									<td><input type="text" class="form-control form-control-md" id="frmhiv" disabled name="frmhiv"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhiv1" disabled name="frmhiv1"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhiv2" disabled name="frmhiv2"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhiv3" disabled name="frmhiv3"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">3. HCV</td>
									<td><input type="text" class="form-control form-control-md" id="frmhcv" disabled name="frmhcv"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhcv1" disabled name="frmhcv1"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhcv2" disabled name="frmhcv2"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhcv3" disabled name="frmhcv3"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="form-row">
						<table class="table table-sm table-bordered table-condensed table-hover table-responsived">
							<thead>
								<tr style="font-weight:bold ; text-align:center" class="bg-success text-white">
									<th></th>
									<th>RESULT</th>
									<th>NORMAL VALUES</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="vertical-align: middle;">1. Anti-Streptolysin -O</td>
									<td><input type="text" class="form-control form-control-md" id="frmantistrep" disabled name="frmantistrep"></td>
									<td style="vertical-align: middle;">Negative (less than 200iu/ml)</td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">2. C-Reactive Protein</td>
									<td><input type="text" class="form-control form-control-md" id="frmcreac" disabled name="frmcreac"></td>
									<td style="vertical-align: middle;">Negative (less than 6mg/l)</td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">3. Rheumatoid Factor</td>
									<td><input type="text" class="form-control form-control-md" id="frmrheum" disabled name="frmrheum"></td>
									<td style="vertical-align: middle;">Negative (less than 20 iu/ml)</td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">4. Rapid Plasma Reagin</td>
									<td><input type="text" class="form-control form-control-md" id="frmrapid" disabled name="frmrapid"></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="2" style="vertical-align: middle;">5. lgG, lgM for Typhoid Fever</td>
									<td><input type="text" class="form-control form-control-md" id="frmtyphoidfevlgg" disabled name="frmtyphoidfevlgg"></td>
									<td style="vertical-align: middle;">lgG</td>
								</tr>
								<tr>
									<td><input type="text" class="form-control form-control-md" id="frmtyphoidfevlgm" disabled name="frmtyphoidfevlgm"></td>
									<td style="vertical-align: middle;">lgM</td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">OTHERS:</td>
									<td><input type="text" class="form-control form-control-md" id="frmother" disabled name="frmother"></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Date :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmdate1" disabled name="frmdate1">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="form-label">Medical Technologist :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmmedt5" disabled name="frmmedt5">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Pathologist :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmpath5" disabled name="frmpath5">
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