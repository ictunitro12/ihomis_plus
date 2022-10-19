<input name="module" id ="module" type="hidden" value="malarialab">
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

	<div class="alert alert-info" role="alert"><i class="fa fa-info fa-lg"></i>&nbsp <b>Information:</b>All fields mark with (asterisk) <i class="fa fa-asterisk text-danger"></i> are required!</div>
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Malaria Laboratory Registry</h4></div>
					<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode">
					<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly >
					<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="hospcode" name="hospcode">
					<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="datetoday" name="datetoday">
					<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="typecode" name="typecode">
					<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="inform" name="inform" value="Y">

					<div class="col-md-6">
						<button name="submit" type="submit"  class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
							<i class="fa fa-save"></i> 
						</button>

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
										<select name ="info_sex" id="info_sex" class="form-control form-control-mb" disabled="">
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
						</div>



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
						</div>	
						<hr class="bg-success">

						<div class="row">
							<div class="col-md-12">
								<div class="h5 text-success"><i class="fa fa-user-md"></i>&nbsp MALARIA DATA</div>
								<hr class="bg-success">
							</div>

							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-12 col-form-label  text-default mb-1"><b>COLLECTION INFORMATION FOR DIAGNOSIS:</label></b>
									<label class="col-md-3 col-form-label  text-default mb-1">Select Detection Type:</label>
									<div class="col-md-9">
										<select  name="typedetect" id="typedetect" class="hos form-control form-control-mb">
											<option value="">Please Select</option>
											<option value="1">Passive Case Detection</option>
											<option value="2">Active Case Detection</option>
										</select>
									</div>	

									<label class="col-md-3 col-form-label  text-default mb-1">Diagnosis: date samples were collected for the Lab Exam:</label>
									<div class="col-md-9">
										<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="dtecollect" name="dtecollect" >
									</div>

									<label class="col-md-3 col-form-label  text-default mb-1">Diagnosis:Date conducted the lab exam:</label>
									<div class="col-md-9">
										<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="dteexam" name="dteexam" >
									</div>

									<label class="col-md-3 col-form-label  text-default mb-1">Diagnosis: date of result released:</label>
									<div class="col-md-9">
										<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="dtereleased" name="dtereleased" >
									</div>

									<label class="col-md-3 col-form-label  text-default mb-1">Select Examination Type:</label>
									<div class="col-md-9">
										<select  name="typeexam" id="typeexam" class=" form-control form-control-mb">
											<option value="">Please Select</option>
											<option value="1">Microscopy</option>
											<option value="2">RDT</option>
										</select>
									</div>	
								</div>	

							</div>	

							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-12 col-form-label  text-default mb-1"><b>DIAGNOSIS LABORATORY RESULT:</label></b>

									<div class="col-md-12">
										<textarea type="text" class="form-control form-control-mb" autocomplete="off" id="sliderdt" name="sliderdt" placeholder="Slide / RDT Number"></textarea>
									</div>

									<label class="col-md-4 col-form-label  text-default mb-1">Diagnosis: Laboratory Result Species for Microscopy:</label>
									<div class="col-md-8">
										<select  name="speciemicro" id="speciemicro" class=" form-control form-control-mb">
											<option value="">Please Select Species: Smear</option>
											<option value="1">Plasmodium falciparum</option>
											<option value="2">Plasmodium vivax</option>
											<option value="3">Plasmodium malariae</option>
											<option value="4">Plasmodium knowlesi</option>
											<option value="5">Plasmodium ovale</option>
											<option value="6">No Malaria parasite seen/ Negative</option>
											<option value="7">Pan</option>
											<option value="8">Non-Pf Pan</option>
										</select>
									</div>	

									<label class="col-md-4 col-form-label  text-default mb-1">Diagnosis: Laboratory Result Species for Microscopy:</label>
									<div class="col-md-8">
										<select  name="specierdt" id="specierdt" class=" form-control form-control-mb">
											<option value="">Please Select Species:RDT</option>
											<option value="1">Plasmodium falciparum</option>
											<option value="2">Plasmodium vivax</option>
											<option value="3">Plasmodium malariae</option>
											<option value="4">Plasmodium knowlesi</option>
											<option value="5">Plasmodium ovale</option>
											<option value="6">No Malaria parasite seen/ Negative</option>
											<option value="7">Pan</option>
											<option value="8">Non-Pf Pan</option>
										</select>
									</div>	

									<label class="col-md-12 col-form-label  text-default mb-1"><b>DIAGNOSIS PARASITE COUNT:</label></b>

									<label class="col-md-4 col-form-label  text-default mb-1">Diagnosis: Parasite count/ul of blood (asexual):</label>
									<div class="col-md-8">
										<input type="text" class="form-control form-control-mb" autocomplete="off" id="parasite_asex" name="parasite_asex" placeholder ="Diagnosis: Parasite count/ul of blood (asexual)"disabled>
									</div>	

									<label class="col-md-4 col-form-label  text-default mb-1">Diagnosis: Parasite count/ul of blood (sexual):</label>			
									<div class="col-md-8">
										<input type="text" class="form-control form-control-mb" autocomplete="off" id="parasite_sex" name="parasite_sex" placeholder ="Diagnosis: Parasite count/ul of blood (sexual)" disabled>
									</div>	
								</div>
							</div>	

							<div class="col-md-12">								
								<hr class="bg-success">
								<div class="h5 text-success"><i class="fa fa-calendar"></i>&nbsp FOLLOW-UP: DATE SAMPLES WERE COLLECTED FOR THE LABORATORY EXAM</div>
								<hr class="bg-success">

								<div class="form-row">
									<label class="col-md-4 col-form-label  text-default mb-1">Do you have follow-up laboratory exam? :</label>	
									<div class="col-md-4">
										<select  name="followup" id="followup" class=" form-control form-control-mb">
											<option value="">Please Select</option>
											<option value="Y">Yes</option>
											<option value="N">No</option>
										</select>
									</div>	
								</div>	

								<br>
								<div class="row">	
									<div class="col-md-4">
										<div class="card card-accent">
											<div class = "card card-header"> 
												<div class = " card-title h3 text-success"><i class = "fa fa-calendar"></i>&nbsp; Day 3</div>
											</div>
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Date samples where collected for the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtecollect3" name="follow_dtecollect3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Date conducted the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dteexam3" name="follow_dteexam3">
													</div>
													<label class="col-md-3 col-form-label text-default mb-1">Date of Result Released:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtereleased3" name="follow_dtereleased3">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Slide Number:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="slideno3" name="slideno3"  placeholder = "Slide Number">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Parasite UL Blood:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="parasite3" name="parasite3"  placeholder = "Parasite UL Blood">
													</div>

												</div><!--form row-->
											</div><!--modal-->
										</div><!--card class-->
									</div><!--col md 4-->
									<div class="col-md-4">
										<div class="card card-accent">
											<div class = "card card-header"> 
												<div class = " card-title h3 text-success"><i class = "fa fa-calendar"></i>&nbsp; Day 7</div>
											</div>
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Date samples where collected for the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtecollect7" name="follow_dtecollect7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Date conducted the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dteexam7" name="follow_dteexam7">
													</div>
													<label class="col-md-3 col-form-label text-default mb-1">Date of Result Released:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtereleased7" name="follow_dtereleased7">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Slide Number:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="slideno7" name="slideno7"  placeholder = "Slide Number">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Parasite UL Blood:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="parasite7" name="parasite7"  placeholder = "Parasite UL Blood">
													</div>

												</div><!--form row-->
											</div><!--modal-->
										</div><!--card class-->
									</div><!--col md 4-->	
									<div class="col-md-4">
										<div class="card card-accent">
											<div class = "card card-header"> 
												<div class = " card-title h3 text-success"><i class = "fa fa-calendar"></i>&nbsp; Day 14</div>
											</div>
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Date samples where collected for the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtecollect14" name="follow_dtecollect14">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Date conducted the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dteexam14" name="follow_dteexam14">
													</div>
													<label class="col-md-3 col-form-label text-default mb-1">Date of Result Released:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtereleased14" name="follow_dtereleased14">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Slide Number:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="slideno14" name="slideno14"  placeholder = "Slide Number">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Parasite UL Blood:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="parasite14" name="parasite14"  placeholder = "Parasite UL Blood">
													</div>

												</div><!--form row-->
											</div><!--modal-->
										</div><!--card class-->
									</div><!--col md 4-->
									<div class="col-md-4">
										<div class="card card-accent">
											<div class = "card card-header"> 
												<div class = " card-title h3 text-success"><i class = "fa fa-calendar"></i>&nbsp; Day 21</div>
											</div>
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Date samples where collected for the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtecollect21" name="follow_dtecollect21">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Date conducted the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dteexam21" name="follow_dteexam21">
													</div>
													<label class="col-md-3 col-form-label text-default mb-1">Date of Result Released:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtereleased21" name="follow_dtereleased21">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Slide Number:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="slideno21" name="slideno21"  placeholder = "Slide Number">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Parasite UL Blood:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="parasite21" name="parasite21"  placeholder = "Parasite UL Blood">
													</div>

												</div><!--form row-->
											</div><!--modal-->
										</div><!--card class-->
									</div><!--col md 4-->				
									<div class="col-md-4">
										<div class="card card-accent">
											<div class = "card card-header"> 
												<div class = " card-title h3 text-success"><i class = "fa fa-calendar"></i>&nbsp; Day 28</div>
											</div>
											<div class="modal-body border">
												<div class="form-row">
													<label class="col-md-3 col-form-label text-default mb-1">Date samples where collected for the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtecollect28" name="follow_dtecollect28">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Date conducted the Lab Exam:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dteexam28" name="follow_dteexam28">
													</div>
													<label class="col-md-3 col-form-label text-default mb-1">Date of Result Released:</label>
													<div class="col-md-9">
														<input type="datetime-local"  class="daysfollow form-control form-control-mb" autocomplete="off" id="follow_dtereleased28" name="follow_dtereleased28">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Slide Number:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="slideno28" name="slideno28"  placeholder = "Slide Number">
													</div>

													<label class="col-md-3 col-form-label text-default mb-1">Parasite UL Blood:</label>
													<div class="col-md-9">
														<input type="text"  class="daysfollow form-control form-control-mb" autocomplete="off" id="parasite28" name="parasite28"  placeholder = "Parasite UL Blood">
													</div>

												</div><!--form row-->
											</div><!--modal-->
										</div><!--card class-->
									</div><!--col md 4-->
								</div><!--row-->

								


								<hr class="bg-success">
								<div class="form-row">									
									<label class="col-md-1 col-form-label  text-default mb-1"><b>Remarks:</b></label>	
									<div class="col-md-11">
										<textarea type="text" class="form-control form-control-mb" autocomplete="off" id="remark" name="remark" placeholder ="Remarks"></textarea>
									</div>	
								</div>
							</div>
						</div>	
					</div>	
					<!--end of address-->
					<hr class="bg-success">


					