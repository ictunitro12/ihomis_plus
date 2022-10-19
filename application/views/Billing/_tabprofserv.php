<style>

table#chargesProfServ.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="tab-pane fade" id="prof" role="tabpanel" aria-labelledby="prof-tab">
			<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
				<i class="fa fa-user-md"></i>
					&nbsp Professional Fees/s
				</div>
			</div>
			<div class="col-md-6 mb-2">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type ="button" id="btnProfServ_add"  title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i> Add Prof.Fee</button>
			   </div>
			 </div>		
			</div>	
		<table id="chargesProfServ" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th width="140px">Licno</th>
							<th width="240px">Name</th>
							<th>Service</th>
							<th>Fees</th>
							<th>Discount</th>
							<th>Amount</th>
							<th>Include?</th>
							<th>Remarks</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
		</table>
		</div>
		
	<form id="frmProfDelete" name="frmProfDelete" method="post">
	<div class="modal" id="ModalProfDelete" name="ModalProfDelete" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" >
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="profEnccodeDelete" id="profEnccodeDelete">
			<input type="hidden" name="proflicnoDelete" id="proflicnoDelete">
			<input type="hidden" name="profctrDelete" id="profctrDelete">
         <input type="hidden" name="profdoctypeDelete" id="profdoctypeDelete">
			<input type="hidden" name="deleteProf" id="deleteProf" value="delete">
		</div>
		<div class="modal-footer ">
			<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
			<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
		</div>
</form>
		
<form name ="frmProfserv_form" class="form" id="frmProfserv_form">
   <div class="modal" id="ModalProfserv_modal" name="ModalProfserv_modal" role="dialog">
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
                     <select type="text" name="typeOfProv" onchange="typeprov(this.value);" id="typeOfProv" class="form-control">
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
                     <select type="text" name="MedCase" id="MedCase" onchange="medCase(this.value);"disabled class="form-control">
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
                        <option value="M">Member</option>
                        <option value="D">Doctor</option>
                        <option value="C">Chief of Hospital</option>
                     </select>
                  </div>
                  <input type="hidden" name="profacctno" id="profacctno">
                  <input type="hidden" name="profctr" id="profctr">
                  <input type="hidden" name="profServformIden" id="profServformIden">
                  <input type="hidden" name="profServEnccode" id="profServEnccode">
                  <input type="hidden" name="profServHpercode" id="profServHpercode">
                  <input type="hidden" name="profServlicno" id="profServlicno">
                  <input type="hidden" name="profServAccno" id="profServAccno">
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
<script src="<?php echo base_url()?>assets/scripts/doctor/doctor.js"></script>
<script src="<?php echo base_url()?>assets/scripts/billing/profserv.js"></script>

	
