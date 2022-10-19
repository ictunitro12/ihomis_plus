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
<input name="module" id="module" type="hidden" value="lepto">
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
				<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp Leptospirosis Patient Registration Form</h4>
			</div>
			<input type="hidden" class="form-control form-control-mb" id="encountercode" name="encountercode" readonly>
			<input type="hidden" class="form-control form-control-mb" id="formIden" name="formIden" readonly>
			<input type="hidden" class="form-control form-control-mb" id="toecode" name="toecode" readonly>
			<div class="col-md-6">
				<button name="submit" type="submit" class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
					<i class="fa fa-save"></i>
				</button>
				<button type="button" id="search" class="btn btn-success btn-ladda  float-right"> <i class="fa fa-search"></i> </button>
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
							<div class="col-md-2 col-form-label  text-default mb-1">Hospital Patient ID No.:</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1"></i>Hospital Registry No.:</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly="">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1"></i>Hospital Case No.:</div>
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
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								Civil Status :
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_cs" name="info_cs" placeholder="Civil Status">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">Birth Date:</div>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb" readonly="" name="info_dob" id="info_dob">
							</div>
							<div class=" col-md-2 col-form-label  text-default mb-1">Age:</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" readonly autocomplete="off" id="info_age" name="info_age" placeholder="Age">
							</div>
							<!-- <div class=" col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Year:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_year" name="info_year"  value="" readonly>
							</div>
							<label class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Month:
							</label>
							<div class="col-md-1">
							<input type="text" class="form-control form-control-mb" id="info_month" name="info_month"  value=""readonly >
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Days:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-mb" id="info_day" name="info_day"  value="" readonly>
							</div>	 -->
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label text-default"></i>Place of birth:</div>
					<div class="col-md-4 mb-1">
						<input type="text" class="form-control form-control-mb" id="info_bplace" name="info_bplace" value="" readonly>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-mb" id="info_bplace_prov" name="info_bplace_prov" value="" readonly>
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
						<textarea type="text" class="form-control form-control-mb mb-1" id="info_street" placeholder="Street Address" name="info_street" readonly></textarea>
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

		<p>
			<!--end of address-->

			<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"> <i class="fa fa-user-circle-o"></i>&nbsp Patient History</div>
				<hr class="bg-success">
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">Indigenous People</label>
					<div class="col-md-2">
						<select class="form-control form-control-mb mb-1" id="member_of_ip" name="member_of_ip">
							<option value="Y">Yes</option>
							<option value="N" selected>No</option>
						</select>
					</div>
					<div class="col-md-2">
						<select class="form-control form-control-mb mb-1" id="selIndig" name="selIndig" disabled>
						</select>
					</div>
					<label class="col-md-1 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Patient Admitted ?</label>
					<div class="col-md-1">
						<input type="text" class="form-control form-control-mb mb-1" placeholder="" id="admitted" name="admitted" value="Yes" readonly>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Date Admitted / Seen / Consulted:</label>
					<div class="col-md-2">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_asc" id="date_asc">
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">Date of Report:</label>
					<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_report" id="date_report">
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Date Onset of Illness:</label>
					<div class="col-md-4">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_onset" id="date_onset">
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Consulted ?</label>
					<div class="col-md-2">
						<select name="pconsult" id="pconsult" class="form-control form-control-mb mb-1">
							<option value="">Select</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1" align="right">Date of FIRST consultation:</label>
					<div class="col-md-2">
						<input type="datetime-local" class="form-control form-control-mb mb-1" name="date_consult" id="date_consult">
					</div>
					<label class="col-md-2 col-form-label text-default mb-1" align="right"><i class="fa fa-asterisk text-danger"></i> Place of consultation:</label>
					<div class="col-md-2">
						<select class="form-control form-control-mb mb-1" id="selHospital" name="selHospital">
						</select>
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Exposure :</label>
					<div class="col-md-10 mb-1">
						<select name="exposure" id="exposure" class="form-control form-control-mb mb-1">
							<option value="">Select</option>
							<option value="Flood related">FLOOD-REL</option>
							<option value="AGRI-REL">Agriculture Related</option>
							<option value="MUD-EXP">Mud Exposure</option>
							<option value="INGESTION">Ingestion of contaminated foods/drinks</option>
							<option value="OTHERS">Others</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-12 col-form-label text-default mb-1" align="center"><b>Place of Exposure:</b></label>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Street/ Purok / Subdivision :</label>
					<div class="col-md-10">
						<!--<input type="text" class="form-control form-control-mb mb-1" onchange ="fullcontact();" placeholder="" id="" name="">-->
						<textarea type="text" class="form-control form-control-mb mb-1" id="street_Lepto" placeholder="Street Address" name="street_Lepto"></textarea>
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> City/Municipality:</label>
					<div class="col-md-4">
						<!--<input type="text" class="form-control form-control-mb" id="selCity" name="selCity"  value="" readonly>-->
						<select class="form-control form-control-mb mb-1" id="selCityLepto" name="selCityLepto"></select>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Barangay :</label>
					<div class="col-md-4">
						<!--<input type="text" class="form-control form-control-mb" id="selBrgy" name="selBrgy"  value="" readonly>-->
						<select class="form-control form-control-mb" id="selBrgyLepto" name="selBrgyLepto"></select>
					</div>
				</div>

				<div class="form-row">
					<label class="col-md-2 col-form-label  text-default mb-1">Province:</label>
					<div class="col-md-4">
						<!--<input type="text" class="form-control form-control-mb" id="selProv" name="selProv"  value="" readonly>-->
						<select class="form-control form-control-mb mb-1" id="selProvLepto" name="selProvLepto" readonly="readonly"></select>
					</div>
					<div for="selRegLepto" class="col-md-2 col-form-label text-default mb-1">Region:</div>
					<div class="col-md-4">
						<select class="form-control" id="selRegLepto" name="selRegLepto" readonly="readonly"></select>
					</div>

				</div>

				<hr class="bg-success">

				<div class="row">
					<div class="col-md-12">
						<div class="h5 text-success"><i class="fa fa-flask"></i> Laboratory</div>
						<hr class="bg-success">
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Date of Specimen collected : </label>
							<div class="col-md-4">
								<input type="datetime-local" class="form-control form-control-mb" name="coldte" id="coldte">
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Laboratory Test Done :</label>
							<div class="col-md-4 mb-1">
								<select name="Lab_test" id="Lab_test" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="RDT">Rapid Diagnostic Test</option>
									<option value="MAT">Microscopic Agglutination Test </option>
									<option value="PCR">Polymerase Chain Reaction </option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default mb-1">Lab Result :</label>
							<div class="col-md-4 mb-1">
								<select name="Lab_result" id="Lab_result" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="P">Positive</option>
									<option value="N">Negative</option>
									<option value="PR">Pending</option>
								</select>
							</div>
							<label class="col-md-2 col-form-label text-default mb-1">Case Classification :</label>
							<div class="col-md-4 mb-1">
								<select name="case_classification" id="case_classification" class="form-control form-control-mb">
									<option value="">Select</option>
									<option value="SUS">Suspect</option>
									<option value="PROB">Probable</option>
									<option value="CON">Confirmed</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<label class="col-md-2 col-form-label text-default">Outcome:</label>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-mb mb-1" id="info_disp" name="info_disp" placeholder="Disposition" value="" readonly>
							</div>
						</div>
						<input type="hidden" id="modifiedby" name="modifiedby" value="<?php echo $entry_by; ?>">
						<input type="hidden" id="date_modified" name="date_modified" value="<?php echo date('Y-m-d H:i:s'); ?>">
						<input type="hidden" id="entryby" name="entryby" value="<?php echo $entry_by; ?>">
						<input type="hidden" id="entry_date" name="entry_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
					</div>
				</div>