<!-- FECALYSIS  -->
<form id="frmFecalysis" method="post">
	<div class="modal" id="modalFecalysis" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-tint"></i>&nbsp; Fecalysis Result</div>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3 btn-group float-right" role="group" aria-label="">
							<button id="previewFecalysis" name="previewFecalysis" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printFecalysis" name="printFecalysis" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editFecalysis" name="editFecalysis" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
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
							<label class="fom-label">Requesting Physician :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmreqphysic" disabled name="frmreqphysic">
						</div>
						<div class="col-md-1">
							<label class="form-label">Clinical Diagnosis :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" disabled id="frmclinicaldiag" name="frmclinicaldiag">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="form-label">Date/Time Requested :</label>
						</div>
						<div class="col-md-2">
							<input type="datetime-local" class="form-control form-control-md" id="frmdterequest" disabled name="frmdterequest">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Bed No. :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" disabled id="frmbedno" name="frmbedno">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Ward :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" disabled id="frmwardno" name="frmwardno">
						</div>
						<div class="col-md-1">
							<label for="cshospital" class="col-form-label">Lab No. :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" disabled id="frmlabno1" name="frmlabno1">
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						
						<div class="col-md-1">
							<label class="col-form-label">Color :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmcolor1" disabled name="frmcolor1">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Consistency :</label>
						</div>
						<div class="col-md-5 ">
							<input type="text" class="form-control form-control-md mb-1" id="frmconsistency" disabled name="frmconsistency">
						</div>
					</div>
					<div class="form-row">
						
						<div class="col-md-1">
							<label class="col-form-label">Microscopic :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md mb-1" id="frmmicroscopic" disabled name="frmmicroscopic">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">RBC :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md mb-1" id="frmrbc" disabled name="frmrbc">
						</div>
					</div>
					<div class="form-row">
						
						<div class="col-md-1">
							<label class="col-form-label">PUs cells :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmpuscell" disabled name="frmpuscell">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Mucus :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md mb-1" id="frmmucus" disabled name="frmmucus">
						</div>
					</div>
					<div class="form-row">
						
						<div class="col-md-1">
							<label class="form-label"> OVA and Parasites :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmovaparasites" disabled name="frmovaparasites">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Occult Blood :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmoccult" disabled name="frmoccult">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Remarks :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmremarks" disabled name="frmremarks">
						</div>
						<div class="col-md-1">
							<label class="form-label">Date Performed :</label>
						</div>
						<div class="col-md-5">
							<input type="datetime-local" class="form-control form-control-md" id="frmdateperform" disabled name="frmdateperform">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="form-label">Medical Technologist :<br>
								<span class="text-muted">R.M.T</span></label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmmedt3" disabled name="frmmedt3">
						</div>
						<div class="col-md-1">
							<label class="form-row">Pathologist :<br>
								<span class="text-muted">M.D</span></label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmpath3" disabled name="frmpath3">
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