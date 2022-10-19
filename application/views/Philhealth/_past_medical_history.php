<form id="past_medical_history_form">
    <div class="row mb-3">
        <div class="col">
            <label for="present_illness_history"><b>Patient Past Medical History:</b></label>
        </div>
        <div class="col">

            <textarea type="text" class="form-control" id="past_medical_history" name="pastMedical[history]" rows="6"></textarea>

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
<script src="<?php echo base_url() ?>assets/scripts/philhealth/past_medical_history.js"></script>