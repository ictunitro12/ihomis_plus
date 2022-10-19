<input name="module" id="module" type="hidden" value="stroke">
<input name="entry" id ="entry" type="hidden" value="<?php echo $entry; ?>">
<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br /><small>Patient Data</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-history fa-2x"></i><br><small>Patient History</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fa fa-file fa-2x"></i><br><small>Stroke Data</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-head-side-cough fa-2x"></i><br><small>Other Information</small></a>
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
									<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Stroke Registration Form</h4>
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
												<div class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Type of Patient:
												</div>
												<div class="col-md-4">
													<select name="info_typepat" id="info_typepat" disabled="" class="form-control form-control-mb">
														<option value="">N/A</option>
														<option value="INPA">In Patient</option>
														<option value="OPD">OPD</option>
													</select>
												</div>
												<div class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Name of Reporting Health Facility:
												</div>
												<div class="col-md-4">
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
													<i class="fa fa-asterisk text-danger"></i>Place of birth:
												</div>
												<div class="col-md-4 mb-1">
													<textarea name="info_bplace" id="info_bplace" class="form-control" type="input" placeholder="Place of Birth" autocomplete="off" readonly=""></textarea>
												</div>
												<div class="col-md-2 col-form-label text-default">
													<i class="fa fa-asterisk text-danger"></i>Nationality :
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
													<i class="fa fa-asterisk text-danger"></i>Religion :
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
													<i class="fa fa-asterisk text-danger"></i>Occupation :
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
								<!--body-->
							</div>
						</div>
					</div>
				</form>
			</div>

		<!-- step-2-->
		<div id="step-2" class="">
			<form id="form-step-2" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
			</form>
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
						<div class="col-md-4">
							<input type="checkbox" id="smoke" name="smoke" value="N" class=" ">&nbsp;
							<label class="col-form-label text-default"><b>Smoking</b> </label>
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="physical_act" name="physical_act" value="N" class="psyact">&nbsp;
							<label class="col-form-label text-default"><b>Physical Activity</b> </label>
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="drink" name="drink" value="N" class="">&nbsp;
							<label class="col-form-label text-default"><b>Drinking of Alcoholic Beverage</b> </label>
						</div>
						<div class="col-md-4">
							&nbsp;<input type="checkbox" id="less_smoke" name="less_smoke" value=" " class="ssmoke">&nbsp;
							<label class="col-form-label text-default">Less than/Equal to 1 pack consumed per day </label>
						</div>

						<label class="col-md-2 col-form-label  text-default mb-1">Type :</label>
						<div class="col-md-2">
							<input type="text" class="physactivity form-control form-control-mb mb-1" placeholder="Type" id="physical_act_type" name="physical_act_type">
						</div>

						<label class="col-md-2 col-form-label  text-default mb-1">Type :</label>
						<div class="col-md-2">
							<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Type" id="drink_type" name="drink_type">
						</div>
						<div class="col-md-4">
							&nbsp;<input type="checkbox" id="more_smoke" name="more_smoke" value=" " class="ssmoke">&nbsp;
							<label class="col-form-label text-default">More than 1 pack consumed per day </label>
						</div>

						<label class="col-md-2 col-form-label text-default text-align center">Minutes per Exercise:</label>
						<div class="col-md-2">
							<input type="text" class="physactivity form-control form-control-mb mb-1" id="physical_act_min" placeholder="Minutes per Exercise" name="physical_act_min">
						</div>

						<label class="col-md-2 col-form-label text-default text-align center">Amount:</label>
						<div class="col-md-2">
							<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Amount" id="drink_amount" name="drink_amount">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Age started Smoking:</label>
						<div class="col-md-2">
							<input type="text" class="ssmoke form-control form-control-mb mb-1" placeholder="Age started Smoking" id="age_smoke" name="age_smoke">
						</div>

						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="physical_act_freq" id="physical_act_freq" class="physactivity form-control form-control-mb">
								<option value="">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>

						<label class="col-md-2 col-form-label text-default mb-1">Unit of Measure</label>
						<div class="col-md-2">
							<select name="unit" id="unit" class="form-control form-control-mb">
								<option value="">Select</option>
								<option value="B">Bottle</option>
								<option value="G">Glass</option>
								<option value="S">Shot</option>
							</select>
						</div>
						<label class="col-md-2 col-form-label text-default mb-1"> Number of Years Smoking:</label>
						<div class="col-md-2">
							<input type="text" class="ssmoke form-control form-control-mb mb-1" placeholder="Number of Years Smoking" id="num_smoke" name="num_smoke">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="family" name="family" value="N" class="">&nbsp;
							<label class="col-form-label text-default"><b>Family History</b> </label>
						</div>

						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="alcohol_freq" id="alcohol_freq" class="drinks form-control form-control-mb">
								<option value="">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>
						<div class="col-md-4"></div>

						<label class="col-md-2 col-form-label text-default text-align center">Family Member</label>
						<div class="col-md-2">
							<input type="text" class="famm form-control form-control-mb mb-1" placeholder="Family Member" id="fam_mem" name="fam_mem">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Age started drinking alcohol:</label>
						<div class="col-md-2">
							<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Age" id="age_alcohol" name="age_alcohol">
						</div>
						<div class="col-md-4"></div>
						<label class="col-md-2 col-form-label text-default mb-1">Type of Stroke:</label>
						<div class="col-md-2">
							<input type="text" class="famm form-control form-control-mb mb-1" placeholder="Type of Stroke" id="fam_memtype" name="fam_memtype" required>
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">No. of Years drinking alcohol:</label>
						<div class="col-md-2">
							<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="No. of Years " id="no_alcohol" name="no_alcohol">
						</div>
						<div class="col-md-12">
							<hr class="bg-success">
							<div class="h5 text-success">&nbsp;Usual/Typical Diet Intake</div>
							<hr class="bg-success">
						</div>
						<div class="col-md-4">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" id="fish" name="fish" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> <b>Fish, Meat, Poultry, Egg</b> </label>
						</div>
						<div class="col-md-1 text-align">
							<label class="col-form-label text-default text-align center">Specify:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="fishes form-control form-control-mb mb-1" placeholder="Specify" id="fish_specify" name="fish_specify">
						</div>

						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="fish_freq" id="fish_freq" class="fishes form-control form-control-mb">
								<option value=" ">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>

						<div class="col-md-4">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" id="rice" name="rice" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> <b>Rice, Grains, Bread, Cereals, RootCrops</b> </label>
						</div>
						<div class="col-md-1 text-align">
							<label class="col-form-label text-default text-align center">Specify:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="rice_specify" name="rice_specify">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="rice_freq" id="rice_freq" class="form-control form-control-mb">
								<option value=" ">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>
						<div class="col-md-4">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" id="fruits" name="fruits" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> <b>Fruits/Vegetables</b> </label>
						</div>
						<div class="col-md-1 text-align">
							<label class="col-form-label text-default text-align center">Specify:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="fruits_specify" name="fruits_specify">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="fruits_freq" id="fruits_freq" class="form-control form-control-mb">
								<option value=" ">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>
						<div class="col-md-4">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" id="fats" name="fats" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> <b>Fats, Oils</b> </label>
						</div>
						<div class="col-md-1 text-align">
							<label class="col-form-label text-default text-align center">Specify:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="fats_specify" name="fats_specify">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="fats_freq" id="fats_freq" class="form-control form-control-mb">
								<option value=" ">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>
						<div class="col-md-4">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" id="sugar" name="sugar" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> <b>Sugar, Sweet</b> </label>
						</div>
						<div class="col-md-1 text-align">
							<label class="col-form-label text-default text-align center">Specify:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="sugar_specify" name="sugar_specify">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="sugar_freq" id="sugar_freq" class="form-control form-control-mb">
								<option value=" ">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>
						<div class="col-md-4">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" id="milk" name="milk" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> <b>Milk and Milk Products</b> </label>
						</div>
						<div class="col-md-1 text-align">
							<label class="col-form-label text-default text-align center">Specify:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="milk_specify" name="milk_specify">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="milk_freq" id="milk_freq" class="form-control form-control-mb">
								<option value=" ">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>
						<div class="col-md-4">
							&nbsp;&nbsp;&nbsp;<input type="checkbox" id="usu_other" name="usu_other" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> <b>Others</b> </label>
						</div>
						<div class="col-md-1 text-align">
							<label class="col-form-label text-default text-align center">Specify:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="usu_other_specify" name="usu_other_specify">
						</div>
						<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
						<div class="col-md-2">
							<select name="other_freq" id="other_freq" class="form-control form-control-mb">
								<option value=" ">Select</option>
								<option value="D">Daily</option>
								<option value="W">Weekly</option>
								<option value="M">Monthly</option>
								<option value="Y">Yearly</option>
								<option value="Q">Quarterly</option>
							</select>
						</div>
						<div class="col-md-12">
							<hr class="bg-success">
							<div class="h5 text-success">&nbsp;Diseases/Attacks</div>
							<hr class="bg-success">
						</div>
						<div class="col-md-2">
							&nbsp;<input type="checkbox" id="prev_1" name="prev_1" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> Diabetes Mellitus </label>
						</div>
						<div class="col-md-2">
							&nbsp;<input type="checkbox" id="prev_2" name="prev_2" value="N" class="">&nbsp;
							<label class="col-form-label text-default">Valvular </label>
						</div>

						<div class="col-md-2">
							&nbsp;<input type="checkbox" id="prev_3" name="prev_3" value="N" class="">&nbsp;
							<label class="col-form-label text-default">HPN</label>
						</div>
						<div class="col-md-3">
							&nbsp;<input type="checkbox" id="prev_4" name="prev_4" value="N" class="">&nbsp;
							<label class="col-form-label text-default"> Transient Ischemic Attacks Diseases (RHD)</label>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2">
							&nbsp;<input type="checkbox" id="prev_5" name="prev_5" value="N" class="">&nbsp;
							<label class="col-form-label text-default">Others, specify</label>
						</div>

						<div class="col-md-4">
							<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="prev_other" name="prev_other">
						</div>
						<!-- end of patient history -->
					</div>
				</div>

			</div>
		</div>

		<!--step 3-->
		<div id="step-3" class="">
			<form id="form-step-3" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp STROKE DATA</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Type of Stroke:</label>
							<div class="col-md-4">
								<select name="str_type" id="str_type" class="form-control form-control-mb" required="">
									<option value="">Select</option>
									<option value="CERIN">Ischemic</option>
									<option value="INTCE">Hemorrhagic</option>
								</select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1"> Referred From:</label>
							<div class="col-md-4">
								<input type="checkbox" id="ref_from" name="ref_from" value="N" class="">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1"> Name of Referring Health Facility:</label>
							<div class="col-md-4">
								<select name="selFac2" id="selFac2" class="hos form-control form-control-mb mb-1"></select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Reason for Referral:</label>
							<div class="col-md-4">
								<select name="copd_reasonrefer" id="copd_reasonrefer" class="form-control form-control-mb mb-1">
									<option value="">Select</option>
									<option value="NOEQP">No equipment available</option>
									<option value="NODOC">No available doctor</option>
									<option value="NOPRO">No procedure available</option>
									<option value="NOLAB">No laboratory available</option>
									<option value="NOROM">No room available</option>
									<option value="SEASO">Seek advise/second opinion</option>
									<option value="SESPE">Seek specialized evaluation</option>
									<option value="SEFTA">Seek futher treatment appropriate to the case</option>
									<option value="FICON">Financial Constraint</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Date of Consultation/Admission:</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" id="dateconsult" name="dateconsult" readonly="">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Date of Diagnosis:</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" id="datediag" name="datediag" readonly="">
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
								<div class="h5 text-success col-md-2">&nbsp; Treatment</div>
								<hr class="bg-success">
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_1" name="treat_1" value="N" class="">&nbsp;
								<b><label class="col-form-label text-default"> Acute Treatment </label></b>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_2" name="treat_2" value="N" class="">&nbsp;
								<b><label class="col-form-label text-default">Preventive Treatment </label></b>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_3" name="treat_3" value="N" class="">&nbsp;
								<b><label class="col-form-label text-default">For Hemorrhagic Stroke</label></b>
							</div>


							<div class="col-md-4">
								<input type="checkbox" id="treat_1a" name="treat_1a" value="N" class="acute">&nbsp;
								<label class="col-form-label text-default">Clot Busters tPA</label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_2a" name="treat_2a" value="N" class="preventive">&nbsp;
								<label class="col-form-label text-default"> Anticoagulants/Antiplatelets</label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_3a" name="treat_3a" value="N" class="hemo">&nbsp;
								<label class="col-form-label text-default">Surgical Intervention </label>
							</div>



							<div class="col-md-2">
								<input type="checkbox" id="treat_1b" name="treat_1b" value="N" class="acute">&nbsp;
								<label class="col-form-label text-default"> Others, specify</label>
							</div>
							<div class="col-md-2">
								<input type="text" placeholder="specify" class="form-control form-control-mb mb-1" id="treat_1b_spec" name="treat_1b_spec">
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_2b" name="treat_2b" value="N" class="preventive">&nbsp;
								<label class="col-form-label text-default">Carotid Endarterectomy</label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_3c" name="treat_3c" value="N" class="hemo">&nbsp;
								<label class="col-form-label text-default"> Endovascular Procedures</label>
							</div>

							<div class="col-md-4">
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="treat_2c" name="treat_2c" value="N" class="preventive">&nbsp;
								<label class="col-form-label text-default"> Angioplasty/Stents</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="treat_3b" name="treat_3b" value="N" class="hemo">&nbsp;
								<label class="col-form-label text-default"> Others, specify</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="specify" id="treat_other_spec" name="treat_other_spec">
							</div>
							<div class="col-md-4">
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="treat_2d" name="treat_2d" value="N" class="preventive">&nbsp;
								<label class="col-form-label text-default"> Others, specify</label>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="specify" id="treat_2d_spec" name="treat_2d_spec">
							</div>
							<div class="col-md-4">
							</div>

							<div class="col-md-2">
								<input type="checkbox" id="treat_4" name="treat_4" value="N" class="">&nbsp;
								<b><label class="col-form-label text-default"> Others, specify</label></b>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="specify" id="treat_4_spec" name="treat_4_spec">
							</div>
							<div class="col-md-4">
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
							</div>
							<!-- <label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis:</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly="" id="copd_finaldiag" name="copd_finaldiag">
							</div> -->

							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis: ICD-10 Code</label>
							<div class="col-md-4">
								<select  multiple   name = "diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" required="">	</select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Patient Status:</label>
							<div class="col-md-4">
								<select name="patstat" id="patstat" class="form-control form-control-mb" required="">
									<option value="">Select</option>
									<option value="RE">Recovered</option>
									<option value="IM">Improved</option>
									<option value="UN">Unimproved</option>
									<option value="DI">Died</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"> If died, underlying Cause of Death</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly="" id="causeofdeath" name="causeofdeath">
							</div>

							<label class="col-md-3 col-form-label text-default mb-1"> If died, underlying Cause of Death:ICD10 Code</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb mb-1" readonly="" id="causeofdeathicd" name="causeofdeathicd">
							</div>


							<label class="col-md-2 col-form-label text-default mb-1"> Date of Death</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" id="datedeath" name="datedeath">
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">Disposition</label>
							<div class="col-md-3">
								<select name="dispos" id="dispos" class="form-control form-control-mb">
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

							<label class="col-md-2 col-form-label text-default mb-1">Place of Death</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="placedeath" name="placedeath">
							</div>



							<label class="col-md-3 col-form-label text-default mb-1">If Transferred, Name of Health Facility</label>
							<div class="col-md-3">
								<select name="selFac3" id="selFac3" class="form-control form-control-mb"></select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Reason for Referral</label>
							<div class="col-md-4">
								<select name="deathreason" id="deathreason" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="NOEQP">No equipment available</option>
									<option value="NODOC">No available doctor</option>
									<option value="NOPRO">No procedure available</option>
									<option value="NOLAB">No laboratory available</option>
									<option value="NOROM">No room available</option>
									<option value="SEASO">Seek advise/second opinion</option>
									<option value="SESPE">Seek specialized evaluation</option>
									<option value="SEFTA">Seek futher treatment appropriate to the case</option>
									<option value="FICON">Financial Constraint</option>
									<option value="DI"></option>
								</select>
							</div>

						</div>
					</div>
				</div>
			</form>
		</div>

		<!--end of STROKE DATA-->


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