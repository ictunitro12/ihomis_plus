<form id="frmDeleteDoctor" name="frmDeleteDoctor" method="post">
	<div class="modal" id="deleteDoctorModal" name="deleteDoctorModal" tabindex="-1" role="form">
		<input type="hidden" name="del_docEnccode" id="del_docEnccode">
		<input type="hidden" name="del_doctype" id="del_doctype">
		<input type="hidden" name="del_doc" id="del_doc">
		<input type="hidden" name="docformIdenDelete" id="docformIdenDelete" value="delete">

		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmDoctor" name="frmDoctor" class="form">
	<div class="modal" id="doctorsModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
					<h2 class="modal-title text-success"><i class="fa fa-user-md"></i> Doctor</h2>
					<br>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">
							Doctor:
						</div>
						<div class="col-md-8">
							<select class="form-control form-control-mb" autocomplete="off" id="doc_name" name="doc_doc">
								<option value="">Select</option>

							</select>
						</div>

						<div class="col-md-4 col-form-label text-default mb-1">
							Type:
						</div>
						<div class="col-md-8">
							<select class="form-control form-control-mb" autocomplete="off" id="doctype" name="doctype">
								<option value="">Select</option>
								<option value="ADMIT">Admitting</option>
								<option value="ATTEN">Attending</option>
								<option value="CONSU">Consulting</option>
							</select>
						</div>
					</div>
					<input type="hidden" name="docTime" id="docTime">
					<input type="hidden" name="docEnccode" id="docEnccode">
					<input type="hidden" name="docHpercode" id="docHpercode">
					<input type="hidden" name="docformIden" id="docformIden">
					<input type="hidden" name="up_doc_doc" id="up_doc_doc">
					<input type="hidden" name="up_doctype" id="up_doctype">
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" name="btnSaveDoc" id="btnSaveDoc" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
						<button type="button" class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>