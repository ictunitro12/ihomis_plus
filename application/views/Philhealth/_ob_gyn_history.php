<form id="obgyn_history_form">
    <div class="row mb-2">
        <div class="col">
            <label><b>OB/GYN History:</b></label>
        </div>
        <div class="col">
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-success">Gravidity</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control form-control-sm" name="obgyn[obg]" id="obg">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-success">Parity</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control form-control-sm" name="obgyn[obp]" id="obp">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-success">Full Term Pregnancy</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control form-control-sm" name="obgyn[obft]" id="obft">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-success">Premature Pregnancy</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control form-control-sm" name="obgyn[obpt]" id="obpt">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-success">Abortion</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control form-control-sm" name="obgyn[obab]" id="obab">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-success">Living Children</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control form-control-sm" name="obgyn[oblg]" id="oblg">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-success">Last Menstrual Period</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="date" class="form-control form-control-sm" name="plmp" id="plmp" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="checkbox" name="ob_na" id="ob_na" value="NA" /> <label for="ob_na">NA</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($show) && $show == true) { ?>
        <div class="row mb-3">
            <div class="col">
                <div class="form-group form-actions pull-right">
                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                </div>
            </div>
        </div>
    <?php } ?>
</form>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/obgyn_history.js"></script>