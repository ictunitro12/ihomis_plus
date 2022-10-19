<input name="module" id="module" type="hidden" value="measles">
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

<div id="smartwizard">

	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br><small>General Data</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-history fa-2x"></i><br><small>Patient History</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fa fa-file-o fa-2x"></i><br><small>Clinical Data</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-medkit fa-2x"></i><br><small>Vaccination History and Vitamin A Supplementation</small></a>
		</li>
		<li>
			<a href="#step-5"><i class="fa fa-file fa-2x"></i><br><small>Exposure History</small></a>
		</li>
		<li>
			<a href="#step-6"><i class="fa fa-flask fa-2x"></i><br><small>Laboratory Test</small></a>
		</li>
	</ul>
	<button type="button" id="search" class="btn btn-success btn-ladda  float-right"> <i class="fa fa-search"></i> </button>
	<div>
		<!--step 1-->
		<div id="step-1">
			<form id="form-step-1">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6">
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Measles Patient Registration Form</h4>
							</div>
							<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly>
							<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly>
							<!-- <div class="col-md-6">
								<button name="submit" type="submit" class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
									<i class="fa fa-save"></i>
								</button>
							</div> -->
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
											<div class="col-md-2 col-form-label  text-default mb-1">Hospital Patient ID No.:</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
											</div>
											<div class="col-md-2 col-form-label  text-default mb-1">Hospital Registry No.:</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2 col-form-label  text-default mb-1">Hospital Case No.:</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno" readonly="">
											</div>
											<div class="col-md-2 col-form-label  text-default mb-1">
												Name of DRU:
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac" readonly="">
												<input type="hidden" class="form-control form-control-mb mb-1" placeholder="patient id" id="patient_id" name="patient_id">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2 col-form-label text-default mb-1">
												Fullname:
											</div>
											<div class="col-md-10">
												<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_fullname" name="info_fullname" placeholder="Last name,First name,Middle name">
											</div>
											<div class="col-md-2 col-form-label text-default mb-1">Lastname:</div>
											<div class="col-md-10">
												<input type="text" readonly="" class=" form-control form-control-mb mb-1" autocomplete="off" onchange="fullname();" id="info_lname" name="info_lname" placeholder="Last name">
											</div>
											<div class="col-md-2 col-form-label text-default mb-1">Firstname:</div>
											<div class="col-md-10">
												<input type="text" readonly="" class="form-control form-control-mb mb-1" onchange="fullname();" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name">
											</div>
											<div class="col-md-2 col-form-label text-default mb-1">Middlename:</div>
											<div class="col-md-10">
												<input type="text" readonly="" class="form-control form-control-mb mb-1" onchange="fullname();" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name">
											</div>

											<div class="col-md-2 col-form-label text-default mb-1">Sex:</div>
											<div class="col-md-4">
												<input type="text" class=" form-control form-control-mb mb-1" autocomplete="off" id="info_sex" name="info_sex" placeholder="Sex" readonly>
												<!-- <select name="info_sex" id="info_sex" class="form-control form-control-mb mb-1" disabled>
									<option value="">Select</option>
									<option value="MALE">Male</option>
									<option value="FEMALE">Female</option>
								</select> -->
											</div>
											<div class="col-md-2 col-form-label  text-default mb-1">Birth Date:</div>
											<div class="col-md-4">
												<input type="datetime-local" class="form-control form-control-mb" readonly="" name="info_dob" id="info_dob">
											</div>
											<div class=" col-md-2 col-form-label  text-default mb-1">Age:</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_age" name="info_age" placeholder="Age">
											</div>
											<div class="col-md-2 col-form-label text-default mb-1">Civil Status :</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_cs" name="info_cs" placeholder="Civil Status">
											</div>
											<!-- <div class="col-md-1">
												<input type="text" class="form-control form-control-mb" id="info_year" name="info_year"  value="" readonly>
											</div>
											<label class="col-md-1 col-form-label  text-default mb-1">Month:</label>
											<div class="col-md-1">
											<input type="text" class="form-control form-control-mb" id="info_month" name="info_month"  value=""readonly >
											</div>
											<div class="col-md-1 col-form-label  text-default mb-1">Days:</div>
											<div class="col-md-1">
												<input type="text" class="form-control form-control-mb" id="info_day" name="info_day"  value="" readonly>
												</div>	 -->
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-2 col-form-label text-default">Place of birth:</div>
									<div class="col-md-4 mb-1">
										<input type="text" class="form-control form-control-mb" id="info_bplace" name="info_bplace" value="" readonly>
										<!-- <input type="hidden" onchange="fullplace();" class="form-control form-control-mb" id="info_bplace_prov" name="info_bplace_prov" value="" readonly> -->
									</div>
									<div class="col-md-2 col-form-label text-default">Religion :</div>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb" id="Religion" name="Religion" value="" readonly>
										<!--<select  name="selRel" id="selRel" class="form-control form-control-mb"></select>-->
									</div>
									<label class="col-md-2 col-form-label text-default">
										Ocuppation:
									</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="info_occup" name="info_occup" placeholder="Occupation" value="" readonly>
									</div>

									<label class="col-md-2 col-form-label text-default">
										Landline #:
									</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="info_telno" name="info_telno" placeholder="Landline #" value="" readonly>
									</div>

									<label class="col-md-2 col-form-label text-default">
										Mobile #:
									</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="info_mobno" name="info_mobno" placeholder="Mobile #" value="" readonly>
									</div>
								</div>
								<hr class="bg-success">
								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
										<hr class="bg-success">
										<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp;Permanent Address</div>
										<div class="form-row">
											<div class="col-md-2 col-form-label  text-default mb-1">
												No.Street:
											</div>
											<div class="col-md-10">
												<textarea type="text" class="form-control form-control-mb mb-1" id="street_no" placeholder="Street Address" name="street_no" readonly></textarea>
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="getRegion" name="getRegion" value="" readonly>
											</div>
											<!--
										<div for ="selReg" class="col-md-2 col-form-label text-default mb-1">
											Region:
										</div>
										<div class="col-md-10">
											<select  class="form-control" onchange="setRegion();" id="selReg" name="selReg" readonly>
											</select>
										</div>-->
											<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="getProv" name="getProv" value="" readonly>
												<!--
												<select class="form-control form-control-mb" readonly=""  id="selProv" name="selProv">
												</select>
											-->
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="getBrgy" name="selBrgy" value="" readonly>
												<!--<select  class="form-control form-control-mb" disabled id="selBrgy" name="selBrgy"></select>-->
											</div>
											<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="getCity" name="getCity" value="" readonly>
												<!--<select class="form-control form-control-mb" disabled id="selCity" name="selCity"></select>-->
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip" name="info_zip" readonly>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
											<div class="col-md-4">
												<select type="text" class="form-control form-control-mb mb-1" readonly id="info_country" name="info_country">
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
			</form>
		</div>

		<!-- step-2-->

		<div id="step-2">
			<form id="form-step-2">
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
							<div class="col-md-12">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Pregnant ?</label>
									<div class="col-md-1">
										<input type="radio" id="preg_yes" name="preg" value="Y">
										<label for="preg_yes">&nbsp; Yes</label>
									</div>
									<div class="col-md-1">
										<input type="radio" id="preg_no" name="preg" value="N">
										<label for="preg_no">&nbsp; No</label>&nbsp;&nbsp;&nbsp;
									</div>
									<div class="col-md-2">
										<input type="radio" id="preg_unknown" name="preg" value="U">
										<label for="preg_unknown">&nbsp; Unknown</label>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">If Yes, weeks of pregnancy :</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="week_preg" name="week_preg" placeholder="Weeks of Pregnancy" readonly>
									</div>

									<label class="col-md-2 col-form-label text-default mb-1">Indigenous People :</label>
									<div class="col-md-2">
										<select class="form-control form-control-mb mb-1" id="selIndig" name="selIndig">
										</select>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Patient Admitted ?</label>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb mb-1" placeholder="" id="patadmit" name="patadmit" readonly>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Date Admitted / Seen / Consulted:</label>
									<div class="col-md-2">
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_asc" id="date_asc" readonly>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1"> Name of parent/caregiver :</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="parent_caregiver" name="parent_caregiver" placeholder="" value="">
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Contact Nos :</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="parent_caregiver_nos" name="parent_caregiver_nos" placeholder="" value="">
									</div>
									<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Date of Report:</label>
									<div class="col-md-2">
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_report" id="date_report">
									</div>
									<label class="col-md-1 col-form-label text-default mb-1">Name of Reporter :</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="name_report" name="name_report" placeholder="" value="">
									</div>
									<label class="col-md-1 col-form-label text-default mb-1" align="right">Contact Nos. :</label>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb mb-1" id="reporter_nos" name="reporter_nos" placeholder="" value="">
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Date of Investigation :</label>
									<div class="col-md-2">
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_investigation" id="date_investigation">
									</div>
									<label class="col-md-1 col-form-label text-default mb-1">Name of Investigator/s :</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="name_investigator" name="name_investigator" placeholder="" value="">
									</div>
									<label class="col-md-1 col-form-label text-default mb-1" align="right">Contact Nos. :</label>
									<div class="col-md-2">
										<input type="text" class="form-control form-control-mb mb-1" id="investigator_nos" name="investigator_nos" placeholder="" value="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!-- step-3-->

		<div id="step-3">
			<form id="form-step-3">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"><i class="fa fa-file-text-o"></i> Clinical Data</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Fever :</label>
							<div class="col-md-1">
								<input type="radio" id="fever_yes" name="fever" value="Y">
								<label for="fever_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="fever_no" name="fever" value="N">
								<label for="fever_no">&nbsp; No</label>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1" align="center">Arthralgia/arthritis:</label>
							<div class="col-md-1">
								<input type="radio" id="arthralgia_yes" name="arthralgia" value="Y">
								<label for="arthralgia_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="arthralgia_no" name="arthralgia" value="N">
								<label for="arthralgia_no">&nbsp; No</label>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1" align="right">Are there any complications?</label>
							<div class="col-md-1">
								<input type="radio" id="complication_yes" name="complication" value="Y">
								<label for="complication_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="complication_no" name="complication" value="N">
								<label for="complication_no">&nbsp; No</label>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date Onset: </label>
							<div class="col-md-2">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_onset_fever" id="date_onset_fever" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1" align="center">Swollen lymphatic nodules:</label>
							<div class="col-md-1">
								<input type="radio" id="lymphatic_yes" name="lymphatic" value="Y">
								<label for="lymphatic_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="lymphatic_no" name="lymphatic" value="N">
								<label for="lymphatic_no">&nbsp; No</label>&nbsp;&nbsp;&nbsp;
							</div>
							<label class="col-md-2 col-form-label text-default mb-1" align="right">If Yes, Specify :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="specify_compilation" name="specify_compilation" placeholder="" value="" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Rash :</label>
							<div class="col-md-1">
								<input type="radio" id="rash_yes" name="rash" value="Y">
								<label for="rash_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="rash_no" name="rash" value="N">
								<label for="rash_no">&nbsp; No</label>&nbsp;&nbsp;&nbsp;
							</div>
							<label class="col-md-2 col-form-label text-default mb-1" align="center">If Yes, Specify Location :</label>
							<input type="radio" id="cervical_yes" name="specify_lympathic" value="CER" readonly>
							<label class="col-md-1" for="cervical_yes">&nbsp; Cervical</label>
							<input type="radio" id="post_auricular_yes" name="specify_lympathic" value="POST-AUR" readonly>
							<label class="col-md-1" for="post_auricular_yes">&nbsp; Post-Auricular</label>
							<input type="radio" id="sub_occipital_yes" name="specify_lympathic" value="SUB-OCCI" readonly>
							<label class="col-md-1" for="sub_occipital_yes">&nbsp; Sub-Occipital</label>
							<input type="radio" id="others_specify" name="specify_lympathic" value="OTHERS" readonly>
							<label class="col-md-1" for="others_specify">Others,Specify :</label>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb mb-1" id="specify_others" name="specify_others" placeholder="" value="" align="right" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date Onset: </label>
							<div class="col-md-2">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_onset_rash" id="date_onset_rash" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1" align="center">Working / FInal Diagnosis :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="final_diagnosis" name="final_diagnosis" placeholder="" value="" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1" align="right">Other symptoms :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="other_symptoms" name="other_symptoms" placeholder="" value="">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Cough :</label>
							<div class="col-md-1">
								<input type="radio" id="cough_yes" name="cough" value="Y">
								<label for="cough_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="cough_no" name="cough" value="N">
								<label for="cough_no">&nbsp; No</label>
							</div>
							<div class="col-md-8"></div>
							<label class="col-md-2 col-form-label text-default mb-1">Koplik Sign :</label>
							<div class="col-md-1">
								<input type="radio" id="koplik_yes" name="koplik" value="Y">
								<label for="koplik_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="koplik_no" name="koplik" value="N">
								<label for="koplik_no">&nbsp; No</label>
							</div>
							<div class="col-md-8"></div>
							<label class="col-md-2 col-form-label text-default mb-1">Runny nose/coryza :</label>
							<div class="col-md-1">
								<input type="radio" id="runny_nose_yes" name="runny_nose" value="Y">
								<label for="runny_nose_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="runny_nose_no" name="runny_nose" value="N">
								<label for="runny_nose_no">&nbsp; No</label>
							</div>
							<div class="col-md-8"></div>
							<label class="col-md-2 col-form-label text-default mb-1">Red eyes/conjunctivitis:</label>
							<div class="col-md-1">
								<input type="radio" id="red_eyes_yes" name="red_eyes" value="Y">
								<label for="red_eyes_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="red_eyes_no" name="red_eyes" value="N">
								<label for="red_eyes_no">&nbsp; No</label>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!-- step-4-->

		<div id="step-4">
			<form id="form-step-4">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"><i class="fa fa-medkit"></i> Vaccination History and Vitamin A Supplementation</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Patient received measles-containing vaccine (MCV)?</label>
							<div class="col-md-1">
								<input type="radio" id="mcv_yes" name="mcv" value="Y">
								<label for="mcv_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="mcv_no" name="mcv" value="N">
								<label for="mcv_no">&nbsp; No</label>
							</div>
							<div class="col-md-7"></div>
							<label class="col-md-3 col-form-label text-default mb-1">If Yes, indicate the number of doses whichever is applicable :</label>
							<label class="col-md-1 col-form-label text-default mb-1" align="right">MV :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="mv" name="mv" placeholder="" value="" readonly>
							</div>
							<label class="col-md-1 col-form-label text-default mb-1" align="right">MR :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="mr" name="mr" placeholder="" value="" readonly>
							</div>
							<label class="col-md-1 col-form-label text-default mb-1" align="right">MMR :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="mmr" name="mmr" placeholder="" value="" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date last dose received MCV : </label>
							<div class="col-md-2">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_received_mcv" id="date_received_mcv" readonly>
							</div>
							<div class="col-md-8"></div>
							<label class="col-md-2 col-form-label text-default mb-1">Measles vaccine received validated through : </label>
							<input type="radio" id="vaccine_vaccination" name="measles_vaccine" value="VCARD" readonly>
							<label class="col-md-1 for=" vaccine_vaccination">&nbsp; Vaccination</label>
							<input type="radio" id="vaccine_logsheet" name="measles_vaccine" value="LOGSHEET" readonly>
							<label class="col-md-1 for=" vaccine_logsheet">&nbsp; Logsheet</label>
							<input type="radio" id="vaccine_byrecall" name="measles_vaccine" value="RECALL" readonly>
							<label class="col-md-1 for=" vaccine_byrecall">&nbsp; By recall</label>
							<input type="radio" id="vaccine_others" name="measles_vaccine" value="OTHERS" readonly>
							<label class="col-md-1 for=" vaccine_others">&nbsp; Others :</label>
							<div class="col-md-5">
								<input type="text" class="form-control form-control-mb mb-1" id="vaccine_others_specify" name="vaccine_others_specify" placeholder="" value="" readonly>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1">Was vaccination received during special campaigns? </label>
							<div class="col-md-1">
								<input type="radio" id="special_campaigns_yes" name="special_campaigns" value="Y" readonly>
								<label for="special_campaigns_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="special_campaigns_no" name="special_campaigns" value="N" readonly>
								<label for="special_campaigns_no">&nbsp; No</label>
							</div>
							<div class="col-md-7"></div>
							<label class="col-md-3 col-form-label text-default mb-1">If patient did not receive any MCV, state the reason/s : </label>
							<div class="col-md-3">
								<input type="checkbox" id="mother_busy" name="mother_busy" value="Y" readonly>
								<label for="mother_busy">&nbsp; Mother was Busy</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="child_sick" name="child_sick" value="Y" readonly>
								<label for="child_sick">&nbsp; Child was sick</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="forget_schedule" name="forget_schedule" value="Y" readonly>
								<label for="forget_schedule">&nbsp; Forget Schedule</label>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1"></label>
							<div class="col-md-3">
								<input type="checkbox" id="against_belief" name="against_belief" value="Y" readonly>
								<label for="against_belief">&nbsp; Against Belief</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="novaccine_available" name="novaccine_available" value="Y" readonly>
								<label for="novaccine_available">&nbsp; No vaccine available</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="med_contraindication" name="med_contraindication" value="Y" readonly>
								<label for="med_contraindication">&nbsp; Medical contraindication</label>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1"></label>
							<div class="col-md-3">
								<input type="checkbox" id="novaccinator_available" name="novaccinator_available" value="Y" readonly>
								<label for="novaccinator_available">&nbsp; Vaccinator not available</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="side_effects" name="side_effects" value="Y" readonly>
								<label for="side_effects">&nbsp; Fear of side effects</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="not_eligible" name="not_eligible" value="Y" readonly>
								<label for="not_eligible">&nbsp; Not eligible for vaccination</label>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1"></label>
							<label class="col-md-1 col-form-label text-default mb-1">Others Specify : </label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="others_mcv" name="others_mcv" placeholder="" value="" readonly>
							</div>
							<div class="col-md-4"></div>
							<label class="col-md-3 col-form-label text-default mb-1">Was the patient given Vitamin A during this illness? </label>
							<div class="col-md-1">
								<input type="radio" id="vit_duringill_yes" name="vit_duringill" value="Y">
								<label for="vit_duringill_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="vit_duringill_no" name="vit_duringill" value="N">
								<label for="vit_duringill_no">&nbsp; No</label>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- step-5-->

		<div id="step-5">
			<form id="form-step-5">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="h5 text-success"><i class="fa fa-stethoscope"></i> Exposure History</div>
						</div>
					</div>
					<div class="card-body">
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1"> With history of travel within 23 days prior to onset of rash? </label>
							<div class="col-md-1">
								<input type="radio" id="history_travel_yes" name="history_travel" value="Y">
								<label for="history_travel_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="history_travel_no" name="history_travel" value="N">
								<label for="history_travel_no">&nbsp; No</label>
							</div>
							<div class="col-md-7"></div>
							<label class="col-md-2 col-form-label text-default mb-1"> If YES, specify place :</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="specify_place" name="specify_place" placeholder="" value="" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Timing : </label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="timing" id="timing" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1"></label>
							<div class="col-md-2">
								<input type="radio" id="rash_onset_seven" name="rash_onset" value="1">
								<label for="rash_onset_seven">&nbsp;&lt;7 days from rash onset</label>
							</div>
							<div class="col-md-2">
								<input type="radio" id="rash_onset_uptotwentythree" name="rash_onset" value="1">
								<label for="rash_onset_uptotwentythree">&nbsp;7-23 days from rash onset </label>
							</div>
							<div class="col-md-6"></div>
							<label class="col-md-4 col-form-label text-default mb-1"> *Was there contact with a confirmed Measles case 7-23 days prior to rash onset? </label>
							<div class="col-md-1">
								<input type="radio" id="measles_case_yes" name="measles_case" value="Y">
								<label for="measles_case_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="measles_case_no" name="measles_case" value="N">
								<label for="measles_case_no">&nbsp; No</label>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="col-md-2">
								<input type="radio" id="measles_case_unknown" name="measles_case" value="U">
								<label for="measles_case_unknown">&nbsp; Unknown</label>
							</div>
							<div class="col-md-4"></div>
							<label class="col-md-4 col-form-label text-default mb-1"> *Was there contact with a confirmed Rubella case 7-23 days prior to rash onset? </label>
							<div class="col-md-1">
								<input type="radio" id="rubella_case_yes" name="rubella_case" value="Y">
								<label for="rubella_case_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-1">
								<input type="radio" id="rubella_case_no" name="rubella_case" value="N">
								<label for="rubella_case_no">&nbsp; No</label>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="col-md-2">
								<input type="radio" id="rubella_case_unknown" name="rubella_case" value="U">
								<label for="rubella_case_unknown">&nbsp; Unknown</label>
							</div>
							<div class="col-md-4"></div>
							<label class="col-md-2 col-form-label text-default mb-1">If YES, name of contact :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="rubella_name_contact" name="rubella_name_contact" placeholder="" value="" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Place of residence :</label>
							<div class="col-md-2">
								<input type="text" class="form-control form-control-mb mb-1" id="rubella_place_residence" name="rubella_place_residence" placeholder="" value="" readonly>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date of contact :</label>
							<div class="col-md-2">
								<input type="datetime-local" class="form-control form-control-mb mb-1" name="rubella_date_contact" id="rubella_date_contact" readonly>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1"> Tick the type of place where exposure probably occur :</label>
							<div class="col-md-3">
								<input type="checkbox" id="daycare" name="daycare" value="Y">
								<label for="daycare">&nbsp; Day Care</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="barangay" name="barangay" value="Y">
								<label for="barangay">&nbsp; Barangay</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="home" name="home">
								<label for="home">&nbsp; Home</label>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1"></label>
							<div class="col-md-3">
								<input type="checkbox" id="school" name="school" value="Y">
								<label for="school">&nbsp; School</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="health_care_facility" name="health_care_facility" value="Y">
								<label for="health_care_facility">&nbsp; Health Care Facility</label>
							</div>
							<div class="col-md-3">
								<input type="checkbox" id="dormitory" name="dormitory" value="Y">
								<label for="dormitory">&nbsp; Dormitory</label>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1"></label>
							<label class="col-md-1 col-form-label text-default mb-1">Others Specify : </label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="others_exposure" name="others_exposure" placeholder="" value="">
							</div>
							<label class="col-md-6 col-form-label text-default mb-1">Are there other known cases with fever and rash (regardless of presence of 3 C’s) in the community? </label>
							<div class="col-md-2">
								<input type="radio" id="fever_and_rash_yes" name="fever_and_rash" value="Y">
								<label for="fever_and_rash_yes">&nbsp; Yes</label>
							</div>
							<div class="col-md-2">
								<input type="radio" id="fever_and_rash_no" name="fever_and_rash" value="N">
								<label for="fever_and_rash_no">&nbsp; No</label>
							</div>
							<div class="col-md-2">
								<input type="radio" id="fever_and_rash_unknown" name="fever_and_rash" value="U">
								<label for="fever_and_rash_unknown">&nbsp; Unknown</label>
							</div>
							<div class="alert alert-info col-md-12" role="alert"><i class="fa fa-asterisk text-danger"></i> Note: If the answer to any of the two questions was YES, coordinate with the ESU for validation and field investigation</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!--step 6-->
		<div id="step-6">
			<form id="form-step-6">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="h5 text-success"><i class="fa fa-flask"></i> Laboratory Test</div>
						</div>
					</div>
					<div class="card-body table-responsive">
						<table id="MeaslesTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
							<thead class="thead-dark">
								<tr>
									<th>Specimen collected (Put in the box Provided)</th>
									<th>If YES, Date Collected</th>
									<th>Date sent to RITM</th>
									<th>Date sent to RITM (to be filled up by RITM)</th>
									<th>Measles lgM Result</th>
									<th>Rubella lgM Result</th>
									<th>Virus Isolation Result</th>
									<th>PCR Result</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="checkbox" id="serum" name="serum" value="Y">
										<label for="serum">&nbsp; Serum</label>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="serum_date_collected" id="serum_date_collected" readonly>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="serum_datesent_RITM" id="serum_datesent_RITM" readonly>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="serum_datereceived_RITM" id="serum_datereceived_RITM" readonly>
									</td>
									<td>
										<input type="text" class="form-control form-control-mb mb-1" id="serum_measles_igm_result" name="serum_measles_igm_result" readonly>
									</td>
									<td>
										<input type="text" class="form-control form-control-mb mb-1" id="serum_rubella_igm_result" name="serum_rubella_igm_result" readonly>
									</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="dried_blood" name="dried_blood" value="Y">
										<label for="dried_blood">&nbsp; Dried Blood Spot</label>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="driedblood_date_collected" id="driedblood_date_collected" readonly>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="driedblood_datesent_RITM" id="driedblood_datesent_RITM" readonly>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="driedblood_datereceived_RITM" id="driedblood_datereceived_RITM" readonly>
									</td>
									<td>
										<input type="text" class="form-control form-control-mb mb-1" id="dried_blood_measles_igm_result" name="dried_blood_measles_igm_result" readonly>
									</td>
									<td>
										<input type="text" class="form-control form-control-mb mb-1" id="dried_blood_rubella_igm_result" name="dried_blood_rubella_igm_result" readonly>
									</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" id="swab" name="swab" value="Y">
										<label for="swab">&nbsp; Oropharyngeal / <br>&nbsp; Nasopharyngeal swab?</label>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="swab_date_collected" id="swab_date_collected" readonly>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="swab_datesent_RITM" id="swab_datesent_RITM" readonly>
									</td>
									<td>
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="swab_datereceived_RITM" id="swab_datereceived_RITM" readonly>
									</td>
									<td></td>
									<td></td>
									<td>
										<select name="swab_virus_isolation_result" id="swab_virus_isolation_result" class="form-control form-control-mb mb-1" readonly>
											<option value="">Select</option>
											<option value="POS-MEASLE">Positive - Measles</option>
											<option value="POS-RUBELLA">Positive - Rubella</option>
											<option value="NEG">Negative</option>
											<option value="EQUI">Equivocal</option>
											<option value="PEND">Pending</option>
										</select>
									</td>
									<td><input type="text" class="form-control form-control-mb mb-1" id="swab_PCR_result" name="swab_PCR_result" readonly></td>
								</tr>
							</tbody>
						</table>
						<hr class="bg-success">
						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"><i class="fa fa-list"></i> Final Classification</div>
								<hr class="bg-success">
								<div class="form-row">
									<div class="col-md-2">
										<input type="radio" id="lab_confirm_measles" name="final_classification" value="LCM">
										<label for="lab_confirm_measles">&nbsp; Laboratory Confirmed Measles</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="epilinked_confirm_measles" name="final_classification" value="EPI-MEASLES">
										<label for="epilinked_confirm_measles">&nbsp; Epi-linked Confirmed Measles</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="measles_compatible" name="final_classification" value="MEASLES">
										<label for="measles_compatible">&nbsp; Measles Compatible</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="lab_confirm_rubella" name="final_classification" value="LCR">
										<label for="lab_confirm_rubella">&nbsp; Laboratory Confirmed Rubella</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="epilinked_confirm_rubella" name="final_classification" value="EPI-RUBELLA">
										<label for="epilinked_confirm_rubella">&nbsp; Epi-linked Confirmed Rubella</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="discarded_measles_rubella" name="final_classification" value="DISCARDED">
										<label for="discarded_measles_rubella">&nbsp; Discarded Non Measles/Rubella</label>
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-success">

						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"><i class="fa fa-list"></i> Source of Infection</div>
								<hr class="bg-success">
								<div class="form-row">
									<div class="col-md-2">
										<input type="radio" id="source_infection_endemic" name="source_infection" value="END">
										<label for="source_infection_endemic">&nbsp; Endemic</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="source_infection_imported" name="source_infection" value="IMP">
										<label for="source_infection_imported">&nbsp; Imported</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="source_infection_imprel" name="source_infection" value="IMP-REL">
										<label for="source_infection_imprel">&nbsp; Import-related</label>
									</div>
									<div class="col-md-2">
										<input type="radio" id="source_infection_unknown" name="source_infection" value="UNKNOWN">
										<label for="source_infection_unknown">&nbsp; Unknown</label>
									</div>
								</div>
							</div>
						</div>

						<hr class="bg-success">

						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"><i class="fa fa-list"></i> Outcome</div>
								<hr class="bg-success">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Outcome : </label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="info_disp" name="info_disp" placeholder="" value="" readonly>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Date Died : </label>
									<div class="col-md-4">
										<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_died" id="date_died" readonly>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Final Diagnosis : </label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" id="final_diag" name="final_diag" placeholder="" value="" readonly>
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