<div class="modal" id="certificationOfMemberModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
        <div class="modal-content card-accent-success">
            <form id="certificationOfMemberForm" method="post">
                <div class="modal-header">
                    <h2 class="modal-title text-success">Certification Of Member</h2>
                </div>
                <div class="modal-body">
                    <input class="form-check-input" id="accreno" name="accreno" type="text" hidden>
                    <input class="form-check-input" id="enccode" name="enccode" type="text" hidden>
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="member" name="sign_type" type="radio" value="P">
                                    <label class="form-check-label" for="member">Member signs</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right" for="text-input">Date signed</label>
                            <div class="col-md-7">
                                <input class="form-control form-control-sm" id="member_date_signed" type="date" name="member_date_signed" placeholder="Text">
                            </div>
                        </div>

                        <hr />

                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="representative" name="sign_type" type="radio" value="R">
                                    <label class="form-check-label" for="representative">Representative signs in behalf of the member</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right" for="representative_name">Name of Representative</label>
                            <div class="col-md-7">
                                <input class="form-control form-control-sm" id="representative_name" type="text" name="representative_name" placeholder="Name of Representative" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right" for="represetative_date_signed">Date signed</label>
                            <div class="col-md-7">
                                <input class="form-control form-control-sm" id="represetative_date_signed" type="date" name="represetative_date_signed" placeholder="Text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 col-form-label text-right">Relationship of Representative to Member</label>
                            <div class="col-md-3 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="child" type="radio" value="C" name="relationship" disabled>
                                    <label class="form-check-label" for="child">Child</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="spouse" type="radio" value="S" name="relationship" disabled>
                                    <label class="form-check-label" for="spouse">Spouse</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="parent" type="radio" value="P" name="relationship" disabled>
                                    <label class="form-check-label" for="parent">Parent</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sibling" type="radio" value="I" name="relationship" disabled>
                                    <label class="form-check-label" for="sibling">Sibling</label>
                                </div>
                            </div>

                            <div class="col-md-5"></div>
                            <div class="col-md-7 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="rel_other" type="radio" value="O" name="relationship" disabled>
                                    <label class="form-check-label" for="rel_other">Others, Specify <input class="form-control form-control-sm" id="relationship_other" type="text" name="relationship_other" placeholder="Others" disabled></label>
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
                                    <input class="form-check-input" id="incapacitated" type="radio" value="I" name="reason" disabled>
                                    <label class="form-check-label" for="incapacitated">Incapacitated</label>
                                </div>
                            </div>

                            <div class="col-md-5"></div>
                            <div class="col-md-7 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" id="reas_other" type="radio" value="O" name="reason" disabled>
                                    <label class="form-check-label" for="reas_other">Others<input class="form-control form-control-sm" id="reason_other" type="text" name="reason_other" placeholder="Others" disabled></label>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="thumbmark" name="thumbmark" type="checkbox">
                                    <input type="hidden" name="thumbmark_value" id="thumbmark_value" value="N">
                                    <label class="form-check-label" for="thumbmark">Member/representative is unable to write.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="memberpatient" name="memberpatient" type="checkbox">
                                    <label class="form-check-label" for="memberpatient">Print member information in patient information.</label>
                                    <input type="hidden" name="memberpatient_value" id="memberpatient_value" value="N">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col col-form-label">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" id="memberpin" name="memberpin" type="checkbox">
                                    <label class="form-check-label" for="memberpin">Print member PIN in patient information.</label>
                                    <input type="hidden" name="memberpin_value" id="memberpin_value" value="N">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" class="btn btn-success btn-lg btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Generate Claim Form 1 PDF</button>
                </div>
            </form>
        </div>
    </div>

</div>

<div class="modal" id="cf1Modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
        <div class="modal-content card-accent-success">
            <div class="modal-header">
                <h1 class="modal-title text-success">Claim Form 1</h1>
            </div>
            <div class="modal-body border-success cf1Body">

            </div>
            <div class="modal-footer bg-secondary">
                <button type="button " name="close" class="btn btn-success btn-lg btn-block btn-ladda close-cf1-modal" data-style="slide-right">Close</button>
            </div>
        </div>
    </div>
</div>