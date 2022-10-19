<style>

table#EDPMS_DMTable.dataTable tbody tr:hover {
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
				<div class="btn-group pull-right" title="Add EDPMS Drugs and Medicines" role="group" aria-label="">
					<!-- <button onclick="AddEDPMS_DM()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i></button> -->
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="EDPMS_DMTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="" align="center">
					<th class="align-middle">CODE</th>
					<th class="align-middle">DESCRIPTION</th>
					<th class="align-middle">GENERIC</th>
					<th class="align-middle">SALT</th>
					<th class="align-middle">STRENGTH</th>
					<th class="align-middle">FORM</th>
					<th class="align-middle">UNIT OF MEASUREMENT</th>
					<th class="align-middle">PACKAGE</th>
					<th class="align-middle">STATUS</th>
					<!-- <th class="align-middle">ACTIONS</th> -->
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmEDPMS_DM" id="frmEDPMS_DM">
	<div class="modal fade" id="ModalAddEDPMS_DM" name="ModalAddEDPMS_DM" role="form">
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

						<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="key" name="key">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="pdd" name="pdd" placeholder="Description"></textarea>
						</div>

						<div class="col-md-3 col-form-label text-default mb-1">Generic:</div>
						<div class="col-md-9">
							<select name="selGeneric" id="selGeneric" onChange="UpdateInfo();" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Salt:</div>
						<div class="col-md-9">
							<select name="selSalt" id="selSalt" onChange="UpdateInfo();" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Strength:</div>
						<div class="col-md-9">
							<select name="selStrength" id="selStrength" onChange="UpdateInfo();" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Form:</div>
						<div class="col-md-9">
							<select name="selForms" id="selForms" onChange="UpdateInfo();" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit of Measurement:</div>
						<div class="col-md-9">
							<select name="selUnitMeasure" id="selUnitMeasure" onChange="UpdateInfo();" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Package:</div>
						<div class="col-md-9">
							<select name="selPackaging" id="selPackaging" onChange="UpdateInfo();" class="form-control form-control-mb mb-1">
							</select>
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
				<div class="modal-footer bg-secondary">
					<button class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp Save</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteEDPMS_DM" id="frmDeleteEDPMS_DM">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteEDPMS_DM" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class="far fa-eye-slash"></i>&nbsp <span id="key"></span></h5>
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

<script type="text/javascript">
	$(function() {
		EDPMS_DMList();
	});

	function EDPMS_DMList() {
		var data = new Object();
		data.id = "EDPMS_DMTable";
		data.link = "<?php echo site_url('Ref_EDPMS_DM/EDPMS_DMList'); ?>";
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
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8],
				orderable: false,
			},
			{
				targets: [8],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddEDPMS_DM() {
		$('#ModalAddEDPMS_DM').modal('show');
		$("#addID").val('insert');
		$("#key").prop('readonly', true);

		SelGeneric();
		SelSalt();
		SelStrength();
		SelPackaging();
		SelUnitMeasure();
		SelForms();

		$('#selGeneric').change(UpdateInfo);
		$('#selSalt').change(UpdateInfo);
		$('#selStrength').change(UpdateInfo);
		$('#selForms').change(UpdateInfo);
		$('#selUnitMeasure').change(UpdateInfo);
		$('#selPackaging').change(UpdateInfo);
	}

	$("#EDPMS_DMTable").on("click", ".ModalEditEDPMS_DM", function() {
		var data = $(this).data();
		var obj = getEDPMS_DM(data['key']);
		var gencode = obj['pgenericcode'];
		var saltcode = obj['psaltcode'];
		var strecode = obj['pstrengthcode'];
		var formcode = obj['pformcode'];
		var uomcode = obj['punitcode'];
		var packcode = obj['ppackagecode'];

		$('#ModalAddEDPMS_DM').modal('show');
		$("#addID").val('update');
		$("#key").val(obj['pdrugcode']);
		$("#pdd").val(obj['pdrugdesc']);
		$("#status").val(obj['pdrugstat']);
		$("#key").prop('readonly', true);

		SelGeneric();
		SelSalt();
		SelStrength();
		SelPackaging();
		SelUnitMeasure();
		SelForms();

		setGeneric(gencode);
		setSalt(saltcode);
		setStrength(strecode);
		setPackaging(packcode);
		setUnitMeasure(uomcode);
		setForm(formcode);

		$('#selGeneric').change(UpdateInfo);
		$('#selSalt').change(UpdateInfo);
		$('#selStrength').change(UpdateInfo);
		$('#selForms').change(UpdateInfo);
		$('#selUnitMeasure').change(UpdateInfo);
		$('#selPackaging').change(UpdateInfo);
	});

	function getEDPMS_DM(key) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_EDPMS_DM/getEDPMS_DM/",
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

	function UpdateInfo() {
		var gencode = $('#selGeneric').val();
		var saltcode = $('#selSalt').val();
		var strecode = $('#selStrength').val();
		var formcode = $('#selForms').val();
		var uomcode = $('#selUnitMeasure').val();
		var packcode = $('#selPackaging').val();

		$("#key").val(gencode + saltcode + strecode + formcode + uomcode + packcode);
	}

	$("#EDPMS_DMTable").on("click", ".ModalDeleteEDPMS_DM", function() {
		var data = $(this).data();
		
		$('#DeleteEDPMS_DM').modal('show');
		$("#formID").val('delete');
		$("#deletekey").val(data['key']);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_edpms_dm/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_edpms_dm/delete.js"></script>