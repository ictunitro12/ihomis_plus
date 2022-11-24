<style>
	table#SupplierTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header; ?>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddSupplier()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Supplier" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Supplier
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body table-responsive">
		<table id="SupplierTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="">
					<th width="50px">Code</th>
					<th>Suppliers Name</th>
					<th>Owners Name</th>
					<th>Address</th>
					<th>Contact Person</th>
					<th>Telephone</th>
					<th>Telephone Number</th>
					<th>Fax Number</th>
					<th>Email Address</th>
					<th>Tax Identification Number</th>
					<th>VAT</th>
					<th>Status</th>
					<th width="50px">Actions</th>
				</tr>
			</thead>
		</table>
	</div>
</div>


<form name="frmSupplier" id="frmSupplier">
	<div class="modal fade" id="ModalAddSupplier" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
		<div class="modal-dialog modal-dialog-centered " role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="code" name="code" placeholder="Code" readonly="" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i> Name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="name" name="name" placeholder="Supplier name" maxlength="100" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Owners Name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="owner" name="owner" placeholder="Owners Name" maxlength="100">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Address:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="addr" name="addr" placeholder="Address" maxlength="100">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"> Telephone:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="telno" name="telno" placeholder="Telephone" maxlength="7">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"> Telephone No:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="telno2" name="telno2" placeholder="Telephone No" maxlength="7">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"> Local No:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="localno" name="localno" placeholder="Local No" maxlength="20">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"> Fax Number:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="faxno" name="faxno" placeholder="Fax Number" maxlength="7">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Email Address:</div>
						<div class="col-md-9">
							<input type="email" class="form-control form-control-md mb-1" autocomplete="off" id="email" name="email" placeholder="Email Address" maxlength="20">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">TIN:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="tax" name="tax" placeholder="Tax Identification Number" maxlength="20">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">VAT:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" autocomplete="off" id="vat" name="vat" placeholder="VAT" maxlength="20">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</form>
<!--ALTER TABLE `hospital_dbo`.`hsupplier` MODIFY COLUMN `suppemail` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL;
		//inupdate ko po yung sa email-->
<form name="frmDeleteSupplier" id="frmDeleteSupplier">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">


	<div class="modal fade" id="DeleteSupplier" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span id="desc" name="desc" class="text-white"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer ">
					<button type="submit" class="btn btn-outline-danger btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp;DELETE</button>
					<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="<?php echo base_url() ?>assets/scripts/ref_supplier/ref_supplier_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_supplier/delete.js"></script>


<script type="text/javascript">
	$(function() {
		SupplierList();
		var suppcode = encodeURIComponent(encodeURIComponent(suppcode));
		var suppname = encodeURIComponent(encodeURIComponent(suppname));

	});

	function SupplierList() {
		var data = new Object();
		data.id = "SupplierTable";
		data.link = "<?php echo site_url('Ref_Supplier/SupplierList'); ?>";
		data.type = "POST";
		data.coldef = [{
				targets: 11,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check  text-success"></i>&nbsp Active';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
							break;
						default:
							return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
				orderable: false
			},


		];
		loadTable(data);
	}
</script>