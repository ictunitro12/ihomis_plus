<div class="modal" id="csfModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
        <div class="modal-content card-accent-success">
            <form id="csfForm" method="post">
                <div class="modal-header">
                    <h2 class="modal-title text-success">Certification Of Member</h2>
                </div>
                <div class="modal-body">
                    <input class="form-check-input" id="csfaccreno" name="csfaccreno" type="text" hidden>
                    <input class="form-check-input" id="csfenccode" name="csfenccode" type="text" hidden>
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="csfmember" name="csfsign_type" type="radio" value="P">
                                    <label class="form-check-label" for="csfmember">Member signs</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right" for="text-input">Date signed</label>
                            <div class="col-md-7">
                                <input class="form-control form-control-sm" id="csfmember_date_signed" type="date" name="csfmember_date_signed" placeholder="Text">
                            </div>
                        </div>

                        <hr />

                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="csfrepresentative" name="csfsign_type" type="radio" value="R">
                                    <label class="form-check-label" for="csfrepresentative">Representative signs in behalf of the member</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right" for="csfrepresentative_name">Name of Representative</label>
                            <div class="col-md-7">
                                <input class="form-control form-control-sm" id="csfrepresentative_name" type="text" name="csfrepresentative_name" placeholder="Name of Representative" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right" for="csfrepresetative_date_signed">Date signed</label>
                            <div class="col-md-7">
                                <input class="form-control form-control-sm" id="csfrepresetative_date_signed" type="date" name="csfrepresetative_date_signed" placeholder="Text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right">Relationship of Representative to Member</label>
                            <div class="col-md-3 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="csfchild" type="radio" value="C" name="csfrelationship" disabled>
                                    <label class="form-check-label" for="csfchild">Child</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="csfspouse" type="radio" value="S" name="csfrelationship" disabled>
                                    <label class="form-check-label" for="csfspouse">Spouse</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="csfparent" type="radio" value="P" name="csfrelationship" disabled>
                                    <label class="form-check-label" for="csfparent">Parent</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="csfsibling" type="radio" value="I" name="csfrelationship" disabled>
                                    <label class="form-check-label" for="csfsibling">Sibling</label>
                                </div>
                            </div>

                            <div class="col-md-5"></div>
                            <div class="col-md-7 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="csfrel_other" type="radio" value="O" name="csfrelationship" disabled>
                                    <label class="form-check-label" for="csfrel_other">Others, Specify <input class="form-control form-control-sm" id="csfrelationship_other" type="text" name="csfrelationship_other" placeholder="Others" disabled></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right">Reason for Signing in Behalf of the Member</label>
                            <!-- <div class="col-md-3 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="abroad" type="radio" value="Abroad/Out-of-Town" name="reason">
                                    <label class="form-check-label" for="abroad">Abroad/Out-of-Town</label>
                                </div>
                            </div> -->
                            <div class="col-md-4 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="csfincapacitated" type="radio" value="I" name="csfreason" disabled>
                                    <label class="form-check-label" for="csfincapacitated">Incapacitated</label>
                                </div>
                            </div>

                            <div class="col-md-5"></div>
                            <div class="col-md-7 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="csfreas_other" type="radio" value="O" name="csfreason" disabled>
                                    <label class="form-check-label" for="csfreas_other">Others<input class="form-control form-control-sm" id="csfreason_other" type="text" name="csfreason_other" placeholder="Others" disabled></label>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="csfthumbmark" name="csfthumbmark" type="checkbox">
                                    <input type="hidden" name="csfthumbmark_value" id="csfthumbmark_value" value="N">
                                    <label class="form-check-label" for="csfthumbmark">Member/representative is unable to write.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="csfmemberpatient" name="csfmemberpatient" type="checkbox">
                                    <label class="form-check-label" for="csfmemberpatient">Print member information in patient information.</label>
                                    <input type="hidden" name="csfmemberpatient_value" id="csfmemberpatient_value" value="N">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="csfmemberpin" name="csfmemberpin" type="checkbox">
                                    <label class="form-check-label" for="csfmemberpin">Print member PIN in patient information.</label>
                                    <input type="hidden" name="csfmemberpin_value" id="csfmemberpin_value" value="N">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" class="btn btn-success btn-lg btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Generate Claim Signature Form PDF</button>
                </div>
            </form>
        </div>
    </div>

</div>

<div class="modal" id="csfPDFModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
        <div class="modal-content card-accent-success">
            <div class="modal-header">
                <h1 class="modal-title text-success">Claim Signature Form</h1>
            </div>
            <div class="modal-body border-success csfPDFBody">

            </div>
            <div class="modal-footer bg-secondary">
                <button type="button " name="csfclose" class="btn btn-success btn-lg btn-block btn-ladda close-csf-modal" data-style="slide-right">Close</button>
            </div>
        </div>
    </div>
</div>