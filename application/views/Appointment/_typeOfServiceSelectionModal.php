<div class="modal" id="typeOfServiceModal" role="dialog">
    <div class="modal-dialog" role="document">
        <form name="typeOfServiceForm" id="typeOfServiceForm" method="post">
            <div class="modal-content card-accent-success">
                <div class="modal-header">
                    <h2 class="modal-title text-success"><i class="fa fa-calendar"></i> Type Of Service List</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-form-label  text-default mb-1">CHOOSE TYPE OF SERVICE: <i class="fa fa-asterisk text-danger"></i></div>
                            <select class="form-control  col-md-12 mb-1" data-width="100%" name="type_of_service">
                                
                            </select>
                            <!-- <input type="hidden" name="licno" id="licno" /> -->
                            <input type="hidden" name="appointmentType" id="appointmentType" />
                            <input type="hidden" name="appointmentId" id="appointmentId" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="button" class="btn btn-danger btn-lg btn-ladda mr-2 close-type-of-service-modal" data-style="zoom-in"> Close</button>
                    <button type="submit" class="btn btn-primary btn-lg btn-ladda mr-2"> Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/scripts/appointment/type_of_service.js"></script>