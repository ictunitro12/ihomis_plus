<div class="card card-accent-success">
			 <div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<h5 class="text text-success" ><i class="fa fa-user-circle-o "></i>&nbsp Patient Information</h5>
						<table class="table table-sm table-condensed">
							<tr>
								<td class="bg-success small" >Hospital Record no:</td>
								<td class="small" id="hpercode"></td>
							</tr>
							<tr>
								<td class="bg-success small">Patient Name:</td>
								<td class="small" id="patname"></td>
							</tr>
							<tr>
								<td class="bg-success small" >BirthDate:</td>
								<td class="small" id="dob"></td>
							</tr>
							<tr>
								<td class="bg-success small">Sex:</td>
								<td class="small" id="sex"></td>
							</tr>
							<tr>
								<td class="bg-success small" >Age:</td>
								<td class="small" id="age"></td>
							</tr>
							<tr>
								<td class="bg-success small" >Civil status:</td>
								<td class="small" id="civilstat"></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
					<h5 class="text text-success" ><i class="fa fa-vcard "></i>&nbsp Case Information </h5>
						<table class="table table-sm compact">
							<tr>
								<td class="bg-success small" >Case no:</td>
								<td class="small" id="casenum"></td>
							</tr>
							<tr>
								<td class="bg-success small">Encounter:</td>
								<td class="small" id="enctr"></td>
							</tr>
							<tr>
								<td class="bg-success small"> Room:</td>
								<td class="small" id="room"></td>
							</tr>
							<tr>
								<td class="bg-success small">Account:</td>
								<td class="small" id="accnt"></td>
							</tr>
							<tr>
								<td class="bg-success small">Diagnosis:</td>
								<td class="small" id="diag"></td>
							</tr>
							<tr>
								<td class="bg-success small">Admission Date:</td>
								<td class="small" id="admdate"></td>
							</tr>
						</table>
					</div>
				</div>
					
					<h5 class="text text-success"><i class="fa fa-th-list"></i> List of Drug/Medicine</h5>
				<table id="drugMedsIssue" style="cursor:pointer" class="table table-sm  table-bordered table-condensed table-hover compact" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Ordered</th>
							<th>Issued</th>
							<th>Lot No</th>
							<th>Description</th>
							<th>Status</th>
							<th>Order</th>
							<th>Issue</th>
							<th>Unit Price</th>
							<th>Amount</th>
							<th>docointkey</th>
							<th>enccode</th>
							<th>hpercode</th>
							<th>dmdcomb</th>
							<th>dmdctr</th>
							<th>chrgcod</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th colspan="9">Total Amount</th>
							<th class="h4 text-success">0.00</th>
						</tr>
					</tfoot>
				</table>
</div>
</div>