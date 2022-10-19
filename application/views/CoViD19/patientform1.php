<input type="hidden" name="module" id="module" value="covid19">
<div class="modal" id="modalSnapShot" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white"><i class="fa fa-camera"></i> Take Snapshot</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="img-fluid img-thumbnail rounded mx-auto d-block mb-1" id="my_camera"></div>
			</div>
			<div class="modal-footer bg-secondary">
				<a onclick="take_snapshot();" class="btn btn-success btn-block btn-ladda btn-square" data-style="slide-right"><i class="fa fa-camera"></i></a>
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
			<div class="modal-body">
				<div id="ImageSnapshot" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
			<div class="modal-footer bg-secondary">
				<a onclick="save_snapshot();" class="btn btn-success btn-block btn-inline btn-square btn-ladda " data-style="zoom-out"><i class="fa fa-save"></i></a>
				<a class="btn btn-success  btn-block btn-square" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"><i class="fa fa-camera"></i></a>
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
			<div class="modal-body">
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
				<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp;Coronavirus Disease (CoViD-19)</h4>
			</div>
			<input type="hidden" class="form-control form-control-mb mb-1" id="encountercode" name="encountercode">
			<input type="hidden" class="form-control form-control-mb mb-1" id="formIden" name="formIden">
			<input type="hidden" class="form-control form-control-mb mb-1" id="newfhud" name="newfhud">
			<input type="hidden" class="form-control form-control-mb mb-1" id="toecode" name="toecode">
			<input type="hidden" class="form-control form-control-mb mb-1" id="rcode" name="rcode">
			<input type="hidden" class="form-control form-control-mb mb-1" id="pcode" name="pcode">
			<input type="hidden" class="form-control form-control-mb mb-1" id="ccode" name="ccode">
			<input type="hidden" class="form-control form-control-mb mb-1" id="bcode" name="bcode">
			<input type="hidden" class="form-control form-control-mb mb-1" id="patsuffix" name="patsuffix">

			<input type="hidden" readonly="" class=" form-control form-control-mb mb-1" autocomplete="off" id="info_lname" name="info_lname" placeholder="Last name">
			<input type="hidden" readonly="" class="form-control form-control-mb mb-1" autocomplete="off" id="info_mname" name="info_mname" placeholder="Middle name">
			<input type="hidden" readonly="" class="form-control form-control-mb mb-1" autocomplete="off" id="info_fname" name="info_fname" placeholder="First name">

			<div class="col-md-6" class="actions">
				<button name="submit" type="submit" id="submit" class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
					<i class="fa fa-save"></i>
				</button>
				<button type="button" id="search" class="btn btn-success btn-ladda  float-right">	<i class="fa fa-search"></i> </button>
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

						<small class="text text-danger"><b>Note:</b>&nbsp <i>Click button to take patient photo</i></small>
						<input type="hidden" class="form-control form-control-mb" id="info_pic" name="info_pic" readonly>
						<div class="button-group">
							<a class="btn btn-success btn-md btn-block btn-square btn-ladda" data-style="zoom-in" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"> <i class="fa fa-camera fa-xs"></i></a>
						</div>
					</div>
					<div class="col-md-10">
						<div class="form-row">
							<div class="col-md-1 col-form-label text-default mb-1">
								Fullname:
							</div>
							<div class="col-md-11">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_fullname" name="info_fullname" placeholder="Firstname Middlename Lastname, Suffix">
							</div>
							<div class="col-md-1 col-form-label text-default">
								Health record #:
							</div>
							<div class="col-md-3">
								<input type="text" class=" form-control form-control-mb" readonly autocomplete="off" id="percode" name="percode" placeholder="Health record #">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Senior citizen #:
							</div>
							<div class="col-md-3">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="senior" name="senior" placeholder="Senior citizen #">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								MSS #:
							</div>
							<div class="col-md-3">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="mss" name="mss" placeholder="MSS #">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Sex:
							</div>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_sex" name="info_sex" placeholder="Sex">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Civil status:
							</div>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_cs" name="info_cs" placeholder="Civil status">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Religion:
							</div>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="selRel" name="selRel" placeholder="Religion">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Nationality:
							</div>
							<div class="col-md-2">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_nat" name="info_nat" placeholder="Nationality">
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								Date of birth:
							</div>
							<div class="col-md-3">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_dob" name="info_dob" placeholder="Date of birth">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Place of birth:
							</div>
							<div class="col-md-7">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="info_bplace" name="info_bplace" placeholder="Place of birth">
							</div>

							<div class="col-md-1 col-form-label text-default mb-1">
								Employment:
							</div>
							<div class="col-md-3">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="selEmp" name="selEmp" placeholder="Employment">
							</div>
							<div class="col-md-1 col-form-label text-default mb-1">
								Occupation:
							</div>
							<div class="col-md-7">
								<input type="text" class=" form-control form-control-mb mb-1" readonly autocomplete="off" id="occupation" name="occupation" placeholder="Occupation">
							</div>
							<div class=" col-md-1 col-form-label  text-default mb-1">
								Age:
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_age" name="info_age" placeholder="Age">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">
								Email address:
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb mb-1" readonly id="info_email" name="info_email" placeholder="Email address">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">
								Contact #:
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb mb-1" readonly id="info_telno" name="info_telno" placeholder="Contact #">
							</div>
							<label class="col-md-1 col-form-label text-default mb-1">PhilHealth #:</label>
							<div class="col-md-3">
								<input type="text" class="form-control form-control-mb mb-1" id="pin" name="pin" readonly>
							</div>

						</div>
					</div>
				</div>
				<hr class="bg-success">

				<div class="row">
					<div class="col-md-12">
						<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
						<hr class="bg-success">
						<div class="row">
							<div class="col-md-6">
								<div class="h6 text-success">Permanent Address</div>

								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">House/Lot # Street/Purok/Sitio:</label>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb mb-1" id="info_street" name="info_street" readonly placeholder="House/Lot # Street/Purok/Sitio"></textarea>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" readonly id="city" name="city" placeholder="City/Municipality">
									</div>
									<label class="col-md-2 col-form-label text-default mb-1">Barangay:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" readonly id="barangay" name="barangay" placeholder="Barangay">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Province:</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" readonly id="province" name="province" placeholder="Province">
									</div>
									<label class="col-md-2 col-form-label  text-default mb-1">Region :</label>
									<div class="col-md-4">
										<input type="text" class="form-control form-control-mb mb-1" readonly id="region" name="region" placeholder="Region">
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="h6 text-success">&nbsp;</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Name of DRU: </label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="nodru" name="nodru" readonly>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Type: </label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="drutype" name="drutype" readonly>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Address: </label>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb mb-1" id="druaddress" name="druaddress" readonly></textarea>
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-success">
						<!--end of address-->

						<!--start of covid19-->
						<div class="row">
							<div class="col-md-6">

								<div class="form-row">
									<label class="col-md-3 col-form-label text-default mb-1">Name of interviewer:</label>
									<div class="col-md-9">
										<select class="form-control form-control-mb mb-1" id="selCityInj" name="selCityInj"></select>
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-3 col-form-label text-default mb-1">Contact number:</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mb mb-1" id="interviewcno" name="interviewcno">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-3 col-form-label text-default mb-1">Date of interview:</label>
									<div class="col-md-5">
										<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dointerview" name="dointerview">
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-row">
									<label class="col-md-3 col-form-label text-default mb-1">Name of informant:</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mb mb-1" id="ilname" name="ilname">
									</div>
								</div>
								<!-- <div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">First name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="ifname" name="ifname">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Middle name:</label>
									<div class="col-md-10">
										<input type="text" class="form-control form-control-mb mb-1" id="imname" name="imname">
									</div>
								</div> -->
								<div class="form-row">
									<label class="col-md-3 col-form-label text-default mb-1">Relationship:</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mb mb-1" id="irelationship" name="irelationship">
									</div>
								</div>
								<div class="form-row">
									<label class="col-md-3 col-form-label text-default mb-1">Contact Number:</label>
									<div class="col-md-9">
										<input type="text" class="form-control form-control-mb mb-1" id="icno" name="icno">
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-success">

						<div class="row">
							<div class="col-md-1">
								<div class="form-row">
									<label class="col-md-12 col-form-label text-default mb-1">If existing case</label>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecnanc" name="iecnanc" value="iecnanc" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecnanc">Not applicable (New case)</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecnau" name="iecnau" value="iecnau" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecnau">Not applicable (Unknown)</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecus" name="iecus" value="iecus" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecus">Update symptoms</label>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecuhso" name="iecuhso" value="iecuhso" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecuhso">Update health status / outcome</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecucc" name="iecucc" value="iecucc" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecucc">Update case classification</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecuv" name="iecuv" value="iecuv" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecuv">Update vaccination</label>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="ieculr" name="ieculr" value="ieculr" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="ieculr">Update lab result</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecucif" name="iecucif" value="iecucif" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecucif">Update chest imaging findings</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecud" name="iecud" value="iecud" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecud">Update disposition</label>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-row">
									<div class="col-md-12">
										<input type="checkbox" id="iecueth" name="iecueth" value="iecueth" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecueth">Update exposure / travel history</label>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-2">
										<input type="checkbox" id="iecos" name="iecos" value="iecos" class="">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="iecos">Others</label>
									</div>
									<div class="col-md-10">
										<textarea type="text" class="form-control form-control-mb mb-1" id="iecosspecify" name="iecosspecify" placeholder="Specify" disabled></textarea>
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-success">

						<div class="row">
							<label class="col-md-1 col-form-label text-default mb-1">Type of client:</label>
							<div class="col-md-3">
								<input type="radio" id="tocccspc" name="toclient" value="1">&nbsp;&nbsp;
								<label class="col-form-label text-default" for="tocccspc">COVID-19 Case (Suspect, Probable, or Confirmed)</label>
							</div>
							<div class="col-md-2">
								<input type="radio" id="toccc" name="toclient" value="2">&nbsp;&nbsp;
								<label class="col-form-label text-default" for="toccc">Close Contact</label>
							</div>
							<div class="col-md-4">
								<input type="radio" id="tocrtpcr" name="toclient" value="3">&nbsp;&nbsp;
								<label class="col-form-label text-default" for="tocrtpcr">For RT-PCR Testing (Not a Case of Close Contact)</label>
							</div>
						</div>
						<hr class="bg-success">

						<div class="row">
							<div class="col-md-12">
								<div class="form-row">
									<label class="col-md-2 col-form-label text-default mb-1">Testing Category/ Subgroup:</label>
									<div class="col-md-1">
										<input type="checkbox" id="tcsa" name="tcsa" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsa">A</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsb" name="tcsb" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsb">B</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsc" name="tcsc" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsc">C</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsd" name="tcsd" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsd">D</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcse" name="tcse" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcse">E</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsf" name="tcsf" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsf">F</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsg" name="tcsg" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsg">G</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsh" name="tcsh" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsh">H</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsi" name="tcsi" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsi">I</label>
									</div>
									<div class="col-md-1">
										<input type="checkbox" id="tcsj" name="tcsj" value="2" class="checker">&nbsp;&nbsp;
										<label class="col-form-label text-default" for="tcsj">J</label>
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-success">

						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-block btn-success btn-square btn-sm" type="button" data-toggle="collapse" data-target="#addPart1" aria-expanded="false" aria-controls="addPart1">Part 1. Patient Information</button>
							</div>
						</div>

						<div class="collapse" id="addPart1">
							<div class="card card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp;&nbsp;1.2. Current Address in the Philippines and Contact Information</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">House No./Lot/Bldg.:</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb mb-1" id="cabldg" name="cabldg">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Street/Purok/Sitio:</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb mb-1" id="caspsitio" name="caspsitio">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">City/Municipality:</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selCityInj" name="selCityInj"></select>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Home Phone No.:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="cahpno" name="cahpno">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Province:</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selProvInj" name="selProvInj"></select>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Cellphone No.:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="cacno" name="cacno">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Barangay:</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selBrgyInj" name="selBrgyInj"></select>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Email Address:</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="caeaddress" name="caeaddress">
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp;&nbsp;1.4. Current Workplace Address and Contact Information</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Lot/Bldg.:</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb mb-1" id="cwabldg" name="cwabldg">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Street/Purok/Sitio</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb mb-1" id="cwaspsitio" name="cwaspsitio">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">City/Municipality</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selCityInj" name="selCityInj"></select>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Name of Workplace</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="noworkplace" name="noworkplace">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Province</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selProvInj" name="selProvInj"></select>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Contact No.</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="cwacno" name="cwacno">
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Barangay</label>
											<div class="col-md-4">
												<select class="form-control form-control-mb" id="selBrgyInj" name="selBrgyInj"></select>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Email Address</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="cwaeaddress" name="cwaeaddress">
											</div>
										</div>
									</div>
								</div>
								<hr class="bg-success">

								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp;&nbsp;1.5. Special Population</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Health Care Worker</label>
											<div class="col-md-1">
												<input type="radio" id="sphcwy" name="sphcworker" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="sphcwy">Yes</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="sphcwn" name="sphcworker" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="sphcwn">No</label>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="hcwnohfacility" name="hcwnohfacility" placeholder="Name of Health Facility" disabled>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="hcwlocation" name="hcwlocation" placeholder="Location" disabled>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Returning Overseas Filipino</label>
											<div class="col-md-1">
												<input type="radio" id="sprofy" name="sprofilipino" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="sprofy">Yes</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="sprofn" name="sprofilipino" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="sprofn">No</label>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="rofcoorigin" name="rofcoorigin" placeholder="Country of Origin" disabled>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="rofpnumber" name="rofpnumber" placeholder="Passport Number" disabled>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-4 col-form-label text-default mb-1"></label>
											<div class="col-md-1">
												<input type="radio" id="ofwo" name="sprofilipinoo" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ofwo">OFW</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="ofwn" name="sprofilipinoo" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ofwn">Non-OFW</label>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Foreign National Traveler</label>
											<div class="col-md-1">
												<input type="radio" id="spfnty" name="spfntraveler" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="spfnty">Yes</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="spfntn" name="spfntraveler" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="spfntn">No</label>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="fntcoorigin" name="fntcoorigin" placeholder="Country of Origin" disabled>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="fntpnumber" name="fntpnumber" placeholder="Passport Number" disabled>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Locally Stranded Individual /<br>APOR / Local Traveler*</label>
											<div class="col-md-1">
												<input type="radio" id="lsialty" name="splsialtraveler" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="lsialty">Yes</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="lsialtn" name="splsialtraveler" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="lsialtn">No</label>
											</div>
											<div class="col-md-8">
												<input type="text" class="form-control form-control-mb mb-1" id="lsialtcmpo" name="lsialtcmpo" placeholder="City, Municipality and Province of Origin" disabled>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-4 col-form-label text-default mb-1"></label>
											<div class="col-md-2">
												<input type="radio" id="lsialtlsi" name="lsialt" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="lsialtlsi">Locally Stranded Individual</label>
											</div>
											<div class="col-md-3">
												<input type="radio" id="lsialtalt" name="lsialt" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="lsialtalt">Authorized Person Outside Residence / Local Traveler</label>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Lives in Closed Settings</label>
											<div class="col-md-1">
												<input type="radio" id="licsy" name="licsettings" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="licsy">Yes</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="licsn" name="licsettings" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="licsn">No</label>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="licsitype" name="licsitype" placeholder="Institution Type" disabled>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="licsname" name="licsname" placeholder="Name" disabled>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<p>

						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-block btn-success btn-square btn-sm" type="button" data-toggle="collapse" data-target="#addPart2" aria-expanded="false" aria-controls="addPart2">Part 2. Case Investigation Details</button>
							</div>
						</div>

						<div class="collapse" id="addPart2">
							<div class="card card-body">

								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.1. Consulation Information</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-row">
											<label class="col-md-5 col-form-label text-default mb-1"></i>Have previous COVID-19 related consultation?</label>
											<div class="col-md-1">
												<input type="radio" id="ciprevcovidconsuly" name="ciprevcovidconsul" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ciprevcovidconsuly">Yes</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="ciprevcovidconsuln" name="ciprevcovidconsul" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ciprevcovidconsuln">No</label>
											</div>
											<div class="col-md-5">
												<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="ciprevcovidconsuldofc" name="ciprevcovidconsuldofc" disabled>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-row">
											<div class="col-md-12">
												<input type="text" class="form-control form-control-mb mb-1" id="cifacname" name="cifacname" placeholder="Name of facility where first consult was done" disabled>
											</div>
										</div>
									</div>
								</div>

								<hr class="bg-success">

								<div class="row">
									<div class="col-md-6">
										<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.2. Disposition at Time of Report</div>

										<div class="form-row">
											<div class="col-md-4">
												<input type="checkbox" id="datorah" name="datorah" value="datorah" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default mb-1" for="datorah">Admitted in hospital</label>
											</div>
											<div class="col-md-8">
												<input type="text" class="form-control form-control-mb mb-1" id="datorahname" name="datorahname" disabled placeholder="Name of Hospital">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-4">
												<input type="checkbox" id="datoraiq" name="datoraiq" value="datoraiq" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default mb-1" for="datoraiq">Admitted in isolation/quarantine facility</label>
											</div>
											<div class="col-md-8">
												<input type="text" class="form-control form-control-mb mb-1" id="datoraiqname" name="datoraiqname" disabled placeholder="Name of Isolation / Quarantine facility">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-4">
												<input type="checkbox" id="datorihiq" name="datorihiq" value="datorihiq" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default mb-1" for="datorihiq">In home isolation/quarantine</label>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-4">
												<input type="checkbox" id="datordh" name="datordh" value="datordh" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default mb-1" for="datordh">Discharged to home</label>
											</div>

										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="daotro" name="daotro" value="daotro" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default mb-1" for="daotro">Others</label>
											</div>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-mb mb-1" id="daotrospecify" name="daotrospecify" placeholder="Specify" disabled>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="h5 text-success">&nbsp;</div>
										<div class="form-row">
											<label class="col-md-5 col-form-label text-default mb-1"></i>Date and Time admitted in hospital</label>
											<div class="col-md-5">
												<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="datorahdt" name="datorahdt" disabled>
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-5 col-form-label text-default mb-1"></i>Date and Time isolated/quarantined in facility</label>
											<div class="col-md-5">
												<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="datoraiqdt" name="datoraiqdt" disabled>
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-5 col-form-label text-default mb-1"></i>Date and Time isolated/quarantined at home</label>
											<div class="col-md-5">
												<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="datorihiqdt" name="datorihiqdt" disabled>
											</div>
										</div>
										<div class="form-row">
											<label class="col-md-5 col-form-label text-default mb-1"></i>Date of Discharge</label>
											<div class="col-md-5">
												<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="datordhdd" name="datordhdd" disabled>
											</div>
										</div>

									</div>
								</div>
								<hr class="bg-success">

								<div class="row">
									<div class="col-md-12">
										<div class="form-row">
											<label class="col-md-3 col-form-label h5 text-success mb-1"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.3. Health Status at Consult</label>
											<div class="col-md-1">
												<input type="radio" id="hsaca" name="hsac" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="hsaca">Asymptomatic</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="hsacmi" name="hsac" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="hsacmi">Mild</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="hsacm" name="hsac" value="3">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="hsacm">Moderate</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="hsacs" name="hsac" value="4">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="hsacs">Severe</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="hsacc" name="hsac" value="5">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="hsacc">Critical</label>
											</div>
										</div>
									</div>
								</div>
								<hr class="bg-success">

								<div class="row">
									<div class="col-md-12">
										<div class="form-row">
											<label class="col-md-3 col-form-label h5 text-success mb-1"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.4. Case Classification</label>
											<div class="col-md-1">
												<input type="radio" id="ccs" name="cc" value="1">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ccs">Suspect</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="ccp" name="cc" value="2">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ccp">Probable</label>
											</div>
											<div class="col-md-1">
												<input type="radio" id="ccc" name="cc" value="3">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ccc">Confirmed</label>
											</div>
											<div class="col-md-2">
												<input type="radio" id="ccn" name="cc" value="4">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ccn">Non-COVID-19 Case</label>
											</div>
										</div>
									</div>
								</div>
								<hr class="bg-success">

								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.5. Vaccination Information</div>
										<div class="form-row">
											<div class="table-responsive">
												<table class="table table-bordered">
													<thead class="table-dark">
														<tr align="center">
															<td>Date of vaccination</td>
															<td>Name of Vaccine</td>
															<td>Dose number</td>
															<td>Vaccination center/facility</td>
															<td>Region of health facility</td>
															<td>Adverse event/s?</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="vidov" name="vidov"></td>
															<td><input type="text" class="form-control form-control-mb mb-1" id="vinov" name="vinov"></td>
															<td><input type="number" class="form-control form-control-mb mb-1" id="vidn" name="vidn"></td>
															<td><input type="text" class="form-control form-control-mb mb-1" id="vivcf" name="vivcf"></td>
															<td><input type="text" class="form-control form-control-mb mb-1" id="virohf" name="virohf"></td>
															<td align="center"><input type="checkbox" id="viae" name="viae" value="viae" class="">&nbsp;&nbsp;
																<label class="col-form-label text-default" for="viae">Yes</label>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<hr class="bg-success">

								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.6. Clinical Information</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Date of Onset of Illness</label>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="cidoooi" name="cidoooi">
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-6 col-form-label text-default mb-1">Signs and Symptoms (Check all that apply)</label>
											<label class="col-md-2 col-form-label text-default mb-1">Comorbidities</label>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="ssasymptomatic" name="ssasymptomatic" value="ssasymptomatic" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssasymptomatic">Asymptomatic</label>
											</div>

											<div class="col-md-4">
												<input type="checkbox" id="ssdyspnea" name="ssdyspnea" value="ssdyspnea" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssdyspnea">Dyspnea</label>
											</div>

											<div class="col-md-2">
												<input type="checkbox" id="cmnone" name="cmnone" value="cmnone" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmnone">None</label>
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cmgastro" name="cmgastro" value="cmgastro" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmgastro">Gastrointestinal</label>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-1">
												<input type="checkbox" id="ssfever" name="ssfever" value="ssfever" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssfever">Fever</label>
											</div>
											<div class="col-md-1">
												<input type="text" class="form-control form-control-sm sm-1" id="ssfevertemp" name="ssfevertemp">
											</div>

											<div class="col-md-4">
												<input type="checkbox" id="ssanorexia" name="ssanorexia" value="ssanorexia" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssanorexia">Anorexia</label>
											</div>

											<div class="col-md-2">
												<input type="checkbox" id="cmhypertension" name="cmhypertension" value="cmhypertension" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmhypertension">Hypertension</label>
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cmgenito" name="cmgenito" value="cmgenito" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmgenito">Genito-urinary</label>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="sscough" name="sscough" value="sscough" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="sscough">Cough</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" id="ssnausea" name="ssnausea" value="ssnausea" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssnausea">Nausea</label>
											</div>

											<div class="col-md-2">
												<input type="checkbox" id="cmdiabetes" name="cmdiabetes" value="cmdiabetes" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmdiabetes">Diabetes</label>
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cmneurodisease" name="cmneurodisease" value="cmneurodisease" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmneurodisease">Neurological Disease</label>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="ssgenweakness" name="ssgenweakness" value="ssgenweakness" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssgenweakness">General Weakness</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" id="ssvomiting" name="ssvomiting" value="ssvomiting" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssvomiting">Vomiting</label>
											</div>

											<div class="col-md-2">
												<input type="checkbox" id="cmheartdisease" name="cmheartdisease" value="cmheartdisease" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmheartdisease">Heart Disease</label>
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cmcancer" name="cmcancer" value="cmcancer" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmcancer">Cancer</label>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="ssfatigue" name="ssfatigue" value="ssfatigue" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssfatigue">Fatigue</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" id="ssdiarrhea" name="ssdiarrhea" value="ssdiarrhea" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssdiarrhea">Diarrhea</label>
											</div>

											<div class="col-md-2">
												<input type="checkbox" id="cmlungdisease" name="cmlungdisease" value="cmlungdisease" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmlungdisease">Lung Disease</label>
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="cmothers" name="cmothers" value="cmothers" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmothers">Others</label>
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-sm sm-1" id="cmothersspecify" name="cmothersspecify">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="ssheadache" name="ssheadache" value="ssheadache" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssheadache">Headache</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" id="ssalteredmental" name="ssalteredmental" value="ssalteredmental" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssalteredmental">Altered Mental Status</label>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="ssmyalgia" name="ssmyalgia" value="ssmyalgia" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssmyalgia">Myalgia</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" id="ssanosmia" name="ssanosmia" value="ssanosmia" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssanosmia">Anosmia (loss of smell, w/o any identified cause)</label>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Pregnant?</label>
											<div class="col-md-1">
												<input type="checkbox" id="cmpregnant" name="cmpregnant" value="cmpregnant" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmpregnant">Yes, LMP</label>
											</div>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="cmpregnantd" name="cmpregnantd">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="sssorethroat" name="sssorethroat" value="sssorethroat" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="sssorethroat">Sore throat</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" id="ssageusia" name="ssageusia" value="ssageusia" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssageusia">Ageusia (loss of taste, w/o any identified cause)</label>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">High-risk pregnancy?</label>
											<div class="col-md-1">
												<input type="checkbox" id="cmhrp" name="cmhrp" value="cmhrp" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cmhrp">Yes</label>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-2">
												<input type="checkbox" id="sscoryza" name="sscoryza" value="sscoryza" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="sscoryza">Coryza</label>
											</div>
											<div class="col-md-4">
												<input type="checkbox" id="ssothers" name="ssothers" value="ssothers" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ssothers">Others, specify</label>
											</div>
											<label class="col-md-2 col-form-label text-default mb-1">Was diagnosed to have Severe Acute Respiratory Illness?</label>
											<div class="col-md-1">
												<input type="checkbox" id="diagnosedsari" name="diagnosedsari" value="diagnosedsari" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="diagnosedsari">Yes</label>
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-6 col-form-label text-default mb-1">Chest imaging findings suggestive of COVID-19</label>
										</div>

										<div class="form-row form border">
											<label class="col-md-2 col-form-label text-default mb-1">Date done</label>
											<label class="col-md-2 col-form-label text-default mb-1">Chest imaging done</label>
											<label class="col-md-8 col-form-label text-default mb-1">Results</label>
										</div>

										<div class="form-row form border">
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="cifcrdd" name="cifcrdd">
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cifcr" name="cifcr" value="cifcr" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifcr">Chest radiography</label>
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="cifcrrn" name="cifcrrn" value="cifcrrn" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifcrrn">Normal</label>
											</div>
											<div class="col-md-7">
												<input type="checkbox" id="cifcrrcr" name="cifcrrcr" value="cifcrrcr" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifcrrcr">Chest radiography: Hazy opacities, often rounded in morphology, with peripheral and lower lung dist.</label>
											</div>
										</div>

										<div class="form-row form border">
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="cifccdd" name="cifccdd">
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cifcc" name="cifcc" value="cifcc" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifcc">Chest CT</label>
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="cifccrp" name="cifccrp" value="cifccrp" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifccrp">Pending</label>
											</div>
											<div class="col-md-7">
												<input type="checkbox" id="cifccrcc" name="cifccrcc" value="cifccrcc" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifccrcc">Chest CT: Multiple bilateral ground glass opacities, often rounded in morphology, w/ peripheral & lower lung dist.</label>
											</div>
										</div>

										<div class="form-row form border">
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="cifludd" name="cifludd">
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="ciflu" name="ciflu" value="ciflu" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ciflu">Lung Ultrasound</label>
											</div>
											<div class="col-md-1">
												&nbsp;
											</div>
											<div class="col-md-7">
												<input type="checkbox" id="ciflurlu" name="ciflurlu" value="ciflurlu" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ciflurlu">Lung ultrasound: Thickened pleural lines, B lines, consolidative patterns with or without air bronchograms.</label>
											</div>
										</div>

										<div class="form-row form border">
											<div class="col-md-2">
												&nbsp;
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cifnone" name="cifnone" value="cifnone" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifnone">None</label>
											</div>
											<div class="col-md-1">
												&nbsp;
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="cifnonero" name="cifnonero" value="cifnonero" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="cifnonero">Other findings, specify</label>
											</div>
											<div class="col-md-5">
												<input type="text" class="form-control form-control-mb mb-1" id="cifnonerospecify" name="cifnonerospecify">
											</div>
										</div>
									</div>
								</div>
								<hr class="bg-success">

								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.7. Laboratory Information</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">Have tested positive using RT-PCR before?</label>
											<div class="col-md-2">
												<input type="checkbox" id="tpurtpcr" name="tpurtpcr" value="tpurtpcr" class="checker">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="tpurtpcr">Yes, date of specimen collection</label>
											</div>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="tpurtpcrscd" name="tpurtpcrscd">
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">&nbsp;</label>
											<label class="col-md-2 col-form-label text-right mb-1">Laboratory</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="tpurtpcrlab" name="tpurtpcrlab">
											</div>
											<label class="col-md-1 col-form-label text-default mb-1">&nbsp;</label>
											<label class="col-md-2 col-form-label text-default mb-1">No. of previous RT-PCR swabs done</label>
											<div class="col-md-1">
												<input type="text" class="form-control form-control-mb mb-1" id="tpurtpcrno" name="tpurtpcrno">
											</div>
										</div>

										<div class="form-row form border">
											<label class="col-md-2 col-form-label text-center mb-1">Date collected</label>
											<label class="col-md-2 col-form-label text-center mb-1">Date released</label>
											<label class="col-md-2 col-form-label text-center mb-1">Laboratory</label>
											<label class="col-md-4 col-form-label text-center mb-1">Type of Test</label>
											<label class="col-md-2 col-form-label text-center mb-1">Results</label>
										</div>

										<div class="form-row form border">
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-sm" autocomplete="off" id="labdc" name="labdc">
											</div>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-sm" autocomplete="off" id="labdr" name="consult_date">
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-sm sm-1" id="lablab" name="lablab">
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="ttops" name="ttops" value="ttops" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ttops">RT-PCR (OPS)</label>
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="ttantigen" name="ttantigen" value="Nttantigen" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ttantigen">Antigen; reason</label>
											</div>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-sm sm-1" id="ttantigenr" name="ttantigenr">
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="respending" name="respending" value="respending" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="respending">Pending</label>
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="resnegative" name="resnegative" value="resnegative" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="resnegative">Negative</label>
											</div>
										</div>

										<div class="form-row form border">
											<div class="col-md-6">
												&nbsp;
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="ttnps" name="ttnps" value="ttnps" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ttnps">RT-PCR (NPS)</label>
											</div>
											<label class="col-md-1 col-form-label text-right sm-1">brand of kit</label>
											<div class="col-md-2">
												<input type="text" class="form-control form-control-sm sm-1" id="ttnpsbok" name="ttnpsbok">
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="respositive" name="respositive" value="respositive" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="respositive">Positive</label>
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="resequivocal" name="resequivocal" value="resequivocal" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="resequivocal">Equivocal</label>
											</div>
										</div>

										<div class="form-row form border">
											<div class="col-md-6">
												&nbsp;
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="ttopsnps" name="ttopsnps" value="ttopsnps" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ttopsnps">OPS and NPS</label>
											</div>
											<div class="col-md-3">
												<input type="checkbox" id="ttantibodytest" name="ttantibodytest" value="ttantibodytest" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ttantibodytest">Antibody Test</label>
											</div>

											<div class="col-md-1">
												<input type="checkbox" id="resothers" name="resothers" value="resothers" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="resothers">Others</label>
											</div>
											<div class="col-md-1">
												<input type="text" class="form-control form-control-sm sm-1" id="resothersspecify" name="resothersspecify">
											</div>
										</div>

										<div class="form-row form border">
											<div class="col-md-6">
												&nbsp;
											</div>
											<div class="col-md-1">
												<input type="checkbox" id="ttothers" name="ttothers" value="ttothers" class="">&nbsp;&nbsp;
												<label class="col-form-label text-default" for="ttothers">Others</label>
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-sm sm-1" id="ttothersspecify" name="ttothersspecify">
											</div>
										</div>
									</div>
								</div>
								<hr class="bg-success">

								<div class="row">
									<div class="col-md-12">
										<div class="h5 text-success"><i class="fa fa-medkit"></i>&nbsp;&nbsp;2.8. Outcome/Condition at Time of Report</div>

										<div class="form-row">
											<div class="col-md-3">
												<input type="checkbox" id="ocatora" name="ocatora" value="ocatora" class="">&nbsp;
												<label class="col-form-label text-default" for="ocatora">Active (currently admitted/isolation/quarantine)</label>
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="ocatorr" name="ocatorr" value="ocatorr" class="">&nbsp;
												<label class="col-form-label text-default" for="ocatorr">Recovered, date of recovery</label>
											</div>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ocatorrd" name="ocatorrd">
											</div>
											<div class="col-md-1">
												&nbsp;
											</div>
											<div class="col-md-2">
												<input type="checkbox" id="ocatord" name="ocatord" value="ocatord" class="">&nbsp;
												<label class="col-form-label text-default" for="ocatord">Died, date of death</label>
											</div>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ocatordd" name="ocatordd">
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-center mb-1"><i class="fa fa-asterisk text-danger"></i>If died, cause of death</label>
											<label class="col-md-2 col-form-label text-right mb-1">Immediate Cause</label>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb mb-1" id="ocatordic" name="ocatordic">
											</div>
											<label class="col-md-2 col-form-label text-right mb-1">Antecedent Cause</label>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb mb-1" id="ocatordac" name="ocatordac">
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">&nbsp;</label>
											<label class="col-md-2 col-form-label text-right mb-1">Underlying Cause</label>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb mb-1" id="ocatorduc" name="ocatorduc">
											</div>
											<label class="col-md-2 col-form-label text-right mb-1">Contributory Conditions</label>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb mb-1" id="ocatordcc" name="ocatordcc">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-success">

						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-block btn-success btn-square btn-sm" type="button" data-toggle="collapse" data-target="#addPart3" aria-expanded="false" aria-controls="addPart3">Part 3. Contact Tracing Exposure and Travel History</button>
							</div>
						</div>

						<div class="collapse" id="addPart3">
							<div class="card card-body">

								<div class="row">
									<div class="col-md-12">

										<div class="form-row">
											<label class="col-md-6 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>History of exposure to known probable and/or confirmed COVID-19 case 14 days before the onset of signs and symptoms?<br>OR If Asymptomatic, 14 days before swabbing or specimen collection?</label>
											<div class="col-md-2">
												<select class="form-control form-control-mb" id="ehperson" name="ehperson">
													<option value="2">No</option>
													<option value="1">Yes</option>
													<option value="3">Unknown</option>
												</select>
											</div>
											<label class="col-md-1 col-form-label text-right mb-1">Date of last contact</label>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehpersondolc" name="ehpersondolc">
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-6 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>Has the patient been in a place with a known COVID-19 transmission 14 days before the onset of signs and symptoms?<br>OR If Asymptomatic, 14 days before swabbing or specimen collection?</label>
											<div class="col-md-2">
												<select class="form-control form-control-mb" id="ehplace" name="ehplace">
													<option value="3">No</option>
													<option value="1">Yes, Local</option>
													<option value="2">Yes, International</option>
													<option value="4">Unknown exposure</option>
												</select>
											</div>
										</div>
										<!-- INTERNATIONAL TRAVEL -->
										<div class="form-row">
											<label class="col-md-2 col-form-label text-default mb-1">If International Travel, country of origin</label>
											<div class="col-md-4">
												<input type="text" class="form-control form-control-mb mb-1" id="itcoo" name="itcoo">
											</div>

											<label class="col-md-3 col-form-label text-center mb-1">With ongoing COVID-19 community transmission?</label>
											<div class="col-md-2">
												<input type="checkbox" id="wocct" name="wocct" value="wocct" class="">&nbsp;
												<label class="col-form-label text-default" for="wocct">Yes</label>
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-1 col-form-label text-default mb-1">Inclusive travel dates</label>
											<label class="col-md-1 col-form-label text-center mb-1">From</label>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ititdfrom" name="ititdfrom">
											</div>
											<label class="col-md-2 col-form-label text-right mb-1">Airline/Sea vessel</label>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb mb-1" id="asvessel" name="asvessel">
											</div>
											<label class="col-md-1 col-form-label text-default mb-1">Date of departure</label>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ititddod" name="ititddod">
											</div>
										</div>

										<div class="form-row">
											<label class="col-md-1 col-form-label text-default mb-1">&nbsp;</label>
											<label class="col-md-1 col-form-label text-center mb-1">To</label>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ititdto" name="ititdto">
											</div>
											<label class="col-md-2 col-form-label text-right mb-1">Flight/Vessel Number</label>
											<div class="col-md-3">
												<input type="text" class="form-control form-control-mb mb-1" id="asvesselno" name="asvesselno">
											</div>
											<label class="col-md-1 col-form-label text-default mb-1">Date of arrival in PH</label>
											<div class="col-md-2">
												<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ititddoaiph" name="ititddoaiph">
											</div>
										</div>
										<!-- LOCAL TRAVEL -->
										<div class="form-row">
											<label class="col-md-12 col-form-label text-default mb-1">If Local Travel, specify travel places (Check all that apply, provide name of facility, address, and inclusive travel dates)</label>

										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-row">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead class="table-dark">
																<tr align="center">
																	<td rowspan="2">Place Visited</td>
																	<td rowspan="2">Name of Place</td>
																	<td rowspan="2">Address<br>(Region, Province, Municipality/City)</td>
																	<td colspan="2">Inclusive Travel Dates</td>
																	<td rowspan="2">With ongoing COVID-19<br>Community Transmission?</td>
																</tr>
																<tr align="center">
																	<td>From</td>
																	<td>To</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="checkbox" id="ehplacehf" name="ehplacehf" value="ehplacehf" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplacehf">Health Facility</label></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacehfd" name="ehplacehf"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacehfd" name="ehplacehf"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacehffrom" name="ehplacehffrom"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacehfto" name="ehplacehfto"></td>
																	<td align="center"><input type="checkbox" id="lthf" name="lthf" value="ehplacehf" class="">&nbsp;<label class="col-form-label text-default" for="lthf">Yes</label></td>
																</tr>
																<tr>
																	<td><input type="checkbox" id="ehplacecs" name="ehplacecs" value="ehplacecs" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplacecs">Closed Settings</label></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacecsd" name="ehplacecs"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacecsd" name="ehplacecs"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacecsfrom" name="ehplacecsfrom"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacecsto" name="ehplacecsto"></td>
																	<td align="center"><input type="checkbox" id="ltcs" name="ltcs" value="ehplacecs" class="">&nbsp;<label class="col-form-label text-default" for="ltcs">Yes</label></td>
																</tr>
																<tr>
																	<td><input type="checkbox" id="ehplaces" name="ehplaces" value="ehplaces" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplaces">School</label></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacesd" name="ehplaces"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacesd" name="ehplaces"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacesfrom" name="ehplacesfrom"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacesto" name="ehplacesto"></td>
																	<td align="center"><input type="checkbox" id="lts" name="lts" value="ehplaces" class="">&nbsp;<label class="col-form-label text-default" for="lts">Yes</label></td>
																</tr>
																<tr>
																	<td><input type="checkbox" id="ehplacew" name="ehplacew" value="ehplacew" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplacew">Workplace</label></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacewd" name="ehplacew"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacewd" name="ehplacew"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacewfrom" name="ehplacewfrom"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacewto" name="ehplacewto"></td>
																	<td align="center"><input type="checkbox" id="ltw" name="ltw" value="ehplacew" class="">&nbsp;<label class="col-form-label text-default" for="ltw">Yes</label></td>
																</tr>
																<tr>
																	<td><input type="checkbox" id="ehplacem" name="ehplacem" value="ehplacem" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplacem">Market</label></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacemd" name="ehplacem"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacemd" name="ehplacem"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacemfrom" name="ehplacemfrom"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacemto" name="ehplacemto"></td>
																	<td align="center"><input type="checkbox" id="ltm" name="ltm" value="ehplacem" class="">&nbsp;<label class="col-form-label text-default" for="ltm">Yes</label></td>
																</tr>
																<tr>
																	<td><input type="checkbox" id="ehplacesg" name="ehplacesg" value="ehplacesg" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplacesg">Social Gathering</label></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacesgd" name="ehplacesg"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplacesgd" name="ehplacesg"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacesgfrom" name="ehplacesgfrom"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplacesgto" name="ehplacesgto"></td>
																	<td align="center"><input type="checkbox" id="ltsg" name="ltsg" value="ehplacesg" class="">&nbsp;<label class="col-form-label text-default" for="ltsg">Yes</label></td>
																</tr>
																<tr>
																	<td><input type="checkbox" id="ehplaceo" name="ehplaceo" value="ehplaceo" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplaceo">Others</label></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplaceod" name="ehplaceo"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="ehplaceod" name="ehplaceo"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplaceofrom" name="ehplaceofrom"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="ehplaceoto" name="ehplaceoto"></td>
																	<td align="center"><input type="checkbox" id="lto" name="lto" value="ehplaceo" class="">&nbsp;<label class="col-form-label text-default" for="lto">Yes</label></td>
																</tr>
																<tr>
																	<td colspan="6"><input type="checkbox" id="ehplacetp" name="ehplacetp" value="ehplacetp" class="">&nbsp;&nbsp;&nbsp;<label class="col-form-label text-default" for="ehplacetp">Transport Service, specify the following</label></td>
																</tr>
															</tbody>
															<thead class="table-dark">
																<tr align="center">
																	<td>Airline/Sea vessel/Bus line/Train</td>
																	<td>Flight/Vessel/Bus No.</td>
																	<td>Place of Origin</td>
																	<td>Departure Date</td>
																	<td>Destination</td>
																	<td>Date of Arrival</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="tsasvblt" name="tsasvblt"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="tsfvbno" name="tsfvbno"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="tspoo" name="tspoo"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="tsddd" name="tsddd"></td>
																	<td><input type="text" class="form-control form-control-mb mb-1" id="tsd" name="tsd"></td>
																	<td><input type="datetime-local" class="form-control form-control-mb" autocomplete="off" d="tsddoa" name="tsddoa"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<hr class="bg-success">

										<div class="form-row">
											<label class="col-md-12 col-form-label text-default mb-1"><br>- If symptomatic, provide names and contact numbers of persons who were with the patient two days prior to onset of illness until this date<br>
												- If asymptomatic, provide names and contact numbers of persons who were with the patient on the day specimen was submitted for testing until this date</label>
										</div>
										<div class="form-row">
											<label class="col-md-1 col-form-label text-right mb-1">Name</label>
											<div class="col-md-5">
												<input type="text" class="form-control form-control-mb mb-1" id="wcpname" name="wcpname">
											</div>
											<label class="col-md-1 col-form-label text-right mb-1">Contact Number</label>
											<div class="col-md-5">
												<input type="text" class="form-control form-control-mb mb-1" id="wccno" name="wccno">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-success">
						<!--end of covid19-->