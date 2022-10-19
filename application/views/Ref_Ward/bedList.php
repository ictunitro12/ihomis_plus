<style>
	table#BedTable.dataTable tbody tr:hover {
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
					<button onclick="TempBed()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-bed"></i>&nbsp;Temporary Beds</button>
					<button onclick="PermBed()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-bed"></i>&nbsp;Permanent Beds</button>
					<button onclick="AddBed()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Bed</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="BedTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr class="align-middle text-center">
						<th class="align-middle text-center">bdintkey</th>
						<th class="align-middle text-center">rmintkey</th>
						<th class="align-middle text-center">Ward name</th>
						<th class="align-middle text-center">roomcode</th>
						<th class="align-middle text-center">rmintkey</th>
						<th class="align-middle text-center">Room name</th>
						<th class="align-middle text-center">Bed code</th>
						<th class="align-middle text-center">Bed name</th>
						<th class="align-middle text-center">rmaccode</th>
						<th class="align-middle text-center">Accomodation</th>
						<th class="align-middle text-center">Date as of</th>
						<th class="align-middle text-center">Reserved</th>
						<th class="align-middle text-center">Temporary?</th>
						<th class="align-middle text-center">Date modified</th>
						<th class="align-middle text-center">Allowable no. of<br>patient/occupant</th>
						<th class="align-middle text-center">Actual no. of<br>patient/occupant</th>
						<th class="align-middle text-center">Status</th>
						<th class="align-middle text-center">bddteasof</th>
						<th class="align-middle text-center">bdpdteasof</th>
						<th class="align-middle text-center" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<form name="frmBed" id="frmBed">
	<div class="modal fade" id="ModalAddBed" role="form">
		<input type="hidden" name="formIden" id="formIden">
		<input type="hidden" name="brint" id="brint" value="">
		<input type="hidden" name="roombed" id="roombed" value="">
		<input type="hidden" name="rmintkey" id="rmintkey" onchange="intkey();">
		<input type="hidden" name="bdint" id="bdint" onchange="intkey();">
		<input type="hidden" name="room_code" id="room_code">
		<input type="hidden" name="wardcode" id="wardcode">
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
						<div class="col-md-3 col-form-label text-default mb-1">Ward name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly="" id="name" name="name" placeholder="Ward Name">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Room name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly="" id="room_name" name="room_name" placeholder="Room Name">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Bed code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onchange="intkey();" id="bed_code" name="bed_code" placeholder="Bed code" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Bed name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="bed_name" name="bed_name" placeholder="Bed name" maxlength="30" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Accomodation:</div>
						<div class="col-md-9">
							<select name="selBedAccom" id="selBedAccom" class="form-control form-control-mb mb-1" required>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Date as of:</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dteasof" name="dteasof">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Reserved?:</div>
						<div class="col-md-9">
							<select name="reserve" id="reserve" class="form-control form-control-mb mb-1">
								<option value="">Select</option>
								<option value="RESER">Reserved</option>
								<option value="UNRES">Not Reserved</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Temporary?:</div>
						<div class="col-md-9">
							<select name="tempor" id="tempor" class="form-control form-control-mb mb-1">
								<option value="Y">Yes</option>
								<option value="N">No</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Date modified:</div>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dtemodif" name="dtemodif">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Allowable no. of patient/occupant</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="allow_pat" name="allow_pat" placeholder="Allowable no. of patient/occupant" maxlength="10">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Actual no. of patient/occupant</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="actual_pat" name="actual_pat" placeholder="Actual no. of patient/occupant" maxlength="10">
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

<form name="frmDeleteBed" id="frmDeleteBed">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<input type="hidden" name="deletermintkey" id="deletermintkey">
	<input type="hidden" name="deleteroombed" id="deleteroombed">

	<div class="modal fade" id="DeleteBed" role="form">
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

<input type="hidden" name="rmintkey" id="rmintkey">
<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_bed/ref_bed_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_bed/delete.js"></script>

