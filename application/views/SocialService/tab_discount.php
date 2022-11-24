<style>
	table#TableDisc.dataTable tbody tr:hover {
		background-color: #80DB88;
	}

	.table-responsive {
		overflow: visible;
	}
</style>
<div class="tab-pane fade" id="disc" role="tabpanel" aria-labelledby="disc-tab">
	<div class="form-row">
		<div class="col-md-6">
			<div class="h4 text text-success">
				<i class="fa fa-percent"></i>&nbsp; Discount/s
			</div>
		</div>
		<div class="col-md-6 mb-2">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button type="button" id="btnDiscount_Add" class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp; Add Discount</button>
			</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table id="TableDisc" class="table table-sm table-bordered" width="100%">
					<thead>
						<tr>
							<th class="never"></th>
							<th class="never"></th>
							<th class="align-middle all">Date</th>
							<th class="align-middle all">Reference No.</th>
							<th class="never"></th>
							<th class="align-middle all">Description</th>
							<th class="align-middle all">Amount</th>
							<th class="align-middle all">Type</th>
							<th class="align-middle all" width="1%">Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalDiscPDF" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content card-accent-success">
			<div class="modal-body">
				<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-file-pdf-o"></i>&nbsp; Discount</h4>
					<a class=" float-right" data-dismiss="modal"><i class="fa fa-close"></i></a>
				</div>
				<iframe id="discountPDF" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
			</div>
		</div>
	</div>
</div>

<form id="frmDiscountDelete" name="frmDiscountDelete" method="post">
	<input type="hidden" name="discEnccodeDelete" id="discEnccodeDelete">
	<input type="hidden" name="discRefnoDelete" id="discRefnoDelete">
	<input type="hidden" name="discKeyDelete" id="discKeyDelete">
	<input type="hidden" name="deleteDiscount" id="deleteDiscount" value="delete">
	<div class="modal fade" id="ModalDiscountDelete" name="ModalDiscountDelete" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="discount" name="discount"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp; DELETE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp; CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDiscount_form" id="frmDiscount_form" method="post">
	<input type="hidden" name="discEnccodeOld" id="discEnccodeOld">
	<input type="hidden" name="discRefnoOld" id="discRefnoOld">
	<input type="hidden" name="discKeyOld" id="discKeyOld">
	<input type="hidden" name="accountNo" id="accountNo">
	<input type="hidden" name="discformIden" id="discformIden">
	<input type="hidden" name="discEnccode" id="discEnccode">
	<input type="hidden" name="discHpercode" id="discHpercode">
	<div class="modal" id="ModalDiscount_modal" name="ModalDiscount_modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-percent"></i>&nbsp;Discount</h5>
					<a class=" float-right" data-dismiss="modal"><i class="fa fa-close"></i></a>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">
							Date:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="dateDisc" id="dateDisc" value="" class="form-control form-control-mb mb-1" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Reference No.:
						</div>
						<div class="col-md-8">
							<input type="text" name="refDisc" id="refDisc" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Reference no." required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Description:
						</div>
						<div class="col-md-8">
							<select type="text" name="typeDisc_disc2" id="typeDisc_disc2" class="form-control form-control-mb mb-1" required></select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Amount:
						</div>
						<div class="col-md-8">
							<input type="text" name="amountDisc" readonly id="amountDisc" class="form-control form-control-mb mb-1" autocomplete="off" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Type:
						</div>
						<div class="col-md-8">
							<select type="text" name="codeType" id="codeType" class="form-control form-control-mb mb-1">
								<option value="">Select</option>
								<option value="P">Percent</option>
								<option value="A">Amount</option>
							</select>
						</div>

						<div class="col-md-4 col-form-label text-default mb-1">
							Source of Discount:
						</div>
						<div class="col-md-8">
							<select type="text" name="sodDIsc" id="sodDIsc" class="form-control form-control-mb mb-1">
								<option value="">Select</option>
								<option value="1">Mandatory</option>
								<option value="2">Financial Assistance/Subsidy</option>
								<option value="3">Hospital</option>
								<option value="4">Others</option>
							</select>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Apply Discount to:
						</div>
						<div class="col-md-8">
							<select type="text" name="atDisc" id="atDisc" class="form-control form-control-mb mb-1">
								<option value="">Select</option>
								<option value="H">Hospital Charges</option>
								<option value="P">Professional Fees</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i>&nbsp; SUBMIT</button>&nbsp;
						<button class="btn btn-outline-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="<?php echo base_url() ?>assets/scripts/socialservice/tab_discount.js"></script>