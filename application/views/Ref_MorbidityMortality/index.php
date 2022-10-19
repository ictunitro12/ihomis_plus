<style>

table#MorbidMortal_list.dataTable tbody tr:hover {
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
					<button onclick="AddMorbidMortal()"  class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Morbid and Mortal" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Morbid and Mortal
						</button>
					</div>
				</div>	
			</div>
		</div>

		<div class="card-body table-responsive">
			<table id="MorbidMortal_list" class="table table-sm table-hover  table-bordered table-condensed table-striped" width="100%">
				<thead>
					<tr class="">
						<th width="80px">Code</th>
						<th>Description</th>
						<th>Status</th>
						<th width="80px">Action</th>
					</tr>
				</thead> 
			</table>	
		</div>
	</div>

	<form name="frmMorbidMortal"   id="frmMorbidMortal">
		<div class="modal fade" id="ModalAddMorbidMortal" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="diaglock" id="diaglock" />
			<input type="hidden"  name="datemod" id="datemod" value="<?php echo date('Y-m-d H:i:s') ?>" />
			<input type="hidden"  name="updsw" id="updsw" />
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
							<div class="col-md-6 col-form-label text-default mb-1">CODE:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="diagrp_code" id="diagrp_code" placeholder="CODE" />
							</div>	
							<div class="col-md-6 col-form-label text-default mb-1">DESCRIPTION:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="diagrp_desc" id="diagrp_desc" placeholder="Description" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">STATUS:</div>
							<div class="col-md-6">
								<select name ="diagstat" id ="diagstat" class="form-control">
									<option value="">Status</option>
									<option value="A">Active</option>
									<option value="I">Inactive</option>
								</select>
							</div>		
						</div>
					</div>
					<div class="modal-footer ">
						<div class="btn-group float-right">
							<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form name="frmDeleteMorbidMortal" id="frmDeleteMorbidMortal">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeleteMorbidMortal" tabindex="-1" role="dialog">
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
					<div class="modal-footer ">
						<div class="btn-group float-right">
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_morbidmortal/refmorbidmortal_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_morbidmortal/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_morbidmortal/morbidmortal.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			MorbidMortalList();
			initmorbidmortal();
			initmorbidmortalEdit();
		});



		function MorbidMortalList()
		{
			var data = new Object();
			data.id = "MorbidMortal_list";
			data.link = "<?php echo site_url('Ref_MorbidityMortality/MorbidMortal_list');?>";
			data.type = "POST";
			data.coldef =[
			{	
				targets: [2],
				searchable:false,
				orderable:false,
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			];
			loadTable(data);
		}

		$("#MorbidMortal_list").on("click",".ModalDeleteMorbidMortal",function(){
			var data = $(this).data();
			$('#DeleteMorbidMortal').modal({ backdrop: 'static' }).draggable();
			$("#formIdentification").val('delete');
			$("#deletecode").val(data['diagrp_code']);

		});

		$("#MorbidMortal_list").on("click",".ModalEditMorbidMortal",function(){
			var data = $(this).data();
			var obj = getmorbidmortaldata(data['diagrp_code']);
			$('#ModalAddMorbidMortal').modal({backdrop:'static'}).draggable({});
			$("#formIden").val('update');
			$("#diagrp_code").prop('readonly', true);

			$("#diagrp_code").val(obj['diagrp_code']);
			$("#diagrp_desc").val(obj['diagrp_desc']);
			$("#diagstat").val(obj['diagstat']);

			$("#datemod").val(obj['datemod']);

		});
		function AddMorbidMortal(){
			$('#ModalAddMorbidMortal').modal({ backdrop: 'static' }).draggable();
			$("#formIden").val('insert');
			$("#diagrp_code").prop('readonly', false);

		}

		function getmorbidmortaldata(diagrp_code){
			var diagrp_code = encodeURIComponent(encodeURIComponent(diagrp_code));
			$.ajax({
				type: "POST",
				url: baseURL+"Ref_MorbidityMortality/getMorbidMortalData/"+diagrp_code,
				data: "JSON",
				async:false,
				success: function(data,status){ 
					obj = $.parseJSON(data);
				},
				error: function(data,status){
				}
			});
			return obj;
		}
	</script>