<style>

table#DiagnosisICD10Table.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-heartbeat"></i>
					&nbsp <?php echo $header; ?> &nbsp;<small><?php echo $subheader;?></small>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" title="Add Sub Group 3" role="group" aria-label="">
					<button onclick="AddDiagnosisICD10()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Sub Group 3" data-toggle="tooltip"><i class="fa fa-plus"></i> Add Sub Group 3</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="DiagnosisICD10Table" class="table table-sm table-striped  table-bordered table-condensedtable-hover " width="100%">
			<thead>
				<tr class="" align="center">
					<th>DISEASE CATEGORY</th>
					<th>DISEASE SUB-CATEGORY</th>
					<th>DIAGNOSIS CODE</th>
					<th>DESCRIPTION</th>
					<th>INCLUDE</th>
					<th>ALTERNATE CODE</th>
					<th></th>
					<th width="10%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmDiagnosisICD10" id="frmDiagnosisICD10">
	<div class="modal fade" id="ModalAddDiagnosisICD10" name="ModalAddDiagnosisICD10" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i>&nbsp; <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" name="addID" id="addID">
							<input type="hidden" name="diagsubcat" id="diagsubcat" value="">
							<input type="hidden" name="diagscat" id="diagscat" value="">
							<input type="hidden" name="diagcat" id="diagcat" value="">

							<div class="col-md-3 col-form-label text-default mb-1">Diagnosis Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="diagcode" name="diagcode" placeholder="A00.00">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="diagdesc" name="diagdesc" placeholder="Diagnosis Description">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Include:</div>
							<div class="col-md-9">
								<select name="diagcheck" id="diagcheck" class="form-control">
									<option value="">Select</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Alternate Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="diagalco" name="diagalco" placeholder="">
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

	<form name="frmDeleteDiagnosisICD10" id="frmDeleteDiagnosisICD10">
		<input type="hidden" name="formID" id="formID">
		<input type="hidden" name="deletekey" id="deletekey">
		<div class="modal fade" id="DeleteDiagnosisICD10" role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h3 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h3>
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
			DiagnosisICD10List();
		});

		function DiagnosisICD10List() {
			var diagcat = atob('<?php echo $this->uri->segment(3); ?>');
			var diagscat = atob('<?php echo $this->uri->segment(4); ?>');
			var diagsubcat = atob('<?php echo $this->uri->segment(5); ?>');
			diagcat = encodeURIComponent(encodeURIComponent(diagcat));
			diagscat = encodeURIComponent(encodeURIComponent(diagscat));
			diagsubcat = encodeURIComponent(encodeURIComponent(diagsubcat));
			var data = new Object();
			data.id = "DiagnosisICD10Table";
			data.link = "<?php echo site_url('Ref_Diagnosis/DiagnosisICD10List/'); ?>" + diagcat + "/" + diagscat + "/" + diagsubcat;
			data.type = "POST";
			data.coldef = [{
				targets: [6],
				visible: false,
			},
			{
				targets: [4],
				searchable: false,
				render: function(data, type, row) {
					switch (data) {
						case 'Y':
						return '<input type="checkbox" value="Y" checked disabled>';
						break;
						case 'N':
						return '<input type="checkbox" value="N" unchecked disabled>';
						break;
						default:
						return '<input type="checkbox" value="" unchecked disabled>';
					}
				},
			}
			];
			loadTable(data);
		}

		function AddDiagnosisICD10() {
			$('#ModalAddDiagnosisICD10').modal({ backdrop: 'static' }).draggable();
			$("#addID").val('insert');
			var diagcat = atob('<?php echo $this->uri->segment(3); ?>');
			var diagscat = atob('<?php echo $this->uri->segment(4); ?>');
			var diagsubcat = atob('<?php echo $this->uri->segment(5); ?>');
			diagcat = encodeURIComponent(encodeURIComponent(diagcat));
			diagscat = encodeURIComponent(encodeURIComponent(diagscat));
			diagsubcat = encodeURIComponent(encodeURIComponent(diagsubcat));
			$("#diagcat").val(diagcat);
			$("#diagscat").val(diagscat);
			$("#diagsubcat").val(diagsubcat);
		}

		$("#DiagnosisICD10Table").on("click", ".ModalEditDiagnosisICD10", function() {
			var data = $(this).data();
			var diagcode = atob(data['diagcode']);
			var diagdesc = atob(data['diagdesc']);
			$('#ModalAddDiagnosisICD10').modal({ backdrop: 'static' }).draggable();
			$("#addID").val('update');
			$("#diagcat").val(atob(data['diagcat']));
			$("#diagscat").val(atob(data['diagscat']));
			$("#diagcode").val(diagcode);
			$("#diagdesc").val(diagdesc);
			$("#diagcheck option[value='" + data['diagcheck']+"']").attr("selected","selected");
			$("#diagalco").val(data['diagalco']);
			$("#diagsubcat").val(data['diagsubcat']);
		});

		$("#DiagnosisICD10Table").on("click", ".ModalDeleteDiagnosisICD10", function() {
			var data = $(this).data();
			var diagcode = data['diagcode'];
			$('#DeleteDiagnosisICD10').modal({ backdrop: 'static' }).draggable();
			$("#formID").val('delete');
			$("#deletekey").val(diagcode);
		});
	</script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_diagnosislibrary/diagicd10valid.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_diagnosislibrary/deletediagicd10.js"></script>