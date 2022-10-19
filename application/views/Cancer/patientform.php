<input name="module" id="module" type="hidden" value="cancer">
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
			<a href="#step-3"><i class="fa fa-file fa-2x"></i><br><small>Cancer Data</small></a>
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
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Cancer Registration Form</h4>
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
								<input type="hidden" class="form-control form-control-mb" autocomplete="off" id="bmicat" name="bmicat">
							</div>
							<label class="col-md-2 col-form-label text-default"><b>Classification (BMI)</b></label>
							<div class="col-md-2">
								<input type="text" readonly="" class=" form-control form-control-mb mb-1" placeholder="bmi" id="classbmi" name="classbmi">
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
							<div class="col-md-4">
								<input type="checkbox" id="smoke" name="smoke" value="Y" class="">&nbsp;
								<input type="hidden" id="final_smoke" name="final_smoke">&nbsp;
								<label class="col-form-label text-default"><b>Smoking </b></label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="drink" name="drink" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Drinking of Alcoholic Beverage</b> </label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="physical_act" name="physical_act" value="N" class="psyact">&nbsp;
								<label class="col-form-label text-default"><b>Physical Activity</b> </label>
							</div>
							<div class="col-md-4">
								&nbsp;<input type="checkbox" id="less_smoke" name="less_smoke" value="Y" class="ssmoke">&nbsp;
								<label class="col-form-label text-default">Less than/Equal to 1 pack consumed per day </label>
							</div>
							<label class="col-md-2 col-form-label  text-default mb-1">Type :</label>
							<div class="col-md-2">
								<input type="text" class="drinks form-control form-control-mb mb-1" placeholder="Type" id="drink_type" name="drink_type">
							</div>
							<label class="col-md-2 col-form-label  text-default mb-1">Type :</label>
							<div class="col-md-2">
								<input type="text" class="physactivity form-control form-control-mb mb-1" placeholder="Type" id="physical_act_type" name="physical_act_type">
							</div>
							<div class="col-md-4">
								&nbsp;<input type="checkbox" id="more_smoke" name="more_smoke" value="N" class="ssmoke">&nbsp;
								<label class="col-form-label text-default">More than 1 pack consumed per day </label>
							</div>

							<label class="col-md-2 col-form-label text-default text-align center">Amount:</label>
							<div class="col-md-2">
								<input type="number" class="drinks form-control form-control-mb mb-1" placeholder="Amount" id="drink_amount" name="drink_amount">
							</div>
							<label class="col-md-2 col-form-label text-default text-align center">Minutes per Exercise:</label>
							<div class="col-md-2">
								<input type="text" class="physactivity form-control form-control-mb mb-1" id="physical_act_min" placeholder="Minutes per Exercise" name="physical_act_min">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Age started Smoking:</label>
							<div class="col-md-2">
								<input type="number" class="ssmoke form-control form-control-mb mb-1" placeholder="Age started Smoking" id="age_smoke" name="age_smoke">
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
							<label class="col-md-2 col-form-label text-default mb-1"> Number of Years Smoking:</label>
							<div class="col-md-2">
								<input type="number" class="ssmoke form-control form-control-mb mb-1" placeholder="Number of Years Smoking" id="num_smoke" name="num_smoke">
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
								<input type="checkbox" id="family" name="family" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Family History/Cancer</b> </label>
							</div>
							<div class="col-md-4">
								<input type="checkbox" id="shs_smoke" name="shs_smoke" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Second Hand Smoke (SHS)</b></label>

							</div>
							<label class="col-md-2 col-form-label text-default mb-1">No. of Years drinking alcohol:</label>
							<div class="col-md-2">
								<input type="number" class="drinks form-control form-control-mb mb-1" placeholder="No. of Years " id="no_alcohol" name="no_alcohol">
							</div>
							<label class="col-md-2 col-form-label text-default text-align center">Family Member</label>
							<div class="col-md-2">
								<input type="text" class="famm form-control form-control-mb mb-1" placeholder="Family Member" id="fam_mem" name="fam_mem">
							</div>
							<div class="col-md-4">
								&nbsp;&nbsp;&nbsp;<input type="checkbox" id="expshs_smoke" name="expshs_smoke" value="N" class="secsmoke">&nbsp;
								<label class="col-form-label text-default">With Exposure to SHS</label>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Age started drinking alcohol:</label>
							<div class="col-md-2">
								<input type="number" class="drinks form-control form-control-mb mb-1" placeholder="Age" id="age_alcohol" name="age_alcohol">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Type of Cancer:</label>
							<div class="col-md-2">
								<input type="text" class="famm form-control form-control-mb mb-1" placeholder="Type of Cancer" id="fam_memtype" name="fam_memtype">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Number of Years:</label>
							<div class="col-md-2">
								<input type="number" class="secsmoke  form-control form-control-mb mb-1" placeholder="Number of Year" id="numyear_smoke" name="numyear_smoke">
							</div>
							<div class="h5 text-success col-md-12">
								<hr class="bg-success">
								&nbsp;<b>Usual/Typical Diet Intake</b>
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
							</div>
							<div class="col-md-6">
								<input type="checkbox" id="reg_bow" name="reg_bow" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Regulatory of Bowel Movement</b> </label>
							</div>
							<div class="col-md-6">
								<input type="checkbox" id="chem_exp" name="chem_exp" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Chemical Exposure</b> </label>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Frequency</label>
							<div class="col-md-2">
								<select name="reg_bow_freq" id="reg_bow_freq" class=" form-control form-control-mb">
									<option value="">Select</option>
									<option value="OD">Once a day</option>
									<option value="TD">Twice a day</option>
									<option value="OT">Others</option>
								</select>
							</div>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="Others" id="reg_bow_oth" name="reg_bow_oth">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Type/s of Chemical</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Type/s of Chemical " id="type_chem" name="type_chem">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>Number of sexual partners</b></label>
							<div class="col-md-4">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="Number of sexual partners " id="sex_pat" name="sex_pat">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Length of Exposure</label>
							<div class="col-md-4">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="Length of Exposure " id="leng_exp" name="leng_exp">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>Early Age of Sexual Intercourse</b></label>
							<div class="col-md-4">
								<select name="early_sex_freq" id="early_sex_freq" class=" form-control form-control-mb">
									<option value="">Select</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="use_contra" name="use_contra" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Use of contraceptive, specify</b> </label>
							</div>
							<div class="col-md-4">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify " id="use_contra_spec" name="use_contra_spec">
							</div>
							<div class="col-md-2">
								&nbsp;<input type="checkbox" id="pulmon_indoor" name="pulmon_indoor" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Indoor Air Pollution</b></label>
							</div>
							<div class="col-md-4">
								<input type="text" class="indoor form-control form-control-mb mb-1" placeholder="Type of Indoor Air Pollutant" id="pulmon_indoorpollut" name="pulmon_indoorpollut">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>No. of years used</b></label>
							<div class="col-md-4">
								<input type="number" class=" form-control form-control-mb mb-1" placeholder="No. of years used " id="no_early" name="no_early">
							</div>
							<div class="col-md-2">
								&nbsp;<input type="checkbox" id="pulmon_outdoor" name="pulmon_outdoor" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Outdoor Air Pollution</b></label>
							</div>
							<div class="col-md-4">
								<input type="text" class="outdoor form-control form-control-mb mb-1" placeholder="Type of Outdoor Air Pollutant" id="pulmon_outdoorpollut" name="pulmon_outdoorpollut">
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="occup_exp" name="occup_exp" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Occupational Exposure</b> </label>
							</div>
							<div class="col-md-2">
								<select name="occup_detail" id="occup_detail" class="occup form-control form-control-mb">
									<option value="">Select</option>
									<option value="CD">Cement Dust</option>
									<option value="CO">Cotton</option>
									<option value="ME">Metal</option>
									<option value="PA">Paper Mill</option>
									<option value="SI">Silica</option>
									<option value="GR">Grains</option>
									<option value="OT">Others, specify</option>
								</select>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="occup_others" name="occup_others">
							</div>
							<div class="h5 text-success col-md-12">
								<hr class="bg-success">
								&nbsp;<b>Infections (if applicable)</b>
								<hr class="bg-success">
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="infect1" name="infect1" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Human Papilloma Virus Infection</b> </label>
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">Year Examined/Dx:</label>
							<div class="col-md-1">
								<input type="number" class=" form-control form-control-mb mb-1" placeholder="Year Examined/Dx " id="infect_1" name="infect_1">
							</div>

							<div class="col-md-2">
								<input type="checkbox" id="infect2" name="infect2" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Helicobacter Pylori Infection</b> </label>
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">Year Examined/Dx:</label>
							<div class="col-md-1">
								<input type="number" class=" form-control form-control-mb mb-1" placeholder="Year Examined/Dx " id="infect_2" name="infect_2">
							</div>

							<div class="col-md-2">
								<input type="checkbox" id="infect3" name="infect3" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Hepatitis B Virus Infection</b> </label>
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">Year Examined/Dx:</label>
							<div class="col-md-1">
								<input type="number" class=" form-control form-control-mb mb-1" placeholder="Year Examined/Dx " id="infect_3" name="infect_3">
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="infect4" name="infect4" value="N" class="">&nbsp;
								<label class="col-form-label text-default"><b>Others, specify</b> </label>
							</div>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" placeholder="Specify " id="infect4_oth" name="infect4_oth">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">Year Examined/Dx:</label>
							<div class="col-md-1">
								<input type="number" class=" form-control form-control-mb mb-1" placeholder="Year Examined/Dx " id="infect_4" name="infect_4">
							</div>

						</div>
					</div>
				</div>
			</form>
		</div>

		<!--step 3-->
		<div id="step-3" class="">
			<form id="form-step-3" role="form">
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp Cancer DATA</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-1">
								<input type="checkbox" id="ref_from" name="ref_from" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1"> Referred From:</label>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1"> Name of Referring Health Facility/Doctor/Health Care Professional :</label>
							<div class="col-md-2">
								<select name="selFac2" id="selFac2" class="hos form-control form-control-mb"></select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Reason for Referral:</label>
							<div class="col-md-4">
								<select name="copd_reasonrefer" id="copd_reasonrefer" class="form-control form-control-mb">
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
								<input type="text" placeholder="Chief Complaint" class="form-control form-control-mb mb-1" id="chief_complain" name="chief_complain">
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Multiple Primaries:</label>
							<div class="col-md-4">
								<select name="mult_prime" id="mult_prime" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
								<div class="h5 text-success">&nbsp;Most Valid Basis of Diagnosis</div>
								<hr class="bg-success">
							</div>
							<div class="col-md-2">
								<input type="radio" id="most_valid" name="most_valid" value="Y" class="">&nbsp;
								<label class="col-form-label text-default mb-1"><b>Non-Microscopic:</b></label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="nonmicro_1" name="nonmicro_1" value="N" class="nonmicro">&nbsp;
								<label class="col-form-label text-default mb-1"> Death Certificates Only</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="nonmicro_2" name="nonmicro_2" value="N" class="nonmicro">&nbsp;
								<label class="col-form-label text-default mb-1">Clinical Investigation</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="nonmicro_3" name="nonmicro_3" value="N" class="nonmicro">&nbsp;
								<label class="col-form-label text-default mb-1">Clinical Only</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="nonmicro_4" name="nonmicro_4" value="N" class="nonmicro">&nbsp;
								<label class="col-form-label text-default mb-1">Specific Tumor Makers</label>
							</div>
							<div class="col-md-2">
								<input type="radio" id="most_valid" name="most_valid" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1"><b>Microscopic:</b></label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="micro_1" name="micro_1" value="N" class="micro">&nbsp;
								<label class="col-form-label text-default mb-1"> Cytology or Hemotology</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="micro_2" name="micro_2" value="N" class="micro">&nbsp;
								<label class="col-form-label text-default mb-1">Histology of Metastasis</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="micro_3" name="micro_3" value="N" class="micro">&nbsp;
								<label class="col-form-label text-default mb-1">Histology of Primary</label>
							</div>
							<div class="col-md-2">
								<input type="radio" id="most_valid" name="most_valid" value="U" class="">&nbsp;
								<label class="col-form-label text-default mb-1"><b>Unknown</b></label>
							</div>
							<hr class="bg-success">
							<div class="h5 text-success col-md-12">
								<hr class="bg-success">
								&nbsp; <b>Primary Sites</b>
								<hr class="bg-success">
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_1" name="prima_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Colon</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_2" name="prima_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Brain</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_3" name="prima_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Thyroid</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_4" name="prima_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Uterine Cervix</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_5" name="prima_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Liver</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_6" name="prima_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Corpus Uteri</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_7" name="prima_7" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Breast</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_8" name="prima_8" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Blood</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_9" name="prima_9" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Ovary</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_10" name="prima_10" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Lung</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_11" name="prima_11" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Esophagus</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_12" name="prima_12" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Kidney</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_13" name="prima_13" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Oral Cavity</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_14" name="prima_14" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Stomach</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_15" name="prima_15" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Pancreas</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_16" name="prima_16" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Skin</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_17" name="prima_17" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Nasopharynx</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_18" name="prima_18" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Testes</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_19" name="prima_19" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Prostate</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_20" name="prima_20" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Rectum</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_21" name="prima_21" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Bladder</label>
							</div>
							<div class="col-md-1">
								<select name="prima21" id="prima21" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="U">Urinary</option>
									<option value="G">Gall</option>
								</select>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="prima_22" name="prima_22" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Others, specify</label>
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="prima_22_oth" name="prima_22_oth">
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>Laterality</b></label>
							<div class="col-md-4">
								<select name="lateral" id="lateral" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="LE">Left</option>
									<option value="BI">Bilateral</option>
									<option value="RI">Right</option>
									<option value="MI">Mid</option>
									<option value="NS">Not Stated</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>Histology (Morphology)</b></label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="histo" name="histo">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>TNM System</b></label>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="t" name="t" placeholder="T">
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb " id="n" name="n" placeholder="N">
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="m" name="m" placeholder="M">
							</div>
							<div class="col-md-7"></div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>Staging</b></label>
							<div class="col-md-1">
								<input type="checkbox" id="stag_1" name="stag_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">In-Situ</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="stag_2" name="stag_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Localized</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="stag_3" name="stag_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Direct Extension</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="stag_5" name="stag_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">3+4</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="stag_6" name="stag_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Distant Metastasis</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="stag_4" name="stag_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Regional Lymph Node</label>
							</div>

							<div class="col-md-1">
								<input type="checkbox" id="stag_7" name="stag_7" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Unknown</label>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>Sites of Distant Metastasis</b></label>
							<div class="col-md-1">
								<input type="checkbox" id="site_1" name="site_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">None</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="site_3" name="site_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Bone</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="site_4" name="site_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Liver</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="site_5" name="site_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Lung(Pleura)</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="site_6" name="site_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Brain</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="site_7" name="site_7" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Ovary</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="site_8" name="site_8" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Skin</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="site_2" name="site_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Distant Lymph Nodes</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="site_9" name="site_9" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Other</label>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-1">
								<input type="checkbox" id="site_10" name="site_10" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Unknown</label>
							</div>
							<div class="col-md-9"></div>
							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis:</label>
							<div class="col-md-4">
								<select  multiple  disabled="" name = "diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" required="">				
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"><b>Treatment Purpose:</b></label>
							<div class="col-md-4">
								<select name="treat_1" id="treat_1" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="A">Curative - complete</option>
									<option value="B">Curative - incomplete</option>
									<option value="C">Palliative only</option>
									<option value="O">Other</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Others, specify:</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="treat_other_spec" name="treat_other_spec">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Primary Treatment given in this Hospital</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="prim_hos" name="prim_hos">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" id="prim_hos_1" name="prim_hos_1">
							</div>
							<div class="col-md-6">
								
							</div>
							<label class="col-md-4 col-form-label text-default mb-1"><b> Planned Additional/Adjuvant Treatment/s actually received in this Hospital </b></label>
							<div class="col-md-1">
								<input type="checkbox" id="plan_1" name="plan_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Surgery</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="plan_2" name="plan_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Radiotherapy</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="plan_3" name="plan_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Chemotherapy</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="plan_4" name="plan_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Immunotherapy/Cryptherapy</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="plan_5" name="plan_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Hormonal</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="plan_6" name="plan_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Unknown</label>
							</div>
							<label class="col-md-4 col-form-label text-default mb-1"></label>
							<div class="col-md-1">
								<input type="checkbox" id="plan_other" name="plan_other" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Others, specify</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="plan_other_spec" name="plan_other_spec">
							</div>
							<label class="col-md-4 col-form-label text-default mb-1"><b> Additional/Adjuvant Treatment/s </b></label>
							<div class="col-md-1">
								<input type="checkbox" id="add_1" name="add_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Surgery</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="add_2" name="add_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Radiotherapy</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="add_3" name="add_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Chemotherapy</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="add_4" name="add_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Immunotherapy/Cryptherapy</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="add_5" name="add_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Hormonal</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="add_6" name="add_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Unknown</label>
							</div>
							<label class="col-md-4 col-form-label text-default mb-1"></label>
							<div class="col-md-1">
								<input type="checkbox" id="add_other" name="add_other" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Others, specify</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="add_other_spec" name="add_other_spec">
							</div>
							<label class="col-md-4 col-form-label text-default mb-1"><b> Treatment/s received in other Hospital </b></label>
							<div class="col-md-1">
								<input type="checkbox" id="treathos_1" name="treathos_1" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Surgery</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="treathos_2" name="treathos_2" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Radiotherapy</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="treathos_3" name="treathos_3" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Chemotherapy</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="treathos_4" name="treathos_4" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Immunotherapy/Cryptherapy</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="treathos_5" name="treathos_5" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Hormonal</label>
							</div>
							<div class="col-md-1">
								<input type="checkbox" id="treathos_6" name="treathos_6" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Unknown</label>
							</div>
							<label class="col-md-4 col-form-label text-default mb-1"></label>
							<div class="col-md-1">
								<input type="checkbox" id="treathos_other" name="treathos_other" value="N" class="">&nbsp;
								<label class="col-form-label text-default mb-1">Others, specify</label>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="treathos_other_spec" name="treathos_other_spec">
							</div>
							<div class="col-md-12">
								<hr class="bg-success">
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
							<div class="col-md-6">
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
		<!--end of Cancer DATA-->

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
	</form>
</div>