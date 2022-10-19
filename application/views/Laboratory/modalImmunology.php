<!-- IMMUNOLOGY  -->

<form id="frmImmunology" method="post">
	<div class="modal" id="modalImmunology" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-flask"></i>&nbsp; Immunology Result</div>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3 btn-group float-right" role="group" aria-label="">
							<button id="previewImmunology" name="previewImmunology" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printImmunology" name="printImmunology" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editImmunology" name="editImmunology" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
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
							<input type="text" class="form-control form-control-md mb-1" disabled id="frmlabnoimmuno" name="frmlabnoimmuno">
						</div>
					</div>


					<hr class="bg-success">
					<div class="form-row">
						<table class="table table-md table-bordered table-condensed table-hover table-responsived">
							<thead>
								<tr style="font-weight:bold ; text-align:center"  class="bg-success text-white">
									<th>EXAMINATION/S</th>
									<th>RESULT</th>
									<th>ABSORBANCE READING</th>
									<th>CUT OFF VALUES</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="vertical-align: middle;">Hbs<br> <span class="text-muted">Ag</span></td>
									<td><input type="text" class="form-control form-control-md" id="frmhbsag" disabled name="frmhbsag"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhbsag1" disabled name="frmhbsag1"></td>
									<td><input type="text" class="form-control form-control-md" id="frmhbsag2" disabled name="frmhbsag2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Anti-HBs</td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbs" disabled name="frmantihbs"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbs1" disabled name="frmantihbs1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbs2" disabled name="frmantihbs2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Anti-HBc <br> <span class="text-muted">lgG</span></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbclgg" disabled name="frmantihbclgg"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbclgg1" disabled name="frmantihbclgg1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbclgg2" disabled name="frmantihbclgg2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Anti-Hbc <br> <span class="text-muted">lgM</span></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbclgm" disabled name="frmantihbclgm"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbclgm1" disabled name="frmantihbclgm1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbclgm2" disabled name="frmantihbclgm2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Anti-HCV</td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihcv" disabled name="frmantihcv"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihcv1" disabled name="frmantihcv1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihcv2" disabled name="frmantihcv2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Anti-Hbc</td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbc" disabled name="frmantihbc"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbc1" disabled name="frmantihbc1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihbc2" disabled name="frmantihbc2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Anti-HAV <br> <span class="text-muted">lgG</span></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihavlgg" disabled name="frmantihavlgg"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihavlgg1" disabled name="frmantihavlgg1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihavlgg2" disabled name="frmantihavlgg2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Anti-HAV <br> <span class="text-muted">lgM</span></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihavlgm" disabled name="frmantihavlgm"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihavlgm1" disabled name="frmantihavlgm1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmantihavlgm2" disabled name="frmantihavlgm2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">HBc <br> <span class="text-muted">Ag</span></td>
									<td><input type="text" class="form-control form-control-mb" id="frmhbcag" disabled name="frmhbcag"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmhbcag1" disabled name="frmhbcag1"></td>
									<td><input type="text" class="form-control form-control-mb" id="frmhbcag2" disabled name="frmhbcag2"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Date :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmdate" disabled name="frmdate">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="form-label">Medical Technologist :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmmedt4" disabled name="frmmedt4">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Pathologist :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmpath4" disabled name="frmpath4">
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