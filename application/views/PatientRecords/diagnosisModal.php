<form id="frmDeleteDiag" name="frmDeleteDiag" method="post">
    <div class="modal" id="deleteDiagModal" name="deleteDiagModal" tabindex="-1" role="form">
        <input type="hidden" name="diagenccode" id="diagenccode">
        <input type="hidden" name="diagdatelog" id="diagdatelog">
        <input type="hidden" name="diagformIdenDelete" id="diagformIdenDelete" value="delete">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
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
                    <div class="btn-group float-right">
                        <button type="submit" class="btn btn-outline-danger btn-square btn-ladda"
                            data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i
                                class="fa fa-close"></i> CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmDiagnosis" name="frmDiagnosis" class="form">
    <div class="modal" id="diagnosisModal" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="modal-title text-success"><i class="fa fa-stethoscope"></i> Diagnosis</h2>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Log:
                        </div>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control-mb" autocomplete="off"
                                id="diagDateLog" name="diagDateLog" placeholder="">
                        </div>

                        <div class="col-md-4 col-form-label text-default mb-1">
                            Type of Diagnosis:
                        </div>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb" autocomplete="off" id="diagType"
                                name="diagType">
                                <option value="">Select</option>
                                <option value="ADMDX">Admitting Diagnosis</option>
                                <option value="CLIDI">Clinical Diagnosis</option>
                                <option value="FINDX">Final Diagnosis</option>
                                <option value="WORDX">Interim Diagnosis</option>
                                <option value="OTHER">Other Diagnosis</option>
                                <option value="WODIA">Working Diagnosis</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            ICD 10 Code:
                        </div>
                        <div class="col-md-8">
                            <select multiple name="diagICD_diag[]" id="diagICD_diag"
                                class="form-control form-control mb-1">

                            </select>
                        </div>
                        <br>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Description:
                        </div>
                        <div class="col-md-8">
                            <textarea name="diagICD_desc" id="diagICD_desc" class="form-control form-control mb-1"
                                rows="4"></textarea>
                            <!-- input type="text" name="diagICD_desc" id="diagICD_desc" class="form-control form-control mb-1" -->
                        </div>

                        <div class="col-md-4 col-form-label text-default mb-1">
                            Primary
                        </div>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb" autocomplete="off" id="diagPrime"
                                name="diagPrime">
                                <option value="">Select</option>
                                <option value="Y">YES</option>
                                <option value="N">NO</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Doctor:
                        </div>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb" autocomplete="off" id="diagDoc_doc"
                                name="diagDoc_doc">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="diagEnccode" id="diagEnccode">
                    <input type="hidden" name="diagHpercode" id="diagHpercode">
                    <input type="hidden" name="diagformIden" id="diagformIden">
                    <input type="hidden" name="currentdiagType" id="currentdiagType">
                </div>
                <div class="modal-footer">
                    <div class="btn-group float-right">
                        <button type="submit" name="btnSaveDiag" id="btnSaveDiag"
                            class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i
                                class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i
                                class="fa fa-close"></i>&nbsp;CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>