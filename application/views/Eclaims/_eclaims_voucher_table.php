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
					<label>VOUCHER DATE</label>
					<div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
								<i class="fa fa-calendar"></i></span></span>
						<input class="form-control daterange" name="voucher_date" id="voucher_date" type="text">
					</div>
				</fieldset>

				<fieldset class="form-group">
					<label>VOUCHER NUMBER</label>
					<div class="input-group">
						<input class="form-control" type="text" name="voucher_number" id="voucher_number" placeholder="Enter Voucher Number">
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
					</div>
					<div class="col-md-5 col-form-label">
						<div class="form-check checkbox">
							<input class="form-check-input" id="vouchering" name="status" type="checkbox" value="WITH DETAILS">
							<label class="form-check-label" for="vouchering">WITH DETAILS</label>
						</div>
						<div class="form-check checkbox">
							<input class="form-check-input" id="with_voucher" name="status" type="checkbox" value="WITHOUT DETAILS">
							<label class="form-check-label" for="with_voucher">WITHOUT DETAILS</label>
						</div>
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
						<th>VOUCHER NUMBER</th>
						<th>VOUCHER DATE</th>
						<th>STATUS</th>
						<th></th>
					</tr>
				</thead>
			</table>
		</form>
	</div>
</div>