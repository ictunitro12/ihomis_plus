<form name="formDeliver" id="formDeliver">
	<div class="modal" id="mmodalDeliver" role="form" style="overflow: auto;">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="form">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-title text-success h4"><i class="fa fa-cart-arrow-down"></i> Delivery/s</div>
					<hr class="bg-success">
								<h6 class="text-success"><i class="fa fa-th-list"></i> Delivery information</h6>
									<div class="row">
										<div class="col-md-2">
											Date:
										</div>
										<div class="col-md-4 mb-1">
											<input type="datetime-local" class="form-control form-control-md" name="delivDate" step="any" id="delivDate"/>
										</div>
										<div class="col-md-2">
											Delivery track:
										</div>		
										<div class="col-md-4 mb-1">
											<input type="text"  class="form-control form-control-md" name="refCode" id="refCode" placeholder="Delivery trackno"/>
										</div>
								
									</div>
									<div class="row">
									<div class="col-md-2">
											Delivery type:
										</div>
									<div class="col-md-4">
										<select class=" form-control form-control-sm" name="delSuppind" id="delSuppind">
											<option value="">Select</option>
											<option value="P">Procured</option>
											<option value="D">Donation</option>
											<option value="R">Central Office</option>
										</select>
									</div>
									<div class="col-md-2">
											Supplier:
										</div>
									<div class="col-md-4">
										<select class=" form-control form-control-sm" name="delSuppind" id="delSuppind">
											<option value="">Select</option>
											<option value="P">Procured</option>
											<option value="D">Donation</option>
											<option value="R">Central Office</option>
										</select>
									</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="clearfix mb-2">
												  <h6 class="text-success float-left"><i class="fa fa-th-list"></i> List of Item/s</h6>
												  <button type="button"  id="btnItemList" class="btn btn-outline-success btn-md float-right mb-1"><i class="fa fa-search"></i> Search item/s</a>
											</div>
											<div class="mb-2"></div>
												<table id="delivList" class="table table-sm table-hover table-condensed" >
													<thead>
														<tr>	
															<th>Description</th>
															<th>Serial/Lotno</th>
															<th>Quantity</th>
															<th>Account</th>	
															<th>Type</th>
															<th>Remarks</th>
															<th></th>
														</tr>
													</thead>
												</table>				
										</div>
									</div>
								<input type="hidden" name="formIden" id="formIden">
						<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-success" id="btnSave"><i class="fa fa-save"></i> Save</button>
						<button  class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>