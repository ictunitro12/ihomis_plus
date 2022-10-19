<form name="frmRevoke" id="frmRevoke">
	<div class="modal" id="modalRevoke"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
				<h5 class="modal-title text-danger" ><i class="fa fa-exclamation"></i>&nbsp Revoke Room </h5>
					<small class="text text-danger">Note:Are you sure you want to revoke room?.</small>
					<hr class="card card-accent-danger"></hr>
				<div class="row">
					<div class="col-md-12">
						<input type="hidden" name="roomEnccode" id="roomEnccode">
						<input  type="hidden" name="bedcode" id="bedcode" >
						<input  type="hidden" name="roomDatetime" id="roomDatetime" >
						<div class="form-label text-success">Bed:</div>
						<input  type="text" class="form-control-plaintext mb-1"   placeholder="Bed" name="roomBed" id="roomBed" readonly>
						<div class="form-label text-success">Room:</div>
						<input  type="text" class="form-control-plaintext mb-1"  placeholder="Room"  name="roomRoom" id="roomRoom" readonly>	
						<div class="form-label text-success">Ward:</div>
						<input type="text" class="form-control-plaintext mb-1" placeholder="Ward" name="roomWrd" id="roomWrd" readonly>
					</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary"> 
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
					<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>