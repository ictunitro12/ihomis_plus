<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp; <?php echo $header; ?> - <span class="acreditationDescription"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<div class="row">
			<div class="col-md-6">
				<fieldset class="form-group">
					<label>RECEIVED DATE</label>
					<div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
								<i class="fa fa-calendar"></i></span></span>
						<input class="form-control daterange" name="received_date" id="received_date" type="text">
					</div>
				</fieldset>

				<fieldset class="form-group">
					<label>ADMISSION DATE</label>
					<div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
								<i class="fa fa-calendar"></i></span></span>
						<input class="form-control daterange" name="admission_date" id="admission_date" type="text">
					</div>
				</fieldset>
			</div>
			<div class="col-md-6">
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

				<fieldset class="form-group">
					<label>PATIENT NAME</label>
					<div class="input-group">
						<input class="form-control" type="text" name="patient_name" id="patient_name" placeholder="Enter Patient Name">
					</div>
				</fieldset>

				<button class="btn btn-sm btn-danger reset" type="reset"> Reset Filter</button>
			</div>
		</div>
		<form name="checkStatus" id="checkStatus" method="post">
			<table id="claimTransmittalTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
				<thead class="thead-dark">
					<tr>
						<th></th>
						<th></th>
						<th>CLAIM SERIES LHIO</th>
						<th>HOSPITAL CLAIM NUMBER</th>
						<th>PATIENT NAME</th>
						<th>LAST NAME</th>
						<th>FIRST NAME</th>
						<th>MIDDLE NAME</th>
						<th>SUFFIX</th>
						<th>ADMISSION DATE</th>
						<th>DISCHARGE DATE</th>
						<th>RECEIVED DATE</th>
						<th>REFILE DATE</th>
						<th>RECEIPT TICKET NUMBER</th>
						<th>STATUS</th>
						<th></th>
					</tr>
				</thead>
			</table>
		</form>
	</div>
</div>