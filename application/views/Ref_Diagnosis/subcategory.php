<style>

table#SubCategoryTable.dataTable tbody tr:hover {
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
					<button onclick="AddSubCategory()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add SubCategory" data-toggle="tooltip"><i class="fa fa-plus"></i> Add SubCategory</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="SubCategoryTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover " width="100%">
			<thead>
				<tr class="" align="center">
					<th>DISEASE CATEGORY</th>
					<th>DISEASE SUB CATEGORY</th>
					<th>DESCRIPTION</th>
					<th></th>
					<th width="16%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmSubCategory" id="frmSubCategory">
	<div class="modal fade" id="ModalAddSubCategory" name="ModalAddSubCategory" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="addID" id="addID" value="">
						<div class="col-md-4 col-form-label text-default mb-1">Disease Category:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" autocomplete="off" readonly id="diagcat" name="diagcat">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Disease Subcategory:</div>
						<div class="col-md-8">
							<input type="text" class="form-control form-control-mb" autocomplete="off" readonly id="diagscat" name="diagscat" placeholder="___-___">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">Description:</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control-mb" autocomplete="off" id="scatdesc" name="scatdesc" placeholder="Description"></textarea>
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

<form name="frmDeleteSubCategory" id="frmDeleteSubCategory">
	<input type="hidden" name="formID" id="formID">
	<input type="hidden" name="deletekey" id="deletekey">
	<div class="modal fade" id="DeleteSubCategory" role="form">
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
		SubCategoryList();
	});

	function SubCategoryList() {
		var diagcat = atob('<?php echo $this->uri->segment(3); ?>');
		diagcat = encodeURIComponent(encodeURIComponent(diagcat));
		var data = new Object();
		data.id = "SubCategoryTable";
		data.link = "<?php echo site_url('Ref_Diagnosis/SubCategoryList/'); ?>" + diagcat;
		data.type = "POST";
		data.coldef = [{
			targets: [3],
			searchable: false,
			visible: false,
		}];
		loadTable(data);
	}

	function AddSubCategory() {
		var diagcat = atob('<?php echo $this->uri->segment(3); ?>');
		$('#ModalAddSubCategory').modal({ backdrop: 'static' }).draggable();
		$("#addID").val('insert');
		$("#diagcat").val(diagcat);
		$("#diagscat").prop('readonly', false);
	}

	$("#SubCategoryTable").on("click", ".ModalEditSubCategory", function() {
		var data = $(this).data();
		var diagcat = atob(data['diagcat']);
		var diagscat = atob(data['diagscat']);
		var scatdesc = data['scatdesc'];

		$('#ModalAddSubCategory').modal({ backdrop: 'static' }).draggable();
		$("#addID").val('update');
		$("#diagcat").val(diagcat);
		$("#diagscat").val(diagscat);
		$("#scatdesc").val(scatdesc);
	});
	$("#SubCategoryTable").on("click", ".ModalDeleteSubCategory", function() {
		var data = $(this).data();
		var diagscat = atob(data['diagscat']);
		$('#DeleteSubCategory').modal({ backdrop: 'static' }).draggable();
		$("#formID").val('delete');
		$("#deletekey").val(diagscat);
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/ref_diagnosislibrary/subcategoryvalid.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/ref_diagnosislibrary/deletesubcategory.js"></script>