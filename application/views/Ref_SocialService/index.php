<style>

table#SocialService_list.dataTable tbody tr:hover {
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
					<button onclick="AddSocialService()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Social Service " data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Social Service 
					</div>
				</div>	
			</div>
		</div>
		
		<div class="card-body table-responsive">
			<table id="SocialService_list" class="table table-sm table-hover  table-bordered table-condensed table-striped">
				<thead>
					<tr class="">
						<th width="80px">Code</th>
						<th>Description</th>
						<th>Discount</th>
						<th>Percent or Amount</th>
						<th>Currency Code</th>
						<th>Date as of</th>
						<th>Status</th>
						<th width="80px">Action</th>
					</tr>
				</thead> 
			</table>	
		</div>
	</div>

	<form name="frmSocialService"   id="frmSocialService">
		<div class="modal fade" id="ModalAddSocialService" tabindex="-1" role="dialog">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="msslock" id="msslock" value="N" />
			<input type="hidden"  name="datemod" id="datemod" value="<?php echo date('Y-m-d H:i:s') ?>" />
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
							<div class="col-md-6 col-form-label text-default mb-1">CODE:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="msscode" id="msscode" placeholder="CODE" />
							</div>	
							<div class="col-md-6 col-form-label text-default mb-1">DESCRIPTION:</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="mssdesc" id="mssdesc" placeholder="Discription" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">DISCOUNT:</div>
							<div class="col-md-6">
								<input type="number" min="00.00" step="00.01"  class="form-control" name="mssa" id="mssa" hidden/>
								<input type="number" class="form-control" name="mssam" id="mssam" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">PERCENT OR AMOUNT:</div>
							<div class="col-md-6">
								<select class="form-control" name="hmssatyp" id="hmssatyp">
									<option value="P">Percent</option>
									<option value="A">Amount</option>
								</select>
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">CURRENCY CODE:</div>
							<div class="col-md-6">
								<select class="form-control" name="currcode" id="currcode">
									<option value="PESO">PESO</option>
									<option value="DOLLA">DOLLAR</option>
									<option value="YEN">YEN</option>
									<option value="OTHER">OTHERS</option>
								</select>
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">DATE AS OF:</div>
							<div class="col-md-6">
								<input type="datetime-local" class="form-control" name="mssdteas" id="mssdteas" placeholder="" />
							</div>
							<div class="col-md-6 col-form-label text-default mb-1">STATUS:</div>
							<div class="col-md-6">
								<select name ="mssstat" id ="mssstat" class="form-control">
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

	<form name="frmDeleteSocialService" id="frmDeleteSocialService">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteSocialService" tabindex="-1" role="dialog">
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
	<script src="<?php echo base_url()?>assets/scripts/ref_socialservice/refsocialservice_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_socialservice/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_socialservice/socialservice.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			SocialServiceList();
			initsocialserv();
			initsocialservEdit();
		});
		
		
		
		function SocialServiceList()
		{
			var data = new Object();
			data.id = "SocialService_list";
			data.link = "<?php echo site_url('Ref_SocialService/SocialServi_list');?>";
			data.type = "POST";
			data.coldef =[
			{	
				targets: [6],
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
			{	
				targets: [3],
				searchable:false,
				orderable:false,
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'A' : return 'Amount'; break;
						case 'P' : return 'Percent'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},

			},
			{
				targets:[2],
				searchable:false,
			}
			];
			loadTable(data);
		
		}

		$("#SocialService_list").on("click",".ModalDeleteSocialService",function(){
			var data = $(this).data();
			console.log(data);
			$('#DeleteSocialService').modal({backdrop:'show'}).draggable();
			$("#formIdentification").val('delete');
			$("#deletecode").val(data['msscode']);

		});

		$("#SocialService_list").on("click",".ModalEditSocialService",function(){
			var data = $(this).data();
			var obj = getSocialServicedata(data['msscode']);
			console.log(obj);
			$('#ModalAddSocialService').modal({backdrop:'static'}).draggable({});
			$("#formIden").val('update');
			$("#msscode").prop('readonly', true);
			$("#msscode").val(obj['msscode']);
			$("#mssdesc").val(obj['mssdesc']);
			$("#mssa").val(obj['mssamt']);
			$("#mssam").val(obj['mssamt']);
			$("#hmssatyp option[value='" + obj['hmssatyp']+"']").prop("selected",true);
			$("#currcode option[value='" + obj['currcode']+"']").prop("selected",true);
			
			var dateasof = setTimeLocale(obj['mssdteas']);
			$("#mssdteas").val(dateasof);

			$("#mssstat option[value='" + obj['mssstat']+"']").prop("selected",true);
			$("#datemod").val(obj['datemod']);

		});
		function AddSocialService(){
			$('#ModalAddSocialService').modal({backdrop:'show'}).draggable();
			$("#formIden").val('insert');
			$("#msscode").prop('readonly', false);
			$("#currcode option[value='PESO']").prop("selected",true);
			$('#mssstat option[value="A"]').prop("selected",true);
			$('#hmssatyp option[value="P"]').prop("selected",true);
			$('#hmssatyp').change(function() {
        		if( $(this).val() == 'A') {
				$('#mssa').prop("hidden", false );
				$('#mssam').prop('hidden',true);
				} else {       
				$('#mssam').prop("hidden", false );
				$('#mssa').prop("hidden", true );
				}
			});

		}

		function getSocialServicedata(msscode){
			var msscode = encodeURIComponent(encodeURIComponent(msscode));
			$.ajax({
				type: "POST",
				url: baseURL+"Ref_SocialService/getSocialservData/"+msscode,
				data: "JSON",
				async:false,
				success: function(data,status){ 
					obj = $.parseJSON(data);
					console.log(obj);
					
				},
				error: function(data,status){
				}
			});
			return obj;
		}
	</script>