<style>

table#TemplateTable.dataTable tbody tr:hover {
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
				<button onclick="AddTemplate()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i>
					</button>
				</div>
				</div>	
			</div>	
		</div>
		<div class="card-body table-responsive">
		<table id="TemplateTable"  class="table table-sm table-striped  table-bordered table-condensedtable-hover" width="100%">
			<thead>
				<tr class="thead-dark">
					<th width="50px">Code</th>
					<th>Description</th>
					<th>Text</th>
					<th width="50px"></th>
				</tr>
			</thead>
		</table>
		</div>
	</div>
	
	
	<form name="frmTemplate"   id="frmTemplate">
	<div class="modal fade" id="ModalAddTemplate" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
	<div class="modal-dialog modal-dialog-centered " role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $subheader;?></h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
		<div class="row">	
			<div class="col-md-3 col-form-label text-default mb-1">Code:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off"  id="code" name="code" placeholder ="Code">
				</div>	
			<div class="col-md-3 col-form-label text-default mb-1"> Description:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="name" name="name" placeholder ="Description">
				</div>
			<div class="col-md-3 col-form-label text-default mb-1"> Text:</div>
				<div class="col-md-9">
					<input type="text" class="form-control form-control-mb" autocomplete="off"   id="temp_text" name="temp_text" placeholder ="Text">
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
	</form>
	
<form name="frmDeleteTemplate" id="frmDeleteTemplate">
	<input type="hidden" name="formIdentification" id="formIdentification">
	<input type="hidden" name="deletecode" id="deletecode">
	

	<div class="modal fade" id="DeleteTemplate" tabindex="-1" role="dialog">
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
				<div class="modal-footer bg-secondary">
					<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
				</div>
			</div>
		</div>
	</div>
</form>	


	<script type="text/javascript">
		$(function()
		{
			TemplateList();
		});
		
		function TemplateList()
		{
			var data = new Object();
				data.id = "TemplateTable";
				data.link = "<?php echo site_url('Ref_Template/TemplateList');?>";
				data.type = "POST";
			loadTable(data);
		}
	
		$("#TemplateTable").on("click",".ModalDeleteTemplate",function(){
		var data = $(this).data();
		$('#DeleteTemplate').modal('show');
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['tempcode']);

	});

		$("#TemplateTable").on("click",".ModalEditTemplate",function(){
		var data = $(this).data();

		$('#ModalAddTemplate').modal('show');
		$("#formIden").val('update');

		console.log(data);
		$("#code").val(data['tempcode']);
		$("#name").val(data['tempdesc']);
		$("#temp_text").val(data['temptext']);


	});

		function AddTemplate(){
		$('#ModalAddTemplate').modal('show');
		$("#formIden").val('insert');

		}

	</script>
	<script src="<?php echo base_url()?>assets/scripts/ref_template/ref_template_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/ref_template/delete.js"></script>
