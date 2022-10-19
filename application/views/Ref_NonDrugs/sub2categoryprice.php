<style>

table#Sub2CategoryPriceTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>
					&nbsp <?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Previous Level" data-toggle="tooltip"><i class="fa fa-arrow-left"></i> Previous Level</a>

					<button onclick="AddSub2CategoryPrice()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Sub-2 Category Price" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Sub-2 Category Price</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="Sub2CategoryPriceTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th></th>
					<th class="align-middle">DESCRIPTION</th>
					<th class="align-middle">PURCHASE PRICE</th>
					<th class="align-middle">SELLING PRICE</th>
					<th class="align-middle">UNIT OF MEASUREMENT</th>
					<th></th>
					<th class="align-middle">DATE AS OF</th>
					<th></th>
					<th class="align-middle">STATUS</th>
					<th class="align-middle" width="1%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmSub2CategoryPrice" id="frmSub2CategoryPrice">
	<div class="modal fade" id="ModalAddSub2CategoryPrice" name="ModalAddSub2CategoryPrice" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="addID" id="addID" value="">
						<input type="hidden" name="key" id="key" value="">

						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="s2cdesc" name="s2cdesc" placeholder="Description">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Purchase price:</div>
						<div class="col-md-9">
							<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="pp" name="pp">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Selling price:</div>
						<div class="col-md-9">
							<input type="number" class="form-control form-control-mb mb-1" autocomplete="off" id="sp" name="sp">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit of Measure:</div>
						<div class="col-md-9">
							<select name="selUnitMeasure" id="selUnitMeasure" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Date as of:</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" readonly name="dao" id="dao" class="datepicker" autocomplete="off" />
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
				<div class="modal-footer">
					<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteSub2CategoryPrice" id="frmDeleteSub2CategoryPrice">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSub2CategoryPrice" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</form>


<script type="text/javascript">
	$(function() {
		Sub2CategoryPriceList();
	});

	function Sub2CategoryPriceList() {
		var cl2comb = '<?php echo $this->uri->segment(3); ?>';
		code = encodeURIComponent(encodeURIComponent(cl2comb));
		var data = new Object();
		data.id = "Sub2CategoryPriceTable";
		data.link = "<?php echo site_url('Ref_NonDrugs/Sub2CategoryPriceList/'); ?>" + code;
		data.type = "POST";
		data.coldef = [{
				targets: [8],
				render: function(data, type, row) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check  text-success"></i>&nbsp Active';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
							break;
						default:
							return '<span> </span>';
					}
				},
			},
			{
				targets: [0, 5, 7],
				visible: false,
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
				orderable: false,
			},
			{
				targets: [0, 1, 4, 5, 7, 8, 9],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddSub2CategoryPrice() {
		var cl2comb = atob('<?php echo $this->uri->segment(3); ?>');
		var cl2desc = atob('<?php echo $this->uri->segment(4); ?>');

		$('#ModalAddSub2CategoryPrice').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#key").val(cl2comb);
		$("#s2cdesc").val(cl2desc);
		$('#dao').val(getTimeLocale());
		$("#s2cdesc").prop('readonly', true);
		$("#dao").prop('readonly', false);
		$('#status option[value="A"]').prop("selected", true);

		SelUnitMeasure();
	}

	$("#Sub2CategoryPriceTable").on("click", ".ModalEditSub2CategoryPrice", function() {
		var data = $(this).data();
		var cl2comb = atob('<?php echo $this->uri->segment(3); ?>');
		var cl2desc = atob(data['cl2desc']);
		cl2desc = decodeURIComponent(decodeURIComponent(cl2desc));
		var cl2retprc = atob(data['cl2retprc']);
		var costprc = atob(data['costprc']);
		var uomcode = data['uomcode'];

		var cl2dteas = setTimeLocale(atob(data['cl2dteas']));
		var cl2stat = atob(data['cl2stat']);

		$('#ModalAddSub2CategoryPrice').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(cl2comb);
		$("#s2cdesc").val(cl2desc);
		$("#pp").val(costprc);
		$("#sp").val(cl2retprc);
		$("#dao").val(cl2dteas);
		$('#status option[value="' + cl2stat + '"]').prop("selected", true);
		$("#s2cdesc").prop('readonly', true);
		$("#dao").prop('readonly', true);

		SelUnitMeasure();
		setUnitMeasure(uomcode);
	});

	$("#Sub2CategoryPriceTable").on("click", ".ModalDeleteSub2CategoryPrice", function() {
		var data = $(this).data();
		var cl2dteas = atob(data['cl2dteas']);

		$('#DeleteSub2CategoryPrice').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(cl2dteas);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/sub2categoryprice.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/deletesub2categoryprice.js"></script>