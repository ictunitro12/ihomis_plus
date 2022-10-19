<form id="frmFilmPic" name="frmFilmPic" method="post">
    <div class="modal fade" id="modalFilmPicture" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content card-accent-success">
                <div class="modal-body">
                    <h2 class="modal-title text-success"> <i class="fa fa-picture"></i>Film Picture</h2>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Log:
                        </div>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control-mb" autocomplete="off"
                                step="1" id="filmEntryDateLog" name="filmEntryDateLog">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="btnSave" id="btnSave" class="btn btn-success btn-inline  btn-ladda "
                        data-style="slide-right"><i class="fa fa-save"></i>
                    </button>
                    <button class="btn btn-danger btn-ladda" data-style="zoom-in" id="btnCancelFilmEntry"><i
                            class="fa fa-close"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>