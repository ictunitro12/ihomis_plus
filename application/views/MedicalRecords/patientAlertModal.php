<form id="frmAlertDelete" name="frmAlertDelete">
    <input type="hidden" id="delalerthpercode" name="alerthpercode" value="">
    <input type="hidden" id="delalertseq" name="alertseq" value="">
    <div class="modal" id="deleteAlertModal" name="deleteAlertModal" tabindex="-1" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class="fa fa-trash"></i>&nbsp Delete Record?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                    <h2 class="modal-title text-danger"></h2>

                </div>
                <div class="modal-footer ">
                    <div class="btn-group float-right">
                        <button type="submit" class="btn btn-outline-danger btn-inline  btn-ladda"
                            data-style="slide-right"><i class="fa fa-trash"></i> DELETE</button>
                        <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i
                                class="fa fa-close"></i> CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="frmAlert" name="frmAlert" role="form">
    <div class="modal fade" id="patientAlertModal" tabindex="-1" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title text-success"><i class="fa fa-exclamation-triangle"></i>&nbsp Alert </h4>
                    <div class="form-row">
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Datetime:
                        </div>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control-mb" stepup="any"
                                id="alertDate" name="frmalertdate">
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Type of Alert:
                        </div>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb" autocomplete="off" id="frmalertype"
                                name="frmalertype">
                                <option value="">Please Select</option>
                                <option value="01">Allergy</option>
                                <option value="02">Disability</option>
                                <option value="03">Drug</option>
                                <option value="04">Handicaps</option>
                                <option value="05">Impairment</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Alert Details:
                        </div>
                        <div class="col-md-8">
                            <textarea type="text" class="form-control form-control-mb" autocomplete="off"
                                id="frmalertdesc" name="frmalertdesc" placeholder="Alert Details"></textarea>
                        </div>
                        <div class="col-md-4 col-form-label text-default mb-1">
                            Status:
                        </div>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb" autocomplete="off" id="frmstatus"
                                name="frmstatus">
                                <option value="">Select</option>
                                <option value="A">Active</option>
                                <option value="I">Inactive</option>
                            </select>
                        </div>
                        <input type="hidden" id="alerthpercode" name="alerthpercode" value="">
                        <input type="hidden" id="alertseq" name="alertseq" value="">
                        <input type="hidden" id="formType" name="formType">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" name="savefrmAlert" id="savefrmAlert"
                            class="btn btn-outline-success btn-ladda" data-style="slide-right"><i
                                class="fa fa-save"></i>&nbsp SAVE</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i>CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/validation.js"></script>