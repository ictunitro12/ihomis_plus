<style>
	table#BranchTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>&nbsp;<small>(<span id="bank"></span>)</small>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-arrow-left"></i>&nbsp;Previous Level</a>
					<button onclick="AddBranch()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Branch
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="BranchTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead>
					<tr>
						<th class="align-middle never">bnkcode</th>
						<th class="align-middle never">brintkey</th>
						<th class="align-middle never">Bank Name</th>
						<th class="align-middle all">Branch Code</th>
						<th class="align-middle all">Branch Name</th>
						<th class="align-middle all">Status</th>
						<th class="align-middle all" width="1%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmBranch" id="frmBranch">
	<input type="hidden" name="formIden" id="formIden">
	<input type="hidden" name="brint" id="brint" onchange="intkey();" value="">
	<input type="hidden" name="bnkcode" id="bnkcode" onchange="intkey();">
	<div class="modal fade" id="ModalAddBranch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered " role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp;<?php echo $header; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1">Bank Name:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" readonly="" id="name" name="name" placeholder="Bank Name">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Branch Code:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" onchange="intkey();" id="br_code" name="br_code" placeholder="Branch Code" maxlength="5" required>
						</div>
						<div class="col-md-3 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger"></i>&nbsp;Branch Name:</div>
						<div class="col-md-9">
							<textarea class="form-control form-control-mb mb-1" autocomplete="off" id="br_name" name="br_name" placeholder="Branch Name" maxlength="100" required></textarea>
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

<form name="frmDeleteBranch" id="frmDeleteBranch">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	<div class="modal fade" id="DeleteBranch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="branch" name="branch"></span>
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
		BranchList();
		var bankcode = atob('<?php echo $this->uri->segment(3); ?>');
		var bankname = atob('<?php echo $this->uri->segment(4); ?>');
		$("#bnkcode").val(bankcode);
		$("#name").val(bankname);
		$("#bank").text(bankname);
	});

	function BranchList() {
		var bankcode = atob('<?php echo $this->uri->segment(3); ?>');
		var data = new Object();
		data.id = "BranchTable";
		data.link = "<?php echo site_url('Ref_Bank/BranchList/'); ?>" + bankcode;
		data.type = "POST";
		data.coldef = [{
				targets: 5,
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
				targets: [0, 1, 2],
				searchable: false,
				visible: false,
			},
			{
				targets: [5, 6],
				searchable: false,
			},
			{
				targets: [1, 2, 3, 4, 5, 6],
				orderable: false,
			},

		];
		loadTable(data);
	}

	function AddBranch() {
		var bankcode = atob('<?php echo $this->uri->segment(3); ?>');
		var bankname = atob('<?php echo $this->uri->segment(4); ?>');

		$('#ModalAddBranch').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formIden").val('insert');
		$("#bnkcode").val(bankcode);
		$("#name").val(bankname);
		$('#status option[value="A"]').prop("selected", true);
		$("#br_code").prop('readonly', false);
		$("#bnkcode").prop('readonly', false);
	}

	$("#BranchTable").on("click", ".ModalEditBranch", function() {
		var data = $(this).data();
		var bankcode = atob('<?php echo $this->uri->segment(3); ?>');
		var bankname = atob('<?php echo $this->uri->segment(4); ?>');

		$('#ModalAddBranch').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formIden").val('update');
		$("#bnkcode").val(bankcode);
		$("#name").val(bankname);
		$("#br_code").val(data['bnkbrcode']);
		$("#br_name").val(data['brchname']);
		$('#status option[value="' + data['bnkstat'] + '"]').prop("selected", true);
		$("#br_code").prop('readonly', true);
		$("#bnkcode").prop('readonly', true);
	});

	$("#BranchTable").on("click", ".ModalDeleteBranch", function() {
		var data = $(this).data();

		$('#DeleteBranch').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['brintkey']);
		$("#branch").text(data['brchname']);
	});

	function intkey() {
		$('#brint').val($('#bnkcode').val() + $('#br_code').val());
	}

	function getBranch(bnkbrcode) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_Bank/editBranch",
			data: {
				bnkbrcode: bnkbrcode
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
<script src="<?php echo base_url() ?>assets/scripts/ref_branch/ref_branch_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_branch/delete.js"></script>