<style>
	.leftborder {
		border-left: 1px solid black;
	}

	.rightborder {
		border-right: 1px solid black;
	}

	.topborder {
		border-top: 1px solid black;
	}

	.bottomborder {
		border-bottom: 1px solid black;
	}

	.centertxt {
		text-align: center;
	}
</style>
<input name="module" id="module" type="hidden" value="dengue">
<div class="modal" id="modalSnapShot" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white"><i class="fa fa-camera"></i> Take Snapshot</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="img-fluid img-thumbnail rounded mx-auto d-block mb-1" id="my_camera"></div>
			</div>
			<div class="modal-footer bg-secondary">
				<a onclick="take_snapshot();" class="btn btn-success btn-block btn-ladda btn-square" data-style="slide-right"><i class="fa fa-camera"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalSnapShotResult" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white">
					<i class="fa fa-camera"></i>&nbsp
					Photo Result
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="ImageSnapshot" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
			<div class="modal-footer bg-secondary">
				<a onclick="save_snapshot();" class="btn btn-success btn-block btn-inline btn-square btn-ladda " data-style="zoom-out"><i class="fa fa-save"></i></a>
				<a class="btn btn-success  btn-block btn-square" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"><i class="fa fa-camera"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalEnlarge" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white">
					<i class="fa fa-camera"></i>&nbsp
					Photo
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="ImageEnlarge" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
			<div class="modal-footer bg-secondary">

			</div>
		</div>
	</div>
</div>

