
<form name="frmEditSup" id="frmEditSup">
<div class="modal" id="modalEditSuppOrd" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-success"><i class="fa fa-syringe"></i> Edit Order</h4>
                <div class="form-row">
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Ordered:
                  </div>
                  <div class="col-md-10">
                     <input type="datetime-local" id="editDateOrd" name="editDateOrd"   class="form-control form-control-md" autocomplete="off"  >
                  </div>
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Posted:
                  </div>
                  <div class="col-md-10">
                     <input type="datetime-local"  id="editDatePost" name="editDatePost" class="form-control form-control-md" autocomplete="off"  >
                  </div>
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Doctor:
                  </div>
                  <div class="col-md-10">
                     <select name="editSup_doc" id="editSup_doc"  class="form-control form-control-md">
                        <option value="">Select</option>
                     </select>
                    </div>
                     <input type="hidden" id="enteredBySup" name="enteredBySup"  value="<?php echo  $this->ion_auth->user()->row()->username;?>" class="form-control form-control-md" autocomplete="off" placeholder="Enter by" readonly >
            
                  <div class="col-md-2 col-form-label  text-default mb-1">
                     Verified:
                  </div>
                  <div class="col-md-10">
                     <select name="editEmp_emp" id="editEmp_emp"  class="form-control form-control-md">
                        <option value="">Select</option>
                     </select>
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-2 col-form-label  text-default mb-1">
                        Item:
                    </div>
                    <div class="col-md-10">
                     <input type="text"  id="itemdesc" name="itemdesc" class="form-control form-control-plaintext" autocomplete="off"  >
                    </div>
                    <div class="col-md-2 col-form-label  text-default mb-1">
                        Quantity:
                    </div>
                    <div class="col-md-10">
                     <input type="number"  id="qtySup" name="qtySup" class="form-control form-control-md" placeholder="Quantity" autocomplete="off"  >
                    </div>
                    <div class="col-md-2 col-form-label  text-default mb-1">
                        Priority:
                    </div>
                    <div class="col-md-10">
                        <select name="prioEdit" id="prioEdit"  class="form-control form-control-md">
                            <option value="">Select</option>
                            <option value="STAT">Urgent</option>
                            <option value="ROUTI">Routine</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-form-label  text-default mb-1">
                        Remarks:
                    </div>
                    <div class="col-md-10">
                     <textarea type="text"  id="remarksEdit" name="remarksEdit" class="form-control form-control-md" placeholder="Remarks" autocomplete="off"  ></textarea>
                    </div>
                 </div>
               </div>
            </div>
            <input type="hidden" id="editdocosup" name="editdocosup">
            <input type="hidden" id="edithpercodesup" name="edithpercodesup">
            <input type="hidden" id="editenccodesup" name="editenccodesup">
            <div class="modal-footer">
                <div class="btn-group">
                    <button type="submit" class="btn btn-outline-success" id="btnSelectSupp"><i
                            class="fa fa-check"></i>
                        Select</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i>
                        Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
                     </form>