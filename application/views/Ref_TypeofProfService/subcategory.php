<div class="card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto">
				<div class="h3 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp <?php echo $header;?>
				</div>
			</div>
			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" title="Add Sub-category" role="group" aria-label=""> 
					<button onclick="AddSubCategory()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i></button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-body table-responsive">
		<table id="SubCategoryTable" class="table table-sm table-striped  table-bordered table-condensedtable-hover ">
			<thead>
				<tr class="thead-dark"  align="center">
					<th></th>
					<th>MAJOR CATEGORY</th>
					<th>SUB-1 CATEGORY CODE</th>
					<th>DESCRIPTION</th>
					<th>STATUS</th>
					<th></th>
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
					<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<input type="hidden" name="addID" id="addID" value="">

							<div class="col-md-3 col-form-label text-default mb-1">Major Category:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off" readonly id="mc" name="mc" placeholder ="Code">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Sub-1 category code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"  id="sccode" name="sccode" placeholder ="Sub-1 category code">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-9">
								<textarea type="text" class="form-control form-control-mb" autocomplete="off"  id="scdesc" name="scdesc" placeholder ="Description"></textarea>
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-9">
								<select  name="status" id="status" class="form-control">
									<option value="A">Active</option> 
									<option value="I">Inactive</option> 
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer bg-secondary">
						<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
						<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
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
						<h5 class="modal-title text-white" ><i class="fa fa-user-o"></i>&nbsp <span id="key"></span></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
					<div class="modal-footer bg-secondary">
						<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		$(document).ready(function(){
			var table = $('#SubCategoryTable').DataTable();
			SubCategoryList();
		});

		function SubCategoryList(){
			var code = '<?php echo $this->uri->segment(3);?>';
			var data = new Object();
			data.id = "SubCategoryTable";
			data.link = "<?php echo site_url('Ref_NonDrugs/SubCategoryList');?>"+code;
			data.type = "POST";
			data.coldef =[{
				targets : [4],
				searchable:false,
				render: function(data,type,row){
					switch(data){
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span> </span>';
					}
				},
			},
			{
				targets : [0],
				visible : false,
			}];		
			loadTable(data);
		}

		$("#SubCategoryTable").on("click",".ModalEditSubCategory",function(){
			var data = $(this).data();
			var obj = getSubCategory(data['key']);

			console.log(obj);
			$('#ModalAddSubCategory').modal('show');
			$("#key").val(obj['cl1comb']);
			$("#scdesc").val(obj['cl1desc']);
			$("#sccode").val(obj['cl1code']);
			$("#status").val(obj['cl1stat']);
			$("#addID").val('update');
			$("#key").prop('readonly',true);
		});

		function AddSubCategory(){
			$('#ModalAddSubCategory').modal('show');
			$("#addID").val('insert');
			$("#key").prop('readonly',false);
		}

		function getSubCategory(key){
			var obj;
			$.ajax({
				type : "POST",
				url : baseURL+"Ref_NonDrugs/getSubCategory",
				data : {
					key: key
				},
				async:false,
				success: function(data,status){ 
					obj = $.parseJSON(data);
				},
				error: function(data,status){
				}
			});
			return obj;
		}

		$("#SubCategoryTable").on("click",".ModalDeleteSubCategory",function(){
			var data = $(this).data();
			console.log(data);
			$('#DeleteSubCategory').modal('show');
			$("#formID").val('delete');
			$("#deletekey").val(data['key']);
		});
</script>
<script src="<?php echo base_url()?>assets/scripts/ref_nondrugs/validation.js"></script>
<script src="<?php echo base_url()?>assets/scripts/ref_nondrugs/delete.js"></script>

