<style>

table#TransfeeTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style> 
<div class="card card-accent-success">

		<div class="card-header">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
						<i class="fa fa-users"></i>
							&nbsp  <?php echo $header;?> <small><?php echo $subheader;?></small>
					</div>
				</div>
				<div class="col-md-6">
					<div class="btn-group pull-right" role="group" aria-label=""> 
	 					<a href="javascript:void(0);" class="btn btn-success ModalAddTransfee" ><i class="fa fa-plus"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="card-body table-responsive">
					<table id="TransfeeTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
						<thead>
						<tr class="thead-dark">
							<th>DATE AS OF</th>
							<th></th>
							<th>RATE</th>
							<th>CURRENCY</th>
							<th>STATUS</th>
							<th width="50px"> </th>
						</tr>
						</thead>
					</table>
		</div>

<div class="card-footer"></div>
</div>

	<form id="frmAddTransfee">
	<div class="modal" id="AddTransfee" name="AddTransfee"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">	
				
<div class="modal-dialog modal-dialog-centered " role="form">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $header;?></h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
				<div class="modal-body border-success">

						<input type="hidden" name="AddIden" id="AddIden" value="">

					<div class="form-row">
						<label class="col-md-3 col-form-label text-default mb-1">Date as of:</label>
						<div class="col-md-9">
							<input type="datetime-local" class="form-control form-control-mg"  name ="dateasof" id="dateasof" autocomplete="off" />
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Rate:</label>
						<div class="col-md-9">
							<input type="number"  class="form-control form-control-mb" autocomplete="off" id="rate" name="rate"  placeholder = "0.00" value="">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Currency:</label>
						<div class="col-md-9">
							<select  name="currency" id="currency" class="form-control form-control-mb" value="">
								<option value="">Select</option> 
								<option value="PESO">Peso</option> 
								<option value="YEN">Yen</option> 
								<option value="DOLLA">Dollar</option> 
								<option value="OTHE">Others</option> 
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
			<div class="modal-footer bg-secondary">
				<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
				<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
			</div>
			</div>
		</div>
	</div>
</div>
</form>

<form name="frmDeleteTransfee" id="frmDeleteTransfee">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletedateasof" id="deletedateasof">
	<input type="hidden" name="deleterate" id="deleterate">
	<input type="hidden" name="curcode" id="curcode">
	

	<div class="modal fade" id="DeleteTransfee" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white" ><i class="fa fa-user-o"></i>&nbsp <span id="dateasof"></span></h5>
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
	$(document).ready(function()
	{
		TransfeeList();
    });


	function TransfeeList()
	{
	var data = new Object();
	data.id = "TransfeeTable";
	data.link = "<?php echo site_url('Ref_Transfee/TransfeeList');?>";
	data.type = "POST";
	data.coldef =[
	{
				targets : 4,
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
				targets: [1],
				visible:false,
				orderable:false,
			},
	{
		

	targets : 3,
	searchable:false,
	render: function ( data, type, row ) 
	{
	switch(data) 
	{
	case 'PESO' : return '<span>Peso</span>'; break;
	case 'YEN' : return '<span>Yen</span>'; break;
	case 'DOLLA' : return '<span>Dollar</span>'; break;
	case 'OTHE' : return '<span>Other</span>'; break;
	default  : return '<span> </span>';
	}
	},
	},

	];
	loadTable(data);
	}

	$(".ModalAddTransfee").on('click',function(){
		$('#AddTransfee').modal('show');
		$("#AddIden").val('insert');
		$('#dateasof').val(getTimeLocale());

	});

	$("#TransfeeTable").on("click",".ModalEditTransfee",function(){
		var data = $(this).data();
		console.log(data);
		$('#AddTransfee').modal('show');

		console.log(data['tfdteas']);
		var dateasof = setTimeLocale(data['tfdteas']);

		$("#rate").val(data['rate']);
		$("#currency").val(data['code']);
		$("#dateasof").val(dateasof);
		$("#status").val(data['tfstat']);

		$("#AddIden").val('update');

	});

	$("#TransfeeTable").on("click",".ModalDeleteTransfee",function(){
		var data = $(this).data();
		console.log(data);
		$('#DeleteTransfee').modal('show');
		$("#formIdentification").val('delete');

		$("#deletedateasof").val(data['tfdteas']);
		$("#deleterate").val(data['rate']);
		$("#curcode").val(data['code']);


	});

	
</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_transfee/validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_transfee/delete.js"></script>

