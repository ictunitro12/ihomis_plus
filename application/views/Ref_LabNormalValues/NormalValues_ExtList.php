<style>

table#NormalvalueExTable.dataTable tbody tr:hover {
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
						<a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Previous Level" data-toggle="tooltip"><i class="fa fa-arrow-left"></i> Previous Level</a>
						<button onclick="AddNormalvalueEx()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Normal Value" data-toggle="tooltip" width="100%"><i class="fa fa-plus"> </i> Add
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body table-responsive">
			<table id="NormalvalueExTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
				<thead>
					<tr class="">
						<th>Normal Value ID</th>
						<th>Examination Type</th>
						<th>Description</th>
						<th>Normal Value</th>
						<th>Min Normal Value</th>
						<th>Max Normal Value</th>
						<th>Unit</th>
						<th>Sex</th>
						<th>Status</th>
						<th>Date Created</th>
						<th>Date Modified</th>
						<th width="5%"></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<form name="frmNormalvalueEx" id="frmNormalvalueEx">
		<div class="modal fade" id="ModalAddNormalvalueEx" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp <?php echo $header; ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" name="formIden" id="formIden">
							<input type="hidden" id="testresultid" name="testresultid" />
							<input type="hidden" id="normalvalue_id" name="normalvalue_id" />
							<div class="col-md-4 col-form-label text-default mb-1">Test Result:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" readonly="" id="result_type" name="result_type" />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Description :</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="description" name="description" placeholder="Description" required />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Normal Value :</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="nvx_normalvalues" name="nvx_normalvalues" placeholder="Normal value" />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Min Normal Value :</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="nvx_min" name="nvx_min" placeholder="Minimum value" required />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Max Normal Value :</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="nvx_max" name="nvx_max" placeholder="Max value" required />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Unit :</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="unit" name="unit" placeholder="Unit" required />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Sex :</div>
							<div class="col-md-8">
								<select name="nv_sex" id="nv_sex" class="form-control">
									<option value="M">Male</option>
									<option value="F">Female</option>
									<option value="N" selected>No</option>
								</select>
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Date Created :</div>
							<div class="col-md-8">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="date_created" name="date_created" />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Date Modified :</div>
							<div class="col-md-8">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="date_modified" name="date_modified" />
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
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
							<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</form>

	<form name="frmDeleteNormalvalueEx" id="frmDeleteNormalvalueEx">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		<input type="hidden" name="deletefunddte" id="deletefunddte">
		<div class="modal fade" id="DeleteNormalvalueEx" tabindex="-1" role="dialog">
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
					<div class="modal-footer">
						<div class="btn-group float-right">
							<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<input type="hidden" name="resultid" id="resultid">
	<script src="<?php echo base_url() ?>assets/scripts/ref_lab_normal_value/nvx_save.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_lab_normal_value/nvx_delete.js"></script>
	<script type="text/javascript">
		$(function() {
			NormalvalueExList();
		});

		function NormalvalueExList() {
			var resultid = atob('<?php echo $this->uri->segment(3); ?>');
			var resulttype = atob('<?php echo $this->uri->segment(4); ?>');
			var data = new Object();
			data.id = "NormalvalueExTable";
			data.link = "<?php echo site_url('Ref_LabNormalValues/NormalValue_ExtList/'); ?>" + resultid;
			data.type = "POST";
			data.coldef = [{
					targets: [7, 8],
					searchable: false,
					render: function(data) {
						switch (data) {
							case 'A':
								return '<i class="fa fa-check  text-success"></i>&nbsp Active';
								break;
							case 'I':
								return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
								break;
							case 'M':
								return '<i class="fa fa-male text-info"></i>&nbsp Male';
								break;
							case 'F':
								return '<i class="fa fa-female text-danger"></i>&nbsp Female';
								break;
							case 'N':
								return '<i class="fa fa-genderless bg-default text-warning"></i>&nbsp ---';
								break;
							default:
								return '<span class="badge bg-default">unknown</span>';
						}
					},
				},
				{
					targets: [0, 1],
					visible: false,
				},
				{
					targets: [9,10],
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

		/* $("#NormalvalueExTable").on("click", ".ModalDeleteNormalvalueEx", function() {
			var data = $(this).data();
			$('#DeleteNormalvalueEx').modal({ backdrop: 'static' }).draggable();
			$("#formIdentification").val('delete');
			$("#deletecode").val(data['normalvalue_id']);

		}); */

		$("#NormalvalueExTable").on("click", ".ModalEditNormalvalueEx", function() {
			var data = $(this).data();
			var nvx_ids = data['normalvalue_id'];
			var nvx_testresult = data['resultid'];
			var resultidd = atob('<?php echo $this->uri->segment(3); ?>');
			var resulttyped = atob('<?php echo $this->uri->segment(4); ?>');
			var nvx_resulttypes = resulttyped;
			var obj = getNormalvalueEx(nvx_ids, resultidd);
			$('#ModalAddNormalvalueEx').modal({
				backdrop: 'static'
			}).draggable();
			$("#formIden").val('update');
			$("#normalvalue_id").val(nvx_ids);
			$("#testresultid").val(nvx_testresult);
			$("#result_type").val(nvx_resulttypes);
			$("#description").val(obj['description']);
			$("#nvx_normalvalues").val(obj['normalvalue']);
			$("#nvx_min").val(obj['minnormalvalue']);
			$("#nvx_max").val(obj['maxnormalvalue']);
			$("#unit").val(obj['unit']);
			$('#stat option[value="' + obj['stat'] + '"]').prop("selected", true);
			$('#nv_sex option[value="' + obj['sex'] + '"]').prop("selected", true);
			var dtecreated = obj['date_created'];
			var date_created = setTimeLocale(dtecreated);
			$("#date_created").prop('readonly', true);
			var dtemodif = obj['date_modified'];
			var date_modified = getTimeLocale();
			$("#date_created").val(date_created);
			$("#date_modified").val(date_modified);
		});

		function AddNormalvalueEx() {
			$('#ModalAddNormalvalueEx').modal({
				backdrop: 'static'
			}).draggable();
			$("#formIden").val('insert');
			$("#date_created").val(getTimeLocale());
			$("#date_modified").val(getTimeLocale());
			$("#date_created").prop('readonly', false);
			var resultid = atob('<?php echo $this->uri->segment(3); ?>');
			var resulttype = atob('<?php echo $this->uri->segment(4); ?>');
			$("#testresultid").val(resultid);
			$("#result_type").val(resulttype);
			$('#stat option[value="A"]').prop("selected", true);
			$('#nv_sex option[value="N"]').prop("selected", true);

		}

		function getNormalvalueEx(nvx_ids, resultid) {
			var nvx_idss = encodeURIComponent(encodeURIComponent(nvx_ids));
			var resultids = encodeURIComponent(encodeURIComponent(resultid));
			$.ajax({
				type: "POST",
				url: baseURL + "Ref_LabNormalValues/getNormalvalueEx/" + nvx_idss + "/" + resultids,
				data: "JSON",
				async: false,
				success: function(data, status) {
					obj = $.parseJSON(data);
				},
				error: function(data, status) {}
			});
			return obj;
		}

		function changeinput() {
			var x = document.getElementById("description").value;
			if (x == 'COLOR' || x == 'Color' || x == 'color') {
				$("#nvx_normalvalues").prop('hidden', true);
				$("#nvx_normalvaluess").prop('hidden', false);
			} else {
				$("#nvx_normalvalues").prop('hidden', false);
				$("#nvx_normalvaluess").prop('hidden', true);
			}
			/* var x = document.getElementById("description").value;
  			document.getElementById("normalvalue").innerHTML = "You selected: " + x; */
		}
	</script>