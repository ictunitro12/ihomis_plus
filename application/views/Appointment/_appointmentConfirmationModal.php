<div class="modal" id="appointmentConfirmationModal" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <form name="appointmentConfirmationForm" id="appointmentConfirmationForm" method="post">
            <div class="modal-content card-accent-success">
                <div class="modal-header">
                    <h2 class="modal-title text-success"><i class="fa fa-calendar"></i> Appointment Confirmation</h2>
                    <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status">Select Confirmation Satus: <i class="fa fa-asterisk text-danger"></i></label>
                        <select class="form-control col-md-12 mb-1" data-width="100%" name="status" id="status" required>
                            <option value="null"></option>
                            <option value="CONFIRMED">CONFIRM</option>
                            <option value="DECLINED">DECLINE</option>
                            <option value="CANCELLED">CANCEL</option>
                        </select>
                    </div>

                    <div class="form-group typeOfServiceGroup" style="display: none;">
                        <label for="type_of_service">Select Type Of Service: <i class="fa fa-asterisk text-danger"></i></label>
                        <select class="form-control" id="type_of_service" name="type_of_service"></select>
                    </div>

                    <div class="form-group remarksGroup" style="display: none;">
                        <label for="remarks">Remarks: <i class="fa fa-asterisk text-danger"></i></label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                    </div>

                    <div class="row calendarGroup" style="display: none;">
                        <div class="col-12">
                            <div class="alert alert-info" role="alert">
                                <div class="form-group row mb-0">
                                    <label for="selectedDate" class="col-sm-2 col-form-label font-weight-bolder">Selected Date:</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="selectedDate">
                                    </div>
                                </div>
                            </div>

                            <div class="w-100 h-100" id="calendar"></div>
                            <div class="w-full p-2">
                                <div>
                                    <span class="d-inline-block bg-success rounded-circle" style="width:1rem; height:1rem;"></span>
                                    <span class="ml-2">Available</span>
                                </div>
                                <div>
                                    <span class="d-inline-block bg-danger rounded-circle" style="width:1rem; height:1rem;"></span>
                                    <span class="ml-2">Booked / Fully Booked</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="appointmentType" id="appointmentType" />
                    <input type="hidden" name="appointmentId" id="appointmentId" />
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="button" class="btn btn-danger btn-lg btn-ladda mr-2 close-appointment-confirmation-modal" data-style="zoom-in"> Close</button>
                    <button type="submit" class="btn btn-primary btn-lg btn-ladda mr-2"> Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/scripts/appointment/type_of_service.js"></script>