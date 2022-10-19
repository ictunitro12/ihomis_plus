<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br/><small>Patient Data</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-car-crash fa-2x"></i><br><small>Incident Information</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fa fa-file fa-2x"></i><br><small>Involvement</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-user-injured fa-2x"></i><br><small>Multiple Injuries</small></a>
		</li>
		<li>
			<a href="#step-5"><i class="fa fa-user-alt fa-2x"></i><br><small>Disposition</small></a>
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
								<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Fireworkds-Related Injury (FWRI) Surveillance</h4></div>
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

										<div class="col-md-12">
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
							<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp; Information</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Date and Time of Injury:</label>
								<div class="col-md-8">
									<input type="datetime-local" class="form-control form-control-mb"  autocomplete="off" id="incident_date" name="incident_date" >
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Date and Time of Consultation/Admission:</label>
								<div class="col-md-8">
									<input type="datetime-local" readonly="" class="form-control form-control-mb"  autocomplete="off" id="consult_date" name="consult_date" >
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1">Referral from another hospital:</label>
								<div class="col-md-4">
									<select name ="incident_refer" id="incident_refer" class="form-control form-control-mb" >
										<option value="">Select</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
									</select>
								</div>
								<div class="col-md-4">
									<select  name="selFac" id="selFac" class="hos form-control form-control-mb"></select>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1">Place of Occurence	</label>
								<div class="col-md-4">
									<select name ="incident_placeoccur" id="incident_placeoccur" class="form-control form-control-mb" >
										<option value="">Select</option>
										<option value="1">Home</option>
										<option value="2">Street</option>
										<option value="3">Designated area for community fireworks display</option>
										<option value="4">Others, specify</option>
									</select>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control form-control-mb mb-1"  id="incident_otherspec" name="incident_otherspec">
								</div>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Place of Injury</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Street:</label>
								<div class="col-md-10">
									<textarea type="text" class="form-control form-control-mb mb-1" id="street_inj" placeholder="Street Address" name="street_inj"></textarea>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>City/Municipality:</label>
								<div class="col-md-4">
									<select class="form-control form-control-mb"  id="selCityInj" name="selCityInj"></select>
								</div>

								<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Barangay:</label>
								<div class="col-md-4">
									<select class="form-control form-control-mb" id="selBrgyInj" name="selBrgyInj"></select>
								</div>
							</div>

							<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Province:</label>
								<div class="col-md-4">
									<select class="form-control form-control-mb" id="selProvInj" name="selProvInj"></select>
								</div>

								<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Region:</label>
								<div class="col-md-4">
									<select class="form-control form-control-mb" id="selRegInj" name="selRegInj"></select>
								</div>
							</div>		
						</div>	
					</div>
				</form>
			</div>

			<!--step 3-->
			<div id="step-3" class="">
				<form id="form-step-3" role="form">
					<div class="row">
						<div class="col-md-12">
							<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp; Involvement</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Type of Involvement	</label>
								<div class="col-md-8">
									<select name ="incident_involve" id="incident_involve" class="form-control form-control-mb" >
										<option value="">Select</option>
										<option value="10">Active</option>
										<option value="20">Passive</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Nature of Injury	</label>
								<div class="col-md-8">
									<select name ="incident_nature" id="incident_nature" class="form-control form-control-mb" >
										<option value="">Select</option>
										<option value="10">Fireworks injury</option>
										<option value="30">Fireworks ingestion</option>
										<option value="40">Stray bullet injury</option>
										<option value="50">Tetanus</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1">If fireworks injury, Type of Injury</label>
								<div class="col-md-4">
									<input type="checkbox" id="inj_withamp" name="inj_withamp" value="N" class="typeinj">&nbsp;
									<label class="col-form-label text-default">Blast/burn injury WITH amputation</label>				
								</div>
								<div class="col-md-4">
									<input type="checkbox" id="inj_noamp" name="inj_noamp" value="N" class="typeinj">&nbsp;
									<label class="col-form-label text-default">Blast/burn injury NO amputation</label>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-4">
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="inj_typeeye" name="inj_typeeye" value="N" class="typeinj">&nbsp;
									<label class="col-form-label text-default">Eye injury</label>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Diagnosis (include nature and site)</label>
								<div class="col-md-8">
									<select  multiple   name = "diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" required="">				
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
					<div class="row">
						<div class="col-md-12">
							<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp; Multiple Injuries</div>
							<hr class="bg-success">
							
							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1">If fireworks injury, Multiple injuries	</label>
								<div class="col-md-8">
									<select name ="incident_multipleinj" id="incident_multipleinj" class="form-control form-control-mb" >
										<option value="">Select</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1">Anatomical Location:</label>
								<div class="col-md-1">
									<input type="checkbox" id="inj_head" name="inj_head" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Head</label>
								</div>
								<div class="col-md-1">
									<input type="checkbox" id="inj_eye" name="inj_eye" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Eye</label>
								</div>
								<div class="col-md-1">				
									<input type="checkbox" id="inj_neck" name="inj_neck" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Neck</label>
								</div>
								<div class="col-md-1">				
									<input type="checkbox" id="inj_chest" name="inj_chest" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Chest</label>
								</div>
								<div class="col-md-1">				
									<input type="checkbox" id="inj_back" name="inj_back" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Back</label>
								</div>
								<div class="col-md-2">				
									<input type="checkbox" id="inj_abdomen" name="inj_abdomen" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Abdomen</label>
								</div>
								<div class="col-md-2">				
									<input type="checkbox" id="inj_pelvis" name="inj_pelvis" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Pelvis</label>
								</div>
								<div class="col-md-1">				
									<input type="checkbox" id="inj_thigh" name="inj_thigh" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Thigh</label>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1">	</label>
								<div class="col-md-1">
									<input type="checkbox" id="inj_legs" name="inj_legs" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Legs</label>
								</div>
								<div class="col-md-1">
									<input type="checkbox" id="inj_knee" name="inj_knee" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Knee</label>	
								</div>
								<div class="col-md-1">				
									<input type="checkbox" id="inj_foot" name="inj_foot" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Foot</label>
								</div>
								<div class="col-md-1">				
									<input type="checkbox" id="inj_hand" name="inj_hand" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Hand</label>
								</div>
								<div class="col-md-1">

								</div>
								<div class="col-md-2">				
									<input type="checkbox" id="inj_buttocks" name="inj_buttocks" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Buttocks</label>
								</div>
								<div class="col-md-2">				
									<input type="checkbox" id="inj_arm" name="inj_arm" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Forearm/Arm</label>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1">Name of Firework</label>
								<div class="col-md-4">
									<select  name="selFire" id="selFire" class="ex form-control form-control-mb"></select>
								</div>

								<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Liquor Intoxication</label>
								<div class="col-md-4">
									<select  name="inj_liquor" id="inj_liquor"  class="form-control form-control-mb" >
										<option value="">Select</option> 
										<option value="Y">Yes</option> 
										<option value="N">No</option> 
									</select>
								</div>
							</div>

							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1 text-success">Treatment Given</label>
								<div class="col-md-2">
									<input type="checkbox" id="inj_ats" name="inj_ats" value="N" class="">&nbsp;
									<label class="col-form-label text-default">ATS/TIG</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="inj_toxoid" name="inj_toxoid" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Toxoid</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="inj_none" name="inj_none" value="N" class="">&nbsp;
									<label class="col-form-label text-default">None</label>
								</div>
								<div class="col-md-2">
									<input type="checkbox" id="inj_oth_spec" name="inj_oth_spec" value="N" class="">&nbsp;
									<label class="col-form-label text-default">Other, specify</label>
								</div>
								<div class="col-md-2">
									<input type="text" class="form-control form-control-mb mb-1" placeholder="Others specify" id="inj_othtreat" name="inj_othtreat">
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
						<div class="col-md-12">
							<div class="h5 text-success"><i class="fa fa-asterisk text-danger"></i> <i class="fa fa-map"></i>&nbsp; Disposition</div>
							<hr class="bg-success">
							<div class="form-row">
								<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Disposition (After Consultation/On Arrival):</label>
								<div class="col-md-2">
									<select  name="inj_dispafter" id="inj_dispafter"  class="form-control form-control-mb" >
										<option value="">Select</option> 
										<option value="TRASH">Treated and Sent Home</option> 
										<option value="ADMIN">Admitted</option> 
										<option value="REFAD">Refused admission</option>
										<option value="REFER">Transferred/Referred to</option>
										<option value="DIEDD">Died (Dead on Arrival)</option>
									</select>
								</div>
								<div class="col-md-2">
									<select  name="selFac2" id="selFac2" class="hos form-control form-control-mb"></select>
								</div>
								<label class="col-md-2 col-form-label text-default mb-1">Outcome (After Consultation/On Arrival):</label>
								<div class="col-md-2">
									<select  name="inj_dispaftout" id="inj_dispaftout"  class="form-control form-control-mb" >
										<option value="">Select</option> 
										<option value="1">Alive</option> 
										<option value="2">Died</option> 
									</select>
								</div>

								<div class="col-md-2">
									<input type="datetime-local" class="form-control form-control-mb mb-1"  id="inj_datedied" name="inj_datedied" >
								</div>

							</div>	

							<div class="form-row">
								<label class="col-md-4 col-form-label text-default mb-1">Are you aware of any health education materials regarding fireworks?</label>
								<div class="col-md-2">
									<select  name="inj_aware" id="inj_aware"  class="form-control form-control-mb" >
										<option value="">Select</option> 
										<option value="Y">Yes</option> 
										<option value="N">No</option> 
									</select>
								</div>

								<label class="col-md-2 col-form-label text-default mb-1">If yes, select most accessible material:</label>
								<div class="col-md-4">
									<select  name="inj_material" id="inj_material"  class="form-control form-control-mb" >
										<option value="">Select</option> 
										<option value="1">TV</option> 
										<option value="2">Poster/Tarpaulin</option> 
										<option value="3">Newspaper/Print</option>
										<option value="4">Internet/Social Media</option>
										<option value="5">Radio</option>
									</select>
								</div>
							</div>
						</div>	
					</div>
				</form>
			</div>

<script src="<?php echo base_url()?>assets/scripts/fwri/fwri_validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/fwri/fwri.js"></script>
