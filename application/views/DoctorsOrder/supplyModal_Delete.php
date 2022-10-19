<form id="frmDeleteSup" name="frmDeleteSup" method="post">
   <div class="modal" id="deleteSupModal" name="deleteSupModal" tabindex="-1" role="form">
      <input type="hidden" name="delsupDoco" id="delsupDoco">
      <input type="hidden" name="delsupformIden" id="delsupformIden">
      <div class="modal-dialog modal-dialog-centered modal-md" role="form">
         <div class="modal-content">
            <div class="modal-header bg-danger">
			<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="modal-body">
                  <h4>Do you want to proceed?</h4>
               </div>
            </div>
            <div class="modal-footer ">
			<div class=" btn-group">
                    <button type="submit" class="btn btn-outline-danger btn-inline  btn-ladda"
                        data-style="slide-right"><i class="fa fa-trash"></i>Delete</button>
                    <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                            class="fa fa-close"></i>Cancel</button>
                </div>
            </div>
         </div>
      </div>
   </div>
</form>
