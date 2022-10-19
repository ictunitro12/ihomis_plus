<form id="frmSpecimen" name="frmSpecimen" method="post">
	<div class="modal fade" id="modalSpecimen" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<h4 class="modal-title text-success"> <i class="fa fa-flask"></i> Specimen</h4>
					<div class="form-row">
						<input type="text" id="specidocointkey" name="specidocointkey">
						<input type="text" id="specienccode" name="specienccode">
						<input type="text" id="specihpercode" name="specihpercode">
						<input type="text" id="speciproccode" name="speciproccode">
						<input type="text" id="speciFormIden" name="speciFormIden">
						<div class="col-md-4 col-form-label text-default mb-1">
							Laboratory No:
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control  mb-1" readonly id="labno" name="labno">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Log:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control  mb-1" autocomplete="off" step="1" id="speciDateLog" name="speciDateLog" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Quantity:
						</div>
						<div class="col-md-8">
							<input type="number" class="form-control  mb-1" autocomplete="off" value="1" id="speciQty" name="speciQty">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Units of Measure:
						</div>
						<div class="col-md-8">
							<select class="form-control  mb-1" id="speci_oum" name="speci_oum" required>
								<option value="">Select</option>
							</select>
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
