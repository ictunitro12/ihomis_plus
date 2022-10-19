<style>

table#BedAccomTable.dataTable tbody tr:hover {
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
					</div>
				</div>
				
				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button onclick="AddBedAccom()"  class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Bed Accommodation" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Bed Accommodation
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="BedAccomTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
				<thead>
					<tr class="">
						<th>DATE</th>
						<th>Bed Accommodation Code</th>
						<th>Description</th>
						<th>Room Rate</th>
						<th>Currency code</th>
						<th>Unit of Measure</th>
						<th>Room Rate as of</th>
						<th>With Pay</th>
						<th>Status</th>
						<th>unitmeasurecode</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmBedAccom"   id="frmBedAccom" role="form">
		<div class="modal fade" id="ModalAddBedAccom"  role="form">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="intkey" id="intkey" onchange="intrmkey();">
			<div class="modal-dialog modal-dialog-centered " role="dialog" role="form">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1">Bed Accomodation Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off" onchange="intrmkey();"  id="code" name="code" placeholder ="Code" maxlength="5">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Description" maxlength="20">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Room Rate:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="rmrate" name="rmrate" placeholder ="Room Rate">

							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Currency:</div>
							<div class="col-md-9">
								<select name ="currency" id ="currency" class="form-control">
									<option value="">Currency</option>
									<option value="PESO">Peso</option>
									<option value="YEN">Yen</option>
									<option value="DOLLA">Dollar</option>
									<option value="OTHER">Others</option>
								</select>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Unit of Measure:</div>
							<div class="col-md-9">
								<select name ="selUnitMeasure" id ="selUnitMeasure" class="form-control">
								</select>
							</div>		
							<div class="col-md-3 col-form-label text-default mb-1">Room Rate as of:</div>
							<div class="col-md-9">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" onchange="intrmkey();" id="rmasof" name="rmasof" >
							</div>		
							<div class="col-md-3 col-form-label text-default mb-1">With Pay:</div>
							<div class="col-md-9">
								<select name ="wpay" id ="wpay" class="form-control">
									<option value="">With Pay</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
							</div>													
							<div class="col-md-3 col-form-label text-default mb-1">Status:</div>
							<div class="col-md-9">
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
	
	<form name="frmDeleteBedAccom" id="frmDeleteBedAccom" role="form">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeleteBedAccom"  role="form">
			<div class="modal-dialog modal-dialog-centered modal-md"  role="form">
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
	<script src="<?php echo base_url()?>assets/scripts/ref_bedaccom/ref_bedaccom_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_bedaccom/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>

	<script type="text/javascript">
		$(function()
		{
			BedAccomList();
			var rmacccod = encodeURIComponent(encodeURIComponent(rmacccod));
			var rmaccdesc = encodeURIComponent(encodeURIComponent(rmaccdesc));

		});
		
		function BedAccomList()
		{
			var data = new Object();
			data.id = "BedAccomTable";
			data.link = "<?php echo site_url('Ref_BedAccom/BedAccomList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : [1,2,3,4,5,6,7,8,9],
				orderable:false,
			},

			{
				targets : 4,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'PESO' : return 'Peso'; break;
						case 'YEN' : return 'Yen'; break;
						case 'DOLLA' : return 'Dollar'; break;
						case 'OTHER' : return 'Others'; break;
						default  : return ' ';
					}
				},
			},		
			{
				targets : 7,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'Y' : return 'Yes'; break;
						case 'N' : return 'No'; break;
						default  : return ' ';
					}
				},
			},		
			{
				targets : 8,
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
				targets: [0,9],
				visible:false,
				searchable:true,
			},

			];
			loadTable(data);
		}

		
	</script>
	
