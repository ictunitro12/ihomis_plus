<style>
	th{
		align-content: center;
	}

	table {
		width: 100%;
	}
</style>
<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br/><small>Information</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-flask fa-2x"></i><br><small>Laboratory Tests done and results</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fas fa-capsules fa-2x"></i><br /><small>Malarial Drugs Administered</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fas fa-diagnoses fa-2x"></i><br /><small>Exposure History</small></a>
		</li>
		<li>
			<a href="#step-5"><i class="fa fa-users fa-2x"></i><br /><small>Contact Tracing</small></a>
		</li>
		<li>
			<a href="#step-6"><i class="fa fa-medkit fa-2x"></i><br /><small>Case Classification and Treatment Compliance</small></a>
		</li>
		<li>
			<a href="#step-7"><i class="fas fa-disease fa-2x"></i><br /><small>Disease Outcome</small></a>
		</li>
	</ul>
	<div>
		<div id="step-1">
			<form id="form-step-1" role="form">
				<div class="row">			
					<div class="col-md-12">
						<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>

						<div class="h5 text-success">
							<i class=" fa fa-user"></i>	
							&nbsp Patient Information
						</div>
						<hr class="bg-success">
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
									<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" >
									<input type="hidden" class="form-control form-control-mb" id="percode" name="percode" >
									<input type="hidden" class="form-control form-control-mb" id="info_rephealthfac" name="info_rephealthfac" >
									<input type="hidden" class="form-control form-control-mb" id="daterep" name="daterep" >

									<label class="col-md-2 col-form-label text-default mb-1">First Name:</label>
									<div class="col-md-10">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" id="info_patfirst" name="info_patfirst"  placeholder ="First Name" value="" readonly>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Middle Name:</label>
									<div class="col-md-10">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" id="info_patmid" name="info_patmid"  placeholder ="Middle Name" readonly>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Last Name:</label>
									<div class="col-md-10">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" id="info_patlast" name="info_patlast"  placeholder ="Last Name" readonly>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Registry Number in the Malaria Registry:</label>
									<div class="col-md-4">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" id="info_regnum" name="info_regnum"  placeholder ="Registry Number in the Malaria Registry" value="">
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Case Investigation Number:</label>
									<div class="col-md-4">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" id="info_caseinve" name="info_caseinve"  placeholder ="Case Investigation Number" value="">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">If Indigenous People(IP), indicate IP Group Name:</label>
									<div class="col-md-4">
										<select  name="selIndig" id="selIndig" class=" form-control form-control-mb"></select>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Nationality:</label>
									<div class="col-md-4">
										<select  name="info_nat" id="info_nat"  class="form-control form-control-mb" >
											<option value="">Select</option> 
											<option value="137">Filipino</option> 
											<option value="183">American</option> 
											<option value="160">Spanish</option> 
											<option value="036">Chinese</option> 
											<option value="085">Japanese</option> 
											<option value="065">German</option> 
											<option value="014">Bangladesh</option> 
											<option value="182">British</option> 
											<option value="031">Canada</option> 
											<option value="061">French</option> 
										</select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Sex:</label>
									<div class="col-md-4">
										<select name ="info_sex" id="info_sex" disabled class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="M">Male</option>
											<option value="F">Female</option>
										</select>
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Pregnant?:</label>
									<div class="col-md-2">
										<select name ="info_preg" id="info_preg" class="form-control form-control-mb">
											<option value="">Select</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>
									<div class="col-md-2">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" disabled="" id="info_pregsp" name="info_pregsp"  placeholder ="# of weeks of pregnancy" value="">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Date of Birth:</label>
									<div class="col-md-4">
										<input type="datetime-local" readonly="" class="form-control form-control-mb" autocomplete="off" id="info_dob" name="info_dob" >
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Age:</label>
									<div class="col-md-4">
										<input type="text" readonly class="form-control form-control-mb" autocomplete="off" readonly  id="info_age" name="info_age"  placeholder ="Age"  >
										<input type="hidden"  class="form-control form-control-mb" id="info_year" name="info_year"  value="" readonly>
										<input type="hidden" class="form-control form-control-mb" id="info_month" name="info_month"  value=""readonly >
										<input type="hidden" class="form-control form-control-mb" id="info_day" name="info_day"  value="" readonly>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Name of Contract Persons/Informant:</label>
									<div class="col-md-4">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" placeholder="Name of Contract Persons/Informant" id="info_informant" name="info_informant" >
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Contact details:</label>
									<div class="col-md-4">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" placeholder="Contact details" id="info_contact" name="info_contact" >
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Occupation:</label>
									<div class="col-md-4">
										<select class="form-control form-control-mb"   id="info_occup" name="info_occup" readonly="">
											<option value="">Select</option>
											<option value="">OFW</option>
											<option value="">Farmer</option>
											<option value="">Student</option>
											<option value="">Forest Worker</option>
											<option value="">Phil Natioanl Police/PNP</option>
											<option value="">Fisherman</option>
											<option value="">AFP/ Military/ Marines</option>
											<option value="">Others</option>
										</select>
									</div>
									<div class="col-md-6">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" placeholder="Specify" id="info_occupsp" name="info_occupsp" >
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Name of Employer:</label>
									<div class="col-md-4">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" placeholder="Name of Employer" id="info_employer" name="info_employer" >
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Address of Workplace:</label>
									<div class="col-md-4">
										<input type="text"  class="form-control form-control-mb" autocomplete="off" placeholder="Address of Workplace" id="info_addwork" name="info_addwork" >
									</div>
								</div>
							</div>
						</div>	
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
											<option value="">Select</option>
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
						</div>	
					</div>
				</div>
				<br>
				<br>
				<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#addClinicData" aria-expanded="false" aria-controls="addClinicData">
					<b>II. CLINICAL DATA</b>
				</button>

				<div class="collapse" id="addClinicData">
					<div class="card card-body bg-secondary">
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Date of Onset of Symptoms:</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dteonset" name="info_dteonset">
							</div>	

							<label class="col-md-2 col-form-label text-default mb-1">Date of Consultation:</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dteconsult" name="info_dteconsult">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2">
								<label class="col-form-label text-default"> Signs and Symptoms/ Reason for Consultation:</label>
							</div>	
							<div class="col-md-1">
								<input type="checkbox" id="symp_fever" name="symp_fever" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Fever</label>
							</div>	

							<div class="col-md-1">
								<input type="checkbox" id="symp_headache" name="symp_headache" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Headache</label>
							</div>	

							<div class="col-md-1">
								<input type="checkbox" id="symp_chills" name="symp_chills" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Chills</label>
							</div>	

							<div class="col-md-1">
								<input type="checkbox" id="symp_pallor" name="symp_pallor" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Pallor</label>
							</div>	

							<div class="col-md-1">
								<input type="checkbox" id="symp_other" name="symp_other" value="N" class="">&nbsp;
								<label class="col-form-label text-default">Others</label>
							</div>		
							<div class="col-md-5">
								<input type="text" class="form-control form-control-mb mb-1" placeholder="Specify"  id="symp_othersp" name="symp_othersp">
							</div>	

						</div>	
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Patient Admitted?:</label>
							<div class="col-md-4">
								<select  name="info_admit" id="info_admit" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<label class="col-md-2 col-form-label text-default mb-1">Name of Facility of Admission:</label>
							<div class="col-md-4">
								<select  name="selFac" id="selFac" class=" form-control form-control-mb"></select>	
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Date of Admission:</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dteadmit" name="info_dteadmit">
							</div>	

							<label class="col-md-2 col-form-label text-default mb-1">Date of Discharge:</label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dtedischarge" name="info_dtedischarge">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

		<div id="step-2" class="">
			<form id="form-step-2" role="form">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Date Smear was taken:</label>
							<div class="col-md-3">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dtesmear" name="info_dtesmear">
							</div>	

							<label class="col-md-3 col-form-label text-default mb-1">Result(check all parasite seen):</label>
							<div class="col-md-3">
								<select  name="result_micro" id="result_micro" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">P. falciparum</option> 
									<option value="02">P. vivax</option> 
									<option value="03">P. malariae</option> 
									<option value="04">P. ovale</option> 
									<option value="05">P. knowlesi(has to be confirmed by PCR)</option>
									<option value="06">NMPS(no malaria parasite seen)</option> 

								</select>
							</div>	
						</div>
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Date RDT test was done:</label>
							<div class="col-md-3">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dterdt" name="info_dterdt">
							</div>	

							<label class="col-md-3 col-form-label text-default mb-1">Result(check all parasite seen):</label>
							<div class="col-md-3">
								<select  name="result_rdt" id="result_rdt" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">P. falciparum</option> 
									<option value="02">P. vivax</option> 
									<option value="03">Pf Pan</option> 
									<option value="04">NonPf Pan</option> 
									<option value="05">Negative</option>

								</select>
							</div>	
						</div>
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Type of Detection:</label>
							<div class="col-md-3">
								<select  name="info_typedetect" id="info_typedetect" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">PCD</option> 
									<option value="02">ACD</option> 
								</select>	
							</div>	
						</div>
					</div>
				</div>	
			</form>	
		</div>
		
		<!--step-3-->
		<div id="step-3" class="">
			<form id="form-step-3" role="form" data-toggle="validator">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">
						<div class="row">	
							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#arthe" aria-expanded="false" aria-controls="arthe"><i class = "fa fa-capsules"></i> &nbsp;
									<b>ARTHEMETHER LUMEFANTRINE</b>
								</button>
								<div class="collapse" id="arthe">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_1" name="arthemether_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_2" name="arthemether_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_3" name="arthemether_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_4" name="arthemether_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_5" name="arthemether_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_6" name="arthemether_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_7" name="arthemether_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_8" name="arthemether_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_9" name="arthemether_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_10" name="arthemether_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_11" name="arthemether_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_12" name="arthemether_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_13" name="arthemether_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysarthemether form-control form-control-mb" autocomplete="off" id="arthemether_14" name="arthemether_14">
													</div>


												</div><!--form row-->
											</div><!--modal-->
										</div><!--card class-->
									</div><!--col md 4-->
								</div><!--col md 4-->
							</div><!--col md 4-->
							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#chlo" aria-expanded="false" aria-controls="chlo"><i class = "fa fa-capsules"></i> &nbsp;
									<b>CHLOROQUINE</b>
								</button>
								<div class="collapse" id="chlo">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_1" name="Chloroquine_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_2" name="Chloroquine_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_3" name="Chloroquine_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_4" name="Chloroquine_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_5" name="Chloroquine_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_6" name="Chloroquine_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_7" name="Chloroquine_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_8" name="Chloroquine_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_9" name="Chloroquine_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_10" name="Chloroquine_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_11" name="Chloroquine_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_12" name="Chloroquine_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_13" name="Chloroquine_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysChloroquine form-control form-control-mb" autocomplete="off" id="Chloroquine_14" name="Chloroquine_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->	
							<br>			
							<br>			
							<br>	
							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#prim" aria-expanded="false" aria-controls="prim"><i class = "fa fa-capsules"></i> &nbsp;
									<b>PRIMAQUINE (15mg/tab)</b>
								</button>
								<div class="collapse" id="prim">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_1" name="Primaquine_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_2" name="Primaquine_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_3" name="Primaquine_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_4" name="Primaquine_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_5" name="Primaquine_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_6" name="Primaquine_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_7" name="Primaquine_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_8" name="Primaquine_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_9" name="Primaquine_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_10" name="Primaquine_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_11" name="Primaquine_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_12" name="Primaquine_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_13" name="Primaquine_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysPrimaquine form-control form-control-mb" autocomplete="off" id="Primaquine_14" name="Primaquine_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->
							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#quinject" aria-expanded="false" aria-controls="quinject"><i class = "fa fa-capsules"></i> &nbsp;
									<b>QUININE INJECTIBLE</b>
								</button>
								<div class="collapse" id="quinject">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_1" name="QuiInject_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_2" name="QuiInject_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_3" name="QuiInject_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_4" name="QuiInject_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_5" name="QuiInject_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_6" name="QuiInject_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_7" name="QuiInject_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_8" name="QuiInject_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_9" name="QuiInject_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_10" name="QuiInject_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_11" name="QuiInject_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_12" name="QuiInject_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_13" name="QuiInject_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiInject form-control form-control-mb" autocomplete="off" id="QuiInject_14" name="QuiInject_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->	
							<br>			
							<br>			
							<br>			
							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#quintable" aria-expanded="false" aria-controls="quintable"><i class = "fa fa-capsules"></i> &nbsp;
									<b>QUININE TABLET</b>
								</button>
								<div class="collapse" id="quintable">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_1" name="QuiTablet_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_2" name="QuiTablet_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_3" name="QuiTablet_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_4" name="QuiTablet_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_5" name="QuiTablet_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_6" name="QuiTablet_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_7" name="QuiTablet_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_8" name="QuiTablet_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_9" name="QuiTablet_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_10" name="QuiTablet_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_11" name="QuiTablet_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_12" name="QuiTablet_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_13" name="QuiTablet_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysQuiTablet form-control form-control-mb" autocomplete="off" id="QuiTablet_14" name="QuiTablet_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->
							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#tetra" aria-expanded="false" aria-controls="tetra"><i class = "fa fa-capsules"></i> &nbsp;
									<b>TETRACYCLINE/ CLINDAMYCIN/ DOXYCYCLINE</b>
								</button>
								<div class="collapse" id="tetra">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_1" name="Tetracycline_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_2" name="Tetracycline_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_3" name="Tetracycline_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_4" name="Tetracycline_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_5" name="Tetracycline_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_6" name="Tetracycline_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_7" name="Tetracycline_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_8" name="Tetracycline_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_9" name="Tetracycline_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_10" name="Tetracycline_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_11" name="Tetracycline_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_12" name="Tetracycline_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_13" name="Tetracycline_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysTetracycline form-control form-control-mb" autocomplete="off" id="Tetracycline_14" name="Tetracycline_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->

							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#arte" aria-expanded="false" aria-controls="arte"><i class = "fa fa-capsules"></i> &nbsp;
									<b>ARTESUNATE SUPPOSITORY</b>
								</button>
								<div class="collapse" id="arte">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_1" name="Artesunate_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_2" name="Artesunate_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_3" name="Artesunate_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_4" name="Artesunate_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_5" name="Artesunate_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_6" name="Artesunate_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_7" name="Artesunate_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_8" name="Artesunate_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_9" name="Artesunate_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_10" name="Artesunate_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_11" name="Artesunate_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_12" name="Artesunate_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_13" name="Artesunate_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunate form-control form-control-mb" autocomplete="off" id="Artesunate_14" name="Artesunate_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->

							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#arteinj" aria-expanded="false" aria-controls="arteinj"><i class = "fa fa-capsules"></i> &nbsp;
									<b>ARTESUNATE INJECTABLE</b>
								</button>
								<div class="collapse" id="arteinj">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_1" name="ArtesunateInj_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_2" name="ArtesunateInj_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_3" name="ArtesunateInj_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_4" name="ArtesunateInj_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_5" name="ArtesunateInj_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_6" name="ArtesunateInj_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_7" name="ArtesunateInj_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_8" name="ArtesunateInj_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_9" name="ArtesunateInj_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_10" name="ArtesunateInj_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_11" name="ArtesunateInj_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_12" name="ArtesunateInj_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_13" name="ArtesunateInj_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysArtesunateInj form-control form-control-mb" autocomplete="off" id="ArtesunateInj_14" name="ArtesunateInj_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->

							<div class="col-md-4">
								<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#oth" aria-expanded="false" aria-controls="oth"><i class = "fa fa-capsules"></i> &nbsp;
									<b>OTHERS (SPECIFY NAME & QTY.)</b>
								</button>
								<div class="collapse" id="oth">
									<div class="card card-body bg-secondary">
										<div class="card card-accent">
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Day 1:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_1" name="Others_1">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 2:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_2" name="Others_2">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 3:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_3" name="Others_3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 4:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_4" name="Others_4">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 5:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_5" name="Others_5">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 6:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_6" name="Others_62">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 7:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_7" name="Others_7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 8:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_8" name="Others_8">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 9:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_9" name="Others_9">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 10:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_10" name="Others_10">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 11:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_11" name="Others_11">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 12:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_12" name="Others_12">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 13:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_13" name="Others_13">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Day 14:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysOthers form-control form-control-mb" autocomplete="off" id="Others_14" name="Others_14">
													</div>
												</div>
											</div>
										</div><!--form row-->
									</div><!--modal-->
								</div><!--card class-->
							</div><!--col md 4-->
						</div><!--row-->

					</div>
				</div>	

			</div>
		</form>
		<!--step 3-->
		<?php echo ViewMalariaContractTracing();?>
		<div id="step-4" class="">
			<form id="form-step-4" role="form" data-toggle="validator">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">

						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">History of blood transfusion in the past 2 weeks?</label>
							<div class="col-md-3">
								<select  name="histo_blood" id="histo_blood" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Date of Transfusion:</label>
							<div class="col-md-3">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dtetransfus" name="info_dtetransfus">
							</div>

							<label class="col-md-3 col-form-label text-default mb-1">Name of Facility of Blood Transfusion:</label>
							<div class="col-md-3">
								<select  name="selFac2" id="selFac2" class=" form-control form-control-mb"></select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">History of malaria infection in the past 36 months?</label>
							<div class="col-md-3">
								<select  name="histo_malaria" id="histo_malaria" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1">Date diagnosed:</label>
							<div class="col-md-3">
								<input type="datetime-local" class="form-control form-control-mb mb-1"  id="info_dtediag" name="info_dtediag">
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-3 col-form-label text-default mb-1">Name of Facility of Diagnosis:</label>
							<div class="col-md-3">
								<select  name="selFac3" id="selFac3" class=" form-control form-control-mb"></select>
							</div>
							<label class="col-md-3 col-form-label text-default mb-1">Species:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb mb-1" id="info_species" placeholder="Species" name="info_species">
							</div>
						</div>

						<hr class="bg-success">
						<div class="h5 text-success">
							<i class=" fa fa-history"></i>	&nbsp  History of Travel
						</div>
						<hr class="bg-success">

						<div class="form-row">
							<label class="col-md-5 col-form-label text-default mb-1"><b>A. History of Travel in the past 2 months before onset of signs and symptoms?</b></label>
							<div class="col-md-4">
								<select  name="histo_travel1" id="histo_travel1" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<div class="btn-group pull-right" role="group" aria-label="">
								<a href="javascript:void(0);" class="btn btn-success ModalAddTravelA" ><i class="fa fa-plus"></i></a>
							</div>

						</div>	


						<div class="card-body table-responsive">
							<table id="TravelATable" class="table table-m table-bordered table-condensed table-hover" width="100%">
								<thead>
									<tr class="thead-dark">
										<th rowspan="2" width="50px">ID</th>
										<th rowspan="2" width="50px">enccode</th>
										<th rowspan="2" width="50px">hpercode</th>			
										<th rowspan="2" width="350px" align="center">
											Places Visited with overnight stay <br>
											(Sitio/Brgy,Municipality,Provice)
										</th>
										<th width="200px" align="center" colspan="2">Travel Period</th>
										<th width="50px" rowspan="2"></th>

									</tr>
									<tr>										
										<th width="100px">Date of Arrival</th>
										<th width="100px">Date of Departure</th>
									</tr>
								</thead>
								<tbody>									
									<tr>		
										<th width="50px ">ID</th>
										<th width="50px ">enccode</th>
										<th width="50px ">hpercode</th>										
										<td width="100px"></td>								
										<td width="100px"></td>
										<td width="100px"></td>
										<td width="50px"></td>
									</tr>
								</tbody>
							</table>
						</div>


						<div class="form-row">
							<label class="col-md-5 col-form-label text-default mb-1"><b>B. History of Travel 2 months after onset of signs and symptoms?</b></label>
							<div class="col-md-4">
								<select  name="histo_travel2" id="histo_travel2" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<div class="btn-group pull-right" role="group" aria-label="">
								<a href="javascript:void(0);" class="btn btn-success ModalAddTravelB" ><i class="fa fa-plus"></i></a>
							</div>

						</div>	


						<div class="card-body table-responsive">
							<table id="TravelBTable" class="table table-m table-bordered table-condensed table-hover" width="100%">
								<thead>
									<tr class="thead-dark">
										<th rowspan="2" width="50px">ID</th>
										<th rowspan="2" width="50px">enccode</th>
										<th rowspan="2" width="50px">hpercode</th>			
										<th rowspan="2" width="350px" align="center">
											Places Visited with overnight stay <br>
											(Sitio/Brgy,Municipality,Provice)
										</th>
										<th width="200px" align="center" colspan="2">Travel Period</th>
										<th width="50px" rowspan="2"></th>

									</tr>
									<tr>										
										<th width="100px">Date of Arrival</th>
										<th width="100px">Date of Departure</th>
									</tr>
								</thead>
								<tbody>									
									<tr>		
										<th width="50px ">ID</th>
										<th width="50px ">enccode</th>
										<th width="50px ">hpercode</th>										
										<td width="100px"></td>								
										<td width="100px"></td>
										<td width="100px"></td>
										<td width="50px"></td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>	
			</div>
		</form>
		<!--Step 4-->

		<div id="step-5" class="">
			<form id="form-step-5" role="form" data-toggle="validator">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">

						<div class="form-row">
							<label class="col-md-8 col-form-label text-default mb-1"><b> Did any of the family members, visitor/s in the house or neighbors amd other comtacts have similar symptoms or illness during the last</b></label>
							<div class="col-md-3">
								<select  name="contacttrace" id="contacttrace" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="Y">Yes</option> 
									<option value="N">No</option> 
								</select>
							</div>

							<div class="btn-group pull-right" role="group" aria-label="">
								<a href="javascript:void(0);" class="btn btn-success ModalAddContactTracing" ><i class="fa fa-plus"></i></a>
							</div>
						</div>	

						<div class="form-row">
							<label class="col-md-12 col-form-label text-default mb-1"><b>  6 weeks after the date of onset of signs and symptoms?</b></label>
						</div>	

						<div class="card-body table-responsive" >
							<table id="ConTraceTable" class="table table-sm table-striped  table-bordered table-condensed table-hover " width="100%">
								<thead>
									<tr class="thead-dark">
										<th>id</th>
										<th>enccode</th>
										<th>hpercode</th>
										<th>Name</th>
										<th>Age</th>
										<th>Address</th>
										<th>Describe illness/symptoms</th>
										<th>Date when illness was observed</th>
										<th>Contact Number</th>
										<th></th>
									</tr>
								</thead>
								<tbody>									
									<tr>		
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th> </th>
										<th> </th>
										<th> </th>
										<th></th>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>	

			</div>
		</form>
		<!--step 5--->

		<div id="step-6" class="">
			<form id="form-step-6" role="form" data-toggle="validator">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">
						<label class="col-md-12 col-form-label text-default mb-1 h5 text-success"><b>CASE CLASSIFICATION</b></label>
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1"><b>A. By Transmission</b></label>
							<div class="col-md-2">
								<select  name="case_trans" id="case_trans" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Local Transmission</option> 
									<option value="02">Imported Case, specify province/ country:</option> 
									<option value="03">Induced</option> 
								</select>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="trans_indig" name="trans_indig" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Indigenous Case</label>
							</div>	
							<div class="col-md-4">
								<input type="text" id="trans_sp" name="trans_sp" value="" placeholder="specify province/country" class="form-control form-control-mb mb-1"  readonly="">
							</div>
						</div>		
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1"><b>B. Epidemiologival Classification</b></label>
							<div class="col-md-2">
								<input type="checkbox" id="epidem_1" name="epidem_1" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Suspect</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="epidem_2" name="epidem_2" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Probable (Clinically diagnosed)</label>
							</div>	
							<div class="col-md-4">
								<input type="checkbox" id="epidem_3" name="epidem_3" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Confirmed (microscopy or RDT)</label>
							</div>
						</div>	
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1"><b>C. Case Type</b></label>
							<div class="col-md-2">
								<select  name="case_type" id="case_type" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">New Case/Infection</option> 
									<option value="02">Old Case</option> 
								</select>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="case_relap" name="case_relap" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Relapse</label>
							</div>	
							<div class="col-md-4">
								<input type="checkbox" id="case_recrud" name="case_recrud" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Recrudescence</label>
							</div>
						</div>		
						<div class="form-row">
							<label class="col-md-4 col-form-label text-default mb-1"><b>D. Severity (for confirmed cases only)</b></label>
							<div class="col-md-2">
								<select  name="severe_1" id="severe_1" class="confirmed form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Uncomplocated</option> 
									<option value="02">Severe</option> 
								</select>
							</div>							
						</div>		

						<label class="col-md-12 col-form-label text-default mb-1 h5 text-success"><b>TREAMENT COMPLIANCE</b></label>
						<div class="form-row">
							<div class="col-md-2">
								<input type="checkbox" id="treat_1" name="treat_1" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Completed</label>
							</div>
							<div class="col-md-2">
								<input type="checkbox" id="treat_2" name="treat_2" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Not Completed</label>
							</div>	
							<div class="col-md-8">
								<input type="checkbox" id="treat_3" name="treat_3" value="N" class="" disabled="">&nbsp;
								<label class="col-form-label text-default">Non-Compliant (Not in accordance with the recommend NMCEP treatment guideline)</label>
							</div>
						</div>						
					</div>
				</div>	
			</div>
		</form>
		<!--step 6--->

		<div id="step-7" class="">
			<form id="form-step-7" role="form" data-toggle="validator">
				<div class="row">
					<div class="col-md-12">
						<hr class="bg-success">

						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1"><b>Outcome</b></label>
							<div class="col-md-4">
								<select  name="outcome" id="outcome" class="form-control form-control-mb" >
									<option value="">Select</option> 
									<option value="01">Cured</option> 
									<option value="02">Failed</option> 
									<option value="03">No Laboratory Follow-up</option> 
									<option value="04">Died</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Date Died</label>							
							<div class="col-md-4">
								<input type="datetime-local" id="info_dtedied" name="info_dtedied" value="" class="form-control form-control-mb mb-1"  readonly="">
							</div>
						</div>

						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Final Diagnosis:</label>
							<div class="col-md-4">
								<input type="text" id="info_finaldiag" name="info_finaldiag" value="" placeholder="Final Diagnosis" class="form-control form-control-mb mb-1"  readonly="">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Concomitant Disease:</label>					
							<div class="col-md-4">
								<input type="text" id="info_conco" name="info_conco" value="" placeholder="Concomitant Disease" class="form-control form-control-mb mb-1"  readonly="">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">(If Died) Underlying Cause of Death:</label>					
							<div class="col-md-4">
								<input type="text" id="info_underlying" name="info_underlying" value="" placeholder="Underlying Cause of Death" class="form-control form-control-mb mb-1"  readonly="">
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Brief story about when and where patient got malaria:</label>
							<div class="col-md-10">
								<textarea type="text" id="info_story" name="info_story" value="" placeholder="..." class="form-control form-control-mb mb-1"  readonly=""></textarea>
							</div>
						</div>

						<label class="col-md-2 col-form-label text-default mb-1"><b>Period of Investigation:</b>:</label>

						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Start Date:</label>
							<div class="col-md-4">
								<input type="datetime-local" id="info_startinves" name="info_startinves" value="" class="form-control form-control-mb mb-1"  readonly="">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">End Date:</label>
							<div class="col-md-4">
								<input type="datetime-local" id="info_endinves" name="info_endinves" value="" class="form-control form-control-mb mb-1"  readonly="">
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Name and Designation of Investigator/s:</label>
							<div class="col-md-10">
								<textarea type="text" id="info_nameinvestigator" name="info_nameinvestigator" value="" placeholder="..." class="form-control form-control-mb mb-1"  readonly=""></textarea>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Contact Numbers:</label>
							<div class="col-md-4">
								<input type="text" id="info_contactinvestigator" name="info_contactinvestigator" value="" placeholder="Contact Numbers" class="form-control form-control-mb mb-1"  readonly="">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Email Address:</label>
							<div class="col-md-4">
								<input type="text" id="info_emailinvestigator" name="info_emailinvestigator" value="" placeholder="Email Address" class="form-control form-control-mb mb-1"  readonly="">
							</div>
						</div>

					</div>
				</div>	

			</div>
		</form>
		<!--step 7--->

		<input type="hidden" name = "base_url" id = "base_url" value="<?php echo base_url();?>">

		<script src="<?php echo base_url()?>assets/scripts/socialservice/family_delete.js"></script>
		<script src="<?php echo base_url()?>assets/scripts/socialservice/family.js"></script>
		<script src="<?php echo base_url()?>assets/scripts/socialservice/family_validation.js"></script>