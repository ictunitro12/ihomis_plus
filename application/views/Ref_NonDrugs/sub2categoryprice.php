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
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>&nbsp;<h4><small>(<span id="ptdesc" name="ptdesc"></span> > <span id="cl1desc" name="cl1desc"></span> > <span id="sub2" name="sub2"></span>)</small></h4>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-arrow-left"></i>&nbsp;Previous Level</a>
					<button onclick="AddSub2CategoryPrice()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Sub 2 Category Price</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="Sub2CategoryPriceTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="never"></th>
						<th class="never"></th>
						<th class="align-middle all">Purchase Price</th>
						<th class="align-middle all">Selling Price</th>
						<th class="align-middle all">Unit of Measure</th>
						<th class="never"></th>
						<th class="align-middle all">Effectivity Date</th>
						<th class="never"></th>
						<th class="align-middle all">Status</th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmSub2CategoryPrice" id="frmSub2CategoryPrice">
	<input type="hidden" name="addID" id="addID" value="">
	<input type="hidden" name="key" id="key" value="">
	<div class="modal fade" id="ModalAddSub2CategoryPrice" name="ModalAddSub2CategoryPrice" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp;<?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea class="form-control form-control-mb mb-1" autocomplete="off" readonly id="s2cdesc" name="s2cdesc" placeholder="Description"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Purchase price:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1 text-right" autocomplete="off" id="pp" name="pp" onkeypress="return isNumber(event,this)">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Selling price:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1 text-right" autocomplete="off" id="sp" name="sp" onkeypress="return isNumber(event,this)" required readonly>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit of Measure:</div>
						<div class="col-md-9">
							<select name="selUnitMeasure" id="selUnitMeasure" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Effectivity Date:</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" readonly name="dao" id="dao" class="datepicker" autocomplete="off" required readonly />
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

<form name="frmDeleteSub2CategoryPrice" id="frmDeleteSub2CategoryPrice">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSub2CategoryPrice" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
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


<script type="text/javascript">
	$(function() {
		Sub2CategoryPriceList();
	});

	function Sub2CategoryPriceList() {
		var ptdesc = localStorage.getItem("ptdesc");
		var cl1desc = localStorage.getItem("cl1desc");
		var cl2comb = '<?php echo $this->uri->segment(3); ?>';
		var cl2desc = atob('<?php echo $this->uri->segment(4); ?>');

		$("#ptdesc").text(ptdesc);
		$("#cl1desc").text(cl1desc);
		$("#sub2").text(cl2desc);

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
		$("#sp").prop('readonly', false);
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
		$("#sp").prop('readonly', true);

		SelUnitMeasure();
		setUnitMeasure(uomcode);
	});

	$("#Sub2CategoryPriceTable").on("click", ".ModalDeleteSub2CategoryPrice", function() {
		var data = $(this).data();
		var cl2dteas = atob(data['cl2dteas']);
		var cl2retprc = atob(data['cl2retprc']);

		$('#DeleteSub2CategoryPrice').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(cl2dteas);
		$("#desc").text(cl2retprc + ', ' + cl2dteas);
	});

	$('input').on('paste', function(event) {
		if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
			event.preventDefault();
		}
	});

	function isNumber(evt, element) {
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57) && !(charCode == 46 || charCode == 45))
			return false;
		else {
			var len = $(element).val().length;

			/* Validation Point */
			var index = $(element).val().indexOf('.');
			if ((index > 0 && charCode == 46) || len == 0 && charCode == 46) {
				return false;
			}
			if (index > 0) {
				var CharAfterdot = (len + 1) - index;
				if (CharAfterdot > 3) {
					return false;
				}
			}

			/* Validating Negative sign */
			index = $(element).val().indexOf('-');
			if ((index > 0 && charCode == 45) || (len > 0 && charCode == 45)) {
				return false;
			}
		}
		return true;
	}
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/sub2categoryprice.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/deletesub2categoryprice.js"></script>