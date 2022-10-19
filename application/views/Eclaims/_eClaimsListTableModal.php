<div class="modal" id="eclaimList" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<form name="addClaimForm" id="addClaimForm" method="post">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h2 class="modal-title text-success"><i class="fa fa-medkit"></i> EClaim List</h2>
				</div>
				<div class="modal-body">
					<div class="row">
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
					</div>
					<div class="row">
						<div class="col-12">
							<table id="claimListTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
								<thead class="thead-dark">
									<tr>
										<th></th>
										<th>CLAIM NUMBER</th>
										<th>CEWS TRACKING NUMBER</th>
										<th>PATIENT NAME</th>
										<th>HOSPITAL RECORD NUMBER</th>
										<th>PATIENT ENCOUNTER</th>
										<th>ADMISSION DATE</th>
										<th>DISCHARGED DATE</th>
										<th>PIN</th>
										<th>MEMBER NAME</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="button" class="btn btn-danger btn-lg btn-ladda mr-2 cancel-eclaim" data-style="zoom-in"> Cancel</button>
					<button type="submit" class="btn btn-success btn-lg btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Add Selected Claims</button>
				</div>
			</div>
		</form>
	</div>
</div>