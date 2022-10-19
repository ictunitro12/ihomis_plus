  <div class="modal" id="referInfoModal" name="referInfoModal" role="form">
		<input type="hidden" id="referralFromLogId" name="referralFromLogId">
		<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
		<div class="modal-body">
		<h4 class="modal-title text-success"> <i class="fa fa-user-circle-o"></i> Referral Information </h4>
			<div class="box-body box-profile" id="referPatientInfo"></div>
			<input type="hidden" name="logID" id="logID">
			<hr>
			<div class="row"><div class="col"><label class="text-default">Date and Time Received:</label><input type="datetime-local" step="1" name="dateReceived" id="dateReceived" class="form-control form-control-mb"></div></div>
		</div>
		<div class="modal-footer">
		<div class="btn-group">
		<button type="button" class="btn btn-outline-success btn-ladda" id="btnConfirm" ><i class="fa fa-thumbs-up"></i> Confirm</button>
		<button class="btn btn-outline-danger btn-ladda" id="btnConfirm" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i> &nbsp Cancel</button>
</div>
		</div>
		</div>
		</div>
</div>
<!--div class="modal" id="modalReferralFromPDF" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centere modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title h4 text-success"><i class="fa fa-file-pdf"></i> Referral Information</div>
				</div>
				<div class="modal-body">
					<iframe id="referralFrom_PDF" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
				</div>
			</div>
		</div>
	</div-->
<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
<script src="<?php echo base_url()?>assets/scripts/referral/referralfrom.js"></script>