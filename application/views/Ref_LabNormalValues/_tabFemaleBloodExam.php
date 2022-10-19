<div class="tab-pane fade" id="FemaleBloodExam" role="tabpanel" aria-labelledby="femalebldexam-tab">
	<div class="row">
		<div class="col-md-8">
			<div class="h5 text text-success">
				<i class="fa fa-tint"></i>
				&nbsp; BLOOD EXAMINATION (<i class="fa fa-female text-danger"></i> Female)
			</div>
		</div>
		<div class="col-md-4">
			<div class="btn-group pull-right" role="group" aria-label="">
			<button onclick="AddBldexam_f()" class="btn btn-outline-success btn-md btn-ladda mb-1" data-style="zoom-in" data-original-title="Add Blood Chemistry" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add</button>
			</div>
		</div>
	</div>
	<table id="bldexamfemale_table" class="table table-sm table-condensed table-bordered" width="100%">
		<thead>
			<tr align="center">
				<th>id</th>
				<th>Description</th>
				<th>Normal Value Male</th>
				<th>Sex</th>
				<th>Date</th>
				<th width="20px"></th>
			</tr>
		</thead>
	</table>
</div>
<!-- form modal -->
<form id="frmBloodExamfemale" method="post">
	<div class="modal" id="ModalAddBldexam_f" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-plus"></i>Add Blood Examination</div>
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<input type="hidden" name="addID_f" id="addID_f" value="">
						<div class="col-md-4">
							<label class="col-form-label">ID :</label>
						</div>
						<div class="col-md-8">
							<input type="text" id="idbldexam_f" name="idbldexam_f" class="form-control form-control-md mb-1" readonly />
						</div>
						<div class="col-md-4">
							<label class="col-form-label">Description :</label>
						</div>
						<div class="col-md-8">
							<input type="text" id="description_f" name="description_f" class="form-control form-control-md mb-1" autocomplete="" />
						</div>
						<div class="col-md-4">
							<label class="col-form-label">Normal Value :</label>
						</div>
						<div class="col-md-8">
							<input type="text" id="normalval_f" name="normalval_f" class="form-control form-control-md mb-1" autocomplete="" />
						</div>
						<div class="col-md-4">
							<label class="col-form-label">Sex :</label>
						</div>
						<div class="col-md-8">
							<select id="sexbldexam_f" name="sexbldexam_f" class="form-control form-control-md mb-1">
								<option id="selbldexamm" value="M">Male</option>
								<option id="selbldexamf" value="F">Female</option>
								<option id="selbldexamb" value="B">Both</option>
							</select>
						</div>
						<div class="col-md-4">
							<label class="col-form-label">Date :</label>
						</div>
						<div class="col-md-8">
							<input type="datetime-local" id="date_created_f" name="date_created_f" class="form-control form-control-md" autocomplete="" />
						</div>

					</div>

				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="btnSave" id="btnSave" class="btn btn-outline-success btn-block" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<!--Delete modal -->
<form name="frmDeleteBldexam_f" id="frmDeleteBldexam_f">
	<input type="hidden" name="formID_f" id="formID_f">
	<input type="hidden" name="deleteid_f" id="deleteid_f">
	<div class="modal fade" id="DeleteBldexam_f" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to Deleted?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>