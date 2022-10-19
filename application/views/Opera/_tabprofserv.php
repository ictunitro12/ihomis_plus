	<div class="tab-pane fade" id="prof" role="tabpanel" aria-labelledby="prof-tab">
			<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
				<i class="fa fa-user-md"></i>
					&nbsp Professional Fees/s
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type ="button" id="btnProfServ_add"  title=""  class="btn btn-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i></button>
			   </div>
			 </div>		
			</div>	
		<table id="chargesProfServ" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th class="h6" width="140px">Licno</th>
							<th class="h6" width="240px">Name</th>
							<th class="h6">Service</th>
							<th class="h6">Fees</th>
							<th class="h6">Discount</th>
							<th class="h6">Amount</th>
							<th class="h6">Include?</th>
							<th class="h6">Remarks</th>
							<th width="50px"></th>
						</tr>
					</thead>
					
		</table>
		</div>
		
<form name ="frmProfserv_form" class="form" id="frmProfserv_form">
   <div class="modal" id="ModalProfserv_modal" name="ModalProfserv_modal"  tabindex="-1" role="dialog">
      <div class="modal-dialog  modal-dialog-centered modal-lg" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-body">
			  <div class=" h4 modal-title text-success"><i class="fa fa-user-md"></i> Professional Service</div>
               <div class="form-row">
			   <div class="col-md-2 col-form-label  text-default mb-1">
                     Service date from:
                  </div>
                  <div class="col-md-4">
                     <input type="datetime-local" name="servDateFrom" id="servDateFrom" class="form-control">
                  </div>
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Service date to:
                  </div>
				    <div class="col-md-4">
                     <input type="datetime-local" name="servDateTo" id="servDateTo" class="form-control">
                  </div>
				  
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Doctor:
                  </div>
                  <div class="col-md-4">
                     <select type="text" name="DocName_doc" id="DocName_doc" class="form-control"></select>
                  </div>
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Type of Provider:
                  </div>
                  <div class="col-md-4">
                     <select type="text" name="typeOfProv" id="typeOfProv" class="form-control">
                        <option value="">Select</option>
                        <option value="ADMIT">Admission</option>
                        <option value="ATTEN">Attending</option>
                        <option value="CONSU">Consulting</option>
                        <option value="RESID">Resident</option>
                        <option value="SURGE">Surgeon</option>
                        <option value="ANEST">Anesthesiologist</option>
                        <option value="MIDWF">Midwife</option>
                     </select>
                  </div>
                  </div>
				  	<div class="form-row">
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Medical Case:
                  </div>
                  <div class="col-md-10">
                     <select type="text" name="MedCase" id="MedCase" disabled class="form-control">
                        <option value="">Select</option>
                        <option value="GENPR">General</option>
                        <option value="SPECI">Specialist</option>
                        <option value="NOTAP">N/A</option>
                     </select>
                  </div>
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     # of visit/s:
                  </div>
                  <div class="col-md-4">
                     <input type="number" name="noVisit" id="noVisit" min="1"  disabled class="form-control" placeholder="Number">
                  </div>
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Rate:
                  </div>
                  <div class="col-md-4">
                     <input type="text" name="rate" id="rate" min="1" class="form-control" disabled placeholder="Number">
                  </div>
				  <div class="col-md-2 col-form-label  text-default mb-1">
                     Total Rate:
                  </div>
				   <div class="col-md-10">
                     <input type="text" name="rateVisit" id="rateVisit" min="1"  class="form-control" readonly placeholder="Number">
                  </div>
				  </div>
				  <div class="form-row">
					  <div class="col-md-2 col-form-label  text-default mb-1">
						 Service:
					  </div>
					  <div class="col-md-4">
						 <select type="text" name="typeProvServ_proftype" id="typeProvServ_proftype" class="form-control">
							<option value="">Select</option>
						 </select>
					  </div>
					   <div class="col-md-2 col-form-label  text-default mb-1">
						 Professional Fee:
					  </div>
					  <div class="col-md-4">
						 <input type="text" name="profFee" id="profFee" class="form-control" placeholder="Number">
					  </div>
                 </div>
				  
				  	
				  
				  
				    	<div class="form-row">
                 
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Procedure:
                  </div>
                  <div class="col-md-8">
                     <select type="text" name="proceOp_proc" id="proceOp" disabled class="form-control">
                        <option value="">Select</option>
                     </select>
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Type of Anesthesia:
                  </div>
                  <div class="col-md-8">
                     <select type="text" name="typeAnes" id="typeAnes"  disabled class="form-control">
                        <option value="">Select</option>
                        <option value="LOCAL">Local Anesthesia</option>
                        <option value="PERIP">Peripheral Nerve Blocks</option>
                        <option value="SPINE">Spinal Anesthesia</option>
                        <option value="GENAN">General Anesthesia</option>
                     </select>
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Additional Fee:
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="addFee" id="addFee" class="form-control" placeholder="Number">
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Additional Type:
                  </div>
                  <div class="col-md-8">
                     <select type="text" name="addFeeType" id="addFeeType" class="form-control">
                        <option value="">Select</option>
                        <option value="P">Percent</option>
                        <option value="A">Amount</option>
                     </select>
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Discount Amount:
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="discAmt" id="discAmt" class="form-control" placeholder="Number">
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Discount Type:
                  </div>
                  <div class="col-md-8">
                     <select type="text" name="discType" id="discType" class="form-control">
                        <option value="">Select</option>
                        <option value="P">Percent</option>
                        <option value="A">Amount</option>
                     </select>
                  </div>
                  
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Total Amount:
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="pfTotal" id="pfTotal" class="form-control" placeholder="Amount" readonly>
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Include to Bill?:
                  </div>
                  <div class="col-md-8">
                     <select type="text" name="incBill" id="incBill" class="form-control">
                        <option value="">Select</option>
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                     </select>
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Remarks:
                  </div>
                  <div class="col-md-8">
                     <textarea type="text" name="profnotes" id="profnotes" class="form-control" placeholder="Remarks"></textarea>
                  </div>
                  <div class="col-md-4 col-form-label  text-default mb-1">
                     Claim Type?:
                  </div>
                  <div class="col-md-8">
                     <select type="text" name="claimType" id="claimType" class="form-control">
                        <option value="">Select</option>
                        <option value="Y">Member</option>
                        <option value="N">Doctor</option>
                        <option value="N">Chief of Hospital</option>
                     </select>
                  </div>
                  <input type="hidden" name="profacctno" id="profacctno">
                  <input type="hidden" name="profctr" id="profctr">
                  <input type="hidden" name="profServformIden" id="profServformIden">
                  <input type="hidden" name="profServEnccode" id="profServEnccode">
                  <input type="hidden" name="profServHpercode" id="profServHpercode">
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" name="sSubmit" class="btn btn-success btn-md	 btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
            </div>
         </div>
      </div>
   </div>
</form>
<script src="<?php echo base_url()?>assets/scripts/billing/profserv.js"></script>
	
