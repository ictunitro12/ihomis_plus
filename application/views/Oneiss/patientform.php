<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br/><small>Patient Data</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-user-injured fa-2x"></i><br><small>Pre-Admission Data</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fa fa-car fa-2x"></i><br><small>Transport/Vehicular Accident </small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-exclamation-triangle fa-2x"></i><br><small>Other Risk Factors</small></a>
		</li>
		<li>
			<a href="#step-5"><i class="fa fa-hospital fa-2x"></i><br><small> Hospital/ Facility Data</small></a>
		</li>
		<li>
			<a href="#step-6"><i class="fa fa-hospital-user fa-2x"></i><br><small> In-Patient</small></a>
		</li>
	</ul>
	<div>
		<div id="step-1">
			<form id="form-step-1" role="form">
				<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
				<div class="card card-accent-success">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6">
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Online National Electronic Injury Surveillance System</h4></div>
								<input type="hidden" class="form-control form-control-mb" id="dateasof" name="dateasof">
								<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode"  >
								<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden"  >
								<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="newfhud" name="newfhud">
								<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="admit" name="admit" placeholder ="Admitted">
								<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="sample" name="sample" placeholder ="Admitted">


								<input type="hidden" class="form-control form-control-mb" name="info_seen" id="info_seen">
								<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="typecode" name="typecode" placeholder ="Type of encounter">
								<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="out" name="out" placeholder ="Outcome">
								<div class="col-md-6">
									<button type="button" id="hey" class="btn btn-success btn-ladda  float-right" onclick="location.reload();">	<i class="fa fa-search"></i> </button>
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

									<hr class="bg-success" >
									<div class="row">
										<div class="col-md-2">
											<img id="PatientImage" name="PatientImage" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1 bg-success" alt="">

											<small class="text text-danger"><b>Note:</b>&nbsp <i>Click button to take patient photo</i></small>
											<input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic" readonly >
											<div class="button-group">
												<a class="btn btn-success btn-md btn-block btn-square btn-ladda" data-style="zoom-in" onclick="iniCamera();"   data-toggle="modal" data-target="#modalSnapShot" > <i class="fa fa-camera fa-xs"></i></a>
											</div>
										</div>
										<div class="col-md-10">
											<div class="form-row">	
												<div class="col-md-2 col-form-label  text-default mb-1">
													Registry No.:
												</div>
												<div class="col-md-3">
													<input type="text" class="form-control form-control-mb" id="info_natregno" name="info_natregno" readonly >

												</div>
												<div class="col-md-3 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Hospital Patient ID No.:
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb" autocomplete="off"  placeholder ="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
												</div>
											</div>

											<div class="form-row">	
												<div class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Hospital Registry No.:
												</div>
												<div class="col-md-3">
													<input type="text" class="form-control form-control-mb" id="info_hosregno" placeholder ="Hospital Registry No.." name="info_hosregno"  readonly="">
												</div>
												<div class="col-md-3 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Hospital Case No.:
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb" autocomplete="off"  placeholder ="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno"  readonly="">
												</div>
											</div>

											<div class="form-row">	
												<div class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Type of Patient:
												</div>
												<div class="col-md-3">
													<select  name="info_typepat" id="info_typepat" class="form-control form-control-mb" >
														<option value="">SELECT</option>
														<option value="ER">ER</option>
														<option value="OPD">OPD</option> 
														<option value="INPA">In Patient(injury suntained during confinement)</option> 
														<option value="BHS">BHS</option>
														<option value="RHU">RHU</option> 
													</select>
												</div>
												<div class="col-md-3 col-form-label  text-default mb-1">
													Name of Reporting Health Facility:
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb" autocomplete="off"  placeholder ="Name of Reporting Health Facility" id="info_rephealthfac" name="info_rephealthfac"  readonly="">
													<input type="hidden" class="form-control form-control-mb mb-1" placeholder="Name of Referring Health Facility" id="dia_newfhud" name="dia_newfhud">
													<input type="hidden" class="form-control form-control-mb mb-1" placeholder="patient id" id="dia_patient_id" name="dia_patient_id">
													<input type="datetime-local" class="form-control form-control-mb" hidden autocomplete="off" id="dateasof" name="dateasof" value="" >
													<input type="hidden"  class="form-control form-control-mb" id="info_year" name="info_year"  value="" readonly>
													<input type="hidden" class="form-control form-control-mb" id="info_month" name="info_month"  value=""readonly >
													<input type="hidden" class="form-control form-control-mb" id="info_day" name="info_day"  value="" readonly>
												</div>
											</div>

											<div class="form-row">
												<div class="col-md-2 col-form-label text-default mb-1">
													Fullname:
												</div>
												<div class="col-md-10">
													<input type="text" class="form-control form-control-mb"  readonly autocomplete="off" id="info_fullname" name="info_fullname" placeholder ="Last name,First name,Middle name">
												</div>
												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Lastname:
												</div>
												<div class="col-md-10">
													<input type="text" readonly class="form-control form-control-mb" autocomplete="off" onchange ="fullname();"  id="info_lname" name="info_lname" placeholder ="Last name">
												</div>
												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Firstname:
												</div>
												<div class="col-md-10">
													<input type="text" readonly class="form-control form-control-mb" onchange ="fullname();" autocomplete="off" id="info_fname" name="info_fname"  placeholder ="First name">
												</div>
												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Middlename:
												</div>
												<div class="col-md-10">
													<input type="text" readonly class="form-control form-control-mb" onchange ="fullname();" autocomplete="off" id="info_mname" name="info_mname"  placeholder ="Middle name"  >
												</div>

												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Sex:
												</div>
												<div class="col-md-4">
													<select name ="info_sex" id="info_sex" readonly class="form-control form-control-mb" >
														<option value="">Select</option>
														<option value="M">Male</option>
														<option value="F">Female</option>
													</select>
												</div>

												<div class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Birth Date:
												</div>
												<div class="col-md-4">
													<input type="datetime-local" readonly class="form-control form-control-mb" name="info_dob" id="info_dob">
												</div>

												<div class=" col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Age:
												</div>
												<div class="col-md-4">
													<input type="text" readonly class="form-control form-control-mb" autocomplete="off" id="info_age" name="info_age"  placeholder ="Age"  >
												</div>
											</div>
										</div>
									</div><!--row-->

									<hr class="bg-success">
									<div class="row">
										<div class="col-md-12">
											<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
											<hr class="bg-success">
										</div>

										<div class="col-md-6">	 
											<div class="h5 text-success"> <i class="fa fa-map"></i>&nbsp <i class="fa fa-asterisk text-danger"></i>Permanent Address</div>
											<hr class="bg-success">
											<div class="form-row">
												<label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly id="selCity" name="selCity"></select>
													<textarea type="text" hidden="" class="form-control form-control-mb mb-1" id="info_street" placeholder="Street Address" name="info_street"></textarea>
												</div>

												<label class="col-md-2 col-form-label text-default mb-1">Province:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly id="selProv" name="selProv"></select>
												</div>
											</div>

											<div class="form-row">
												<label class="col-md-2 col-form-label text-default mb-1">Region:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly id="selReg" name="selReg"></select>
												</div>
											</div>
										</div>
										<div class="col-md-6">	 
											<div class="h5 text-success"> <i class="fa fa-map"></i>&nbsp Temporary Address</div>
											<hr class="bg-success">
											<div class="form-row">
												<label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly id="selCityTemp" name="selCityTemp"></select>
												</div>

												<label class="col-md-2 col-form-label text-default mb-1">Province:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly id="selProvTemp" name="selProvTemp"></select>
												</div>
											</div>

											<div class="form-row">
												<label class="col-md-2 col-form-label text-default mb-1">Region:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb" readonly id="selRegTemp" name="selRegTemp"></select>
												</div>
											</div>
										</div>	
									</div>	<!--row-->
								</div><!--body-->							
							</div>
						</div>
					</div>
				</form>
			</div>


			<!-- step-2-->

			<div id="step-2" class="">
				<form id="form-step-2" role="form">
					<div class="row">
						<div class="col-md-12">	 
							<hr class="bg-success">
							<div class="h5 text-success"> <i class="fa fa-map"></i>&nbsp <i class="fa fa-asterisk text-danger"></i>Place of Injury</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
								<div class="col-md-4">
									<select class="form-control form-control-mb"  id="selCityInj" name="selCityInj"></select>
								</div>

								<label class="col-md-2 col-form-label text-default mb-1">Province:</label>
								<div class="col-md-4">
									<select class="form-control form-control-mb" id="selProvInj" name="selProvInj"></select>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1">Region:</label>
								<div class="col-md-4">
									<select class="form-control form-control-mb" id="selRegInj" name="selRegInj"></select>
								</div>

								<label class="col-md-2 col-form-label text-default mb-1">Injury Intent:</label>
								<div class="col-md-4">
									<select  class="form-control"  id="injintent" name="injintent">
										<option value="">Select</option>
										<option value="01">Unintentional/Accidental</option>
										<option value="02">Intentional (Violence)</option>
										<option value="03">Intentional (Self-Inflicted)</option>
										<option value="04">VAWC Patient</option>
										<option value="05">Undetermined</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1">First Aid Given :</label>
								<div class="col-md-4">
									<select  class="form-control"  id="injaid" name="injaid">
										<option value="">Select</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
										<option value="U"> Unknown</option>
									</select>
								</div>

								<label class="col-md-2 col-form-label text-default mb-1">What :</label>
								<div class="col-md-4">
									<input type="text" class="form-control form-control-mb mb-2" placeholder="What" id="aid_what" name="aid_what" disabled="">
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-2">By whom :</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-2" placeholder="By whom" id="aid_whom" name="aid_whom" disabled="">
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Date and Time of Injury:</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb"  autocomplete="off" id="incident_date" name="incident_date" >
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Date and Time of Consultation/Admission:</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb"  autocomplete="off" id="consult_date" name="consult_date" >
								</div>
							</div>
							<hr class="bg-success">
						</div>
					</div>	
					<div class="row">
						<div class="col-md-6">	 
							<div class="h5 text-success"> <i class="fa fa-asterisk text-danger"></i>&nbsp<i class="fa fa fa-plus-circle"></i> Nature of Injury/ies:</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1">Multiple Injuries:</label>
								<div class="col-md-10">
									<select  class="form-control"  id="multinj" name="multinj">
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
									<input type="checkbox" id="multi_abra" name="multi_abra" value="N" class="multi" >&nbsp;
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
							</div>

							<label class="col-md-12 col-form-label text-default mb-1"><b>FRACTURE</b></label>
							<div class="form-row">
								<div class="col-md-2">
									<input type="checkbox" id="multi_close" name="multi_close" value="N" class="multi">&nbsp;
									<label class="col-form-label text-default mb-1">Closed Type</label>
								</div>
								<div class="col-md-4">
									<input type="text" id="multi_6" name="multi_6" placeholder="(ex. comminuted, depressed fracture)" class="mult form-control form-control-mb">
								</div>

								<div class="col-md-2">
									<input type="checkbox" id="multi_open" name="multi_open" value="N" class="multi">&nbsp;
									<label class="col-form-label text-default mb-1">Open Type</label>
								</div>
								<div class="col-md-4">
									<input type="text" id="multi_7" name="multi_7" placeholder="(ex. Compound, infected fracture)" class="mult form-control form-control-mb">
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
							<div class="h5 text-success"><i class="fa fa fa-plus-circle"></i></i>&nbsp External Cause/s of Injury/ies:</div>
							<hr class="bg-success">
							<div class="form-row">
								<div class="col-md-6">
									<input type="checkbox" id="ext_sex" name="ext_sex" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Sexual Assault / Sexual Abuse/ Rape (Alleged)</label>
								</div>
								<div class="col-md-6">
									<input type="checkbox" id="ext_trans" name="ext_trans" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Transport / Vehicular Accident</label>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6">
									<input type="checkbox" id="ext_mau" name="ext_mau" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Mauling / Assault</label>
								</div>

								<div class="col-md-6">
									<input type="checkbox" id="ext_hang" name="ext_hang" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Hanging / Strangulation</label>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="ext_contact" name="ext_contact" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Contact with sharp objects, specify object</label>
								</div>
								<div class="col-md-2">
									<input type="text" id="ext_5" name="ext_5" placeholder="Contact with sharp objects, specify object" class="ex form-control  form-control-mb">
								</div>

								<div class="col-md-4">
									<input type="checkbox" id="ext_gun" name="ext_gun" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Gunshot, specify weapon</label>
								</div>
								<div class="col-md-2">
									<input type="text" id="ext_2" name="ext_2" placeholder="Gunshot, specify weapon" class="ex form-control col-md-10 form-control-mb">
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-2">
									<input type="checkbox" id="ext_burn" name="ext_burn" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Burns </label>
								</div>
								<div class="col-md-2">
									<select  class="ex form-control"  id="ext_burn1" name="ext_burn1">
										<option value="">Select</option>
										<option value="01">Heat</option>
										<option value="02">Fire</option>
										<option value="03">Electricity</option>
										<option value="04">Oil</option>
										<option value="05">Friction</option>
										<option value="06">Others, Specify</option>
									</select>
								</div>
								<div class="col-md-2">
									<input type="text" id="ext_3" name="ext_3" placeholder="Burn" class="ex form-control form-control-mb">
								</div>

								<div class="col-md-4">
									<input type="checkbox" id="ext_chem" name="ext_chem" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Chemical / substance specify</label>
								</div>
								<div class="col-md-2">
									<input type="text" id="ext_4" name="ext_4" placeholder="Chemical / substance specify" class="ex form-control col-md-10 form-control-mb">
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-2">
									<input type="checkbox" id="ext_drown" name="ext_drown" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Drowning</label>
								</div>
								<div class="col-md-2">
									<select  class="ex form-control"  id="ext_drown1" name="ext_drown1">
										<option value="">Type/ Body of Water</option>
										<option value="01">Sea</option>
										<option value="02">River</option>
										<option value="03">Lake</option>
										<option value="04">Pool</option>
										<option value="05">Bath Tub</option>
										<option value="06">Others, Specify</option>
									</select>
								</div>
								<div class="col-md-2">
									<input type="text" id="ext_6" name="ext_6" placeholder="Drowning" class="ex form-control  form-control-mb">
								</div>

								<div class="col-md-4">
									<input type="checkbox" id="ext_bite" name="ext_bite" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Bite / stings, Specify animal / insect</label>
								</div>
								<div class="col-md-2">
									<input type="text" id="ext_1" name="ext_1" placeholder="Bite / stings, Specify animal / insect" class="ex form-control form-control-mb">
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="ext_expose" name="ext_expose" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Exposure to forces of nature</label>
								</div>
								<div class="col-md-4">
									<select  class="ex form-control"  id="ext_expose1" name="ext_expose1">
										<option value="">Select</option>
										<option value="01">Earthquake</option>
										<option value="02">Volcanic eruption</option>
										<option value="03">Typhoon</option>
										<option value="04">Landslide/Avalanche</option>
										<option value="05">Tidal Wave Tub</option>
										<option value="06">Flood(due to storm/excessive rain)</option>
										<option value="07">Others, Specify</option>
									</select>
								</div>
								<div class="col-md-4">
									<input type="text" id="ext_7" name="ext_7" placeholder="Exposure to forces of nature" class="ex form-control  form-control-mb">
								</div>			
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="ext_fall" name="ext_fall" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Fall</label>
								</div>
								<div class="col-md-4">
									<select  class="ex form-control"  id="ext_fall1" name="ext_fall1">
										<option value="">Select</option>
										<option value="1">From</option>
										<option value="2">In</option>
										<option value="3">On</option>
										<option value="4">Into</option>
									</select>
								</div>
								<div class="col-md-4">
									<input type="text" id="ext_8" name="ext_8" placeholder="Fall" class="ex form-control  form-control-mb">
								</div>			
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="ext_cracker" name="ext_cracker" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Firecracker, specify type/s</label>
								</div>
								<div class="col-md-4">
									<select  name="selFire" id="selFire" class="ex form-control form-control-mb"></select>
								</div>
								<div class="col-md-4">
									<input type="text" id="ext_9" name="ext_9" placeholder="Firecracker, specify type/s" class="ex form-control  form-control-mb">
								</div>			
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="ext_other" name="ext_other" value="N" class="external">&nbsp;
									<label class="col-form-label text-default mb-1">Others, specify</label>
								</div>
								<div class="col-md-8">
									<input type="text" id="ext_10" name="ext_10" placeholder="Others, specify" class="ex form-control  form-control-mb">
								</div>
							</div>
						</div><!--col 6-->
					</div>	<!--row-->
				</form>
			</div>

			<!--step 3-->
			<div id="step-3" class="">
				<form id="form-step-3" role="form">
					<div class="row">
						<div class="col-md-12">
							<hr class="bg-success">
							<div class="form-row">
								<div class="col-md-4 col-form-label h5 text-success">
									<i class="fa fa-car"></i>&nbsp;FOR TRANSPORT/VEHICULAR ACCIDENT ONLY:
								</div>
								<div class="col-md-2">
									<select  class="form-control"  id="ext_transpo" name="ext_transpo">
										<option value="">Select</option>
										<option value="01">Land</option>
										<option value="02">Water</option>
										<option value="03">Air</option>
									</select>
								</div>
								<div class="col-md-2">
									<select  class="form-control"  id="ext_transpo1" name="ext_transpo1">
										<option value="">Select</option>
										<option value="10">Collision</option>
										<option value="20">Non-Collision</option>
									</select>
								</div>
							</div>
							<hr class="bg-success">

							<div class="form-row">
								<div class="col-md-12 col-form-label h5 text-success">
									<i class="fa fa-car"></i>&nbsp;Vehicles Involved:
								</div>
							</div>		
							<div class="form-row">
								<label class="col-md-4 col-form-label  text-default mb-1">
									Patients Vehicle:
								</label>
								<div class="col-md-2">
									<select  class="form-control"  id="veh_pat" name="veh_pat">
										<option value="">Select</option>
										<option value="00">None(Pedestrian)</option>
										<option value="30">Bus</option>
										<option value="10">Car</option>
										<option value="20">Van</option>
										<option value="40">Motorcycle</option>
										<option value="60">Tricycle</option>
										<option value="50">Bicycle</option>
										<option value="99">Unknown</option>
										<option value="88">Others</option>
									</select>
								</div>
								<div class="col-md-2">
									<label class="col-form-label text-default ">If Others, specify:</label>
								</div>
								<div class="col-md-4">
									<input type="text" id="veh_pat1" name="veh_pat1" placeholder="Others, specify" class="form-control  form-control-mb">
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-4 col-form-label  text-default mb-1">
									Other Vehicle/Object Involved (for COLLISION accident ONLY)
								</label>
								<div class="col-md-2">
									<select  class="form-control collision"  id="veh_col" name="veh_col">
										<option value="">Select</option>
										<option value="00">None(Pedestrian)</option>
										<option value="30">Bus</option>
										<option value="10">Car</option>
										<option value="20">Van</option>
										<option value="40">Motorcycle</option>
										<option value="60">Tricycle</option>
										<option value="50">Bicycle</option>
										<option value="99">Unknown</option>
										<option value="88">Others</option>
									</select>
								</div>
								<div class="col-md-2">
									<label class="col-form-label text-default ">If Others, specify:</label>
								</div>
								<div class="col-md-4">
									<input type="text" id="veh_col1" name="veh_col1" placeholder="Others, specify" class="collision form-control  form-control-mb">
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-4 col-form-label  text-default mb-1">
									Position of Patient
								</label>
								<div class="col-md-2">
									<select  class="form-control "  id="veh_position" name="veh_position">
										<option value="">Select</option>
										<option value="10">Pedestrian</option>
										<option value="20">Driver</option>
										<option value="50">Captain</option>
										<option value="40">Pilot</option>
										<option value="30">Front Passenger</option>
										<option value="35">Rear Passenger</option>
										<option value="60">Crew</option>
										<option value="99">Unknown</option>
										<option value="88">Others</option>
									</select>
								</div>
								<div class="col-md-2">
									<label class="col-form-label text-default ">If Others, specify:</label>
								</div>
								<div class="col-md-4">
									<input type="text" id="veh_position1" name="veh_position1" placeholder="Others, specify" class=" form-control  form-control-mb">
								</div>
							</div> 

							<div class="form-row">
								<label class="col-md-4 col-form-label  text-default mb-1">
									Place of Occurence
								</label>
								<div class="col-md-2">
									<select  class="form-control "  id="veh_placeoccur" name="veh_placeoccur">
										<option value="">Select</option>
										<option value="10">Home</option>
										<option value="30">School</option>
										<option value="50">Road</option>
										<option value="60">Videoke Bars</option>
										<option value="70">Workplace, Specify</option>
										<option value="88">Others, Specify</option>
										<option value="99">Unknown</option>
									</select>
								</div>
								<div class="col-md-1">
									<label class="col-form-label text-default ">Workplace, specify:</label>
								</div>
								<div class="col-md-2">
									<input type="text" id="veh_placework" name="veh_placework" placeholder="Workplace, specify" class=" form-control  form-control-mb" disabled="">
								</div>
								<div class="col-md-1">
									<label class="col-form-label text-default ">Others, specify:</label>
								</div>
								<div class="col-md-2">
									<input type="text" id="veh_placeoccur1" name="veh_placeoccur1" placeholder="Others, specify" class=" form-control  form-control-mb" disabled>
								</div>
							</div> 
							<div class="form-row">
								<label class="col-md-4 col-form-label  text-default mb-1">
									Activity of the Patient at the time of incident:
								</label>
								<div class="col-md-2">
									<select  class="form-control"  id="veh_act" name="veh_act">
										<option value="">Select</option>
										<option value="10">Sports</option>
										<option value="20">Leisure</option>
										<option value="30">Work Related</option>
										<option value="88">Others, Specify</option>
										<option value="99">Unknown</option>
									</select>
								</div>
								<div class="col-md-2">
									<label class="col-form-label text-default ">Others, specify:</label>
								</div>
								<div class="col-md-4">
									<input type="text" id="veh_act1" name="veh_act1" placeholder="Others, specify" class=" form-control  form-control-mb">
								</div>
							</div> 

						</div>		
					</div>
				</form>
			</div>


			<!--step 4-->
			<div id="step-4" class="">
				<form id="form-step-4" role="form">
					<div class="row">
						<div class="col-md-6">
							<hr class="bg-success">
							<div class="h5 text-success"><i class="fa fa-exclamation-circle"></i>&nbsp;Other risk factors at the time of the incident:(check all that apply)</label></div>
							<hr class="bg-success">
							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="oth_alcohol" name="oth_alcohol">  &nbsp;
									<label class="col-form-label  text-default mb-1" >Alcohol/Liquor</label>
								</div>
								<div class="col-md-4">
									<input type="checkbox" id="oth_smoking" name="oth_smoking">  &nbsp;
									<label class="col-form-label  text-default mb-1" >Smoking</label>
								</div>

								<div class="col-md-4">
									<input type="checkbox" id="oth_drugs" name="oth_drugs">  &nbsp;
									<label class="col-form-label  text-default mb-1" >Drugs</label>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="oth_mobile" name="oth_mobile">  &nbsp;
									<label class="col-form-label  text-default mb-1" >Using mobile phone</label>
								</div>
								<div class="col-md-4">
									<input type="checkbox" id="oth_sleepy" name="oth_sleepy">  &nbsp;
									<label class="col-form-label  text-default mb-1" >Sleepy</label>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="oth_others" name="oth_others" >&nbsp;
									<label class="col-form-label  text-default mb-1" >Others</label>
								</div>

								<div class="col-md-8">
									<input type="text" id="oth_others_spec" name="oth_others_spec" placeholder="(e.g. suspected under the influence of substance used)" class=" form-control  form-control-mb">
								</div>
							</div>
						</div>	
						<div class="col-md-6">	 
							<hr class="bg-success">
							<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp;Safety: (check all that apply)</label></div>
							<hr class="bg-success">
							<div class="form-row">
								<div class="col-md-2">
									<input type="checkbox" id="safety_none" name="safety_none" >&nbsp;
									<label class="col-form-label  text-default mb-1" >None</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="safety_airbag" name="safety_airbag">&nbsp;
									<label class="col-form-label  text-default mb-1" >Airbag</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="safety_helmet" name="safety_helmet" >&nbsp;
									<label class="col-form-label  text-default mb-1" >Helmet</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="safety_child" name="safety_child" >&nbsp;
									<label class="col-form-label  text-default mb-1" >Childseat</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="safety_seatbelt" name="safety_seatbelt" >&nbsp;
									<label class="col-form-label  text-default mb-1" >Seatbelt</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="safety_unk" name="safety_unk" >&nbsp;
									<label class="col-form-label  text-default mb-1" >Unknown</label>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12">
									<input type="checkbox" id="safety_child" name="safety_life" >&nbsp;
									<label class="col-form-label  text-default mb-1" >Life vest/Lifejacket/Floatation device (for drowning)</label>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<input type="checkbox" id="safety_others" name="safety_others" >&nbsp;
									<label class="col-form-label  text-default mb-1" >Others</label>
								</div>

								<div class="col-md-8">
									<input type="text" id="safety_others_spec" name="safety_others_spec" placeholder="(e.g. suspected under the influence of substance used)" class=" form-control  form-control-mb">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

			<!--step 5-->
			<div id="step-5" class="">
				<form id="form-step-5" role="form">
					<div class="row">
						<hr class="bg-success">
						<div class="col-md-12">
							<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp; HOSPITAL/FACILITY DATA: ER/OPD/BHS/RHU</div>
							<hr class="bg-success">

						</div>	

						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1" >Transferred from another hospital/facility</label>
								</div>

								<div class="col-md-6">
									<select  class="form-control"  id="pat_trans" name="pat_trans">
										<option value="">Select</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
									</select>
								</div>
							</div> 

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1" > Referred by another Hospital for Laboratory and/or other medical procedures</label>
								</div>

								<div class="col-md-6">
									<select  class="hos form-control"  id="pat_refer" name="pat_refer">
										<option value="">Select</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
									</select>
								</div>  
							</div> 

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1" >Hospital:</label>
								</div>
								<div class="col-md-6">
									<select  name="selFac" id="selFac" class="hos form-control form-control-mb"></select>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1" >Physician:</label>
								</div>
								<div class="col-md-6">
									<input type="text" id="pat_physician" name="pat_physician" placeholder="Physician" class="hos  form-control  form-control-mb">
								</div>
							</div>



							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1" >Status upon reaching Facility/Hospital</label>
								</div>
								<div class="col-md-6">
									<select  class="hos form-control"  id="pat_status" name="pat_status">
										<option value="">Select</option>
										<option value="01">Dead on Arrival</option>
										<option value="02">Alive - Conscious</option>
										<option value="03">Alive - Unconscious</option>
									</select>
								</div>
							</div>



							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">Mode of transport to the Hospital/Facility</label>
								</div>

								<div class="col-md-3">
									<select  class="hos form-control"  id="pat_mode" name="pat_mode">
										<option value="">Select</option>
										<option value="01">Ambulance</option>
										<option value="02">Police Vehicle</option>
										<option value="03">Private Vehicle</option>
										<option value="04">Others, Specify</option>
									</select>
								</div>

								<div class="col-md-3">
									<input type="text" id="pat_mode1" name="pat_mode1" placeholder="Mode of transport" class="hos form-control  form-control-mb">
								</div>                  
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">Initial Impression</label>
								</div>

								<div class="col-md-6">
									<input type="text" id="pat_initial" name="pat_initial" placeholder="Initial Impression" class="hos form-control  form-control-mb" required>
								</div>

							</div>

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">ICD-10 Code/s:  Nature of Injury:</label>
								</div>

								<div class="col-md-6">
									<select name = "hospital_diag[]" id="hospital_diag" class="form-control form-control mb-1" ></select>
								</div>
							</div>	

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">ICD-10 Code/s:  External Cause of Injury:</label>
								</div>

								<div class="col-md-6">
									<select name = "hospital_ext_diag[]" id="hospital_ext_diag" class="form-control form-control mb-1" ></select>
								</div>

							</div>

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">Disposition:</label>
								</div>

								<div class="col-md-3">
									<select  class="hos form-control"  id="pat_disp" name="pat_disp" required>
										<option value="">Select</option>
										<option value="ADMIT">Admitted</option>
										<option value="HAMAA">HAMA</option>
										<option value="ABSCN">Absconded</option>
										<option value="TRASH">Treated and Sent Home</option>
										<option value="REFER">Transferred to another facility/hospital, specify</option>
										<option value="DIEDD">Died</option>
										<option value="REFAD">Refused Admission</option>
									</select>
								</div>

								<div class="col-md-3">
									<select  name="selFac2" id="selFac2" class="hos form-control form-control-mb"></select>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">Outcome:</label>
								</div>

								<div class="col-md-6">
									<select  class="hos form-control"  id="pat_outcome" name="pat_outcome" required>
										<option value="">Select</option>
										<option value="10">Improved</option>
										<option value="20">Unimproved</option>
										<option value="30">Died</option>
									</select>
								</div>

							</div>
						</div>
					</div>
				</form>
			</div>

			<!--step 6-->
			<div id="step-6" class="">
				<form id="form-step-6" role="form">
					<div class="row">						
						<div class="col-md-12">
							<hr class="bg-success">
							<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp;  IN-PATIENT (for admitted hospital cases only)</div>
							<hr class="bg-success">
							<div class="form-row">
								<div class="col-md-3">
									<label class="col-form-label  text-default mb-1">Complete Final Diagnosis:</label>
								</div>

								<div class="col-md-9">
									<input type="text" id="finaldiag" name="finaldiag" disabled="" placeholder="Complete Final Diagnosis" class=" form-control  form-control-mb">
								</div>                   
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">Disposition:</label>
								</div>

								<div class="col-md-3">
									<select  class="form-control"  id="pat_disp2" name="pat_disp2" disabled="">
										<option value="">Select</option>
										<option value="DISCH">Discharged</option>
										<option value="HAMAA">HAMA</option>
										<option value="ABSCN">Absconded</option>
										<option value="DIEDD">Died</option>
										<option value="REFER">Transferred to another facility/hospital, specify</option>
										<option value="OTH">Others, specify</option>
										<option value="REFAD">Refused Admission</option>
									</select>
								</div>

								<div class="col-md-3">
									<select  name="selFac3" id="selFac3" class="form-control form-control-mb" disabled=""></select>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">ICD-10 Code/s:  Nature of Injury:</label>
								</div>

								<div class="col-md-6">
									<select name = "finalicd10" id="finalicd10" class="form-control form-control mb-1" disabled=""></select>
								</div>                   
							</div>  
						</div>   

						<div class="col-md-6">
							<div class="form-row">
								<div class="col-md-3">
									<input type="text" id="inpat_oth" name="inpat_oth" placeholder="Others, specify" class=" form-control  form-control-mb" disabled="">
								</div>

								<div class="col-md-3">
									<label class="col-form-label  text-default mb-1">Outcome:</label>
								</div>

								<div class="col-md-6">
									<select  class="form-control"  id="pat_outcome2" name="pat_outcome2" disabled="">
										<option value="">Select</option>
										<option value="01">Improved</option>
										<option value="02">Unimproved</option>
										<option value="03">Died</option>
									</select>
								</div>                   
							</div>

							<div class="form-row">
								<div class="col-md-6">
									<label class="col-form-label  text-default mb-1">ICD-10 Code/s:  External Cause of Injury:</label>
								</div>

								<div class="col-md-6">
									<select name = "external_diag[]" id="external_diag" class="form-control form-control mb-1" disabled="">				
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-row">
								<div class="col-md-3">
									<label class="col-form-label  text-default mb-1">Comments:</label>
								</div>

								<div class="col-md-9">
									<textarea type="text" class="form-control form-control-mb mb-1" id="pat_comment" placeholder="Comments" name="pat_comment" disabled=""></textarea>
								</div>                   
							</div>
						</div>
					</div>
				</form>
			</div>


			<script src="<?php echo base_url()?>assets/scripts/oneiss/injury_validation.js"></script>
