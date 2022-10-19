<?php $this->load->view('Patient/_camera.php'); ?>
<div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-lg"></i>&nbsp <b>Information:</b> <small>All fields mark with asterisk </small><b class="text-danger">(</b><i class="fa fa-asterisk text-danger"></i><b class="text-danger">)</b> <small> are required!</small> </div>
<div id="message"></div>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<span class="h4  text-success"><i class="fa fa-user-circle-o"></i>&nbsp Patient Registration Form</span>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a name="patPHIE" id="patPHIE" hidden class="btn btn-outline-success btn-ladda  float-right text-success" data-original-title="P.H.I.E" data-toggle="tooltip" data-style="zoom-in" >
						<i class="fa fa-search"></i> P.H.I.E
					</a>
					&nbsp
					<button name="patInfoSavebtn" type="submit" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Save" data-toggle="tooltip"><i class="fa fa-save"> </i> Save
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success">
					<i class=" fa fa-user"></i>
					&nbsp Basic Information
				</div>
				<hr class="bg-success">
				</hr>
				<div class="row">
					<input type="hidden" class="form-control form-control-mb" id="appointment_id" name="appointment_id" readonly>
					<div class="col-md-2">
						<img id="patientPhoto" name="ImageSave" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1 bg-success" alt="...">
						<small class="text text-danger"><b>Note:</b>&nbsp <i>Click button to take patient photo</i></small>
						<input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic" >
						<div class="button-group">
							<a class="btn btn-outline-success btn-md btn-block btn-pill btn-ladda" data-style="zoom-in" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"> <i class="fa fa-camera fa-xs"></i></a>
						</div>
					</div>
					<div class="col-md-10">
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								PhilSys ID #:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control mb-1" id="info_philsys" name="info_philsys" disabled placeholder="Philippine National ID">
								<input type="hidden" class="form-control form-control-mb" id="phie_id" name="phie_id" readonly>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Health Record #:
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control form-control mb-1" id="info_hpercode" name="info_hpercode" readonly>
								<input type="hidden" class="form-control form-control mb-1" id="info_hpatkey" name="info_hpatkey" readonly>
							</div>
							<div class="col-md-2">
								<button type="button" id = "genpercode"  onclick="generatehpercode();" class="btn btn-outline-success"><i class="fa fa-refresh"></i></button>
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								Old Health Record #:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="Old Hospital Number" id="info_oldhpercode" name="info_oldhpercode">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								Senior Citizen No:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb" autocomplete="off" disabled id="info_seniorno" placeholder="Senior No." name="info_seniorno">
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								MSS No:
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control form-control-mb" autocomplete="off" placeholder="MSS No" id="info_mssno" name="info_mssno">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-1 col-form-label text-default mb-1">
								Fullname:
							</div>
							<div class="col-md-11">
								<input type="text" class="form-control form-control-mb" readonly autocomplete="off" id="info_fullname" name="info_fullname" placeholder="Last name,First name Middle name">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Lastname:
							</div>
							<div class="col-md-11">
								<input type="text" class="form-control form-control-mb" autocomplete="off" onchange="fullname();" id="info_lname" name="info_lname" placeholder="Last name">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Firstname:
							</div>
							<div class="col-md-11">
								<input type="text" class="form-control form-control-mb" onchange="fullname();" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Suffix:
							</div>
							<div class="col-md-5">
								<select name="info_suffix" id="info_suffix" onchange="fullname();" class="form-control form-control-mb">
									<option value="">N/A</option>
									<option value="SR.">Sr.</option>
									<option value="JR">Jr.</option>
									<option value="I">I</option>
									<option value="II">II</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
									<option value="V">V</option>
								</select>
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Alias:
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="info_patalias" name="info_patalias" placeholder="Alias">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Middlename:
							</div>
							<div class="col-md-11">
								<input type="text" class="form-control form-control-mb" onchange="fullname();" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name">
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Date of Birth:
							</div>
							<div class="col-md-5">
								<input type="date" class="form-control form-control-mb" onchange="AgeComputation(this.value),fullname();" name="info_dob" id="info_dob">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Sex:
							</div>
							<div class="col-md-5">
								<select name="info_sex" id="info_sex" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
							<div class=" col-md-1 col-form-label  text-default mb-1">
								Year:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_year" name="info_year" value="" readonly>
							</div>
							<label class="col-md-1 col-form-label  text-default mb-1">
								Month:
							</label>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_month" name="info_month" value="" readonly>
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								Day:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_day" name="info_day" value="" readonly>
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Civil Status :
							</div>
							<div class="col-md-5">
								<select name="info_cs" id="info_cs" onchange="CivilStatus(this.value)" ; class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="S">Single</option>
									<option value="M">Married</option>
									<option value="D">Divorced</option>
									<option value="X">Separated</option>
									<option value="W">Widow/Widower</option>
									<option value="N">N/A</option>
								</select>
							</div>
							<div class="col-md-1 col-form-label text-default">
								Place of birth:
							</div>
							<div class="col-md-5 mb-1">
								<textarea name="info_bplace" id="info_bplace" class="form-control" type="input" placeholder="Place of Birth" autocomplete="off"></textarea>
							</div>
							<div class="col-md-1 col-form-label text-default">
								Nationality :
							</div>
							<div class="col-md-5 mb-1">
								<select name="info_nat" id="info_nat" class="form-control form-control-mb">
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
							
							<div class="col-md-1 col-form-label text-default">
								Religion :
							</div>
							<div class="col-md-5">
								<select name="selRel" id="selRel" class="form-control form-control-mb"></select>
							</div>
							<div class="col-md-1 col-form-label text-default">
								if indigenous please select :
							</div>
							<div class="col-md-5 mb-1">
								<select name="selIndig" id="selIndig" class="form-control form-control-mb">
								</select>
							</div>
							<div class="col-md-1 col-form-label text-default">
								Employment :
							</div>
							<div class="col-md-5 mb-1">
								<select name="selEmp" id="selEmp" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="EMPLO">EMPLOYED</option>
									<option value="UNEMP">UNEMPLOYED</option>
									<option value="SELFE">SELF EMPLOYED</option>
								</select>
							</div>
							<label class="col-md-1 col-form-label text-default">
								Telephone :
							</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly="" id="info_telno" name="info_telno" placeholder="Contact">
								<p hidden="" id="info">
								</p>

							</div>

							<div class="col-md-1">
								<a id="btnTelno" class="btn btn-success"><i class="fa fa-plus"></i></a>
							</div>
							<label class="col-md-1 col-form-label text-default">
								Occupation :
							</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="info_occu" name="info_occu" placeholder="Occupation" readonly="">

								<p hidden="" id="infooccup"></p>
							</div>
							<div class="col-md-1">
								<a id="btnOccup" class="btn btn-success"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<hr class="bg-success">
				<div class="row">
					<div class="col-md-12">
						<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
						<hr class="bg-success"></hr>
						<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i> Current Address</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> No.Street:
							</div>
							<div class="col-md-10">
								<textarea type="text" class="form-control form-control-mb mb-1" id="info_street" placeholder="Street Address" name="info_street"></textarea>
							</div>
							<label class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> City/Municipality:
							</label>
							<div class="col-md-10">
								<select class="form-control form-control-mb" id="selCity" name="selCity">
								</select>
							</div>
							<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
							<div class="col-md-4">
								<select class="form-control mb-1" disabled id="selBrgy" name="selBrgy"></select>
							</div>

							<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
								Region:
							</div>
							<div class="col-md-4">
								<select class="form-control" readonly="readonly" id="selReg" name="selReg">


								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
							<div class="col-md-4">
								<select class="form-control form-control-mb" readonly="readonly" id="selDist" name="selDist">
									<option value="">Select</option>
								</select>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								Province:
							</div>
							<div class="col-md-4">
								<select class="form-control form-control-mb" readonly="readonly" id="selProv" name="selProv">
									<option value="">Select</option>
								</select>
							</div>

						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip" name="info_zip">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
							<div class="col-md-4">
								<select type="text" class="form-control form-control-mb mb-1" readonly="readonly" id="info_country" name="info_country">
									<option value="PHIL" selected>Philippines</option>
								</select>
							</div>
						</div>
						<div class="col-md-10">
							<input type="checkbox"  id="checkAddress" name="checkAddress"  autocomplete="off">
							<input type="hidden"  id="checkAddress_val" name="checkAddress_val"  value="N" >
							<label class="col-form-label  text-default mb-2">:Check if the permanent address is same as above.</label>
						</div>
						<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i> Permanent Address</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> No.Street:
							</div>
							<div class="col-md-10">
								<textarea type="text" class="form-control form-control-mb mb-1"  id="info_streetp" placeholder="Street Address" name="info_streetp"></textarea>
							</div>
							<label class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> City/Municipality:
							</label>
							<div class="col-md-10">
								<select class="form-control form-control-mb" id="selCityp" name="selCityp">
								</select>
							</div>
							<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
							<div class="col-md-4">
								<select class="form-control mb-1" disabled id="selBrgyp" name="selBrgyp"></select>
							</div>

							<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
								Region:
							</div>
							<div class="col-md-4">
								<select class="form-control" readonly="readonly" id="selRegp" name="selRegp">


								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
							<div class="col-md-4">
								<select class="form-control form-control-mb" readonly="readonly" id="selDistp" name="selDistp">
									<option value="">Select</option>
								</select>
							</div>

							<div class="col-md-2 col-form-label  text-default mb-1">
								Province:
							</div>
							<div class="col-md-4">
								<select class="form-control form-control-mb" readonly="readonly" id="selProvp" name="selProvp">
									<option value="">Select</option>
								</select>
							</div>

						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zipp" name="info_zipp">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
							<div class="col-md-4">
								<select type="text" class="form-control form-control-mb mb-1" readonly="readonly" id="info_countryp" name="info_countryp">
									<option value="PHIL" selected>Philippines</option>
								</select>
							</div>
						</div>
						


						<div class="row mb-3">
							<div class="col-md-6">
								<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp Contact Person
								</div>
								<hr class="bg-success">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Contact Name:</label>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb" id="contact_name" name="contact_name" placeholder="Contact Name"></textarea>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Address:</label>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb mb-1" id="contact_address" name="contact_address" placeholder="Address"></textarea>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Mobile/Tel:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb" id="contact_mobile" name="contact_mobile" placeholder="Contact">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Relation:</label>
									<div class="col-md-10">
										<select type="text" class="form-control form-control-mb" id="contact_relation" name="contact_relation">
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
											<option value="FHEAD"></option>
										</select>
									</div>
								</div>
								<br>
								<br>
								<br>
								<br>
								<hr class="bg-success">
							</div>
							<!-- <div class="row">
									<div class="col-md-6">
										<div class="h5 text-success"> <i class="fa fa-phone"></i>&nbsp Contact Person</div>
										<hr class="bg-success">
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Last Name:</label>
											<div class="col-md-10">
												<input type="text"  class="form-control form-control-mb" id="contact_lname" name="contact_lname"  placeholder = "Lastname">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">First Name:</label>
											<div class="col-md-10">
												<input type="text"  class="form-control form-control-mb" id="contact_fname" name="contact_fname"placeholder = "Firstname"  >
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Middle Name:</label>
											<div class="col-md-10">
												<input type="text"  class="form-control form-control-mb"  id="contact_mname" name="contact_mname"placeholder = "Middlename"  >
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Address:</label>
											<div class="col-md-10">
												<textarea type="text"  class="form-control form-control-mb mb-1"" id="contact_address" name="contact_address"  placeholder = "Address" ></textarea>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Mobile/Tel:</label>
											<div class="col-md-10">
												<input type="text"  class="form-control form-control-mb" id="contact_mobile" name="contact_mobile" placeholder = "Contact">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Relation:</label>
											<div class="col-md-10">
												<select type="text"  class="form-control form-control-mb" id="contact_relation" name="contact_relation">
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
													<option value="FHEAD"></option>
												</select>
											</div>
										</div>
										<hr class="bg-success">
									</div> -->

							<div class="col-md-6">
								<div class="h5 text-success"> <i class="fa fa-venus-mars"></i>&nbsp Spouse Information</div>
								<hr class="bg-success">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Last Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="spouse_lname" name="spouse_lname" placeholder="Lastname" disabled>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">First Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="spouse_fname" name="spouse_fname" placeholder="Firstname" disabled>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Middle Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="spouse_mname" name="spouse_mname" placeholder="Middlename" disabled>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Address:</label>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb mb-1" id="spouse_address" name="spouse_address" placeholder="Address" disabled></textarea>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Mobile/Tel:</label>
									<div class="col-md-10">
										<input type="text" class="form-control  form-control-mb mb-1" placeholder="Contact" id="spouse_contact" name="spouse_contact" disabled>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Deceased:</label>
									<div class="col-md-10">
										<select class="form-control" id="spouse_deceased" name="spouse_deceased" disabled>
											<option value="">Select</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
								</div>
								<hr class="bg-success">
								<button class="btn btn-block btn-success btn-square btn-sm" type="button" data-toggle="collapse" data-target="#addMEmpSpouse" aria-expanded="false" aria-controls="addMEmpSpouse">
									Spouse's Employer Information
								</button>
								</p>
								<div class="collapse" id="addMEmpSpouse">
									<div class="card card-body bg-secondary">
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Name:</label>
											<div class="col-md-10">
												<input type="text" class="form-control  form-control-mb mb-1" placeholder="Employer name" id="spouseemp_name" name="spouseemp_name">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Address:</label>
											<div class="col-md-10">
												<textarea type="text" class="form-control  form-control-mb mb-1" placeholder="Employer Address" id="spouseemp_address" name="spouseemp_address"></textarea>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Email:</label>
											<div class="col-md-10">
												<input type="email" class="form-control  form-control-mb mb-1" placeholder="Email Address" id="spouseemp_email" name="spouseemp_email">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Contact:</label>
											<div class="col-md-10">
												<input type="text" class="form-control  form-control-mb mb-1" placeholder="Contact" id="spouseemp_contact" name="spouseemp_contact">
											</div>
										</div>

									</div>
								</div>
							</div>
							<p></p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="h5 text-success"> <i class="fa fa-male"></i>&nbsp Father Information</div>
								<hr class="bg-success">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Last Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb" id="father_lname" name="father_lname" placeholder="Lastname">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">First Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="father_fname" name="father_fname" placeholder="Firstname">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Middle Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="father_mname" name="father_mname" placeholder="Middlename">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Address:</label>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb mb-1" id="father_address" name="father_address" placeholder="Address"></textarea>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Mobile/Tel:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="father_contact" name="father_contact" placeholder="Contact">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Deceased:</label>
									<div class="col-md-4">
										<select class="form-control" id="father_deceased" name="father_deceased">
											<option value="">Select</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
									<div class="col-md-1 col-form-label text-default mb-1">
										Suffix:
									</div>
									<div class="col-md-5">
										<select name="father_suffix" id="father_suffix" onchange="fullname();" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="SR.">Sr.</option>
											<option value="JR">Jr.</option>
											<option value="I">I</option>
											<option value="II">II</option>
											<option value="III">III</option>
											<option value="IV">IV</option>
											<option value="V">V</option>
										</select>
									</div>
								</div>
								<hr class="bg-success">
								<button class="btn btn-block btn-success btn-square btn-sm" type="button" data-toggle="collapse" data-target="#addMEmpFather" aria-expanded="false" aria-controls="addMEmpFather">
									Father's Employer Information
								</button>
								</p>
								<div class="collapse" id="addMEmpFather">
									<div class="card card-body bg-secondary">
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Employer Name:</label>
											<div class="col-md-10">
												<input type="text" class="form-control  form-control-mb mb-1" placeholder="Employer name" id="faemp_name" name="faemp_name">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Employer Address:</label>
											<div class="col-md-10">
												<textarea type="text" class="form-control  form-control-mb mb-1" placeholder="Employer Address" id="femp_address" name="femp_address"></textarea>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Employer Email:</label>
											<div class="col-md-10">
												<input type="email" class="form-control  form-control-mb mb-1" placeholder="Email Address" id="fa_email" name="fa_email">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Contact:</label>
											<div class="col-md-10">
												<input type="text" class="form-control  form-control-mb mb-1" placeholder="Contact" id="faemp_contact" name="faemp_contact">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="h5 text-success"> <i class="fa fa-female"></i>&nbsp Mother&#39s Maiden Information</div>
								<hr class="bg-success">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Last Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="mother_lname" name="mother_lname" placeholder="Lastname">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">First Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="mother_fname" name="mother_fname" placeholder="Firstname">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Middle Name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="mother_mname" name="mother_mname" placeholder="Middlename">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Address:</label>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb mb-1" id="mother_address" name="mother_address" placeholder="Address"></textarea>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Mobile/Tel:</label>
									<div class="col-md-10">
										<input type="text" class="form-control  form-control-mb mb-1" placeholder="Contact" id="mother_contact" name="mother_contact">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Deceased:</label>
									<div class="col-md-4">
										<select class="form-control" id="mother_deceased" name="mother_deceased">
											<option value="">Select</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
									<!-- <div class="col-md-1 col-form-label text-default mb-1">
		Suffix:
	</div>
	<div class="col-md-5">
	<select  name="mother_suffix" id="mother_suffix"  onchange ="fullname();"  class="form-control form-control-mb" >
			<option value="">Select</option> 
			<option value="SR.">Sr.</option> 
			<option value="JR">Jr.</option> 
			<option value="I">I</option> 
			<option value="II">II</option> 
			<option value="III">III</option> 
			<option value="IV">IV</option> 
			<option value="V">V</option> 
		</select>
	</div> -->
								</div>
								<hr class="bg-success">
								<button class="btn btn-block btn-success btn-square btn-sm" type="button" data-toggle="collapse" data-target="#addMEmpMother" aria-expanded="false" aria-controls="addMEmpMother">
									Mother's Employer Information
								</button>
								</p>
								<div class="collapse" id="addMEmpMother">
									<div class="card card-body bg-secondary">
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Employer Name:</label>
											<div class="col-md-10">
												<input type="text" class="form-control  form-control-mb mb-1" placeholder="Employer name" id="moemp_name" name="moemp_name">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Employer Address:</label>
											<div class="col-md-10">
												<textarea type="text" class="form-control  form-control-mb mb-1" placeholder="Employer Address" id="moemp_address" name="moemp_address"></textarea>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Employer Email:</label>
											<div class="col-md-10">
												<input type="email" class="form-control  form-control-mb mb-1" placeholder="Email Address" id="moaddress_email" name="moaddress_email">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Contact:</label>
											<div class="col-md-10">
												<input type="text" class="form-control  form-control-mb mb-1" placeholder="Contact" id="moemp_contact" name="moemp_contact">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo ViewTelep(); ?>
<?php echo ViewOCcupation(); ?>
<?php $this->load->view('Patient/_phiemodal.php'); ?>