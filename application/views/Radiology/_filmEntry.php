<form id="frmFilmEntry" name="frmFilmEntry" method="post">
    <div class="modal fade" id="modalfilmEntry" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content card-accent-success">
                <div class="modal-body">
                    <div class="modal-title text-success h4"> <i class="fa fa-check"></i>Film Entry</div>
                    <br>
                    <div class="form-row">
                        <input type="hidden" class="form-control form-control-mb" autocomplete="off"
                            id="filmEntrydocointkey" name="filmEntrydocointkey">
                        <input type="hidden" class="form-control form-control-mb" autocomplete="off"
                            id="filmEntryenccode" name="filmEntryenccode">
                        <input type="hidden" class="form-control form-control-mb" autocomplete="off"
                            id="filmEntrycaseno" name="filmEntrycaseno">
                        <input type="hidden" class="form-control form-control-mb" autocomplete="off"
                            id="filmEntryhpercode" name="filmEntryhpercode">
                        <input type="hidden" class="form-control form-control-mb" autocomplete="off"
                            id="filmEntryproccode" name="filmEntryproccode">
                        <input type="hidden" class="form-control form-control-mb" autocomplete="off"
                            id="filmEntryFormIden" name="filmEntryFormIden">
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Log:
                        </div>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control-mb" autocomplete="off"
                                step="any" id="filmEntryDateLog" name="filmEntryDateLog">
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Type:
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" id="filmEntryType" name="filmEntryType">
                                <option value="">Type of Film</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="UTZ">UTZ</option>
                                <option value="NA">NA</option>
                                <option value="CT">CT</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Consumed:
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control form-control-mb" autocomplete="off" value="1"
                                id="filmEntryConsumed" name="filmEntryConsumed">
                        </div>

                        <div class="col-md-4 col-form-label text-default mb-1">
                            Spoiled:
                        </div>
                        <div class="col-md-8">
                            <input type="number" class="form-control form-control-mb" autocomplete="off" value="0"
                                id="filmEntrySpoiled" name="filmEntrySpoiled">
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Entered By:
                        </div>
                        <div class="col-md-8">
                            <select name="entry_emp" id="entry_emp" class="form-control">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i> Save</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

