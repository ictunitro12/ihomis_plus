<style>

table#BranchTable.dataTable tbody tr:hover {
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
					<button onclick="Back()" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-arrow-left  fa-sm"> </i> Previous Level
					</button>	
					<button onclick="AddBranch()" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i> Add Branch
					</button>
				</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
		<table id="BranchTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="">
					<th>bnkcode</th>
					<th>brintkey</th>
					<th>Bank Name</th>
					<th>Branch Code</th>
					<th>Branch Name</th>
					<th>Status</th>
					<th width="8%">Actions</th>
				</tr>
			</thead>
		</table>
		</div>
	</div>
	
	
	<form name="frmBranch"   id="frmBranch">
	<div class="modal fade" id="ModalAddBranch" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
		<input type="hidden" name="brint" id="brint" onchange="intkey();" value="">
		<input type="hidden" name="bnkcode" id="bnkcode" onchange ="intkey();">
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
			<div class="col-md-3 col-form-label text-default mb-1">Bank Name:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off" readonly=""  id="name" name="name" placeholder ="Bank Name">
				</div>	
			<div class="col-md-3 col-form-label text-default mb-1">Branch Code:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off" onchange ="intkey();"  id="br_code" name="br_code" placeholder ="Branch Code" maxlength="5">
				</div>
			<div class="col-md-3 col-form-label text-default mb-1">Branch Name:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="br_name" name="br_name" placeholder ="Branch Name" maxlength="100">
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
	
<form name="frmDeleteBranch" id="frmDeleteBranch">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	

	<div class="modal fade" id="DeleteBranch" tabindex="-1" role="dialog">
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
	<input type="hidden" name="bnkcode" id="bnkcode">


	<script type="text/javascript">
		$(function()
		{
			BranchList();
			var bankcode = atob('<?php echo $this->uri->segment(3);?>');
			var bankname = atob('<?php echo $this->uri->segment(4);?>');
			$("#bnkcode").val(bankcode);
			$("#name").val(bankname);
		});
		
		function BranchList()
		{
			var bankcode = atob('<?php echo $this->uri->segment(3);?>');

			var data = new Object();
				data.id = "BranchTable";
				data.link = "<?php echo site_url('Ref_Bank/BranchList/');?>" + bankcode;
				data.type = "POST";
				data.coldef=[
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
			{
				targets : [0,1],
				searchable:false,
				visible:false,
			},
			{
				targets : [1,2,3,4,5,6],
				orderable:false,
			},

			];
			loadTable(data);
		}

		function intkey()
		{
			$('#brint').val($('#bnkcode').val()+$('#br_code').val());	
		}	

	
		$("#BranchTable").on("click",".ModalDeleteBranch",function(){
		var data = $(this).data();
		console.log(data);
		$('#DeleteBranch').modal({ backdrop: 'static'}).draggable({});
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['brintkey']);

	});

		$("#BranchTable").on("click",".ModalEditBranch",function(){
		var data = $(this).data();
		console.log(data);
		$('#ModalAddBranch').modal({ backdrop: 'static'}).draggable({});
		$("#formIden").val('update');
		$("#br_code").prop('readonly',true);
		$("#bnkcode").prop('readonly',true);
	
		var bankcode = atob('<?php echo $this->uri->segment(3);?>');
		var bankname = atob('<?php echo $this->uri->segment(4);?>');
		$("#bnkcode").val(bankcode);
		$("#name").val(bankname);
		$("#br_code").val(data['bnkbrcode']);
		$("#br_name").val(data['brchname']);
		$("#status").val(data['bnkstat']);
	});

		function AddBranch(){
		$('#ModalAddBranch').modal({ backdrop: 'static'}).draggable({});
		$("#formIden").val('insert'); 
			var bankcode = atob('<?php echo $this->uri->segment(3);?>');
			var bankname = atob('<?php echo $this->uri->segment(4);?>');
			$("#bnkcode").val(bankcode);
			$("#name").val(bankname);
			$("#br_code").prop('readonly',false);
			$("#bnkcode").prop('readonly',false);	
		}

		function Back(){
			window.location.href =baseURL+"Ref_Bank";
		}

		
	
		function getBranch(bnkbrcode){
        var obj;
        $.ajax({
            type: "POST",
            url: baseURL+"Ref_Bank/editBranch",
            data: { bnkbrcode: bnkbrcode},
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
	<script src="<?php echo base_url()?>assets/scripts/ref_branch/ref_branch_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_branch/delete.js"></script>

