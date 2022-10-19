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
<input name="module" id="module" type="hidden" value="cholera">
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
			<div class="col-md">
				<h4 class="card-title text-success"><i class="fa fa-user-circle-o"></i>&nbsp; Cholera (ICD 10 Code: A00)</h4>
			</div>
			<input type="hidden" class="form-control form-control-md" id="encountercode" name="encountercode" readonly>
			<input type="hidden" class="form-control form-control-md" id="formIden" name="formIden" readonly>
			<div class="btn-group pull-right btn-sm" role="group" aria-label="">
				<a name="patSearchbtn" id="patSearchbtn" class="btn btn-success btn-ladda  float-right text-white" data-style="zoom-in">
					<i class="fa fa-search"></i>
				</a>&nbsp;
				<button name="patInfoSavebtn" type="submit" class="btn btn-success btn-ladda  float-right" data-style="zoom-in">
					<i class="fa fa-save"></i>
				</button>
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
						<input type="hidden" class="form-control form-control-md" id="info_pic" name="info_pic" readonly>
						<div class="button-group">
							<a class="btn btn-success btn-md btn-block btn-square btn-ladda" data-style="zoom-in" onclick="iniCamera();" data-toggle="modal" data-target="#modalSnapShot"> <i class="fa fa-camera fa-xs"></i></a>
						</div>
					</div>
					<div class="col-md-10">
						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Patient ID No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-md mb-1" autocomplete="off" placeholder="Hospital Patient ID No." id="info_hosppat_idno" name="info_hosppat_idno" readonly="">
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								Old Hospital ID NO.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-md" autocomplete="off" id="oldhosp_no" name="oldhosp_no" disabled>
								<input type="hidden" class="form-control form-control-md" autocomplete="off" id="info_rephealthfac" name="info_rephealthfac">
								<input type="hidden" class="form-control form-control-md mb-1" placeholder="patient id" id="patient_id" name="patient_id">
								<input type="hidden" class="form-control form-control-md mb-1" placeholder="" id="toecode" name="toecode">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Case No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-md mb-1" autocomplete="off" placeholder="Hospital Case No" id="info_hospcaseno" name="info_hospcaseno" disabled>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Hospital Registry No.:
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control form-control-md mb-1" id="info_hosregno" placeholder="Hospital Registry No.." name="info_hosregno" readonly="">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 col-form-label text-default mb-1">
								Fullname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" disabled autocomplete="off" id="info_fullname" name="info_fullname">
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Lastname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" autocomplete="off" onchange="fullname();" id="info_lname" name="info_lname" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Firstname:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" onchange="fullname();" autocomplete="off" id="info_fname" name="info_fname" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Suffix:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" onchange="fullname();" autocomplete="off" id="info_suffix" name="info_suffix" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Middlename:
							</div>
							<div class="col-md-10">
								<input type="text" class="form-control form-control-md mb-1" onchange="fullname();" autocomplete="off" id="info_mname" name="info_mname" disabled>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Sex:
							</div>
							<div class="col-md-4">
								<select name="info_sex" id="info_sex" class="form-control form-control-md mb-1" disabled>
									<option value="">Select</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
							<div class="col-md-2 col-form-label text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i> Civil Status :
							</div>
							<div class="col-md-4">
								<select name="info_cs" id="info_cs" class="form-control form-control-md mb-1" disabled>
									<option value=""></option>
									<option value="S">Single</option>
									<option value="M">Married</option>
									<option value="C">Co-Habitation</option>
									<option value="X">Separated</option>
									<option value="W">Widow/Widower</option>
								</select>
							</div>
							<div class="col-md-2 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Birth Date:
							</div>
							<div class="col-md-4">
								<input type="date" class="form-control form-control-md mb-1" name="info_dob" id="info_dob" disabled>
							</div>
							<div class=" col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Age Year:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-md mb-1" id="info_year" name="info_year" value="" disabled>
							</div>
							<label class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Month:
							</label>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-md mb-1" id="info_month" name="info_month" value="" disabled>
							</div>
							<div class="col-md-1 col-form-label  text-default mb-1">
								<i class="fa fa-asterisk text-danger"></i>Days:
							</div>
							<div class="col-md-1">
								<input type="text" class="form-control form-control-md mb-1" id="info_day" name="info_day" value="" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Place of birth:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md mb-1" id="info_bplace" name="info_bplace" value="" disabled>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-md" id="info_bplace_prov" name="info_bplace_prov" value="" readonly>
						<input type="hidden" onchange="fullplace();" class="form-control form-control-md" id="info_bplace_city" name="info_bplace_city" value="" readonly>
					</div>
					<div class="col-md-2 col-form-label text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i>Religion :
					</div>
					<div class="col-md-4">
						<input type="text" name="selRel" id="selRel" class="form-control form-control-md" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">
						Landline #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="info_telno" name="info_telno" placeholder="Landline #" disabled>
					</div>

					<label class="col-md-2 col-form-label text-default mb-1">
						Mobile #:
					</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="info_mobno" name="info_mobno" placeholder="Mobile #" disabled>
					</div>
				</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp Demographic Information</div>
				<hr class="bg-success">
				<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i> Current Address</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> No.Street:
					</div>
					<div class="col-md-10">
						<textarea type="text" class="form-control form-control-md mb-1" id="getStr" name="getStr" readonly></textarea>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> City/Municipality:
					</label>
					<div class="col-md-10">
						<input type="text" class="form-control form-control-md" id="getCity" name="getCity" disabled>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getBrgy" name="getBrgy" disabled>
					</div>

					<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
						Region:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getReg" name="getReg" disabled>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getDist" name="getDist" disabled>
					</div>

					<div class="col-md-2 col-form-label  text-default mb-1">
						Province:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getProv" name="getProv" disabled>
					</div>

				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getZip" name="getZip" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
					<div class="col-md-4">
						<select type="text" class="form-control form-control-md mb-1" readonly="readonly" id="info_country" name="info_country">
							<option value="PHIL" selected>Philippines</option>
						</select>
					</div>
				</div>
				<div class="h6 text-left text-success"><i class="fa fa-map-marker"></i> Permanent Address</div>
				<div class="form-row">
					<div class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> No.Street:
					</div>
					<div class="col-md-10">
						<textarea type="text" class="form-control form-control-md mb-1" id="getStr2" name="getStr2" readonly></textarea>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">
						<i class="fa fa-asterisk text-danger"></i> City/Municipality:
					</label>
					<div class="col-md-10">
						<input type="text" class="form-control form-control-md" id="getCity2" name="getCity2" disabled>
					</div>
					<label class="col-md-2 col-form-label  text-default mb-1">Barangay :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getBrgy2" name="getBrgy2" disabled>
					</div>

					<div for="selReg" class="col-md-2 col-form-label text-default mb-1">
						Region:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getReg2" name="getReg2" disabled>
					</div>
				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label  text-default mb-1">District:</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getDist2" name="getDist2" disabled>
					</div>

					<div class="col-md-2 col-form-label  text-default mb-1">
						Province:
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getProv2" name="getProv2" disabled>
					</div>

				</div>
				<div class="form-row">
					<label class="col-md-2 col-form-label text-default mb-1">ZipCode :</label>
					<div class="col-md-4">
						<input type="text" class="form-control form-control-md" id="getZip2" name="getZip2" disabled>
					</div>
					<label class="col-md-2 col-form-label text-default mb-1">Country :</label>
					<div class="col-md-4">
						<select type="text" class="form-control form-control-md mb-1" readonly="readonly" id="info_country2" name="info_country2">
							<option value="PHIL" selected>Philippines</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!--end of address-->
		<hr class="bg-success">
		<div class="row">
			<div class="col-md-12">
				<div class="h5 text-success"><i class="fa fa fa-history"></i>&nbsp HISTORY</div>
			</div>
		</div>
		<hr class="bg-success">
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default mb-1">Outcome</label>
			<div class="col-md-2">
				<select class="form-control form-control-md mb-1" name="outcome" id="outcome">
					<option value="A">Alive</option>
					<option value="D">Died</option>
				</select>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Date Died</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_died" name="date_died" disabled>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Indigenous People</label>
			<div class="col-md-1">
				<select name="member_ip" id="member_ip" class="form-control form-control-md">
					<option value="">Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Specify</label>
			<div class="col-md-2">
				<select name="selIndig" id="selIndig" class="form-control form-control-md" disabled>
				</select>
			</div>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default mb-1">Date Admitted/ Seen/Consulted</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_admitted" name="date_admitted">
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Patient Admitted</label>
			<div class="col-md-1">
				<select name="admitted" id="admitted" class="form-control form-control-md mb-1">
					<option value="">Select</option>
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Consulted</label>
			<div class="col-md-1">
				<select class="form-control form-control-md mb-1" name="consulted" id="consulted">
					<option value="Y">Yes</option>
					<option value="N">No</option>
				</select>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Case Classification</label>
			<div class="col-md-3">
				<select name="case_classification" id="case_classification" class="form-control form-control-md mb-1">
					<option value=""><span class="text-muted">Please select</span></option>
					<option value="S">Suspect</option>
					<option value="P">Probable </option>
					<option value="C">Confirmed</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default mb-1">Date onset of illness (FIRST symptoms)</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_onset" name="date_onset">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">Date of First Consultation</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_firstconsult" name="date_firstconsult">
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Place of Consultation</label>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-md mb-1" id="placefirstconsult" name="placefirstconsult">
			</div>
		</div>
		<div class="form-row">
			<label class="col-md-2 col-form-label text-default mb-1"> Date of Specimen Collected</label>
			<div class="col-md-2">
				<input type="datetime-local" class="form-control form-control-md mb-1" id="date_specimen" name="date_specimen">
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">Main source of drinking water</label>
			<div class="col-md-2">
				<select name="mainsourcewater" id="mainsourcewater" class="form-control form-control-md mb-1">
					<option value=""><span class="text-muted">Please select</span></option>
					<option value="W">Well</option>
					<option value="S">Spring </option>
					<option value="L">Local Water System</option>
					<option value="C">Commercial Water </option>
					<option value="O">Others </option>
				</select>
			</div>
			<label class="col-md-1 col-form-label text-default mb-1">Other</label>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-md mb-1" id="mainsourcewater_others" name="mainsourcewater_others" placeholder="Main source of drinking water others" disabled>
			</div>
			<label class="col-md-2 col-form-label text-default mb-1">Stool Culture Result</label>
			<div class="col-md-2">
				<select name="stool_result" id="stool_result" class="form-control form-control-md mb-1">
					<option value=""><span class="text-muted">Please select</span></option>
					<option value="P">Positive (specify organism/RDT</option>
					<option value="N">Negative </option>
					<option value="PR">Pending Results</option>
					<option value="ND">Not done</option>
				</select>
			</div>
		</div>
		<input type="hidden" name="entryby" id="entryby" value="<?php echo $entry_by; ?>" />
		<input type="hidden" name="entry_date" id="entry_date" value="<?php echo date('Y-m-d H:i:s'); ?>" />