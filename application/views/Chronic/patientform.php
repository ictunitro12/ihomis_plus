<input name="module" id="module" type="hidden" value="chronic">
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
			<a href="#step-3"><i class="fa fa-head-side-cough fa-2x"></i><br><small> COPD Data</small></a>
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
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Chronic Obstructive Pulmonary Disease Registration Form</h4>
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
												<input type="text" class="form-control form-control-mb" id="info_race_oth" name="info_race_oth" placeholder="Others, specify" disabled="true">
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
												<input type="text" class="form-control form-control-mb" id="info_ethnic_oth" name="info_ethnic_oth" placeholder="Others, specify" disabled="true">
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
							<!--body-->
						</div>
					</div>
				</div>
			</form>
		</div>

		<!-- step-2-->

		<div id="step-2" class="">
			<form id="form-step-2" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!
				</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp Patient History</div>
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
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="col-md-12">
										<input type="checkbox" id="occup_exp" name="occup_exp" value="N" class="">&nbsp;
										<label class="col-form-label text-default"><b>Occupational Exposure</b> </label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="occup_cement" name="occup_cement" value="N" class="occup">&nbsp;
										<label class="col-form-label text-default">Cement</label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="occup_cotton" name="occup_cotton" value="N" class="occup">&nbsp;
										<label class="col-form-label text-default">Cotton</label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="occup_grains" name="occup_grains" value="N" class="occup">&nbsp;
										<label class="col-form-label text-default">Grains</label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="occup_metal" name="occup_metal" value="N" class="occup">&nbsp;
										<label class="col-form-label text-default">Metal</label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="occup_paper" name="occup_paper" value="N" class="occup">&nbsp;
										<label class="col-form-label text-default">Paper Mill</label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="occup_silica" name="occup_silica" value="N" class="occup">&nbsp;
										<label class="col-form-label text-default">Silica</label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="occup_oth" name="occup_oth" value="N" class="occup">&nbsp;
										<label class="col-form-label text-default">Others, specify</label>
									</div>
									<div class="col-md-12">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="occup_others" name="occup_others">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="col-md-12">
										<input type="checkbox" id="pulmon_infec" name="pulmon_infec" value="N" class="">&nbsp;
										<label class="col-form-label text-default"><b>Pulmonary Infections</b></label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="pulmon_tb" name="pulmon_tb" value="N" class="pulmon">&nbsp;
										<label class="col-form-label text-default">TB</label>
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="pulmon_oth" name="pulmon_oth" value="N" class="pulmon">&nbsp;
										<label class="col-form-label text-default">Others,specify</label>
									</div>

									<div class="col-md-12">
										<input type="text" class="form-control form-control-mb mb-1" id="pulmon_others" name="pulmon_others" placeholder="Others, Specify">
									</div>
									<br>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="pulmon_indoor" name="pulmon_indoor" value="N" class="">&nbsp;
										<label class="col-form-label text-default">Indoor Air Pollution</label>
									</div>
									<div class="col-md-12">
										<input type="text" class="indoor form-control form-control-mb mb-1" placeholder="Type of Indoor Air Pollutant" id="pulmon_indoorpollut" name="pulmon_indoorpollut">
									</div>
									<div class="col-md-12">
										&nbsp;<input type="checkbox" id="pulmon_outdoor" name="pulmon_outdoor" value="N" class="">&nbsp;
										<label class="col-form-label text-default">Outdoor Air Pollution</label>
									</div>
									<div class="col-md-12">
										<input type="text" class="outdoor form-control form-control-mb mb-1" placeholder="Type of Outdoor Air Pollutant" id="pulmon_outdoorpollut" name="pulmon_outdoorpollut">
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
							<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp COPD Data</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="col-md-12">
								<div class="card card-accent-success">
									<div class="col-md-12">
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Type of COPD :</label>
											<div class="col-md-2">
												<select name="copd_type" id="copd_type" class="form-control form-control-mb">
													<option value="">Select</option>
													<option value="EMPHY">Emphysema</option>
													<option value="CBRON">Chronic Bronchitis</option>
													<option value="OTHER">Others</option>
												</select>
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Specify" id="copd_type_others" name="copd_type_others">
											</div>
											<div class="col-md-6">									
											</div>

											<div class="col-md-2">
												&nbsp;<input type="checkbox" id="ref_from" name="ref_from" value="N"> &nbsp;
												<label class=" col-form-label text-default mb-2">Referred From:</label>
											</div>
											<div class="col-md-4">
												<select name="selFac2" id="selFac2" class="hos form-control form-control-mb"></select>
											</div>

											<label class="col-md-2 col-form-label text-default mb-1">Reason for Referral:</label>
											<div class="col-md-4">
												<select name="copd_reasonrefer" id="copd_reasonrefer" class="form-control form-control-mb" disabled="">
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
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="col-md-12 h5 text-success"><i class="fa fa-asterisk text-danger"></i>&nbsp;Signs and Symptoms
									</div>
									<div class="form-row">
										<div class="col-md-6">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="signs_dyspnea" name="signs_dyspnea" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Dyspnea</label>
										</div>
										<div class="col-md-6">
											&nbsp;<input type="checkbox" id="signs_wheez" name="signs_wheez" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Wheezing</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="signs_hemo" name="signs_hemo" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Hemoptysis</label>
										</div>
										<div class="col-md-6">
											&nbsp;<input type="checkbox" id="signs_cyanosis" name="signs_cyanosis" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Cyanosis</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="signs_sputum" name="signs_sputum" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Increase in Sputum Production</label>
										</div>
										<div class="col-md-6">
											&nbsp;<input type="checkbox" id="signs_chest" name="signs_chest" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Chest Tightness</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="signs_chronic" name="signs_chronic" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Chronic Cough</label>
										</div>
										<div class="col-md-6">
											&nbsp;<input type="checkbox" id="signs_freqinfec" name="signs_freqinfec" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Frequent Chest Infections</label>
										</div>
									</div>	
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="signs_fingers" name="signs_fingers" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Clubbing of Fingers</label>
										</div>
									</div>	
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="signs_others" name="signs_others" value="N" class="">&nbsp;
											<label class="col-form-label text-default">Others, specify</label>&nbsp;
										</div>
										<div class="col-md-12">
											<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="copd_sign_others" name="copd_sign_others">
										</div>
									</div>	
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="col-md-12 h5 text-success"><i class="fa fa-asterisk text-danger"></i>&nbsp;Status of Severity
									</div>
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="severe_atrisk" name="severe_atrisk" value="N" class="severity">&nbsp;
											<label class="col-form-label text-default">At Risk</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="severe_mild" name="severe_mild" value="N" class="severity">&nbsp;
											<label class="col-form-label text-default">Mild COPD (FEV>=80%)</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="severe_moderate" name="severe_moderate" value="N" class="severity">&nbsp;
											<label class="col-form-label text-default">Moderate COPD (FEV>=50% but <80% predicted)</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="severe_severe" name="severe_severe" value="N" class="severity">&nbsp;
											<label class="col-form-label text-default">Severe COPD (FEV>=30% but 50% predicted)</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="severe_very_severe" name="severe_very_severe" value="N" class="severity">&nbsp;
											<label class="col-form-label text-default">Very Severe COPD (FEV>=50% with Respiratory Failure or Critical</label>
										</div>
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<label> Signs of Right Heart Failure)</label>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="severe_unkn" name="severe_unkn" value="N" class="severity">&nbsp;
											<label class="col-form-label text-default">Unknown</label>
										</div>
									</div>
									<br>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card card-accent-success">
									<div class="col-md-12 h5 text-success"><i class="fa fa-asterisk text-danger"></i>&nbsp;Treatment
									</div>
									<div class="form-row">
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="treat_muco" name="treat_muco" value="N" >&nbsp;
											<label class="col-form-label text-default">Mucolytics</label>
										</div>
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="treat_antibio" name="treat_antibio" value="N" >&nbsp;
											<label class="col-form-label text-default">Antibiotics</label>
										</div>

										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="treat_combi" name="treat_combi" value="N" >&nbsp;
											<label class="col-form-label text-default">Combination Corticosceroids-long Acting Beta 2- agonis</label>
										</div>
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="treat_bronc" name="treat_bronc" value="N" >&nbsp;
											<label class="col-form-label text-default">Bronchodilator</label>
										</div>
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="treat_corti" name="treat_corti" value="N" >&nbsp;
											<label class="col-form-label text-default">Corticosteroids</label>
										</div>
										<div class="col-md-12">
											&nbsp;&nbsp;&nbsp;<input type="checkbox" id="treat_others" name="treat_others" value="N" >&nbsp;
											<label class="col-form-label text-default">Others, specify</label>&nbsp;
										</div>
										<div class="col-md-12">
											<input type="text" class="form-control form-control-mb mb-1" placeholder="Others, specify" id="copd_treat_others" name="copd_treat_others">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card card-accent-success">
									<div class="col-md-12">
										<div class="form-row">
											<label class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis: POST BRONCHODILATOR FEV/FVC <70%</label>
											<div class="col-md-7">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Final Diagnosis" id="spiromet" name="spiromet" readonly="">
											</div>
											<label class="col-md-1 col-form-label text-default mb-1"> (Spirometry)</label>

											<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Final Diagnosis: ICD-10 Code</label>
											<div class="col-md-4">
												<select  multiple   name = "diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" required="" disabled="">				
												</select>
											</div>

											<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Patient Status:</label>
											<div class="col-md-4">
												<select name="pat_status" id="pat_status" class="form-control form-control-mb" disabled="">
													<option value="">Please Select</option>
													<option value="RE">Recovered</option>
													<option value="IM">Improved</option>
													<option value="UN">Unimproved</option>
													<option value="DI">Died</option>
												</select>
											</div>
										</div>
										<div class="form-row">
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
										<div class="form-row">	
											<label class="col-md-2 col-form-label text-default mb-1"> If died, underlying Cause of Death</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="underly_cause" name="underly_cause" placeholder="If died, underlying Cause of Death" readonly="">
											</div>										
											<label class="col-md-2 col-form-label text-default mb-1"> If died, underlying Cause of Death:ICD10 Code</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="underly_cause_icd" name="underly_cause_icd" placeholder="If died, underlying Cause of Death" readonly="">								
											</div>
											<label class="col-md-2 col-form-label text-default mb-1"> Date of Death</label>
											<div class="col-md-4">
												<input type="datetime-local" class="form-control form-control-mb mb-1" id="datedeath" name="datedeath" readonly="" >
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

	<script src="<?php echo base_url() ?>assets/scripts/chronic/chronic_validation.js"></script>

