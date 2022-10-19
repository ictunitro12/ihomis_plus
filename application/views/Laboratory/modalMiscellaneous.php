<!-- MISCELLANEOUS  -->

<form id="frmMiscellaneous" method="post">
	<div class="modal" id="modalMiscellaneous" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-money"></i>&nbsp; Miscellaneous Report</div>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-8"></div>
						<div class="col-md-4 btn-group float-right" role="group" aria-label="">
							<button id="previewMiscellaneous" name="previewMiscellaneous" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printMiscellaneous" name="printMiscellaneous" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editMiscellaneousy" name="editMiscellaneousy" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="form-label">MISCELLANEOUS FORM :</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-md mb-1" id="frmmisceform" disabled name="frmmisceform">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Patient Name :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmpatname" disabled name="frmpatname">
						</div>
						<div class="col-md-1" class="col-form-label">
							<label class="col-form-label">Age :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmpatage" disabled name="frmpatage">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Room :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md mb-1" id="frmpatroon" disabled name="frmpatroon">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Date/Time:</label>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md" id="frmdate" disabled name="frmdate">
						</div>
						<div class="col-md-2" class="col-form-label">
							<label class="col-form-label">Hospital No. :</label>
						</div>
						<div class="col-md-5" id="cshospitalide">
							<input type="text" class="form-control form-control-md mb-1" id="frmhpercode" disabled name="frmhpercode">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Medical Technologist:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control form-control-md mb-1" id="frmmedtech" disabled name="frmmedtech">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Pathologist :</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control form-control-md" id="frmpathologist" disabled name="frmpathologist">
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