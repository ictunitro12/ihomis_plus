<input name="module" id ="module" type="hidden" value="diabetes">
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
			<a href="#step-3"><i class="fa fa-file fa-2x"></i><br><small>Diabetes Data</small></a>
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
									<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Diabetes Registration Form</h4>
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
													<select name="info_educat" id="info_educat" required class="form-control form-control-mb">
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
								<input type="hidden" id="final_smoke" name="final_smoke">&nbsp;
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
								<input type="hidden" id="final_smoke_sub" name="final_smoke_sub">&nbsp;

								<label class="col-form-label text-default">Less than/Equal to 1 pack consumed per day </label>
							</div>

							<label class="col-md-1 col-form-label  text-default mb-1">Type :</label>
							<div class="col-md-3">
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

							<label class="col-md-1 col-form-label text-default text-align center">Minutes per Exercise:</label>
							<div class="col-md-3">
								<input type="number" class="physactivity form-control form-control-mb mb-1" id="physical_act_min" placeholder="Minutes per Exercise" name="physical_act_min">
							</div>
							<label class="col-md-2 col-form-label text-default text-align center">Amount:</label>
							<div class="col-md-2">
								<input type="number" class="drinks form-control form-control-mb mb-1" placeholder="Amount" id="drink_amount" name="drink_amount">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Age started Smoking:</label>
							<div class="col-md-2">
								<input type="number" class="ssmoke form-control form-control-mb mb-1" placeholder="Age started Smoking" id="age_smoke" name="age_smoke">
							</div>

							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
								<input type="number" class="ssmoke form-control form-control-mb mb-1" placeholder="Number of Years Smoking" id="num_smoke" name="num_smoke">
							</div>
							<div class="col-md-4">

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
							<div class="col-md-4">
								<input type="checkbox" id="shs_smoke" name="shs_smoke" value=" " class="">&nbsp;
								<label class="col-form-label text-default"><b>Second Hand Smoke (SHS)</b></label>
							</div>

							<div class="col-md-4">
								<input type="checkbox" id="family" name="family" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Family History</b> </label>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Age started drinking alcohol:</label>
							<div class="col-md-2">
								<input type="number" class="drinks form-control form-control-mb mb-1" placeholder="Age" id="age_alcohol" name="age_alcohol">
							</div>
							<div class="col-md-4">
								&nbsp;<input type="checkbox" id="expshs_smoke" name="expshs_smoke" value="N" class="secsmoke">&nbsp;
								<label class="col-form-label text-default">With Exposure to SHS</label>
							</div>

							<label class="col-md-1 col-form-label text-default text-align center">Family Member</label>
							<div class="col-md-3">
								<input type="text" class="famm form-control form-control-mb mb-1" placeholder="Family Member" id="fam_mem" name="fam_mem">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">No. of Years drinking alcohol:</label>
							<div class="col-md-2">
								<input type="number" class="drinks form-control form-control-mb mb-1" placeholder="No. of Years " id="no_alcohol" name="no_alcohol">
							</div>
							<label class="col-md-2 col-form-label text-default">Number of Years:</label>
							<div class="col-md-2">
								<input type="number" class=" form-control form-control-mb mb-1" placeholder="Number of Years" id="numyear_smoke" name="numyear_smoke">
							</div>

							<label class="col-md-1 col-form-label text-default mb-1">Type of Diabetes:</label>
							<div class="col-md-3">
								<input type="text" class="famm form-control form-control-mb mb-1" placeholder="Type of Diabetes" id="fam_memtype" name="fam_memtype">
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
								<div class="h5 text-success col-md-12">&nbsp;Family Diseases</div>
								<hr class="bg-success">
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_1" name="prev_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Hypertension</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_2" name="prev_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Asthma</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_3" name="prev_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default">CVD</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_4" name="prev_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default">TB</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_5" name="prev_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Stroke</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_6" name="prev_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Diabetes</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_7" name="prev_7" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Cancer</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prev_8" name="prev_8" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Others</label>
							</div>
							<div class="col-md-4">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="Others" id="prev_other" name="prev_other">
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
								<div class="h5 text-success col-md-12">&nbsp;Usual/Typical Diet Intake</div>
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

							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
							<label class="col-md-1 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-3">
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
							</div>
							<div class="col-md-3 text-align">
								<label class="col-form-label text-default text-align center"><b>OB GYNE HISTORY:</b> No. of Babies >=8lbs</label>
							</div>
							<div class="col-md-3">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder=" No. of Babies >=8lbs" id="nobaby" name="nobaby">
							</div>
							<div class="col-md-3 text-align">
								<label class="col-form-label text-default text-align center"><b>OB GYNE HISTORY:</b> No. of Babies with Congenital Anomalies</label>
							</div>
							<div class="col-md-3">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="No. of Babies with Congenital Anomalies" id="noconano" name="noconano">
							</div>
							<!-- End of Patient History -->
						</div>
					</div>
				</div>
			</form>
		</div>

		<!--step 3-->
		<div id="step-3">
			<form id="form-step-3">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp DIABETES DATA</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-1">
								<input type="checkbox" id="ref_from" name="ref_from" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Referred From</label>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1"> Name of Referring Health Facility:</label>
							<div class="col-md-3">
								<select name="selFac" id="selFac" class="hos form-control form-control-mb mb-1"></select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Reason for Referral:</label>
							<div class="col-md-4">
								<select name="reasonrefer" id="reasonrefer" class="form-control form-control-mb mb-1">
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

							<label class="col-md-2 col-form-label text-default"><b>Height</b></label>
							<div class="col-md-2">
								<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwHeight" name="hwHeight" placeholder="Height">
								<small class="text-muted">Centimenter</small>
								<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly id="hwHeightMeasure" name="hwHeightMeasure" value="CENTI">
							</div>
							<label class="col-md-2 col-form-label text-default"><b>Weight</b></label>
							<div class="col-md-2">
								<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwWeight" name="hwWeight" placeholder="Weight">
								<small class="text-muted">Kilogram</small>
								<input type="hidden" class="form-control form-control-mb" autocomplete="off" readonly id="hwWeightMeasure" name="hwWeightMeasure" value="KILOS">
							</div>
							<label class="col-md-2 col-form-label text-default"><b>Body Mass Index (BMI)</b></label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" readonly id="hwBMI" name="hwBMI" placeholder="BMI">
							</div>
							<label class="col-md-2 col-form-label text-default"><b>Classification (BMI)</b></label>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="bmi" id="classbmi" name="classbmi">
							</div>

							<label class="col-md-2 col-form-label text-default"><b>Waist Circumference in centimeters</b></label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwWaist" name="hwWaist" placeholder="Waist Circumference">
								<small class="text-muted">Centimenter</small>
							</div>

							<label class="col-md-2 col-form-label text-default"><b>Classification (WC)</b></label>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="Waist" id="classwaist" name="classwaist">
							</div>
							<label class="col-md-2 col-form-label text-default"><b>Physiological Status for Females</b></label>
							<div class="col-md-1">
								<input type="checkbox" id="preg" name="preg" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Pregnant</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="lact" name="lact" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Lactating</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="notappli" name="notappli" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Not Applicable</label>
							</div>
							<div class="col-md-7">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1"> <b>Signs and Symptoms</b></label>
							<div class="col-md-1">
								<input type="checkbox" id="symp_1" name="symp_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Polyuria</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="symp_2" name="symp_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Polydipsia</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="symp_3" name="symp_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Polyphagia</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="symp_4" name="symp_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Weight Loss</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="symp_5" name="symp_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Tingling Sensation</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="symp_6" name="symp_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Non-Healing Wound</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="symp_7" name="symp_7" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Others, specify</label>
							</div>
							<div class="col-md-2">
								<input type="text" placeholder="Others, specify" class="form-control form-control-mb mb-1" id="others_symp" name="others_symp">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Newly or Previously Diagnosed Diabetes</label>
							<div class="col-md-4">
								<select name="newprev" id="newprev" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="N"> Newly Diagnosed</option>
									<option value="P">Previously Diagnosed</option>
								</select>

							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Health Facility Where Diagnosed</label>
							<div class="col-md-4">
								<select name="selFac2" id="selFac2" class="form-control form-control-mb"></select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Tests Conducted</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="testconduct" placeholder="Test conducted" name="testconduct">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Duration of Diabetes</label>
							<div class="col-md-2">
								<input type="number" class="form-control form-control-mb mb-1" id="dura_diabet" name="dura_diabet">
							</div>
							<div class="col-md-2">
								<select name="dura_diabet2" id="dura_diabet2" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="D">Days </option>
									<option value="W">Weeks</option>
									<option value="M">Months</option>
									<option value="Y">Years</option>
									<option value="Q">Quarter</option>
								</select>

							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Age at Diagnosis:</label>

							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_year_dia" name="info_year_dia" value="" placeholder="Years" readonly>
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_month_dia" name="info_month_dia" placeholder="Months" value="" readonly>
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_day_dia" name="info_day_dia" placeholder="Days" value="" readonly>
							</div>
							<div class="col-md-1">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Type of Diabetes:</label>

							<div class="col-md-2">
								<select name="type_diabet" id="type_diabet" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="1">Type 1 </option>
									<option value="2">Type 2</option>
									<option value="3">GDM</option>
									<option value="4">IGT/IFG</option>
									<option value="OTHER">Other, specify</option>
								</select>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="other_type" name="other_type" placeholder="Others, specify">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Complications</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="compli" placeholder="Complication" name="compli">
							</div>
							<div class="col-md-6">
							</div>
							<div class="col-md-2">
								<label class="col-form-label text-default"><b>Current Treatment</b></label>
							</div>

							<div class="col-md-2">
								<input type="checkbox" id="med_thera" name="med_thera" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Medical Nutrition Therapy</b> </label>
							</div>

							<div class="col-md-2">
								&nbsp;<input type="checkbox" id="with_formal" name="with_formal" value="N" class="medical">&nbsp;
								<label class="col-form-label text-default">With Formal Consult/Education</label>
							</div>


							<div class="col-md-2">
								&nbsp;<input type="checkbox" id="no_formal" name="no_formal" value="N" class="medical">&nbsp;
								<label class="col-form-label text-default">No Formal Consult/Education</label>
							</div>

							<label class="col-md-1 col-form-label text-default"><b>Compliance</b></label>

							<div class="col-md-3">
								<select name="comply" id="comply" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="Y">Yes </option>
									<option value="N">No</option>
								</select>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="physical_act1" name="physical_act1" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Physical Activity</b> </label>
							</div>
							<label class="col-md-1 text-default">Kind </label>
							<div class="col-md-3">
								<input type="text" class="hala form-control form-control-mb mb-1" id="kind" placeholder="Kind" name="kind">
							</div>
							<label class="col-md-2 text-default">Frequency per Week </label>
							<div class="col-md-4">
								<input type="text" class="hala form-control form-control-mb mb-1" id="freq" placeholder="Frequency" name="freq">
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="oral_hypo" name="oral_hypo" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Oral Hypoglycemic</b></label>
							</div>

							<div class="col-md-1">
								<input type="checkbox" id="oral_1" name="oral_1" value="N" class="oral">&nbsp;
								<label class="col-form-label text-default">Sulfonylurea</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="oral_2" name="oral_2" value="N" class="oral">&nbsp;
								<label class="col-form-label text-default">Biguanides</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="oral_3" name="oral_3" value="N" class="oral">&nbsp;
								<label class="col-form-label text-default">Alpha-glucosidase inhibitor</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="oral_4" name="oral_4" value="N" class="oral">&nbsp;
								<label class="col-form-label text-default">TZD</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="oral_5" name="oral_5" value="N" class="oral">&nbsp;
								<label class="col-form-label text-default">Others, specify</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="other_oral" name="other_oral">
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="insulin" name="insulin" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b> Insulin</b></label>
							</div>
							<label class="col-md-1 col-form-label text-default"> Type</label>
							<div class="col-md-4">
								<select name="type_insu" id="type_insu" class="insu form-control form-control-mb">
									<option value="">Select</option>
									<option value="IACTI">Intermediate acting </option>
									<option value="LACTI">Long acting</option>
									<option value="RAPID">Rapid acting</option>
									<option value="VRAPI">Very Rapid acting</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default"> Units per Day</label>
							<div class="col-md-4">
								<input type="text" class="insu form-control form-control-mb mb-1" id="unitsperday" name="unitsperday">
							</div>
							<label class="col-form-label col-md-2 text-default"> <b>Surgeries Operation</b></label>
							<div class="col-md-1">
								<input type="checkbox" id="sur_1" name="sur_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> <b>Amputation</b></label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="sur_2" name="sur_2" value="N" class="amp">&nbsp;
								<label class="col-form-label text-default">Digital</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="sur_3" name="sur_3" value="N" class="amp">&nbsp;
								<label class="col-form-label text-default">BKA</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="sur_4" name="sur_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> <b>Revascularization</b></label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="sur_5" name="sur_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default"> Others, specify</label>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="others_sur" name="others_sur">
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis: ICD-10 Code</label>
							<div class="col-md-4">
								<select  multiple   name = "diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" required="">				
								</select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1"> Patient Status:</label>
							<div class="col-md-4">
								<select name="patstat" id="patstat" class="form-control form-control-mb">
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

							<label class="col-md-2 col-form-label text-default mb-1"> If died, underlying Cause of Death:ICD10 Code</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly="" id="causeofdeathicd" name="causeofdeathicd">
							</div>


							<label class="col-md-2 col-form-label text-default mb-1"> Date of Death</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" id="datedeath" name="datedeath">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Disposition</label>
							<div class="col-md-4">
								<select name="dispos" id="dispos" class="form-control form-control-mb" >
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
							<label class="col-md-2 col-form-label text-default mb-1">If Transferred, Name of Health Facility</label>
							<div class="col-md-4">
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