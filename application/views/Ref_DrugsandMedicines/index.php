<style>
	table#DrugsandMedicinesTable.dataTable tbody tr:hover {
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
					<button onclick="AddDrugsandMedicines()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Drugs and Medicines</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="DrugsandMedicinesTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th class="align-middle text-center">Drug Classification</th>
						<th class="align-middle text-center">Generic</th>
						<th class="align-middle text-center">EDPMS ID</th>
						<th class="align-middle text-center">Brand Name</th>
						<th class="align-middle text-center">Strength (#)</th>
						<th class="align-middle text-center">Strength</th>
						<th class="align-middle text-center">Form</th>
						<th class="align-middle text-center">Route</th>
						<th class="align-middle text-center">Salt</th>
						<th class="align-middle text-center">Package</th>
						<th class="align-middle text-center">Status</th>
						<th class="align-middle text-center">Remarks</th>
						<th class="align-middle text-center">PNDF?</th>
						<th width="1%"></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<form name="frmDrugsandMedicines" id="frmDrugsandMedicines">
	<div class="modal fade" id="ModalAddDrugsandMedicines" name="ModalAddDrugsandMedicines" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp;<?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<!-- <div class="col-md-3 col-form-label text-default mb-1">addid:</div>
						<div class="col-md-9">
							<input type="text" name="addID" id="addID" value="">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">dmdcomb:</div>
						<div class="col-md-9">
							<input type="text" name="key" id="key" value="">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">grpcode:</div>
						<div class="col-md-9">
							<input type="text" name="grpcode" id="grpcode" value="">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">dmdctr:</div>
						<div class="col-md-9">
							<input type="text" name="dmdctr" id="dmdctr" value="">
						</div> -->

						<input type="hidden" name="addID" id="addID" value="">
						<input type="hidden" name="key" id="key" value="">
						<input type="hidden" name="grpcode" id="grpcode" value="">
						<input type="hidden" name="dmdctr" id="dmdctr" value="">

						<div class="col-md-3 col-form-label text-default mb-1">Classification:</div>
						<div class="col-md-9">
							<select name="dmdrxot" id="dmdrxot" class="form-control form-control-mb mb-1">
								<option value="OTC">Over the counter</option>
								<option value="RXX">With prescription</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Generic:</div>
						<div class="col-md-9">
							<select name="selGeneric" id="selGeneric" onblur="dmdctr();" onchange="dmdctr1();dmdctr2();" class="form-control form-control-mb mb-1" required>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Brand name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="brandname" name="brandname">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Strength (#):</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1 text-right" autocomplete="off" id="dmdnost" name="dmdnost" onkeypress="return isNumber(event,this)" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Strength:</div>
						<div class="col-md-9">
							<select name="selStrength" id="selStrength" class="form-control form-control-mb mb-1" required>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Form:</div>
						<div class="col-md-9">
							<select name="selForms" id="selForms" class="form-control form-control-mb mb-1" required>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Route:</div>
						<div class="col-md-9">
							<select name="selRoute" id="selRoute" class="form-control form-control-mb mb-1" required>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Salt:</div>
						<div class="col-md-9">
							<select name="selSalt" id="selSalt" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Package:</div>
						<div class="col-md-9">
							<select name="selPackaging" id="selPackaging" class="form-control form-control-mb mb-1">
							</select>
						</div>

						<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control form-control-mb mb-1">
								<option value="A">Active</option>
								<option value="I">Inactive</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Remarks:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="dmdrem" name="dmdrem" maxlength="255"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">PNDF?:</div>
						<div class="col-md-9">
							<select name="dmdpndf" id="dmdpndf" class="form-control form-control-mb mb-1">
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteDrugsandMedicines" id="frmDeleteDrugsandMedicines">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteDrugsandMedicines" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp;<span id="deldrugs"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
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
		DrugsandMedicinesList();
	});

	function DrugsandMedicinesList() {
		var data = new Object();
		data.id = "DrugsandMedicinesTable";
		data.link = "<?php echo site_url('Ref_DrugsandMedicines/DrugsandMedicinesList'); ?>";
		data.type = "POST";
		data.coldef = [{
				targets: [3, 13, 15],
				searchable: false,
				render: function(data, type, row) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check  text-success"></i>&nbsp Active';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
							break;
						case 'RXX':
							return 'With Prescription';
							break;
						case 'OTC':
							return 'Over the counter';
							break;
						case 'Y':
							return 'Yes';
							break;
						case 'N':
							return 'No';
							break;
						default:
							return '<span> </span>';
					}
				},
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
				orderable: false,
			},
			{
				targets: [0, 1, 2],
				visible: false,
			},
			{
				targets: [7],
				className: "text-right",
			},
			{
				targets: [3, 8, 9, 10, 11, 12, 13, 15],
				className: "text-center",
			}
		];
		loadTable(data);
	}

	function AddDrugsandMedicines() {
		$('#ModalAddDrugsandMedicines').modal('show');
		$("#addID").val('insert');
		$("#key").prop('readonly', false);
		SelGeneric();
		SelSalt();
		SelStrength();
		SelPackaging();
		SelUnitMeasure();
		SelForms();
		SelRoute();
		/* generatedmdcomb(); */
		$('#selGeneric').change(dmdctr);
		$('#status option[value="A"]').prop("selected", true);
		$('#dmdpndf option[value="Y"]').prop("selected", true);
		$('#dmdrxot option[value="RXX"]').prop("selected", true);
	}

	function dmdctr() {
		var gencode = $('#selGeneric').val();
		var obj = getDMctr(gencode);
		var i;

		for (i = 1; i <= obj['dmdctr']; i++) {
			$("#dmdctr").val(i);
		}
		$("#dmdctr").val(i);
	}

	function dmdctr1() {
		var gencode = $('#selGeneric').val();
		var obj = getDMctr1(gencode);

		$('#grpcode').val(obj['grpcode']);
	}

	function dmdctr2() {
		var gencode = $('#selGeneric').val();
		var obj = getDMctr2(gencode);

		if (obj == null) {
			generatedmdcomb();
		} else {
			$('#key').val(obj['dmdcomb']);
		}
	}

	$("#DrugsandMedicinesTable").on("click", ".ModalEditDrugsandMedicines", function() {
		var data = $(this).data();
		var obj = getDrugsandMedicines(data['key']);

		var gencode = obj['gencode'];
		var saltcode = obj['saltcode'];
		var strecode = obj['strecode'];
		var formcode = obj['formcode'];
		var packcode = obj['packcode'];
		var rtecode = obj['rtecode'];

		console.log(obj);
		$('#ModalAddDrugsandMedicines').modal('show');
		$("#addID").val('update');
		$("#key").val(obj['dmdcomb']);
		$("#dmdctr").val(obj['dmdctr']);
		$("#grpcode").val(obj['grpcode']);
		$("#brandname").val(obj['brandname']);
		$("#dmdnost").val(obj['dmdnost']);
		$("#dmdrem").val(obj['dmdrem']);
		$('#dmdrxot option[value="' + obj['dmdrxot'] + '"]').prop("selected", true);
		$('#status option[value="' + obj['dmdstat'] + '"]').prop("selected", true);
		$('#dmdpndf option[value="' + obj['dmdpndf'] + '"]').prop("selected", true);
		$("#key").prop('readonly', true);
		$("#selGeneric").prop('readonly', true);

		SelGeneric();
		SelSalt();
		SelStrength();
		SelPackaging();
		SelForms();
		SelRoute();

		setGeneric(gencode);
		setSalt(saltcode);
		setStrength(strecode);
		setPackaging(packcode);
		setForm(formcode);
		setRoute(rtecode);
	});

	function getDrugsandMedicines(key) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_DrugsandMedicines/getDrugsandMedicines/",
			data: {
				key: key
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function getDMctr(selGeneric) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_DrugsandMedicines/getDMctr/",
			data: {
				selGeneric: selGeneric,
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function getDMctr1(selGeneric) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_DrugsandMedicines/getDMctr1/" + selGeneric,
			data: {
				selGeneric: selGeneric,
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function getDMctr2(selGeneric) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_DrugsandMedicines/getDMctr2/" + selGeneric,
			data: {
				selGeneric: selGeneric,
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	$("#DrugsandMedicinesTable").on("click", ".ModalDeleteDrugsandMedicines", function() {
		var data = $(this).data();
		console.log(data);
		$('#DeleteDrugsandMedicines').modal('show');
		$("#formID").val('delete');
		$("#deletekey").val(data['key']);
		$("#deldrugs").text(data['gendesc']);
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

<script src="<?php echo base_url() ?>assets/scripts/ref_drugsandmedicines/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_drugsandmedicines/delete.js"></script>