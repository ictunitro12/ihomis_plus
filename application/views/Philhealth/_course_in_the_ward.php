<div class="table-responsive mb-3" style="overflow-x: visible; overflow-y: visible;">
    <button type="button" class="btn btn-success mb-2 addDoctorsOrder">Add Doctor's Order</button>
    <table id="courseInTheWardTable" class="table table-sm table-striped table-borderless table-condensed table-hover" width="100%">
        <thead class="thead-dark">
            <tr>
                <th>DATE</th>
                <th>TIME</th>
                <th>DOCTOR'S ORDER</th>
                <th width="20"></th>
                <th width="20"></th>
            </tr>
        </thead>
    </table>
</div>

<div class="modal" id="addDoctorsOrderModal" role="dialog">
    <form id="doctorsOrderForm" method="post">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-header">
                    <h2 class="modal-title text-success"></h2>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="doctors_order_type" />
                    <input type="hidden" id="old_date" />
                    <input type="hidden" id="old_time" />
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Date Take</label>
                            <div class="col-md-9">
                                <input class="form-control form-control-sm" id="dtetake" type="date" name="dtetake" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Time Take</label>
                            <div class="col-md-9">
                                <!--input class="form-control form-control-sm" id="tmetake" type="datetime-local" name="tmetake" required -->
                                <input class="form-control form-control-sm" id="tmetake" type="time" step="1" name="tmetake" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Course In The Ward</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="crseward" name="crseward" rows="4" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="button" class="btn btn-danger btn-lg btn-ladda mr-2 close-modal"> Cancel</button>
                    <button type="submit" class="btn btn-success btn-lg btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Save</button>
                </div>
            </div>
        </div>
    </form>
</div>