<form id="frmDeletePres" name="frmDeletePres" method="post">
<div class="modal" id="deletePresModal" name="deleteExamModal" tabindex="-1" role="form">
    <div class="modal-dialog modal-dialog-centered modal-md" role="form">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
                <h5> Are you sure do you want to delete this record? </h5>
                <input type="hidden" name="delPresDoco" id="delPresDoco">
                <input type="hidden" name="delpresformIden" id="delpresformIden">
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
