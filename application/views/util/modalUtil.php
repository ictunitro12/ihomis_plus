<form name ="frmDelete" id="frmDelete"  method="post">
		<div class="modal fade" id="Modal_delete" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white" ><i class="fa fa-trash"></i>&nbsp <span id="Info_Delete"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
					<input type="text" name="delformIden" id="delformIden">
					<input type="text" name="delID" id="delID">
				</div>
				<div class="modal-footer bg-secondary">
				<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
				</div>
			</div>
		</div>
	</form>
