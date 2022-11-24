<style>
	table#TablePromi.dataTable tbody tr:hover {
		background-color: #80DB88;
	}

	.table-responsive {
		overflow: visible;
	}
</style>
<div class="tab-pane fade" id="promi" role="tabpanel" aria-labelledby="promi-tab">
	<div class="form-row">
		<div class="col-md-6">
			<div class="h4 text text-success">
				<i class="fa fa-file"></i>&nbsp; Promisorry Note
			</div>
		</div>
		<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button type="button" id="btnPromissory_Add" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp; Add Promisorry Note</button>
			</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table id="TablePromi" class="table table-sm table-bordered" width="100%">
					<thead>
						<tr>
							<th class="never"></th>
							<th class="never"></th>
							<th class="align-middle all">Number</th>
							<th class="align-middle all">Date</th>
							<th class="align-middle all">Name of the Signatory</th>
							<th class="align-middle all">First Due Date</th>
							<th class="align-middle all">First Due Amount</th>
							<th class="never"></th>
							<th class="never"></th>
							<th class="never"></th>
							<th class="never"></th>
							<th class="align-middle all" width="1%">Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalPromiPDF" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content card-accent-success">
			<div class="modal-body">
				<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-file-pdf-o"></i>&nbsp; Promisorry Note</h4>
					<a class=" float-right" data-dismiss="modal"><i class="fa fa-close"></i></a>
				</div>
				<iframe id="promiountPDF" type="application/pdf" frameborder="2" width="100%" height="850px"></iframe>
			</div>
		</div>
	</div>
</div>

<form id="frmPromisorryDelete" name="frmPromisorryDelete" method="post">
	<input type="hidden" name="promiEnccodeDelete" id="promiEnccodeDelete">
	<input type="hidden" name="deletePromisorry" id="deletePromisorry" value="delete">
	<div class="modal fade" id="ModalPromisorryDelete" name="ModalPromisorryDelete" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="prominumber" name="prominumber"></span>
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

<form name="frmPromissory" id="frmPromissory" method="post">
	<input type="hidden" name="promiformIden" id="promiformIden">
	<input type="hidden" name="promiEnccode" id="promiEnccode">
	<input type="hidden" name="promiHpercode" id="promiHpercode">
	<input type="hidden" name="promisecode" id="promisecode">
	<div class="modal" id="ModalPromisorry_modal" name="ModalPromisorry_modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-file"></i>&nbsp; Promisorry Note</h5>
					<a class=" float-right" data-dismiss="modal"><i class="fa fa-close"></i></a>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">
							Number:
						</div>
						<div class="col-md-8">
							<input type="text" name="prominum" id="prominum" class="form-control form-control-mb mb-1" placeholder="Promissory Note Number" required readonly>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Date:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="datePromi" id="datePromi" class="form-control form-control-mb mb-1" required>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Name of the signatory:
						</div>
						<div class="col-md-8">
							<textarea name="namesign" id="namesign" class="form-control form-control-mb mb-1" autocomplete="off" placeholder="Name of the signatory" required></textarea>
						</div><br>
						<div class="col-md-4 col-form-label  text-default mb-1">
							First due date:
						</div>
						<div class="col-md-8">
							<input type="date" name="payfirst" id="payfirst" class="form-control form-control-mb mb-1" required>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							First due amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="payamountfirst" id="payamountfirst" class="form-control form-control-mb mb-1" autocomplete="off" required>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Second due date:
						</div>
						<div class="col-md-8">
							<input type="date" name="paysecond" id="paysecond" class="form-control form-control-mb mb-1">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Second due amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="payamountsecond" id="payamountsecond" class="form-control form-control-mb mb-1" autocomplete="off">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Third due date:
						</div>
						<div class="col-md-8">
							<input type="date" name="paythird" id="paythird" class="form-control form-control-mb mb-1">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Third due amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="payamountthird" id="payamountthird" class="form-control form-control-mb mb-1" autocomplete="off">
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

<script src="<?php echo base_url() ?>assets/scripts/socialservice/tab_promissory.js"></script>