<!-- GYNECOLOGIC CYTOLOGY  -->

<form id="frmGyneCytology" method="post">
	<div class="modal" id="modalGyneCytology" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-heartbeat"></i>&nbsp; Gynecologic Cytology Report</div>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3 btn-group float-right" role="group" aria-label="">
							<button id="previewGyneCytology" name="previewGyneCytology" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printGyneCytology" name="printGyneCytology" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editGyneCytology" name="editGyneCytology" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Date Report :</label><br>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmdatereport" disabled name="frmdatereport">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Date/Time Request:</label>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md" id="frmdtetime" name="frmdtetime" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Patient Name :</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" id="frmpatname" name="frmpatname" disabled>
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Age :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmpatage" name="frmpatage" disabled>
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Civil Status :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmcstat" name="frmcstat" disabled>
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Hospital No.:</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md mb-1" id="frmhospno" name="frmhospno" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Physician :</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" id="frmphysic" name="frmphysic" disabled>
						</div>
						<div class="col-md-1">
							<label class="form-label">C.N. :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" id="frmcontactno" name="frmcontactno" disabled>
						</div>
						<div class="col-md-1" id="cshospitalId">
							<label class="col-form-label">LMP :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmlmp" name="frmlmp" disabled>
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-5">
									<label class="text-success col-form-label">DESCRIPTIVE DIAGNOSES:</label>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<input type="radio" id="frmdescdiagwnormallimits" name="frmdescriptivediag" />&nbsp; WITHIN NORMAL LIMITS
								</div>
								<div class="col-md-3" class="col-form-label">
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-5">
									<input type="radio" id="frmbeniggcell" name="frmdescriptivediag" />&nbsp; BENIGN CELLULAR CHANGES
								</div>
								<div class="col-md-3" class="col-form-label">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-12">
									<label class="text-success col-form-label">ADEQUACY OF THE SPECIMEN:</label>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3">
									<input type="radio" class="col-form-label" id="frmsatisfact" name="frmadequa" />&nbsp; Satisfactory
								</div>
								<div class="col-md-6">
									<input type="radio" class="col-form-label" id="frmunsatisfact" name="frmadequa" />&nbsp; Unsatisfactory of evaluation
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6">
									<input type="radio" class="col-form-label" id="frmsatisfactbutlimited" name="frmadequa" />&nbsp; Satisfactory for evaluation but limited by
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control form-control-sm" id="frmsatisfactbutlimitedtxt" name="frmsatisfactbutlimitedtxt" />
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1"></div>
						<div class="col-md-1">
							Infection:
						</div>
						<div class="col-md-1">
							<input type="radio" id="frmbacterial" name="frminfect" />&nbsp; Bacterial
						</div>
						<div class="col-md-1">
							<input type="radio" id="frmfungal" name="frminfect" />&nbsp; Fungal
						</div>
						<div class="col-md-1">
							<input type="radio" id="frmprotzen" name="frminfect" />&nbsp; Protozen
						</div>
						<div class="col-md-1">
							<input type="radio" id="frminfectother" name="frminfect" />&nbsp; Others
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1"></div>
						<div class="col-md-3">
							<label class="col-form-label">Microorganism morphologically Consistent With</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-sm" id="frmmicromorphconsiswith" name="frmmicromorphconsiswith" />
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5">
							<label class="col-form-label">Reactive Changes: Cellular Changes Associated with:</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2" class="col-form-label">
							<input type="radio" id="frminflam" name="frmmicromorphcons" />&nbsp; Inflammation
						</div>
						<div class="col-md-2" class="col-form-label">
							<input type="radio" id="frmatrowinflam" name="frmmicromorphcons" />&nbsp; Atrophy with inflammation
						</div>
						<div class="col-md-1" class="col-form-label">
							<input type="radio" id="frmreactchangesother" name="frmmicromorphcons" />&nbsp; Others
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<input type="radio" id="frmepithelial" name="frmdescriptivediag" />&nbsp; EPITHELIAL CELL ABNORMALITIES
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<label class="text-success col-form-label">Squamous Cell</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<input type="radio" id="frmadequaunsatisfac" name="frmsquamcell" />&nbsp; A Typical aquamous cells of undetermined significance
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<input type="radio" id="frmlowgradeaquam" name="frmsquamcell" />&nbsp; Low grade aquamous intraepithelial lesion encompassing
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2" class="col-form-label">
							<input type="radio" id="frmcellchange" name="frmlowgradeaquam" />&nbsp; Cellular changes oh HPV
						</div>
						<div class="col-md-3" class="col-form-label">
							<input type="radio" id="frmmilddyspla" name="frmlowgradeaquam" />&nbsp; Mild dysplasia/CIS (CIN 3)
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<input type="radio" id="frmhighgradaquam" name="frmsquamcell" />&nbsp; High grade aquamous intraepithelial lesion encompassing
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<input type="radio" id="frmsquamcellcar" name="frmsquamcell" />&nbsp; Squamous cell carcinoma
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<label class="text-success col-form-label">Glandular Cell</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<input type="radio" id="frmendomcellcyto" name="frmglandularcell" />&nbsp; Endometrial cells cytologically benin in postmenopausal women
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-5" class="col-form-label">
							<input type="radio" id="frmatypglandcell" name="frmglandularcell" />&nbsp; Atypical glandular cells of undetermined significance
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<input type="radio" id="frmadenocar" name="frmglandularcell" class="col-form-label" />&nbsp; Adenocarcinoma
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-sm mb-1" id="frmadenocartxt" name="frmadenocartxt" />
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-5">
							<label class="col-form-label">HORMONAL EVALUATION (Applies to Vaginal Smears only) P/L/S</label>
						</div>
						<div class="col-md-3" class="col-form-label">
							<input type="text" class="form-control form-control-sm" id="frmhormev" name="frmhormev" />
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<label class="text-success col-form-label">Hormonal Pattern</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-1" class="col-form-label">
							<input type="radio" id="frmcompatible" name="frmhormopatt" />&nbsp; Compatible
						</div>
						<div class="col-md-2" class="col-form-label">
							<input type="radio" id="frmincompatible" name="frmhormopatt" />&nbsp; Incompatible
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-3">
							<label class="text-success col-form-label">w/ age and history</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<label class="col-form-label">Hormonal evaluation not possible due to</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-sm mb-1" id="frmhormeval" name="frmhormeval" />
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<label class="col-form-label">Remarks</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-sm" id="frmremarks" name="frmremarks" />
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="form-label">Interpreted by : <br>
								<span class="text-muted">M.D</span></label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frminterpretby" name="frminterpretby" />
						</div>
						<div class="col-md-1" class="col-form-label">
							<label class="form-label">Attested by : <br>
								<span class="text-muted">M.D</span></label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" id="frmattestedby" name="frmattestedby" />
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