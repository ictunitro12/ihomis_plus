<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/select2/css/select2-bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
<script src="<?php echo base_url() ?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
<div class="card card-accent-success with-border">
    <div class="card-body">
        <div class="h3 text text-success card-title"><i class="fa fa-user-plus"></i> Coronavirus Disease (CoViD-19)</div>
        <?php echo ViewCoViD19Form(); ?>

    </div>
</div>
<?php echo ViewSearchPatient(); ?>
<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">
<input name="module" id="module" type="hidden" value="covid19">
<script type="text/javascript">
    $(document).ready(function() {
        $("#PatSearch").modal('show');
        covidWizard();
        $("#PatientImage").prop('src', baseURL + 'assets/img/avatars/none.png');
    });
</script>
<script src="<?php echo base_url() ?>assets/plugin/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/demographics.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/covid19/covid19.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/covid19/covid19_validation.js" type="text/javascript"></script>