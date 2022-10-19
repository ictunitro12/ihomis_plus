<style>

table#ExamStdTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
<div class="tab-pane fade" id="exam" role="tabpanel" aria-labelledby="exam-tab">
	<div class="row">
		<div class="col-md-6">
			<div class="h4 text text-success">
				<i class="fas fa-diagnoses"></i>
				&nbsp EXAM-STD CODE
			</div>
		</div>
		<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button class="btn btn-success btn-md btn-ladda mb-1" onclick="AddExamStd()" data-style="zoom-in"><i class="fa fa-plus"> </i>
				</button>
			</div>
		</div>
	</div>
	<table id="ExamStdTable" class="table table-sm table-striped  table-bordered table-condensed table-hover" width="100%">
		<thead>
			<tr align="center" class="thead-dark">
				<th></th>
				<th></th>
				<th>EXAMINATION</th>
				<th>AS OF</th>
				<th style="column-width:102px;">COMPENSABLE?</th>
				<th></th>
				<th></th>
				<th width="10%"></th>
			</tr>
		</thead>
	</table>
</div>

<!-- Add modal -->
<form name="frmPhicExamstd" id="frmPhicExamstd">
	<div class="modal fade" id="ModalAddExam" name="ModalAddExam" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp; EXAM - STD <i class="fas fa-diagnoses"></i></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="formIdenexam" id="formIdenexam">
						<input type="hidden" name="refintkeys" id="refintkeys">
						<input type="hidden" name="reftype" id="reftype" value="EXAM">
						<div class="col-md-3 col-form-label text-default mb-1">EXAMINATION:</div>
						<div class="col-md-9">
							<select name="selExamstd" id="selExamstd" class="form-control mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default">AS OF:</div>
						<div class="col-md-9">
							<input type="date" class="form-control form-control-mb mb-1" autocomplete="off" id="refdates" name="refdates">
						</div>
						<div class="col-md-3 col-form-label text-default">COMPENSABLE:</div>
						<div class="col-md-9">
							<select name="compense" id="compense" class="form-control">
								<option value="">Select</option>
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
					<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<!--deleter modal-->
<form name="frmDeleteExamstd" id="frmDeleteExamstd">
	<input type="hidden" name="deleteIDexam" id="deleteIDexam">
	<input type="hidden" name="deletecodeexam" id="deletecodeexam">
	<div class="modal fade" id="DeleteExamstd" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h3 class="modal-title text-white"><i class="fa fa-exclamation-triangle"></i></h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/examstd.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/deleteexamstd.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/addexamstdvalidation.js"></script>