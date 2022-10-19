<style>

table#admtbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#opdtbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#ertbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#myAppointmentTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<?php $this->load->view('Doctor/viewDoctorProfile.php');?>
				<div class="row">
					<div class="col-md-6 col-md-auto	">
						<div class="h4 text text-success">
							<i class="fa fa-user-md"></i>
							&nbsp<?php echo $header; ?>
							&nbsp <small><?php echo $subheader; ?></small>
						</div>
					</div>
					<div class="col-md-6 col-md-auto">
						<div class="pull-right" role="group" aria-label="">
							<?php //if(env('TELEMEDICINE_APP_URL') && env('TELEMEDICINE_APP_TOKEN')) { ?>
							<!-- <button type="button" id="getAppointments" class="btn btn-success btn-ladda mr-2" data-style="zoom-in">
								<i class="fa fa-calendar"></i> Get Telemedicine Appointments
							</button> -->
							<?php //} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="adm-tab" data-toggle="tab" href="#adm" role="tab" aria-controls="adm" aria-expanded="true"><i class="fa fa-bed fa-2x"></i>&nbsp INPATIENT/S</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success " id="opd-tab" data-toggle="tab" href="#opd" role="tab" aria-controls="opd"><i class="fa fa-stethoscope  fa-2x"></i>&nbsp OUTPATIENT/S</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="er-tab" data-toggle="tab" href="#er" role="tab" aria-controls="er"><i class="fa fa-ambulance  fa-2x"></i> EMERGENCY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success" id="appointment-tab" data-toggle="tab" href="#appointment" role="tab" aria-controls="appointment"><i class="fa fa-calendar  fa-2x"></i> MY APPOINTMENTS</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="adm" role="tabpanel" aria-labelledby="adm-tab">
						<br>
						<table id="admtbl" class="table table-sm table-striped table-bordered table-condensed table-hover " width="100%">
							<thead>
								<tr>
									<th></th>
									<th width="140px">Health Record Number</th>
									<th>Patient name(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
									<th>Sex(<small>Male,Female</small>)</th>
									<th>Type</th>
									<th>Date Entered</th>
									<th width="50px"></th>
								</tr>
							</thead>

						</table>
					</div>
					<div class="tab-pane fade" id="opd" role="tabpanel" aria-labelledby="opd-tab">
						<br>
						<table id="opdtbl" class="table table-sm table-striped  table-bordered  table-condensed table-hover " width="100%">
							<thead>
								<tr>
									<th></th>
									<th width="140px">Health Record no</th>
									<th>Patient name(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
									<th>Sex(<small>Male,Female</small>)</th>
									<th>Type</th>
									<th>Date Entered</th>
									<th width="50px"></th>
								</tr>
							</thead>

						</table>
					</div>
					<div class="tab-pane fade" id="er" role="tabpanel" aria-labelledby="er-tab">
						<br>
						<table id="ertbl" class="table table-sm table-striped  table-bordered  table-condensed table-hover " width="100%">
							<thead>
								<tr>
									<th></th>
									<th width="140px">Health Record no</th>
									<th>Patient name(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
									<th>Sex(<small>Male,Female</small>)</th>
									<th>Type</th>
									<th>Date Entered</th>
									<th width="50px"></th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="tab-pane fade" id="appointment" role="tabpanel" aria-labelledby="appointment-tab">
						<br>
						<table id="myAppointmentTable" class="table table-sm table-striped  table-bordered  table-condensed table-hover " width="100%">
							<thead>
								<tr>
									<th>Appointment Date</th>
									<th>Complaint</th>
									<th>Slot</th>
									<th>Patient name(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
									<th>Sex(<small>Male,Female</small>)</th>
									<th>Status</th>
									<th width="50px"></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
			<div class="card-footer"></div>
		</div>

	</div>
</div>
<?php $this->load->view('PatientRecords/EPRModal.php'); ?>
<?php $this->load->view('Doctorsorder/_maygohome.php'); ?>

<!-- start select accreditation modal -->
<?php $this->load->view('Doctor/_appointmentsTableModal.php'); ?>
<!-- end select accreditation modal -->

<?php $this->load->view('Appointment/_doctorSelectionModal.php'); ?>

<!-- sweetalert2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url() ?>assets/scripts/order/maygohome.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/appointment/main.js"></script>
<script>
	var licno = '<?php echo $licno; ?>';
</script>