<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br/><small>Patient Data</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-chart fa-2x"></i><br><small>Typhoid Data</small></a>
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
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Typhoid and Paratyphoid Fever (ICD 10 Code: A01)</h4></div>
								<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly >
								<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly >
								<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="hospcode" name="hospcode" placeholder ="Name">
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
												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Fullname:
												</div>
												<div class="col-md-10">
													<input type="text" class="form-control form-control-mb" readonly autocomplete="off"   id="info_fullname" name="info_fullname" placeholder ="Fullname">
												</div>
												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Lastname:
												</div>
												<div class="col-md-10">
													<input type="text" class="form-control form-control-mb" readonly autocomplete="off"   id="info_lname" name="info_lname" placeholder ="Last name">
												</div>
												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Firstname:
												</div>
												<div class="col-md-10">
													<input type="text" class="form-control form-control-mb" readonly autocomplete="off" id="info_fname" name="info_fname"  placeholder ="First name">
												</div>
												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Middlename:
												</div>
												<div class="col-md-10">
													<input type="text" class="form-control form-control-mb" readonly  autocomplete="off" id="info_mname" name="info_mname"  placeholder ="Middle name"  >
												</div>

												<div class="col-md-2 col-form-label text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Sex:
												</div>
												<div class="col-md-4">
													<select name ="info_sex" id="info_sex" class="form-control form-control-mb" readonly>
														<option value="">Please Select</option>
														<option value="M">Male</option>
														<option value="F">Female</option>
													</select>
												</div>

												<div class="col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Birth Date:
												</div>
												<div class="col-md-4">
													<input type="datetime-local" class="form-control form-control-mb" name="info_dob" id="info_dob" readonly>
												</div>

												<div class=" col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Age:
												</div>
												<div class="col-md-4">
													<input type="text" readonly class="form-control form-control-mb" autocomplete="off" readonly  id="info_age" name="info_age"  placeholder ="Age"  >
													<input type="hidden"  class="form-control form-control-mb" id="info_year" name="info_year"  value="" readonly>
													<input type="hidden" class="form-control form-control-mb" id="info_month" name="info_month"  value=""readonly >
													<input type="hidden" class="form-control form-control-mb" id="info_day" name="info_day"  value="" readonly>
												</div>

												<div class=" col-md-2 col-form-label  text-default mb-1">
													<i class="fa fa-asterisk text-danger"></i>Patient ID:
												</div>
												<div class="col-md-4">
													<input type="text" readonly class="form-control form-control-mb" autocomplete="off" readonly  id="percode" name="percode"  placeholder ="Patient ID"  >
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
											<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp;Permanent Address</div>
											<hr class="bg-success">
											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" id="info_street" readonly="" placeholder="Street Address" name="info_street">
												</div>

												<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb"  id="selCity" name="selCity" readonly="">
													</select>
												</div>
											</div>	

											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
												<div class="col-md-4">
													<select  class="form-control form-control-mb"  id="selBrgy" name="selBrgy" readonly=""> </select>
												</div>

												<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb"   id="selProv" name="selProv" readonly="">
														<option value="">Please Select</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
												<div class="col-md-4">
													<select  class="form-control" id="selReg" name="selReg" readonly=""></select>
												</div>

												<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" readonly="" placeholder="Zip Code" id="info_zip" name="info_zip">
												</div>
											</div>
										</div>	

										<div class="col-md-6">
											<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Temporary Address</div>
											<hr class="bg-success">
											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">No. Street:</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" id="info_street_temp" placeholder="Street Address" name="info_street_temp">
												</div>

												<label class="col-md-2 col-form-label  text-default mb-1">City/Municipality:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb"  id="selCityTemp" name="selCityTemp">
													</select>
												</div>
											</div>	

											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
												<div class="col-md-4">
													<select  class="form-control form-control-mb"  id="selBrgyTemp" name="selBrgyTemp"></select>
												</div>

												<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
												<div class="col-md-4">
													<select class="form-control form-control-mb"   id="selProvTemp" name="selProvTemp">
														<option value="">Select</option>
													</select>
												</div>
											</div>

											<div class="form-row">
												<label class="col-md-2 col-form-label  text-default mb-1">Region:</label>
												<div class="col-md-4">
													<select  class="form-control" id="selRegTemp" name="selRegTemp"></select>
												</div>

												<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
												<div class="col-md-4">
													<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_ziptemp" name="info_ziptemp">
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
						<div class="col-md-6">
							<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp;First Page</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-3 col-form-label  text-default mb-1">Indigenous People:</label>
								<div class="col-md-9">
									<select  name="selIndig" id="selIndig" class="hos form-control form-control-mb"></select>
								</div>	

								<label class="col-md-3 col-form-label  text-default mb-1">Consulted?</label>
								<div class="col-md-9">
									<select name ="consult" id ="consult" class="form-control">
										<option value="">Please Select</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
									</select>
								</div>
								<label class="col-md-3 col-form-label  text-default mb-1">Date of FIRST consultation:</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" disabled=""  id="FIRST" name="FIRST" >
								</div>

								<label class="col-md-3 col-form-label  text-default mb-1">Place of consultation:</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb" autocomplete="off" disabled=""  id="place_consult" name="place_consult" placeholder ="Place of consultation">
								</div>	


								<label class="col-md-3 col-form-label  text-default mb-1">Date onset of illness:</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" disabled=""  id="onset_ill" name="onset_ill">
								</div>	
							</div>	
						</div>	
						<div class="col-md-6">
							<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Second Page</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-3 col-form-label  text-default mb-1"> Date of Specimen Collected:</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="specimen_collect" name="specimen_collect">
								</div>	

								<label class="col-md-3 col-form-label  text-default mb-1"> Widal Test:</label>
								<div class="col-md-9">
									<select name ="widal" id ="widal" class="form-control">
										<option value="">Please Select</option>
										<option value="P">Positive</option>
										<option value="N">Negative</option>
										<option value="ND">Not Done</option>
									</select>
								</div>	

								<label class="col-md-3 col-form-label  text-default mb-1"> Typhidot:</label>
								<div class="col-md-9">
									<select name ="typhoidot" id ="typhoidot" class="form-control">
										<option value="">Please Select</option>
										<option value="P">Positive</option>
										<option value="N">Negative</option>
										<option value="ND">Not Done</option>
									</select>
								</div>	


								<label class="col-md-3 col-form-label  text-default mb-1"> Tubex:</label>
								<div class="col-md-9">
									<select name ="tube" id ="tube" class="form-control">
										<option value="">Please Select</option>
										<option value="P">Positive</option>
										<option value="N">Negative</option>
										<option value="ND">Not Done</option>
									</select>
								</div>	

								<label class="col-md-3 col-form-label  text-default mb-1"> Stool/ Blood Culture:</label>
								<div class="col-md-9">
									<select name ="stool" id ="stool" class="form-control">
										<option value="">Please Select</option>
										<option value="P">Positive</option>
										<option value="N">Negative</option>
										<option value="ND">Not Done</option>
									</select>
								</div>

								<label class="col-md-3 col-form-label  text-default mb-1">Case Classification:</label>
								<div class="col-md-9">
									<select name ="case_classif" id ="case_classif" class="form-control">
										<option value="">Please Select</option>
										<option value="S">Suspect</option>
										<option value="P">Probable</option>
										<option value="C">Confirmed</option>
									</select>
								</div>			
							</div>


						</div>	

					</div>
				</form>

			</div>

			<input type="hidden" name = "base_url" id = "base_url" value="<?php echo base_url();?>">

			<script src="<?php echo base_url()?>assets/scripts/socialservice/family_delete.js"></script>
			<script src="<?php echo base_url()?>assets/scripts/socialservice/family.js"></script>
			<script src="<?php echo base_url()?>assets/scripts/socialservice/family_validation.js"></script>