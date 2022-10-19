<form id="frmDeleteprogressnotes" name="frmDeleteprogressnotes">
    <input type="hidden" id="delprogressnotesEnccode" name="delprogressnotesEnccode">
    <input type="hidden" id="delprogressdate" name="delprogressdate">
    <input type="hidden" id="progressnotesformIdenDelete" name="progressnotesformIdenDelete" value="delete">
    <div class="modal fade" id="deleteprogressnotesModal" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="delnamepn"></span></h5>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer ">
                    <div class="btn-group float-right">
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>&nbsp;
                        <button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmprogressnotes" name="frmprogressnotes" class="form">
    <div class="modal" id="progressnotesModal" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title text-white"><i class="fa fa-list"></i> Progress Notes</h4>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-3 col-form-label mb-1">Date Log: </div>
                        <div class="col-md-9">
                            <input type="datetime-local" class="form-control mb-1" autocomplete="off" id="progressdate" name="progressdate" readonly>
                        </div>
                        <div class="col-md-3 col-form-label mb-1">Progress type: </div>
                        <div class="col-md-9">
                            <select class="form-control mb-1" autocomplete="off" id="progtype" name="progtype">
                                <option value="">Select</option>
                                <option value="CONSU">Consultations</option>
                                <option value="COMPL">Complications</option>
                                <option value="CONSW">Conditions of surgical wounds</option>
                                <option value="DEVIN">Development of infection</option>
                                <option value="RMSUD">Removal of sutures and drains</option>
                                <option value="CSTSP">Use of casts or splints</option>
                                <option value="OTHER">Others</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-form-label mb-1">Details: </div>
                        <div class="col-md-9">
                            <textarea class="form-control mb-1" autocomplete="off" id="progrem" name="progrem" placeholder="Details"></textarea>
                        </div>
                        <div class="col-md-3 col-form-label mb-1">Doctor: </div>
                        <div class="col-md-9">
                            <select class="form-control mb-1" autocomplete="off" id="doc_name" name="doc_doc">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="progressnotesEnccode" id="progressnotesEnccode">
                    <input type="hidden" name="progressnotesHpercode" id="progressnotesHpercode">
                    <input type="hidden" name="progressnotesformIden" id="progressnotesformIden">
                </div>
                <div class="modal-footer">
                    <div class="btn-group float-right">
                        <button type="submit" id="btnSaveprogressnotes" name="btnSaveprogressnotes" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>