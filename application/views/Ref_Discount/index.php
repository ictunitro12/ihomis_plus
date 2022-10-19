<style>

table#DiscountTable.dataTable tbody tr:hover {
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
						<button onclick="AddDiscount()" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in" data-original-title="Add Discount" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add Discount
						</button>
					</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
			<table id="DiscountTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
				<thead>
					<tr class="">
						<th width="50px">Code</th>
						<th>Description</th>
						<th>Discount Type</th>
						<th>Discount Amount</th>
						<th>Currency</th>
						<th>Unit of Measure</th>
						<th>Date as of</th>
						<th>Date </th>
						<th>Status</th>
						<th>unitmeasurecode</th>
						<th width="50px">Actions</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
	
	<form name="frmDiscount"   id="frmDiscount">
		<div class="modal fade" id="ModalAddDiscount"  role="form">
			<input type="hidden" name="formIden" id="formIden">
			<input type="hidden" name="intkey" id="intkey" onchange="intdisckey();">
			<div class="modal-dialog modal-dialog-centered " role="form">
				<div class="modal-content">
					<div class="modal-header bg-success">
						<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">	
							<div class="col-md-3 col-form-label text-default mb-1">Discount Code:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off" onchange="intdisckey();"  id="code" name="code" placeholder ="Code" readonly=""maxlength="5">
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Description:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Description" maxlength="30">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Discount Type:</div>
							<div class="col-md-9">
								<select name ="discountype" id ="discountype" class="form-control">
									<option value="">Discount Type</option>
									<option value="P">Percent</option>
									<option value="A">Amount</option>
								</select>
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Discount Amount:</div>
							<div class="col-md-9">
								<input type="number" class="form-control form-control-mb" autocomplete="off"   id="amt" name="amt" placeholder ="Disount Amount">
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
							<div class="col-md-3 col-form-label text-default mb-1">Date as of:</div>
							<div class="col-md-9">
								<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   onchange="intdisckey();" id="dteasof" name="dteasof" >
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
	
	<form name="frmDeleteDiscount" id="frmDeleteDiscount">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">
		

		<div class="modal fade" id="DeleteDiscount"  role="form">
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
	<script src="<?php echo base_url()?>assets/scripts/ref_discount/ref_discount_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_discount/delete.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>

	<script type="text/javascript">
		$(function()
		{
			DiscountList();
			var disccode = encodeURIComponent(encodeURIComponent(disccode));
			var discdesc = encodeURIComponent(encodeURIComponent(discdesc));

		});
		
		function DiscountList()
		{
			var data = new Object();
			data.id = "DiscountTable";
			data.link = "<?php echo site_url('Ref_Discount/DiscountList');?>";
			data.type = "POST";
			data.coldef=[
			{
				targets : 2,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'P' : return 'Percent'; break;
						case 'A' : return 'Amount'; break;
						default  : return ' ';
					}
				},
			},
			{
				targets : [0,1,2,3,4,5,6,7,8,9,10],
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
				targets: [1,2,3,4,5,6,7,8,9,10],
				orderable:false,
			},
			{
				targets: [7,9],
				visible:false,
				searchable:true,
			},
			
			];
			loadTable(data);
		}
		
		
	</script>
	
