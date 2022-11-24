<style>
	table#RoomTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>

<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>&nbsp;<h4><small>(<span id="ward" name="ward"></span>)</small></h4>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-arrow-left"></i>&nbsp;Previous Level</a>
					<button onclick="AddRoom()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Room</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="RoomTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="align-middle never"></th>
						<th class="align-middle never"></th>
						<th class="align-middle never"></th>
						<th class="align-middle all">Room Code</th>
						<th class="align-middle all">Room Name</th>
						<th class="align-middle all">Room Floor</th>
						<th class="align-middle all">Room Type</th>
						<th class="align-middle never"></th>
						<th class="align-middle all">Status</th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmRoom" id="frmRoom">
	<input type="hidden" name="formIden" id="formIden">
	<input type="hidden" name="rmint" id="rmint" onchange="intkey();" value="">
	<input type="hidden" name="wardcode" id="wardcode" onchange="intkey();">
	<input type="hidden" name="wardroom" id="wardroom">
	<div class="modal fade" id="ModalAddRoom" role="form">
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
						<div class="col-md-3 col-form-label text-default mb-1">Ward name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly="" id="name" name="name" placeholder="Ward Name">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Room code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onchange="intkey();" id="room_code" name="room_code" placeholder="Room Code" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Room name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="br_name" name="br_name" placeholder="Room Name" maxlength="50" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Room floor:</div>
						<div class="col-md-9">
							<select name="roomfloor" id="roomfloor" class="form-control form-control-mb mb-1">
								<option value="">Room Floor</option>
								<option value="1">First Floor</option>
								<option value="2">Second Floor</option>
								<option value="3">Third Floor</option>
								<option value="4">Fourth Floor</option>
								<option value="5">Fifth Floor</option>
								<option value="6">Sixth Floor</option>
								<option value="7">Seventh Floor</option>
								<option value="8">Eighth Floor</option>
								<option value="9">Ninth Floor</option>
								<option value="10">Tenth Floor</option>
								<option value="11">Eleventh Floor</option>
								<option value="12">Twelveth Floor</option>
								<option value="13">Thirteenth Floor</option>
								<option value="14">Fourteenth Floor</option>
								<option value="15">Fifteenth Floor</option>
								<option value="16">Sixteenth Floor</option>
								<option value="17">Seventeenth Floor</option>
								<option value="18">Eighteenth Floor</option>
								<option value="19">Nineteenth Floor</option>
								<option value="20">Twentieth Floor</option>
							</select>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Room type:</div>
						<div class="col-md-9">
							<select name="roomtype" id="roomtype" class="form-control form-control-mb mb-1">
								<option value="">Room Type</option>
								<option value="P">Private</option>
								<option value="W">Ward</option>
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

<form name="frmDeleteRoom" id="frmDeleteRoom">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<input type="hidden" name="deletewardcode" id="deletewardcode">
	<input type="hidden" name="deletewardroom" id="deletewardroom">
	<div class="modal fade" id="DeleteRoom" role="form">
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