<script type="text/javascript">
	$(function() {
		BedList();
	});

	function BedList() {
		var rmintkey = atob('<?php echo $this->uri->segment(3); ?>');
		var data = new Object();
		data.id = "BedTable";
		data.link = "<?php echo site_url('Ref_Ward/BedList/'); ?>" + rmintkey;
		data.type = "POST";
		data.coldef = [{
				targets: 11,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'RESER':
							return 'Reserved';
							break;
						case 'UNRES':
							return 'Not Reserved';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 12,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'Y':
							return 'Yes';
							break;
						case 'N':
							return 'No';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 16,
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
			{
				targets: [0, 1, 3, 4, 8, 17, 18],
				searchable: false,
				visible: false,
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
				orderable: false,
			}
		];
		loadTable(data);
	}


	function TempBedList() {
		var rmintkey = atob('<?php echo $this->uri->segment(3); ?>');
		var data = new Object();
		data.id = "BedTable";
		data.link = "<?php echo site_url('Ref_Ward/TempBedList/'); ?>" + rmintkey;
		data.type = "POST";
		data.coldef = [{
				targets: 11,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'RESER':
							return 'Reserved';
							break;
						case 'UNRES':
							return 'Not Reserved';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 12,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'Y':
							return 'Yes';
							break;
						case 'N':
							return 'No';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 16,
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
			{
				targets: [0, 1, 3, 4, 8, 17, 18],
				searchable: false,
				visible: false,
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
				orderable: false,
			}
		];
		loadTable(data);
	}

	function PermBedList() {
		var rmintkey = atob('<?php echo $this->uri->segment(3); ?>');
		var data = new Object();
		data.id = "BedTable";
		data.link = "<?php echo site_url('Ref_Ward/PermBedList/'); ?>" + rmintkey;
		data.type = "POST";
		data.coldef = [{
				targets: 11,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'RESER':
							return 'Reserved';
							break;
						case 'UNRES':
							return 'Not Reserved';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 12,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'Y':
							return 'Yes';
							break;
						case 'N':
							return 'No';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 16,
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
			{
				targets: [0, 1, 3, 4, 8, 17, 18],
				searchable: false,
				visible: false,
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
				orderable: false,
			}
		];
		loadTable(data);
	}

	function PermBedList() {
		var rmintkey = atob('<?php echo $this->uri->segment(3); ?>');
		var data = new Object();
		data.id = "BedTable";
		data.link = "<?php echo site_url('Ref_Ward/PermBedList/'); ?>" + rmintkey;
		data.type = "POST";
		data.coldef = [{
				targets: 11,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'RESER':
							return 'Reserved';
							break;
						case 'UNRES':
							return 'Not Reserved';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 12,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'Y':
							return 'Yes';
							break;
						case 'N':
							return 'No';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 16,
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
			{
				targets: [0, 1, 3, 4, 8, 17, 18],
				searchable: false,
				visible: false,
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
				orderable: false,
			}
		];
		loadTable(data);
	}

	function intkey() {
		$('#bdint').val($('#rmintkey').val() + $('#bed_code').val());
	}

	$("#BedTable").on("click", ".ModalDeleteBed", function() {
		var data = $(this).data();

		$('#DeleteBed').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIdentification").val('delete');

		var bedintkey = atob(data['bdintkey']);
		$("#deletecode").val(bedintkey);

		var rmintkey = atob('<?php echo $this->uri->segment(3); ?>');
		$("#deletermintkey").val(rmintkey);

		var obj = getRoomBed(rmintkey);
		console.log(obj);

		var i;
		var x;
		for (i = 1; i <= obj['rmintkey']; i++) {
			x = i - 1;
			$("#deleteroombed").val(x);
		}

		$("#deleteroombed").val(x);
	});

	$("#BedTable").on("click", ".ModalEditBed", function() {
		var data = $(this).data();
		$('#ModalAddBed').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIden").val('update');

		var bedcode = atob(data['bdcode']);
		var obj = getBed(bedcode);
		var now = new Date();
		var rmintkey = atob('<?php echo $this->uri->segment(3); ?>');
		var wardcode = atob('<?php echo $this->uri->segment(4); ?>');
		var wardname = atob('<?php echo $this->uri->segment(5); ?>');
		var roomcode = atob('<?php echo $this->uri->segment(6); ?>');
		var roomname = atob('<?php echo $this->uri->segment(7); ?>');

		setBedAccom(obj['rmaccikey']);

		$("#rmintkey").val(rmintkey);
		$("#bed_code").prop('readonly', true);

		$("#wardcode").val(wardcode);
		$("#name").val(wardname);
		$("#room_code").val(roomcode);
		$("#room_name").val(roomname);
		$("#bed_code").val(bedcode);

		$("#bed_name").val(obj['bdname']);
		$("#reserve").val(obj['bdvmostan']);
		$('#tempor option[value="' + obj['bdtemp'] + '"]').prop("selected", true);
		$("#allow_pat").val(obj['bdallow']);
		$("#actual_pat").val(obj['bdactual']);
		$('#status option[value="' + obj['bdstat'] + '"]').prop("selected", true);
		$("#bdint").val(obj['bdintkey']);

		var Beddateasof = obj['bddteasof'];
		var bedsss = ((Beddateasof == "1970-01-01 00:00:00") || (Beddateasof == null)) ? "0000-00-00 00:00:00" : setTimeLocale(Beddateasof);
		$("#dteasof").val(bedsss);

		var BedMofigdateasof = obj['bdpdteasof'];
		var bedsses = ((BedMofigdateasof == "1970-01-01 00:00:00") || (BedMofigdateasof == null)) ? "0000-00-00 00:00:00" : setTimeLocale(BedMofigdateasof);
		$("#dtemodif").val(bedsses);
	});


	function TempBed() {
		TempBedList();
	}

	function PermBed() {
		PermBedList();
	}

	function AddBed() {
		$('#ModalAddBed').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIden").val('insert');
		$('#status option[value="A"]').prop("selected", true);
		$('#tempor option[value="N"]').prop("selected", true);
		SelBedAccom();

		var rmintkey = atob('<?php echo $this->uri->segment(3); ?>');
		var wardcode = atob('<?php echo $this->uri->segment(4); ?>');
		var wardname = atob('<?php echo $this->uri->segment(5); ?>');
		var roomcode = atob('<?php echo $this->uri->segment(6); ?>');
		var roomname = atob('<?php echo $this->uri->segment(7); ?>');

		var obj = getRoomBed(rmintkey);
		var i;
		for (i = 1; i <= obj['rmintkey']; i++) {
			$("#roombed").val(i);
		}

		$("#roombed").val(i);
		$("#rmintkey").val(rmintkey);
		$("#wardcode").val(wardcode);
		$("#name").val(wardname);
		$("#room_code").val(roomcode);
		$("#room_name").val(roomname);
		$("#allow_pat").val('1');
		$("#actual_pat").val('0');
		$("#dteasof").val(getTimeLocale());
		$("#dtemodif").val(getTimeLocale());
		$("#bed_code").prop('readonly', false);
	}


	function getBed(bdcode) {
		var bdcode = encodeURIComponent(encodeURIComponent(bdcode));
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_Ward/getBed/" + bdcode,
			data: {
				bdcode: bdcode
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function getRoomBed(rmintkey) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_Ward/getRoomBed",
			data: {
				rmintkey: rmintkey
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}
</script>