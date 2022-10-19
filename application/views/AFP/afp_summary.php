<?php echo ViewSearchPatient(); ?>
<div class="card card-accent-success with-border">
    <div class="card-body">
        <form name="frmafp" id="frmafp" enctype="multipart/form-data">
            <?php echo ViewAFPForm(); ?>
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
<script src="<?php echo base_url() ?>assets/scripts/afp/afp.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/afp/afp_validation.js"></script>