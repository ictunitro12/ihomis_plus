<div class="card card-accent-success patrecor">
	<div class="card-header">
		<div class="clearfix">
			<div class="card-title h4 text text-success float-left">
				<i class="fa fa-user"></i>
				&nbsp Patient Record
			</div>
			<div class="btn-group pull-right" role="group" aria-label="">
				<button class="btn btn-outline-success btn-sm" data-style="zoom-in" id="onoff" data-toggle="tooltip" onclick="getEncdata('<?php echo $hpercode; ?>');" title="Get encounter data"><i class="fa fa-cloud-download"></i> &nbsp;Get PHIE data</button>&nbsp;
				<button class="btn btn-outline-success btn-sm" id="btnEPR" onclick="showEPR('<?php echo $enccode; ?>','<?php echo $hpercode; ?>');"><i class="fa fa-file-pdf-o"></i> Generate EPR</button>
			</div>
		</div>
	</div>
	<div class="card-body">
		<?php echo ViewPatientInformation2(); ?>
		<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active  text text-success" id="vital-tab" data-toggle="tab" href="#vital" role="tab" aria-controls="vital" aria-expanded="true"> <i class="fa fa-heartbeat"></i>&nbsp Vital Signs</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="hw-tab" data-toggle="tab" href="#hw" role="tab" aria-controls="hw" aria-expanded="true"> <i class="fa fa-assistive-listening-systems"></i>&nbsp B.M.I</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="histo-tab" data-toggle="tab" href="#histo" role="tab" aria-controls="histo"><i class="fa fa-history"></i>&nbsp History</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="symptoms-tab" data-toggle="tab" href="#symptoms" role="tab" style="white-space: nowrap;" aria-controls="symptoms"><i class="fa fa-exclamation-triangle"></i>&nbsp Pertinent Signs and Symptoms</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="phyexam-tab" data-toggle="tab" href="#phyexam" role="tab" aria-controls="phyexam"><i class="fa fa-universal-access "></i>&nbsp Physical Exam</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="system-tab" data-toggle="tab" href="#system" role="tab" aria-controls="system"><i class="fa fa-file-o"></i>&nbsp System</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="course-tab" data-toggle="tab" href="#course" role="tab" style="white-space: nowrap;" aria-controls="course"><i class="fa fa-bed"></i>&nbsp Course in the Ward</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="diag-tab" data-toggle="tab" href="#diagnose" role="tab" aria-controls="diagnose"><i class="fa fa-wheelchair-alt"></i>&nbsp Diagnosis</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="doctor-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="doctor"><i class="fa fa-user-md"></i>&nbsp Doctor</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="progressnotes-tab" data-toggle="tab" href="#progressnotes" role="tab" aria-controls="progressnotes"><i class="fa fa-list"></i>&nbsp Progress Notes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="specialinstructions-tab" data-toggle="tab" href="#specialinstructions" role="tab" aria-controls="specialinstructions"><i class="fa fa-commenting-o"></i>&nbsp Special Instructions</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success" id="homemeds-tab" data-toggle="tab" href="#homemeds" role="tab" aria-controls="homemeds"><i class="fa fa-medkit"></i>&nbsp Home Medications</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane  show active" id="vital" role="tabpanel" aria-labelledby="-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" onclick="addVitals('<?php echo $enccode; ?>','<?php echo $hpercode; ?>');"><i class="fa fa-plus"></i> Add Vital Signs
				</button>
				<hr>
				<div class="table-responsive">
					<table id="vitalSigns" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th>Datelog <small>(mm/dd/yyyy)</small></th>
								<th>Blood pressure <small>(Systolic/Diastolic)</small></th>
								<th>Temperature<small>(Celcius)</small></th>
								<th>Pulse rate <small>(beats/min)</small></th>
								<th>Respiratory <small>(breaths/min)</small></th>
								<th>Oxygen saturation <small>(O2Sat)</small></th>
								<th>Status</th>
								<th width="1%"></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="tab-pane " id="hw" role="tabpanel" aria-labelledby="hw-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" onclick="addHW('<?php echo $enccode; ?>','<?php echo $hpercode; ?>');">
					<i class="fa fa-plus"></i> Add B.M.I
				</button>
				<hr>
				<div class="table-responsive">
					<table id="BMIlist" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th>Datelog <small>(mm/dd/yyyy)</small></th>
								<th>Height <small>(centimeters)</small></th>
								<th>Weight <small>(kilograms)</small></th>
								<th>B.M.I</th>
								<th>Category</th>
								<th width="1%"></th>
							</tr>
						</thead>

					</table>
				</div>

			</div>
			<div class="tab-pane" id="histo" role="tabpanel" aria-labelledby="histo-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" id="btnAddHw" onclick="saveHistory();"><i class="fa fa-floppy-o"></i> Save History</button>
				<hr>
				<div class="row">
					<div class="col">
						<?php $this->load->view('PatientRecords/historyForm'); ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="symptoms" role="tabpanel" aria-labelledby="symptoms-tab">
				<br>
				<div class="row">
					<div class="col">
						<button class="btn btn-outline-success btn-sm Add" onclick="updateSymptoms()"><i class="fa fa-floppy-o"></i> Save Pertinent Signs and Symptoms</button>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<?php $this->load->view('PatientRecords/pertinent_signs_symptoms'); ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="phyexam" role="tabpanel" aria-labelledby="phyexam-tab">
				<br>
				<div class="row">
					<div class="col">
						<button class="btn btn-outline-success btn-sm Add" onclick="updatePhy()"><i class="fa fa-floppy-o"></i> Save Physical Exam</button>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<?php $this->load->view('PatientRecords/physicalExam'); ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="system" role="tabpanel" aria-labelledby="system-tab">
				<br>
				<div class="row">
					<div class="col">
						<?php $this->load->view('PatientRecords/systemReview'); ?>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="course" role="tabpanel" aria-labelledby="course-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" onclick="addcrsWard('<?php echo $enccode; ?>','<?php echo $hpercode; ?>');" id="btnAddcrsWard"><i class="fa fa-plus"></i> Add Course in the Ward</button>
				<hr>
				<div class="table-responsive">
					<table id="courseTbl" class="table table-sm table-striped table-bordered table-condensed table-hover" style="width:100%">
						<thead>
							<tr>
								<th></th>
								<th>Datelog <small>(mm/dd/yyyy)</small></th>
								<th>Course ward</th>
								<th>Entry by</th>
								<th width="1%"></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="tab-pane" id="diagnose" role="tabpanel" aria-labelledby="diag-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" id="btnAddVital" onclick="addDiagnosis('<?php echo $enccode; ?>','<?php echo $hpercode; ?>');"><i class="fa fa-plus"></i> Add Diagnosis</button>
				<hr>
				<div class="table-responsive">
					<table id="diagList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th>Datelog <small>(mm/dd/yyyy)</small></th>
								<th>Type <small></small></th>
								<th>Description <small></small></th>
								<th>Code <small>(ICD 10 Code)</small></th>
								<th>Primary <small>(Yes/No)</small></th>
								<th>Doctor</th>
								<th>Remarks</th>
								<th width="1%"></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="tab-pane" id="doctor" role="tabpanel" aria-labelledby="doctor-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" data-original-title="Add Doctor" data-toggle="tooltip" id="btnAddDoctor" onclick="addDoctor('<?php echo $enccode; ?>','<?php echo $hpercode; ?>');">
					<i class="fa fa-plus"></i> Add Doctor
				</button>
				<hr>
				<div class="table-responsive">
					<table id="doctorList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th>Datelog <small>(mm/dd/yyyy)</small></th>
								<th></th>
								<th>Doctor Name</th>
								<th>Type</th>
								<th width="1%"></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>

			<div class="tab-pane" id="progressnotes" role="tabpanel" aria-labelledby="progressnotes-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" id="btnAddProgressNotes" onclick="addProgressnotes('<?php echo $enccode; ?>','<?php echo $hpercode; ?>');"><i class="fa fa-plus"></i> Add Progress Notes </button>
				<hr>

				<div class="table-responsive">
					<table id="progressnotesList" class="table table-sm table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th>Datelog <small>(mm/dd/yyyy)</small></th>
								<th></th>
								<th></th>
								<th>Progress type</th>
								<th></th>
								<th>Details</th>
								<th>Doctor</th>
								<th width="1%"></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>

			<div class="tab-pane" id="specialinstructions" role="tabpanel" aria-labelledby="specialinstructions-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" id="btnSaveInstructions"><i class="fa fa-plus"></i> Save Instructions</button>
				<hr>
				<form id="specialInstructionForm">
					<div class="row">
						<div class="col-md-12">
							<label class=" text-default">Special Instructions:</label>
							<textarea type="text" class="form-control" name="specialInstruction" id="specialInstruction" placeholder="Special Instructions"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<label class=" text-default">Next Visit Date:</label>
							<input type="datetime-local" step="1" name="nextvisitDate" id="nextvisitDate" class="form-control form-control-mb">
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane" id="homemeds" role="tabpanel" aria-labelledby="homemeds-tab">
				<br>
				<button class="btn btn-outline-success btn-sm Add" id="btnAddMedications"><i class="fa fa-plus"></i> Add Medications</button>
				<hr>

				<div class="table-responsive">
					<table id="homeMedicationList" class="table table-sm table-bordered table-condensed table-hover" width="100%">
						<thead>
							<tr>
								<th></th>
								<th>Drugs and Medicines</th>
								<th>Instructions</th>
								<th></th>
								<th></th>
								<th width="1%"></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		<div class="card-footer">
		</div>
	</div>
</div>
<?php $this->load->view('PatientRecords/EPRModal'); ?>
<?php $this->load->view('PatientRecords/courseWard.php'); ?>
<?php $this->load->view('PHIE/phieUploadmodal.php'); ?>
<?php $this->load->view('PHIE/phieGetEncountermodal.php'); ?>
<?php $this->load->view('PHIE/phieEncounterDataDetails.php'); ?>