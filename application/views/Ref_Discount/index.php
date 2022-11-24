<style>
	table#DiscountTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddDiscount()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Discount
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="DiscountTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="align-middle all">Code</th>
						<th class="align-middle all">Description</th>
						<th class="align-middle all">Discount Type</th>
						<th class="align-middle all">Discount Amount</th>
						<th class="align-middle all">Currency</th>
						<th class="align-middle all">Unit of Measure</th>
						<th class="align-middle all">Effectivity Date</th>
						<th class="align-middle never">Date </th>
						<th class="align-middle all">Status</th>
						<th class="align-middle never"></th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<form name="frmDiscount" id="frmDiscount">
	<input type="hidden" name="formIden" id="formIden">
	<input type="hidden" name="intkey" id="intkey" onchange="intdisckey();">
	<div class="modal fade" id="ModalAddDiscount" role="form">
		<div class="modal-dialog modal-dialog-centered " role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp;<?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onchange="intdisckey();" id="code" name="code" placeholder="Code" readonly="" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Description:</div>
						<div class="col-md-9">
							<textarea class="form-control form-control-mb mb-1" autocomplete="off" id="name" name="name" placeholder="Description" maxlength="30" required></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Discount Type:</div>
						<div class="col-md-9">
							<select name="discountype" id="discountype" class="form-control form-control-mb mb-1">
								<option value="">Discount Type</option>
								<option value="P">Percent</option>
								<option value="A">Amount</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Discount Amount:</div>
						<div class="col-md-9">
							<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="amt" name="amt" placeholder="Disount Amount">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Currency:</div>
						<div class="col-md-9">
							<select name="currency" id="currency" class="form-control form-control-mb mb-1">
								<option value="PESO">Peso</option>
								<option value="YEN">Yen</option>
								<option value="DOLLA">Dollar</option>
								<option value="OTHER">Others</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit of Measure:</div>
						<div class="col-md-9">
							<select name="selUnitMeasure" id="selUnitMeasure" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Effectivitiy date:</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" onchange="intdisckey();" id="dteasof" name="dteasof" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control form-control-mb mb-1">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SUBMIT</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteDiscount" id="frmDeleteDiscount">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<div class="modal fade" id="DeleteDiscount" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="desc" name="desc"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Do you want to proceed?</h5>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp;DELETE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="<?php echo base_url() ?>assets/scripts/ref_discount/ref_discount_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_discount/delete.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script type="text/javascript">
	$(function() {
		DiscountList();
		var disccode = encodeURIComponent(encodeURIComponent(disccode));
		var discdesc = encodeURIComponent(encodeURIComponent(discdesc));
	});

	function DiscountList() {
		var data = new Object();
		data.id = "DiscountTable";
		data.link = "<?php echo site_url('Ref_Discount/DiscountList'); ?>";
		data.type = "POST";
		data.coldef = [{
				targets: 2,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'P':
							return 'Percent';
							break;
						case 'A':
							return 'Amount';
							break;
						default:
							return '';
					}
				},
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
				orderable: false,

			},

			{
				targets: 4,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'PESO':
							return 'Peso';
							break;
						case 'YEN':
							return 'Yen';
							break;
						case 'DOLLA':
							return 'Dollar';
							break;
						case 'OTHER':
							return 'Others';
							break;
						default:
							return '';
					}
				},
			},
			{
				targets: 8,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check  text-success">&nbspActive</i>';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger">&nbspInactive</i>';
							break;
						default:
							return '';
					}
				},
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
				orderable: false,
			},
			{
				targets: [7, 9],
				visible: false,
				searchable: true,
			},

		];
		loadTable(data);
	}
</script>