<form name="formRequest" id="formRequest">
	<div class="modal" id="modalRequest" role="form" style="overflow: auto;">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-title text-success h4"><i class="fa fa-cart-arrow-down"></i> Requisition/s</div>
					<hr class="bg-success">
								<h6 class="text-success"><i class="fa fa-th-list"></i> Request Information</h6>
									<div class="row">
										<div class="col-md-2">
											Date:
										</div>
										<div class="col-md-4 mb-1">
											<input type="datetime-local" class="form-control form-control-md" name="reqDate" step="any" id="reqDate"/>
										</div>
										<div class="col-md-2">
											Reference:
										</div>		
										<div class="col-md-4 mb-1">
											<input type="hidden"  class="form-control form-control-md" name="reqNo" id="reqNo" placeholder="Request no"/>
											<input type="text"  class="form-control form-control-md" name="refCode" id="refCode" placeholder="Reference no"/>
										</div>
										<div class="col-md-2">
											Type:
										</div>	
										<div class="col-md-4">
											<select class="form-control form-control-md" name="delitem_type" id="delitem_type">
												<option value="">Select</option>
												<option value="DM">Drugs & Medicine</option>
												<option value="SM">Medical Supplies</option>
												<option value="SE">Supplies & Equipment</option>
											</select>
										</div>
										<div class="col-md-2 mb-1">
											Location:
										</div>	
										<div class="col-md-4 mb-1">
												<select class="form-control form-control-md" name="reqloc" id="reqloc">
												<option value="">Select</option>
												<option value="LABOR">Laboratory</option>
												<option value="RADIO">Radiology</option>
												<option value="PHARM">Pharmacy</option>
												<option value="CSSR">Central Supply Room</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="clearfix mb-1">
												  <h6 class="text-success float-left"><i class="fa fa-th-list"></i> List of Item/s</h6>
												  <button type="button"  id="btnItemList" class="btn btn-outline-success btn-md float-right"><i class="fa fa-plus"></i> Add item</a>
											</div>
											<div class="bg-success border-bottom mb-1"></div>
									 <div class="clearfix"></div>
												<table id="reqList" class="table table-sm table-hover table-condensed" >
													<thead>
														<tr>	
															<th width="5%">#</th>
															<th width="5%"></th>
															<th width="5%"></th>
															<th width="5%"></th>
															<th width="5%">Costcenter</th>
															<th width="25%">Item/Drug name</th>	
															<th width="25%">Remarks</th>
															
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

<div class="modal" id="modaldrugData" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="h4 text-success"><i class="fa fa-pills"></i> Drug & Medicine Library</div>
				<table id="drugData" name ="itemSelect" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>Drugs & Medicine</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<div class="btn-group">
					<button name="btnSelect"  class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-check"></i> Select</button>
					<button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalItemData" role="dialog" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="h4 text-success"><i class="fa fa-pills"></i> Non-Drug's Library</div>
				<table id="itemData"  name ="itemSelect" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>Supplies</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				<div class="btn-group">
					<button name="btnSelect" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-check"></i> Select</button>
					<button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>

