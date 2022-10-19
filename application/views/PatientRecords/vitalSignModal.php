<form id="frmDeleteVitalSign" name="frmDeleteVitalSign" method="POST">
	<input type="hidden" name="delvitalenccode" id="delvitalenccode">
	<input type="hidden" name="delvitaldatelog" id="delvitaldatelog">
	<input type="hidden" name="vsformIdenDelete" id="vsformIdenDelete" value="delete">
	<div class="modal" id="deleteVitalModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="delnamevital"></span></h5>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>&nbsp;
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmVitalSign" name="frmVitalSign" class="form">
	<div class="modal" id="vitalModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h4 class="modal-title text-white"><i class="fa fa-heartbeat"></i> Vital Signs</h4>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-2">
							<div class="col-md-12 col-form-label text-default mb-1">Date: </div>
							<div class="col-md-12 col-form-label text-default mb-1">Blood pressure: </div>
							<div class="col-md-12 col-form-label text-default mb-1">O<small>2</small> Saturation: </div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12">
								<input type="datetime-local" class="form-control form-control mb-1" autocomplete="off" id="vsDateTime" name="vsDateTime">
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsBp" name="vsBp" placeholder="Systolic/Diastolic" required>
							</div>
							<div class="col-md-12">
								<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="o2sats" name="o2sats" placeholder="Oxygen saturation">
							</div>
						</div>
						<div class="col-md-2">
							<div class="col-md-12 col-form-label text-default mb-1">Temperature: </div>
							<div class="col-md-12 col-form-label text-default mb-1">Pulse rate: </div>
							<div class="col-md-12 col-form-label text-default mb-1">Respiration rate: </div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsTemp" name="vsTemp" placeholder="Degrees in celcius" required>
							</div>
							<div class="col-md-12">
								<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="vsPulse" name="vsPulse" placeholder="Pulse rate">
							</div>
							<div class="col-md-12">
								<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="vsRr" name="vsRr" placeholder="Respiration rate">
							</div>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="col-md-6">
							<h5 class="modal-title text-success"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Intake </h5>
						</div>

						<div class="col-md-6">
							<h5 class="modal-title text-success"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Output </h5>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<div class="col-md-4 col-form-label text-default mb-1">Oral: </div>
							<div class="col-md-4 col-form-label text-default mb-1">N/G: </div>
							<div class="col-md-4 col-form-label text-default mb-1">Blood: </div>
							<div class="col-md-4 col-form-label text-default mb-1">I.V.: </div>
							<div class="col-md-4 col-form-label text-default mb-1">Miscellaneous: </div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsOral" name="vsOral" placeholder="Oral">
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsNC" name="vsNC" placeholder="N/G">
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsBlood" name="vsBlood" placeholder="Blood">
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsIntake" name="vsIntake" placeholder="Intravenous">
							</div>
							<div class="col-md-12">
								<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsMiscel" name="vsMiscel" placeholder="Miscellaneous" maxlength="15"></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<div class="col-md-4 col-form-label text-default mb-1">Urine: </div>
							<div class="col-md-4 col-form-label text-default mb-1">N/G: </div>
							<div class="col-md-4 col-form-label text-default mb-1">Stool: </div>
							<div class="col-md-4 col-form-label text-default mb-1">Mesis: </div>
							<div class="col-md-4 col-form-label text-default mb-1">Miscellaneous: </div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsUrine" name="vsUrine" placeholder="Urine">
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsNCo" name="vsNCo" placeholder="N/G">
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsStool" name="vsStool" placeholder="Stool">
							</div>
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsMesis" name="vsMesis" placeholder="Mesis">
							</div>
							<div class="col-md-12">
								<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="vsMiscelo" name="vsMiscelo" placeholder="Miscellaneous" maxlength="15"></textarea>
							</div>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="col-md-2">
							<div class="col-md-4 col-form-label text-default mb-1">SPEC: </div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsSPEC" name="vsSPEC" placeholder="SPEC">
							</div>
						</div>
						<div class="col-md-2">
							<div class="col-md-4 col-form-label text-default mb-1">CVP: </div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="vsCVP" name="vsCVP" placeholder="CVP">
							</div>
						</div>
					</div>

					<input type="hidden" name="vsEnccode" id="vsEnccode">
					<input type="hidden" name="vsHpercode" id="vsHpercode">
					<input type="hidden" name="vsformIden" id="vsformIden">
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" name="btnSaveVital" id="btnSaveVital" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
						<button type="button" class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>