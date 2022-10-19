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
<input name="module" id="module" type="hidden" value="sari">
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
				<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Severe Acute Respiratory Infection (SARI)</h4>
			</div>
			<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly>
			<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly>
			<div class="btn-group pull-right btn-sm" role="group" aria-label="">
				<a name="patSearchbtn" id="patSearchbtn" class="btn btn-success btn-ladda text-white" data-style="zoom-in">
					<i class="fa fa-search"></i>
				</a>&nbsp;
				<button name="patInfoSavebtn" type="submit" class="btn btn-success btn-ladda" data-style="zoom-in">
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
								National Registry No.:
							</div>
							<div class="col-md-3 mb-1">
								<input type="text" class="form-control form-control-mb" id="info_natregno" name="info_natregno" disabled>
							</div>
							<div class="col-md-3 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Patient ID No.:
							</div>
							<div class="col-md-4 mb-1">
								<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Registry No.:
							</div>
							<div class="col-md-3 mb-1">
								<input type="text" class="form-control form-control-mb" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly>
							</div>
							<div class="col-md-3 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Case No.:
							</div>
							<div class="col-md-4 mb-1">
								<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno" disabled>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Name of DRU:
							</div>
							<div class="col-md-3 mb-1">
								<input type="text" class="form-control form-control-mb " autocomplete="off" placeholder="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac" disabled>
								<input type="hidden" class="form-control form-control-mb " placeholder="Name of Referring Health Facility" id="copd_newfhud" name="copd_newfhud">
								<input type="hidden" class="form-control form-control-mb " placeholder="patient id" id="patient_id" name="patient_id">
							</div>
							<div class="col-md-3 col-form-label  text-default mb-1">
								Type of Encounter
							</div>
							<div class="col-md-4">
								<select name="info_typepat" id="info_typepat" class="form-control form-control-mb" disabled>
									<option value=""></option>
									<option value="INPA">Admission</option>
									<option value="OPD">Outpatient(OPD)</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label text-default mb-1">
								Fullname:
							</div>
							<div class="col-md-10 mb-1">
								<input type="text" class="form-control form-control-mb" disabled autocomplete="off" id="info_fullname" name="info_fullname" placeholder="Last name,First name,Middle name">
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Lastname:
							</div>
							<div class="col-md-10 mb-1">
								<input type="text" class="form-control form-control-mb" autocomplete="off" onchange="fullname();" id="info_lname" name="info_lname" placeholder="Last name" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Firstname:
							</div>
							<div class="col-md-10 mb-1">
								<input type="text" class="form-control form-control-mb" onchange="fullname();" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Middlename:
							</div>
							<div class="col-md-10 mb-1">
								<input type="text" class="form-control form-control-mb" onchange="fullname();" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Sex:
							</div>
							<div class="col-md-3 mb-1">
								<select name="info_sex" id="info_sex" class="form-control form-control-mb" disabled>
									<option value="">Select</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> Civil Status :
							</div>
							<div class="col-md-4 mb-1">
								<select name="info_cs" id="info_cs" class="form-control form-control-mb" disabled>
									<option value=""></option>
									<option value="S">Single</option>
									<option value="M">Married</option>
									<option value="C">Co-Habitation</option>
									<option value="X">Separated</option>
									<option value="W">Widow/Widower</option>
								</select>
							</div>

						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label text-default mb-1">
						Mothers Maiden Name:
					</div>
					<div class="col-md-10 mb-1">
						<input type="text" class="form-control form-control-mb" disabled autocomplete="off" id="info_mot_fullname" name="info_mot_fullname" placeholder="First name Middle name Lastname">
					</div>
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Lastname:
					</div>
					<div class="col-md-10 mb-1">
						<input type="text" class="form-control form-control-mb" autocomplete="off" onchange="maidenname();" id="info_mot_lname" name="info_mot_lname" placeholder="Last name" disabled>
					</div>
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Firstname:
					</div>
					<div class="col-md-10 mb-1">
						<input type="text" class="form-control form-control-mb" onchange="maidenname();" autocomplete="off" id="info_mot_fname" name="info_mot_fname" placeholder="First name" disabled>
					</div>
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Middlename:
					</div>
					<div class="col-md-10 mb-1">
						<input type="text" class="form-control form-control-mb" onchange="maidenname();" autocomplete="off" id="info_mot_mname" name="info_mot_mname" placeholder="Middle name" disabled>
					</div>


					<div class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Birth Date:
					</div>
					<div class="col-md-4 mb-1">
						<input type="date" class="form-control form-control-mb" name="info_dob" id="info_dob" disabled>
					</div>

					<div class=" col-md-1 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Year:
					</div>
					<div class="col-md-1 mb-1">
						<input type="text" class="form-control form-control-mb" id="info_year" name="info_year" value="" disabled>
					</div>
					<label class="col-md-1 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Month:
					</label>
					<div class="col-md-1">
						<input type="text" class="form-control form-control-mb" id="info_month" name="info_month" value="" disabled>
					</div>
					<div class="col-md-1 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Days:
					</div>
					<div class="col-md-1">
						<input type="text" class="form-control form-control-mb" id="info_day" name="info_day" value="" disabled>
					</div>

					<div class="col-md-2 col-form-label text-default">
						<i class="fa fa-asterisk text-danger"></i>Place of birth:
					</div>
					<div class="col-md-4 mb-1">
						<input type="text" class="form-control form-control-mb" id="info_bplace" name="info_bplace" value="" disabled>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-mb" id="info_bplace_prov" name="info_bplace_prov" value="" disabled>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-mb" id="info_bplace_city" name="info_bplace_city" value="" disabled>
					</div>
					<div class="col-md-2 col-form-label text-default">
						<i class="fa fa-asterisk text-danger"></i>Nationality :
					</div>
					<div class="col-md-4 mb-1">
						<select name="info_nat" id="info_nat" class="form-control form-control-mb" disabled>
							<option value="">Select</option>
							<option value="137">Filipino</option>
							<option value="183">American</option>
							<option value="160">Spanish</option>
							<option value="036">Chinese</option>
							<option value="085">Japanese</option>
							<option value="065">German</option>
							<option value="014">Bangladesh</option>
							<option value="182">British</option>
							<option value="031">Canada</option>
							<option value="061">French</option>
						</select>
					</div>
					<div class="col-md-2 col-form-label text-default">
						<i class="fa fa-asterisk text-danger"></i>Religion :
					</div>
					<div class="col-md-4">
						<input type="text" name="getRel" id="getRel" class="form-control form-control-mb" disabled>
					</div>

					<div class="col-md-2 col-form-label text-default">
						Race:
					</div>
					<div class="col-md-4 mb-1">
						<select name="info_race" id="info_race" class="form-control form-control-mb" disabled>
							<option value="">Select</option>
							<option value="1">Causian (White)</option>
							<option value="2">Ethopian (Black)</option>
							<option value="3">Mongolian (Yellow)</option>
							<option value="4">Americans (Red)</option>
							<option value="5">Malay (Brown)</option>
							<option value="6">Others</option>
						</select>
					</div>

					<div class="col-md-2 col-form-label text-default">
						Ethnicity:
					</div>
					<div class="col-md-4 mb-1">
						<select name="info_ethnic" id="info_ethnic" class="form-control form-control-mb" disabled>
							<option value="0">Select</option>
							<option value="1">Filipino</option>
							<option value="2">White</option>
							<option value="3">Black</option>
							<option value="4">Mixed Filipino</option>
							<option value="5">Mixed Non-Filipino</option>
							<option value="6">Mid-Eastern Arabian</option>
							<option value="7">Asian(Non-Filipino)</option>
							<option value="8">Pacific Islander</option>
							<option value="9">Indian Sub-Continent</option>
							<option value="10">Others</option>
						</select>
					</div>


					<label class="col-md-2 col-form-label text-default">
						Landline #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="info_telno" name="info_telno" placeholder="Landline #" disabled />
					</div>

					<label class="col-md-2 col-form-label text-default">
						Mobile #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="info_mobno" name="info_mobno" placeholder="Mobile #" disabled />
					</div>

					<label class="col-md-2 col-form-label text-default">
						Email Address:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="info_emailadd" name="info_emailadd" placeholder="Email Address" disabled />
					</div>
					<label class="col-md-2 col-form-label text-default">
						<i class="fa fa-asterisk text-danger"></i>Occupation :
					</label>
					<div class="col-md-4">
						<select name="info_occup" id="info_occup" class="form-control form-control-mb" disabled>
							<option value="">Select</option>
							<option value="OFFIC">Officials of Government and Special-Interest Organizations, Corporate Executives, Managers, Managing</option>
							<option value="PROFE">Professionals</option>
							<option value="TECHN">Technicians and Associate Professionals</option>
							<option value="CLERK">Clerks</option>
							<option value="SERVI">Service Workers and Shop and Market Sales Workers</option>
							<option value="FFWAF">Farmers, Forestry Workers and Fishermen</option>
							<option value="TRADE">Trades and Related Workers</option>
							<option value="PAMOA">Plant and machine Operators and Assemblers</option>
							<option value="LABOR">Laborers and Unskilled Workers</option>
							<option value="SPECI">Special Occupation</option>
							<option value="STUDE">Student</option>
							<option value="UNEMP">Unemployed</option>
							<option value="RETIR">Retired</option>
							<option value="OTHER">Others</option>
						</select>
					</div>
					<label class="col-md-2 col-form-label text-default">
						Company :
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb  mb-1" id="info_company" name="info_company" placeholder="	Company " disabled />
					</div>
					<label class="col-md-2 col-form-label text-default">
						Philhealth #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb  mb-1" id="info_philhealth" name="info_philhealth" placeholder="	Philhealth #" disabled />
					</div>
					<label class="col-md-2 col-form-label text-default">
						Common Reference #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb  mb-1" id="info_comrefno" name="info_comrefno" placeholder="Common Reference # " disabled />
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
						<textarea type="text" class="form-control form-control-mb mb-1" id="getStr" placeholder="Street Address" name="getStr" disabled></textarea>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb" disabled id="getBrgy" name="getBrgy" disabled />
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						City/Municipality:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" id="getCity" name="getCity" disabled />
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						Province:
					</label>
					<div class="col-md-4 mb-1">
						<input type="text" class="form-control form-control-mb" id="getProv" name="getProv" disabled />
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Region</label>
					<div class="col-md-4 mb-1">
						<input type="text" class="form-control form-control-mb " id="getReg" name="getReg" disabled />
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="getZip" name="getZip" disabled />
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
			<div class="col-md-12">
				<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp Contact Person(in case of emergency)</div>
				<hr class="bg-success">
				<div class="form-row">
					<div class="col-md-2 col-form-label text-default mb-1">
						Fullname:
					</div>
					<div class="col-md-10 mb-1">
						<input type="text" class="form-control form-control-mb" disabled autocomplete="off" id="contact_fullname" name="contact_fullname" placeholder="Last name,First name,Middle name">
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Last Name :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" onchange="fullcontact();" placeholder="Last Name" id="contact_lname" name="contact_lname" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Landline #:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="Landline #" id="contact_landline" name="contact_landline" disabled>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">First Name :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" onchange="fullcontact();" placeholder="First Name" id="contact_fname" name="contact_fname" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Mobile #:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="Mobile #" id="contact_mobile" name="contact_mobile" disabled>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">Middle Name :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" onchange="fullcontact();" placeholder="Middle Name" id="contact_mname" name="contact_mname" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Email Address:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="Email Address" id="contact_email" name="contact_email" disabled>
					</div>
				</div>
				<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp; Address</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label  text-default mb-1">
						No.Street:
					</div>
					<div class="col-md-10">
						<textarea type="text" class="form-control form-control-mb mb-1" id="contact_street" placeholder="Street Address" name="contact_street" disabled></textarea>
					</div>
					<div for="getReg" class="col-md-2 col-form-label text-default mb-1">
						Region:
					</div>
					<div class="col-md-10 mb-1">
						<select class="form-control" onchange="Region();" id="contact_getReg" name="contact_getReg" disabled>
						</select>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						Province:
					</label>
					<div class="col-md-4 mb-1">
						<select class="form-control form-control-mb" disabled id="contact_getProv" name="contact_getProv">
							<option value="">Select</option>
						</select>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
					<div class="col-md-4 mb-1">
						<select class="form-control form-control-mb" disabled id="contact_getCity" name="contact_getCity">
						</select>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
					<div class="col-md-4 mb-1">
						<select class="form-control form-control-mb" disabled id="contact_selDist" name="contact_selDist" disabled></select>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
					<div class="col-md-4 mb-1">
						<select class="form-control form-control-mb" disabled id="contact_getBrgy" name="contact_getBrgy" disabled></select>
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="contact_zip" name="contact_zip" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
					<div class="col-md-4">
						<select type="text" class="form-control form-control-mb mb-1" disabled id="contact_country" name="contact_country" disabled>
							<option value="PHIL" selected>Philippines</option>
						</select>
					</div>
				</div>
				<!--end of contact person-->
				<hr class="bg-success">
				<div class="row">
					<div class="col-md-12">
						<div class="h5 text-success"><i class="fa fa-history"></i>&nbsp HISTORY OF ILLNESS, PHYSICAL EXAMINATION AND PRE-EXISTING CONDITIONS</div>
					</div>
				</div>
				<hr class="bg-success">
				<div class="form-row">
					<label class="col-md-0 col-form-label text-default mb-1">Admitted?</label>
					<div class="col-md-2">
						<select type="text" class="form-control form-control-mb mb-1" id="admission" name="admission">
							<option value="Y" selected>Yes</option>
							<option value="N" selected>No</option>
							<option value="U" selected>Unknown</option>
						</select>
					</div>
					<label class="col-md-0 col-form-label text-default mb-1">Date Admitted/ Seen/ Consulted</label>
					<div class="col-md-3">
						<input type="datetime-local" class="form-control form-control-mb mb-2" id="date_consult" name="date_consult">
					</div>
					<label class="col-md-0 col-form-label text-default mb-1">Date Onset of Illness</label>
					<div class="col-md-3">
						<input type="datetime-local" class="form-control form-control-mb mb-2" id="date_onset_illness" name="date_onset_illness">
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-row">
							<label class="col-md-12 col-form-label text-success mb-1"><b>Did you take any of the following medication(s) prior to consultation?</b></label>
							<div class="col-md-12">
								<input type="checkbox" id="ranitidine" name="ranitidine">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Ranitidine (e.g. Flumadine)</label>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12">
								<input type="checkbox" id="amantidine" name="amantidine">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Amantidine</label>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12">
								<input type="checkbox" id="zanamivir" name="zanamivir">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Zanamivir</label>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12">
								<input type="checkbox" id="oseltamivir" name="oseltamivir">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Oseltamivir (e.g. Tamiflu)</label>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4">
								<input type="checkbox" id="medication_prior_oth" name="medication_prior_oth">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Others: (Please specify)</label>
							</div>
							<input type="text" class="form-control col-md-6 form-control-mb mb-1" id="med_other_specify" name="med_other_specify" disabled>
						</div>
						<div class="form-row">
							<label class="col-md-12 col-form-label text-success	 mb-1"><b>History of exposure to any of the following:</b></label>
							<div class="col-md-4">
								<input type="checkbox" id="sari_bats" name="sari_bats" value="N">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Bat</label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="sari_poultry" name="sari_poultry">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Poultry/Migratory Birds</label>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4">
								<input type="checkbox" id="sari_camels" name="sari_camels">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Camels</label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="sari_pigs" name="sari_pigs">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Pigs</label>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4">
								<input type="checkbox" id="sari_horses" name="sari_horses">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Horses</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="sari_others2_cb" name="sari_others2_cb">&nbsp;<label class="col-md-0 col-form-label text-default mb-1">Others:</label>
							</div>
							<input type="text" class="form-control col-md-4 form-control-mb mb-1" id="sari_others2" name="sari_others2" class="sari_others2">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-row">
							<label class="col-md-12 col-form-label text-success mb-1"><b>Are there any Influenza-like-illness during the week in your:</b></label>
							<label class="col-md-12 col-form-label text-default mb-1">Household</label>
							<div class="col-md-12">
								<input type="radio" name="sari_household" id="sari_householdy" value="Y">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" name="sari_household" id="sari_householdn" value="N">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" name="sari_household" id="sari_householdu" value="U">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Unknown &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-12 col-form-label text-default mb-1">School/ Daycare</label>
							<div class="col-md-12">
								<input type="radio" name="sari_school" id="sari_schooly" value="Y">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" name="sari_school" id="sari_schooln" value="N">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" name="sari_school" id="sari_schoolu" value="U">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Unknown &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-12 col-form-label text-success mb-1"><b>History of travel:</b></label>
							<div class="col-md-4">
								<input type="radio" name="sari_histtravel" id="sari_histtravely" value="Y">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Yes (specify country)</label>
							</div>
							<input type="text" class="form-control col-md-5 form-control-mb mb-1" id="sari_country" name="sari_country" disabled>
							<div class="col-md-12">
								<input type="radio" name="sari_histtravel" id="sari_histtraveln" value="N">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-row">
							<label class="col-md-12 col-form-label text-success mb-1"><b>Did you received Anti-influenza Vaccination in the past year?</b></label>
							<div class="col-md-12">
								<input type="radio" name="sari_ainfluenza" id="sari_ainfluenzay" value="Y">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" name="sari_ainfluenza" id="sari_ainfluenzan" value="N">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" name="sari_ainfluenza" id="sari_ainfluenzau" value="U">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Unknown &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-12 col-form-label text-success mb-1"><b>Chest X-ray</b></label>
							<div class="col-md-12">
								<input type="radio" name="chestxray" id="chestxrayy" value="Y">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Done &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" name="chestxray" id="chestxrayn" value="N">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Undone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Result:</label>
							<input type="text" class="form-control col-md-7 form-control-mb mb-1" id="chestxray_result" name="chestxray_result" disabled>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-row">
							<label class="col-md-12 col-form-label text-success mb-1"><b>Signs and Symptoms:</b></label>
							<label class="col-md-0 col-form-label text-default mb-1">Temperature at consultation:</label>
							<input type="text" class="form-control col-md-2 form-control-mb mb-1" id="temp_consult" name="temp_consult">
							<label class="col-md-1 col-form-label text-default mb-1">C</label>
							<div class="col-md-12">
								<input type="checkbox" name="fever_feverish" id="fever_feverish">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Fever/ Feverish</label>
							</div>
							<label class="col-md-0 col-form-label text-default mb-1">Duration:</label>
							<input type="text" class="form-control col-md-2 form-control-mb mb-1" id="duration" name="duration">
							<label class="col-md-8 col-form-label text-default mb-1">Days/Weeks</label>
							<div class="col-md-12">
								<input type="checkbox" name="headache" id="headache">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Headache</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="cough" id="cough">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Cough</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="sore_throat" id="sore_throat">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Sore throat</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="Diff_of_breathing" id="Diff_of_breathing">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Difficulty of breathing</label>
							</div>
							<div class="col-md-0">
								<input type="checkbox" name="other_signs_symptoms" id="other_signs_symptoms">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Others: (Please specify)</label>
							</div>
							<input type="text" class="form-control col-md-6 form-control-mb mb-1" id="other_signs_symptoms_txt" name="other_signs_symptoms_txt" disabled>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-row">
							<div class="col-md-12">&nbsp;</div>
							<div class="col-md-12">&nbsp;</div>
							<label class="col-md-0 col-form-label text-default mb-1">SARI Suspect Case for Patients < 5 years old and EITHER ONE of the two IMCI criteria for pneumonia</label>
									<label class="col-md-0 col-form-label text-default mb-1">1. IMCI Criteria for pneumonia:</label>
									<div class="col-md-12">
										<input type="checkbox" name="imci_pneumonia1" id="imci_pneumonia1">&nbsp;
										<label class="col-md-0 col-form-label text-default mb-1"> Any 2 months to 5 years of age with cough or difficult breathing</label>
									</div>
									<div class="col-md-12">
										<input type="checkbox" name="imci_pneumonia2" id="imci_pneumonia2">&nbsp;
										<label class="col-md-0 col-form-label text-default mb-1"> Breathing faster than 60 breaths/min (infants < 2 months) </label>
									</div>
									<div class="col-md-12">
										<input type="checkbox" name="imci_pneumonia3" id="imci_pneumonia3">&nbsp;
										<label class="col-md-0 col-form-label text-default mb-1"> Breathing faster than 50 breaths/min (2 - 12 months)</label>
									</div>
									<div class="col-md-12">
										<input type="checkbox" name="imci_pneumonia4" id="imci_pneumonia4">&nbsp;
										<label class="col-md-0 col-form-label text-default mb-1"> Breathing faster than 40 breaths/min (1 - 5 years old)</label>
									</div>
									<div class="col-md-12">
										<input type="checkbox" name="sari_hospadm2" id="sari_hospadm2">&nbsp;
										<label class="col-md-0 col-form-label text-default mb-1"> Requires hospital admission.</label>
									</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-row">
							<div class="col-md-12">&nbsp;</div>
							<div class="col-md-12">&nbsp;</div>
							<label class="col-md-0 col-form-label text-default mb-1">2. IMCI criteria for severe pneumonia</label>
							<div class="col-md-12">
								<input type="checkbox" name="imci_spneumonia1" id="imci_spneumonia1">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Any 2 months to 5 years of age with cough or difficult breathing</label>
							</div>
							<label class="col-md-0 col-form-label text-default mb-1">with any of the following danger signs:</label>
							<div class="col-md-12">
								<input type="checkbox" name="imci_spneumonia2" id="imci_spneumonia2">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> unable to drink or breastfeed</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="imci_spneumonia3" id="imci_spneumonia3">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> vomits everything</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="imci_spneumonia4" id="imci_spneumonia4">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> convulsions</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="imci_spneumonia5" id="imci_spneumonia5">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Lethargenic or unconscious</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="imci_spneumonia6" id="imci_spneumonia6">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Chest indrawing or stridor in a calm child</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="sari_hospadm3" id="sari_hospadm3">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Requires hospital admission</label>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-12 col-form-label text-success mb-1"><b>Pre-existing Conditions</b></label>
					<div class="col-md-4">
						<div class="form-row">
							<div class="col-md-12">
								<input type="checkbox" name="asthma" id="asthma">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Asthma</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="chronic_cardiacdis" id="chronic_cardiacdis">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Chronic cardiac disease</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="chronic_liverdis" id="chronic_liverdis">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Chronic liver disease</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="chronic_neuro" id="chronic_neuro">&nbsp;<label class="col-md-0 col-form-label text-default mb-1"> Chronic neurological or neuromuscular disease</label>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-row">
							<div class="col-md-12">
								<input type="checkbox" name="chronic_renaldis" id="chronic_renaldis">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Chronic renal disease</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="diabetes" id="diabetes">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Diabetes</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="Hematologic" id="Hematologic">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Hematologic disorders</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="immunodis" id="immunodis">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Immunodeficiency diseases </label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="pregnant" id="pregnant">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Pregnancy</label>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-row">
							<label class="col-md-0 col-form-label text-default mb-1">Clinical Impression:</label>
							<div class="col-md-12">
								<input type="checkbox" name="clinicim_ili" id="clinicim_ili">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Influenza-like-illness (ILI)</label>
							</div>
							<div class="col-md-12">
								<input type="checkbox" name="clinicim_sari" id="clinicim_sari">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> SARI</label>
							</div>
							<div class="col-md-0">
								<input type="checkbox" name="other_clinic_imp" id="other_clinic_imp">&nbsp;
								<label class="col-md-0 col-form-label text-default mb-1"> Other, specify</label>
							</div>
							<input type="text" class="form-control col-md-6 form-control-mb mb-1" id="other_clinic_imp_txt" name="other_clinic_imp_txt">
						</div>
					</div>
				</div>
				<hr class="bg-success">
				<div class="row">
					<div class="col-md-12">
						<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp CLINICAL MANAGEMENT AND OUTCOME
						</div>
					</div>
				</div>
				<hr class="bg-success">
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Antibiotics</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="antibioticsy" name="antibiotics" value="Y">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="antibioticsn" name="antibiotics" value="N">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="antibioticsu" name="antibiotics" value="U">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Unknown</label>
								<div class="form-row">
									<div class="col-md-3">
										<label class="col-form-label text-default mb-1"> If Yes, please specify </label>
									</div>
									<input type="text" class="col-md-8 form-control form-control-mb mb-1" id="antibiotics_specify" name="antibiotics_specify" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Antivirals</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="antiviralsy" name="antivirals" value="Y">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="antiviralsn" name="antivirals" value="N">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="antiviralsu" name="antivirals" value="U">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Unknown</label>
								<div class="form-row">
									<div class="col-md-3">
										<label class="col-form-label text-default mb-1"> If Yes, please specify </label>
									</div>
									<input type="text" class="col-md-8 form-control form-control-mb mb-1" id="antivirals_specify" name="antivirals_specify" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Fluid Therapy</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="fluidtheraphyy" name="fluidtheraphy" value="Y">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="fluidtheraphyn" name="fluidtheraphy" value="N">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="fluidtheraphyu" name="fluidtheraphy" value="U">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Unknown</label>
								<div class="form-row">
									<div class="col-md-3">
										<label class="col-form-label text-default mb-1"> If Yes, please specify </label>
									</div>
									<input type="text" class="col-md-8 form-control form-control-mb mb-1" id="fluidtheraphy_specify" name="fluidtheraphy_specify" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Oxygen</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="oxygeny" name="oxygen" value="Y">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="oxygenn" name="oxygen" value="N">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="oxygenu" name="oxygen" value="U">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Unknown</label>
								<div class="form-row">
									<div class="col-md-3">
										<label class="col-form-label text-default mb-1"> If Yes, please specify </label>
									</div>
									<input type="text" class="col-md-8 form-control form-control-mb mb-1" id="oxygen_specify" name="oxygen_specify" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Intubation</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="intubationy" name="intubation" value="Y">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="intubationn" name="intubation" value="N">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="intubationu" name="intubation" value="U">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Unknown</label>
								<div class="form-row">
									<div class="col-md-3">
										<label class="col-form-label text-default mb-1"> If Yes, please specify </label>
									</div>
									<input type="text" class="col-md-8 form-control form-control-mb mb-1" id="intubation_specify" name="intubation_specify" disabled>
								</div>
							</div>
						</div>
					</div>
					<!-- -->
					<div class="col-md-6">
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Bacterial Testing</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="bacterialtestingy" name="bacterialtesting" value="Y">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="bacterialtestingn" name="bacterialtesting" value="N">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="bacterialtestingu" name="bacterialtesting" value="U">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Unknown</label>
								<div class="form-row">
									<div class="col-md-3">
										<label class="col-form-label text-default mb-1"> If Yes, please specify </label>
									</div>
									<input type="text" class="col-md-9 form-control form-control-mb mb-1" id="bacterialtesting_specify" name="bacterialtesting_specify" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Other Therapeutic Procedures</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="othertherapeuticproceduresy" name="othertherapeuticprocedures" value="Y">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="othertherapeuticproceduresn" name="othertherapeuticprocedures" value="N">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="othertherapeuticproceduresu" name="othertherapeuticprocedures" value="U">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Unknown</label>
								<div class="form-row">
									<div class="col-md-3">
										<label class="col-form-label text-default mb-1"> If Yes, please specify </label>
									</div>
									<input type="text" class="col-md-9 form-control form-control-mb mb-1" id="othertherapeuticprocedures_specify" name="othertherapeuticprocedures_specify" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Final Diagnosis</label>
							</div>
							<input type="text" class="col-md-9 form-control form-control-mb mb-1" id="final_diag" name="final_diag" disabled>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Outcome at Discharge</label>
							</div>
							<div class="col-md-9">
								<input type="radio" id="outcome_at_disc_alive" name="outcome">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Alive &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="outcome_at_disc_hama" name="outcome">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> HAMA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="radio" id="outcome_at_disc_died" name="outcome">&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Died</label>
								<div class="form-row">
									<div class="col-md-3">
										<input type="radio" id="other_outcome_at_disc" name="outcome">&nbsp;&nbsp;
										<label class="col-form-label text-default mb-1">Others (specify)</label>
									</div>
									<input type="text" class="col-md-9 form-control form-control-mb mb-1" id="other_outcome_at_disc_txt" name="other_outcome_at_disc_txt" disabled>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3">
								<label class="col-form-label text-default mb-1">Date of Discharge</label>
							</div>
							<input type="datetime-local" class="col-md-9 form-control form-control-mb mb-1" id="discdate" name="discdate" disabled>
						</div>
					</div>

					<input type="hidden" id="entryby" name="entryby">
					<input type="hidden" id="date_report" name="date_report">
				</div>