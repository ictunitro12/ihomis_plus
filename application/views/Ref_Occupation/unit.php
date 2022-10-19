<style>

table#UnitTable.dataTable tbody tr:hover {
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
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Previous Level" data-toggle="tooltip" ><i class="fa fa-arrow-left"></i> Previous Level</a>
					<button onclick="AddUnit()"  class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Unit" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Unit
						</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="UnitTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover " width="100%">
			<thead>
				<tr class="" align="center">
					<th class="align-middle">SMAJOR CODE</th>
					<th class="align-middle">UNIT CODE</th>
					<th class="align-middle">UNIT DESCRIPTION</th>
					<th class="align-middle">MIN CODE</th>
					<th class="align-middle">MIN DESCRIPTION</th>
					<th class="align-middle">STATUS</th>
					<th class="align-middle" width="1%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmUnit" id="frmUnit">
	<div class="modal fade" id="ModalAddUnit" name="ModalAddUnit" role="form">
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
						<input type="hidden" name="mupsw" id="mupsw" value="">

						<div class="col-md-3 col-form-label text-default mb-1">SMajor Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly id="smcode" name="smcode" placeholder="SMajor Code" maxlength="50">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="key" name="key" placeholder="Unit code" maxlength="255">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Unit Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="udesc" name="udesc" placeholder="Unit description" maxlength="255"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Min Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="mcode" name="mcode" placeholder="Min code" maxlength="255">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Min Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="mdesc" name="mdesc" placeholder="Min description" maxlength="255"></textarea>
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

<form name="frmDeleteUnit" id="frmDeleteUnit">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteUnit" role="form">
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
		UnitList();
	});

	function UnitList() {
		var code = atob('<?php echo $this->uri->segment(3); ?>');
		var data = new Object();
		data.id = "UnitTable";
		data.link = "<?php echo site_url('Ref_Occupation/UnitList/'); ?>" + code;
		data.type = "POST";
		data.coldef = [{
				targets: [5],
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
				targets: [0, 1, 2, 3, 4, 5, 6],
				orderable: false,
			},
			{
				targets: [0, 5, 6],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddUnit() {
		var smajcode = atob('<?php echo $this->uri->segment(3); ?>');

		$('#ModalAddUnit').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#mupsw").val('P');
		$("#smcode").val(smajcode);
		$("#smcode").prop('readonly', true);
		$("#key").prop('readonly', false);
		$('#status option[value="A"]').prop("selected", true);
	}

	$("#UnitTable").on("click", ".ModalEditUnit", function() {
		var data = $(this).data();
		var smajcode = atob('<?php echo $this->uri->segment(3); ?>');
		var unitcode = atob(data['unitcode']);
		var unitdesc = atob(data['unitdesc']);
		var mincode = atob(data['mincode']);
		var mindesc = atob(data['mindesc']);
		var minstat = atob(data['minstat']);

		$('#ModalAddUnit').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(unitcode);
		$("#udesc").val(unitdesc);
		$("#mcode").val(mincode);
		$("#mdesc").val(mindesc);
		$('#status option[value="' + minstat + '"]').prop("selected", true);
		$("#mupsw").val('U');
		$("#smcode").val(smajcode);
		$("#smcode").prop('readonly', true);
		$("#key").prop('readonly', true);
	});

	$("#UnitTable").on("click", ".ModalDeleteUnit", function() {
		var data = $(this).data();
		var unitcode = atob(data['unitcode']);

		$('#DeleteUnit').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(unitcode);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_occupation/validationunit.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_occupation/deleteunit.js"></script>