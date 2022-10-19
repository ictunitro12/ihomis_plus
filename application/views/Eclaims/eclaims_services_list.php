<div class="row">
    <div class="col-md-9">
        <?php $this->load->view('EClaims/_eclaims_services_views.php'); ?>
    </div>

    <div class="col-md-3">
        <?php $this->load->view('EClaims/_menu_claims_services.php'); ?>
    </div>
</div>

<!-- start select accreditation modal -->
<?php $this->load->view('EClaims/_selectAccreditationModal.php'); ?>
<!-- end select accreditation modal -->

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">

<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">

<script type="text/javascript">
    const baseURI = $("#base_url").val();

    $(document).ready(function() {

    });
</script>

<script src="<?php echo base_url() ?>assets/public/js/eclaims/eclaims_services.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js" defer></script>