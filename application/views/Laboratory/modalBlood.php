<form id="frmBlood" method="post">
	<div class="modal" id="modalBlood"  tab-index="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="modal-title text-success h4 float-left"><i class="fa fa-tint"></i>Blood Examination Result</div>
					<button type="button" id="printBloodResult"  class="btn btn-outline-success float-right"><i class="fa fa-print"></i> Print</button>
				</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" class="form-control form-control-md mb-1" id="docointkey_bld"  name="docointkey">
							<input type="hidden" class="form-control form-control-md mb-1" id="enccode_bld"  name="enccode">
							<input type="hidden" class="form-control form-control-md mb-1" id="hpercode_bld"  name="hpercode">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Hemoglobin:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" min ="135"  max ="180"id="bldHemo" placeholder="Hemoglobin" name="bldHemo">
								<small class="text text-muted">M-135-180 g/L</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Platelet Count:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any" id="bldPlatelet" placeholder="Platelet Counts" name="bldPlatelet">
								<small class="text text-muted">150-400X10/L</small>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								Hematocrit:
							</div>
							<div class="col-md-4">
								<input type="number" step="any" class="form-control form-control-md mb-1" step="any" id="bldHemato" placeholder="Hematocrit" name="bldHemato" placeholder=".00">
								<small class="text text-muted">M-0.40-0.54</small>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								Reticulocytes:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="Reticuloctytes" id="bldRet" name="bldRet">
								<small class="text text-muted">0.5-1.5%</small>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								R.B.C Count:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="RBC Count" id="bldRBC" name="bldRBC">
								<small class="text text-muted">M-4.6-6.2x10/L</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Bleeding Time:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1"  step="any" placeholder="Bleeding Time" id="bldBleed" name="bldBleed">
								<small class="text text-muted">2-4 Minutes</small>
							</div>
						</div>
							<hr class="bg-success">
						<div class="form-row">
							<legend class="text text-success"><i class="fa fa-tint fa-xs"></i> Red cell Indices</legend>
							<div class="col-md-2 col-form-label  text-default mb-1">
								M.C.V
							</div>
							<div class="col-md-4">
								<small class="text text-muted">'mean corpuscular volume'</small>
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="MCV" id="bldMCV" name="bldMCV">
								<small class="text text-muted">80-96 ft</small>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								MCH:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="MCH" id="bldMCH" name="bldMCH">
								<small class="text text-muted"> 27-31 pg</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Clot Retraction:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1"  step="any" placeholder="Clot Retraction" id="bldClot" name="bldClot">
								<small class="text text-muted">18-24 hrs.</small>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								MCHC:
							</div>

							<div class="col-md-4">
								<small class="text text-muted">mean corpuscular hemoglobin concentration</small>
								<input type="number" class="form-control form-control-md mb-1"   step="any"placeholder="MCH" id="bldMCHC" name="bldMCHC">
								<small class="text text-muted"> 27-31 g</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Pro Time:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="Pro Time" id="bldProt" name="bldProt">
								<small class="text text-muted">18-24 hrs.</small>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								WBC count:
							</div>
							<div class="col-md-4">
								<small class="text text-muted">White Blood Cell Count</small>
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="MCH" id="bldWBC" name="bldWBC">
								<small class="text text-muted"> 5-10 x 10/L</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								APTT
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="Clot Retraction" id="bldAPTT" name="bldAPTT">
								<small class="text text-muted">22-35 secs</small>
							</div>
						</div>
						<hr class="bg-success">
						<legend class="text text-success"><i class="fa fa-tint fa-xs"></i> Differential Count</legend>
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Neutrophils:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1"   step="any"placeholder="Neutrophils" id="bldNeu" name="bldNeu">
								<small class="text text-muted">0.55</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Lymphocytes:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1"  step="any" placeholder="Lymphocytes" id="bldLympho" name="bldLympho">
								<small class="text text-muted">0.34</small>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Basophilis:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any"  placeholder="Basophilis" id="bldBaso" name="bldBaso">
								<small class="text text-muted">0.01</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Monocytes:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any"  placeholder="Monocytes" id="bldMono" name="bldMono">
								<small class="text text-muted">0.03</small>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Eosinophils:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1" step="any" placeholder="Eosinophilis" id="bldEos" name="bldEos">
								<small class="text text-muted">0.01</small>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Stabs:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1"  step="any" placeholder="Stabs" id="bldStabs" name="bldStabs">
								<small class="text text-muted">0.03</small>
							</div>
						</div>
						<div class="form-row">

							<div class="col-md-2 col-form-label  text-default mb-1">
								Juveniles:
							</div>
							<div class="col-md-4">
								<input type="number" class="form-control form-control-md mb-1"  step="any" placeholder="Juviniles" id="bldJuv" name="bldJuv">
								<small class="text text-muted">0.01</small>
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
<script src="<?php echo base_url()?>assets/scripts/laboratory/saveBloodResult.js"></script>