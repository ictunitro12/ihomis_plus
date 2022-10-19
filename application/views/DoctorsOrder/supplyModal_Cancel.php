<form id="frmCancelOrderSupp" name="frmCancelOrderSupp" method="POST">
    <div class="modal" id="cancelSupplyModal" name="cancelSupplyModal" tabindex="-1" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="modal-title text-danger"> <i class="fa fa-trash"></i>&nbsp Cancel Order ?</h2>
                    <h5> Are you sure do you want to cancel selected order? </h5>
                    <ul class="list-group" id="listDocoSupp"></ul>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Reason:</label>
                            <textarea class="form-control form-contrl-md" name="reasonCancel" id="reasonsuppCancel"
                                placeholder="Reason of cancellation"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <div class=" btn-group">
                        <button type="submit" class="btn btn-outline-success btn-inline  btn-ladda"
                            data-style="slide-right"><i class="fa fa-save"></i> Save</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
