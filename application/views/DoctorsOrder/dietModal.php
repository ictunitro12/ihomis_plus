<form name="frmDietOrder" id="frmDietOrder" method="post">
	<div class="modal fade" id="DocOrdDietModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-cutlery"></i>&nbsp;Diet</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-2 col-form-label text-default mb-1">
							Order:
						</div>
						<div class="col-md-10 ">
							<input type="datetime-local" id="dateDietOrd" name="dateDietOrd" class="form-control form-control-mb mb-1" autocomplete="off">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Posted:
						</div>
						<div class="col-md-10">
							<input type="datetime-local" id="dateDietPost" name="dateDietPost" class="form-control form-control-mb mb-1" autocomplete="off">
						</div>

						<div class="col-md-2 col-form-label text-default mb-1">
							Type:
						</div>
						<div class="col-md-10">
							<select name="selDiet" id="selDiet" class="form-control form-control-mb mb-1">
								<option value="">Select</option>
							</select>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							Verified:
						</div>
						<div class="col-md-10">
							<select name="selEmployees" id="selEmployees" class="form-control form-control-mb mb-1">
								<option value="">Select</option>
							</select>
						</div>
						<div class="col-md-2 col-form-label text-default mb-1">
							Ordered:
						</div>
						<div class="col-md-10">
							<select name="selDiet_doc" id="selDiet_doc" class="form-control form-control-mb mb-1">
								<option value="">Select</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class=" btn-group">
						<button type="submit" class="btn btn-outline-success btn-inline btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp;SUBMIT</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>

			</div>
		</div>
		<input type="hidden" name="dietEnccode" id="dietEnccode">
		<input type="hidden" name="dietHpercode" id="dietHpercode">
		<input type="hidden" name="dietformIden" id="dietformIden">
		<input type="hidden" name="docointkey" id="docointkey">
	</div>
</form>

<form name="frmDeleteDiet" id="frmDeleteDiet">
	<input type="hidden" name="deletekey" id="deletekey">
	<input type="hidden" name="dietformIden" id="dietformIden">
	<div class="modal fade" id="DeleteDiet" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp;<span id="diet" name="diet"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>