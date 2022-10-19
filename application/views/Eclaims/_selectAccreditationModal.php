<div class="modal" id="searchAccreditation" name="searchAccreditationModal" role="dialog">
	<form name="accreditationFacility" id="accreditationFacility" method="post">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success">Philhealth Accreditation</h2>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-3 col-form-label  text-default mb-1">
							Accreditation:
						</div>
						<div class="col-9 mb-1">
							<select class="form-control" name="accreditation" id="accreditation">
								<?php
								foreach ($accreditations as $accreditation) {
									echo '<option value="' . $accreditation->paccreno . '">' . $accreditation->paccreno . ' - ' . $accreditation->claim_type . '</option>';
								}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" class="btn btn-success btn-lg btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Select</button>
				</div>
			</div>
		</div>
	</form>
</div>