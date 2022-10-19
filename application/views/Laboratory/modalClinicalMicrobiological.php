

<form id="frmClinicalMicrobiological" method="post">
	<div class="modal" id="modalClinicalMicrobiological" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fas fa-flask"></i> Clinical MIcrobiological Result</div>
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<div class="col-md-8">
						</div>
						<div class="col-md-4 btn-group float-right" role="group" aria-label="">
							<button id="previewClinicalMicrobiological" name="previewClinicalMicrobiological" data-toggle="tooltip" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printClinicalMicrobiological" name="printClinicalMicrobiological" data-toggle="tooltip" class="btn btn-outline-warning btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editClinicalMicrobiological" name="editClinicalMicrobiological" data-toggle="tooltip" class="btn btn-outline-info btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>
					<div class="form-row">
						<div class="h4 text-success"><i class="fa fa-file-text-o"></i>&nbsp; Form</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Date Report</label>
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmclinicmicrodtetime" name="frmclinicmicrodtetime">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Hospital No.</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" placeholder="Hospital number" id="frmclinicmicrohospno" name="frmclinicmicrohospno">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Full Name</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-md" placeholder="Full name" id="frmclinicmicroname" name="frmclinicmicroname">
						</div>
						<div class="col-md-1">
							<label for="csdate" class="col-form-label">Age</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md" placeholder="Age in year" id="frmclinicmicroage" name="frmclinicmicroage">
						</div>
						<div class="col-md-1">
							<label for="cspatientname" class="col-form-label">Sex</label>
						</div>
						<div class="col-md-1" id="cspatientnameId">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Sex" id="frmclinicmicrosex" name="frmclinicmicrosex">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Classification</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" placeholder="Classification" id="frmclassification" name="frmclassification">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Ward</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Ward" id="frmclinicmicroward" name="frmclinicmicroward">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Bed No</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" placeholder="Bed number" id="frmclinicmicrobed" name="frmclinicmicrobed">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Requested By</label>
						</div>
						<div class="col-md-6" id="cshospitalId">
							<input type="text" class="form-control form-control-md" placeholder="Requested by" id="frmclinicmicrorequestby" name="frmclinicmicrorequestby">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Lab No.</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Laboratory number" id="frmclinicmicrolabno" name="frmclinicmicrolabno">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Date/Time Collected</label>
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-md" id="frmclinicmicrodtecollect" name="frmclinicmicrodtecollect">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Date/Time Received</label>
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmclinicmicrodtereceive" name="frmclinicmicrodtereceive">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Specimen</label>
						</div>
						<div class="col-md-4">
						<input type="text" class="form-control form-control-md mb-1" placeholder="specimen" id="frmspecimen" name="frmspecimen">
						</div>
					</div>
					<!-- ******** -->

					<hr class="bg-success">
					<div class="form-row">
						<table class="table table-sm table-bordered table-condensed table-hover table-responsived">
							<thead>
								<tr style="font-weight:bold ; text-align:center" class="bg-success text-white">
									<th>Antibiotics</th>
									<th>S</th>
									<th>INT</th>
									<th>R</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="vertical-align: middle;">Cepuroxme (ZINACEF)</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcepuroxme" name="frmcepuroxme"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcepuroxme1" name="frmcepuroxme1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcepuroxme2" name="frmcepuroxme2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Ceptazidime (FORTUM)</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmceptazidime" name="frmceptazidime"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmceptazidime1" name="frmceptazidime1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmceptazidime2" name="frmceptazidime2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Cephalexin (CEPOREX)</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcephalexin" name="frmcephalexin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcephalexin1" name="frmcephalexin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcephalexin2" name="frmcephalexin2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Gentanicin</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmgentanicin" name="frmgentanicin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmgentanicin1" name="frmgentanicin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmgentanicin2" name="frmgentanicin2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Tobranycin</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmtobranycin" name="frmtobranycin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmtobranycin1" name="frmtobranycin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmtobranycin2" name="frmtobranycin2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Piperacillin</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmpiperacillin" name="frmpiperacillin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmpiperacillin1" name="frmpiperacillin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmpiperacillin2" name="frmpiperacillin2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Tetracycline</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmtetracycline" name="frmtetracycline"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmtetracycline1" name="frmtetracycline1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmtetracycline2" name="frmtetracycline2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Nitrofurantion</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmnitrofurantoin" name="frmnitrofurantoin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmnitrofurantoin1" name="frmnitrofurantoin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmnitrofurantoin2" name="frmnitrofurantoin2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Chloramphenicol</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmchloramphenicol" name="frmchloramphenicol"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmchloramphenicol1" name="frmchloramphenicol1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmchloramphenicol2" name="frmchloramphenicol2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Cepotaxine</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcepotaxine" name="frmcepotaxine"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcepotaxine1" name="frmcepotaxine1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcepotaxine2" name="frmcepotaxine2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Cepoperazone</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcepoperazone" name="frmcepoperazone"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcepoperazone1" name="frmcepoperazone1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcepoperazone2" name="frmcepoperazone2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Ceftriaxone</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcefriaxone" name="frmcefriaxone"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcefriaxone1" name="frmcefriaxone1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcefriaxone2" name="frmcefriaxone2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Sulfanethoxazole</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmsulfane" name="frmsulfane"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmsulfane1" name="frmsulfane1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmsulfane2" name="frmsulfane2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">W/ Trinethoprin</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmwtrine" name="frmwtrine"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmwtrine1" name="frmwtrine1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmwtrine2" name="frmwtrine2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Cephalothin</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcephalothin" name="frmcephalothin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcephalothin1" name="frmcephalothin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcephalothin2" name="frmcephalothin2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Cefaclor</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcefaclor" name="frmcefaclor"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcefaclor1" name="frmcefaclor1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcefaclor2" name="frmcefaclor2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Cerfamandole</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmcefamandole" name="frmcefamandole"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmcefamandole1" name="frmcefamandole1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmcefamandole2" name="frmcefamandole2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Norfloxacin NORFLOXACIN</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmnorfloxacin" name="frmnorfloxacin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmnorfloxacin1" name="frmnorfloxacin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmnorfloxacin2" name="frmnorfloxacin2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Nalidixic Acid</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmnalidixic" name="frmnalidixic"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmnalidixic1" name="frmnalidixic1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmnalidixic2" name="frmnalidixic2"></td>
								</tr>
								<tr>
									<td style="vertical-align: middle;">Ampicilin</td>
									<td><input type="text" class="form-control form-control-md" placeholder="S" id="frmampicilin" name="frmampicilin"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="INT" id="frmampicilin1" name="frmampicilin1"></td>
									<td><input type="text" class="form-control form-control-md" placeholder="R" id="frmampicilin2" name="frmampicilin2"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Medical Technologist</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" placeholder="Medical Technologist" id="frmmedt6" name="frmmedt6">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Pathologist</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Pathologist" id="frmpath6" name="frmpath6">
						</div>
					</div>
					<div class="form-row">

						<div class="col-md-6">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Date Performed</label>
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-md" id="frmdatep2" name="frmdatep2">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Result Status</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" placeholder="Result status" id="frmclinicmicroresultstat" name="frmclinicmicroresultstat">
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