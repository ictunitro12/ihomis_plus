<style>

	table#patientList.dataTable tbody tr:hover {
		background-color: #80DB88;
	}

</style>
<div id = "tablePatient" >
	<div class="card  card-sm card-accent-success">
		<div class="card-header">
			<div class="card-title h4 text text-success"> 
				<i class="fa fa-user"></i>
				&nbsp  Patient List/s
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="patientList" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th>Date Entered</th>
							<th>Health Record </th>
							<th>Patient Name</th>
							<th>Birthdate</th>
							<th>Sex</th>
							<th>Type Of Service</th>
							<th>Admission Diagnosis</th>
							<th>Room Assignment</th>
							<th width="20px"></th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url()?>assets/scripts/Admission/admission_validation.js"></script>