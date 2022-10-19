<input name="module" id="module" type="hidden" value="vawc">
<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br /><small>Patient Data</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-file-text-o fa-2x"></i><br><small>Incident Information</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fas fa-user-injured fa-2x"></i><br><small>Nature and External of Injury/ies</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fas fa-hospital fa-2x"></i><br><small>Hospital/Facility Data</small></a>
		</li>
		<li>
			<a href="#step-5"><i class="fa fa-file-invoice fa-2x"></i><br><small>Perpetrator Information Sheet</small></a>
		</li>
	</ul>

	<div>
		<div id="step-1">
			<form id="form-step-1" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-10">
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp VAWC Registration Form</h4>
							</div>
							<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly>
							<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly>
							<div class="col-md-2">
								<button type="button" id="hey" class="btn btn-outline-success btn-ladda  float-right" onclick="location.reload();"> <i class="fa fa-search"></i> Search Patient</button>
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
												<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
											</div>
											<div class="col-md-2 col-form-label  text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Hospital Case No.:
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno" readonly="">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2 col-form-label  text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Type of Patient:
											</div>
											<div class="col-md-4">
												<select name="info_typeofpat" id="info_typeofpat" class="form-control form-control-mb">
													<option value="">N/A</option>
													<option value="n">New Case</option>
													<option value="r">Revisit</option>
												</select>
											</div>
											<div class="col-md-2 col-form-label  text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Type of Encounter:
											</div>
											<div class="col-md-4">
												<select name="info_typepat" id="info_typepat" disabled="" class="form-control form-control-mb" >
													<option value="">N/A</option>
													<option value="INPA">In Patient</option>
													<option value="OPD">OPD</option>
												</select>
											</div>
										</div>

										<div class="form-row">											
											<div class="col-md-2 col-form-label  text-default mb-1">
												If Inpatient:Name of Physicican-in-charge:
											</div>
											<div class="col-md-4">
												<input type="text" readonly="" class="form-control form-control-mb" id="info_physician" name="info_physician" value="" placeholder="Name of Physicican-in-charge">
											</div>
											
											<label class="col-md-2 col-form-label text-default mb-1"> Date of Admission:</label>
											<div class="col-md-4">
												<input type="datetime-local" class="form-control form-control-mb mb-1" id="dateadmin" name="dateadmin" readonly="">
											</div>

											<div class="col-md-2 col-form-label  text-default mb-1">
												Name of Reporting Health Facility:
											</div>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac" readonly="">
												<input type="hidden" class="form-control form-control-mb" autocomplete="off" id="newfhud" name="newfhud">
												<input type="hidden" class="form-control form-control-mb mb-1" id="patient_id" name="patient_id">
												<input type="hidden" class="form-control form-control-mb" id="dateasof" name="dateasof" value="" readonly>
											</div>
										</div>


										<div class="form-row">
											<div class="col-md-2 col-form-label text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Patient Name:
											</div>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb" readonly="" autocomplete="off" id="info_patname" name="info_patname" placeholder="Last name">
											</div>
											<div class="col-md-2 col-form-label text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Sex:
											</div>
											<div class="col-md-4">
												<select name="info_sex" id="info_sex" disabled class="form-control form-control-mb" >
													<option value="">Select</option>
													<option value="M">Male</option>
													<option value="F">Female</option>
												</select>
											</div>

											<div class="col-md-2 col-form-label text-default mb-1">
												Gender Identity:
											</div>
											<div class="col-md-4">
												<select name="info_gender" id="info_gender" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="2">Male</option>
													<option value="1">Female</option>
												</select>
											</div>

											<div class="col-md-2 col-form-label text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i> Civil Status :
											</div>
											<div class="col-md-2">
												<select name="info_cs" id="info_cs" disabled class="form-control form-control-mb" >
													<option value="">Select</option>
													<option value="S">Single</option>
													<option value="M">Married</option>
													<option value="C">Live-in</option>
													<option value="X">Separated</option>
													<option value="W">Widow/Widower</option>
													<option value="D">Divorced</option>
													<option value="A">Annulled</option>
												</select>
											</div>
											<div class="col-md-2">
												<select name="info_cs_separated" id="info_cs_separated" class="form-control form-control-mb" >
													<option value="">Select</option>
													<option value="LS">Legally Separated</option>
													<option value="S">Separated</option>
												</select>
											</div>

											<div class="col-md-2 col-form-label text-default">
												Religion :
											</div>
											<div class="col-md-4">
												<select name="selRel" id="selRel" class="form-control form-control-mb" disabled=""></select>
											</div>
										</div>
									</div>
								</div>

								<br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-row">
											
											<div class="col-md-2 col-form-label text-default">
												<i class="fa fa-asterisk text-danger"></i> Highest Educational Attainment:
											</div>
											<div class="col-md-4">
												<select name="info_educat" id="info_educat" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="NA">Not Applicable</option>
													<option value="NO">No Formal Education</option>
													<option value="EL">Elementary Level</option>
													<option value="HL">Highschool Level</option>
													<option value="VO">Vocational</option>
													<option value="CO">College Level</option>
													<option value="PG">Post Graduate</option>
													<option value="EG">Elementary Graduate</option>
													<option value="HG">Highschool Graduate</option>
													<option value="CG">College Graduate</option>
												</select>
											</div>

											<div class="col-md-2 col-form-label text-default">
												<i class="fa fa-asterisk text-danger"></i>With Disability:
											</div>
											<div class="col-md-2">
												<select name="info_disability" id="info_disability" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="Y">Yes</option>
													<option value="N">No</option>
												</select>
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-mb mb-1" id="info_disability_sp" name="info_disability_sp" placeholder="Specify">
											</div>

											<div class="col-md-2 col-form-label text-default">
												<i class="fa fa-asterisk text-danger"></i>Informant :
											</div>
											<div class="col-md-2">
												<select name="info_informant" id="info_informant" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="01">Self(Patient/Injured)</option>
													<option value="02">Family Member</option>
													<option value="03">Police</option>
													<option value="04">Others, specify</option>
												</select>
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-mb mb-1" id="info_informant_sp" name="info_informant_sp" placeholder="Specify">
											</div>
											<label class="col-md-2 col-form-label text-default">
												Philhealth #:
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb readonly  mb-1" id="info_philhealth" name="info_philhealth" placeholder="Philhealth #" readonly="">
											</div>	
											<div class="col-md-2 col-form-label text-default mb-1">
												Mother&#39;s Maiden Name:
											</div>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb" readonly autocomplete="off" id="info_mot_fullname" name="info_mot_fullname" placeholder="Last name,First name,Middle name">
											</div>

											<div class="col-md-2 col-form-label  text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Birth Date:
											</div>
											<div class="col-md-4">
												<input type="datetime-local" class="form-control form-control-mb" readonly="" name="info_dob" id="info_dob">
											</div>

											<div class=" col-md-2 col-form-label  text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Age:
											</div>
											<div class="col-md-4">
												<input type="text" readonly class="form-control form-control-mb" autocomplete="off" id="info_age" name="info_age" placeholder="Age" value="">
												<input type="hidden" class="form-control form-control-mb" id="info_year" name="info_year" value="">
												<input type="hidden" class="form-control form-control-mb" id="info_month" name="info_month" value="">
												<input type="hidden" class="form-control form-control-mb" id="info_day" name="info_day" value="">
											</div>

											<div class="col-md-2 col-form-label text-default">
												<i class="fa fa-asterisk text-danger"></i>Place of birth:
											</div>
											<div class="col-md-4">
												<textarea name="info_bplace" id="info_bplace" class="form-control" type="input" placeholder="Place of Birth" autocomplete="off" readonly=""></textarea>
											</div>
											<div class="col-md-2 col-form-label text-default">
												<i class="fa fa-asterisk text-danger"></i>Nationality :
											</div>
											<div class="col-md-4">
												<select name="info_nat" id="info_nat" class="form-control form-control-mb" disabled="">
													<option value="">Select</option>
													<option value="FILIP">Filipino</option>
													<option value="AMERI">American</option>
													<option value="SPANI">Spanish</option>
													<option value="CHINE">Chinese</option>
													<option value="JAPAN">Japanese</option>
													<option value="GERMN">German</option>
													<option value="BANGDS">Bangladesh</option>
													<option value="BRITSH">British</option>
													<option value="ENGLS">English</option>
													<option value="FRNCH">French</option>
												</select>
											</div>											
										</div>
									</div>
								</div>

								<hr class="bg-success">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-12">
											<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
											<hr class="bg-success"></hr>
											<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i>Temporary Address</div>
											<div class="form-row">
												<div class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i> No.Street:
												</div>
												<div class="col-md-10">
													<textarea type="text" class="form-control form-control-mb mb-1" id="info_street" placeholder="Street Address" name="info_street" readonly=""></textarea>
												</div>
												<label class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i> City/Municipality:
												</label>
												<div class="col-md-10">
													<select class="form-control form-control-mb" id="selCity" name="selCity" disabled="true">
													</select>
												</div>
												<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
												<div class="col-md-4">
													<select class="form-control mb-1" id="selBrgy" name="selBrgy" disabled="true"></select>
												</div>

												<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
													Region:
												</div>
												<div class="col-md-4">
													<select class="form-control" disabled="" id="selReg" name="selReg">
													</select>
												</div>
											</div>
											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" id="selDist" name="selDist" disabled="true">
														<option value="">Select</option>
													</select>
												</div>

												<div class="col-md-2 col-form-label  text-default mb-1">
													Province:
												</div>
												<div class="col-md-4">
													<select class="form-control form-control-mb" id="selProv" name="selProv" disabled="true">
														<option value="">Select</option>
													</select>
												</div>

											</div>
											<div class="form-row">
												<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip" name="info_zip" disabled="">
												</div>
												<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
												<div class="col-md-4">
													<select type="text" class="form-control form-control-mb mb-1" readonly="readonly" id="info_country" name="info_country" disabled="">
														<option value="PHIL" selected>Philippines </option>
													</select>
												</div>
											</div>
											<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i> Permanent Address</div>
											<div class="form-row">
												<div class="col-md-2 col-form-label  text-default mb-1">
													No.Street:
												</div>
												<div class="col-md-10">
													<textarea type="text" class="form-control form-control-mb mb-1"  id="info_streetp" placeholder="Street Address" name="info_streetp" readonly=""></textarea>
												</div>
												<label class="col-md-2 col-form-label  text-default mb-1">
													City/Municipality:
												</label>
												<div class="col-md-10">
													<select class="form-control form-control-mb" id="selCityp" name="selCityp"disabled="">
													</select>
												</div>
												<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
												<div class="col-md-4">
													<select class="form-control mb-1" id="selBrgyp" name="selBrgyp" disabled=""></select>
												</div>

												<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
													Region:
												</div>
												<div class="col-md-4">
													<select class="form-control" readonly="readonly" id="selRegp" name="selRegp" disabled="">
													</select>
												</div>
											</div>
											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly="readonly" id="selDistp" name="selDistp" disabled="">
														<option value="">Select</option>
													</select>
												</div>

												<div class="col-md-2 col-form-label  text-default mb-1">
													Province:
												</div>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly="readonly" id="selProvp" name="selProvp" disabled="true">
														<option value="">Select</option>
													</select>
												</div>

											</div>
											<div class="form-row">
												<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zipp" name="info_zipp" disabled="">
												</div>
												<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
												<div class="col-md-4">
													<select type="text" class="form-control form-control-mb mb-1" readonly="readonly" id="info_countryp" name="info_countryp" disabled="">
														<option value="PHIL" selected>Philippines</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6">
								<h4 class="card-title text-success"><i class="fa fa-child"></i> IF VICTIM SURVIVOR IS A CHILD</h4>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-row">
									<div class="col-md-12">
										<label class="col-form-label text-default mb-1"><b>Name of Parent/Guardian</b></label>
									</div>

									<div class="col-md-1 col-form-label text-default mb-1">
										Lastname:
									</div>
									<div class="col-md-3">
										<input type="text" class="surv_child form-control form-control-mb" autocomplete="off" id="info_guard_lname" name="info_guard_lname" placeholder="Last name">
									</div>
									<div class="col-md-1 col-form-label text-default mb-1">
										Firstname:
									</div>
									<div class="col-md-3">
										<input type="text" class="surv_child form-control form-control-mb" autocomplete="off" id="info_guard_fname" name="info_guard_fname" placeholder="First name">
									</div>
									<div class="col-md-1 col-form-label text-default mb-1">
										Middlename:
									</div>
									<div class="col-md-3">
										<input type="text" class="surv_child form-control form-control-mb" autocomplete="off" id="info_guard_mname" name="info_guard_mname" placeholder="Middle name">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Relationship of Guardian to Victim-Survivor:</label>
									<div class="col-md-2">
										<select name="info_relToPat" id="info_relToPat" class="surv_child form-control form-control-mb">
											<option value="">Select</option>
											<option value="10">Current spouse/partner</option>
											<option value="15">Former fiance/dating relationship</option>
											<option value="20">Teacher/instructor/professor</option>
											<option value="25">Neigbors/peers/coworkers/classmates</option>
											<option value="30">People of authority/service provider</option>
											<option value="35">Immediate family(e.g. father, mother)</option>
											<option value="40">Others relatives(e.g. uncle, cousin)</option>
											<option value="45">Former spouse/partner</option>
											<option value="50">Employer/manager/supervisor</option>
											<option value="55">Coach/trainer</option>
											<option value="60">Stranger</option>
											<option value="65">Agent of the employer</option>
											<option value="70">Others</option>
											<option value="75">Current fiance/dating relationship</option>
										</select>
									</div>

									<label class="col-md-1 col-form-label text-default mb-1">Landline #:</label>
									<div class="col-md-3">
										<input type="text" class="surv_child form-control form-control-mb mb-1" placeholder="Landline #" id="guard_landline" name="guard_landline">
									</div>

									<label class="col-md-1 col-form-label text-default mb-1">Mobile #:</label>
									<div class="col-md-3">
										<input type="text" class="surv_child form-control form-control-mb mb-1" placeholder="Mobile #" id="guard_mobile" name="guard_mobile">
									</div>

									<div class="col-md-12">
										<label class="col-form-label text-default mb-1"><i class="fa fa-map"></i>&nbsp<b> Parent/Guardian Address:</b></label>
									</div>


									<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
									<div class="col-md-10">
										<input type="text" class="surv_child form-control form-control-mb mb-1" id="info_street_contact" placeholder="Street Address" name="info_street_contact">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
									<div class="col-md-4">
										<select class="surv_child form-control form-control-mb" id="selCityContact" name="selCityContact">
										</select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
									<div class="col-md-4">
										<select class="surv_child form-control form-control-mb" id="selBrgyContact" name="selBrgyContact"></select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
									<div class="col-md-4">
										<select class="surv_child form-control form-control-mb" id="selProvContact" name="selProvContact">
											<option value="">Select</option>
										</select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
									<div class="col-md-4">
										<select class="surv_child form-control" id="selRegContact" name="selRegContact"></select>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
									<div class="col-md-4">
										<input type="text" class="surv_child form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip_contact" name="info_zip_contact">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!--step 2-->
		<div id="step-2" class="">
			<form id="form-step-2" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success">&nbsp; Incident Information</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-2 col-form-label  text-default mb-1">Case/Incident No.:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Case/Incident No." id="case_incident" name="case_incident">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Referral From:</label>
									<div class="col-md-4">
										<select name="referral" id="referral" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="22">Other department/unit of the hospital, specify</option>
											<option value="10">DSWD</option>
											<option value="30">PNP</option>
											<option value="40">DOJ</option>
											<option value="80">Physician</option>
											<option value="23">Barangay</option>
											<option value="70">NGO</option>
											<option value="99">Others, specify</option>
										</select>
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Specify" id="case_incidenthosp" name="case_incidenthosp">
									</div>
									<div class="col-md-3">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="case_incident_oth" name="case_incident_oth">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Date of Interview:</label>
									<div class="col-md-10">
										<input type="datetime-local" class="form-control form-control-mb mb-1" id="date_interv" name="date_interv">
									</div>

									<label class="col-md-12 col-form-label  text-default mb-1"><b>Interviewed By:</b></label>

									<label class="col-md-2 col-form-label  text-default mb-1">Last Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Last Name" id="inter_last" name="inter_last">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">First Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="First Name" id="inter_first" name="inter_first">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Middle Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Middle Name" id="inter_mid" name="inter_mid">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Designation/Position:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Designation/Position" id="inter_desig" name="inter_desig">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-12 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;<b> VAWC Laws</b></label>

									<div class="col-md-12">
										<input type="checkbox" id="ra_vawc" name="ra_vawc" value="N" class="violent">&nbsp;
										<label class="col-form-label text-default mb-1">RA 9262: AntiViolence against Women and Children Act</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-1">

									</div>

									<div class="col-md-2">
										<input type="checkbox" id="ra_psy" name="ra_psy" value="N" class="ra_vaw">&nbsp;
										<label class="col-form-label text-default mb-1">Psychological</label>
									</div>
									<div class="col-md-2">
										<input type="checkbox" id="ra_phys" name="ra_phys" value="N" class="ra_vaw">&nbsp;
										<label class="col-form-label text-default mb-1">Physical</label>
									</div>

									<div class="col-md-2">
										<input type="checkbox" id="ra_oth" name="ra_oth" value="N" class="ra_vaw">&nbsp;
										<label class="col-form-label text-default mb-1">Others</label>
									</div>

									<div class="col-md-5">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Others" id="ra_oth_sp" name="ra_oth_sp">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-1">

									</div>

									<div class="col-md-2">
										<input type="checkbox" id="ra_eco" name="ra_eco" value="N" class="ra_vaw">&nbsp;
										<label class="col-form-label text-default mb-1">Economic</label>
									</div>
									<div class="col-md-2">
										<input type="checkbox" id="ra_sex" name="ra_sex" value="N" class="ra_vaw">&nbsp;
										<label class="col-form-label text-default mb-1">Sexual Abuse</label>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="ra_rape" name="ra_rape" value="N" class="violent">&nbsp;
										<label class="col-form-label text-default mb-1">RA 8353:Anti - Rape Law of 1995</label>
									</div>

									<div class="col-md-12">
										<input type="checkbox" id="ra_sexual" name="ra_sexual" value="N" class="violent">&nbsp;
										<label class="col-form-label text-default mb-1">RA 7877:Sexual Harassment Act</label>
									</div>

									<div class="col-md-12">
										<input type="checkbox" id="ra_bully" name="ra_bully" value="N" class="violent">&nbsp;
										<label class="col-form-label text-default mb-1">RA 10627:Anti Bullying Act</label>
									</div>

									<div class="col-md-12">
										<input type="checkbox" id="ra_special" name="ra_special" value="N" class="violent">&nbsp;
										<label class="col-form-label text-default mb-1">RA 7610:Special Protection of Children Against Child Abuse, Exploitation and Discrimination Act</label>
									</div>
								</div>

								<div class="form-row">
									<label class="col-md-3 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Description of Incident:</label>
									<div class="col-md-9">
										<textarea type="text" class="form-control form-control-mb mb-1" placeholder="Description of Incident" id="ra_descript" name="ra_descript"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
							</div>
							<div class="col-md-12">
								<div class="form-row">
									<label class="col-md-2 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Date and Time of Incident:</label>
									<div class="col-md-4">
										<input type="datetime-local" class="form-control form-control-mb mb-1" id="dateincident" name="dateincident">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Date and Time of Consultation:</label>
									<div class="col-md-4">
										<input type="datetime-local" class="form-control form-control-mb mb-1" id="dateconsult" name="dateconsult">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Place of Incident:</label>
									<div class="col-md-2">
										<select class="form-control" id="place_incident" name="place_incident">
											<option value="">Select</option>
											<option value="10">Home</option>
											<option value="70">Workplace</option>
											<option value="30">School</option>
											<option value="88">Others, specify</option>
										</select>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="place_incident_sp" name="place_incident_sp">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Geographic Location of Incident:</label>
									<label class="col-md-1 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Name of Location:</label>


									<div class="col-md-3">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Name of Location" id="name_incident" name="name_incident">
										<small class="text-muted">(e.g name of school, office, clinic, church, establishment, terminals etc)</small>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Number & Street Name:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Number & Street Name" id="info_street_inj" name="info_street_inj">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
									<div class="col-md-4">
										<select class="form-control form-control-mb" id="selCityInj" name="selCityInj"></select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Barangay:</label>
									<div class="col-md-4">
										<select class="form-control form-control-mb" id="selBrgyInj" name="selBrgyInj"></select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Province:</label>
									<div class="col-md-4">
										<select class="form-control form-control-mb" id="selProvInj" name="selProvInj"></select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Region:</label>
									<div class="col-md-4">
										<select class="form-control form-control-mb" id="selRegInj" name="selRegInj"></select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Zipcode:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Zipcode" id="info_zipcode_inj" name="info_zipcode_inj">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</form>
		</div>

		<!--step 4-->
		<div id="step-4" class="">
			<form id="form-step-4" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6">
								<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp <i class="fa fa-asterisk text-danger"></i> Nature of Injury/ies:</div>
								<hr class="bg-success">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Multiple Injuries:</label>
									<div class="col-md-10">
										<select class="form-control" id="multinj" name="multinj">
											<option value="">Select</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-12 col-form-label text-default mb-1">(Check all applicable, indicate in the blank space opposite each type of injury the body location (site) affected and other details):</label>
								</div>
								<div class="form-row">
									<div class="col-md-2">
										<input type="checkbox" id="multi_abra" name="multi_abra" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Abrasion</label>
									</div>
									<div class="col-md-4">
										<input type="text" class="mult form-control form-control-mb mb-2" placeholder="Abrasion" id="multi_1" name="multi_1">
									</div>

									<div class="col-md-2">
										<input type="checkbox" id="multi_avul" name="multi_avul" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Avulsion</label>
									</div>
									<div class="col-md-4">
										<input type="text" id="multi_2" name="multi_2" placeholder="Avulsion" class="mult form-control form-control-mb">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-2">
										<input type="checkbox" id="multi_burn" name="multi_burn" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1"><b>Burn:</b></label>

									</div>
									<div class="col-md-4">
										&nbsp;&nbsp;&nbsp;<input type="checkbox" id="multi_burn1" name="multi_burn1" value="N" class="multiburn">&nbsp;
										<label class="col-form-label text-default mb-1">1st</label>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" id="multi_burn2" name="multi_burn2" value="N" class="multiburn">&nbsp;
										<label class="col-form-label text-default mb-1">2nd</label>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" id="multi_burn3" name="multi_burn3" value="N" class="multiburn">&nbsp;
										<label class="col-form-label text-default mb-1">3rd</label>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" id="multi_burn4" name="multi_burn4" value="N" class="multiburn">&nbsp;
										<label class="col-form-label text-default mb-1">4th</label>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Site:</label>
									<div class="col-md-4">
										<input type="text" id="multi_site" name="multi_site" placeholder="Site" class="mult form-control form-control-mb">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-2">
										<input type="checkbox" id="multi_conc" name="multi_conc" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Concussion</label>
									</div>
									<div class="col-md-4">
										<input type="text" id="multi_4" name="multi_4" placeholder="Concussion" class="mult form-control  form-control-mb">
									</div>

									<div class="col-md-2">
										<input type="checkbox" id="multi_contu" name="multi_contu" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Contusion</label>
									</div>
									<div class="col-md-4">
										<input type="text" id="multi_5" name="multi_5" placeholder="Contusion" class="mult form-control form-control-mb">
									</div>

									<div class="col-md-2">
										<input type="checkbox" id="multi_frac" name="multi_frac" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Fracture</label>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="multi_frac_sel" name="multi_frac_sel">
											<option value="">Select</option>
											<option value="Y">Open Type</option>
											<option value="N">Close Type</option>
										</select>
									</div>
									<div class="col-md-4">
										<input type="text" id="multi_frac_sp" name="multi_frac_sp" placeholder="Specify" class="mult form-control form-control-mb">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-2">
										<input type="checkbox" id="multi_conc" name="multi_conc" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Concussion</label>
									</div>
									<div class="col-md-4">
										<input type="text" id="multi_4" name="multi_4" placeholder="Concussion" class="mult form-control  form-control-mb">
									</div>

									<div class="col-md-2">
										<input type="checkbox" id="multi_contu" name="multi_contu" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Contusion</label>
									</div>
									<div class="col-md-4">
										<input type="text" id="multi_5" name="multi_5" placeholder="Contusion" class="mult form-control form-control-mb">
									</div>

									<div class="col-md-2">
										<input type="checkbox" id="multi_frac" name="multi_frac" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Fracture</label>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="multi_frac_sel" name="multi_frac_sel">
											<option value="">Select</option>
											<option value="Y">Open Type</option>
											<option value="N">Close Type</option>
										</select>
									</div>
									<div class="col-md-4">
										<input type="text" id="multi_frac_sp" name="multi_frac_sp" placeholder="Specify" class="mult form-control form-control-mb">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="multi_lace" name="multi_lace" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Open wound/Laceration</label>
									</div>
									<div class="col-md-8">
										<input type="text" id="multi_8" name="multi_8" placeholder="(ex. hacking, gunshot, stabbing, animal bites, human bites, insect bites, punctured wound, etc.)" class="mult form-control form-control-mb">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="multi_ampu" name="multi_ampu" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Traumatic Amputation</label>
									</div>
									<div class="col-md-8">
										<input type="text" id="multi_9" name="multi_9" placeholder="Traumatic Amputation" class="mult form-control form-control-mb">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="multi_other" name="multi_other" value="N" class="multi">&nbsp;
										<label class="col-form-label text-default mb-1">Others: </label>
									</div>
									<div class="col-md-8">
										<input type="text" id="multi_10" name="multi_10" placeholder="Please specify injury and the body part/s affected" class="mult form-control form-control-mb">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp External Cause/s of Injury/ies:</div>
								<hr class="bg-success">
								<div class="form-row">
									<div class="col-md-6">
										<input type="checkbox" id="ext_sex" name="ext_sex" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Sexual Assault / Sexual Abuse/ Rape (Alleged)</label>
									</div>

									<div class="col-md-4">
										<input type="checkbox" id="ext_hang" name="ext_hang" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Hanging / Strangulation</label>
									</div>

									<div class="col-md-2">
										<input type="checkbox" id="ext_mau" name="ext_mau" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Mauling / Assault</label>
									</div>

								</div>


								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_contact" name="ext_contact" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Contact with sharp objects, specify object</label>
									</div>
									<div class="col-md-8">
										<input type="text" id="ext_5" name="ext_5" placeholder="Contact with sharp objects, specify object" class=" form-control  form-control-mb">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_gun" name="ext_gun" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Gunshot, specify weapon</label>
									</div>
									<div class="col-md-8">
										<input type="text" id="ext_2" name="ext_2" placeholder="Gunshot, specify weapon" class=" form-control form-control-mb">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_chem" name="ext_chem" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Chemical / substance specify</label>
									</div>
									<div class="col-md-8">
										<input type="text" id="ext_4" name="ext_4" placeholder="Chemical / substance specify" class=" form-control  form-control-mb">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_bite" name="ext_bite" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Bite / stings, Specify animal / insect</label>
									</div>
									<div class="col-md-8">
										<input type="text" id="ext_1" name="ext_1" placeholder="Bite / stings, Specify animal / insect" class=" form-control form-control-mb">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_drown" name="ext_drown" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Drowning</label>
									</div>
									<div class="col-md-4">
										<select class=" form-control" id="ext_drown1" name="ext_drown1">
											<option value="">Type/ Body of Water</option>
											<option value="01">Sea</option>
											<option value="02">River</option>
											<option value="03">Lake</option>
											<option value="04">Pool</option>
											<option value="05">Bath Tub</option>
											<option value="06">Others, Specify</option>
										</select>
									</div>
									<div class="col-md-4">
										<input type="text" id="ext_6" name="ext_6" placeholder="Drowning" class=" form-control  form-control-mb">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_burn" name="ext_burn" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Burns </label>
									</div>
									<div class="col-md-4">
										<select class=" form-control" id="ext_burn1" name="ext_burn1">
											<option value="">Select</option>
											<option value="01">Heat</option>
											<option value="02">Fire</option>
											<option value="03">Electricity</option>
											<option value="04">Oil</option>
											<option value="05">Friction</option>
											<option value="06">Others, Specify</option>
										</select>
									</div>
									<div class="col-md-4">
										<input type="text" id="ext_3" name="ext_3" placeholder="Burn" class=" form-control form-control-mb">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_fall" name="ext_fall" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Fall</label>
									</div>
									<div class="col-md-4">
										<select class=" form-control" id="ext_fall1" name="ext_fall1">
											<option value="">Select</option>
											<option value="1">From</option>
											<option value="2">In</option>
											<option value="3">On</option>
											<option value="4">Into</option>
										</select>
									</div>
									<div class="col-md-4">
										<input type="text" id="ext_8" name="ext_8" placeholder="Fall" class=" form-control  form-control-mb">
									</div>
								</div>


								<div class="form-row">
									<div class="col-md-4">
										<input type="checkbox" id="ext_other" name="ext_other" value="N" class="external">&nbsp;
										<label class="col-form-label text-default mb-1">Others, specify</label>
									</div>
									<div class="col-md-8">
										<input type="text" id="ext_10" name="ext_10" placeholder="Others, specify" class=" form-control  form-control-mb">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!--step 5-->
		<div id="step-5" class="">
			<form id="form-step-5" role="form">
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success">&nbsp; Hospital/Facility Data</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp; Initial Impression</label>
									<div class="col-md-10">
										<textarea type="text" id="init_imp" name="init_imp" placeholder="Initial Impression" class=" form-control  form-control-mb"></textarea>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1"> ICD-10 Code/s: Nature of Injury:</label>
									<div class="col-md-4">
										<input type="text" id="icdnat" name="icdnat" placeholder="ICD-10 Code/s: Nature of Injury" class=" form-control  form-control-mb">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1"> ICD-10 Code/s: External cause of Injury:</label>
									<div class="col-md-4">
										<input type="text" id="icdext" name="icdext" placeholder="Others, specify" class=" form-control  form-control-mb">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Intervention Given:</label>
									<div class="col-md-4">
										<select name="intervet" id="intervet" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="10">First Aid, specify</option>
											<option value="20">Medico-Legal exam</option>
											<option value="30">Provision of appropriate medical treatment</option>
											<option value="40">Issuance of Medical Certificate</option>
											<option value="50">Others, specify</option>
											<option value="0">None</option> >
										</select>
									</div>

									<div class="col-md-3">
										<input type="text" id="intervet_aid_sp" name="intervet_aid_sp" placeholder="First Aid, specify" class=" form-control  form-control-mb">
									</div>

									<div class="col-md-3">
										<input type="text" id="intervet_oth_sp" name="intervet_oth_sp" placeholder="Others, specify" class=" form-control  form-control-mb">
									</div>
									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Disposition:</label>
									<div class="col-md-4">
										<select name="dispose" id="dispose" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="ADMIT">Admitted</option>
											<option value="HAMAA">HAMA</option>
											<option value="ABSCN">Absconded</option>
											<option value="TRASH">Treated and Sent Home</option>
											<option value="REFER">Transferred to another facility/hosppital, specify</option>
											<option value="REFRL">Referred to Law Enforcement</option> >
											<option value="REFRS">Referred to Social Worker</option> >
											<option value="REFRB">Referred to Barangay</option> >
											<option value="REFRO">Referred to Other Service Provider</option> >
										</select>
									</div>

									<div class="col-md-3"></div>
									<div class="col-md-3">
										<select name="selFac" id="selFac" class="hos form-control form-control-mb"></select>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Date:</label>
									<div class="col-md-4">
										<input type="datetime-local" id="dispose_date" name="dispose_date" class=" form-control  form-control-mb">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Type of Service:</label>
									<div class="col-md-4">
										<input type="text" id="dispose_type" name="dispose_type" placeholder="Type of Service" class=" form-control  form-control-mb">

									</div>

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Agency:</label>
									<div class="col-md-4">
										<input type="text" id="dispose_agency" name="dispose_agency" placeholder="Agency" class=" form-control  form-control-mb">

									</div>

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Name of Service provider:</label>
									<div class="col-md-4">
										<input type="text" id="dispose_name_service" name="dispose_name_service" placeholder="Name of Service provider" class=" form-control  form-control-mb">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>


		<!--step 6-->
		<div id="step-6" class="">
			<form id="form-step-6" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6">
								<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i>&nbsp; Completed By</div>
								<hr class="bg-success">
							</div>
							<div class="col-md-6">
								<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i>&nbsp; Completed By Address</div>
								<hr class="bg-success">
							</div>
							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Last Name :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Last Name" id="complete_lname" name="complete_lname">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">First Name :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="First Name" id="complete_fname" name="complete_fname">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Middle Name :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Middle Name" id="complete_mname" name="complete_mname">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Landline #:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Landline #" id="complete_landline" name="complete_landline">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Mobile #:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Mobile #" id="complete_mobile" name="complete_mobile">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Email Address:</label>
									<div class="col-md-10">
										<input type="email" class="form-control form-control-mb mb-1" placeholder="Email Address" id="complete_email" name="complete_email">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="info_street_complete" placeholder="Street Address" name="info_street_complete">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
									<div class="col-md-10">
										<select class="form-control form-control-mb" id="selCityComplete" name="selCityComplete">
										</select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
									<div class="col-md-10">
										<select class="form-control form-control-mb" id="selBrgyComplete" name="selBrgyComplete"></select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
									<div class="col-md-10">
										<select class="form-control form-control-mb" id="selProvComplete" name="selProvComplete">
										</select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
									<div class="col-md-10">
										<select class="form-control" id="selRegComplete" name="selRegComplete"></select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip_complete" name="info_zip_complete">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</form>
		</div>


		<!--step 7-->
		<div id="step-7">
			<form id="form-step-7" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp Perpetrator Information Sheet (Use another Perpetrator Information Sheet if needed)</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-6">
								<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i>&nbsp; Perpetrator&#39;s Name</div>
								<hr class="bg-success">
							</div>

							<div class="col-md-6">
								<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i>&nbsp; Perpetrator&#39;s Address</div>
								<hr class="bg-success">
							</div>

							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Last Name :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Last Name" id="consult_lname" name="consult_lname">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">First Name :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="First Name" id="consult_fname" name="consult_fname">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Middle Name :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Middle Name" id="consult_mname" name="consult_mname">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Sex:</label>
									<div class="col-md-10">
										<select name="perp_sex" id="perp_sex" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="M">Male</option>
											<option value="F">Female</option>
										</select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Age:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Age" id="perp_age" name="perp_age">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="info_street_consult" placeholder="Street Address" name="info_street_consult">
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
									<div class="col-md-10">
										<select class="form-control form-control-mb" id="selCityConsult" name="selCityConsult">
										</select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
									<div class="col-md-10">
										<select class="form-control form-control-mb" id="selBrgyConsult" name="selBrgyConsult"></select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
									<div class="col-md-10">
										<select class="form-control form-control-mb" id="selProvConsult" name="selProvConsult">
										</select>
									</div>

									<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
									<div class="col-md-10">
										<select class="form-control" id="selRegConsult" name="selRegConsult"></select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip_consult" name="info_zip_consult">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Civil Status:</label>
									<div class="col-md-4">
										<select name="perp_cs" id="perp_cs" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="S">Single</option>
											<option value="M">Married</option>
											<option value="W">Widowed</option>
											<option value="C">Live-in</option>
											<option value="X">Separated</option>
											<option value="A">Annulled</option>
											<option value="D">Divorced</option>

										</select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Nationality:</label>
									<div class="col-md-4">
										<select name="perp_nat" id="perp_nat" class="form-control form-control-mb">
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

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Religion:</label>
									<div class="col-md-4">
										<select name="selRelPerp" id="selRelPerp" class="form-control form-control-mb"></select>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Relation of Perpetrator to victim:</label>
									<div class="col-md-2">
										<select name="perp_teltoviv" id="perp_teltoviv" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="10">Current spouse/partner</option>
											<option value="15">Former fiance/dating relationship</option>
											<option value="20">Teacher/instructor/professor</option>
											<option value="25">Neigbors/peers/coworkers/classmates</option>
											<option value="30">People of authority/service provider</option>
											<option value="35">Immediate family(e.g. father, mother)</option>
											<option value="40">Others relatives(e.g. uncle, cousin)</option>
											<option value="45">Former spouse/partner</option>
											<option value="50">Employer/manager/supervisor</option>
											<option value="55">Coach/trainer</option>
											<option value="60">Stranger</option>
											<option value="65">Agent of the employer</option>
											<option value="70">Others</option>
											<option value="75">Current fiance/dating relationship</option>
										</select>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="perp_teltoviv_sp" name="perp_teltoviv_sp">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Occupation:</label>
									<div class="col-md-2">
										<select name="perp_occup" id="perp_occup" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="5">Employed</option>
											<option value="1">Student</option>
											<option value="3">None/Unemployed</option>
											<option value="4">Unknown</option>
											<option value="2">Others,specify</option>
										</select>
									</div>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="perp_occup_sp" name="perp_occup_sp">
									</div>

									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Identifying Marks:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Identifying Marks" id="perp_marks" name="perp_marks">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
							</div>
							<div class="form-row">
								<div class="col-md-12">
									<label class="col-form-label text-default mb-1"><b>Name of Parent/Guardian</b></label>
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Lastname:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off" id="info_guard_lname_perp" name="info_guard_lname_perp" placeholder="Last name">
								</div>
								<div class="col-md-2 col-form-label text-default mb-1">
									Firstname:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off" id="info_guard_fname_perp" name="info_guard_fname_perp" placeholder="First name">
								</div>
								<div class="col-md-2 col-form-label text-default mb-1">
									Middlename:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off" id="info_guard_mname_perp" name="info_guard_mname_perp" placeholder="Middle name">
								</div>

								<label class="col-md-2 col-form-label text-default mb-1">Relationship of Guardian to Perpetrator:</label>
								<div class="col-md-2">
									<select name="info_relToPat_perp" id="info_relToPat_perp" class="form-control form-control-mb">
										<option value="">Select</option>
										<option value="MOTHE">Mother</option>
										<option value="FATHE">Father</option>
										<option value="SISTE">Sister</option>
										<option value="BROTH">Brother</option>
										<option value="AUNT">Aunt</option>
										<option value="UNCLE">Uncle</option>
										<option value="NEPHE">Nephew</option>
										<option value="NIECE">Niece</option>
										<option value="COUSI">Cousin</option>
										<option value="SPOUS">Spouse</option>
										<option value="FHEAD">Head of Family</option>
										<option value="N">N/A</option>
									</select>
								</div>

								<label class="col-md-1 col-form-label text-default mb-1">Landline #:</label>
								<div class="col-md-3">
									<input type="text" class="form-control form-control-mb mb-1" placeholder="Landline #" id="guard_landline_perp" name="guard_landline_perp">
								</div>

								<label class="col-md-1 col-form-label text-default mb-1">Mobile #:</label>
								<div class="col-md-3">
									<input type="text" class="form-control form-control-mb mb-1" placeholder="Mobile #" id="guard_mobileperp" name="guard_mobileperp">
								</div>

								<div class="col-md-2">
									<label class="col-form-label text-default mb-1"><i class="fa fa-map"></i>&nbsp<b>Perpetrator&#39;s Parent/Guardian Address:</b></label>
								</div>

								<div class="col-md-10">
									<textarea type="text" class="form-control form-control-mb mb-1" id="per_child_address" placeholder=" Address" name="per_child_address"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>

<!--

<div class="modal" id="modalSnapShot" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white"><i class="fa fa-camera"></i> Take Snapshot</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div  class="modal-body">
				<div  class="img-fluid img-thumbnail rounded mx-auto d-block mb-1"id="my_camera"></div>
			</div>
			<div class="modal-footer bg-secondary">
				<a  onclick ="take_snapshot();"class="btn btn-success btn-block btn-ladda btn-square" data-style="slide-right"><i class="fa fa-camera"></i></a>
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
			<div   class="modal-body">
				<div id="ImageSnapshot" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
			<div class="modal-footer bg-secondary"> 
				<a  onclick ="save_snapshot();"class="btn btn-success btn-block btn-inline btn-square btn-ladda " data-style="zoom-out"><i class="fa fa-save"></i></a>
				<a class="btn btn-success  btn-block btn-square" onclick="iniCamera();"  data-toggle="modal" data-target="#modalSnapShot" ><i class="fa fa-camera"></i></a>
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
			<div   class="modal-body">
				<div id="ImageEnlarge" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
			<div class="modal-footer bg-secondary"> 
	
			</div>
		</div>
	</div>
</div>
<p>
-->