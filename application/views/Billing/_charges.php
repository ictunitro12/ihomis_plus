<style>

table#chargesList.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#chargesTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#packageTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>

<form id="frmNewCharge_form" name ="frmNewCharge_form" method="post">
   <div class="modal" id="ModalNewCharge_modal" name="ModalNewCharge_modal" role="form">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
         <div class="modal-content card-accent-success" >
            <div class="modal-body " >
               <div class="clearfix">
				   <h4 class="text-success float-left"><i class="fa fa-exchange "></i> Charge/s</h4>
				   <a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
               </div>
			   <div class="hr clearfix card card-accent-success"></div>
               <div class="h5 card-title text text-success"><i class="fa fa-user"></i>&nbsp Account Details</div>
				<div id="_acct"></div>
                <div class="clearfix">
					<div class="row">
						<div class="col-md-9 float-left">
							<h5 class="clearfix text text-success"><i class="fa fa-th-list"></i> Item List</h5>
						</div>
						<div class="col-md-3">
							<button type="button" id="btnCharges_add" title="" class="btn btn-outline-success btn-md mb-2 float-right" data-style="zoom-in"><i class="fa fa-plus" aria-hidden="true"></i> Add Charge/s</button>
							<!-- i type="button" id="btnCharges_add"  class="fa fa-plus fa-2x text-success"></i -->
						</div>
				  	</div>
				  </div>
				  	<hr class="card card-accent-success">
				      <div class="row">
					   <div class="col-md-12">
                     <div class="text-success  ">
						<input type="hidden" name="totalAll" id="totalAll">
						<table id="chargesList" style="cursor:pointer" class="table" width="100%">
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
					<button type="submit" name="submit" id="submit" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> Save</button>
					<button  class="btn btn-outline-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
			    </div>
			</div>
         </div>
      </div>
   </div>
</form>

<div class="modal" id="Modal_typeCharge" name="Modal_typeCharge" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered dialog modal-md" role="dialog">
      <div class="modal-content">
         <div class="modal-body">
		 <div class="h5 card-title text text-success"><i class="fa fa-th-list"></i> Items</div>
                  <select name="typechrge_chrg" id="typechrge_chrg"  class="form-control form-control-sm  mb-2"  aria-label="Type of Charge"></select>
                <div clas="w-100 p-2"></div>
				<br></br>	
                  <table id="chargesTable" style ="cursor:pointer;"class="table table-sm table-hover table-bordered table-condensed" width="100%">
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
				<button id="selectCharge" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> Select</button>
				<button  class="btn btn-outline-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
      </div>
   </div>
</div>


<div class="modal" id="modalPackage" name="modalPackage"  role="dialog">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
      <div class="modal-content card-accent-success">
         <div class="modal-body">
		<div class="h5 card-title text text-success"><i class="fa fa-folder"></i> Package/s</div>
				<hr class="text text-success"></hr>
            <b class="text text-success">Item name:</b>   <span class="text text-success mb-1" id="packDescchrg"></span>
			<hr class="text text-success"></hr>
            <div class="card border-success">
               <div class="card-body text-success">
				  <table id="packageTable" class="table table-sm table-hover table-condensed" width="100%">
                     <thead>
                        <tr>
                           <th>Code</th>
                           <th>Item</th>
                           <th>Description</th>
                           <th>Qty</th>
                           <th>Unit</th>
                           <th>Amount</th>
                           <th></th>
                        </tr>
                     </thead>
					 <tfoot>
					  <tr>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                        </tr>
					 </tfoot>
                  </table>
               </div>
            </div>
			<div class="clearfix"></div>
			<button class="btn btn-danger  btn-md  btn-ladda float-right" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
			&nbsp
			<button class="btn btn-success btn-md  btn-ladda float-right" name="bntAddpackCharge" id="bntAddpackCharge" ><i class="fa fa-check-circle"></i></button>
				
         </div>
      </div>
   </div>
</div>


