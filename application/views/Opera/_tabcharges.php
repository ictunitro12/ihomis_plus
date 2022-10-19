<style>
.modal-body {
    max-height: calc(100vh - 143px);
    overflow-y: auto; }
	
	
	
   .scroll {
   max-height: 500px;
   overflow-y: 500px;
   th { font-size: 10px; }
   td { font-size: 10px; }
   }
   
  #chargesList thead > tr{
	 font-size:11px;
  }
   
 
</style>

	<div class="modal " id="ModalChargeslip" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			 <div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-pdf"></i> Chargeslip</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
				   <iframe id="chargesPdf" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
				</div>
			 </div>
		  </div>
	   </div>
	   
	<div class="modal " id="ModalFinalBill" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			 <div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-pdf"></i> Final Bill</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
				   <iframe id="finalBillPdf" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
				</div>
			 </div>
		  </div>
	   </div>
	   
	   
	<form id="frmDeleteCharge" name="frmDeleteDiag" method="post">
	<div class="modal fade" id="ModalChargesDelete" name="ModalChargesDelete" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger" <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="slipno" id="slipno">
			<input type="hidden" name="chrgDelete" id="chrgDelete">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>

	<div class="tab-pane fade show active" id="charges" role="tabpanel" aria-labelledby="charges-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h5 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Charge/s
				</div>
			</div>
			<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
			<button type ="button" id="btnCharge_add"  title=""  class="btn btn-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i>
			</button>
			&nbsp
			<div class="btn-group" role="group">
			<button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-print"></i>
			</button>
			<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
			<a class="dropdown-item" id="btnFinalBill"><i class="fa fa-file-pdf-o"></i>&nbsp Final Bill</a>
			</div>
			</div>
			</div>
			</div>		
		</div>	
		<table id="chargesTbl" class="table table-sm table-condensed table-bordered"width="100%">
			<thead>
			<tr>
				<th></th>
				<th></th>
				<th  width="180px" class="h6">Datetime <small>(mm/dd/yyyy hh:mm:ss)</small></th>
				<th  width="120px" >Chargeslip</th>
				<th  width="140px" class="h6">Amount</th>
				<th  width="20px"></th>
			</tr>
			</thead>
		</table>
	</div>


