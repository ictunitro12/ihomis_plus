<style>

table#chargesOutside.dataTable tbody tr:hover {
  background-color: #80DB88;
}

table#chargeOutlist.dataTable tbody tr:hover {
  background-color: #80DB88;
}

table#chargeOut.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="tab-pane fade" id="out" role="tabpanel" aria-labelledby="out-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
				<i class="fa fa-th-list"></i>
					&nbsp Outside Charge/s
			</div>
		</div>
		<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type ="button" id = "btnaddOutside" title=""  class="btn btn-outline-success btn-md mb-2" data-style="zoom-in"><i class="fa fa-plus"></i>
					 Add Charge/s</button>
			   </div>
			 </div>		
		</div>	
		<table id="chargesOutside" class="table table-sm table-condensed table-bordered" width="100%">
			<thead>
				<tr>
					<th width="10%">Charged Date</th>
					<th width="10%">Reference No.</th>
					<th width="35%">Item</th>
					<th width="10%">Quantity</th>
					<th width="15%">Price</th>
					<th	width="15%">Amount</th>
					<th width="5%"></th>
				</tr>
			</thead>
		</table>
	</div>


<form id="frmoutCharge" name ="frmoutCharge">
   <div class="modal" id="modaloutCharge" name="modaloutCharge" role="form">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
         <div class="modal-content card-accent-success" >
            <div class="modal-body " >
               <div class="clearfix">
				   <h4 class="text-success float-left"><i class="fa fa-exchange "></i> Outside Charge/s</h4>
				   <a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
               </div>
			   <div class="hr clearfix card card-accent-success"></div>
               <div class="h5 card-title text text-success"><i class="fa fa-user"></i>&nbsp Account Details</div>
				<div id="_outacc">
					<div class="row">
						<div class="col-md-2 col-form-label text-success mb-1">Account No:</div>
						<div class="col-md-4 mb-1">
							<input type="text" name="acctno" id="acctno" readonly="" class="form-control form-control-md" placeholder="Account No.">
							<input type="hidden" name="chrgformIden" id="chrgformIden">
							<input type="hidden" name="chrgEnccode" id="chrgEnccode">
							<input type="hidden" name="chrgHpercode" id="chrgHpercode">
						</div>
						<div class="col-md-2 col-form-label text-success mb-1" id="chargesliplabel">Reference No.:</div>
						<div class="col-md-4 mb-1">
							<input type="text" name="chrgslip" id="chrgslip" class="form-control form-control-md" placeholder="Reference No.">
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-form-label text-success mb-1">Charged Date:</div>
						<div class="col-md-4 mb-1">
							<input type="datetime-local" name="chrgdate" stepup="1" min="2017-12-31T12:59" id="chrgdate" class="form-control form-control-md" placeholder="Charge date">
						</div>
						<div class="col-md-2 col-form-label text-success mb-1">Type of Charge:</div>
						<div class="col-md-4 mb-1">
							<select name="costcntr" id="costcntr" class="form-control form-control-md" placeholder="Type of Charge">
								<option value="">Type of Charge</option>
								<option value="DRUGS">Drugs and Medicines</option>
								<option value="LABEX">Examinations</option>
								<option value="NONDR">Medical Supplies</option>
						</select>
					</div>
				</div>
				</div>
                <div class="clearfix">
					<div class="row">
					 <div class="col-md-9 float-left">
						<h5 class="clearfix text text-success"><i class="fa fa-th-list"></i> Item List</h5>
					 </div>
					<div class="col-md-3">
					<button type="button" id="btnOcharge_add" title="" class="btn btn-outline-success btn-md mb-2 float-right" data-style="zoom-in"><i class="fa fa-plus" aria-hidden="true"></i> Add Charge/s</button>
						<!--i type="button" id="btnOcharge_add"  class="fa fa-plus fa-2x text-success"></i -->
					</div>
				  </div>
				  </div>
				  	<hr class="card card-accent-success">
				      <div class="row">
					   <div class="col-md-12">
                     <div class="text-success  ">
						<input type="hidden" name="totalAll" id="totalAll">
						<table id="chargeOutlist" style="cursor:pointer" class="table" width="100%">
							<thead>
								<tr>
									<th width="5%" ></th>
									<th width="5%"></th>
									<th width="35%">Description</th>
									<th width="20%">Unit Price</th>
									<th width="15%">Qty</th>
									<th width="20%">Amount</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th width="5%"></th>
									<th width="5%"></th>
									<th width="35%"align="float-right" class ="h4 text text-success" > Grand Total :</th>
									<th width="20%"></th>
									<th width="15%" > </th>
									<th width="20%"align="left" class ="h4 text text-success Gtotal" id="GTotal"></th>
									<th></th>
									<th ></th>
									<th ></th>
									<th></th>
									<th ></th>
									<th></th>
								</tr>
							</tfoot>
						</table>						
                     </div>
                     </div>
                     </div>
				<div class="hr clearfix card card-accent-success"></div>
					 <div class="clearfix">
               </div>
            </div>
			<div class="modal-footer">
				<div class="btn-group float-right">
					<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> Save</button>
					<button  class="btn btn-outline-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
			    </div>
			</div>
         </div>
      </div>
   </div>
