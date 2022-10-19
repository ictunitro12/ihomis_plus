<!-- SURGICAL PATHOLOGICAL   -->

<form id="frmSurgicalPathological" method="post">
	<div class="modal" id="modalSurgicalPathological" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-tint"></i>&nbsp; Surgical Pathological Report</div>
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3 btn-group float-right" role="group" aria-label="">
							<button id="previewSurgicalPathological" name="previewSurgicalPathological" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printSurgicalPathologicalr" name="printSurgicalPathologicalr" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editSurgicalPathological" name="editSurgicalPathological" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda mb-1" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3" style="text-align:center;">
							<label class="col-form-label text-success h4">MANILA</label>
						</div>
						<div class="col-md-1">
							<label class="form-label">Surg. Path. No:</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" id="frmsurgpathno" disabled name="frmsurgpathno">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">hospital No:</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" id="frmhpercode" disabled name="frmhpercode">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Date Report:</label><br>
						</div>
						<div class="col-md-2">
							<input type="datetime-local" class="form-control form-control-md" id="frmdatereport" disabled name="frmdatereport">
						</div>
					</div>
					<div class="form-row">
						<label class="col-form-label text-success h4"><i class="fa fa-list-alt"></i>&nbsp; FORM NO. JIL - 10</label>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Patient Name:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" id="frmpatname" disabled name="frmpatname">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Age :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmpaage" disabled name="frmpaage">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Sex :</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" id="frmpatsex" disabled name="frmpatsex">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Civil Status :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md mb-1" id="frmcstat" disabled name="frmcstat">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Classification :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md " id="frmtimereport" disabled name="frmtimereport">
						</div>
						<div class="col-md-1" class="control-label">
							<label class="col-form-label">Ward :</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md " id="frmward" disabled name="frmward">
						</div>
						<div class="col-md-1" id="cshospitalId">
							<label class="col-form-label">Bed No. :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md mb-1" id="frmbedno" disabled name="frmbedno">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Specimen :</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" id="frmspecimen" disabled name="frmspecimen">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Requested By :</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" id="frmrequestby" disabled name="frmrequestby">
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
							<input type="text" class="form-control form-control-md" id="frmtimereport" disabled name="frmtimereport">
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