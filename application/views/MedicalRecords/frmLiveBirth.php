<form id="frmLiveBirth" name="frmLiveBirth">
	<div class="modal fade" id="patientLiveBirthModal" role="form">
		<div class="modal-dialog modal-dialog modal-lg" role="dialog">
			<div class="modal-content">	
				<div class="modal-body">
					<h5 class="modal-title text-success"><i class="fa fa-certificate"></i>&nbsp LIVE BIRTH CERTIFICATE</h5>
					<div class="form-row">	
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>First Name:
						</div>	
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="lb_patfname" name="lb_patfname" placeholder ="First Name" readonly>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							Middle Name:
						</div>	
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="lb_patmname" name="lb_patmname" placeholder ="Middle Name" readonly>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Last Name:
						</div>	
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="lb_patlname" name="lb_patlname" placeholder ="Last Name" readonly>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Sex:
						</div>
						<div class="col-md-4">
							<select name="lb_babysex" id="lb_babysex" class="form-control form-control-md" readonly>
								<option value="">Select</option>
								<option value="M">Male</option>
								<option value="F">Female</option>
							</select>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Date of Birth:
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="lb_patdob" name="lb_patdob" readonly>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Type of Birth:
						</div>	
						<div class="col-md-4">
							<select name="birth_type" id="birth_type" class="form-control form-control-md" required>
								<option value="">Select</option>
								<option value="SINGE">Single</option>
								<option value="TWINN">Twin</option>
								<option value="TRIPE">Triplet</option>
								<option value="OTHER">Others, Specify</option>
							</select>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="birth_type_oth" name="birth_type_oth" placeholder ="Specify">
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>If Multiple Birth, Child was:
						</div>	
						<div class="col-md-4">
							<select name="multiple_birth" id="multiple_birth" class="form-control form-control-md">
								<option value="">Select</option>
								<option value="FIRST">First</option>
								<option value="SECON">Second</option>
								<option value="THIRD">Third</option>
								<option value="OTHER">Others, specify</option>
							</select>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="multiple_birth_oth" name="multiple_birth_oth" placeholder ="Specify">
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Birth Order:
						</div>	
						<div class="col-md-4">
							<select name="birth_order" id="birth_order" class="form-control form-control-md" required>
								<option value="">Select</option>
								<option value="1">1st</option>
								<option value="2">2nd</option>
								<option value="3">3rd</option>
								<option value="4">4th</option>
								<option value="5">5th</option>
								<option value="6">6th</option>
								<option value="7">7th</option>
								<option value="8">8th</option>
								<option value="9">9th</option>
								<option value="10">10th</option>
								<option value="11">11th</option>
								<option value="12">12th</option>
								<option value="13">13th</option>
								<option value="14">14th</option>
								<option value="15">15th</option>
							</select>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							<i class="fa fa-asterisk text-danger"></i>Weight at Birth:
						</div>	
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="birth_weight" name="birth_weight" placeholder ="Weight at Birth (grams)" readonly="">
						</div>
					</div>	
					<br>

					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#MotherData" aria-expanded="false" aria-controls="MotherData">
						<i class="fa fa-female"></i>&nbsp <b> MOTHER'S INFORMATION </b>
					</button>

					<div class="collapse" id="MotherData">
						<div class="card card-body bg-secondary">
							<div class="form-row">	
								<div class="col-md-2 col-form-label text-default mb-1">
									First Name:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="moth_first" name="moth_first" placeholder="First Name">
								</div>
								<div class="col-md-2 col-form-label text-default mb-1">
									Middle Name:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="moth_middle" name="moth_middle" placeholder="Middle Name">
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Last Name:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="moth_last" name="moth_last" placeholder="Last Name">
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Total Number of children born alive:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off" id="born_alive" name="born_alive" placeholder="Total Number of children born alive">
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Total Number of children still living including this birth:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="still_livingbirth" name="still_livingbirth" placeholder ="Total Number of children still living including this birth">
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									No. of children born alive but are now dead:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="nochild_dead" name="nochild_dead" placeholder ="No. of children born alive but are now dead">
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<button class="btn btn-block btn-success btn-square btn-m" type="button" data-toggle="collapse" data-target="#FatherData" aria-expanded="false" aria-controls="FatherData">
						<i class="fa fa-male"></i>&nbsp <b> FATHER'S INFORMATION </b>
					</button>

					<div class="collapse" id="FatherData">
						<div class="card card-body bg-secondary">
							<div class="form-row">	
								<div class="col-md-2 col-form-label text-default mb-1">
									First Name:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="fath_fname" name="fath_fname" placeholder="First Name" >
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Middle Name:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="fath_mname" name="fath_mname" placeholder="Middle Name" >
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Last Name:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="fath_lname" name="fath_lname" placeholder="Last Name" >
								</div>

								<div class="col-md-2 col-form-label text-default">
									Citizenship :
								</div>
								<div class="col-md-4 mb-1">
									<select name="fath_cit" id="fath_cit" class="form-control form-control-mb">
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
								<div class="col-md-4 mb-1">
									<select name="selRel" id="selRel" class="form-control form-control-mb"></select>
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Occupation:
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="fath_occup" name="fath_occup" placeholder="Occupation" >
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Age at the time of this birth:
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="fath_age" name="fath_age" placeholder="Age (completing years)" >
								</div>

								<div class="col-md-2 col-form-label text-default mb-1">
									Address:
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control form-control-mb" autocomplete="off"   id="fath_addr" name="fath_addr" placeholder="Address" >
								</div>
							</div>
						</div>
					</div>

					<br>
					<div class="form-row">
						<div class="col-md-2">
							Date of Marriage:
						</div>
						<div class="col-md-10">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="marriage_date" name="marriage_date" >
						</div>

						<div class="col-md-2">
							Place of Marriage:
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="marriage_place" name="marriage_place" placeholder="Place of Marriage">
						</div>

						<div class="col-md-2">
							Name Attendant:
						</div>
						<div class="col-md-3">
							<select name="selAttendant" id="selAttendant" required="" class="form-control form-control-md">
							</select>
						</div>
						<div class="col-md-3">
							<select name="attendant" id="attendant" class="form-control form-control-md">
								<option value="">SELECT</option>
								<option value="MD">Physician</option>
								<option value="RN">Nurse</option>
								<option value="RM">Midwife</option>
								<option value="TB">Hilot (Traditional Birth Attendant)</option>
								<option value="OT">Others, Specify</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="attendant_oth" name="attendant_oth" placeholder="Specify">
						</div>

						<div class="col-md-2">
							Date of Certification:
						</div>
						<div class="col-md-10">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="datecert" name="datecert" required>
						</div>
					</div>
					<br>

					<h5 class="modal-title text-success"><i class="fa fa-certificate"></i>&nbsp CERTIFICATION OF INFORMANT</h5>
					<div class="form-row">	

						<div class="col-md-2">
							Informant Name:
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="info_name" name="info_name" required placeholder="Informant Name">
						</div>

						<div class="col-md-2">
							Relationship:
						</div>
						<div class="col-md-10">
							<select name="info_relation" id="info_relation" class="form-control form-control-md">
								<option value="">SELECT</option>
								<option value="MOTHE">Mother</option>
								<option value="FATHE">Father</option>
								<option value="SISTE">Sister</option>
								<option value="BROTH">Brother</option>
								<option value="AUNT">Auntie</option>
								<option value="UNCLE">Uncle</option>
								<option value="NEPHE">Nephew</option>
								<option value="NIECE">Niece</option>
								<option value="COUSI">Cousin</option>
								<option value="SPOUS">Spouse</option>
								<option value="NEIGH">Neighbor</option>
							</select>
						</div>

						<div class="col-md-2">
							Address:
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="info_addr" name="info_addr" required placeholder="Address">
						</div>

						<div class="col-md-2">
							Date:
						</div>
						<div class="col-md-10">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="info_date" name="info_date" required placeholder="Date">
						</div>
					</div>
					<br>


					<h5 class="modal-title text-success"><i class="fa fa-user"></i>&nbsp PREPARED BY</h5>
					<div class="form-row">	
						<div class="col-md-2">
							Name:
						</div>
						<div class="col-md-10">
							<select name="selEmployees" id="selEmployees"  required="" class="form-control form-control-md">
							</select>
							<!-- dw_hos_perso_sel -->
						</div>
						<div class="col-md-2">
							Date:
						</div>
						<div class="col-md-10">
							<input type="datetime-local" required="" class="form-control form-control-mb" autocomplete="off"   id="prep_date" name="prep_date" placeholder="Date">
						</div>

						<input type="hidden" id="liveBirthIden" name="liveBirthIden"/>

						<input type="hidden" id="lb_moth_enccode" name="lb_moth_enccode"/>
						<input type="hidden" id="lb_moth_hpercode" name="lb_moth_hpercode"/>
						<input type="hidden" id="lb_baby_hpercode" name="lb_baby_hpercode"/>
						<input type="hidden" id="lb_moth_age" name="lb_moth_age"/>
						<input type="hidden" id="lb_baby_ctr" name="lb_baby_ctr" />
						<input type="hidden" id="lb_dateexam" name="lb_dateexam" />
					</div>
				</div>	

				<div class="modal-footer">
					<div class="btn-group">
						<button  onclick="LiveBirthCert()" class="btn btn-outline-primary"><i class="fa fa-print"></i>&nbsp Print</button>
						<button type="submit" name="editNewborn" id="editNewborn"  class="btn btn-outline-success" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>&nbsp Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/medicalrecords/livebirth.js"></script>
