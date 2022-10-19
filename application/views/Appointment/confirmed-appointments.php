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
		<?php $this->load->view('Appointment/_confirmedAppointmentsTable.php'); ?>
	</div>
</div>

<?php $this->load->view('Appointment/_doctorSelectionModal.php'); ?>

<?php $this->load->view('Appointment/_patientListModal.php'); ?>

<!-- sweetalert2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url() ?>assets/public/js/appointment/main.js"></script>

<script type="text/javascript">
	const licno = '<?php echo $licno; ?>';

	$(document).ready(function() {
		fetchConfirmedAppointments();
	});
</script>

