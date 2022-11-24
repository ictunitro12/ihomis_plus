<style>

table#AdmissionTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>

<div class="w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-6 col-md-6">
				<span class="h4  text-success"><i class="<?php echo $icon ?>"></i> <?php echo $header; ?> <small><?php echo $subheader; ?></small></span>
			</div>
			<div class="col-6">
				<div class="btn-group float-right" role="group" aria-label="">
					<a href="<?php echo site_url('Patient/PatientRegister'); ?>" name="btnRegister" data-toggle="tooltip" title="Register Patient" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i> Register Patient</a>
					<a href="<?php echo site_url('Admission/Add'); ?>" name="btnfromLog" data-toggle="tooltip" data-placement="top" title="Admit New Patient" class="btn btn-outline-success btn-md  btn-ladda Admit" data-style="zoom-in"><i class="fa fa-bed"></i>&nbsp Admit
					</a>
					<a href="<?php echo site_url('Admission/forAdmission'); ?>" data-toggle="tooltip" data-placement="top" title="For Admission" class="btn btn-outline-success btn-md  btn-ladda Admit" data-style="zoom-in"><i class="fa fa-h-square"></i> For admission
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table id="AdmissionTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th class="never"></th>
					<th class="all">Health record no</th>
					<th class="all">Patient name</th>
					<th class="all">Sex</th>
					<th>Date Of Birth</th>
					<th>Admission Diagnosis</th>
					<th>Accommodation</th>
					<th>Type Of Service</th>
					<th>Room Assignment</th>
					<th>Length Of Stay</th>
					<th>Date</th>
					<th>Time</th>
					<th class="all"></th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<div class="modal fade" id="ModalPatientInformation" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
				<div class="box-body box-profile">
					<input type="hidden" id="enccodeCSS">
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
						<div class="h5 profile-username text-center text-success" id="patnamess" hidden></div>
						<div class="h6 text-center text-success" id="hpercodess" hidden></div>
						<table class="table table-sm table-condensed table-bordered">
							<tr>
								<td><label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Name of Patient/ Representative :</label><br>
									<h6><input type="checkbox" name="patrepsame" id="patrepsame" />&nbsp; <small>Check if Representative Only</small></h6>
									<input type="text" class="form-control form-control-md mb-1" name="patrep" id="patrep" placeholder="Representative" autocomplete="off" disabled="true" style="text-transform:uppercase" />
								</td>
							</tr>
							<tr>
								<td>
									<label class="text text-success col-form-label"><i class="fa fa-user"></i>&nbsp; Representative of Health Facility :</label>
									<select name="selEmployees" id="selEmployees" class="form-control form-control-md"></select>
								</td>
							</tr>
							<tr>
								<td><label class="text text-success col-form-label"><i class="fa fa-mobile"></i>&nbsp; Contact No. :</label>
									<input type="number" class="form-control form-control-md mb-1" name="patnumber" id="patnumber" maxlength="12" autocomplete="off" placeholder="0000 0000 0000" />
								</td>
							</tr>
						</table>
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

<?php view_ManageRoom(); ?>
<?php $this->load->view('admission/_discharge.php'); ?>
<script src="<?php echo base_url() ?>assets/scripts/admission/index.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/admission/admission_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referral.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referralto.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_ward/ref_ward.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patientrecord/_roomManage.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script type="text/javascript">
	$(function() {
		var table = "AdmissionTable";
		InpatientLog();
	});
</script>