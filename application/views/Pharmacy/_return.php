<div class="h4 text-success"><i class="fa fa-user-md"></i> Doctor's Order</div>

			
					<div class="tab-pane fade show active" id="drugsAndMeds" role="tabpanel" aria-labelledby="drugsAndMeds-tab">
						</br>
						<table id="drugsAndMedsret_tbl" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover" width="100%">
							<thead>
								<tr>
									<th width="20px">Date</th>
									<th width="140px">Chargeslip</th>
									<th width="140px">RecordNo</th>
									<th width="300px">Patient Name</th>
									<th width="450px">Description</th>
									<th width="5px">Qty(Ordered)</th>
									<th width="20px">Price</th>
									<th width="20px">Amount</th>
									<th width="20px">Qty(Issued)</th>
									<th width="20px">Balance</th>
									<th width="5px">Status</th>
									<th width="5px">Priority</th>
									<th width="5px"></th>
								</tr>
							</thead>
						</table>
					</div>
	
	
		
	<form name="formReturn" id="formReturn">	
	<div class="modal fade" id="modalDrugReturn">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
		<div class="modal-content">
			<div class="modal-header">
				<div class="h4 modal-title text-success"><i class="fa fa-user"></i> Return</div>
			</div>
			<div class="modal-body">
					 <div class="row">
						  
						  <div class="col-md-6">
						  <h5 class="text text-success" ><i class="fa fa-user-circle-o "></i>&nbsp Patient Information</h5>
						  <table class="table table-sm table-condensed">
							<tr>
								  <td class="bg-success" >Hospital Record no:</td>
								  <td id="rhpercode"></td>
							  </tr>
							  <tr>
								  <td class="bg-success">Patient Name:</td>
								  <td id="rpatname"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >BirthDate:</td>
								  <td id="rdob"></td>
							  </tr>
							  <tr>
								  <td class="bg-success">Sex:</td>
								  <td id="rsex"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >Age:</td>
								  <td id="rage"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >Civil status:</td>
								  <td id="rcivilstat"></td>
							  </tr>
						  </table>
						  </div>
						  <div class="col-md-6">
						  <h5 class="text text-success" ><i class="fa fa-vcard "></i>&nbsp Case Information </h5>
						  <table class="table table-sm compact">
							<tr>
								  <td class="bg-success" >Case no:</td>
								  <td id="rcasenum"></td>
							  </tr>
							  <tr>
								  <td class="bg-success">Encounter:</td>
								  <td id="renctr"></td>
							  </tr>
							  <tr>
								  <td class="bg-success"> Room:</td>
								  <td id="rroom"></td>
							  </tr>
							  <tr>
								  <td class="bg-success">Account:</td>
								  <td id="raccnt"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >Diagnosis:</td>
								  <td id="rdiag"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >Admission Date:</td>
								  <td id="radmdate"></td>
							  </tr>
						  </table>
						  </div>
					</div>
					 <hr class="bg-success">
					<div class="form-row">
					<b class="text text-success h4">ChargeSlip: &nbsp </b>
					<input type="text" id="pharmchrgSlipret" name="pharmchrgSlipret"   readonly class="form-control col-4">
					</div>
					<br>
				
					<h6 class="text text-success"><i class="fa fa-th-list"></i> List of Drug/Medicine</h6>
				<table id="drugMedsReturn" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
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
					</thead>
				</table>
			</div>
			<input type="hidden" id="enccode" name="enccode">
			<input type="hidden" id="percode" name="percode">
			<input type="hidden" id="issuedby" name="issuedby">
			<div class="modal-footer">
				<button class="btn btn-success btn-md"><i class="fa fa-save"></i> Save</button>
				<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> Cancel</button>
			</div>
		</div>
		</div>
	</div>
</form>

	