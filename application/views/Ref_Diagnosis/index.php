<style>

table#DiagnosisTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-8 col-md-auto">
				<div class="h3 text text-success"> 
					<i class="fa fa-heartbeat"></i>
					&nbsp <?php echo $header;?> &nbsp;<small><?php echo $subheader;?></small>
				</div>
			</div>
			<div class="col-md-4 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label=""> 
					<button onclick="AddDiagnosis()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Disease Category" data-toggle="tooltip"><i class="fa fa-plus"></i> Add Disease Category</button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="DiagnosisTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover " width="100%">
			<thead>
				<tr class=""  align="center">
					<th>DISEASE CATEGORY</th>
					<th>DESCRIPTION</th>
					<th></th>
					<th width="10%">ACTIONS</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<form name="frmDiagnosis" id="frmDiagnosis">
	<div class="modal fade" id="ModalAddDiagnosis" name="ModalAddDiagnosis" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" name="addID" id="addID" value="">
							<div class="col-md-4 col-form-label text-default mb-1">Disease Category:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off" readonly id="diagcat" name="diagcat" placeholder ="Code">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-8">
								<textarea type="text" class="form-control form-control-mb" autocomplete="off"  id="catdesc" name="catdesc" placeholder ="Description"></textarea>
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

	<form name="frmDeleteDiagnosis" id="frmDeleteDiagnosis">
		<input type="hidden" name="formID" id="formID">
		<input type="hidden" name="deletekey" id="deletekey">
		<div class="modal fade" id="DeleteDiagnosis" role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h3 class="modal-title text-white" ><i class=""></i>&nbsp</h3>
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
		$(function(){
			DiagnosisList();
		});

		function DiagnosisList(){
			var data = new Object();
			data.id = "DiagnosisTable";
			data.link = "<?php echo site_url('Ref_Diagnosis/DiagnosisList');?>";
			data.type = "POST";
			data.coldef =[{
				targets : [2],
				visible: false,
				searchable:false,
			}];		
			loadTable(data);
		}

		function AddDiagnosis(){
			$('#ModalAddDiagnosis').modal({ backdrop: 'static' }).draggable();
			$("#addID").val('insert');
			$('#diagcat').prop('readonly',false);
		}

		$("#DiagnosisTable").on("click",".ModalEditDiagnosis",function(){
			var data = $(this).data();
			var diagcat = atob(data['diagcat']);
			var catdesc = atob(data['catdesc']);

			$('#ModalAddDiagnosis').modal({ backdrop: 'static' }).draggable();
			$("#addID").val('update');
			$("#diagcat").val(diagcat);
			$("#catdesc").val(catdesc);
			$("#diagcat").prop('readonly',true);
		});

		$("#DiagnosisTable").on("click",".ModalDeleteDiagnosis",function(){
			var data = $(this).data();
			var diagcat = atob(data['diagcat']);
			$('#DeleteDiagnosis').modal({ backdrop: 'static' }).draggable();
			$("#formID").val('delete');
			$("#deletekey").val(diagcat);
		});
	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_diagnosislibrary/validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_diagnosislibrary/delete.js"></script>

