<form name="frmSupOrder" id="frmSupOrder" method="post">
   <div class="modal" id="DocOrdSuppModal"  role="dialog">
      <div class="modal-dialog modal-dialog-centered  modal-lg" role="dialog">
         <div class="modal-content card-accent-success">
            <div class="modal-body">
               <h4 class="modal-title text-success">	<i class="fa fa-bar-chart"></i>
                  &nbsp Supplies
               </h4>
               <hr class="border-success">
               <h5 class="text-success"><i class="fa fa-list"></i> Details</h5>
               <div class="form-row">
                  <div class="col-md-1 col-form-label  text-default mb-1">
                     Ordered:
                  </div>
                  <div class="col-md-5 ">
                     <input type="datetime-local" id="dateSupOrd" name="dateSupOrd" class="form-control form-control-md" autocomplete="off"  >
                  </div>
                  <div class="col-md-1 col-form-label  text-default mb-1">
                     Posted:
                  </div>
                  <div class="col-md-5">
                     <input type="datetime-local"  id="dateSupPost" name="dateSupPost" class="form-control form-control-md" autocomplete="off"  >
                  </div>
                  <div class="col-md-1 col-form-label  text-default mb-1">
                     Doctor:
                  </div>
                  <div class="col-md-5">
                     <select name="selSup_doc" id="selSup_doc"  class="form-control form-control-md">
                        <option value="">Select</option>
                     </select>
				      </div>
                     <input type="hidden" id="enteredBySup" name="enteredBySup"  value="<?php echo  $this->ion_auth->user()->row()->username;?>" class="form-control form-control-md" autocomplete="off" placeholder="Enter by" readonly >
            
                  <div class="col-md-1 col-form-label  text-default mb-1">
                     Verified:
                  </div>
                  <div class="col-md-5">
                     <select name="selEmpsup_emp" id="selEmpsup_emp"  class="form-control form-control-md">
                        <option value="">SELECT</option>
                     </select>
                  </div>
               </div>
			   <div class="clearfix mb-1">
              	<h5 class="text-success float-left"><i class="fa fa-list"></i> List of Supplies</h5>
					<button type="button" id="btnSearchSupply" class="btn btn-outline-success float-right"><i class="fa fa-search"></i>Search Supplies</button>
				</div>
               <table id="supplyList"  class="table table-bordered table-hovered table-sm table-condensed table-sm row-border display"  width="100%">
                  <thead >
                     <tr>
                        <th></th>
						      <th></th>
                        <th>Description</th>
                        <th>Quantity</th>
						      <th>Priority</th>
                        <th>Remarks</th>
                        <th></th>
                     </tr>
                  </thead>
               </table>
               <input type="hidden" name="supDoco" id="supDoco">
               <input type="hidden" name="supEnccode" id="supEnccode">
               <input type="hidden" name="supHpercode" id="supHpercode" >
               <input type="hidden" name="supformIden" id="supformIden">
            </div>
            <div class="modal-footer">
               <div class="btn-group">
                  <button type="submit" class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-send"></i>&nbsp Submit</button>
                  <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>

<div class="modal" id="modalSupplyList" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-success"><i class="fa fa-syringe"></i> Medical Supplies</h4>
                <table id="supplyData" style="cursor:pointer;" ;
                    class="table table-sm table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Medical Supplies</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-success" id="btnSelectSupp"><i
                            class="fa fa-check"></i>
                        Select</button>
                    <button class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i>
                        Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>