<div class="modal" id="Modal_respCharge" name="Modal_respCharge"  role="dialog">
   <div class="modal-dialog modal-dialog-centered modal-sm" role="dialog">
      <div class="modal-content card-accent-success">
         <div class="modal-body">
		<div class="h5 card-title text text-success"><i class="fa fa-hand-pointer-o"></i> Selected Item</div>
				<hr class="text text-success"></hr>
            <b class="text text-success">Item name:</b>   <span class="text text-success mb-1" id="itemDescchrg"></span>
			<hr class="text text-success"></hr>
            <div class="card border-success">
               <div class="card-body text-success">
                 <div class="form-row">
						 <input type="hidden" name="itemCodechrg" id="itemCodechrg"  readonly class="form-control" placeholder="code" >
						 <input type="hidden" name="itemOUMchrg" id="itemOUMchrg"  readonly class="form-control" placeholder="oum" >
						 <input type="hidden" name="itemItemchrg" id="itemItemchrg"  readonly class="form-control" placeholder="oum" >
					   <div class="col-md-6  col-form-label  text-default ">Price:
					   </div>
					  <div class="col-md-6">
						 <input type="number" name="itemPricechrg" id="itemPricechrg"  readonly class="form-control form-control-sm   " placeholder="PRICE" >
					  </div>
					   <div class="col-md-6  col-form-label  text-default ">Qty:</div>
					   <div class="col-md-6">
						 <input type="number" name="itemQtychrg" min="1" onstepup="itemTotal();" onstepdown="itemTotal();" onchange="itemTotal();" id="itemQtychrg" class="form-control form-control-sm   ">
					  </div>
					  <div class="col-md-6 col-form-label  text-default">Total:</div>
					   <div class="col-md-6">
						 <input type="text" name="itemQtytotal" id="itemQtytotal" readonly class="form-control form-control-sm  mb-1" placeholder="TOTAL" >
					  </div>
                  </div>
               </div>
            </div>
			<div class="clearfix"></div>
			<button class="btn btn-danger  btn-md  btn-ladda float-right" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
			&nbsp
			<button class="btn btn-success btn-md  btn-ladda float-right" name="bntAdditemCharge" id="bntAdditemCharge" ><i class="fa fa-check-circle"></i></button>
				
         </div>
      </div>
   </div>
</div>

<form id="frmEditCharge" name="frmEditCharge">
	<input type="hidden" name="editChargeEnccode" id="editChargeEnccode">
	<input type="hidden" name="editChargeHpercode" id="editChargeHpercode">
	<input type="hidden" name="editChargeCode" id="editChargeCode">
	<input type="hidden" name="editChargeUomCode" id="editChargeUomCode">
	<input type="hidden" name="editChargeSrcChrg" id="editChargeSrcChrg">
	<input type="hidden" name="editChargeItemCode" id="editChargeItemCode">
	<input type="hidden" name="editChargeAcctnNo" id="editChargeAcctnNo">

	<div class="modal fade" id="modalEditCharge" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<h2 class="modal-title text-success"><i class="fa fa-credit-card" aria-hidden="true"></i> Edit Charge</h2>
					<br>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">Charge Slip Number:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editChargeSlipNumber"></div>
						<div class="col-md-4 col-form-label text-default mb-1">Charged Date/Time:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editChargeDateLog"></div>
						<div class="col-md-4 col-form-label text-default mb-1">Type of Charge:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editTypeCharge"></div>
						<div class="col-md-4 col-form-label text-default mb-1">Item Description:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editChargeDesc"></div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Quantity:
						</div>
						<div class="col-md-8">
							<input type="number" class="form-control form-control-mb" autocomplete="off" value="1" min="0" id="editChargeQty" name="editChargeQty">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Price:</div>
						<div class="col-md-8">
							<input type="number" class="form-control form-control-mb" autocomplete="off" step="0.1" min="0" id="editChargePrice" name="editChargePrice">
						</div>
						<!-- div class="col-md-8 col-form-label text-default mb-1" id="editChargePrice"></div -->
						<div class="col-md-4 col-form-label text-default mb-1">Amount:</div>
						<div class="col-md-8 col-form-label text-default mb-1" id="editChargeAmount"></div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="btnSave" id="btnSave" class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>