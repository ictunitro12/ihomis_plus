<form id = "codeProcedureForm" name="codeProcedureForm" class="form">
	<div class="modal" id="codeProcedureModal"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
					<h2 class="modal-title text-success"><i class="fa fa-stethoscope"></i> Diagnosis</h2>
                    <div class="form-row">
                        <div class="col">
                            <span id="diagnosesText"></span>
                        </div>
                    </div>
					<br>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">
							ICD 9 Code:
						</div>
						<div class="col-md-8">
							<select  multiple   name="diagICD_diag[]" id="diagICD_diag" class="form-control form-control mb-1" >

							</select>
						</div>
						<!--br>
						<div class="col-md-4 col-form-label text-default mb-1">
							Description:
						</div>
						<div class="col-md-8">
							<input type="text" name="diagICD_desc" id ="diagICD_desc" class="form-control form-control mb-1">
						</div-->
					</div>
					<input type="hidden" name="diagEnccode" id="diagEnccode" >
					<input type="hidden" name="diagencDate" id="diagencDate">
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">				
						<button type="submit" name="btnSaveDiag" id="btnSaveDiag" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>