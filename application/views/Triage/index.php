<div class="w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-6 col-md-6">
				<span class="h4  text-success"><i class="<?php echo $icon ?>"></i> <?php echo $header; ?> <small><?php echo $subheader; ?></small></span>
			</div>
			<div class="col-6">
				<div class="btn-group float-right" role="group" aria-label="">
					<!-- <a href="<?php echo site_url('Patient/PatientRegister'); ?>" data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md btn-ladda Register" data-style="zoom-in"><i class="fa fa-user-plus"></i>&nbsp Register
					</a> -->
					<button id="searchPatient" data-toggle="tooltip" data-placement="top" title="Search Patient" class="btn btn-outline-success btn-md  btn-ladda Admit" data-style="zoom-in"><i class="fa fa-search"></i>&nbsp Search
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="patientTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th></th>
					<th width="10%">Health record no #</th>
					<th width="30%">Patient name</th>
					<th width="5%">Sex</th>
					<th width="5%">Birthdate</th>
					<th width="15%">Triage Datetime</th>
					<th width="5%">Temp ID</th>
					<th width="5%"></th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<?php echo ViewSearchPatient(); ?>

<div class="modal fade" id="ModalPatientInformation" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
				<div class="box-body box-profile">
					<img id="patientPhoto" class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px" src="" alt="User profile picture">
					<div class="h5 profile-username text-center text-success" id="patname"></div>
					<div class="h6 text-center text-success" id="hpercode"></div>
					<ul class="list-group">
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-address-book"></i>&nbsp CASE NUMBER:</b>
							<a class="pull-right text text-success" id="casenum">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp ACCOUNT:</b>
							<a class="pull-right text text-success" id="accountno">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp AGE:</b>
							<a class="pull-right text text-success" id="patage">N/A</a>
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-bed"></i>&nbsp ROOM:</b>
							<a class="pull-right text text-success" id="patwrb">N/A</a>
							<input type="hidden" name="patAge" id="patAge">
						</li>
						<li class="list-group-item">
							<b class="text text-success"><i class="fa fa-stethoscope"></i>&nbsp DIAGNOSIS:</b>
							<a class="pull-right text text-success" id="patdiag">N/A</a>
						</li>
					</ul>
					<br>
					<div class="btn-group btn-block ">
						<button id="btnCSS" class="btn btn-outline-success  btn-ladda" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i> CCS</button>
						<button id="btnConsent" class="btn btn-outline-success  btn-ladda" data-style="zoom-in"><i class="fa fa-file"></i> Consent</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<form id="frmCSS">
	<div class="modal fade" id="ModalCSS" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Clinical Cover Sheet</h3>
					<input type="hidden" id="enccodeCSS">
					<iframe id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="formAddCert">
	<div class="modal" id="Consentinput" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close text-danger" id="closereload" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title text-success"><i class="fa fa-pencil-square-o"></i>&nbsp; Consent Signatories</h3>
					<br>
					<div class="box-body box-profile">
						<!-- <img id="patientPhoto" class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px" src="" alt="User profile picture" hidden> -->
						<div class="h5 profile-username text-center text-success" id="patnamess" hidden></div>
						<div class="h6 text-center text-success" id="hpercodess" hidden></div>
						<ul class="list-group">
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Name of Patient/ Representative :</label><br>
								<h6><input type="checkbox" name="patrepsame" id="patrepsame" />&nbsp; <small>Check if Representative Only</small></h6>
								<a><input type="text" class="form-control form-control-md mb-1" name="patrep" id="patrep" placeholder="Representative" autocomplete="off" disabled style="text-transform:uppercase" /></a>
							</li>
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Representative of Health Facility :</label>
								<p><select name="selEmployees" id="selEmployees" class="form-control form-control-md"></select></p>
							</li>
							<li class="list-group-item">
								<label class="text text-success col-form-label"><i class="fa fa-mobile"></i>&nbsp; Contact No. :</label>
								<a><input type="number" class="form-control form-control-md mb-1" name="patnumber" id="patnumber" maxlength="12" autocomplete="off" placeholder="0000 0000 0000" /></a>
							</li>
						</ul>
						<br>
						<div class="btn-group float-right ">
							<button type="submit" id="pdfinsert" class="btn btn-outline-success btn-ladda" data-style="zoom-in">Next &nbsp;<i class="fa fa-arrow-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<form id="frmConsent">
	<div class="modal fade" id="ModalConsent" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h3 class="modal-title text-success"><i class="fa fa-file-pdf-o"></i> Consent Form</h3>
					<input type="hidden" id="enccodeConsent">
					<iframe id="Consent_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form>

<?php $this->load->view('Triage/_vital_signs_modal.php'); ?>

<input name="module" id="module" type="hidden" value="<?php echo $module; ?>">

<!-- sweetalert2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patientrecord/patientrecords.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/triage/index.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patientrecord/bmi.js"></script>