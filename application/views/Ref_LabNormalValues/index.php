<style>

table#NormalvalueTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success">
						<i class="fa fa-th-list"></i>
						&nbsp;<?php echo $header; ?>
					</div>
				</div>

				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddNormalvalue()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Result" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="NormalvalueTable" class="table table-sm table-bordered table-condensed table-hover ">
				<thead>
					<tr class="">
						<th width="50px">ID</th>
						<th>Result Type</th>
						<th>Status</th>
						<th>Date Created</th>
						<th>Date Modified</th>
						<th width="10%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>


	<form name="frmNormalvalue" id="frmNormalvalue">
		<div class="modal fade" id="ModalAddNormalvalue" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white"><i class="fa fa-plus"></i> Examination Type</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" id="resultid" name="resultid">
							<div class="col-md-4 col-form-label text-default mb-1">Type :</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="resulttype" name="resulttype" required placeholder="Examination Type">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Date Created :</div>
							<div class="col-md-8">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="" id="date_created" name="date_created">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Date Modified :</div>
							<div class="col-md-8">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="" id="date_modified" name="date_modified">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Status :</div>
							<div class="col-md-8">
								<select name="stat" id="stat" class="form-control">
									<option value="A">Active</option>
									<option value="I">Inactive</option>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; Save</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</form>

	<form name="frmDeleteNormalvalue" id="frmDeleteNormalvalue">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		<input type="hidden" name="deletecoderesultt" id="deletecoderesultt">
		<div class="modal fade" id="DeleteNormalvalue" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h3 class="text-white"><i class=""></i></h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
					<div class="modal-footer bg-secondary">
						<div class="btn-group float-right">
							<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		$(function() {
			NormalvalueList();
		});

		function NormalvalueList() {
			var data = new Object();
			data.id = "NormalvalueTable";
			data.link = "<?php echo site_url('Ref_LabNormalvalues/NormalValue_List'); ?>";
			data.type = "POST";
			data.coldef = [{
					targets: 2,
					searchable: false,
					render: function(data) {
						switch (data) {
							case 'A':
								return '<i class="fa fa-check  text-success"></i>&nbsp Active';
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
					targets: 0,
					searchable: false,
					visible: false,
				},
				{
					targets: [3, 4],
					render: function(data) {
						var dateObject = new Date(data);
						var day = dateObject.getDate();
						var month = dateObject.getMonth() + 1;
						var year = dateObject.getFullYear();
						day = day < 10 ? "0" + day : day;
						month = month < 10 ? "0" + month : month;
						var formattedDate = month + "/" + day + "/" + year;
						return formattedDate;
					},
				}
			];
			loadTable(data);
		}

		$("#NormalvalueTable").on("click", ".ModalDeleteNormalvalue", function() {
			var data = $(this).data();
			var resultid = atob(data['resultid']);
			$('#DeleteNormalvalue').modal({
				backdrop: 'static'
			}).draggable();
			$("#formIdentification").val('delete');
			$("#deletecode").val(resultid);
			$("#deletecoderesultt").val(resultid);

		});

		$("#NormalvalueTable").on("click", ".ModalEditNormalvalue", function() {
			var data = $(this).data();
			var resultid = atob(data['resultid']);
			var date_created = atob(data['date_created']);
			var date_modified = atob(data['date_modified']);
			var date_created = setTimeLocale(date_created);
			$('#ModalAddNormalvalue').modal({
				backdrop: 'static'
			}).draggable();
			$("#formIden").val('update');
			$("#resultid").val(resultid);
			$("#resulttype").val(atob(data['resulttype']));
			$('#stat option[value="' + atob(data['stat']) + '"]').prop("selected", true);
			$("#date_created").val(date_created);
			$("#date_created").prop('readonly', true);
			$("#date_modified").val(getTimeLocale());
		});

		function AddNormalvalue() {
			$('#ModalAddNormalvalue').modal({
				backdrop: 'static'
			}).draggable();
			$("#formIden").val('insert');
			$('#stat option[value="A"]').prop("selected", true);
			$("#date_created").val(getTimeLocale());
			$("#date_created").prop('readonly', false);
			$("#date_modified").val(getTimeLocale());
		}


		function getNormalvalue(resultid) {
			var resultid = encodeURIComponent(encodeURIComponent(resultid));
			$.ajax({
				type: "POST",
				url: baseURL + "Ref_Normalvalue/getNormalvalue/" + resultid,
				data: "JSON",
				async: false,
				success: function(data, status) {
					obj = $.parseJSON(data);
				},
				error: function(data, status) {}
			});
			return obj;
		}
	</script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_lab_normal_value/nv_save.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_lab_normal_value/nv_delete.js"></script>