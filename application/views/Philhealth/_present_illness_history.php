<form id="present_illness_history_form">
    <div class="row mb-3">
        <div class="col">
            <label for="present_illness_history"><b>Brief History of Present Illness:</b></label>
        </div>
        <div class="col">

            <textarea type="text" class="form-control" id="present_illness_history" name="presentIllness[history]" rows="6"></textarea>

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
<script src="<?php echo base_url() ?>assets/scripts/philhealth/present_illness_history.js"></script>