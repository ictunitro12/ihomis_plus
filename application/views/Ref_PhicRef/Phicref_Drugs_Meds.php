<style>

table#DrugsMedTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
	<div class="tab-pane fade" id="drugs" role="tabpanel" aria-labelledby="drugs-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
				<i class="fas fa-pills"></i> DRUGS AND MEDICINES
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
				<button class="btn btn-success btn-md btn-ladda mb-1" onclick="AddDrugsMed()" data-style="zoom-in"><i class="fa fa-plus"> </i>
				</button>
				</div>
			</div>		
		</div>
	<table id="DrugsMedTable" class="table table-sm table-condensed table-bordered"width="100%">
		<thead class="thead-dark" align="center">
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th>DRUGS AND MEDICINES</th>
					<th>AS OF</th>
					<th>COMPENSABLE?</th>
					<th>WITH MULTIPLE COMPONENTS</th>
					<th></th>
					<th width="80px"></th>
				</tr>
		</thead>
	</table>
	</div>

<!-- Add modal -->
<form name="frmPhicRefDrugs" id="frmPhicRefDrugs">
	<div class="modal fade" id="ModalAddDrugs" name="ModalAddDrugs" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp; DRUGS AND MEDICINES <i class="fas fa-pills"></i></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="formIdenDrugs" id="formIdenDrugs">
						<input type="hidden" name="refintkeydrugs" id="refintkeydrugs">
						<input type="hidden" name="reftype" id="reftype" value="DRUGS">
						<div class="col-md-3 col-form-label text-default mb-1">DRUGS AND MEDICINES:</div>
						<div class="col-md-9">
							<select name="selDrugs" id="selDrugs" class="form-control mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default">AS OF:</div>
						<div class="col-md-9">
							<input type="date" class="form-control form-control-mb mb-1" autocomplete="off" id="refdatedrugs" name="refdatedrugs">
						</div>
						<div class="col-md-3 col-form-label text-default">COMPENSABLE?:</div>
						<div class="col-md-9">
							<select name="compense" id="compense" class="form-control mb-1">
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default">WITH MULTIPLE COMPONENTS:</div>
						<div class="col-md-9">
							<select name="mulcom" id="mulcom" class="form-control mb-1">
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
<form name="frmDeleteDrugsMeds" id="frmDeleteDrugsMeds">
	<input type="hidden" name="deleteIDdrugs" id="deleteIDdrugs">
	<input type="hidden" name="deletecodedrugs" id="deletecodedrugs">
	<div class="modal fade" id="DeleteDrugsMeds" role="form">
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

<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/phicrefdrugs.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/addphicrefdrugs.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_phicref/deletedrugsmeds.js"></script>
