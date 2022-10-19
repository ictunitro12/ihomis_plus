			<div class="h4 text-success"><i class="fa fa-user-md"></i> Doctor's Order</div>
			<ul class="nav nav-tabs nav-justified" id="tabDrugPatient" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="patdrugsAndMeds-tab" data-toggle="tab" href="#patdrugsAndMeds" role="tab" aria-controls="drugsAndMeds" aria-expanded="true"><i class="fa fa-bed fa-2x"></i>&nbsp DRUGS & MEDICINES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-primary" id="patsupplies-tab" data-toggle="tab" href="#patsupplies" role="tab" aria-controls="supplies"><i class="fa fa-stethoscope  fa-2x"></i>&nbsp SUPPLIES</a>
					</li>
				</ul>
				<div class="tab-content" id="tabOrder">
					<div class="tab-pane fade show active" id="drugsAndMeds" role="tabpanel" aria-labelledby="drugsAndMeds-tab">
						</br>
						<table id="drugsAndMeds_pat" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th width="50px">Date</th>
									<th width="60px">Slip no</th>
									<th width="300px">Description</th>
									<th width="5px">Qty(Ordered)</th>
									<th width="20px">Price</th>
									<th width="20px">Amount</th>
									<th width="20px">Unit</th>
									<th width="20px">Qty(Issued)</th>
									<th width="20px">Balance</th>
									<th width="5px">Status</th>
									<th width="5px"></th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="tab-pane fade" id="supplies" role="tabpanel" aria-labelledby="supplies-tab">
					</div>
				</div>
			
		<div class="modal fade" id="modalDrugIssuePat">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text text-success"><i class="fa fa-user-circle"></i> Issue Drug</h3>
				<table id="drugMedsIssuePat" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover" width="100%">
					<thead>
						<tr>
							<th style="text-align:center; vertical-align:middle;" width="20px" rowspan="2"></th>
							<th style="text-align:center; vertical-align:middle;" width="20px" rowspan="2"></th>
							<th style="text-align:center; vertical-align:middle;" width="100px" rowspan="2">Lot No</th>
							<th style="text-align:center; vertical-align:middle;" width="500px" rowspan="2">Description</th>
							<th style="text-align:center; vertical-align:middle;" colspan="4">Quantity</th>
							<th style="text-align:center; vertical-align:middle;" width="20px" rowspan="2">Unit Price</th>
							<th style="text-align:center; vertical-align:middle;" width="20px" rowspan="2">Price</th>
							<th style="text-align:center; vertical-align:middle;" width="20px" rowspan="2">Amount</th>
						</tr>
						<tr>
							<th width="20px">Order</th>
							<th width="20px">Issued</th>
							<th width="20px">Balance</th>
							<th width="20px">Issue</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-md"><i class="fa fa-save"></i> Save</button>
				<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Cancel</button>
			</div>
		</div>
		</div>
	</div>