<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Dengue Patient Registration Form</h4>
			</div>
			<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly>
			<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly>
			<div class="col-md-6">
				<button name="submit" type="submit" class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
					<i class="fa fa-save"></i>
				</button>
				<button type="button" id="search" class="btn btn-success btn-ladda  float-right"> <i class="fa fa-search"></i> </button>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success">
					<i class=" fa fa-user"></i>
					&nbsp General Data
				</div>

				<hr class="bg-success">
				<div class="row">
					<div class="col-md-2">
						<img id="PatientImage" name="PatientImage" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1 bg-success" alt="">


						<small class="text text-danger"><b>Note:</b>&nbsp <i>Click button to take patient photo</i></small>
						<input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic" readonly>
						<div class="button-group">
							<a class="btn btn-success btn-md btn-block btn-square btn-ladda" data-style="zoom-in" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"> <i class="fa fa-camera fa-xs"></i></a>
						</div>
					</div>

					<div class="col-md-10">
						<input type="hidden" id="modifiedby" name="modifiedby" value="<?php echo $entry_by; ?>">
						<input type="hidden" id="date_modified" name="date_modified" value="<?php echo date('Y-m-d H:i:s'); ?>">
						<input type="hidden" id="entryby" name="entryby" value="<?php echo $entry_by; ?>">
						<input type="hidden" id="entry_date" name="entry_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Hospital Patient ID No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Hospital Registry No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly="">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Hospital Case No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno" readonly="">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Name of DRU:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac" readonly="">
								<input type="hidden" class="form-control form-control-mb mb-1" placeholder="patient id" id="patient_id" name="patient_id">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label text-default mb-1">
								Fullname:
							</div>
							<div class="col-md-10">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_fullname" name="info_fullname" placeholder="Last name,First name,Middle name">
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								Lastname:
							</div>
							<div class="col-md-10">
								<input type="text" readonly="" class=" form-control form-control-mb mb-1" autocomplete="off" onchange="fullname();" id="info_lname" name="info_lname" placeholder="Last name">
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								Firstname:
							</div>
							<div class="col-md-10">
								<input type="text" readonly="" class="form-control form-control-mb mb-1" onchange="fullname();" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name">
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								Middlename:
							</div>
							<div class="col-md-10">
								<input type="text" readonly="" class="form-control form-control-mb mb-1" onchange="fullname();" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name">
							</div>

							<div class="col-md-2 col-form-label text-default mb-1">Sex:</div>
							<div class="col-md-4">
								<input type="text" class=" form-control form-control-mb mb-1" autocomplete="off" id="info_sex" name="info_sex" placeholder="Sex" readonly>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								Civil Status :
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_cs" name="info_cs" placeholder="Civil Status">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Birth Date:
							</div>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb" readonly="" name="info_dob" id="info_dob">
							</div>
							<div class=" col-md-2 col-form-label  text-default mb-1">Age:</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_age" name="info_age" placeholder="Age">
							</div>
							<!-- <div class=" col-md-1 col-form-label  text-default mb-1">
				Year:
			</div>
			<div class="col-md-1">
				<input type="text" class="form-control form-control-mb mb-1" id="info_year" name="info_year"  value="" readonly>
			</div>
			<label class="col-md-1 col-form-label  text-default mb-1">
				Month:
			</label>
			<div class="col-md-1">
			<input type="text" class="form-control form-control-mb mb-1" id="info_month" name="info_month"  value=""readonly >
			</div>
			<div class="col-md-1 col-form-label  text-default mb-1">
				Days:
			</div>
			<div class="col-md-1">
				<input type="text" class="form-control form-control-mb mb-1" id="info_day" name="info_day"  value="" readonly>
			</div>	 -->
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-2 col-form-label text-default">
						Place of birth:
					</div>
					<div class="col-md-4 mb-1">
						<input type="text" class="form-control form-control-mb mb-1" id="info_bplace" name="info_bplace" value="" readonly>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-mb mb-1" id="info_bplace_prov" name="info_bplace_prov" value="" readonly>
					</div>
					<div class="col-md-2 col-form-label text-default">
						Religion :
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="Religion" name="Religion" value="" readonly>
						<!--<select  name="selRel" id="selRel" class="form-control form-control-mb"></select>-->
					</div>
					<label class="col-md-2 col-form-label text-default">
						Landline #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="info_telno" name="info_telno" placeholder="Landline #" value="" readonly>
					</div>

					<label class="col-md-2 col-form-label text-default">
						Mobile #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="info_mobno" name="info_mobno" placeholder="Mobile #" value="" readonly>
					</div>
					<label class="col-md-2 col-form-label text-default">
						Outcome:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="info_disp" name="info_disp" placeholder="Disposition" value="" readonly>
					</div>
				</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
				<hr class="bg-success">
				<div class="h5 text-success"> <i class="fa fa-map"></i>&nbsp;Permanent Address</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label  text-default mb-1">
						No.Street:
					</div>
					<div class="col-md-10">
						<textarea type="text" class="form-control form-control-mb mb-1" id="info_street" placeholder="Street Address" name="info_street" readonly></textarea>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getRegion" name="getRegion" value="" readonly>
					</div>
					<!--
				<div for ="selReg" class="col-md-2 col-form-label text-default mb-1">
					Region:
				</div>
				<div class="col-md-10">
					<select  class="form-control" onchange="setRegion();" id="selReg" name="selReg" readonly>
					</select>
				</div>-->
					<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getProv" name="getProv" value="" readonly>
						<!--
						<select class="form-control form-control-mb" readonly=""  id="selProv" name="selProv">
						</select>
					-->
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getBrgy" name="selBrgy" value="" readonly>
						<!--<select  class="form-control form-control-mb" disabled id="selBrgy" name="selBrgy"></select>-->
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getCity" name="getCity" value="" readonly>
						<!--<select class="form-control form-control-mb" disabled id="selCity" name="selCity"></select>-->
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip" name="info_zip" readonly>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
					<div class="col-md-4">
						<select type="text" class="form-control form-control-mb mb-1" readonly id="info_country" name="info_country">
							<option value="PHIL" selected>Philippines</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<!--end of address-->

		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp Patient History</div>
				<hr class="bg-success">
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">Indigenous People</label>
					<div class="col-md-2">
						<select class="form-control form-control-mb mb-1" id="selIndig" name="selIndig">
						</select>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Patient Admitted ?</label>
					<div class="col-md-2">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="" id="patadmit" name="patadmit" readonly>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Consulted ?</label>
					<div class="col-md-2 mb-1">
						<select name="pconsult" id="pconsult" class="form-control form-control-mb mb-1">
							<option value="">Select</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">Date Admitted / Seen / Consulted:</label>
					<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_asc" id="date_asc" readonly>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Date of FIRST consultation:</label>
					<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_consult" id="date_consult">
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">Date Onset of Illness:</label>
					<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_onset" id="date_onset">
					</div>
					<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Place of consultation:</label>
					<div class="col-md-4">
						<select class="form-control form-control-mb mb-1" id="selHospital" name="selHospital">
						</select>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">No. of Doses received:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="" id="no_dose_received" name="no_dose_received">
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Clinical Classification:</label>
					<div class="col-md-4 mb-1">
						<select name="clinical_classification" id="clinical_classification" class="form-control form-control-mb mb-1">
							<option value="">Select</option>
							<option value="DWITHOUTWS">Dengue Without Warning Signs</option>
							<option value="DWITHWS">Dengue With Warning Signs</option>
							<option value="SEVERE">Severe Dengue</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">Date First Vaccinated with Dengue Vaccine (If vaccinated):</label>
					<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_vaccine_1st" id="date_vaccine_1st">
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Date Last Vaccinated with Dengue Vaccine (If vaccinated):</label>
					<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_vaccine_last" id="date_vaccine_last">
					</div>
				</div>

				<hr class="bg-success">
				<div class="row">
					<div class="col-md-12">
						<div class="h5 text-success"><i class="fa fa-flask"></i> Laboratory</div>
						<hr class="bg-success">
						<div class="h5 text-success"> NS1-RDT :</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Result :</label>
							<div class="col-md-4 mb-1">
								<select name="NS1RDT_result" id="NS1RDT_result" class="form-control form-control-mb mb-1">
									<option value="">Select</option>
									<option value="P">Positive</option>
									<option value="N">Negative</option>
									<option value="E">Equivocal</option>
									<option value="PR">Pending Result</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date Done: :</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="NS1RDT_date" id="NS1RDT_date" readonly>
							</div>
						</div>
						<div class="h5 text-success"> PCR :</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Result :</label>
							<div class="col-md-4 mb-1">
								<select name="PCR_result" id="PCR_result" class="form-control form-control-mb mb-1">
									<option value="">Select</option>
									<option value="P">Positive</option>
									<option value="N">Negative</option>
									<option value="E">Equivocal</option>
									<option value="PR">Pending Result</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date Done: :</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="PCR_date" id="PCR_date" readonly>
							</div>
						</div>
						<div class="h5 text-success"> IgG :</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Result :</label>
							<div class="col-md-4 mb-1">
								<select name="IgG_result" id="IgG_result" class="form-control form-control-mb mb-1">
									<option value="">Select</option>
									<option value="P">Positive</option>
									<option value="N">Negative</option>
									<option value="E">Equivocal</option>
									<option value="PR">Pending Result</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date Done: :</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="IgG_date" id="IgG_date" readonly>
							</div>
						</div>
						<div class="h5 text-success"> IgM :</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Result :</label>
							<div class="col-md-4 mb-1">
								<select name="IgM_result" id="IgM_result" class="form-control form-control-mb mb-1">
									<option value="">Select</option>
									<option value="P">Positive</option>
									<option value="N">Negative</option>
									<option value="E">Equivocal</option>
									<option value="PR">Pending Result</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date Done: </label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="IgM_date" id="IgM_date" readonly>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Case Classification :</label>
							<div class="col-md-4 mb-1">
								<select name="case_classification" id="case_classification" class="form-control form-control-mb mb-1">
									<option value="">Select</option>
									<option value="S">Suspect</option>
									<option value="P">Probable</option>
									<option value="C">Confirmed</option>
								</select>
							</div>
						</div>
					</div>
				</div>