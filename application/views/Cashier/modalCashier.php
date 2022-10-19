
<style>

table#toPayList.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<form name="formPayment" id="formPayment">
   <div class="modal fade" id="ModalPayment_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered modal-lg"  >
         <div class="modal-content card-accent-success">
            <div class="modal-body">
				<div class="row">
					<div class="col-md-12">
				<div class="text text-success h5"><i class="fa fa-th-list"></i> List of items</div>
							<table id="toPayList" class="table table-sm table-bordered" style="cursor:pointer"  width="100%">
								<thead>
									<tr>
										<th width="20px">Chargesslip</th>
										<th width="50px">Description</th>
										<th width="5px">Quantity</th>
										<th width="25px">Amount</th>
										<th width="25px"></th>
										<th width="25px"></th>
										<th width="25px"></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th width="20px"></th>
										<th width="50px"></th>
										<th width="5px" class="text-success text-right h5">Total</th>
										<th width="25px"></th>
										<th width="25px"></th>
										<th width="25px"></th>
										<th width="25px"></th>
									</tr>
								</tfoot>
							</table>
					</div>
					</div>
					<div class="row"> 
					<div class="col-md-8 border-right">
					<div class="text text-success h5"><i class="fa fa-th-list"></i> Payment Details</div>
						<div class="form-row">
							<div class="col-md-4">
								<label>Official Receipt Date:</label>
							</div>
							<div class="col-md-8">
								<input class="form-control form-control-md  mb-1" required type="datetime-local"  name="ordate" id="ordate">
							</div>
							<div class="col-md-4">
								<label>Official Receipt #:</label>
							</div>
							<div class="col-md-8">
								<input class="form-control mb-1  form-control-md mb-1" required  type="text" name="orno" id="orno" placeholder="OR Number">
							</div>
							<input class="form-control mb-1 form-control-md  mb-1" required type="number" step='any' name="tenderedAmt"  id="tenderedAmt" placeholder="Tendered Amount">
							<input class="form-control mb-1 form-control-md  mb-1" required type="text"  step='any' name="balanceAmt" id="balanceAmt" readonly placeholder="Balance Amount">
							  <textarea type="text" name="itemRemarks" id="itemRemarks" required class="form-control form-control-lg mb-1" placeholder="Remarks"></textarea>
							  <input type="hidden" name="itemEnccode" id="itemEnccode">
							  <input type="hidden" name="itemHpercode" id="itemHpercode">
							  <input type="hidden" name="itemAccount" id="itemAccount">
							  <input type="hidden" name="formIdenItem" id="formIdenItem">
						</div>
					</div>
						<div class="col-md-4">
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
							<input class="form-control form-control-md mb-1"  type="text" name="checkno" id="checkno" readonly placeholder="Cheque No">
							<input class="form-control form-control-md mb-1"  type="text" name="checkdate" id="checkdate"  readonly placeholder="Cheque Date">
						</div>
					</div>
            </div>
			<div class="modal-footer">	
				<div class="btn-group">
					<button type="submit"  class="btn btn-outline-success btn-lg btn-ladda" data-style="zoom-in"><i class="fa fa-refresh"></i> Process</button>
					<button class="btn btn-outline-danger btn-lg  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
				</div>
			</div>
         </div>
      </div>
   </div>
</form>


