<form id="frmBoneMarrow" method="post">
	<div class="modal" id="modalBoneMarrow" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fas fa-bone"></i> Bone Marrow Result Form</div>
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3 btn-group float-right" role="group" aria-label="">
							<button id="previewBloodTrans" name="previewBoneMarrow" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printBloodTrans" name="printBoneMarrow" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editBloodTrans" name="editBoneMarrow" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>
					<div class="form-row">
						<div class="h5 text-success"><i class="fa fa-file-text-o"></i>&nbsp; Form</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="form-label">Date/Time Report</label>
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-md" value="<?php echo date('Y-m-d\TH:i:s'); ?>" id="frmbonedtetimereport" name="frmbonedtetimereport">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Full Name</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" placeholder="Full name" id="frombonepatname" name="frombonepatname">
						</div>
						<div class="col-md">
							<label class="col-form-label">Age</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="00" id="frmbonepatage" name="frmbonepatage">
						</div>
						<div class="col-md" id="cshospitalId">
							<label class="col-form-label">Hospital No.</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" placeholder="000000000000" id="frmbonehospno" name="frmbonehospno">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Physician</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Physician" id="frmbonephysician" name="frmbonephysician">
						</div>
						<div class="col-md-1" class="col-form-label">
							<label class="col-form-label">Ward</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" placeholder="Ward" id="frmboneward" name="frmboneward">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Bed No.</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Bed no" id="frmbonebedno" name="frmbonebedno">
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						<div class="text text-success h5"><i class="fas fa-bone"></i> Bone Marrow Study</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label text-success">Group A: White Cell Group</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">M-Blast :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="M-Blast" id="frmmblast" name="frmmblast">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">PM-cyte :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="PM-cyte" id="frmpmcyte" name="frmpmcyte">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">M-Cyte :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="M-Cyte" id="frmmcyte" name="frmmcyte">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Juven :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="Juven" id="frmjuven1" name="frmjuven1">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Stab :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="Stab" id="frmstabs1" name="frmstabs1">
						</div>
						<div class="col-md">
							<label class="col-form-label">Seq :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Seq" id="frmseq" name="frmseq">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Eos :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="Eos" id="frmeon" name="frmeon">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Baso :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="Baso" id="frmbaso1" name="frmbaso1">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Lympho :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="Lympho" id="frmlympho" name="frmlympho">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Mono:</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="Mono" id="frmmono1" name="frmmono1">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Metotic Cell :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Metotic cell" id="frmmetoticcell" name="frmmetoticcell">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Description :</label>
						</div>
						<div class="col-md-11">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Description" id="frmbonedescription" name="frmbonedescription">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Diagnosis :</label>
						</div>
						<div class="col-md-11">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Diagnosis" id="frmbonediag" name="frmbonediag">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Initial Evalution :</label>
						</div>
						<div class="col-md-4">
						<input type="text" class="form-control form-control-md mb-1" placeholder="Initial Evalution" id="frminiteval" name="frminiteval">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Prepared By :</label>
						</div>
						<div class="col-md-4">
						<input type="text" class="form-control form-control-md mb-1" placeholder="Prepared by" id="frmprepby" name="frmprepby">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Result Status :</label>
						</div>
						<div class="col-md-4">
						<input type="text" class="form-control form-control-md mb-1" placeholder="Result status" id="frmresultstat" name="frmresultstat">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Date Performed :</label>
						</div>
						<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-md mb-1" id="dateperform" name="dateperform">
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