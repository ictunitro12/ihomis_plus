<form id="frmUrinalysis"  name = "frmUrinalysis" method="post">
	<div class="modal" id="modalUrinalysis" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h4 modal-title text-success float-left"><i class="fa fa-flask"></i> Urinalysis Result Form</div>
					<button type="button" id="printUrinalysis"  class="btn btn-outline-success float-right"><i class="fa fa-print"></i> Print</button>
				</div>
				<div class="modal-body">
					<input type="hidden" class="form-control form-control-sm" name="docointkey" id="docointkey_result" />
					<input type="hidden" class="form-control form-control-sm" name="enccode_result" id="enccode_result" />
					<input type="hidden" class="form-control form-control-sm" name="hpercode_result" id="hpercode_result" />
					<div id="_patientInfo"></div>
					<div class="form-row">
						<div class="col-12">
							<div class="h5 text-success"><i class="fa fa-hands"></i> Physical</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1"></div>
						<div class="col-md-1">
							<label class="col-form-label pull-right">Color :</label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmcolor" name="frmcolor">
								<option value="">Please Select </option>
								<option value="1">Amber</option>
								<option value="2">Dark Yellow</option>
								<option value="3">LIght Yellow</option>
								<option value="4">Yellow</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Characteristic :</label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmcharac" name="frmcharac">
								<option value="">Please Select</option>
								<option value="1">Blurred</option>
								<option value="2">Cleared</option>
							</select>
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						<div class="co1-12">
							<div class="h5 text-success"><i class="fas fa fa-microscope"></i> Microscopic</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label pull-right">Red Blood Cell/s :<br>
								<span class="text-muted">0-2/hpf</span></label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" autocomplete="off" placeholder='RCB' id="frmrcb" name="frmrcb">
						</div>
						<div class="col-md-2">
							<label class="form-label">White Blood Cell/s :<br>
								<span class="text-muted">0-5/hpf</span></label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" autocomplete="off" placeholder='WBC' id="frmwbc" name="frmwbc">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label pull-right">Epithelial Cells :<br>
								<span class="text-muted">few</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmepith" name="frmepith">
								<option value="">Please Select</option>
								<option value="1">Few</option>
								<option value="2">Many</option>
								<option value="3">None</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="form-label">Bacteria :<br>
								<span class="text-muted">few</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmbact" name="frmbact">
								<option value="">Please Select</option>
								<option value="1">Few</option>
								<option value="2">Many</option>
								<option value="3">None</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label pull-right">Crystals :<br>
								<span class="text-muted">few</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmcrys" name="frmcrys">
								<option value="">Please Select</option>
								<option value="1">Few</option>
								<option value="2">Many</option>
								<option value="3">None</option>
							</select>
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						<div class="col-6">
							<div class="h5 text-success"><i class="fas fa-eye-dropper"></i> Chemical</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label pull-right">Reaction(pH) :<br>
								<span class="text-muted">5-6</span></label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" autocomplete="off" id="frmreac" name="frmreac">
						</div>
						<div class="col-md-2">
							<label class="form-label">Sp. Gravity :<br>
								<span class="text-muted">1.010-1.030</span></label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" autocomplete="off" id="frmsp" name="frmsp">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label pull-right">Sugar :<br>
								<span class="text-muted">Negative</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmsugar" name="frmsugar">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="form-label">Protein :<br>
								<span class="text-muted">Negative</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmprotein" name="frmprotein">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label pull-right">Bilirubin :<br>
								<span class="text-muted">Negative</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmbili" name="frmbili">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="form-label">Ketone :<br>
								<span class="text-muted">Negative</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmketone" name="frmketone">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label pull-right">Pregnancy Test :<br>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmpregtest" name="frmpregtest">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="form-label">Urobilinogen :<br>
								<span class="text-muted">Negative</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmurob" name="frmurob">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label pull-right">Nitrite :<br>
								<span class="text-muted">Negative</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmnitrite" name="frmnitrite">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
						<div class="col-md-2">
							<label class="form-label">Ascorbic Acid* :<br>
								<span class="text-muted">Negative</span></label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md" autocomplete="off" id="frmascorbic" name="frmascorbic">
								<option value="">Please Select</option>
								<option value="1">Negative</option>
								<option value="2">Positive</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<label class="col-form-label">Notes/Remarks :</label>
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control-md" autocomplete="off" placeholder ="Notes/Remarks" id="frmnotes" name="frmnotes"></textarea>
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label">Medical Technonologist:<br>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" id="frmmedtech" placeholder="Medical Technologist" name="frmmedtech">
						</div>
						<div class="col-md-1">
							<label class="form-label">Pathologist :<br>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmpathologist" placeholder="Pathologist" name="frmpathologist">
						</div>
					</div>
		
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Date performed :</label>
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-md" id="frmdteperform" name="frmdteperform">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Result Status:</label>
						</div>
						<div class="col-md-5">
						<select class="form-control form-control-md" autocomplete="off" id="frmascorbic" name="frmascorbic">
								<option value="">Please Select</option>
								<option value="A">Active</option>
								<option value="I">Inactive</option>
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
<script src="<?php echo base_url()?>assets/scripts/laboratory/saveUrinalysis.js"></script>