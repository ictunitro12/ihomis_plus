<style>
	table#WardTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>

<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddWard()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Ward</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="WardTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
				<thead>
					<tr class="align-middle text-center">
						<th class="align-middle text-center">Ward Code</th>
						<th class="align-middle text-center">Ward Name</th>
						<th class="align-middle text-center">tscode</th>
						<th class="align-middle text-center">Service</th>
						<th class="align-middle text-center">wclcode</th>
						<th class="align-middle text-center">Sex allowed</th>
						<th class="align-middle text-center">Authorized no. of bed</th>
						<th class="align-middle text-center">Ward room no.</th>
						<th class="align-middle text-center">Status</th>
						<th class="align-middle text-center" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<form name="frmWard" id="frmWard">
	<div class="modal fade" id="ModalAddWard" role="form">
		<input type="hidden" name="formIden" id="formIden">
		<div class="modal-dialog modal-dialog-centered " role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $header; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1">Ward code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="code" name="code" placeholder="Ward code" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Ward name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="name" name="name" placeholder="Ward name" maxlength="50" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Service:</div>
						<div class="col-md-9">
							<select name="selService" id="selService" class="form-control form-control-mb mb-1">
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Sex allowed:</div>
						<div class="col-md-9">
							<select name="sexallow" id="sexallow" class="form-control form-control-mb mb-1">
								<option value="">Sex allowed</option>
								<option value="F">Female</option>
								<option value="M">Male</option>
								<option value="B">Both Sex</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Authorized no. of bed:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="nobed" name="nobed" placeholder="Authorized no. of bed" maxlength="10">
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
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</form>

<form name="frmDeleteWard" id="frmDeleteWard">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">

	<div class="modal fade" id="DeleteWard" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer ">
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
		WardList();
	});

	function WardList() {
		var data = new Object();
		data.id = "WardTable";
		data.link = "<?php echo site_url('Ref_Ward/WardList'); ?>";
		data.type = "POST";
		data.coldef = [{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9],
				orderable: false,
			},
			{
				targets: [2, 4, 7],
				searchable: false,
				visible: false,
			},
			{
				targets: 5,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'F':
							return 'Female';
							break;
						case 'M':
							return 'Male';
							break;
						case 'B':
							return 'Both Sex';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 8,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'A':
							return '<i class="fa fa-check text-success"></i>&nbsp Active';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
							break;
						default:
							return '<span class="badge bg-default">Unknown</span>';
					}
				},
			},

		];
		loadTable(data);
	}

	$("#WardTable").on("click", ".ModalDeleteWard", function() {
		var data = $(this).data();
		var wardcode = atob(data['wardcode']);
		console.log(wardcode);
		$('#DeleteWard').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIdentification").val('delete');
		$("#deletecode").val(wardcode);

	});

	$("#WardTable").on("click", ".ModalEditWard", function() {
		var data = $(this).data();
		var wardcode = atob(data['wardcode']);
		var wardname = atob(data['wardname']);
		var wardstat = atob(data['wardstat']);
		var tscode = atob(data['tscode']);
		var sex = atob(data['sex']);
		var noroom = atob(data['noroom']);

		$('#ModalAddWard').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIden").val('update');
		SelService();
		setService(tscode);
		$("#code").prop('readonly', true);
		$("#code").val(wardcode);
		$("#name").val(wardname);
		$('#status option[value="' + wardstat + '"]').prop("selected", true);
		$("#sexallow").val(sex);
		$("#nobed").val(noroom);
	});

	function AddWard() {
		$('#ModalAddWard').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIden").val('insert');
		SelService();
		$("#code").prop('readonly', false);
		$('#status option[value="A"]').prop("selected", true);
	}
</script>
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_ward/ref_ward_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_ward/delete.js"></script>