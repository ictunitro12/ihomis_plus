<form id="frmGenerate" method="post">
	<div class="modal" id="modalGenerate" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
				<div class="h4 modal-title text-success"><i class="fa fa-user"></i> <span id="slipno" class="text-success"></span> </div>
				</div>
				<div class="modal-body">
					<label class="h5 text-success">You want to generated Chargeslip?</label>
					<ul id="events"></ul>
					<input  type="hidden" name="chargeSlip" id="chargeSlip">
					<input  type="hidden" name="enccode" id="enccode">
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button  type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i> Save</button>
						<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
		</div>
</form>
<script src="<?php echo base_url()?>assets/scripts/radiology/_generateslip.js"></script>