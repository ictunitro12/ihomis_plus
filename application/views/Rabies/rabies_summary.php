<?php echo ViewSearchPatient(); ?>
<div class="card card-accent-success with-border">
    <div class="card-body">
        <form name="frmrabies" id="frmrabies" enctype="multipart/form-data">
            <?php echo ViewRabiesForm(); ?>
        </form>
    </div>
</div>
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">

<script type="text/javascript">
    $(document).ready(function() {
        uppercase();
        $("#PatientImage").prop('src', baseURL + 'assets/img/avatars/none.png');
        $("#PatSearch").modal('show');
    });
</script>
<script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/rabies/rabies.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/rabies/rabies_validation.js"></script>