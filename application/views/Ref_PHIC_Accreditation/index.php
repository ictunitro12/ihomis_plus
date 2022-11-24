<style>

table#PhicAccreTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp;<?php echo $header; ?>
					&nbsp; <small><?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddPhicAccre()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add PHIC Accreditation" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add PHIC Accreditation
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="PhicAccreTable" class="table table-sm table-striped  table-bordered table-condensed table-hover " width="100%">
			<thead>
				<tr class="" align="center">
					<th>FACILITY TYPE</th>
					<th>FACILITY NAME</th>
					<th>ACCREDITATION NO.</th>
					<th>VALIDITY</th>
					<th>HOSPITAL</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
					<th>CIPHER KEY</th>
					<th>CLOUD STORAGE USERNAME</th>
					<th>CLOUD STORAGE PASSWORD</th>
					<th>PHIC CLOUD STORAGE URL</th>
					<th>STATUS</th>
					<th class="never"></th>
					<th class="never"></th>
					<th width="20px"></th>
				</tr>
			</thead>
		</table>
	</div>
</div>


<form name="frmPhicAccre" id="frmPhicAccre">
	<div class="modal fade" id="ModalAddPhicAccre" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $header; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> FACILITY TYPE:</div>
						<div class="col-md-8">
							<select name="pfacility" id="pfacility" class="form-control mb-1" required>
								<option value="HOSP">HOSPITAL</option>
								<option value="DOTS">TB-DOTS FACILITY</option>
								<option value="ABTC">ANIMAL BITE TREATMENT CENTER</option>
								<option value="MCPP">MATERNITY CARE PACKAGE PROVIDER</option>
								<option value="PCBP">PRIMARY CARE BENEFIT PROVIDER</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">FACILITY NAME:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="pfacilityname" name="pfacilityname" placeholder="" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> ACCREDITATION:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="paccreno" name="paccreno" placeholder="Accreditation Number" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">VALIDITY:</div>
						<div class="col-md-8">
							<input type="date" class="form-control form-control-mb mb-1" autocomplete="off" id="validity" name="validity" placeholder="" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> PMCC:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="phospitalcode" name="phospitalcode" placeholder="" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">USERNAME:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="pusername" name="pusername" placeholder="">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">PASSWORD:</div>
						<div class="col-md-8">
							<input type="password" class="form-control form-control-mb mb-1" autocomplete="off" id="ppassword" name="ppassword" placeholder="">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">CIPHER KEY:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="cipherkey" name="cipherkey" placeholder="">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">CLOUD STORAGE USERNAME:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="pcsausername" name="pcsausername" placeholder="">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">CLOUD STORAGE PASSWORD:</div>
						<div class="col-md-8">
							<input type="password" class="form-control form-control-mb mb-1" autocomplete="off" id="pcsapassword" name="pcsapassword" placeholder="">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">CLOUD STORAGE URL:</div>
						<div class="col-md-8">
							<select name="selCloudUrl" id="selCloudUrl" class="form-control mb-1">
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">STATUS:</div>
						<div class="col-md-8">
							<select name="pstatus" id="pstatus" class="form-control">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>&nbsp;
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>

			</div>
		</div>
	</div>
</form>

<!--deleter modal-->
<form name="frmDelete" id="frmDelete">
	<input type="hidden" name="deleteID" id="deleteID">
	<input type="hidden" name="deletecode" id="deletecode">
	<div class="modal fade" id="DeleteModal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="desc" name="desc"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i> DELETE</button>&nbsp;
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!--end -->
<script src="<?php echo base_url() ?>assets/scripts/ref_phicaccreditation/phicaccreditation.js"></script>
<script src="<?php echo base_url()
				?>assets/scripts/ref_phicaccreditation/ref_phicaccreditation_validation.js"></script>
<script src="<?php echo base_url()
				?>assets/scripts/ref_phicaccreditation/delete.js"></script>