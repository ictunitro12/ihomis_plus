<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-12">
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
					<label>UPLOAD DATE</label>
					<div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
								<i class="fa fa-calendar"></i></span></span>
						<input class="form-control daterange" name="upload_date" id="upload_date" type="text">
					</div>
				</fieldset>

				<!--fieldset class="form-group">
					<label>TRANSMITTAL NUMBER</label>
					<div class="input-group">
						<input class="form-control" type="text" name="transmittal_number" id="transmittal_number" placeholder="Enter transmittal number">
					</div>
				</fieldset -->
			</div>
			<div class="col-md-6">
			<!--fieldset class="form-group">
					<label>RECEIPT TICKET NUMBER</label>
					<div class="input-group">
						<input class="form-control" type="text" name="receipt_ticket_no" id="receipt_ticket_no" placeholder="Enter receipt ticket number">
					</div>
				</fieldset-->

				<!--fieldset class="form-group">
					<label>TRANSMISSION CONTROL NUMBER</label>
					<div class="input-group">
						<input class="form-control" type="text" name="transmission_control_no" id="transmission_control_no" placeholder="Enter transmission control number">
					</div>
				</fieldset -->

				<button class="btn btn-sm btn-danger reset" type="reset"> Reset Filter</button>
			</div>
		</div>

		<table id="claimReceiptTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead class="thead-dark">
				<tr>
					<th></th>
					<th>TRANSMITTAL NUMBER</th>
					<th>HOSPITAL ACCREDITATION</th>
					<th>HOSPITAL CODE</th>
					<th>TOTAL CLAIMS</th>
					<th>UPLOAD DATE</th>
					<th>RECEIPT TICKET NUMBER</th>
					<th>TRANSMISSION CONTROL NUMBER</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
</div>