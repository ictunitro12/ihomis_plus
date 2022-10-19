<form name="frmPHIEgetDemo" id="frmPHIEgetDemo">
	<div class="modal fade" id="ModalgetDemographic" name="ModalgetDemographic" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-info-circle"></i> <?php echo $header; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<h6 class="text-success">Personal information</h6>
							<hr class="bg-success">
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">First Name:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiefirstname" id="phiefirstname"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Civil status:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiecivilstat" id="phiecivilstat"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Middle Name:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiemiddlename" id="phiemiddlename"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Sex:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiesex" id="phiesex"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Last Name:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phielastname" id="phielastname"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Birthdate:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiebirthdate" id="phiebirthdate"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Suffix:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiesuffix" id="phiesuffix"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Place of birth:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phieplaceofbirth" id="phieplaceofbirth"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Nationality:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phienationality" id="phienationality"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Religion:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiereligion" id="phiereligion"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Blood type:</div>
						<div class="col-md-4">
							<label class="col-form-label text-defaultl" name="phiebloodtype" id="phiebloodtype"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Pantawid pamilya member:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="phiepantawidpammem" id="phiepantawidpammem"></label>
						</div>
						<div class="col-md-12">
							<hr class="bg-success">
							<h6 class="text-success">Contact information</h6>
							<hr class="bg-success">
						</div>
						<div class="col-md-1 col-form-label text-default" style="font-weight:bold;">Landline:</div>
						<div class="col-md-3">
							<label class="col-form-label text-default" name="Contact_Landline" id="Contact_Landline"></label>
						</div>
						<div class="col-md-1 col-form-label text-default" style="font-weight:bold;">Mobile:</div>
						<div class="col-md-2">
							<label class="col-form-label text-default" name="Contact_Mobile" id="Contact_Mobile"></label>
						</div>
						<div class="col-md-2 col-form-label text-default" style="font-weight:bold;">Email Address:</div>
						<div class="col-md-3">
							<label class="col-form-label text-default" name="Contact_EmailAddress" id="Contact_EmailAddress"></label>
						</div>
						<div class="col-md-12">
							<hr class="bg-success">
							<h6 class="text-success">Address</h6>
							<hr class="bg-success">
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">StreeName:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_StreeName" id="Current_Address_StreeName"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">City:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_City" id="Current_Address_City"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Region:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_Region" id="Current_Address_Region"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Province:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_Province" id="Current_Address_Province"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Barangay:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_Barangay" id="Current_Address_Barangay"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">SitioPurok:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_SitioPurok" id="Current_Address_SitioPurok"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">ZipCode:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_ZipCode" id="Current_Address_ZipCode"></label>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1" style="font-weight:bold;">Country:</div>
						<div class="col-md-4">
							<label class="col-form-label text-default" name="Current_Address_Country" id="Current_Address_Country"></label>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<label class="col-form-label text-default pull-left"><i class="fa fa-info"></i> Check the information above, click (Yes) if the information is correct and click (No) if not.</label>
					<button class="btn btn-success btn-ladda" data-style="zoom-in" id="PhieYesbtn"><i class="fa fa-check"></i>&nbsp; Yes</button>
					<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp; No</button>
				</div>
			</div>
		</div>
	</div>
</form>