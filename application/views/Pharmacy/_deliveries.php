
	<div class="clearfix">
		<div class="h4 text-success float-left"><i class="fa fa-cart-arrow-down"></i> Deliveries</div>
	  <button type="button" onclick="addDeliveries();" class="btn btn-success btn-md  float-right mb-1"><i class="fa fa-plus"></i></button>
	</div>
	<table id="deliver_tbl"  style="cursor:pointer;"class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
		<thead>
		<tr>
			<th style="text-align:center; vertical-align:middle;" width="10%" rowspan="2">No</th>
			<th style="text-align:center; vertical-align:middle;" width="7%" rowspan="2">Date</th>
			<th style="text-align:center; vertical-align:middle;" width="50%" colspan="3">Stock</th>
			<th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2">Qty</th>
			<th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2">Expire</th>
			<th style="text-align:center; vertical-align:middle;" width="20%" rowspan="2">Account</th>
			<th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2">Status</th>
			<th style="text-align:center; vertical-align:middle;" width="5%" rowspan="2"></th>
		</tr>
		<tr>
			<th width="10%">Supplier</th>
			<th width="10%">Type</th>
			<th width="20%">Item</th>
		</tr>
		</thead>
	</table>
<form name="formDeliveries" id="formDeliveries">
<div class="modal" id="modalDeliveries" role="form" style="overflow: auto;">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-title text-success h4"><i class="fa fa-ambulance"></i> Delivery</div>
				<hr class="bg-success">
							<h5 class="text-success"><i class="fa fa-th-list"></i> Delivery & Purchase Information</h5>
								<div class="row">
								<div class="col-md-6">
											
											 Date:
											<input type="datetime-local" class="form-control form-control-md" name="delDate" id="delDate"/>
											Type of Account:
											<select class="form-control form-control-md" name="delAcc_acc" id="delAcc_acc"></select>
									</div>
									<div class="col-md-6">
											Delivery No:
											<input type="text" readonly class="form-control form-control-md" name="delNo" id="delNo"/>
											Supplier:
											<select class=" form-control form-control-md" name="delSupp_supplier" id="delSupp_supplier"></select>
											
									</div>
									<div class="col-md-12">
										Delivery Type:
											<select class=" form-control form-control-sm" name="delSuppind" id="delSuppind">
												<option value="">Select</option>
												<option value="P">Procured</option>
												<option value="D">Donation</option>
												<option value="R">Central Office</option>
												</select>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-6">
											Sales Invoice :
											<input type="text"  class="form-control form-control-md" name="delInvoice" id="delInvoice" placeholder ="Sales invoice"/>
											Requisition Slip no :
											<input type="text"  class="form-control form-control-md" name="delRisno" id="delRisno" placeholder ="Requisition Slip number"/>
									</div>	
								
									<div class="col-md-6">
											Purchase Request no:
											<input type="text"  class="form-control form-control-md" name="delReqno" id="delReqno" placeholder ="Sales invoice"/>
											Purchase Order no:
											<input type="text"  class="form-control form-control-md" name="delPono" id="delPono" placeholder ="Purchase Order no"/>
									</div>
								</div>
								
								<hr class="bg-success">
								<h5 class="text-success"><i class="fa fa-th-list"></i> Item information</h5>
									<div class="row">
										<div class="col-md-6">
												 Item Type:
												<select class="form-control form-control-md" name="delitem_type" id="delitem_type">
												<option value="">Select</option>
												<option value="DM">Drugs & Medicine</option>
												<option value="SM">Medical Supplies</option>
												<option value="SE">Supplies & Equipment</option>
												</select>
										</div>									
										<div class="col-md-6">
												Quantity:
												<input  type="number" class="form-control form-control-md" placeholder="0" minlength="1" name="delQty" id="delQty">
										</div>
										<div class="col-md-6">
												Item price:
												<input  type="number" class="form-control form-control-md" placeholder="0" minlength="1" name="delPrice" id="delPrice">
										</div>
										<div class="col-md-6">
												Description:
												<select class="form-control form-control-md" name="delItem_dm" id="delItem_dm"></select>
										</div>
										
											<input name="delivformIden" id="delivformIden" type="hidden">
											<input name="intkey" id="intkey" type="hidden">
									</div>
									<div class="row">
										<div class="col-md-6">
												Expiration:
												<input  type="datetime-local" class="form-control form-control-md" name="delExpire" id="delExpire">
										</div>
										<div class="col-md-6">
												Lot no :
												<input  type="text" class="form-control form-control-md" name="delLotno" id="delLotno">
										</div>
										<div class="col-md-6">
												Remarks :
												<textarea  type="text" class="form-control form-control-md" name="delRem" id="delRem" placeholder="Remarks"></textarea>
										</div>
										</div>
					<div class="clearfix">
					<button type="submit" class="btn btn-success float-right" id="btnSave"><i class="fa fa-save"></i></button>
					</div>
			</div>
		</div>
	</div>
</div>
	</form>
