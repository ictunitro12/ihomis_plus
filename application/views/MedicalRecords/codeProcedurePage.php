<div class="w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<span class="h4  text-success"><i class="<?php echo $icon ?>"></i> <?php echo $header; ?> <small><?php echo $subheader; ?></small></span>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">

				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<?php $this->load->view('MedicalRecords/_codeProcedureTable.php'); ?>
	</div>
</div>

<?php $this->load->view('MedicalRecords/_code_procedure_modal.php'); ?>

<!-- sweetalert2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>

<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js" defer></script>

<script type="text/javascript">
	$(document).ready(function() {
		/* fetchEncounterDiagnosis(); */
	});
</script>

<script src="<?php echo base_url() ?>assets/public/js/medicalrecords/code_procedure.js"></script>
