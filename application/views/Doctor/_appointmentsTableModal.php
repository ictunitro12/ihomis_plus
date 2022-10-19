<style>

table#appointmentTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="appointmentTableModal" role="dialog">
	<div class="modal-dialog modal-xl" role="document">
		<form name="appointmentForm" id="appointmentForm" method="post">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-calendar"></i> Appointment List</h2>
				</div>
				<div class="modal-body">
<!-- 					<div class="row">
						<div class="col-md-6">

							<fieldset class="form-group">
								<label>ADMISSION DATE</label>
								<div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
											<i class="fa fa-calendar"></i></span></span>
									<input class="form-control daterange" name="admission_date" id="admission_date" type="text">
								</div>
							</fieldset>

							<fieldset class="form-group">
								<label>DISCHARGED DATE</label>
								<div class="input-group">
									<span class="input-group-prepend">
										<span class="input-group-text">
											<i class="fa fa-calendar"></i>
										</span>
									</span>
									<input class="form-control daterange" name="discharge_date" id="discharge_date" type="text">
								</div>
							</fieldset>

						</div>
						<div class="col-md-6">
							<fieldset class="form-group">
								<label>CLAIM NUMBER</label>
								<div class="input-group">
									<input class="form-control" type="text" name="claim_number" id="claim_number" placeholder="Enter Claim Number">
								</div>
							</fieldset>

							<fieldset class="form-group">
								<label>PATIENT NAME</label>
								<div class="input-group">
									<input class="form-control" type="text" name="patient_name" id="patient_name" placeholder="Enter Patient Name">
								</div>
							</fieldset>

							<button class="btn btn-sm btn-danger reset" type="reset"> Reset Filter</button>
						</div>
					</div> -->
					<div class="row">
						<div class="col-12">
							<table id="appointmentTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
								<thead class="thead-dark">
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
				<div class="modal-footer bg-secondary">
					<button type="button" class="btn btn-danger btn-lg btn-ladda mr-2 close-appointment-modal" data-style="zoom-in"> Close</button>
				</div>
			</div>
		</form>
	</div>
</div>