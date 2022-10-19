<form id="frmReferto" name="frmReferto" class="form">
    <div class="modal" id="refertoModal" role="form">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="form">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title text-success"><i class="fa fa-hospital-o"></i> Referral </h4>
                    <hr>
                    </hr>
                    <div class="row">
                        <div class="col-md-4  border-right">
                            <h5 class=" text-success"><i class="fa fa-list"></i> Details</h5>
                            <div class="form-label text-success mb-1">
                                Date Refer:
                            </div>
                            <input type="datetime-local" class="form-control form-control-lg" autocomplete="off"
                                id="dateRefto" name="dateRefto">
                            <div class="form-label text-success mb-1">
                                Type of Referral:
                            </div>
                            <select name="ReferType" id="ReferType" class="form-control form-control-lg">
                                <option values="">Select</option>
                                <option value="TRANS">Transfer</option>
                                <option value="CONSU">Consultation</option>
                                <option value="DIAGT">Diagnostic Test</option>
                                <option value="OTHER">Others</option>
                            </select>
                            <div class="form-label text-success mb-1">
                                Other type:
                            </div>
                            <input name="ReferOTH" id="ReferOTH" class="form-control form-control-lg" readonly
                                placeholder="Other Referral">
                            <div class="form-label text-success mb-1">
                                Reason for Referral:
                            </div>
                            <select class="form-control form-control-lg" autocomplete="off" id="reftoReas"
                                name="reftoReas">
                                <option value="">Select</option>
                                <option value="NOEQP">No equipment available</option>
                                <option value="NODOC">No doctor available</option>
                                <option value="NOPRO">No procedure available</option>
                                <option value="NOLAB">No laboratory available</option>
                                <option value="NOROM">No room available</option>
                                <option value="SEASO">Seek advise/second opiniion</option>
                                <option value="SESPE">Seek specialized evaluation</option>
                                <option value="SEFTA">Seek futher treatment appropriate to the case</option>
                            </select>
                            <div class="form-label text-success mb-1">
                                Other Reason:
                            </div>
                            <input type="text" name="RefOtherReas" id="RefOtherReas" class="form-control"
                                placeholder="Other Reason">
                            <div class="form-label text-success mb-1">
                                Category:
                            </div>
                            <select class="form-control form-control-lg" autocomplete="off" id="RefCategory"
                                name="RefCategory">
                                <option value="">Select</option>
                                <option value="OP">Outpatient</option>
                                <option value="ER">Emergency</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <h5 class=" text-success"><i class="fa fa-list"></i> Destination</h5>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="form-label text-success mb-1">
                                        Receiving Facility:
                                    </div>
                                    <select name="refFacility" id="refFacility" class="form-control form-control">
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label text-success mb-1">
                                        Philhealth Accreditation Number:
                                    </div>
                                    <input type="text" name="patientpan" id="patientpan"
                                        class="form-control form-control-md" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label text-success mb-1">
                                        Date Call:
                                    </div>
                                    <input type="datetime-local" class="form-control form-control-lg" autocomplete="off"
                                        id="dateRefCall" name="dateRefCall">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label text-success mb-1">
                                        Response:
                                    </div>
                                    <input type="text" name="RefResp" id="RefResp" class="form-control"
                                        placeholder="Response">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Receiving Personnel:
                                    </div>
                                    <input type="text" name="RefReceive" id="RefReceive" class="form-control"
                                        placeholder="Receiving Personnel">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label text-success mb-1">
                                        Designation:
                                    </div>
                                    <input type="text" name="RefDesig" id="RefDesig" class="form-control"
                                        placeholder="Designation">
                                </div>
                            </div>
                            <hr>
                            </hr>
                            <h5 class="text-success"><i class="fa fa-list"></i> Doctor</h5>
                            <div class="form-row  ">
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Referring Provider:
                                    </div>
                                    <select name="RefFrom_doc" id="RefFrom_doc" class="form-control form-control-lg">
                                    </select>
                                </div>
                                <hr>
                                </hr>
                                <div class="col-md-6 border-right">
                                    <div class="form-label text-success mb-1">
                                        Referral Provider:
                                    </div>
                                    <select name="RefTo_doc" id="RefTo_doc" class="form-control form-control-lg">
                                    </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-12  border-top">
                                    <div class="form-label text-success mb-1">
                                        Remarks
                                    </div>
                                    <textarea type="text" name="RefRemarks" id="RefRemarks" class="form-control"
                                        placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="reftoEnccode" id="reftoEnccode">
                    <input type="hidden" name="reftoHpercode" id="reftoHpercode">
                    <input type="hidden" name="reftoformIden" id="reftoformIden">
                    <input type="hidden" name="editReferralDatetime" id="editReferralDatetime">
                    <input type="hidden" name="editReferralType" id="editReferralType">
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="submit" name="btnSaveReferTo" id="btnSaveReferTo"
                            class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i
                                class="fa fa-save"></i> Save</button>
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i
                                class="fa fa-close"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>