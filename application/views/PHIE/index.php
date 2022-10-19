<style>

	table#Phietable.dataTable tbody tr:hover {
  		background-color: #80DB88;
	}
	
	#mySubmitBar {
		width: 0%;
		height: 20px;
		text-align: center;
		line-height: 30px;
		color: white;
	}
	#mySubmitBars {
		width: 0%;
		height: 20px;
		text-align: center;
		line-height: 30px;
		color: white;
	}

	.blink {
		animation: blinker 0.8s linear infinite;
	}

	@keyframes blinker {
		100% {
			opacity: 0;
		}
	}

	.blink-one {
		animation: blinker-one 0.9s linear infinite;
	}

	@keyframes blinker-one {
		50% {
			opacity: 0;
		}
	}

	.blink-two {
		animation: blinker-two 1s linear infinite;
	}

	@keyframes blinker-two {
		0% {
			opacity: 0;
		}
	}
</style>

<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fas fa-database"></i>
					&nbsp;<?php echo $header; ?><small>&nbsp;&nbsp;<?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type="button" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" id="uploaddata" title="Upload Data"><i class="fas fa-upload"></i></button>&nbsp;
					<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Pull Data"><i class="fas fa-download"></i></i></button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="input-group">
					<label class="col-form-label text-default font-weight-bold"><input type="checkbox" autocomplete="off" id="admcheck">&nbsp; ADMISSION DATE : </label>&nbsp;
					<div class="input-group-prepend">
						<input type="text" class="form-control daterange mb-1" name="admission_date" id="admission_date" disabled>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="input-group">
					<label class="col-form-label text-default font-weight-bold"><input type="checkbox" autocomplete="off" id="discheck">&nbsp; DISCHARGE DATE : </label>&nbsp;
					<div class="input-group-prepend">
						<input type="text" class="form-control daterange mb-1" name="discharge_date" id="discharge_date" disabled>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<label class="col-form-label text-default font-weight-bold"><input type="checkbox" autocomplete="off" name="status" value="ALL">&nbsp; ALL</label>&nbsp;&nbsp;&nbsp;
				<label class="col-form-label text-default font-weight-bold"><input type="checkbox" autocomplete="off" name="status" value="ADMISSION">&nbsp; ADMITTED</label>&nbsp;&nbsp;&nbsp;
				<label class="col-form-label text-default font-weight-bold"><input type="checkbox" autocomplete="off" name="status" value="ER">&nbsp; ER</label>&nbsp;&nbsp;&nbsp;
				<label class="col-form-label text-default font-weight-bold"><input type="checkbox" autocomplete="off" name="status" value="OPD">&nbsp; OPD</label>&nbsp;&nbsp;&nbsp;
				<label class="col-form-label text-default font-weight-bold"><input type="checkbox" autocomplete="off" name="status" value="UPLOAD">&nbsp; UPLOADED</label>
				<button class="btn btn-danger btn-md btn-ladda pull-right reset" data-style="zoom-in" data-toggle="tooltip" data-placement="left" title="Reset"><i class="fas fa-rotate-left"></i> Reset</button>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<form name="phie_form" id="phie_form" method="post">
			<table id="Phietable" class="table table-sm table-striped table-borderless table-condensed table-hover">
				<thead class="thead-dark">
					<tr>
						<th>INCLUDE</th>
						<th>LOG DATE</th>
						<th>LOG TIME</th>
						<th>DISCHARGE DATE</th>
						<th>DISCHARGE TIME</th>
						<th>HOSPITAL RECORD NUMBER</th>
						<th>PATIENT'S NAME</th>
						<th>TYPE OF ENCOUNTER</th>
						<th>UPLOAD DATE AND TIME</th>
					</tr>
				</thead>
			</table>
		</form>
	</div>
	<div class="card-footer">
	</div>
</div>

<!-- PatientData modal -->
<form id="ProgressBar2">
	<div class="modal fade" id="ModalProgressBar2" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div id="mySubmitProgress">
						<div id="mySubmitBar" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">0% success</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Uploading 
										<i class="fa fa-sm fa-cloud-upload blink"></i> 
										<i class="fa fa-md fa-cloud-upload blink-one"></i> 
										<i class="fa fa-lg fa-cloud-upload blink-two"></i>
									</h6>
								</b></label> &nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<!-- PatientData modal -->
<form id="ProgressBarEncounter">
	<div class="modal fade" id="ModalProgressEncounter" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div>
						<div id="mySubmitBars" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">0% success</div>
						<div align="center">
							<label class="text-success"><b>
									<br>
									<h6>Encounter Data uploading 
										<i class="fa fa-sm fa-cloud-upload blink"></i> 
										<i class="fa fa-md fa-cloud-upload blink-one"></i> 
										<i class="fa fa-lg fa-cloud-upload blink-two"></i>
									</h6>
								</b></label> &nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->

<form  id="formCheckExist" >
	<div class="modal" id="Checkexistmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content">
					<div class="modal-header">
						<div class="col-md-12">
							<h3 class="modal-title text-success"><i class="fa fa-triangle-exclamation"></i> Patient data has already been uploaded!
							</h3>
						</div>
					</div>
					<div class="modal-body">						
						<div class="row">
							<div class="col-md-12">
								<label class="text-success" style="font-size: 15px">Do you want to reupload Patient Data?</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" id="btnYes" class="btn btn-success btn-ladda mr-auto" data-style="zoom-in"><i class="fa fa-check"></i> &nbsp Yes</button>
						<button type="button" id="btnNo" class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> &nbsp No</button>
					</div>
			</div>
		</div>
	</div>
</form>

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/scripts/phie/phie.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js" defer></script>
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>