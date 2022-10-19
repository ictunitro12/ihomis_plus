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
<input name="module" id="module" type="hidden" value="ili">
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
<p>

<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md">
				<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Influenza-like Illness (ICD 10 Code: J11)</h4>
			</div>
			<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly>
			<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly>
			<div class="btn-group pull-right btn-sm" role="group" aria-label="">
				<a name="patSearchbtn" id="patSearchbtn" class="btn btn-success btn-ladda  float-right text-white" data-style="zoom-in">
					<i class="fa fa-search"></i>
				</a>&nbsp;
				<button name="patInfoSavebtn" type="submit" class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
					<i class="fa fa-save"></i>
				</button>
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
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Patient ID No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Registry No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly="">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Case No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno" disabled>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Name of DRU:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac" disabled>
								<input type="hidden" class="form-control form-control-mb mb-1" placeholder="patient id" id="patient_id" name="patient_id">
								<input type="hidden" class="form-control form-control-mb mb-1" placeholder="" id="toecode" name="toecode">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label text-default mb-1">
								Fullname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-mb mb-1" disabled autocomplete="off" id="info_fullname" name="info_fullname" placeholder="Last name,First name,Middle name">
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Lastname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onchange="fullname();" id="info_lname" name="info_lname" placeholder="Last name" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Firstname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-mb mb-1" onchange="fullname();" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Middlename:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-mb mb-1" onchange="fullname();" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Sex:
							</div>
							<div class="col-md-4">
								<select name="info_sex" id="info_sex" class="form-control form-control-mb mb-1" disabled>
									<option value="">Select</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> Civil Status :
							</div>
							<div class="col-md-4">
								<select name="info_cs" id="info_cs" class="form-control form-control-mb mb-1" disabled>
									<option value=""></option>
									<option value="S">Single</option>
									<option value="M">Married</option>
									<option value="C">Co-Habitation</option>
									<option value="X">Separated</option>
									<option value="W">Widow/Widower</option>
								</select>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Birth Date:
							</div>
							<div class="col-md-4">
								<input type="date" class="form-control form-control-mb mb-1" name="info_dob" id="info_dob" disabled>
							</div>
							<div class=" col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Age Year:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb mb-1" id="info_year" name="info_year" value="" disabled>
							</div>
							<label class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Month:
							</label>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb mb-1" id="info_month" name="info_month" value="" disabled>
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Days:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb mb-1" id="info_day" name="info_day" value="" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Place of birth:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="info_bplace" name="info_bplace" value="" disabled>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-mb" id="info_bplace_prov" name="info_bplace_prov" value="" readonly>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-mb" id="info_bplace_city" name="info_bplace_city" value="" readonly>
					</div>
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Religion :
					</div>
					<div class="col-md-4">
						<input type="text" name="selRel" id="selRel" class="form-control form-control-mb" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">
						Landline #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb" id="info_telno" name="info_telno" placeholder="Landline #" disabled>
					</div>

					<label class="col-md-2 col-form-label text-default mb-1">
						Mobile #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb" id="info_mobno" name="info_mobno" placeholder="Mobile #" disabled>
					</div>
				</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
				<hr class="bg-success">
				<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp;Permanent Address</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label  text-default mb-1">
						No.Street:
					</div>
					<div class="col-md-10">
						<textarea type="text" class="form-control form-control-mb mb-1" id="getStr" placeholder="Street Address" name="getStr" readonly></textarea>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb" disabled id="getBrgy" name="getBrgy" readonly />
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						City/Municipality:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getCity" name="getCity" readonly />
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						Province:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getProv" name="getProv" readonly />
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Region</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getReg" name="getReg" disabled />
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="getZip" name="getZip" readonly />
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
					<div class="col-md-4">
						<select type="text" class="form-control form-control-mb mb-1" disabled id="info_country" name="info_country">
							<option value="PHIL" selected>Philippines</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!--end of address-->
		<hr class="bg-success">
		<div class="row">
			<label class="col-md-2 col-form-label text-default mb-1">Outcome:</label>
			<div class="col-md-2"><input type="text" class="form-control form-control-mb mb-1" id="outcome" name="outcome"></div>
			<label class="col-md-2 col-form-label text-default mb-1">Patient Admitted?:</label>
			<div class="col-md-2">
				<select name="admission" id="admission" class="form-control form-control-mb">
					<option value="U"></option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">Date Admitted/ Seen/ Consulted?:</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-mb mb-1" id="date_consult" name="date_consult">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Date Onset of Illness?:</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-mb mb-1" id="date_onset" name="date_onset">
			</div>

			<label class="col-md-2 col-form-label text-default mb-1">
				Indigenous People:
			</label>
			<div class="col-md-2">
				<select name="member_ip" id="member_ip" class="form-control form-control-mb">
					<option value=""></option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<div class="col-md-4">
				<select name="selIndig" id="selIndig" class="form-control form-control-mb" disabled>
				</select>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"><i class="fa fa-history"></i>&nbsp HISTORY</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<label class="col-md-2 col-form-label text-default mb-1">History of travel abroad for the last 21 days?:</label>
			<div class="col-md-3">
				<select class="form-control form-control-mb mb-1" id="hili_travelhistory" name="hili_travelhistory">
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">History of travel if Yes, Specify:</label>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-mb mb-1" id="hili_travelhistory_specify" name="hili_travelhistory_specify" disabled>
			</div>
		</div>
		<div class="row">
			<label class="col-md-2 col-form-label text-default mb-1">Date of Specimen collected:</label>
			<div class="col-md-4">
				<input type="datetime-local" class="form-control form-control-mb mb-1" id="coldte" name="coldte">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case Classification:</label>
			<div class="col-md-4">
				<select name="case_classification" id="case_classification" class="form-control form-control-mb mb-1">
					<option value=""></option>
					<option value="S">Suspect</option>
					<option value="P">Probable </option>
					<option value="C">Confirmed</option>
				</select>
			</div>
		</div>
		<div class="row">
			<label class="col-md-2 col-form-label text-default mb-1">Laboratory Test Done:</label>
			<div class="col-md-4">
				<select name="labortest_done" id="labortest_done" class="form-control form-control-mb mb-1">
					<option value=""></option>
					<option value="RDT">Rapid Diagnostic Test</option>
					<option value="MAT">Microscopic Agglutination Test </option>
					<option value="PCR">Polymerase Chain Reaction </option>
				</select>
			</div>
			<div class="col-md-6">
				<input type="checkbox" id="ili_ainfluenza" name="ili_ainfluenza" value="N">&nbsp;<label class="col-md-1=9 col-form-label text-default mb-1">Received Anti influenza vaccine</label>
			</div>
		</div>
		<div class="row">
			<label class="col-md-2 col-form-label text-default mb-1">Laboratory Results:</label>
			<div class="col-md-4">
				<select name="labresult" id="labresult" class="form-control form-control-mb mb-1">
					<option value=""></option>
					<option value="P">Positive</option>
					<option value="N">Negative </option>
					<option value="PR">Pending </option>
				</select>
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If Yes, Date of Vaccination:</label>
			<div class="col-md-4">
				<input type="datetime-local" class="form-control form-control-mb mb-1" id="date_vaccination" name="date_vaccination" value="" disabled>
			</div>
		</div>