<style>

table#Icd10Table.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
	<div class="tab-pane fade show active" id="icd" role="tabpanel" aria-labelledby="icd-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h5 text text-success">
					<i class="fas fa-stethoscope"></i>
					&nbsp ICD 10
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button class="btn btn-success btn-md btn-ladda mb-1" onclick="AddICD10()" data-style="zoom-in"><i class="fa fa-plus"> </i>
					</button>
				</div>
			</div>
		</div>
		<table id="Icd10Table" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
			<thead>
				<tr align="center" class="thead-dark">
					<th></th>
					<th>DIAGNOSIS</th>
					<th width="100px">AS OF</th>
					<th width="80px">COMPENSABLE?</th>
					<th width="90px">CASE TYPE</th>
					<th></th>
					<th></th>
					<th></th>
					<th width="20px"></th>
				</tr>
			</thead>
		</table>
	</div>

	<!-- Add modal -->
	<form name="frmPhicIcd10" id="frmPhicIcd10">
		<div class="modal fade" id="ModalAddIcd10" name="ModalAddIcd10" role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp; ICD 10 <i class="fas fa-stethoscope"></i></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" name="formIden" id="formIden">
							<input type="hidden" name="refintkey" id="refintkey" value="">
							<input type="hidden" name="reftype" id="reftype" value="ICD">
							<input type="hidden" name="diagkey" id="diagkey" value="">
							<div class="col-md-3 col-form-label text-default mb-1">DIAGNOSIS:</div>
							<div class="col-md-9">
								<select name="selIcd10" id="selIcd10" class="form-control mb-1">
								</select>
							</div>
							<div class="col-md-3 col-form-label text-default">AS OF:</div>
							<div class="col-md-9">
								<input type="date" class="form-control form-control-mb mb-1" autocomplete="off" id="refdate" name="refdate">
							</div>
							<div class="col-md-3 col-form-label text-default">COMPENSABLE:</div>
							<div class="col-md-9">
								<select name="compense" id="compense" class="form-control">
									<option value="">Select</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
							</div>
							<div class="col-md-3 col-form-label text-default">CASE TYPE:</div>
							<div class="col-md-9">
								<select name="casetype" id="casetype" class="form-control">
									<option value="">Select</option>
									<option value="ORDIN">Ordinary</option>
									<option value="INTEN">Intensive</option>
									<option value="CATAS">Catastrophic</option>
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
	<form name="frmDeleteIcd10" id="frmDeleteIcd10">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletekey" id="deletekey">
		<div class="modal fade" id="DeleteIcd10" role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h3 class="modal-title text-white"><i class="fa fa-exclamation-triangle"></i>&nbsp <span id="key"></span></h3>
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
	<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/icd10.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/deleteicd10.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/addicd10validation.js"></script>