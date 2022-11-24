<style>
	table#Sub2CategoryTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>&nbsp;<h4><small>(<span id="ptdesc" name="ptdesc"></span> > <span id="sub1" name="sub1"></span>)</small></h4>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-arrow-left"></i>&nbsp;Previous Level</a>
					<button onclick="AddSub2Category()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Sub 2 Category</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="Sub2CategoryTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="never"></th>
						<th class="never"></th>
						<th class="never"></th>
						<th class="align-middle all">Sub 2 Category Code</th>
						<th class="align-middle all">Description</th>
						<th class="align-middle all">Stock No.</th>
						<th class="align-middle all">Barcode</th>
						<th class="align-middle all">Unit of Measure</th>
						<th class="align-middle all">Beginning Balance</th>
						<th class="align-middle all">Running Balance</th>
						<th class="align-middle all">Pharmaceutical?</th>
						<th class="align-middle all">Re-order Level</th>
						<th class="align-middle all">Status</th>
						<th class="never"></th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmSub2Category" id="frmSub2Category">
	<input type="hidden" name="addID" id="addID" value="">
	<input type="hidden" name="key" id="key" value="">
	<input type="hidden" name="c1code" id="c1code" value="">
	<div class="modal fade" id="ModalAddSub2Category" name="ModalAddSub2Category" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1">Sub 1 category:</div>
						<div class="col-md-9">
							<textarea class="form-control form-control-mb mb-1" autocomplete="off" readonly id="scc" name="scc"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onChange="UpdateInfo();" readonly id="s2ccode" name="s2ccode" placeholder="Sub 2 category code" maxlength="10" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="s2cdesc" name="s2cdesc" placeholder="Description" maxlength="255" required></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit of Measure:</div>
						<div class="col-md-9">
							<select name="selUnitMeasure" id="selUnitMeasure" class="form-control form-control-mb mb1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Stock number:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="sno" name="sno" placeholder="Stock number" maxlength="15">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Barcode:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="bcode" name="bcode" placeholder="Barcode" maxlength="30">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Begin balance:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1 text-right" autocomplete="off" id="bb" name="bb" onkeypress="return isNumber(event,this)">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Running balance:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1 text-right" autocomplete="off" id="rb" name="rb" onkeypress="return isNumber(event,this)">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Re-order level:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1 text-right" autocomplete="off" id="rol" name="rol" onkeypress="return isNumber1(event)" maxlength="12">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Pharmaceutical:</div>
						<div class="col-md-9">
							<select name="pharm" id="pharm" class="form-control form-control-mb mb-1">
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
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
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SUBMIT</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteSub2Category" id="frmDeleteSub2Category">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSub2Category" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="desc" name="desc"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
		Sub2CategoryList();
	});

	function Sub2CategoryList() {
		var ptdesc = localStorage.getItem("ptdesc");
		var cl1comb = '<?php echo $this->uri->segment(3); ?>';
		var cl1code = atob('<?php echo $this->uri->segment(4); ?>');
		var cl1desc = atob('<?php echo $this->uri->segment(5); ?>');

		localStorage.setItem("cl1comb", atob(cl1comb));
		localStorage.setItem("cl1code", cl1code);
		localStorage.setItem("cl1desc", cl1desc);

		$("#ptdesc").text(ptdesc);
		$("#sub1").text(cl1desc);

		code = encodeURIComponent(encodeURIComponent(cl1comb));

		var data = new Object();
		data.id = "Sub2CategoryTable";
		data.link = "<?php echo site_url('Ref_NonDrugs/Sub2CategoryList/'); ?>" + code;
		data.type = "POST";
		data.coldef = [{
				targets: [10, 12],
				render: function(data, type, row) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check text-success">&nbspActive</i>';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger">&nbspInactive</i>';
							break;
						case 'Y':
							return 'Yes';
							break;
						case 'N':
							return 'No';
							break;
						default:
							return '';
					}
				},
			},
			{
				targets: [0, 1, 13],
				visible: false,
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14],
				orderable: false,
			},
			{
				targets: [0, 1, 2, 12, 13, 14],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddSub2Category() {
		var cl1comb = localStorage.getItem("cl1comb");
		var cl1desc = localStorage.getItem("cl1desc");

		$('#ModalAddSub2Category').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#c1code").val(cl1comb);
		$("#scc").val(cl1desc);
		$('#scc').change(UpdateInfo);
		$('#pharm option[value="Y"]').prop("selected", true);
		$('#status option[value="A"]').prop("selected", true);
		$("#scc").prop('readonly', true);
		$("#s2ccode").prop('readonly', false);

		SelUnitMeasure();
	}

	$("#Sub2CategoryTable").on("click", ".ModalEditSub2Category", function() {
		var data = $(this).data();
		var cl2comb = data['cl2comb'];
		var obj = getSub2Category(cl2comb);
		var uomcode = btoa(obj['uomcode']);

		$('#ModalAddSub2Category').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(obj['cl2comb']);
		$("#c1code").val(obj['cl1comb']);
		$("#scc").val(obj['cl1desc']);
		$("#s2ccode").val(obj['cl2code']);
		$("#s2cdesc").val(obj['cl2desc']);
		$("#sno").val(obj['stkno']);
		$("#bcode").val(obj['barcode']);
		$("#bb").val(obj['begbal']);
		$("#rb").val(obj['stockbal']);
		$('#pharm option[value="' + obj['pharmaceutical'] + '"]').prop("selected", true);
		$("#rol").val(obj['reorder_level']);
		$('#status option[value="' + obj['cl2stat'] + '"]').prop("selected", true);
		$('#scc').change(UpdateInfo);
		$("#scc").prop('readonly', true);
		$("#s2ccode").prop('readonly', true);

		SelUnitMeasure();
		setUnitMeasure(uomcode);
	});

	$("#Sub2CategoryTable").on("click", ".ModalDeleteSub2Category", function() {
		var data = $(this).data();
		var cl2comb = atob(data['cl2comb']);
		var cl2desc = atob(data['cl2desc']);

		$('#DeleteSub2Category').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(cl2comb);
		$("#desc").text(cl2desc);
	});

	function getSub2Category(cl2comb) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_NonDrugs/getSub2Category/" + cl2comb,
			data: {
				cl2comb: cl2comb
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function UpdateInfo() {
		if ($("#addID").val() == 'insert') {
			var cl1comb = $('#cl1comb').val();
			var cl2code = $('#s2ccode').val();
			$("#key").val(cl1comb + cl2code);
		} else {
			$("#key").val(data['cl2comb']);
		}
	}

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

	function isNumber1(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if ((charCode != 8) && (charCode < 48 || charCode > 57)) {
			return false;
		} else {
			return true;
		}
	}
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/sub2category.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/deletesub2category.js"></script>