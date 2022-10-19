<style>
	table#PersonnelTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h4 text text-success">
					<i class="fa fa-file-text-o"></i>&nbsp;<?php echo $header; ?>&nbsp;&nbsp;<small><?php echo $subheader; ?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddPersonnel()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp;Add Personnel</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="PersonnelTable" class="table table-sm table-bordered table-condensed table-hover" width="100%">
				<thead class="">
					<tr>
						<th class="align-middle" width="10%">Employee ID</th>
						<th class="align-middle" width="26%">Employee Name<br>(<small>Prefix Firstname Middlename Lastname Suffix, Extension name</small>)</th>
						<th class="align-middle" width="24%">Department</th>
						<th class="align-middle" width="24%">Position Title</th>
						<th class="align-middle" width="7%">Status</th>
						<th class="align-middle" width="10%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="card-footer"></div>
</div>

<form name="frmPersonnel" id="frmPersonnel">
	<div class="modal fade" id="ModalAddPersonnel" name="ModalAddPersonnel" role="form">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $header; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<input type="hidden" name="formIden" id="formIden" value="">

								<div class="col-md-4 col-form-label  text-default mb-1">
									<i class="fa fa-asterisk text-danger"></i>&nbsp;Employeed ID:
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1 stripspaces" id="empid" name="empid" placeholder="Employee ID" maxlength="10" required readonly>
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									Prefix:
								</div>
								<div class="col-md-8">
									<select name="empprefix" id="empprefix" class="form-control form-control-mb mb-1">
										<option value="">Select</option>
										<option value="NOTAP">N/A</option>
										<option value="MR">Mr</option>
										<option value="MS">Ms</option>
										<option value="MRS">Mrs</option>
										<option value="DR">Doctor</option>
										<option value="ENGR">Engineer</option>
										<option value="ATTY">Attorney</option>
									</select>
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									<i class="fa fa-asterisk text-danger"></i>&nbsp;Last name:
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="emplname" name="emplname" placeholder="Last name" maxlength="50" required>
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									<i class="fa fa-asterisk text-danger"></i>&nbsp;First name:
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="empfname" name="empfname" placeholder="First name" maxlength="50" required>
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									Middle name:
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="empmname" name="empmname" placeholder="Middle name" maxlength="50">
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									Maiden name:
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="empmdname" name="empmdname" placeholder="Maiden name" maxlength="50">
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									Extension name:
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="empename" name="empename" placeholder="Extension name" maxlength="255">
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									Suffix:
								</div>
								<div class="col-md-8">
									<select name="empsuffix" id="empsuffix" class="form-control form-control-mb mb-1">
										<option value="">Not applicable</option>
										<option value="SR.">Sr</option>
										<option value="JR">Jr</option>
										<option value="I">I</option>
										<option value="II">II</option>
										<option value="III">III</option>
										<option value="IV">IV</option>
										<option value="IV">IV</option>
										<option value="V">V</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="row">
								<label class="col-md-4 col-form-label text-default mb-1">
									<i class="fa fa-asterisk text-danger"></i>&nbsp;Department:
								</label>
								<div class="col-md-8">
									<select name="selDepartment" id="selDepartment" class="form-control form-control-mb mb-1" required></select>
								</div>
								<label class="col-md-4 col-form-label text-default mb-1">
									Position:
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="empposition" name="empposition" placeholder="Position/Designation" maxlength="60">
								</div>
								<label class="col-md-4 col-form-label text-default mb-1">
									TIN:
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" id="emptin" name="emptin" placeholder="Tax identification number" maxlength="20">
								</div>
								<label class="col-md-4 col-form-label text-default mb-1">
									Complete address:
								</label>
								<div class="col-md-8">
									<textarea class="form-control form-control-mb mb-1" id="address" name="address" maxlength="155"></textarea>
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">
									Contact number:
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control form-control-mb mb-1" autocomplete="off" id="empcno" name="empcno" placeholder="Contact number" maxlength="50">
								</div>
								<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
								<div class="col-md-8">
									<select name="status" id="status" class="form-control">
										<option value="A">Active</option>
										<option value="I">Inactive</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeletePersonnel" id="frmDeletePersonnel">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeletePersonnel" role="form">
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
		PersonnelList();
	});

	function PersonnelList() {
		deleteAllCookie();
		var data = new Object();
		data.id = "PersonnelTable";
		data.link = "<?php echo site_url('Ref_Personnel/PersonnelList'); ?>";
		data.type = "POST";
		data.coldef = [{
				targets: [4],
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
				targets: [0, 1, 2, 3, 4, 5],
				orderable: false,
			},
			{
				targets: [4, 5],
				searchable: false,
			}
		];
		loadTable(data);
	}

	function AddPersonnel() {
		$('#ModalAddPersonnel').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formIden").val('insert');
		$('#status option[value="A"]').prop("selected", true);
		$('#empid').prop("readonly", false);

		SelDepartment();
	}

	$("#PersonnelTable").on("click", ".ModalEditPersonnel", function() {
		var data = $(this).data();
		var employeeid = atob(data['employeeid']);
		var obj = getPersonnel(employeeid);
		var deptcode = obj['deptcode'];

		$('#ModalAddPersonnel').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formIden").val('update');
		$("#empid").val(obj['employeeid']);
		$("#emplname").val(obj['lastname']);
		$("#empfname").val(obj['firstname']);
		$("#empmname").val(obj['middlename']);
		$("#empmdname").val(obj['maidenname']);
		$("#empename").val(obj['extensionname']);
		$('#status option[value="' + obj['empstat'] + '"]').prop("selected", true);
		$("#empposition").val(obj['postitle']);
		$("#address").val(obj['paddr']);
		$('#empsuffix option[value="' + obj['empsuffix'] + '"]').prop("selected", true);
		$('#empprefix option[value="' + obj['empprefix'] + '"]').prop("selected", true);
		$("#emptin").val(obj['tin']);
		$("#empcno").val(obj['contactno']);
		$('#selDept option[value="' + obj['deptcode'] + '"]').prop("selected", true);
		$('#empid').prop("readonly", true);

		SelDepartment();
		setDepartment(deptcode);
	});

	function getPersonnel(employeeid) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_Personnel/getPersonnel/" + employeeid,
			data: {
				employeeid: employeeid
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	$("#PersonnelTable").on("click", ".ModalDeletePersonnel", function() {
		var data = $(this).data();
		var employeeid = atob(data['employeeid']);

		$('#DeletePersonnel').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(employeeid);
	});


	$(".stripspaces").keyup(function() {
		$(this).val($(this).val().replace(/\s/g, ""));
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_personnel/personnel_validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_personnel/delete.js"></script>