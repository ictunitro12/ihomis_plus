<div class="w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
			<span class="h4  text-success">Malaria</span>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="<?php echo site_url('MalariaLab');?>" data-toggle="tooltip" title="Laboratory Registry" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-flask"></i>
					</a>
					<a href="<?php echo site_url('Malaria/PatientRegister'); ?>" data-toggle="tooltip" title="Register Patient" class="btn btn-success btn-md btn-ladda Register" data-style="zoom-in"><i class="fa fa-user-plus"> </i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="AdmissionTable" class="table table-sm table-striped table-bordered table-condensed table-hover">
			<thead class="thead-dark">
				<tr>
					<th></th>
					<th width="10%">Health record no #</th>
					<th width="30%">Patient name (<small>Firstname,Middlename,Lastname Suffix</small>)</th>
					<th width="5%">Sex(<small>Male,Female</small>)</th>
					<th width="10%">Accomodation(<small>Pay/Service</small>)</th>
					<th width="10%">Los(<small>Length of Stay</small>)</th>
					<th width="10%">Date(<small>md/dd/yyyy</small>)</th>
					<th width="10%">Time(<small>hh:mm: am/pm</small>)</th>
					<th width="10%"></th>
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
					<img id="PatientPicInfo" class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px" src="" alt="User profile picture">
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
					<button id="btnCSS" class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i></button>
					&nbsp
					<button class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-file"></i></button>

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
					<h3 class="modal-title text-success"><i class="fa fa-heartbeat"></i> ClinicalCoverSheet</h3>
					<input type="hidden" id="enccodeCSS">
					<iframe id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div>
</form>
<?php $this->load->view('Admission/_discharge.php'); ?>
<?php $this->load->view('PatientRecords/_roomChange.php'); ?>
<?php $this->load->view('PatientRecords/_transferRoom.php'); ?>
<?php $this->load->view('Referral/_referralto.php'); ?>
<?php $this->load->view('Referral/_referralfrom.php'); ?>
<script src="<?php echo base_url() ?>assets/scripts/admission/index.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/admission/admission_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referralto.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/referral/referralfrom.js"></script>
<script type="text/javascript">
	$(function() {
		var table = "AdmissionTable";
		InpatientLog();
	});
</script>