<div class="row">
	<div class="col-md-9">
		<?php $this->load->view('EClaims/_eclaims_receipt_table.php'); ?>
	</div>

	<div class="col-md-3">
		<?php $this->load->view('EClaims/_menu_claims_receipt.php'); ?>
	</div>
</div>

<div class="modal" id="claimReceiptModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content card-accent-success">
			<div class="modal-header">
				<h1 class="modal-title text-success">Claim Receipt Map</h1>
			</div>
			<div class="modal-body border-success claimReceiptBody" style="height: 70vh; overflow:hidden;">

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

<input name="base_url" id="base_url" type="hidden" value="<?php echo base_url(); ?>">

<style>
	td.details-control {
		background: url('/assets/img/details_open.png') no-repeat center center;
		cursor: pointer;
	}

	tr.shown td.details-control {
		background: url('/assets/img/details_close.png') no-repeat center center;
	}
</style>

<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css" rel="stylesheet">

<script type="text/javascript">
	const baseURI = $("#base_url").val();

	$(document).ready(function() {
		
	});

</script>

<script src="<?php echo base_url() ?>assets/public/js/eclaims/eclaims_receipt.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js" defer></script>