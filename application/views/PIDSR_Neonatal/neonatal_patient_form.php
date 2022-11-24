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
<input name="module" id="module" type="hidden" value="neonatal">
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
				<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp; Neonatal Tetanus (ICD 10 Code: A33)</h4>
			</div>
			<input type="hidden" class="form-control form-control-md" id="encountercode" name="encountercode" readonly>
			<input type="hidden" class="form-control form-control-md" id="formIden" name="formIden" readonly>
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
						<input type="hidden" class="form-control form-control-md" id="info_pic" name="info_pic" readonly>
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
								<input type="text" class="form-control form-control-md mb-1" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Registry No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-md mb-1" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly="">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Case No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-md mb-1" autocomplete="off" placeholder="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno" disabled>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Name of DRU:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-md" autocomplete="off" placeholder="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac" disabled>
								<input type="hidden" class="form-control form-control-md mb-1" placeholder="patient id" id="patient_id" name="patient_id">
								<input type="hidden" class="form-control form-control-md mb-1" placeholder="" id="toecode" name="toecode">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label text-default mb-1">
								Fullname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" disabled autocomplete="off" id="info_fullname" name="info_fullname">
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Lastname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" autocomplete="off" onchange="fullname();" id="info_lname" name="info_lname" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Firstname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" onchange="fullname();" autocomplete="off" id="info_fname" name="info_fname" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Suffix:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" onchange="fullname();" autocomplete="off" id="info_suffix" name="info_suffix" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Middlename:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" onchange="fullname();" autocomplete="off" id="info_mname" name="info_mname" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Sex:
							</div>
							<div class="col-md-4">
								<select name="info_sex" id="info_sex" class="form-control form-control-md mb-1" disabled>
									<option value="">Select</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> Civil Status :
							</div>
							<div class="col-md-4">
								<select name="info_cs" id="info_cs" class="form-control form-control-md mb-1" disabled>
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
								<input type="date" class="form-control form-control-md mb-1" name="info_dob" id="info_dob" disabled>
							</div>
							<div class=" col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Age Year:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-md mb-1" id="info_year" name="info_year" value="" disabled>
							</div>
							<label class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Month:
							</label>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-md mb-1" id="info_month" name="info_month" value="" disabled>
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Days:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-md mb-1" id="info_day" name="info_day" value="" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Place of birth:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md mb-1" id="info_bplace" name="info_bplace" value="" disabled>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-md" id="info_bplace_prov" name="info_bplace_prov" value="" readonly>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-md" id="info_bplace_city" name="info_bplace_city" value="" readonly>
					</div>
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Religion :
					</div>
					<div class="col-md-4">
						<input type="text" name="selRel" id="selRel" class="form-control form-control-md" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">
						Landline #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="info_telno" name="info_telno" placeholder="Landline #" disabled>
					</div>

					<label class="col-md-2 col-form-label text-default mb-1">
						Mobile #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="info_mobno" name="info_mobno" placeholder="Mobile #" disabled>
					</div>
				</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
				<hr class="bg-success">
				<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i> Current Address</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> No.Street:
					</div>
					<div class="col-md-10">
						<textarea type="text" class="form-control form-control-md mb-1" id="getStr" name="getStr" readonly></textarea>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> City/Municipality:
					</label>
					<div class="col-md-10">
						<input type="text" class="form-control form-control-md" id="getCity" name="getCity" disabled>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getBrgy" name="getBrgy" disabled>
					</div>

					<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
						Region:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getReg" name="getReg" disabled>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getDist" name="getDist" disabled>
					</div>

					<div class="col-md-2 col-form-label  text-default mb-1">
						Province:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getProv" name="getProv" disabled>
					</div>

				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getZip" name="getZip" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Country:</label>
					<div class="col-md-4">
						<select type="text" class="form-control form-control-md mb-1" readonly="readonly" id="info_country" name="info_country">
							<option value="PHIL" selected>Philippines</option>
						</select>
					</div>
				</div>
				<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i> Permanent Address</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> No.Street:
					</div>
					<div class="col-md-10">
						<textarea type="text" class="form-control form-control-md mb-1" id="getStr2" name="getStr2" readonly></textarea>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> City/Municipality:
					</label>
					<div class="col-md-10">
						<input type="text" class="form-control form-control-md" id="getCity2" name="getCity2" disabled>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getBrgy2" name="getBrgy2" disabled>
					</div>

					<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
						Region:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getReg2" name="getReg2" disabled>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getDist2" name="getDist2" disabled>
					</div>

					<div class="col-md-2 col-form-label  text-default mb-1">
						Province:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getProv2" name="getProv2" disabled>
					</div>

				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getZip2" name="getZip2" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Country:</label>
					<div class="col-md-4">
						<select type="text" class="form-control form-control-md mb-1" readonly="readonly" id="info_country2" name="info_country2">
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
				<div class="h5 text-success"><i class="fa fa-file-text-o"></i>&nbsp FORM</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="form-row">
			<label class="col-md-1 col-form-label text-default mb-1">Patient Admitted:</label>
			<div class="col-md-1">
				<select name="admitted" id="admitted" class="form-control form-control-md mb-1">
					<option value="">Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<label class="col-md-2 text-default col-form-label mb-1">Date Admitted/ Seen/Consulted:</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_admitted" name="date_admitted">
			</div>
			<!-- <label class="col-md-1 col-form-label text-default mb-1">Indigenous People:</label>
			<div class="col-md-2">
				<select name="member_ip" id="member_ip" class="form-control form-control-md">
					<option value="">Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Specify:</label>
			<div class="col-md-2">
				<select name="selIndig" id="selIndig" class="form-control form-control-md" disabled>
				</select>
			</div> -->
			<label class="col-md-1 col-form-label text-default mb-1">Outcome:</label>
			<div class="col-md-2">
				<select class="form-control form-control-md mb-1" name="outcome" id="outcome">
					<option value="A">Alive</option>
					<option value="D">Died</option>
				</select>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Date Died:</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_died" name="date_died" disabled>
			</div>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Date Onset of Illness:</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_onset" name="date_onset">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Date of Report:</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_report" name="date_report">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Case Classification</label>
			<div class="col-md-2">
				<select name="case_classification" id="case_classification" class="form-control form-control-md mb-1">
					<option value=""></option>
					<option value="S">Suspect</option>
					<option value="C">Confirmed</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default mb-1">Date of Inverstigation:</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_investigation" name="date_investigation">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">Mother&#39;s Full Name:</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-md mb-1" id="motherfullname" name="motherfullname">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">Contact Number</label>
			<div class="col-md-2">
				<input type="text" class="form-control form-control-md mb-1" id="mottel" name="mottel">
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"><i class="fa fa-file-text-o"></i>&nbsp CLINICAL DATA</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="form-row">
			<label class="col-md-12 col-form-label text-default">In the first 2 days of life, check which applies</label>
			<div class="col-md-6">
				<div class="form-row">
					<label class="col-md-6 col-form-label text-default">did the baby suck and cry normally ?</label>
					<div class="col-md-2 col-form-label">
						<input type="radio" id="babysuckcry2daysy" name="babysuckcry2days" value="Y">&nbsp; Yes
					</div>
					<div class="col-md-2 col-form-label">
						<input type="radio" id="babysuckcry2daysn" name="babysuckcry2days" value="N">&nbsp; No
					</div>
					<div class="col-md-2 col-form-label">
						<input type="radio" class="mb-1" id="babysuckcry2daysu" name="babysuckcry2days" value="U">&nbsp; Unknown
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-7 col-form-label text-default mb-9">From 3 to 28 days of life was the baby unable to suck and cry and normally ?:</label>
					<div class="col-md-1 col-form-label">
						<input type="radio" id="babysuckcry328daysy" name="babysuckcry328days">&nbsp; Yes
					</div>
					<div class="col-md-2 col-form-label">
						<input type="radio" id="babysuckcry328daysn" name="babysuckcry328days">&nbsp; No
					</div>
					<div class="col-md-2 col-form-label">
						<input type="radio" class="mb-1" id="babysuckcry328daysu" name="babysuckcry328days">&nbsp; Unknown
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-row">
					<label class="col-md-9 col-form-label text-default">From 3 to 28 days of life does the baby have convulsions or muscles stiffness or fits, trismus ?:</label>
					<div class="col-md-3 col-form-label">
						<input type="radio" id="convulsionsy" name="convulsions" value="Y">&nbsp; Yes &nbsp;&nbsp;
						<input type="radio" id="convulsionsn" name="convulsions" value="N">&nbsp; No &nbsp;&nbsp;
						<input type="radio" class="mb-1" id="convulsionsu" name="convulsions" value="U">&nbsp; Unknown
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-6 col-form-label text-default mb-1">Was the umbilical stump infected? (bad smell, pus):</label>
					<div class="col-md-2 col-form-label">
						<input type="radio" id="umbilicaly" name="umbilical" value="Y">&nbsp; Yes
					</div>
					<div class="col-md-2 col-form-label">
						<input type="radio" id="umbilicaln" name="umbilical" value="N">&nbsp; No
					</div>
					<div class="col-md-2 col-form-label">
						<input type="radio" class="mb-1" id="umbilicalu" name="umbilical" value="U">&nbsp; Unknown
					</div>
				</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-4">
				<div class="h5 text-success"><i class="fa fa-female"></i>&nbsp; MOTHER&#39;S INFORMATION</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="form-row">
			<div class="col-md-4">
				<div class="form-row">
					<label class="col-md-4 col-form-label text-default text-success h5">Prenatal care</label>
				</div>
				<div class="form-row">
					<label class="col-md-4 col-form-label text-default">No. of total pregnancies</label>
					<input type="number" min="0" max="99" class="form-control form-control-md col-md-8 mb-1" id="totalpregnancies" name="totalpregnancies">
					<label class="col-md-3 col-form-label text-default">Live births</label>
					<input type="number" min="0" max="99" class=" col-md-3 form-control form-control-md mb-1" id="livebirth" name="livebirth">
					<label class="col-md-3 col-form-label text-default">Living children</label>
					<input type="number" min="0" max="99" class="form-control form-control-md col-md-3 mb-1" id="livingchildren" name="livingchildren">
					<label class="col-md-12 text-default">How many prenatal care visits did the mother make to a health facility during her pregnancy ?</label>
					<input type="number" min="0" max="99" class="form-control form-control-md mb-1" id="prenatalcarevisit" name="prenatalcarevisit">
					<label class="col-md-5 col-form-label text-default">When was the first prenatal visit?</label>
					<input type="datetime-local" class="form-control form-control-md col-md-7 mb-1" id="whenprenatalcarevisit" name="whenprenatalcarevisit">
					<label class="col-md-12 col-form-label text-default">Is the prenatal care history reported by</label>
					<div class="col-md-12">
						<div class="form-row">
							<div class="col-md-3">
								<input type="radio" id="prenatalcarehistoryc" name="prenatalcarehistory" value="C">&nbsp; Card
							</div>
							<div class="col-md-3">
								<input type="radio" id="prenatalcarehistoryr" name="prenatalcarehistory" value="R">&nbsp; Recall
							</div>
							<div class="col-md-3">
								<input type="radio" id="prenatalcarehistoryb" name="prenatalcarehistory" value="B">&nbsp; Both
							</div>
							<div class="col-md-3">
								<input type="radio" class="mb-1" id="prenatalcarehistoryu" name="prenatalcarehistory" value="U">&nbsp; Unknown
							</div>
						</div>
					</div>
					<label class="col-md-12 col-form-label text-default">State reason for no or late prenatal care</label>
					<div class="col-md-12">
						<textarea class="form-control form-control-md mb-1" id="reasonnoprenatal" name="reasonnoprenatal" rows="2" placeholder="Reason for no or late prenatal care"></textarea>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-row">
					<label class="col-md-8 col-form-label text-default text-success h5">Immunization Status</label>
				</div>
				<div class="form-row">
					<label class="col-md-10 col-form-label text-default">How many doses of Tetanus containing vaccine has the mother received ?</label>
					<select name="dosesoftetanus" id="dosesoftetanus" class="form-control form-control-md col-md-2 mb-1">
						<option value="">Dose</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<label class="col-md-4 text-default col-form-label">Date last dose given</label>
					<input type="datetime-local" class="form-control form-control-md col-md-8 mb-1" id="datelastdose" name="datelastdose">
					<label class="col-md-9 text-default col-form-label">If she received 2 doses, were they given during this pregnancy ?</label>
					<select name="received2doses" id="received2doses" class="form-control form-control-md col-md-3">
						<option value="">select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
						<option value="U">Unknown</option>
					</select>
				</div>
				<div class="form-row">
					<label class="col-md-12 col-form-label text-default">Is the immunization status reported by: </label>
					<div class="col-md-12">
						<div class="form-row">
							<div class="col-md-3">
								<input type="radio" id="immunizationreportedc" name="immunizationreported" value="C">&nbsp; Card
							</div>
							<div class="col-md-3">
								<input type="radio" id="immunizationreportedr" name="immunizationreported" value="R">&nbsp; Recall
							</div>
							<div class="col-md-3">
								<input type="radio" id="immunizationreportedb" name="immunizationreported" value="B">&nbsp; Both
							</div>
							<div class="col-md-3">
								<input type="radio" class="mb-1" id="immunizationreportedu" name="immunizationreported" value="U">&nbsp; Unknown
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-row">
					<label class="col-md-8 col-form-label text-default text-success h5">&nbsp;</label>
				</div>
				<div class="form-row">
					<label class="col-md-12 col-form-label text-default">If she has a card, copy the dates of all :</label>
					<label class="col-md-12 col-form-label text-default">Tetanus containing immunizations recorded on the card :</label>
					<label class="col-md-12 col-form-label text-default">State reason for no or late prenatal care</label>
					<label class="col-md-6 col-form-label text-default">TD1:</label>
					<div class="col-md-6">
						<input type="datetime-local" class="form-control form-control-md mb-1" id="tetanusdate1" name="tetanusdate1">
					</div>
					<label class="col-md-6 col-form-label text-default">TD2:</label>
					<div class="col-md-6">
						<input type="datetime-local" class="form-control form-control-md mb-1" id="tetanusdate2" name="tetanusdate2">
					</div>
					<label class="col-md-6 col-form-label text-default">TD3:</label>
					<div class="col-md-6">
						<input type="datetime-local" class="form-control form-control-md mb-1" id="tetanusdate3" name="tetanusdate3">
					</div>
					<label class="col-md-6 col-form-label text-default">TD4:</label>
					<div class="col-md-6">
						<input type="datetime-local" class="form-control form-control-md mb-1" id="tetanusdate4" name="tetanusdate4">
					</div>
					<label class="col-md-6 col-form-label text-default">TD5:</label>
					<div class="col-md-6">
						<input type="datetime-local" class="form-control form-control-md mb-1" id="tetanusdate5" name="tetanusdate5">
					</div>
					<label class="col-md-5 col-form-label text-default"><i class="text-danger fa fa-asterisk"></i> Is the child protected at birth ?: </label>
					<div class="col-md-2 col-form-label">
						<input type="radio" id="protectedatbirthy" name="protectedatbirth" value="Y">&nbsp; Yes
					</div>
					<div class="col-md-2 col-form-label">
						<input type="radio" id="protectedatbirthn" name="protectedatbirth" value="N">&nbsp; No
					</div>
					<div class="col-md-3 col-form-label">
						<input type="radio" id="protectedatbirthu" name="protectedatbirth" value="U">&nbsp; Unknown
					</div>
				</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-4">
				<div class="h5 text-success"><i class="fa fa-truck"></i>&nbsp; DELIVERY PRACTICES</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default">Place of Delivery:</label>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="podhome" name="placedelivery" value="H">&nbsp; Home
			</div>
			<div class="col-md-2 col-form-label">
				<input type="radio" id="podhosp" name="placedelivery" value="HLC">&nbsp; Hospital/lying-in/clinic
			</div>
			<div class="col-md-2 col-form-label">
				<input type="radio" id="podother" name="placedelivery" value="O">&nbsp; Other, Specify:
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control form-control-md mb-1" id="placedeliveryothers" name="placedeliveryothers" disabled>
			</div>
		</div>
		<div class="form-row">
			<label class="col-md-4 col-form-label text-default">If born in a hospital/lying-in/clinic, give name and address of the hospital/lying-in/clinic:</label>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-md mb-1" id="namehospitallyingin" name="namehospitallyingin">
			</div>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default">Cord was cut using:</label>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="cordcuts" name="cordcut" value="S">&nbsp; Scissors
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="cordcutbl" name="cordcut" value="BL">&nbsp; Blade
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="cordcutbam" name="cordcut" value="BAM">&nbsp; Bamboo
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="cordcutu" name="cordcut" value="U">&nbsp; Unknown
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="cordcuto" name="cordcut" value="O">&nbsp; Others, specify:
			</div>
			<input type="text" class="form-control form-control-md col-md-5 mb-1" id="cordcutothers" name="cordcutothers" disabled>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default">Who attended the delivery?</label>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="attendedeliveryp" name="attendedelivery" value="P">&nbsp; Physician
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="attendedeliveryn" name="attendedelivery" value="N">&nbsp; Nurse
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="attendedeliverym" name="attendedelivery" value="M">&nbsp; Midwife
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="attendedeliveryh" name="attendedelivery" value="H">&nbsp; Hilot
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="attendedeliveryo" name="attendedelivery" value="O">&nbsp; Others, specify:
			</div>
			<input type="text" class="form-control form-control-md col-md-5 mb-1" id="attendedeliveryothers" name="attendedeliveryothers" disabled>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default">Stump treated (dressed) with:</label>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="stumpa" name="stump" value="A">&nbsp; Alcohol
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="stumpp" name="stump" value="P">&nbsp; Povidone iodine
			</div>
			<div class="col-md-1 col-form-label">
				<input type="radio" id="stumpu" name="stump" value="U">&nbsp; Unknown
			</div>
			<div class="col-md-2 col-form-label">
				<input type="radio" id="stumpo" name="stump" value="O">&nbsp; Others, specify:
			</div>
			<input type="text" class="form-control form-control-md col-md-5 mb-1" id="stumpothers" name="stumpothers" disabled>
		</div>
		<hr class="bg-success">
		<input type="hidden" name="entryby" id="entryby" value="<?php echo $entry_by; ?>" />
		<input type="hidden" name="entry_date" id="entry_date" value="<?php echo date('Y-m-d H:i:s'); ?>" />