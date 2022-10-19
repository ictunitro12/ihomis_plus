<style type="text/css">
	.field-icon {
		float: right;
		margin-left: 85%;
		margin-top: -25px;
		position: relative;
		z-index: 5;
	}
</style>

<form id="frmAddHospital" name="frmAddHospital">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<div class="h4 text text-success">
						<i class="fa fa-database"></i>
						&nbsp <?php echo $header; ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="formIden" id="formIden">
		<div class="card-body table-responsive">
			<div class="form-row">
				<div class="col-md-6">
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-hospital-o"></i>&nbsp;General Information </div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">FHUD code</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" readonly name="hfhudcode" id="hfhudcode" autocomplete="off" placeholder="" />
									<input type="hidden" class="form-control form-control-mg" readonly name="oldfhud" id="oldfhud" autocomplete="off" placeholder="FHUD code" />
									</select>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">New FHUD code</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="neissnewfhudcode" id="neissnewfhudcode" autocomplete="off" placeholder="New FHUD code" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Facility name</label>
								<div class="col-md-9">
									<select class="form-control form-control-mb mb-1" id="selHospital" name="selHospital">
										<input type="hidden" class="form-control form-control-mg" name="hfhudname" id="hfhudname" autocomplete="off" placeholder="Facility name" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Abbrevation</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="abbre" id="abbre" autocomplete="off" placeholder="Abbrevation" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Service capability</label>
								<div class="col-md-9">
									<select name="typeofhospital" id="typeofhospital" class="form-control form-control-mb mb-1">
										<option value="">Select</option>
										<option value="GL1">General : Level 1</option>
										<option value="GL2">General : Level 2</option>
										<option value="GL3">General : Level 3</option>
										<option value="SD">Specialty : Treats a particular disease</option>
										<option value="SO">Specialty : Treats a particular organ</option>
										<option value="SC">Specialty : Treats a particular class of patient</option>
										<option value="SOT">Specialty : Others</option>
										<option value="I">Infirmary</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-1">
								</div>
								<label class="col-md-2 col-form-label text-default mb-1">(Specify)</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="specialtyspecify" id="specialtyspecify" autocomplete="off" placeholder="Specify" disabled />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Nature of ownership</label>
								<div class="col-md-9">
									<select class="form-control form-control-mb mb-1" id="selOwner" name="selOwner"> </select>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-1">
								</div>
								<label class="col-md-2 col-form-label text-default mb-1">(Specify)</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="ownershipspecify" id="ownershipspecify" autocomplete="off" placeholder="Specify" disabled />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Trauma capability</label>
								<div class="col-md-9">
									<select name="htrauma" id="htrauma" class="form-control form-control-mb mb-1" value="">
										<option value="">Select</option>
										<option value="TC">Trauma Capable</option>
										<option value="TR">Trauma Receiving</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Bed capacity</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="bedcapacity" id="bedcapacity" autocomplete="off" placeholder="Bed capacity" />
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-map"></i>&nbsp;Location </div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Street address</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="street" id="street" autocomplete="off" placeholder="" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">City / Municipality</label>
								<div class="col-md-9">
									<select class="form-control form-control-mb mb-1" id="selCity" name="selCity">
									</select>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Barangay</label>
								<div class="col-md-9">
									<select class="form-control form-control-mb mb-1" id="selBrgy" name="selBrgy">
									</select>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Province</label>
								<div class="col-md-9">
									<select class="form-control form-control-mb mb-1" id="selProv" name="selProv" readonly="readonly">
									</select>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Region</label>
								<div class="col-md-9">
									<select class="form-control form-control-mb mb-1" id="selReg" name="selReg" readonly="readonly">
									</select>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Zip code</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" placeholder="Zip Code" id="info_zip" name="info_zip">
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Country</label>
								<div class="col-md-9">
									<select name="countrycode" id="countrycode" class="form-control form-control-mb mb-1" value="">
										<option value="">Select</option>
										<option value="PHIL" selected>Philippines</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-vcard"></i>&nbsp;Facility Contact Infomation </div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Email address</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="emailaddress" id="emailaddress" autocomplete="off" placeholder="Email address" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Contact number</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="contactno" id="contactno" autocomplete="off" placeholder="Contact number" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Fax number</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="faxno" id="faxno" autocomplete="off" placeholder="Fax number" />
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fas fa-pills"></i>&nbsp;EDPMS (<small>Electronic Drug Price Monitoring System</small>)</div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Company</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="edpmscompany" id="edpmscompany" autocomplete="off" placeholder="Company" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">User ID</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="epdmsuserid" id="epdmsuserid" autocomplete="off" placeholder="User ID" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control form-control-mb mb-1" name="epdmspassword" id="epdmspassword" autocomplete="off" placeholder="Password" />
									<span toggle="#epdmspassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-wheelchair"></i>&nbsp;ONEISS (<small>Online National Electronic Injury Surveillance System</small>)</div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">User ID</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="neissuserid" id="neissuserid" autocomplete="off" placeholder="User ID" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control form-control-mb mb-1" name="neisspassword" id="neisspassword" autocomplete="off" placeholder="Password" />
									<span toggle="#neisspassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-bar-chart"></i>&nbsp;OHFSRS (<small>Online Health Facility Statistical Report System</small>)</div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">User ID</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="ohsrsusername" id="ohsrsusername" autocomplete="off" placeholder="User ID" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control form-control-mb mb-1" name="ohsrspassword" id="ohsrspassword" autocomplete="off" placeholder="Password" />
									<span toggle="#ohsrspassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-list"></i>&nbsp;PHIC (<small>Philippine Health Insurance Corporation</small>) E-Claims (<small>Electronic Claims</small>)</div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<div class="col-md-12">

								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">User ID</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="phicuserid" id="phicuserid" autocomplete="off" placeholder="User ID" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control form-control-mb mb-1" name="phicpassword" id="phicpassword" autocomplete="off" placeholder="Password" />
									<span toggle="#phicpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Hospital code</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="hospcode" id="hospcode" autocomplete="off" placeholder="Hospital code" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Web service password</label>
								<div class="col-md-9">
									<input type="password" class="form-control form-control-mb mb-1" name="webservicepassword" id="webservicepassword" autocomplete="off" placeholder="Password" />
									<span toggle="#webservicepassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<input type="hidden" id="fhudcode" value="<?php echo FacilityInfo()->hfhudcode; ?>">
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-list"></i>&nbsp;PhilHealth Accreditation</div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Accreditation</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="phicaccreditation" id="phicaccreditation" autocomplete="off" placeholder="Accreditation" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">From</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb mb-1" name="phicvaliditydate" id="phicvaliditydate" autocomplete="off" placeholder="From" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">To</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb mb-1" name="phicvaliditydatet" id="phicvaliditydatet" autocomplete="off" placeholder="To" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Accredited beds</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="phicbeds" id="phicbeds" autocomplete="off" placeholder="Accredited beds" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Type</label>
								<div class="col-md-9">
									<select name="phictype" id="phictype" class="form-control form-control-mb mb-1" value="">
										<option value="">Select</option>
										<option value="B">Basic</option>
										<option value="A">Advance</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="form-row">
								<div class="col-md-11">
									<div class="h5 text-success"><i class="fa fa-list"></i>&nbsp;ISO (<small>International Organization for Standardization</small>) Certification </div>
								</div>
								<div class="col-md-1">
									<div class="btn-group pull-right" role="group" aria-label="">
										<a onclick="AddISO()" class="btn btn-outline-success btn-sm btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body table-responsive">
							<table id="isocertified" class="table table-sm table-bordered table-hover" width="100%">
								<thead align="center">
									<tr style="font-weight:bold">
										<th>Code</th>
										<th> Description</th>
										<th>Certifying body</th>
										<th></th>
										<th>From</th>
										<th></th>
										<th>To </th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-list"></i>&nbsp;International Accreditation </div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Accreditation</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="interaccreditation" id="interaccreditation" autocomplete="off" placeholder="Accreditation" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">From</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb mb-1" name="interFrom" id="interFrom" autocomplete="off" placeholder="From" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">To</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb mb-1" name="interto" id="interto" autocomplete="off" placeholder="To" />
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-list"></i>&nbsp;PCAHO (<small>Philippine Council on Accreditation for Healthcare Organization</small>) </div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Accreditation</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="pcahoaccreditation" id="pcahoaccreditation" autocomplete="off" placeholder="Accreditation" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">From</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb mb-1" name="pcahoFrom" id="pcahoFrom" autocomplete="off" placeholder="From" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">To</label>
								<div class="col-md-9">
									<input type="datetime-local" class="form-control form-control-mb mb-1" name="pcahoto" id="pcahoto" autocomplete="off" placeholder="To" />
								</div>
							</div>
						</div>
					</div>
					<div class="card card-accent-success">
						<div class="card-header">
							<div class="h5 text-success"><i class="fa fa-wheelchair"></i>&nbsp;UDRS (<small>Unified Disease Registry System</small>)</div>
						</div>
						<div class="card-body">
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">User ID</label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-mb mb-1" name="udrs_userid" id="udrs_userid" autocomplete="off" placeholder="User ID" />
								</div>
							</div>
							<div class="form-row">
								<label class="col-md-3 col-form-label text-default mb-1">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control form-control-mb mb-1" name="udrs_password" id="udrs_password" autocomplete="off" placeholder="Password" />
									<span toggle="#udrs_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
		</div>
	</div>
</form>

<form name="frmISO" id="frmISO">
	<div class="modal fade" id="ModalAddISO" name="ModalAddISO" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-list"></i> ISO Certification</h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="addID" id="addID" value="">
						<div class="col-md-3 col-form-label text-default mb-1">Code :</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="" readonly id="key" name="key" placeholder="Code" maxlength="5">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description :</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="" id="isodesc" name="isodesc" placeholder="Description" maxlength="255"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Certifying body :</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="" id="certbody" name="certbody" placeholder="Certifying body" maxlength="255"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">From :</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" name="validfrom" id="validfrom" autocomplete="off" placeholder="" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">To :</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" name="validto" id="validto" autocomplete="off" placeholder="" />
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Status :</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>&nbsp;
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteISO" id="frmDeleteISO">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteISO" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="delname"></span></h5>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>&nbsp;
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	$(function() {
		var hfhudcode = $("#fhudcode").val();
		hospitalInfo(hfhudcode);
		/* HospitalAddress(hfhudcode); */
		ISOList();
	});
</script>

<script src="<?php echo base_url() ?>assets/scripts/ref_hospital/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_hospital/isovalidation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_hospital/deleteiso.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_hospital/hospital.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>