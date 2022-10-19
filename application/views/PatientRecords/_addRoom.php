<form name="frmAddRoom" id="frmAddRoom">
	<div class="modal" id="modalAddRoom" name="modalAddRoom" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="form">
			<div class="modal-content">
				<div class="modal-body">
				<h5 class="modal-title text-success" ><i class="fa fa-plus"></i>&nbsp Add Room </h5>
				<small class="text text-danger">Note:You are adding now a new room for patient.</small>
					<div class="row">
				<div class="col-md-7">
					<div id="addbed"></div>			
				</div>
				<div class="col-md-5">
						<input type="hidden" name="addRoom_enccode" id="addRoom_enccode">
						<input type="hidden" name="addRoom_hpercode" id="addRoom_hpercode">
						<input  type="hidden" name="addRoom_bdintkey" id="addRoom_bdintkey">
						<div class="form-label text-success">Date and Time:</div>
						<input type="datetime-local" step="1" name="addRoom_datetime" id="addRoom_datetime" class="form-control form-control-mb mb-1" >
						<div class="form-label text-success">Bed:</div>
						<input  type="text" class="form-control form-control mb-1"   placeholder="Bed" name="addRoom_Bed" id="addRoom_Bed" readonly>
						<div class="form-label text-success">Room:</div>
						<input  type="hidden" name="addRoom_rmintkey" id="addRoom_rmintkey">
						<input  type="text" class="form-control form-control mb-1"  placeholder="Room"  name="addRoom_Room" id="addRoom_Room" readonly>	
						<div class="form-label text-success">Ward:</div>
						<input  type="hidden" name="addRoom_wardcode" id="addRoom_wardcode">
						<input type="text" class="form-control form-control mb-1" placeholder="Ward" name="addRoom_Ward" id="addRoom_Ward" readonly>
				</div>
			</div>
				</div>
				<div class="modal-footer"> 
					<button type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i></button>
					<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>
