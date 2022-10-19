<style>

table#Sub3rdlevelTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-8 col-md-auto">
				<div class="h3 text text-success">
					<i class="fa fa-heartbeat"></i>
					&nbsp <?php echo $header; ?> &nbsp;<small><?php echo $subheader;?></small>
				</div>
			</div>
			<div class="col-md-4 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddSub3rdlevel()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Sub Group 2" data-toggle="tooltip"><i class="fa fa-plus"></i> Add Sub Group 2</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="Sub3rdlevelTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover " width="100%">
			<thead>
				<tr class="" align="center">
					<th>DISEASE CATEGORY</th>
					<th>2nd LEVEL CATEGORY</th>
					<th>3rd LEVEL CATEGORY CODE</th>
					<th>3rd LEVEL CATEGORY DESCRIPTION</th>
					<th>MORBIDITY</th>
					<th>MORTALITY</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th width="16%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmSub3rdlevel" id="frmSub3rdlevel">
	<div class="modal fade" id="ModalAddSub3rdlevel" name="ModalAddSub3rdlevel" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> Disease 3rd Level Category</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" name="addID" id="addID" value="">
							<input type="hidden" name="temp_morbid" id="temp_morbid" value="">
							<div class="col-md-4 col-form-label text-default mb-1">Disease Category:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="diagcat" name="diagcat" readonly>
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">2nd Level Category:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="diagscat" name="diagscat" readonly>
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">3rd Level Category Code:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" id="diagsubcat" name="diagsubcat" placeholder="-00">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-8">
								<textarea type="text" class="form-control form-control-mb" autocomplete="off" id="subcatdesc" name="subcatdesc" placeholder="Description"></textarea>
							</div>

							<div class="col-md-4 col-form-label text-default mb-1">Morbidity:</div>
							<div class="col-md-8">
								<select name="selMorbid" id="selMorbid" class="form-control">
									<option></option>
								</select>
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Mortality:</div>
							<div class="col-md-8">
								<select name="selMortal" id="selMortal" class="form-control">
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

	<form name="frmDeleteSub3rdlevel" id="frmDeleteSub3rdlevel">
		<input type="hidden" name="formID" id="formID">
		<input type="hidden" name="deletekey" id="deletekey">
		<div class="modal fade" id="DeleteSub3rdlevel" role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h3 class="modal-title text-white"><i class=""></i></h3>
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
			Sub3rdlevelList();
		});

		function Sub3rdlevelList() {
			var diagcat = atob('<?php echo $this->uri->segment(3); ?>');
			var diagscat = atob('<?php echo $this->uri->segment(4); ?>');
			diagcat = encodeURIComponent(encodeURIComponent(diagcat));
			diagscat = encodeURIComponent(encodeURIComponent(diagscat));
			var data = new Object();
			data.id = "Sub3rdlevelTable";
			data.link = "<?php echo site_url('Ref_Diagnosis/Sub3rdlevelList/'); ?>" + diagcat + "/"+ diagscat;
			data.type = "POST"; 
			data.coldef = [{
				targets: [6, 7, 8, 9, 10],
				visible: false,
			}];
			loadTable(data);
		}

		function AddSub3rdlevel() {
			SelMorbidity();
			SelMortality();
			var diagcat = atob('<?php echo $this->uri->segment(3); ?>');
			var diagscat = atob('<?php echo $this->uri->segment(4); ?>');
			$('#ModalAddSub3rdlevel').modal({ backdrop: 'static' }).draggable();
			$("#addID").val('insert');
			$('#diagcat').val(diagcat);
			$('#diagscat').val(diagscat);
		}

		$("#Sub3rdlevelTable").on("click", ".ModalEditSub3rdlevel", function() {
			var data = $(this).data();
			var diagcat = atob(data['diagcat']);
			var diagscat = atob(data['diagscat']);
			var diagsubcat = atob(data['diagsubcat']);
			$('#ModalAddSub3rdlevel').modal({ backdrop: 'static' }).draggable();
			$("#addID").val('update');
			$('#diagcat').val(diagcat);
			$('#diagscat').val(diagscat);
			$('#diagsubcat').val(diagsubcat);
			$('#subcatdesc').val(data['subcatdesc']);
			var morbid_code = data['morbid_code'];
			setMorbidity(morbid_code);
			var mortal_code = data['mortal_code'];
			setMortality(mortal_code);
			$('#selMorbid').val(data['morbid_code']);
			$('#selMortal').val(data['mortal_code']);

		});

		$("#Sub3rdlevelTable").on("click", ".ModalDeleteSub3rdlevel", function() {
			var data = $(this).data();
			var diagsubcat = atob(data['diagsubcat']);
			$('#DeleteSub3rdlevel').modal({ backdrop: 'static' }).draggable();
			$("#formID").val('delete');
			$("#deletekey").val(diagsubcat);
		});
	</script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_diagnosislibrary/sub3rdlevelvalid.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/ref_diagnosislibrary/deletesub3rdlevel.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/library.js"></script>