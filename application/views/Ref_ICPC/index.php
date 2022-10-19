<style>

table#Icpc_list.dataTable tbody tr:hover {
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
					<button onclick="AddIcpc()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add ICPC" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add ICPC
					</div>
				</div>	
			</div>
		</div>
		
		<div class="card-body table-responsive">
			<table id="Icpc_list" class="table table-sm table-hover  table-bordered table-condensed table-striped" width="100%">
				<thead>
					<tr class="">
						<th width="80px">Reason</th>
						<th>Description</th>
						<th>Search key</th>
						<th>Status</th>
						<th width="80px">Action</th>
					</tr>
				</thead> 
			</table>	
		</div>
	</div>

	<form name="frmIcpc"   id="frmIcpc">
		<div class="modal fade" id="ModalAddIcpc" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="hmolock" id="hmolock" value="N" />
			<input type="hidden"  name="hmodtmd" id="hmodtmd" value="<?php date('Y-m-d'); ?>" />
			<input type="hidden"  name="hmoupsw" id="hmoupsw" value="P" />
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
							<div class="col-md-6 col-form-label text-default mb-1">REASON:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="encreason" id="encreason" placeholder="Reason" />
							</div>	
							<div class="col-md-6 col-form-label text-default mb-1">DESCRIPTION:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="icpc_desc" id="icpc_desc" placeholder="Description" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">SEARCH KEY:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="searchkey" id="searchkey" placeholder="Search Key" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">STATUS:</div>
							<div class="col-md-6">
								<select name ="icpcstat" id ="icpcstat" class="form-control">
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

	<form name="frmDeleteIcpc" id="frmDeleteIcpc">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteIcpc" tabindex="-1" role="dialog">
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
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_icpc/reficpc_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_icpc/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_icpc/icpc.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			IcpcList();
			initicpc();
			initicpcEdit();
		});
		
		
		
		function IcpcList()
		{
			var data = new Object();
			data.id = "Icpc_list";
			data.link = "<?php echo site_url('Ref_ICPC/ICPC_list');?>";
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
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			];
			loadTable(data);
		}

		
		</script>