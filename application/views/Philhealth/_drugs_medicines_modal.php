<div class="modal" id="editDrugsModal" role="dialog">
    <form id="drugsForm" method="post">
        <input type="hidden" id="chargecode" name="chargecode">
        <input type="hidden" id="itemcode" name="itemcode">
        <input type="hidden" id="chargeslipno" name="chargeslipno">
        <input type="hidden" id="chargefrom" name="chargefrom">
        <input type="hidden" id="docointkey" name="docointkey">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content card-accent-success">
                <div class="modal-header">
                    <h2 class="modal-title text-success">Edit Drug Instruction</h2>
                </div>
                <div class="modal-body">
                    <h5 id="description"></h5>
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <div class="col">
                                <label class="col-md-3 col-form-label" for="qtyintake">Quantity Intake</label>
                                <input class="form-control form-control-sm" id="qtyintake" type="number" name="qtyintake" step=".01" required>
                            </div>                           
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <div class="col">
                                <label class="col-md-3 col-form-label" for="uomintake">Intake Unit</label>
                                <select class="selectpicker form-control form-control-sm" id="uomintake" name="uomintake" required>
                                    
                                </select>
                            </div>                            
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <div class="col">
                                <label class="col-md-3 col-form-label" for="time_frequency">Time Frequency</label>
                                <input class="form-control form-control-sm" id="time_frequency" type="number" name="time_frequency" required>
                            </div>                            
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group row">
                            <div class="col">
                                <label class="col-md-3 col-form-label" for="unit_frequency">Frequency Unit</label>
                                <select class="selectpicker form-control form-control-sm" id="unit_frequency" name="unit_frequency" required>
                                    <option value="">Select Unit</option>
                                    <option value="HOU">Hour/s</option>
                                    <option value="DAY">Day/s</option>
                                    <option value="WEK">Week/s</option>
                                    <option value="MON">Months/s</option>
                                    <option value="YER">Year/s</option>
                                    <option value="MIN">Minute/s</option>
                                    <option value="PRN">as needed</option>
                                </select>
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