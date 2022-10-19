<style>

table#Diet_list.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class=" w-auto card card-accent-success">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6 col-md-auto	">
				<div class="h3 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp<?php echo $header;?>
				</div>
			</div>

			<div class="col-md-6 col-md-auto">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button onclick="AddDiet()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Diet" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Diet
					</div>
				</div>	
			</div>
		</div>

		<div class="card-body table-responsive">

			<table id="Diet_list" class="table table-sm table-hover  table-bordered table-condensed table-striped" width="100%">
				<thead>
					<tr>
						<th width="80px">Diet code</th>
						<th>Description</th>
						<th>Diet type</th>
						<th width="80px">Status</th>
						<th width="163px">Action</th>
					</tr>
				</thead> 
			</table>	
		</div>
	</div>


	<form name="frmDiet"   id="frmDiet">
		<div class="modal fade" id="ModalAddDiet" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="dietlock" id="dietlock" value="N" />
			<input type="hidden"  name="dietdtmd" id="dietdtmd" value="2002/09/02" />
			<input type="hidden"  name="updsw" id="updsw" value="P" />
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i>&nbsp <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1">Diet Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" name="dietcode" id="dietcode" placeholder="code" maxlength="4"/>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" name="dietdesc" id="dietdesc" placeholder="Description" maxlength="100" />
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Diet Type:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" name="diettype" id="diettype" placeholder="Diet Type" maxlength="1" />
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-9">
								<select name ="dietstat" id ="dietstat" class="form-control">
									<option value="">Status</option>
									<option value="A">Active</option>
									<option value="I">Inactive</option>
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

	<form name="frmDeleteDiet" id="frmDeleteDiet">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeleteDiet" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
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
		$(document).ready(function() {
			DietList();
		});



		function DietList()
		{
			var data = new Object();
			data.id = "Diet_list";
			data.link = "<?php echo site_url('Ref_Diet/diet_list');?>";
			data.type = "POST";
			data.coldef =[
			{	
				targets: [3],
				searchable:false,
				orderable:false,
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'A' : return '<span class="text text-success"><i class="fa fa-check"></i>&nbsp Active</span>'; break;
						case 'I' : return '<span class="text text-danger"><i class="fa fa-remove"></i>&nbsp Inactive</span>'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			];
			loadTable(data);
		}

		$("#Diet_list").on("click",".ModalDeleteDiet",function(){
			var data = $(this).data();
			console.log(data);
			$('#DeleteDiet').modal({ backdrop: 'static'}).draggable({});
			$("#formIdentification").val('delete');
			$("#deletecode").val(data['dietcode']);

		});

		$("#Diet_list").on("click",".ModalEditDiet",function(){
			var data = $(this).data();
			console.log(data);
			$('#ModalAddDiet').modal({ backdrop: 'static'}).draggable({});
			$("#formIden").val('update');
			$("#dietcode").prop('readonly',true);
			$("#dietcode").val(data['dietcode']);
			$("#dietdesc").val(data['dietdesc']);
			$("#diettype").val(data['diettype']);
			$("#dietstat").val(data['dietstat']);
		});
		function AddDiet(){
			$('#ModalAddDiet').modal({ backdrop: 'static'}).draggable({});
			$("#formIden").val('insert');}
		</script>
		<script src="<?php echo base_url()?>assets/scripts/ref_diet/refdiet_validation.js"></script>
		<script src="<?php echo base_url()?>assets/scripts/ref_diet/delete.js"></script>


