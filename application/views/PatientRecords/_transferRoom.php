<form name="frmTransferRoom" id="frmTransferRoom" >
	<div class="modal" id="modalTransfer" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
		<div   class="modal-body">
		<div class="h4 modal-title text-success">
		<i class="fa fa-barcode "></i> &nbsp 
		Room 
		</div>
		<div class="row">
				<div class="col-md-7 border-right">
					<div id="bedlist"></div>			
				</div>
				<div class="col-md-5">
					<input type="hidden" name="rmEnccode" id="rmEnccode">
					<input type="hidden" name="rmHpercode" id="rmHpercode">
					<input type="hidden" name="patRoomSex" id="patRoomSex">
					<input type="hidden" name="patOldBed" id="patOldBed">
						<div class="form-label text-success">Date and Time:</div>
						<input type="datetime-local" step="1" name="tran_datetime" id="tran_datetime" class="form-control form-control-mb mb-1" >
						<input  type="hidden" name="tran_bdintkey" id="selBed" >
						<label class="form-label  text-success">Bed:</label>
						<input  type="text" class="form-control form-control mb-1"   placeholder="Bed" name="tran_Bed" id="Bed" required readonly>
						<input  type="hidden"  name="tran_rmintkey" id="selRoom" readonly>
						<label class="form-label  text-success">Room:</label>
						<input  type="text" class="form-control form-control mb-1"  placeholder="Room"  name="tran_Room" id="Room" required readonly>	
						<input type="hidden"  name="tran_wardcode" id="selWar">
						<label class="form-label  text-success">Ward:</label>
						<input type="text" class="form-control form-control mb-1" placeholder="Ward" name="tran_Ward" id="Ward"  required readonly>
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


