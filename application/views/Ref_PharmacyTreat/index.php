<style>

table#PharmacyTreatTable.dataTable tbody tr:hover {
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
						<button onclick="AddPharmacyTreat()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Pharmacy Treat" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Pharmacy Treat
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="PharmacyTreatTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
				<thead>
					<tr class="">
						<th>Route of Administration</th>
						<th>hbcode</th>
						<th>Body Site from which the specimen was obtained</th>
						<th>Administrative Device</th>
						<th>Administration Method</th>
						<th>Status</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmPharmacyTreat"   id="frmPharmacyTreat">
		<div class="modal fade" id="ModalAddPharmacyTreat" role="form">
			<input type="hidden" name="formIden" id="formIden">
			<div class="modal-dialog modal-dialog-centered " role="form">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $header;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-4 col-form-label text-default mb-1">Route of Administration:</div>
							<div class="col-md-8">
								<select name ="code" id ="code" class="form-control" >
									<option value="">Route of Administration</option>
									<option value="AP">Applicator</option>
									<option value="IVS">IV Soluset</option>
									<option value="BT">Buretrol</option>
									<option value="MI">Metered inhaler</option>
									<option value="HL">Heparin Lock</option>
									<option value="NEB">Nebulizer</option>
									<option value="IPPB">IPPB</option>
									<option value="PCA">PCA pump</option>
									<option value="IVP">IV pump</option>
								</select>
							</div>		
							<div class="col-md-4 col-form-label text-default mb-1">Body Site From Which the Specimen was obtained:</div>
							<div class="col-md-8">
								<select name ="selBodySite" id ="selBodySite" class="form-control">
								</select>
							</div>		
							<div class="col-md-4 col-form-label text-default mb-1">Administrative Device:</div>
							<div class="col-md-8">
								<select name ="addevice" id ="addevice" class="form-control">
									<option value="">Administrative Device</option>
									<option value="AP">Applicator</option>
									<option value="IVS">IV Soluset</option>
									<option value="BT">Buretrol</option>
									<option value="MI">Metered inhaler</option>
									<option value="HL">Heparin Lock</option>
									<option value="NEB">Nebulizer</option>
									<option value="IPPB">IPPB</option>
									<option value="PCA">PCA pump</option>
									<option value="IVP">IV pump</option>
								</select>
							</div>			
							<div class="col-md-4 col-form-label text-default mb-1">Administration Method:</div>
							<div class="col-md-8">
								<select name ="admeth" id ="admeth" class="form-control">
									<option value="">Administrative Method</option>
									<option value="CH">Chew</option>
									<option value="NB">Nebulized</option>
									<option value="DI">Dissolve</option>
									<option value="PT">Pain</option>
									<option value="DU">Dust</option>
									<option value="PF">Perfuse</option>
									<option value="IF">Infiltrate</option>
									<option value="SH">Shampoo</option>
									<option value="IS">Insert</option>
									<option value="SO">Soak</option>
									<option value="IR">Irrigate</option>
									<option value="WA">Wash</option>
									<option value="IVPB">IV piggyback</option>
									<option value="WI">Wipe</option>
									<option value="IVP">IV push</option>
								</select>
							</div>	
							<div class="col-md-4 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-8">
								<select name ="status" id ="status" class="form-control">
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
	
	<form name="frmDeletePharmacyTreat" id="frmDeletePharmacyTreat">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeletePharmacyTreat"  role="form">
			<div class="modal-dialog modal-dialog-centered modal-md" role="form">
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
		$(function()
		{
			PharmacyTreatList();
		});
		
		function PharmacyTreatList()
		{
			var data = new Object();
			data.id = "PharmacyTreatTable";
			data.link = "<?php echo site_url('Ref_PharmacyTreat/PharmacyTreatList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : 1,
				searchable:false,
				visible:false,
				
			},
			{
				targets : [1,2,3,4,5,6],
				orderable:false,
				
			},
			{
				targets : [0,3],
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'AP' : return 'Applicator'; break;
						case 'IVS' : return 'IV Soluset'; break;
						case 'BT' : return 'Buretrol'; break;
						case 'MI' : return 'Metered inhaler'; break;
						case 'HL' : return 'Heparin Lock'; break;
						case 'NEB' : return 'Nebulizer'; break;
						case 'IPPB' : return 'IPPB'; break;
						case 'PCA' : return 'PCA pump'; break;
						case 'IVP' : return 'IV pump'; break;
						default  : return ' ';
					}
				},
			},
			{
				targets : 4,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'CH' : return 'Chew'; break;
						case 'NB' : return 'Nebulized'; break;
						case 'DI' : return 'Dissolve'; break;
						case 'PT' : return 'Pain'; break;
						case 'DU' : return 'Dust'; break;
						case 'PF' : return 'Perfuse'; break;
						case 'IF' : return 'Infiltrate'; break;
						case 'SH' : return 'Shampoo'; break;
						case 'IS' : return 'Insert'; break;
						case 'SO' : return 'Soak'; break;
						case 'IR' : return 'Irrigate'; break;
						case 'WA' : return 'Wash'; break;
						case 'IVPB' : return 'IV piggyback'; break;
						case 'WI' : return 'Wipe'; break;
						case 'IVP' : return 'IV push'; break;
						default  : return ' ';
					}
				},
			},

			{
				targets : 5,
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


			];
			loadTable(data);
		}



	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_PharmacyTreat/ref_PharmacyTreat_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_PharmacyTreat/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>
