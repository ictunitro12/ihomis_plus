<form id="vital_signs_form">
    <div class="row mb-3">
        <div class="col-2">
            Vital Signs:
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-sm btn-success">BP</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control form-control-sm" name="vitalSign[vsbp]" id="vsbp">
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-sm btn-success">HR</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control form-control-sm" name="vitalSign[vspulse]" id="vspulse">
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-sm btn-success">RR</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control form-control-sm" name="vitalSign[vsresp]" id="vsresp">
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button type="button" class="btn btn-sm btn-success">TEMPERATURE</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control form-control-sm" name="vitalSign[vstemp]" id="vstemp">
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
<script src="<?php echo base_url() ?>assets/scripts/philhealth/vital_signs.js"></script>