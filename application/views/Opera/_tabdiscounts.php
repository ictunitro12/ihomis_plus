
	<div class="tab-pane fade" id="disc" role="tabpanel" aria-labelledby="disc-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
					<i class="fa fa-th-list"></i>&nbsp Discount/s
				</div>
			</div>
			<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
			<button type ="button" id = "btnDiscount_Add" title=""  class="btn btn-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i>
			</button>
			</div>
		</div>		
		</div>	
		<table id="chargesDisc" class="table table-sm table-condensed table-bordered" width="100%">
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th class="h6" >Date</th>
					<th class="h6" >Reference</th>
					<th class="h6" >Code</th>
					<th class="h6" >Description</th>
					<th class="h6" >Amount</th>
					<th class="h6" >Type</th>
					<th width="50px"></th>
				</tr>
			</thead>
		</table>
	</div>
	
<form name ="frmDiscount_form" id="frmDiscount_form" method="post">
   <div class="modal" id="ModalDiscount_modal" name="ModalDiscount_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-body">

			    <div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-percent"></i> Discount/s</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
               </div>
               <div class="form-row">
                  <div class="col-md-6 col-form-label  text-default mb-1">
                     Date:
                  </div>
                  <div class="col-md-6">
                     <input type="datetime-local" name="dateDisc" id="dateDisc" value="" class="form-control" placeholder="Date" >
                  </div>
                  <div class="col-md-6 col-form-label  text-default mb-1">
                     Reference no:
                  </div>
                  <div class="col-md-6">
                     <input type="text" name="refDisc" id="refDisc" class="form-control" placeholder="Reference Discount">
                  </div>
                  <div class="col-md-6 col-form-label  text-default mb-1">
                     Discount Code:
                  </div>
                  <div class="col-md-6">
                     <select type="text" name="typeDisc_disc" id="typeDisc_disc"  class="form-control"></select>
                  </div>
                  <div class="col-md-6 col-form-label  text-default mb-1">
                     Amount/Percent:
                  </div>
                  <div class="col-md-6">
                     <input type="text" name="amountDisc" readonly id="amountDisc" class="form-control" placeholder="Amount">
                  </div>
                  <div class="col-md-6 col-form-label  text-default mb-1">
                     Type:
                  </div>
                  <div class="col-md-6">
                     <select type="text" name="codeType" id="codeType" class="form-control">
                        <option value="">Select</option>
                        <option value="P">Percent</option>
                        <option value="A">Amount</option>
                     </select>
                  </div>
                  <input type="hidden" name="accountNo" id="accountNo">
                  <input type="hidden" name="discformIden" id="discformIden">
                  <input type="hidden" name="discEnccode" id="discEnccode">
                  <input type="hidden" name="discHpercode" id="discHpercode">
               </div>
			   <hr>
            <button type="submit" name="sSubmit" class="btn btn-success btn-md	  btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
            </div>          
         </div>
      </div>
   </div>
</form>
