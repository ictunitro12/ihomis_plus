	<input name="module" id="module" type="hidden" value="coronary">
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
				<a href="#step-3"><i class="fa fa-file fa-2x"></i><br><small>CAD Data</small></a>
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
									<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Coronary Artery Disease Registration Form</h4>
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
													<select name="info_educat" id="info_educat" required="" class="form-control form-control-mb">
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
								<label class="col-md-2 col-form-label text-default"><b>Height in Meter</b></label>
								<div class="col-md-2">
									<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" id="hwHeight" name="hwHeight" placeholder="Height">
									<small class="text-muted">Centimenter</small>
								</div>
								<label class="col-md-2 col-form-label text-default"><b>Weight in Kilograms</b></label>
								<div class="col-md-2">
									<input type="number" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();"  onkeypress="calculateBMI();" id="hwWeight" name="hwWeight" placeholder="Weight">
									<small class="text-muted">Kilogram</small>
								</div>
								<label class="col-md-2 col-form-label text-default"><b>Body Mass Index (BMI)</b></label>
								<div class="col-md-2">
									<input type="text" class="form-control form-control-mb" autocomplete="off" onkeyup="calculateBMI();" onkeypress="calculateBMI();" readonly id="hwBMI" name="hwBMI" placeholder="BMI">
								</div>
								<label class="col-md-2 col-form-label text-default"><b>Classification (BMI)</b></label>
								<div class="col-md-2">
									<input type="text" class=" form-control form-control-mb mb-1" placeholder="bmi" id="classbmi" name="classbmi">
									<input type="hidden" class=" form-control form-control-mb mb-1" placeholder="bmi" id="bmicat" name="bmicat">
								</div>

								<label class="col-md-2 col-form-label text-default"><b>Waist Circumference in centimeters</b></label>
								<div class="col-md-2">
									<input type="text" class="form-control form-control-mb" autocomplete="off"  id="hwWaist" name="hwWaist" placeholder="Waist Circumference"  onkeypress="calculateBMI();" onkeyup="calculateBMI();">
									<small class="text-muted">Centimenter</small>
								</div>

								<label class="col-md-2 col-form-label text-default"><b>Classification (WC)</b></label>
								<div class="col-md-2">
									<input type="text" class=" form-control form-control-mb mb-1" placeholder="Waist" id="classwaist" name="classwaist" onkeypress="calculateBMI();" onkeyup="calculateBMI();">
								</div>
								<div class="col-md-2">
									<label class="col-form-label text-default"><b>Blood Pressure (Systolic/Diastolic)</b></label>

								</div>
								<div class="col-md-1">
									<input type="text" class=" form-control form-control-mb mb-1" placeholder="Diastolic " id="bpdia" name="bpdia">
								</div>
								<div class="col-md-1">
									<input type="text" class=" form-control form-control-mb mb-1" placeholder="Systolic " id="bpsys" name="bpsys">
								</div>
								<label class="col-md-2 col-form-label text-default mb-1"><b>Cholesterol Level</b> mg/dL (milligrams per deciliter) </label>
								<div class="col-md-2">
									<select name="choles" id="choles" class="form-control form-control-mb">
										<option value="">Select</option>
										<option value="LOW">159 or lower </option>
										<option value="199">160-199 </option>
										<option value="239">200-239</option>
										<option value="279">240-279</option>
										<option value="HIG">280 or Higher </option>
										<option value="UN">Unaware</option>
									</select>
								</div>
							</div>
						</div>

						<div class="card-body">
							<div class="form-row">
								<div class="col-md-4">
									<div class="card card-accent-success">
										<div class="col-md-12">
											<input type="checkbox" id="smoke" name="smoke" value="N" class="">&nbsp;
											<label class="col-form-label text-default"><b>Smoking </b></label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="less_smoke" name="less_smoke" value="N" class="ssmoke">&nbsp;
											<label class="col-form-label text-default">Less than/Equal to 1 pack consumed per day </label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="more_smoke" name="more_smoke" value="N" class="ssmoke">&nbsp;
											<label class="col-form-label text-default">More than 1 pack consumed per day </label>
										</div>
										<label class="col-md-6 col-form-label text-default mb-1">Age started Smoking:</label>
										<div class="col-md-12">
											<input type="text" class="ssmoke form-control form-control-mb mb-1" placeholder="Age started Smoking" id="age_smoke" name="age_smoke">
										</div>
										<label class="col-md-6 col-form-label text-default mb-1"> Number of Years Smoking:</label>
										<div class="col-md-12">
											<input type="text" class="ssmoke form-control form-control-mb mb-1" placeholder="Number of Years Smoking" id="num_smoke" name="num_smoke">
										</div>
										<div class="col-md-12">
											<input type="checkbox" id="shs_smoke" name="shs_smoke" value="N" class="">&nbsp;
											<label class="col-form-label text-default"><b>Second Hand Smoke (SHS)</b></label>
										</div>
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="expshs_smoke" name="expshs_smoke" value="N" class="secsmoke">&nbsp;
											<label class="col-form-label text-default">With Exposure to SHS</label>
										</div>
										<label class="col-md-6 col-form-label text-default mb-1">Number of Years:</label>
										<div class="col-md-12">
											<input type="text" class="secsmoke  form-control form-control-mb mb-1" placeholder="Number of Year" id="numyear_smoke" name="numyear_smoke">
										</div>
										<hr class="bg-success">
										<div class="col-md-12">
											<input type="checkbox" id="family" name="family" value="N">&nbsp;
											<label class="col-form-label text-default"><b> Family History of CAD</b></label>
										</div>
										<div class="form-row">
											<div class="col-md-1"></div>
											<label class="col-md-3 col-form-label text-default mb-1">Family Member:</label>
											<div class="col-md-8">
												<input type="text" class="famm  form-control form-control-mb mb-1" placeholder="Family Member" id="fam_mem" name="fam_mem">
											</div>
										</div>
										<div class="form-row">										
											<div class="col-md-1"></div>
											<label class="col-md-3 col-form-label text-default mb-1">Type of CAD:</label>
											<div class="col-md-8">
												<input type="text" class="famm  form-control form-control-mb mb-1" placeholder="Type of CAD" id="fam_memtype" name="fam_memtype">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card card-accent-success">
										<div class="col-md-12">
											<input type="checkbox" id="physical_act" name="physical_act" value="N" class="">&nbsp;
											<label class="col-form-label text-default"><b>Physical Activity</b> </label>
										</div>

										<div class="form-row"> 
											<div class="col-md-1">
											</div>
											<div class="col-md-3">
												&nbsp;<label class="col-form-label text-default">Type:</label>
											</div>
											<div class="col-md-8">
												<input type="text" class="physactivity form-control form-control-mb mb-1" placeholder="Type of Activity" id="physical_act_type" name="physical_act_type">
											</div>
										</div>
										<div class="form-row"> 
											<div class="col-md-1">
											</div>
											<div class="col-md-3">
												&nbsp;<label class="col-form-label text-default">Minutes per Exercise Activity:</label>
											</div>
											<div class="col-md-8">
												<textarea type="text" class="physactivity form-control form-control-mb mb-1" id="physical_act_min" name="physical_act_min" placeholder="Minutes per Exercise Activity"> </textarea>
											</div>
										</div>
										<div class="form-row"> 
											<div class="col-md-1">
											</div>
											<div class="col-md-3">
												&nbsp;<label class="physactivity col-form-label text-default">Frequency:</label>
											</div>
											<div class="col-md-8">
												<select name="physical_act_freq" id="physical_act_freq" class="drinks form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>
										</div>
										<hr class="bg-success">
										<div class="col-md-12">
											<input type="checkbox" id="drink" name="drink" value="N" class="">&nbsp;
											<label class="col-form-label text-default"><b>Drinking of Alcoholic Beverage</b> </label>
										</div>

										<div class="form-row"> 
											<div class="col-md-1">
											</div>
											<div class="col-md-3">
												&nbsp;<label class="col-form-label text-default">Type:</label>
											</div>
											<div class="col-md-8">
												<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Type of Alcohol" id="drink_type" name="drink_type">
											</div>
										</div>

										<div class="form-row"> 
											<div class="col-md-1">
											</div>
											<div class="col-md-3">
												&nbsp;<label class="col-form-label text-default">Amount:</label>
											</div>
											<div class="col-md-8">
												<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Amount" id="drink_amount" name="drink_amount">
											</div>
										</div>

										<div class="form-row"> 
											<div class="col-md-1">
											</div>
											<div class="col-md-3">
												&nbsp;<label class="col-form-label text-default">Unit of Measure:</label>
											</div>
											<div class="col-md-8">
												<select name="unit" id="unit" class="drinks form-control form-control-mb">
													<option value="">Select</option>
													<option value="B">Bottle</option>
													<option value="G">Glass</option>
													<option value="S">Shot</option>
												</select>
											</div>
										</div>
										<div class="form-row"> 
											<div class="col-md-1">
											</div>
											<div class="col-md-3">
												&nbsp;<label class="col-form-label text-default">Frequency:</label>
											</div>
											<div class="col-md-8">
												<select name="alcohol_freq" id="alcohol_freq" class="drinks form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>
										</div>
										<label class="col-md-12 col-form-label text-default mb-1">Age started Drinking Alcohol:</label>
										<div class="col-md-12">
											<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Age started Drinking Alcohol" id="age_alcohol" name="age_alcohol">
										</div>
										<label class="col-md-12 col-form-label text-default mb-1"> Number of Years Drinking Alcohol:</label>
										<div class="col-md-12">
											<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Number of Years Drinking Alcohol" id="no_alcohol" name="no_alcohol">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card card-accent-success">
										<div class="col-md-12">
											<input type="checkbox" id="prev_diag" name="prev_diag" value="N">&nbsp;
											<label class="col-form-label text-default"><b> Previous Diagnosis</b></label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_1" name="prev_1" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> Chronic Coronary Heart Disease/ Ischemic Heart Disease</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_2" name="prev_2" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> Heart Attack/ Myocardial Infarction</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_3" name="prev_3" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> High Blood Pressure/ Hypertension</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_4" name="prev_4" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> Heart Rhythm Disorder</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_5" name="prev_5" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> Rheumatic Heart Disease</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_6" name="prev_6" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> Congenital Heart Disease</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_7" name="prev_7" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> Cardiomyopathy</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_8" name="prev_8" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> Chronic Obstructive Pulmonary Disease</label>
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_9" name="prev_9" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default">  Others, specify</label>
										</div>
										<div class="col-md-12">
											<input type="text" class="previousdiag form-control form-control-mb mb-1" placeholder="Others, specify" id="prev_other" name="prev_other">
										</div>
										<div class="col-md-12">
											&nbsp;<input type="checkbox" id="prev_10" name="prev_10" value="N" class="previousdiag">&nbsp;
											<label class="col-form-label text-default"> None</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12">
									<div class="card card-accent-success">
										<div class="col-md-12">
											&nbsp;<label class="col-form-label text-default"><b>Usual/ Typical Diet Intake </b></label>
										</div>
										<div class="form-row">
											<div class="col-md-4">
												&nbsp;&nbsp;&nbsp;<input type="checkbox" id="fish" name="fish" value="N" class="">&nbsp;
												<label class="col-form-label text-default">Fish, Meat, Poultry, Egg</label>
											</div>	
											<label class="col-md-1 col-form-label text-default">Specify</label>
											<div class="col-md-3">
												<input type="text" class="fishes form-control form-control-mb mb-1" placeholder="Specify" id="fish_specify" name="fish_specify">
											</div>	
											<label class="col-md-1 col-form-label text-default">Frequency</label>
											<div class="col-md-3">
												<select name="fish_freq" id="fish_freq" class="fishes form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>								
										</div>

										<div class="form-row">
											<div class="col-md-4">
												&nbsp;&nbsp;&nbsp;<input type="checkbox" id="rice" name="rice" value="N" class="">&nbsp;
												<label class="col-form-label text-default">Rice, Grains, Bread, Cereals, RootCrops</label>
											</div>	
											<label class="col-md-1 col-form-label text-default">Specify</label>
											<div class="col-md-3">
												<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="rice_specify" name="rice_specify">
											</div>	
											<label class="col-md-1 col-form-label text-default">Frequency</label>
											<div class="col-md-3">
												<select name="rice_freq" id="rice_freq" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>								
										</div>

										<div class="form-row">
											<div class="col-md-4">
												&nbsp;&nbsp;&nbsp;<input type="checkbox" id="fruits" name="fruits" value="N" class="">&nbsp;
												<label class="col-form-label text-default">Fruits/Vegetables</label>
											</div>	
											<label class="col-md-1 col-form-label text-default">Specify</label>
											<div class="col-md-3">
												<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="fruits_specify" name="fruits_specify">
											</div>	
											<label class="col-md-1 col-form-label text-default">Frequency</label>
											<div class="col-md-3">
												<select name="fruits_freq" id="fruits_freq" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>								
										</div>

										<div class="form-row">
											<div class="col-md-4">
												&nbsp;&nbsp;&nbsp;<input type="checkbox" id="fats" name="fats" value="N" class="">&nbsp;
												<label class="col-form-label text-default">Fats, Oils</label>
											</div>	
											<label class="col-md-1 col-form-label text-default">Specify</label>
											<div class="col-md-3">
												<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="fats_specify" name="fats_specify">
											</div>	
											<label class="col-md-1 col-form-label text-default">Frequency</label>
											<div class="col-md-3">
												<select name="fats_freq" id="fats_freq" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>								
										</div>

										<div class="form-row">
											<div class="col-md-4">
												&nbsp;&nbsp;&nbsp;<input type="checkbox" id="sugar" name="sugar" value="N" class="">&nbsp;
												<label class="col-form-label text-default">Sugar, Sweet</label>
											</div>	
											<label class="col-md-1 col-form-label text-default">Specify</label>
											<div class="col-md-3">
												<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="sugar_specify" name="sugar_specify">
											</div>	
											<label class="col-md-1 col-form-label text-default">Frequency</label>
											<div class="col-md-3">
												<select name="sugar_freq" id="sugar_freq" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>								
										</div>

										<div class="form-row">
											<div class="col-md-4">
												&nbsp;&nbsp;&nbsp;<input type="checkbox" id="milk" name="milk" value="N" class="">&nbsp;
												<label class="col-form-label text-default">Milk and Milk Products</label>
											</div>	
											<label class="col-md-1 col-form-label text-default">Specify</label>
											<div class="col-md-3">
												<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="milk_specify" name="milk_specify">
											</div>	
											<label class="col-md-1 col-form-label text-default">Frequency</label>
											<div class="col-md-3">
												<select name="milk_freq" id="milk_freq" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
												</select>
											</div>								
										</div>

										<div class="form-row">
											<div class="col-md-4">
												&nbsp;&nbsp;&nbsp;<input type="checkbox" id="usu_other" name="usu_other" value="N" class="">&nbsp;
												<label class="col-form-label text-default">Others</label>
											</div>	
											<label class="col-md-1 col-form-label text-default">Specify</label>
											<div class="col-md-3">
												<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify" id="usu_other_specify" name="usu_other_specify">
											</div>	
											<label class="col-md-1 col-form-label text-default">Frequency</label>
											<div class="col-md-3">
												<select name="other_freq" id="other_freq" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="D">Daily</option>
													<option value="W">Weekly</option>
													<option value="M">Monthly</option>
													<option value="Y">Yearly</option>
													<option value="Q">Quarterly</option>
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

			<!--step 3-->
			<div id="step-3" class="">
				<form id="form-step-3" role="form">
					<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="row">
								<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp Coronary Artery Disease Data</div>
							</div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<div class="col-md-12">
									<div class="card card-accent-success">
										<div class="col-md-12">
											<div class="form-row">
												<div class="col-md-1">
													<input type="checkbox" id="ref_from" name="ref_from" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Referred From</label>
												</div>

												<label class="col-md-2 col-form-label text-default mb-1">Name of Referring Health Facility:</label>
												<div class="col-md-3">
													<select name="selFac2" id="selFac2" class="hos form-control form-control-mb"></select>
												</div>
												<label class="col-md-2 col-form-label text-default mb-1">Doctor/Health Care Professional:</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" placeholder="Doctor/Health Care Professional" id="cad_doctor" name="cad_doctor">
												</div>

												<label class="col-md-2 col-form-label text-default mb-1">Reason for Referral:</label>
												<div class="col-md-4">
													<select name="reasonrefer" id="reasonrefer" class="form-control form-control-mb">
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
												<label class="col-md-2 col-form-label text-default mb-1">Chief Complaint:</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" placeholder="Chief Complaint" id="cad_chief" name="cad_chief">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card card-accent-success">
										<div class="col-md-12">
											<div class="form-row">
												<div class="h5 text-success col-md-12"> Presenting Symptoms
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="nausea" name="nausea" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Nausea</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="palpi" name="palpi" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Palpitations </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="cold" name="cold" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Cold Sweating (Diaphoresis)</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="backache" name="backache" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Backache</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="vomit" name="vomit" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Vomiting</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="ortho" name="ortho" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Orthopnea </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="edema" name="edema" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Edema</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="weak" name="weak" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Weakness</label>
												</div>

												<div class="col-md-3">
													<input type="checkbox" id="cough" name="cough" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Cough</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="short" name="short" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Shortness of breath </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="abdominal" name="abdominal" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Abdominal Pain</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="faint" name="faint" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Fainting</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="jaw" name="jaw" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Jaw Pain</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="chest" name="chest" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Chest Pain (Angina) </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="indigest" name="indigest" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Feeling of indigestion</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="cyan" name="cyan" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Cyanosis</label>
												</div>

												<div class="col-md-3">
													<input type="checkbox" id="dizzy" name="dizzy" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Dizziness</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="leftarm" name="leftarm" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Left Arm Numbness </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="easy" name="easy" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Easy Fatigability</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="none" name="none" value="N" class="">&nbsp;
													<label class="col-form-label text-default">None</label>
												</div>

												<div class="col-md-3">
													<input type="checkbox" id="anxiety" name="anxiety" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Anxiety</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="pall" name="pall" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Pallor </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="numb" name="numb" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Numbness</label>
												</div>
												<div class="col-md-1">
													<input type="checkbox" id="symp_other" name="symp_other" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Others,specify</label>
												</div>
												<div class="col-md-">
													<input type="text" placeholder="Specify" class="form-control form-control-mb mb-1" id="symp_otherspec" name="symp_otherspec">
												</div>
												<div class="h5 text-success col-md-12">
													<hr class="bg-success">
													&nbsp;Basis of Diagnosis
													<hr class="bg-success">
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="diag_pe" name="diag_pe" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Physical Examination</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="echocar" name="echocar" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Echocardiography </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="angio" name="angio" value="N" class="">&nbsp;
													<label class="col-form-label text-default">CT Angiography</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="corona" name="corona" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Coronary Angiogram </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="tread" name="tread" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Treadmill Stress Test or Exercise Stress Test</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="ctscan" name="ctscan" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Chest CT Scan</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="radio" name="radio" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Radionuclide Thallium Scan/Stress Test </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="electro" name="electro" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Electrocardiogram (ECG) </label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="bio" name="bio" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Biochemical Cardiac Markers (CK-MB, Troponin)</label>
												</div>

												<div class="col-md-3">
													<input type="checkbox" id="xray" name="xray" value="N" class="">&nbsp;
													<label class="col-form-label text-default"> Chest X-ray</label>
												</div>
												<div class="col-md-3">
													<input type="checkbox" id="holter" name="holter" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Holter Monitoring </label>
												</div>
												<div class="col-md-1">
													<input type="checkbox" id="diag_other" name="diag_other" value="N" class="">&nbsp;
													<label class="col-form-label text-default">Others,specify</label>
												</div>
												<div class="col-md-2">
													<input type="text" class="form-control form-control-mb mb-1" placeholder="Specify" id="diag_other_spec" name="diag_other_spec">
												</div>
												<div class="col-md-12">
													<hr class="bg-success">
												</div>
												<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis: ICD-10 Code</label>
												<div class="col-md-4" align="center">
													<select  multiple   name = "diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" required="" disabled=""> 
													</select>
												</div>
												<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Patient Status:</label>
												<div class="col-md-4">
													<select name="pat_status" id="pat_status" class="form-control form-control-mb" disabled="">
														<option value="">Select</option>
														<option value="RE">Recovered</option>
														<option value="IM">Improved</option>
														<option value="UN">Unimproved</option>
														<option value="DI">Died</option>
													</select>
												</div>
												<label class="col-md-2 col-form-label text-default mb-1"> Treatment Given</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" placeholder="Treatment Given" id="treat_give" name="treat_give">
												</div>
												<label class="col-md-2 col-form-label text-default mb-1"> If died, underlying Cause of Death: ICD10 Code</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" readonly="" id="causeofdeath" name="causeofdeath">
												</div>


												<label class="col-md-2 col-form-label text-default mb-1"> Date of Death</label>
												<div class="col-md-4">
													<input type="datetime-local" class="form-control form-control-mb mb-1" id="datedeath" name="datedeath" readonly="">
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

												<label class="col-md-2 col-form-label text-default mb-1">Place of Death</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" id="placedeath" name="placedeath" readonly="">
												</div>


												<label class="col-md-2 col-form-label text-default mb-1">If Transferred, Name of Health Facility</label>
												<div class="col-md-4">
													<select name="selFac3" id="selFac3" class="form-control form-control-mb"></select>
												</div>

												<label class="col-md-2 col-form-label text-default mb-1">Reason for Referral</label>
												<div class="col-md-4">
													<select name="deathreason_refer" id="deathreason_refer" class="form-control form-control-mb">
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
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

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
		</form>
	</div>