</form>

<div class="modal" id="modalchargeType" name="modalchargeType" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered dialog modal-lg" role="dialog">
      <div class="modal-content">
         <div class="modal-body">
		 <div class="h5 card-title text text-success"><i class="fa fa-th-list"></i> Items</div>
                <!--select name="chrgtype" id="chrgtype"  class="form-control form-control-sm  mb-2"  aria-label="Type of Charge"></select -->
                <div class="w-100 p-2"></div>
				<!-- br></br -->	
                  <table id="chargeOut" style ="cursor:pointer;"class="table table-sm table-hover table-bordered table-condensed" width="100%">
                     <thead>
                        <tr>
                           <th>Code</th>
                           <th>Item</th>
                           <th>Description</th>
                           <th>Unit</th>
                           <th>Amount</th>
                           <th>Lotno</th>
                           <th>Stocks</th>
                           <th>Expiry</th>
                           <th></th>
                        </tr>
                     </thead>
                  </table>
         </div>
		<div class="modal-footer">
			<div class="btn-group float-right">
				<button id="selectChargeout" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> Select</button>
				<button  class="btn btn-outline-danger btn-md" data-dismiss="modal" id="closeOutCharges"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
      </div>
   </div>
</div>

<form id="frmDeleteOutCharge" name="frmDeleteDiag" method="post">
	<div class="modal fade" id="ModalOutChargesDelete" name="ModalOutChargesDelete" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<h5 id="deleteOutChargeDesc"></h5>
			<input type="hidden" name="chrgOutSlipNo" id="chrgOutSlipNo">
			<input type="hidden" name="chrgOutCode" id="chrgOutCode">
			<input type="hidden" name="chrgOutItemCode" id="chrgOutItemCode">
			<input type="hidden" name="chrgOutDelete" id="chrgOutDelete">
			<input type="hidden" name="chrgOutEnccode" id="chrgOutEnccode">
			<input type="hidden" name="chrgOutDesc" id="chrgOutDesc">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>

<form id="frmEditOutCharge" name="frmEditOutCharge">
	<input type="hidden" name="editChargeOutEnccode" id="editChargeOutEnccode">
	<input type="hidden" name="editChargeOutCode" id="editChargeOutCode">
	<input type="hidden" name="editChargeOutItemCode" id="editChargeOutItemCode">
	<input type="hidden" name="editOldChargeOutSlipNumber" id="editOldChargeOutSlipNumber">

	<div class="modal fade" id="modalEditOutCharge" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<h2 class="modal-title text-success"><i class="fa fa-credit-card" aria-hidden="true"></i> Edit Charge</h2>
					<br>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">Charge Slip Number:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" id="editChargeOutSlipNumber" name="editChargeOutQty">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Charged Date/Time:</div>
						<div class="col-md-8">
							<input type="datetime-local" name="editChargeOutDateLog" id="editChargeOutDateLog" class="form-control form-control-md" placeholder="Charged date">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Item Description:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editChargeOutDesc"></div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Quantity:
						</div>
						<div class="col-md-8">
							<input type="number" class="form-control form-control-mb" autocomplete="off" value="1" min="0" id="editChargeOutQty" name="editChargeOutQty">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Price:</div>
						<div class="col-md-8">
							<input type="number" class="form-control form-control-mb" autocomplete="off" step="0.1" min="0" id="editChargeOutPrice" name="editChargeOutPrice">
						</div>
						<!-- div class="col-md-8 col-form-label text-default mb-1" id="editChargePrice"></div -->
						<div class="col-md-4 col-form-label text-default mb-1">Amount:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editChargeOutAmount"></div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="btnOutSave" id="btnOutSave" class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="<?php echo base_url()?>assets/scripts/billing/outside.js"></script>