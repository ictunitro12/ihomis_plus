<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp; <?php echo $header; ?>  - <span class="acreditationDescription"></span>
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
				<div class="form-group row">
					<label class="col-md-3 col-form-label">STATUS</label>
					<div class="col-md-4 col-form-label">
						<div class="form-check checkbox">
							<input class="form-check-input" id="all" name="status" type="checkbox" value="ALL">
							<label class="form-check-label" for="all">ALL</label>
						</div>
						<div class="form-check checkbox">
							<input class="form-check-input" id="in_process" name="status" type="checkbox" value="IN PROCESS">
							<label class="form-check-label" for="in_process">IN PROCESS</label>
						</div>
						<div class="form-check checkbox">
							<input class="form-check-input" id="return" name="status" type="checkbox" value="RETURN">
							<label class="form-check-label" for="return">RETURN</label>
						</div>
						<div class="form-check checkbox">
							<input class="form-check-input" id="denied" name="status" type="checkbox" value="DENIED">
							<label class="form-check-label" for="denied">DENIED</label>
						</div>
					</div>
					<div class="col-md-5 col-form-label">
						<div class="form-check checkbox">
							<input class="form-check-input" id="vouchering" name="status" type="checkbox" value="VOUCHERING">
							<label class="form-check-label" for="vouchering">VOUCHERING</label>
						</div>
						<div class="form-check checkbox">
							<input class="form-check-input" id="with_voucher" name="status" type="checkbox" value="WITH VOUCHER">
							<label class="form-check-label" for="with_voucher">WITH VOUCHER</label>
						</div>
						<div class="form-check checkbox">
							<input class="form-check-input" id="with_queue" name="status" type="checkbox" value="WITH CHEQUE">
							<label class="form-check-label" for="with_queue">WITH CHEQUE</label>
						</div>
						<div class="form-check checkbox">
							<input class="form-check-input" id="not_found" name="status" type="checkbox" value="CLAIM SERIES NOT FOUND">
							<label class="form-check-label" for="not_found">CLAIM SERIES NOT FOUND</label>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">PATIENT NAME</label>
					<div class="col-md-9">
						<input class="form-control" type="text" name="patient_name" id="patient_name" placeholder="Enter Patient Name">
					</div>
				</div>

				<button class="btn btn-sm btn-danger reset" type="reset"> Reset Filter</button>
			</div>
		</div>
		<form name="checkStatus" id="checkStatus" method="post">
			<table id="claimTransmittalTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
				<thead class="thead-dark">
					<tr>
						<th></th>
						<th>CLAIM SERIES LHIO</th>
						<th>HOSPITAL CLAIM NUMBER</th>
						<th>NAME OF PATIENT</th>
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