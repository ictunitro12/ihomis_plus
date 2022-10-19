<!-- CLINICAL MICROBIOLOGY SMEAR REQUEST   -->

<form id="frmClinicalMicroSmear" method="post">
	<div class="modal" id="modalClinicalMicroSmear" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-heartbeat"></i>&nbsp; Clinical Microbiology Smear Request and Report</div>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3 btn-group float-right" role="group" aria-label="">
							<button id="previewClinicalMicroSmear" name="previewSurgicalPathological" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printClinicalMicroSmear" name="printSurgicalPathologicalr" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editClinicalMicroSmear" name="editSurgicalPathological" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="form-label">Date/Time Report:</label>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmmicrosmeardtetime" disabled name="frmmicrosmeardtetime">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Full Name :</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-md" id="frmmicrosmearname" disabled name="frmmicrosmearname">
						</div>
						<div class="col-md-1">
							<label for="csdate" class="col-form-label">Age :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmmicrosmearage" disabled name="frmmicrosmearage">
						</div>
						<div class="col-md-1">
							<label for="cspatientname" class="col-form-label">Sex :</label>
						</div>
						<div class="col-md-1" id="cspatientnameId">
							<input type="text" class="form-control form-control-md mb-1" id="frmmicrosmearsex" disabled name="frmmicrosmearsex">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Hospital No. :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmmicrosmearhospno" disabled name="frmmicrosmearhospno">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Classification :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" disabled id="frmmicrosmearclassif" name="frmmicrosmearclassif">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Ward :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" disabled id="frmmicrosmearward" name="frmmicrosmearward">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Bed No :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" disabled id="frmmicrosmearbed" name="frmmicrosmearbed">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Requested By :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" disabled id="frmmicrosmearrequestby" name="frmmicrosmearrequestby">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Specimen :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" disabled id="frmspecimenmicrosmear" name="frmspecimenmicrosmear">
						</div>
					</div>
					<hr class="bg-success 1px">
					<div class="form-row">
						<!-- tiltle -->
						<div class="col-md-6">
							<label class="col-form-label text-success h5">Gram Stain On Direct Smear</label>
						</div>
						<div class="col-md-6" class="control-label">
							<label class="col-form-label text-success h5">Indian Ink Preparation of Direct Smear</label>
						</div>
						<!-- -->
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">PUs Cells :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmpuscellsgrand" disabled name="frmpuscellsgrand">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Crytococous Neonoformas :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmcrytoconeo" disabled name="frmcrytoconeo">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Epithelial Cells :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmepithelial" disabled name="frmepithelial">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">No organizsm seen :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmnoorganizsm" disabled name="frmnoorganizsm">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Gram neg. Bacili :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmgramneg" disabled name="frmgramneg">
						</div>
						<div class="col-md-1">
						</div>
						<!-- tiltle -->
						<div class="col-md-4">
							<label class="col-form-label text-success h5">Cotton Blue Swallow Direct</label>
						</div>
						<!-- -->
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Gram positive cocci :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmgrampositive" disabled name="frmgrampositive">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Chlamydospore :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmchlamydos" disabled name="frmchlamydos">
						</div>						
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">T. vaginalis :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmtvaginalis" disabled name="frmtvaginalis">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Hyphae :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmhypae" disabled name="frmhypae">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Candida Albicans :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmcandidaalbicans" disabled name="frmcandidaalbicans">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Fungus :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmfungus" disabled name="frmfungus">
						</div>						
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Intracellular gram :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmintracelgram" disabled name="frmintracelgram">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Neg. Diplococci :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmnegdiplo" disabled name="frmnegdiplo">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Extracellular gram :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmextracelgram" disabled name="frmextracelgram">
						</div>
					</div>
					<hr class="bg-success">
					<!-- title -->
					<div class="form-row">
						<div class="col-md-3">
							<label class="col-form-label text-success h5">Acid Fast Strain on Direct Smear</label>
						</div>
						<div class="col-md-3">
						</div>
						<div class="col-md-2">
							<label class="col-form-label text-success h5">Smear for Amoeba</label>
						</div>
					</div>
					<!-- ----- -->
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">PUs Cells :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmacidpuscell" disabled name="frmacidpuscell">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">PUs Cells :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmsmearpuscell" disabled name="frmsmearpuscell">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Cocci in chains :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmcoccichain" disabled name="frmcoccichain">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Red Blood cells :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmrbcell" disabled name="frmrbcell">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Acid fast bacili :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmacidfastbacil" disabled name="frmacidfastbacil">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Tropozoites :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmtropoz" disabled name="frmtropoz">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Cocci in clusters :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmcocciclusters" disabled name="frmcocciclusters">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">E. histolytica cyst :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmehistocyst" disabled name="frmehistocyst">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">No organism seen :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmnoorganismseen" disabled name="frmnoorganismseen">
						</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">E. Coli cyst :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmcolicyst" disabled name="frmcolicyst">
						</div>
					</div>
					<hr class="bg-success">
					<!-- title -->
					<div class="form-row">
						<div class="col-md-6">
							<label class="col-form-label text-success h5">Miscellaneous</label>
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Miscellaneous :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmmiscellaneous" disabled name="frmmiscellaneous">
						</div>
					</div>
					<!-- ---- -->
					<hr class="bg-success">
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label text-danger">NOTE: Check in :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" id="frmcheckin" disabled name="frmcheckin">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Pathologist :</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" id="frmpathologist" disabled name="frmpathologist">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Medical Technologist :</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" id="frmmeditech" disabled name="frmmeditech">
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