<form id="frmNewCharge_form" name ="frmNewCharge_form" method="post">
   <div class="modal" id="ModalNewCharge_modal" name="ModalNewCharge_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
         <div class="modal-content card-accent-success" >
            <div class="modal-body " >
               <div class="clearfix">
				   <h4 class="text-success float-left"><i class="fa fa-exchange "></i> Charges</h4>
				   <a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
               </div>
			   <div class="hr clearfix card card-accent-success"></div>
               <div class="h5 card-title text text-success"><i class="fa fa-user"></i>&nbsp Account Details</div>
		
               <div class="mb-1">
                  <div class="row">
                     <div class="col-md-2 col-form-label  text-success mb-1">
                        Account No:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="text" name="acctno" id="acctno" readonly class="form-control form-control-md" placeholder="Account No">
                     </div>
                     <div class="col-md-2 col-form-label  text-success mb-1 ">
                        Chargeslip:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="text" name="chrgslip" id="chrgslip" readonly class="form-control form-control-md" placeholder="Charge Slip">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2 col-form-label  text-success mb-1">
                        Charge Date:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="datetime-local" name="chrgdate" id="chrgdate" class="form-control form-control-md"  placeholder="Charge date">
                     </div>
                     <div class="col-md-2 col-form-label  text-success mb-1">
                        Cost Center:
                     </div>
                     <div class="col-md-4 mb-1">
                        <select  name="costcntr" id="costcntr"  class="form-control form-control-md" placeholder="Cost Center" >
                           <option value="">Cost Centers</option>
                           <option value="LABOR">Laboratory</option>
                           <option value="RADIO">Radiology</option>
                           <option value="PROCE">Procedure</option>
                           <option value="RADTH">Radio Theraphy</option>
                           <option value="NUCME">Nuclear Medicine</option>
                           <option value="DENTA">Dental</option>
                           <option value="DERMA">Dermatology</option>
                           <option value="OPTHA">Opthalmology</option>
                           <option value="PHARM">Pharmacy</option>
                           <option value="NEURO">Neurology</option>
                           <option value="OPD">Out-Patient Department</option>
                           <option value="ER">Emergency Room</option>
                           <option value="OR">Operating Room</option>
                           <option value="DR">Delivery Room</option>
                           <option value="WARD">Ward</option>
                           <option value="PERIN">Perinatal</option>
                           <option value="CSSR">Central Supply Room</option>
                           <option value="PT">Physical Therapy</option>
                           <option value="MISCE">Miscellanous</option>
                        </select>
                     </div>
                  </div>
               </div>
			   
                <div class="row">
				 <div class="col-md-6">
				 <h5 class="clearfix text text-success"><i class="fa fa-th-list"></i> Item List</h5>
				 </div>
				  <div class="col-md-6 pull-right">
				  <button type="button" id="btnCharges" disabled class="btn btn-success btn-sm pull-right Add"><i class="fa fa-plus"></i></button>
				  </div>
				  </div>
				  	<hr class="card card-accent-success">
				      <div class="row">
					   <div class="col-md-12">
                     <div class="text-success  ">
						<table id="chargesList" class="table table-sm table-bordered table-condensed  scroll" width="100%">
							<thead>
							<tr>
								<th  width ="30px"></th>
								<th  width ="70px">Type</th>
								<th   width ="70px">Item Code</th>	
								<th  width ="220px">Description</th>
								<th  width ="60px">Unit Price</th>
								<th  width ="60px">Measurement</th>
								<th  width ="50px">Qty</th>
								<th  width ="80px">Amount</th>
							</tr>
							</thead>
						</table>						
                     </div>
                     </div>
                     </div>
				<div class="hr clearfix card card-accent-success"></div>
					<div class ="h4 text text-success pull-right" id="grandTotal"> Total Amount: 0.00</div>	
					 <div class="clearfix">
				   <button type="submit" class="btn btn-success btn-md  float-left  mb-1"><i class="fa fa-save"></i></button>	
									   
               </div>
            </div>
            <input type="hidden" name="chrgformIden" id="chrgformIden" >
            <input type="hidden" name="chrgEnccode" id="chrgEnccode">
            <input type="hidden" name="chrgHpercode" id="chrgHpercode">
         </div>
      </div>
   </div>
</form>

<div class="modal " id="Modal_typeCharge" name="Modal_typeCharge" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered dialog modal-md" role="dialog">
      <div class="modal-content">
         <div class="modal-body">
		 <div class="h3 card-title text text-success"><i class="fa fa-th-list"></i> Items</div>
                  <select name="typechrge_chrg" id="typechrge_chrg"  class="form-control form-control-sm"  aria-label="Type of Charge"></select>
                  <hr>
                  <table id="chargesTable" class="table table-sm table-hover table-bordered table-condensed" width="100%">
                     <thead>
                        <tr>
                           <th class="h6">Code</th>
                           <th class="h6">Item</th>
                           <th class="h6">Description</th>
                           <th class="h6">Units</th>
                           <th class="h6">Amount</th>
                        </tr>
                     </thead>
                  </table>
         </div>
      </div>
   </div>
</div>

<div class="modal" id="Modal_respCharge" name="Modal_respCharge" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-dialog-centered modal-sm" role="dialog">
      <div class="modal-content card-accent-success">
			<div class="card-header">
               <div class="h4 card-title text text-success"><i class="fa fa-hand-pointer-o"></i> Selected Item</div>
            </div>
         <div class="modal-body">
            <b class="text text-success">ITEM NAME:</b> <span class="text text-success mb-1" id="itemDescchrg"></span>
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
				<button class="btn btn-success btn-sm btn-block" name="bntAdditemCharge" id="bntAdditemCharge" ><i class="fa fa-check-circle fa-2x"></i></button>
         </div>
      </div>
   </div>
</div>