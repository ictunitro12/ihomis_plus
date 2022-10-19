<form name="formInitial" id="formInitial">
   <div class="modal fade" id="initialPayModal" role="form" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered modal-md"  >
         <div class="modal-content card-accent-success">
            <div class="modal-body">
				<div class="text text-success h5"><i class="fa fa-user-circle-o"></i> Initial Deposit</div>
                  <hr>
                           <div class="text text-success"><i class="fa fa-info-circle"></i> Mode of Payment</div>
                                    <div class="form-check">
                                        <input  type="radio"  id="itemMop" name="itemMop" required onchange="cheque(this.value);" value="C">
                                        <span class="text-success"> :Cash</span>
                                        <label class="form-check-label" for="toc"></label>
                                    </div>	

                                    <div class="form-check">
                                        <input  type="radio"  id="itemMop" name="itemMop" onchange="cheque(this.value);" value="X">
                                        <span class="text-success"> :Cheque</span>
                                        <label class="form-check-label" for="toc"></label>
                                    </div>
                
                                    <div class="col-md-12 mb-1 text-success">
                                    Cheque no:
                                         <input class="form-control form-control-sm mb-1"  type="text" name="checkno" id="checkno" readonly placeholder="Cheque No">
                                    </div>
                                  
                                    <div class="col-md-12 mb-1 text-success">
                                    Check Date:
                                         <input class="form-control form-control-sm mb-1"  type="text" name="checkdate" id="checkdate"  readonly placeholder="Cheque Date">
                                    </div>
                
                         <div class="text text-success h5"><i class="fa fa-info-circle"></i> Amount</div>
                         <hr>
                            <div class="col-md-12 mb-1  text-success">
                            Date:
									<input class="form-control form-control-md  mb-1" required type="datetime-local"  name="ordate" id="ordate">
							</div>
							<div class="col-md-3 mb-1 text-success">
							
							</div>
							<div class="col-md-12 mb-1">
                            OR:
								<input class="form-control mb-1  form-control-md mb-1" required  type="text" name="orno" id="orno" placeholder="OR Number">
							</div>
								<div class="col-md-3 mb-1 text-success">
									Tendered:
								</div>
								<div class="col-md-12 mb-1">
									<input class="form-control mb-1 form-control-lg  mb-1" required type="number" step='any' name="tenderedAmt"  id="tenderedAmt" placeholder="Tendered Amount">
								</div>
                                <div class="col-md-3 mb-1 text-success">
									Amount To Pay:
								</div>
								<div class="col-md-12 mb-1">
									<input class="form-control mb-1 form-control-lg  mb-1" required type="number" step='any' name="amtToPay"  id="amtToPay" placeholder="Amount to pay">
								</div>
								<div class="col-md-3 mb-1 text-success">
									Remarks:
								</div>
								<div class="col-md-12 mb-1">
										<textarea type="text" name="itemRemarks" id="itemRemarks" required class="form-control form-control-lg mb-1" placeholder="Remarks"></textarea>
								</div>
						
                                </div>
			<div class="modal-footer">	
				<div class="btn-group">
					<button type="submit"  class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-refresh"></i> Process</button>
					<button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
			</div>
      </div>
      </div>
   </div>
</form>


