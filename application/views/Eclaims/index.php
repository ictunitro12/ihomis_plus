<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>

<div class="row">
	<div class="col-md-9">
		<?php $this->load->view('EClaims/_userEClaimsTable.php'); ?>
	</div>

	<div class="col-md-3">
		<?php $this->load->view('EClaims/_menuClaims.php'); ?>
	</div>
</div>

<div class="modal" id="electronicTransmittalReceiptModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content card-accent-success">
			<div class="modal-header">
				<h1 class="modal-title text-success">Claim Receipt Map</h1>
			</div>
			<div class="modal-body border-success electronicTransmittalReceiptBody" style="height: 70vh; overflow:hidden;">

			</div>
			<div class="modal-footer bg-secondary">
				<button type="button " name="close" class="btn btn-success btn-lg btn-block btn-ladda close-modal" data-style="slide-right">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- start select accreditation modal -->
<?php $this->load->view('EClaims/_selectAccreditationModal.php'); ?>
<!-- end select accreditation modal -->

<!-- start add attachment modal -->
<?php $this->load->view('EClaims/_attachmentModal.php'); ?>
<!-- end add attachment modal -->

<!-- start eclaim list modal -->
<?php $this->load->view('EClaims/_eClaimsListTableModal.php'); ?>
<!-- end eclaim list modal -->

<!-- start lhio series modal -->
<?php $this->load->view('EClaims/_selectSeriesNumberModal.php'); ?>
<!-- end lhio series modal -->

<!-- start processing modal -->
<?php $this->load->view('EClaims/_processingModal.php'); ?>
<!-- end processing modal -->

<div class="modal" id="previewModal" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content card-accent-success">
			<div class="modal-body">
			
			</div>
			<div class="modal-footer bg-secondary">
				<button type="submit" class="btn btn-success btn-lg btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-send"></i> Select</button>
			</div>
		</div>
	</div>
</div>

<input name="module" id="module" type="hidden" value="<?php echo $module; ?>">
<input name="ehpercode" id="ehpercode" type="hidden">
<input name="enccode" id="enccode" type="hidden">
<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">

<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">

<script type="text/javascript">
	const baseURI = $("#base_url").val();

	$(document).ready(function() {

		jQuery.ajaxSetup({
			beforeSend: function() {
				$('.spinner-grow').show();
			},
			complete: function() {
				$('.spinner-grow').hide();
			},
			success: function() {}
		});

		$(".daterange").daterangepicker({
			locale: {
				format: "MM-DD-YYYY",
			},
		});

		$("#PatientImage").prop('src', 'assets/img/avatars/none.png');
	});
</script>

<!-- sweetalert2 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.min.css">
<script src="<?php echo base_url() ?>assets/vendors/sweetalert2/11.0.18/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js" defer></script>
<!-- script -->
<script src="<?php echo base_url() ?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url() ?>assets/public/js/eclaims/eclaims.js"></script>