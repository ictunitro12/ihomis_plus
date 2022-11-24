<style>
	table#Sub1CategoryTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>&nbsp;<h4><small>(<span id="majorcat" name="majorcat"></span>)</small></h4>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-arrow-left"></i>&nbsp;Previous Level</a>
					<button onclick="AddSub1Category()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Sub 1 Category</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="Sub1CategoryTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="never"></th>
						<th class="never"></th>
						<th class="never"></th>
						<th class="align-middle all">Sub 1 Category Code</th>
						<th class="align-middle all">Description</th>
						<th class="align-middle all">Status</th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmSub1Category" id="frmSub1Category">
	<input type="hidden" name="addID" id="addID" value="">
	<input type="hidden" name="key" id="key" value="">
	<input type="hidden" name="mccode" id="mccode" value="">
	<input type="hidden" name="cl1upsw" id="cl1upsw" value="">
	<div class="modal fade" id="ModalAddSub1Category" name="ModalAddSub1Category" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1">Major Category:</div>
						<div class="col-md-9">
							<textarea class="form-control form-control-mb mb-1" autocomplete="off" readonly id="mcdesc" name="mcdesc"></textarea>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onChange="UpdateInfo();" readonly id="s1ccode" name="s1ccode" placeholder="Sub 1 category code" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-9">
							<textarea type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="s1cdesc" name="s1cdesc" placeholder="Description" maxlength="60" required></textarea>
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

<form name="frmDeleteSub1Category" id="frmDeleteSub1Category">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSub1Category" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="desc" name="desc"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
		Sub1CategoryList();
	});

	function Sub1CategoryList() {
		var ptcode = atob('<?php echo $this->uri->segment(3); ?>');
		var ptdesc = atob('<?php echo $this->uri->segment(4); ?>');

		localStorage.setItem("ptcode", ptcode);
		localStorage.setItem("ptdesc", ptdesc);

		$("#majorcat").text(ptdesc);

		ptcode = encodeURIComponent(encodeURIComponent(ptcode));

		var data = new Object();
		data.id = "Sub1CategoryTable";
		data.link = "<?php echo site_url('Ref_NonDrugs/Sub1CategoryList/'); ?>" + ptcode;
		data.type = "POST";
		data.coldef = [{
				targets: [5],
				render: function(data, type, row) {
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
				targets: [0, 1],
				visible: false,
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6],
				orderable: false,
			},
			{
				targets: [0, 1, 2, 5, 6],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddSub1Category() {
		var ptcode = localStorage.getItem("ptcode");
		var ptdesc = localStorage.getItem("ptdesc");

		$('#ModalAddSub1Category').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#mccode").val(ptcode);
		$("#mcdesc").val(ptdesc);
		$("#cl1upsw").val('P');
		$('#s1ccode').change(UpdateInfo);
		$('#status option[value="A"]').prop("selected", true);
		$("#mcdesc").prop('readonly', true);
		$("#s1ccode").prop('readonly', false);
	}

	$("#Sub1CategoryTable").on("click", ".ModalEditSub1Category", function() {
		var data = $(this).data();
		var cl1comb = data['cl1comb'];
		var obj = getSub1Category(cl1comb);

		$('#ModalAddSub1Category').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('update');
		$("#key").val(obj['cl1comb']);
		$("#mccode").val(obj['ptcode']);
		$("#mcdesc").val(obj['ptdesc']);
		$("#s1ccode").val(obj['cl1code']);
		$("#s1cdesc").val(obj['cl1desc']);
		$('#status option[value="' + obj['cl1stat'] + '"]').prop("selected", true);
		$("#cl1upsw").val('U');
		$('#s1ccode').change(UpdateInfo);
		$("#mcdesc").prop('readonly', true);
		$("#s1ccode").prop('readonly', true);
	});

	$("#Sub1CategoryTable").on("click", ".ModalDeleteSub1Category", function() {
		var data = $(this).data();
		var cl1comb = atob(data['cl1comb']);
		var cl1desc = atob(data['cl1desc']);

		$('#DeleteSub1Category').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(cl1comb);
		$("#desc").text(cl1desc);
	});

	function UpdateInfo() {
		if ($("#addID").val() == 'insert') {
			var ptcode = $('#ptcode').val();
			var cl1code = $('#s1ccode').val();

			$("#key").val(ptcode + cl1code);
		} else {
			$("#key").val(data['cl1comb']);
		}
	}

	function getSub1Category(cl1comb) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_NonDrugs/getSub1Category/" + cl1comb,
			data: {
				cl1comb: cl1comb
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
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/sub1category.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_nondrugs/deletesub1category.js"></script>