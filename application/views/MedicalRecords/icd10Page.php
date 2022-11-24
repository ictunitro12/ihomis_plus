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
		<?php $this->load->view('MedicalRecords/_encounterDiagnosisTable.php'); ?>
	</div>
</div>

<?php $this->load->view('MedicalRecords/_code_diagnosis_form.php'); ?>

<script>
	const icd11ApiUri = "<?php echo $this->config->item('icd11_api_uri'); ?>";
	const icd11ApiSecure = (1 === <?php echo $this->config->item('icd11_api_secure') ? 1 : 0; ?>);
</script>

<!-- sweetalert2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>

<!-- ICD 11 library -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/who_icd11/1.5.1/icd11ect-1.5.1.css">
<script src="<?php echo base_url() ?>assets/vendors/who_icd11/1.5.1/icd11ect-1.5.1.js"></script>

<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js" defer></script>

<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/icd.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/medicalrecords/icd10.js"></script>

<!-- <script src="<?php echo base_url() ?>assets/scripts/medicalrecords/encounter_diagnosis.js"></script> -->