<style>

table#FundsourceTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
						&nbsp<?php echo $header;?>
						&nbsp <small><?php echo $subheader;?></small>
					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddFundsource()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Fund Source" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Fund Source
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="FundsourceTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
				<thead>
					<tr class="">
						<th width="50px">Fund Source</th>
						<th>Description</th>
						<th>Status</th>
						<th>Date Modified</th>
						<th width="10%">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmFundsource"   id="frmFundsource">
		<div class="modal fade" id="ModalAddFundsource" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-4 col-form-label text-default mb-1">Code:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="code" name="code" placeholder ="Fund Source Code">
							</div>	
							<div class="col-md-4 col-form-label text-default mb-1">Fundsource Name:</div>
							<div class="col-md-8">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="funddesc" name="funddesc" placeholder ="Fundsource Name">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Date Modified:</div>
							<div class="col-md-8">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="datemod" name="datemod">
							</div>
							<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-8">
								<select name ="status" id ="status" class="form-control">
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
	
	<form name="frmDeleteFundsource" id="frmDeleteFundsource">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeleteFundsource" tabindex="-1" role="dialog">
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
							<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
							<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>	

	<script type="text/javascript">
		$(function()
		{
			FundsourceList();
		});
		
		function FundsourceList()
		{
			var data = new Object();
			data.id = "FundsourceTable";
			data.link = "<?php echo site_url('Ref_Fundsource/FundsourceList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : 3,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			{
				targets : 2,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			}
			];
			loadTable(data);
		}

		$("#FundsourceTable").on("click",".ModalDeleteFundsource",function(){
			var data = $(this).data();
			var fundcode = atob(data['fundcode']);
			$('#DeleteFundsource').modal({ backdrop: 'static' }).draggable();
			$("#formIdentification").val('delete');
			$("#deletecode").val(fundcode);

		});

		$("#FundsourceTable").on("click",".ModalEditFundsource",function(){
			var data = $(this).data();
			var fundcode = atob(data['fundcode']);
			var funddesc = atob(data['funddesc']);

			$('#ModalAddFundsource').modal({ backdrop: 'static' }).draggable();
			$("#formIden").val('update');

			var obj = getFundsource(fundcode);

			$("#code").val(fundcode);
			$("#funddesc").val(funddesc);
			$("#status").val( obj['fundstat']);

			var dates = obj['datemod'];
			var finaldate = ((dates == "1970-01-01 00:00:00") || (dates == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dates);
			$("#datemod").val(finaldate);
		});

		function AddFundsource(){
			$('#ModalAddFundsource').modal({ backdrop: 'static' }).draggable();
			$("#formIden").val('insert');
			$("#datemod").val(getTimeLocale());
		}


		function getFundsource(fundcode){
			var fundcode = encodeURIComponent(encodeURIComponent(fundcode));
			$.ajax({
				type: "POST",
				url: baseURL+"Ref_Fundsource/getFundsource/"+ fundcode ,
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
	<script src="<?php echo base_url()?>assets/scripts/ref_fundsource/ref_fundsource_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_fundsource/delete.js"></script>
