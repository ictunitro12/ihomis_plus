<div class="row">
    <div class="col-md-9">
        <?php $this->load->view('EClaims/_eclaims_lookup_views.php'); ?>
    </div>

    <div class="col-md-3">
        <?php $this->load->view('EClaims/_menu_claims_lookup.php'); ?>
    </div>
</div>

<!-- start select accreditation modal -->
<?php $this->load->view('EClaims/_selectAccreditationModal.php'); ?>
<!-- end select accreditation modal -->

<!-- start processing modal -->
<?php $this->load->view('EClaims/_processingModal.php'); ?>
<!-- end processing modal -->

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">

<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">

<script type="text/javascript">
    const baseURI = $("#base_url").val();

    $(document).ready(function() {

    });
</script>

<script src="<?php echo base_url() ?>assets/public/js/eclaims/eclaims_lookup.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js" defer></script>