<script type="text/javascript">
	$(function() {
		RoomList();
	});

	function RoomList() {
		var wardcode = atob('<?php echo $this->uri->segment(3); ?>');
		var wardname = atob('<?php echo $this->uri->segment(4); ?>');
		$("#ward").text(wardname);
		var data = new Object();
		data.id = "RoomTable";
		data.link = "<?php echo site_url('Ref_Ward/RoomList/'); ?>" + wardcode;
		data.type = "POST";
		data.coldef = [{
				targets: 5,
				searchable: false,
				render: function(data) {
					switch (data) {
						case '1':
							return ' First Floor';
							break;
						case '2':
							return ' Second Floor';
							break;
						case '3':
							return ' Third Floor';
							break;
						case '4':
							return ' Fourth Floor';
							break;
						case '5':
							return ' Fifth Floor';
							break;
						case '6':
							return ' Sixth Floor';
							break;
						case '7':
							return ' Seventh Floor';
							break;
						case '8':
							return ' Eighth Floor';
							break;
						case '9':
							return ' Ninth Floor';
							break;
						case '10':
							return ' Tenth Floor';
							break;
						case '11':
							return ' Eleventh Floor';
							break;
						case '12':
							return ' Twelveth Floor';
							break;
						case '13':
							return ' Thirteenth Floor';
							break;
						case '14':
							return ' Fourteenth Floor';
							break;
						case '15':
							return ' Fifteenth Floor';
							break;
						case '16':
							return ' Sixteenth Floor';
							break;
						case '17':
							return ' Seventeenth Floor';
							break;
						case '18':
							return ' Eighteenth Floor';
							break;
						case '19':
							return ' Nineteenth Floor';
							break;
						case '20':
							return ' Twentieth Floor';
							break;
						default:
							return ' ';
					}
				},
			},
			{
				targets: 6,
				searchable: false,
				render: function(data) {
					switch (data) {
						case 'P':
							return ' Private';
							break;
						case 'W':
							return ' Ward';
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
							return '<i class="fa fa-check text-success">&nbspActive</i>';
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
				targets: [0, 1, 8],
				searchable: false,
				visible: false,
			},
			{
				targets: [1, 2, 3, 4, 5, 6, 7, 8, 9],
				orderable: false,
			}
		];
		loadTable(data);
	}

	function AddRoom() {
		var wardcode = atob('<?php echo $this->uri->segment(3); ?>');
		var wardname = atob('<?php echo $this->uri->segment(4); ?>');
		var obj = getWardRoomNo(wardcode);
		var i;
		for (i = 1; i <= obj['wardcode']; i++) {
			$("#wardroom").val(i);
		}

		$('#ModalAddRoom').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIden").val('insert');
		$('#status option[value="A"]').prop("selected", true);
		$("#wardcode").val(wardcode);
		$("#name").val(wardname);
		$("#wardroom").val(i);
		$("#room_code").prop('readonly', false);
	}

	$("#RoomTable").on("click", ".ModalEditRoom", function() {
		var data = $(this).data();
		var wardcode = atob('<?php echo $this->uri->segment(3); ?>');
		var wardname = atob('<?php echo $this->uri->segment(4); ?>');
		var rmintkey = atob(data['rmintkey']);
		var roomcode = atob(data['rmcode']);
		var br_name = atob(data['rmname']);
		var roomfloor = atob(data['hrmfloor']);
		var roomtype = atob(data['rmtype']);
		var status = atob(data['rmstat']);

		$('#ModalAddRoom').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIden").val('update');
		$("#wardcode").val(wardcode);
		$("#name").val(wardname);
		$("#rmint").val(rmintkey);
		$("#room_code").val(roomcode);
		$("#br_name").val(br_name);
		$('#roomfloor option[value="' + roomfloor + '"]').prop("selected", true);
		$("#roomtype").val(roomtype);
		$('#status option[value="' + status + '"]').prop("selected", true);
		$("#room_code").prop('readonly', true);
	});

	$("#RoomTable").on("click", ".ModalDeleteRoom", function() {
		var data = $(this).data();
		var wardcode = atob('<?php echo $this->uri->segment(3); ?>');
		var intkey = atob(data['rmintkey']);
		var rmname = atob(data['rmname']);
		var obj = getWardRoomNo(wardcode);
		var i;
		var x;
		for (i = 1; i <= obj['wardcode']; i++) {
			x = i - 1;
			$("#deletewardroom").val(x);
		}

		$('#DeleteRoom').modal({
			backdrop: 'static'
		}).draggable({});;
		$("#formIdentification").val('delete');
		$("#deletecode").val(intkey);
		$("#deletewardcode").val(wardcode);
		$("#deletewardroom").val(x);
		$("#desc").text(rmname);
	});

	function getWardRoomNo(wardcode) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_Ward/getWardRoomNo",
			data: {
				wardcode: wardcode
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function intkey() {
		$('#rmint').val($('#wardcode').val() + $('#room_code').val());
	}
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_room/ref_room_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_room/delete.js"></script>