<input name="module" id="module" type="hidden" value="blind">
<input name="entry" id ="entry" type="hidden" value="<?php echo $entry; ?>">
<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br><small>Patient Data</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-history fa-2x"></i><br><small>Patient History</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="far fa-eye fa-2x"></i><br><small>For CATARACT Case</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-file-invoice fa-2x"></i><br><small>Other Information</small></a>
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
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Prevention of Blindness Registry Form</h4>
							</div>
							<input type="hidden" class="form-control form-control-mb" id="dateasof" name="dateasof">
							<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode">
							<input type="hidden" class="form-control form-control-mb mb-1" id="patient_id" name="patient_id">
							<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden">
							<input type="hidden" class="form-control form-control-mb" autocomplete="off" id="newfhud" name="newfhud">
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
												<!-- <div class="col-md-2 col-form-label  text-default mb-1">
												National Registry No.:
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb" id="info_natregno" name="info_natregno" readonly>
											</div> -->
											<!-- <div class="col-md-2 col-form-label  text-default mb-1">
												Hospital Registry No.:
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly="">
											</div> -->											
										</div>
										<div class="form-row">
											<div class="col-md-2 col-form-label  text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Type of Patient:
											</div>
											<div class="col-md-3">
												<select  name="info_typepat" id="info_typepat" class="form-control form-control-mb" readonly>
													<option value="">SELECT</option>
													<option value="OPD">OPD</option> 
													<option value="INPA">In Patient</option>
												</select>
											</div>

											<div class="col-md-3 mb-1">
												<select name="info_typepat2" id="info_typepat2" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="Y">Referred, Referring Facility</option>
													<option value="N">Walk-in</option>
												</select>
											</div>

											<div class="col-md-4 mb-1">
												<select name="selFac" id="selFac" class="form-control form-control-mb"></select>
											</div>											
										</div>


										<div class="form-row">
											<div class="col-md-2 col-form-label  text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Name of Reporting Health Facility:
											</div>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac" readonly="">
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
												<select name="info_sex" id="info_sex" disabled="disabled" class="form-control form-control-mb" >
													<option value="">Select</option>
													<option value="M">Male</option>
													<option value="F">Female</option>
												</select>
											</div>
											<div class="col-md-2 col-form-label text-default mb-1">
												<i class="fa fa-asterisk text-danger"></i>Civil Status :
											</div>
											<div class="col-md-4">
												<select name="info_cs" id="info_cs" disabled="disabled" class="form-control form-control-mb">
													<option value="">Select</option>
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
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<div class="form-row">
											<div class="col-md-2 col-form-label text-default">
												Place of birth:
											</div>
											<div class="col-md-4 mb-1">
												<textarea name="info_bplace" id="info_bplace" class="form-control" type="input" placeholder="Place of Birth" autocomplete="off" readonly=""></textarea>
											</div>
											<div class="col-md-2 col-form-label text-default">
												Nationality :
											</div>
											<div class="col-md-4 mb-1">
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
											<div class="col-md-2 col-form-label text-default">
												Religion :
											</div>
											<div class="col-md-4">
												<select name="selRel" id="selRel" class="form-control form-control-mb" disabled=""></select>
											</div>

											<div class="col-md-2 col-form-label text-default">
												Race:
											</div>
											<div class="col-md-2 mb-1">
												<select name="info_race" id="info_race" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="1">Causian (White)</option>
													<option value="2">Ethopian (Black)</option>
													<option value="3">Mongolian (Yellow)</option>
													<option value="4">Americans (Red)</option>
													<option value="5">Malay (Brown)</option>
													<option value="6">Others</option>
												</select>
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-mb" id="info_race_oth" name="info_race_oth" placeholder="Others, specify">
											</div>
											<div class="col-md-2 col-form-label text-default">
												Ethnicity:
											</div>
											<div class="col-md-2 mb-1">
												<select name="info_ethnic" id="info_ethnic" class="form-control form-control-mb">
													<option value="">Select</option>
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
											<div class="col-md-2">
												<input type="text" class="form-control form-control-mb" id="info_ethnic_oth" name="info_ethnic_oth" placeholder="Others, specify">
											</div>

											<label class="col-md-2 col-form-label text-default">
												Landline #:
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="info_telno" name="info_telno" placeholder="Landline #" readonly="">
											</div>

											<label class="col-md-2 col-form-label text-default">
												Mobile #:
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="info_mobno" name="info_mobno" placeholder="Mobile #" readonly="">
											</div>

											<label class="col-md-2 col-form-label text-default">
												Email Address:
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="info_emailadd" name="info_emailadd" placeholder="Email Address">
											</div>
											<label class="col-md-2 col-form-label text-default">
												Occupation :
											</label>
											<div class="col-md-4">
												<textarea type="text" class="form-control form-control-mb mb-1" id="info_occup" placeholder="Occupation" name="info_occup" readonly=""></textarea>
											</div>
											<label class="col-md-2 col-form-label text-default">
												Company :
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb  mb-1" id="info_company" name="info_company" placeholder="Company ">
											</div>
											<label class="col-md-2 col-form-label text-default">
												Philhealth #:
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb readonly  mb-1" id="info_philhealth" name="info_philhealth" placeholder="Philhealth #" readonly="">
											</div>
											<label class="col-md-2 col-form-label text-default">
												Common Reference #:
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb  mb-1" id="info_comrefno" name="info_comrefno" placeholder="Common Reference # ">
											</div>

											<div class="col-md-2 col-form-label text-default">
												<i class="fa fa-asterisk text-danger"></i>Highest Educational Attainment:
											</div>
											<div class="col-md-2 mb-1">
												<select name="info_educat" id="info_educat" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="EP">Elementary-Primary</option>
													<option value="EI">Elementary-Intermediate</option>
													<option value="SE">Secondary</option>
													<option value="CO">College</option>
													<option value="UC">College Undergraduate</option>
													<option value="PG">Post Graduate</option>
													<option value="VO">Vocational</option>
													<option value="NO">None</option>
													<option value="GR">Graduate</option>
													<option value="MA">Masteral</option>
													<option value="DO">Doctoral</option>
													<option value="OT">Others</option>
												</select>
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-mb  mb-1" id="info_educat_oth" name="info_educat_oth" placeholder="Others, Specify ">
											</div>

											<div class="col-md-6">
											</div>
											<!--------------->
											<div class="col-md-2 col-form-label text-default mb-1">
												Mother&#39;s Maiden Name:
											</div>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb" readonly autocomplete="off" id="info_mot_fullname" name="info_mot_fullname" placeholder="Last name,First name,Middle name">
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
								<hr class="bg-success">
								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-phone"></i>&nbsp Contact Person</div>
										<hr class="bg-success">

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Contact Name :</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Contact Name" id="contact_name" name="contact_name" readonly="">
											</div>

											<label class="col-md-2 col-form-label text-default mb-1">Landline/ Mobile#:</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Landline #" id="contact_landline" name="contact_landline" readonly="">
											</div>

											<label class="col-md-2 col-form-label text-default mb-1">Email Address:</label>
											<div class="col-md-10">
												<input type="email" class="form-control form-control-mb mb-1" placeholder="Email Address" id="contact_email" name="contact_email">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Contact Address:</label>
											<div class="col-md-10">
												<textarea type="text" class="form-control form-control-mb mb-1" id="contact_address" name="contact_address" placeholder="Address" readonly=""></textarea>
											</div>
										</div>
									</div>
									<hr class="bg-success">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div id="step-2">
			<form id="form-step-2">
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp Patient History</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Consultation Date :</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" id="dateconsult" name="dateconsult" readonly="">
								<input type="datetime-local" hidden class="form-control form-control-mb mb-1" id="datediag" name="datediag">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Chief Complaint :</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="chief_cons" name="chief_cons" placeholder="Chief Complaint">
							</div>
							<div class="col-md-2">
								<label class="col-form-label text-default">History of Vision Loss</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="his_con" name="his_con" value="N" >&nbsp;
								<label class="col-form-label text-default">Congenital - present at birth </label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="his_ac" name="his_ac" value="N" >&nbsp;
								<label class="col-form-label text-default">Acquired </label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="his_acu" name="his_acu" value="N" >&nbsp;
								<label class="col-form-label text-default">Acula </label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="his_gra" name="his_gra" value="N" >&nbsp;
								<label class="col-form-label text-default">Gradual</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="his_unkn" name="his_unkn" value="N" >&nbsp;
								<label class="col-form-label text-default">Unknown </label>
							</div>
						</div>
					</div>

					<div class="card-body">
						<div class="form-row">
							<div class="col-md-6">
								<div class="card card-accent-success">
									<br>
									<div class="form-row">		
										<div class="col-md-5">
											<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Degree of Vision Loss</div>
										</div>
										<div class="col-md-7">
											<select name="deg_vis" id="deg_vis" class="form-control form-control-mb">
												<option value="">Select</option>
												<option value="Y">Unaided</option>
												<option value="N">With Glasses</option>
											</select>
										</div>
									</div>

									<div class="form-row">		
										<div class="col-md-8">											
										</div>
										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Right Eye</b></label>
											
										</div>
										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Left Eye</b></label>
										</div>
									</div>

									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Can be tested</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="can_1" name="can_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="can_2" name="can_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Low vision</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="low_1" name="low_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="low_2" name="low_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Blind</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="blind_1" name="blind_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="blind_2" name="blind_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-4" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Cannot be tested</label>
										</div>
										<div class="col-md-4" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Believed blind</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="cannot_1" name="cannot_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="cannot_2" name="cannot_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-4" >
										</div>
										<div class="col-md-4" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Believed not blind</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="cannotblind_1" name="cannotblind_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="cannotblind_2" name="cannotblind_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Refraction</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="ref_1" name="ref_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="ref_2" name="ref_2" value="N" >				
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-accent-success">
									<br>
									<div class="form-row">		
										<div class="col-md-12">
											<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Previous Eye Surgery
											</div>
										</div>

										<div class="col-md-1" align="center">
										</div>
										<div class="col-md-5">
											<input type="checkbox" id="prev_no" name="prev_no" value="N" class="">&nbsp;
											<label class="col-form-label text-default">No evidence of Surgery </label>
										</div>

										<div class="col-md-6">
											<input type="checkbox" id="prev_ass" name="prev_ass" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Not Assessed </label>
										</div>

										<div class="col-md-1" align="center">
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="prev_type" name="prev_type" value="N" class="">&nbsp;
											<label class="col-form-label text-default"> Type of Previous Surgery </label>
										</div>

										<div class="col-md-2" align="center">
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="prev_eyelid" name="prev_eyelid" value="N" class="prev">&nbsp;
											<label class="col-form-label text-default"> Eyelid </label>
										</div> 
										<div class="col-md-2" align="center">
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="prev_cataract" name="prev_cataract" value="N" class="prev">&nbsp;
											<label class="col-form-label text-default"> Cataract </label>
										</div>

										<div class="col-md-2" align="center">
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="prev_glaucoma" name="prev_glaucoma" value="N" class="prev">&nbsp;
											<label class="col-form-label text-default"> Glaucoma </label>
										</div>

										<div class="col-md-2" align="center">
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="prev_couching" name="prev_couching" value="N" class="prev">&nbsp;
											<label class="col-form-label text-default">Couching </label>
										</div>

										<div class="col-md-2" align="center">
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="prev_others" name="prev_others" value="N" class="prev">&nbsp;
											<label class="col-form-label text-default"> Other,specify </label>
										</div>

										<div class="col-md-2" align="center">
										</div>
										<div class="col-md-10">
											<input type="text" class=" form-control form-control-mb mb-1" placeholder="Others, specify" id="prev_others_spec" name="prev_others_spec">
										</div>
									</div>


								</div>
							</div>
						</div>

						<hr class="bg-success">
						<div class="col-md-12">
							<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Cause of Low Vision or Blindness
							</div>
						</div>
						<hr class="bg-success">

						<div class="form-row">
							<div class="col-md-4">
								<div class="card card-accent-success">
									<br>
									<div class="form-row">		
										<div class="col-md-8">
											<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Disorders</div>
										</div>

										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Right Eye</b></label>
											
										</div>
										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Left Eye</b></label>
										</div>
									</div>

									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Physical, Disorganized or Absent Globe</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="physical_1" name="physical_1" value="N" class="noncataract">	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="physical_2" name="physical_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Cataract</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="cataract_1" name="cataract_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="cataract_2" name="cataract_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Uncorrected Aphakia </label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="uncorrect_1" name="uncorrect_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="uncorrect_2" name="uncorrect_2" value="N" class="noncataract">				
										</div>
									</div>
									<div class="form-row">	
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Corneal Opacity</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="cornea_1" name="cornea_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="cornea_2" name="cornea_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Anterior Uveitis</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="anterior_1" name="anterior_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="anterior_2" name="anterior_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Glaucoma</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="glaucoma_1" name="glaucoma_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="glaucoma_2" name="glaucoma_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Retinopathy</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="retinopat_1" name="retinopat_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="retinopat_2" name="retinopat_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Optic Atrophy</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="optic_1" name="optic_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="optic_2" name="optic_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Chorioretinitis</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="chorio_1" name="chorio_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="chorio_2" name="chorio_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Macular Degeneration</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="macular_1" name="macular_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="macular_2" name="macular_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Retinal Detachment</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="retinal_1" name="retinal_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="retinal_2" name="retinal_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Tumors</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="tumor_1" name="tumor_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="tumor_2" name="tumor_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Not Examined</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="notexam_1" name="notexam_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="notexam_2" name="notexam_2" value="N" class="noncataract">					
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-3" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Other,specify</label>
										</div>
										<div class="col-md-5" >
											<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="dis_others_spec" name="dis_others_spec">
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="dis_others_1" name="dis_others_1" value="N" class="noncataract">		
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="dis_others_2" name="dis_others_2" value="N" class="noncataract">					
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<br>
									<div class="form-row">		
										<div class="col-md-8">
											<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Underlying Causes</div>
										</div>

										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Right Eye</b></label>
											
										</div>
										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Left Eye</b></label>
										</div>
									</div>

									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">No listed underlying cause</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_no_1" name="under_no_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_no__2" name="under_no__2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Congenital/Neonatal Factor</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_cong_1" name="under_cong_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_congt_2" name="under_congt_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1"> Onchocerciasis </label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_oncho_1" name="under_oncho_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_oncho_2" name="under_oncho_2" value="N" >				
										</div>
									</div>
									<div class="form-row">	
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Measles/Vitamin A Deficiency</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_measles_1" name="under_measles_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_measles_2" name="under_measles_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Surgical Procedure</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_surg_1" name="under_surg_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_surg_2" name="under_surg_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Trachoma</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_trach_1" name="under_trach_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_trach_2" name="under_trach_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Diabetes</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_diab_1" name="under_diab_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_diab_2" name="under_diab_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Tuberculosis (TB)</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_diab_tb" name="under_diab_tb" value="N" >	
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Traditional Medicine</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_diab_trac" name="under_diab_trac" value="N" >	
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Infection</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_infect_1" name="under_infect_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_infect_2" name="under_infect_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Carcinoma</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_carci_1" name="under_carci_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_carci_2" name="under_carci_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Other Causes of Retinopathy</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_retino_1" name="under_retino_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_retino_2" name="under_retino_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Retinopathy of Prematurity</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="under_premature_1" name="under_premature_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="under_premature_2" name="under_premature_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-3" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Other,specify</label>
										</div>
										<div class="col-md-5" >
											<input type="text" class=" form-control form-control-mb mb-1" placeholder="Others, specify" id="underlying_others_spec" name="underlying_others_spec">
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="underlying_others_1" name="underlying_others_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="underlying_others_2" name="underlying_others_2" value="N" >				
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<br>
									<div class="form-row">		
										<div class="col-md-12">
											<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Refractive Error</div>
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8">											
										</div>
										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Right Eye</b></label>
											
										</div>
										<div class="col-md-2" align="center">
											<label class="col-form-label text-default mb-1"><b>Left Eye</b></label>
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Myopia</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="myo_1" name="myo_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="myo_2" name="myo_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Hyperopia</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="hyper_1" name="hyper_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="hyper_2" name="hyper_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Astigmatism </label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="astig_1" name="astig_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="astig_2" name="astig_2" value="N" >				
										</div>
									</div>
									<div class="form-row">	
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Mixed</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="mix_1" name="mix_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="mix_2" name="mix_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Presbyopia</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="pres_1" name="pres_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="pres_2" name="pres_2" value="N" >				
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-8" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Amblyopia</label>
										</div>
										<div class="col-md-2"  align="center">
											<input type="checkbox" id="amby_1" name="amby_1" value="N" >	
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="amby_2" name="amby_2" value="N" >				
										</div>
									</div>
									<hr class="bg-success">
									<br>
									<div class="form-row">		
										<div class="col-md-12">
											<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Prognosis of Vision Loss</div>
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">
											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Treatable</label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="treat" name="treat" value="N" >
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">
											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Guarded/Progressive</label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="guard" name="guard" value="N" >
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">
											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Untreatable</label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="untreat" name="untreat" value="N" >
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Unknown</label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="unk" name="unk" value="N" >
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4">
								<div class="card card-accent-success">
									<br>
									<div class="form-row">		
										<div class="col-md-12">
											<div class="h5 text-success">&nbsp;&nbsp; <i class="fa fa-user-circle-o"></i>&nbsp; Prosthetic Device</div>
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Eye Glassess</label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="pros_eye" name="pros_eye" value="N" >
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Contact Lenses</label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="pros_contact" name="pros_contact" value="N" >
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Prosthetic Eye(s) </label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="pros_eyees" name="pros_eyees" value="N" >
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">											
										</div>
										<div class="col-md-7" >
											&nbsp;&nbsp;<label class="col-form-label text-default mb-1">Other (specify)</label> 
										</div>
										<div class="col-md-4" align="center">
											&nbsp;<input type="checkbox" id="pros_other" name="pros_other" value="N" >
										</div>
									</div>
									<div class="form-row">		
										<div class="col-md-1">											
										</div>
										<div class="col-md-11" >
											<input type="text" class=" form-control form-control-mb mb-1" placeholder="Others, specify" id="pros_others" name="pros_others">
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div>
			</form>
		</div>

		<div id="step-3">
			<form id="form-step-3">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!
				</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp For CATARACT Case</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="form-row">
										<label class="col-md-4 col-form-label text-default mb-1"><b>Type of cataract:</b></label>
										<div class="col-md-8">
											<select name="typ_cat" id="typ_cat" class="cataractss form-control form-control-mb">
												<option value="">Select</option>
												<option value="Y">Primary</option>
												<option value="N">Secondary</option>
											</select>
										</div>

										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="prim_sen" name="prim_sen" value="N" class="prim">&nbsp;
											<label class="col-form-label text-default"> Senile/Age related</label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="prim_con" name="prim_con" value="N" class="prim">&nbsp;
											<label class="col-form-label text-default"> Congenital </label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="prim_dev" name="prim_dev" value="N" class="prim">&nbsp;
											<label class="col-form-label text-default"> Developmental </label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="sec_tra" name="sec_tra" value="N" class="sec">&nbsp;
											<label class="col-form-label text-default"> Trauma </label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="sec_infect" name="sec_infect" value="N" class="sec">&nbsp;
											<label class="col-form-label text-default"> Infection </label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="sec_surg" name="sec_surg" value="N" class="sec">&nbsp;
											<label class="col-form-label text-default"> Surgery - induced </label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="sec_glau" name="sec_glau" value="N" class="sec">&nbsp;
											<label class="col-form-label text-default"> Glaucoma </label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="checkbox" id="sec_other" name="sec_other" value="N" class="sec">&nbsp;
											<label class="col-form-label text-default"> Others, specify </label>
										</div>
										<div class="col-md-1">											
										</div>
										<div class="col-md-11">
											<input type="text" class="cataractss form-control form-control-mb mb-1" placeholder="Others, specify" id="sec_others_spec" name="sec_others_spec">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="form-row">
										<label class="col-md-12 col-form-label text-default mb-1"><b>&nbsp;&nbsp;Visual Acuity: Pre-operative</b></label>
										<label class="col-md-7 col-form-label text-default mb-1">&nbsp;&nbsp;Best Corrected Visual Acuity: <b>Right Eye</b></label>
										<div class="col-md-5">
											<input type="text" class="cataractss form-control form-control-mb mb-1" placeholder="Right Eye" id="vis_right" name="vis_right">
										</div>
										<label class="col-md-7 col-form-label text-default mb-1">&nbsp;&nbsp;Best Corrected Visual Acuity:<b> Left Eye</b></label>
										<div class="col-md-5">
											<input type="text" class="cataractss form-control form-control-mb mb-1" placeholder="Left Eye" id="vis_left" name="vis_left">
										</div>
										<hr class="bg-success">

										<label class="col-md-4 col-form-label text-default mb-1"><b>&nbsp;&nbsp;Date of Operation</b></label>
										<div class="col-md-8">
											<input type="datetime-local" class="cataractss form-control form-control-mb mb-1" id="opera_dte" name="opera_dte">
										</div>

										<label class="col-md-12 col-form-label text-default mb-1"><b>&nbsp;&nbsp;Eye Operated:</b></label>
										<div class="col-md-2">											
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="opera_right" name="opera_right" value="N" class="cataractss">&nbsp;
											<label class="col-form-label text-default"> Right </label>
										</div>
										<div class="col-md-2">											
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="opera_left" name="opera_left" value="N" class="cataractss">&nbsp;
											<label class="col-form-label text-default"> Left </label>
										</div>
										<div class="col-md-2">											
										</div>
										<div class="col-md-10">
											<input type="checkbox" id="opera_both" name="opera_both" value="N" class="cataractss">&nbsp;
											<label class="col-form-label text-default"> Both Eyes </label>
										</div>

										<label class="col-md-4 col-form-label text-default mb-1">&nbsp;&nbsp;<b>Name of Surgeon</b></label>
										<div class="col-md-8">
											<input type="text" class="cataractss form-control form-control-mb mb-1" placeholder="Name of Surgeon" id="name_surg" name="name_surg">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="form-row">
										<label class="col-md-12 col-form-label text-default mb-1"><b>&nbsp;&nbsp;Type of Cataract surgery</b></label>

										<label class="col-md-4 col-form-label text-default mb-1"></label>
										<label class="col-md-4 col-form-label text-default mb-1"align="center"><b>Right Eye</b></label>
										<label class="col-md-4 col-form-label text-default mb-1"align="center"><b>Left Eye</b></label>

										<label class="col-md-4 col-form-label text-default mb-1"></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>With</b></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>Without</b></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>With</b></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>Without</b></label>

										<label class="col-md-4 col-form-label text-default mb-1"></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>IOL</b></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>IOL</b></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>IOL</b></label>
										<label class="col-md-2 col-form-label text-default mb-1"align="center"><b>IOL</b></label>

										<label class="col-md-4 col-form-label text-default mb-1">&nbsp;&nbsp;ICCE</label>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="icce_1" name="icce_1" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="icce_2" name="icce_2" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2"align="center">
											<input type="checkbox" id="icce_3" name="icce_3" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="icce_4" name="icce_4" value="N" class="cataractss">&nbsp;
										</div>

										<label class="col-md-4 col-form-label text-default mb-1">&nbsp;&nbsp;ECCE</label>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="ecce_1" name="ecce_1" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="ecce_2" name="ecce_2" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2"align="center">
											<input type="checkbox" id="ecce_3" name="ecce_3" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="ecce_4" name="ecce_4" value="N" class="cataractss">&nbsp;
										</div>

										<label class="col-md-4 col-form-label text-default mb-1">&nbsp;&nbsp;SICS</label>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="sics_1" name="sics_1" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="sics_2" name="sics_2" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2"align="center">
											<input type="checkbox" id="sics_3" name="sics_3" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="sics_4" name="sics_4" value="N" class="cataractss">&nbsp;
										</div>

										<label class="col-md-4 col-form-label text-default mb-1">&nbsp;&nbsp;PHACO</label>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="phaco_1" name="phaco_1" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="phaco_2" name="phaco_2" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2"align="center">
											<input type="checkbox" id="phaco_3" name="phaco_3" value="N" class="cataractss">&nbsp;
										</div>
										<div class="col-md-2" align="center">
											<input type="checkbox" id="phaco_4" name="phaco_4" value="N" class="cataractss">&nbsp;
										</div>

										<label class="col-md-4 col-form-label text-default mb-1">&nbsp;&nbsp;<b>Complicated Surgery</b></label>
										<div class="col-md-8">
											<select class="cataractss form-control form-control-mb" id="comp_surg" name="comp_surg">
												<option value="">Select</option>
												<option value="Y">Yes</option>
												<option value="N">No</option>
											</select>

										</div>

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
							<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp Other Information</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-12">
								<div class="card card-accent-success">
									<div class="form-row">
                                        <label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis: ICD-10 Code</label>
                                        <div class="col-md-4">
                                            <select  multiple   name = "diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" required="" disabled="">               
                                            </select>
                                        </div>

                                        <label class="col-md-2 col-form-label text-default mb-1">Disposition</label>
                                        <div class="col-md-4">
                                            <select name="dispos" id="dispos" class="form-control form-control-mb" required="" disabled="">
                                                <option value="">Select</option>
                                                <option value="ADMIT">Admitted</option>
                                                <option value="DISCH">Discharged</option>
                                                <option value="TRANS">Transferred</option>
                                                <option value="DAMA">Discharge Against Medical Advice</option>
                                                <option value="TRASH">Treated and Sent Home</option>
                                                <option value="ABSC">Absconded</option>
                                                <option value="DIEDD">Died</option>
                                            </select>
                                        </div>
									</div>									
								</div>
							</div>
						</div>


						<div class="form-row">
							<div class="col-md-12">
								<div class="card card-accent-success">
									<div class="col-md-12">
										<div class="form-row">
											<div class="col-md-6 h5 text-success"><i class="fa fa-user"></i>&nbsp; Consultant in-charge</div>

											<div class="col-md-6 h5 text-success"><i class="fa fa-user"></i>&nbsp; Consultant Address</div>											
										</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Last Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Last Name" id="consult_lname" name="consult_lname" readonly="">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="info_street_consult" placeholder="Street Address" name="info_street_consult">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">First Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="First Name" id="consult_fname" name="consult_fname" readonly="">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selCityConsult" name="selCityConsult">
												</select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Middle Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Middle Name" id="consult_mname" name="consult_mname" readonly="">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selBrgyConsult" name="selBrgyConsult"></select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Landline #:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Landline #" id="consult_landline" name="consult_landline">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selProvConsult" name="selProvConsult">
													<option value="">Select</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Mobile #:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Mobile #" id="consult_mobile" name="consult_mobile">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
											<div class="col-md-4">
												<select class="form-control" id="selRegConsult" name="selRegConsult"></select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Email Address:</label>
											<div class="col-md-4">
												<input type="email" class="form-control form-control-mb mb-1" placeholder="Email Address" id="consult_email" name="consult_email">
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip_consult" name="info_zip_consult">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Department:</label>
											<div class="col-md-4">
												<select class="form-control" id="selDepartment" name="selDepartment" disabled=""></select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">License/PRC No.:</label>
											<div class="col-md-4">
												<input class="form-control" id="consult_license" name="consult_license" readonly="">
											</div>
										</div>
									</div>
								</div>	
								<div class="card card-accent-success">
									<div class="col-md-12">
										<div class="form-row">
											<div class="col-md-6 h5 text-success"><i class="fa fa-user"></i>&nbsp; Completed By</div>

											<div class="col-md-6 h5 text-success"><i class="fa fa-user"></i>&nbsp; Completed by Address</div>											
										</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Last Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Last Name" id="complete_lname" name="complete_lname" readonly="">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="info_street_complete" placeholder="Street Address" name="info_street_complete">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">First Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="First Name" id="complete_fname" name="complete_fname" readonly="">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selCityComplete" name="selCityComplete">
												</select>
											</div>
										</div>
										<div class="form-row">											
											<label class="col-md-2 col-form-label text-default mb-1">Middle Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Middle Name" id="complete_mname" name="complete_mname" readonly="">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selBrgyComplete" name="selBrgyComplete"></select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Landline #:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Landline #" id="complete_landline" name="complete_landline">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selProvComplete" name="selProvComplete">
												</select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Mobile #:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Mobile #" id="complete_mobile" name="complete_mobile">
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
											<div class="col-md-4">
												<select class="form-control" id="selRegComplete" name="selRegComplete"></select>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Email Address:</label>
											<div class="col-md-4">
												<input type="email" class="form-control form-control-mb mb-1" placeholder="Email Address" id="complete_email" name="complete_email">
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip_complete" name="info_zip_complete">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Designation:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Designation" id="complete_desig" name="complete_desig" readonly="">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Date Completed:</label>
											<div class="col-md-4">
												<input type="datetime-local" class="form-control form-control-mb mb-1" placeholder="Middle Name" id="complete_Date" name="complete_Date">
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>